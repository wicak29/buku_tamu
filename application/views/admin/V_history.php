<html>
	<head>
		<!-- Standard Meta -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<!-- <meta name="viewport" content="width=device-width, initial-state=1.0, maximum-scale=1.0"> -->

	    <meta name="description" content="Developed By RnD Lab. @JK - Informatics ITS">
	    <meta name="author" content="RnD @JK">
	    <meta name="keywords" content="Buku Tamu, Ganteng, Keren, Aplikasi, Panutan">
	    <title>
	    	<?php
	    		echo isset($page_title) ? $page_title.' | ':'';
	    		echo $this->config->item('site_name');
	    	?>
	    </title>

	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/semantic.min.css">
	    <script src="<?php echo base_url('assets'); ?>/jquery-2.1.4.min.js"></script>
		<script src="<?php echo base_url('assets'); ?>/semantic.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/components/style.css">
		<script src="<?php echo base_url('assets'); ?>/sweetalert.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/sweetalert.css">
		<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">

	</head>
  	<body>
  		<div id="particles-js"></div>
		<div class="ui middle aligned center aligned grid">
  			<div class="double column-home">
  				<ul style="text-align:right;">
  					<a href="<?php echo base_url()?>index.php/C_admin"><i class="edit icon"></i> Masuk Lab</a>
  					<a href="<?php echo base_url()?>index.php/C_admin/history"><i class="history icon"></i> History</a>
	                <a href="<?php echo base_url()?>index.php/C_auth/logout"><i class="sign out icon"></i> Logout</a>
	            </ul>
  				<h2 class="ui inverted header">
  					<div class="content">PENGUNJUNG LAB. </div>
  				</h2>
  				<table class="ui celled padded table" id="example" cellspacing="0" width="100%">
  					<thead style="text-align:center;">
  						<tr>
  							<th>No</th>
  							<th>Pengunjung</th>
  							<th>Instansi</th>
  							<th>Tanggal</th>
  							<th>Waktu</th>
  							<th>Keperluan</th>
  						</tr>
  					</thead>
  					<tbody>
  					<?php 
  						$i=1;
  						foreach ($history as $r)
  						{
  							echo '<tr>';
  							echo '<td>'.$i.'</td>';
  							echo '<td>'. $r['nama_pengunjung'].'</td>';
  							echo '<td>'. $r['nama_instansi'].'</td>';
  							echo '<td>'. $r['tanggal'].'</td>';
  							echo '<td>'. $r['jam'].'</td>';
  							echo '<td>'. $r['keperluan'].'</td>';
  							echo '</tr>';
  							$i = $i + 1;
  						}
  					?>
  					</tbody>
  				</table>
  			</div>
  		</div>
  	</body>
  	<footer>
  	</footer>

  	<!--CACING
	<script type="text/javascript" src="<?php echo base_url('assets/background');?>/libs/sketch.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/background');?>/src/glassyWorms.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#bg').glassyWorms({
				colors: ['#fff', '#00ccff'], 
				useStyles: true
			});
		});
	</script>
	END CACING-->

	<!-- PARTICLE-->
	<script src="<?php echo base_url('assets/particles');?>/particles.js"></script>
	<script src="<?php echo base_url('assets/particles');?>/demo/js/app.js"></script>
	<!--END PARTICLE-->
	<script>
			$(document).ready(function() {
			    $('#example').DataTable( {
			        "pagingType": "full_numbers"
			    } );
			} );
		</script>
</html>