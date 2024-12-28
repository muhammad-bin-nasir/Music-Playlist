<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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
			<center><h3>Welcome Back</h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Email:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<br>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>
			<br>
			<a href="admin.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Admin? Click here.</a>
			<?php
				session_start();
				if(isset($_POST['login']))
				{
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"music");
						$query = "SELECT * FROM users WHERE email = '$_POST[email]'";
						$query_run = mysqli_query($connection,$query);
						while($row = mysqli_fetch_assoc($query_run))
						{
							if($row['Email'] == $_POST['email'])
							{
								if($row['Password'] == $_POST['password'])
								{
									$_SESSION['name'] = $row['Name'];
									$_SESSION['email'] = $row['Email'];
									$_SESSION['id'] = $row['Id'];
									header("Location:user_dashboard.php");
								}
								else
								{
									?>
									<br><br><center><span class="alert alert-danger">Wrong Password</span></center>
									<?php
								}
							}
							else
								echo "Wrong Email ID";

						}
				}
			?>
		</div>
		<div class="col-md-4" >
		</div>
	</div>
</div>
</body>
</html>