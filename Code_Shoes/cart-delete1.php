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
        $GH_ID = $_GET['GH_ID'];
        $sql = "DELETE FROM giohang WHERE GH_ID='".$GH_ID."';";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('location: cart.php');
        ?>