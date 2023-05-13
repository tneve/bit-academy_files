const uren = [
    {
        bellen: 3,
        emails: 4,
        meetings: 1,
    },
    {
        bellen: 3,
        emails: 3,
        meetings: 2,
    },
    {
        bellen: 3,
        emails: 5,
    },
    {
        bellen: 2,
        emails: 4,
        meetings: 2,
    },
    {
        bellen: 3,
        emails: 2,
    },
];

const urenTotaal = {
    bellen: 0,
    emails: 0,
    meetings: 0,
};

let urenTot = 0;

for (let i = 0; i < uren.length; i++) {
    for (const [key, value] of Object.entries(uren[i])) {
        urenTotaal[key] += value;
    }
}

for (const [key, value] of Object.entries(urenTotaal)) {
    console.log(`Totaal ${key}: ${value} uur`);
    urenTot += value;
}
console.log(`Totaal: ${urenTot} uur`);