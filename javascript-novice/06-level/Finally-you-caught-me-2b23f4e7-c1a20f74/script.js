let div = document.createElement('div');
document.body.appendChild(div);

function dagVanDeWeek(dagGetal) {
    let dagen = [
        "Maandag",
        "Dinsdag",
        "Woensdag",
        "Donderdag",
        "Vrijdag",
        "Zaterdag",
        "Zondag",
    ];
    if ((dagGetal < 0) || (dagGetal > dagen.length - 1)) {
        throw new Error('Onbekend');
    } else {
        return dagen[dagGetal];
    }
}

const testGetallen = [3, 7, 2, 8, 4];
testGetallen.forEach((getal) => {
    let x = "";
    try {
        x = (dagVanDeWeek(getal));
    } catch (error) {
        x = error.message;
    } finally {
        let p = document.createElement('p');
        div.appendChild(p);
        p.innerHTML = x;
        if (x == 'Onbekend') {
            p.style.color = 'red';
        } else {
            p.style.color = 'green';
        }
    }
});

