<?php
//connect to the database

$host = "localhost";
$username = "root";
$password = "13572468";
$database = "registration";

$db_name = "registration";

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn->connect_error) {
    # code...
   die('Connection Failed : '.$conn->connect_error);
}else{
    return $conn;
}
?>