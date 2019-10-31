<?php

//Connect to the database with (hostname,userid,password,database)
$con = mysqli_connect('avl.cs.unca.edu', 'ljohnso8Arden', 'webbook', 'ljohnso8DBwebbook');

if (!$con) {
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    die('Could not connect: ' . mysqli_error($con));
}
$firstname = $_POST['firstname'];


$sql = "DELETE FROM `ljohnso8DBwebbook`.`Contacts` WHERE firstname = '$firstname'" ;

if(mysqli_query($con, $sql ) ) {
    die('Could not delete data: ' . mysql_error());
}else{
    echo "Deleted data successfully\n";
}


mysqli_close($con);
?>