<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
<?php
   $_SESSION["roomNumber"] = $_GET["rooms"];
   echo "<h1>Room ".$_GET["rooms"]."</h1>";
?>
  <div class="nav">
      <div class="selected"><a href="display.php">Home</a></div>
      <div><a href="projList.php">Switch Apartment</a></div>
      <div><a href="">Grade Apartment</a></div>
      <div><a href="">Add Student</a></div>
      <div><a href="">Remove Student</a></div>
  </div>
  <h2>Students</h2>
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
     foreach($db->query('SELECT * FROM Student') as $row)
     {
	if($row['room'] == $_GET["rooms"])
	{
	   echo $row['name']." ".$row['job']."<br>";
	}
     }
  ?>

</body>
</html>