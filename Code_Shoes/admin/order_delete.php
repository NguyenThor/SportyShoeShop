<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Shoes";
     $conn = new mysqli($servername, $username, $password, $dbname);

     $DH_ID = $_GET['DH_ID'];
     $sql = "DELETE FROM `CHITIETDONHANG` WHERE DH_ID = '$DH_ID'"; 
 
     $result = mysqli_query($conn, $sql);
 
 
     mysqli_close($conn);
 
        header('location: order.php');
        ?>