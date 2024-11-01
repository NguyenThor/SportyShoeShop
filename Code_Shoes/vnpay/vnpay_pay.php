<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Tạo mới đơn hàng</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="assets/jumbotron-narrow.css" rel="stylesheet">  
        <script src="assets/jquery-1.11.3.min.js"></script>
    </head>

    <body>
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
            $DH_ID= $_GET["DH_ID"];
            $sql = " SELECT *
                FROM donhang
                    WHERE DH_ID = '$DH_ID'";
               
			$result = mysqli_query($conn, $sql);

			$data = [];
        $rowNum = 1;
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $data[] = array(
                
                'DH_ID' => $row['DH_ID'],
                
                'DH_TONGTHANHTOAN' => $row['DH_TONGTHANHTOAN'],
                
            

            );
            
        }
            ?>
                
        <?php require_once("config.php"); ?>             
        <div class="container">
            <div class="modal-content" >
                <center>
                <h3>Cổng thanh toán VNPAY</h3>
                
                    <div class="table-responsive" style="font-size: 20px;">
                        <div class="form-group" style="text-align:left;margin-left:250px;">
                        <form action="vnpay_create_payment.php" id="frmCreateOrder" method="post">       
                            <?php foreach ($data as $row) : ?>
                            <div class="form-group">
                                
                                <label for="amount">Số tiền: </label> <?php echo'' .number_format($row['DH_TONGTHANHTOAN']); ?> VND
                                
                                <input id="amount" name="amount" TYPE="hidden" value="<?php echo $row['DH_TONGTHANHTOAN']; ?>" >
                            
                            </div> <?php endforeach; ?>
                            <h4>Chọn phương thức thanh toán</h4>
                            <div class="form-group">
                                <h5>Cách 1: Chuyển hướng sang Cổng VNPAY chọn phương thức thanh toán</h5>
                            <input type="radio" Checked="True" id="bankCode" name="bankCode" value="">
                            <label for="bankCode">Cổng thanh toán VNPAYQR</label><br>
                            
                            <h5>Cách 2: Tách phương thức tại site của đơn vị kết nối</h5>
                            <input type="radio" id="bankCode" name="bankCode" value="VNPAYQR">
                            <label for="bankCode">Thanh toán bằng ứng dụng hỗ trợ VNPAYQR</label><br>
                            
                            <input type="radio" id="bankCode" name="bankCode" value="VNBANK">
                            <label for="bankCode">Thanh toán qua thẻ ATM/Tài khoản nội địa</label><br>
                            
                            <input type="radio" id="bankCode" name="bankCode" value="INTCARD">
                            <label for="bankCode">Thanh toán qua thẻ quốc tế</label><br>
                            
                            </div>
                            <div class="form-group">
                                <h5>Chọn ngôn ngữ giao diện thanh toán:</h5>
                                <input type="radio" id="language" Checked="True" name="language" value="vn">
                                <label for="language">Tiếng việt</label><br>
                                <input type="radio" id="language" name="language" value="en">
                                <label for="language">Tiếng anh</label><br>
                                
                            </div>



                            
                            <button type="submit"  class="btn btn-success " href>Thanh toán</button>
                            
                        </form>
                    </div>
                    <p>
                        &nbsp;
                    </p>
                    <footer class="footer">
                        <p>&copy; VNPAY 2020</p>
                    </footer>
                </div> 
                </center> 
            </div> 
                
        </div>
    </body>
</html>
