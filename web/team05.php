<h1>Scripture Resources</h1>

<?php
/***
 * Group work team-5 Week 05.
 * Scripture Power - Database access
 */

 try
{
  $user = 'angelopablo';
  $password = 'pablo014';
  $db = new PDO('pgsql:host=localhost;dbname=prove05', $user, $password);

  // this line makes PDO give us an exception when there are problems,
  // and can be very helpful in debugging! (But you would likely want
  // to disable it for production environments.)
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
$Scripture;
$statement = $db->query('SELECT * FROM Scriptures');
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{ 
  $Scripture .= "<strong>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . '</strong>  - "' . $row['content'] . '"<br/><br/>' ;

}

?>

<p><?php echo $Scripture; ?></p>