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
$sql = "UPDATE mausac SET MS_TEN = '".$_POST["MS_TEN"] ."' 

Where MS_ID = '".$_POST["MS_ID"] ."'";

 
 if ($conn->query($sql) == TRUE) {
 //neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
 header('Location: color.php');
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
?>