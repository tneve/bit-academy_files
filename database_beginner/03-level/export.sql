CREATE DATABASE sterrenstelsel;

USE sterrenstelsel;

CREATE TABLE planeten (
    Naam varchar(32)
);

INSERT INTO planeten (Naam)
VALUES ('Zon'); 
INSERT INTO planeten (Naam)
VALUES('Mercurius');
INSERT INTO planeten (Naam)
VALUES('Venus');
INSERT INTO planeten (Naam)
VALUES('Aarde');
INSERT INTO planeten (Naam)
VALUES('Mars');

TRUNCATE TABLE planeten;

ALTER TABLE planeten
CHANGE Naam naam varchar(255);

ALTER TABLE planeten 
ADD diameter int(11),
ADD afstand int(11),
ADD massa int (11);

INSERT INTO planeten (naam, diameter, afstand, massa)
VALUES ('Zon', '1392000', '0', '332946'); 
INSERT INTO planeten (naam, diameter, afstand, massa)
VALUES('Mercurius', '4880', '57910000', '0');
INSERT INTO planeten (naam, diameter, afstand, massa)
VALUES('Venus','12104', '108208930', '1');
INSERT INTO planeten (naam, diameter, afstand, massa)
VALUES('Aarde', '12756','149597870','1');
INSERT INTO planeten (naam, diameter, afstand, massa)
VALUES('Mars', '6794' , '227936640', '0');

ALTER TABLE planeten
ADD bezoek_datum date;

ALTER TABLE planeten
MODIFY naam varchar(255) NOT NULL,
MODIFY diameter int(11) NOT NULL,
MODIFY afstand int(11) NOT NULL,
MODIFY massa int(11) NOT NULL;

INSERT INTO planeten (naam,diameter,afstand,massa,bezoek_datum)
VALUES ('maan','3476','149597870','0','1969-07-20');

ALTER TABLE planeten
ADD id int NOT NULL AUTO_INCREMENT PRIMARY KEY; 

INSERT INTO planeten (naam, diameter, afstand, massa)
VALUES('mars', '6794' , '227936640', '0');

UPDATE planeten
SET 
naam = 'Teenalp'
WHERE
id = '7';

