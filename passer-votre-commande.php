<?php
session_start();

$hostname = "localhost";
$username = "c1615909c_allo";
$password = "ozesP-B97e5d";
$databasename = "c1615909c_allo";

$dbh = mysqli_connect($hostname, $username, $password, $databasename);

$query = "SELECT titre,id FROM `categorie` ORDER By titre ";

$result1 = mysqli_query($dbh, $query);

$query3 = "SELECT type,id_prestation From prestation ORDER By type";

$result3 = mysqli_query($dbh, $query3);

if (isset($_POST['ajtp'])) {

    $id_produit = $_POST['pro'];

    $id_prestation = $_POST['service'];

    $quantite = $_POST['quantity'];

    if (!isset($_SESSION["idpanier"])) {

        $dbh->query("INSERT INTO `panier`(`id_client`) VALUES('0')");

        $last_entry = mysqli_insert_id($dbh);

        $_SESSION["idpanier"] = $last_entry;
    }



    $dbh->query("insert into panier_produit(id_panier,id_produit,qte,id_prestation) "
            . "values('" . $_SESSION["idpanier"] . "', '$id_produit','$quantite','$id_prestation')");

    $dbh->query("insert into linge_commande  values('" . $_SESSION["idpanier"] . "', '0')");

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    header('Location: ' . $actual_link);
}




$products = array();

if (isset($_SESSION["idpanier"])) {

    $query4 = "SELECT pp.*, p.titre, p.image, pr.type, prpr.prix, (prpr.prix*pp.qte) as total "
            . "FROM `panier_produit` as pp "
            . "LEFT JOIN produit as p "
            . "     ON p.id_produit = pp.id_produit "
            . "LEFT JOIN prestation as pr "
            . "     ON pr.id_prestation = pp.id_prestation "
            . "LEFT JOIN produit_prestation as prpr "
            . "     ON prpr.id_produit = pp.id_produit "
            . "     AND prpr.id_prestation = pp.id_prestation "
            . "WHERE pp.id_panier = '" . $_SESSION["idpanier"] . "'";

    $products = mysqli_query($dbh, $query4);
}
?>



<!DOCTYPE html>



