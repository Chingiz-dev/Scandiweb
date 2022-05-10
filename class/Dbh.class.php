<?php

abstract class Dbh
{

  protected function connect()
  {
    $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
    $pdo = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
  
}