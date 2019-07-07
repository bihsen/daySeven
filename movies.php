<style>
    img {
        height: 300px;
        width: 200px;
    }
</style>
<?php

require_once 'database.php';
//connect to the database
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);

// the name of the database
//$db_name = 'moviedb';

//select that db you wanna work with
$db_found = mysqli_select_db($conn, DB_NAME);
$query = 'SELECT movies.movie_id, movies.poster , movies.title, movies.release_year, directors.first_name , directors.last_name FROM movies INNER JOIN directors ON movies.directorID = directors.director_id';
// Run the query
$results = mysqli_query($conn, $query);
while ($db_record = mysqli_fetch_assoc($results)) {
    //var_dump($db_record);
    echo '<hr>';
    ?>

    <a href="movie.php?movieid=<?php echo $db_record['movie_id']; ?>"> <?php echo $db_record['title']  ?> </a>

    <?php
    //echo $db_record['title'] . '<br>';
    echo $db_record['release_year'] . '<br>';
    echo "<img src='" . $db_record["poster"] . "' />" . '<br>';
}
