
<?php
//buat koneksi dengan MySQL
mysql_connect("localhost", "root", "");
mysql_select_db("surat");
  
//tampilkan tabel mahasiswa_ilkom
$result=mysql_query("SELECT * FROM datapenduduk where NIK=$nomor");

 
$row=mysql_fetch_row($result);
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
		font-size: 8px;
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
	<P>NOMOR 473 TAHUN 2020
	<P>TENTANG PETUNJUK TEKNIS PELAKSANAAN PENCATATAN NIKAH
	<br><br>
</div>
<div class="center">
	<p>FORMULIR PENGANTAR NIKAH</p> 
</div>
<div class="right">
	<p>Model N1
</div>
<br>

<div class="left">
	<p>KANTOR DESA/KELURAHAN &nbsp; :Kemadang
	<p>KECAMATAN / KAPANEWON &nbsp; : Tanjungsari
	<p>KABUPATEN / KOTA	&nbsp;&nbsp;&nbsp; : Gunungkidul
</div><br>

<div class ="center">
	<p>PENGANTAR NIKAH
	<p>Nomor : 474.2/ 35 / XI / 2020
</div>	
<br>
	<p>Yang bertandatangan di bawah ini menjelaskan dengan sesungguhnya bahwa :
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Nama	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		: <?= $row[3] ?> </p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;NIK	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		:
	<?= $nikPemohon ?></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin	&nbsp;	: <?= $tanggal ?> </p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Tempat dan tanggal lahir	: <?= $row[11] ?>, <?= $row[10] ?></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Kewarganegaraan :
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Agama :
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan : <?= $row[9] ?></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Alamat : <?= $row[4] ?></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Status Pernikahan
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Laki-laki : Jejaka, Duda, Atau beristri ke ...	: 
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Perempuan : Perawan, Janda 	:
<br>
	<p>Adalah benar anak dari pernikahan seorang pria
		<p>&nbsp;&nbsp;&nbsp;&nbsp;1. Nama lengkap dan alias		: 
		<p>&nbsp;&nbsp;&nbsp;&nbsp;2. NIK							: <?= $nikAyah ?></p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;3. Tempat dan tanggal lahir		:
		<p>&nbsp;&nbsp;&nbsp;&nbsp;4. Kewarganegaraan				:
		<p>&nbsp;&nbsp;&nbsp;&nbsp;5. Agama							:
		<p>&nbsp;&nbsp;&nbsp;&nbsp;6. Pekerjaan						:
		<p>&nbsp;&nbsp;&nbsp;&nbsp;7. Alamat						:
<br>
	<p> Dengan seorang wanita
		<p>&nbsp;&nbsp;&nbsp;&nbsp;1. Nama lengkap dan alias		:
		<p>&nbsp;&nbsp;&nbsp;&nbsp;2. NIK							:<?= $nikIbu ?></p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;3. Tempat dan tanggal lahir		:
		<p>&nbsp;&nbsp;&nbsp;&nbsp;4. Kewarganegaraan				:
		<p>&nbsp;&nbsp;&nbsp;&nbsp;5. Agama							:
		<p>&nbsp;&nbsp;&nbsp;&nbsp;6. Pekerjaan						:
		<p>&nbsp;&nbsp;&nbsp;&nbsp;7. Alamat						:
<br>
	<p>Demikian surat pengantar ini dibuat dengan mengingat sumpah jabaran dan untuk dipergunakan sebagaimana mestinya.
	
<br><br>
	<div class="right">
		<p>
			Kemadang, <?= $tanggal ?>
		</P>
		<p>
			LURAH 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</P><br><br>
		<p>
			H.SUTONO.Amd. Kep SIP
		</P>
	</div>    
</div>
</div>
</div>