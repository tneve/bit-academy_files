DROP DATABASE IF EXISTS bit_lyceum;

CREATE DATABASE bit_lyceum;

USE `bit_lyceum`;

CREATE TABLE vakken_toetsen (
    id int NOT NULL AUTO_INCREMENT,
    vak varchar(50) NOT NULL,
    boek varchar(50) NOT NULL,
    toets_1 varchar(50) NOT NULL,
    toets_2 varchar(50) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO vakken_toetsen (vak, boek, toets_1, toets_2)
VALUES
    ('Nederlands - De Wit (0659475126)', 'Nieuw Nederlands', 'Grammatica', 'Begrijpend lezen'),
    ('Engels - McDonell (0689512037)', 'Stepping Stones', 'Mondeling', ''),
    ('Wiskunde - Houwing (0611539815)', 'Getal en Ruimte', 'Algebra', 'Meetkunde' );

ALTER TABLE vakken_toetsen DROP vak;
ALTER TABLE vakken_toetsen DROP toets_1;
ALTER TABLE vakken_toetsen DROP toets_2;
ALTER TABLE vakken_toetsen ADD vak varchar(50);
ALTER TABLE vakken_toetsen ADD toets_id int(12);
ALTER TABLE vakken_toetsen ADD toets varchar(50);
ALTER TABLE vakken_toetsen ADD docent varchar(50);
ALTER TABLE vakken_toetsen ADD telefoonnummer varchar(50);

DELETE FROM vakken_toetsen;

INSERT INTO vakken_toetsen (boek, vak, toets_id, toets, docent, telefoonnummer)
VALUES ('Nieuw Nederlands', 'Nederlands', 1, 'Grammatica', 'De Wit', '0659475126')
    , ('Nieuw Nederlands', 'Nederlands', 2, 'Begrijpend lezen', 'De Wit', '0659475126')
    , ('Stepping Stones', 'Engels', 1, 'Mondeling', 'McDonell', '0689512037')
    , ('Getal en Ruimte', 'Wiskunde', 1, 'Algebra', 'Houwing', '0611539815')
    , ('Getal en Ruimte', 'Wiskunde', 2, 'Meetkunde', 'Houwing', '0611539815');
    
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

CREATE TABLE toetsen (
    id int(12) PRIMARY KEY AUTO_INCREMENT,
    vak varchar(50),
    toets_id varchar(50),
    toets_ow varchar(50)
    );

INSERT INTO toetsen (vak, toets_id, toets_ow)
VALUES
    ('Nederlands', 1, 'Grammatica')
    , ('Nederlands', 2, 'Begrijpend lezen')
    , ('Engels', 1, 'Mondeling')
    , ('Wiskunde', 1, 'Algebra')
    , ('Wiskunde', 2, 'Meetkunde');

ALTER TABLE vakken
ADD FOREIGN KEY (docent_id) REFERENCES docenten(id);

INSERT INTO docenten (naam, telefoon)
VALUES 
    ('Kooper', '0622334455')
    , ('De Vries', '0647856425')
    , ('Van Dijk', '0625896412');

INSERT INTO vakken (vak, boek, docent_id)
VALUES 
    ('Natuurkunde', 'Overal NaSk', 4)
    , ('Biologie', 'Nectar', 5)
    , ('Frans', 'Chouette', 6);



