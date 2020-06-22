<?php  

include('config.php');

$requete = $bdd->prepare("UPDATE utilisateur SET Status = 0 WHERE ID_Utilisateur = :ID_Utilisateur");
$requete->bindValue(':ID_Utilisateur', $_GET['ID_Utilisateur'], PDO::PARAM_STR);
$requete->execute();  
$requete->closeCursor(); 


$requete1 = $bdd->prepare("DELETE FROM discussion WHERE ID_Utilisateur = :ID_Utilisateur");
$requete1->bindValue(':ID_Utilisateur', $_GET['ID_Utilisateur'], PDO::PARAM_STR);
$requete1->execute();  
$requete1->closeCursor();

header('Location: pageGérerLesInscrits.php');
exit()	
?>