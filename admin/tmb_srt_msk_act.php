<?php 
include 'config.php';
$nomor=$_POST['nomor'];
$tanggal=$_POST['tanggal'];
$nikPemohon=$_POST['nikPemohon'];
$nikAyah=$_POST['nikAyah'];
$nikIbu=$_POST['nikIbu'];
// $asal=$_POST['asal'];
// $tujuan=$_POST['tujuan'];
$asal='';
$tujuan='';
$perihal=$_POST['perihal'];

mysql_query("insert into surat_masuk values('','$asal','$nomor','$perihal','$tanggal','$tujuan')");
mysql_query("insert into surat_masuk values('','$asal','$nikPemohon','$perihal','$tanggal','$tujuan')");

// header("location:lihat-surat-masuk.php");

 ?>