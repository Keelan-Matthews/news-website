const form = document.getElementById('form');
const iName = document.getElementById('nameInput');
const surname = document.getElementById('surnameInput');
const email = document.getElementById('emailInput');
const password = document.getElementById('passwordInput');

form.addEventListener('submit', (e) => {
    const proceed =checkInputs();

    if (!proceed) 
        e.preventDefault();
});

function checkInputs() {
    const nameValue = iName.value.trim();
    const surnameValue = surname.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    let valid = true;

    if(nameValue === '') {
        setErrorFor(iName, 'Name cannot be blank');
        valid = false;
    } else if(nameValue.length > 20) {
        setErrorFor(iName, 'Cannot be longer than 20 characters');
        valid = false;
    } else if (!isWord(nameValue)) {
        setErrorFor(iName, 'Can only contain characters');
        valid = false;
    } else {
        setSuccessFor(iName);
    }

    if(surnameValue === '') {
        setErrorFor(surname, 'Surname cannot be blank');
        valid = false;
    } else if (!isWord(surnameValue)) {
        setErrorFor(surname, 'Can only contain characters');
        valid = false;
    } else if (surnameValue.length > 30) {
        setErrorFor(surname, 'Cannot be longer than 30 characters');
        valid = false;
    } else {
        setSuccessFor(surname);
    }

    if(emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
        valid = false;
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Email is invalid');
        valid = false;
    } else {
        setSuccessFor(email);
    }

    if(passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
        valid = false;
    } else if (passwordValue.length < 8) {
        setErrorFor(password, 'Must be longer than 7 characters');
        valid = false;
    } else if (!isStrongPassword(passwordValue)) {
        setErrorFor(password, 'Must contain characters, digits and special characters');
        valid = false;
    } else {
        setSuccessFor(password);
    }

    return valid;
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    small.innerText = message;
    formControl.className = 'form-control error';
}

function setSuccessFor(input) {
    const formControl = input.parentElement;

    formControl.className = 'form-control success';
}

function isEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return email.toLowerCase().match(re);
}

function isStrongPassword(password) {
    const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
    return password.match(re);
}

function isWord(word) {
    return /^[a-zA-Z]+$/.test(word);
}