<?php
  $conn = mysqli_connect("localhost","root","","wadl");
 
  // Check connection
  if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
  
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$email=$_POST['email'];
    $pass=$_POST['pass'];
 
	mysqli_query($conn,"update `leader1` set Name='$name', Email='$email' , Email='$email' , Password='$pass' where LeaderID='$id'");
	header('location:ShowCurrentLeader.php');
?>