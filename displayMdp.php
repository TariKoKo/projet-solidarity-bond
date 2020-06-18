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
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand row m-0" href="pageIndex.php">
            <img class="logo" src="assets/image/Logo_cesi.png">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-3"></div>
                <div class="col-lg-4 col-sm-6 couleur-inscription">
                    <h4 class="card-title mt-3 text-center">Changement de mot de passe</h4>

                    <form method="post" action="scriptMdp.php" autocomplete="on">

                        <div id='register' class='form-group text-center'>
                            <label data-error='wrong' required='required' data-success='right' for='email'>Email</label>
                            <input type='email' id='email' name='Adresse_email' placeholder="Adresse email" class='form-control validate'>
                        </div>

                        <div id="register" class="form-group text-center">
                            <label for="passwordsignup">Nouveau mot de passe</label>
                            <input type="password" class="form-control" id="passwordsignup" name="Mot_de_passe"
                                maxlength="12" placeholder="Mot de passe" required="required">
                                <small id="emailHelp" class="form-text text-muted">Mettre au minimum une majuscule et un
                                chiffre
                                </small>
                        </div>

                        <div id="register" class="form-group text-center">
                            <label for="passwordsignup">Confirmer nouveau mot de passe</label>
                            <input type="password" class="form-control" id="passwordsignup" name="ConfMot_de_passe"
                                maxlength="12" placeholder="Mot de passe" required="required">
                            <small id="emailHelp" class="form-text text-muted">Mettre au minimum une majuscule et un
                                chiffre
                            </small>
                        </div>

                        <!-- Bouton pour créer son compte-->
                        <p class="signin button">
                            <input type="submit" value="Valider" id="submitButton" class="form-control" />
                        </p>
                    </form>
                </div>
                <div class="col-lg-4 col-sm-3"></div>
            </div>
        </div>
    <footer id="footerIndex" class="mt-5 mt-lg-0">
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