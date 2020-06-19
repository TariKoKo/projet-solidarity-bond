<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="discussion">
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand row m-0" href="pageIndex.php">
            <img class="logo" src="assets/image/Logo_cesi.png">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="ml-5 d-none d-lg-block p-0">Discussion</h1>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ">
        <li class=" nav-item p-0 col-lg-4"> 
        <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 1){ ?>
            <div class=" mt-lg-4 mt-0 bd-highlight text-center"/><a href="#" onClick="history.back()" id="bouton-connect"
                class='btn btn-default btn-rounded'>Retour à la discussion</a>
            </div>
        <?php } ?>
        </li>
        </li>
        <li class="nav-item ">
            <?php include('displayBoutonConnexion.php'); ?>
        </li>
        </ul>
    </div>
    </nav>
    <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 1){ ?>
    <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-3"></div>
                <div class="col-lg-4 col-sm-6 couleur-inscription">
                    <h4 class="card-title mt-3 text-center">Commande</h4>

                    <!-- création bouton nom de l'entreprise-->

                    <form method="post" action="scriptCommande.php" autocomplete="on">

                        <!-- création Bouton adresse mail -->

                        <div id=register class="form-group">
                            <label for="Inputemail">Adresse email</label>
                            <input type="email" class="form-control" id="InputEmail" name="Adresse_email"
                                placeholder="votreadresse@exemple.com" required="required">
                        </div>

                        <div id=register class="form-group">
                            <label for="Quantite">Quantité de crochet</label>
                            <input type="number" class="form-control" id="Quantite" name="Quantite" maxlength="5"
                                placeholder="Quantité" required="required">
                        </div>

                        <!-- Bouton pour créer son compte-->
                        <p class="signin button">
                            <input type="submit" value="Valider ma commande" id="submitButton" class="form-control" />
                        </p>
                    </form>
                </div>
                <div class="col-lg-4 col-sm-3"></div>
            </div>
        </div>
    <?php } else {?>
    <div id="container" class="container mt-5">
        <h4 class="text-center p-5">Vous n'avez pas accès à la discussion ! </br> Pour y accéder veuillez vous
            connecter, si vous venez de vous inscrire alors vous devrez attendre qu'un admin valide votre inscription.
        </h4>
    </div>
    <?php } ?>
    <footer id="footerInscription" class="mt-5 mt-lg-0">
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