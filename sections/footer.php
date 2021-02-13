<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2020 <a href="https://www.themeineed.com" target="_blank">Rekayasa Sistem Komputer</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->

	<!-- Javascript -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="../assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="../assets/scripts/klorofil-common.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.loadtemplate/1.5.10/jquery.loadTemplate.min.js" integrity="sha512-T1zx+UG2gXu9mr29wvzaKkNUmAOAie40T32ZPIvcRPJgO5br53+Ocqj8gzguUuix7FK+Z3ncRCJMaZcumnPZzg==" crossorigin="anonymous"></script>

		<!-- Datatables -->

	<script type="../assets/dataTables.bootstrap.min.js"></script>
	<script type="../assets/jquery.dataTables.min.js"></script>
	<script type="../assets/jquery-1.12.4.js"></script>

    <script src="../assets/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../assets/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../assets/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../assets/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../assets/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../assets/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../assets/jszip/dist/jszip.min.js"></script>
    <script src="../assets/pdfmake/build/pdfmake.min.js"></script>
    <script src="../assets/pdfmake/build/vfs_fonts.js"></script>

    <script>
    	$(document).ready(function() {
		    $('#example').DataTable();
		});

		function selectSurat() {
			var perihalValue = $('#perihal').val();
			var $formSuratMasuk = $('#form-surat-masuk');

		    if ( perihalValue === 'Rekomendasi BPJS' ) {
		    	$formSuratMasuk.loadTemplate($("#form-bpjs"));
		    } else if ( perihalValue === 'Rekomendasi Jamkesos' ) {
		    	$formSuratMasuk.loadTemplate($("#form-jamkesos"));
		    } else if ( perihalValue === 'Surat Nikah' ) {
		    	$formSuratMasuk.loadTemplate($("#form-calon"));
		    }else if ( perihalValue === 'Pengantar Nikah' ) {
		    	$formSuratMasuk.loadTemplate($("#form-pengantar-nikah"));
		    } else if (perihalValue === 'Persetujuan Nikah') {
		    	$formSuratMasuk.loadTemplate($("#form-surat-nikah"));
		    } else {
		    	$formSuratMasuk.loadTemplate($("#"));
		    }
		}

		function selectSuami() {
			var suratsuamiterdaftar = $('#surat-nikah-suami').val();
			var $formSuami 	= $('#form-surat-suami');

		    if ( suratsuamiterdaftar === 'terdaftar' ) {
		    	$formSuami.loadTemplate($("#form-suami-terdaftar"));
		    } else {
		    	$formSuami.loadTemplate($("#form-suami-tak-terdaftar"));
		    }
		}

		function selectIstri() {
			var suratistriterdaftar = $('#surat-nikah-istri').val();
			var $formIstri = $('#form-surat-istri');

		    if ( suratistriterdaftar === 'terdaftar' ) {
		    	$formIstri.loadTemplate($("#form-istri-terdaftar"));
		    } else {
		    	$formIstri.loadTemplate($("#form-istri-tak-terdaftar"));
		    }
		}

		function selectNikah() {
			var perihalValue = $('#surat-nikah-suami').val();
			var $formSuratMasuk = $('#form-surat-masuk');

		    if ( perihalValue === 'Rekomendasi BPJS' ) {
		    	$formSuratMasuk.loadTemplate($("#form-bpjs"));
		    } else if ( perihalValue === 'Surat Nikah' ) {
		    	$formSuratMasuk.loadTemplate($("#form-calon"));
		    } else {
		    	$formSuratMasuk.html('Ga ada');
		    }
		}
    </script>

<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [
				{
					name: 'series-real',
					data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
				},
				{
					name: 'series-projection',
					data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
				}
			]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [[6384, 6342, 5437, 2764, 3958, 5068, 7654]]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval( function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
</script>

</body>
</html>