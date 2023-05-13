let bedrag = parseInt(process.argv[2], 10);
let dag = parseInt(process.argv[3], 10);
switch (dag) {
    case 1:
        bedrag *= 0.98;
        break;
    case 2:
        bedrag *= 0.97;
        break;
    case 3:
        bedrag *= 0.96;
        break;
    case 4:
        bedrag *= 0.995;
        break;
    case 5:
        bedrag *= 0.985;
        break;
    case 6:
        bedrag *= 0.95;
        break;
    default:
        console.log(`Geen korting`);
}
console.log(`Totaalbedrag is ${bedrag}`);