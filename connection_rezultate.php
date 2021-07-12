<?php

try {
    $servername = "localhost";
    $dbname = "registration";
    $username = "root";
    $password = "";

    $conn = new PDO(
        "mysql:host=$servername; dbname=registration",
        $username,
        $password
    );

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
} catch (PDOException $e) {
    echo "Conexiunea a esuat ! " . $e->getMessage();
}
