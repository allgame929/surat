<?php 
include 'config.php';

$nama=$_POST['nama'];
$jk=$_POST['jk'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$berat_bayi=$_POST['berat_bayi'];
$panjang_bayi=$_POST['panjang_bayi'];
$nama_ayah=$_POST['nama_ayah'];
$nama_ibu=$_POST['nama_ibu'];
$lokasi_lahir=$_POST['lokasi_lahir'];
$tampat_lahir=$_POST['tempat_lahir'];
$penolong=$_POST['penolong'];


#mysql_query("insert into mutasi_masuk values('$NIK', '$No_KK' , '$No_RTS', '$Nama', '$padukuhan', '$RW','$RT', '$Pendidikan_dalam_KK', '$Pendidikan_sedang_ditempuh', '$Pekerjaan', '$Tanggal_Lahir', '$Tempat_Lahir', '$Umur', '$Kawin', '$SHDK', '$Gol_Darah', '$Nama_Ayah', '$Nama_Ibu', '$Status', '$Tanggal_Lahir' ");

#mysql_query("
	#insert into warga (NIK) values ('$NIK')
	
#	");

//$query="INSERT INTO kelahiran (nama, jk, tanggal_lahir, berat_bayi, panjang_bayi, nama_ayah, nama_ibu, lokasi_lahir, tempat_lahir, penolong) VALUES ('$nama','$jk','$tanggal_lahir,'$berat_bayi','$panjang_bayi','$nama_ayah','$nama_ibu','$lokasi_lahir','$tempat_lahir','$penolong')";

// $hasil = mysql_query($db, $query);

// if ($hasil == true) {	
//  		echo "<script>window.alert('Tambah data kelahiran dan penduduk berhasil'); window.location.href='../kelahiran/index.php'</script>";
// 	} else {
//   		echo "<script>window.alert('Tambah data gagal!'); window.history.back()'</script>";
//   		echo mysql_error($db);
// 	}

$rs=mysql_query("Insert into kelahiran (`nama`,`jk`,`tanggal_lahir`,`berat_bayi`,`panjang_bayi`,`nama_ayah`,`nama_ibu`,`lokasi_lahir`,`tempat_lahir`,`penolong`) values ('".$_POST['nama']."','".$_POST['jk']."','".$_POST['tanggal_lahir']."','".$_POST['berat_bayi']."','".$_POST['panjang_bayi']."','".$_POST['nama_ayah']."','".$_POST['nama_ibu']."','".$_POST['lokasi_lahir']."','".$_POST['tempat_lahir']."','".$_POST['penolong']."')") or die(mysql_error());

if($rs)
	{
		echo "<script>window.alert('Tambah data kelahiran dan penduduk berhasil'); window.location.href='../kelahiran/index.php'</script>";
	}
	else {
		echo "<script>window.alert('Tambah data gagal!'); window.history.back()'</script>";
		echo mysql_error($con, $rs);
	}

header("location:kelahiran.php");

 ?>