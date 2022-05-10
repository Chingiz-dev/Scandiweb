<?php

/**
 * Furniture class extends Product
 *
 * PHP version 7.0
 */
class Furniture extends Products
{

  protected $height;
  protected $width;
  protected $length;

  function __construct($product_id, $sku, $name, $price, $height, $width, $length )
  {
    parent::__construct($product_id, $sku, $name, $price);
    $this->height = $height;
    $this->width = $width;
    $this->length = $length;
    
  }

  public function addProduct()
  {
    $sql = "INSERT INTO products(sku, name, price, type, property1, property2, property3) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$this->sku, $this->name, $this->price, "Furniture", $this->height, $this->width, $this->length]);
  }
  
  public function viewProduct()
  {
    $content = "<section>";
    $content .= '<input type="checkbox" name="delete_list" id=' . $this->product_id . '>';
    $content .= "<p>" . $this->sku . "</p>";
    $content .= "<p>" . $this->name . "</p>";
    $content .= "<p>" . $this->price . " $</p>";
    $content .= "<p>Dimension: " . $this->height . "x" . $this->width . "x" . $this->length . "</p>";
    $content .= "</section>";
    return $content;
  }
  
}