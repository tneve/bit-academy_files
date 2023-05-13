const pi = 3.14;

let btnBereken = document.getElementById('bereken');

btnBereken.addEventListener('click', calc);

function calc() {
    let diameter = document.getElementById('diameter').value;
    let omtrek = pi * diameter;
    let oppervlakte = pi * diameter * diameter * 0.25;
    let p = document.getElementById('p');
    p.innerHTML = "De omtrek is " + omtrek + "<br>"
        + "De oppervlakte is " + oppervlakte.toFixed(2);
}

let dt = new Date();
let time = document.getElementById('time');
let tHours = dt.getHours();
let tMinutes = dt.getMinutes();
let tSeconds = dt.getSeconds();
let t = tHours + ":" + tMinutes + ":" + tSeconds;
time.innerHTML = "Het is nu " + t;


