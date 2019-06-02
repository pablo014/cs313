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
   <link rel="stylesheet" href="proj.css">
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
   <form action="grade1.php" method="GET">
      <?php 
         $i = 1;
         foreach($db->query('SELECT * FROM Student') as $row)
	 {
	    echo "<input type=checkbox name=pass>".$row['name']." ".$row['job']." <input type=text name=".$i.">"
	    i++;
	 }
	 $_SESSION['iterations'] = i;
      ?>
      <button type="submit">Send Grades</button>
   </form>
   </body>
</html>
