<?php
$hostname = "localhost";
$username = "c1615909c_allo";
$password = "ozesP-B97e5d";
$databasename = "c1615909c_allo";
$dbh = mysqli_connect($hostname, $username, $password, $databasename);

if (!empty($_POST["cat"])) {
    $cat = $_POST["cat"];
    $query1 = "select titre,id_produit from produit where id_cat='$cat' ";
    $result2 = mysqli_query($dbh, $query1);
    ?>
    <h3>Etape 22222</h3>
    <div class="bs-calltoaction bs-calltoaction-info">
        <div class="row">
            <select class="form-control" id="produit" name="pro">
                <option value="abc" >abc</option>
                <option selected disabled="disabled">Séléctionnez un article</option>
                <?php while ($row1 = mysqli_fetch_array($result2)):; ?>
                    <option value="abc" >abc</option>

                    <option value="<?php echo $row1[1]; ?>" ><?php echo $row1[0]; ?></option>
                <?php endwhile; ?>

            </select>



        </div>
    </div>
    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
        <li><button type="button" id="submitstep2" class="btn btn-primary next-step">Save and continue</button></li>
    </ul>
    <input type="hidden" name="id_produit" value="<?php echo $_POST['id_produit']; ?>"/>
    <input type="hidden" name="id_prestation" value="<?php echo $_POST['id_prestation']; ?>"/>
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

?>
