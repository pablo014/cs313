<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>View Cart</title>
  </head>
  <body>
  <?php echo $_SESSION['total']." ".$_SESSION['plastic']." ".$_SESSION['metal']." ".$_SESSION['double']; ?>
    <form action="browse2.php" method="post">
      <?php 
	 if(isset($_GET[plastic]) || isset($_SESSION['plastic']))
	 {
            echo "<input type=checkbox value=40 id=plastic name=plastic onclick=plastic() checked>"."Single Basket (Plastic): $
	    if(isset($_GET[plastic]))
	    {
		echo "$_GET[plastic]";
	    }
	    else
	    {
		echo $_SESSION['plastic'];
	    }
	    echo "<br>";
	 }
	 if(isset($_GET[metal]))
	 {
         echo "<input type=checkbox value=60 id=metal name=metal checked>"."Single Basket (Metal): $"."$_GET[metal]"."<br>";
	 }
	 if(isset($_GET[double]))
	 {
         echo "<input type=checkbox value=50 id=double name=double checked>"."Double Basket: $"."$_GET[double]"."<br>";
	 }
	 
	 echo "Total: "."$_GET[total]";
	 ?>
      <br><br>
      <button type="submit">Return</button><br><br>
    </form>
    <a href="checkout.php"><input type="button" value="Check Out"></a>
  </body>
</html>
