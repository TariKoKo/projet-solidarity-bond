<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partenariats</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>

<body id="contact">
    <header>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-1">
                </div>
                <div class="col-1">
                    <a href="index.php"><img src="assets/image/Logo_cesi.png"></a>
                </div>
                <div class="col-8 mt-4">
                    <h1>Projet Solidarity-Bond</h1>
                </div>
                <div> <?php include('boutonConnexion.php'); ?> </div>
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
    <footer id="footer2">
        <?php include('footer.php'); ?>
    </footer>
</body>

</html>