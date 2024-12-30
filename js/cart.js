import { fetchData, showProductInCart} from "./utils.js";

const container = document.getElementById('cart-container');
const card = document.getElementById('cart-card');

const cartApi = "/api/cart?user_id=1";


async function initialize() {

    let cart = await fetchData(cartApi);

    showProductInCart(cart, card, container);
}

initialize();