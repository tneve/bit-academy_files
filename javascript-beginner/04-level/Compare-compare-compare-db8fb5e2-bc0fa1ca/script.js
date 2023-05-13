let inwonersNL = parseInt(process.argv[2], 10);
let inwonersDE = parseInt(process.argv[3], 10);
let inwonersFR = parseInt(process.argv[4], 10);
let result = (inwonersNL < inwonersDE && inwonersNL < inwonersFR);
console.log(`Nederland heeft minder inwoners dan Duitsland én Frankrijk: ${result}`);
result = (inwonersNL > inwonersDE || inwonersFR > inwonersDE);
console.log(`“Nederland óf Frankrijk heeft meer inwoners dan Duitsland”: ${result}`);
result = (inwonersNL < inwonersDE);
console.log(`“Het is niet waar dat Nederland meer inwoners heeft dan Duitsland”: ${result}`);