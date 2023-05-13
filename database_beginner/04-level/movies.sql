USE netland;

CREATE TABLE movies (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titel varchar(255) NOT NULL,
    duur int(5),
    datum_van_uitkomst date,
    land_van_uitkomst varchar(16) ,
    omschrijving varchar(255) NOT NULL,
    id_trailer_youtube varchar(30) NOT NULL);

INSERT INTO movies (titel,omschrijving,id_trailer_youtube)
VALUES ('Paul, Apostle of Christ','Paul, Apostle of Christ is a 2018 American biblical drama film written and directed by Andrew Hyatt. The film tells the story of Paul, who was known as a ruthless persecutor of Christians prior to his conversion to Christianity.','LyOqQZUDdO4'),
    ('Heaven is for real', 'Four-year-old Colton Burpo (Connor Corum) is the son of Todd Burpo (Greg Kinnear), pastor of Crossroads Wesleyan Church in Imperial, Nebraska. Colton says he experienced Heaven during an emergency surgery after having Acute appendicitis.', 'mydh4MEo2B0'),
        ('Samson','Samson is a 2018 Biblical drama film directed by Bruce Macdonald and inspired by the story of Samson in the Book of Judges.','mSolF3QBVBY'),
        ('Son of God','Son of God is een Amerikaanse christelijke dramafilm en compilatiefilm uit 2014, geregisseerd door Christopher Spencer. De film is gebaseerd op de tien uur durende miniserie The Bible uit 2013.','Hsl5UG9O_c'),
        ('Joseph: King of Dreams','Joseph: King of Dreams is a 2000 American direct-to-video animated biblical musical drama film. The film is an adaptation of the story of Joseph from the Book of Genesis in the Bible','00srDTJp51I');