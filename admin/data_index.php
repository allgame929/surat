<?php
include 'config.php';

// hitung warga
$query_warga = "SELECT COUNT(*) AS total FROM warga";
$hasil_warga = mysql_query( $query_warga);
$jumlah_warga = mysql_fetch_assoc($hasil_warga);

// hitung mutasi keluar
$query_mutasi_datang = "SELECT COUNT(*) AS total FROM mutasi_masuk";
$hasil_mutasi_datang = mysql_query($query_mutasi_datang);
$jumlah_mutasi_datang = mysql_fetch_assoc($hasil_mutasi_datang);

// hitung mutasi masuk
$query_mutasi_keluar = "SELECT COUNT(*) AS total FROM mutasi_keluar";
$hasil_mutasi_keluar= mysql_query($query_mutasi_keluar);
$jumlah_mutasi_keluar = mysql_fetch_assoc($hasil_mutasi_keluar);

// hitung kelahiran
$query_kelahiran = "SELECT COUNT(*) AS total FROM kelahiran";
$hasil_kelahiran = mysql_query($query_kelahiran);
$jumlah_kelahiran = mysql_fetch_assoc($hasil_kelahiran);

// hitung kematian
$query_kematian = "SELECT COUNT(*) AS total FROM kematian";
$hasil_kematian = mysql_query($query_kematian);
$jumlah_kematian = mysql_fetch_assoc($hasil_kematian);

//hitung surat
$query_surat = "SELECT COUNT(*) AS total FROM surat_masuk";
$hasil_surat = mysql_query($query_surat);
$jumlah_surat = mysql_fetch_assoc($hasil_surat);


?>