<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// global array of posts, to be fetched from database
$products = [];

require_once 'database/database.php';
require_once 'templates/functions/functions.php';

//connect to database: PHP Data object representing Database connection
$pdo = db_connect();

// submit comment to database
handleReviewSubmission();

// Get products from database
getProducts();
getReviews();

// include the template to display the page
include 'templates/cartTemp.php';
