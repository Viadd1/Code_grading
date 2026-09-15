CREATE TABLE movies (
    mid INT PRIMARY KEY AUTO_INCREMENT,
    mname VARCHAR(100),
    myear VARCHAR(5),
    mgenreid INT,
    mrating INT
);

CREATE TABLE genres(
gid INT PRIMARY KEY AUTO_INCREMENT,
mgenre VARCHAR(50)
);

ALTER TABLE genres
ADD CONSTRAINT fk_genre
FOREIGN KEY (mgenreid)
REFERENCES genres(gid);

INSERT INTO `genres`(`gid`, `mgenre`) 
VALUES ('1','Action/Adventure');

INSERT INTO `genres`(`mgenre`) 
VALUES ('Comedy'), ('Drama'), ('Fantasy/Sci-Fi');