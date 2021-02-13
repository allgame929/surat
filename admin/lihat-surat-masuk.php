<!doctype html>
<html lang="en">
<head>
	<?php
	session_start();
	include 'cek.php';
	include 'config.php';
	include '../sections/header.php';
	?>

	<title>SISTEM ADMINISTRASI PELAYANAN MASYARAKAT</title>

</head>
<body>
	<div id="wrapper">
		<?php
			require '../sections/navbar.php';
			require './template-parts/sidebar.php';
		?>
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
		

		<!-- MAIN -->
		<div class="main">

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title"><i class="fa fa-envelope"></i>  Surat</h3>
					<div class="panel panel-headline demo-icons">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Buat Surat</button>
							<br/><br/><br/>

							<div class="clearfix"></div>


							<div class="x_content">
								<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

									<thead>
										<tr>
											<th>No</th>
											<th>ID</th>
											<th>Nomor Surat</th>
											<!-- <th>Asal Surat</th>
											<th>Tujuan Surat</th> -->
											<th>Tgl Diterima</th>
											<th>Perihal</th>
											<th>Opsi</th>
										</tr>
									</thead>
									<tbody>
										<?php
							        		$sql = "SELECT * FROM surat_masuk";
							       			$result = mysql_query($sql);
							       			$no = 1;

							       			if (mysql_num_rows($result) > 0){
							       				while($row = mysql_fetch_assoc($result)){
							       		?>
							       		<tr>
							       			<td><?= $no ?></td>
							       			<td>
							       				<a href="<?= "det-srt-msk.php?id_surat={$row['id_surat']}" ?>"><?= $row['id_surat'] ?></a>
							       			</td>
							       			<td>
							       				<a href="<?= "det-srt-msk.php?id_surat={$row['id_surat']}" ?>"><?= $row['no_surat'] ?></a>
							       			</td>
							       			<!-- <td><?= $row['asal_surat'] ?></td>
							       			<td><?= $row['tujuan_surat'] ?></td> -->
							       			<td><?= $row['tanggal_terima'] ?></td>
							       			<td><?= $row['perihal_surat'] ?></td>
							       			<td>
							       				<a href="<?= "edit.php?id_surat={$row['id_surat']}" ?>">
							       					<button type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</button>
							       				</a>
							       			</td>
							       			<td>
							       				<a href=" <?= "delete.php?id_surat={$row['id_surat']}" ?> ">
							       					<button type="button" class="btn btn-danger btn-xs">
							       						<i class="fa fa-trash-o"></i> Hapus
							       					</button>
							       				</a>
							       			</td>
							       		</tr>

							       		<?php
													$no++;

							       				}

							       			} else {
							       				echo "0 results";
							       			}

							       			mysql_close();
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

			<!-- modal input -->
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Buat Surat</h4>
						</div>
						<div class="modal-body">
							<form action="preview-surat.php" method="post">
								<div class="form-group">
									<label>Perihal :</label><br>
									<select onchange="selectSurat()" id="perihal" name='perihal'>
										<option disabled selected>-- Pilih Perihal --</option>
										<option value='Rekomendasi BPJS'>Rekomendasi BPJS</option>
										<option value='Rekomendasi Jamkesos'>Rekomendasi Jamkesos</option>
										<option value='Surat Nikah'>Surat Nikah</option>
										<option value='Pengantar Nikah'>Pengantar Nikah</option>
										<option value='Persetujuan Nikah'>Persetujuan Nikah</option>
									</select>
								</div>

								<div id="form-surat-masuk"></div>

								<div class="modal-footer">
									<input type="submit" class="btn btn-primary" value="Cetak">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>

			<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		        <div class="modal-dialog">
		          	<div class="modal-content">
		            	<div class="modal-header">
		              		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		              		<h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
		            	</div>
		            	<div class="modal-footer">
		              		<a href="logout.php" class="btn btn-primary">Yes</a>
		              		<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
		            	</div>
		          	</div>
		        </div>
		    </div>


<?php
//Form Surat
include './template-parts/input-surat/form-bpjs.php';
include './template-parts/input-surat/form-jamkesos.php';
include './template-parts/input-surat/form-surat-nikah.php';
include './template-parts/input-surat/form-calon.php';
include './template-parts/input-surat/form-pengantar-nikah.php';
include '../sections/footer.php';
?>