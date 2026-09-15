<?php
include 'db.php';

$name = $_GET["name"];
$year = $_GET["year"];
$genre = ucfirst($_GET["genre"]);
$rating = $_GET["rating"];

$sql1 = "SELECT gid, mgenre FROM genres";
$result = $link->query($sql1);

while($row = $result->fetch_assoc()) {
    $gid = $row["gid"];
    if ($row["mgenre"] == $genre) {
        $genreid = $gid;
        break;
    } else {
        $genreid = 0;
    }
  }

$sql = "INSERT INTO movies (mname, myear, mgenreid, mrating)
VALUES (?, ?, ?, ?)";

$stmt = $link->prepare($sql);

// s for string
$stmt->bind_param("siii", $name, $year, $genreid, $rating);
$result = $stmt->execute();

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

include 'closeDB.php';
?>