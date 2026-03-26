<!DOCTYPE html>
<html>
    <head>
        <title>Allo pressing</title>
        <link rel="shortcut icon" href="assets/img/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                margin-left:110px;
                margin-right: 110px;
            }
            span b {
                background-color: #fff;
                border-radius: 4px;
                display: grid;
                color: #fff;
                font-size: 2.2rem;
                margin-right:2px;
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
                margin-left: -20px;
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
                    padding-left:15px;
                    padding-right:15px;
                    padding-top: 10px;
                    padding-bottom:10px;
                    width:100%;
                    height:100%;
                }
                .template-2col img{
                    padding-bottom: 20px;
                }
                .texte-nettoyage{
                    margin-left: auto;
                    display:block;
                    margin-right: auto;
                    padding-bottom: 20px;
                    width: 100%;
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
        <div class="title-nettoyage"><h1>Cordonnerie</h1></div>
        <span class="template-2col">
            <b class="texte-nettoyage">
                le Pressing propose à sa clientèle un service de cordonnerie afin d’assurer la réparation de chaussures. Protection, rénovation et ressemelage de vos souliers sont réalisés au sein de nos ateliers de cordonnerie afin de vous offrir une solution pour préserver durablement vos différentes paires de chaussures. <br>Allo Pressing réalise également des entretiens, glaçages, patines et rénovation du cuir pour sublimer vos souliers
            </b>
            <b><img src="assets/img/cordennerie1.jpg"></b>
        </span>
        <?php require('resources/footer.php') ?>
    </body>
</html>