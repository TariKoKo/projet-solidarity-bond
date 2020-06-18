<?php  
session_start();
include('scriptBDD.php');

$Mot_de_passe = isset($_POST['Mot_de_passe']) ? $_POST['Mot_de_passe']: NULL;
$NewMot_de_passe = isset($_POST['NewMot_de_passe']) ? $_POST['NewMot_de_passe']: NULL;


$requete3 = $bdd->prepare("SELECT * FROM utilisateur WHERE Adresse_email=:Adresse_email");
$requete3->bindValue(':Adresse_email', $_SESSION['email'], PDO::PARAM_STR);
$requete3->execute();
$ligne3=$requete3->fetch();

$hash = $ligne3['Mot_de_passe'];
$decrypt = password_verify($ligne3['Mot_de_passe'], $hash);

if ($decrypt = $Mot_de_passe) {

	$requete = $bdd->prepare("UPDATE utilisateur SET Mot_de_passe = :NewMot_de_passe WHERE ID_Utilisateur = :id");
	$crypt = password_hash($NewMot_de_passe, PASSWORD_DEFAULT);
	$requete->bindValue(':id', $_SESSION['id'], PDO::PARAM_STR);
	$requete->bindValue(':NewMot_de_passe', $crypt, PDO::PARAM_STR);
	$requete->execute();
	$requete->closeCursor();
	session_destroy();
	$message='Votre mot de passe à bien été changé, veuillez vous reconnecter avec votre nouveau mot de passe!';
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
	header("Refresh:0; url=pageIndex.php");
	exit();

} else{
	$message="Votre ancien mot de passe n'est pas correct, veuillez réessayer !";
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
	header("Refresh:0; url=displayChangementMdp.php");
	exit();
}
 

?>