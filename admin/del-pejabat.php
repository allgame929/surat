<?php 
include 'config.php';
$id=$_GET['id'];
mysql_query("delete from pejabat where id='$id'");
header("location:pengaturan.php");

?>

