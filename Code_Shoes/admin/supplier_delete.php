<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Shoes";
     $conn = new mysqli($servername, $username, $password, $dbname);

     $NCC_ID = $_GET['NCC_ID'];
     $sql = "DELETE FROM `nhacungcap` WHERE NCC_ID = '$NCC_ID'";
 
 
     $result = mysqli_query($conn, $sql);
 
 
     mysqli_close($conn);
 
        header('location: supplier.php');
        ?>