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
    console.log(item)
    $.ajax('cart_product.php', {
      type: 'POST',
      data: {product_id: item.productId, quantity: item.quantity},
      success: function (data, status, xhr) {
        $("#dynamicCart").append(data);
      },
      error: function (jqXhr, textStatus, errorMessage){
        $("#dynamicCart").append("No Items in cart");
      }
    })
  })

    $("#cartTotal").append(cartItem.reduce((acc, cur) => {
      return acc + (cur.quantity * cur.price)
    }, 0))
  
})