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
	<h3 class="page-title"><i class="fa fa-envelope"></i>  Update Data</h3>

<a class="btn" href="mutasi_datang.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$NIK=mysql_real_escape_string($_GET['id']);
$result=mysql_query("select * from mutasi_masuk where NIK='$NIK'")or die(mysql_error());
$d = mysql_fetch_assoc($result);
?>					
	<form action="update-mutasi-masuk.php" method="post">
		<h2><label>Data Pribadi</label></h2>

  	<div class="form-group">
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td>
      <input name="NIK" type="text" class="form-control" name="NIK" value="<?php echo $d['NIK'] ?>">
  </td>
</div>
  	<div class="form-group">
    <th>Nama </th>
    <td>:</td>
    <td>
      <input name="Nama" type="text" class="form-control" name="Nama" value="<?php echo $d['Nama'] ?>"/>
    </td>
</td>
  </div>
 
  	<div class="form-group">
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><input name="Tempat_Lahir" type="text" class="form-control" value="<?php echo $d['Tempat_Lahir'] ?>" /></td>
  </div>
<div class="form-group">
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                <div class="input-group">
                  <span class="input-group-addon">
                    <span class="fa fa-table"></span>
                  </span>  
                  <input type="date" class="form-control datepicker input-md" name="Tanggal_Lahir" size="20" value="<?php echo $d['Tanggal_Lahir'] ?>"/>
                </div>
                 <!-- <input type="text" class="form-control datepicker" name="tanggal_lahir_warga" required> -->
                </td>
              </tr>
            <tr>
          </div>
  	<div class="form-group">
		            <label>Jenis Kelamin</label>
		              <div class="radio">
		                <label><input name="jenis_kelamin" type="radio" id="optionsRadios1" value="L">Laki-laki</label>
		                <label><input name="jenis_kelamin" type="radio" id="optionsRadios1" value="P">Perempuan</label>
		              </div>
  

<td>
</td>
<h2><label>Data Daerah Tujuan</label></h2>

  	<div class="form-group">
    <th width="20%">Padukuhan</th>
    <td width="1%">:</td>
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
    <th>RT</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="RT" required>
        <option value="<?php echo $d['RT'] ?>" selected><?php echo $d['RT'] ?></option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
      <!--
      <input type="text" class="form-control" name="rt_warga" value="<?php echo $_SESSION['user']['rt_user'] ?>" readonly></td>
    -->
  </td>
  	<div class="form-group">
    <th>RW</th>
    <td>:</td>
    <td>
     <select class="form-control selectpicker" name="RW" required>
        <option value="<?php echo $d['RW'] ?>" selected><?php echo $d['RW'] ?></option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
      </select>
      <!--<input type="text" class="form-control" name="rw_warga" value="<?php echo $_SESSION['user']['rw_user'] ?>" readonly></td>-->
  </td>
</div>

<h2><label>Data Kepindahan</label></h2>

  	<div class="form-group">
    <th width="20%">Alamat Asal</th>
    <td width="1%">:</td>
    <td><textarea placeholder="Alamat Asal" class="form-control" name="alamat_asal" value="<?php echo $d['alamat_asal'] ?>"></textarea></td>
  </div>
 <div class="form-group">
            <tr>
                <th>Tanggal Pindah</th>
                <td>:</td>
                <td>
                <div class="input-group">
                  <span class="input-group-addon">
                    <span class="fa fa-table"></span>
                  </span>  
                  <input type="date" class="form-control datepicker input-md" name="tanggal_mutasi" size="20" value="<?php echo $d['tanggal_mutasi'] ?>"/>
                </div>
                 <!-- <input type="text" class="form-control datepicker" name="tanggal_lahir_warga" required> -->
                </td>
              </tr>
            <tr>
          </div>
  	<div class="form-group">
    <th>Alasan Pindah</th>
    <td>:</td>
    <td>
     <select class="form-control selectpicker" name="alasan_pindah" required>
        <option value="<?php echo $d['alasan_pindah'] ?>" selected><?php echo $d['alasan_pindah'] ?></option>
        <option value="Pekerjaan">Pekerjaan</option>
        <option value="Pendidikan">Pendidikan</option>
        <option value="Keamanan">Keamanan</option>
        <option value="Kesehatan">Kesehatan</option>
        <option value="Perumahan">Perumahan</option>
        <option value="Keluarga">Keluarga</option>
      </select>
    </td>
  </div>
  	<div class="form-group">
    <th>Jenis Kepindahan</th> 
    <td>:</td>
    <td>
     <select class="form-control selectpicker" name="jenis_kepindahan" required>
        <option value="<?php echo $d['jenis_kepindahan'] ?>" selected><?php echo $d['jenis_kepindahan'] ?></option>
        <option value="Kep.Keluarga">Kep.Keluarga</option>
        <option value="Kep.Keluarga dan Seluruh Anggota">Kep.Keluarga dan Seluruh Angota</option>
        <option value="Kep.Keluarga dan Seluruh Anggota Keluarga">Kep.Keluarga dan Seluruh Anggota Keluarga</option>
        <option value="Anggota Keluarga" default>Anggota Keluarga</option>

      </select>
    </td>
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
	</form>

	
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