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

$a = $_COOKIE["ND_ID"];
$timestamp = time();


$sql="INSERT INTO donhang (DH_ID,ND_ID, PTTT_ID, DCNH_MA, TT_ID, DH_TONGTIENHANG, DH_TONGTHANHTOAN, DH_GHICHU)
      VALUES ('$timestamp$a','".$a."','".$_POST["PTTT_ID"] ."', '".$_POST["DCNH_MA"] ."',1,
        '".$_POST["DH_TONGTIENHANG"] ."','".$_POST["DH_TONGTHANHTOAN"] ."','".$_POST["DH_GHICHU"] ."') ";

                

    if ($conn->query($sql) == TRUE) {    
        $sql1 = "select * from giohang a, sanpham b, mausac c, kichco d
        where a.SP_ID = b.SP_ID
        and a.KC_ID = d.KC_ID
        and a.MS_ID = c.MS_ID
        and a.ND_ID='$a'";
        
        $result1 = mysqli_query($conn, $sql1);

        $data = [];
        $rowNum = 1;
        while ($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
            $data[] = array(    
                'GH_ID' => $row['GH_ID'],  
                                            'ND_ID' => $row['ND_ID'],                                 
                                            'SP_ID' => $row['SP_ID'],
                                            'SP_TEN' => $row['SP_TEN'],
                                            'SP_HINH' => $row['SP_HINH'],
                                            'SP_HINH1' => $row['SP_HINH1'],
                                            'SP_HINH2' => $row['SP_HINH2'],
                                            'SP_GIA' => $row['SP_GIA'],
                                            'SOLUONG' => $row['SOLUONG'],
                                            'KC_TEN' => $row['KC_TEN'],
                                            'KC_ID' => $row['KC_ID'],                                             
                                            'MS_ID' => $row['MS_ID'],
                                            'MS_TEN' => $row['MS_TEN'],

            );
            $rowNum++;
        }
            
        foreach ($data as $row => $value) :

          $sql2="INSERT INTO CHITIETDONHANG (DH_ID,SP_ID,KC_ID,MS_ID,SOLUONG,GIA) VALUES ( '$timestamp$a','$value[SP_ID]','$value[KC_ID]','$value[MS_ID]','$value[SOLUONG]','$value[SP_GIA]')";            
            if ($conn->query($sql2) == TRUE){
              $sqlDaBan="UPDATE  SANPHAM SET SP_SOLUONGDABAN= SP_SOLUONGDABAN+$value[SOLUONG]
              WHERE SP_ID ='$value[SP_ID]'";
               mysqli_query($conn,"$sqlDaBan");
              $sqlTon="UPDATE  SANPHAM SET SP_SOLUONGTON= SP_SOLUONGTON-$value[SOLUONG]
                    WHERE SP_ID ='$value[SP_ID]'";
               mysqli_query($conn,"$sqlTon");
             }            
        endforeach;
        $sqlU = "DELETE FROM giohang WHERE ND_ID='".$a."'";
        
   
if ($conn->query($sqlU) == TRUE){
  $pttt = $_POST["PTTT_ID"];
  if($pttt==1) header('Location: dathangthanhcong.php');
  if($pttt==2) header('Location: vnpay/vnpay_pay.php?DH_ID='.$timestamp.$a);
  if($pttt==3) header('Location: momo/xulythanhtoanmomo.php?DH_ID='.$timestamp.$a);
}
    

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
          
          $conn->close();
          


?>