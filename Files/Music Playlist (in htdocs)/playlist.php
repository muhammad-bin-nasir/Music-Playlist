<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"music");
	$song ="";
	$artist = "";
	$query = "SELECT playlist.song_name,artist_name FROM playlist,songs where user_id = $_SESSION[id] and playlist.song_name = songs.song_name";
		
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Playlist</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
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
	<span style="font-size: 30px;"><strong><center>Welcome: <?php echo $_SESSION['name'];?></center></strong></span><br>

	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-5" >
			<form>
				<table class="table table-dark" width="900px" style="text-align: center">
					<tr>
						<th scope="col"></th>
						<th scope="col">Song Name:</th>
						<th scope="col">Artist:</th>
					</tr>
					<?php 
						$query_run = mysqli_query($connection,$query);
						$i = 1;

						while($row = mysqli_fetch_assoc($query_run))
						{
							$song = $row['song_name'];
							$artist = $row['artist_name'];
							?>
							<tr>
								<th scope="row"><?php echo $i;?></th>
								<td><?php echo $song; ?></td>
								<td><?php echo $artist; ?></td>
							</tr>
							<?php
							$i++;
						}
					?>
				</table>
			</form>
		</div>
	</div>
	</div>


</div>
</body>
</html>