let taken = [];
let checkVersheid = parseInt(process.argv[2], 10);
let bakBrood = parseInt(process.argv[3], 10);
let maakSchoon = parseInt(process.argv[4], 10);
let urenVrij = 0;
for (let u = 8; u < 20; u++) {
    taken[u] = '';
    if ((u - 8) % checkVersheid == 0) {
        taken[u] += ` versheid groenten en fruit checken`;
    }
    if ((u - 8) % bakBrood == 0) {
        taken[u] += ` nieuw brood bakken`;
    }
    if ((u - 8) % maakSchoon == 0) {
        taken[u] += ` vloer schoonmaken`;
    }
    if (taken[u] == '') {
        taken[u] = ' vrij';
        urenVrij++;
    }
}
for (let u = 8; u < 20; u++) {
    console.log(`${u}:00 ${taken[u]}`);
}
console.log(`Uren vrij: ${urenVrij}`);