<html>

    <head>

        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap3.3.6.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Allo Pressing</title>

        <link rel="shortcut icon" href="assets/img/icon.png">

        <meta charset="UTF-8">
        <style type="text/css">
            .row select option{

            }
            .btn{
                margin-top: 50px;

                margin-left: auto;
                margin-right: auto;
                display: block;
                width: 500px;
                height: 40px
            }
            #show-tit{
                display:none;
            }
            #show-typ{
                display:none;
            }
            @media only screen and (max-width: 900px) {

                .form-control{
                    display: block;
                    width: 100%;
                    height: 50px;
                    padding: 6px 12px;
                    font-size: 14px;
                    line-height: 1.42857143;
                    color: #555;
                    background-color: #fff;
                    background-image: none;
                    border: 1px solid #ccc;
                    border-radius: 4px;

                }
            }
            .delete_pr{

                cursor: pointer;

            }
            .table-panier th{
                border: 1px solid #5DFC70;
            }

            .wizard {

                margin: 20px auto;

                background: #fff;

            }

            .wizard .nav-tabs {

                position: relative;

                margin: 40px auto;

                margin-bottom: 0;

                border-bottom-color: #e0e0e0;

            }

            .wizard > div.wizard-inner {

                position: relative;

            }

            .connecting-line {

                height: 2px;

                background: #0D80C0;

                position: absolute;

                width: 80%;

                margin: 0 auto;

                left: 0;

                right: 0;

                top: 50%;

                z-index: 1;

            }



            .wizard .nav-tabs > li.active > a,

            .wizard .nav-tabs > li.active > a:hover,

            .wizard .nav-tabs > li.active > a:focus {

                color: #555555;

                cursor: default;

                border: 0;

                border-bottom-color: transparent;

            }



            span.round-tab {

                width: 70px;

                height: 70px;

                line-height: 70px;

                display: inline-block;

                border-radius: 100px;

                background: #fff;

                border: 2px solid #0D80C0;

                z-index: 2;

                position: absolute;

                left: 0;

                text-align: center;

                font-size: 25px;

            }

            span.round-tab i {

                color: #555555;

            }

            .wizard li.active span.round-tab {

                background: #fff;

                border: 2px solid #5DFC70;

            }

            .wizard li.active span.round-tab i {

                color: #5bc0de;

            }



            span.round-tab:hover {

                color: #333;

                border: 2px solid #333;

            }



            .wizard .nav-tabs > li {

                width: 25%;

            }



            .wizard li:after {

                content: " ";

                position: absolute;

                left: 46%;

                opacity: 0;

                margin: 0 auto;

                bottom: 0px;

                border: 5px solid transparent;

                border-bottom-color: #5bc0de;

                transition: 0.1s ease-in-out;

            }



            .wizard li.active:after {

                content: " ";

                position: absolute;

                left: 46%;

                opacity: 1;

                margin: 0 auto;

                bottom: 0px;

                border: 10px solid transparent;

                border-bottom-color: #0D80C0;

            }



            .wizard .nav-tabs > li a {

                width: 70px;

                height: 70px;

                margin: 20px auto;

                border-radius: 100%;

                padding: 0;

            }



            .wizard .nav-tabs > li a:hover {

                background: transparent;

            }



            .wizard .tab-pane {

                position: relative;

            }



            .wizard h3 {

                margin-top: 0;

            }



            @media (max-width: 585px) {
                .wizard .wizard-inner{
                    display:none;
                }
                .wizard {

                    width: 90%;

                    height: auto !important;

                }



                span.round-tab {

                    font-size: 16px;

                    width: 50px;

                    height: 50px;

                    line-height: 50px;

                }



                .wizard .nav-tabs > li a {

                    width: 50px;

                    height: 50px;

                    line-height: 50px;

                }



                .wizard li.active:after {

                    content: " ";

                    position: absolute;

                    left: 35%;

                }

            }

            .bs-calltoaction {

                position: relative;

                width: auto;

                padding: 15px 25px;

                margin-top: 10px;

                margin-bottom: 10px;

                border-radius: 5px;

            }



            .bs-calltoaction > .row {

                display: table;

                width: calc(100% + 30px);

            }



            .bs-calltoaction > .row > [class^="col-"],

            .bs-calltoaction > .row > [class*=" col-"] {

                float: none;

                display: table-cell;

                vertical-align: middle;

            }



            .cta-contents {

                padding-top: 10px;

                padding-bottom: 10px;

            }



            .cta-title {

                margin: 0 auto 15px;

                padding: 0;

            }



            .cta-desc {

                padding: 0;

            }



            .cta-desc p:last-child {

                margin-bottom: 0;

            }


            .cta-button {
                padding-top: 10px;
                padding-bottom: 10px;
            }
            #pr-tab{
                display:none;
            }
            @media (max-width: 991px) {
                table th {
                    font-size: 30px;
                }
                .tab-content .titselect{
                    font-size:50px;
                }
                .sect .img-allo img{
                    width:400px;
                }
                #supppanier{
                    color:black;
                    font-size:42px;
                    padding-top:15px;
                    padding-bottom:15px;
                    font-weight: bold;
                    width:380px;
                    height: 150px
                }
                #conf{
                    color:black;
                    font-size:40px;
                    padding-top:15px;
                    padding-bottom:15px;
                    font-weight: bold;
                    width:380px;}
                table th{
                    border: 1px solid #5DFC70;
                }
                tr #tt{
                    width:50px;
                }
                tr #ttqte{
                    width:50px;

                }
                tr #ttdhs{
                    width:150px;
                }
                tr #tt,tr #ttqte,tr #ttdhs{

                    font-size: 50px;
                }
                #pr-qte,#pr-prix,#pr-total{
                    font-size:40px;
                }
                #show-tit {
                    display:block;
                    font-size:30px;
                }
                #show-typ{
                    display:block;
                    font-size:20px;

                }
                td{
                    font-size:30px;
                    font-weight:bold;
                }
                #pr-tit{
                    display:none;
                }
                #pr-pr{
                    display:none;
                }
                #pr-img{
                    display:none;
                }
                #pr-tab{
                    display:block;
                }
                .delete_pr{
                    width:40px;
                }
                .btn{
                    width: 700px;
                    height: 100px;
                    padding-top: 8px;
                    padding-bottom: 8px;
                    font-size: 50px;
                    font-weight: bold;
                    margin-left: auto;
                    margin-right: auto;
                    display: block;
                    margin-top: 50px;

                }
                .buttonretour button{
                    margin-left:0;
                    margin-right:auto;
                    margin-bottom: 40px;
                    margin-top:20px;
                    display: block;
                    font-size:30px;
                }
                .container{
                    width:auto;
                }
                body{
                    width:auto;
                    height:auto;
                }
                .wizard-inner{
                    display:none;
                }
                .form-control{
                    width:95%;
                    height:65px;
                    font-size:45px;
                    text-align: center;
                    display: block;
                    margin: 0 auto;
                }
                .sect{
                    margin:0;
                    padding:0;
                }
                .bs-calltoaction > .row {
                    display: block;
                    width: auto;
                    margin-left:0;
                    margin-right:0;
                    padding-left:auto;
                    padding-right:auto;
                }



                .bs-calltoaction > .row > [class^="col-"],

                .bs-calltoaction > .row > [class*=" col-"] {

                    float: none;

                    display: block;

                    vertical-align: middle;

                    position: relative;

                }



                .cta-contents {

                    text-align: center;

                }

            }



            .bs-calltoaction.bs-calltoaction-default {

                color: #333;

                background-color: #fff;

                border-color: white;

            }


            .btconf{
                margin-bottom:20px;
            }
            .bs-calltoaction.bs-calltoaction-primary {

                color: #fff;



                background-color: #5DFC70;

            }



            .bs-calltoaction.bs-calltoaction-info {

                color: #fff;



            }



            .bs-calltoaction.bs-calltoaction-success {

                color: #fff;



            }



            .bs-calltoaction.bs-calltoaction-warning {

                color: #fff;



            }



            .bs-calltoaction.bs-calltoaction-danger {

                color: #fff;



            }



            .bs-calltoaction.bs-calltoaction-primary .cta-button .btn,

            .bs-calltoaction.bs-calltoaction-info .cta-button .btn,

            .bs-calltoaction.bs-calltoaction-success .cta-button .btn,

            .bs-calltoaction.bs-calltoaction-warning .cta-button .btn,

            .bs-calltoaction.bs-calltoaction-danger .cta-button .btn {

                border-color: #fff;

            }



            blockquote {

                border-left: none;

            }



            .quote-badge {

                background-color: rgba(0, 0, 0, 0.2);

            }



            .quote-box {

                overflow: hidden;

                margin-top: -50px;

                padding-top: -100px;

                border-radius: 17px;

                background-color: #4adfcc;

                margin-top: 25px;

                color: white;

                width: 325px;

                box-shadow: 2px 2px 2px 2px #e0e0e0;

            }



            .quotation-mark {

                margin-top: -10px;

                font-weight: bold;

                font-size: 100px;

                color: white;

                font-family: "Times New Roman", Georgia, Serif;

            }



            .quote-text {

                font-size: 19px;

                margin-top: -65px;

            }

            /*table panier*/





            table{

                width:100%;

                table-layout: fixed;



                background-color: white;

                font-family: 'Roboto', sans-serif;





            }

            .tbl-header{

                background-color: rgba(255,255,255,0.3);

                border-left: 1px solid #5DFC70; 

                border-right: 1px solid #5DFC70;

                border-top: 1px solid #5DFC70;



            }

            .tbl-content{

                height:auto;

                overflow-x:auto;

                margin-top: 0px;

                border: 1px solid #5DFC70;



            }

            th{

                padding: 20px 15px;

                text-align: center;

                font-weight: bold;

                font-size: 22px;

                color: black;

                text-transform: uppercase;





            }

            td{

                padding: 15px;

                text-align: center;

                vertical-align:middle;

                font-weight: bold;
                font-size:25px;

                color: black;

                border: 1px solid #5DFC70;





            }





            /* demo styles */





            section{

                margin-left: 50px;

                margin-right: 50px;

            }





            /* follow me template */

            .made-with-love {

                margin-top: 40px;

                padding: 10px;

                clear: left;

                text-align: center;

                font-size: 10px;

                font-family: arial;

                color: #fff;

            }

            .made-with-love i {

                font-style: normal;

                color: #F50057;

                font-size: 14px;

                position: relative;

                top: 2px;

            }

            .made-with-love a {

                color: #fff;

                text-decoration: none;

            }

            .made-with-love a:hover {

                text-decoration: underline;

            }





            /* for custom scrollbar for webkit browser*/



            ::-webkit-scrollbar {

                width: 6px;

            } 

            ::-webkit-scrollbar-track {

                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 

            } 

            ::-webkit-scrollbar-thumb {

                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 

            }

            .btvider button{


                height: auto;

                position: relative;

                color : white ;

                border: 1px solid #5DFC70;

                border-radius: 35px;

                background: linear-gradient(

                    90deg

                    , rgba(93,252,197,1) 0%, rgba(93,252,112,1) 57%);

                width:450px;

                padding-top: 15px;

                padding-bottom: 15px;

                font-weight: bold;

                font-size: 30px;

            }

            .btvider{

                position: absolute;

                right: 49px;

            }

            .btconfi button{


                height: auto;

                position: relative;

                color : white ;

                border: 1px solid #5DFC70;

                border-radius: 35px;

                background: linear-gradient(

                    90deg

                    , rgba(93,252,197,1) 0%, rgba(93,252,112,1) 57%);

                width:450px;

                padding-top: 15px;

                padding-bottom: 15px;

                font-weight: bold;

                font-size: 30px;

            }

            .mnt{


                padding-top: 3px;

                border-radius: 5px;

                margin-top: 8px;





            }

            .mnt h1{

                text-align: left;

                font-weight: bold;

                color: white;

            }

            .titselect{

                text-align: center;

                font-weight: bold;

                font-size: 25px;

                color:#5DFC70;



            }

            .titlinge{

                text-align:center;

                font-weight: bold;

                font-size: 35px;

                color:#0D80C0;



            }

            .buttonretour button{

                background-color: #5DFC70;

                width:350px;

                height: 50px;

                border:1px solid #5DFC70;

                border-bottom-left-radius: 10px;

                border-bottom-right-radius: 10px;

                color:#0D80C0;

                font-weight: bold;



            }

            .etp2{

                margin-right: 100px;

            }

            .img-allo img{
                display: block;
                margin-right: auto;
                margin-left: auto;
                width: 250px;
                position: relative;
                right: 0;

            }

            .imgpanier img{

                display: block;

                position: relative;

                margin-left: auto;

                margin-right: auto;

            }

            .total-h2{

                font-size:30px;

            }

            #tt{

                width:368px;

                text-align: left;
                font-size:30px;

            }

            #ttdhs{

                width:368px;

                text-align: center;

                padding-right: 10px;
                font-size:30px;

            }

            #ttqte{

                width:120px;

                text-align: center;
                font-size:30px;

            }

            .mnt table{

                width:100%;

                background-color: #25AAE2;

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

        <div class="container">

            <div class="row">

                <section class="sect">

                    <div class="buttonretour">

                        <a href="./index.php" target="target"><button>Page accueil</button></a>

                    </div>

                    <div class="img-allo">

                        <img src="assets/img/logo.jpg" alt="alt"/>

                    </div>



                    <div class="wizard">

                        <div class="wizard-inner">

                            <div class="connecting-line"></div>

                            <ul class="nav nav-tabs" role="tablist">



                                <li role="presentation" class="active">

                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Étape 1">

                                        <span class="round-tab">

                                            <i class="glyphicon "><img src="assets/img/list.png" style="width:32px;"></i>

                                        </span>

                                    </a>

                                </li>



                                <li role="presentation" class="disabled">

                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Étape 2">

                                        <span class="round-tab">

                                            <i class="glyphicon "><img src="assets/img/130302.png" style="width:40px;"></i>

                                        </span>

                                    </a>

                                </li>

                                <li role="presentation" class="disabled">

                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Étape 3">

                                        <span class="round-tab">

                                            <i class="glyphicon "><img src="assets/img/prestation.PNG" style="width:40px;"></i>

                                        </span>

                                    </a>

                                </li>



                                <li role="presentation" class="disabled">

                                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Étape 4">

                                        <span class="round-tab">

                                            <i class="glyphicon"><img src="assets/img/quantity.png" style="width:40px;"></i>

                                        </span>

                                    </a>

                                </li>

                            </ul>

                        </div>

                        <form role="form" action="passer-votre-commande.php" method="post" accept-charset="ISO-8859-1">

                            <div class="tab-content">

                                <h1 class="titselect">Séléctionnez votre linge</h1>

                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="bs-calltoaction bs-calltoaction-primary ">
                                        <div class="row">
                                                <select  class="form-control" name="cat" id="categorie" required="">
                                                    <option value="" selected disabled="disabled">Séléctionnez un type  </option>
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)):; ?>
                                                        <option value=" <?php echo $row1[1]; ?>"><?php echo $row1[0]; ?></option>
                                                    <?php endwhile; ?>

                                                </select>
                                            <div class="tab-pane  step2" role="tabpanel" id="step2">
                                            </div>
                                            <div class="tab-pane step3" role="tabpanel" id="step3">
                                            </div>
                                            <div class="tab-pane step4" role="tabpanel" id="complete">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <ul class="list-inline pull pull-right">

                                    <button type="submit" class="btn btn-default showdiv" id="ajtp" name="ajtp">Ajouter Au Panier</button>

                                    <li><button type="button" id="submitstep1" class="btn btn-primary next-step" style="display:none;">Save and continue</button></li>

                                </ul>

                                <div class="clearfix"></div>

                            </div>

                    </div>

                    </form>

            </div>

        </section>

    </div>

