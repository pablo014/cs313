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
$sql = "INSERT INTO Scripture(book, chapter, verse, content) VALUES (".$_POST['book'].", ".$_POST['chapter'].", ".$_POST['verse'].", ".$_POST['content'].")";
$db->query($sql);

$newId = $pdo->lastInsertId('Scripture_id_seq');

foreach($_POST["topic"] as $topic)
{
$db->query("INSERT INTO connect(topicId, scriptureId) VALUES ($topic, $newId)");
}



?>