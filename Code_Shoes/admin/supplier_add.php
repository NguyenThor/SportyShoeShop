<?php
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "Shoes";
                                                $conn = new mysqli($servername, $username, $password, $dbname);

            
                $sql = "INSERT INTO nhacungcap(`NCC_TEN`, `NCC_SDT`, `NCC_EMAIL`, `NCC_DIACHI`) 
                VALUES('".$_POST["NCC_TEN"] ."','".$_POST["NCC_SDT"] ."','".$_POST["NCC_EMAIL"] ."','".$_POST["NCC_DIACHI"] ."')";
              

              
                if ($conn->query($sql) == TRUE) {
                echo "Đăng Ký Thành Công";
                //neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
                header('Location: supplier.php');
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
                ?>

	