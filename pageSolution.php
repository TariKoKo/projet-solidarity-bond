<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre solution</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="solution">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand row m-0" href="pageIndex.php">
            <img class="logo" src="assets/image/Logo_cesi_blanc.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="ml-5 d-none d-lg-block p-0 text-white">Notre Solution</h1>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <?php include('displayBoutonConnexionBlanc.php'); ?>
                </li>
            </ul>
        </div>
    </nav>
    <div id="container" class="container mt-5 text-justify">
        <div class="row p-sm-5 p-2">
            <div class="col-lg-3 pl-4">
                <h3>Caractéristiques : </br></br></h3>
                <p> 
                • Facile à transporter partout </br></br>
                • Peut ouvrir les portes  </br></br>
                • Peut appuyer sur les boutons d'ascenseur, et tous les autres contacts quotidiens </br></br>
                • Peut servir de porte-clés sans risque de contaminer les autres clefs</p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <img id="crochet" src="assets/image/Crochet.png">
            </div>
        </div>
        <img id="crochet2" src="assets/image/CrochetAmélioré.png">
        <p class="p-sm-5 p-2">
            Hauteur : 5.00 mm </br></br>
            Tous les Fillets (soudure d’angle sur tous les côtés) : Radius = 0.50 mm ; Diamètre = 1.00 mm  </br>
            Fabrication : Imprimante 3D  </br></br>
            Matière : L'ABS (acrylonitrile butadiène styrène) </br>
            C'est l'autre matériau préféré des utilisateurs de machines de type FDM. L'exemple donné le plus souvent est celui des briques de Lego, composées d'ABS. Il offre des propriétés plus intéressantes que le PLA en termes de résistance à l'eau et à la chaleur. De plus, son rendu est plus lisse que ce qu'offre le PLA. Il demande donc généralement moins de traitement à la sortie de la machine. </br></br>
            L'ABS demande une température de 200 à 250°C pour fondre. Il lui faut aussi un plateau chauffant pour éviter qu'il ne se rétracte en refroidissant. Il existe en plusieurs couleurs et peut se trouver sous forme de bobines de filament ou sous forme de polymère liquide pour le procédé SLA.</p>
    </div>
    <footer>
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