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

personen.forEach(element => {
    let h1 = document.createElement('h1');
    document.body.append(h1);
    h1.innerHTML = element.naam;
    let p1 = document.createElement('p');
    document.body.append(p1);
    p1.innerHTML = `Leeftijd: ${element.leeftijd}`;
    let p2 = document.createElement('p');
    document.body.append(p2);
    p2.innerHTML = `Hobby: ${element.hobby}`;
    let p3 = document.createElement('p');
    document.body.append(p3);
    p3.innerHTML = "Mag rijden: ";
    if (element.leeftijd >= 17) { p3.innerHTML += "JA"; } else { p3.innerHTML += "NEE"; }
});