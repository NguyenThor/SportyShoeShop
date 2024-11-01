<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Shoes";
     $conn = new mysqli($servername, $username, $password, $dbname);

     $SP_ID = $_GET['SP_ID'];
     $sql = "DELETE FROM `kcsp` WHERE SP_ID = '$SP_ID'";
 
     if ($conn->query($sql) == TRUE){
      $sql1 = "DELETE FROM `mssp` WHERE SP_ID = '$SP_ID'";
      mysqli_query($conn,"$sql1");
      $sql2 = "DELETE FROM `sanpham` WHERE SP_ID = '$SP_ID'";
      mysqli_query($conn,"$sql2");
     }
     $result = mysqli_query($conn, $sql);
 
 
     mysqli_close($conn);
 
        header('location: product.php');
        ?>