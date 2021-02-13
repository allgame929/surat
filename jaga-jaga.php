mysql_query("
	insert into mutasi_masuk 
	 (NIK, No_KK, No_RTS, Nama, padukuhan, RW, RT, Pendidikan_(dalam_KK), Pendidikan_(sedang_ditempuh), Pekerjaan, Tanggal_Lahir, Tempat_Lahir, Umur, Kawin, SHDK, Gol_Darah, Nama_Ayah, Nama_Ibu, Status, tanggal_mutasi)
	 VALUES 
	 ('$NIK', '$No_KK' , '$No_RTS', 'Nama', '$padukuhan', '$RW','$RT', '$Pendidikan_dalam_KK', '$Pendidikan_sedang_ditempuh', '$Pekerjaan', '$Tanggal_Lahir', '$Tempat_Lahir', '$Umur', '$Kawin', '$SHDK', '$Gol_Darah', '$Nama_Ayah', '$Nama_Ibu', '$Status', '$Tanggal_Lahir' 
	");




mysql_query("
	insert into mutasi_masuk (NIK, No_KK, No_RTS, Nama, padukuhan, RW, RT, Pendidikan_dalam_KK, Pendidikan_sedang_ditempuh, Pekerjaan) values ('$NIK', '$No_KK' , '$No_RTS', 'Nama', '$padukuhan', '$RW','$RT', '$Pendidikan_dalam_KK', '$Pendidikan_sedang_ditempuh', '$Pekerjaan')
	
	");

	<?php 
include 'config.php';

$NIK=$_POST['NIK'];
$No_KK=$_POST['No_KK'];
$No_RTS=$_POST['No_RTS'];
$Nama=$_POST['Nama'];
$padukuhan=$_POST['padukuhan'];
$RW=$_POST['RW'];
$RT=$_POST['RT'];
$Pendidikan_dalam_KK=$_POST['Pendidikan_dalam_KK'];
$Pendidikan_sedang_ditempuh=$_POST['Pendidikan_sedang_ditempuh'];
$Pekerjaan=$_POST['Pekerjaan'];
$Tanggal_Lahir=$_POST['Tanggal_Lahir'];
$Tempat_Lahir=$_POST['Tempat_Lahir'];
$Umur=$_POST['Umur'];
$Kawin=$_POST['Kawin'];
$SHDK=$_POST['SHDK'];
$Gol_Darah=$_POST['Gol_Darah'];
$Nama_Ayah=$_POST['Nama_Ayah'];
$Nama_Ibu=$_POST['Nama_Ibu'];
$Status=$_POST['Status'];

#mysql_query("insert into mutasi_masuk values('$NIK', '$No_KK' , '$No_RTS', '$Nama', '$padukuhan', '$RW','$RT', '$Pendidikan_dalam_KK', '$Pendidikan_sedang_ditempuh', '$Pekerjaan', '$Tanggal_Lahir', '$Tempat_Lahir', '$Umur', '$Kawin', '$SHDK', '$Gol_Darah', '$Nama_Ayah', '$Nama_Ibu', '$Status', '$Tanggal_Lahir' ");

mysql_query("
	insert into warga (NIK, No_KK, No_RTS, Nama, padukuhan, RW, RT, Pendidikan_dalam_KK, Pendidikan_sedang_ditempuh, Pekerjaan, Tanggal_Lahir, Tempat_Lahir, Umur, Kawin, SHDK, Gol_Darah, Nama_Ayah, Nama_Ibu, Status, tanggal_mutasi) values ('$NIK', '$No_KK' , '$No_RTS', '$Nama', '$padukuhan', '$RW','$RT', '$Pendidikan_dalam_KK', '$Pendidikan_sedang_ditempuh', '$Pekerjaan', '$Tanggal_Lahir', '$Tempat_Lahir', '$Umur', '$Kawin', '$SHDK', '$Gol_Darah', '$Nama_Ayah', '$Nama_Ibu', '$Status', $Tanggal_Lahir)
	");


#header("location:admin.php");

 ?>