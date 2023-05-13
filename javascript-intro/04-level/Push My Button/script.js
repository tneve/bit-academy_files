function maakRood() {
    document.body.classList.remove('bgWit');
    document.body.classList.add('bgRood');
}

document.getElementById('maakRood').addEventListener("click", maakRood);

function maakWit() {
    document.body.classList.remove('bgRood');
    document.body.classList.add('bgWit');
}

document.getElementById('maakWit').addEventListener("click", maakWit);
