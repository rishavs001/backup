const userTab = document.querySelector("[data-userWeather]");
const searchTab = document.querySelector("[data-searchWeather]");
const userContainer = document.querySelector(".weather-container");
const grantAccessContainer = document.querySelector(".grantlocation-container");
const searchForm = document.querySelector("[data-searchForm]");
const loadingContainer = document.querySelector(".loading-container");
const userInfoContainer = document.querySelector(".user-info-container");

let oldTab = userTab;
const API_KEY = "d1845658f92b31c64bd94f06f7188c9c";
oldTab.classList.add("current-tab");
getfromSessionStorage();

function switchTab(newTab) {
   if(newTab!=oldTab){
     oldTab.classList.remove("current-tab");
     oldTab = newTab;
     oldTab.classList.add("current-tab");

     if(!searchForm.classList.contains("active")){
        //kya searchform bala container invisible, if yes then make it visible
        userInfoContainer.classList.remove("active");
        grantAccessContainer.classList.remove("active");
        searchForm.classList.add("active");
     }
     else{
        //me phle search bale tab pr tha ab your weather bala tab visible krna h
        searchForm.classList.remove("active");
        userInfoContainer.classList.remove("active");
        //ab me your weather bale tab pr aa gya hu, to weather bhi display krna pdega, so let's check local storage first
        //for coordinates if we haved saved them there
        getfromSessionStorage();
     }     
   }
}

userTab.addEventListener("click", () => {
    switchTab(userTab);
})

searchTab.addEventListener("click", () => {
    switchTab(searchTab);
})

function getfromSessionStorage() {
    const localCoordinates = sessionStorage.getItem("user-coordinates");
    if(!localCoordinates){
        //agar local coordinates nahi mile
        grantAccessContainer.classList.add("active");
    }
    else{
        const coordinates = JSON.parse(localCoordinates);
        fetchUserWeatherInfo(coordinates);
    }
}

async function fetchUserWeatherInfo(coordinates){
    const {lat, lon} = coordinates;
    //make grant container invisible
    grantAccessContainer.classList.remove("active");
    //make loader visible
    loadingContainer.classList.add("active");

    //API Call
    try {
       const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${API_KEY}&units=metric`);
       const data = await response.json();
       loadingContainer.classList.remove("active");
       userInfoContainer.classList.add("active");
       renderWeatherInfo(data);
    }
    catch(err) {
        loadingContainer.classList.remove("active");
    }
}

function renderWeatherInfo(weatherInfo) {
    const cityName = document.querySelector("[data-userCity]");
    const countryIcon = document.querySelector("[data-country-Icon]");
    const desc = document.querySelector("[data-weatherDesc]");
    const weatherIcon = document.querySelector("[data-weatherIcon]");
    const temp = document.querySelector("[data-temp]");
    const windSpeed = document.querySelector("[data-windspeed]");
    const humidity = document.querySelector("[data-humidity]");
    const cloudy = document.querySelector("[data-cloudy]");

    cityName.innerText = weatherInfo?.name;
    countryIcon.src = `https://flagcdn.com/144x108/${weatherInfo?.sys?.country.toLowerCase()}.png`;
    desc.innerText = weatherInfo?.weather?.[0]?.description;
    weatherIcon.src = `https://openweathermap.org/img/w/${weatherInfo?.weather?.[0]?.icon}.png`;
    temp.innerText = `${weatherInfo?.main?.temp} °C`;
    windSpeed.innerText = `${weatherInfo?.wind?.speed} m/s`;
    humidity.innerText = `${weatherInfo?.main?.humidity}%`;
    cloudy.innerText = `${weatherInfo?.clouds?.all}%`;
}

function getLocation() {
    if(navigator.geolocation)
      navigator.geolocation.getCurrentPosition(showPosition);
    else  
       alert("No Geolocation support available");
}

function showPosition(position) {
   const userCoordinates = {
       lat: position.coords.latitude,
       lon: position.coords.longitude,
   }

   sessionStorage.setItem("user-coordinates",JSON.stringify(userCoordinates));
   fetchUserWeatherInfo(userCoordinates);
}

const grantAccessButton = document.querySelector("[data-grantAccess]");
grantAccessButton.addEventListener("click",getLocation);

const searchInput = document.querySelector("[data-searchInput]");
searchForm.addEventListener("click", (e) => {
    e.preventDefault();
    let cityName = searchInput.value;
    if(cityName === ""){
        //alert("Enter city name");
    }
    else
      fetchSearchWeatherInfo(cityName);
})

async function fetchSearchWeatherInfo(city) {
   loadingContainer.classList.add("active");
   userInfoContainer.classList.remove("active");
   grantAccessContainer.classList.remove("active");

   try{
     const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${API_KEY}&units=metric`);
     if(!response.ok){
        throw new Error('City not found');
     }
     else{
        const error404 = document.querySelector(".error-404");
        error404.style.display = 'none';
        const data = await response.json();
        loadingContainer.classList.remove("active");
        userInfoContainer.classList.add("active");
        renderWeatherInfo(data);}
   }
   catch(err){
     loadingContainer.classList.remove("active");
     const error404 = document.querySelector(".error-404");
     error404.style.display = 'flex';
   }
}
