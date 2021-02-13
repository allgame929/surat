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
  <h3 class="page-title"><i class="fa fa-user"></i>  Data Kelahiran</h3>
  <div class="panel panel-headline demo-icons">
    <div class="panel-heading">


    </div>
    <div class="panel-body">
    <button style="margin-bottom:15px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Data Kelahiaran</button>
    <br/>
    <br/>
    <br/>

    <div class="clearfix"></div>
    

    <div class="x_content">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

    <thead>
    <tr>
      <th>Nama </th>
      <th>Jenis Kelamin</th>
      <th>Tanggal Lahir</th>
      <th>Nama Ayah</th>
      <th>Nama Ibu</th>
      <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
      <?php
        include "config.php";

            $sql = "SELECT * FROM kelahiran";
            $result = mysql_query($sql);

            if (mysql_num_rows($result) > 0){
              while($row = mysql_fetch_assoc($result)){

                echo "<tr> "; 
                echo "<td>$row[nama]</td>";
                echo "<td>$row[jk]</td>";
                echo "<td>$row[tanggal_lahir]</td>";
                echo "<td>$row[nama_ayah]</td>";
                echo "<td>$row[nama_ibu]</td>";
                echo "<td><a href='detail_kelahiran.php?id=$row[nama]'><button type=\"button\" class=\"btn btn-info btn-xs\"><i class=\"glyphicon glyphicon-sunglasses\"></i> Detail</button></a>";
                echo "<a href='del_kelahiran.php?id=$row[nama]'><button type=\"button\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Hapus</button></a></td></tr>";



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
        <h4 class="modal-title">Tambah Data Kelahiran</h4>
      </div>
      <div class="modal-body">
        <form action="tmb-data_kelahiran.php" method="post">
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" type="text" class="form-control" placeholder="Nama...">
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
                  <input type="date" class="form-control datepicker input-md" name="tanggal_lahir" size="20">
                </div>
                <!-- <input type="text" class="form-control datepicker" name="tanggal_lahir" required> -->
                </td>
              </tr>
            <tr>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
              <div class="radio">
                <label><input name="jk" type="radio" id="optionsRadios1" value="L">Laki-laki</label>
                <label><input name="jk" type="radio" id="optionsRadios1" value="P">Perempuan</label>
              </div>
          </div>
          <div class="form-group">
            <label>Berat Bayi</label>
            <input name="berat_bayi" type="text" class="form-control" placeholder="Berat Bayi ..">
          <div class="form-group">
            <label>Panjang Bayi</label>
            <input name="panjang_bayi" type="text" class="form-control" placeholder="Panjang Bayi ..">
          <div class="form-group">
            <label>Nama Ayah</label>
            <input name="nama_ayah" type="text" class="form-control" placeholder="Nama Ayah ..">
          <div class="form-group">
            <label>Nama Ibu</label>
            <input name="nama_ibu" type="text" class="form-control" placeholder="Nama Ibu ..">
          <div class="form-group">
       <label class="col-md-3 control-label" for="lokasi_lahir">Lokasi Lahir </label>
       <div class="col-md-9">
        <span class="help-block">
       <select type="text" class="form-control input-md" name="lokasi_lahir" id="lokasi_lahir">
          <option value="Tidak Diketahui">--Pilih--</option>
          <option value="Rumah Bersalin">Rumah Bersalin</option>
          <option value="Bukan Rumah Bersalin">Bukan Rumah Bersalin</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </span>
      <?php # echo form_error('lokasi_lahir', '<p class="field_error">','</p>')?>
    
    </div>  
    </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat_Lahir..">
          <div class="form-group">
            <label>Nama Penolong Kelahiran</label>
            <input name="penolong" type="text" class="form-control" placeholder="Nama Penolong Kelahiran ..">
        
    
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