<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "Shoes";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
$sql = "UPDATE nhacungcap SET NCC_TEN='".$_POST["NCC_TEN"] ."',
                                NCC_SDT='".$_POST["NCC_SDT"] ."',
                                NCC_EMAIL='".$_POST["NCC_EMAIL"] ."',
                                NCC_DIACHI'".$_POST["NCC_DIACHI"] ."'

Where NCC_ID = '".$_POST["NCC_ID"] ."'";

 
 if ($conn->query($sql) == TRUE) {
 //neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
 header('Location: supplier.php');
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
?>