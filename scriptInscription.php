<?php

include('config.php');
use PHPMailer\PHPMailer\PHPMailer;
require_once "vendor/PHPMailer/PHPMailer.php";
require_once "vendor/PHPMailer/SMTP.php";
require_once "vendor/PHPMailer/Exception.php";

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

if($ligne = $requete->fetch())
{
    // Fermeture de la connexion 
    $requete->closeCursor();
    echo "Utilsateur existe déjà" ;
}

else   
{
    $requete->closeCursor();

    if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}$#', $Mot_de_passe)){
        $requete = $bdd->prepare("INSERT INTO utilisateur (Nom, Adresse_email, Mot_de_passe, Numero_tel) VALUES ( :Nom, :Adresse_email, :Mot_de_passe, :Numero_tel)");
     // Liaison des variables de la requête préparée aux variables PHP
        $crypt = password_hash($Mot_de_passe, PASSWORD_DEFAULT);
        $requete->bindValue(':Nom', $Nom, PDO::PARAM_STR); 
        $requete->bindValue(':Numero_tel', $Numero_tel, PDO::PARAM_STR);
        $requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);
        $requete->bindValue(':Mot_de_passe', $crypt, PDO::PARAM_STR);
    // Exécution de la requête 
        $requete->execute();

        $mail = new PHPMailer();

        //SMTP settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "solidarity.bond.cesi@gmail.com";
        $mail->Password = "Solidarity23";
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email settings
        $mail->isHTML(true);
        $mail->setFrom("solidarity.bond.cesi@gmail.com", "Solidarity Bond");
        $mail->addAddress($_POST['Adresse_email']);
        $mail->Subject = "Demande d'inscription";
        $mail->Body = "Bonjour,<br><br> Votre demande d'inscription à bien été prise en compte, nous allons traiter votre demande dans les plus brefs délais.<br><br> Cordialement,<br>L'équipe de Solidarity-Bond.";

        if($mail->send()){
            $response = "Mail send";
        }
        else{
            $response = "Nope :" . $mail->ErrorInfo;
        }



        header('Location: pageIndex.php');
        exit();
    }
    else {
        echo 'Mot de passe non conforme';
    }   
}
?>