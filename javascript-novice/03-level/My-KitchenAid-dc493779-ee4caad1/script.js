function convertToLiter(x) {
    let y = 1;
    switch (x) {
        case ('dl'):
            y = 0.1;
            break;
        case ('cl'):
            y = 0.01;
            break;
        case ('ml'):
            y = 0.001;
            break;
        default:
            y = 1;
    }
    return y;
}
function convertToDeciLiter(x) {
    let y = 1;
    switch (x) {
        case ('l'):
            y = 10;
            break;
        case ('cl'):
            y = 0.1;
            break;
        case ('ml'):
            y = 0.01;
            break;
        default:
            y = 1;
    }
    return y;
}
function convertToCentiLiter(x) {
    let y = 1;
    switch (x) {
        case ('l'):
            y = 100;
            break;
        case ('dl'):
            y = 10;
            break;
        case ('ml'):
            y = 0.1;
            break;
        default:
            y = 1;
    }
    return y;
}
function convertToMilliLiter(x) {
    let y = 1;
    switch (x) {
        case ('l'):
            y = 1000;
            break;
        case ('dl'):
            y = 100;
            break;
        case ('cl'):
            y = 10;
            break;
        default:
            y = 1;
    }
    return y;
}
function convert(a, b) {
    let z;
    switch (b) {
        case 'l':
            z = convertToLiter(a);
            break;
        case 'dl':
            z = convertToDeciLiter(a);
            break;
        case 'cl':
            z = convertToCentiLiter(a);
            break;
        case 'ml':
            z = convertToMilliLiter(a);
            break;
        default:
            break;
    }
    return z;
}


let invoer = document.getElementById('invoer');
let startEenheid = document.getElementById('startEenheid');
let convertEenheid = document.getElementById('convertEenheid');
let output = document.getElementById('output');

invoer.addEventListener('change', function () {
    let result = parseFloat(invoer.value, 10) * convert(startEenheid.value, convertEenheid.value);
    output.innerHTML = `${result} ${convertEenheid.value}`;
});
startEenheid.addEventListener('change', function () {
    let result = parseFloat(invoer.value, 10) * convert(startEenheid.value, convertEenheid.value);
    output.innerHTML = `${result} ${convertEenheid.value}`;
});
convertEenheid.addEventListener('change', function () {
    let result = parseFloat(invoer.value, 10) * convert(startEenheid.value, convertEenheid.value);
    output.innerHTML = `${result} ${convertEenheid.value}`;
});