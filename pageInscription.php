<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="inscription">
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
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-3"></div>
                <div class="col-lg-4 col-sm-6 couleur-inscription">
                    <h4 class="card-title mt-3 text-center">Créer son compte</h4>

                    <!-- création bouton nom de l'entreprise-->

                    <form method="post" action="scriptInscription.php" autocomplete="on">
                        <div id="register" class="form-group">
                            <label for="usernamesignup">Nom de l'entreprise</label>
                            <input type="text" class="form-control" id="usernamesignup" maxlength="30" Name="Nom"
                                placeholder="Nom de l'entreprise" required="required">
                        </div>


                        <!-- création bouton numéro -->

                        <div id="register" class="form-group">
                            <label for="Phonenumber">Numéro de téléphone</label>
                            <input type="number" class="form-control" id="numéro" name="Numero_tel" maxlength="10"
                                placeholder="Numéro de téléphone" required="required">
                        </div>

                        <!-- création Bouton adresse mail -->

                        <div id=register class="form-group">
                            <label for="Inputemail">Adresse email</label>
                            <input type="email" class="form-control" id="InputEmail" name="Adresse_email"
                                placeholder="votreadresse@exemple.com" required="required">
                        </div>

                        <!-- création Bouton Mot de passe -->

                        <div id="register" class="form-group">
                            <label for="passwordsignup">Mot de passe</label>
                            <input type="password" class="form-control" id="passwordsignup" name="Mot_de_passe"
                                maxlength="12" placeholder="Mot de passe" required="required">
                            <small id="emailHelp" class="form-text text-muted">Mettre au minimum une majuscule et un
                                chiffre
                            </small>
                        </div>

                        <div class="case-a-cocher">
                            <input type="checkbox" name="cgu" class="form-check-input" id="exampleCheck1"
                                required="required">
                            <label class="form-check-label" for="exampleCheck1">Cliquer ici pour accepter les <a
                                    href="pageCGU.php">Conditions Générales d'Utilisation</a> </label>
                        </div>

                        <!-- Bouton pour créer son compte-->
                        <p class="signin button">
                            <input type="submit" value="S'inscrire" id="submitButton" class="form-control" />
                        </p>
                    </form>
                </div>
                <div class="col-lg-4 col-sm-3"></div>
            </div>
        </div>
    </main>
    <footer id="footerInscription" class="mt-5 mt-lg-0">
        <?php include 'displayFooter.php' ?>
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