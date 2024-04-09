<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_GET['name'];
    $email=$_GET['email'];

    $gender=$_GET['gender'];

}


$con=new mysqli('localhost:8080','root','e066*!iLxXebIm]u','form'); 
   $sql="insert into `data`(name,email,gender)values('$name','$email','$gender')";
if($_POST['register']){
    $name = $_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];

$query = "INSERT INTO data values('$name','$email','$gender')";



}
?>
}
?>