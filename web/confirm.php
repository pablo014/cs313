<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Check Out</title>
  </head>
  <body>
    <h1>Check Out</h1>
    <?php
     $total = $_SESSION['total'];
     echo $total;
    ?>
  </body>
</html>
