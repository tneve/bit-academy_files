let leeftijdLeonie = parseInt(document.getElementById('leeftijdLeonie').innerHTML, 10);
let leeftijdMustafa = parseInt(document.getElementById('leeftijdMustafa').innerHTML, 10);

let naamLeonie = document.getElementById("naamLeonie");
let naamMustafa = document.getElementById("naamMustafa");

if (leeftijdLeonie < 17) {
    naamLeonie.innerHTML += ` moet nog even wachten!`;
} else {
    naamLeonie.innerHTML += ' mag beginnen met rijlessen';
}

if (leeftijdMustafa < 17) {
    naamMustafa.innerHTML += ` moet nog even wachten!`;
} else {
    naamMustafa.innerHTML += ' mag beginnen met rijlessen';
}