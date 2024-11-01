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
$sql = "UPDATE nguoidung SET ND_TEN='".$_POST["ND_TEN"] ."', 
                                ND_TAIKHOAN='".$_POST["ND_TAIKHOAN"] ."',
                                ND_GIOITINH='".$_POST["ND_GIOITINH"] ."',
                                ND_NGAYSINH='".$_POST["ND_NGAYSINH"] ."',
                                ND_EMAIL='".$_POST["ND_EMAIL"] ."',
                                ND_SDT='".$_POST["ND_SDT"] ."'
                                                                

Where ND_ID = '".$_POST["ND_ID"] ."'";

 
 if ($conn->query($sql) == TRUE) {
 //neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
 header('Location:customer.php');
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
?>