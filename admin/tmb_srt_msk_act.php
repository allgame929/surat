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

// mysql_query("INSERT INTO surat_masuk (asal_surat, no_surat, perihal_surat, tanggal_terima, tujuan_surat) VALUES ('$asal','$nomor','$perihal','$tanggal','$tujuan')");
mysql_query("insert into surat_masuk values(DEFAULT,'$asal','$nomor','$perihal','$tanggal','$tujuan')");

header("location:lihat-surat-masuk.php");

 ?>