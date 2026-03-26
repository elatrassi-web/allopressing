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
                margin-right: 100px;
                margin-left:100px;
            }
            span b {
                background-color: #fff;
                border-radius: 4px;
                display: grid;
                color: #fff;
                font-size: 2.1rem;
            }
            span.template-2col {
                grid-template-columns: repeat(2, 1fr);
            }
            .texte-nettoyage{
                color:black;
                text-align: justify;

                width: 100%;

                margin-top: auto;
                margin-bottom: auto;
                display:block;



            }
            .title-nettoyage{
                margin-top: 10px;
                background-color: #5DFC70;
                color: #0D80C0;
                padding-top: 9px;
                padding-bottom: 9px;
                margin-left: 120px;
                margin-right: 120px;
                border-radius: 5px;
                text-align: center;
            }
            @media only screen and (max-width: 900px){
    .title-nettoyage {
        width:100%;
        margin:0 auto;
    }
	.template-2col {
	display: block;
margin:0;
padding-left:20px;
padding-right:20px;
padding-top: 10px;
padding-bottom:10px;
width:100%;
height:100%;
        }
        .template-2col img{
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
            <?php require('menu.php') ?>
        </header>
        <div class="title-nettoyage"><h1>Teinture</h1></div>
        <span class="template-2col">
            <b><img src="assets/img/teinture.jpg"></b>
            <b class="texte-nettoyage">L'un de vos vêtements comporte une tâche indélébile ?
                <br>Avant de le retirer définitivement de votre garde-robe, osez vivre l'expérience de la teinture !
                Allo Pressing vous propose des produits de teinture de très bonne qualité (Noir et bleu marine). Associés à notre savoir-faire reconnu, votre vêtement préféré retrouvera une nouvelle vie ainsi qu'une nouvelle couleur.
                Un moyen de laisser libre court à l'envie et à la création !
                Pour en savoir plus sur notre service de teinture et nos tarifs n'hésitez pas à nous consulter directement.


            </b>

        </span>
        <?php require('resources/footer.php') ?>
    </body>
</html>