</div>





<?php if (!empty($products)) { ?>

    <section class="tablepanier">

        <div class="imgpanier"><img src="assets/img/boutique-signe.jpg" width="100px" height="100px" alt="alt"/></div>

        <div class="tbl-header">

            <table class="table-panier"  name="panier">

                <thead>

                    <tr>

                        <th id="pr-img" >Image Produit </th>
                        <th id="pr-tab">Produit</th>
                        <th id="pr-tit">titre</th>

                        <th id="pr-pr">Prestation</th>

                        <th>Qte</th>

                        <th>Prix Unt</th>

                        <th>Total</th>

                        <th>Actions</th>

                    </tr>

                </thead>

            </table>

        </div>

        <div class="tbl-content">

            <table cellpadding="0" cellspacing="0" border="0" >

                <tbody>

                    <?php
                    $qtetotal = 0;

                    $total = 0;

                    while ($row6 = mysqli_fetch_array($products)):;

                        $total += $row6['total'];

                        $_SESSION['total'] = $total;

                        $qtetotal += $row6['qte'];

                        $_SESSION['qtetotal'] = $qtetotal;
                        ?>

                        <tr>

                            <td><img src="<?php echo $row6['image']; ?>" alt="alt" width="100" height="100"/><h5 id="show-tit"><?php echo $row6['titre']; ?></h5> <h5 id="show-typ"><?php echo $row6['type']; ?></h5> </td>

                            <td id="pr-tit"><?php echo $row6['titre']; ?></td>

                            <td id="pr-pr"><?php echo $row6['type']; ?></td>

                            <td id="pr-qte"><?php echo $row6['qte']; ?></td>

                            <td id="pr-prix"><?php echo $row6['prix']; ?></td>

                            <td id="pr-total"><?php echo $row6['total']; ?></td>

                            <td>

                                <img src="./assets/img/trash.png" width="30" class="delete_pr"

                                     data-idpanier="<?php echo $row6['id_panier']; ?>"

                                     data-idproduit="<?php echo $row6['id_produit']; ?>"

                                     data-idprestation="<?php echo $row6['id_prestation']; ?>"



                                     />

                            </td>

                        </tr>



                    <?php endwhile; ?>

                </tbody>

            </table>

        </div>

        <div class="mnt">

            <table id="table-total">

                <tr>

                    <th id="tt">Total</th>

                    <th id="ttqte"><?php echo $qtetotal; ?></th>

                    <th id="ttdhs"><?php echo $total; ?> DH</th>

                </tr>

            </table>

            <h1> <h2 class="total-h2"></h2> </h1>

        </div>

        <div class="btconf">

            <div class="btvider">

                <a href="#"><button id="conf">Confirmer la commande</button></a>

            </div>

            <div class="btconfi">

                <button type="submit" name="supppanier" id="supppanier">Vider le Panier</button>

            </div>

        </div>

    </section>




<?php } ?>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
$("#conf").click(function(){
var title = $("#ttqte").text();
if (title==0){
alert("le panier est vide");
}
else {
window.location="./formulaire.php";
}

});

