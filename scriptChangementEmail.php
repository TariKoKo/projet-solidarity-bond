<?php  
session_start();
include('scriptBDD.php');

$Adresse_email = isset($_POST['Adresse_email']) ? $_POST['Adresse_email']: NULL;
$NewAdresse_email = isset($_POST['NewAdresse_email']) ? $_POST['NewAdresse_email']: NULL;

$requete = $bdd->prepare("SELECT * FROM utilisateur WHERE Adresse_email = :Adresse_email");
$requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);
$requete->execute();

if ($requete->fetch()) {
	$requete = $bdd->prepare("UPDATE utilisateur SET Adresse_email = :NewAdresse_email WHERE ID_Utilisateur = :id");
	$requete->bindValue(':id', $_SESSION['id'], PDO::PARAM_STR);
	$requete->bindValue(':NewAdresse_email', $NewAdresse_email, PDO::PARAM_STR);
	$requete->execute();
	$requete->closeCursor();
	session_destroy();
	$message='Votre adresse email à bien été changé, veuillez vous reconnecter avec votre nouvelle adresse!';
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
	header("Refresh:0; url=pageIndex.php");
	exit();
}
else{
	$message="Votre ancienne adresse email n'est pas correct, veuillez réessayer !";
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
	header("Refresh:0; url=displayChangementEmail.php");
	exit();
}
 

?>