<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Solidarity Bond</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="compte">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand row m-0" href="pageIndex.php">
            <img class="logo" src="assets/image/Logo_cesi.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="ml-5 d-none d-lg-block p-0">Projet Solidarity-Bond</h1>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <?php include('displayBoutonConnexion.php'); ?>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container card ">
        <div class="row">
            <div class="col-lg-3 couleurCompte pt-lg-3">
                <h3>Compte</h3> 
            </div>
            <div class="col-lg-9 couleurCompte2 pt-lg-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>ADDRESSE E-MAIL</h4>
                        <p><?php echo ($_SESSION['email']);  ?></p>
                    </div>
                    <div class="col-lg-6 mt-lg-4">
                        <a href="displayChangementEmail.php"><img class="dimension_Logo" src="assets/image/Logo_changement.png"
                                alt="logo changement"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h4>MOT DE PASSE</h4>
                        <p><?php echo '***********************************'  ?></p>
                    </div>
                    <div class="col-lg-6 mt-lg-4">
                        <a href="displayChangementMdp.php"><img class="dimension_Logo" src="assets/image/Logo_changement.png"
                                alt="logo changement"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h4>NUMERO DE TELEPHONE</h4>
                        <p><?php echo ($_SESSION['numero']);  ?></p>
                    </div>
                    <div class="col-lg-6 mt-lg-4">
                        <a href="displayChangementNumero.php"><img class="dimension_Logo" src="assets/image/Logo_changement.png"
                                alt="logo changement"></a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-3 couleurCompte">
                <h3 class="Suividelivraison">Suivi commande</h3>
                </div>
                <div class="col-lg-9 couleurCompte2">
                <div>
                    <h4>DETAIL DE LA COMMANDE</h4>
                    <p>Nombre de crochet : x</p>
                </div>
                <div>
                    <h4>ETAT DE LA COMMANDE</h4>
                    <p>En cours de préparation</p>
                </div>
                </div>
            </div>
                <div class="row couleurCompte">
                <div class="historique col-lg-3 ">
                    <a class="stylehistorique" href="pageCommande.php">Historique des commandes</a>
                </div>
                <div class="col-lg-9 couleurCompte2"></div>
                </div>
            </div>
        </div>
    <footer id="footerCompte" class="mt-5 mt-lg-0">
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