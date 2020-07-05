<?php
// Login credentials for AWS database
$servername = "52.50.23.197:3306";
$username = "johnstudent";
$password = "cct19";
$database = "human_resources";

// Create connection
$connection_AWS = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection_AWS) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>