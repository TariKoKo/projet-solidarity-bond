 <?php
include('scriptBDD.php');

$ID_Utilisateur = $_SESSION['id'];

$requete = $bdd->prepare("SELECT * from commande WHERE ID_Utilisateur = :ID_Utilisateur AND Etat != 2");
$requete->bindValue(':ID_Utilisateur', $ID_Utilisateur, PDO::PARAM_STR); 
$requete->execute();


if ($ligne = $requete->fetch()) { ?>

 				<div>
                    <h4>DETAIL DE LA COMMANDE</h4>
                    <p>Numéro de commande : <?php echo $ligne['ID']?></p>
                    <p>Nombre de crochet : <?php echo $ligne['Quantite']?></p>
                </div>
                <div>
                    <h4>ETAT DE LA COMMANDE</h4>
                    <p><?php if ($ligne['Etat'] == 0) {
							echo "En cours d'impression";
						}
						elseif ($ligne['Etat'] == 1) {
							echo "Prête à être récupérée";
						}
						elseif ($ligne['Etat'] == 2) {
							echo "Commande récupérée";
						} ?></p>
                </div>
<?php 
} else {
?>
				<div>
                    <h4>DETAIL DE LA COMMANDE</h4>
                    <p>Pas de commande en cours !</p>
                </div>
                <div>
                    <h4>ETAT DE LA COMMANDE</h4>
                    <p>Pas de commande en cours !</p>
                </div>
<?php
} ?>
				