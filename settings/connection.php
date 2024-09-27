<?php


$servername = "localhost";
$username = "root";
$password = "";
$databasename = "lartey_studios_db";


$conn = new mysqli($servername, $username, $password,$databasename) ;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


