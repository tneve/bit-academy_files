let catalogus = [
    {
        ISBN: "978-1449355739",
        aantal: 1,
    },
    {
        ISBN: "978-0596806750",
        aantal: 2,
    },
    {
        ISBN: "978-0596805524",
        aantal: 1,
    },
    {
        ISBN: "978-1491905012",
        aantal: 1,
    },
    {
        ISBN: "978-0596008642",
        aantal: 3,
    },
    {
        ISBN: "978-0596004897",
        aantal: 2,
    },
];

const dagverloop = [
    {
        ISBN: "978-0596806750",
        handeling: "uitlening",
    },
    {
        ISBN: "978-1491905012",
        handeling: "teruggave",
    },
    {
        ISBN: "978-0596805524",
        handeling: "uitlening",
    },
    {
        ISBN: "978-1449319243",
        handeling: "teruggave",
    },
    {
        ISBN: "978-1491905012",
        handeling: "uitlening",
    },
    {
        ISBN: "978-0596004897",
        handeling: "uitlening",
    },
    {
        ISBN: "978-1491908426",
        handeling: "teruggave",
    },
    {
        ISBN: "978-1449319243",
        handeling: "uitlening",
    },
    {
        ISBN: "978-0596004361",
        handeling: "teruggave",
    },
    {
        ISBN: "978-1491905012",
        handeling: "uitlening",
    },
    {
        ISBN: "978-1449355739",
        handeling: "uitlening",
    },
];

let allISBNinCat = [];

for (let i = 0; i < dagverloop.length; i++) {
    for (let j = 0; j < catalogus.length; j++) {
        allISBNinCat.push(catalogus[j].ISBN);
        if (dagverloop[i].ISBN == catalogus[j].ISBN) {
            if (dagverloop[i].handeling == "uitlening") {
                if (catalogus[j].aantal > 1) {
                    catalogus[j].aantal--;
                } else {
                    catalogus.splice(j, 1);
                }
            } else {
                catalogus[j].aantal++;
            }
        }
    }
    if (!allISBNinCat.includes(dagverloop[i].ISBN)) {
        const newBook = {
            ISBN: dagverloop[i].ISBN,
            aantal: 1,
        };
        catalogus.push(newBook);
    }
}

for (let j = 0; j < catalogus.length; j++) {
    console.log(`ISBN: ${catalogus[j].ISBN} aantal: ${catalogus[j].aantal}`);
}