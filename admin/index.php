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
            require './template-parts/sidebar.php';
        ?>

      	<!-- MAIN -->

	

		<div class="main">

			
								
							<!-- Grafik Surat Masuk -->
<?php include('data_index.php') ?>

<div class="row">
      <div class="panel well">
        <div class="row">
            <div class="col-md-12">
                
                    <div class="col-xs-12">
                    <font color="grey"><h4>SELAMAT DATANG DI SISTEM ADMINISTRASI PELAYANAN MASYARAKAT KELURAHAN KEMADANG, TANJUNGSARI,GUNUNGKIDUL</h4></font>
                </div>
                </div>
                <!-- /.col-lg-12 -->
            <!-- /.row -->
        </div>
        </div>
                <div class="col-lg-4 col-md-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-group fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div><h3>Data Penduduk</h3></div>
                                    <div>
                                      <p align="right">Total ada <?php echo $jumlah_warga['total'] ?> data warga. 
                                      </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="penduduk.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

	
	  <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-long-arrow-right fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div><h3>Data Mutasi Masuk</h3></div>
                                    <div><p>Total ada <?php echo $jumlah_mutasi_datang['total'] ?> data mutasi datang</p></div>
                                </div>
                            </div> 
                        </div>
                        <a href="mutasi_datang.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

     <!-- Grafik Surat Keluar -->
	  <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                               <div class="col-xs-3">
                                    <i class="fa fa-long-arrow-left fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div><h3>Data Mutasi Keluar</h3></div>
                                    <div><p>Total ada <?php echo $jumlah_mutasi_keluar['total'] ?> data mutasi keluar</p></div>
                                </div>
                            </div>
                        </div>
                        <a href="mutasi_keluar.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

        <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3 text-right">
                                    <i class="fa fa-venus-mars fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div><h3>Data Kelahiran</h3></div>
                                    <div><p>Total ada <?php echo $jumlah_kelahiran['total'] ?> data kelahiran</p></div>
                                </div>
                            </div>
                        </div>
                        <a href="kelahiran.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>   

                           <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3 text-right">
                                    <i class="fa fa-envelope fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div><h3>Data Pembuatan Surat</h3></div>
                                    <div><p>Total ada <?php echo $jumlah_surat['total'] ?> data pembuatan Surat</p></div>
                                </div>
                            </div>
                        </div>
                       <a href="lihat-surat-masuk.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>    

 

           <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3 text-right">
                                    <i class="fa fa-ambulance fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div><h3>Data Kematian</h3>
                                    </div>
                                    <div>
                                      <p align="right">Total ada <?php echo $jumlah_kematian['total'] ?> data meninggal. 
                                      </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="kematian.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            



					<!-- END OVERVIEW -->

					
						
					</div>


				</div>
			</div>
			<!-- END MAIN CONTENT -->
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