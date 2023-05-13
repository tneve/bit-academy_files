let Nederland = process.argv[2];
let Duitsland = process.argv[3];
let Frankrijk = process.argv[4];
let result = Nederland == Duitsland;
console.log(`Nederland en Duitsland zijn om hetzelfde bekend: ${result}`);
result = Nederland == Frankrijk;
console.log(`Nederland en Frankrijk zijn om hetzelfde bekend: ${result}`);
result = Frankrijk != Duitsland;
console.log(`Frankrijk en Duitsland zijn niet om hetzelfde bekend: ${result}`);
