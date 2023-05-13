const personen = [
    {
        naam: "Mustafa",
        leeftijd: 15,
        hobby: "vissen",
    },
    {
        naam: "Leonie",
        leeftijd: 23,
        hobby: "lezen",
    },
    {
        naam: "Jasper",
        leeftijd: 18,
        hobby: "tuinieren",
    },
];

let div = document.createElement('div');
document.body.append(div);
personen.forEach(element => {
    let magRijden = "NEE";
    if (element.leeftijd >= 17) { magRijden = "JA"; }
    div.innerHTML += `<h1>${element.naam}</h1> 
                    <p>Leeftijd: ${element.leeftijd}</p> 
                    <p>Hobby: ${element.hobby}</p>
                    <p>Mag rijden: ${magRijden}</p>`;
});
