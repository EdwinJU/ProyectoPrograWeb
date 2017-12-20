<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Title</title>
		<link href="C:\Users\Alfredo\Documents\GitHub\ProyectoUnoEdwinJimenez\ProyectoUnoEdwinJimenez\PrimerProyectoEdwinJimenez\EstiloAcerca.css" rel="stylesheet" type="text/css">
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
					<h1><b>TicoRides.com</b></h1>
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
				<article class="col-xs- col-sm- col-md- col-lg-12">
					<p>
						
						TicoRide.com es un nuevo concepto diseñado para facilitar a las personas las mejores ofertas de traslado en todo el país, utilizando opciones de transporte compartidos y privados.
						Trabajamos todos los días por ser dicha empresa de confianza para usted, para ser su consejero, su amigo, su familia, su mejor opción
					</p>
				</aticle>
			</section>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<p>
					<h2>VISIÓN</h2>
					Satisfacer todos los requerimientos de las personas que viajan en el país de una manera rápida, segura y confiable, ya sea transporte, alojamiento y actividades turísticas.
				</p>
				
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<p>
					<h2>MISIÓN</h2>
					Proveer servicios de planificación de viajes con excelencia, respeto y pasión a los ciudadanos de Costa Rica interesados ​​en encontrar consejo honesto y calificado.
				</p>
			</div>
			
			
			
			<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		</body>
	</html>