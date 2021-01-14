
<?php
//buat koneksi dengan MySQL
include 'config.php';
// mysql_connect("localhost", "root", "root");
// mysql_select_db("surat");

// TODO : ganti jadi config include
  
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

.tengah {
	
	text-indent: 80px;
	
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
    <img src="/surat/logogk.png" style="float:left" height="150" width="100">	
	<div class="center">
		<h3> PEMERINTAH KABUPATEN GUNUNGKIDUL</h3>
		<h2>KECAMATAN TANJUNGSARI</h2>
		<h2>DESA KEMADANG</h2>
		<p>Alamat : JL.Baron Km16 Wonosari Gunungkidul Kode Pos : 55881,Email : www.desakemadang@yahoo.co.id
	</div>
		<p>---------------------------------------------------------------------------------------------------------------------</p>
		<p>Nomor	: <?= $nomor_surat_bpjs ?>/ &nbsp;&nbsp;&nbsp;    / VIII / 2020
		<p>Hal		: <?= $perihal ?></P>
		<br>
		<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini kepala Desa Kemadang Kecamatan Tanjungsari Kabupaten Gunungkidul,
			menerangkan dengan sesungguhnya bahwa :</p><br>
	<div class="tengah">
		<p> Nama
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp; 	: <?= $row[3] ?></p>
		<p>Tempat Tgl Lahir	: <?= $row[11] ?>, <?= $row[10] ?></p>
		<p>Alamat
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;		 		: <?= $row[4] ?></p>
		<p>NIK
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp; : <?= $nomor ?></p>
	</div><br>
	
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orang tersebut diatas adalah Penduduk Desa Kemadang, Kecamatan Tanjungsari Kabupaten Gunungkidul
			termasuk dalam kriteria miskin/tidak mampu sesuai dengan data TKP2K, dan form isian lampiran rekomendasi sesuai dengan
			permensos kriteria kemiskinan.
		<p>Demikian atas perkenanya di ucapkan terimakasih.
		<br><br>
	<div class="right">
		<p>
			Kemadang, <?= $tanggal ?>
		</P>
	</div>	<br>
	<div class="">
		<p> TKPK Desa Kemadang 
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
		&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp; Kepala Desa Kemadang
		<br><br><br><br>
		<p>&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp; 
							SURONO 
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
		&nbsp;&nbsp;		H.SUTONO.Amd. Kep SIP
	</div>
	
	<p class="center">
		TKPK Kecamatan Tanjungsari
	</p>
	<br><br><br>
	<p class="center">
	...........................
	</p>
	
    
    
</div>
</div>
</div>