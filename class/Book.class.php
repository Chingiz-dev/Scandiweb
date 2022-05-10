<?php

/**
 * Book class extends Product
 *
 * PHP version 7.0
 */
class Book extends Products
{

  protected $weight;

  function __construct($product_id, $sku, $name, $price, $weight )
  {
    parent::__construct($product_id, $sku, $name, $price);
    $this->weight = $weight;
    
  }


  public function addProduct()
  {    
    $sql = "INSERT INTO products(sku, name, price, type, property1) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$this->sku, $this->name, $this->price, "Book", $this->weight]);
  }

  public function viewProduct()
  {
    $content = "<section>";
    $content .= '<input type="checkbox" name="delete_list" id=' . $this->product_id . '>';
    $content .= "<p>" . $this->sku . "</p>";
    $content .= "<p>" . $this->name . "</p>";
    $content .= "<p>" . $this->price . " $</p>";
    $content .= "<p>Weight: " . $this->weight . "KG</p>";
    $content .= "</section>";
    return $content;
  }
  
}