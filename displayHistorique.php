 <?php
include('config.php');

$ID_Utilisateur = $_SESSION['id'];

$requete = $bdd->prepare("SELECT * from commande WHERE ID_Utilisateur = :ID_Utilisateur");
$requete->bindValue(':ID_Utilisateur', $ID_Utilisateur, PDO::PARAM_STR); 
$requete->execute();

$requete2 = $bdd->prepare("SELECT * from commande JOIN utilisateur ON utilisateur.ID_Utilisateur = commande.ID_Utilisateur ORDER BY Etat DESC"); 
$requete2->execute();



?>
<?php if (isset($_SESSION['status']) && $_SESSION['status'] == 1) { ?>
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
						<h5><?php if ($ligne['Etat'] == 0) {
							echo "En cours d'impression";
						}
						elseif ($ligne['Etat'] == 1) {
							echo "Prête à être récupérée";
						}
						elseif ($ligne['Etat'] == 2) {
							echo "Commande récupérée";
						} ?></h5></div>
				</div>
				<?php
				} ?>
			</div>
<?php }elseif (isset($_SESSION['status']) && $_SESSION['status'] == 2) { ?>
	<div class="container-fluid">
			<div class="row border border-secondary text-center mb-2">
				<div class="col-sm-3">
					<h5>Entreprise</h5></div>
				<div class="col-sm-2">
					<h5>Numéro de Commande</h5></div>
				<div class="col-sm-2">
					<h5>Quantité</h5></div>
				<div class="col-sm-3">
					<h5>Etat de la commande</h5></div>
				<div class="col-sm-2">
					<h5>Modifier</h5></div></div>
				<?php while($ligne2=$requete2->fetch()){ ?>
				<div class="row text-center mb-2">
					<div class="col-sm-3">
						<h5><?php echo $ligne2['Nom']?></h5></div>
					<div class="col-sm-2">
						<h5><?php echo $ligne2['ID']?></h5></div>
					<div class="col-sm-2">
						<h5><?php echo $ligne2['Quantite']?> Crochet(s)</h5></div>
					<div class="col-sm-3">
						<h5><?php if ($ligne2['Etat'] == 0) {
							echo "En cours d'impression";
						}
						elseif ($ligne2['Etat'] == 1) {
							echo "Prête à être récupérée";
						}
						elseif ($ligne2['Etat'] == 2) {
							echo "Commande récupérée";
						} ?></h5></div>
					<?php echo '<div class="col-sm-2">
						<a href="displayChangementCommande.php?ID=' .$ligne2['ID']. '"><img class="dimension_Logo" src="assets/image/Logo_changement.png"
                                alt="logo changement"></a></div>'; ?>
					
				</div>
				<?php
				} ?>
			</div>
<?php } ?>