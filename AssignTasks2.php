<?php
$DATABASE_HOST = 'localhost';

$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'wadl';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$sql = "SELECT * FROM leader1 ";
$result = mysqli_query($con,$sql);


// عرض اسماء الليدر في ليست

?>



<!DOCTYPE html>
<html>
<head>

    

    <link rel="stylesheet" href="AssigningTasks.css">
    <script type="text/javascript" src="add-task.js"></script>

<title>Assigning tasks</title>

 
 
   </style>

</head>
<body>
         
    <nav class="WADLMenu">
        <a href="Admin.html">Home</a>
        <div class="dot"></div>
      </nav>
    
    
  <div id="logo"><img src="logoWhite.png"  width="150" height="150"> </div>





<form method="POST" action="TaskProcess.php">

    <div class="AssigningTasks"> Assigning tasks</div>
    <div class="PTypeOfText">Type of task</div> 

   
    <div class="TypeOFText">
    <br>
    <select name="TypeTask" id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
    
        <option value=""></option>
        <option value="NLP" >NLP</option>
          <option value="image">img</option>
        </select>
        <select id="ddl2">
        </select>
    </div>
  


    <div class="TNameOfLeader">Name of leader</div> 


    <div class="NameOfLeader">
    <select>
<?php while($row = mysqli_fetch_array($result)):;?>
<option><?php echo $row[1];?> </option>
<?php endwhile ;?>
</select>
</div>


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "wadl");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM task";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th> ID </th>";
                echo "<th>Name of task</th>";
                echo "<th>Type of task</th>";
                echo "<th>Deadline</th>";
                echo "<th>Language</th>";
                echo "<th>click</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['TaskID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Type'] . "</td>";
                echo "<td>" . $row['Deadline'] . "</td>";
                echo "<td>" . $row['Language'] . "</td>";
                echo "<td><input type='checkbox' name='checkbox[x]' value='[n]' </td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
  


<br><br>
      
     <button type="submit" name="submit" value="save">Assign</button>


</form>







 
  
</body>
</html>