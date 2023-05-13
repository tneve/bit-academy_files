function Collatz(getal) {
    let i;
    for (i = 0; getal != 1; i++) {
        if (getal % 2 == 0) {
            getal *= 0.5;
        } else {
            getal = 3 * getal + 1;
        }
    } return i;
}

let x = parseInt(process.argv[2], 10);

for (let i = 1; i <= 3; i++) {
    x = Collatz(x);
} console.log(x);


