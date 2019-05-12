<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Confirmation</title>
  </head>
  <body>
    <h1>Congratulations On Your Purchase Of</h1>
    <?php  
    	   if($_SESSION['plastic'] != 0)
	   {
	   echo "Single Basket (Plastic): $40<br>";
	   $plastic = 40;
	   }
	   else
	   {
	   $plastic = 0;
	   }
	   if($_SESSION['metal'] != 0)
           {
           echo	"Single Basket (Metal): $60<br>";
	   $metal = 60;
           }
	   else
	   {
	   $metal = 0;
	   }
	   if($_SESSION['double'] != 0)
           {
           echo	"Double Basket: $50<br>";
	   $double = 50;
           }
	   else
	   {
	   $double = 0;
	   }
	   $total = $plastic + $metal + $double;
	   echo "Total: $".$total;
    ?>
    <h2>Being Sent To</h2>
    <?php
    echo $_POST[address];
    ?>
  </body>
</html>
