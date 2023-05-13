USE foodblog;

CREATE TABLE tags (
    id int(11) PRIMARY KEY AUTO_INCREMENT
    , titel varchar(50) UNIQUE
);

CREATE TABLE posts_tags (
    post_id int(11)
    , tag_id int(11)
);

ALTER TABLE posts_tags
    ADD FOREIGN KEY (post_id)
    REFERENCES posts(id);


ALTER TABLE posts_tags
    ADD FOREIGN KEY (tag_id)
    REFERENCES tags(id);

INSERT INTO tags (titel)
VALUES ('italiaans')
    , ('diner')
    , ('tussendoortje')
    , ('snack');

INSERT INTO posts_tags (post_id,tag_id)
VALUES (1,3)
    , (2,3)
    , (2,4)
    , (1,2);