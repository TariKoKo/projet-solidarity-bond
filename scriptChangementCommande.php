<?php  
session_start();
include('config.php');

$requete = $bdd->prepare("UPDATE commande SET Etat = :Etat WHERE ID = :ID");
$requete->bindValue(':Etat', $_GET['Changement'], PDO::PARAM_STR);
$requete->bindValue(':ID', $_GET['ID'], PDO::PARAM_STR);
$requete->execute();

header("Refresh:0; url=pageHistoriqueCommande.php");
exit();
?>