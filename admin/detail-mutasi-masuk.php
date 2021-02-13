<!doctype html>
<html lang="en">
<head>
    <?php
    session_start();
    require 'cek.php';
    require 'config.php';
    require '../sections/header.php';
    ?>

    <title>SISTEM ADMINISTRASI PELAYANAN MASYARAKAT</title>
</head>
<body>
    <!-- WRAPPER -->
    <div id="wrapper">

        <!-- NAVBAR -->
        <?php
            require '../sections/navbar.php';
        ?>

        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
             <div class="sidebar-scroll">
                <nav>
                    
        <ul class="nav">
                    <li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>

                    <li><a href="lihat-surat-masuk.php" class=""><i class="fa fa-envelope"></i> <span>Pembuatan Surat</span></a></li>
                    <li><a href="penduduk.php" class=""><i class="fa fa-user fa-group fa-fw"></i> <span>Data Penduduk</span></a></li>

                <li>
                        <a href="#subPages4" data-toggle="collapse" class="collapsed"><i class="fa fa-exchange fa-fw"></i> <span>Data Mutasi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages4" class="collapse ">
                            <ul class="nav">
                                                    <li><a href="mutasi_datang.php" class=""><i class="fa fa-long-arrow-right fa-fw"></i> <span>Pindah Datang</span></a></li>
                                                    <li><a href="mutasi_keluar.php" class=""><i class="fa fa-long-arrow-left fa-fw"></i> <span>Pindah Keluar</span></a></li>
                            </ul>
                        </div>
                    </li>
                <li>
                        <a href="#subPages5" data-toggle="collapse" class="collapsed"><i class="fa fa-newspaper-o fa-fw"></i> <span>Data Peristiwa</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages5" class="collapse ">
                            <ul class="nav">
                                                    <li><a href="kelahiran.php" class=""><i class="fa fa-venus-mars fa-fw"></i> <span>Kelahiran</span></a></li>
                                                    <li><a href="kematian.php" class=""><i class="fa fa-ambulance fa-fw"></i> <span>Kematian</span></a></li>
                            </ul>
                        </div>
                    </li>

                



                            <li><a href="pengaturan.php" class=""><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>

                            <li><a href="javascript:;" class="" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i> <span>Keluar</span></li></a>
    </ul>               </nav>
            </div>
        </div>
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN --> 
		<div class="main">

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
	<h3 class="page-title"><i class="fa fa-envelope"></i> Detail Data</h3>

<a class="btn" href="mutasi_datang.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$NIK=mysql_real_escape_string($_GET['id']);
$result = mysql_query("select * from mutasi_masuk where NIK='$NIK'")or die(mysql_error());
$d = mysql_fetch_assoc($result);
?>					
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<tr>
			<td>NIK</td>
			<td><?php echo $d['NIK'] ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $d['Nama'] ?></td>
		</tr>
		<tr>
			<td>Padukuhan</td>
			<td><?php echo $d['padukuhan'] ?></td>
		</tr>
		<tr>
			<td>RW</td>
			<td><?php echo $d['RW'] ?></td>
		</tr>
		<tr>
			<td>RT</td>
			<td><?php echo $d['RT'] ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $d['jenis_kelamin'] ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><?php echo $d['Tanggal_Lahir'] ?></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><?php echo $d['Tempat_Lahir'] ?></td>
		</tr>
		<tr>
			<td>Alamat Asal</td>
			<td><?php echo $d['alamat_asal'] ?></td>
		</tr>
		<tr>
			<td>Alasan Pindah</td>
			<td><?php echo $d['alasan_pindah'] ?></td>
		</tr>
		<tr>
			<td>Jenis Kepindahan</td>
			<td><?php echo $d['jenis_kepindahan'] ?></td>
		</tr>
		<tr>
			<td>Tanggal Mutasi</td>
			<td><?php echo $d['tanggal_mutasi'] ?></td>
		</tr>
	</table>
	

	
				</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Anda yakin mau keluar?</h4>
            </div>
            <div class="modal-footer">
              <a href="logout.php" class="btn btn-primary">Ya</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
          </div>
        </div>
      </div>


		
		
	

	<?php
			include '../sections/footer.php'; 
		?>