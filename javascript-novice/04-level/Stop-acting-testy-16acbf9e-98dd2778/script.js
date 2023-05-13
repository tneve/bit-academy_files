let wordToType = "";
let woord = 'woord';
let aantalWoorden = 0;
let aantalKarakters = 0;

const p = document.getElementById('p');

const countdownNumber = document.getElementById('countdownNumber');
const countdownStart = document.getElementById('countdownStart');
countdownStart.addEventListener('click', doTheTest);

const input = document.getElementById('input');
input.addEventListener('input', maakWoord);

function countdown() {
    let timeleft = 60;
    let downloadTimer = setInterval(() => {
        if (timeleft <= 0) {
            clearInterval(downloadTimer);
            showResult();
        }
        document.getElementById("countdownNumber").innerHTML = timeleft;
        timeleft -= 1;
    }, 1000);
}

async function getWord() {
    const response = await fetch("https://random-word-api.herokuapp.com/word");
    const word = JSON.parse(await response.text());
    return word[0];
}

async function initTyptest() {
    wordToType = await getWord();
    p.innerHTML = wordToType;
    input.value = '';
    input.focus();
}

function maakWoord(e) {
    woord = e.target.value;
    if (woord == wordToType) {
        aantalWoorden++;
        aantalKarakters += woord.length;
        initTyptest();
    }
}

function showResult() {
    document.getElementById("countdownNumber").innerHTML = 0;
    p.innerHTML = `Je typte ${aantalWoorden} woorden (${aantalKarakters} karakters) in 1 minuut.`;
}

function doTheTest(e) {
    countdown();
    initTyptest();
    maakWoord(e);
    showResult();
}