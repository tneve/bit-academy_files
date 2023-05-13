function genType() {
    throw new TypeError("TypeErrorMessage");
}

function genRange() {
    throw new RangeError("RangeErrorMessage");
}

function genReference() {
    throw new ReferenceError("ReferenceErrorMessage");
}

const functies = [
    () => {
        genType();
    },
    () => {
        genReference();
    },
    () => {
        genRange();
    },
    () => {
        genType();
    },
    () => {
        genReference();
    },
    () => {
        genRange();
    },
    () => {
        genType();
    },
    () => {
        genReference();
    },
    () => {
        genRange();
    },
];

functies.forEach((functie) => {
    try {
        functie();
    } catch (error) {
        if (error instanceof TypeError || error instanceof RangeError) {
            let p = document.createElement('p');
            p.innerHTML = `Er is een error gevonden!<br> 
                        ErrorType: "${error.name}"<br>
                        Message: "${error.message}"`;
            document.body.appendChild(p);
        }
    }
});