<?php

//Connect to the database with (hostname,userid,password,database)
$con = mysqli_connect('avl.cs.unca.edu', 'ljohnso8Arden', 'webbook', 'ljohnso8DBwebbook');

if (!$con) {
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    die('Could not connect: ' . mysqli_error($con));
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$mobile = $_POST['mobile'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$web = $_POST['web'];

$sql = " INSERT INTO `ljohnso8DBwebbook`.`Contacts`(`first`, `last`, `phone`, `mobile`, `fax`, `email`, `web`)
VALUES ('$firstname', '$lastname', '$phone', '$mobile', '$fax', '$email', '$web')";



mysqli_close($con);

?>
