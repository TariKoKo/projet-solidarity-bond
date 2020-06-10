<?php
$id_Discussion =$_GET['id_discussion'];

include('bdd.php');

$requete = $bdd->prepare("SELECT * FROM discussion JOIN entreprise ON discussion.ID_Entreprise = entreprise.ID_Entreprise WHERE id_Discussion= :id_Discussion");
$requete->bindValue(':id_Discussion', $id_Discussion, PDO::PARAM_STR);
$requete->execute();  

while($ligne=$requete->fetch()){ ?>
    <div class="card mb-2">
        <div class="container card p-4">
        	<div class="row">
        		<div class="col-11">
        			<p><?php echo $ligne['Commentaire']?></p>
        		</div>
        		<div class="col-1">
        			<?php if(isset($_SESSION['status']) && $_SESSION['status'] == 1){ ?>
					<?php  
					} ?>  
        		</div>
        	</div>  
        </div>
    	<p id="discussion"><?php echo 'Posté par ',$ligne['Nom_Entreprise']?></p>
    </div>
<?php
} 
$requete->closeCursor(); 
?>
