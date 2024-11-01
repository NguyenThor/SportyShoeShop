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
 $GH_ID = $_GET['GH_ID'];
 $sqlKT = "SELECT *FROM giohang a , sanpham b WHERE a.SP_ID= b.SP_ID AND GH_ID = '".$GH_ID."'";


$resultKT = mysqli_query($conn,"$sqlKT");
$rowKT = mysqli_fetch_array($resultKT, MYSQLI_ASSOC);


$sql = "UPDATE giohang SET SOLUONG = SOLUONG+1  
Where GH_ID=$GH_ID";

 if ($conn->query($sql) == TRUE) {
 //neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
 header('Location: cart.php');
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
?>