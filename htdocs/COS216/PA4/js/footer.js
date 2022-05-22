const chk = document.getElementById('chk');
const body = document.getElementById('body');
const header = document.querySelector('.nav-style');
const profile = header.children[1];

let theme = localStorage.getItem('theme');
if (theme == 'dark') {
    chk.checked = true;
    body.classList.replace('light', 'dark');
}

let loggedIn = profile.classList.contains('profile') ? true : false;

chk.addEventListener('change',function(){
    if (chk.checked == true) {
        body.classList.replace('light', 'dark');

        if (loggedIn) localStorage.setItem('theme', 'dark');
    }
    else {
        body.classList.replace('dark', 'light');

        if (loggedIn) localStorage.setItem('theme', 'light');
    }
})
