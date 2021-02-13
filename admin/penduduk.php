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
	<h3 class="page-title"><i class="fa fa-user"></i>  Penambahan Data Penduduk</h3>
	<div class="panel panel-headline demo-icons">
		<div class="panel-heading">


		</div>
		<div class="panel-body">
		<button style="margin-bottom:15px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Data Penduduk Baru</button>
		<br/>
		<br/>
		<br/>

		<div class="clearfix"></div>
		

		<div class="x_content">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

		<thead>
		<tr>
			<th>NIK</th>
			<th>Nama</th>
			<th>Padukuhan</th>
			<th>RT</th>
			<th>RW</th>
			<th>Nama Ayah</th>
			<th>Nama Ibu</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<tbody>
			<?php
				include "config.php";

        		$sql = "SELECT * FROM warga";
       			$result = mysql_query($sql);

       			if (mysql_num_rows($result) > 0){
       				while($row = mysql_fetch_assoc($result)){

       					echo "<tr> ";	
       					echo "<td>$row[NIK]</td>";
       					echo "<td>$row[Nama]</td>";
						echo "<td>$row[padukuhan]</td>";
						echo "<td>$row[RT]</td>";
						echo "<td>$row[RW]</td>";
						echo "<td>$row[Nama_Ayah]</td>";
						echo "<td>$row[Nama_Ibu]</td>";
						echo "<td>$row[Kawin]</td>";
						echo "<td><a href='detail-warga.php?id=$row[NIK]'><button type=\"button\" class=\"btn btn-info btn-xs\"><i class=\"glyphicon glyphicon-sunglasses\"></i> Detail</button></a>";
						echo "<a href='edit-warga.php?id=$row[NIK]'><button type=\"button\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-edit\"></i> Edit</button></a>";
						echo "<a href='del-warga.php?id=$row[NIK]'><button type=\"button\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Hapus</button></a></td></tr>";


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
				<h4 class="modal-title">Tambah Penduduk</h4>
			</div>
			<div class="modal-body">
				<form action="tmb-data_penduduk.php" method="post">
				<div class="form-group">
						<label>NIK</label>
						<input name="NIK" type="text" class="form-control" placeholder="NIK ..">
					</div>
					<div class="form-group">
						<label>Nomor Kartu Keluarga</label>
						<input name="No_KK" type="text" class="form-control" placeholder="Nomor Kartu Keluarga ..">
					</div>
					<div class="form-group">
						<label>Nomor RTS</label>
						<input name="No_RTS" type="text" class="form-control" placeholder="Nomor RTS ..">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input name="Nama" type="text" class="form-control" placeholder="Nama ..">
					</div>
					<div class="form-group">
		            <label>Jenis Kelamin</label>
		              <div class="radio">
		                <label><input name="jk" type="radio" id="optionsRadios1" value="L">Laki-laki</label>
		                <label><input name="jk" type="radio" id="optionsRadios1" value="P">Perempuan</label>
		              </div>
		          </div>
					<div class="form-group">
					       <label class="col-md-3 control-label" for="padukuhan">Padukuhan </label>
					       <div class="col-md-9">
					        <span class="help-block">
					       <select type="text" class="form-control input-md" name="padukuhan" id="padukuhan">
					          <option value="Pilih">--Pilih--</option>
					         	<option value="KANIGORO">KANIGORO</option>
								<option value="KARANGLOR I">KARANGLOR I</option>
								<option value="KARANGLOR II">KARANGLOR II</option>
								<option value="KAYU BIMO">KAYU BIMO</option>
								<option value="KELOR KIDUL">KELOR KIDUL</option>
								<option value="KELOR LOR">KELOR LOR</option>
								<option value="KEMADANG KULON">KEMADANG KULON</option>
								<option value="NGASEM">NGASEM</option>
								<option value="NGELO">NGELO</option>
								<option value="NGEPUNG">NGEPUNG</option>
								<option value="NGELAOS">NGELAOS</option>
								<option value="PUCUNG">PUCUNG</option>
								<option value="REJOSARI">REJOSARI</option>
								<option value="SUMURAN">SUMURAN</option>
								<option value="SURU">SURU</option>
								<option value="TENGGANG">TENGGANG</option>
								<option value="WATU BELAH">WATU BELAH</option>
					        
					        </select>
					      </span>
					      <?php # echo form_error('lokasi_lahir', '<p class="field_error">','</p>')?>
					    
					    </div>  
					</div>
					<div class="form-group">
						<label>RT</label>
						<input name="RT" type="text" class="form-control" placeholder="RT ..">
					</div>
					<div class="form-group">
						<label>RW</label>
						<input name="RW" type="text" class="form-control" placeholder="RW ..">
					</div>
					<div class="form-group">
				       <label class="col-md-3 control-label" for="lokasi_lahir">Pendidikan dalam KK </label>
						       <div class="col-md-9">
						        <span class="help-block">
						       <select type="text" class="form-control input-md" name="Pendidikan_dalam_KK" id="Pendidikan_dalam_KK">
						          <option value="Pilih">--Pilih--</option>
						          <option value="Tidak/ Belum Sekolah">Tidak/ Belum Sekolah</option>
						          <option value="SD/ Sederajat"> SD/ Sederajat</option>
						          <option value="SLTP/ Sederajat"> SLTP/ Sederajat</option>
						          <option value="DIPLOMA I / II"> DIPLOMA I / II</option>
						          <option value="AKADEMI/ DIPLOMA III/S. MUDA"> AKADEMI/ DIPLOMA III/S. MUDA</option>			       
						          <option value="STRATA II"> STRATA II</option>
						          <option value="STRATA III"> STRATA III</option>
						        </select>
						      </span>
						      <?php # echo form_error('lokasi_lahir', '<p class="field_error">','</p>')?>
						    
						    </div>  
					</div>
					<div class="form-group">
				       <label class="col-md-3 control-label" for="lokasi_lahir">Pendidikan Sedang Ditempuh </label>
						       <div class="col-md-9">
						        <span class="help-block">
						       <select type="text" class="form-control input-md" name="Pendidikan_sedang_ditempuh" id="Pendidikan_sedang_ditempuh">
						          <option value="Pilih">--Pilih--</option>
						          <option value="Tidak/ Belum Sekolah">Tidak/ Belum Sekolah</option>
						          <option value="SD/ Sederajat"> SD/ Sederajat</option>
						          <option value="SLTP/ Sederajat"> SLTP/ Sederajat</option>
						          <option value="DIPLOMA I / II"> DIPLOMA I / II</option>
						          <option value="AKADEMI/ DIPLOMA III/S. MUDA"> AKADEMI/ DIPLOMA III/S. MUDA</option>			       
						          <option value="STRATA II"> STRATA II</option>
						          <option value="STRATA III"> STRATA III</option>
						        </select>
						      </span>
						      <?php # echo form_error('lokasi_lahir', '<p class="field_error">','</p>')?>
						    
						    </div>  
					</div>
					<td>:</td>
					<div class="form-group">
						<label>Pekerjaan</label>
						<input name="Pekerjaan" type="text" class="form-control" placeholder="Pekerjaan ..">
					</div>
					<div class="form-group">
						<tr>
						    <label>Tanggal Lahir</label>
						    <td>
						    <div class="input-group">
						      <span class="input-group-addon">
						        <span class="fa fa-table"></span>
						      </span>  
						      <input type="date" class="form-control datepicker input-md" name="Tanggal_Lahir" size="20"/>
						    </div>
						     <!-- <input type="text" class="form-control datepicker" name="tanggal_lahir_warga" required> -->
						    </td>
						  </tr>
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input name="Tempat_Lahir" type="text" class="form-control" placeholder="Tempat Lahir ..">
					</div>
					<div class="form-group">
						<label>Umur</label>
						<input name="Umur" type="text" class="form-control" placeholder="Umur ..">
					</div>
					<div class="form-group">
					       <label class="col-md-3 control-label" for="Kawin">Status Perkawinan </label>
					       <div class="col-md-9">
					        <span class="help-block">
					       <select type="text" class="form-control input-md" name="Kawin" id="Kawin">
					       		<option value="Pilih">--Pilih--</option>
					            <option value="Kawin">Kawin</option>
								<option value="Belum Kawin">Belum Kawin</option>
								<option value="Cerai Mati">Cerai Mati</option>
					        </select>
					      </span>
					      <?php # echo form_error('lokasi_lahir', '<p class="field_error">','</p>')?>
					    
					    </div>  
					</div>
					<div class="form-group">
				       <label class="col-md-3 control-label" for="SHDK">Status Hubungan Dalam Keluarga </label>
						       <div class="col-md-9">
						        <span class="help-block">
						       <select type="text" class="form-control input-md" name="SHDK" id="SHDK">
						          <option value="Pilih">--Pilih--</option>
						          <option value="Kepala Keluarga">Kepala Keluarga</option>
						          <option value="Suami"> Suami</option>
						          <option value="Istri"> Istri</option>
						          <option value="Anak"> Anak</option>
						          <option value="Menantu"> Menantu</option>
						          <option value="Cucu"> Cucu</option>
						          <option value="Orang Tua"> Orang Tua</option>
						          <option value="Mertua"> Mertua</option>
						          <option value="Famili Lain"> Famili Lain</option>
						        </select>
						      </span>
						      <?php # echo form_error('lokasi_lahir', '<p class="field_error">','</p>')?>
						    
						    </div>  
					</div>
					<div class="form-group">
						<label>Golongan Darah</label>
							<div class="radio">
								<label><input name="Gol_Darah" type="radio" id="optionsRadios1" value="A">A</label>
								<label><input name="Gol_Darah" type="radio" id="optionsRadios1" value="B">B</label>
								<label><input name="Gol_Darah" type="radio" id="optionsRadios1" value="AB">AB</label>
								<label><input name="Gol_Darah" type="radio" id="optionsRadios2" value="O">O</label>
							</div>
					</div>
					<div class="form-group">
						<label>Nama Ayah</label>
						<input name="Nama_Ayah" type="text" class="form-control" placeholder="Nama Ayah ..">
					</div>
					<div class="form-group">
						<label>Nama Ibu</label>
						<input name="Nama_Ibu" type="text" class="form-control" placeholder="Nama Ibu ..">
					</div>
					<div class="form-group">
					       <label class="col-md-3 control-label" for="Kawin">Status Tinggal </label>
					       <div class="col-md-9">
					        <span class="help-block">
					       <select type="text" class="form-control input-md" name="Status" id="Status">
					       		<option value="Pilih">--Pilih--</option>
					          	<option value="Tetap">Tetap</option>
						        <option value="Meninggal">Meninggal</option>
						        <option value="Pindah Datang">Pindah Datang</option>
						        <option value="Pindah Keluar">Pindah Keluar</option>
					        </select>
					      </span>
					      <?php # echo form_error('lokasi_lahir', '<p class="field_error">','</p>')?>
					    
					    </div>  
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