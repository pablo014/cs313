<?php session_start();
        $name = $_GET["fname"]." ".$_GET["lname"];
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
	$sql = "INSERT INTO Student (name, room) VALUES ('$name', ".$_SESSION['roomNumber'].")";
        if($db->query($sql) == true)
        {
           echo "Successfully Added ".$name;
        }
        else
        {
           echo "ERROR Unable to add ".$name;
        }
?>
<br><a href="display.php">Return to Home</a>