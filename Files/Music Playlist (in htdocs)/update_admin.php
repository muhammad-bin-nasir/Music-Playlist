<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"music");
	$query = "update admins set Email='$_POST[email]' where Email='$_SESSION[email]'" ;
	
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "view_admin_profile.php";
</script>

