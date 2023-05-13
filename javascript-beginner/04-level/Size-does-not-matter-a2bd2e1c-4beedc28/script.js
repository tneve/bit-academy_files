let inwonersNL = parseInt(process.argv[2], 10);
let inwonersDE = parseInt(process.argv[3], 10);
let result = inwonersNL < inwonersDE;
console.log(`Nederland heeft minder inwoners dan Duitsland: ${result}`);
result = inwonersNL > inwonersDE;
console.log(`Nederland heeft meer inwoners dan Duitsland: ${result}`);