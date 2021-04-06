<?php
require 'config.php';

// Should return a PDO
function db_connect() {

  try {
    // TODO
    // try to open database connection using constants set in config.php
    // return $pdo;
    $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
    $user = DBUSER;
    $pass = DBPASS;

    $pdo = new PDO($connectionString, $user, $pass);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
    }
  catch (PDOException $e)
  {
    die($e->getMessage());
  }
}


// Get all products from database and store in $products
function getProducts() {
  global $pdo;
  global $products;

  //TODO
  $sql = 'SELECT * FROM product;';

  $result = $pdo -> query($sql);
  
  while ($row = $result -> fetch()) {
    $products[] = $row;
  }

}