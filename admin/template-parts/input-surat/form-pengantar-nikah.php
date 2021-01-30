<?php

include 'config.php';
$conn=mysql_connect("localhost", "root", "");

$np = mysql_query("SELECT * FROM pejabat");


//$result = mysql_query("SELECT * FROM pejabat");

?>

<script type="text/html" id="form-pengantar-nikah">
	<div class="form-group">
		<label>NIK Pemohon:</label>
		<input name="nikPemohon" type="number" class="form-control" placeholder="NIK Pemohon..">
	</div>
	<div class="form-group">
		<label>NIK Ayah:</label>
		<input name="nikAyah" type="number" class="form-control" placeholder="NIK Ayah..">
	</div>
	<div class="form-group">
		<label>NIK Ibu:</label>
		<input name="nikIbu" type="number" class="form-control" placeholder="NIK Ibu..">
	</div>
	
	<div class="form-group">
		<label>Tanggal :</label>
		<input name="tanggal" type="date" class="form-control" placeholder="Tanggal Diterima">
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