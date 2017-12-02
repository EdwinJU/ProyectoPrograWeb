<!DOCTYPE html>
<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<meta charset="utf-8" />
		<title>Title</title>
		<link href="C:\Users\Alfredo\Documents\GitHub\ProyectoUnoEdwinJimenez\ProyectoUnoEdwinJimenez\PrimerProyectoEdwinJimenez\EstiloDash.css" rel="stylesheet" type="text/css">
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
							<li class="active"><a href="file:///C:/Users/Alfredo/Documents/GitHub/ProyectoUnoEdwinJimenez/ProyectoUnoEdwinJimenez/PrimerProyectoEdwinJimenez/index.html"target="_blank":>Home</a></li>
							<li><a href="file:///C:/Users/Alfredo/Documents/GitHub/ProyectoUnoEdwinJimenez/ProyectoUnoEdwinJimenez/PrimerProyectoEdwinJimenez/dashboard.html"target="_blank":>DashBoard</a></li>
							<li><a href="file:///C:/Users/Alfredo/Documents/GitHub/ProyectoUnoEdwinJimenez/ProyectoUnoEdwinJimenez/PrimerProyectoEdwinJimenez/CrearRide.html"target="_blank":>Create Ride</a></li>
							<li><a href="file:///C:/Users/Alfredo/Documents/GitHub/ProyectoUnoEdwinJimenez/ProyectoUnoEdwinJimenez/PrimerProyectoEdwinJimenez/Editride.html"target="_blank":>Edit Ride</a></li>
							<li><a href="file:///C:/Users/Alfredo/Documents/GitHub/ProyectoUnoEdwinJimenez/ProyectoUnoEdwinJimenez/PrimerProyectoEdwinJimenez/settings.html"target="_blank":>Settings</a></li>
							<li><a href="file:///C:/Users/Alfredo/Documents/GitHub/ProyectoUnoEdwinJimenez/ProyectoUnoEdwinJimenez/PrimerProyectoEdwinJimenez/Ayuda.html"target="_blank":>help</a></li>
							<li><a href="file:///C:/Users/Alfredo/Documents/GitHub/ProyectoUnoEdwinJimenez/ProyectoUnoEdwinJimenez/PrimerProyectoEdwinJimenez/AcercaDe.html"target="_blank":>About Us</a></li>
							<li><a href="file:///C:/Users/Alfredo/Documents/GitHub/ProyectoUnoEdwinJimenez/ProyectoUnoEdwinJimenez/PrimerProyectoEdwinJimenez/Contacto.html"target="_blank":>Contact</a></li>
							<li><a href="file:///C:/Users/Alfredo/Documents/GitHub/ProyectoUnoEdwinJimenez/ProyectoUnoEdwinJimenez/PrimerProyectoEdwinJimenez/autenticacion.html"target="_blank":>Login</a></li>
							<li><a href="file:///C:/Users/Alfredo/Documents/GitHub/ProyectoUnoEdwinJimenez/ProyectoUnoEdwinJimenez/PrimerProyectoEdwinJimenez/registrouser.html"target="_blank":>Sign in</a></li>
						</ul>
					</div>
				</nav>
				
			</div>
			<div class="container">
					
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
						<h1><b>DashBoard</b></h1>
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
		<p>
			<b>My Rides</b>
		</p>
		<br>

        <div id="container" class="container">
        	<div class="col-xs- col-sm- col-md- col-lg-">
	<h1><?php echo $title ?> </h1>
	
	
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Start</th>
					<th>End</th>
					<th>Descripcion</th>
					<th>Depature</th>
					<th>Estimate</th>
					<th>Days</th>

				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($rides as $index => $ride) { ?>
					<tr>
						<td><?php echo $ride->nombre; ?></td>
						<td><?php echo $ride->start; ?></td>
						<td><?php echo $ride->end; ?></td>
						<td><?php echo $ride->descripcion; ?></td>
						<td><?php echo $ride->depature; ?></td>
						<td><?php echo $ride->estimate; ?></td>
						<td><?php echo $ride->days; ?></td>

					</tr>	
				<?php } ?>
				
			</tbody>
		</table>
	</div>
	
</div>
</div>





		
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>