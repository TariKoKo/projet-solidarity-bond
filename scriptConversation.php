<?php
session_start();
var_dump($_SESSION['ID_Recup']);
include('config.php');


if(isset($_SESSION['status']) && $_SESSION['status'] == 2){

$Num = $_SESSION['ID_Recup'];
$texte = isset($_POST['texte']) ? $_POST['texte']: NULL;
$requete = $bdd->prepare("INSERT INTO messages(Texte, ID_Utilisateur, ID_Discussion, Jour) VALUES(:texte,:id,:ID_Utilisateur, CURDATE() )");
$requete->bindValue(':texte', $texte, PDO::PARAM_STR);
$requete->bindValue(':ID_Utilisateur', $Num, PDO::PARAM_STR);
$requete->bindValue(':id', $_SESSION['id'], PDO::PARAM_STR);
$requete->execute();

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'chat.php';
header('Location: ' . $referer);

}

elseif (isset($_SESSION['status']) && $_SESSION['status'] == 1){

$Num = $_SESSION['ID_Recup'];
$texte = isset($_POST['texte']) ? $_POST['texte']: NULL;
$requete = $bdd->prepare("INSERT INTO messages(Texte, ID_Utilisateur, ID_Discussion, Jour) VALUES(:texte,:id,:id, CURDATE() )");
$requete->bindValue(':texte', $texte, PDO::PARAM_STR);
$requete->bindValue(':ID_Utilisateur', $Num, PDO::PARAM_STR);
$requete->bindValue(':id', $_SESSION['id'], PDO::PARAM_STR);
$requete->execute();

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'chat.php';
header('Location: ' . $referer);

}
?>