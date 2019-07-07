<?php

/*
it can be dangerous not to protect the 
data the users entered through form
*/
if(isset($_GET['mySub'])){

    $number = (int) $_GET['myInput'];
    if($number> 0){}
}else {
    echo'your are not allowed to see this page';
}
?>

<form action="" method="GET">
<input type="number" name="myInput">    
<input type="submit" name="mySub" value="Send">    

</form>