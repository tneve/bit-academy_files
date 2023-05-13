let allSpan = document.querySelectorAll('span');
let allH1 = document.querySelectorAll('h1');
let allH2 = document.querySelectorAll('h2');

let leeftijdLeonie = parseInt(allSpan[1].innerHTML, 10);
let leeftijdMustafa = parseInt(allSpan[3].innerHTML, 10);

allH1.forEach(element => {
    element.style = 'text-decoration:underline';
});

allH2.forEach(element => {
    element.style = 'font-style:italic';
});

allSpan.forEach(element => {
    element.style = 'font-size:32px';
});



if (leeftijdLeonie < 16.5) {
    allH1[0].classList.add('wachten');
} else {
    allH1[0].classList.add('starten');
}

if (leeftijdMustafa < 16.5) {
    allH1[1].classList.add('wachten');
} else {
    allH1[1].classList.add('starten');
}