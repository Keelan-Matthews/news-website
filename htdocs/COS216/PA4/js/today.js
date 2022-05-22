let req = new XMLHttpRequest();
let json;
let date = new Date();
const formatter = new Intl.DateTimeFormat("en-SA", {
    year: "2-digit",
    month: "2-digit",
    day: "2-digit"
})
date = formatter.format(date);  

const api = localStorage.getItem('api');

req.open("POST", "https://wheatley.cs.up.ac.za/u21549967/api.php");
req.setRequestHeader("Content-Type", "application/json");

req.onload = () => {
    json = JSON.parse(req.responseText);
    console.log(json);
    populateArticle(json);
};

const data = {
    "key" : api,
    "type" : "info",
    "date" : date,
    "return" : ["*"]
}

req.send(JSON.stringify(data));

function populateArticle(json) {
    const articles = document.getElementsByClassName('today-article');
    let sectionArray = [];
    let subsectionArray = [];

    let i = 0;
    for (let article of articles) {
        let info = json.data[i++];

        article.setAttribute('href', info.url);
        
        let title = article.querySelector('.article-title');
        title.innerHTML = info.title;

        let author = article.querySelector('.author');
        author.innerHTML = info.author;

        if (author.innerHTML == "")
            author.innerHTML = "By anonymous";

        let abstract = article.querySelector('.description');
        abstract.innerHTML = info.description;

        let image = article.querySelector('.article-img');

        image.setAttribute('src', info.image);
        image.setAttribute('alt', info.title);

        let section = article.querySelector('.section');
        section.innerHTML = info.section;
        sectionArray.push(info.section);

        let subsection = article.querySelector('.sub-section');
        if (info.subsection == "") 
            subsection.style.display = 'none';
        else {
            subsection.innerHTML = info.subsection;
            subsectionArray.push(info.subsection);
        }

        let rate = article.querySelector('.avgRating');
        rate.innerHTML = info.rating;

        let published = article.querySelector('.published');

        const formatter = new Intl.DateTimeFormat("en-SA", {
            year: "numeric",
            month: "long",
            day: "2-digit"
        })

        const fDate = new Date();
        published.innerHTML += formatter.format(fDate);
    }

    // Populate filters
    let uniqueSection = [];
    sectionArray.forEach((c) => {
        if (!uniqueSection.includes(c)) {
            uniqueSection.push(c);
        }
    });
    let uniqueSub = [];
    subsectionArray.forEach((c) => {
        if (!uniqueSub.includes(c)) {
            uniqueSub.push(c);
        }
    });

    const dropdownCategory = document.getElementById('dropdown-category');
    const dropdownTags = document.getElementById('dropdown-tags');

    for (let i = 0; i < uniqueSection.length; i++) {
        const option = document.createElement('option');
        option.setAttribute('value', uniqueSection[i]);
        option.innerText = uniqueSection[i];
        dropdownCategory.appendChild(option);
    }

    for (let i = 0; i < uniqueSub.length; i++) {
        const option = document.createElement('option');
        option.setAttribute('value', uniqueSub[i]);
        option.innerText = uniqueSub[i];
        dropdownTags.appendChild(option);
    }

    updateFilter();
}

let input = document.querySelector('.search-bar');
input.addEventListener('input', e => {
    let value = e.target.value;
    let articles = document.getElementsByClassName('today-article');

    for (let article of articles) {
        let title = article.querySelector('.article-title');
        let author = article.querySelector('.author');
        let abstract = article.querySelector('.description');
        let section = article.querySelector('.section');
        let subsection = article.querySelector('.sub-section');
        const isVisible = title.innerHTML.toLowerCase().includes(value) || 
                          author.innerHTML.toLowerCase().includes(value) || 
                          abstract.innerHTML.toLowerCase().includes(value) || 
                          section.innerHTML.toLowerCase().includes(value) ||
                          subsection.innerHTML.toLowerCase().includes(value);
        article.classList.toggle('hide', !isVisible);
    }
})

function updateFilter() {
    const category = document.getElementById('dropdown-category');
    const tags = document.getElementById('dropdown-tags');
    const storeCat = localStorage.getItem('category');
    const storeTags = localStorage.getItem('tags');

    if (storeCat) {
        category.value = storeCat;
        filter();
    }

    if (storeTags) {
        tags.value = storeTags;
        tagFilter();
    }
}

function filter() {
    const articles = document.getElementsByClassName('today-article');
    const keyword = document.getElementById('dropdown-category');
    let update = true;

    for (let article of articles) {

        if (keyword.options[keyword.selectedIndex].value == 'all') {
                article.classList.remove('hide');
                update = false;
        }
        else {
            let category = article.querySelector('.section').innerHTML;

            const isFiltered = (category.toLowerCase() == keyword.options[keyword.selectedIndex].value.toLowerCase());
            article.classList.toggle('hide', !isFiltered);
        }
    }    
    
    if (loggedIn && update) toggleSave(true);
}

function tagFilter() {
    const articles = document.getElementsByClassName('today-article');
    const keyword = document.getElementById('dropdown-tags');
    let update = true;

    for (let article of articles) {
        if (keyword.options[keyword.selectedIndex].value == 'all') {
                article.classList.remove('hide');
                update = false;
        }
        else {
            let category = article.querySelector('.sub-section').innerHTML;

            const isFiltered = (category.toLowerCase() == keyword.options[keyword.selectedIndex].value.toLowerCase());
            article.classList.toggle('hide', !isFiltered);
        }
    }  

    if (!update) filter();
    
    if (loggedIn && update) toggleSave(true);
}

function updatePreference() {
    console.log("HI");
    console.log(api);
    if (!loggedIn) {
        alert("Please sign up or login first");
        return;
    }

    const category = document.getElementById('dropdown-category');
    const tags = document.getElementById('dropdown-tags');

    let categoryValue;
    let tagValue;

    if (category.options[category.selectedIndex].value == "Category") 
        categoryValue = "all";
    else
        categoryValue = category.options[category.selectedIndex].value;

    if (tags.options[tags.selectedIndex].value == "Tag") 
        tagValue = "all";
    else
        tagValue = tags.options[tags.selectedIndex].value;

    console.log(categoryValue);
    console.log(tagValue);

    req.open("POST", "https://wheatley.cs.up.ac.za/u21549967/api.php");
    req.setRequestHeader("Content-Type", "application/json");

    req.onload = () => {
        const json = JSON.parse(req.responseText);
        console.log(json);

        if (json.status == "success") {
            toggleSave(false);
            const catUpdate = json.updated.category;
            const tagsUpdate = json.updated.tag;

            if (catUpdate) 
                localStorage.setItem("category", json.data.category);
            
            if (tagsUpdate) 
                localStorage.setItem("tags", json.data.tag);
        }
        else alert("Something went wrong");
    };

    const data = {
        "key" : api,
        "type" : "update",
        "category" : categoryValue,
        "tags" : tagValue
    }

    req.send(JSON.stringify(data));
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

function toggleSave(bool) {
    const btn = document.getElementById('save-button');
    if (bool) {
        btn.style.pointerEvents = 'auto';
    }
    else {
        btn.style.pointerEvents = 'none';
    }
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
