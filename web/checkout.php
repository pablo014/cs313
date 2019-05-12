<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Check Out</title>
  </head>
  <body>
    <h1>Check Out</h1>
    <form action="confirm.php" method="post">
      Address:<br>
      <textarea name="address" rows="4" cols="50"></textarea>
      <br><br>
      <button type="submit">Purchase</button>
    </form>
    <br>
    <a href="view.php"><input type="button" value="Return To Cart"></a>
  </body>
</html>
