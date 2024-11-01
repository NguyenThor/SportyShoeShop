<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Shoes";
     $conn = new mysqli($servername, $username, $password, $dbname);

     $MS_ID = $_GET['MS_ID'];
     $sql = "DELETE FROM `mausac` WHERE MS_ID = '$MS_ID'";
 
 
     $result = mysqli_query($conn, $sql);
 
 
     mysqli_close($conn);
 
        header('location: color.php');
        ?>