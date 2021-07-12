<?php
	include('rezultate_connect.php');
	$id=$_GET['id'];
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$nota_info=$_POST['nota_info'];
	$nota_mate=$_POST['nota_mate'];
	$media=(($_POST['nota_info']+$_POST['nota_mate'])/2);

	
	
	mysqli_query($conn,"update `accounts` set username='$username', email='$email', nota_info='$nota_info',nota_mate='$nota_mate', media='$media' where id='$id'");
	header('location:Rezultate_admin.php');
