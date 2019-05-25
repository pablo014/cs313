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
$rooms;
foreach($db->query('SELECT * FROM room') as $row)
{
  echo '<a href=display.php onclick=setSession('.$row['roomnum'].')>Room '.$row['roomnum'].'</a><br>';
  foreach($db->query('SELECT * FROM student') as $info)
  {
  if($info['room'] == $row['roomnum'])
  {
  echo $info['name']." ".$info['job']." ".$info['pass']." ".$info['comment'];
  }
  }
}
?>
<h1>17</h1>
</body>
</html>