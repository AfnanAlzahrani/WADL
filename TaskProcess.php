<?php
$DATABASE_HOST = 'localhost';

$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'wadl';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$sql = "SELECT * FROM `task_type`";
$all_categories = mysqli_query($con,$sql);

$sql2 = "SELECT * FROM `leader1`";
$all_categories2 = mysqli_query($con,$sql2);
// To save the comment and the recipe that liked the visitor in the database
@$a=$_POST['TypeTask'];
@$b=$_POST['date'];  
@$c=$_POST['language'];

$id = mysqli_real_escape_string($con,$_POST['Category']);

$id2 = mysqli_real_escape_string($con,$_POST['Category1']);
$name = mysqli_real_escape_string($con,$_POST['Product_name']);



if(@$_POST['submit'])  
{  
echo $s="insert into task (type,deadline,language,name,`TaskTypeID`,`LeaderID`) values('$a','$b','$c','$name','$id','$id2')";  
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con,$s);  
}
?>