$(document).ready(function() {
  function getCart() {
    let cart;
    if (localStorage.getItem('cart')===null) {
      cart = [];
    } else {
      cart = JSON.parse(localStorage.getItem('cart'));
    }
    console.log(cart)
    return cart
  }
  let cartItem = getCart();
  cartItem.forEach((item) => {

    $.ajax('cart_product.php', {
      type: 'POST',
      data: {product_id: item.productId},
      success: function (data, status, xhr) {
        $("#dynamicCart").append(data);
      },
      error: function (jqXhr, textStatus, errorMessage){
        $("#dynamicCart").append("No Items in cart");
      }
    })
  })
})