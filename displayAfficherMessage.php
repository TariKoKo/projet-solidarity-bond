<?php 
include('scriptBDD.php');

if(isset($_SESSION['status']) && $_SESSION['status'] == 2){

	$Num = $_SESSION['ID_Recup'];
	$requete = $bdd->prepare("SELECT * FROM messages WHERE ID_Discussion = :ID_Utilisateur ORDER BY ID");
	$requete->bindValue(':ID_Utilisateur', $Num, PDO::PARAM_STR);
	$requete->execute();

	while($ligne=$requete->fetch()){ 
		
		if ($ligne['ID_Utilisateur'] != 5) {
			echo '	<div class="received_msg">
	            		<div class="received_withd_msg">
			                <p>'.$ligne['Texte'].'</p>
			            </div>
	       		</div>';
		}
	    elseif ($ligne['ID_Utilisateur'] = 5) {
	    	echo '	    <div class="outgoing_msg">
			        <div class="sent_msg">
			            <p>'.$ligne['Texte'].'</p>
			        </div>
				</div>';
	    }
	}
}

elseif (isset($_SESSION['status']) && $_SESSION['status'] == 1){

	$Num = $_SESSION['ID_Recup'];
	$requete = $bdd->prepare("SELECT * FROM messages WHERE ID_Discussion = :id ORDER BY ID");
	$requete->bindValue(':id', $_SESSION['id'], PDO::PARAM_STR);
	$requete->execute();

	while($ligne=$requete->fetch()){ 
		
		if ($ligne['ID_Utilisateur'] != $_SESSION['id']) {
			echo '	<div class="received_msg">
	            		<div class="received_withd_msg">
			                <p>'.$ligne['Texte'].'</p>
			            </div>
	       		</div>';
		}
	    elseif ($ligne['ID_Utilisateur'] = $_SESSION['id']) {
	    	echo '	    <div class="outgoing_msg">
			        <div class="sent_msg">
			            <p>'.$ligne['Texte'].'</p>
			        </div>
				</div>';
	    }
	}
}

?>