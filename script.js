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
      cart.push({productId, price, quantity: 1});
    } else {
      cart = JSON.parse(localStorage.getItem('cart'));
      let check = false
      cart.forEach(item => {
        if (item.productId == productId) {
          item.quantity += 1;
          return check = true;
        }
      })
      if (check == false) {
        cart.push({productId, price, quantity: 1})
      }
    }
    localStorage.setItem('cart', JSON.stringify(cart))
  }
})