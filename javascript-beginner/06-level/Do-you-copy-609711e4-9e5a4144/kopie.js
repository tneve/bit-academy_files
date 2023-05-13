function addToArray(array) {
    array.push('iets');
}

function createNewArray(array) {
    let zin = ['dit', 'is', 'een', 'test'];
    let newArray = array;
}

let zin = ['met', 'een', 'array', 'kan', 'ik'];
console.log(`Voor de toewijzing: ${zin}`);
addToArray(zin);
console.log(`Na de toewijzing: ${zin}`);
console.log(`Voor de toewijzing: ${zin}`);
createNewArray(zin);
console.log(`Na de toewijzing: ${zin}`);
