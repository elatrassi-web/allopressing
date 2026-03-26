<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="assets/css/payer.css">
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


        <!--menu-->


        <!-- texte service-->
        <div class="wrapper">
            <h1>Modes de paiement</h1><br>
            <p>Il existe différents moyens pour effectuer des paiements :</p>
            <div class="timeline">
                <dl class="timeline--entry">
                    <dt class="timeline--entry__title">Paiement par carte bancaire (TPE Mobile)</dt>
                    <dd class="timeline--entry__detail">La transmission de vos informations personnelles et de vos données bancaires est sécurisée.<img src="assets/img/TPE.png"></dd>
                </dl>
                <dl class="timeline--entry">
                    <dt class="timeline--entry__title">Le paiement par chèque</dt>
                    <dd class="timeline--entry__detail"> La somme maximale acceptée pour le paiement par chèque est de 500 dh.<img src="assets/img/Cheques.png"> </dd>
                </dl>
                <dl class="timeline--entry">
                    <dt class="timeline--entry__title">Espèce</dt>
                    <dd class="timeline--entry__detail"><img src="assets/img/especes.jpeg"></dd>
                </dl>
                <dl class="timeline--entry">
                    <dt class="timeline--entry__title">Application Allo Pressing : Prochainement</dt>
                    <dd class="timeline--entry__detail"><img src="assets/img/application_telephonne.png"></dd>
                </dl>

            </div>
        </div>
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">

        </script>
        <!-- footer-->
        <?php require('resources/footer.php'); ?>
    </body>
</html>