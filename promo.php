<!DOCTYPE html>
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
    background: #f0f0f0;
}
.product-tumb1 img{
    width:auto;
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
    font-size: 30px;
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
    top: 85%;
    position: absolute;
    font-size: 30px;
}
#title{
                font-size: 15px;
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
		<div class="badg">Promo</div>
		<div class="product-tumb">
			<img src="assets/img/CHEMISEPROMO1.jpg" alt="">
		</div>
		<div class="product-details">
			<span class="product-catagory">CHEMISES SUR CINTRE</span>
			<h4><a href="#"></a></h4>
                        <p id="title">la 6ème Chemise est gratuite</p>
                                                    <p id="title">Lavage et repassage (À sec)  </p>

			<div class="product-bottom-details">
				<div class="product-price"><small>108DH</small><div class="prixvente">100DH</div></div>
				<!--<div class="product-links">
					<a href=""><i class="fa fa-heart"></i></a>
					<a href=""><i class="fa fa-shopping-cart"></i></a>
				</div>-->
			</div>
		</div>
	</div></th>
	<!--card 2 -->
	<th><div class="product-card">
		<div class="badg">Promo</div>
		<div class="product-tumb">
			<img src="assets/img/PANTALON-PROMOS.jpg" alt="">
		</div>
		<div class="product-details">
			<span class="product-catagory">PANTALON</span>
			<h4><a href=""></a></h4>
                        <p id="title">le 6ème Pantalon est gratuit</p>
                                                    <p id="title">Lavage et repassage (À sec)  </p>

			<div class="product-bottom-details">
				<div class="product-price"><small>108DH</small><div class="prixvente">100DH</div></div>
				
			</div>
		</div>
	</div></th>
	<th><div class="product-card">
		<div class="badg">Promo</div>
		<div class="product-tumb">
			<img src="assets/img/COSTUME-PROMO.jpg" alt="">
		</div>
		<div class="product-details">
			<span class="product-catagory">PACK HOMME CLASSE</span>
			<h4><a href=""></a></h4>
                        <p id="title">Costume(2P)– Chemise– Cravate– Gilet</p>
                                                    <p id="title">Lavage et repassage (À sec)  </p>

			<div class="product-bottom-details">
				<div class="product-price"><small>80DH</small><div class="prixvente">70DH</div></div>
				
			</div>
		</div>
	</div></th>
	</tr>
</table>
<table>
  
    <tr class="product">
	<th><div class="product-card">
		<div class="badg">Promo</div>
		<div class="product-tumb1">
                    <img src="assets/img/produit/promo/couvertures.jpg" alt="">
		</div>
		<div class="product-details">
			<span class="product-catagory">COUVERTURES</span>
			<h4><a href=""></a></h4>
			<p id="title">5 Couvertures : Bon prix</p>
			<div class="product-bottom-details">
				<div class="product-price"><small>275DH</small><div class="prixvente">215DH</div></div>
				
			</div>
		</div>
	</div></th>
	<!--card 2 -->
	<th><div class="product-card">
		<div class="badg">Promo</div>
		<div class="product-tumb">
			<img src="assets/img/LINGEKGPROMOS.jpeg" alt="">
		</div>
		<div class="product-details">
			<span class="product-catagory">LINGE SIMPLE PLIÉ</span>
			<h4><a href=""></a></h4>
                        <p id="title"> 12 KG * 2 = 24 KG</p>
			<div class="product-bottom-details">
				<div class="product-price"><small>280DH </small><div class="prixvente">240DH</div></div>
				
			</div>
		</div>
	</div></th>
	<th> <div class="product-card">
		
                       <h4 style="font-weight:bold;text-align: center; padding-bottom: 10px; color: black;">Plus d'articles sur :</h4>
                <a href="./passer-votre-commande.php"> <img  id="imgc" src="assets/img/passezlacommande.png" alt=""></a>
                
      <a target="_blank" href="tel:+212619399999">

 <h4 style="font-weight:bold;font-size:25px;text-align: center; padding-bottom: 10px;margin-top: 15px; color: black; background-color: #86B43E;border-radius: 80px;padding-top: 15px;padding-bottom: 15px;">Appelez 0619 399 999</h4>
</a>
               
                <a target="_blank" href="https://api.whatsapp.com/send?phone=212619399999" ><img src="assets/img/icon-whatssap.png" width="150px" height="150px"  alt="alt" style="display:block; margin-left: auto;margin-right: auto;"/></a>
		
	</div></th>
	</tr>
</table>
<footer><?php require('resources/footer.php')?></footer>
</body>
</html>