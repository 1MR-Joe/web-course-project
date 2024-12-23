/**
 * @param {string|URL} api
 * @param {string} format
 * @returns {Promise<string|null>}
 */
export async function fetchData(api, format) {
    let response = await fetch(api);

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