<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <header>

    </header>
    <main>
        <div class="container">
            <h4 class="card-title mt-3 text-center">Inscription</h4>

            <!-- création bouton nom -->

            <form method="post" autocomplete="on">
                <div id="register" class="form-group">
                    <label for="usernamesignup">Nom de l'entreprise</label>
                    <input type="text" class="form-control" id="usernamesignup" maxlength="30" Name="Nom_Personne"
                        placeholder="Nom de l'entreprise">
                </div>


                <!-- création bouton prénom -->

                <div id="register" class="form-group">
                    <label for="Phonenumber">Numéro de téléphone</label>
                    <input type="number" class="form-control" id="numéro" name="numéro_téléphone" maxlength="10"
                        placeholder="Numéro de téléphone">
                </div>

                <!-- création Bouton adresse mail -->

                <div id=register class="form-group">
                    <label for="Inputemail">Adresse email</label>
                    <input type="email" class="form-control" id="InputEmail" Name="Adresse_eMail"
                        placeholder="votreadresse@exemple.com">
                </div>

                <!-- création Bouton Mot de passe -->

                <div id="register" class="form-group">
                    <label for="passwordsignup">Mot de passe</label>
                    <input type="password" class="form-control" id="passwordsignup" name="Mot_De_Passe" maxlength="12"
                        placeholder="Mot de passe">
                    <small id="emailHelp" class="form-text text-muted">Mettre au minimum une majuscule et un chiffre
                        !</small>
                </div>


                <input type="checkbox" name="cgu" class="form-check-input" id="exampleCheck1" required="required">
                <label class="form-check-label" for="exampleCheck1">Cliquer ici pour accepter les <a
                        href="mentionslégales.php">mentions légales</a> </label>

                <!-- Bouton pour créer son compte-->
                <p class="signin button">
                    <input type="submit" value="S'inscrire" id="submitButton" class="form-control"/>
                </p>
            </form>
    </main>
    <footer>
        <!-- <?php include 'footer.php' ?> -->
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