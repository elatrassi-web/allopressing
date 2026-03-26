<!doctype html>
<html lang="en">

   
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
        <link href="css/vendor/themify-icons.css" rel="stylesheet">
        <link href="css/vendor/owl.carousel.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/commande.css">

        <link href="css/vendor/animate.css" rel="stylesheet">
        <link href="css/vendor/bootstrap-slider.min.css" rel="stylesheet">
        <script src="js/vendor/fontawesome-all.min.js"></script>
        <link href="css/scss/main.css" rel="stylesheet">
        <style>

            .menu {
                width:94em;
                margin-left:auto;
                margin-right:auto;
                margin-top:30px;

            }
            #logo img{
                width:50px;
                height:250px;
                margin-top:auto;
                margin-bottom:auto;
            }
            .logo-menu img {
                wdith:10px;
            }
            #allo-img {
                width: 190px;
                height: 90px;
                position: relative;
                margin-top: 8px;
                margin-right: 40px;            }
            .big-timob{
                display:none;
            }
            .title-mobile{
                display: none;
            }
            .title-web{
                display:block;
                text-align: center;
                color:white;
                font-size:30px;
                font-weight: bold;                
            }
            @media only screen and (max-width: 990px) {
                .title-mobile{
                    display:block;
                    text-align: center;
                    color:white;
                    font-size:18px;
                    font-weight: bold;
                }
                .title-web{
                    display: none;
                }


                .title{
                    font-size:0.9em;
                    padding-top:20px;
                }
                .title-slider{
                    font-size: 15px;
                    padding:0;
                    margin:0;
                }
                .cnt img{
                    display:none;
                }
                .hatt{
                    display: none;
                }
                .big-timob{
                    display:block;
                }
            }

        </style>
    </head>
    <body>
        <!-- pageloader -->

        <!-- / #pageloader -->
        <header>
            <?php require('menu-mobile.php') ?>
            <div class="main-header header-bg-0">
                <div class="header-width ">
                    <div class="row">
                        <div class="">
                            <nav class="nav-wrapper" id="myHeader">
                                <a href="index.php"><img id="allo-img" src="assets/img/logo.png" ></a>

                                <ul class="menu">
                                    <li><a href="index.php">Acceuil</a></li>
                                    <div class="dropdown">
                                        <li class="dropbtn"><a href="#">Nos Services</a></li>
                                        <div class="dropdown-content">
                                            <a href="livraison.php">Ramassage et livraison</a>
                                            <a href="express.php">Mode Express</a>
                                            <a href="sur-place.php">Sur place</a>
                                            <a href="repassage.php">Repassage</a>
                                            <a href="nettoyage.php">Nettoyage à sec</a>
                                            <a href="detachage.php">Détachage</a>
                                            <a href="teinture.php">Teinture</a>
                                            <a href="retouche.php">Retouche</a>
                                            <a href="cordonnerie.php">Cordonnerie</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <li class="dropbtn"><a href="#">Nos Promos</a></li>
                                        <div class="dropdown-content">
                                            <a href="./promo.php">Pack Bonne affaire</a>
                                            <a href="./carte_client_fidele.php">Carte Client fidèle</a>
                                            <a href="#">Cadeaux</a>
                                        </div>
                                    </div><li><a href="reponses-questions.php">Question Reponse</a></li>
                                    <li><a href="professionnel.php">Professionels</a></li>
                                    <li><a href="comment-payer.php">Comment Payer ?</a></li>
                                    <li><a href="./charte_de_qualité.php">Charte qualité</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                    <li><a href="#"><img src="assets/img/phone-call.png" width="32px" height="32px" alt="alt"/> 0619 399 999</a></li>

                                    <a href="passer-votre-commande.php"> <img class="com-menu" src="assets/img/passezlacommande.png"/></a>

                                </ul>
                            </nav>

                        </div>

                    </div>
                </div>
                <p class="title-mobile">Ramassage et livraison gratuite <br> Région Rabat   <img src="assets/img/phone-call.png" width="32px" height="32px" alt="alt"/> 0619 399 999</p>

                <p class="title">Pressing et blanchisserie - Collecte et livraison gratuite </p>
                <div class="logo-slider">
                    <div class="logo-slide-track">
                        <p class="title-slider">Rabat - Salé - Témara - Harhoura - Ain Aouda - Tamesna - Bouznika - Skhirat - Kénitra - Rabat - Salé - Témara - Harhoura - Ain Aouda - Tamesna - Bouznika - Skhirat - Kénitra 
                        </p>

                    </div>
                </div>

                <!-- / order form -->
                <div class="cnt">
                    <a href="passer-votre-commande.php"> <img src="assets/img/passezlacommande.png"/></a>
                </div>
            </div> 


        </header>
        <!-- / header -->


        <div class="search-relative">

            <!-- slider -->
            <div class="owl-carousel" id="fullscreen-slider">

                <div class="item height100vh" style="background-image: linear-gradient(rgba(45, 172, 189, 0.5), rgba(0, 0, 0, 0.5)),
                     url(assets/img/une1.jpg);">
                    <div class="page-head-wrap">
                        <div class="page-head-inner">
                            <div class="page-head-caption container text-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-11">

                                            <h2 class="big-title mb-10 animate" data-animation="fadeInRight" data-timeout="800">Fini La corv&eacute;e de linge !!</h2>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item height100vh" style="background-image: linear-gradient(rgba(181, 52, 34, 0.5), rgba(0, 0, 0, 0.5)),
                     url(assets/img/une3.png);">
                    <div class="page-head-wrap">
                        <div class="page-head-inner">
                            <div class="page-head-caption container text-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-11">

                                            <h2 class="big-title mb-10 animate hatt" data-animation="fadeInLeft" data-timeout="800">Facilitez-vous la vie !
                                            </h2>

                                            <h2 class="big-title mb-10 animate  big-timob" data-animation="fadeInLeft" data-timeout="800">Facilitez-vous la vie !</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item height100vh" style="  background-image: linear-gradient(rgba(81, 46, 120, 0.5), rgba(0, 0, 0, 0.5)),
                     url(assets/img/Presentation3.jpeg);">
                    <div class="page-head-wrap">
                        <div class="page-head-inner">
                            <div class="page-head-caption container text-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-11">

                                            <h2 class="big-title mb-10 animate hatt" data-animation="fadeInRight" data-timeout="800">Qualité, Efficacité et Efficience</h2>
                                            <h2 class="big-title mb-10 animate big-timob" data-animation="fadeInRight" data-timeout="800">Qualité, Efficacité et Efficience</h2>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- -->

                <div class="item height100vh" style="background-image: linear-gradient(rgba(45, 172, 189, 0.5), rgba(0, 0, 0, 0.5)),
                     url(assets/img/une4.jpg);">

                    <div class="page-head-wrap">
                        <div class="page-head-inner">
                            <div class="page-head-caption container text-right">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-11">

                                            <h2 class="big-title mb-10 animate hatt" data-animation="fadeInDown" data-timeout="800">Vous en serez pleinement satisfaits.</h2>
                                            <h2 class="big-title mb-10 animate big-timob" data-animation="fadeInDown" data-timeout="800">Vous en serez pleinement satisfaits.</h2>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item height100vh" style=" background-image: linear-gradient(rgba(45, 172, 189, 0.5), rgba(0, 0, 0, 0.5)),
                     url(assets/img/Presentation5.jpeg);">
                    <div class="page-head-wrap">
                        <div class="page-head-inner">
                            <div class="page-head-caption container text-left">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-11">

                                            <h2 class="big-title mb-10 animate hatt" data-animation="fadeInUp" data-timeout="800">Client...c'est un capital</h2>
                                            <h2 class="big-title mb-10 animate big-timob" data-animation="fadeInUp" data-timeout="800">Client...c'est un capital</h2>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <!-- / slider -->

            <!-- order form -->


        </div>

        <!-- / search-relative -->






        <!-- JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script>
            window.onscroll = function () {
                myFunction()
            };

            var header = document.getElementById("myHeader");
            var sticky = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }
        </script>
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/bootstrap-slider.min.js"></script>
        <script src="js/vendor/owl.carousel.min.js"></script>
        <script src="js/vendor/navigation.js"></script>
        <script src="js/vendor/modernizr.js"></script>
        <script src="js/vendor/jqueryvalidation.js"></script>






        <script src="js/main.js"></script>



    </body>

</html>
