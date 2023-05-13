let x = 0;
let dieselVerboden = process.argv[2];
let afvalGescheiden = process.argv[3];
let natuurGebied = parseInt(process.argv[4], 10);

if (dieselVerboden == `nee`) {
    x++;
}
if (afvalGescheiden == `nee`) {
    x++;
}
if (natuurGebied <= 25) {
    x++;
}

if (x == 0) {
    console.log(`Het is een milieuvriendelijke stad`);
} else if (x == 3) {
    console.log(`De stad moet omgevormd worden`);
} else {
    console.log(`De stad heeft nog ${x} ster(ren) nodig om milieuvriendelijk te zijn`);
}

