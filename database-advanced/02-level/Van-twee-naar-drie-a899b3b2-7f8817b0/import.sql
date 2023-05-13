DROP DATABASE IF EXISTS bit_lyceum;

CREATE DATABASE bit_lyceum;

USE `bit_lyceum`;

CREATE TABLE vakken (
    id int NOT NULL AUTO_INCREMENT,
    vak varchar(50) NOT NULL,
    boek varchar(50) NOT NULL,
    docent varchar(50) NOT NULL,
    telefoon varchar(50) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO vakken (vak, docent, telefoon, boek)
VALUES
    ('Nederlands', 'De Wit', '0659475126', 'Nieuw Nederlands')
    , ('Engels', 'McDonell', '0689512037', 'Stepping Stones')
    , ('Wiskunde','Houwing', '0611539815', 'Getal en Ruimte');

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



