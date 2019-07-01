<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="proj.css">
	<title>List Of Apartments</title>
</head>
<body>
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
?>
	<h1>Room Selection</h1>
	<p>Which room would you like to see?</p>
	<form action="display.php" method="GET">
	<select name="rooms">
	<?php 
	foreach($db->query('SELECT * FROM room') as $row)
	{
	$check;
  	if($row['recheck'] == true)
  	{
  	$check = "Recheck";
  	}
  	else
  	{	
  	$check = "Passed";
  	}

  	echo "<option value=".$row['roomnum'].">".$row['roomnum']."</option>";
	}
	?>
	</select>
	<br><br>
	<button type="submit">Enter</button>
	</form>
</body>
</html>