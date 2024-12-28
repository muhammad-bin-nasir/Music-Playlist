<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"music");
	$query = "insert into songs values(null,'$_POST[name]','$_POST[artist]')" ;
	
	$query_run = mysqli_query($connection,$query);

?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "admin_dashboard.php";
</script>
