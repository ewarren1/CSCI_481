<?php

//Connect to the database with (hostname,userid,password,database)
$con = mysqli_connect('avl.cs.unca.edu', 'ljohnso8Arden', 'webbook', 'ljohnso8DBwebbook');

if (!$con) {
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    die('Could not connect: ' . mysqli_error($con));
}


$fname = $_GET['fname'];
$sql = "SELECT first, last, now() FROM Contacts where first = '" . $fname . "'";
//var_dump($sql);
$result = mysqli_query($con, $sql);
if (mysqli_errno($con) != 0) {
    echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
}
// trick to create an array from database call result is from
// http://www.kodingmadesimple.com/2015/01/convert-mysql-to-json-using-php.html
//create an array
$temparray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temparray[] = $row;
}
//Then json_encode the array. You can't do this directly from result? Dumb.
$JSONResult = json_encode($temparray);
echo $JSONResult;

//Always... really always.. close the database connection!
mysqli_close($con);
?>