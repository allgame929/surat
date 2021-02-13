
<?php

include 'config.php';

$namaPejabat=$_POST['namaPejabat'];
$resultPejabat=mysql_query("SELECT * FROM pejabat where nama_pejabat='{$_POST['namaPejabat']}'");
$rowPejabat=mysql_fetch_row($resultPejabat);
echo "<br />"; 


$result=mysql_query("SELECT * FROM warga where NIK=$nomor");

 
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
		font-size : 13px;
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

<?php $coba=50;

?>

<div class="book">
    <div class="page">
        <div class="subpage">
    <img src="/surat/logogk.png" style="float:left" height="150" width="100">	
	<div class="center">
		<h3> PEMERINTAH KABUPATEN GUNUNGKIDUL</h3>
		<h2>KAPANEWON TANJUNGSARI</h2>
		<h2>KELURAHAN KEMADANG</h2>
		<p>Alamat : JL.Baron Km16 Wonosari Gunungkidul Kode Pos : 55881,Email : www.desakemadang@yahoo.co.id
	</div>
		<p>---------------------------------------------------------------------------------------------------------------------</p>
	<div class="center">
		<p><u><b>SURAT PERMOHONAN PESERTA JAMKESOS</b></u></p>
		<p>Nomor	: <?= $nomor_surat_jamkesos ?> / &nbsp;&nbsp;&nbsp;    / X / 2020
	</div>	
		<br>
		<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini kepala Desa Kemadang Kecamatan Tanjungsari Kabupaten Gunungkidul,
			menerangkan dengan sesungguhnya bahwa :
		</p><br>
	
	<div class="tengah">
		<p> Nama
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp; 	: <?= $row[3] ?></p>
		<p> Jenis Kelamin
		&nbsp;&nbsp;&nbsp;&nbsp;	: <?= $_POST["jenisKelamin"]; ?></p>
		<p>Tempat Tgl Lahir	: <?= $row[12] ?>, <?= $row[11] ?></p>
		<p>NIK
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp; : <?= $nomor ?></p>
		<p>Pekerjaan
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;					: <?= $row[10] ?></p>
		<p>Agama
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;					: <?= $_POST["agama"]; ?></p>
		<p>Warga Negara
		&nbsp;&nbsp;			: <?= $_POST["wargaNegara"]; ?></p>
		<p>Alamat
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
		&nbsp;		 		: <?= $row[5] ?></p>
		
	</div><br>
	
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Orang tersebut diatas adalah benar-benar penduduk Kelurahan Kemadang, Kapanewon Tanjungsari, Kabupaten Gunungkidul
			, Daerah Istimewa Yogyakarta. Menurut pengamatan kami dan menurut data di lapangan orang tersebut di atas adalah termasuk keluarga tidak mampu 
			(keluarga pra sejahtera). Surat keterangan ini di buat dan di berikan untuk keperluan : syarat/lampiran pengajuan permohonan menjadi peserta Jaminan Kesehatan Nasional/Jamkesos/Jamkesda
			melalui Bapel DIY.
		
			
		<p>Demikian surat keterangan ini kami buat dengan sebenarnya dan selanjutnya agar dapat dipergunakan sebagaimana mestinya.
		<br><br>
	<div class="right">
		<p>
			Kemadang, <?= $tanggal ?>
		</P>
		<p>
			LURAH 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</P><br><br><br>
		<p>
			<?= $namaPejabat ?>
		</P>
	</div>    
    
</div>
</div>
</div>