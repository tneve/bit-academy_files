function timesFive(numbers) {
    for (let i = 0; i < numbers.length; i++) {
        numbers[i] *= 5;
        console.log(numbers[i]);
    }
}
timesFive([1, 2, 3, 4, 5]);