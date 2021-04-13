<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="stylesheet" href="css/products.css">
  <link rel="stylesheet" href="style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/addReview.css">
  <link rel="stylesheet" href="css/review.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://kit.fontawesome.com/738c285426.js" crossorigin="anonymous"></script> 
  <script type="text/javascript" src="script.js"></script>

</head>
<body>
  <div class="mainWrapper">
  <main>
  <?php
    theProducts();
  ?>
  <div class="addReview">
    <h2>We value your feedback </h2>
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
  </main>


  <nav>
    <ul>
      <li id="goToLanding"><a href="index.html"> <i class="fas fa-shopping-cart"> Home </i></a></li>
      <li id="shopBtn"><a href="products.php"> <i class="fas fa-store"> Shop </i></a> </li>
      <li id="cartBtn"><a href="cart.php"> <i class="fas fa-shopping-cart"> Cart </i></a></li>
    </ul>
  </nav>
  </div>
</body>
</html>