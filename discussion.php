<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="discussion">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-1">

            </div>
            <div class="col-1">
                <a href="index.php"><img src="assets/image/Logo_cesi.png"></a>
            </div>
            <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 2){ ?>
            <div class="col-6 mt-4"><h1>Discussion</h1></div>
            <div class='col-2 mt-4 bd-highlight' /><a href=''id="bouton-connect" class='btn btn-default btn-rounded'>Gérer les inscriptions</a></div>
            <?php } else {?>
            <div class="col-8 mt-4">
                <h1>Discussion</h1>
            </div>
            <?php } ?>

            <div> <?php include('boutonConnexion.php'); ?> </div>
        </div>
    </div>
    <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 2){ ?>
    <div id="container" class="container mt-5">
        <h2 class="text-center">Liste de discussion</h2>
        <div class="container">
            
        </div>
    </div>
    <?php } elseif (isset($_SESSION['status']) && $_SESSION['status'] == 1) { ?>
    <div id="container" class="container mt-5">
        <h2 class="text-center">Messagerie</h2>
        <div class="container">
            <h2 class="commentaire p-4">Message :</h2>
            <?php include('displayCommentaire.php')?>
            <?php include('displayAjoutCommentaire.php')?>
        </div>
    </div>
    <?php } else {?>
    <div id="container" class="container mt-5">
    <h4 class="text-center p-5">Vous n'avez pas accès à la discussion ! </br> Pour y accéder veuillez vous connecter, si vous venez de vous inscrire alors vous devrez attendre qu'un admin valide votre inscription.</h4>
    </div>
    <?php } ?>
    <footer id="footer2">
        <?php include('footer.php'); ?>
    </footer>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>

</html>