</script>
<script>
    if (total == 0 && qte == 0) {
   alert("Le panier est  vide.");
}
</script>

<script>

    $(window)

            .on("load resize ", function () {

                var scrollWidth =
                        $(".tbl-content").width() - $(".tbl-content table").width();

                $(".tbl-header").css({"padding-right": scrollWidth});

            })

            .resize();

</script>



<script type="text/javascript">

    $("#submitstep1").click(function (e) {

        console.log('Submit step1 start');

        e.preventDefault();

        cat = $("#categorie").val();

        $.ajax({

            url: "function/fucntion_BDD.php",

            method: 'POST',

            data: {

                cat

            },

            success: function (e) {

                console.log('Submit step1 success');

                $('.step2').html(e);

                console.log('Submit step1 before rebind');

                rebind();

                console.log('Submit step1 after rebind');

            }

        });

    });





</script>



<script type="text/javascript">

    function rebind() {

        console.log('Rebind called');

        $("#categorie").change(function () {

            $("#submitstep1").trigger('click');

        });

        $("#produit").change(function () {

            $("#submitstep2").trigger('click');

        });

        $("#service").change(function () {

            $("#submitstep3").trigger('click');

        });



        $("#submitstep2").click(function (e) {

            e.preventDefault();

            pro = $("#produit").val();

            $.ajax({

                url: "function/fucntion_BDD.php",

                method: 'POST',

                data: {

                    pro

                },

                success: function (e) {

                    $('.step3').html(e);

                    rebind();

                }

            });

        });

    }



    function nextTab(elem) {

        $(elem).next().find('a[data-toggle="tab"]').click();

    }

    function prevTab(elem) {

        $(elem).prev().find('a[data-toggle="tab"]').click();

    }



