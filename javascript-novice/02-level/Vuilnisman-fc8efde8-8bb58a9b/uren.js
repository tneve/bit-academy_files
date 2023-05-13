const uren = [
    [7, 4, 6, 8],
    [6, 8, 5],
    [5, 5, 8, 7, 6],
    [8, 6, 5, 8, 5],
];
const urenTotaalWeek = [0, 0, 0, 0];
let urenTotaal = 0;

for (let i = 0; i < uren.length; i++) {
    for (let j = 0; j < uren[i].length; j++) {
        urenTotaalWeek[i] += uren[i][j];
        urenTotaal += uren[i][j];
    }
    console.log(`Week ${i + 1}:  ${urenTotaalWeek[i]} uur`);
}

console.log(`Totaal: ${urenTotaal} uur`);