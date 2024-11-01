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
        $ND_ID = $_COOKIE["ND_ID"];
        $sql = "DELETE FROM giohang WHERE ND_ID='".$ND_ID."';";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('location: cart.php');
        ?>