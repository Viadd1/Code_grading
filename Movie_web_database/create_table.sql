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

INSERT INTO `genres`(`gid`, `mgenre`) 
VALUES ('1','Action/Adventure');

INSERT INTO `genres`(`mgenre`) 
VALUES ('Comedy'), ('Drama'), ('Fantasy/Sci-Fi');