<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
	<style type="text/css">
		#side_bar
		{
			background-color: whitesmoke;
			padding: 50px;
			width: 300px;
			height: 450px;
		}
		body,html
		{
			height: 100%;
		}
		.bg-img {
  			background-image: url("bg2.jpg");
			height: 100%;
			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
			position: relative;
		}
		.navbar-header
		{
			text-align: center;
		}
		
	</style>
</head>

<body>
<div class="bg-img">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">

			
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-items">
					<a class="nav-link" href="index.php" style="font-size: 25px;">User Login</a>
				</li>
			</ul>
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php" style="font-size: 25px;">Music that makes you groove</a>
			</div>
			<ul class="nav navbar-nav navbar-left">
				<li class="nav-items">
					<a class="nav-link" href="signup.php" style="font-size: 25px;">Register</a>
				</li>
			</ul>
		</div>
	</nav>
	<br>
	<span><center>Make a playlist once, enjoy it forever.</center></span>
	<br>
	<div class="row">
		<div class="col-md-4" >
		</div>
		<div class="col-md-4" id="main_content">
			<center><h3>New User? Come and join us.</h3></center>
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Email:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Mobile No:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Address:</label>
					<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>

			
		</div>
		<div class="col-md-4" >
		</div>
	</div>
</div>
</body>
</html>