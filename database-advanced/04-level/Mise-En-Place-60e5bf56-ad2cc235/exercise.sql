USE foodblog;

CREATE TABLE auteurs (
    id int(11) PRIMARY KEY AUTO_INCREMENT
    , naam varchar(50)
    );

ALTER TABLE posts
    ADD auteur_id int(11);

ALTER TABLE posts
    ADD FOREIGN KEY (auteur_id)
    REFERENCES auteurs(id);

INSERT INTO auteurs (naam)
VALUES ('Mounir Toub'), 
 ('Miljuschka'), 
 ('Wim Ballieu');

ALTER TABLE posts 
MODIFY img_url varchar(255);

UPDATE posts 
SET auteur_id = 1 WHERE id = 1;

UPDATE posts 
SET auteur_id = 2 WHERE id = 2;

UPDATE posts 
SET auteur_id = 3 WHERE id = 3;