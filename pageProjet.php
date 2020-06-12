<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre projet</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="projet">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-1">

            </div>
            <div class="col-1">
                <a href="pageIndex.php"><img src="assets/image/Logo_cesi_blanc.png"></a>
            </div>
            <div class="col-8 mt-4">
                <h1 class="text-white">Notre Projet</h1>
            </div>
            <div> <?php include('displayBoutonConnexionBlanc.php'); ?> </div>
        </div>
    </div>
    <div id="container" class="container mt-5 text-justify mb-5">
        <div class="row p-5">
            <div class="col-5">
                <h3 class="text-center">Présentation du projet</br></h3>
                </br>
                <p>
                    Le confinement imposé en France comme dans beaucoup d’autres pays du monde, a des conséquences
                    directes sur l’économie. Les échanges commerciaux et la consommation sont mis à mal. Il est
                    important pour notre pays de stabiliser les pertes dans un premier temps et de remettre en marche
                    les activités dans un second. En plus d’une crise sanitaire sans précédent, la France pourrait avoir
                    de grandes difficultés si l’ensemble des organisations ne retrouvent pas un fonctionnement minimal
                    sous peu. En l’absence, pour l’heure, de traitements médicaux cliniques, la seule possibilité pour
                    enrayer l’épidémie et sauver des vies, subsiste dans la mise en place des gestes barrières et
                    l’acquisition d’équipements de protection. L’actualité nous prouve tous les jours que l’acquisition
                    de ces équipements est délicate. La désindustrialisation du territoire a sa part de responsabilité
                    dans nos difficultés, et il prendrait des années avant de retrouver une efficacité en adéquation
                    avec le besoin des populations et des organisations. De manière plus globale, la stratégie du moment
                    tend plutôt dans la fragmentation massive des unités de production et se dirige sur une répartition
                    géographique équilibrée des unités, favorisant ainsi les circuits courts de distribution.
                    Nous allons localement nous inscrire dans cette stratégie en créant une organisation humaine qui
                    proposera une solution technologique, permettant de mettre en relation les demandeurs en besoin
                    d’équipements de protection et le fablab de notre école en capacité d’en produire. Nous aurons à
                    disposition tout le matériel disponible dans celui-ci, et Nous aurons la capacité de produire des
                    solutions technologiques.</p>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <h3 class="text-center">Les besoins des entreprises</br></h3>
                </br>
                <p>
                    Ayant déjà discuter avec plusieurs entreprises, nous pouvons énoncer leurs besoins majeurs. En tant
                    qu’entreprise, pour éviter la propagation du covid 19, des masques et des gants doivent être mis à
                    disposition. De plus, pour assurer les mesures de distanciation, les entreprises ont dû réduire le
                    nombre de personne assistant aux réunions. De même pour les postes de travail où l’effectif se voit
                    réduit, les équipes de production ont été remodelé pour assurer le bon fonctionnement de
                    l’entreprise. Il y a également des plaques de plexiglass mis entre chaque poste pour augmenter la
                    sécurité des employées. L’aménagement des salles s’est vu aussi modifié pour respecter la
                    distanciation. </br> </br>
                    En outre, des masques et du gel hydroalcoolique sont à disposition pour tous les employés. Les
                    horaires de repas ont dû être divisées en plusieurs services afin de respecter les gestes barrières
                    durant les pauses du midi. Des visières pourraient être mis à disposition dans les métiers physiques
                    nécessitant une respiration ne pouvant être adapté à un simple masque.
                    </br></br>
                    De plus, dans certains cas, les visières et les masques cumulés pourraient être une solution
                    adéquate.
                    En supplément, des prises de température pourraient se révéler très efficace lorsque des chauffeurs
                    (ou toutes autres personnes) externes venaient à intervenir dans l’entreprise.
                    Néanmoins, quand cela est possible, le télétravail reste la meilleure solution pour éviter les
                    regroupements inutiles. </p>
            </div>
        </div>
        <img class="pb-4" id="crochet" src="assets/image/coronavirus.jpg">
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