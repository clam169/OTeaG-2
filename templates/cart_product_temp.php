<?php $cart_product = fetchProduct();

// echo var_dump($cart_product);

?>


<div class="cartItem">
  <div class="cartItemImageWrapper">
    <img src="<?php echo $cart_product['image_link'];?>" class=cartImage>
  </div>

  
  <div class="cartItemName">
    <b><?php echo $cart_product['name']; ?></b>
  </div>
  
  <div class="cartRight">
    <div class="cartItemPrice">
      Price: $<?php echo $cart_product['price']; ?> 
    </div>
    
    <div class="cartItemQuantity">
      Quantity: 
      <input class="quantity" type="text" value="<?php echo $_POST['quantity']; ?>">
      <input class="quantityBtn" value="Update">
      <!-- <button class="removeBtn" name="remove">Remove item</button> -->
      <input type="hidden" value="<?php echo $cart_product['product_id']?>"></input>
      <input class="removeBtn" value="Remove Item">
    </div>
  </div>

  <div class="itemTotal">
    Total: $<?php echo $sum = $_POST['quantity'] * $cart_product['price']; ?>
  </div>
</div>
