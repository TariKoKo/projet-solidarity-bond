<?php

    $bdd = new PDO('mysql:host=localhost;dbname=solidarity_bond', 'root', '');

    // Récupération des données utilisateurs
        $e_mail = isset($_POST['email']) ? $_POST['email']: NULL;
        $p_word = isset($_POST['Pass']) ? $_POST['Pass']: NULL;
        $n_f = isset($_POST['nom']) ? $_POST['nom']: NULL;
        $tel = isset($_POST['tel']) ? $_POST['tel']: NULL;


    // Requête préparée pour empêcher les injections SQL
        $requete = $bdd->prepare("SELECT * FROM entreprise WHERE Adresse_email = :email;");
    // Liaison des variables de la requête préparée aux variables PHP
        $requete->bindValue(':email', $e_mail, PDO::PARAM_STR);

        $requete->execute();

    if (!$requete->fetch())
        {

            // Requête préparée pour empêcher les injections SQL
            $requete = $bdd->prepare("INSERT INTO entreprise(Nom_Entreprise,Adresse_email,Mot_de_passe,Numero_tel) VALUES(  ²:nom,:email,:Pass,:tel);");
    
            $requete->bindValue(':email', $e_mail, PDO::PARAM_STR);
            $requete->bindValue(':Pass', $p_word, PDO::PARAM_STR);
            $requete->bindValue(':nom', $n_f, PDO::PARAM_STR);
            $requete->bindValue(':tel', $tel, PDO::PARAM_STR);
    

     echo "C'est fait !";
    $requete->execute();
}
else{
  echo "Vous etes deja parmi nous!";
}

?>