
<?php

/*
    A User is represented by a first_name, last_name, email and password (and other stuff if you want).

    1. Create the table 'users' in your database

    2. Create 'signin.php' page
    This page will display a form where a user can enter its data to create an account
    You have to check all mandatories input, otherwise display a message.
    When all input are fill, you have to insert the user in the database and display a nice message.

    3. Create 'login.php' page
    This page will display a form where a user can login using email/password.
    You have to check all mandatories input, otherwise display a message.
    When all input are fill, you have to check if the user exists in the database and check if its password/email matches.

    4. Avoid injections, special chars.... Put in place a basic security measure.

*/

session_start();
require_once 'database.php';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
$db_name = 'moviedb';
$db_found = mysqli_select_db($conn, DB_NAME);
$query = 'SELECT * FROM users ORDER BY  first_name  LIMIT 3';
$results = mysqli_query($conn, $query);

if(isset($_GET['subButton'])){
    $myName = $_GET['myName'];
    $lastName = $_GET['lastName'];
    $userMail = $_GET['userMail'];
	$userPass = $_GET['userPass'];
	echo "hello" . $myName;

}

?>

<form action="" method="GET">
   
    <input type="email" name="userMail" id="" placeholder="Email">
    <input type="email" name="userPass" id="" placeholder="Password">
    <input type="submit" name="subButton" id="" value="Submit">
</form>