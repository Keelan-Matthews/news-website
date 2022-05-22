let req = new XMLHttpRequest();
let json;
let events;

const api = localStorage.getItem('api');

req.open("POST", "https://wheatley.cs.up.ac.za/u21549967/api.php");
req.setRequestHeader("Content-Type", "application/json");

const data = {
  "key" : api,
  "type" : "info",
  "return" : ["*"]
}

req.send(JSON.stringify(data));

req.onload = () => {
    json = JSON.parse(req.responseText);
    events = json.data;

    initButtons();
    load();
};

let nav = 0;
let clicked = null;

const weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
const calendar = document.getElementById('calendar');

function load() {
    const dt = new Date();

    if (nav !== 0) {
        dt.setMonth(new Date().getMonth() + nav);
    }

    const day = dt.getDate();
    const month = dt.getMonth();
    const year = dt.getFullYear();

    const firstDayOfMonth = new Date(year, month, 1);
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    const dateString = firstDayOfMonth.toLocaleDateString('en-us', {
      weekday: 'long',
      year: 'numeric',
      month: 'numeric',
      day: 'numeric'
    });

    const paddingDays = weekdays.indexOf(dateString.split(', ')[0]);

    document.getElementById('monthDisplay').innerText = `${dt.toLocaleDateString('en-us', { month: 'long' })}`;
    document.getElementById('dateDisplay').innerText = `${dateString}`;

    calendar.innerHTML = "";

    for(let i = 1; i <= paddingDays + daysInMonth; i++) {
        const daySquare = document.createElement('div');
        daySquare.classList.add('day');

        const dayString = `${month + 1}/${i - paddingDays}/${year}`;

        if (i > paddingDays) {
            daySquare.innerText = i - paddingDays;
            const dayArticle = events.find(e => formatDate(e.date) === dayString);

            if (i - paddingDays === day && nav === 0) {
                daySquare.id = 'currentDay';
            }

            if (dayArticle) {
              const articleDiv = document.createElement('div');
              articleDiv.classList.add('event');

              const link = document.createElement('a');
              link.innerText = dayArticle.title;
              link.setAttribute("href", dayArticle.url);
              link.setAttribute("target", "_blank");
              articleDiv.appendChild(link);
              daySquare.appendChild(articleDiv);
            }
        } else {
            daySquare.classList.add('padding');
        }

        calendar.appendChild(daySquare);
    }
}

function formatDate(date) {
  const fd = new Date(date);

  const day = fd.getDate();
  const month = fd.getMonth();
  const year = fd.getFullYear();

  return `${month + 1}/${day}/${year}`;
}

function initButtons() {
    document.querySelector('.next').addEventListener('click', () => {
      nav++;
      load();
    });

    document.querySelector('.prev').addEventListener('click', () => {
      nav--;
      load();
    });
}

function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}