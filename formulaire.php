<?php
session_start();
header('Content-type:text/html; charset=utf-8');
ini_set('session.gc_maxlifetime', 36000);
session_set_cookie_params(36000); 



?>
<?php
$hostname = "localhost";
$username = "c1615909c_allo";
$password = "ozesP-B97e5d";
$databasename = "c1615909c_allo";
$dbh = mysqli_connect($hostname, $username, $password, $databasename);

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

if (!empty($products)) {

    $productsHTML = '<table  name="panier"  style="background-color:#fff; text-align:center; width:800px; height:auto; color:black; ">
                        <thead >
                            <tr style="border:2px solid #0D80C0;">
                                <th style="border:2px solid #0D80C0; font-size:15px;font-weight:bold;">Image Produit</th>
                                <th style="border:2px solid #0D80C0; font-size:15px;font-weight:bold;">Titre</th>
                                <th style="border:2px solid #0D80C0; font-size:15px;font-weight:bold;">Prestation</th>
                                <th style="border:2px solid #0D80C0; font-size:15px;font-weight:bold;">Qte</th>
                                <th style="border:2px solid #0D80C0; font-size:15px;font-weight:bold;">Prix Unt</th>
                                <th style="border:2px solid #0D80C0; font-size:15px;font-weight:bold;">Total</th>
                            </tr>
                        </thead>
                        <tbody style=" border:10px solid #0D80C0; ">';
    $qtetotal = 0;
    $total = 0;
    while ($row6 = mysqli_fetch_array($products)):;
        $total += $row6['total'];
        $_SESSION['total'] = $total;
        $qtetotal += $row6['qte'];
        $_SESSION['qtetotal'] = $qtetotal;

        $productsHTML .= ' <tr style="width:1000px; text-align:center;">
                             <td style="border:1px solid #0D80C0; width:85px;"><img src="https://www.allopressing.ma/' . $row6['image'] . '" alt="alt" width="80" height="100"/></td>
                           <td style="border:1px solid #0D80C0; width:135px; font-size:20px; font-weight:bold;">' . $row6['titre'] . '</td>
                       <td style="border:1px solid #0D80C0; width:135px; font-size:20px; font-weight:bold;">' . $row6['type'] . '</td>
                   <td style="border:1px solid #0D80C0; width:135px;font-size:20px; font-weight:bold; ">' . $row6['qte'] . '</td>
                    <td style="border:1px solid #0D80C0; width:135px; font-size:20px; font-weight:bold;">' . $row6['prix'] . '</td>
                  <td style="border:1px solid #0D80C0; width:135px; font-size:20px; font-weight:bold;">' . $row6['total'] . '</td>
                                    </tr>

                            <?php endwhile; ?>
                        </tbody>
                        
                    </table>';

    endwhile;
    $totalHTML = '<tfoot >
                            <tr>
                                <th style="border:1px solid #0D80C0;width:370px; font-size:20px; font-weight:bold;">Total</th>
                                <th style="border:1px solid #0D80C0;width:140px; font-size:20px; font-weight:bold;">' . $qtetotal . '</th>
                                <th style="border:1px solid #0D80C0;width:269px; font-size:20px; font-weight:bold;">' . $total . 'DHS</th>
                            </tr>
                                    <h4 style=\"font-size:10px; \">Contact :<br> Commande : 0619 399 999 / 0537 58 01 59   <br>  Client (service client) : 0669 257 835 / 0669 258 943 <br>Email : contact@allopressing.ma</h4>

                        </tfoot>
                       
                        
                        
';
}

function load_ville() {
    $hostname = "localhost";
$username = "c1615909c_allo";
$password = "ozesP-B97e5d";
$databasename = "c1615909c_allo";
    $dbh = mysqli_connect($hostname, $username, $password, $databasename);
    $output = '';
    $query = "SELECT * FROM `ville` order by nom_ville ";
    $result8 = mysqli_query($dbh, $query);
    while ($row9 = mysqli_fetch_array($result8)) {
        $output .= '<option value="' . $row9["id_ville"] . '">' . $row9["nom_ville"] . '</option>';
    }
    return $output;
}

