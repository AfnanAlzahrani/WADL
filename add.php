<?php
  
    // Connect to database 
    $con = mysqli_connect("localhost","root","","wadl");
    
      
    // mysqli_connect("servername","username","password","database_name")
   
    // Get all the categories from category table
    $sql = "SELECT * FROM `task_type`";
    $all_categories = mysqli_query($con,$sql);

    $sql2 = "SELECT * FROM `leader1`";
    $all_categories2 = mysqli_query($con,$sql2);
   
    // The following code checks if the submit button is clicked 
    // and inserts the data in the database accordingly
    if(isset($_POST['submit']))
    {
        // Store the Product name in a "name" variable
        // $name = mysqli_real_escape_string($con,$_POST['Product_name']);
         
        // Store the Category ID in a "id" variable
        $id = mysqli_real_escape_string($con,$_POST['Category']);

        $id2 = mysqli_real_escape_string($con,$_POST['Category1']);
        @$a=$_POST['TypeTask'];
        @$b=$_POST['date'];  
        @$c=$_POST['language'];
       
        
        
         
        // Creating an insert query using SQL syntax and
        // storing it in a variable.
        $sql_insert = 
        "INSERT INTO `Task`( `type`,`deadline`,`language`,`TaskTypeID`,`LeaderID` )
            VALUES ('$a','$b','$c'و'$id' ,'$id2')";
           
          // The following code attempts to execute the SQL query
          // if the query executes with no errors 
          // a javascript alert message is displayed
          // which says the data is inserted successfully
          if(mysqli_query($con,$sql_insert))
        {
            echo '<script>alert("Product added successfully")</script>';
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="add.css">
  <script type="text/javascript" src="add-task.js"></script>

  <title>add task</title>
</head>

<body>


  <ul>
    <li><a href="Admin.php">Home</a></li>
    <li><a href="Add.php">Add task</a></li>
    <li><a href="AddNewleader.php">Add a new leader</a></li>
    <li><a href="AssigningTasks.php">Assigning tasks</a></li>
    <li><a href="ShowCurrentLeader.php">Show current Leaders</a></li>

  </ul>

  <p id="logo"><img src="logoWhite.png" width="80" height="80"> </p>

<!-- -------------------------------------------------------------------->


<form method="POST" action="TaskProcess.php" >

<h2 class="AddTask"> Add task </h2>

<div>

     
     <label>Name of task:</label>
             <input type="text" name="Product_name" required>
     
             
      <label>type of task:</label>
      <select name="TypeTask" id="ddl" >

        <option value=""></option>
        <option value="NLP">NLP</option>
        <option value="image">img</option>
      </select>

      <!-- <select id="ddl2">
      </select> -->


   


        <label>Select a specific type</label>
        <select name="Category">
            <?php 
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $category["TaskTypeID"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $category["Type"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>
        </select>
        

        <label>Select a leader</label>
        <select name="Category1">
            <?php 
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                while ($category1 = mysqli_fetch_array(
                        $all_categories2,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $category1["LeaderID"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $category1["Name"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>
        </select>

      
         
   <label>select language:</label> 

  <select name="language">
    <option value=""></option>
    <option value="Arabic">Arabic</option>
    <option value="English">English</option>
  </select>



         
         <label>select Deadline:</label> 
  <input type="date" name="date" id="dateofbirth">
  


  
         
         <label>select dataset:</label> 

  <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">



 
         
         <label>select Tagset:</label> 

  <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">













<button type="submit" name="submit" value="save">Add</button>


</form>

              </div>





</body>

</html>