<!DOCTYPE html>

<html>

<head>
  <title>allo Pressing</title>

  <link rel="shortcut icon" href="assets/img/icon.png">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
     <link rel="stylesheet" type="text/css" href="assets/css/service.css">
     <style>
                     @media only screen and (max-width: 900px){
                         
                         .image-gallery{
                             width:100%;
                           margin:0;
                           padding:0;
                           background-color: #fff;
                           
                         }
                         
                         .gallery-1{
                              width:100%;
                             height:100%;
                             margin:0;
                             padding:0;
                         }
                        .image-gallery1 .gl2{
                             width:100%;
                             height:100%;
                             margin:0;
                             padding:0; 
                         }
                         footer{
                             width:100%;
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
    <!--menu-->
    <header>
                    <?php require('menu-mobile.php') ?>

  <?php require('menu.php')?>
  </header>

    <!-- texte service-->



<div class="image-gallery">
    <div class="image-gallery1">
        <h1 class="title-image-gallery1">Service personnalisé à chaque client
</h1>
        <p class="bor"></p>
    <div class="gallery-1">
      <h2>Finitions</h2>
      <p>Chez le pressing, nous accordons une attention particulière aux détails de la finition de chaque pièce, effectuant un contrôle de qualité manuellement. Notre réputation de qualité provient de notre expérience et de notre attention tant pour le lavage que pour la finition. Grâce à notre équipe hautement expérimentée, dévouée et consciencieuse, nous nous assurons d’offrir un produit final dans des conditions parfaites et selon les demandes de nos clients.</p>
    </div>

    <div class="gallery-1 ">
        <img src="assets/img/se1.jpg">
    </div>

    <div class="gallery-1">
        <img src="assets/img/se2.jpg">
    </div>


    <div class="gallery-1 gl2">
        <img src="assets/img/se3.jpg">
    </div>
<div class="gallery-1 gl2">
      <h2>Nettoyage des tâches</h2>
      <p>Tous les articles arrivant à notre blanchisserie sont vérifiés à la recherche de signes
d’endommagements ou de tâches ayant besoin d’un traitement spécial. Pour ce faire,
notre équipe de professionnels dispose de tables de révision, de détachants et de
fers à repasser qui assurent une finition parfaite conforme avec le niveau
d’excellence et d’exigence de nos clients</p>
    </div>
    <div class="gallery-1 gl2">
        <img src="assets/img/se4.jpg">
    </div>
    

</div>
</div>





    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">






<!-- footer-->
<?php require('resources/footer.php') ?>

</body>

</html>