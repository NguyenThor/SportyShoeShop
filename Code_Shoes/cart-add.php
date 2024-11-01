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

 $a = $_COOKIE["ND_ID"];
 $b = $_GET['SP_ID'];
 $KC_ID = $_POST['KC_ID'];
 $MS_ID = $_POST['MS_ID'];
 $sqlS="SELECT * FROM giohang WHERE SP_ID='$b'";
 $resultS = mysqli_query($conn, $sqlS);
 $rowS = mysqli_fetch_array($resultS, MYSQLI_ASSOC);
    if($b==$rowS['SP_ID'] && $KC_ID==$rowS['KC_ID'] && $MS_ID==$rowS['MS_ID'] ){
      $sp=$rowS['SP_ID'];
      $sqlU="UPDATE giohang SET SOLUONG= 1+$rowS[SOLUONG]
      WHERE SP_ID ='$sp'
      AND KC_ID='$KC_ID'
      AND MS_ID='$MS_ID'";  
      mysqli_query($conn,"$sqlU");

      }
    else{      
      $sql="INSERT INTO giohang (ND_ID, SP_ID, KC_ID, MS_ID, SOLUONG)
      VALUES ('$a','$b','".$_POST["KC_ID"] ."','".$_POST["MS_ID"] ."','".$_POST["SOLUONG"] ."')";
        mysqli_query($conn,"$sql");
      }
 
      

    

echo "Đăng Ký Thành Công";
header('Location: single-product.php?SP_ID='.$b);

          
          $conn->close();
          


?>