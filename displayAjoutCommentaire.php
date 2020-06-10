<!-- <?php 
//if(!isset($_SESSION['id'])){

//} else {?> -->
<form method="POST" action="scriptCommentaire.php">
	<textarea class="container-fluid mt-4" name="commentaire" placeholder="Entrer votre message"></textarea><br />
	<input type="hidden" value="<?php echo $idDiscussion ?>" name="id">
	<input class="p-2" type="submit" value="Envoyer mon message">
</form>
<!-- <?php
//}
?> -->