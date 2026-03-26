<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <style type="text/css">
            figure{float:left;}
            #tri-d-wrapper {
                -webkit-perspective: 300px;
                perspective: 300px;
                position: relative;
                min-height: 350px;
                width: 100%;

            }

            #img-wrapper {
                width: 350px;
                background: #3498db;
                margin: 0;
                position: absolute;
                cursor: pointer;
                border-radius: 3px;
                overflow: hidden;
                top: 50%;
                left: 50%;
                margin-left: -175px;
                margin-top: -131px;
                -webkit-transform: rotateX(30deg) scale(.65);
                transform: rotateX(30deg) scale(.65);
                -webkit-transition: .3s all ease;
                transition: .3s all ease;
                box-shadow: 0 15px 20px 5px rgba(0,0,0,.2);
            }
            #img-wrapper2 {
                width: 350px;
                background: #3498db;
                margin: 0;
                position: absolute;
                cursor: pointer;
                border-radius: 3px;
                overflow: hidden;
                top: 50%;
                left: 35%;
                margin-left: -175px;
                margin-top: -131px;
                -webkit-transform: rotateX(30deg) scale(.65);
                transform: rotateX(30deg) scale(.65);
                -webkit-transition: .3s all ease;
                transition: .3s all ease;
                box-shadow: 0 15px 20px 5px rgba(0,0,0,.2);
            }

            #img-wrapper3 {
                width: 350px;
                background: #3498db;
                margin: 0;
                position: absolute;
                cursor: pointer;
                border-radius: 3px;
                overflow: hidden;
                top: 50%;
                left: 60%;
                margin-left: -175px;
                margin-top: -131px;
                -webkit-transform: rotateX(30deg) scale(.65);
                transform: rotateX(30deg) scale(.65);
                -webkit-transition: .3s all ease;
                transition: .3s all ease;
                box-shadow: 0 15px 20px 5px rgba(0,0,0,.2);
            }

            #img-wrapper:hover,#img-wrapper2:hover,#img-wrapper3:hover {
                z-index:9999;
                -webkit-transform: rotateX(0deg) scale(1);
                transform: rotateX(0deg) scale(1);
                box-shadow: none;
            }

            #img-wrapper img ,#img-wrapper2 img,#img-wrapper3 img{
                width: 100%;
                margin: 0;
                position: relative;
                display: block;
                -webkit-transition: .3s all ease;
                transition: .3s all ease;
            }

            #img-wrapper:hover img {
                -webkit-transform: scale(1.5);
                -ms-transform: scale(1.5);
                transform: scale(1.5);
            }

            #img-wrapper:hover figcaption {
                background: rgba(0,0,0,.75);
            }

            #img-wrapper:hover figcaption h2 {
                opacity: 1;
                padding-left: 20px;
                -webkit-transition: .3s all ease .3s;
                transition: .3s all ease .3s;
            }

            #img-wrapper:hover figcaption .bottom-detail {
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
            }

            #img-wrapper:hover figcaption .bottom-detail p {
                opacity: 1;
                top: 0;
                -webkit-transition: .3s all ease .5s;
                transition: .3s all ease .5s;
            }

            #img-wrapper:hover figcaption .bottom-detail .social-icons li a {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                -webkit-transition: .3s all ease .5s;
                transition: .3s all ease .5s;
            }

            #img-wrapper:hover figcaption .bottom-detail .social-icons li a.fa-twitter {
                color: #50ABF1;
                -webkit-transition: .3s all ease .7s;
                transition: .3s all ease .7s;
            }

            #img-wrapper:hover figcaption .bottom-detail .social-icons li a.fa-facebook {
                color: #3B599A;
            }

            #img-wrapper:hover figcaption .bottom-detail .social-icons li a.fa-dribbble {
                color: #EC4989;
                -webkit-transition: .3s all ease .6s;
                transition: .3s all ease .6s;
            }

            #img-wrapper:hover figcaption .bottom-detail .social-icons li a.fa-behance {
                color: 1769ff;
                -webkit-transition: .3s all ease .8s;
                transition: .3s all ease .8s;
            }

            figcaption {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                -webkit-transition: .3s all ease;
                transition: .3s all ease;
            }

            figcaption h2 {
                margin: 0;
                color: white;
                font-size: 22px;
                line-height: 70px;
                opacity: 0;
                padding-left: 0;
                padding-right: 20px;
                font-weight: 300;
            }

            figcaption .bottom-detail {
                position: absolute;
                width: 100%;
                bottom: 0;
                top: 120px;
                background: white;
                -webkit-transform: translateY(100%);
                -ms-transform: translateY(100%);
                transform: translateY(100%);
                -webkit-transition: .3s all ease .1s;
                transition: .3s all ease .1s;
            }

            .bottom-detail p {
                font-size: 17px;
                opacity: 0;
                top: 20px;
                padding-left: 20px;
                padding-right: 20px;
                color: #999;
                font-weight: 300;
                line-height: 1.5;
            }

            .bottom-detail .social-icons {
                padding: 0 20px;
                box-sizing: border-box;
                margin: 0;
                position: absolute;
                bottom: 0;
                width: 100%;
                list-style: none;
                text-align: center;
            }

            a.button{
                /*display:inline-block;*/
                display:block;
                width:200px;
                text-align:center;
                font:normal normal 300 1.3em 'Open Sans';
                text-decoration:none;	

                color:rgba(28, 190, 131, 1);
                brackground-color:transparent;
                border:1px solid rgba(28, 190, 131, 1);
                border-radius:100px;

                padding: .3em 1.2em;

                margin:35px auto;

                background-size: 200% 100%;	
                background-image: linear-gradient(to right, transparent 50%, rgba(28, 190, 131, 1) 50%);
                transition: background-position .3s cubic-bezier(0.19, 1, 0.22, 1) .1s, color .5s ease 0s, background-color .5s ease;
            }

            a.button:hover{
                color:rgba(255, 255, 255, 1);
                background-color:rgba(28, 190, 131, 1);
                background-position: -100% 100%;
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
            <?php require('menu.php') ?>
            <?php require('menu-mobile.php') ?>

        </header>
        <div id="tri-d-wrapper">


            <figure id="img-wrapper3">
                <img src="assets/img/carte_fidele-2.jpg" alt="Preview Image">
                <figcaption>
                    <h2 class="title">Carte des Accidents</h2>
                    <div class="bottom-detail">

                    </div>
                </figcaption>
            </figure>

            <figure id="img-wrapper2">
                <img src="assets/img/carte_fidele-1.jpg" alt="Preview Image">
                <figcaption>
                    <h2 class="title">Carte des Accidents</h2>
                    <div class="bottom-detail">
                        <p>Tarification au trajet avec l'Open Data<br></p>
                        <a href="#0" class="button" title="Yes, turtles.">Voir L'application</a>
                    </div>
                </figcaption>
            </figure>

        </div>
        <?php require('resources/footer.php') ?>
    </body>
</html>