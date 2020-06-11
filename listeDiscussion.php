<?php
include('bdd.php');
if(isset($_SESSION['status']) && $_SESSION['status'] == 2){

$requete = $bdd->prepare("SELECT * FROM utilisateur JOIN discussion ON utilisateur.ID_Utilisateur = discussion.ID_Utilisateur WHERE status = 1");
$requete->execute();  

while($ligne=$requete->fetch()){ 
    echo '<div class="card mb-2">
        <div class="container card p-4">
        	<div class="row">
        		<div class="col-4">
        			<p>'.$ligne['Nom']. '</p>
        		</div>
                <div class="col-4">' .$ligne['Adresse_email']. '</div>
                <div class="col-4"/><a href="chat.php?ID_Utilisateur=' .$ligne['ID_Utilisateur']. '&amp;Nom= '.$ligne['Nom'].'" class="btn btn-default btn-rounded">Accéder à la discussion</a></div>
        			 
        		</div>
        </div>
    </div>';
}
}
elseif (isset($_SESSION['status']) && $_SESSION['status'] == 1){

$requete1 = $bdd->prepare("SELECT * FROM utilisateur WHERE status = 2");
$requete1->execute();  

while($ligne1=$requete1->fetch()){ 
    echo '<div class="card mb-2">
        <div class="container card p-4">
            <div class="row">
                <div class="col-4">
                    <p>'.$ligne1['Nom']. '</p>
                </div>
                <div class="col-4">' .$ligne1['Adresse_email']. '</div>
                <div class="col-4"/><a href="chat.php?ID_Utilisateur=' .$ligne1['ID_Utilisateur']. '&amp;Nom= '.$ligne1['Nom'].'" class="btn btn-default btn-rounded">Accéder à la discussion</a></div>
                     
                </div>
        </div>
    </div>';
}
}
?>