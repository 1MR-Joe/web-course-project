// let addToCartButton = document.getElementById('cart-btn') || console.error("add to cart button not found");

// get quantity from the document
const quantitySelector = document.getElementById('quantity-selector') || console.error('quantity selector not found');
let quantity = quantitySelector.value || console.error("can't get quantity");

// get product id from request params
const url = new URL(window.location.href);
const productId = url.searchParams.get('id') || console.error('product id not found');

const cartItemApi = '/api/cart';

function convert_wish_heart(){
    wish_list_heart = document.getElementById("wish_list_heart");

    if(wish_list_heart.style.backgroundColor == "white"){
        wish_list_heart.style.backgroundColor = "black";
        wish_list_heart.style.color = "#dac723"
    }else{
        wish_list_heart.style.backgroundColor = "white";
        wish_list_heart.style.color = "black"

    }
}

function addToCart() {
    // send the request
    data = new URLSearchParams({
        product_id: `${productId}`,
        quantity: `${quantity}`
    });

    request = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: data.toString()
    };
    console.log(request);

    fetch(cartItemApi, request)
    .then(async response => {
        if(response.ok) {
            const data = await response.json();
            console.log(data);
            alert(data["message"]);
        }
    });
}