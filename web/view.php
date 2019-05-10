<!DOCTYPE html>
<html>
  <head>
    <title>View Cart</title>
  </head>
  <body>
    <?php 
       if(isset($_GET[plastic))
       {
          echo "$_GET[plastic]"; 
       }
       if(isset($_GET[metal]))
       {
          echo "$_GET[metal]";
       }
       if(isset($_GET[double]))
       {
          echo "$_GET[double]"
       }

       echo "Total: $_GET[total]"
       ?>
  </body>
</html>
