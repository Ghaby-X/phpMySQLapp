<?php
$servername = $_ENV['DB_SERVERNAME'] ?? "db";
$username = $_ENV['DB_USER'] ?? "root";
$password = $_ENV['DB_PASSWORD'] ?? "password123";
$dbname = $_ENV['DB_NAME'] ?? "book_movie_db";

$bookconn = mysqli_connect($servername, $username, $password, $dbname );
// Check connection
if (!$bookconn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>