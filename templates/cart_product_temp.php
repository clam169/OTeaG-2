<?php $cart_product = fetchProduct();

// echo var_dump($cart_product);

?>

<div style="width: 300px; height: 300px; border: 1px solid blue;">

 <div class="cartItem">
  <!-- <div class="cartItemImageWrapper">
    <img src="<?php echo $cart_product['image_link'];?>" class=cartImage>
  </div> -->

  <div class="cartItemName">
    <?php echo $cart_product['name']; ?>    
  </div>

  <div class="cartItemPrice">
    Price: $<?php echo $cart_product['price']; ?> 
  </div>

  <div class="cartItemQuantity">
    Quantity: <?php echo $_POST['quantity']; ?>
  </div>

  <div class="itemTotal">
    Total: <?php echo $sum = $_POST['quantity'] * $cart_product['price']; ?>
  </div>

</div>