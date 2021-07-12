<?php

session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "registration";

$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
    die("Conexiunea a esuat ! " . mysqli_connect_error());
}
