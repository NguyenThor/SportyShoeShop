<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Shoes";
     $conn = new mysqli($servername, $username, $password, $dbname);

     $DH_ID = $_GET['DH_ID'];
     $sql = "UPDATE `DONHANG` SET TT_ID = 6 WHERE DH_ID = '$DH_ID'"; 
 
     $result = mysqli_query($conn, $sql);
 
 
     mysqli_close($conn);
 
        header('location: order.php');
        ?>