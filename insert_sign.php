<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'WADL1'1;

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// To save the comment and the recipe that liked the visitor in the database
@$a=$_POST['name'];
@$b=$_POST['email'];  
@$c=$_POST['password'];



if(@$_POST['leader'])  
{  
echo $s="insert into leader1 (Name,Email,Password) values('$a','$b','$c')";  
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con,$s);  
}

elseif(@$_POST['annotator'])  
{  
echo $s="insert into annotator (Name,Email,Password, leaderID) values('$a','$b','$c','29')";  
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con,$s);  
}

?>