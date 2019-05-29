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

  $book = $_POST['book'];
  $chap = $_POST['chapter'];
  $vs = $_POST['verse'];
  $content = $_POST['content'];

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO Scripture(book, chapter, verse, content) VALUES ('$book', $chap, $vs, '$content')";
  $db->query($sql);

  
  $newId = $db->lastInsertId('scripture_id_seq');
  var_dump($sql);
  die();

foreach($_POST["topic"] as $topic)
{
$db->query("INSERT INTO connect(topicId, scriptureId) VALUES ($topic, $newId)");
}
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
catch (Exception $ex)
{
echo 'Error!: ' . $ex->getMessage();
  die();
}




?>