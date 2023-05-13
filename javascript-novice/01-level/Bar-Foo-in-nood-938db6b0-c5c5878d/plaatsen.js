const inwonersaantallen = [10234, 34567, 12354, "29567", 55555, "23412", 52978];
const postcodes = ["10234", "10101", "34633", "29567", "55555", "23412", "33669"];
const plaatsnamen = [
    "Foobarstad",
    "Nieuw Foo",
    "Bardorp",
    "Barfoo",
    "Prodstad",
    "Developerdorp",
    "Nieuw developerdorp",
];
console.log('De plaatsen met foutieve inwonersaantallen zijn:');
for (let i = 0; i < plaatsnamen.length; i++) {
    if (inwonersaantallen[i] === postcodes[i]) {
        console.log(plaatsnamen[i]);
    }
}
let pincode = 0;
for (let i = 0; i < postcodes.length; i++) {
    pincode += parseInt(postcodes[i], 10);
}
console.log(`De pincode is ${pincode}`);
