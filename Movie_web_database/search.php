<!DOCTYPE html>
<html>
<body>
    <h1>Movie Database</h1>
    <h4>Below is a list of all movies that match your search query</h4>

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
<form action="/search.php" method="get">
    <input name="Movie_name" id="Movie_name" placeholder="Search Movies">
    <input type="submit"><br>
</form>
  <br>
</search>
<br>
<!-- Below we create the table:
    echo the table with each heading
    we select all in the database under movies
    then we echo what exists in the database in the table created -->

    
<?php

include 'db.php';

echo '<table><tr><th>ID</th><th>Movie name</th><th>Year of release</th><th>Genre ID</th><th>Rating</th></tr>';

$search_query = $_GET["Movie_name"];
$sql = "SELECT * FROM movies WHERE mname LIKE '%$search_query%'";
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

include 'closeDB.php';
?>

<body>
    <h4>This is the end of the list! Add more movies at index.php!</h4>