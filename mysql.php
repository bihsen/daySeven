<?php

//How to work with database, we'll use a function call: mysqli

require_once 'database.php';
//$server = 'localhost';
//$user = 'root';
//$password='';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
echo 'conexion successfull <br>';
//Choose which database I want to work with
//$db_name = 'DB_NAME'; 
$db_found = mysqli_select_db($conn, DB_NAME);
//var_dump($conn);

if ($db_found) {

    echo "$db_name found!<br>";
    // perpare my query 
    $query = 'SELECT * FROM movies';
    $results = mysqli_query($conn, $query);
    var_dump($results);

    /*  I retrieve the results as an array
    and display this array (using a loop) */
    while ($db_record = mysqli_fetch_assoc($results)) {
        //var_dump($db_record);
        echo '<hr>';
        echo $db_record['title'] . '<br>';
        echo $db_record['release_year'] . '<br>';
        echo $db_record['views'] . '<br>';
    }
} else
    echo DB_NAME . " Not found <br>";

// close the connection to the database 
mysqli_close($conn);
