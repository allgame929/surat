
<?php
//buat koneksi dengan MySQL
include 'config.php';
// mysql_connect("localhost", "root", "root");
// mysql_select_db("surat");
  
//tampilkan tabel mahasiswa_ilkom
$result=mysql_query("SELECT * FROM datapenduduk where NIK=$nomor");

 
//$row=mysql_fetch_row($result);
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
	<P>NOMOR <?= $nomor_surat_surat_nikah ?> TAHUN 2020
	<P>TENTANG PETUNJUK TEKNIS PELAKSANAAN PENCATATAN NIKAH
	<br><br>
</div>
<div class="center">
	<p>FORMULIR PENMOHONAN KEHENDAK NIKAH</p> 
</div>
<div class="right">
	<p>Model N2
</div>
<br><br>

<div class="left">
	<p>Perihal &nbsp;&nbsp;&nbsp;&nbsp; : <?= $perihal ?>
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
		&nbsp;
	Kemadang, <?= $tanggal ?>
</div><br>

<div class ="left">
	<p> Kepada Yth,
	<p>Kepala KUA Tanjungsari Gunungkidul
	<p>ditempat
<br><br>
	<p>Dengan hormat, kami mengajukan permohonan kehendak nikah untuk atas nama :
	<p>Calon suami	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		: <?= $_POST["namaCalonSuami"]; ?>
	<p>Calon istri	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		: <?= $_POST["namaCalonIstri"]; ?>
	<p>Hari/Tanggal/Jam	&nbsp;	: <?= $_POST["hariTanggalJam"]; ?>
	<p>Tempat akad nikah	: <?= $_POST["tempatAkad"]; ?>
<br><br>
	<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Bersama ini kami sampaikan surat-surat yang diperlukan untuk diperiksa sebagai berikut :
	<p>1. Surat pengantar nikah dari Desa/Kelurahan
	<p>2. Persetujuan calon mempeleai
	<p>3. Fotokopi KTP
	<p>4. Fotokopi akte kelahiran
	<p>5. Fotokopi kartu keluarga
	<p>6. Pas foto 2x3 = 3 lembar berlatar belakang biru
	<p>7. ....
	<p>8. ....
<br>
	<p>Dengan demikian permohonan ini kami sampaikan, kirannya dapat diperiksa, dihadiri 
dan dicatat sesuai dengan ketentuan peraturan perundang-undangan.

</div>
<br>
<br>
<br>

		<p>Diterima tanggal : <?= $tanggal ?>
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;			Pemohon
	<br> 
		<P> Yang menerima,
	<br><br><br>
		<P> ......................
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		
				......................

</div>
</div>
</div>