<!DOCTYPE html>
<html>
    <head>
        <title></title>
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
                margin-left: 110px;
                margin-right: 110px;
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
        <div class="title-nettoyage"><h1>Retouche</h1></div>
        <span class="template-2col">
            <b><img src="assets/img/retouche.jpg"></b>
            <b class="texte-nettoyage">Un vêtement acheté légèrement trop grand ?<br> Besoin de changer une fermeture ou ajuster une longueur de manche ?<br> Ou simplement un vêtement de cœur que vous souhaitez conserver plus longtemps ?
                Chez Allo Pressing, nous vous proposons des services additionnels de retouches de vêtements et tissus : ourlets, tailles, fermetures, etc. Autant de petits détails qui vous feront vous sentir bien dans vos vêtements.



            </b>

        </span>
        <?php require('resources/footer.php') ?>
    </body>
</html>