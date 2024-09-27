<?php


$servername = "localhost";
$username = "root";
$password = "Vcnm1H&w";
$databasename = "lartey_studios_db";


$conn = new mysqli($servername, $username, $password,$databasename) ;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


