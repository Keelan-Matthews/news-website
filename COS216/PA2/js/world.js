let req = new XMLHttpRequest();
let json;

req.open("get", "https://api.nytimes.com/svc/search/v2/articlesearch.json?q=&page=0&fq=section_name:(\"world\")&sort=newest&api-key=zYOvG3v0vRAlWHzoumT3nWxVhVYuEaGn");
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
        let info = json.response.docs[i++];

        article.setAttribute('href', info.web_url);
        
        let title = article.querySelector('.article-title');
        title.innerHTML = info.headline.main;

        let author = article.querySelector('.author');
        author.innerHTML = info.byline.original;

        if (info.byline.original == "")
            author.innerHTML = "By anonymous";

        let abstract = article.querySelector('.description');
        abstract.innerHTML = info.lead_paragraph;

        let image = article.querySelector('.article-img');

        if (info.multimedia[0] != null)
            image.setAttribute('src', "https://static01.nyt.com/"+ info.multimedia[0].url);
        image.setAttribute('alt', info.abstract);

        let section = article.querySelector('.section');
        section.innerHTML = info.section_name;

        let subsection = article.querySelector('.sub-section');
        if (info.subsection_name == null) 
            subsection.style.display = 'none';
        else 
            subsection.innerHTML = info.subsection_name;

        let published = article.querySelector('.published');

        const formatter = new Intl.DateTimeFormat("en-SA", {
            year: "numeric",
            month: "long",
            day: "2-digit"
        })
        const trunc = info.pub_date.substring(0,info.pub_date.indexOf("T"));
        const fDate = new Date(trunc);
        published.innerHTML += formatter.format(fDate);
    }
}