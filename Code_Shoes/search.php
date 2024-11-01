<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from preview.hasthemes.com/james-preview/james/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 00:37:41 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Trang chủ || James </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

        <!-- Google Fonts
        ============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Norican' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/regular.min.css" integrity="sha512-rOTVxSYNb4+/vo9pLIcNAv9yQVpC8DNcFDWPoc+gTv9SLu5H8W0Dn7QA4ffLHKA0wysdo6C5iqc+2LEO1miAow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- All css -->

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
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
        ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        

    </head>
    <body>
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
                                                <h3>TỔNG TIỀN: <span><?php echo number_format ($thanhtien1); ?></span></h3>
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
            <div class="mainmenu-area product-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="mainmenu">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">Trang chủ</a>
                                            </li>
                                        <li class="mega-women"><a href="shop.html">Nữ</a>
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
                                        <li class="mega-men"><a href="shop.html">Nam</a>
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
                                        <li class="mega-footwear"><a href="shop.html">Giày dép</a>
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
                                        <li class="mega-jewellery"><a href="shop.html">Trang sức</a>
                                            <div class="mega-menu jewellery">
                                                <span>
                                                    <a href="#">Nhẫn</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li><a href="shop.html">Phụ kiện</a></li>
                                        <li><a href="#">Pages</a>
                                            <div class="sub-menu pages">
                                                <span>
                                                    <a href="about-us.html">Về chung tôi</a>
                                                </span>
                                                <span>
                                                    <a href="blog.html">Blog</a>
                                                </span>
                                                <span>
                                                    <a href="blog-details.html">Blog Details</a>
                                                </span>
                                                <span>
                                                    <a href="cart.html">Cart</a>
                                                </span>
                                                <span>
                                                    <a href="checkout.html">Checkout</a>
                                                </span>
                                                <span>
                                                    <a href="contact.html">Contact</a>
                                                </span>
                                                <span>
                                                    <a href="my-account.html">My account</a>
                                                </span>
                                                <span>
                                                    <a href="shop.html">Shop</a>
                                                </span>
                                                <span>
                                                    <a href="shop-list.html">Shop list</a>
                                                </span>
                                                <span>
                                                    <a href="single-product.html">Single Shop</a>
                                                </span>
                                                <span>
                                                    <a href="login.html">Login page</a>
                                                </span>
                                                <span>
                                                    <a href="register.html">Ragister page</a>
                                                </span>
                                                <span>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </span>
                                            </div>
                                        </li>
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
                                        <li class="mega-women"><a href="shop.html">Nữ</a>
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
                                        <li class="mega-men"><a href="shop.html">Nam</a>
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
                                        <li class="mega-footwear"><a href="shop.html">Giày dép</a>
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
                                        <li class="mega-jewellery"><a href="shop.html">Trang sức</a>
                                            <div class="mega-menu jewellery">
                                                <span>
                                                    <a href="#">Nhẫn</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li><a href="shop.html">Phụ kiện</a></li>
                                        <li><a href="#">Pages</a>
                                            <div class="sub-menu pages">
                                                <span>
                                                    <a href="about-us.html">Về chung tôi</a>
                                                </span>
                                                <span>
                                                    <a href="blog.html">Blog</a>
                                                </span>
                                                <span>
                                                    <a href="blog-details.html">Blog Details</a>
                                                </span>
                                                <span>
                                                    <a href="cart.html">Cart</a>
                                                </span>
                                                <span>
                                                    <a href="checkout.html">Checkout</a>
                                                </span>
                                                <span>
                                                    <a href="contact.html">Contact</a>
                                                </span>
                                                <span>
                                                    <a href="my-account.html">My account</a>
                                                </span>
                                                <span>
                                                    <a href="shop.html">Shop</a>
                                                </span>
                                                <span>
                                                    <a href="shop-list.html">Shop list</a>
                                                </span>
                                                <span>
                                                    <a href="single-product.html">Single Shop</a>
                                                </span>
                                                <span>
                                                    <a href="login.html">Login page</a>
                                                </span>
                                                <span>
                                                    <a href="register.html">Ragister page</a>
                                                </span>
                                                <span>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </span>
                                            </div>
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
        <!-- slider area start -->
        <div class="slider-area home1">
            <div class="bend niceties preview-2">
                <div id="nivoslider" class="slides">
                    <img src="img/slider/slider-1.jpg" alt="" title="#slider-direction-1"  />
                    <img src="img/slider/slider-2.jpg" alt="" title="#slider-direction-2"  />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <h1 class="title1">Khuyến mãi</h1>
                            <h2 class="title2" >nike Ari max 2015</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>xem thêm</span></a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Khuyến mãi</h1>
                            <h2 class="title2" >GET UP TO 50% SALE</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>xem thêm</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider area end -->
        <!-- banner area start -->
        <div class="banner-area">
            <div class="single-banner">
                <div class="part-1">
                    <div class="box-1 box">
                        <h4>nike ari max 2015</h4>
                        <h2>air superiority</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="box-2">
                        <a href="#">
                            <img src="img/banner/banner-2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="part-2">

                    <!-- SEARCH -->
                    <div class="search-box" style=" font-size: 25px;">
                        <form action="search.php">
                            <input type="text" placeholder="Tìm sản phẩm...">
                            <button type="submit" name="search">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>

                    
                    <div class="box-3">
                        <a href="#">
                            <img src="img/banner/banner-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="box-4 box">
                        <h4>nike ari max 2015</h4>
                        <h2>air superiority</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="box-5">
                        <a href="#">
                            <img src="img/banner/banner-3.jpg" alt="">
                        </a>
                    </div>
                    <div class="box-6">
                        <a href="#">
                            <img src="img/banner/banner-4.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner area end -->
        <!-- products area start -->

        <div class="products-area">

            <div class="container">
                <div class="products">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product-menu">
                                <div class="menu-title">
                                    <h2>Best seller <strong>Sản phẩm</strong></h2>
                                </div>
                                <div class="side-menu">
                                     <!-- Nav tabs -->
                                    <ul class="tab-navigation" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Nữ</a></li>
                                        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Nam</a></li>
                                        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Giày dép</a></li>
                                        <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">TRang sức</a></li>
                                        <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Phụ kiện</a></li>
                                        <li role="presentation"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">VÁy</a></li>
                                        <li role="presentation"><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab">Giày</a></li>
                                        <li role="presentation"><a href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab">Túi xách</a></li>
                                        <li> <img src="img/banner/banner-5.jpg" alt=""> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-9">                            
                            <div class="row">
                                <!-- Tab panes -->
                                <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "Shoes";
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    if ( isset($_POST['search']) ) {
                                    
                                    $k = $_POST['keyWord'];
                                    if($k ==""){
                                        echo "Vui long nhap vao thanh tim kiem";
                                    }else{
                                        
                                        $sql= "select * from sanpham where SP_TEN like '%$k%'  ";
                                        $result = mysqli_query($conn, $sql);
                                        $count = mysqli_num_rows($result);
                                        if($count < 0){
                                        echo "Khong tim thay ket qua nao voi tu khoa, ". $k;
                                        }
                                        else{
                                            
                                        } 
                                    }

                                    }
                                        
                                            $result = mysqli_query($conn, $sql);
                                            $data = [];
                                            $rowNum = 1;
                                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                $data[] = array(
                                                    'SP_ID' => $row['SP_ID'],
                                                    'SP_TEN' => $row['SP_TEN'],
                                                    'SP_HINH' => $row['SP_HINH'],
                                                    'SP_HINH1' => $row['SP_HINH1'],
                                                    'SP_HINH2' => $row['SP_HINH2'],
                                                    'SP_GIA' => $row['SP_GIA'],
                                                    

                                                );
                                                $rowNum++;
                                            } 
                                     ?>
                                            
                                            
                                    <div class="product-content">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active fade in home2" id="gird">                                             

                                            <?php foreach ($data as $row) : ?>
                                                <div class="col-lg-4 col-sm-6">
                                                    <div class="single-product">
                                                        <div class="level-pro-new">
                                                            <span>new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="single-product.html" >
                                                                <img src="img/product/<?php echo $row['SP_HINH']; ?>" alt="" class="primary-img">
                                                                <img src="img/product/<?php echo $row['SP_HINH1']; ?>" alt="" class="secondary-img">
                                                            </a>
                                                        </div>
                                                        <div class="actions">
                                                            <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                            <ul class="add-to-link">
                                                                <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                                <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="product-name">
                                                                <a href="single-product.html" title="Fusce aliquam"><?php echo $row['SP_TEN']; ?></a>
                                                            </div>
                                                            <div class="price-rating">
                                                                <span><?php echo number_format ($row['SP_GIA']); ?></span>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="toolbar-bottom">
                                            <ul>
                                                <li><span>Pages:</span></li>
                                                <li class="current"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"> <img src="img/product/pager_arrow_right.gif" alt=""> </a></li>
                                            </ul>
                                        </div>
                                    </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- products area end -->
        <!-- feature products area start -->
        <div class="features-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>SẢN PHẨM TIÊU BIỂU</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="feature-product-slider">     
                        
                    <?php                
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "Shoes";
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        
                        $sql1 = "select * from sanpham ";


                        
                        $result1 = mysqli_query($conn, $sql1);

                        $data1 = [];
                        $rowNum = 1;
                        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                            $data1[] = array(                                            
                                'SP_ID' => $row1['SP_ID'],
                                'SP_TEN' => $row1['SP_TEN'],
                                'SP_HINH' => $row1['SP_HINH'],
                                'SP_HINH1' => $row1['SP_HINH1'],
                                'SP_HINH2' => $row1['SP_HINH2'],
                                'SP_GIA' => $row1['SP_GIA'],
                                

                            );
                            $rowNum++;
                        }
                ?>
                        <?php foreach ($data1 as $row1) : ?>
                            <div class="col-md-12">
                                                    <div class="single-product">
                                                        <div class="level-pro-new">
                                                            <span>new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="single-product.html" >
                                                                <img src="img/product/<?php echo $row1['SP_HINH']; ?>" alt="" class="primary-img">
                                                                <img src="img/product/<?php echo $row1['SP_HINH1']; ?>" alt="" class="secondary-img">
                                                            </a>
                                                        </div>
                                                        <div class="actions">
                                                            <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                            <ul class="add-to-link">
                                                                <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                                <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="product-name">
                                                                <a href="single-product.html" title="Fusce aliquam"><?php echo $row1['SP_TEN']; ?></a>
                                                            </div>
                                                            <div class="price-rating">
                                                                <span><?php echo number_format ($row1['SP_GIA']); ?></span>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- feature products area end -->
        <!-- another banner area start -->
        <div class="another-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-banner">
                            <a href="#">
                                <img src="img/banner/banner-10.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- another banner area end -->
        <!-- new products area start -->
        <div class="new-products-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>SẢN PHẨM MỚI</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="new-product-slider">
                    <?php foreach ($data1 as $row1) : ?>
                            <div class="col-md-12">
                                                    <div class="single-product">
                                                        <div class="level-pro-new">
                                                            <span>new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="single-product.html" >
                                                                <img src="img/product/<?php echo $row1['SP_HINH']; ?>" alt="" class="primary-img">
                                                                <img src="img/product/<?php echo $row1['SP_HINH1']; ?>" alt="" class="secondary-img">
                                                            </a>
                                                        </div>
                                                        <div class="actions">
                                                            <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                            <ul class="add-to-link">
                                                                <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                                <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="product-name">
                                                                <a href="single-product.html" title="Fusce aliquam"><?php echo $row1['SP_TEN']; ?></a>
                                                            </div>
                                                            <div class="price-rating">
                                                                <span><?php echo number_format ($row1['SP_GIA']); ?></span>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- new products area end -->
        
        <!-- newsleter area start -->
        <div class="newsleter-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="newsleter">
                            <h3>Bản tin</h3>
                            <p>Đăng ký danh sách gửi thư của James để nhận thông tin cập nhật về hàng mới, ưu đãi đặc biệt và thông tin giảm giá khác.</p>
                            <div class="Subscribe">
                                <form action="#">
                                    <input type="text" title="Sign up">
                                    <button type="submit" title="Subscribe">Đăng ký</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="follow">
                            <h3>Theo dõi</h3>
                            <p>Đăng ký danh sách gửi thư của james để nhận thông tin cập nhật về hàng mới, ưu đãi đặc biệt và thông tin giảm giá khác.</p>
                            <div class="float-contact">
                                <button class="chat-zalo">
                                    <a href="http://zalo.me/01296140483"><img src="img/hotline/zalo.png" width="40px" alt=""></a>
                                </button>&nbsp;&nbsp;   
                                <button class="chat-face">
                                    <a href="https://www.facebook.com/250501nganne/"><img src="img/hotline/mess.png" width="40px" alt=""></a>
                                </button>&nbsp;&nbsp;
                                <button class="hotline">
                                    <a href="tel:0909999999"><img src="img/hotline/call.png" width="40px" alt=""></a>
                                </button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsleter area end -->
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
        <!-- main JS
        ============================================ -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from preview.hasthemes.com/james-preview/james/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 00:38:50 GMT -->
</html>
