<?php

/*session_start();*/

$texte = $_POST['discussion'];
$id_Discussion = $_POST['id'];
$id_Entreprise=$_SESSION['id'];
$id_Admin=$_SESSION['id'];

include('bdd.php');

$requete = $bdd->prepare("INSERT INTO discussion (ID_Discussion, Commentaire, ID_Entreprise, ID_Admin) VALUES(:id_discussion, :commentaire, :id_entreprise, :id_admin)");
$requete->bindValue(':id_discussion', $id_Discussion, PDO::PARAM_STR);
$requete->bindValue(':commentaire', $texte, PDO::PARAM_STR);
$requete->bindValue(':id_entreprise', $id_Entreprise, PDO::PARAM_STR);
$requete->bindValue(':id_admin', $id_Admin, PDO::PARAM_STR);
$requete->execute();  

header("location:" . $_SERVER['HTTP_REFERER']);
exit;
$requete->closeCursor(); 
?>