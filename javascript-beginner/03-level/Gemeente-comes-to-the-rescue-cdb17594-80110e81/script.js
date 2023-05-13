let kosten = parseInt(process.argv[2], 10);
let kostenStad = kosten % 3;
let kostenGemeente = kosten - kostenStad;
console.log(`In totaal is er ${kosten} miljoen uitgegeven.`);
console.log(`De stad betaalt ${kostenStad} miljoen.`);
console.log(`De gemeente betaalt ${kostenGemeente} miljoen.`);
