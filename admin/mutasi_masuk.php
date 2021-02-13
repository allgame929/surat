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
          <li><a href="admin.php" class=""><i class="fa fa-user"></i> <span>Data Penduduk</span></a></li>

        <li>
            <a href="#subPages4" data-toggle="collapse" class="collapsed"><i class="fa fa-exchange fa-fw"></i> <span>Data Mutasi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="subPages4" class="collapse ">
              <ul class="nav">
                          <li><a href="mutasi_datang.php" class=""><i class="fa fa-long-arrow-right fa-fw"></i> <span>Pindah Datang</span></a></li>
                          <li><a href="Pindah_Keluar.php" class=""><i class="fa fa-long-arrow-left fa-fw"></i> <span>Pindah Keluar</span></a></li>
              </ul>
            </div>
          </li>
        <li>
            <a href="#subPages5" data-toggle="collapse" class="collapsed"><i class="fa fa-newspaper-o fa-fw"></i> <span>Data Peristiwa</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="subPages5" class="collapse ">
              <ul class="nav">
                          <li><a href="Kelahiran.php" class=""><i class="fa fa-venus-mars fa-fw"></i> <span>Kelahiran</span></a></li>
                          <li><a href="Kematian.php" class=""><i class="fa fa-ambulance fa-fw"></i> <span>Kematian</span></a></li>
              </ul>
            </div>
          </li>

        



              <li><a href="pengaturan.php" class=""><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>

              <li><a href="javascript:;" class="" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i> <span>Keluar</span></li></a>
  </ul>       </nav>
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
                echo "<a href='detail-mutasi-masuk.php?id=$row[NIK]'><button type=\"button\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Hapus</button></a></td></tr>";



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
        <h4 class="modal-title">Tambah Mutasi Masuk</h4>
      </div>
      <div class="modal-body">
        <form action="tmb-mutasi_masuk.php" method="post">
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
          <div class="form-group">
            <label>Padukuhan</label>
            <input name="padukuhan" type="text" class="form-control" placeholder="Padukuhan ..">
          <div class="form-group">
            <label>RT</label>
            <input name="RT" type="text" class="form-control" placeholder="RT ..">
          <div class="form-group">
            <label>RW</label>
            <input name="RW" type="text" class="form-control" placeholder="RW ..">
          <div class="form-group">
            <label>Pendidikan Terakhir</label>
            <input name="Pendidikan_dalam_KK" type="text" class="form-control" placeholder="Pendidikan Terakhir..">
          <div class="form-group">
            <label>Pendidikan Saat Ini</label>
            <input name="Pendidikan_sedang_ditempuh" type="text" class="form-control" placeholder="Pendidikan Saat Ini..">
          <div class="form-group">
            <label>Pekerjaan</label>
            <input name="Pekerjaan" type="text" class="form-control" placeholder="Pekerjaan ..">
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
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input name="Tempat_Lahir" type="text" class="form-control" placeholder="Tempat Lahir ..">
          </div>
          <div class="form-group">
            <label>Umur</label>
            <input name="Umur" type="text" class="form-control" placeholder="Umur ..">
          </div>
          <div class="form-group">
            <label>Kawin</label>
            <input name="Kawin" type="text" class="form-control" placeholder="Kawin ..">
          </div>
          <div class="form-group">
            <label>SHDK</label>
            <input name="SHDK" type="text" class="form-control" placeholder="SHDK ..">
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
            <label>Status</label>
            <input name="Status" type="text" class="form-control" placeholder="Status ..">
             <div class="form-group">
            <label>Jenis Kepindahan</label>
            <input name="jenis_kepindahan" type="text" class="form-control" placeholder="Status ..">
             <div class="form-group">
            <div class="form-group">
            <tr>
                <th>Tanggal Mutasi</th>
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

          </div>
          </div>  
          </div>  
          </div>
          </div>
          </div>  
          </div>
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