<?php
	session_start()
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		body,html
		{
		}
		.bg-img {
  			background-image: url("bg2.jpg");
			height: 100%;
			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
			position: relative;
			background-attachment: fixed;
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
						<a class="dropdown-item" href="view_admin_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_admin_profile.php">Edit Profile</a>
						<a class="dropdown-item" href="change_admin_password.php">Change Password</a>
					</div>
				</li>
			</ul>
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php" style="font-size: 25px;">Music that makes you groove</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item"><a class="nav-link" href="logout.php" style="font-size: 25px;">Logout</a></li>
			</ul>
		</div>
	</nav>
	<br>
	<span style="font-size: 30px;"><strong><center>Welcome: <?php echo $_SESSION['email'];?></center></strong></span><br>

	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-3" >
			<div class="card text-white bg-secondary mb-3" style="width: 18rem;">
			  <img class="card-img-top" src="bg1.jpg" alt="Card image cap" style="height: 12rem;">
			  <div class="card-body">
			    <h5 class="card-title">Add a Song</h5>
			    <p class="card-text">New song to add to the library? wohoo!</p>
			    <a href="insert.php" class="btn btn-primary">Add</a>
			  </div>
			</div>
		</div>
		<div class="col-md-3" >
			<div class="card text-white bg-secondary mb-3" style="width: 18rem;">
			  <img class="card-img-top" src="bg6.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">See all songs</h5>
			    <p class="card-text">Need to see which songs are already added?</p>
			    <a href="songs.php" class="btn btn-primary">Watch</a>
			  </div>
			</div>
		</div>
		<div class="col-md-4" >
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-3" >
			<div class="card text-white bg-secondary mb-3" style="width: 18rem;">
			  <img class="card-img-top" src="bg5.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">See all users</h5>
			    <p class="card-text">Keep in check who uses this app except you</p>
			    <a href="users.php" class="btn btn-primary">Check</a>
			  </div>
			</div>
		</div>
		<div class="col-md-3" >
			<div class="card text-white bg-secondary mb-3" style="width: 18rem;">
			  <img class="card-img-top" src="bg4.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">See all admins</h5>
			    <p class="card-text">Supervise the powers of other admins</p>
			    <a href="admins.php" class="btn btn-primary">Supervise</a>
			  </div>
			</div>
		</div>
		<div class="col-md-4" >
		</div>
	</div>


</div>
</body>
</html>