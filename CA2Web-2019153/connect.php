
<?php
/*****************************************
* This query uses the procedural interface
******************************************/

// Credentials
$dbhost = '35.189.94.205';
$dbuser = 'root';
$dbpass = 'cct3034';
$dbname = 'login';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}//
//else echo "Connected successfully";

?>