<?php 
session_start();
include('scriptBDD.php');

$Adresse_email = isset($_POST['Adresse_email']) ? $_POST['Adresse_email']: NULL;

$requete = $bdd->prepare("SELECT * FROM utilisateur WHERE Adresse_email = :Adresse_email");
$requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);
$requete->execute();

use PHPMailer\PHPMailer\PHPMailer;

	if ($requete->fetch()) {

		require_once "vendor/PHPMailer/PHPMailer.php";
		require_once "vendor/PHPMailer/SMTP.php";
		require_once "vendor/PHPMailer/Exception.php";

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
		$mail->Subject = "Demande de nouveau mot de passe";
		$mail->Body = "Bonjour,<br><br> Vous avez fait une demande pour changer de mot de passe.<br>Voici le lien où vous pourrez choisir un nouveau mot de passe :<br>http://localhost/projet-solidarity-bond/displayMdp.php <br><br> Cordialement,<br>L'équipe de Solidarity-Bond.";

		if($mail->send()){
			$response = "Mail send";
		}
		else{
			$response = "Nope :" . $mail->ErrorInfo;
		}

			$message="Votre demande de réinitialisation de mot de passe à bien été prise en compte, vous allez recevoir un email avec un lien pour le modifier!";
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
 