<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `leader1` where LeaderID='$id'");
	header('location:ShowCurrentLeader.php');
?>