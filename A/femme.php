<!DOCTYPE html>
<!-- <th> <div class="product-card">


                        <a href="#"> <img src="assets/img/passezlacommande.png" alt=""></a>


                    </div></th> -->
<html>
    <head>
        <title>Allo pressing</title>
        <link rel="shortcut icon" href="assets/img/icon.png">
        <style type="text/css">
            *
            {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }


            body
            {
                font-family: 'Roboto', sans-serif;
            }
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
                width: 50%;
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
                position: absolute;
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
                width:100%;
                height: 100%;
                margin-left: auto;
                margin-right: auto;
                display:block;
            }
            #title{
                font-size: 15px;
            }
        </style>
    </head>

    <body>
        <header>
            <?php require('menu.php') ?>
            <?php require('menu-mobile.php') ?>

        </header>
        <table>

            <tr class="product">
                <th><div class="product-card">
                        <div class="badg">Femme</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/femme/f/ChemisePlieeF.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">  Chemise Pliée F   </span>
                            <h4><a href="#"></a></h4>
                            <p id="title">Lavage et repassage </p>
                            <p>Délai de livraison: 24h-48h</p>
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">20  DH</div></div>

                            </div>
                        </div>
                    </div></th>
                <!--card 2 -->
                <th><div class="product-card">
                        <div class="badg">Femme</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/femme/ChemisesurcintreF.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Chemise sur cintre F  </span>
                            <h4><a href=""></a></h4>
                            <p id="title">Lavage et repassage</p>
                            <p>Délai de livraison: 24h-48h</p>			
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">18 DH</div></div>

                            </div>
                        </div>
                    </div></th>
                <th><div class="product-card">
                        <div class="badg">Femme</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/femme/DoudouneSimpleF.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Doudoune Simple F</span>
                            <h4><a href=""></a></h4>
                            <p id="title">Lavage et repassage</p>
                            <p>Délai de livraison: 24h-48h</p>
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">30 DH</div></div>

                            </div>
                        </div>
                    </div></th>
            </tr>
        </table>
        <table>

            <tr class="product">
                <th><div class="product-card">
                        <div class="badg">Femme</div>
                        <div class="product-tumb1">
                            <img src="assets/img/produit/femme/EspadrillesH.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Espadrilles F</span>
                            <h4><a href=""></a></h4>
                            <p id="title">Lavage </p>
                            <p>Délai de livraison: 24h-48h</p>
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">40 DH</div></div>

                            </div>
                        </div>
                    </div></th>
                <!--card 2 -->
                <th><div class="product-card">
                        <div class="badg">Femme</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/femme/JellabaSimpleF.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Jellaba Simple F</span>
                            <h4><a href=""></a></h4>
                            <p id="title">Lavage et repassage</p>
                            <p>Délai de livraison: 24h-48h</p>
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">40 DH</div></div>
                            </div>
                        </div>
                    </div></th>
                    <th><div class="product-card">
                        <div class="badg">Femme</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/femme/KaftanSimple(1P)F.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Kaftan Simple (1P) F</span>
                            <h4><a href=""></a></h4>
                            <p id="title">Lavage et repassage</p>
                            <p>Délai de livraison: 24h-48h</p>
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">40 DH</div></div>
                            </div>
                        </div>
                    </div></th>
                
            </tr>
        </table>
        <table>

            <tr class="product">
                <th><div class="product-card">
                        <div class="badg">Femme</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/femme/F/ManteauF.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Manteau F</span>
                            <h4><a href="#"></a></h4>
                            <p id="title">Lavage et repassage</p>
                            <p>Délai de livraison: 24h-48h</p>
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">45 DH</div></div>

                            </div>
                        </div>
                    </div></th>
                <!--card 2 -->
                <th><div class="product-card">
                        <div class="badg">Femme</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/femme/PantalonF.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Pantalon F</span>
                            <h4><a href=""></a></h4>
                            <p id="title">Lavage et repassage</p>
                            <p>Délai de livraison: 24h-48h</p>			
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">20 DH</div></div>

                            </div>
                        </div>
                    </div></th>
                <th><div class="product-card">
                        <div class="badg">Femme</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/femme/f/PullF.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Pull F</span>
                            <h4><a href=""></a></h4>
                            <p id="title">Lavage et repassage</p>
                            <p>Délai de livraison: 24h-48h</p>
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">25 DH</div></div>

                            </div>
                        </div>
                    </div></th>
            </tr>
        </table>
        <table>

            <tr class="product">
                <th><div class="product-card">
                        <div class="badg">Femme</div>
                        <div class="product-tumb">
                            <img src="assets/img/produit/femme/F/Pyajam(2P)F.jpg" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory"> Pyajam (2P) F</span>
                            <h4><a href="#"></a></h4>
                            <p id="title">Lavage et repassage </p>
                            <p>Délai de livraison: 24h-48h</p>
                            <div class="product-bottom-details">
                                <div class="product-price"><div class="prixvente">30 DH</div></div>

                            </div>
                        </div>
                    </div></th>
                <!--card 2 -->
               <th> <div class="product-card">
		
		
                <a href="./passer-votre-commande.php"> <img  id="imgc" src="assets/img/passezlacommande.png" alt=""></a>
		
		
	</div></th>
               
            </tr>
        </table>
        <footer><?php require('resources/footer.php') ?></footer>
    </body>
</html>