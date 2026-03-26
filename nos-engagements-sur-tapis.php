<!DOCTYPE html>
<html>
<title>Allopressing</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
		<link rel="stylesheet" type="text/css" href="assets/css/tapis.css">

                <style>
                    a
            {
                text-decoration: none;
            }
            .product-card {
                width: 380px;
                position: relative;
                box-shadow: 0 2px 7px #dfdfdf;
                margin: 12px ;
                background: #fafafa;
                display: grid;

            }
            .product-card2{
                width: 380px;
                position: relative;
                box-shadow: 0 2px 7px #dfdfdf;
                background: #fafafa;
                margin-right: auto;
                margin-left: auto;
                display: grid;
                top: 8px;
                right: 16px;
            }

            .badg {
                position: absolute;
                left: 0;
                top: 20px;
                text-transform: uppercase;
                color: #fff;
                display: inline-block;
                min-width: 10px;
                padding: 3px 7px;
                font-size: 12px;
                font-weight: 700;
                line-height: 1;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                background-color:#86B43E ;
                border-radius: 10px;
            }

            .product-tumb {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 300px;
                
                background: #f0f0f0;
            }
            .product-tumb1 {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 300px;
                padding: 50px;
                background: #f0f0f0;
            }
            .product-tumb1 img{
                width:100%;
                height:auto;
            }
            .product-tumb img {
                max-width: 100%;
                max-height: 100%;
            }

            .product-details {
                padding: 30px;
            }

            .product-catagory {
                display: block;
                font-size: 20px;
                font-weight: 700;
                text-transform: uppercase;
                color: black;
                margin-bottom: 18px;
            }

            .product-details h4 a {
                font-weight: 500;
                display: block;
                margin-bottom: 18px;
                text-transform: uppercase;
                color: #363636;
                text-decoration: none;
                transition: 0.3s;
            }

            .product-details h4 a:hover {
                color: #fbb72c;
            }

            .product-details p {
                font-size: 15px;
                line-height: 22px;
                margin-bottom: 18px;
                color: #999;
            }

            .product-bottom-details {
                overflow: hidden;
                border-top: 1px solid #eee;
                padding-top: 20px;
            }

            .product-bottom-details div {
                float: left;
            }

            .product-price {
                font-size: 18px;
                color: #fbb72c;
                font-weight: 600;
            }

            .product-price small {
                font-size: 80%;
                font-weight: 400;
                text-decoration: line-through;
                display: inline-block;
                margin-right: 5px;
            }

            .product-links{
                text-align: right;
            }

            .product-links a {
                display: inline-block;
                margin-left: 5px;
                color: #e1e1e1;
                transition: 0.3s;
                font-size: 17px;
            }

            .product-links a:hover {
                color: #fbb72c;
            }
            table{
                width: auto;
                height: auto;
                margin-right: auto;
                margin-left: auto;
            }
            .prixvente{
                text-align: right;
                color: #86B43E;
                right: 0;
                margin-right: 10px;
                top: 90%;
                position: relative;
                font-size: 30px;
            }
            @media only screen and (max-width: 900px){
                .product{
                    width: 100%;
                    height:100%;
                    display: grid;
                    margin:0;
                }
                 .product-card #imgc{
                    width:200px;
                    margin-right: auto;
                    margin-left: auto;
                    display:block;
                }

            }
            .product-tumb img{
                width:auto;
                height: 100%;
                margin-left: auto;
                margin-right: auto;
                display:block;
            }
            #title{
                font-size: 15px;
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
  <?php require('menu.php')?>
  <?php require('menu-mobile.php') ?>

  </header>
<section class="pb-5 pt-5" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Nos engagements sur le tapis</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="#" class="services-small-item active">
                        <div class="icon">
<img src="assets/img/laflexibilite.png">                       
 </div>
                        <h5 class="services-title">Flexibilité</h5>
                        <p>Passage à l’heure. Du lundi au samedi de 9h00 à 19h00. </p>
                        <div class="button">
<img src="assets/img/right-arrow.png">                        </div>
                    </a>
                    <div class="item-bg"></div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#" class="services-small-item">
                        <div class="icon">
<img src="assets/img/compteur-de-vitesse.png">                     
      </div>
                        <h5 class="services-title">Efficacité</h5>
                        <p>Collecte, nettoyage et livraison en 72h ou 48 en express.</p>
                        <div class="button">
<img src="assets/img/right-arrow.png">                        </div>
                    </a>
                    <div class="item-bg"></div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#" class="services-small-item">
                        <div class="icon">
<img src="assets/img/transparence.png">                
           </div>
                        <h5 class="services-title">Transparence</h5>
                        <p>Le juste prix, sans frais cachés</p>
                        <div class="button">
<img src="assets/img/right-arrow.png">                        </div>
                    </a>
                    <div class="item-bg"></div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#" class="services-small-item">
                        <div class="icon">
<img src="assets/img/expert.png">   
                        </div>
                        <h5 class="services-title">Expertise & savoir faire</h5>
                        <p>Une technologie de pointe et des ateliers dédiés au service à domicile</p>
                        <div class="button">
<img src="assets/img/right-arrow.png">                        </div>
                    </a>
                    <div class="item-bg"></div>
                </div>
            </div>
        </div>
    </section>
    
   
<?php require('resources/footer.php') ?>

</body>
</html>