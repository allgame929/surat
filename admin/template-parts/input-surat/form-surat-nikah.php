<script type="text/html" id="form-surat-nikah">
	<h2>Data Calon Suami</h2>
	<div class="form-group">
		<br>
		<select onchange="selectSuami()" id="surat-nikah-suami" name='surat-nikah-suami'>
			<option disabled selected>Data Calon Suami</option>
			<option value='belum terdaftar'>Isi Data Calon Suami</option>
		</select>

		<div id="form-surat-suami"></div>
	</div>

	<h2>Data Calon Istri</h2>
	<div class="form-group">
		<br>
		<select onchange="selectIstri()" id="surat-nikah-istri" name='surat-nikah-istri'>
			<option disabled selected>Data Calon Istri</option>
			<option value='belum terdaftar'>Isi Data Calon Istri</option>
		</select>

		<div id="form-surat-istri"></div>
	</div>

	
	<div class="form-group" name="tanggal">
			<label>Tanggal :</label>
			<input name="tanggal" type="date" class="form-control" placeholder="Tanggal Nikah">
	</div>
</script>

<?php
include 'suamitidakterdaftar.php';
include 'istritidakterdaftar.php';
?>