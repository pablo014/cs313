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
	    <img src="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjY_7n9ro_iAhVrilQKHb5cD1UQjRx6BAgBEAU&url=https%3A%2F%2Fwww.specialtystoreservices.com%2Fproductdetails.aspx%3Fproductid%3D11074%26group%3D%26img%3D9005.jpg" alt="Single Metal Basket" height="150" width="150">
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
