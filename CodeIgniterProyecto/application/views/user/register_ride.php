<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Title</title>
		<link href="C:\Users\Alfredo\Documents\GitHub\ProyectoUnoEdwinJimenez\ProyectoUnoEdwinJimenez\PrimerProyectoEdwinJimenez\EstiloEditR.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=devive-width, user-scalable=no, initial-scale=1.0">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
				<form action=<?php echo site_url('/user/saveRide');?> method="POST" role="form">
					<div class="container">
						
						<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
							<h1><b>Create Rides</b></h1>
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
				<br>
				<div class="container">
					
					<div class="col-xs- col-sm- col-md- col-lg-12">
						
						<p>
							<b>Ride Name</b>
						</p>
						
					</div>
				</div>
				
				<div class="container">
					<div class="col-xs-12 col-sm-12 col-md-12">
						
						<input type="text" name="name" placeholder="introduce a ride name" id="name">
						
					</div>
				</div>
				<br>
				
				
				
				<br>
				<div class="container">
					
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						
						<p>
							<b>Start From</b>
						</p>
						<input type="text" name="start" placeholder="Introduce the Start From" id="start">
					</div>
					<div class="End">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<p>
								<b>End</b>
							</p>
							<input type="text" name="end" placeholder="Introduce the End" id="end">
						</div>
					</div>
				</div>
				<br>
				<div class="container">
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						
						<div class="form-group">
							<label for="comment">Descripcion:</label>
							<textarea class="form-control" name="descripcion" rows="5" id="comment"></textarea>
						</div>
					</div>
				</div>
				
				<div class="container">
					<h2><b>When</b></h2>
					
					<div class="col-xs- col-sm- col-md- col-lg-6">
						
						<p>
							<b>Departure</b>
						</p>
						<input type="text" name="departure" placeholder="Introduce an hour" id="departure">
						<p>
							<b>Estimate Arrival</b>
						</p>
						<input type="text" name="estimate" placeholder="Introduce an hour" id="estimate">
						
					</div>
					
					
					
					<div class="col-xs- col-sm- col-md- col-lg-6">
						<p>
							<b>Days</b>
						</p>
						<input type="text" name="days" placeholder="Introduce the days" id="days">
						
						
						
					</div>
				</div>
				<br>
				<br>
				<div class="container">
					
					<div class="col-xs-12 col-sm-6 col-md-6	">
						<button type="submit" class="btn btn-primary" id="btnSaveR">Save</button>
						
					</div>
					<br>
					<div class="link">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<p>
								<a href="<?php echo site_url('user');?>">Cancel</a>
								
							</p>
						</div>
					</div>
				</div>
				<br>
				
				<br>
				<br>
			</form>
			<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		</body>
	</html>