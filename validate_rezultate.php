<?php

include_once('connection_rezultate.php');

function test_input($data)
{

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = test_input($_POST["username"]);
    $email = test_input($_POST["email"]);
    $stmt =  $conn->prepare("SELECT * FROM accounts");
    $stmt->execute();
    $users = $stmt->fetchAll();




    foreach ($users as $user) {


        if (($user['username'] == $username) &&
            ($user['email'] == $email)
        ) {
            header("Location: Rezultate_participant.php");
        } else {
            echo "<script language='javascript'>";
            echo "alert('Date invalide !')";
            echo "</script>";
        }
    }
}
