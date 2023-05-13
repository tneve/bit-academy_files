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
    
