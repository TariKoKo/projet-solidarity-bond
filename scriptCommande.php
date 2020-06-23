<?php 
session_start();
include('config.php');

$Adresse_email = isset($_POST['Adresse_email']) ? $_POST['Adresse_email']: NULL;

$requete = $bdd->prepare("SELECT * FROM utilisateur WHERE Adresse_email = :Adresse_email");
$requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);
$requete->execute();

use PHPMailer\PHPMailer\PHPMailer;

	if ($requete->fetch()) {

		require_once "vendor/PHPMailer/PHPMailer.php";
		require_once "vendor/PHPMailer/SMTP.php";
		require_once "vendor/PHPMailer/Exception.php";

		$Quantite = isset($_POST['Quantite']) ? $_POST['Quantite']: NULL;
		$ID_Utilisateur = $_SESSION['id'];
		var_dump($ID_Utilisateur, $Quantite);

		$requete = $bdd->prepare("INSERT INTO commande (ID_Utilisateur, Quantite, Etat) VALUES ( :ID_Utilisateur, :Quantite, 0)");
        $requete->bindValue(':ID_Utilisateur', $ID_Utilisateur, PDO::PARAM_STR); 
        $requete->bindValue(':Quantite', $Quantite, PDO::PARAM_STR);
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
		$mail->addAddress($Adresse_email);
		$mail->Subject = "Votre commande";
		$mail->Body = "Bonjour,<br><br> Vous venez de passer une commande sur notre site. Vous avez commandé " .$Quantite. " crochet(s).<br>Vous pouvez suivre l'avancement de l'envoi de votre commande dans votre espace compte. <br><br> Cordialement,<br>L'équipe de Solidarity-Bond.";

		if($mail->send()){
			$response = "Mail send";
		}
		else{
			$response = "Nope :" . $mail->ErrorInfo;
		}

		$mail2 = new PHPMailer();

        //SMTP settings
        $mail2->isSMTP();
        $mail2->Host = "smtp.gmail.com";
        $mail2->SMTPAuth = true;
        $mail2->Username = "solidarity.bond.cesi@gmail.com";
        $mail2->Password = "Solidarity23";
        $mail2->Port = 465; //587
        $mail2->SMTPSecure = "ssl"; //tls

        //Email settings
        $mail2->isHTML(true);
        $mail2->setFrom("solidarity.bond.cesi@gmail.com", "Solidarity Bond");
        $mail2->addAddress("solidarity.bond.cesi@gmail.com");
        $mail2->Subject = "Demande d'inscription";
        $mail2->Body = "Bonjour,<br><br> Un nouvel utilisateur (".$_POST['Adresse_email'].") vient de passer une commande de ".$Quantite." crochet(s) sur votre site.<br><br> Cordialement,<br>L'équipe de Solidarity-Bond.";

        if($mail2->send()){
            $response = "Mail send";
        }
        else{
            $response = "Nope :" . $mail2->ErrorInfo;
        }

			$message="Votre commande à bien été prise en compte, vous allez recevoir un email de récapitulation de votre commande";
			echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
			header("Refresh:0; url=pageIndex.php");
			exit();
	}
	else{
			$message="Adresse email introuvable";
			echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
			header("Refresh:0; url=pageIndex.php");
			exit();
	}
 ?>