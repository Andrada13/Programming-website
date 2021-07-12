<?php
	include('admin_connect.php');
	$id=$_GET['id'];
	
	$categorie=$_POST['categorie'];
	$descriere=$_POST['descriere'];
	
	mysqli_query($conn,"update `user` set categorie='$categorie', descriere='$descriere' where userid='$id'");
	header('location:adminpage.php');
