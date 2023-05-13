const pi = 3.14;



let btnBereken = document.getElementById('bereken');

btnBereken.addEventListener('click', berekenOmtrek);

function berekenOmtrek() {
    let diameter = document.getElementById('diameter').value;
    let omtrek = pi * diameter;
    let p = document.getElementById('p');
    p.innerHTML = "De omtrek is " + omtrek;
}



