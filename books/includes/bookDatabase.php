<?php
$servername = $_ENV['DB_SERVERNAME'] ?? "db";
$username = "root";
$password = "admin";
$dbname = $_ENV['DB_NAME'] ?? "book_movie_db";

$bookconn = mysqli_connect($servername, $username, $password, $dbname );
// Check connection
if (!$bookconn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>