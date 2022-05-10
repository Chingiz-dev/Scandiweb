<?php

/**
 * DVD class extends Product
 *
 * PHP version 7.0
 */
class Dvd extends Products
{

  protected $size;

  function __construct($product_id, $sku, $name, $price, $size)
  {
    parent::__construct($product_id, $sku, $name, $price);
    $this->size = $size;
    
  }

  public function addProduct()
  {
    $sql = "INSERT INTO products(sku, name, price, type, property1) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$this->sku, $this->name, $this->price, "Dvd", $this->size]);
  }

  public function viewProduct()
  {
    $content = "<section>";
    $content .= '<input type="checkbox" name="delete_list" id=' . $this->product_id . '>';
    $content .= "<p>" . $this->sku . "</p>";
    $content .= "<p>" . $this->name . "</p>";
    $content .= "<p>" . $this->price . " $</p>";
    $content .= "<p>Size: " . $this->size . " MB</p>";
    $content .= "</section>";
    return $content;
  }
  
}