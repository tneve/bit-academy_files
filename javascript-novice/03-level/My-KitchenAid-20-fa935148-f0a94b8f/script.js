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
let output = document.getElementsByClassName('output');
output = output[0];

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

let body = document.getElementsByTagName('body');
body = body[0];
body.addEventListener('keydown', e => {
    let y = Number(invoer.value);
    switch (e.key) {
        case ('ArrowUp'):
            y += 10;
            break;
        case ('ArrowDown'):
            y -= 10;
            break;
        case ('ArrowRight'):
            y++;
            break;
        case ('ArrowLeft'):
            y--;
            break;
        case ('q'):
            startEenheid.value = 'l';
            break;
        case ('w'):
            startEenheid.value = 'dl';
            break;
        case ('e'):
            startEenheid.value = 'cl';
            break;
        case ('r'):
            startEenheid.value = 'ml';
            break;
        case ('a'):
            convertEenheid.value = 'l';
            break;
        case ('s'):
            convertEenheid.value = 'dl';
            break;
        case ('d'):
            convertEenheid.value = 'cl';
            break;
        case ('f'):
            convertEenheid.value = 'ml';
            break;
        default:
            break;
    }
    invoer.value = y;
    let result = parseFloat(invoer.value, 10) * convert(startEenheid.value, convertEenheid.value);
    output.innerHTML = `${result} ${convertEenheid.value}`;
});






