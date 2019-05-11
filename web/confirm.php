<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Confirmation</title>
  </head>
  <body>
    <h1>Confirmation</h1>
    <?php echo $_SESSION['plastic']." ".$_SESSION['metal']." ".$_SESSION['double']; ?>
  </body>
</html>
