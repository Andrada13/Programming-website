<?php
include_once 'config.php';
$result = mysqli_query($con, "SELECT * FROM accounts");
?>


<!DOCTYPE html>
<html>

<head>
	<title> Afisare Participanti</title>

	<link rel="stylesheet" href="fetch_style.css">
	
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
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand"><img src="images/trophy (1).png"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-link" href="index.html">Home</a>
						<a class="nav-link" href="Regulament.html">Regulament</a>
						<a class="nav-link" href="Organizatori.html">Organizatori</a>
						<a class="nav-link" href="Sponsori.html">Sponsori</a>
						<a class="nav-link" href="Noutati.html">Noutati</a>
						<a class="nav-link" href="Participanti.html">Participanti</a>
						<a class="nav-link" href="Subiecte.html">Subiecte</a>
						<a class="nav-link" href="Rezultate.html">Rezultate</a>
						<a class="nav-link" href="Contact.html">Contact</a>



					</div>
				</div>
			</div>
		</nav>



	</section>


	<div>
		<h2 class="felicitari">Felicitari ! Te-ai inregistrat cu succes !</h2>
		<h4 class="lista"> Lista cu participanti este afisata mai jos : </h4>
	</div>

	<?php
	if (mysqli_num_rows($result) > 0) {
	?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col"><strong>ID</strong></th>
					<th scope="col"><strong>Nume</strong></th>
					<th scope="col"><strong>Email</strong></th>

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

				</tr>
			<?php
				$i++;
			}
			?>
		</table>
	<?php
	} else {
		echo "Nu aveti inregistrari in baza de date ! ";
	}
	?>



	<div class="deconectare">
		<h5>Te poti deconecta aici : &nbsp;&nbsp;&nbsp;
			<a href="Participanti.html" class="btn btn-info btn-lg">
				<span class="glyphicon glyphicon-log-out"></span> Deconecteaza-te
			</a>
		</h5>
	</div>




</body>

</html>