<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"music");
	$query = "INSERT INTO playlist (user_id, song_name) SELECT $_SESSION[id] AS user_id,'$_POST[song_name]' AS song_name FROM dual WHERE 
    NOT EXISTS (
        SELECT 1 
        FROM playlist 
        WHERE user_id = $_SESSION[id] AND song_name = '$_POST[song_name]'
    )" ;
	
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Added successfully...");
	window.location.href = "playlist.php";
</script>