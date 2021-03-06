<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Shopping Cart Central</title>
    <link rel="stylesheet" href="style1.css">
    <script>
      var plastic = <?php if(isset($_POST[plastic])) { echo "true"; } else { echo "false"; } ?>;
      var metal = <?php if(isset($_POST[metal])) { echo "true"; } else { echo "false"; } ?>;
      var double = <?php if(isset($_POST[double])) { echo "true"; } else { echo "false"; } ?>;
      var total = <?php
         if(isset($_POST[plastic]))
         {
	 $plastic = $_POST[plastic];
         $_SESSION['plastic'] = $_POST[plastic];
	 }
	 else
	 {
	 $plastic = 0;
	 $_SESSION['plastic'] = 0;
	 }
         if(isset($_POST[metal]))
         {
         $_SESSION['metal'] = $_POST[metal];
	 $metal = $_POST[metal];
         }
         else {
	    $metal = 0;
            $_SESSION['metal'] = 0;
	 }
         if(isset($_POST[double]))
         {
         $double = $_POST[double];
	 $_SESSION['double'] = $double;
         }
         else {
	 $double = 0;
         $_SESSION['double'] = 0;
         }
	 $total = $double + $metal + $plastic;
	 $_SESSION['total'] = $total;
	 echo $total;
         ?>;

      
      function changePlastic() {
         if (plastic == false)
         {
            plastic = true;
            total = total + 40;
            <?php
	       $_SESSION['total'] = $_SESSION['total'] + 40;
	       $_SESSION['isplastic'] = true;
	       ?>
         }
         else
         {
            plastic = false;
            total = total - 40;
	    <?php
	       $_SESSION['total'] = $_SESSION['total'] - 40;
	       $_SESSION['isplastic'] = false;
               ?>
         }
         document.getElementById("total").innerHTML = "<input type=textbox name=total value=$" + total + ".00 readonly>"
      }

      function changeMetal() {
         if (metal == false)
         {
            metal = true;
            total = total + 60;
	    <?php
               $_SESSION['total'] = $_SESSION['total'] + 60;
               $_SESSION['ismetal'] = true;
               ?>
         }
         else
         {
            metal = false;
            total = total - 60;
	    <?php
               $_SESSION['total'] = $_SESSION['total'] - 60;
               $_SESSION['ismetal'] = false;
               ?>
         }
         document.getElementById("total").innerHTML = "<input type=textbox name=total value=$" + total + ".00 readonly>"
      }
      
      function changeDouble() {
         if (double == false)
         {
            double = true;
            total = total + 50;
	    <?php
               $_SESSION['total'] = $_SESSION['total'] + 50;
               $_SESSION['isdouble'] = true;
               ?>
         }
         else
         {
            double = false;
            total = total - 50;
	    <?php
               $_SESSION['total'] = $_SESSION['total'] - 50;
               $_SESSION['isdouble'] = false;
               ?>
         }
         document.getElementById("total").innerHTML = "<input type=textbox name=total value=$" + total + ".00 readonly>"
      }

      function load() {
        if (plastic == true)
        {
           document.getElementById("plastic").innerHTML = "<input type=checkbox name=plastic value=40 onclick=changePlastic() checked>";
        }
        if (metal == true)
        {
           document.getElementById("metal").innerHTML = "<input type=checkbox name=metal value=60 onclick=changeMetal() checked>";
        }
        if (double == true)
        {
           document.getElementById("double").innerHTML = "<input type=checkbox name=double value=50 onclick=changeDouble() checked>";
        }
        document.getElementById("total").innerHTML = "<input type=textbox name=total value=$" + total + ".00 readonly>";
      }
    </script>
  </head>
  <body onload="load()">
    <h1>Shopping Carts</h1>
    <form action="view.php" method="get">
      <table>
	<tr>
	  <th>Product</th>
	  <th>Price</th>
	  <th></th>
	</tr>
	<tr>
	  <td>
	    Single Basket (Plastic)<br>
	    <img src="https://cdna4.zoeysite.com/Adzpo594RQGDpLcjBynL1z/cache=expiry:31536000/resize=fit:max,width:1200//compress/https://s3.amazonaws.com/zcom-media/sites/a0i0L00000TM7fPQAT/media/catalog/product/1/0/103-172-red-45-degree-view.jpg" alt="Single Plastic Basket" height="150" width="150">
	  </td>
	  <td>$40.00</td>
	  </script>
	  <td id="plastic"><input type="checkbox" name="plastic" value="40" onclick="changePlastic()"></td>
	</tr>
	<tr>
          <td>
	    Single Basket (Metal)<br>
	    <img src="https://images.uline.com/is/image/content/dam/images/H/H5000/H-4568.jpg?$MediumRHD$&iccEmbed=1&icc=AdobeRGB" alt="Single Metal Basket" height="150" width="150">
	  </td>
          <td>$60.00</td>
          <td id="metal"><input type="checkbox" name="metal" value="60" onclick="changeMetal()"></td>
        </tr>
	<tr>
          <td>
	    Double Basket<br>
	    <img src="https://dijf55il5e0d1.cloudfront.net/images/na/3/8/7/38701_1000.jpg" alt="Double Basket" height="150" width="150">
	  </td>
          <td>$50.00</td>
          <td id="double"><input type="checkbox" name="double" value="50" onclick="changeDouble()"></td>
        </tr>
	<tr>
	  <td>Total:</td>
	  <td id="total"><input type="textbox" name="total" value="$0.00" readonly></td>
	</tr>
      </table>
      <br><br>
        <button type="submit">View Cart</button><br>
    </form>
  </body>
</html>
