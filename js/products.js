import {fetchData, fillEntitiesAsSelectorOptions, showProducts} from "./utils.js";

const container = document.getElementById('products-container') || console.log('products container not found');
const card = document.getElementById('product-card') || console.log('product card not found!');
const sortSelector = document.getElementById('sort-selector') || console.log('sort selector not found!');
const categorySelector = document.getElementById('category-selector') || console.log('category selector not found!');

const productsApi = "/php/product.php?operation=fetch-all";
const categoriesApi = "/php/category.php?operation=fetch-all";

let filters = {
    category: null,
    orderBy: null,
    orderDir: null
};

// fetch products and categories
let products = await fetchData(productsApi, filters,'json');
let categories = await fetchData(categoriesApi);


showProducts(products, card, container);

fillEntitiesAsSelectorOptions(categorySelector, categories);

categorySelector.addEventListener('change', async function() {
    // assign the value of this event to the filters object
    filters['category'] = this.value

    products = await fetchData(productsApi, filters,'json');
    showProducts(products)
});

// sortSelector.addEventListener('change', async function() {

// });