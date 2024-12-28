<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Song</title>
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
			<ul class="nav navbar-nav navbar-left">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 25px;">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
			</ul>
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php" style="font-size: 25px;">Music that makes you groove</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item"><a class="nav-link" href="logout.php" style="font-size: 25px;">Logout</a></li>
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
			<center><h3>Select a song.</h3></center>
			<form action="addsong.php" method="post">
				<select class="form-control" name="song_name">
						<option>-Select Song-</option>
						<?php
							$connection = mysqli_connect("localhost","root","");
							$db = mysqli_select_db($connection,"music");
							$query = "SELECT song_name FROM songs order by song_name";
							$query_run = mysqli_query($connection,$query);
							while($row = mysqli_fetch_assoc($query_run))
							{
								?>
								<option><?php echo $row['song_name'];?></option>
								<?php
							}
						?>
					</select>
				<br>
				<button type="submit" class="btn btn-primary">Add</button>
			</form>

			
		</div>
		<div class="col-md-4" >
		</div>
	</div>
</div>
</body>
</html>