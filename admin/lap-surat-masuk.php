<!doctype html>
<html lang="en">
<head>
	<?php
	session_start();
	require 'cek.php';
	require 'config.php';
	require '../sections/header.php';
	?>

	<title>Dashboard | Siasy</title>
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

					<li><a href="lihat-surat-keluar.php" class=""><i class="fa fa-paper-plane-o"></i> <span>Data Penduduk</span></a></li>



							<li><a href="pengaturan.php" class=""><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>

							<li><a href="javascript:;" class="" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i> <span>Keluar</span></li></a>
	</ul>				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
		<div class="main">

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
	<h3 class="page-title"><i class="fa fa-envelope"></i> Laporan Surat Masuk</h3>
	<div class="panel panel-headline demo-icons">
		<div class="panel-body">
		<a style="margin-bottom:10px" href="lap-surat-masuk-ctk.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
		<br/>
		<br/>
		<br/>

		<div class="clearfix"></div>
		

		<div class="x_content">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

		<thead>
		<tr>
			<th>No</th>
			<th>Nomor Surat</th>
			<th>Asal Surat</th>
			<th>Tujuan Surat</th>
			<th>Tgl Diterima</th>
			<th>Perihal</th>
			<!-- <th>Opsi</th> -->
		</tr>
		</thead>
		<tbody>
			<?php
        		$sql = "SELECT * FROM surat_masuk";
       			$result = mysql_query($sql);
       			$no = 1;

       			if (mysql_num_rows($result) > 0){
       				while($row = mysql_fetch_assoc($result)){

       					echo "<tr> ";
       					echo "<td>$no</td>";
						echo "<td>$row[no_surat]</td>";
						echo "<td>$row[asal_surat]</td>";
						echo "<td>$row[tujuan_surat]</td>";
						echo "<td>$row[tanggal_terima]</td>";
						echo "<td>$row[perihal_surat]</td>";
						// echo "<td><a href='edit.php?id_surat=$row[id_surat]'><button type=\"button\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-edit\"></i> Edit</button></a>";
						// echo "<a href='delete.php?id_surat=$row[id_surat]'><button type=\"button\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Hapus</button></a></td></tr>";

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