<?php  
session_start();
include('scriptBDD.php');

$requete = $bdd->prepare("UPDATE utilisateur SET Status = 1 WHERE ID_Utilisateur = :ID_Utilisateur");
$requete->bindValue(':ID_Utilisateur', $_GET['ID_Utilisateur'], PDO::PARAM_STR);
$requete->execute();  
$requete->closeCursor();


$requete1 = $bdd->prepare("INSERT INTO discussion(ID_Utilisateur, ID_Utilisateur2, ID_Discussion) VALUES (:ID_Utilisateur, 1,:ID_Utilisateur) ");
$requete1->bindValue(':ID_Utilisateur', $_GET['ID_Utilisateur'], PDO::PARAM_STR);
$requete1->execute();  
$requete1->closeCursor();


$requete2 = $bdd->prepare("SELECT * FROM utilisateur WHERE ID_Utilisateur = :ID_Utilisateur");
$requete2->bindValue(':ID_Utilisateur', $_GET['ID_Utilisateur'], PDO::PARAM_STR);
$requete2->execute();
$ligne2 = $requete2->fetch();

use PHPMailer\PHPMailer\PHPMailer;

	if (isset($ligne2['Nom']) && isset($ligne2['Adresse_email'])) {

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
		$mail->setFrom($_SESSION['email'], $_SESSION['pseudo']);
		$mail->addAddress($ligne2['Adresse_email']);
		$mail->Subject = "Validation d'inscription de votre comptre Solidarity-Bond";
		$mail->Body = "Bonjour,<br><br> Votre demande d'inscription vient d'être validée. Vous avez désormais accès à la discussion.<br><br> Cordialement,<br>L'équipe de Solidarity-Bond.";

		if($mail->send())
			$response = "Mail send";
		else
			$response = "Nope :" . $mail->ErrorInfo;

	}


header('Location: pageGérerLesDiscussions.php');
exit()


?>