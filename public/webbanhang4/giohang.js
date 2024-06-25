const btncart = document.querySelectorAll(".add-cart")
btncart.forEach(function(button,trangchu){
  button.addEventListener("click",function(event){{
    var btnItem = event.target
    // console.log(btnItem);
    var product = btnItem.parentElement.parentElement.parentElement
    //console.log(product);
    var productImg = product.querySelector("img").src
    //console.log(productImg)
    var productName = product.querySelector(".name-bsn").innerText
    //console.log(productName)
    var productPrice = product.querySelector(".price-cart").innerText
    //console.log(productPrice)
    addcart(productImg,productName,productPrice)
  }})
})
function addcart(productImg,productName,productPrice){
    var addItem = document.createElement("div")
    //addItem.classList.add("cart-item")
    var cartItem = document.querySelectorAll(".cart-container .cart-item")
    for(var i = 0; i<cartItem.length; i++){
      productLoop = document.querySelectorAll(".cart-item-img-name")   
        if(productLoop[i].innerHTML == productName ){
          alert("Sản phẩm của bạn đã có trong giỏ hàng")
          return
      }
    }
    var bsncontent = '<div class="cart-item"><div class="cart-item-img"><img src="'+ productImg +'" alt=""><span class="cart-item-img-name">'+ productName +'</span><span class="cart-delete">Xóa</span></div><div class="cart-item-price"><p>Số lượng: <input type="number" value="1" min="1"></p><p><span class="price">'+ productPrice +'</span><sup>đ</sup></p></div></div> '
    addItem.innerHTML = bsncontent
    var cartcontainer  = document.querySelector(".cart-container")
    cartcontainer.append(addItem)
    carttotal()
    cartdelete()
}

//-------------------------------------------TOTAL-------------------------------------------------------


function carttotal(){
  var cartItem = document.querySelectorAll(".cart-container .cart-item")
  totalB = 0
  //console.log(cartItem.length);
  for(var i = 0; i<cartItem.length; i++){
    var inputValue = cartItem[i].querySelector("input").value 
    //console.log(inputValue);
    var productPrice = cartItem[i].querySelector(".price").innerHTML
    //console.log(productPrice);
    totalA = inputValue * productPrice 
    totalB = totalB + totalA
    //console.log(totalB);
    //console.log(totalA);
  }
  var Total = document.querySelector(".cart-total span")
  var cartPrice = document.querySelector(".cart-price")
  Total.innerHTML = totalB.toLocaleString('de-DE')
  cartPrice.innerHTML = totalB.toLocaleString("de-DE")
  //console.log(Total);
  inputchange()
}

//------------------------DELETE------------------------------------------


function cartdelete(){
  var cartItem = document.querySelectorAll(".cart-container .cart-item")
    for(var i = 0; i<cartItem.length; i++){
     var productDelete = document.querySelectorAll(".cart-delete")
     //console.log(productDelete);  
     productDelete[i].addEventListener("click",function(event){
      var cartDelete = event.target
      var cartItemDelete = cartDelete.parentElement.parentElement
      //console.log(cartItemDelete);
      cartItemDelete.remove()
      carttotal() 
     })
    }
}

//-----------------------------input change-----------------------------------


function inputchange(){
  var cartItem = document.querySelectorAll(".cart-container .cart-item")
    for(var i = 0; i<cartItem.length; i++){
      var inputValue = cartItem[i].querySelector("input")
      inputValue.addEventListener("change",function(){
        carttotal()
      })
}
}

//----------------------------------showcart close-----------------------------------


const cartClose = document.querySelector(".icon-close")
const cartShow = document.querySelector(".icon-cart")
cartShow.addEventListener("click",function(){
    document.querySelector(".cart").style.right = 0
})

cartClose.addEventListener("click",function(){
    document.querySelector(".cart").style.right = "-400px"
})

btncart.forEach(function(button){
    button.addEventListener("click",function(){
        document.querySelector(".cart").style.right = 0
    })
})