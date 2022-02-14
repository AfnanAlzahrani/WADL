<?php


$conn = mysqli_connect("localhost","root","","wadl");
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  

session_start ();

if($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_REQUEST['submit']))
{
$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];



$res = mysqli_query($con,"select* from admin1 where name='$user'and password='$pass'");
$result=mysqli_fetch_array($res);

$res1 = mysqli_query($con,"select* from leader1 where name='$user'and password='$pass'");
$result1=mysqli_fetch_array($res1);

if($result)
{
	
	$_SESSION["login"]="1";
	header("location:admin.php");
}


elseif($result1)
{
	
	$_SESSION["login"]="1";
	header("location:leader.php");
}

else	
{
	header("location:login.php");
	
}

}
$_SESSION["user"] = $user;
}


?>