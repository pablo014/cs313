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
   
   $array;
   $i = 0;
   foreach($_GET["pass"] as $grade)
   {
      $array[$i] = $grade;
      $i = $i + 1;
   }
   $i = 0;
   
   foreach($db->query('SELECT * FROM Student') as $row)
   {
      if($row["room"] == $_SESSION["roomNumber"])
      {
	 $name = $row["name"];
	 $comment = $_GET[$row["name"]];

	 if ($array[$i] == $name)
	 {
	    $db->query("UPDATE Student SET pass = true WHERE name = '$name'");
	    $i = $i + 1;
	 }
	 else
	 {
	    $db->query("UPDATE Student SET pass = false WHERE name = '$name'");
	 }

	 $sql = "UPDATE Student SET comment = '$comment' WHERE name = '$name'";
	 if($db->query($sql))
	 {
	    echo "Grading Comlete";
	 }
	 else
	 {
	    echo "Error Unable to Grade";
	 }
	 
      }
   }
?>