<!DOCTYPE html>
<html>
  <head>
    <title>Shopping Cart</title>
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
	  <td>Single Basket (Plastic)</td>
	  <td>$40.00</td>
	  <td><input type="checkbox" name="Plastic" value="40"></td>
	</tr>
	<tr>
          <td>Single Basket (Metal)</td>
          <td>$60.00</td>
          <td><input type="checkbox" name="Metal" value="60"></td>
        </tr>
	<tr>
          <td>Double Basket</td>
          <td>$50.00</td>
          <td><input type="checkbox" name="Double" value="50"></td>
        </tr>
      </table>
      <br><br>
        <button type="submit">View Cart</button><br><br>
        <input type="button" value="Check Out" onclick="confirm.php">
    </form>
  </body>
</html>
