let cookieBanner = document.getElementById("cookie-banner");
let accept = document.getElementById("accept-knop");
let reject = document.getElementById("reject-knop");

accept.addEventListener('click', function () {
    cookieBanner.innerHTML = "<p>Bedankt voor je toestemming!</p>";
});
reject.addEventListener('click', function () {
    cookieBanner.innerHTML = "<p>Sad..... :( </p>";
});


