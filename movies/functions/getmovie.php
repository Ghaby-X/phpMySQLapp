<?php
//include("../includes/database.php");

$db_name = $_ENV['DB_NAME'] ?? "book_movie_db";
// Debug: echo "DB_NAME: " . ($db_name) . "<br>";

function get_films($data)
{
    global $conn, $db_name;
    $output = '';
    $sql = "SELECT _title, director, release_year, country FROM $db_name.films WHERE _id IN (SELECT film_id FROM $db_name.genre_film_relationship WHERE genre_id = (SELECT _id FROM $db_name.genre WHERE _title = '" . $data . "'))";
    //echo $sql;


    $result = mysqli_query($conn, $sql);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (mysqli_num_rows($result) > 0) {
        $output .= '<h4 align="center">'.$data.' Movie List </h4>';
        $output .= '<div class="table-responsive">
                    <table class = "table table bordered">
                        <tr>
                         <th> Name </th>
                         <th> Director</th>
                         <th> Release Year </th>
                         <th> Country</th>
                        </tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '
            <tr>
                <td>' . $row["_title"] . '</td>
                <td>' . $row["director"] . '</td>
                <td>' . $row["release_year"] . '</td>
                <td>' . $row["country"] . '</td>
            </tr>
         ';
        }
        echo $output;

    } else {
        echo "Data NOT Found";
    }

}

function get_country($data)
{
    global $conn, $db_name;
    $output = '';
    $sql = "SELECT _title, director, release_year, country FROM $db_name.films WHERE country = '" . $data . "'";
    //echo $sql;


    $result = mysqli_query($conn, $sql);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (mysqli_num_rows($result) > 0) {
        $output .= '<h4 align="center"> Movie List </h4>';
        $output .= '<div class="table-responsive">
                    <table class = "table table bordered">
                        <tr>
                         <th> Name </th>
                         <th> Director</th>
                         <th> Release Year </th>
                         <th> Country</th>
                        </tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '
            <tr>
                <td>' . $row["_title"] . '</td>
                <td>' . $row["director"] . '</td>
                <td>' . $row["release_year"] . '</td>
                <td>' . $row["country"] . '</td>
            </tr>
         ';
        }
        echo $output;

    } else {
        echo "Data NOT Found";
    }
}

function get_director($data)
{
    global $conn, $db_name;
    $output = '';
    $sql = "SELECT _title, director, release_year, country FROM $db_name.films WHERE director = '" . $data . "'";
    //echo $sql;


    $result = mysqli_query($conn, $sql);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (mysqli_num_rows($result) > 0) {
        $output .= '<h4 align="center"> Movie List </h4>';
        $output .= '<div class="table-responsive">
                    <table class = "table table bordered">
                        <tr>
                         <th> Name </th>
                         <th> Director</th>
                         <th> Release Year </th>
                         <th> Country</th>
                        </tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '
            <tr>
                <td>' . $row["_title"] . '</td>
                <td>' . $row["director"] . '</td>
                <td>' . $row["release_year"] . '</td>
                <td>' . $row["country"] . '</td>
            </tr>
         ';
        }
        echo $output;

    } else {
        echo "Data NOT Found";
    }
}

function get_year($data)
{
    global $conn, $db_name;
    $output = '';
    $sql = "SELECT _title, director, release_year, country FROM $db_name.films WHERE release_year = '" . $data . "'";
    //echo $sql;


    $result = mysqli_query($conn, $sql);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (mysqli_num_rows($result) > 0) {
        $output .= '<h4 align="center"> Movie List </h4>';
        $output .= '<div class="table-responsive">
                    <table class = "table table bordered">
                        <tr>
                         <th> Name </th>
                         <th> Director</th>
                         <th> Release Year </th>
                         <th> Country</th>
                        </tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '
            <tr>
                <td>' . $row["_title"] . '</td>
                <td>' . $row["director"] . '</td>
                <td>' . $row["release_year"] . '</td>
                <td>' . $row["country"] . '</td>
            </tr>
         ';
        }
        echo $output;

    } else {
        echo "Data NOT Found";
    }
}
?>
