<?php
//buat koneksi dengan MySQL
include 'config.php';
include 'fungsiromawi.php';
  
$namaPejabat=$_POST['namaPejabat'];
$result=mysql_query("SELECT * FROM warga where NIK=$nomor");
$resultPejabat=mysql_query("SELECT * FROM pejabat where nama_pejabat='{$_POST['namaPejabat']}'");

$rowPejabat=mysql_fetch_row($resultPejabat);
echo "<br />"; 

$row=mysql_fetch_row($result);
echo "<br />";

$bulan = date('n');
$tahun = date('Y');
$romawi    = getRomawi($bulan);
$nomorSurat = "440/$nomor_surat_jamkesos/".$romawi."/".$tahun;
//var_dump($rowPejabat);
?>

        <html>
            <head>
                <title>Rekomendasi Jamkesos</title>
            </head>

        <body>
            <table align="center" border="0" cellpadding="1" style="width: 700px;"><tbody>
                <tr>     <td colspan="3"><div align="center">
                <img src="/surat/kopsurat.jpg" style="float:left" height="180" width="750">
                    <!-- <span style="font-family: Verdana; font-size: large;">	
                        <b> KABUPATEN GUNUNGKIDUL</b><BR>
                        <b> KAPANEWON TANJUNGSARI</b><BR>
                        <b>PEMERINTAH KALURAHAN KEMADANG</b>
                        <p>Alamat : JL.Baron Km16 Wonosari Gunungkidul Kode Pos : 55881,<br>Email : www.desakemadang@yahoo.co.id</p>
                    </span> -->
        <hr />
        </div>
            </tr>

                <tr>     <td colspan="3"> <div align="center">
                    <br><br><span style="font-size: medium;"><b><u>SURAT PERMOHONAN PESERTA JAMKESOS</u></b></span></div>
                </tr>

                <tr>     <td colspan="3"> <div align="center">
                    <span style="font-size: medium;">Nomor	: <?= $nomorSurat ?> </span></div><br>
                </tr>

        
                
                <tr>     <td colspan="3" height="300" valign="top"><div align="justify">
                    <span style="font-size: medium; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini kepala Desa Kemadang Kecamatan Tanjungsari Kabupaten Gunungkidul, menerangkan dengan sesungguhnya bahwa :</span>
                    
                        <table align="center" border="0" style="width: 420px;"><tbody>
                            
                            <tr>           <td width="120"><span style="font-size: medium;">Nama</span></td>           <td width="10"><span style="font-size: medium;">:</span></td>           <td width="248"><span style="font-size: medium;"><?= $row[3] ?></span></td>         </tr>
                            <tr>           <td><span style="font-size: medium;">Jenis Kelamin</span></td>           <td><span style="font-size: medium;">:</span></td>           <td><span style="font-size: medium;"> <?= $row[12] ?>, <?= $row[11] ?></span></td>         </tr>
                            <tr>           <td><span style="font-size: medium;">Tempat Tgl Lahir</span></td>           <td><span style="font-size: medium;">:</span></td>           <td><span style="font-size: medium;"><?= $row[5] ?> </span></td>         </tr>
                            <tr>           <td><span style="font-size: medium;">NIK</span></td>           <td><span style="font-size: medium;">:</span></td>           <td><span style="font-size: medium;"><?= $nomor ?> </span></td>         </tr>
                            <tr>           <td><span style="font-size: medium;">Jenis Kelamin</span></td>           <td><span style="font-size: medium;">:</span></td>           <td><span style="font-size: medium;"><?= $_POST["jenisKelamin"]; ?> </span></td>         </tr>
                            <tr>           <td><span style="font-size: medium;">Agama</span></td>           <td><span style="font-size: medium;">:</span></td>           <td><span style="font-size: medium;"><?= $_POST["agama"]; ?> </span></td>         </tr>
                            <tr>           <td><span style="font-size: medium;">Warga Negara</span></td>           <td><span style="font-size: medium;">:</span></td>           <td><span style="font-size: medium;"><?= $_POST["wargaNegara"]; ?> </span></td>         </tr>
                                      
                        </tbody></table>
<br>
        <div align="justify">
            <span style="font-size: medium;">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orang tersebut diatas adalah benar-benar penduduk Kelurahan Kemadang, Kapanewon Tanjungsari, Kabupaten Gunungkidul
                , Daerah Istimewa Yogyakarta. Menurut pengamatan kami dan menurut data di lapangan orang tersebut di atas adalah termasuk keluarga tidak mampu 
                (keluarga pra sejahtera). Surat keterangan ini di buat dan di berikan untuk keperluan : syarat/lampiran pengajuan permohonan menjadi peserta Jaminan Kesehatan Nasional/Jamkesos/Jamkesda
                melalui Bapel DIY.
            </span> 
        </div>
        </div>
<br>
        <div align="justify">
            <span style="font-size: medium;">

                Demikian surat keterangan ini kami buat dengan sebenarnya dan selanjutnya agar dapat dipergunakan sebagaimana mestinya.
        
            </span> 
        </div>
        </div>
<br>
        <div align="right">
        <span style="font-size: medium;">Kemadang, <?= $tanggal ?> </span><br>
        <span style="font-size: medium;">LURAH </span></div><br>
     
        <div align="right">
        <span style="font-size: medium;"><?= $namaPejabat ?></span></div>
        
        </tbody></table></body>
        </html>