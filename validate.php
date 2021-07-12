<?php
 
include_once('connection_admin.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"]== "POST") {
   
    $name = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM loginadmin");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['name'] == $name) &&
            ($user['password'] == $password)) {
                header("Location: admin.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('Date invalide !')";
            echo "</script>";
            die();
        }
    }
}
 
?>