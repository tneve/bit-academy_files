USE bit_lyceum;

CREATE TABLE docenten (
    id int (12) AUTO_INCREMENT PRIMARY KEY,
    naam varchar(50),
    telefoon varchar(50)   
);

INSERT INTO docenten 
(naam, telefoon)
VALUES
    ('De Wit', '0659475126')
    , ('McDonell','0689512037')
    , ('Houwing', '0611539815');

DROP TABLE vakken;

CREATE TABLE vakken (
    id int(12) AUTO_INCREMENT PRIMARY KEY,
    vak varchar(50),
    boek varchar(50),
    docent_id int(12)
);

INSERT INTO vakken (vak, boek, docent_id)
VALUES
    ('Nederlands', 'Nieuw Nederlands', 1)
    , ('Engels', 'Stepping Stones', 2)
    , ('Wiskunde', 'Getal en Ruimte', 3);




