<!DOCTYPE html>
<html>
  <head>
    <title>View Cart</title>
  </head>
  <body>
    <?php 
       if(isset($_GET[plastic]))
       {
          echo "Single Basket (Plastic): "."$_GET[plastic]"."<br>"; 
       }
       if(isset($_GET[metal]))
       {
          echo "Single Basket (Metal: )"."$_GET[metal]"."<br>";
       }
       if(isset($_GET[double]))
       {
          echo "Double Basket: "."$_GET[double]"."<br>";
       }

       echo "Total: $_GET[total]";
       ?>
  </body>
</html>
