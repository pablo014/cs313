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

   $user = $_GET['username'];
   $pass = password_hash($_GET['password'], PASSWORD_DEFAULT);
   $name;

   foreach($db->query('SELECT * FROM sLogin') as $row)
   {
      if($row['user'] == $user)
      {
         if(!password_verify($row['pass'], $pass))
	 {
	    header('Location: login.php');
	    exit;
	 }
	 else
	 {
	    $name = $row['name'];
	    $_SESSION["name"] = $name;
	    if($row['admin'] == true)
	    {
	       header('Location: projList.php');
	    }
	 }
      }
   }
?>

<h1>Welcome <?php echo $name; ?></h1>
<h2>Which job would you like to do?</h2>
<form action="student1.php" method="GET">
   <select name="job">
      <option value="Bathroom 1">Bathroom 1</option>
      <option value="Bathroom 2">Bathroom 2</option>
      <option value="Laundry Room">Laundry Room</option>
      <option value="Kitchen Counter">Kitchen Counter</option>
      <option value="Fridge">Fridge</option>
      <option value="Stovetop">Stovetop</option>
   </select><br>
   <button type="submit">Submit</button>
</form>