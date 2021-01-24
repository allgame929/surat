<!doctype html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?php
	session_start();
	include 'cek.php';
	include 'config.php';
	include '../sections/header.php';
	?>
</head>

<body>
<?php
    $nomor=$_POST['nomor'];
    $tanggal=$_POST['tanggal'];
    $perihal=$_POST['perihal'];
    $namaPejabat=$_POST['namaPejabat'];

    $resultnamaPejabat=mysql_query("$namaPejabat");
    $datanamaPejabat=mysql_fetch_assoc($resultnamaPejabat);
    
    
    //$result=mysql_query('select count(*) AS total from surat_masuk');
    $resultBpjs=mysql_query('select count(*) AS total from surat_masuk where perihal_surat = "Rekomendasi BPJS"');
    $dataBpjs=mysql_fetch_assoc($resultBpjs);
    $nomor_surat_bpjs=$dataBpjs['total']++;

    $resultJamkesos=mysql_query('select count(*) AS total from surat_masuk where perihal_surat = "Rekomendasi Jamkesos"');
    $dataJamkesos=mysql_fetch_assoc($resultJamkesos);
    $nomor_surat_jamkesos=$dataJamkesos['total']++;

    $resultSuratnikah=mysql_query('select count(*) AS total from surat_masuk where perihal_surat = "Surat Nikah"');
    $dataSuratnikah=mysql_fetch_assoc($resultSuratnikah);
    $nomor_surat_surat_nikah=$dataSuratnikah['total']++;

    $resultPengantarnikah=mysql_query('select count(*) AS total from surat_masuk where perihal_surat = "Pengantar Nikah"');
    $dataPengantarnikah=mysql_fetch_assoc($resultPengantarnikah);
    $nomor_surat_pengantar_nikah=$dataPengantarnikah['total']++;

    $resultPersetujuannikah=mysql_query('select count(*) AS total from surat_masuk where perihal_surat = "Persetujuan Nikah"');
    $dataPersetujuannikah=mysql_fetch_assoc($resultPersetujuannikah);
    $nomor_surat_persetujuan_nikah=$dataPersetujuannikah['total']++;

    $kop_surat_bpjs = $nomor_surat_bpjs . "/VII/2020";
    $kop_surat_jamkesos = $nomor_surat_jamkesos . "/VII/2020";
    $kop_surat_nikah = $nomor_surat_nikah . "/VII/2020";
    $kop_surat_pengantar_nikah = $nomor_surat_pengantar_nikah . "/VII/2020";
    $kop_surat_persetujuan_nikah = $nomor_surat_persetujuan_nikah . "/VII/2020";


?>
</body>
    <style>
        .print-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            padding: 20px;
            border-bottom: 1px solid #cdcdcd;
            background: #fff;
        }
        .surat {
            margin: 10%;
            border: 1px solid #cdcdcd;
        }
    </style>
    <div class="print-header">
    <?php var_dump($_SESSION);?>
        <button class="btn btn-primary" id="print">Cetak</button>
        <!-- <button class="btn btn-primary" id="coba">coba</button> -->
    </div>
    <section class="surat">
        <div id="surat-cetak">
            <?php
                if ($perihal === 'Rekomendasi BPJS') {
                    include 'template-surat/surat-rekomendasi-bpjs.php';
                }else if($perihal == "Rekomendasi Jamkesos"){
                    include 'template-surat/surat-rekomendasi-jamkesos.php'; 
                }else if($perihal == "Surat Nikah"){
                    include 'template-surat/surat-nikah.php';
                }else if($perihal == 'Pengantar Nikah'){
                    $nikPemohon=$_POST['nikPemohon'];
                    $nikAyah=$_POST['nikAyah'];
                    $nikIbu=$_POST['nikIbu'];
                    include 'template-surat/pengantar-nikah.php';
                }else if($perihal == 'Persetujuan Nikah'){
                    include 'template-surat/persetujuan-nikah.php';
                }else {
                    include 'template-surat/pengantar-nikah.php';
                }
            ?>
        </div>


    </section>
    <script>
        // var coba = 100;
        // $("#no-surat").html(coba);

        $('#print').on('click', function() {
            printDiv();
            saveSurat();
            
        });

        // $("#coba").on('click', function() {
        //     coba++;
        //     $("#no-surat").html(coba);            
        // })

        function saveSurat() {
            var nomor_surat_bpjs = '<?= $kop_surat_bpjs ?>';
            var nomor_surat_jamkesos = '<?= $kop_surat_jamkesos ?>';
            var nomor_surat_nikah = '<?= $kop_surat_nikah ?>';
            var nomor_pengantar_nikah = '<?= $kop_surat_pengantar_nikah ?>';
            var nomor_persetujuan_nikah = '<?= $kop_surat_persetujuan_nikah ?>';
            var tanggal = '<?= $tanggal ?>';
            var perihal = '<?= $perihal ?>';
            
            $.ajax({
                type: "POST",
                url: 'tmb_srt_msk_act.php',
                data: {
                    nomor_surat_bpjs,
                    nomor_surat_jamkesos,
                    nomor_surat_nikah,
                    nomor_pengantar_nikah,
                    nomor_persetujuan_nikah,
                    tanggal,
                    perihal
                    // nikPemohon,
                    // nikAyah,
                    // nikIbu
                },
                success: function(){
                    window.location.href = '/surat/admin/lihat-surat-masuk.php';

                }
            });
        }  

		function printDiv(){
			var printContents = document.getElementById('surat-cetak').innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
        }
	</script>