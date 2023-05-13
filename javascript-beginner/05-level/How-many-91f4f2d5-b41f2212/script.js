let boodschappen = process.argv;
boodschappen.shift();
boodschappen.shift();
let count = 0;
for (let i = 0; i < boodschappen.length; i++) {
    if (boodschappen[i] == `havermelk`) {
        count++;
    }
}
console.log(`Aantal havermelk: ${count}`);