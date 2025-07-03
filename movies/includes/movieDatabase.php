<?php
$servername = $_ENV['DB_SERVERNAME'] ?? "db";
$username = "root";
$password = "password123";
$dbname = $_ENV['DB_NAME'] ?? "book_movie_db";

$conn = mysqli_connect($servername, $username, $password,$dbname );
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>