<?php 
include 'config.php';

$nama=$_POST['nama_pejabat'];

$jabatan=$_POST['jabatan'];


$rs=mysql_query("Insert into pejabat (`nama_pejabat`,`jabatan`) values ('".$_POST['nama_pejabat']."','".$_POST['jabatan']."')") or die(mysql_error());

#if($rs)
#	{
#		echo "<script>window.alert('Tambah data mutasi keluar berhasil'); window.location.href='mutasi_keluar.php</script>";
#	}
#	else {
#		echo "<script>window.alert('Tambah data gagal!'); window.history.back()'</script>";
#		echo mysql_error($con, $rs);
#	}

header("location:pengaturan.php");

 ?>