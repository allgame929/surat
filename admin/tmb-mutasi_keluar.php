<?php 
include 'config.php';

$NIK=$_POST['NIK'];
$n=mysql_query("select Nama from warga where NIK='$NIK' ");
$Nama=mysql_fetch_row($n)[0];
$alamat=$_POST['alamat'];
$RT=$_POST['RT'];
$RW=$_POST['RW'];
$padukuhan=$_POST['padukuhan'];
$desa=$_POST['desa'];
$kecamatan=$_POST['kecamatan'];
$kabupaten=$_POST['kabupaten'];
$provinsi=$_POST['provinsi'];
$negara=$_POST['negara'];
$kode_pos=$_POST['kode_pos'];
$tanggal_mutasi=$_POST['tanggal_mutasi'];
$alasan_pindah=$_POST['alasan_pindah'];
$jenis_kepindahan=$_POST['jenis_kepindahan'];

$rs=mysql_query("Insert into mutasi_keluar (`NIK`,`Nama`,`alamat`,`RT`,`RW`,`padukuhan`,`desa`,`kecamatan`,`kabupaten`,`provinsi`,`negara`,`kode_pos`,`tanggal_mutasi`,`alasan_pindah`,`jenis_kepindahan`) values ('".$_POST['NIK']."','".$Nama."','".$_POST['alamat']."','".$_POST['RT']."','".$_POST['RW']."','".$_POST['padukuhan']."','".$_POST['desa']."','".$_POST['kecamatan']."','".$_POST['kabupaten']."','".$_POST['provinsi']."','".$_POST['negara']."','".$_POST['kode_pos']."','".$_POST['tanggal_mutasi']."','".$_POST['alasan_pindah']."','".$_POST['jenis_kepindahan']."')") or die(mysql_error());

#if($rs)
#	{
#		echo "<script>window.alert('Tambah data mutasi keluar berhasil'); window.location.href='mutasi_keluar.php</script>";
#	}
#	else {
#		echo "<script>window.alert('Tambah data gagal!'); window.history.back()'</script>";
#		echo mysql_error($con, $rs);
#	}

header("location:mutasi_keluar.php");

 ?>