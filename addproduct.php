<?php
  include 'inc/class-autoload.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="addProduct.js" defer></script>
    <title>Add Product</title>
</head>
<body>
  <div class="container">     
    <form action="inc/add.inc.php" id="product_form" method="POST">
      <header>
        <h1>Product Add</h1>
        <div>
          <button type="submit" name="submit">Save</button>
          <button class="reset"><a href="index.php">Cancel</a></button>
        </div>
      </header>
    <hr>
      <label for="sku">SKU</label>
      <input type="text" id="sku" name="sku"><br>
      <label for="name">Name</label>
      <input type="text" id="name" name="name"><br>
      <label for="price">Price ($)</label>
      <input type="number" id="price" name="price"><br>
      <label for="productType">Type Switcher </label>
      <select name="productType" id="productType">
        <optgroup label="Type Switcher">
          <option value="Dvd" id="DVD">DVD</option>
          <option value="Book" id="Book">Book</option>
          <option value="Furniture" id="Furniture">Furniture</option>
        </optgroup>
      </select>
      <div id="dynamic"></div>
    </form>
  </div><!--container-->
  <footer>
    <h3>
      Scandiweb Test assignment
    </h3>  
  </footer>
</body>
</html>
