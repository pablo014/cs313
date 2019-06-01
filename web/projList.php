<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>List Of Apartments</title>
	<script>
	function setSession(x)
	{
	<?php $_SESSION["roomNumber"] = x; ?>
	alert(<?php echo $_SESSION["roomNumber"]; ?>);
	}
	</script>
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

  	echo "<option value='$row['roomnum']>$row['roomnum']</option>";
	}
	?>
	</select>
	<button type="submit">Enter</button>
	</form>
</body>
</html>