<!DOCTYPE html>
<html>
  <head>
    <title>View Cart</title>
  </head>
  <body>
    <form action="browse.php" method="get">
    <?php 
       if(isset($_GET[plastic]))
       {
          echo "<input type=checkbox value=40 name=plastic>"."Single Basket (Plastic): "."$_GET[plastic]"."<br>"; 
       }
       if(isset($_GET[metal]))
       {
          echo "<input type=checkbox value=60 name=metal>"."Single Basket (Metal): "."$_GET[metal]"."<br>";
       }
       if(isset($_GET[double]))
       {
          echo "<input type=checkbox value=50 name=double>"."Double Basket: "."$_GET[double]"."<br>";
       }

       echo "Total: $_GET[total]";
       ?>
    </form>
  </body>
</html>
