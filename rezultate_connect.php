<?php
$conn = mysqli_connect("localhost","root","","registration");


if (mysqli_connect_errno())
  {
  echo "Nu s-a realizat conexiunea ! " . mysqli_connect_error();
  }
