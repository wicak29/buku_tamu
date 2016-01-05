<html>
	<head>
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
		<script src="<?php echo base_url('assets'); ?>/semantic.min.js"></script>
	</head>
  	<body>
  		<div class="ui container">
  			<div class="ui grid">
	  			<div class="four wide column">
	  			</div>
	  			<div class="eight wide column middle aligned very relaxed stackabled grid">
	  				<h1>BUKU TAMU</h1>
	  				<div class="column">
	  					<div class="ui form">
	  						<form name="MY Form"action="<?php echo site_url('C_auth/login');?>" method='POST'>
		  						<div class="field">
		  							<label>User ID</label>
		  							<div class="ui left icon input">
		  								<input type="text"name="username">
		  								<i class="user icon"></i>
		  							</div>
		  						</div>
		  						<div class="field">
		  							<label>Password</label>
		  							<div class="ui left icon input">
		  								<input type="password" name="password">
		  								<i class="lock icon"></i>
		  							</div>
		  						</div>
		  						<button class="ui blue submit button" type="submit" name="btn_login" value="login">Login</button>
	  						</form>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="four wide column">
	  			</div>
	  		</div>
  		</div>
  	</body>
  	<footer>
  	</footer>
</html>