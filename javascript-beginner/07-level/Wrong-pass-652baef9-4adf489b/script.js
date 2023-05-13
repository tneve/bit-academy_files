let allSpan = document.querySelectorAll('span');
console.log(allSpan);
let leeftijdLeonie = parseInt(allSpan[1].innerHTML, 10);
let leeftijdMustafa = parseInt(allSpan[3].innerHTML, 10);

let allH1 = document.querySelectorAll('h1');

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