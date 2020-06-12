<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partenariats</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="partenariats">
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
        <div class="container-fluid mt-4">
            <div id="photoEvenement" class="row justify-content-center">
                <div class="card  p-2">
                    <img class="card-img-top" src="assets/image/carrefour.png" alt="carrefour">
                </div>
                <div class="col-1"></div>
                <div class="card  p-2">
                    <img class="card-img-top" src="assets/image/leclerc.png" alt="leclerc">
                </div>
            </div>
    </main>
    <footer id="footer2">
        <?php include('displayFooter.php'); ?>
    </footer>
</body>

</html>