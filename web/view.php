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
            echo "<input type=checkbox value=40 id=plastic name=plastic onclick=plastic() checked>"."Single Basket (Plastic): $40<br>";
	    $plastic = 40;
	 }
	 else
	 {
	    $plastic = 0;
	 }
	 if(isset($_GET[metal]) || isset($_SESSION['metal']))
	 {
         echo "<input type=checkbox value=60 id=metal name=metal checked>"."Single Basket (Metal): $60<br>";
	 $metal = 60;
	 }
	 else
	 {
	 $metal = 0;
	 }
	 if(isset($_GET[double]) || isset($_SESSION['double']))
	 {
         echo "<input type=checkbox value=50 id=double name=double checked>"."Double Basket: $50<br>";
	 $double = 50;
	 }
	 else
	 {
	 $double = 0;	
	 }	 
	 $total = $plastic + $metal + $double;
	 echo "Total: $".$total;
	 ?>
      <br><br>
      <button type="submit">Return</button><br><br>
    </form>
    <a href="checkout.php"><input type="button" value="Check Out"></a>
  </body>
</html>
