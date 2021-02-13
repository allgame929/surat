<?php 
include 'config.php';

$NIK=$_POST['NIK'];
$Nama=$_POST['Nama'];
$Tanggal_Lahir=$_POST['Tanggal_Lahir'];
$Tempat_Lahir=$_POST['Tempat_Lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$padukuhan=$_POST['padukuhan'];
$RW=$_POST['RW'];
$RT=$_POST['RT'];
$alamat_asal=$_POST['alamat_asal'];
$tanggal_mutasi=$_POST['tanggal_mutasi'];
$alasan_pindah=$_POST['alasan_pindah'];
$jenis_kepindahan=$_POST['jenis_kepindahan'];

#mysql_query("insert into mutasi_masuk values('$NIK', '$No_KK' , '$No_RTS', '$Nama', '$padukuhan', '$RW','$RT', '$Pendidikan_dalam_KK', '$Pendidikan_sedang_ditempuh', '$Pekerjaan', '$Tanggal_Lahir', '$Tempat_Lahir', '$Umur', '$Kawin', '$SHDK', '$Gol_Darah', '$Nama_Ayah', '$Nama_Ibu', '$Status', '$Tanggal_Lahir' ");

#mysql_query("
	#insert into warga (NIK) values ('$NIK')
	
#	");
mysql_query("update mutasi_masuk set Nama='$Nama', jenis_kelamin='$jenis_kelamin', padukuhan='$padukuhan', RW='$RW', RT='$RT',Tanggal_Lahir='$Tanggal_Lahir', Tempat_Lahir='$Tempat_Lahir', alamat_asal='$alamat_asal', tanggal_mutasi='$tanggal_mutasi', alasan_pindah='$alasan_pindah', jenis_kepindahan='$jenis_kepindahan' where NIK='$NIK'");

header("location:mutasi_datang.php");
