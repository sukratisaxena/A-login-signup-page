<?php
$db_server="localhost:3307";
$db_user="root";
$db_password="";
$db_name="register";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name); 

if($conn->connect_error)
{
    die("Failed to connect:".$conn->connect_error);
}
?>