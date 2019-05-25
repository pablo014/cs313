<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
<?php
   echo "<h1>Room ".$_SESSION["roomNumber"].$_SESSION["test"]."</h1>";
?>
</body>
</html>