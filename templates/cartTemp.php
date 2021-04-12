<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link rel="stylesheet" href="css/cart.css">
  <link rel="stylesheet" href="css/nav.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/738c285426.js" crossorigin="anonymous"></script> 
  <script type="text/javascript" src="cart.js"></script>

</head>
<body>
  <h1>Your Cart! </h1>

  <div id="dynamicCart">

  </div>
  <div id="cartTotal">
     Cart Total: $
  </div>

  <div class="wrapper">

<h1>Checkout</h1>
<p> 
We are currently doing pick up orders at our <span id="Vancouver" title="888 YVR Street, V8V8V8"><strong>Vancouver location</strong> </span> only.   
Leave your name and email address below. We will contact you within 2 business days. </p>
<form action="cart.php" method="post">

  <label for="firstName">  First Name:
    <input type="text" name="firstName" id="firstName">
    <?php the_validation_message('firstName'); ?>
  </label>

  <label for="email">  Please enter your email address:
    <input type="text" name="email" id="email">
    <?php the_validation_message('email'); ?>
  </label>

  <input type="submit" value="Checkout">

</form>

<?php the_results(); ?>

</div> 

  <nav>
    <ul>
      <li id="goToLanding"><a href="index.html"> <i class="fas fa-shopping-cart"> Home </i></a></li>
      <li id="shopBtn"><a href="products.php"> <i class="fas fa-store"> Shop</i></a> </li>
      <li id="cartBtn"><a href="cart.php"> <i class="fas fa-shopping-cart"> Cart</i></a></li>
    </ul>
  </nav>

</body>
</html>