$(document).ready(function() {
  let cart;
  getCart()
  function getCart() {
    if (localStorage.getItem('cart')===null) {
      cart = [];
    } else {
      cart = JSON.parse(localStorage.getItem('cart'));
    }
    getCartItems(cart);
  }

  function getCartItems (cart) {
    cart.forEach((item) => {
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
    $("#cartTotal").append(cart.reduce((acc, cur) => {
      return acc + (cur.quantity * cur.price)
    }, 0))
  }

  
  $('body').on('click', ".removeBtn", function () {
    let itemToBeRemoved = $(this).prev().val();
    removeItem(itemToBeRemoved);
  })
  
  function removeItem(itemToBeRemoved) {
    cart.forEach((item, index) => {
      if (item.productId == itemToBeRemoved) {
        cart.splice(index, 1)
      }
    })
    localStorage.setItem('cart', JSON.stringify(cart))
    location.reload()
  }

  $('body').on('click', ".quantityBtn", function () {
    let quantity = $(this).prev().val();
    let itemToBeUpdated = $(this).next().next().next().val();
    updateItem(itemToBeUpdated, quantity);
  })

  function updateItem(itemToBeUpdated, quantity) {
    cart.forEach((item) => {
      if (item.productId == itemToBeUpdated) {
        item.quantity = quantity
      }
    })
    localStorage.setItem('cart', JSON.stringify(cart))
    location.reload()
  }
})
