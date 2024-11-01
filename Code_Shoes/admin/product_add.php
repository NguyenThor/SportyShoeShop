<?php
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "nienluannganh";
                                                $conn = new mysqli($servername, $username, $password, $dbname);

            
$sql="INSERT INTO `sanpham`(`TH_ID`, `NCC_ID`, `LH_ID`, `SP_TEN`, `SP_GIA`,`SP_HINH`, `SP_SOLUONGTON`, `SP_MOTA`, `SP_HINH1`, `SP_HINH2`)
      VALUES ('".$_POST["TH_ID"] ."', '".$_POST["NCC_ID"] ."','".$_POST["LH_ID"] ."','".$_POST["SP_TEN"] ."','".$_POST["SP_GIA"] ."',
              '".$_POST["SP_HINH"] ."','".$_POST["SP_SOLUONGTON"] ."','".$_POST["SP_MOTA"] ."','".$_POST["SP_HINH1"] ."','".$_POST["SP_HINH2"] ."') ";

                if ($conn->query($sql) == TRUE) {
                echo "Đăng Ký Thành Công";
                //neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
                header('Location: product.php');
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
                ?>

	
