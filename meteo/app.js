// const weathericons = {
//     "rain": "wi wi-day-rain",
//     "Clouds": "wi wi-day-cloudy",
//     "Clear": "wi wi-day-sunny",
//     "Snow": "wi wi-day-snow",
//     "mist": "wi wi-day-fog",
//     "Drizzle": "wi wi-day-sleet",
// }

// function capitalize(str){
//     return str[0].toUpperCase() + str.slice(1);
// }

// async function main(){
//     // 1. choper l'adress IP du PC qui ouvre la page :
//     // https://api.ipify.org/?format.json
//     const ip = await fetch('https://api.ipify.org?format=json')
//     .then(resultat => resultat.json())
//     .then(json => json.ip)

//     // 2. choper la ville grace a l'adresse IP: http//freegeoip.net/json/adresseIPDuMec
//     const ville = await fetch('http://api.ipstack.com/' + ip + '?access_key=30c029b1d2a8dcdcdf26ac5a0e07b914')
//         .then(resultat => resultat.json())
//         .then(json => json.city)


//     const meteo = await fetch('http://api.openweathermap.org/data/2.5/weather?q=${ville}&appid=8e602b9ea28ed4f9f8fc97a5f6d1105c&lang=fr&units=metric')
//         .then(resultat => resultat.json())
//         .then(json => json)

//     console.log(meteo);
//     //4. afficher les informations sur la page
//     displayWeatherInfos(meteo)
// }

// function displayWeatherInfos(data){
//     const name = data.name;
//     const temperature = data.main.temp;
//     const conditions = data.weather[0].main;
//     const description = data.weather[0].description;

//     document.querySelector('#ville').textContent = name;
//     document.querySelector('#temperature').textContent =
//         Math.round(temperature);
//     document.querySelector('#conditions').textContent =
//         capitalize(description);

//     document.querySelector('i.wi').className =
//         weatherIcons[conditions];
// }

// main();