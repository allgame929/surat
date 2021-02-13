<!doctype html>
<html lang="en">
<head>
    <?php
    session_start();
    require 'cek.php';
    require 'config.php';
    require '../sections/header.php';
    ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
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
  <h3 class="page-title"><i class="fa fa-user"></i>  Data Kematian</h3>
  <div class="panel panel-headline demo-icons">
    <div class="panel-heading">


    </div>
    <div class="panel-body">
    <button style="margin-bottom:15px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Data Kematian</button>
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
      <th>Tanggal Meninggal</th>
      <th>Penyebab</th>
      <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
      <?php
        include "config.php";

           $sql = "SELECT * FROM kematian";
            $result = mysql_query($sql);

            if (mysql_num_rows($result) > 0){
              while($row = mysql_fetch_assoc($result)){

                echo "<tr> "; 
                echo "<td>$row[NIK]</td>";
                echo "<td>$row[nama]</td>";
                echo "<td>$row[tanggal_kematian]</td>";
                echo "<td>$row[penyebab_kematian]</td>";
                echo "<td><a href='detail_kematian.php?id=$row[NIK]'><button type=\"button\" class=\"btn btn-info btn-xs\"><i class=\"glyphicon glyphicon-sunglasses\"></i> Detail</button></a>";
                echo "<a href='del_kematian.php?id=$row[NIK]'><button type=\"button\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Hapus</button></a></td></tr>";




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
  <label class="col-md-0 control-label" for="#"><h4>Data Kematian Penduduk</h4></label>
  <legend></legend>
   <div class="modal-body">
        <form action="tmb-data_kematian.php" method="post">
        <div class="form-group">
  
   
       <label class="col-md-3 control-label" for="NIK">Pencarian Data Penduduk</label> 
       <div class="col-md-9">
       <span class="help-block">
       

        <select name="NIK" class="form-control selectpicker" data-live-search="true">
          <option value="" selected disabled>- Cari -</option>
         
         <?php 

          $conn=mysql_connect("localhost", "root", "");

          $np = mysql_query("SELECT * FROM warga");

              // $data_warga = array();
              
          ?>

         <?php while ($row=mysql_fetch_row($np)) : ?>
         
          <option value="<?php echo $row['0'] ?>">  
            <?= $row['0'];  ?> | <?= $row['3'];  ?>
          </option>
         <?php endwhile; ?>
        </select>
           
              
     
       <!--<input type="text" class="form-control" name="no_nama_kk" id="no_nama_kk" size="50" placeholder="No Kepala Keluarga / Nama (min 2 karakter)"  />-->

      </span>
      <legend><br></legend>
       </div>
    </div>
    
 
 <div class="form-group">
            <tr>
                <label>Tanggal Kematian</label>
                <td>:</td>
                <td>
                <div class="input-group">
                  <span class="input-group-addon">
                    <span class="fa fa-table"></span>
                  </span>  
                  <input type="date" class="form-control datepicker input-md" name="tanggal_meninggal" size="20"/>
                </div>
                 <!-- <input type="text" class="form-control datepicker" name="tanggal_lahir_warga" required> -->
                </td>
              </tr>
            <tr>
          </div>

    <div class="form-group">
            <label>Penyebab Kematian</label>
            <input name="penyebab_kematian" type="text" class="form-control" placeholder="Penyebab Kematian...">
          </div>

    <div class="form-group">
            <label>Tempat Kematian</label>
            <input name="tempat_kematian" type="text" class="form-control" placeholder="Tempat Kematian...">
          </div>


  <legend>&nbsp </legend> 
  <label class="col-md-0 control-label" for="="><h4>Data Pelapor Kematian</h4></label>
  <legend></legend>

  <div class="form-group">
            <label>Nama Pelapor</label>
            <input name="nama_pelapor" type="text" class="form-control" placeholder="Nama Pelapor...">
          </div>

  <div class="form-group">
            <label>Hubungan Pelapor</label>
            <input name="hubungan_pelapor" type="text" class="form-control" placeholder="Hubungan Pelapor...">
          </div>


 <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
      </form>
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

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>