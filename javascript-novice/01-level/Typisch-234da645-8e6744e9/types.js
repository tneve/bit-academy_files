let data = ["Hello", 3, 3.2, "3", true, false, 3.0 + 3, 3 + "3"];
for (let i = 0; i < data.length; i++) {
    let waarde = data[i];
    let numberType = '';
    if (typeof waarde == 'number') {
        if (Number.isInteger(waarde) == true) {
            numberType = 'int';
        } else {
            numberType = 'float';
        }
    }
    console.log(`${waarde} is van type ${typeof waarde} ${numberType}`);
}