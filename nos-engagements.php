<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/nos-engagements.css">
        <link rel="shortcut icon" href="assets/img/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <title>Allo pressing</title>
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
             @media only screen and (max-width: 900px){

.img-allo img{
    width:500px;
    margin-left:auto;
    margin-right:auto;
    display:block;
}
 }
        </style>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-203843026-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-203843026-1');
</script>
    </head>
<body>
    <header>
        <?php require('menu-mobile.php') ?>
        <?php require('menu.php') ?>
    </header>
    <div class="container">
        <h1>Nos engagements</h1>
        <p class="bor"></p>
        <div class="row">
            <div class="col-md-3 col-sm-6 ">
                <div class="service-box">
                    <div class="service-icon srv-icon">
                        <div class="front-content">
                            <i><img src="assets/img/quality.png"></i>
                            <h3>Service </h3>
                        </div>
                    </div>
                    <div class="service-content srv-cont">
                        <h3>Service </h3>
                        <p>Nous vous garantissons un service de qualité</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="service-box">
                    <div class="service-icon srv-cont">
                        <div class="front-content">
                            <i><img src="assets/img/iron.png"></i>
                            <h3>Repassage</h3>
                        </div>
                    </div>
                    <div class="service-content srv-icon">
                        <h3>repassage et nettoyage</h3>
                        <p>•  Nous effectuons un repassage et nettoyage de qualité dans nos locaux.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-box ">
                    <div class="service-icon srv-icon">
                        <div class="front-content">
                            <i><img src="assets/img/honesty.png"></i>
                            <h3>Respecter</h3>
                        </div>
                    </div>
                    <div class="service-content srv-cont">
                        <h3>respecter les horaires</h3>
                        <p>Nous nous engageons à respecter les horaires définis</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-box">
                    <div class="service-icon srv-cont">
                        <div class="front-content">
                            <i><img src="assets/img/linge.png"> </i>
                            <h3>Linge</h3>
                        </div>
                    </div>
                    <div class="service-content srv-icon">
                        <h3>linge</h3>
                        <p>Nous prenons soin du linge que vous nous avez confié.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-box">
                    <div class="service-icon srv-icon">
                        <div class="front-content">
                            <i > <img src="assets/img/lessiviel.png"></i>
                            <h3>Des produits</h3>
                        </div>
                    </div>
                    <div class="service-content srv-cont">
                        <h3>Des produits</h3>
                        <p>Nous utilisons des produits lessiviels et emballages éco-responsables. Ensemble respectons notre environnement.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-box">
                    <div class="service-icon  srv-cont">
                        <div class="front-content">
                            <i><img src="assets/img/tri.png"></i>
                            <h3>Le tri </h3>
                        </div>
                    </div>
                    <div class="service-content srv-icon">
                        <h3>Le tri </h3>
                        <p>Nous vous assistons dans Le tri de votre linge et Le choix du programme de lavage</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-box">
                    <div class="service-icon srv-icon">
                        <div class="front-content">
                            <i><img src="assets/img/gloves.png"></i>
                            <h3>équipe spécialisée </h3>
                        </div>
                    </div>
                    <div class="service-content srv-cont">
                        <h3>équipe spécialisée </h3>
                        <p>Nous avons à disposition une équipe spécialisée et expérimentée à votre écoute.</p>
                    </div>
                </div>
            </div>
            <div class="img-allo">
                <img src="assets/img/logo.png">

            </div>
        </div>
    </div>

    <!-- footer-->
    <?php require('resources/footer.php'); ?>

</body>
</html>