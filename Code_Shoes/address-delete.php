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
        $DCNH_MA = $_GET['DCNH_MA'];
        $sql = "DELETE FROM diachinhanhang WHERE DCNH_MA='$DCNH_MA';";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('location: address.php');
        ?>