<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Shoes";
     $conn = new mysqli($servername, $username, $password, $dbname);

     $TH_ID = $_GET['TH_ID'];
     $sql = "DELETE FROM `thuonghieu` WHERE TH_ID = '$TH_ID'";
 
 
     $result = mysqli_query($conn, $sql);
 
 
     mysqli_close($conn);
 
        header('location: brand.php');
        ?>