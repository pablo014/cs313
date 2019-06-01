<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="proj.css">
</head>
<body>
<?php
   echo "<h1>Room ".$_SESSION["roomNumber"]."</h1>";
?>
<?php
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
	if(isset($_GET["fname"]) || isset($_GET["lname"]))
	{
	   alert("Inside if statement");
	   $db->query("INSERT INTO Student(name, room) VALUE ('".$_POST['fname']." ".$_POST['lname']."', ".$_SESSION['roomNumber'].")");
	}

?>
   <div class="nav">
      <div><a href="display.php">Home</a></div>
      <div><a href="projList.php">Switch Apartment</a></div>
      <div><a href="">Grade Apartment</a></div>
      <div class="selected"><a href="addStudent.php">Add Student</a></div>
      <div><a href="">Remove Student</a></div>
   </div>
   
   <form action="addStudent.php" method="GET">
      First Name: <br>
      <input type="text" name="fname"><br>
      Last Name: <br>
      <input type="text" name="lname"><br><br>
      <button type="submit">Add Student</button>
   </form>
</body>
</html>
