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
            <div class="col-6 mt-4">
                <h1>Discussion</h1>
            </div>

            <!-- Si admin -->
            <div class='col-2 mt-4 bd-highlight' /><a href=''id="bouton-connect" class='btn btn-default btn-rounded'>Gérer les inscriptions</a></div>
            <!-- ... -->

            <div> <?php include('boutonConnexion.php'); ?> </div>
        </div>
    </div>
    <div id="container" class="container mt-5">
        <h2 class="text-center">Service de messagerie</h2>
        <div class="container">
            <h2 class="commentaire p-4">Message :</h2>
            <?php include('displayCommentaire.php')?>
            <?php include('displayAjoutCommentaire.php')?>
        </div>
    </div>
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