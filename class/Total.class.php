<?php

class Total extends Dbh
{
  public function getProducts()
  {
    $sql = "SELECT * FROM products";
    $stmt = $this->connect()->query($sql);
    $result = $stmt->fetchAll();
    return $result;
  }
  
  public function deleteProducts($arrToDelete)
  {    
    foreach($arrToDelete as $itemId) {
      $sql = "DELETE FROM products WHERE product_id = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$itemId]);
    }
    return $arrToDelete;
  }
}