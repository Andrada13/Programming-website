<?php
	$id=$_GET['id'];
	include('rezultate_connect.php');
	mysqli_query($conn,"delete from `accounts` where id='$id'");
	header('location:Rezultate_admin.php');
