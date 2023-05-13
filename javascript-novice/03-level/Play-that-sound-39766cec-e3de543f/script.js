const sounds = ['deurbel', 'ding', 'error', 'fail', 'jump', 'victory'];

sounds.forEach(sound => {
    const btn = document.createElement('button');
    btn.classList.add('btn');
    btn.innerText = sound;
    btn.addEventListener("click", function () {
        document.getElementById(sound).play();
    });
    document.getElementById('buttons').appendChild(btn);
});

