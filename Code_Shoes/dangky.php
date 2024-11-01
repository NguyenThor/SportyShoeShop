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
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $ND_TEN   = addslashes($_POST['ND_TEN']);
    $ND_TAIKHOAN   = addslashes($_POST['ND_TAIKHOAN']);
    $ND_MATKHAU      = addslashes($_POST['ND_MATKHAU']);
    $ND_GIOITINH   = addslashes($_POST['ND_GIOITINH']);
    $ND_NGAYSINH   = addslashes($_POST['ND_NGAYSINH']);
    $ND_EMAIL        = addslashes($_POST['ND_EMAIL']);
    $ND_SDT        = addslashes($_POST['ND_SDT']);
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$ND_TEN || !$ND_TAIKHOAN || !$ND_MATKHAU || !$ND_GIOITINH || !$ND_NGAYSINH || !$ND_EMAIL || !$ND_SDT)
    {
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin.');</script>"; 
        header('Refresh: 1;url=register.php');
        exit;
    }
          
        // Mã khóa mật khẩu
        //$ND_MATKHAU = md5($ND_MATKHAU);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($conn,"SELECT ND_TAIKHOAN FROM NGUOIDUNG WHERE ND_TAIKHOAN='$ND_TAIKHOAN'")) > 0){
        echo "<script>alert('Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.');</script>"; 
        header('Refresh: 1;url=register.php');
        exit;
    }
          
    //Kiểm tra email có đúng định dạng hay không
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $ND_EMAIL))
    {
        echo "<script>alert('Email này không hợp lệ. Vui long nhập email khác.');</script>"; 
        header('Refresh: 1;url=register.php');
        exit;
    }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($conn,"SELECT ND_EMAIL FROM NGUOIDUNG WHERE ND_EMAIL='$ND_EMAIL'")) > 0)
    {
        echo "<script>alert('Email này đã có người dùng. Vui lòng chọn Email khác.');</script>"; 
        header('Refresh: 1;url=register.php');
        exit;
    }

    //Lưu thông tin thành viên vào bảng
    @$addmember = mysqli_query($conn,"
        INSERT INTO NGUOIDUNG (
            VT_ID,
            ND_TEN,
            ND_TAIKHOAN,
            ND_MATKHAU,
            ND_GIOITINH,
            ND_NGAYSINH,
            ND_EMAIL,
            ND_SDT
        )
        VALUE (
            '1',
            '{$ND_TEN}',
            '{$ND_TAIKHOAN}',
            '{$ND_MATKHAU}',
            '{$ND_GIOITINH}',
            '{$ND_NGAYSINH}',
            '{$ND_EMAIL}',
            '{$ND_SDT}'
        )
    ");
                          
    //Thông báo quá trình lưu
    if ($addmember){
        echo "<script>alert('Quá trình đăng ký thành công.');</script>"; 
        header('Refresh: 1;url=khachhang_index.php');}
    else
        echo "<script>alert('Có lỗi xảy ra trong quá trình đăng ký.');</script>"; 

?>