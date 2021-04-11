<?php
  // error reporting
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  // Import functions
  require_once('templates/functions/validation.php');

  // Validate form submission
  validate();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Checkout</title>

    <link rel="stylesheet" href="style.css">
  
  </head>
  <body>

    <div class="wrapper">

      <h1>Checkout your orders</h1>

      <form action="a7.php" method="post">

        <label for="email">  Please enter your email address:

          <input type="text" name="email" id="email">

          <!-- Display validation message for email input -->
          <?php the_validation_message('email'); ?>

        </label>


        <input type="submit" value="Checkout">

      </form>

      <!-- Display the results -->
      <?php the_results(); ?>

      </div> 
  </body>
</html>