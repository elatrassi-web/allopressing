<?php
$hostname = "localhost";
$username = "c1615909c_allo";
$password = "ozesP-B97e5d";
$databasename = "c1615909c_allo";
$dbh = mysqli_connect($hostname, $username, $password, $databasename);
if (isset($_POST['operation']) ANd $_POST['operation'] == "delete_from_panier") {
    $dbh->query("DELETE FROM panier_produit "
            . "WHERE id_panier = '" . $_POST['id_panier'] . "' "
            . "AND id_produit = '" . $_POST['id_produit'] . "' "
            . "AND id_prestation = '" . $_POST['id_prestation'] . "'");
}
if (!empty($_POST["cat"])) {
    $cat = $_POST["cat"];
    $query1 = "select titre,id_produit from produit where id_cat='$cat' ORDER By titre ";
    $result2 = mysqli_query($dbh, $query1);
    ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
    <style>
        .etp2{
            margin-left: 100px;
        }
        .etp3{
            margin-left:200px;
        }
        .etp4{
            margin-left:300px;
            display:none;
        }
        @media (max-width: 991px) {
            .bs-calltoaction{
                padding-left:auto;
                padding-right:auto;
                
            }
          .form-control{
                    width:95%;
                    height:65px;
                    font-size:35px;
                    text-align: center;
                    display: block;
                    margin: 0 auto;
                }
                .etp4{
                    display:none;
                    margin-left:20px;
                }
       
        }
    </style>

    <div class="bs-calltoaction bs-calltoaction-info">
        <div class="row">
            <select class="form-control etp2"  name="pro" id="produit" accept-charset="ISO-8859-1" required="">
                <option value="" selected disabled="disabled" >Séléctionnez un article</option>

                <?php while ($row1 = mysqli_fetch_array($result2)):; ?>

                    <option value="<?php echo $row1[1]; ?>" ><?php echo $row1[0]; ?></option>
                <?php endwhile; ?>

            </select>



        </div>
    </div>
    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step"style="display:none;">Previous</button></li>
        <li><button type="button" id="submitstep2" class="btn btn-primary next-step" style="display:none;">Save and continue</button></li>
    </ul>


    <script type="text/javascript">
        $(document).ready(function () {
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

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }

    </script>

    <?php
}
if (!empty($_POST["pro"])) {
    $id_produit = $_POST["pro"];
    $query1 = "SELECT pp.id_prestation, p.type, pp.prix "
            . "FROM produit_prestation as pp "
            . "INNER JOIN prestation as p "
            . "         ON p.id_prestation = pp.id_prestation "
            . "         AND pp.id_produit = " . (int) $id_produit;
    $result9 = mysqli_query($dbh, $query1);
    ?>
    <div class="bs-calltoaction bs-calltoaction-success">
        <div class="row ">
            <select class="form-control etp3 " name="service" id="service" required="">
                <option value="" selected disabled="disabled">Séléctionnez une prestation </option>
                <?php while ($row5 = mysqli_fetch_array($result9)):; ?>

                    <option value=" <?php echo $row5[0]; ?> "> <?php echo $row5[1] ?> </option>
                <?php endwhile; ?>

            </select>


        </div>
    </div>
    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step" style="display:none;">Previous</button></li>
        <li><button type="button" id="submitstep3" class="btn btn-primary btn-info-full next-step" style="display:none;">Save and continue</button></li>
    </ul>
   <!-- step 4 -->
 <div class="bs-calltoaction bs-calltoaction-success">
    <div class="row">
        <input type="number"  id="quantity" min="1" name="quantity"  class="form-control etp4 " placeholder="Quantité">
    </div>
</div>
    <script>
            $(window)
                    .on("load resize ", function () {
                        var scrollWidth =
                                $("#quantity").width() - $("#quantity").width();
                        $("#quantity").css({"padding-right": scrollWidth});
                    })
                    .resize();
        </script>
    <script type="text/javascript">
        $("#service").change(function(){
    $("#quantity").show();
  });
      $(document).ready(function() {
 
 $("#ajtp").click(function() {
 
 var quantity = $("#quantity").val();
 if(quantity==''||quantity=='0') {
 alert("la valeur de quantité doit être supérieur au égal 1.");
 
 return false;
 }
      return;
    });
    });
        $(document).ready(function () {
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

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }

    </script>

    <?php
}

?>

