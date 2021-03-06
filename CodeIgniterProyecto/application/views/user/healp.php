<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Title</title>
		<link href="C:\Users\Alfredo\Documents\GitHub\ProyectoUnoEdwinJimenez\ProyectoUnoEdwinJimenez\PrimerProyectoEdwinJimenez\EstiloAyuda.css" rel="stylesheet" type="text/css">
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
					<h1><b>Help</b></h1>
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
						<h2>¿Qué es un servicio de transporte compartido?</h2>
						Un servicio de transporte compartido es la forma más fácil y conveniente para viajar en Costa Rica desde un hotel hasta otro en las zonas turísticas más importantes del país. Las tarifas son por persona y los servicios tienen horario previamente establecido. La cantidad de personas es limitada. La mayoría de vehículos tienen aire acondicionado, no se permite fumar en ellos.
					</p>
				</article>
			</section>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<p>
				<h2>¿Los niños necesitan asientos especiales para viajar? ¿La compañía los proporciona?</h2>
				De acuerdo con la ley de tránsito de Costa Rica, todos los niños menores de 10 años deben viajar en una silla especial. Por lo general, están disponibles sin costo alguno. Se debe solicitar en el momento de la reserva.
			</p>
			
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<p>
				<h2>¿Puedo cancelar o modificar mi reserva? ¿Qué pasa si mi vuelo se cancela o se retrasa?</h2>
				No somos un proveedor directo, por lo tanto, debemos cumplir con las políticas de cancelación de cada empresa de transporte. Por lo general, no es posible cancelar o hacer cambios 48 horas antes de la hora de inicio del servicio, pero haremos nuestro mejor esfuerzo para ayudarle; por favor, si requiere solicitar la cancelación o la modificación de su reservación, envíenos un correo electrónico explicando la razón principal porque usted lo requiere, tan pronto como recibamos el mensaje, vamos a procesar la solicitud y usted tendrá una respuesta lo antes posible.
			</p>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-3">
			<p>
				<h2>¿Qué pasa si llego tarde y el transporte se ha ido?</h2>
				Cada servicio de transporte puede esperar hasta 10 minutos, no más que eso. Es un servicio compartido, hay más gente esperando en otros hoteles. En caso de que no logre abordar el servicio, intente ponerse en contacto con nosotros de inmediato, haremos nuestro mejor esfuerzo para ponernos en contacto con el conductor, quizás éste podría esperar en la siguiente parada, si es así, usted tiene que buscar un taxi para llegar hasta ese punto, el pago correrá por su cuenta. El tiempo de espera ésta vez tampoco superará los 10 minutos.
			</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<p>
				<h2>¿Todos los conductores hablan inglés?</h2>
				La mayoría de los conductores hablan inglés, pero no se puede prometer. Dependerá de la logística de cada proveedor. Lo que podemos asegurar es un servicio de alta calidad. Cada conductor tiene una línea de teléfono móvil, si sucede algo, él se pondrá en contacto con nosotros de inmediato, en ese momento haremos nuestro mejor esfuerzo para dar pronta respuesta a su inquietud.
			</p>
		</div>
		
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>