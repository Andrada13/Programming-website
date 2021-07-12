<?php
	$id=$_GET['id'];
	include('admin_connect.php');
	mysqli_query($conn,"delete from `user` where userid='$id'");
	header('location:adminpage.php');
