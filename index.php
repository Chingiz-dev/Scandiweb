<?php
  include 'inc/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <script src="deleteProduct.js" defer></script>
</head>
<body>
  <div class="container">
    <header>
      <div>
        <h1>Product List</h1>
      </div>
      <div>
        <a href="addproduct.php"><button>ADD</button></a>
        <button id="massDelete">MASS DELETE</button>
      </div>
    </header>
    <hr>
    <main>
      <?php
        $total = new Total();
        $productList = $total->getProducts();
        foreach($productList as $item) {
          $obj = new $item['type']($item['product_id'], $item['sku'], $item['name'], $item['price'], $item['property1'], $item['property2'], $item['property3']);
          echo $obj->viewProduct();
        }
        ?>
    </main>
  </div><!--container-->
  <footer>
    <h3>
      Scandiweb Test assignment
    </h3>  
  </footer>
</body>
</html>