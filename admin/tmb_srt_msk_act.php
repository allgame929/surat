<?php 
include 'config.php';
$kop_surat_bpjs=$_POST['nomor_surat_bpjs'];
$kop_surat_jamkesos=$_POST['nomor_surat_jamkesos'];
$kop_surat_nikah=$_POST['nomor_surat_nikah'];
$kop_surat_pengantar_nikah=$_POST['nomor_pengantar_nikah'];
$kop_surat_persetujuan_nikah=$_POST['nomor_persetujuan_nikah'];
$tanggal=$_POST['tanggal'];
$perihal=$_POST['perihal'];
// $nikPemohon=$_POST['nikPemohon'];
// $nikAyah=$_POST['nikAyah'];
// $nikIbu=$_POST['nikIbu'];
// $asal=$_POST['asal'];
// $tujuan=$_POST['tujuan'];
// $asal='';
// $tujuan='';


// mysql_query("INSERT INTO surat_masuk (asal_surat, no_surat, perihal_surat, tanggal_terima, tujuan_surat) VALUES ('$asal','$nomor','$perihal','$tanggal','$tujuan')");
if ($perihal === 'Rekomendasi BPJS'){
mysql_query("insert into surat_masuk values('','$kop_surat_bpjs','$perihal','$tanggal')");
} else if($perihal == "Rekomendasi Jamkesos"){
mysql_query("insert into surat_masuk values('','$kop_surat_jamkesos','$perihal','$tanggal')");
} else if($perihal == "Surat Nikah"){
mysql_query("insert into surat_masuk values('','$kop_surat_nikah','$perihal','$tanggal')");
} else if($perihal == "Pengantar Nikah"){
mysql_query("insert into surat_masuk values('','$kop_surat_pengantar_nikah','$perihal','$tanggal')");
} else {
mysql_query("insert into surat_masuk values('','$kop_surat_persetujuan_nikah','$perihal','$tanggal')");
}

//header("location:lihat-surat-masuk.php");

 ?>