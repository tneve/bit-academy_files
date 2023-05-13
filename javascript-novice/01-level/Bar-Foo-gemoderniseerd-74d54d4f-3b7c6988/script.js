const gemeente = {
    naam: 'Bar',
    hoofdstad: 'Foobarstad',
    steden: [
        {
            postcode: '10234',
            naam: 'Foobarstad',
            inwoners: 10234,
            burgemeester: {
                naam: 'nhoJ',
                aangetreden: 2020,
            },
        },

        {
            postcode: '10101',
            naam: 'Nieuw Foo',
            inwoners: 34567,
            burgemeester: {
                naam: 'enaJ',
                aangetreden: 2019,
            },
        },

        {
            postcode: '34633',
            naam: 'Bardorp',
            inwoners: 12354,
            burgemeester: {
                naam: 'hargaZ',
                aangetreden: 2020,
            },
        },

        {
            postcode: '29567',
            naam: 'Barfoo',
            inwoners: 1376,
            burgemeester: {
                naam: 'leraK',
                aangetreden: 2022,
            },
        },

        {
            postcode: '55555',
            naam: 'Prodstad',
            inwoners: 55555,
            burgemeester: {
                naam: 'iL',
                aangetreden: 2018,
            },
        },

        {
            postcode: '23412',
            naam: 'Developerdorp',
            inwoners: 3,
            burgemeester: {
                naam: 'nalA',
                aangetreden: 2021,
            },
        },

        {
            postcode: '33669',
            naam: 'Nieuw developerdorp',
            inwoners: 52978,
            burgemeester: {
                naam: 'regsdE',
                aangetreden: 2020,
            },
        },
    ],
};

function reverseString(string) {
    let newString = '';
    for (let j = string.length - 1; j >= 0; j--) {
        newString += string[j];
    } return newString;
}

let stad = [];
let inwonersaantal = [];
let burgemeester = [];
let postcode = [];

for (let i = 0; i < gemeente.steden.length; i++) {
    stad[i] = gemeente.steden[i].naam;
    inwonersaantal[i] = gemeente.steden[i].inwoners;
    burgemeester[i] = reverseString(gemeente.steden[i].burgemeester.naam);
    postcode[i] = gemeente.steden[i].postcode;
}
for (let i = 1; i <= 7; i++) {
    document.getElementById(`naam${i}`).innerHTML = stad[i - 1];
    document.getElementById(`inwonersaantal${i}`).innerHTML = inwonersaantal[i - 1];
    document.getElementById(`burgemeester${i}`).innerHTML = burgemeester[i - 1];
    document.getElementById(`postcode${i}`).innerHTML = postcode[i - 1];
}
