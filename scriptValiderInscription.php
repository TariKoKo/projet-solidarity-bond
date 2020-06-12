<?php  

include('scriptBDD.php');

$requete = $bdd->prepare("UPDATE utilisateur SET Status = 1 WHERE ID_Utilisateur = :ID_Utilisateur");
$requete->bindValue(':ID_Utilisateur', $_GET['ID_Utilisateur'], PDO::PARAM_STR);
$requete->execute();  
$requete->closeCursor();


$requete1 = $bdd->prepare("INSERT INTO discussion(ID_Utilisateur, ID_Utilisateur2, ID_Discussion) VALUES (:ID_Utilisateur, 1,:ID_Utilisateur) ");
$requete1->bindValue(':ID_Utilisateur', $_GET['ID_Utilisateur'], PDO::PARAM_STR);
$requete1->execute();  
$requete1->closeCursor();


header('Location: pageGérerLesDiscussions.php');
exit()


?>