<?php

include 'config.php';
$conn=mysql_connect("localhost", "root", "");

$np = mysql_query("SELECT * FROM pejabat");


//$result = mysql_query("SELECT * FROM pejabat");

?>

<script type="text/html" id="form-jamkesos">
<form action="surat-rekomendasi-jamkesos.php" method="post"></form>
	<div class="form-group">
		<label>NIK :</label>
		<input name="nomor" type="number" class="form-control" placeholder="NIK ..">
	</div>
	<div class="form-group">
		<label>Tanggal :</label>
		<input name="tanggal" type="date" class="form-control" placeholder="Tanggal Diterima">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin :</label>
		<input name="jenisKelamin" type="text" class="form-control" placeholder="Jenis Kelamin..">
	</div>
	<div class="form-group">
		<label>Agama :</label>
		<input name="agama" type="text" class="form-control" placeholder="Agama..">
	</div>
	<div class="form-group">
		<label>Warga Negara :</label>
		<input name="wargaNegara" type="text" class="form-control" placeholder="Warga Negara..">
	</div>
	<div class="form-group">
		<br>
		<label>Nama Pejabat :</label><br>
		<select onchange="selectNama()" id="namaPejabat" name='namaPejabat'>
				<option disabled selected>-- Pilih Nama Pejabat --</option>
			<?php while ($row=mysql_fetch_row($np)) : ?>
				<option value="<?= $row[1]; ?>"> <?= $row[1]; ?> </option> 
			<?php endwhile; ?>		
		</select>
		<div id="form-nama-pejabat"></div>
	</div>
</script>