<?php

abstract class Products extends Dbh
{

  protected $product_id;
  protected $sku;
  protected $name;
  protected $price;

  function __construct($product_id = 0, $sku, $name, $price)
  {
    $this->product_id = $product_id;
    $this->sku = $sku;
    $this->name = $name;
    $this->price = $price;
  }

  abstract function addProduct();
  
  abstract function viewProduct(); 

}