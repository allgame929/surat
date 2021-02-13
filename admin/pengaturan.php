<?php

include 'config.php';

$result = mysql_query("SELECT * FROM pejabat");

?>
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
		<!-- END NAVBAR -->

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
	<h3 class="page-title"><i class="fa fa-user"></i>  Pengaturan Data Pengurus</h3>
	<div class="panel panel-headline demo-icons">
		<div class="panel-heading">


		</div>
		<div class="panel-body">
		<button style="margin-bottom:15px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Data Pejabat</button>
		<br/>
		<br/>
		<br/>

		<div class="clearfix"></div>
		

		<div class="x_content">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

		<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<tbody>
				<?php $i = 1; ?>	
					<?php while ($row = mysql_fetch_assoc($result) ): ?>
						<tr>
							<td> <?= $i; ?> </td>
							<td> <?= $row["nama_pejabat"]; ?> </td>
							<td> <?= $row["jabatan"]; ?> </td>
							<td>
								<a href ="edit-pejabat.php?id=<?= $row["id"]; ?>" onclick="return confirm ('yakin?'); ">
									<button type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</button></a>
								<a href ="del-pejabat.php?id=<?= $row["id"]; ?>" onclick="return confirm ('yakin?'); ">
									<button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</button></a></td>
						</tr>
					<?php $i++; ?>
					<?php endwhile; ?>

		</tbody>
	</table>

		</div>
		</div>
	</div>

	

				</div>
			</div>

<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Penduduk</h4>
			</div>
			<div class="modal-body">
				<form action="tmb-data_pejabat.php" method="post">
				<div class="form-group">
						<label>Nama</label>
						<input name="nama_pejabat" type="text" class="form-control" placeholder="Nama ..">
					</div>
					<div class="form-group">
						<label>Jabatan</label>
						<input name="jabatan" type="text" class="form-control" placeholder="Jabatan ..">
					</div>

					<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
      </form>
    </div>
  </div>
</div>
</div>
    </div>





			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		

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