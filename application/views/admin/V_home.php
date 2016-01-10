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
	</head>
  	<body>
  		<div class="ui middle aligned center aligned grid">
  			<div class="column-home">
  				<h2 class="ui inverted header">
  					<div class="content">SELAMAT DATANG DI LAB. </div>
  				</h2>
  				<form name="form-penggunjung" action="<?php echo site_url('C_Pengunjungterdaftar/add');?>" method='POST' class="ui large form">
  					<div class="ui stacked segment">
  						<div class="field">
							<label>Instansi</label>
							<select id="instansi" class="ui dropdown">
								<option value="">Pilih Instansi</option>
								<option value="1">ITS</option>
								<option value="0">Non ITS</option>
							</select>
						</div>
						<!-- NON ITS -->
						<div id="nonits" class="field">
							<label>Nama Instansi</label>
							<div>
								<input type="text" name="v_instansi" placeholder="ex : Universitas Indonesia">
							</div>
						</div>
						<!--END NON ITS-->
						<div id="nrp" class="field">
							<label>NRP</label>
							<div class="ui input">
								<input type="number" name="v_nrp" placeholder="ex : 5113100999">
							</div>
						</div>
						<div id="name" class="field">
							<label>Nama Lengkap</label>
							<div class="ui input">
								<input type="text" name="v_nama" placeholder="ex : Lionel Messi">
							</div>
						</div>
						<div id="ttl" class="field">
							<label>Tahun Lahir</label>
							<div class="ui input">
								<input type="text" name="v_tahun" placeholder="ex : 1995">
							</div>
						</div>
						<div id="kota" class="field">
							<label>Kota Asal</label>
							<div class="ui input">
								<input type="text" name="v_kota" placeholder="ex : Surabaya">
							</div>
						</div>
						<div id="hp" class="field">
							<label>Nomor HP</label>
							<div class="ui input">
								<input type="text" name="v_telp" placeholder="ex : 081234567890">
							</div>
						</div>
						<div id="keperluan" class="field">
							<label for="v_keperluan">Keperluan</label>
							<select name="v_keperluan" class="ui dropdown">
								<option value="">Pilih Keperluan Anda</option>
								<option value="Praktikum">Praktikum</option>
								<option value="Buat Tugas">Buat Tugas</option>
								<option value="Cari Internet">Cari Internet</option>
								<option value="Mengerjakan TA">Mengerjakan TA</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</div>
						<button class="ui fluid large blue submit button" type="submit" name="btn_login" value="login">Masuk Lab</button>
  					</div>
				</form>
  			</div>
  		</div>
  	</body>
  	<footer>
  	</footer>
  	<script>
  		$("#nrp").hide();	
  		$("#nonits").hide();
  		$("#instansi").change(function () 
  		{
	        if ($("#instansi").val() == "1") 
	        {
	        	console.log("haha");
	        	$("#nrp").show();
	        	$("#nonits").hide();
	        }
	        else if ($("#instansi").val() == "0") 
	        {
	        	console.log("haha");
	        	$("#nrp").hide();	
	        	$("#nonits").show();	
	        }
	    });

	    jQuery.ajax({
	           url: "/savelink",
	           type:"POST",
	           dataType: 'json',
	           data:
	           {
	            'saved': x
	           },
	           async:true
	        }).done(function(data) {
	        	toastr["error"]("Konfigurasi pada switch tidak diperlukan!");

	   	});
  	</script>
</html>