<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sign Up Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-inverse" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
										<li class=""><a href="<?php echo site_url('login') ?>">KEMBALI</a></li>
									</ul>
									
									</ul>
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>
					

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<?php echo form_open('login/tambah'); ?>
					<legend>Tambah Data User</legend>
					<?php echo validation_errors(); ?>
						<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" id="" name="username" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" id="" name="password" placeholder="Input field">
					</div>

					<div class="form-group">
						<label for="">Konfirmasi Password</label>
						<input type="password" class="form-control" id="" name="confirmassword" placeholder="Input field">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<?php echo form_close(); ?>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
 		


	</body>
</html>