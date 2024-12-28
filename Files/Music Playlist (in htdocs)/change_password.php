<?php
	session_start()
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
<br><br>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form action="update_password.php" method="post">
				<div class="form-group">
					<label>Enter Current Password:</label>
					<input type="password" name="old_password" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter New Password:</label>
					<input type="password" name="new_password" class="form-control">
				</div>
				<br>
				<button type="submit" name="update" class="btn btn-primary">Update Password</button>
		</div>
		<div class="col-md-4">
		</div>
	</div>


</div>
</body>
</html>