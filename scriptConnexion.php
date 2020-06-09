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

$ligne = $requete->fetch();
if (!$requete->fetch()){
	$requete = $bdd->prepare("SELECT * FROM entreprise WHERE eMail=:email
	AND Mdp=:Pass");

	$requete->bindValue(':email', $e_mail, PDO::PARAM_STR);
	$requete->bindValue(':Pass', $p_word, PDO::PARAM_STR);
	$requete->execute();
	
	echo "connexion réussi";
}else if ($requete->fetch()) {
	echo "connexion réussi";
}else{
	echo 'Connexion échouée';
}


// Fermeture de la connexion
$requete->closeCursor();
?>
