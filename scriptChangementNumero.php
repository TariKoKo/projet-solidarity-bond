<?php  
session_start();
include('scriptBDD.php');

$Numero_tel = isset($_POST['Numero_tel']) ? $_POST['Numero_tel']: NULL;
$NewNumero_tel = isset($_POST['NewNumero_tel']) ? $_POST['NewNumero_tel']: NULL;

$requete = $bdd->prepare("SELECT * FROM utilisateur WHERE Numero_tel = :Numero_tel");
$requete->bindValue(':Numero_tel', $Numero_tel, PDO::PARAM_STR);
$requete->execute();

if ($requete->fetch()) {
	$requete = $bdd->prepare("UPDATE utilisateur SET Numero_tel = :NewNumero_tel WHERE ID_Utilisateur = :id");
	$requete->bindValue(':id', $_SESSION['id'], PDO::PARAM_STR);
	$requete->bindValue(':NewNumero_tel', $NewNumero_tel, PDO::PARAM_STR);
	$requete->execute();
	$requete->closeCursor();
	session_destroy();
	$message='Votre numéro de téléphone à bien été changé, veuillez vous reconnecter!';
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
	header("Refresh:0; url=pageIndex.php");
	exit();
}
else{
	$message="Votre ancien numéro n'est pas correct, veuillez réessayer !";
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
	header("Refresh:0; url=displayChangementNumero.php");
	exit();
}
 

?>