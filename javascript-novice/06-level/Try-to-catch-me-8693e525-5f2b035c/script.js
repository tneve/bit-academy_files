function dagVanDeWeek(dagGetal) {
    let dagen = [
        "Maandag",
        "Dinsdag",
        "Woensdag",
        "Donderdag",
        "Vrijdag",
        "Zaterdag",
        "Zondag",
    ];
    if ((dagGetal < 0) || (dagGetal > dagen.length - 1)) {
        throw new Error('Geen geldige dag');
    } else {
        return dagen[dagGetal];
    }
}
// TODO: genereer een Error met de tekst "Geen geldige dag!" als de dag niet kan worden opgehaald, geef anders de dag terug.



const testGetallen = [3, 7, 2, 8, 4];
testGetallen.forEach((getal) => {
    try {
        console.log(dagVanDeWeek(getal)); // TODO: vang mogelijke errors correct op
    } catch (error) {
        console.log(error.message);
    }
});