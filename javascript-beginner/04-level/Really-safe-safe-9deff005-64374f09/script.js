const secretCode = 123752;
let failedAttempts = parseInt(process.argv[2], 10);
let enteredCode = parseInt(process.argv[3], 10);
let jobFunction = process.argv[4];
let day = parseInt(process.argv[5], 10);
let hour = parseInt(process.argv[6], 10);
console.log(`#fouten: ${failedAttempts}, pin: ${enteredCode}, functie: ${jobFunction}, dag: ${day}, tijd: ${hour}`);

if (failedAttempts < 5) {
    if ((jobFunction == 'bestuur') ||
        ((jobFunction == 'administratief medewerker') && (day <= 4) && (hour >= 9) && (hour <= 17))) {
        if (enteredCode == secretCode) {
            console.log(`Kluis opent`);
            if (jobFunction != 'bestuur') {
                console.log(`sms naar bestuur`);
            }
        } else {
            console.log(`Verkeerde pincode`);
        }
    } else if ((day <= 4) && (hour >= 9) && (hour <= 17)) {
        console.log(`Alarm gaat af`);
    } else {
        console.log(`Stil alarm gaat af`);
    }
} else {
    console.log(`Kluis is geblokkeerd`);
}