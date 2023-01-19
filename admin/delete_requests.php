<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM users_requests WHERE o_id = '".$_GET['order_del']."'");
header("location:all_requests.php");  

?>
