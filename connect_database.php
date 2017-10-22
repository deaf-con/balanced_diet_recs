<?php

$db_username = "root";
$db_password = "";
//$db_info = "mysql:host=localhost;dbname=food_guide";
$db_host = "localhost";
$db_name = "food_guide";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>