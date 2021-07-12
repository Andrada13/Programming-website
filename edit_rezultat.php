<?php
include('rezultate_connect.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "select * from `accounts` where id='$id'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Modificare rezultat</title>

	<link rel="stylesheet" href="adminpage_style.css">
</head>


<body>
	<h2>Modificare rezultat</h2>
	<form method="POST" action="update_rezultat.php?id=<?php echo $id; ?>">
		<label>Nume : </label><input type="text" value="<?php echo $row['username']; ?>" name="username"><br><br>
		<label>Email : </label><input type="text" value="<?php echo $row['email']; ?>" name="email"><br><br>
		<label>Nota Informatica : </label><input type="text" value="<?php echo $row['nota_info']; ?>" name="nota_info"><br><br>
		<label>Nota Matematica : </label><input type="text" value="<?php echo $row['nota_mate']; ?>" name="nota_mate"><br><br>
		<button class="btn" type="submit" name="submit" style="background: #556B2F;">Modifica</button>
		<a href="Rezultate_admin.php" class="btn" style="background: #556B2F;">Back</a>
	</form>
</body>

</html>