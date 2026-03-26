<?php 
if (isset($_POST['env-conta'])){
          $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
        $message = $_POST['message'];


    $sujet='Contact';
                $headers = 'From: Allopressing.ma' . "\r\n" .
    $headers .= 'Content-Type: text/html; charset="iso-8859-1"' . "\n";

    $message="<html>
<body>  
<h1 style=\"color:black;\">Prénom : $firstname</h1>
<h1 style=\"color:black;\"> Nom : $lastname </h1>
<h1 style=\"color:black;\">Email : $email </h1>
<h1 style=\"color:black;\">Numéro : $phone </h1>
<h4 style=\"color:black;\" > Message : $message </h4>


       </body>
       </html>
                 ";

    $destinataires = "m.elatrassi19@gmail.com";
     $destinataires2 = "allopressing.maroc@gmail.com";
    $destinataires3 = "contact@allopressing.ma";
    $destinataires4 = "allo@allopressing.ma";
    $destinataires5 = "cleanhouse.maroc@gmail.com";
   mail($destinataires, $sujet, $message, $headers);
  mail($destinataires2, $sujet, $message, $headers);
    mail($destinataires3, $sujet, $message, $headers);
    mail($destinataires4, $sujet, $message, $headers);
    mail($destinataires5, $sujet, $message, $headers);
 
  
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Allo Pressing</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="contact/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="contact/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="contact/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="contact/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="contact/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="contact/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="contact/css/util.css">
        <link rel="stylesheet" type="text/css" href="contact/css/main1.css">
        <!--===============================================================================================-->
        <style type="text/css">
            .social-btns .btn,
            .social-btns .btn:before,
            .social-btns .btn .fa {
                transition: all 0.35s;
                transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
            }
            .social-btns .btn:before {
                top: 1%;
                left: -110%;
            }
            .social-btns .btn .fa {
                transform: scale(0.8);
            }
            .social-btns .btn.facebook:before {
                background-color: #3b5998;
            }
            .social-btns .btn.facebook .fa {
                color: #3b5998;
            }
            .social-btns .btn.twitter:before {
                background-color: #DD2A7B;
            }
            .social-btns .btn.twitter .fa {
                color: #DD2A7B;
            }
            .social-btns .btn.google:before {
                background-color: #dc4a38;
            }
            .social-btns .btn.google .fa {
                color: #dc4a38;
            }
            .social-btns .btn.dribbble:before {
                background-color: #f26798;
            }
            .social-btns .btn.dribbble .fa {
                color: #f26798;
            }
            .social-btns .btn.skype:before {
                background-color: #4FCE5D;
            }
            .social-btns .btn.skype .fa {
                color: #4FCE5D;
            }
            .social-btns .btn:focus:before,
            .social-btns .btn:hover:before {
                top: -10%;
                left: -10%;
            }
            .social-btns .btn:focus .fa,
            .social-btns .btn:hover .fa {
                color: #fff;
                transform: scale(1);
            }
            .social-btns {
                height: 90px;
                margin: auto;
                font-size: 0;
                text-align: center;
                position: absolute;
                top: 650px;
                bottom: 0;
                left: 0;
                right: 0;
            }
            .social-btns .btn {
                display: inline-block;
                background-color: #fff;
                width: 60px;
                height: 55px;
                line-height: 50px;
                margin: 0 10px;
                text-align: center;
                position: relative;
                overflow: hidden;
                border-radius: 28%;
                box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
                opacity: 0.99;
            }
            .social-btns .btn:before {
                content: '';
                width: 120%;
                height: 120%;
                position: absolute;
                transform: rotate(45deg);
            }
            .social-btns .btn .fa {
                font-size: 38px;
                vertical-align: middle;
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
            

        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form" role="form" action="contact.php" method="post" id="formcon" accept-charset="character_set">
                    <span class="contact100-form-title">
                        Communiquez avec nous
                    </span>

                    <label class="label-input100" for="first-name"> VOTRE NOM *</label>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                        <input id="first-name" class="input100" type="text" name="first-name" id="firstname" placeholder="Prénom">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                        <input class="input100" type="text" name="last-name" id="lastname" placeholder="Nom">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="email"> votre Email *</label>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100" type="text" name="email" id="email" placeholder="Ex. example@email.com">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="phone"> votre Numero</label>
                    <div class="wrap-input100">
                        <input id="phone" class="input100" type="text" name="phone" id="phone" placeholder="Ex. +2126 000 000">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="message">Message *</label>
                    <div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <textarea id="message" class="input100" name="message" id="message" placeholder="Écrivez-nous un message "></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn" name="env-conta">
                            Envoyez
                        </button>
                    </div>
                </form>

                <div class="contact100-more flex-col-c-m" style="background-image: url('assets/img/qui-sommes-nous1.jpg');">
                    <div class="flex-w size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-map-marker"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Adresse pour correspondance
                            </span>

                            <span class="txt2">
                                BP21211, Agence ANNAKHIL, Hay Riad Rabat
                            </span>
                        </div>
                    </div>

                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Parlons-en 
                            </span>

                            <span class="txt3">
                                Commande :<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0537 58 01 59<br>
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  0619 399 999
                            </span>
                            <span class="txt3">
                                Service client :<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0669 257 835<br> 
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  0669 258 943   <br>    
                            </span>

                        </div>
                    </div>

                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-envelope"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Assistance générale
                            </span>

                            <span class="txt3">
                                allo@allopressing.ma
                            </span>
                        </div>
                    </div>
                    <div class="flex-col size3">
                        <span class="txt1 p-b-20">
                            Socialisez nous

                        </span>
                        <div class="social-btns">

                            <a class="btn facebook" href="https://www.facebook.com/Allo-Pressing-111568271011425 target="_blank""><i class="fa fa-facebook"></i></a>
                            <a class="btn twitter" href="https://www.instagram.com/allopressing.rabat/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a class="btn google" href="#"><i class="fa fa-google"></i></a>
                            <a class="btn skype" href="https://api.whatsapp.com/send?phone=212619399999"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </div>



        <div id="dropDownSelect1"></div>
        <?php require('resources/footer.php') ?>

        <!--===============================================================================================-->
        <script src="contact/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="contact/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="contact/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="contact/vendor/select2/select2.min.js"></script>

        <!--===============================================================================================-->
        <script src="contact/vendor/daterangepicker/moment.min.js"></script>
        <script src="contact/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="contact/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="contact/js/main.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
    </body>
</html>
