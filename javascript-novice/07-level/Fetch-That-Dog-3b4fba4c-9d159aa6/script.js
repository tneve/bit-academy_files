async function loadJSON(url) {
    const res = await fetch(url);
    const x = await res.json();
    return x;
}

let img = document.getElementById('doggie');

function showThatDog() {
    let dogUrl = loadJSON('https://dog.ceo/api/breeds/image/random')
        .then(data => {
            dogUrl = data.message;
            img.src = dogUrl;
        });
}
showThatDog();
if (localStorage.getItem('likes') == null) {
    localStorage.setItem('likes', 0);
}
if (localStorage.getItem('dislikes') == null) {
    localStorage.setItem('dislikes', 0);
}

let likeBtn = document.getElementById('like');
likeBtn.addEventListener('click', () => {
    let likes = localStorage.getItem('likes');
    likes++;
    localStorage.setItem('likes', likes);
    pLike.innerHTML = (`U liked: ${localStorage.getItem('likes')} pictures`);
    showThatDog();
});

let dislikeBtn = document.getElementById('dislike');
dislikeBtn.addEventListener('click', () => {
    let dislikes = localStorage.getItem('dislikes');
    dislikes++;
    localStorage.setItem('dislikes', dislikes);
    pDisLike.innerHTML = (`U disliked: ${localStorage.getItem('dislikes')} pictures`);
    showThatDog();
});
let pLike = document.getElementById('likes');
pLike.append(`U liked: ${localStorage.getItem('likes')} pictures`);
let pDisLike = document.getElementById('dislikes');
pDisLike.append(`U disliked: ${localStorage.getItem('dislikes')} pictures`);


