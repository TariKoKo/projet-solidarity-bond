<?php
include('scriptBDD.php');

$requete = $bdd->prepare("SELECT * FROM utilisateur WHERE status = 1");
$requete->execute();  

while($ligne=$requete->fetch()){ 
    echo '<div class="card mb-2">
        <div class="container card p-4">
        	<div class="row">
        		<div class="col-sm-4 text-center">
        			<p>'.$ligne['Nom']. '</p>
        		</div>
                <div class="col-sm-4 text-center">' .$ligne['Adresse_email']. '</div>
                <div class="col-sm-4 text-center"/><a href="scriptDévaliderInscription.php?ID_Utilisateur=' .$ligne['ID_Utilisateur'].   '" class="btn btn-default btn-rounded">Supprimer</a></div>
        			 
        		</div>
        </div>
    </div>';
} 
?>