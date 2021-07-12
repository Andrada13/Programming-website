<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'registration';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	
	exit('Completati formularul !');
}

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	
	exit('Completati formularul !');
}



if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email-ul nu este valid');
}

if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
    exit('Numele nu este valid');
}


if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
		echo 'Numele este deja inregistrat in baza de date !';
	} else {
		
if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
	$stmt->execute();


	header("Location: http://localhost/PROIECT/fetch_participanti.php");
    die();


} else {

	echo 'Nu s-a efectuat conexiunea !';
}
	}
	$stmt->close();
} else {
	
	echo 'Nu s-a efectuat conexiunea !';
}
$con->close();
