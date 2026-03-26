<!DOCTYPE html>
<html>
<head>
	<title>Allo pressing</title>
	<style type="text/css">
* {
  box-sizing: border-box;
}

span {
  background: #fff;
  padding: 1rem;
  border-radius: 7px;
  height: auto;
  display: grid;
  grid-gap: 0.5rem;
}
span b {
  background-color: #fff;
  border-radius: 4px;
  place-items: center;
  color: black;
  font-size: 1.8rem;
}
span.template-2col {
  grid-template-columns: repeat(2, 1fr);
  padding-left: 150px;
  padding-right: 150px;
}
.texte-nettoyage{
	color:black;
text-align: justify;
padding-left: 4px;
		padding-right: 4px;
                                                font-size:35px;

	}

	.texte-nettoyage h3{
				padding-top: 20px;
				padding-bottom: 40px;
                                font-size:35px;

	}
	.title-nettoyage{
		margin-top: 10px;
		background-color: #5DFC70;
		color: #0D80C0;
		border-radius: 5px;
		text-align: center;
		padding-top: 9px;
		padding-bottom: 9px;
		margin-left: 120px;
		margin-right: 120px;
		
		
	}
        #text-net{
            margin-top: auto;
            margin-bottom: auto;
            display:block;
        }

@media only screen and (max-width: 900px){
    .title-nettoyage {
        width:100%;
        margin:0 auto;
    }
	.temp .template-2col {
	display: block;
margin:0;
padding-left:10px;
padding-right:10px;
padding-top: 10px;
padding-bottom:10px;
width:100%;
height:100%;
        }
        #text-net{
            padding-bottom: 20px;
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

  <?php require('menu.php')?>
  </header>
	<div class="title-nettoyage">
            <h1>Nettoyage à sec</h1></div>
    <div class="temp">
        <span class="template-2col">
            <b id="text-net">
Le nettoyage à sec est un procédé qui permet de retirer les salissures sur tous les types de vêtements.
<br>En quoi cela consiste ?
<br>Le nettoyage à sec est une technique utilisée pour ôter les taches et impuretés des vêtements et des tissus. Cette technique de nettoyage fait disparaître les graisses ce qui a pour effet de produire un nettoyage de meilleure qualité.
Daba Pressing vous propose son service de nettoyage à sec pour détacher vos vêtements. Spécialiste dans le pressing et la blanchisserie, notre savoir-faire nous permet de vous garantir un résultat impeccable au meilleur prix.
</b>
	<b><img src="assets/img/nettoyage.jpg"></b>
        </span></div>
<?php require('resources/footer.php')?>
</body>
</html>