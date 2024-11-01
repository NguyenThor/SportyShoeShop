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
$sql = "UPDATE sanpham SET TH_ID='".$_POST["TH_ID"] ."', 
                                NCC_ID='".$_POST["NCC_ID"] ."',
                                LH_ID='".$_POST["LH_ID"] ."',
                                SP_TEN='".$_POST["SP_TEN"] ."',
                                SP_GIA='".$_POST["SP_GIA"] ."',
                                SP_HINH='".$_POST["SP_HINH"] ."',
                                SP_HINH1='".$_POST["SP_HINH1"] ."',
                                SP_HINH2='".$_POST["SP_HINH2"] ."',
                                SP_MOTA='".$_POST["SP_MOTA"] ."',
                                SP_SOLUONGTON='".$_POST["SP_SOLUONGTON"] ."'                               

Where SP_ID = '".$_POST["SP_ID"] ."'";

 
 if ($conn->query($sql) == TRUE) {
 //neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
 header('Location:product.php');
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
?>