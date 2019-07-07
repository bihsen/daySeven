
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
require_once 'database.php';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
$db_name = 'moviedb';
$db_found = mysqli_select_db($conn, DB_NAME);
$query = 'SELECT * FROM users ORDER BY  first_name  LIMIT 3';
$results = mysqli_query($conn, $query);

if(isset($_GET['subButton'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userMail = $_POST['userMail'];
	$userPass = $_POST['userPass'];
	$passConfirmation = $_POST['passConfirmation'];
    echo "hello" .' '. $firstName;

    if (empty($_POST['firstName']) or empty($_POST['lastName']))
    echo 'Firstname and lastname are mandatory';
elseif (!(strlen($_POST['email']) > 8 and strlen($_POST['email']) < 50))
    echo 'Your email should be between 8 and 50 characters';
elseif (!(strpos($_POST['userMail'], '@')))
    echo 'Your email doesn\'t contain @ symbol';
elseif (strlen($_POST['userPass']) != 8)
    echo 'Your password must be 8 character long';
elseif (!($_POST['userPass'] == $_POST['passConfirmation']))
    echo 'Your password are not indentical';
else {
    echo "Your name : " . $_POST['firstName'] . ' ' . $_POST['lastName'] . '<br>';
    echo "Your email : " . $_POST['userMail'] . '<br>';   
}

}

?>

<form action="signin.php" method="_POST">
    <input type="text"  name="firstName" id="" placeholder="First name">
    <input type="text" name="lastName" id="" placeholder="Last name">
    <input type="email" name="userMail" id="" placeholder="Email">
    <input type="password" name="userPass" id="" placeholder="Password">
    <input type="password" name="passConfirmation" id="" placeholder="Password confirmation">
    <input type="submit" name="subButton" id="" value="Submit">
</form>