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
        <button class="btn btn-primary" id="print">Cetak</button>
        <button class="btn btn-primary" id="coba">coba</button>
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
        var coba = 100;
        $("#no-surat").html(coba);

        $('#print').on('click', function() {
            printDiv();
            saveSurat();
            window.location.href = '/admin/lihat-surat-masuk.php';
        });

        $("#coba").on('click', function() {
            coba++;
            $("#no-surat").html(coba);            
        })

        function saveSurat() {
            var nomor = '<?= $nomor ?>';
            var tanggal = '<?= $tanggal ?>';
            var perihal = '<?= $perihal ?>';
            var agama = '<?= $agama ?>';
            var nikPemohon = '<?= $nikPemohon ?>';
            var nikAyah = '<?= $nikAyah ?>';
            var nikIbu = '<?= $nikIbu ?>';

            $.ajax({
                type: "POST",
                url: 'tmb_srt_msk_act.php',
                data: {
                    nomor,
                    tanggal,
                    perihal,
                    nikPemohon,
                    nikAyah,
                    nikIbu
                },
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