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
  		<!--MENU-->
  		<div class="overlay fixed" style="position: fixed; top: 10px; left: 10; z-index: 1;">
	      <div class="ui labeled blue icon vertical menu">
	      	<a href="<?php echo base_url()?>index.php/C_admin" class="item">
	        	<i class="user icon"></i> Home Lab
	        </a>
	        <a href="<?php echo base_url()?>index.php/C_admin/history" class="item active">
	        	<i class="history icon"></i> Riwayat
	        </a>
	        <a href="<?php echo base_url()?>index.php/C_auth/logout" class="item">
	        	<i class="sign out icon"></i> Logout
	        </a>
	      </div>
	    </div>
  		<!--END MENU-->

  		<!-- <div class="ui left demo vertical inverted sidebar labeled icon menu">
		  <a href="<?php echo base_url()?>index.php/C_admin" class="item">
		    <i class="home icon"></i>
		    Home
		  </a>
		  <a href="<?php echo base_url()?>index.php/C_admin/history" class="item active">
		    <i class="history icon"></i>
		    Riwayat
		  </a>
		  <a href="<?php echo base_url()?>index.php/C_auth/logout" class="item">
		    <i class="sign out icon"></i>
		    Logout
		  </a>
		</div> -->

  		<!-- <div id="show-sidebar" class="ui overlay fixed large" style="position: fixed; top: 10px; left: 10; z-index: 1;">
  			<div class="ui inverted  blue large icon">
  				<a href="" class="item">
  					<i class="sidebar icon"></i>
  				</a>
  			</div>
  		</div> -->
	  	<div class="pusher">
	  		<div id="particles-js"></div>
	  		<div class="ui middle aligned center aligned grid">
	  			<div class="double column-history">
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
	  	</div>
  	</body>
  	<footer>
  	</footer>

	<!-- PARTICLE-->
	<script src="<?php echo base_url('assets/particles');?>/particles.js"></script>
	<script src="<?php echo base_url('assets/particles');?>/demo/js/app.js"></script>
	<!--END PARTICLE-->
	<script>
		$('#show-sidebar').click(function() 
		{
	      		// $('#show-sidebar').hide();
	  		$('.ui.labeled.icon.sidebar').sidebar('toggle');
		});  


		$(document).ready(function() {
		    $('#example').DataTable( {
		        "pagingType": "full_numbers"
		    } );
		} );


	//$('#menu-sidebar').sidebar('toggle');
	</script>

</html>