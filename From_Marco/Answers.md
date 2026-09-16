# Orientation Questions

## Create_table.sql
#### QUESTION: What do you think that this file does? What columns are created? What data types are stored in our columns? And which size is the data allowed to be? Which column holds the primary key (and why?) What do you think AUTO_INCREMENT does?

CREATE TABLE animals (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    domain VARCHAR(255),
    propulsion VARCHAR(255)
);

This creates a table with the columns ID, name, domain, and propulsion. ID is of the integer data type, while the other columns store strings of maximum size 255 bytes. The primary key is the ID column because it is the only element we can guarantee is unique. AUTO_INCREMENT means that each entry added to the database will automatically be assigned an ID of incrementally increasing value (the first one gets ID 1, the next gets ID 2, etc.)

## Get_data.php
#### QUESTION: Observe on line 1 and 28 that we need to open and close a .php file. Write down the syntax to do so.

<?php
[code]
?>

#### QUESTION: Observe on line 2-5 that we are creating variables. Write down the syntax to create a variable in php.

"$variable="value";"

#### QUESTION: For each of the variables on line 2-5, describe what they are. What values should they hold in your case? (don’t write this down, as this can be a threat to your IMS security)

$servername = the name of the server that the website is run on.
$username = the username of the login
$password = the password of the login
$dbname = the name of the database creted at the server

#### QUESTION: Line 8: what variable is created here, and why? What do you think is the purpose of line 10-12, why do we need this?

The variable created is called link and it is used to create the link to the database server.
The purpose of the if statement is to get a response if there is an error in the connection.

#### QUESTION: Line 14: What does echo do? What would you call this statement in other programming languages you know?

Echo says what to show at webpage, in this case it is creating a table. Like "print" in other programming languages.

#### QUESTION: Line 14: you can see HTML code here. What do you think this echo statement returns?

This echo statement return the structure of a table with headings and columns.

#### QUESTION: Line 17: here we are calling our $link variable. Why do you think that is? Here we introduce a new operator: “->”. Why do you think this operator is useful? Here we introduce a new method, query. What do you think this method does, and which parameter do we use?

$result = $link->query($sql);

We are calling our link variable to define which database "link" we are calling to perform the function query() on.

The object operator "->" is used in object scope to access methods and properties of an object. It’s meaning is to say that what is on the right of the operator is a member of the object instantiated into the variable on the left side of the operator.

The query() function performs a query against a database.

#### QUESTION: On line 19: we observe that num_rows is not coloured yellow like our methods. At the same time, it is not a variable either, since it does not start with $. We call this a property access. What are we accessing, and from where?

We are acessing the number of entries from our database.

#### QUESTION: Line 19 - 25: a conditional loop is introduced. Can you guess what the output is of this code? Under which conditions?

If there are entires avaliable those said entries will be printed as rows in a table. If no entries is retrieved we get "0 results" as output.

## Index.php

#### QUESTION: Can you guess what the purpose is of this file? Hint: Think about your IMS. If the user is on the index page, where would they be?

Index is the default landing first page.

## Insert_data.html

#### QUESTION: What do you think a form is in HTML?

    Take note of the post method, we will see it come back in the next file

An HTML form is used to collect user input. The user input is then sent to a server.

## Insertdata.php
    New concept: In PHP, variables that start with $ are superglobals. Superglobals are special built-in arrays that PHP automatically creates and fills with data about the request, the server, the environment, etc.

#### QUESTION: Line 16-21. What do you think the $_POST superglobal does?

It fetches the data from a POST form.
 
#### QUESTION: Line 23: here we prepare a SQL query. Why do you think the values are left blank for now? (?,?,?)

    New concept: bind_param -> Bind variables for the parameter markers in the SQL statement prepared by mysqli_prepare() or mysqli_stmt_prepare().

    This method takes two parameters: a type definition string: s = string, i = integer, d = double/float, b = blob (binary data). And PHP variables to bind the placeholder values to.

The values are left blank since sql can not read php varaibles straight away. Bind_params adds the values to the question marks.

#### QUESTION: Line 27: Even though we have $_POST[‘id’] data, we do not enter this into our database! Why is that? Think about our first file, create_table.sql

It is not needed since ID is unique and has auto incraments so a value for ID will always exist.

#### QUESTION: Line 36: Close db connection. This is the first time we see this. Why does it occur here?

We are closing our link to the databse to prevent leaks.