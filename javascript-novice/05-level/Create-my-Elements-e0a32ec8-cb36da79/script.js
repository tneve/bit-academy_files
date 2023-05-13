let body = document.getElementsByTagName('body')[0];
let img = document.createElement('img');
let h1 = document.createElement('h1');
let p = document.createElement('p');
body.appendChild(img);
body.appendChild(h1);
body.appendChild(p);

img.src = "https://picsum.photos/id/0/200/300";
h1.innerText = "Dit is mijn titel";
p.innerText = "en dit is mijn paragraaf";
