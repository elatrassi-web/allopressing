<?php 
session_start();
$_SESSION['cat'] = $_POST['cat'];
$_SESSION['prod'] = $_POST['pro'];
$_SESSION['srv'] = $_POST['service'];
$_SESSION['qnt'] = $_POST['quantity'];

 
echo $_SESSION['cat'];
echo $_SESSION['pro'];
echo $_SESSION['service'];
echo $_SESSION['quantity'];

 
?>


