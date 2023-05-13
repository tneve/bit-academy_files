USE 'bit_lyceum';

INSERT INTO vakken (vak, boek)
VALUES
    ('Burgerschap', 'Burgerschap in 2023');

SELECT vakken.vak, docenten.naam, docenten.telefoon FROM
vakken LEFT JOIN docenten
ON vakken.docent_id = docenten.id; 