<?php

include "connection.php";
 $no = $_POST['no'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 //insert inro
 $sql1 = "INSERT INTO project (S_no,name, email)
 VALUES ('$no','$name','$email');";
 mysqli_query($conn, $sql1);
 header('location: project.php');
exit;
?>