<div id='DivIdToPrint'>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <title></title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  </head>
  <!-- start invoice print -->
<body>
<?php
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "Shoes";
                $conn = new mysqli($servername, $username, $password, $dbname);
                $DH_ID = $_GET['DH_ID'];

                $sql = "select * from chitietdonhang a, sanpham b, mausac c, kichco d, donhang e
                where a.SP_ID = b.SP_ID
                and a.KC_ID = d.KC_ID
                and a.MS_ID = c.MS_ID
                and a.DH_ID=e.DH_ID
                and e.DH_ID='$DH_ID'";
                
                $result = mysqli_query($conn, $sql);

                $data = [];
                $rowNum = 1;
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $data[] = array(  
                        'DH_ID' => $row['DH_ID'],  
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
                        'DH_GHICHU' => $row['DH_GHICHU'],
                        

                    );
                    $rowNum++;
                }
            ?> 
            <?php
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "Shoes";
                $conn = new mysqli($servername, $username, $password, $dbname);               

                $DH_ID = $_GET['DH_ID'];
                $sql1 = "select * from donhang a, nguoidung f
                    where a.ND_ID = f.ND_ID
                    and a.DH_ID= $DH_ID";
                
                $result1 = mysqli_query($conn, $sql1);

                $data1 = [];
                $rowNum = 1;
                while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                    $data1[] = array(    
                        'DH_ID' => $row1['DH_ID'], 
                        'ND_TAIKHOAN' => $row1['ND_TAIKHOAN'], 
                        'ND_TEN' => $row1['ND_TEN'], 
                        'ND_SDT' => $row1['ND_SDT'], 

                        
                    );
                    $rowNum++;
                }
            ?> 
            <?php foreach ($data1 as $row1) : ?>
             <?php endforeach; ?>

             
<table cellpadding="0" cellspacing="0">
            <table style="border:0;width:100%;">
            <tr><td colspan="2" align="center"><b>THE JAMES</b></td></tr>	
            <tr><td colspan="2" align="center"></td></tr>
            <tr><td colspan="2" align="center"><b>Liên hệ:</b> 0123 456 789</td><br></tr>
            <tr><td><b>Khách hàng: </b><?php echo $row1['ND_TEN'];?> </td><td align="right"><b>HĐ:</b> #12345</td></tr>
            <tr><td><b>SĐT:</b> <?php echo $row1['ND_SDT'];?> </td><td align="right"><b>Mã đơn:</b><?php echo $DH_ID;?></td></tr>
            <tr><td colspan="2" align="center"><b>HÓA ĐƠN BÁN HÀNG</b></td></tr>
              <!-- Invoice Wrapper Start -->
          <div class="invoice-wrapper">
            <div class="row">
              <div class="col-12">
                <div class="">  
                  <div class="table-responsive">
                  <table class="table table-striped" style="font-size:15px;text-align: center;" >
                  
                      <thead class="thead-dark">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Kích cỡ</th>
                            <th>Màu sắc</th></th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $row) : ?>
                          <tr>
                              <td><?php echo $row['SP_TEN'];?></td>
                              <td><?php echo number_format ($row['SP_GIA']); ?></td>
                              <td><?php echo $row['KC_TEN'];?></td>
                              <td><?php echo $row['MS_TEN'];?></td>
                              <td><?php echo $row['SOLUONG'];?></td>
                              <td><?php echo number_format($tong=(($row['SP_GIA'] * $row['SOLUONG'])) ); ?></td>
                              
                              
                          </tr>          
                          <?php  number_format($tong=(($row['SP_GIA'] * $row['SOLUONG'])) ); ?>
                              <?php global $thanhtien; number_format($thanhtien+=$tong); ?>
                              <?php global $soluong; $soluong+=$row['SOLUONG']; ?>
                              
                                               
                        <?php endforeach; ?>
                        <tr><td align="left"><b>Ghi chú:</b> <?php echo $row['DH_GHICHU'];?></td></tr>

                    </div>
                    
                    </tbody>
                    
                    </table>
                    <tr>
                      <div align="right" >
                              <p>Tổng số lượng: <span><?php echo $soluong ;?></span></p>
                              <p>Tổng tiền hàng: <span><?php echo number_format ($thanhtien) ;?></span></p><input name="DH_TONGTIENHANG" type="hidden" value="<?php echo ($thanhtien) ;?>">
                                <p>Chi phí vận chuyển: <span>30,000</span></p>
                                <h3>Tổng thanh toán: <span><p style="font-size:20px;" name="DH_TONGTHANHTOAN"><?php echo number_format($thanhtien+30000);?></span></p></h3>
                                    <input name="DH_TONGTHANHTOAN" type="hidden" value="<?php echo ($thanhtien+30000) ;?>">
                            </div>
                    </tr><br><br>                    
                  </div>  
                </div>
                <!-- End Card -->
              </div>
              <!-- ENd Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- Invoice Wrapper End -->
         
			
            </table>
        </table>
		<!-- end invoice print -->
				
</div>

<div align="right" style="padding-left:50px;"><input class="btn btn-primary" type='button' id='btn' value='Print' onclick='printDiv();'></div>
<script type="text/javascript">
function printDiv() {
  var divToPrint = document.getElementById('DivIdToPrint');
  var newWin = window.open('', 'Print-Window');
  newWin.document.open();
  newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
  newWin.document.close();
  setTimeout(function() {
    newWin.close();
  }, 10);
}
</script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script> 
</body>
        