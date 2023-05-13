let fietsen = parseInt(process.argv[2], 10);
let bbp = parseInt(process.argv[3], 10);
let dichtheid = parseInt(process.argv[4], 10);
let landIsGoed = false;

if (((fietsen > 1 && fietsen < 3) && (bbp > 50)) || !((dichtheid > 500) && (bbp < 60))) landIsGoed = true;

console.log(`Het land is een 'goed' land: ${landIsGoed}`);