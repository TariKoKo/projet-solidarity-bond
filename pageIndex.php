<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Solidarity Bond</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="index">
    <!-- <div class="container-fluid">
        <nav>
            <div class="row justify-content-between m-0 align-items-center">
                <div class="row m-0 align-items-center">
                    <a href="pageIndex.php"><img src="assets/image/Logo_cesi.png"></a>
                    <h1 class="ml-5">Projet Solidarity Bond</h1>
                </div>
                
            </div>
        </nav>
    </div> -->
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand row m-0">
            <img class="logo" src="assets/image/Logo_cesi.png">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="ml-5 d-none d-lg-block">Projet Solidarity Bond</h1>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <?php include('displayBoutonConnexion.php'); ?>
        </li>
        </ul>
    </div>
    </nav>
    <div class="container-fluid mt-5">
        <h1 class="d-lg-none text-center d-block">Projet Solidarity Bond</h1>
        <div class="row text-center">
            <div class="col-lg-4  mt-5">
                <a class="text_logo" href="pageProjet.php"><img src="assets/image/Logo_projet.png">Notre projet</a>
            </div>
            <div class="col-lg-4  mt-5">
                <a class="text_logo" href="pageSolution.php"><img src="assets/image/Logo_solution.png">Notre solution</a>
            </div>
            <div class="col-lg-4  mt-5">
                <a class="text_logo" href="pageDiscussion.php"><img src="assets/image/Logo_discussion.png">Discussion</a>
            </div>
        </div>
    </div>
    <footer id="footer2" class="mt-5 mt-lg-0">
        <?php include('displayFooter.php'); ?>
    </footer>
</body>

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