
const apiURL = `${url}${type}/${id}`
const apiURL2 = 'http://getcitydetails.geobytes.com/GetCityDetails?fqcn=94.67.30.176'

fetch(apiURL2)
    .then( (data) => data.json() )
    .then( (ipjson) => generate(ipjson))

console.log(apiURL2)

const generate = (data) => {
    console.log(data)
    const html = `
        <div class="ip"><span>IP: ${data.geobytesipaddress}</span></div>
        <div class="location">
            <span>Country: ${data.geobytescountry}</span>
            <span>Country Code: ${data.geobytesinternet}</span>
        </div>
    `

    const pokemonDiv = document.querySelector('#container')
    pokemonDiv.innerHTML = html
}