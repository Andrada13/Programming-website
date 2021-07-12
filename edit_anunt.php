<?php
include('admin_connect.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "select * from `user` where userid='$id'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>

<head>
	<title>Modificare anunt</title>

	<link rel="stylesheet" href="adminpage_style.css">
</head>

<body>
	<h2>Modificare anunt</h2>
	<form method="POST" action="update_anunt.php?id=<?php echo $id; ?>">
		<label>Categorie anunt : </label><input type="text" value="<?php echo $row['categorie']; ?>" name="categorie">
		<label>Anunt : </label><input type="text" value="<?php echo $row['descriere']; ?>" name="descriere">
		<button class="btn" type="submit" name="submit" style="background: #556B2F;">Modifica</button>
		<a href="adminpage.php" class="btn" style="background: #556B2F;">Back</a>
	</form>
</body>

</html>