<?php

// Output products to HTML
function theProducts() {
  global $products;

  echo '<div class"products"><h2> OUR PRODUCTS </h2>';

  foreach($products as $row) {
    ?>
      <div class="product">
        <div class="productImage">
          <img src="<?php echo $row['image_link']; ?>">
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
          some button here for adding to cart
          <br>
        </div>
      </div>

    <?php
  }
  echo "</div>";
}
