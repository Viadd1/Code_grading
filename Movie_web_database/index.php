<!DOCTYPE html>
<html>
<body>
    <h1>Movie Database</h1>
    <p>Welcome! Fill in your review below</p>
    <br>
    <form action="/insert.php" method="get">
        <label for="name">Movie name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="year">Year of release:</label><br>
        <input type="number" id="year" name="year"><br>
        <label for="genre">Movie genre:</label><br>
        <select name="genre" id="genre">
            <option value="comedy">Comedy</option>
            <option value="drama">Drama</option>
            <option value="adventure">Adventure</option>
            <option value="fantasy">Fantasy/SciFi</option>
        </select><br>
        <label for="rating">Rating:</label><br>
        <input type="number" id="rating" name="rating" min="1" max="5"><br>
        <input type="submit"><br>
    <?php
    echo "this will be sent to the movie database when it is implemented!";
    ?>

</html>