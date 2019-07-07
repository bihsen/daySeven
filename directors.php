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
$db_name = 'moviedb';

//select that db you wanna work with
$db_found = mysqli_select_db($conn, DB_NAME);
$query = 'SELECT *
 FROM  directors';
// Run the query
$results = mysqli_query($conn, $query);
while ($db_record = mysqli_fetch_assoc($results)) {

    echo '<hr>';


    echo "<img src='" . $db_record["picture"] . "' />" . '<br>';
    echo $db_record['first_name'] . ' ';
    echo $db_record['last_name'] . '<br>';
}
