let req = new XMLHttpRequest();
let json;

req.open("get", "http://api.mediastack.com/v1/news?access_key=ba84a19f3906712a8b29ef6bf3717b56&languages=en&countries=za&sources=-News24&offset=2");
req.onload = () => {
    json = JSON.parse(req.responseText);
    console.log(json);
    populateArticle(json);
};

req.send();

function populateArticle(json) {
    const articles = document.getElementsByClassName('sa-article');

    let i = 0;
    for (let article of articles) {
        let info = json.data[i++];

        article.setAttribute('href', info.url);
        article.setAttribute('title', info.title + " (0★)");
        
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

        const formatter = new Intl.DateTimeFormat("en-SA", {
            year: "numeric",
            month: "long",
            day: "2-digit"
        })
        const trunc = info.published_at.substring(0,info.published_at.indexOf("T"));
        const fDate = new Date(trunc);
        date.innerHTML += formatter.format(fDate);
    }
}