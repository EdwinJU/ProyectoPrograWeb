<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Title</title>
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
			<form action=<?php echo site_url('user/listHome');?> method="POST" role="form">
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
					<div class="Welcome">
						
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1><b>Welcome to TicoRide.com</b></h1>
						</div>
						
					</div>
				</div>
				
				</hgroup>
			</header>
			<br>
			<br>
			<div class="container">
				<div class="col-xs- col-sm- col-md- col-lg-">
					<p>
						<b>Search for a ride</b>
					</p>
				</div>
			</div>
			<br>
			
			<div class="container">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
					
					
					
					<div class="txtFrom">
						<p>
							<b>From</b>
						</p>
						
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
					<div class="from">
						<input type="text" name="from" placeholder="Pleace introduce a place" id="start">
						
						
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
					
					<div class="txtTo">
						<p>
							<b>to</b>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
					<div class="to">
						<input type="text" name="to" placeholder="Introduce the End" id="end">
					</div>
					
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
					<button type="submit" class="btn btn-primary" id="btnlog">Search</button>
				</div>
			</div>
			
		</div>
	</div>
	<br>
	<div class="container">
		
		<div class="col-xs- col-sm- col-md- col-lg-">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>User</th>
							<th>Start</th>
							<th>End</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($rides as $index => $ride) { ?>
						<tr>
							<td><?php echo $ride->user_create; ?></td>
							<td><?php echo $ride->start; ?></td>
							<td><?php echo $ride->end; ?></td>
						</tr>
						<?php } ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>