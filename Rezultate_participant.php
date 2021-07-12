<?php
include_once 'config.php';
$result = mysqli_query($con, "SELECT * FROM accounts");
?>

<!DOCTYPE html>

<html>

<head>
	<title>Rezultate participanti </title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
	<!-- MDB -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</head>

<body>

	<h3 align="center">Rezultate participanti </h3>

	<?php
	if (mysqli_num_rows($result) > 0) {
	?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nume</th>
					<th scope="col">Email</th>
					<th scope="col">Nota Informatica</th>
					<th scope="col">Nota Matematica</th>
					<th scope="col">Media</th>
				</tr>
			</thead>
			<?php
			$i = 0;
			while ($row = mysqli_fetch_array($result)) {
			?>

				<tr>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["username"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["nota_info"]; ?></td>
					<td><?php echo $row["nota_mate"]; ?></td>
					<td><?php echo $row["media"]; ?></td>
				</tr>
			<?php
				$i++;
			}
			?>

		</table>
	<?php
	} else {
		echo "Nu exista inregistrari in baza de date ! ";
	}
	?>


	<div>
		<h4 class="deconectare"> Te poti deconecta aici :
			<a href="Rezultate.html" class="btn btn-info btn-lg">
				<span class="glyphicon glyphicon-log-out"></span> Deconecteaza-te
			</a>
		</h4>
	</div>

</body>

</html>