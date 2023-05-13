function logError(x) {
    console.log(`Er is een error gevonden!`);
    console.log(`ErrorType: ${x.name}`);
    console.log(`Message: ${x.message}`);
}

function optellen(x) {
    const getal = 0;
    getal = getal + x;
}
function check(x) {
    if (x < 0) {
        throw new RangeError("Getal moet groter zijn dan 0");
    }
}
function Fun() {
    const a = 5;
    const b = -5;
    a = 3 * b;
}


try {
    check(-5);
} catch (e) {
    logError(e);
}

try {
    Fun();
} catch (e) {
    logError(e);
}
try {
    missendeFunctie();
} catch (e) {
    logError(e);
}
