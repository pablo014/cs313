<!DOCTYPE html>
<html>
  <head>
    <title>Shopping Cart Central</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
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
	    <img src="" alt="" height="" width="">
	  </td>
	  <td>$40.00</td>
	  <td><input type="checkbox" name="Plastic" value="40"></td>
	</tr>
	<tr>
          <td>
	    Single Basket (Metal)<br>
	    <img src="https://images.uline.com/is/image/content/dam/images/H/H5000/H-4568.jpg?$MediumRHD$&iccEmbed=1&icc=AdobeRGB" alt="Single Metal Basket" height="150" width="150">
	  </td>
          <td>$60.00</td>
          <td><input type="checkbox" name="Metal" value="60"></td>
        </tr>
	<tr>
          <td>
	    Double Basket<br>
	    <img src="" alt="" height="" width="">
	  </td>
          <td>$50.00</td>
          <td><input type="checkbox" name="Double" value="50"></td>
        </tr>
	<tr>
	  <td>Total:</td>
	  <td id="total">$0.00</td>
	</tr>
      </table>
      <br><br>
        <button type="submit">View Cart</button><br><br>
        <input type="button" value="Check Out" onclick="confirm.php">
    </form>
  </body>
</html>
