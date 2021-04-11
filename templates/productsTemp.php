<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="stylesheet" href="css/products.css">
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/738c285426.js" crossorigin="anonymous"></script> 
</head>
<body>
  <h1>Products! </h1>
  <?php
    theProducts();
  ?>
  <div class="addReview">
    <h2>Post your comment: </h2>
    <form action="products.php" method="post">

      <label>
        Name: 
        <input type="text" name="reviewName">
      </label>
      <br>
      <label>
        Leave your review:
        <textarea name="reviewContent"></textarea>
      </label>

      <button type="submit" name="button">Post Comment</button>
      <br>
    </form>
  </div>
  <?php
    theReviews();
  ?>
  <nav>
    <ul>
      <li id="shopBtn"><i class="fas fa-store"></i></li>
      <li id="cartBtn"><i class="fas fa-shopping-cart"></i></li>
      <li id="accountBtn"><i class="far fa-user-circle"></i></li>
    </ul>
   </nav>
</body>
</html>