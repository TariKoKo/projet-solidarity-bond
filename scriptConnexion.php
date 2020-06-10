<?php
// Adapter dbname et mot de passe si besoin
$bdd = new PDO('mysql:host=localhost;dbname=solidarity_bond', 'root', '');

// Récupération des données utilisateurs
$e_mail = isset($_POST['email']) ? $_POST['email']: NULL;
$p_word = isset($_POST['Pass']) ? $_POST['Pass']: NULL;
// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("SELECT * FROM entreprise WHERE Adresse_email=:email
AND motDePasse=:Pass");
// Liaison des variables de la requête préparée aux variables PHP
$requete->bindValue(':email', $e_mail, PDO::PARAM_STR);
$requete->bindValue(':Pass', $p_word, PDO::PARAM_STR);
// Exécution de la requête
$requete->execute();

$requete1 = $bdd->prepare("SELECT * FROM admin WHERE eMail=:email
	AND Mdp=:Pass");

	$requete1->bindValue(':email', $e_mail, PDO::PARAM_STR);
	$requete1->bindValue(':Pass', $p_word, PDO::PARAM_STR);
	$requete1->execute();

if ($requete->fetch()){
	echo "connexion réussi entreprise";
}else if ($requete1->fetch()) {
	echo "connexion admin réussi";
}else{
	echo 'T qui toi ?';
}


// Fermeture de la connexion
$requete->closeCursor();
?>
