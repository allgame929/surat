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
	<h2 class="page-title"><i class="fa fa-envelope"></i>  Update Data</h2>

<a class="btn" href="penduduk.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$NIK=mysql_real_escape_string($_GET['id']);
$result=mysql_query("select * from warga where NIK='$NIK'")or die(mysql_error());
$d = mysql_fetch_assoc($result);
?>					
	<form action="update-penduduk.php" method="post">
		
 <div class="form-group">
    <label width="20%">NIK</label>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="NIK" value="<?php echo $d['NIK'] ?>"></td>
  </div>
 <div class="form-group">
    <label>No Kartu Keluarga</label>
    <td>:</td>
    <td><input type="text" class="form-control" name="No_KK" value="<?php echo $d['No_KK'] ?>"></td>
  </div>
  	<div class="form-group">
    <label>No RTS</label>
    <td>:</td>
    <td><input type="text" class="form-control" name="No_RTS" value="<?php echo $d['No_RTS'] ?>"></td>
</div>
<div class="form-group">
    <label>Nama</label>
    <td>:</td>
    <td><input type="text" class="form-control" name="Nama" value="<?php echo $d['Nama'] ?>"></td>
</div>
<div class="form-group">
						<tr>
						    <label>Tanggal Lahir</label>
						    <td>
						    <div class="input-group">
						      <span class="input-group-addon">
						        <span class="fa fa-table"></span>
						      </span>  
						      <input type="date" class="form-control datepicker input-md" name="Tanggal_Lahir" size="20" value="<?php echo $d['Tanggal_Lahir'] ?>" />
						    </div>
						     <!-- <input type="text" class="form-control datepicker" name="tanggal_lahir_warga" required> -->
						    </td>
						  </tr>
					</div>
 <div class="form-group">
		            <label>Jenis Kelamin</label>
		              <div class="radio">
		                <label><input name="jk" type="radio" id="optionsRadios1" value="L">Laki-laki</label>
		                <label><input name="jk" type="radio" id="optionsRadios1" value="P">Perempuan</label>
		              </div>
  	
	<div class="form-group">
    <label>Padukuhan</label>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="padukuhan" required>
        <option value="<?php echo $d['padukuhan'] ?>" selected><?php echo $d['padukuhan'] ?></option>
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
    </td>
</div>
 	<div class="form-group">
    <label>RT</label>
    <td>:</td>
    <td><input type="text" class="form-control" name="RT" value="<?php echo $d['RT'] ?>"></td>
 </div>
	<div class="form-group">
    <label>RW</label>
    <td>:</td>
    <td><input type="text" class="form-control" name="RW" value="<?php echo $d['RW'] ?>"></td>
</div>
	<div class="form-group">
    <label>Pendidikan Dalam KK</label>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="Pendidikan_dalam_KK" required>
        <option value="<?php echo $d['Pendidikan_dalam_KK'] ?>" selected><?php echo $d['Pendidikan_dalam_KK'] ?></option>
	        <option value="Tidak/ Belum Sekolah">Tidak/ Belum Sekolah</option>
			<option value="SD/ Sederajat"> SD/ Sederajat</option>
			<option value="SLTP/ Sederajat"> SLTP/ Sederajat</option>
			<option value="DIPLOMA I / II"> DIPLOMA I / II</option>
			<option value="AKADEMI/ DIPLOMA III/S. MUDA"> AKADEMI/ DIPLOMA III/S. MUDA</option>			       
			<option value="STRATA II"> STRATA II</option>
			<option value="ISTRATA III"> STRATA III</option>
      </select>
    </td>
</div>
	<div class="form-group">
    <label>Pendidikan Sedang Ditempuh</label>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="Pendidikan_sedang_ditempuh" required>
        <option value="<?php echo $d['Pendidikan_sedang_ditempuh'] ?>" selected><?php echo $d['Pendidikan_sedang_ditempuh'] ?></option>
       		<option value="Tidak/ Belum Sekolah">Tidak/ Belum Sekolah</option>
			<option value="SD/ Sederajat"> SD/ Sederajat</option>
			<option value="SLTP/ Sederajat"> SLTP/ Sederajat</option>
			<option value="DIPLOMA I / II"> DIPLOMA I / II</option>
			<option value="AKADEMI/ DIPLOMA III/S. MUDA"> AKADEMI/ DIPLOMA III/S. MUDA</option>			       
			<option value="STRATA II"> STRATA II</option>
			<option value="ISTRATA III"> STRATA III</option>
      </select>
    </td>
</div>
	<div class="form-group">
    <label>Pekerjaan</label>
    <td>:</td>
    <td><input type="text" class="form-control" name="Pekerjaan" value="<?php echo $d['Pekerjaan'] ?>"></td>
</div>
	<div class="form-group">
    <label>Tempat Lahir</label>
    <td>:</td>
    <td><input type="text" class="form-control" name="Tempat_Lahir" value="<?php echo $d['Tempat_Lahir'] ?>"></td>
</div>
	<div class="form-group">
    <label>Umur</label>
    <td>:</td>
    <td><input type="text" class="form-control" name="Umur" value="<?php echo $d['Umur'] ?>"></td>
</div>
	<div class="form-group">
    <label>Status Perkawinan</label>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="Kawin" required>
        <option value="<?php echo $d['Kawin'] ?>" selected><?php echo $d['Kawin'] ?></option>
        <option value="Kawin">Kawin</option>
		<option value="Belum Kawin">Belum Kawin</option>
		<option value="Cerai Mati">Cerai Mati</option>
      </select>
    </td>
</div>
<div class="form-group">
    <label>Status Hubungan Dalam Keluarga</label>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="SHDK" required>
        <option value="<?php echo $d['SHDK'] ?>" selected><?php echo $d['SHDK'] ?></option>
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
    </td>
</div>
	<div class="form-group">
    <label>Golongan Darah</label>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="Gol_Darah" required>
        <option value="<?php echo $d['Gol_Darah'] ?>" selected><?php echo $d['Gol_Darah'] ?></option>
        <option value="A">A</option>
		<option value="B">B</option>
		<option value="0">0</option>
		<option value="AB">AB</option>
      </select>
    </td>
</div>
	<div class="form-group">
    <label>Nama Ayah</label>
    <td>:</td>
    <td><input type="text" class="form-control" name="Nama_Ayah" value="<?php echo $d['Nama_Ayah'] ?>"></td>
</div>
	<div class="form-group">
    <label>Nama_Ibu</label>
    <td>:</td>
    <td><input type="text" class="form-control" name="Nama_Ibu" value="<?php echo $d['Nama_Ibu'] ?>"></td>
  </div>
	<div class="form-group">
    <label>Status Tinggal</label>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="Status" required>
        <option value="<?php echo $d['Status'] ?>" selected><?php echo $d['Status'] ?></option>
        <option value="Tetap">Tetap</option>
        <option value="Meninggal">Meninggal</option>
        <option value="Pindah Datang">Pindah Datang</option>
        <option value="Pindah Keluar">Pindah Keluar</option>
      </select>
    </td>
</div>

	</form>
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