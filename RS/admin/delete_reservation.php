<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

mysqli_query($db,"DELETE FROM reservation WHERE reservation_id = '".$_GET['order_del']."'");
header("location:all_reservations.php");  

?>
