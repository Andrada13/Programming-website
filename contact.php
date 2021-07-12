<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'contact';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {

	exit('Conexiunea nu a reusit : ' . mysqli_connect_error());
}


if (!isset($_POST['nume'], $_POST['prenume'], $_POST['mesaj'])) {

	exit('Completati formularul !');
}

if (empty($_POST['nume']) || empty($_POST['prenume']) || empty($_POST['mesaj'])) {

	exit('Completati formularul !');
}



if ($stmt = $con->prepare('SELECT id, prenume FROM contacts WHERE nume = ?')) {
	$stmt->bind_param('s', $_POST['nume']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		echo 'Mesajul exista deja in baza de date !';
	} else {

		if ($stmt = $con->prepare('INSERT INTO contacts (nume, prenume, mesaj) VALUES (?, ?, ?)')) {
			$stmt->bind_param('sss', $_POST['nume'], $_POST['prenume'], $_POST['mesaj']);
			$stmt->execute();

			echo "<script language='javascript'>";
			echo "alert('Multumin ! Mesajul dumneavoastra a fost trimis !')";
			echo "</script>";

			die();
		} else {

			echo 'Conexiunea a esuat !';
		}
	}
	$stmt->close();
} else {

	echo 'Conexiunea a esuat !';
}
$con->close();
