<?php

include('bdd.php');

    // Récupération des données utilisateurs
        $Adresse_email = isset($_POST['Adresse_email']) ? $_POST['Adresse_email']: NULL;
        $Mot_de_passe = isset($_POST['Mot_de_passe']) ? $_POST['Mot_de_passe']: NULL;
        $Nom_Entreprise = isset($_POST['Nom_Entreprise']) ? $_POST['Nom_Entreprise']: NULL;
        $Numero_tel = isset($_POST['Numero_tel']) ? $_POST['Numero_tel']: NULL;
        $cgu =(isset($_POST['cgu'])) ? ($_POST['cgu']) : NULL;


    // Requête préparée pour empêcher les injections SQL
        $requete = $bdd->prepare("SELECT * FROM entreprise WHERE Adresse_email = :Adresse_email;");
    // Liaison des variables de la requête préparée aux variables PHP
        $requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);

        $requete->execute();

if($requete->fetch())
{
    // Fermeture de la connexion 
    $requete->closeCursor(); 

    echo "Utilsateur existe déjà" ;
}

else   
{
    $requete->closeCursor();
    if (preg_match('#^(?=.*[a-z])$#', $Mot_de_passe)){
        $requete = $bdd->prepare("INSERT INTO entreprise ( Nom_Entreprise, Adresse_email, Mot_de_passe, Numero_tel, cgu) VALUES ( :Nom_Entreprise, :Adresse_email, :Mot_de_passe, :Numero_tel :cgu)"); 
     // Liaison des variables de la requête préparée aux variables PHP 
        $crypt = password_hash($Mot_de_passe, PASSWORD_DEFAULT);
        $requete->bindValue(':Nom_Entreprise', $Nom_Entreprise, PDO::PARAM_STR); 
        $requete->bindValue(':Numero_tel', $Numero_tel, PDO::PARAM_STR);
        $requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);
        $requete->bindValue(':Mot_de_passe', $crypt, PDO::PARAM_STR);
        $requete->bindValue(':cgu', $cgu, PDO::PARAM_STR);
    // Exécution de la requête 
        $requete->execute();
        header('Location: index.php');
        exit();
    }
    else {
        echo 'Mot de passe non conforme';
    }   
}
?>