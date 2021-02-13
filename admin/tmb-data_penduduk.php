<?php 
include 'config.php';

$NIK=$_POST['NIK'];
$No_KK=$_POST['No_KK'];
$No_RTS=$_POST['No_RTS'];
$Nama=$_POST['Nama'];
$jk=$_POST['jk'];
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

#mysql_query("
	#insert into warga (NIK) va,'".$_POST['padukuhan']."'lues ('$NIK')
	
#	");

$rs=mysql_query("Insert into warga (`NIK`,`No_KK`,`No_RTS`,`Nama`,`jk`,`padukuhan`,`RW`,`RT`,`Pendidikan_dalam_KK`,`Pendidikan_sedang_ditempuh`,`Pekerjaan`,`Tanggal_Lahir`,`Tempat_Lahir`,`Umur`,`Kawin`,`SHDK`,`Gol_Darah`,`Nama_Ayah`,`Nama_Ibu`,`Status`) values ('".$_POST['NIK']."','".$_POST['No_KK']."','".$_POST['No_RTS']."','".$_POST['Nama']."','".$_POST['jk']."','".$_POST['padukuhan']."','".$_POST['RW']."','".$_POST['RT']."','".$_POST['Pendidikan_dalam_KK']."','".$_POST['Pendidikan_sedang_ditempuh']."','".$_POST['Pekerjaan']."','".$_POST['Tanggal_Lahir']."','".$_POST['Tempat_Lahir']."','".$_POST['Umur']."','".$_POST['Kawin']."','".$_POST['SHDK']."','".$_POST['Gol_Darah']."','".$_POST['Nama_Ayah']."','".$_POST['Nama_Ibu']."','".$_POST['Status']."')") or die(mysql_error());

if($rs)
	{
		echo "<script>window.alert('Tambah data kelahiran dan penduduk berhasil'); window.location.href='penduduk.php</script>";
	}
	else {
		echo "<script>window.alert('Tambah data gagal!'); window.history.back()'</script>";
		echo mysql_error($con, $rs);
	}



header("location:penduduk.php");

 ?>