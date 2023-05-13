let inwoners = parseInt(process.argv[2], 10);
let stad;
if (inwoners > 10000) {
    stad = "Mega stad";
} else if (inwoners > 25) {
    stad = "stad";
} else {
    stad = "dorp";
}
console.log(stad);