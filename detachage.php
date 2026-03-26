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
                width: 100%;
            }
            span b {
                background-color: #fff;
                border-radius: 4px;
                display: grid;
                place-items: center;
                color: #fff;
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
                span.template-2col{
                    display: inline-block;
                    grid-template-columns: repeat(3, 1fr);
                    position: relative;
                    width: 100%;
                    margin: 0;
                    padding:15px;

                }
                .texte-nettoyage{
                    width: 100%;

                    .texte-nettoyage{
                        width: 100%;

                        margin-top: auto;
                        margin-bottom: auto;
                        display:block;


                    }


                }
            }
            .texte-nettoyage{
                width: 100%;
padding-bottom:20px;
                margin-top: auto;
                margin-bottom: auto;
                display:block;


            }
            .title-nettoyage{
                width:100%;
               margin-left: auto;
      margin-right:auto;
      display: block;
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
        <div class="title-nettoyage"><h1>Détachage</h1></div>
        <span class="template-2col">
            <b class="texte-nettoyage">le Pressing traite toutes vos taches avec soin après un diagnostic d’expert tout en préservant la nature de vos textiles.
                Nos collaborateurs effectuent en premier lieu un diagnostic de vos articles, les taches incrustées sur vos vêtements sont examinées avec attention avant d’être lavées ou nettoyées.
                Pour les taches les plus difficiles nos équipes ne procèdent qu’à deux cycles de détachage afin de ne pas prendre le risque de détériorer la fibre ou d’impacter la couleur de vos articles.  
                Informez-nous plutôt sur la nature de vos taches au moment de déposer vos articles en magasin et suivez les astuces que nous conseillons pour limiter les dégâts. 

            </b>
            <b><img src="assets/img/detachage.jpg"></b>
        </span>
        <?php require('resources/footer.php') ?>
    </body>
</html>