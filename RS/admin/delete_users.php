<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

mysqli_query($db,"DELETE FROM customer WHERE customer_id = '".$_GET['user_del']."'");
header("location:all_users.php");  

?>
