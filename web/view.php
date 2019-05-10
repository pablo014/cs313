<!DOCTYPE html>
<html>
  <head>
    <title>View Cart</title>
  </head>
  <body>
    <form action="browse2.php" method="post">
      <?php 
	 if(isset($_GET[plastic]))
	 {
         echo "<input type=checkbox value=40 name=plastic checked>"."Single Basket (Plastic): $"."$_GET[plastic]"."<br>"; 
	 }
	 if(isset($_GET[metal]))
	 {
         echo "<input type=checkbox value=60 name=metal checked>"."Single Basket (Metal): $"."$_GET[metal]"."<br>";
	 }
	 if(isset($_GET[double]))
	 {
         echo "<input type=checkbox value=50 name=double checked>"."Double Basket: $"."$_GET[double]"."<br>";
	 }
	 
	 echo "Total: "."$_GET[total]";
	 ?>
      <br><br>
      <button type="submit">Return</button><br><br>
    </form>
    <input type="button" onclick="loaction.href='confirm.php'" value="Check Out">
  </body>
</html>
