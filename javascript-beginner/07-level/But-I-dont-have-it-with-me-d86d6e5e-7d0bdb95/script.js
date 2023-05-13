let leeftijdLeonie = parseInt(document.querySelector('#leeftijdLeonie').innerHTML, 10);
let leeftijdMustafa = parseInt(document.querySelector('#leeftijdMustafa').innerHTML, 10);

let naamLeonie = document.querySelector("#naamLeonie");
let naamMustafa = document.querySelector("#naamMustafa");

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