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


if($_POST['ND_TAIKHOAN'] =="admin" AND $_POST['ND_MATKHAU'] = "123"){
    header('Location:./admin/ad_index.php');
  }


else{
  $sql = "select ND_ID, ND_TEN,ND_TAIKHOAN from NGUOIDUNG where ND_TAIKHOAN = '".$_POST["ND_TAIKHOAN"]."' and ND_MATKHAU = '".($_POST["ND_MATKHAU"])."'";
 
$result = $conn->query($sql);


if ($result->num_rows > 0) {
 
  $row = $result->fetch_assoc();
  $cookie_name = "user";
  $cookie_value = $row['ND_TAIKHOAN'] ;
  setcookie($cookie_name, $cookie_value, time() + (86400 / 24), "/");
  setcookie("ND_TEN", $row['ND_TEN'], time() + (86400 / 24), "/");
  setcookie("ND_ID", $row['ND_ID'], time() + (86400 / 24), "/");

      
  header('Location:khachhang_index.php');  
} 
 
else {
 
  //Tro ve trang dang nhap sau 3 giay
  echo "<script>alert('Đăng Nhập Không Thành Công.Mời Nhập Lại');</script>"; 
  header('Refresh: 2;url=login.php');

}


}
 
  $conn->close();

?>