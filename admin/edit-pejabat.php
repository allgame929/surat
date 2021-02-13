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

<a class="btn" href="pengaturan.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

        <?php
        include 'config.php';
        $conn=mysql_connect("localhost", "root", "");

        $id = $_GET["id"];

        $result = mysql_query("SELECT * FROM pejabat WHERE id = $id");
        $d=mysql_fetch_assoc($result);
        //var_dump($row);

        if (isset ($_POST["submit"]) ){

            $nama_pejabat = htmlspecialchars($_POST["nama_pejabat"]);
            $jabatan = htmlspecialchars($_POST["jabatan"]);

            $query="UPDATE pejabat SET nama_pejabat = '$nama_pejabat',jabatan = '$jabatan'  WHERE id = $id";
            //$query="UPDATE pejabat SET jabatan = '$jabatan' WHERE id = $id";

            mysql_query($query);

            mysql_affected_rows($conn);

                if (( $_POST) > 0 ) {
                    echo "
                        <script>
                            alert('Data Berhasil Diubah!');
                            document.location.href = 'pengaturan.php';
                        </script>
                    ";
                } else {
                    echo "
                    <script>
                        alert('Data Gagal Diubah!');
                        document.location.href = 'pengaturan.php';
                    </script>
                ";
                }

        }

        ?>
    <form action="" method="post">
        
 <div class="form-group">
    <label width="20%">Nama</label>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nama_pejabat" value="<?php echo $d['nama_pejabat'] ?>"></td>
  </div>
 <div class="form-group">
    <label>Jabatan</label>
    <td>:</td>
    <td><input type="text" class="form-control" name="jabatan" value="<?php echo $d['jabatan'] ?>"></td>
  </div>
  
  <div class="modal-footer">
    <button type="submit" name="submit" class="btn btn-default" data-dismiss="modal">Simpan</button>
    
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


        
        
    

 