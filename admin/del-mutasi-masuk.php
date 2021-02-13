<?php 
include 'config.php';
$NIK=$_GET['id'];
mysql_query("delete from mutasi_masuk where NIK='$NIK'");
header("location:mutasi_datang.php");

?>

