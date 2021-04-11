<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="stylesheet" href="css/products.css">
  <link rel="stylesheet" href="css/addReview.css">
  <link rel="stylesheet" href="css/review.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://kit.fontawesome.com/738c285426.js" crossorigin="anonymous"></script> 
</head>
<body>
  <?php
    theProducts();
  ?>
  <div class="addReview">
    <h2>Welcome your feedback </h2>
    <form class="comment" action="products.php" method="post">

      <label class="reviewName">
        Name: 
        <input type="text" name="reviewName">
      </label>
      <label class="reviewContent">
        Leave your review:
        <textarea name="reviewContent"></textarea>
      </label>

      <button class="submitComment" type="submit" name="button">Submit</button>
      <br>
    </form>
  </div>
  <?php
    theReviews();
  ?>
  <nav>
    <ul>
      <li id="shopBtn"><i class="fas fa-store"> Shop</i></li>
      <li id="cartBtn"><i class="fas fa-shopping-cart"> Cart</i></li>
      <li id="accountBtn"><i class="fas fa-user-circle"> Account</i></li>
    </ul>
   </nav>
</body>
</html>