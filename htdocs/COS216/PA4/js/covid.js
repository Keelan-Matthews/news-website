let req = new XMLHttpRequest();
req.withCredentials = true;
let json;
let currentCountry;
const chartDiv = document.querySelector('#chart-div');

req.open("GET", "https://worldometers.p.rapidapi.com/api/coronavirus/all/");
req.setRequestHeader("X-RapidAPI-Host", "worldometers.p.rapidapi.com");
req.setRequestHeader("X-RapidAPI-Key", "db58b1bc4cmsh961a897614e3672p12a6b2jsn06f98f8048e5");
req.onload = () => {
    json = JSON.parse(req.responseText);
    console.log(json);
    populateData(json);
};

req.send();

getCountries();

function displayChart(data) {
    const canvas = document.createElement("canvas");
    canvas.setAttribute("id", "chart");
    canvas.setAttribute("width", "1000");
    chartDiv.appendChild(canvas);

    const dailyCases = data.map((day, index) => {
        if (index) return Math.abs(day.Confirmed - data[index -1].Confirmed);
        else day.Confirmed;
    });

    const formatter = new Intl.DateTimeFormat("en-SA", {
        year: "numeric",
        month: "2-digit",
        day: "2-digit"
    })

    const labels = data.map(day => {
        const trunc = day.Date.substring(0,day.Date.indexOf("T"));
        const fDate = new Date(trunc);
        return formatter.format(fDate);
    })

    const ctx = document.getElementById('chart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Daily Cases',
                data: dailyCases,
                fill: true,
                pointRadius: 1,
                pointHoverRadius: 6,
                backgroundColor: [
                    'rgba(237, 109, 114, 0.6)'
                ],
                borderColor: [
                    '#ed6d72'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

function getCovidData(country) {
    const endpoint2 = new XMLHttpRequest();
    endpoint2.open("get", `https://api.covid19api.com/total/dayone/country/${country}`);
    endpoint2.onload = () => {
        let data = JSON.parse(endpoint2.responseText);
        chartDiv.innerHTML = "";
        displayChart(data);
    }

    endpoint2.send();
}

const countryDropdown = document.getElementById('country-options');
function getCountries() {
    let endpoint = new XMLHttpRequest();
    endpoint.open("get", "https://api.covid19api.com/countries");

    endpoint.onload = () => {
        let countries = JSON.parse(endpoint.responseText);

        //create options
        countries.forEach(country => {
            const countryName = country.Country;
            const option = document.createElement("option");
            
            option.setAttribute("value", country.Slug);
            option.innerHTML = countryName;
            countryDropdown.appendChild(option);
        });

        sortSelect(countryDropdown);

        currentCountry = "south-africa";
        countryDropdown.options[205].selected = true;
        getCovidData(currentCountry);
    }

    endpoint.send();
}

function sortSelect(selElem) {
    var tmpAry = new Array();
    for (var i=0;i<selElem.options.length;i++) {
        tmpAry[i] = new Array();
        tmpAry[i][0] = selElem.options[i].text;
        tmpAry[i][1] = selElem.options[i].value;
    }
    tmpAry.sort();
    while (selElem.options.length > 0) {
        selElem.options[0] = null;
    }
    for (var i=0;i<tmpAry.length;i++) {
        var op = new Option(tmpAry[i][0], tmpAry[i][1]);
        selElem.options[i] = op;
    }
    return;
}

countryDropdown.addEventListener('click', () => {
    const currentIndex = countryDropdown.selectedIndex;
    const countrySelected = countryDropdown.children[currentIndex].value;
    currentCountry = countrySelected;
    getCovidData(currentCountry);
})

function populateData(json) {
    let cases = document.querySelector('.cases');
    cases.innerHTML = json.data[0]["Total Cases"];

    let recoveries = document.querySelector('.recoveries');
    recoveries.innerHTML = json.data[0]["Total Recovered"];

    let deaths = document.querySelector('.deaths');
    deaths.innerHTML = json.data[0]["Total Deaths"];

    let saCases = document.querySelector('.sa-cases');
    saCases.innerHTML = json.data[28]["Total Cases"];

    let saRecoveries = document.querySelector('.sa-recoveries');
    saRecoveries.innerHTML = json.data[28]["Total Recovered"];

    let saDeaths = document.querySelector('.sa-deaths');
    saDeaths.innerHTML = json.data[28]["Total Deaths"];

    let dailyCases = document.querySelector('.daily-cases');
    dailyCases.innerHTML = '<i class="fa-solid fa-bed-pulse daily-icon"></i>' + json.data[0]["New Cases"];

    let dailyRecoveries = document.querySelector('.daily-recoveries');
    dailyRecoveries.innerHTML = '<i class="fa-solid fa-file-medical daily-icon"></i>' + json.data[0]["New Recovered"];

    let dailyDeaths = document.querySelector('.daily-deaths');
    dailyDeaths.innerHTML = '<i class="fa-solid fa-skull daily-icon"></i>' + json.data[0]["New Deaths"];

    let ifr = document.querySelector('.ifr');
    let ifrResult = (convert(json.data[0]["New Deaths"]) / convert(json.data[0]["New Cases"]))*100;
    ifrResult = Math.round(ifrResult * 100) / 100;
    ifr.innerHTML = ifrResult + '%';

    let cfr = document.querySelector('.cfr');
    let cfrResult = (convert(json.data[0]["Total Deaths"]) / convert(json.data[0]["Total Cases"]))*100;
    cfrResult = Math.round(cfrResult * 100) / 100;
    cfr.innerHTML = cfrResult + '%';

    let mortalityRate = document.querySelector('.mortality-rate');
    let mortalityResult = (convert(json.data[0]["Total Deaths"]) / 8000000000)*100;
    mortalityResult = Math.round(mortalityResult * 100) / 100;
    mortalityRate.innerHTML = mortalityResult + '%';

    let deathRatio = document.querySelector('.death-ratio');
    let roundCases = Math.round(convert(json.data[0]["Total Cases"])/10000000)*10000000;
    let roundRecovered = Math.round(convert(json.data[0]["Total Recovered"])/10000000)*10000000;
    let roundDeaths = Math.round(convert(json.data[0]["Total Deaths"])/10000000)*10000000;
    deathRatio.innerHTML = calculateRatio(roundCases, roundRecovered, roundDeaths);
}

function convert(string) {
    let num = "";

    for (let i = 0; i < string.length; i++) {
        if (!isNaN(string[i]))
           num += string[i]; 
    }

    return parseInt(num);
}


function calculateRatio(num1,num2,num3) {
    for(let num = num1; num>1; num--) 
        if ((num1 % num) == 0 && (num2 % num) == 0 && (num2 % num) == 0) {
            num1 = num1/num;
            num2 = num2/num;
            num3 = num3/num;
        }

    return (Math.round(num1 * 100) / 100)+":"+(Math.round(num2 * 100) / 100)+":"+(Math.round(num3 * 100) / 100);
}

// Scroll animation
document.addEventListener('DOMContentLoaded', _ => {
    const items = [...document.getElementsByClassName('scroll-item')];
    const containerElem = document.getElementById('scroll-wrap');
    const leftSideOfContainer = containerElem.getBoundingClientRect().left;
    const listElem = document.getElementById('scroll-list');
    let currentLeftValue = 0;

    window.setInterval(animationLoop, 50);
    
    function animationLoop() {
      const firstListItem = listElem.querySelector('.scroll-item:first-child');
      
      let rightSideOfFirstItem = firstListItem.getBoundingClientRect().right;
      
      if(rightSideOfFirstItem == leftSideOfContainer){
        currentLeftValue = -1;
        listElem.appendChild(firstListItem);
      }
      
      listElem.style.marginLeft = `${currentLeftValue}px`;
      currentLeftValue--;
    }
  });
  
  