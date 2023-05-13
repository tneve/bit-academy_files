function logError(e) {
    console.log(`Er is een error gevonden!`);
    console.log(`ErrorType: ${e.name}`);
    console.log(`Message: ${e.message}`);
}

let a = [4, 5];
let b = "Kees";
try {
    let c = a(b);
} catch (e) {
    logError(e);
}

try {
    d = missendeFunctie();
} catch (e) {
    logError(e);
}

try {
    a.length = b;
} catch (e) {
    logError(e);
}