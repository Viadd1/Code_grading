# Create_table.sql

CREATE TABLE animals (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    domain VARCHAR(255),
    propulsion VARCHAR(255)
);

This creates a table with the columns ID, name, domain, and propulsion. ID is of the integer data type, while the other columns store strings of maximum size 255 bytes. The primary key is the ID column because it is the only element we can guarantee is unique. AUTO_INCREMENT means that each entry added to the database will automatically be assigned an ID of incrementally increasing value (the first one gets ID 1, the next gets ID 2, etc.)

# Get_data.php
## ● Observe on line 1 and 28 that we need to open and close a .php file. Write down the syntax to do so.
<?php
[code]
?>

## ● Observe on line 2-5 that we are creating variables. Write down the syntax to create a variable in php.
$variable="value";

## ● For each of the variables on line 2-5, describe what they are. What values should they hold in your case? (don’t write this down, as this can be a threat to your IMS security)
servername is the name of the server that the website is run on. username and password is the

## ● Line 8: what variable is created here, and why? What do you think is the purpose of line 10-12, why do we need this?

## ● Line 14: What does echo do? What would you call this statement in other programming
languages you know?

## ● Line 14: you can see HTML code here. What do you think this echo statement returns?

## ● Line 17: here we are calling our $link variable. Why do you think that is? Here we introduce a new operator: “->”. Why do you think this operator is useful? Here we introduce a new method, query. What do you think this method does, and which parameter do we use?

## ● On line 19: we observe that num_rows is not coloured yellow like our methods. At the same time, it is not a variable either, since it does not start with $. We call this a property access. What are we accessing, and from where?

## ● Line 19 - 25: a conditional loop is introduced. Can you guess what the output is of this code? Under which conditions?

