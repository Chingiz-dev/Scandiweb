<?php

include 'class-autoload.inc.php';

$arrToDelete = trim(file_get_contents('php://input'));
$decoded = json_decode($arrToDelete, true);
$total = new Total();
$output =  $total->deleteProducts($decoded);
echo json_encode($output);