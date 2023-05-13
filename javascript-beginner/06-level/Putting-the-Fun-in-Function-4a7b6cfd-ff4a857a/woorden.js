const woorden = ["The", "quick", "brown", "fox", "jumps", "over", "the", "lazy", "dog"];
function letterInWord(words, letter) {
    words.forEach(word => {
        let condition = word.includes(letter);
        if (condition == true) {
            console.log(`${word} bevat de letter '${letter}'`);
        }
    });
}
letterInWord(woorden, 'o');
letterInWord(woorden, 'p');
letterInWord(woorden, 'q');