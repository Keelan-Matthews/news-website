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

    for (let article of articles) {
        let info = json.results[Math.floor(Math.random()*json.num_results)];

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

        let published = article.querySelector('.published');

        const formatter = new Intl.DateTimeFormat("en-SA", {
            year: "numeric",
            month: "long",
            day: "2-digit"
        })
        const trunc = info.published_date.substring(0,info.published_date.indexOf("T"));
        const fDate = new Date(trunc);
        published.innerHTML += formatter.format(fDate);
    }
}