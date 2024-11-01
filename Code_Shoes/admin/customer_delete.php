<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Shoes";
     $conn = new mysqli($servername, $username, $password, $dbname);

     $ND_ID = $_GET['ND_ID'];
     $sql = "DELETE FROM `nguoidung` WHERE ND_ID = '$ND_ID'";
 
 
     $result = mysqli_query($conn, $sql);
 
 
     mysqli_close($conn);
 
        header('location: customer.php');
        ?>