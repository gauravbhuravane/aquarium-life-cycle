<?php
$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASSWORD");
$dbname = getenv("DB_NAME");

$con = mysqli_connect($host, $user, $pass, $dbname);

if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}
?>
