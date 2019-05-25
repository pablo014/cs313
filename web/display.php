<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
<?php
   echo "<h1>Room ".$_SESSION["roomNum"].$_SESSION["test"]."</h1>";
?>
</body>
</html>