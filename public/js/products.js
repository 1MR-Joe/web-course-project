import {fetchData} from "./utils.js";

const container = document.getElementById('products-container');
const card = document.getElementById('product-card');
const productsApi = "/api/products";

if (! container) {
    console.log('products container not found');
}

if (! card) {
    console.log('product card not found!')
}

// request products data
/* */
let products = await fetchData(productsApi, 'json');


products.forEach(product => {

    // duplicate card
    let cardCopy = card.cloneNode(true);

    // fill card with data
    cardCopy.removeAttribute('id');
    cardCopy.style.display = 'block';

    cardCopy.querySelector('.product-name').textContent = product.name;
    cardCopy.querySelector('.product-description').textContent = product.description;
    cardCopy.querySelector('.product-price').textContent = `${(product.priceInCents) / 100}`;

    // insert card in products container
    container.appendChild(cardCopy);
});
