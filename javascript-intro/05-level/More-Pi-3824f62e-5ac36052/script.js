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



