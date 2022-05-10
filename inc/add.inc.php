<?php

include 'class-autoload.inc.php';

if(isset($_POST["submit"]))
{

  $product_id = 0;
  $productType = $_POST["productType"];
  $sku = $_POST['sku'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $property1 = $_POST['property1'];
  $property2 = isset($_POST['property2']) ? $_POST['property2'] : 0;
  $property3 = isset($_POST['property3']) ? $_POST['property3'] : 0;
  
  $obj = new $productType($product_id, $sku, $name, $price, $property1, $property2, $property3);
  $obj->addProduct();

  header("location: ../index.php");

}