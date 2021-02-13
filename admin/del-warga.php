<?php 
include 'config.php';
$NIK=$_GET['id'];
mysql_query("DELETE from warga where NIK='$NIK'");
header("location:penduduk.php");

?>

