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
  width: 100%;
}
span b {
  border-radius: 4px;
  display: grid;
  place-items: center;
  color: black;
  font-size: 1.5rem;
  width: 400px;

}
.texte-repassage{
	padding-left: 10px;
	  color:black;
text-align: justify;
}

span.template-3col {
  grid-template-columns: repeat(3, 1fr);
  width: 100%;
  margin-left: 110px;
}
.title-{
background-color: #5DFC70;
padding-top:5px;
color: #0D80C0;
padding-bottom: 5px;
margin-right: 120px;
margin-left: 120px;
text-align: center;
border-radius: 5px;
margin-top: 9px;
}
.img2 img{
    width: 180px;
    margin-right:auto;
    margin-left:30px;
    display:block;
}

@media only screen and (max-width: 991px) {
    .img2 img{
        margin-left: auto;
        margin-right: auto;
        display:block;
        width:200px;
    }
  .template-3col {
      padding-top:20px;
      margin:0;
   display: inline-block;
    grid-template-columns: repeat(3, 1fr);
position: relative;

display: block;

  }
  .temp .template-3col{
      margin:0;
      padding-top:10px;
      padding-bottom:0;
      padding-left: 0;
      padding-right:0;
  }
  .template-3col .texte-repassage{
      padding:10px;
  }
  .title-{
      width:100%;
      margin-left: auto;
      margin-right:auto;
      display: block;
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
	<div class="title-">
		<h1>Repassage</h1>
	</div>
  <div class="temp">
<span class="template-3col">
	<b><img src="assets/img/repassage1.jpg"></b>
	<b class="texte-repassage">Une technique de pressing artisanal qui sublime votre vêtement
Lors du nettoyage d’un vêtement, le repassage est l’étape de finition qui valide la qualité globale du nettoyage. Alors, pour avoir un rendu irréprochable, le repassage doit être fait à la main. Le beau linge demande un geste technique que seule une équipe de professionnels maîtrise. Pour chaque type de vêtement, le glissement du fer et sa température doivent être adaptés. Par exemple, le repassage des chemises est très complexe. Le niveau de technicité grimpe encore quand il s’agit d’un chemisier en soie. Nous offrons à vos vêtement une technique artisanale.
</b>
	<b class="img2"><img src="assets/img/repassage.jpg"></b>
</span>
</div>
<?php require('resources/footer.php')?>
</body>
</html>