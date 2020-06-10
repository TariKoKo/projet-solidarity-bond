<?php
session_start();
var_dump($_POST);

// Adapter dbname et mot de passe si besoin
include('bdd.php');

// Récupération des données utilisateurs
$Adresse_email = isset($_POST['Adresse_email']) ? $_POST['Adresse_email']: NULL;
$Mot_de_passe = isset($_POST['Mot_de_passe']) ? $_POST['Mot_de_passe']: NULL;
// Requête préparée pour empêcher les injections SQL

$requete = $bdd->prepare("SELECT * FROM entreprise WHERE Adresse_email=:Adresse_email
AND Mot_de_passe=:Mot_de_passe");


// Liaison des variables de la requête préparée aux variables PHP
$requete->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);
$requete->bindValue(':Mot_de_passe', $Mot_de_passe, PDO::PARAM_STR);
// Exécution de la requête
$requete->execute();
$ligne=$requete->fetch();

$requete1 = $bdd->prepare("SELECT * FROM admin WHERE eMail=:Adresse_email
	AND Mdp=:Mot_de_passe");

$requete1->bindValue(':Adresse_email', $Adresse_email, PDO::PARAM_STR);
$requete1->bindValue(':Mot_de_passe', $Mot_de_passe, PDO::PARAM_STR);
$requete1->execute();
$ligne1=$requete1->fetch();

$pseudo = $ligne['Nom_Entreprise'];
$pseudo1 = $ligne1['Adresse_email'];
$id = $ligne['ID_Entreprise'];
$id1 = $ligne1['ID_Admin'];
$status = $ligne['Inscrit'];


if($ligne){
	if (isset($_SESSION['pseudo'])){
		session_destroy();
	}
       
	if ($ligne['Inscrit'] === '1')
	{
		session_start();
		$_SESSION['pseudo'] = $pseudo;
		$_SESSION['id'] = $id;
		$_SESSION['status'] = $status;
		header('Location: index.php');
		exit();
	}
	elseif ($ligne['Inscrit'] === '0')
	{
		echo "En attente d'acceptation de la demande d'inscription";
		exit();
	}
}
elseif ($ligne1) {
		if (isset($_SESSION['pseudo1'])){
		session_destroy();
		}
		session_start();
		$_SESSION['pseudo1'] = $pseudo1;
		$_SESSION['id1'] = $id1;
		header('Location: index.php');
		exit();
}
else{
		header('Location: inscription.php');		
		exit();
}
//Fermeture de la connexion
$requete1->closeCursor();
?>