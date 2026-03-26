<?php
$hostname = "localhost";
$username = "c1615909c_allo";
$password = "ozesP-B97e5d";
$databasename = "c1615909c_allo";
$dbh = mysqli_connect($hostname, $username, $password, $databasename);
$output='';
$query = "SELECT * FROM `quartier` where id_ville = '".$_POST["idville"]."' order by nom_quartier ";
$result9 = mysqli_query($dbh, $query);
$output = ' <option value="" selected disabled="disabled"></option>';
while ($row1 = mysqli_fetch_array($result9)){
    $output .='<option value="'.$row1["0"].'">'.$row1["1"].'</option>';
}
echo $output;
?>