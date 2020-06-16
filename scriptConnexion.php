<?php
session_start();
var_dump($_POST);

// Adapter dbname et mot de passe si besoin
include('scriptBDD.php');

// Récupération des données utilisateurs
$Adresse_email = isset($_POST['Adresse_email']) ? $_POST['Adresse_email']: NULL;
$Mot_de_passe = isset($_POST['Mot_de_passe']) ? $_POST['Mot_de_passe']: NULL;
// Requête préparée pour empêcher les injections SQL

$requete = $bdd->prepare("SELECT * FROM utilisateur WHERE Adresse_email=:Adresse_email
AND Mot_de_passe=:Mot_de_passe");


// Liaison des variables de la requête préparée aux variables PHP
$requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);
$requete->bindValue(':Mot_de_passe', $Mot_de_passe, PDO::PARAM_STR);
// Exécution de la requête
$requete->execute();
$ligne=$requete->fetch();

$pseudo = $ligne['Nom'];
$id = $ligne['ID_Utilisateur'];
$status = $ligne['Status'];
$email = $ligne['Adresse_email'];


if($ligne){
	if (isset($_SESSION['pseudo'])){
		session_destroy();
	}
    if ($ligne['Status'] === '2')
	{
		session_start();
		$_SESSION['pseudo'] = $pseudo;
		$_SESSION['id'] = $id;
		$_SESSION['status'] = $status;
		$_SESSION['email'] = $email;
		header('Location: pageIndex.php');
		exit();
	}   
	elseif ($ligne['Status'] === '1')
	{
		session_start();
		$_SESSION['pseudo'] = $pseudo;
		$_SESSION['id'] = $id;
		$_SESSION['status'] = $status;
		header('Location: pageIndex.php');
		exit();
	}
	elseif ($ligne['Status'] === '0')
	{
		session_start();
		$_SESSION['pseudo'] = $pseudo;
		$_SESSION['id'] = $id;
		$_SESSION['status'] = $status;
		header('Location: pageIndex.php');
		exit();
	}
}
else{
		header('Location: pageInscription.php');		
		exit();
}
//Fermeture de la connexion
$requete->closeCursor();
?>