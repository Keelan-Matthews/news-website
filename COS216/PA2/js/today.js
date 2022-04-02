let req = new XMLHttpRequest();
let json;

req.open("get", "https://api.nytimes.com/svc/topstories/v2/home.json?api-key=Lfw4TAMUC0xeMdySa4x3z2aqqrJfxN0s");
req.onload = () => {
    json = JSON.parse(req.responseText);
    console.log(json);
    populateArticle(json);
};

req.send();

function populateArticle(json) {
    const articles = document.getElementsByClassName('today-article');

    let i = 0;
    for (let article of articles) {
        let info = json.results[i++];

        article.setAttribute('href', info.url);
        
        let title = article.querySelector('.article-title');
        title.innerHTML = info.title;

        let author = article.querySelector('.author');
        author.innerHTML = info.byline;

        if (author.innerHTML == "")
            author.innerHTML = "By anonymous";

        let abstract = article.querySelector('.description');
        abstract.innerHTML = info.abstract;

        let image = article.querySelector('.article-img');

        image.setAttribute('src', info.multimedia[1].url);
        image.setAttribute('alt', info.title);

        let date = article.querySelector('.published');

        let section = article.querySelector('.section');
        section.innerHTML = info.section;

        let subsection = article.querySelector('.sub-section');
        if (info.subsection == "") 
            subsection.style.display = 'none';
        else 
            subsection.innerHTML = info.subsection;
    }
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

function filter() {
    const articles = document.getElementsByClassName('today-article');
    const keyword = document.getElementById('dropdown-category');

    for (let article of articles) {

        if (keyword.options[keyword.selectedIndex].value == 'all') {
                article.classList.remove('hide');
        }
        else {
            let category = article.querySelector('.section').innerHTML;

            const isFiltered = (category.toLowerCase() == keyword.options[keyword.selectedIndex].value.toLowerCase());
            article.classList.toggle('hide', !isFiltered);
        }
    }    
}

function tagFilter() {
    const articles = document.getElementsByClassName('today-article');
    const keyword = document.getElementById('dropdown-tags');

    for (let article of articles) {
        if (keyword.options[keyword.selectedIndex].value == 'all') {
                article.classList.remove('hide');
        }
        else {
            let category = article.querySelector('.sub-section').innerHTML;

            const isFiltered = (category.toLowerCase() == keyword.options[keyword.selectedIndex].value.toLowerCase());
            article.classList.toggle('hide', !isFiltered);
        }
    }    
}