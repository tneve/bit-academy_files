CREATE TABLE docenten (
    docent varchar(50),
    telefoonnummer varchar(50),
    vak varchar(50) PRIMARY KEY
);

INSERT INTO docenten 
(docent, telefoonnummer, vak)
VALUES
    ('De Wit', '0659475126', 'Nederlands')
    , ('McDonell','0689512037', 'Engels')
    , ('Houwing', '0611539815', 'Wiskunde');

ALTER TABLE vakken_toetsen DROP docent;
ALTER TABLE vakken_toetsen DROP telefoonnummer;

