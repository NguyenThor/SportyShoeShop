<!doctype html>
<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Trang chủ || James </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Google Fonts
        ============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Norican' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- jquery-ui CSS
        ============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        <!-- meanmenu CSS
        ============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- nivoslider CSS
        ============================================ -->
        <link rel="stylesheet" href="lib/css/nivo-slider.css">
        <link rel="stylesheet" href="lib/css/preview.css">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- magic CSS
        ============================================ -->
        <link rel="stylesheet" href="css/magic.css">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="./chatbot/style.css">

        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
        ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body >
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- header area start -->
        <header>
        <div class="top-link" style="height:auto;">
                <div class="container">
                    <div class="row">
                    <div class="col-md-7 col-md-offset-3 col-sm-9 hidden-xs">
                            
                            <div class="call-support">
                                <p>Hotline:<span> 0123 456 789</span></p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="dashboard">
                                <div class="account-menu">
                                    <ul >
                                        <li class="search" >
                                            <a href="#" >
                                                <i class="fa fa-search fa-xl" style="color: #fff;font-size:18px;"></i>
                                            </a>
                                            
                                            
                                            <!-- SEARCH -->
                                            <ul class="search">
                                                <li>
                                                <form name="frmCreate" method="post" action="search_kh.php" >
                                                    <input type="text"  name="keyWord" placeholder="Tìm sản phẩm...">
                                                    <button name="search">
                                                        <i class="fa fa-search" ></i>
                                                    </button>
                                                </form>
                                                </li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-regular fa-user fa-xl" style="color: #fff;"></i>
                                            </a>
                                            <ul>
                                                <li><a href="order.php">Đơn hàng</a></li>
                                                <li><a href="my-account.html">Tài Khoản</a></li>
                                                <li><a href="checkout.html">Đăng xuất</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cart-menu">

                                <?php
                
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "Shoes";
                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                                
                                                $sql4 = "select * from giohang a, sanpham b, mausac c, kichco d
                                                where a.SP_ID = b.SP_ID
                                                and a.KC_ID = d.KC_ID
                                                and a.MS_ID = c.MS_ID";
                                                
                                                $result4 = mysqli_query($conn, $sql4);

                                                $data4 = [];
                                                $rowNum = 1;
                                                while ($row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC)) {
                                                    $data4[] = array(    
                                                        'GH_ID' => $row4['GH_ID'],  
                                                        'ND_ID' => $row4['ND_ID'],                                 
                                                        'SP_ID' => $row4['SP_ID'],
                                                        'SP_TEN' => $row4['SP_TEN'],
                                                        'SP_HINH' => $row4['SP_HINH'],
                                                        'SP_HINH1' => $row4['SP_HINH1'],
                                                        'SP_HINH2' => $row4['SP_HINH2'],
                                                        'SP_GIA' => $row4['SP_GIA'],
                                                        'SOLUONG' => $row4['SOLUONG'],
                                                        'KC_TEN' => $row4['KC_TEN'],                                            
                                                        'MS_TEN' => $row4['MS_TEN'],

                                                    );
                                                    $rowNum++;
                                                }
                                            ?>
                                              
                                    <ul>
                                        <li><a href="cart.php" ><i style="color: #fff;" class="fa-solid fa-bag-shopping fa-xl"></i></a>
                                            <div class="cart-info">              
                                                <ul>
                                                <?php foreach ($data4 as $row4) : ?>
                                                    <li>
                                                        
                                                        <div class="cart-details" >
                                                        <div class="cart-img" >
                                                            <img style="width:65px;height:70px;" class="cart-item-img" src="img/product/<?php echo $row4['SP_HINH']; ?>" alt="">
                                                        </div>
                                                            <a href="cart-delete2.php?GH_ID=<?php echo $row4['GH_ID']; ?>" style="text-align: right; font-size:15px;margin-bottom:5px; "><i class="fa-solid fa-xmark"></i></a>                                                            
                                                            <a href="single-product.php?SP_ID=<?php echo $row4['SP_ID'];?>" style="text-align: right;" href="#"><?php echo $row4['SP_TEN']; ?></a>
                                                            <p style="text-align: right; margin-top:10px"><?php echo $row4['SOLUONG']; ?> x <?php echo number_format ($row4['SP_GIA']); ?></p>
                                                            
                                                        </div>                                                        
                                                        
                                                    </li>
                                                    <?php global $thanhtien1; ($thanhtien1+=($row4['SP_GIA'] * $row4['SOLUONG']) ); ?>
                                                    <?php global $tongsp; ($tongsp=(($tongsp+$row4['SOLUONG'] )) );?>
                                                    
                                                 <?php endforeach; ?>  
                                                </ul>
                                                <h3>TỔNG TIỀN: <span> <?php foreach ($data4 as $row4) : ?><?php echo number_format ($thanhtien1); ?><?php endforeach; ?></span></h3>
                                                <a href="cart.php" class="checkout">Thanh toán</a> 
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <?php foreach ($data4 as $row4) : ?>
                                                <?php 
                                                     if($row4['SOLUONG']>=1){
                                                        echo ' <div class="cart-amount">'.$tongsp.'</div>';                              
                                                        }  ?>   
                                     <?php endforeach; ?>   
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainmenu-area home2 bg-color-tr product-items" style="background:rgba(0,0,0,0.5);">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="shop.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="mainmenu">
                            <nav>
                                    <ul>
                                        <li><a href="shop.php">Trang chủ</a>
                                            </li>
                                        <li class="mega-women"><a href="shop.php">Nữ</a>
                                            <div class="mega-menu women">
                                                <div class="part-1">
                                                    <span>
                                                        <a href="#">Váy</a>                                                        
                                                        <a href="#">Hàng ngày</a>
                                                        <a href="#">Buổi tối</a>
                                                        <a href="#">Thể thao</a>
                                                    </span>
                                                    <span>
                                                        <a href="#">Giày</a>
                                                        <a href="#">Thể thao</a>
                                                        <a href="#">Chạy</a>
                                                        <a href="#">Sandals</a>
                                                        <a href="#">Dép</a>
                                                    </span>
                                                    <span>
                                                        <a href="#">Túi xách</a>
                                                        <a href="#">Áo Blazers</a>
                                                        <a href="#">Áo khoác</a>
                                                        <a href="#">Trẻ em</a>
                                                    </span>
                                                    <span>
                                                        <a href="#">Quần áo</a>
                                                        <a href="#">Áo T-shirts</a>
                                                        <a href="#">Đồ Jean</a>
                                                    </span>
                                                </div>
                                                <div class="part-2">
                                                    <a href="#">
                                                        <img src="img/banner/menu-banner.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-men"><a href="shop.php">Nam</a>
                                            <div class="mega-menu men">
                                                <span>
                                                    <a href="#">Túi</a>
                                                    <a href="#">Túi Bootees</a>                                                    
                                                </span>
                                                <span>
                                                    <a href="#">Quần áo</a>
                                                    <a href="#">Áo khoác</a>
                                                    <a href="#">Áo T-shirts</a>
                                                </span>
                                                <span>
                                                    <a href="#">Đồ lót</a>                                                    
                                                </span>
                                            </div>
                                        </li>
                                        <li class="mega-footwear"><a href="shop.php">Giày dép</a>
                                            <div class="mega-menu footwear">
                                                <span>
                                                    <a href="#">Giày dép Nam</a>
                                                    <a href="#">Quà tặng</a>
                                                </span>
                                                <span>
                                                    <a href="#">Giày dép Nữ</a>
                                                    <a href="#">Giày boot</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="mega-jewellery"><a href="shop.php">Trang sức</a>
                                            <div class="mega-menu jewellery">
                                                <span>
                                                    <a href="#">Nhẫn</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li><a href="shop.php">Phụ kiện</a></li>
                                        <li><a href="#">Pages</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mobile-menu">
                            <nav>
                                    <ul>
                                        <li><a href="index.html">Trang chủ</a>
                                            </li>
                                        <li class="mega-women"><a href="shop.php">Nữ</a>
                                            <div class="mega-menu women">
                                                <div class="part-1">
                                                    <span>
                                                        <a href="#">Váy</a>                                                        
                                                        <a href="#">Hàng ngày</a>
                                                        <a href="#">Buổi tối</a>
                                                        <a href="#">Thể thao</a>
                                                    </span>
                                                    <span>
                                                        <a href="#">Giày</a>
                                                        <a href="#">Thể thao</a>
                                                        <a href="#">Chạy</a>
                                                        <a href="#">Sandals</a>
                                                        <a href="#">Dép</a>
                                                    </span>
                                                    <span>
                                                        <a href="#">Túi xách</a>
                                                        <a href="#">Áo Blazers</a>
                                                        <a href="#">Áo khoác</a>
                                                        <a href="#">Trẻ em</a>
                                                    </span>
                                                    <span>
                                                        <a href="#">Quần áo</a>
                                                        <a href="#">Áo T-shirts</a>
                                                        <a href="#">Đồ Jean</a>
                                                    </span>
                                                </div>
                                                <div class="part-2">
                                                    <a href="#">
                                                        <img src="img/banner/menu-banner.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-men"><a href="shop.php">Nam</a>
                                            <div class="mega-menu men">
                                                <span>
                                                    <a href="#">Túi</a>
                                                    <a href="#">Túi Bootees</a>                                                    
                                                </span>
                                                <span>
                                                    <a href="#">Quần áo</a>
                                                    <a href="#">Áo khoác</a>
                                                    <a href="#">Áo T-shirts</a>
                                                </span>
                                                <span>
                                                    <a href="#">Đồ lót</a>                                                    
                                                </span>
                                            </div>
                                        </li>
                                        <li class="mega-footwear"><a href="shop.php">Giày dép</a>
                                            <div class="mega-menu footwear">
                                                <span>
                                                    <a href="#">Giày dép Nam</a>
                                                    <a href="#">Quà tặng</a>
                                                </span>
                                                <span>
                                                    <a href="#">Giày dép Nữ</a>
                                                    <a href="#">Giày boot</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="mega-jewellery"><a href="shop.php">Trang sức</a>
                                            <div class="mega-menu jewellery">
                                                <span>
                                                    <a href="#">Nhẫn</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li><a href="shop.php">Phụ kiện</a></li>
                                        <li><a href="#">Pages</a>                                            
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->
        <!-- cart item area start -->
         <?php
                
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "Shoes";
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    
                                    $sql = "select * from giohang a, sanpham b, mausac c, kichco d
                                    where a.SP_ID = b.SP_ID
                                    and a.KC_ID = d.KC_ID
                                    and a.MS_ID = c.MS_ID";
                                    
                                    $result = mysqli_query($conn, $sql);

                                    $data = [];
                                    $rowNum = 1;
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
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
                                            'MS_TEN' => $row['MS_TEN'],

                                        );
                                        $rowNum++;
                                    }
                                ?> 
        <div class="shopping-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Trang chủ<span>/</span></a>  </li>
                                <li><strong> Giỏ hàng</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="cart-item-img"></th>
                                        <th class="cart-product-name">Sản phẩm</th>
                                        <th class="edit">Giá </th>
                                        <th class="move-wishlist">Kích cỡ</th>
                                        <th class="unit-price">Màu sắc</th>
                                        <th class="quantity">Số lượng</th>
                                        <th class="subtotal">Thành tiền</th>
                                        <th class="remove-icon"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                <?php foreach ($data as $row) : ?>
                                    <tr>
                                        <td class="cart-item-img">
                                        <a href="single-product.php?SP_ID=<?php echo $row['SP_ID'];?>">
                                                <img class="cart-item-img" src="img/product/<?php echo $row['SP_HINH']; ?>" alt="">
                                            </a>
                                        </td>
                                        <td class="cart-product-name">
                                        <a href="single-product.php?SP_ID=<?php echo $row['SP_ID'];?>"><?php echo $row['SP_TEN']; ?></a>
                                        </td>
                                        <td class="edit">
                                            <a href="#"><?php echo number_format ($row['SP_GIA']); ?></a>
                                        </td>
                                        <td class="move-wishlist">
                                            <a href="#"><?php echo $row['KC_TEN'];?></a>
                                        </td>
                                        <td class="unit-price">
                                            <span><?php echo $row['MS_TEN'];?></span>
                                        </td>

                                        <td class="quantity">
                                        <a href="cart-minus.php?GH_ID=<?php echo $row['GH_ID']; ?>" >
                                        <input class="minus is-form" type="button" value="-" onclick="minusProduct()" ></a>
                                    
                                        <input style="width: 35px;text-align: center;margin-top:35px;" aria-label="quantity" class="input-qty" min="1" name="soluong" type="text" value="<?php echo $row['SOLUONG']; ?>">
                                        
                                        <a href="cart-plus.php?GH_ID=<?php echo $row['GH_ID']; ?>" >
                                        <input class="plus is-form" type="button" value="+" onclick="plusProduct()" > </a>
                                        </td>

                                        <td class="subtotal">
                                            <span><?php echo number_format($tong=(($row['SP_GIA'] * $row['SOLUONG'])) ); ?></span>
                                        </td>
                                        <td class="remove-icon" style="font-size: 25px;">
                                            <a href="cart-delete1.php?GH_ID=<?php echo $row['GH_ID']; ?>">
                                                 <i class="fa-regular fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>   
                                    
                                </tbody>
                            </table>
                            <div class="shopping-button">
                                <div class="continue-shopping">
                                    <a href="shop.php"><button type="submit">TIẾP TỤC MUA SẮM</button></a>
                                </div>
                                <div class="shopping-cart-left">
                                    <a href="cart-deleteall.php?ND_ID=<?php echo $row['ND_ID']; ?>" ><button type="submit">XÓA GIỎ HÀNG</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="discount-code">
                            <h3>Mã giảm giá</h3>
                            <p>Nhập mã phiếu giảm giá của bạn nếu bạn có.</p>
                            <input type="text">
                            <div class="shopping-button">
                                <button type="submit">áp dụng phiếu giảm giá</button>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-sm-4">
                        <div class="estimate-shipping">
                            <h3>Địa chỉ nhận hàng<em style="color:red;">*</em></h3>
                            <a href="address.php" style="color:Blue;"><p>Thêm địa chỉ mới <i class="fa-solid fa-plus"></i></p></a>
                            
                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="totals">
                            <p>Tổng tiền hàng <span>$1,540.00</span> </p>
                            <p>Chi phí vận chuyển <span>30,000</span> </p>
                            <h3>Tổng thanh toán <span>$1,540.00</span></h3>
                            <div class="shopping-button">
                                <button type="submit">Đặt hàng</button>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
                                    <script>
                                    var citis = document.getElementById("city");
                                var districts = document.getElementById("district");
                                var wards = document.getElementById("ward");
                                var Parameter = {
                                url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
                                method: "GET", 
                                responseType: "application/json", 
                                };
                                var promise = axios(Parameter);
                                promise.then(function (result) {
                                renderCity(result.data);
                                });

                                function renderCity(data) {
                                for (const x of data) {
                                    var opt = document.createElement('option');
                                    opt.value = x.Name;
                                    opt.text = x.Name;
                                    opt.setAttribute('data-id', x.Id);
                                    citis.options.add(opt);
                                }
                                citis.onchange = function () {
                                    district.length = 1;
                                    ward.length = 1;
                                    if(this.options[this.selectedIndex].dataset.id != ""){
                                    const result = data.filter(n => n.Id === this.options[this.selectedIndex].dataset.id);

                                    for (const k of result[0].Districts) {
                                        var opt = document.createElement('option');
                                        opt.value = k.Name;
                                        opt.text = k.Name;
                                        opt.setAttribute('data-id', k.Id);
                                        district.options.add(opt);
                                    }
                                    }
                                };
                                district.onchange = function () {
                                    ward.length = 1;
                                    const dataCity = data.filter((n) => n.Id === citis.options[citis.selectedIndex].dataset.id);
                                    if (this.options[this.selectedIndex].dataset.id != "") {
                                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.options[this.selectedIndex].dataset.id)[0].Wards;

                                    for (const w of dataWards) {
                                        var opt = document.createElement('option');
                                        opt.value = w.Name;
                                        opt.text = w.Name;
                                        opt.setAttribute('data-id', w.Id);
                                        wards.options.add(opt);
                                    }
                                    }
                                };
                                }
                                    </script>
        <!-- cart item area end -->
       <!-- footer top area start -->
       <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-contact">
                            <img src="img/logo-white.png" alt="">
                            <ul class="address">
                                <li>
                                    <span class="fa fa-fax"></span>
                                    (800) 123 456 789
                                </li>
                                <li>
                                    <span class="fa fa-phone"></span>
                                    (800) 123 456 789
                                </li>
                                <li>
                                    <span class="fa fa-envelope-o"></span>
                                    admin@bootexperts.com
                                </li>
                            </ul>
                        </div>
                    </div>                    
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-support">
                            <div class="footer-title">
                                <h3>Hỗ trợ</h3>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Bản đồ</a></li>
                                    <li><a href="#">Chính sách bảo mật</a></li>
                                    <li><a href="#">Tài khoản của bạn</a></li>
                                    <li><a href="#">Tìm kiếm nâng cao</a></li>
                                    <li><a href="contact.html">Liên hệ chúng tôi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-info">
                            <div class="footer-title">
                                <h3>Thông tin của chúng tôi</h3>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="about-us.html">Về chúng tôi</a></li>
                                    <li><a href="#">Dịch vụ khách hàng</a></li>
                                    <li><a href="#">Chính sách bảo mật</a></li>
                                    <li><a href="#">Chính sách bảo hành và đổi trả</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer top area end -->
        <!-- footer area start -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="footer-copyright">
                            <p>Copyright &copy; B1906390</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="payment-icon">
                            <img src="img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" id="scrollUp"><i class="fa fa fa-arrow-up"></i></a>
        </footer>
        <!-- footer area end -->      
                   <!--CHATBOT start -->
        

        <button>
                        <div class="open-button" onclick="openForm()"><img src="img/customer-service.png" width="70px" alt=""></div>
                </button>

            <div class="chat-popup" id="myForm">
            <form action="" class="form-container">
                <div class="wrapper" >
                    <div class="title" style="text-align: center;background-image: linear-gradient(90deg, #020024 0%, #090979 35%, #00d4ff 100%);   ">
                        Chat cùng chúng tôi                            
                    </div>
                    
                    <div class="form" >
                        <div class="bot-inbox inbox" style="overflow-wrap: break-word;">
                            <div class="icon">
                                <img src="img/chatbot.png" width="70px" alt="">
                            </div>
                            <div class="msg-header" >
                                <div class="box">Chào bạn, Cảm ơn bạn đã ghé thăm Shop. Bạn có thể cho chúng tôi biết bạn cần mua giày để đi chơi, chạy bộ hay đá bóng không ạ?</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="typing-field">
                        <div class="input-data">
                            <input class="form-control" id="data" type="text" placeholder=" Nhập tin nhắn của bạn... " required >
                            <button id="send-btn">Gửi</button>
                        </div>&ensp;
                        <i class="fa-regular fa-face-smile fa-xl"></i>&ensp; <i class="fa-solid fa-microphone fa-xl"></i>
                    </div>
                </div>                
                <button type="button" class="btn cancel" onclick="closeForm()">Đóng</button>
                
            </form>
            </div>            
            
            <script>
                function openForm() {
                document.getElementById("myForm").style.display = "block";
                }

                function closeForm() {
                document.getElementById("myForm").style.display = "none";
                }
            </script>



            <!--CHATBOT end -->      
        <!-- quickview product start -->

        <!-- jquery
        ============================================ -->
        <script src="js/vendor/jquery-1.12.1.min.js"></script>
        <!-- bootstrap JS
        ============================================ -->
        <script src="js/bootstrap.min.js"></script>
        <!-- wow JS
        ============================================ -->
        <script src="js/wow.min.js"></script>
        <!-- price-slider JS
        ============================================ -->
        <script src="js/jquery-price-slider.js"></script>
        <!-- nivoslider JS
        ============================================ -->
        <script src="lib/js/jquery.nivo.slider.js"></script>
        <script src="lib/home.js"></script>
        <!-- meanmenu JS
        ============================================ -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
        ============================================ -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- elevatezoom JS
        ============================================ -->
        <script src="js/jquery.elevatezoom.js"></script>
        <!-- scrollUp JS
        ============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- plugins JS
        ============================================ -->
        <script src="js/plugins.js"></script>
        <script src="./chatbot/bot.js"></script>

        <!-- main JS
        ============================================ -->
        <script src="js/main.js"></script>
        <script src="js/diachi.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    </body>

<!-- Mirrored from preview.hasthemes.com/james-preview/james/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 00:38:50 GMT -->
</html>