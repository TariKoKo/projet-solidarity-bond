<?php
include('bdd.php');

$requete = $bdd->prepare("SELECT * FROM utilisateur WHERE status = 0");
$requete->execute();  

while($ligne=$requete->fetch()){ 
    echo '<div class="card mb-2">
        <div class="container card p-4">
        	<div class="row">
        		<div class="col-4">
        			<p>'.$ligne['Nom']. '</p>
        		</div>
                <div class="col-4">' .$ligne['Adresse_email']. '</div>
                <div class="col-4"/><a href="validerInscription.php?ID_Utilisateur=' .$ligne['ID_Utilisateur'].   '" class="btn btn-default btn-rounded">Valider Inscription</a></div>
        			 
        		</div>
        </div>
    </div>';
} 
?>