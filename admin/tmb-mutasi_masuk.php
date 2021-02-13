<?php 
include 'config.php';

$NIK=$_POST['NIK'];
$Nama=$_POST['Nama'];
$padukuhan=$_POST['padukuhan'];
$RW=$_POST['RW'];
$RT=$_POST['RT'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$Tanggal_Lahir=$_POST['Tanggal_Lahir'];
$Tempat_Lahir=$_POST['Tempat_Lahir'];
$alamat_asal=$_POST['alamat_asal'];
$alasan_pindah=$_POST['alasan_pindah'];
$tanggal_mutasi=$_POST['tanggal_mutasi'];
$jenis_kepindahan=$_POST['jenis_kepindahan'];

$rs=mysql_query("Insert into mutasi_masuk (`NIK`,`Nama`,`padukuhan`,`RW`,`RT`,`jenis_kelamin`,`Tanggal_Lahir`,`Tempat_Lahir`,`alamat_asal`,`alasan_pindah`,`tanggal_mutasi`,`jenis_kepindahan`) values ('".$_POST['NIK']."','".$_POST['Nama']."','".$_POST['padukuhan']."','".$_POST['RW']."','".$_POST['RT']."','".$_POST['jenis_kelamin']."','".$_POST['Tanggal_Lahir']."','".$_POST['Tempat_Lahir']."','".$_POST['alamat_asal']."','".$_POST['alasan_pindah']."','".$_POST['tanggal_mutasi']."','".$_POST['jenis_kepindahan']."')") or die(mysql_error());

if($rs)
	{
		echo "<script>window.alert('Tambah data kelahiran dan penduduk berhasil'); window.location.href='mutasi_datang.php</script>";
	}
	else {
		echo "<script>window.alert('Tambah data gagal!'); window.history.back()'</script>";
		echo mysql_error($con, $rs);
	}

header("location:mutasi_datang.php");

 ?>