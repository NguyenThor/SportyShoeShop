<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Shoes";
     $conn = new mysqli($servername, $username, $password, $dbname);

     $KC_ID = $_GET['KC_ID'];
     $sql = "DELETE FROM `kichco` WHERE KC_ID = '$KC_ID'";
 
 
     $result = mysqli_query($conn, $sql);
 
 
     mysqli_close($conn);
 
        header('location: size.php');
        ?>