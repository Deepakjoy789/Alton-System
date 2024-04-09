<?php
$HOSTNAME='localhost:8080';
$USERNAME='root';
$PASSWORD='e066*!iLxXebIm]u';
$DATABaSE='signupforms';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);

if($con){
echo"Connection successful";
}

?>
