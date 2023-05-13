const urlNSapi = 'https://gateway.apiportal.ns.nl/reisinformatie-api/api/v2';
const treinStations = [
    ["Delft", 8400170],
    ["Amsterdam", 8400058],
    ["Alkmaar", 8400050],
    ["Deventer", 8400173],
    ["Venlo", 8400644],
    ["Utrecht", 8400621],
];

const headers = {
    "Ocp-Apim-Subscription-Key": "[Here comes your personal Key]",
    "Content-Type": "application/json",
};

let container = document.getElementsByClassName('persons')[0];
let countries;
let people;
const reqUrl = 'https://randomuser.me/api/?results=6';
async function loadJSON(url) {
    const res = await fetch(url);
    const x = await res.json();
    return x;
}

loadJSON(reqUrl)
    .then(data => {
        people = data;
    })
    .then(() => {
        let results = people.results;
        for (let i = 0; i < results.length; i++) {
            let div = document.createElement('div');
            div.classList.add('personalia');
            container.append(div);
            let span1 = document.createElement('span');
            span1.classList.add('name');
            span1.append(`${results[i].name.first} ${results[i].name.last}`);
            div.append(span1);
            let img1 = document.createElement('img');
            img1.src = `${results[i].picture.medium}`;
            div.append(img1);
            let span2 = document.createElement('span');
            span2.classList.add('email');
            span2.append(`${results[i].email}`);
            div.append(span2);
            let country = results[i].location.country;
            let flagUrl = `https://restcountries.com/v3.1/name/${country}`;
            let flag = loadJSON(flagUrl)
                .then((data) => {
                    flag = data[0].flags.png;
                    let img2 = document.createElement('img');
                    img2.src = flag;
                    img2.classList.add('flag');
                    div.append(img2);
                });
            let visiting = treinStations[i][0];
            let span3 = document.createElement('span');
            span3.classList.add('visiting');
            span3.append(`Op bezoek in ${visiting}`);
            div.append(span3);
            let dest = fetch(`${urlNSapi}/departures?uicCode=${treinStations[i][1]}`, {
                method: "GET",
                headers: headers,
            })
                .then(res => res.json())
                .then(data => {
                    dest = data.payload.departures[0].direction;
                    let p1 = document.createElement('p');
                    p1.classList.add('dest');
                    p1.append(`Reist naar ${dest}`);
                    div.append(p1);
                });
        }
    });





