<?php
$DATABASE_HOST = 'localhost';

$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'wadl';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$sql = "SELECT * FROM Annotator ";
$result = mysqli_query($con,$sql);

$sql1 = "SELECT * FROM Task ";
$result1 = mysqli_query($con,$sql1);


// عرض اسماء الليدر في ليست

?>
<!DOCTYPE html>
<html>
<head>

    

    <link rel="stylesheet" href="AssignTasks.css">
    <script type="text/javascript" src="add-task.js"></script>

<title>Assign tasks</title>
</head>
<body>
  <div id="logo"><img src="logoWhite.png"  width="80" height="80"> </div> 
    
  <ul>
      <li><a href="Leader.php">Home</a></li>
      <li><a href="AddAnnotator.php">Add annotator</a></li>
      <li><a href="AssignTasks.php">Assign tasks</a></li>
      <li><a href="ReviewThetasks.php">Review the tasks</a></li>
     <li><a href="">Monitor</a></li>
      <li><a href="">Inter-annotator agreement</a></li>
  </ul>





<form method="POST" action="TaskProcess.php">
  <br>
    <br>
    <br>

    <div class="AssignTasks"> Assign Tasks</div>
  



    <label for="AnnotatorName"><div class="PAnnotatorName"> Annotator Name</div></label>

    <div class="AnnotatorNamelist">
    <select id="AnnotatorName">
<?php while($row = mysqli_fetch_array($result)):;?>
<option><?php echo $row[1];?> </option>
<?php endwhile ;?>
</select>
  </div>



   <label for="AnnotatorName">  <div class="PTaskName">Task Name  </div></label> 

    <div class="TaskNamelist">
   
      <select id="AnnotatorName">
      <?php while($row1 = mysqli_fetch_array($result1)):;?>
<option><?php echo $row1[1];?> <!-- [1] رقم العمود في الداتابيس --> </option>
<?php endwhile ;?>
</select>
  </div>



  <div class="Enter"> 

  <form action="#">
    <label for="fname"><div class="color1">Number of files:</div></label>
    <input type="text" id="fname" name="fname"><br><br>

    <label for="lname"><div class="color1">IAA:</div></label>
    <input type="text" id="lname" name="lname"><br><br> 
    
    
      <div id="imgPercent"> 
         <img src='icons8-percentage-96-2.png'width="20" height="20" />
         </div>
    
  </form>

</div>
    
     <button type="submit" name="submit" value="save">Assign</button>



</body>
</html>