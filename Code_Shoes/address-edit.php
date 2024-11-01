<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypham";
$conn = new mysqli($servername, $username, $password, $dbname);
 
$DCNH_MA = $_GET['DCNH_MA'];

$sql = "UPDATE diachinhanhang  WHERE DCNH_MA='$DCNH_MA'";


$result = mysqli_query($conn, $sql);


mysqli_close($conn);


header('location:address.php');

?>