let bedrag = parseInt(process.argv[2], 10);

const biljetten = [50, 20, 10, 5];
const aantalBiljetten = [0, 0, 0, 0];

for (let i = 0; i < biljetten.length; i++) {
    while (bedrag >= biljetten[i]) {
        aantalBiljetten[i]++;
        bedrag -= biljetten[i];
    }
}
for (let i = 0; i < biljetten.length; i++) {
    if (aantalBiljetten[i] > 0) {
        console.log(`${aantalBiljetten[i]} x \u20AC${biljetten[i]}`);
    }
}
