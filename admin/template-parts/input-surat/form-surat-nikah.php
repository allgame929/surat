<script type="text/html" id="form-surat-nikah">
	<h2>Data Calon Suami</h2>
	<div class="form-group">
		<label>Data Calon Suami </label><br>
		<select onchange="selectSuami()" id="surat-nikah-suami" name='surat-nikah-suami'>
			<option disabled selected>Data Calon Suami</option>
			<option value='terdaftar'>Terdaftar</option>
			<option value='belum terdaftar'>Belum Terdaftarc</option>
		</select>

		<div id="form-surat-suami"></div>
	</div>

	<h2>Data Calon Istri</h2>
	<div class="form-group">
		<label>Data Calon istri </label><br>
		<select onchange="selectIstri()" id="surat-nikah-istri" name='surat-nikah-istri'>
			<option disabled selected>Data Calon Istri</option>
			<option value='terdaftar'>Terdaftar</option>
			<option value='belum terdaftar'>Belum Terdaftarc</option>
		</select>

		<div id="form-surat-istri"></div>
	</div>
</script>

<?php
include 'suamiterdaftar.php';
include 'suamitidakterdaftar.php';
include 'istriterdaftar.php';
include 'istritidakterdaftar.php';
?>