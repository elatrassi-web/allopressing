<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>le Pressing</title>

        <link rel="shortcut icon" href="assets/img/icon.png">


        <style type="text/css">
            * {
                box-sizing: border-box;
            }

            /* Create two equal columns that floats next to each other */
            .column {
                float: right;
                width: 50%;
                height: auto;
                top: 50%;
                left: 50%;
                /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;

            }
            .row{

                height:auto;
                margin: auto;
                padding-left: auto;
                padding-right: auto;
            }
            .row p {
                font-size: 22px;
                font-family: roboto;
                color: black;
                font-weight: 300;
                list-style-type: normal;
                padding-left: 39px;
                padding-right: 20px;
                height: 500px;
                width: 690px;
                padding-top: 80px;
                padding-bottom:150px;


            }
            .titre h2{
                text-align: center;
                color: #5DFC70;
                line-height: 30px;
                font-size: 33px;
                font-weight: bold;
                font-family: Raleway;
                padding-top:10px;
                padding-bottom: 12px;
            }
            .bor{
                border-bottom: 1px solid #0D80C0;
                margin-left: 550px;
                margin-right: 550px;
            }
            .column img{

            }
            .astuce{
                padding-bottom: 20px;

            }
            .astuce button{
                left: 0;
                right: 0;
                background-color: #5DFC70;
                position: relative;
                display: block;
                border:1px solid #5DFC70;
                border-radius: 8px;
                width: 200px;
                height: 50px;
                top: 50%;
                left: 45%;
                text-decoration: none;
                font-family: Raleway;
                font-size: 20px;
                font-weight: bold;
                color: #747474;

            }


            a:link {
                text-decoration: none;
            }

            a:visited {
                text-decoration: none;
            }

            a:hover {
                text-decoration: none;
            }

            a:active {
                text-decoration: none;
            }
            table img{
                width: 200px;
            }
            .title{
                padding-top: 60px;
            }
            .title1{
                color:#8CC445
                    ;
            }
            .title2{
                color:#25AAE2;
            }
            .content1 h1{
                background-color: #8CC445;
                color: black;
                padding-left: 20px;
                padding-top: 10px;
                padding-bottom: 10px;
                font-family: "Google Sans", Roboto, arial, sans-serif;
                font-size: 16px;
                font-weight: 400;

            }
            .titre{
                margin-left: 120px;
                margin-right: 120px;
            }
            .cont {
                margin-left: 140px;
                margin-right: 140px;
            }
            .cont{
                color:grey;
                font-size: 20px;
            }
            @media only screen and (max-width: 900px){
                .row{
                    display: grid;
                     width:100%;
                    position: relative;
                    padding-left:20px;
                    padding-right:20px;
                    padding-top:10px;
                    padding-bottom: 10px;
                }
                .column{
                    width:100%;
                    padding:0;
                }
                .column p{
                    width:100%;
                    height:100%;
                    padding:0;
                    margin:0;
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
        <div class="titre">
            <h2>Lavage et repassage</h2>
        </div>
        <p class="bor"></p>

        <div class="row">
            <div class="column">
                <p>Chez le Pressing, nous proposons un service de lavage professionnel, efficace et compétitif pour tout le linge de chaque entreprise.<br> Notre spécialité est de laver les nappes, les serviettes de table, les vêtements de cuisine et le linge de cuisine. Nous appliquons les traitements appropriés pour l’hygiène parfaite et la conservation du linge.<br>

                    Dès le moment où ils ramassent les textiles pour la blanchisserie, une attention particulière est accordée au détail à travers le processus de classification, lavage, séchage et emballage, jusqu’à sa livraison


                </p>
            </div>
            <div class="column">
                <img src="assets/img/66.jpg">

            </div>
        </div>





        <?php require('resources/footer.php') ?>
    </body>
</html>
