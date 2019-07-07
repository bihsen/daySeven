<?php

//How to work with database, we'll use a function call: mysqli

require_once 'database.php';
//$server = 'localhost';
//$user = 'root';
//$password='';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
echo 'conexion successfull <br>';
//Choose which database I want to work with
//$db_name = 'moviedb';
$db_found = mysqli_select_db($conn, DB_NAME);
//var_dump($conn);

if ($db_found) {

    echo DB_NAME . "found!<br>";
    // perpare my query 
    $query = "INSERT INTO movies(title, release_year, views , directoriD) VALUES
   ('Jurassic Park' , '2018', 75210 , 1)";
    //send the query to the db
    $results = mysqli_query($conn, $query);

    if ($results)
        echo "Insert successfull";
    else
        "Insert went wrong ";
} else
    echo DB_NAME . "Not found <br>";


// close the connection to the database 
mysqli_close($conn);
