<?php  
session_start();
include('config.php');

$Adresse_email = isset($_POST['Adresse_email']) ? $_POST['Adresse_email']: NULL;
$Mot_de_passe = isset($_POST['Mot_de_passe']) ? $_POST['Mot_de_passe']: NULL;
$ConfMot_de_passe = isset($_POST['ConfMot_de_passe']) ? $_POST['ConfMot_de_passe']: NULL;

if ($Mot_de_passe = $ConfMot_de_passe) {

	$requete = $bdd->prepare("UPDATE utilisateur SET Mot_de_passe = :ConfMot_de_passe WHERE Adresse_email = :Adresse_email");
	$crypt = password_hash($ConfMot_de_passe, PASSWORD_DEFAULT);
	$requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);
	$requete->bindValue(':ConfMot_de_passe', $crypt, PDO::PARAM_STR);
	$requete->execute();
	$requete->closeCursor();
	session_destroy();
	$message='Votre mot de passe à bien été changé, veuillez vous reconnecter avec votre nouveau mot de passe!';
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
	header("Refresh:0; url=pageIndex.php");
	exit();

} else{
	$message="Vos mots de passe ne sont pas identiques, veuillez réessayer !";
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
	header("Refresh:0; url=displayChangementMdp.php");
	exit();
}
 

?>