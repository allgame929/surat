<?php 
include 'config.php';
$nama_pejabat = $_POST['nama_pejabat'];
$jabatan=$_POST['jabatan'];


mysql_query("update pejabat set nama_pejabat='$nama_pejabat', jabatan='$jabatan' where id='$id'");
header("location:pengaturan.php");

 ?>