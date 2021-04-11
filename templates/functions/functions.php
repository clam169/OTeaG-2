<?php

// Output products to HTML
function theProducts() {
  global $products;

  echo '<div class="products"><h2> OUR PRODUCTS </h2>';
  
  foreach($products as $row) {
    ?>
      <br>
      <div class="product">
        <div class="productImageWrapper">
          <img src="<?php echo $row['image_link'];?>" class=productImage>
        </div>

        <div class="productName">
          <?php echo $row['name']; ?>    
        </div>

        <div class="description">
            <?php echo $row['description']; ?>   
        </div>

        <div class="price">
          Price: $<?php echo $row['price']; ?> 
        </div>

        <div class="bagsPer">
          Bags per order: <?php echo $row['bags']; ?>
        </div>

        <div class="addToCartButton">

            <input name="productId" type="hidden" value=<?php echo $row['product_id']; ?>>
            <input name="productPrice" type="hidden" value=<?php echo $row['price']; ?>>
            <button class="addToCart" type="submit"> Add to cart </button>
            <br>

        </div>
      </div>

    <?php
  }
  echo "</div>";
}

function theCart() {

  global $product;

  echo '<div class="cart"><h2> Your Cart </h2>';

  foreach($cart as $row) {
    ?>
      <br>
      <div class="cartItem">
        <div class="cartItemImageWrapper">
          <img src="<?php echo $row['image_link'];?>" class=cartImage>
        </div>

        <div class="cartItemName">
          <?php echo $row['name']; ?>    
        </div>

        <div class="cartItemPrice">
          Price: $<?php echo $row['price']; ?> 
        </div>

        <div class="cartItemQuantity">
          Quantity: <?php echo $row['bags']; ?>
        </div>

        <div class="cartTotal">
          Your Total: 
      </div>

    <?php
  }
  echo "</div>";
}

function theReviews() {
  global $reviews;

  echo '<div class"reviews"><h2> What our customers have to say: </h2>';

  foreach($reviews as $row) {
    ?>
      <div class="review">
        <div class="reviewName">
          <?php echo $row['reviewName']; ?>    
        </div>

        <div class="reviewDate">
            <?php echo $row['date']; ?>   
        </div>
        
        <div class="reviewContent">
            <?php echo $row['reviewContent']; ?>   
        </div>

          <br>
        </div>
      </div>
    <?php
  }
  echo "</div>";
}


