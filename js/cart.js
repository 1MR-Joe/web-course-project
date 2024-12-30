import { fetchData, showProductInCart} from "./utils.js";

const container = document.getElementById('product-list') || console.error('products container not found');
const card = document.getElementById('product-card') || console.error('products card not found');;
const subTotalContainer = document.getElementById('subTotal') || console.error('subTotal not found');
const shippingContainer = document.getElementById('shipping') || console.error('shipping not found');
const taxContainer = document.getElementById('tax') || console.error('tax container not found');
const totalContainer = document.getElementById('total') || console.error('total not found');

const cartApi = "/api/cart?user_id=1";
let shippingFees = 8;
let taxes = 10;
let data = [];

/**
 * @param {Object} data 
 * @param {number} shipping 
 * @param {number} tax 
 * @param {HTMLElement} subTotalContainer
 * @param {HTMLElement} shippingContainer
 * @param {HTMLElement} taxContainer
 * @param {HTMLElement} totalContainer
 * @returns {number} The sum of the products price, shipping fees, and taxes
 */
function calculateViewTotal(data, shipping, tax, subTotalContainer, shippingContainer, taxContainer, totalContainer) {
    let subTotal = 0;

    data.forEach(item => {
        subTotal += parseInt(item.price_in_cents);
    });

    subTotal = subTotal / 100;
    subTotalContainer.textContent = subTotal;
    shippingContainer.textContent = shipping;
    taxContainer.textContent = tax;
    
    let total = subTotal + shipping + tax;
    totalContainer.textContent = total;
    
    return total;
}


async function initialize() {
    data = await fetchData(cartApi);

    showProductInCart(data, card, container);
    calculateViewTotal(data, shippingFees, taxes, subTotalContainer, shippingContainer, taxContainer, totalContainer);
}

initialize();