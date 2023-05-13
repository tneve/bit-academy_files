const secretCode = 123752;
let enteredCode = parseInt(process.argv[2], 10);
let jobFunction = process.argv[3];
let day = parseInt(process.argv[4], 10);

if ((enteredCode == secretCode) && ((jobFunction == `bestuur`) || (jobFunction == `administratief medewerker`))) {
    console.log(`Toegang verleend`);
} else if (day <= 4) {
    console.log(`Verkeerde pincode of je hebt niet de juiste rechten`);
} else {
    console.log(`Veiligheidsdiensten worden ingeschakeld`);
}
