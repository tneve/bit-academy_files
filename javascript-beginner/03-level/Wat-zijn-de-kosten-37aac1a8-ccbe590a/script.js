let administratie = parseInt(process.argv[2], 10);
let infrasctructuur = parseInt(process.argv[3], 10);
let evenementen = parseInt(process.argv[4], 10);
let totaal = parseInt(process.argv[5], 10);
let admiAndInfra = administratie + infrasctructuur;
let overig = totaal - administratie - infrasctructuur - evenementen;
console.log(`Aan administratie en infrastructuur is ${admiAndInfra} miljoen uitgegeven.`);
console.log(`De overige kosten zijn ${overig} miljoen.`);
console.log(`Administratie was goed voor ${(100 * administratie) / totaal}% van de uitgaven.`);