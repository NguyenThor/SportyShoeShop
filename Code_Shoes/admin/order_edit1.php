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
$sql = "UPDATE DONHANG SET TT_ID='".$_POST["TT_ID"] ."'
Where DH_ID = '".$_POST["DH_ID"] ."'";

 
 if ($conn->query($sql) == TRUE) {
    echo "<script>alert('Cập nhật trạng thái đơn hàng thành công!');</script>"; 
    header('Refresh: 1;url=order.php');
    exit;
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
?>