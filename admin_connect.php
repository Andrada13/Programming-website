<?php
$conn = mysqli_connect("localhost", "root", "", "anunt");


if (mysqli_connect_errno()) {
  echo "Nu s-a rezlizat conexiunea ! " . mysqli_connect_error();
}
