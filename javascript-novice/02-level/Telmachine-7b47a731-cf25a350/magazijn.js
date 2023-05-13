const magazijn = {
    borden: 42,
    glazen: 57,
    messen: 85,
    vorken: 96,
    lepels: 103,
};

const verkocht = [
    "lepel", "vork", "vork", "bord",
    "lepel", "mes", "glas", "glas",
    "bord", "lepel", "lepel", "bord",
    "glas", "bord", "mes", "bord",
    "lepel", "vork", "glas", "bord",
    "vork", "vork",
];

for (let i = 0; i < verkocht.length; i++) {
    switch (verkocht[i]) {
        case "bord":
            magazijn.borden--;
            break;
        case "glas":
            magazijn.glazen--;
            break;
        case "mes":
            magazijn.messen--;
            break;
        case "vork":
            magazijn.vorken--;
            break;
        case "lepel":
            magazijn.lepels--;
            break;
        default:
            console.log("Er is niets verkocht");
    }
}

console.log(JSON.stringify(magazijn));