 <?php
include('scriptBDD.php');

$ID_Utilisateur = $_SESSION['id'];

$requete = $bdd->prepare("SELECT * from commande WHERE ID_Utilisateur = :ID_Utilisateur");
$requete->bindValue(':ID_Utilisateur', $ID_Utilisateur, PDO::PARAM_STR); 
$requete->execute();





?>
		<div class="container-fluid">
			<div class="row border border-secondary text-center mb-2">
				<div class="col-sm-4">
					<h5>Numéro de Commande</h5></div>
				<div class="col-sm-4">
					<h5>Quantité</h5></div>
				<div class="col-sm-4">
					<h5>Etat de la commande</h5></div>
				</div>
				<?php while($ligne=$requete->fetch()){ ?>
				<div class="row text-center mb-2">
					<div class="col-sm-4">
						<h5><?php echo $ligne['ID']?></h5></div>
					<div class="col-sm-4">
						<h5><?php echo $ligne['Quantite']?> Crochet(s)</h5></div>
					<div class="col-sm-4">
						<h5>
						<?php if ($ligne['Etat'] == 0) {
							echo "En cours de préparation";
						}
						elseif ($ligne['Etat'] == 1) {
							echo "En cours de livraison";
						}
						elseif ($ligne['Etat'] == 2) {
							echo "Livré";
						} ?>
						</h5></div>
				</div>
				<?php
				} ?>
			</div>
		</div>