</script>

<script>

    $(document).ready(function () {

        rebind();

        $(".delete_pr").click(function () {

            elem = this;

            $.ajax({

                url: "function/fucntion_BDD.php",

                method: 'POST',

                data: {

                    operation: "delete_from_panier",

                    id_panier: $(this).data('idpanier'),

                    id_produit: $(this).data('idproduit'),

                    id_prestation: $(this).data('idprestation'),

                },

                success: function (e) {

                    $(elem).parent().parent().slideUp("slow").remove();
                    $("#table-total").load("passer-votre-commande.php #table-total");
                    $(".delete_pr").on("click", RefreshTable);

                }

            });


        });

        $("#supppanier").click(function () {

            var r = confirm("voulez-vous vraiment supprimer le panier ?");

            if (r == true) {

                $(".delete_pr").trigger("click");

                $(".tablepanier").hide("slow");

            }

        });

        //Initialize tooltips

        $(".nav-tabs > li a[title]").tooltip();



        //Wizard

        $('a[data-toggle="tab"]').on("show.bs.tab", function (e) {

            var $target = $(e.target);



            if ($target.parent().hasClass("disabled")) {

                return false;

            }

        });

        $(".next-step").click(function (e) {

            var $active = $(".wizard .nav-tabs li.active");

            $active.next().removeClass("disabled");

            nextTab($active);

        });

        $(".prev-step").click(function (e) {

            var $active = $(".wizard .nav-tabs li.active");

            prevTab($active);

        });

    });

</script>



</body>

</html>

