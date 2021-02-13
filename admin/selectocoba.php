<!doctype html>
<html lang="en">
  <head>
    <?php
    session_start();
    require 'cek.php';
    require 'config.php';
    require '../sections/header.php';

   ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <center>
    <select class="selectpicker" data-live-search="true">
      <option value="">- A -</option>
      <option value="">- B -</option>
      <option value="">- C -</option>
    </select>
    </center>

    <select class="form-control selectpicker" data-live-search="true">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  </body>
</html>
