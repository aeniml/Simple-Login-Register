<?php

$host = "localhost";
$user = "REPLACE_WITH_USER"; // replace this
$password = "REPLACE_WITH_PASSWORD"; // replace this
$database = "user_db";

$conn = new mysqli($host,$user,$password, $database);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

?>