<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Title</title>
		
		<meta name="viewport" content="width=devive-width, user-scalable=no, initial-scale=1.0">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous
			">
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
			</hgroup>
				<form action=<?php echo site_url('/user/authenticate');?> method="POST" role="form">
					<form action=<?php echo site_url('/user/saveRide');?> method="POST" role="form">
					
			</header>
				<br>
				<br>
				<br>
				<br>
				<div class="container">
					
					<div class="col-xs- col-sm- col-md- col-lg-12">
						
						<p>
							<b>Username</b>
						</p>
						
					</div>
					
				</div>
				
				<div class="container">
					<div class="col-xs-12 col-sm-6 col-md-12">
						
						<input type="text" name="username" value="" placeholder="Type your username" class="required"  id="username" />
						
					</div>
				</div>
				<div class="container">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<p>
							<b>Password</b>
						</p>
					</div>
				</div>
				<div class="container">
					<div class="col-xs-12 col-sm-6 col-md-3">
						
						<input type="password" name="password" id="password" />
					</div>
				</div>
				
				<br>
				<div class="container">
					<div class="link">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<p>
								Not an user <a href="<?php echo site_url('register_user');?>">Register here</a>
																
							</p>
						</div>
					</div>
				</div>
				<br>
				<div class="container">
					<div class="boton">
						<div class="col-xs-12 col-sm-6 col-md-3">
							
							<button type="submit" class="btn btn-primary" id="btnlog">Login</button>
						</div>
					</div>
				</div>
			</form>
		</form>
			
			
			<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		</body>
	</html>