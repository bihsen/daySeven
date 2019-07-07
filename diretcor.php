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


// Run the query


$myId = $_GET['movieid'];

$query = "SELECT  , movies.title , movies.release_year , directors.first_name
FROM movies 
INNER JOIN directors ON movies.directorID = directors.director_id
WHERE movies.movie_id = $myId";
$results = mysqli_query($conn, $query);
while ($db_record = mysqli_fetch_assoc($results)) {

    echo '<hr>';

    echo "<img  src='" . $db_record["poster"] . "' />" . '<br>';
    echo 'Release Year:' . ' ' . $db_record['release_year'] . '<br>';
}

/* 

HOST: 137.74.118.171

To access your website:

http://171.ip-137-74-118.eu/dev/YOUR-USER/

To access PHPMYADMIN:
HTTP///171.IP-137-74-118.eu/phpmyadmin


*/
