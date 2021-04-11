$(document).ready(function() {
  $('.addToCart').on('click', function () {
    let price = $(this).prev().val();
    let item = $(this).prev().prev().val();
    console.log(item)
    addToCart(item, price)
  })

  function addToCart(productId, price) {
    let cart;
    if (localStorage.getItem('cart')===null) {
      cart = [];
    } else {
      cart = JSON.parse(localStorage.getItem('cart'));
    }
    cart.push({productId, price});
    localStorage.setItem('cart', JSON.stringify(cart))
  }
  
})