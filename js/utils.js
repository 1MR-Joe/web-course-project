/**
 * @param {string} api
 * @param {Object|null} filters
 * @param {string} format
 * @returns {Promise<string|null>}
 */
export async function fetchData(api, filters = null, format = 'json') {
    // build URL
    let url = new URL(api, window.location.origin);
    
    url = applyFilters(filters, url);

    // fetch data
    let response = await fetch(url);

    if(! response.ok) {
        console.error('error fetching data');
        return null;
    } else {
        let data;

        if(format === 'text') {
            data = await response.text();
        } else {
            data = await response.json();
        }

        return data;
    }
}

/**
 * apply filter / query params to a URL
 * @param {object} filters
 * @param {string|URL} url
 * @returns {URL}
 */
function applyFilters(filters, url) {
    if(typeof(route) == String) {
        url = new URL(route, window.location.origin);
    }

    // Add all active filters to the URL as query parameters
    for (const key in filters) {
        if (filters[key]) {
            url.searchParams.set(key, filters[key]);
        }
    }

    // console.log(url);
    return url;
}

/**
 * convert products from json to visual cards and show them
 * @param {Object} products 
 * @param {HTMLDivElement} card 
 * @param {HTMLDivElement} container 
 */
export function showProducts(products, card, container) {
    products.forEach(product => {

        // duplicate card
        let cardCopy = card.cloneNode(true);
    
        // fill card with data
        cardCopy.removeAttribute('id');
        cardCopy.classList.remove('hidden');
    
        cardCopy.querySelector('.card-left').style.backgroundImage = `url(${new URL(product.image, window.location.origin)})`;
        cardCopy.querySelector('.product-name').textContent = product.name;
        cardCopy.querySelector('.product-description').textContent = product.description;
        cardCopy.querySelector('.product-price').textContent = `${(product.price_in_cents) / 100}`;
    
        // insert card in products container
        container.appendChild(cardCopy);
    });
}

/**
 * fills entities as selector options,
 * @param {HTMLSelectElement} container
 * @param {Object} entities an entity is expected to have a Name and an ID
 */
export function fillEntitiesAsSelectorOptions(container, entities) {
    entities.forEach(e => {
        const optionElement = document.createElement('option');
        optionElement.textContent = e.name;
        optionElement.value = e.id;

        container.appendChild(optionElement);
    });
}
