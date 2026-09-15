<!DOCTYPE html>
<html>
<body>
    <h1>Movie Database</h1>
    <h4>Welcome! Fill in your review below</h4>
    <form action="/insert.php" method="get">
        <label for="name">Movie name:</label><br>
        <input type="text" id="name" name="name"><br>
        <br>
        <label for="year">Year of release:</label><br>
        <input type="number" id="year" name="year"><br>
        <br>
        <label for="genre">Movie genre:</label><br>
        <select name="genre" id="genre">
            <option value="Comedy">Comedy</option>
            <option value="Drama">Drama</option>
            <option value="Action/Adventure">Action/Adventure</option>
            <option value="Fantasy/Sci-Fi">Fantasy/SciFi</option>
        </select><br>
        <br>
        <label for="rating">Rating:</label><br>
        <input type="number" id="rating" name="rating" min="1" max="5"><br>
        <br>
        <input type="submit"><br>
        <br>
        <h4>The entry will be sent to the movie database and can be viewed at showmovies.php!</h4>
    
</html>