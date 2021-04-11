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

function handleReviewSubmission() {
  global $pdo;

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // TODO
    if(isset($_POST['reviewName']) && isset($_POST['reviewContent'])) {

      $sql = 'INSERT into review (reviewName, date, reviewContent) VALUES (:reviewName, :date, :reviewContent)';

      $statement = $pdo -> prepare($sql);

      $statement -> bindValue(':reviewName', $_POST['reviewName']);
      $statement -> bindValue(':date', date('Y-m-d'));
      $statement -> bindValue(':reviewContent', $_POST['reviewContent']);
      $statement -> execute();
    }
  }
}

function fetchProduct() {
  global $pdo;
  // global $cart_products;

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // TODO
    if(isset($_POST['product_id'])) {
      $product_id = $_POST['product_id'];

      //TODO
      $sql = "SELECT * FROM product WHERE product_id=$product_id";

      $result = $pdo -> query($sql);
      
      while ($row = $result -> fetch()) {
        // $cart_products[] = $row;
        return $row;
      }
    }
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

function getReviews() {
  global $pdo;
  global $reviews;

  //TODO
  $sql = 'SELECT * FROM review ORDER BY review_id desc;';

  $result = $pdo -> query($sql);
  
  while ($row = $result -> fetch()) {
    $reviews[] = $row;
  }
}

// function getCart($productId) {
//   global $pdo;
//   global $cart;

//   $sql= 'SELECT * FROM product WHERE product_id = :productId'

//   $statement -> bindValue(':productId', productId);

//   $result = $pdo -> query($sql);

//   while ($row = $result -> ()) {
//     $cart[] =$row;
//   }

// }