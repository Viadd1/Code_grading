Create_table.sql contains the following:

CREATE TABLE animals (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    domain VARCHAR(255),
    propulsion VARCHAR(255)
);

This creates a table with the columns ID, name, domain, and propulsion. ID is of the integer data type, while the other columns store strings of maximum size 255 bytes. The primary key is the ID column because it is the only element we can guarantee is unique. AUTO_INCREMENT means that each entry added to the database will automatically be assigned an ID of incrementally increasing value (the first one gets ID 1, the next gets ID 2, etc.)

