<?php
/**
 * Created by PhpStorm.
 * User: anirban
 * Date: 4/18/2017
 * Time: 4:58 PM
 */

$db_name = $_ENV['DB_NAME'] ?? "book_movie_db";

function getfilms(){
    global $conn, $db_name;
    $get_films = "SELECT _title FROM $db_name.films order by _title";
    $run_films = mysqli_query($conn, $get_films);
    while ($row_films = mysqli_fetch_assoc($run_films)){
        $film_name = $row_films['_title'];
        echo "<option>$film_name</option>";
    }
}

function getgenres(){
    global $conn, $db_name;
    $get_genres = "SELECT _title FROM $db_name.genre order by _title";
    $run_genres = mysqli_query($conn, $get_genres);
    while ($row_genres = mysqli_fetch_assoc($run_genres)) {
        $genres_name = $row_genres['_title'];
        echo "<li ><a href=\"home.php?genre=$genres_name\">$genres_name</a></li>";
    }
}

function optgenres(){
    global $conn, $db_name;
    $get_genre = "SELECT _title FROM $db_name.genre order by _title";
    $run_genre = mysqli_query($conn, $get_genre);
    while ($row_genre = mysqli_fetch_assoc($run_genre)) {
        $genre_name = $row_genre['_title'];
        echo "<option>$genre_name</option>";
    }
}

function getCountries(){
     global $conn, $db_name;
    $get_countries = "SELECT DISTINCT(country) FROM $db_name.films order by country";
    $run_countries = mysqli_query($conn, $get_countries);
    while ($row_countries = mysqli_fetch_assoc($run_countries)) {
        $countries_name = $row_countries['country'];
        echo "<li ><a href=\"home.php?country=$countries_name\">$countries_name</a></li>";
    }
 }

function optCountries(){
    global $conn, $db_name;
    $get_countries = "SELECT DISTINCT(country) FROM $db_name.films order by country";
    $run_countries = mysqli_query($conn, $get_countries);
    while ($row_countries = mysqli_fetch_assoc($run_countries)) {
        $countries_name = $row_countries['country'];
        echo "<option>$countries_name</option>";
    }
}

function getDirectors(){
    global $conn, $db_name;
    $get_directors = "SELECT DISTINCT(director) FROM $db_name.films order by director";
    $run_directors = mysqli_query($conn, $get_directors);
    while ($row_directors = mysqli_fetch_assoc($run_directors)) {
        $director_name = $row_directors['director'];
        echo "<li ><a href=\"home.php?director=$director_name\">$director_name</a></li>";
    }
}

function optDirectors(){
    global $conn, $db_name;
    $get_directors = "SELECT DISTINCT(director) FROM $db_name.films order by director";
    $run_directors = mysqli_query($conn, $get_directors);
    while ($row_directors = mysqli_fetch_assoc($run_directors)) {
        $director_name = $row_directors['director'];
        echo "<option>$director_name</option>";
    }
}

function getYears(){
    global $conn, $db_name;
    $get_year = "SELECT DISTINCT(release_year) FROM $db_name.films order by release_year";
    $run_year = mysqli_query($conn, $get_year);
    while ($row_year = mysqli_fetch_assoc($run_year)) {
        $year = $row_year['release_year'];
        echo "<li ><a href=\"home.php?year=$year\">$year</a></li>";
    }
}

?>