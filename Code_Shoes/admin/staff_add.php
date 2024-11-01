<?php
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "Shoes";
                                                $conn = new mysqli($servername, $username, $password, $dbname);

            
                $sql = "INSERT INTO `nguoidung`( `VT_ID`, `ND_TEN`, `ND_TAIKHOAN`, `ND_MATKHAU`, 
                                    `ND_GIOITINH`, `ND_NGAYSINH`, `ND_EMAIL`, `ND_SDT`) 

                        VALUES(2,'".$_POST["ND_TEN"] ."','".$_POST["ND_TAIKHOAN"] ."','".$_POST["ND_MATKHAU"] ."',
                                '".$_POST["ND_GIOITINH"] ."','".$_POST["ND_NGAYSINH"] ."','".$_POST["ND_EMAIL"] ."','".$_POST["ND_SDT"] ."')";
              

              
                if ($conn->query($sql) == TRUE) {
                echo "Đăng Ký Thành Công";
                //neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
                header('Location: staff.php');
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
                ?>

	