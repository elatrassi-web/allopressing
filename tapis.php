<!DOCTYPE html>
<html>
<title>Allopressing</title>
        <link rel="shortcut icon" href="assets/img/icon.png">

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
            .nos{
                width: auto;
                height: auto;
                background-color: #0D80C0;
                border-radius: 80px;
                margin-bottom: 10px;
            }
            .nos h1{
                color:white ;
                font-size: 30px;
                font-weight: bold;
                padding-top: 15px;
                padding-bottom: 15px;
                padding-left: 10px;
                padding-right: 10px;
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
                .nos{
                    width:350px;
                    margin-left: auto;
                    margin-right: auto;
                    display: block;
                }
                  .nos h1{
                    font-size: 20px;
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
        
            
    
 <table>

            <tr class="product">
                <th><div class="product-card">
                        <div class="badg">Maison</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/maison/TapisSimplem.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">  Tapis Simple m²  </span>
                            <h4><a href="#"></a></h4>
                            <p id="title">Lavage  </p>
                            <p>Délai de livraison: 72h-96h</p>
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">A partir de 30 DH</div></div>

                            </div>
                        </div>
                    </div></th> 
                <!--card 2 -->
                <th><div class="product-card">
                        <div class="badg">Maison</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/maison/TapisSynthetiquem.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Tapis Synthétique m² </span>
                            <h4><a href=""></a></h4>
                            <p id="title">Lavage </p>
                            <p>Délai de livraison: 72h-96h</p>			
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">A partir de 45 DH</div></div>

                            </div>
                        </div>
                    </div></th>
                <th><div class="product-card">
                        <div class="badg">Maison</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/maison/TapisTraditionnelm.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Tapis Traditionnel m²</span>
                            <h4><a href=""></a></h4>
                            <p id="title">Lavage </p>
                            <p>Délai de livraison: 72h-96h</p>
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">A partir de 60 DH</div></div>

                            </div>
                        </div>
                    </div></th>
            </tr>
        </table>

            
                
                    <table>
                    <tr class="product">
            <th> <div class="product-card">
		
                       <h4 style="font-weight:bold;text-align: center; padding-bottom: 10px; color: black;">Plus d'articles sur :</h4>
                <a href="./passer-votre-commande.php"> <img  id="imgc" src="assets/img/passezlacommande.png" alt=""></a>
                
      <a target="_blank" href="tel:+212619399999">

 <h4 style="font-weight:bold;font-size:25px;text-align: center; padding-bottom: 10px; color: black;margin-top: 15px; background-color: #86B43E;border-radius: 80px;padding-top: 15px;padding-bottom: 15px;">Appelez 0619 399 999</h4>
</a>
               
                <a target="_blank" href="https://api.whatsapp.com/send?phone=212619399999" ><img src="assets/img/icon-whatssap.png" width="150px" height="150px"  alt="alt" style="display:block; margin-left: auto;margin-right: auto;"/></a>
		
	</div></th>
    <th> <a href="./nos-engagements-sur-tapis.php" ><div class="nos">
                <h1><img src="assets/img/icon-plus.png" width="32px" height="32px" alt="alt"/> Nos engagement sur le tapis </h1>
            </div> </a> </th>
            
            </tr></table>
<?php require('resources/footer.php') ?>

</body>
</html>