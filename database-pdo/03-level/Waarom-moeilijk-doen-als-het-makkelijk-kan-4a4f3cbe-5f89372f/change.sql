USE netland;

CREATE TABLE media (
  id mediumint(9) AUTO_INCREMENT PRIMARY KEY
, title varchar(100)
, rating decimal (2,1)
, summary text
, has_won_awards int(11)
, length_in_minutes int(11)
, released_at date
, seasons int(11)
, country varchar(2)
, youtube_trailer_id varchar(20)
, mediatype enum ('film', 'serie')
);

INSERT INTO media (
    title
, rating
, summary
, has_won_awards
, seasons
, country
)
SELECT 
    title
, rating
, summary
, has_won_awards
, seasons
, country
FROM series;

UPDATE media SET mediatype = 'serie';

INSERT INTO media (
    title
, length_in_minutes
, released_at
, country
, summary
, youtube_trailer_id)
SELECT 
    title
, length_in_minutes
, released_at
, country_of_origin
, summary
, youtube_trailer_id
FROM movies;

UPDATE media SET mediatype = 'film' WHERE length_in_minutes > 0;


