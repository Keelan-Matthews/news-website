let req = new XMLHttpRequest();
let json;

const api = localStorage.getItem('api');

req.open("POST", "https://wheatley.cs.up.ac.za/u21549967/api.php");
req.setRequestHeader("Content-Type", "application/json");

const data = {
    "key" : api,
    "type" : "info",
    "section" : "South Africa",
    "return" : ["*"]
}

req.send(JSON.stringify(data));

req.onload = () => {
    json = JSON.parse(req.responseText);
    console.log(json);
    populateArticle(json);
};

function populateArticle(json) {
    const articles = document.getElementsByClassName('today-article');

    let i = 0;
    for (let article of articles) {
        let info = json.data[i++];

        article.setAttribute('href', info.url);
        article.setAttribute('title', info.title + "(" + info.rating +"★)");
        
        let title = article.querySelector('.article-title');
        title.innerHTML = info.title;

        let author = article.querySelector('.author');
        author.innerHTML = info.author;

        if (author.innerHTML == "")
            author.innerHTML = "By anonymous";

        let image = article.querySelector('.article-img');
        if (info.image != null)
            image.setAttribute('src', info.image);
        image.setAttribute('alt', info.title);

        let date = article.querySelector('.published');

        let rate = article.querySelector('.avgRating');
        rate.innerHTML = info.rating;

        const formatter = new Intl.DateTimeFormat("en-SA", {
            year: "numeric",
            month: "long",
            day: "2-digit"
        })
        
        const fDate = new Date(info.date);
        date.innerHTML += formatter.format(fDate);
    }
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

let ratingSummary;
let starWidget

function startRating(element) {
    ratingSummary = element;
    starWidget = element.parentElement.nextElementSibling;

    ratingSummary.classList.add('hide');
    starWidget.classList.remove('hide');
}

function updateRating(element) {
    const parent = element.parentElement.parentElement;
    const title = parent.children[0].children[0].children[1].innerText;
    let rating = document.querySelector('input[name="rate"]:checked').value;

    if (!rating) rating = "0";

    if (!loggedIn) {
        alert("Please sign up or login first");
        return;
    }

    req.open("POST", "https://wheatley.cs.up.ac.za/u21549967/api.php");
    req.setRequestHeader("Content-Type", "application/json");

    req.onload = () => {
        const json = JSON.parse(req.responseText);
        console.log(json);
    };

    const data = {
        "key" : api,
        "type" : "rate",
        "article" : title,
        "rating" : rating
    }

    req.send(JSON.stringify(data));
    ratingSummary.classList.remove('hide');
    starWidget.classList.add('hide');
}