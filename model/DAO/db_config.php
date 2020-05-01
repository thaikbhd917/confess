<?php

function getConnection(){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vti001";
// Create connection


$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to databases<br>";
return $conn;
}


?>