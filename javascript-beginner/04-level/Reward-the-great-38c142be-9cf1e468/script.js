let rating = parseInt(process.argv[2], 10);
let naturePerc = parseInt(process.argv[3], 10);
let autoRoad = parseInt(process.argv[4], 10);

console.log(`rating: ${rating} sterren, natuurgebied: ${naturePerc}%, autowegdek: ${autoRoad} km`);

if (rating >= 3) {
    if (naturePerc > 25) {
        console.log(`belastingkorting voor de inwoners`);
    } else {
        console.log(`subsidie voor aanleg van meer natuur`);
    }
} else if (autoRoad > 200) {
    console.log(`subsidie voor ombouwen autoweg naar fietsstraat`);
} else {
    console.log(`subsidie voor afvalinzameling`);
}
