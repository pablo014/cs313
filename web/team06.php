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

foreach($db->query('SELECT * FROM Topic') as $row)
{
$checkboxes .= "<label>".$row['topic']."</label><input type='checkbox' name='topic' value='".$row['id']."'><br>";
}

?>

<form method="POST">
<label>Book</label><br>
<input name="book" type="text">
<br><br>
<label>Chapter</label><br>
<input name="chapter" type="text">
<br><br>
<label>Verse</label><br>
<input name="verse" type="text">
<br><br>
<label>Content</label><br>
<textarea name="content" cols="50" rows="50"></textarea>
<br><br>
<?php 
echo $checkboxes;
?>
</form>