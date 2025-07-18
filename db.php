<?php
$host = "sql12.freesqldatabase.com";
$user = "sql12790607";
$password = "idkAqfcDwn";
$database = "sql12790607";
$port = 3306;

$con = new mysqli($host, $user, $password, $database, $port);

// Check connection
if ($con->connect_error) {
    die("❌ Connection failed: " . $con->connect_error);
}
?>
