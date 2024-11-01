<?php
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "Shoes";
                                                $conn = new mysqli($servername, $username, $password, $dbname);

            
                $sql = "INSERT INTO kichco(KC_TEN) 
                VALUES('".$_POST["KC_TEN"] ."')";
              

              
                if ($conn->query($sql) == TRUE) {
                echo "Đăng Ký Thành Công";
                //neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
                header('Location: size.php');
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
                ?>

	