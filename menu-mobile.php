<!DOCTYPE html>
<html>
<head>
        
        <link rel="stylesheet" type="text/css" href="https://daneden.github.io/animate.css/animate.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
        <link rel="stylesheet"  href="assets/css/bootstrap3.3.5.min.css"/>
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-203843026-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-203843026-1');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HJDHRNX6DX">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HJDHRNX6DX');
</script>
</head>
<style>
    .nav {
        display:none;
    }
    .sidebar-nav{
        dispaly:none;
    }
    .sidebar-wrapper{
        display:none;
    }
    .navbar-fixed-bottom, .navbar-fixed-top{
        display:none;
    }
    .navbar-fixed-top{
        display:none;
    }
    .navbar{
        display:none;
    }
    #logo-mobile{
        display:none;
    }
	#page-content-wrapper{
		display: none;
	}
	.nav{
	display: none;
}
.navbar-inverse{
	display: none;}

.command-button{
    display:none;
}
.whatsapp-button{
    display:none;
}
	@media only screen and (max-width: 900px) {
            .title{
                display:none;
            }
            .logo-slider{
                display: none;
            }
            
            button:focus{
                background-color: #0D80C0;
            }
            #page-content-wrapper{
                display:block;
            }
            .command-button{
                position: fixed;
    bottom: 75px;
    right: 15px;
    z-index: 99;
    background-color: #0D80C0;
    border-radius: 50px;
    color: #ffffff;
    text-decoration: none;
    width: 50px;
    height: 50px;
    font-size: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    -webkit-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);
    -moz-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);
    box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);
    animation: effect 5s infinite ease-in;
}
            
.whatsapp-button{
    position: fixed;
    bottom: 15px;
    right: 15px;
    z-index: 99;
    border-radius: 50px;
    color: #ffffff;
    text-decoration: none;
    width: 50px;
    height: 50px;
    font-size: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    -webkit-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);
    -moz-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);
    box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);
    animation: effect 5s infinite ease-in;
}

@keyframes effect {
    20%, 100% {
        width: 50px;
        height: 50px;
        font-size: 30px;
    }
    0%, 10%{
        width: 55px;
        height: 55px;
        font-size: 35px;
    }
    5%{
        width: 50px;
        height: 50px;
        font-size: 30px;
    }
}
 #logo-mobile img{
        margin-left: auto;
        margin-right: auto;
        position:relative;
        display:block;
        width:auto;
        height:90px;
        margin-top:-25px;
    }
    #logo-mobile{
          display: block;
    position: relative;
    width: 300px;
    margin-left: auto;
    margin-right: auto;
    padding-top: 30px;
    height: 10px;
    background-color: #fff;


    }
    
 

/*-------------------------------*/
/*           VARIABLES           */
/*---
----------------------------*/
#page-content-wrapper{
		display: block;
                        background-color:#fff;

	}
.navbar-inverse{
	display: block;}

		.nav{
	display: block;
}
body {
  position: relative;
  overflow-x: hidden;
}

