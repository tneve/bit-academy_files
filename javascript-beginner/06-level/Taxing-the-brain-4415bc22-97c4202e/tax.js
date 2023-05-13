function belastingTeBet(inkomen) {
    let belasting = 0;
    let belastInk = inkomen;
    if (belastInk <= 10000 && belastInk > 0) {
        belasting = 0;
    } else {
        belastInk -= 10000;
        if (belastInk <= 20000 && belastInk > 0) {
            belasting += 0.2 * belastInk;
        } else {
            belastInk -= 20000;
            belasting += 4000;
            if (belastInk <= 40000 && belastInk > 0) {
                belasting += 0.5 * belastInk;
            } else {
                belastInk -= 40000;
                belasting += 20000;
                belasting += 0.9 * belastInk;
            }
        }
    }
    return belasting;
}

function belastingPerc(inkomen) {
    let belPerc = parseFloat((belastingTeBet(inkomen) / inkomen) * 100).toFixed(2);
    return belPerc;
}

if (process.argv.length == 2) {
    let ink = 0;
    for (let i = 90000; i < 100000; i++) {
        if (parseFloat((belastingTeBet(i) / i)) >= 0.50) { break; }
        ink = i;
    } console.log(`Bij inkomen ${ink + 1} betaal je 50% belasting`);
} else {
    let x = parseFloat(process.argv[2]);
    console.log(`Income: ${x} ${belastingTeBet(x)} ${belastingPerc(x)}%`);
}
