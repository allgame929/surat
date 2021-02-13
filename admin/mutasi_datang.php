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
  <h3 class="page-title"><i class="fa fa-user"></i>  Penambahan Data Mutasi Masuk</h3>
  <div class="panel panel-headline demo-icons">
    <div class="panel-heading">


    </div>
    <div class="panel-body">
    <button style="margin-bottom:15px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Data Mutasi Masuk</button>
    <br/>
    <br/>
    <br/>

    <div class="clearfix"></div>
    

    <div class="x_content">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

    <thead>
    <tr>
      <th>NIK</th>
      <th>Nama Mutasi</th>
      <th>Jenis Kepindahan</th>
      <th>Tanggal Mutasi</th>
      <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
      <?php
        include "config.php";

            $sql = "SELECT * FROM mutasi_masuk";
            $result = mysql_query($sql);

            if (mysql_num_rows($result) > 0){
              while($row = mysql_fetch_assoc($result)){

                echo "<tr> "; 
                echo "<td>$row[NIK]</td>";
                echo "<td>$row[Nama]</td>";
                echo "<td>$row[jenis_kepindahan]</td>";
                echo "<td>$row[tanggal_mutasi]</td>";
                echo "<td><a href='detail-mutasi-masuk.php?id=$row[NIK]'><button type=\"button\" class=\"btn btn-info btn-xs\"><i class=\"glyphicon glyphicon-sunglasses\"></i> Detail</button></a>";
                echo "<a href='edit-mutasi-masuk.php?id=$row[NIK]'><button type=\"button\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-edit\"></i> Edit</button></a>";
                echo "<a href='del-mutasi-masuk.php?id=$row[NIK]'><button type=\"button\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Hapus</button></a></td></tr>";



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
        <h1 class="page-header" align="center">Pindah Masuk</h1>

<form action="tmb-mutasi_masuk.php" method="post">
<h3>Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td>
      <input name="NIK" type="text" class="form-control" placeholder="NIK ">
  </tr>
  <tr>
    <th>Nama </th>
    <td>:</td>
    <td>
      <input name="Nama" type="text" class="form-control" placeholder="Nama ">
    </td>
</td>
  </tr>
 
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><input name="Tempat_Lahir" type="text" class="form-control" placeholder="Tempat Lahir"></td>
  </tr>
<div class="form-group">
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
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
            <tr>
          </div>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
    <div class="form-group">
    <div class="col-md-9">
      <div class="radio">
        <label class="radio"><input type="radio" name="jenis_kelamin" value="L"> Laki - laki</label>
      </div>
      <div class="radio">
        <label class="radio"><input type="radio" name="jenis_kelamin" value="L"> Perempuan</label>
      </div>
    </div>
    </td>
  </tr>
  
</table>

<h3>Data Daerah Tujuan</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Padukuhan</th>
    <td width="1%">:</td>
    <td>
      <select class="form-control selectpicker" name="padukuhan" required>
        <option value="" selected disabled>- Pilih -</option>
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
    </td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="RT" required>
        <option value="" selected disabled>- Pilih -</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
      </select>
      <!--
      <input type="text" class="form-control" name="rt_warga" value="<?php echo $_SESSION['user']['rt_user'] ?>" readonly></td>
    -->
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="RW" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
      </select>
      <!--<input type="text" class="form-control" name="rw_warga" value="<?php echo $_SESSION['user']['rw_user'] ?>" readonly></td>-->
  </tr>
</table>

<h3>Data Kepindahan</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Alamat Asal</th>
    <td width="1%">:</td>
    <td><textarea placeholder="Alamat Asal" class="form-control" name="alamat_asal"></textarea></td>
  </tr>
 <div class="form-group">
            <tr>
                <th>Tanggal Pindah</th>
                <td>:</td>
                <td>
                <div class="input-group">
                  <span class="input-group-addon">
                    <span class="fa fa-table"></span>
                  </span>  
                  <input type="date" class="form-control datepicker input-md" name="tanggal_mutasi" size="20"/>
                </div>
                 <!-- <input type="text" class="form-control datepicker" name="tanggal_lahir_warga" required> -->
                </td>
              </tr>
            <tr>
          </div>
  <tr>
    <th>Alasan Pindah</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="alasan_pindah" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Pekerjaan">Pekerjaan</option>
        <option value="Pendidikan">Pendidikan</option>
        <option value="Keamanan">Keamanan</option>
        <option value="Kesehatan">Kesehatan</option>
        <option value="Perumahan">Perumahan</option>
        <option value="Keluarga">Keluarga</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Jenis Kepindahan</th> 
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="jenis_kepindahan" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Kep.Keluarga">Kep.Keluarga</option>
        <option value="Kep.Keluarga dan Seluruh Anggota">Kep.Keluarga dan Seluruh Angota</option>
        <option value="Kep.Keluarga dan Seluruh Anggota Keluarga">Kep.Keluarga dan Seluruh Anggota Keluarga</option>
        <option value="Anggota Keluarga" default>Anggota Keluarga</option>

      </select>
    </td>
  </tr>
</table>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
      </form>
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