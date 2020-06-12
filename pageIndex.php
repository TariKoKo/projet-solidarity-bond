<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Solidarity Bond</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="index">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-1">
            </div>
            <div class="col-1">
                <a href="pageIndex.php"><img src="assets/image/Logo_cesi.png"></a>
            </div>
            <div class="col-8 mt-4">
                <h1>Projet Solidarity-Bond</h1>
            </div>
            <div> <?php include('displayBoutonConnexion.php'); ?> </div>
        </div>
    </div>
    <div class="container-fluid mt-5"></br></div>
    <div class="container-fluid mt-5">
        <div class="row text-center">
            <div class="col-4 mt-5">
                <a id="text_logo" href="pageProjet.php"><img src="assets/image/Logo_projet.png">Notre projet</a>
            </div>
            <div class="col-4 mt-5">
                <a id="text_logo" href="pageSolution.php"><img src="assets/image/Logo_solution.png">Notre solution</a>
            </div>
            <div class="col-4 mt-5">
                <a id="text_logo" href="pageDiscussion.php"><img src="assets/image/Logo_discussion.png">Discussion</a>
            </div>
        </div>
    </div>
    <footer id="footer2">
        <?php include('displayFooter.php'); ?>
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