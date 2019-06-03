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
   
   $sql = "UPDATE Student SET comment='".$comment."', pass='".$pass."' WHERE name='".$name."'";
   foreach($db->query('SELECT * FROM Student') as $row)
   {
      if($row["room"] == $_SESSION["roomNumber"])
      {
         echo $row["name"]." ".$row["job"]." ".$_GET[$row["name"]];
      }
   }
?>