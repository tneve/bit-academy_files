let cookieBanner = document.getElementById("cookie-banner");
let accept = document.getElementById("accept-knop");
let reject = document.getElementById("reject-knop");

accept.addEventListener('click', () => {
    cookieBanner.innerHTML = "<p>Bedankt voor je toestemming!</p>";
});
reject.addEventListener('click', () => {
    cookieBanner.innerHTML = "<p>Sad..... :( </p>";
});

let body = document.getElementsByTagName('body')[0];
const p = document.createElement('p');
body.prepend(p);
function fillTheP() {
    p.innerHTML = currentTime();
}

function currentTime() {
    let today = new Date();
    let time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    let warning = `Het is ${time}. Tijd voor pauze?`;
    return warning;
}

function showAlert() {
    alert(currentTime());
}

setTimeout(fillTheP, 2000);
setTimeout(() => showAlert(), 4000);




