const h1 = document.querySelector('h1');
h1.classList.add('classy');

const para = document.querySelectorAll('p');
para.forEach(element => {
    element.classList.add('classyPara');
});