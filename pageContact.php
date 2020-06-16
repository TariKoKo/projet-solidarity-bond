<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="contact">
    <header>
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
    </header>
    <main>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-sm mt-5">
                    <img src="assets/image/contact_pierre.jpg" class="card-img-top" id="dimension_contact" alt="Pierre">
                    <div class="card-body text-center">
                        <p>Collaborateur</p>
                        <h5 class="card-title">Pierre LE GUIDEVAIS</h5>
                        <p class="card-text">pierre.leguidevais@viacesi.fr</br>07.78.70.11.97</p>
                    </div>
                </div>
                <div class="col-sm mt-5">
                    <img src="assets/image/contact_romain.jpg" class="card-img-top" id="dimension_contact" alt="Romain">
                    <div class="card-body text-center">
                        <p>Chef de projet</p>
                        <h5 class="card-title">Romain MALARMEY</h5>
                        <p class="card-text">romain.malarmey@viacesi.fr</br>06.73.08.88.77</p>
                    </div>
                </div>
                <div class="col-sm mt-5">
                    <img src="assets/image/contact_dona.jpg" class="card-img-top" id="dimension_contact" alt="Dona">
                    <div class="card-body text-center">
                        <p>Collaborateur</p>
                        <h5 class="card-title">Dona GOUSSANOU</h5>
                        <p class="card-text">dona.goussanou@viacesi.fr</br>07.53.64.26.81</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer id="footerContact" class="mt-5 mt-lg-0">
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