if (isset($_POST['infoper'])) {
    $civi = $_POST['civilite'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adrs_coll = $_POST['adrs_coll'];
    $ville_coll = $_POST['ville_collecte'];
    $quartie_coll = $_POST['quartie_collecte'];
    $date_col = $_POST['date_collecte'];
    $time_col = $_POST['heure_collecte'];
    $adrs_liv = $_POST['adrs_livraison'];
    $ville_liv = $_POST['ville_livraison'];
    $quartier_liv = $_POST['quartier_livraison'];
    $date_liv = $_POST['date_livraison'];
    $time_livr = $_POST['heure_livraison'];
    $remarque = $_POST['comments'];

    $dbh->query("insert into client "
            . "values('', '$civi','$nom','$email','$phone','$adrs_coll','$ville_coll','$quartie_coll','$date_col','$adrs_liv','$ville_liv','$quartier_liv','$remarque','$date_liv')");
    $actual_lin = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //header('Location: ' . $actual_lin);
    $last_entry = mysqli_insert_id($dbh);
    $last_entry = mysqli_insert_id($dbh);
    $_SESSION["idclient"] = $last_entry;
    $dbh->query("update  `panier` set id_client='" . $_SESSION["idclient"] . "' where id_panier='" . $_SESSION["idpanier"] . "'");
    

    $dbh->query("insert into commande "
            . "values('', '" . $_SESSION["idclient"] . "','$nom','$email','$phone','$adrs_coll','$ville_coll','$quartie_coll','$date_col','$adrs_liv','$ville_liv','$quartier_liv','$remarque','" . $_SESSION["total"] . "','$date_liv','$time_col','$time_livr')");
    $actual_lin = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //header('Location: ' . $actual_lin);
    $last_entry = mysqli_insert_id($dbh);
    $_SESSION["idcommande"] = $last_entry;

    $dbh->query("insert into ligne_commande values('" . $_SESSION["idpanier"] . "', '" . $_SESSION["idcommande"] . "')");
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //header('Location: ' . $actual_link);
    $dbh->query("update  `linge_commande` set id_commande= '" . $_SESSION["idcommande"] . "' where id_panier='" . $_SESSION["idpanier"] . "' ");
    //mail
    $SQLnomVilleLivraison = 'SELECT nom_ville FROM ville WHERE id_ville = ' . $ville_liv;
    $nomVilleLiv = mysqli_query($dbh, $SQLnomVilleLivraison)->fetch_object()->nom_ville;
    $SQLnomVilleCollecte = 'SELECT nom_ville FROM ville WHERE id_ville = ' . $ville_coll;
    $nomVilleColl = mysqli_query($dbh, $SQLnomVilleCollecte)->fetch_object()->nom_ville;

    $SQLnomquartierLivraison = 'SELECT nom_quartier FROM quartier WHERE id_quartier = ' . $quartier_liv;
    $nomquartierliv = mysqli_query($dbh, $SQLnomquartierLivraison)->fetch_object()->nom_quartier;
    $SQLnomquartiercoll = 'SELECT nom_quartier FROM quartier WHERE id_quartier = ' . $quartie_coll;
    $nomquartiercoll = mysqli_query($dbh, $SQLnomquartiercoll)->fetch_object()->nom_quartier;
    $destinataires = "m.elatrassi19@gmail.com";
    $destinataires2 = "allopressing.maroc@gmail.com";
    $destinataires3 = "contact@allopressing.ma";
    $destinataires4 = "allo@allopressing.ma";
    $destinataires5 = "cleanhouse.maroc@gmail.com";
    $destinataires6 = $email;


    $sujet = "Commande N°  '" . $_SESSION["idcommande"] . "' ";
    $headers = 'From: Allopressing.ma' . "\r\n" .
    $headers .= 'Content-Type: text/html; charset="iso-8859-1"' . "\n";
// en-têtes expéditeur
// en-têtes adresse de retour
//forme html
// priorité urgente
    $message = "<html> 
        <body>  
        <div style=\" color:#0D80C0; \"> 
        <h1 style=\"background-color:#5DFC70; color:#0D80C0; text-align:center; padding:10px; \">Allo Pressing   </h1>
        <h1 style=\"\">Infos de Clients </h1>
        <h4 style=\"color:black;\">Civilité : $civi </h4>
        <h4 style=\"color:black;\"> Nom : $nom </h4>
        <h4 style=\"color:black;\">Email : $email</h4>
        <h4 style=\"color:black;\">Tel : $phone</h4>
        <h4 style=\"color:black;\">Addresse  :$adrs_coll</h4>
        <h4 style=\"color:black;\">Ville de collecte : $nomVilleColl</h4>
        <h4 style=\"color:black;\">Quartier collecte : $nomquartiercoll</h4>
        <h4 style=\"color:black;\">Date de collecte : $date_col </h4>
        <h4 style=\"color:black;\">Heure de collecte :  $time_col</h4>
        <h1 style=\"color:#0D80C0;\">_____________________</h1>
        <h4 style=\"color:black;\">Addresse  :$adrs_liv </h4>
        <h4 style=\"color:black;\">Ville de livraison :$nomVilleLiv </h4>
        <h4 style=\"color:black;\">Quartier de livraison : $nomquartierliv</h4>
        <h4 style=\"color:black;\">Date de livraison : $date_liv </h4>
        <h4 style=\"color:black;\">Heure de livraison : $time_livr</h4>
        <p style=\"color:black;\">Remarques : $remarque</p>
            </div> 
            <table
        <h1>La commande</h1>
  <end
</table>

        </body> 
        </html> ";
    $message .= "" . $productsHTML;
    $message .= "" . $totalHTML;

    mail($destinataires, $sujet, $message, $headers);
   mail($destinataires2, $sujet, $message, $headers);
    mail($destinataires3, $sujet, $message, $headers);
    mail($destinataires4, $sujet, $message, $headers);
    mail($destinataires5, $sujet, $message, $headers);
    mail($destinataires6, $sujet, $message, $headers);
}
?>

<?php
if (isset($_POST['infoper'])) {
    $civi = $_POST['civilite'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adrs_coll = $_POST['adrs_coll'];
    $ville_coll = $_POST['ville_collecte'];
    $quartie_coll = $_POST['quartie_collecte'];
    $date_col = $_POST['date_collecte'];
    $time_col = $_POST['heure_collecte'];
    $adrs_liv = $_POST['adrs_livraison'];
    $ville_liv = $_POST['ville_livraison'];
    $quartier_liv = $_POST['quartier_livraison'];
    $date_liv = $_POST['date_livraison'];
    $time_livr = $_POST['heure_livraison'];
    $remarque = $_POST['comments'];
    echo '<script>alert("Votre message a été bien envoyé. Un de nos agents vous contactera dans les plus brefs délais. Merci de consulter votre boite E-mail.");window.location="./index.php"; </script>';
    session_unset();
}

?>

<html>

    <!--window.location="./index.php";-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-203843026-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-203843026-1');
</script>
    <head>
        <title>Allo Pressing</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="shortcut icon" href="assets/img/icon.png">
    </head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap4.3.1.min.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-timepicker.css"/>
    <style>

        .bootstrap-datetimepicker-widget.dropdown-menu{
            margin:2px 0;
            padding:4px;
            width:39em;
            height: 10em;
        }
        .buttonretour button{
            margin-left:0;
            margin-right:auto;
            margin-bottom: 40px;
            margin-top:20px;
            display: block;
            font-size:30px;
            background-color: #5DFC70;
            width:350px;
            height: 50px;
            border:1px solid #5DFC70;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            color:#0D80C0;
            font-weight: bold;
        }
        table{
            background-color: black;
        }
        .controls label{
            color:black;
        }
        .text-command{
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        #lien-pop:hover{

        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
        }

        /* The Close Button */
        .close {
            color: #0D80C0;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #5DFC70;
            text-decoration: none;
            cursor: pointer;
        }

        #teteform{
            color:red;
        }
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            font-size: 100%;
            vertical-align: baseline;
        }

        html {
            line-height: 1;
        }

        ol, ul {
            list-style: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        caption, th, td {
            text-align: left;
            font-weight: normal;
            vertical-align: middle;
        }

        q, blockquote {
            quotes: none;
        }
        q:before, q:after, blockquote:before, blockquote:after {
            content: "";
            content: none;
        }

        a img {
            border: none;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
            display: block;
        }

        /* Colors */
        /* ---------------------------------------- */
        * {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato', 'sans-serif';
            font-weight: 400;
        }

        a {
            text-decoration: none;
        }

        header, #formpos {
            padding: 2em 10%;
        }

        header {
            background-color: #fff;
            color: #0D80C0
                ;

        }
        header h1 {
            font-weight: 400;
            font-size: 50px;
            text-align: center;
            margin-bottom: 10px;
            margin-left:10px;
            margin-right:10px;
        }
        header h1 i {
            color: #055a8b;
        }
        header h1 span {
            font-weight: 300;
        }
        header p {
            font-weight: 400;
            font-size: 16px;
            color: rgba(255, 255, 255, 0.9);
            letter-spacing: .05em;
            margin-bottom: 10px;
        }
        header h3,
        header h3 a {
            color: #32CCFE;
        }
        header h3 a,
        header h3 a a {
            -moz-transition: color 0.3s;
            -o-transition: color 0.3s;
            -webkit-transition: color 0.3s;
            transition: color 0.3s;
        }
        header h3 a:hover,
        header h3 a a:hover {
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        h2.heading {
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 300;
            text-align: left;
            color:#0D80C0 ;
            border-bottom: 1px solid #5DFC70;
            padding-bottom: 3px;
            margin-bottom: 20px;
        }

        .controls {
            text-align: left;
            position: relative;
        }
        .controls input[type="text"],
        .controls input[type="email"],
        .controls input[type="tel"],
        .controls textarea,
        .controls button,
        .controls select {
            padding: 12px;
            font-size: 14px;
            border: 1px solid #c6c6c6;
            width: 100%;
            margin-bottom: 18px;
            color: #888;
            font-family: 'Lato', 'sans-serif';
            font-size: 16px;
            font-weight: 300;
            background-color: #fff;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }
        .controls input[type="text"]:focus, .controls input[type="text"]:hover,
        .controls input[type="email"]:focus,
        .controls input[type="email"]:hover,
        .controls input[type="tel"]:focus,
        .controls input[type="tel"]:hover,
        .controls textarea:focus,
        .controls textarea:hover,
        .controls button:focus,
        .controls button:hover,
        .controls select:focus,
        .controls select:hover {
            outline: none;
            border-color: #5DFC70
                ;
        }
        .controls input[type="text"]:focus + label, .controls input[type="text"]:hover + label,
        .controls input[type="email"]:focus + label,
        .controls input[type="email"]:hover + label,
        .controls input[type="tel"]:focus + label,
        .controls input[type="tel"]:hover + label,
        .controls textarea:focus + label,
        .controls textarea:hover + label,
        .controls button:focus + label,
        .controls button:hover + label,
        .controls select:focus + label,
        .controls select:hover + label {
            color: #077ABC;
            cursor: text;
        }
        .controls .fa-sort {
            position: absolute;
            right: 10px;
            top: 17px;
            color: #999;
        }
        .controls select {
            -moz-appearance: none;
            -webkit-appearance: none;
            cursor: pointer;
        }
        .controls label {
            position: absolute;
            left: 8px;
            top: 12px;
            color: black;
            font-size: 20px;
            display: inline-block;
            padding: 4px 10px;
            font-weight: 400;
            background-color: rgba(255, 255, 255, 0);
            pointer-events: none;
            -moz-transition: color 0.3s, top 0.3s, background-color 0.8s;
            -o-transition: color 0.3s, top 0.3s, background-color 0.8s;
            -webkit-transition: color 0.3s, top 0.3s, background-color 0.8s;
            transition: color 0.3s, top 0.3s, background-color 0.8s;
        }

        .controls label.active {
            top: -11px;
            color: #555;
            background-color: white;
        }
        label{
            font-size: 25px;
            font-weight: bold;
        }
        .controls textarea {
            resize: none;
            height: 200px;
        }
        .controls button {
            cursor: pointer;
            background-color: #0D80C0;
            border: none;
            color: #fff;
            font-weight: bold;
            font-size: 20px;
            padding: 12px 0;
        }
        .controls button:hover {
            background-color: #0D80C0;
        }
        .map-container{
            overflow:hidden;
            position:relative;
            height:0;
            padding-bottom: 30px;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }

        @media (max-width: 991px) { 
             .ph-date{
        font-size: 35px;
        font-weight: bold;
    }
            label{
                font-size: 40px;
                font-weight: bold;
            }

            header, #formpos {
                padding: 0;
            }

            #time_col , #time_livr{
                margin-top:7px;
                height:60px;
            }
            .form-control{
                display: block;
                width: 100%;
                height: calc(1.5em + .75rem + 2px);
                padding: .375rem .75rem;
                font-size: 2rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            }
            .text-command{
                font-size: 20px;
                font-weight: bold;
                text-align: center;
            }
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 50%;
            }

            /* The Close Button */
            .close {
                color: #0D80C0;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #5DFC70;
                text-decoration: none;
                cursor: pointer;
            }
            .controls  .com{
                font-size: 30px;
                font-weight: 300px;    
                font-family: monospace;
            }
            .controls label:focus , .controls label:hover  {
                font-size:20px;

            }
            .controls textarea:focus , .controls textarea:hover {
                margin-top: 100px;

            }
            #date_col,#date_livr{
                height:60px;
            }
            .controls {
                text-align: center;
                position: relative;
                font-size:30px;
            }

            .controls input[type="text"], .controls input[type="email"], .controls input[type="tel"], .controls textarea, .controls select {
                padding: 12px;
                font-size: 30px;
                border: 1px solid #c6c6c6;
                width: 100%;
                margin-bottom: 18px;
                color: #888;
                font-family: 'Lato', 'sans-serif';
                font-size: 30px;
                font-weight: 300;
                background-color: #fff;
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                -moz-transition: all 0.3s;
                -o-transition: all 0.3s;
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
                height: 75px;
                padding-bottom: 5px;
            }
            form .form-group{
                width: 85%;
                height:auto;
                margin-left: auto;
                margin-right: auto;
                display: block;
            }
            h2.heading{
                font-size: 40px;
                font-weight: bold;
                text-align:center;
            }
            header{
                padding:1em 1%;
            }
            .controls label {
                position: absolute;
                left: 8px;
                top: 12px;
                color: black;
                font-size: 16px;
                display: inline-block;
                padding: 4px 10px;
                font-weight: bold;
                font-size: 32px;
                background-color: rgba(255, 255, 255, 0);
                pointer-events: none;
                -moz-transition: color 0.3s, top 0.3s, background-color 0.8s;
                -o-transition: color 0.3s, top 0.3s, background-color 0.8s;
                -webkit-transition: color 0.3s, top 0.3s, background-color 0.8s;
                transition: color 0.3s, top 0.3s, background-color 0.8s;}
            #comments{
                height:150px;
            }


            #infoper{
                background-color: #5DFC70;
            }
            .controls button {
                cursor: pointer;
                background-color: #0D80C0;
                border: none;
                color: #fff;
                font-weight: bold;
                font-size: 25px;
                padding: 12px 0;}
        }
        a:hover{
            text-decoration:none;
        }


    </style>
    <body>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    </head>
    <header>
        <div class="buttonretour">

            <a href="./passer-votre-commande.php" target="target"><button>Page Commande</button></a>

        </div>
        <h1> <img src="assets/img/logo.png" alt="alt" width="550px" height="190px" /><br> Formulaire de commande </h1>
    </header>
    <!--  General -->
    <form role="form" action="formulaire.php" method="post" id="formpos" accept-charset="character_set">
        <div class="form-group">
            <h2 class="heading"> Données personnelles</h2>
            <label for="civilite">Civilité(*)</label>
            <div class="controls">
                <select class="floatLabel" name="civilite" id="civi" required>
                    <option value=""></option>
                    <option value="Madame">Madame</option>
                    <option value="Monsieur">Monsieur</option>

                </select>
            </div>
            <label for="name">Nom(*)</label>
            <div class="controls">
                <input type="text" id="name" class="floatLabel" name="nom" required="">
            </div>
            <label for="email">Email(*)</label>
            <div class="controls">
                <input type="email" id="email" class="floatLabel" name="email" required="">
            </div>
            <label for="email">Téléphone(*)</label>
            <div class="controls">
                <input type="tel" id="phone" class="floatLabel" name="phone" required="">
            </div>
        </div>
        <!--  Details adresse de collecte  -->
        <div class="form-group">
            <h2 class="heading">ADRESSE DE COLLECTE
            </h2>
            <label for="adrs_coll">Adresse(*)</label>
            <div class="controls">
                <input type="text" id="adrs_coll" class="floatLabel" name="adrs_coll" required="">
            </div>
            <label for="ville">Ville(*)</label>
            <div class="controls">
                <i class="fa fa-sort"></i>
                <select class="floatLabel" name="ville_collecte" id="ville_colle" required="">
                    <option value=""></option>
                    <?php echo load_ville(); ?>                        
                </select>
            </div>



            <!-- quartier collecte -->
            <label for="ville">Quartier</label>
            <div class="controls">
                <i class="fa fa-sort"></i>
                <select class=" floatLabel " name="quartie_collecte" id="quartie_colle" required="" >
                </select>
            </div> 
            <div class="controls">
                <i class="fa fa-sort"></i>
                <h4 for="ville" class="ph-date">Date et heure de collecte(*)</h4>
                <input class=" floatLabel form-control" name="date_collecte"  type="date" id="date_col"">
                    <select class="sel" name="heure_collecte"  id="time_col" required="">
                        <option value="09:00">09:00</option>
                        <option value="09:30">09:30</option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>
                        <option value="18:30">18:30</option>
                        <option value="19:00">19:00</option>
                        <option value="19:30">19:30</option>
                        <option value="20:00">20:00</option>
                    </select>
               
            </div>  
        </div
        <!--  Details adresse de livraison  -->
        <div class="form-group">
            <h2 class="heading">ADRESSE DE LIVRAISON(*)
            </h2>
            <label for="adrs_coll">Adresse(*)</label>
            <div class="controls">
                <input type="text" id="adrs_livraison" class="floatLabel" name="adrs_livraison" required="">
            </div>
            <label for="ville">Ville(*)</label>
            <div class="controls">
                <i class="fa fa-sort"></i>
                <select class="floatLabel " name="ville_livraison" id="ville_livraison" required="">
                    <option value=""></option>
                    <?php echo load_ville(); ?>                        

                </select>
            </div>
            <label for="ville">Quartier</label>
            <div class="controls">
                <i class="fa fa-sort"></i>
                <select class=" floatLabel " name="quartier_livraison" id="quartie_livr" required="">
                    <option value=""></option>
                </select>
            </div>
            <div class="controls"  >
                <i class="fa fa-sort"></i>
                <h4 for="ville" class="ph-date">Date et heure de livraison</h4>
                <input class="form-control"  name="date_livraison" type="date" id="date_livr" required="">
                <div class="controls">
                    <select class="sel" name="heure_livraison" id="time_livr" required="">
                        <option value="09:00">09:00</option>
                        <option value="09:30">09:30</option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>
                        <option value="18:30">18:30</option>
                        <option value="19:00">19:00</option>
                        <option value="19:30">19:30</option>
                        <option value="20:00">20:00</option>
                    </select>
                </div>
            </div> 
        </div>
        <!--  More -->
        <div class="form-group">
            <h2 class="heading">REMARQUES!</h2>
            <div class="controls">
                <textarea name="comments" class="floatLabel" id="comments" ></textarea>
                <label for="comments" class="com">Remarques sur votre commande, par ex. Déchirure , brulure , sang , encre...</label>

                <button type="submit"  name="infoper" id="myBtn">Confirmer votre commande</button>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        
       <script>
        $(document).ready(function () {
            $('#ville_colle').change(function () {
                var id_ville = $(this).val();
                $.ajax({
                    url: "selquartier.php",
                    method: "POST",
                    data: {idville: id_ville},
                    dataType: "text",
                    success: function (data)
                    {
                        $('#quartie_colle').html(data);
                    }
                });
            });
        })
        $(document).ready(function () {
            $('#ville_livraison').change(function () {
                var id_ville = $(this).val();
                $.ajax({
                    url: "selquartierliv.php",
                    method: "POST",
                    data: {idville: id_ville},
                    dataType: "text",
                    success: function (data)
                    {
                        $('#quartie_livr').html(data);
                    }
                });
            });
        })
    </script>
        <script type="text/javascript">
            $(function () {
                $('#time_col').datetimepicker({
                    format: 'HH:mm',
                    disabledTimeIntervals: [[moment({h: 0}), moment({h: 6})], [moment({h: 20, m: 00}), moment({h: 24})]],
                    enabledHours: [9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
                    stepping: 30
                });
            });
        </script>
        <script type="text/javascript">
            $(function () {
                $('#time_livr').datetimepicker({
                    format: 'HH:mm',
                    disabledTimeIntervals: [[moment({h: 0}), moment({h: 6})], [moment({h: 20, m: 00}), moment({h: 24})]],
                    enabledHours: [9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
                    stepping: 30
                });
            });
        </script>

        <script>
            $(function () {
                var dtToday = new Date();

                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if (month < 10)
                    month = '0' + month.toString();
                if (day < 10)
                    day = '0' + day.toString();

                var maxDate = year + '-' + month + '-' + day;

                // or instead:
                // var maxDate = dtToday.toISOString().substr(0, 10);

                $('#date_col').attr('min', maxDate);
            });
        </script>

     
    </form>



    
    <script type="text/javascript">

                (function ($) {
                    function floatLabel(inputType) {
                        $(inputType).each(function () {
                            var $this = $(this);
                            // on focus add cladd active to label
                            $this.focus(function () {
                                $this.next().addClass("active");
                            });
                            //on blur check field and remove class if needed
                            $this.blur(function () {
                                if ($this.val() === "" || $this.val() === "blank") {
                                    $this.next().removeClass();
                                }
                            });
                        });
                    }
                    // just add a class of "floatLabel to the input field!"
                    floatLabel(".floatLabel");
                })(jQuery);
    </script>


</body>
</html>
