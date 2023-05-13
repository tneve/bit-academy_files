let container = document.getElementsByClassName('persons')[0];

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
            let img = document.createElement('img');
            img.src = `${results[i].picture.medium}`;
            div.append(img);
            let span2 = document.createElement('span');
            span2.classList.add('email');
            span2.append(`${results[i].email}`);
            div.append(span2);
            let span3 = document.createElement('span');
            span3.classList.add('country');
            span3.append(`${results[i].location.country}`);
            div.append(span3);
        }
    });