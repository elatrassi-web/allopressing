<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AlloPressing</title>

        <link rel="shortcut icon" href="assets/img/icon.png">
        <link rel="stylesheet" type="text/css" href="assets/css/qui.css">

        <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
        <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
        <style>
            .lavage1{
                padding-bottom: 10px;
                padding-top: 18px;
                display: grid;
                grid-template-columns: 600px 600px auto auto;
                justify-content: center;
            }
            .lavage1{
                height: auto;

            }
            .cont{
                height:auto;
                width:500px;

            }
            .lvg1 img{
                padding-top:85px;
            }
            .cont2{
                padding-top:100px;
                padding-left:30px;
            }
            .cont3{
                padding-top:20px;
            }
            .lv2 img{
                height:450px;
                width:400px;
            }
            @media only screen and (max-width: 900px){
                .lavage1{
                    display: block;
                }
                .content1 h1{
                    margin-left:auto;
                    margin-right: auto;
                    display:block;
                }
                .cont{
                    width:100%;
                    padding-left:20px;
                    padding-right:20px;
                    paddint-bottom:10px;
                    padding-top: 10px;
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
        <table align="center">
            <th>
            <tr>
                <th><img src="assets/img/logo-pressing.jpg"></th>
                <th class="title"><h1 class="title1"> 3 Astuces</h1>
                    <h1 class="title2">pour mieux laver votre linge</h1>
                </th>
            </tr>
        </th>
    </table>
    <div class="content1">
        <h1 class="titre">1.AVANT LAVAGE EN MACHINE</h1>
        <div class="lvg1 lavage1 ">
            <p class="cont">• N’attendez pas que le linge soit trop sale, séchez-le et aérez-le.<br>
                • Vérifiez les poches de vos vêtements et ne remplissez pas trop votre machine.<br>
                • Utilisez une lessive écologique respectueuse de votre santé et votre environnement.<br>
                • Ne surdosez pas, le lavage ne sera pas plus efficace.<br>
                • Pour les vêtements neufs risquant de déteindre : privilégiez un premier lavage à la main. Lavez le vêtement à l’eau froide avec une lessive préalablement bien dissoute sans le laisser tremper. Ne frottez pas, essorez doucement.<br>
                • Pour les taches tenaces, le détachage peut se faire à l’aide d’un produit spécial, appliqué sur la tache préalablement au lavage en machine.<br>
                • Le blanchiment peut être obtenu par des agents blanchissants écologiques, plus respectueux de votre santé et de l’environnement que l’eau de javel.<br>
            </p>
            <img src="assets/img/020.jpg">
        </div></div>

    <div class="content1">
        <h1 class="titre">2. APRÈS LAVAGE EN MACHINE</h1>
        <div class="lavage1 lv2">
            <img src="assets/img/lingeenfant.jpg">

            <p class="cont cont2">• Privilégiez un séchage à l’air libre.<br>
                • Ne séchez pas les vêtements de couleurs vives au soleil.<br>
                • Séchez les vêtements en mailles à plat. Pliés, les vêtements ne seront ainsi pas déformés.<br>
                • Repassez vos vêtements en respectant la température indiquée sur les étiquettes, en commençant par la température la plus basse.<br>
                <br>
            </p>
        </div></div>

    <div class="content1">
        <h1 class="titre">
            3. RECONNAÎTRE LES TISSUS</h1>
        <div class="lavage1">

            <p class="cont cont3">• Le coton rétrécit lorsqu’il est lavé à trop haute température et se repasse facilement.<br>
                • Le lin se lave à la main, à l’eau tiède ou froide, sans essorage et repassage à fer très chaud.<br>
                • La soie ne supporte ni l’eau chaude ni le repassage. Le détachage doit se faire par nettoyage à sec.<br>
                • La laine peut rétrécir au lavage en cas de température trop élevée et se déformer si le séchage ne se fait pas à plat.<br>
                • Les fibres artificielles telles que l’acétate, la rayonne ou la viscose ne s’essorent pas.<br>
                • Les fibres synthétiques telles que le polyester, le nylon ou le lycra sont très sensibles à la chaleur, se lavent à l’eau tiède et se repassent à fer doux.<br>
                <br>
                <br>
            </p>
            <img src="assets/img/conseil.jpg">
        </div></div>
    <?php require('resources/footer.php') ?>
</body>
</html>