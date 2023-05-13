let people;
let container = document.getElementById('container');

async function loadJSON(url) {
    const res = await fetch(url);
    const x = await res.json();
    return x;
}

loadJSON('people.json').then(data => {
    people = data;
})
    .then(() => {
        console.log(people);
        for (let i = 0; i < people.length; i++) {
            let div = document.createElement('div');
            container.append(div);
            for (const [key, value] of Object.entries(people[i])) {
                let span = document.createElement('span');
                span.append(value);
                div.append(span);
            }
        }
        let div = document.createElement('div');
        container.prepend(div);
        for (const [key, value] of Object.entries(people[0])) {
            let span = document.createElement('span');
            span.append(key);
            div.append(span);
        }
    });
