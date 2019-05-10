<!DOCTYPE html>
<html>
  <head>
    <title>View Cart</title>
  </head>
  <body>
    <?php 
       if(isset($_GET[plastic]))
       {
          echo "Single Basket (Plastic): "."$_GET[plastic]"; 
       }
       if(isset($_GET[metal]))
       {
          echo "Single Basket (Metal: )"."$_GET[metal]";
       }
       if(isset($_GET[double]))
       {
          echo "Double Basket: "."$_GET[double]";
       }

       echo "Total: $_GET[total]";
       ?>
  </body>
</html>
