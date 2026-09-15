<!DOCTYPE html>
<html>
<body>
    <h1>Movie Database</h1>
    <h4>Below is a list of all movies that have been entered in the database up until this moment</h4>

<!-- Below we make the design of the table:
    100% means that it covers the entire screen
    Padding 2px is the space between the cell edges and the cell content
    nth-child(even) means style every other table row element -->

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 2px;
}

tr:nth-child(even) {
  background-color: #FF83c1;
}
</style>

<search>
<form action="/searchmovies.php">
    <input name="Movie name" id="Movie name" placeholder="Search Movies">
</form>
  <br>
</search>
    <input type="submit"><br>
    <br>
<!-- Below we create the table:
    echo the table with each heading
    we select all in the database under movies
    then we echo what exists in the database in the table created -->

    
<?php

include 'db.php';

echo '<table><tr><th>ID</th><th>Movie name</th><th>Year of release</th><th>Genre ID</th><th>Rating</th></tr>';


$sql = "SELECT * FROM `movies`";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo 
        "<tr> <td>" . $row["mid"] . 
        "</td><td>" . $row["mname"] . 
        "</td><td>" . $row["myear"] . 
        "</td><td>" . $row["mgenreid"] . 
        "</td><td>" . $row["mrating"] . 
        "</td></tr>";
    }
} else {
    echo "0 results";
}

echo '</table>';
?>

<body>
    <h4>This is the end of the list! Add more movies at index.php!</h4>