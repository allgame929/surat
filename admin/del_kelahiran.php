<?php 
include 'config.php';
$nama=$_GET['id'];
mysql_query("DELETE from kelahiran WHERE nama='$nama'");
header("location:kelahiran.php");

?>

