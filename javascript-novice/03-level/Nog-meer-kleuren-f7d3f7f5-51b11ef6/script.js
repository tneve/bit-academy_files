function changeBGcolor() {
    let color = document.getElementById('color').value;
    let body = document.getElementsByTagName('body')[0];
    body.style.backgroundColor = color;
}

document.getElementById('changeBGcolor').addEventListener("click", changeBGcolor);

function changeH1color() {
    let color = document.getElementById('color').value;
    let H1 = document.querySelectorAll('h1');
    H1.forEach(element => {
        element.style.color = color;
    });
}
document.getElementById('changeH1color').addEventListener("click", changeH1color);

function changeBoth() {
    changeBGcolor();
    changeH1color();
}

document.getElementById('changeBoth').addEventListener("click", changeBoth);