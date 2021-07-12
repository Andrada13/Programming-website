<?php
	include('rezultate_connect.php');
	
	$username=$_POST['username'];
	$email=$_POST['email'];
    $nota_info=$_POST['nota_info'];
    $nota_mate=$_POST['nota_mate'];
    $media=(($_POST['nota_info']+$_POST['nota_mate'])/2);

		
	mysqli_query($conn,"insert into `accounts` (username,email,nota_info,nota_mate,media) values ('$username','$email','$nota_info','$nota_mate','$media')");
   
	header('location:Rezultate_admin.php');
