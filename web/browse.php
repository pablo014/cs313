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
	    <img src="https://cdna4.zoeysite.com/Adzpo594RQGDpLcjBynL1z/cache=expiry:31536000/resize=fit:max,width:1200//compress/https://s3.amazonaws.com/zcom-media/sites/a0i0L00000TM7fPQAT/media/catalog/product/1/0/103-172-red-45-degree-view.jpg" alt="Single Plastic Basket" height="150" width="150">
	  </td>
	  <td>$40.00</td>
	  <td><input type="checkbox" name="plastic" value="40"></td>
	</tr>
	<tr>
          <td>
	    Single Basket (Metal)<br>
	    <img src="https://images.uline.com/is/image/content/dam/images/H/H5000/H-4568.jpg?$MediumRHD$&iccEmbed=1&icc=AdobeRGB" alt="Single Metal Basket" height="150" width="150">
	  </td>
          <td>$60.00</td>
          <td><input type="checkbox" name="metal" value="60"></td>
        </tr>
	<tr>
          <td>
	    Double Basket<br>
	    <img src="https://dijf55il5e0d1.cloudfront.net/images/na/3/8/7/38701_1000.jpg" alt="Double Basket" height="150" width="150">
	  </td>
          <td>$50.00</td>
          <td><input type="checkbox" name="double" value="50"></td>
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
