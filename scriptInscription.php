<?php

include('scriptBDD.php');

    // Récupération des données utilisateurs
        $Adresse_email = isset($_POST['Adresse_email']) ? $_POST['Adresse_email']: NULL;
        $Mot_de_passe = isset($_POST['Mot_de_passe']) ? $_POST['Mot_de_passe']: NULL;
        $Nom = isset($_POST['Nom']) ? $_POST['Nom']: NULL;
        $Numero_tel = isset($_POST['Numero_tel']) ? $_POST['Numero_tel']: NULL;


    // Requête préparée pour empêcher les injections SQL
        $requete = $bdd->prepare("SELECT * FROM utilisateur WHERE Adresse_email = :Adresse_email");
    // Liaison des variables de la requête préparée aux variables PHP
        $requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);

        $requete->execute();

if($requete->fetch())
{
    // Fermeture de la connexion 
    echo "Utilsateur existe déjà" ;
}

else   
{
    if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}$#', $Mot_de_passe)){
        $requete = $bdd->prepare("INSERT INTO utilisateur (Nom, Adresse_email, Mot_de_passe, Numero_tel) VALUES ( :Nom, :Adresse_email, :Mot_de_passe, :Numero_tel)");
     // Liaison des variables de la requête préparée aux variables PHP 
        $requete->bindValue(':Nom', $Nom, PDO::PARAM_STR); 
        $requete->bindValue(':Numero_tel', $Numero_tel, PDO::PARAM_STR);
        $requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);
        $requete->bindValue(':Mot_de_passe', $Mot_de_passe, PDO::PARAM_STR);
    // Exécution de la requête 
        $requete->execute();
        header('Location: pageIndex.php');
        exit();
    }
    else {
        echo 'Mot de passe non conforme';
    }   
}
?>