<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Title</title>
		<link href="C:\Users\Alfredo\Documents\GitHub\ProyectoUnoEdwinJimenez\ProyectoUnoEdwinJimenez\PrimerProyectoEdwinJimenez\EstiloConta.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=devive-width, user-scalable=no, initial-scale=1.0">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<style type="text/css">
		header{
		background: #2c3e50;
		color: #fff;
		}
		.main{
		background: #f2f2f2;
		}
		img{
		display:flex;
		margin:0 auto;
		}
		h1{
		display:flex;
		margin:0 auto;
		}
		</style>
		
		
		
	</head>
	<body>
		<header>
			<hgroup>
			<div class="container">
				
				<img src="C:\Users\Alfredo\Documents\GitHub\ProyectoUnoEdwinJimenez\ProyectoUnoEdwinJimenez\PrimerProyectoEdwinJimenez\taxi.png">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="#">TicoRide.com</a>
						</div>
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url('useer');?>">Home</a></li>
							<li><a href="<?php echo site_url('user');?>">DashBoard</a></li>
							<li><a href="<?php echo site_url('register_ride');?>">Register Ride</a></li>
							<li><a href="<?php echo site_url('Prueba');?>">Edit Ride</a></li>
							<li><a href="<?php echo site_url('Eliminar');?>">Eliminar Ride</a></li>
							<li><a href="<?php echo site_url('healp');?>">Help</a></li>
							<li><a href="<?php echo site_url('about');?>">About Us</a></li>
							<li><a href="<?php echo site_url('contact');?>">Contact</a></li>
							<li><a href="<?php echo site_url('Settings');?>">Settings</a></li>
							<li><a href="<?php echo site_url('login');?>">Login</a></li>
							<li><a href="<?php echo site_url('register_user');?>">Sign in</a></li>
							
						</ul>
					</div>
				</nav>
			</div>
			<div class="container">
				
				<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
					<h1><b>Contact Us</b></h1>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					<table class="table">
						
						<tbody id="user_table">
							
						</tbody>
					</table>
					
				</div>
				
			</div>
			
			</hgroup>
		</header>
		<br>
		<div class="container">
			<section class="main row">
				<p>
					<h2>Horario<h2>
					Servicio al cliente:<br>
					Lunes a Viernes: 8:00 am - 6:00 pm<br>
					Sabado: 8:00 am – 1:00 pm<br>
					Domingo: Cerrado<br>
					+(646) 828-6944<br>
					+(506) 4035-7433 Fax +(506) 4035-7533<br>
					+(506) 8735-7433 (Emergencias)<br>
					info@ticoride.com<br>
					Skype: TicoRide<br>
				</p>
			</article>
		</section>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>