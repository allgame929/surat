
<?php
//buat koneksi dengan MySQL
include 'config.php';

// mysql_connect("localhost", "root", "root");
// mysql_select_db("surat");
  
//tampilkan tabel mahasiswa_ilkom
//$resultSuami=mysql_query("SELECT * FROM warga where NIK=$nikSuamiterdaftar");
//$resultIstri=mysql_query("SELECT * FROM warga where NIK=$nikIstriterdaftar");

 
//$rowSuami=mysql_fetch_row($resultSuami);
//$rowIstri=mysql_fetch_row($resultIstri);

//echo "$row[0] $row[1] $row[2] $row[3] $row[4]";
echo "<br />";

?>
<style>
.center {
  text-align: center;
  
}
.left {
  text-align: left;
  
}
.right {
  text-align: right;
  
}

 body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
		font-size: 13px;
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>
<div class="book">
    <div class="page">
        <div class="subpage">
<div class="left">
	<p>LAMPIRAN VI
	<P>KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN MASYARAKAT ISLAM
	<P>NOMOR <?= $nomor_surat_persetujuan_nikah ?> TAHUN 2020
	<P>TENTANG PETUNJUK TEKNIS PELAKSANAAN PENCATATAN NIKAH
	<br><br>
</div>
<div class="center">
	<p>FORMULIR PERSETUJUAN CALON PENGANTIN</p> 
</div>
<div class="right">
	<p>Model N4
</div>
<div class="center">
	<p><u>PERSETUJUAN CALON PENGANTIN</u>
</div>
<br>

<div class="left">
	<p>Yang bertanda tangan dibawah ini :
	<p>A. Calon Suami
		<p>&nbsp;&nbsp;&nbsp;&nbsp;1. Nama lengkap dan alias &nbsp;		: <?= $_POST["namaSuami"]; ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;2. Bin 	&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $_POST["binSuami"]; ?>						
		<p>&nbsp;&nbsp;&nbsp;&nbsp;3. NIK	&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp; : <?= $_POST["nikSuamitakterdaftar"]; ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;4. Tempat dan tanggal lahir		: <?= $_POST["ttlSuami"]; ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;5. Warganegaraan	&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp; : <?= $_POST["wrgSuamitakterdaftar"]; ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;6. Agama	&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $_POST["agamaSuamitakterdaftar"]; ?>
											
		<p>&nbsp;&nbsp;&nbsp;&nbsp;7. Pekerjaan	&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $_POST["pekerjaanSuami"]; ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;8. Tempat tinggal&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp; : <?= $_POST["alamatSuami"]; ?>
												
<br>
	<p> B. Calon Istri
		<p>&nbsp;&nbsp;&nbsp;&nbsp;1. Nama lengkap dan alias &nbsp;		: <?= $_POST["namaIstri"]; ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;2. Bin 	&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $_POST["binIstri"]; ?>					
		<p>&nbsp;&nbsp;&nbsp;&nbsp;3. NIK	&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp; : <?= $_POST["nikIstritakterdaftar"]; ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;4. Tempat dan tanggal lahir		: <?= $_POST["ttlIstri"]; ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;5. Warganegaraan	&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp; : <?= $_POST["wrgIstritakterdaftar"]; ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;6. Agama	&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $_POST["agamaIstritakterdaftar"]; ?>
											
		<p>&nbsp;&nbsp;&nbsp;&nbsp;7. Pekerjaan	&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $_POST["pekerjaanIstri"]; ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;8. Tempat tinggal&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp; : <?= $_POST["alamatIstri"]; ?>
<br>		
	<p>Menyatakan dengan sesungguhnya bahwa atas dasar sukarela dan kesadaran sendiri tanpa ada
		paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.
<br>
	<p>Demikian surat persetujuan ini dibuat untuk dipergunakan seperlunya.
<br><br>
<div class="right">
	<p> Kemadan, <?= $tanggal ?>
</div>

	<p> Calon Suami
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;		Calon Istri
<br><br><br><br>
	<p><?= $_POST["namaSuami"]; ?>
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;		<?= $_POST["namaIstri"]; ?>
	
</div>
</div>
</div>