.nav .open > a {
  background-color: transparent;
}
.nav .open > a:hover {
  background-color: transparent;
}
.nav .open > a:focus {
  background-color: transparent;
}
/*-------------------------------*/
/*           Wrappers            */
/*-------------------------------*/
#wrapper {
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  padding-left: 0;
  transition: all 0.5s ease;
}
#wrapper.toggled {
  padding-left: 220px;
}
#wrapper.toggled #sidebar-wrapper {
  width: 220px;
  height:100%;
  padding:2px;
}
#wrapper.toggled #page-content-wrapper {
  margin-right: -220px;
  position: relative;
}
#sidebar-wrapper {
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.7)), to(transparent));
left: 220px;
  margin-left: -220px;
  overflow-x: hidden;
  overflow-y: auto;
  transition: all 0.5s ease;
  width: 0;
  z-index: 1000;
}
#sidebar-wrapper::-webkit-scrollbar {
  display: none;
}
#page-content-wrapper {
  padding-top: 70px;
  width: 100%;
}
/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/
.sidebar-nav {
  list-style: none;
  margin: 0;
  padding: 0;
  position: absolute;
  top: 0;
  width: 220px;
}
.sidebar-nav li {
  display: inline-block;
  line-height: 20px;
  position: relative;
  width: 100%;
}
.sidebar-nav li:before {
  content: '';
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}
.sidebar-nav li:first-child a {
  
}
.sidebar-nav li:nth-child(2):before {
  background-color: #25C481;
}
.sidebar-nav li:nth-child(3):before {
  background-color: #25C460;
}
.sidebar-nav li:nth-child(4):before {
  background-color: #00B48E;
}
.sidebar-nav li:nth-child(5):before {
  background-color: #00A398;
}
.sidebar-nav li:nth-child(6):before {
  background-color: #00919D;
}
.sidebar-nav li:nth-child(7):before {
  background-color: #007F9A;
}
.sidebar-nav li:nth-child(8):before {
  background-color: #007F9E;
}
.sidebar-nav li:nth-child(9):before {
  background-color: #006C98;
}
.sidebar-nav li:hover:before {
  transition: width 0.2s ease-in;
  width: 100%;
  
    background-color: transparent;

}
.sidebar-nav li a {
  color: #fff;
  font-weight: bold;
  display: block;
  padding: 10px 15px 10px 30px;
  text-decoration: none;
}
.sidebar-nav li.open:hover before {
  transition: width 0.2s ease-in;
  width: 100%;
}
.sidebar-nav .dropdown-menu {
background-image: linear-gradient(to left top, #6b7278, #7a8488, #8a9797, #9ea9a5, #b3bbb4);

border-radius: 0;
  border: none;
  box-shadow: none;
  margin: 0;
  padding: 0;
  width: 100%;
}
.sidebar-nav li a:hover,
.sidebar-nav li a:active,
.sidebar-nav li a:focus,
.sidebar-nav li.open a:hover,
.sidebar-nav li.open a:active,
.sidebar-nav li.open a:focus {
  background-color: transparent;
  color: #ffffff;
  text-decoration: none;
}
.sidebar-nav > .sidebar-brand {
  font-size: 20px;
  height: 65px;
  line-height: 44px;
}
/*-------------------------------*/
/*       Hamburger-Cross         */
/*-------------------------------*/
.hamburger {
  background:#fff;
  border: none;
  display: block;
  height: 32px;
  margin-left: 15px;
  position: fixed;
  top: 15px;
  width: 32px;
  z-index: 999;
}
.hamburger:hover {
  outline: none;
}
.hamburger:focus {
  outline: none;
}
.hamburger:active {
  outline: none;
}
.hamburger.is-closed:before {
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-transition: all 0.35s ease-in-out;
  color: #ffffff;
  content: '';
  display: block;
  font-size: 14px;
  line-height: 32px;
  opacity: 0;
  text-align: center;
  width: 100px;
}
.hamburger.is-closed:hover before {
  -webkit-transform: translate3d(-100px, 0, 0);
  -webkit-transition: all 0.35s ease-in-out;
  display: block;
  opacity: 1;
}
.hamburger.is-closed:hover .hamb-top {
  -webkit-transition: all 0.35s ease-in-out;
  top: 0;
}
.hamburger.is-closed:hover .hamb-bottom {
  -webkit-transition: all 0.35s ease-in-out;
  bottom: 0;
}
.hamburger.is-closed .hamb-top {
  -webkit-transition: all 0.35s ease-in-out;
  background-color: #5DFC70;
  top: 5px;
}
.hamburger.is-closed .hamb-middle {
  background-color: #5DFC70;
  margin-top: -2px;
  top: 50%;
}
.hamburger.is-closed .hamb-bottom {
  -webkit-transition: all 0.35s ease-in-out;
  background-color: #5DFC70;
  bottom: 5px;
}
.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom,
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  height: 4px;
  left: 0;
  position: absolute;
  width: 100%;
}
.hamburger.is-open .hamb-top {
  -webkit-transform: rotate(45deg);
  -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
  background-color: #fff;
  margin-top: -2px;
  top: 50%;
}
.hamburger.is-open .hamb-middle {
  background-color: #fff;
  display: none;
}
.hamburger.is-open .hamb-bottom {
  -webkit-transform: rotate(-45deg);
  -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
  background-color: #fff;
  margin-top: -2px;
  top: 50%;
}
.hamburger.is-open:before {
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-transition: all 0.35s ease-in-out;
  color: #ffffff;
  content: '';
  display: block;
  font-size: 14px;
  line-height: 32px;
  opacity: 0;
  text-align: center;
  width: 100px;
}
.hamburger.is-open:hover before {
  -webkit-transform: translate3d(-100px, 0, 0);
  -webkit-transition: all 0.35s ease-in-out;
  display: block;
  opacity: 1;
}
/*-------------------------------*/
/*          Dark Overlay         */
/*-------------------------------*/
.overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.4);
  z-index: 1;
}
/* SOME DEMO STYLES - NOT REQUIRED */

body h1,
body h2,
body h3,
body h4 {
  color: rgba(255, 255, 255, 0.9);
}
body p,
body blockquote {
}
body a {
  color: rgba(255, 255, 255, 0.8);
  text-decoration: none;
}
body a:hover {
  text-decoration: none;
}

 }


</style>
<body>
<div id="wrapper">
        <div class="overlay"></div>
      <div id="logo-mobile">
          <a href="index.php"><img src="assets/img/logo.png"></a>

        </div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                     
                    </a>
                </li>
                <li><a href="index.php">Accueil</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Nos Services <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="livraison.php">Ramassage et livraison</a></li>
                    <li><a href="express.php">Mode Express</a></li>
                    <li><a href="sur-place.php">Sur place</a></li>
                    <li><a href="repassage.php">Repassage</a></li>
                    <li><a href="nettoyage.php">Nettoyage à sec</a></li>
                    <li><a href="detachage.php">Détachage</a></li>
                    <li><a href="teinture.php">Teinture</a></li>
                    <li><a href="retouche.php">Retouche</a></li>
                    <li><a href="cordonnerie.php">Cordonnerie</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Nos Promos<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="./promo.php">Pack Bonne affaire</a></li>
                    <li><a href="./carte_client_fidele.php">Carte Client fidèle</a></li>
                    <li><a href="#">Cadeaux</a></li>
                  </ul>
                </li>
                <li>
                <li><a href="reponses-questions.php">Question Reponse</a></li>       
                </li>
                <li>
                    <a href="./professionnel.php">Professionels</a>
                </li>
               
                <li>
                    <a href="./comment-payer.php">Comment Payer ?</a>
                </li>
                <li>
                    <a href="./charte_de_qualité.php"> Charte qualité</a>
                </li>
                <li>
                    <a href="./contact.php"> Contact</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" id="but-ham" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
            
                
        </div>
        <!-- /#page-content-wrapper -->

    </div>   
    <div class="icon-what-comm">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=212619399999" class="whatsapp-button"><img src="assets/img/icon-wa.png" width="120px"alt="alt"/> </i></a>
    <a target="_blank" href="./passer-votre-commande.php" class="command-button"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <script>
$(document).ready(function(){
  $("#but-ham").click(function(){
    $(".title").hide();
  });
  $("#but-ham").click(function(){
    $(".logo-slider").hide();
  });
});
</script>
    <script type="text/javascript">
    	$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});

    </script>
</body>
</html>