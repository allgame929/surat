<?php 
include 'config.php';

$NIK=$_POST['NIK'];
$n=mysql_query("select Nama from warga where NIK='$NIK' ");
$nama=mysql_fetch_row($n)[0];
$tanggal_kematian=$_POST['tanggal_kematian'];
$penyebab_kematian=$_POST['penyebab_kematian'];
$tempat_kematian=$_POST['tempat_kematian'];
$nama_pelapor=$_POST['nama_pelapor'];
$hubungan_pelapor=$_POST['hubungan_pelapor'];


$rs=mysql_query("Insert into kematian (`NIK`,`nama`,`tanggal_kematian`,`penyebab_kematian`,`tempat_kematian`,`nama_pelapor`,`hubungan_pelapor`) values ('".$_POST['NIK']."','".$nama."','".$_POST['tanggal_kematian']."','".$_POST['penyebab_kematian']."','".$_POST['tempat_kematian']."','".$_POST['nama_pelapor']."','".$_POST['hubungan_pelapor']."')") or die(mysql_error());

#if($rs)
#	{
#		echo "<script>window.alert('Tambah data mutasi keluar berhasil'); window.location.href='mutasi_keluar.php</script>";
#	}
#	else {
#		echo "<script>window.alert('Tambah data gagal!'); window.history.back()'</script>";
#		echo mysql_error($con, $rs);
#	}

header("location:kematian.php");

 ?>