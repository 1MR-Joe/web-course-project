import { fetchData, showProducts, fillEntitiesAsSelectorOptions } from "./utils.js";

const container = document.getElementById('products-container') || console.error('products container not found');
const card = document.getElementById('product-card') || console.error('product card not found!');
const sortSelector = document.getElementById('sort-selector') || console.error('sort selector not found!');
const categorySelector = document.getElementById('category-selector') || console.error('category selector not found!');


const productsApi = "/api/products";
const categoriesApi = "/api/categories";


let filters = {
    category: null,
    orderBy: null,
    orderDir: null
};

async function initialize() {
    // fetch products and categories
    let products = await fetchData(productsApi, filters, 'json');
    let categories = await fetchData(categoriesApi);

    showProducts(products, card, container);

    fillEntitiesAsSelectorOptions(categorySelector, categories);

    categorySelector.addEventListener('change', async function() {
        // assign the value of this event to the filters object
        filters['category'] = this.value;

        products = await fetchData(productsApi, filters, 'json');
        showProducts(products);
    });
}

initialize();

// sortSelector.addEventListener('change', async function() {

// });