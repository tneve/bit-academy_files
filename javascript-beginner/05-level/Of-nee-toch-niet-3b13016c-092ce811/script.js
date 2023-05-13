let boodschappen = [`spaghetti`, `pesto`, `paprika`];
boodschappen.push(`wc-papier`);
boodschappen[boodschappen.length] = `pompoen`;
console.log(boodschappen);
let removed = boodschappen.pop();
console.log(`${removed} is verwijderd`);
console.log(boodschappen);