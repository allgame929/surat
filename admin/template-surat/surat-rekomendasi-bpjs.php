
<?php
//buat koneksi dengan MySQL
include 'config.php';

  
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
$nomorSurat = "440/$nomor_surat_bpjs/".$romawi."/".$tahun;
//var_dump($rowPejabat);
?>

		<html>
            <head>
                <title>Rekomendasi BPJS</title>
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
				<tr>     <td colspan="2"><table border="0" cellpadding="1" style="width: 400px;"><tbody>
					<tr>         <td width="93"><br><br><span style="font-size: medium;">Nomor Surat</span></td>     <td width="8"><br><br><span style="font-size: medium;">:</span></td>        	<td width="200"><br><br><span style="font-size: medium;"><?= $nomorSurat ?></span></td>       </tr>
					<tr>         <td><span style="font-size: medium;">Hal</span></td>        				 <td><span style="font-size: medium;">:</span></td>         			<td><span style="font-size: medium;">Rekomendasi BPJS</span></td>       </tr>
					
				</tbody></table>
				</tr>

					

        
                
                <tr>     <td colspan="3" height="300" valign="top"><div align="justify">
                    <br><br><span style="font-size: medium; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini kepala Desa Kemadang Kecamatan Tanjungsari Kabupaten Gunungkidul, menerangkan dengan sesungguhnya bahwa :</span>
                    
                        <table align="center" border="0" style="width: 420px;"><tbody>
                            
                            <tr>           <td width="120"><span style="font-size: medium;">Nama</span></td>           <td width="10"><span style="font-size: medium;">:</span></td>           <td width="248"><span style="font-size: medium;"><?= $row[3] ?></span></td>         </tr>
                            <tr>           <td><span style="font-size: medium;">Tempat Tgl Lahir</span></td>           <td><span style="font-size: medium;">:</span></td>           <td><span style="font-size: medium;"><?= $row[12] ?>, <?= $row[11] ?></span></td>         </tr>
						    <tr>           <td><span style="font-size: medium;">Alamat</span></td>           <td><span style="font-size: medium;">:</span></td>           <td><span style="font-size: medium;"><?= $row[5] ?></span></td>         </tr>
                            <tr>           <td><span style="font-size: medium;">NIK</span></td>           <td><span style="font-size: medium;">:</span></td>           <td><span style="font-size: medium;"><?= $nomor ?> </span></td>         </tr>
                            
                            
                                      
                        </tbody></table>
<br>
        <div align="justify">
            <span style="font-size: medium;">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orang tersebut diatas adalah Penduduk Desa Kemadang, Kecamatan Tanjungsari Kabupaten Gunungkidul
			termasuk dalam kriteria miskin/tidak mampu sesuai dengan data TKP2K, dan form isian lampiran rekomendasi sesuai dengan
			permensos kriteria kemiskinan.
		
            </span> 
        </div>
        </div>
<br>
        <div align="justify">
            <span style="font-size: medium;">

			Demikian atas perkenanya di ucapkan terimakasih.
        
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

