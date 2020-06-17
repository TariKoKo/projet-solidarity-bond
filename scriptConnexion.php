<?php
session_start();

// Adapter dbname et mot de passe si besoin
include('scriptBDD.php');

// Récupération des données utilisateurs
$Adresse_email = isset($_POST['Adresse_email']) ? $_POST['Adresse_email']: NULL;
$Mot_de_passe = isset($_POST['Mot_de_passe']) ? $_POST['Mot_de_passe']: NULL;
// Requête préparée pour empêcher les injections SQL

$requete = $bdd->prepare("SELECT * FROM utilisateur WHERE Adresse_email=:Adresse_email");


// Liaison des variables de la requête préparée aux variables PHP
$requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);
// Exécution de la requête
$requete->execute();
$ligne=$requete->fetch();

$pseudo = $ligne['Nom'];
$hash = $ligne['Mot_de_passe'];
$id = $ligne['ID_Utilisateur'];
$status = $ligne['Status'];
$email = $ligne['Adresse_email'];
$numero = $ligne['Numero_tel'];

$decrypt = password_verify($Mot_de_passe, $hash);


if($decrypt){
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
		$_SESSION['hash'] = $hash;
		$_SESSION['numero'] = $numero;
		header('Location: pageIndex.php');
		exit();
	}   
	elseif ($ligne['Status'] === '1')
	{
		session_start();
		$_SESSION['pseudo'] = $pseudo;
		$_SESSION['id'] = $id;
		$_SESSION['status'] = $status;
		$_SESSION['email'] = $email;
		$_SESSION['hash'] = $hash;
		$_SESSION['numero'] = $numero;
		header('Location: pageIndex.php');
		exit();
	}
	elseif ($ligne['Status'] === '0')
	{
		session_start();
		$_SESSION['pseudo'] = $pseudo;
		$_SESSION['id'] = $id;
		$_SESSION['status'] = $status;
		$_SESSION['email'] = $email;
		$_SESSION['hash'] = $hash;
		$_SESSION['numero'] = $numero;
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