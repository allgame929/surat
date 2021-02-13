<?php 
include 'config.php';
$NIK=$_GET['id'];
mysql_query("delete from kematian where NIK='$NIK'");


header("location:kematian.php");

?>

