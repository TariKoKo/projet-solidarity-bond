<?php  

include('bdd.php');

$requete = $bdd->prepare("UPDATE utilisateur SET Status = 0 WHERE ID_Utilisateur = :ID_Utilisateur");
$requete->bindValue(':ID_Utilisateur', $_GET['ID_Utilisateur'], PDO::PARAM_STR);
$requete->execute();  
$requete->closeCursor(); 
header('Location: GérerLesInscrits.php');
exit()


?>