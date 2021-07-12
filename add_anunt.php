<?php
	include('admin_connect.php');
	
	$categorie=$_POST['categorie'];
	$descriere=$_POST['descriere'];
		
	mysqli_query($conn,"insert into `user` (categorie,descriere) values ('$categorie','$descriere')");
   
	header('location:adminpage.php');
