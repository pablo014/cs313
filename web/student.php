<?php
   session_start();
   try
   {
   $dbUrl = getenv('DATABASE_URL');

   $dbOpts = parse_url($dbUrl);

   $dbHost = $dbOpts["host"];
   $dbPort = $dbOpts["port"];
   $dbUser = $dbOpts["user"];
   $dbPassword = $dbOpts["pass"];
   $dbName = ltrim($dbOpts["path"],'/');

   $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch (PDOException $ex)
   {
   echo 'Error!: ' . $ex->getMessage();
   die();
   }
?>
<!DOCTYPE html>
<html>
   <head>
   </head>
   <body>
   <?php 
      echo "<h1>Room ".$_SESSION["roomNumber"]."</h1>";   
   ?>
   <div class="nav">   
      <div><a href="display.php">Home</a></div>
      <div><a href="projList.php">Switch Apartment</a></div>
      <div><a href="grade.php">Grade Apartment</a></div>
      <div class="selected"><a href="addStudent.php">Add Student</a></div>
      <div><a href="removeStudent.php">Remove Student</a></div>
      <div><a href="student.php">Student View</a></div>
   </div>
   
   <form action="student1.php" method="GET">
   <select name="student">
   <?php
   foreach($db->query(SELECT * FROM Student) as $student)
   {
   echo "<option value=".$student['name'].">".$student['name']."</option>";
   }
   ?>
   </select>
   <br>
   <select name="job">
      <option value="Bathroom 1">Bathroom 1</option>
      <option value="Bathroom 2">Bathroom 2</option>
      <option value="Laundry Room">Laundry Room</option>
      <option value="Kitchen Counter">Kitchen Counter</option>
      <option value="Fridge">Fridge</option>
      <option value="Stovetop">Stovetop</option>
   </select>
   <button type="submit">Submit</button>
   </form>
   
   </body>
</html>