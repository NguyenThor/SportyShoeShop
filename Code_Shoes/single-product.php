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
                                                <form autocomplete="off" name="frmCreate" method="post" action="search_kh.php" >
                                                    <input id="myInput" type="text" name="keyWord" placeholder="Tìm sản phẩm...">
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
                                                        <a href="cart-delete2.php?GH_ID=<?php echo $row4['GH_ID']; ?>" style="text-align: right; font-size:15px;margin-bottom:5px;margin-left:250px;"><i class="fa-solid fa-xmark"></i></a>                                                            
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
        <?php
                
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "Shoes";
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $SP_ID = $_GET['SP_ID'];
                                    $sql = "SELECT * FROM sanpham WHERE SP_ID= '".$SP_ID."' ";

                                    
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
                                            'SP_SOLUONGTON' => $row['SP_SOLUONGTON'],
                                            'SP_MOTA' => $row['SP_MOTA'],                                            

                                        );
                                        $rowNum++;
                                    }
                                ?> 
                                <?php foreach ($data as $row) : ?>                       
                                <?php endforeach; ?>
        <!-- single product area start -->
        <div class="Single-product-location home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="shop.php" title="go to homepage">Trang chủ<span>/</span></a>  </li>
                                <li><strong><?php echo $row['SP_TEN']; ?></strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single product area end -->
        <!-- single product details start -->
        <div class="single-product-details">
        <form action="cart-add.php?SP_ID=<?php echo $row['SP_ID'];?>" method="post">
        
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-product-img tab-content">
                            <div class="single-pro-main-image tab-pane active" id="pro-large-img-1">
                                <a href="#"><img class="optima_zoom" src="img/product/<?php echo $row['SP_HINH']; ?>" data-zoom-image="img/product/<?php echo $row['SP_HINH']; ?>" alt="optima"/></a>
                            </div>
                            <div class="single-pro-main-image tab-pane" id="pro-large-img-2">
                                <a href="#"><img class="optima_zoom" src="img/product/<?php echo $row['SP_HINH1']; ?>" data-zoom-image="img/product/<?php echo $row['SP_HINH1']; ?>" alt="optima"/></a>
                            </div>
                            <div class="single-pro-main-image tab-pane" id="pro-large-img-3">
                                <a href="#"><img class="optima_zoom" src="img/product/<?php echo $row['SP_HINH2']; ?>" data-zoom-image="img/product/<?php echo $row['SP_HINH2']; ?>" alt="optima"/></a>
                            </div>
                            
                        </div>
                        <div class="product-page-slider">
                            <div class="single-product-slider">
                                <a href="#pro-large-img-1" data-toggle="tab">
                                    <img src="img/product/<?php echo $row['SP_HINH']; ?>" alt="">
                                </a>
                            </div>
                            <div class="single-product-slider">
                                <a href="#pro-large-img-2" data-toggle="tab">
                                    <img src="img/product/<?php echo $row['SP_HINH1']; ?>" alt="">
                                </a>
                            </div>
                            <div class="single-product-slider">
                                <a href="#pro-large-img-3" data-toggle="tab">
                                    <img src="img/product/<?php echo $row['SP_HINH2']; ?>" alt="">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-product-details">
                            <a href="#" class="product-name"><?php echo $row['SP_TEN']; ?></a>
                            <div class="list-product-info">
                                <div class="price-rating">
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <a href="#" class="review">1 lượt đánh giá</a>
                                        <a href="#" class="add-review"> Thêm đánh giá </a>
                                    </div>
                                </div>
                            </div>
                            <div class="avalable">
                                <p>Tình trạng:<span> Còn hàng (<?php echo $row['SP_SOLUONGTON']; ?>)</span></p>
                            </div>
                            <div class="item-price">
                                <span><?php echo number_format ($row['SP_GIA']); ?> VNĐ</span>
                            </div>
                            <div class="single-product-info">
                                <p style="width: 500px;overflow: hidden;text-overflow: ellipsis;line-height: 25px; -webkit-line-clamp: 3; height: 75px;display: -webkit-box;-webkit-box-orient: vertical;"><?php echo $row['SP_MOTA']; ?></p>
                                <div class="share">
                                    <img src="img/product/share.png" alt="">
                                </div>
                            </div>
                            
                            <?php                
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "Shoes";
                        $conn = new mysqli($servername, $username, $password, $dbname);      

                        $SP_ID = $_GET['SP_ID'];

                        $sql1 = "select * from mausac a, mssp b
                        where a.MS_ID=b.MS_ID
                        and b.SP_ID = '".$SP_ID."'";                       

                        
                        $result1 = mysqli_query($conn, $sql1);

                        $data1 = [];
                        $rowNum = 1;
                        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                            $data1[] = array( 
                                
                                'MS_ID' => $row1['MS_ID'],                                        
                                'MS_TEN' => $row1['MS_TEN'],
                                'SP_ID' => $row1['SP_ID'],

                            );
                            $rowNum++;
                            
                        }
                ?>


</head>
<body>





                            
                                <b>CHỌN MÀU:</b><br><br>
                                <div id="myDIV">                                   
                                    <?php foreach ($data1 as $row1) : ?> 
                                        <?php 
                                                if($row1['MS_ID']==1){
                                                    echo '<div class="btnms btn1" ><input name="MS_ID" type="hidden" value="'.$row1['MS_ID'].'" ></input></div> ';                              
                                                    }
                                                if($row1['MS_ID']==2){
                                                    echo '<div class="btnms btn2" ><input name="MS_ID" type="hidden" value="'.$row1['MS_ID'].'" ></input></div> ';                              
                                                    }
                                                if($row1['MS_ID']==3){
                                                    echo '<div class="btnms btn3" ><input name="MS_ID" type="hidden" value="'.$row1['MS_ID'].'" ></input></div> ';                              
                                                    }
                                                if($row1['MS_ID']==4){
                                                    echo '<div class="btnms btn4" ><input name="MS_ID" type="hidden" value="'.$row1['MS_ID'].'" ></input></div> ';                              
                                                    }
                                                if($row1['MS_ID']==5){
                                                    echo '<div class="btnms btn5" ><input name="MS_ID" type="hidden" value="'.$row1['MS_ID'].'" ></input></div> ';                              
                                                    }
                                                if($row1['MS_ID']==6){
                                                    echo '<div class="btnms btn6" ><input name="MS_ID" type="hidden" value="'.$row1['MS_ID'].'" ></input></div> ';                              
                                                    }
                                                if($row1['MS_ID']==7){
                                                    echo '<div class="btnms btn7" ><input name="MS_ID" type="hidden" value="'.$row1['MS_ID'].'" ></input></div> ';                              
                                                    }
                                                if($row1['MS_ID']==8){
                                                    echo '<div class="btnms btn8" ><input name="MS_ID" type="hidden" value="'.$row1['MS_ID'].'" ></input></div> ';                              
                                                    } 
                                                if($row1['MS_ID']==9){
                                                    echo '<div class="btnms btn9" ><input name="MS_ID" type="hidden" value="'.$row1['MS_ID'].'" ></input></div> ';                              
                                                    } 
                                                 if($row1['MS_ID']==10){
                                                    echo '<div class="btnms btn9" ><input name="MS_ID" type="hidden" value="'.$row1['MS_ID'].'" ></input></div> ';                              
                                                    }                                             

                                        ?>   
                                                
           
                                    <?php endforeach; ?>
                                    <script>
                                    // Add active class to the current button (highlight it)
                                    var header = document.getElementById("myDIV");
                                    var btns = header.getElementsByClassName("btnms");
                                    for (var i = 0; i < btns.length; i++) {
                                    btns[i].addEventListener("click", function() {
                                    var current = document.getElementsByClassName("active1");
                                    if (current.length > 0) { 
                                        current[0].className = current[0].className.replace(" active1", "");
                                    }
                                    this.className += " active1";
                                    });
                                    }
                                    </script>
                            


                                <?php                
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "Shoes";
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    
                                    $SP_ID = $_GET['SP_ID'];

                                    $sql2 = "select * from kichco a, kcsp b
                                    where a.KC_ID=b.KC_ID
                                    and b.SP_ID='".$SP_ID."'";
                                    
                                    $result2 = mysqli_query($conn, $sql2);

                                    $data2 = [];
                                    $rowNum = 1;
                                    while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
                                        $data2[] = array( 
                                            'KC_ID' => $row2['KC_ID'],   
                                            'KC_TEN' => $row2['KC_TEN'],   
                                            'SP_ID' => $row2['SP_ID'],

                                        );
                                        $rowNum++;
                                    }
                            ?>


                           <div class="select-catagory">
                                <div class="size-select">
                                    <b>CHỌN SIZE:</b><br><br>
                                        <div id="myDIV1">                                   
                                            <?php foreach ($data2 as $row2) : ?> 
                                                <div class="btnkc " ><?php echo $row2['KC_TEN']?><input name="KC_ID" type="hidden" value="<?php echo $row2['KC_ID']?>" ></input></div>                                               
                
                                            <?php endforeach; ?>

                                            <script>
                                            // Add active class to the current button (highlight it)
                                            var header = document.getElementById("myDIV1");
                                            var btns = header.getElementsByClassName("btnkc");
                                            for (var i = 0; i < btns.length; i++) {
                                            btns[i].addEventListener("click", function() {
                                            var current = document.getElementsByClassName("active2");
                                            if (current.length > 0) { 
                                                current[0].className = current[0].className.replace(" active2", "");
                                            }
                                            this.className += " active2";
                                            });
                                            }
                                            </script>
                                        </div>
                                    </div>
                           </div>


                            <div class="cart-item"> 
                                                                                        
                                    <div class="single-cart">
                                        <div class="cart-plus-minus">&emsp;&emsp;
                                            <input class="cart-plus-minus-box" type="text" name="SOLUONG" id="SOLUONG" value="1">                                        
                                        </div>
                                        <input type="submit" class="button-19" value="Thêm Vào Giỏ Hàng">
                                    </div> 
                                                           
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            </form>   
        </div>
        <!-- single product details end -->
        <!-- single product tab start -->
        <div class="single-product-tab-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-product-tab">
                            <ul class="single-product-tab-navigation" role="tablist">
                                <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">MÔ TẢ SẢN PHẨM</a></li>
                                <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">ĐÁNH GIÁ</a></li>                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content single-product-page">
                                <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                    <div class="single-p-tab-content">
                                        <p><?php echo $row['SP_MOTA']; ?> </p>
                                    </div>
                                </div>
                                <!-- <div role="tabpanel" class="tab-pane fade" id="tab2">
                                    <div class="single-p-tab-content">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="product-review">
                                                    <p> <a href="#"> plaza</a> <span>Review by</span> plaza </p>
                                                    <div class="product-rating-info">
                                                        <p>value</p>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-rating-info">
                                                        <p>Quality</p>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-rating-info">
                                                        <p>Price</p>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-date">
                                                        <p>plaza <em> (Posted on 8/27/2015)</em></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="rate-product hidden-xs">
                                                    <div class="rate-product-heading">
                                                        <h3>You're reviewing: Fusce aliquam</h3>
                                                        <h3>How do you rate this product? <em>*</em></h3>
                                                    </div>
                                                    <form action="#">
                                                        <table class="product-review-table">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>1 star</th>
                                                                    <th>2 star</th>
                                                                    <th>3 star</th>
                                                                    <th>4 star</th>
                                                                    <th>5 star</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quality</th>
                                                                    <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <ul class="form-list">
                                                            <li>
                                                                <label> nickname <em>*</em> </label>
                                                                <input type="text">
                                                            </li>
                                                            <li>
                                                                <label> Summary of Your Review <em>*</em> </label>
                                                                <input type="text">
                                                            </li>
                                                            <li>
                                                                <label> Review <em>*</em> </label>
                                                                <textarea cols="3" rows="5"></textarea>
                                                            </li>
                                                        </ul>
                                                        <button type="submit"> submit review</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab3">
                                    <div class="single-p-tab-content">
                                        <div class="add-tab-title">
                                            <p> add your tag </p>
                                        </div>
                                        <div class="add-tag">
                                            <form action="#">
                                                <input type="text">
                                                <button type="submit">add tags</button>
                                            </form>
                                        </div>
                                        <p class="tag-rules">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single product tab end -->
        <!-- upsell product area start-->
        <div class="upsell-product home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-title">
                            <h2>SẢN PHẨM TƯƠNG TỰ</h2>
                        </div>
                    </div>
                </div>
                <?php
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "Shoes";
                $conn = new mysqli($servername, $username, $password, $dbname);

                
                $sql3 = "select * from sanpham ";


                
                $result3 = mysqli_query($conn, $sql3);

                $data3 = [];
                $rowNum = 1;
                while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
                    $data3[] = array(                                            
                        'SP_ID' => $row3['SP_ID'],
                        'SP_TEN' => $row3['SP_TEN'],
                        'SP_HINH' => $row3['SP_HINH'],
                        'SP_HINH1' => $row3['SP_HINH1'],
                        'SP_HINH2' => $row3['SP_HINH2'],
                        'SP_GIA' => $row3['SP_GIA'],
                        

                    );
                    $rowNum++;
                }
            ?> 
                <div class="row">
                    <div class="upsell-slider">
                        <?php foreach ($data3 as $row3) : ?>                        
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                <a href="single-product.php?SP_ID=<?php echo $row['SP_ID'];?>">
                                <img src="img/product/<?php echo $row3['SP_HINH']; ?>" alt="" class="primary-img">
                                <img src="img/product/<?php echo $row3['SP_HINH1']; ?>" alt="" class="secondary-img">
                                </a>
                                </div>                               
                                <div class="product-price">
                                    <div class="product-name">
                                    <a href="single-product.php?SP_ID=<?php echo $row3['SP_ID'];?>" title="Fusce aliquam"><?php echo $row3['SP_TEN']; ?></a>
                                    </div>
                                    <div class="price-rating">
                                    <span><?php echo number_format ($row3['SP_GIA']); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <?php endforeach; ?>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="float-contact">
                                <button class="chat-zalo">
                                    <a href="http://zalo.me/0344176614"><img src="img/hotline/zalo.png" width="40px" alt=""></a>
                                </button>&nbsp;&nbsp;   
                                <button class="chat-face">
                                    <a href="https://www.facebook.com/Nguyen4tt/"><img src="img/hotline/mess.png" width="40px" alt=""></a>
                                </button>&nbsp;&nbsp;
                                <button class="hotline">
                                    <a href="tel:0909999999"><img src="img/hotline/call.png" width="40px" alt=""></a>
                                </button>
                            </div>
        <!-- upsell product area end-->
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
            
            <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Converse","New Balance","Puma","Adidas","Nike","GIÀY NIKE AIR ZOOM STRUCTURE 25 NAM - ĐEN TRẮNG","GIÀY NIKE AIR MAX SC NAM - XANH NAVY","GIÀY NIKE AIR MAX SC NAM - XÁM XANH"];
autocomplete(document.getElementById("myInput"), countries);
</script>
                    
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
        <script src="./chatbot/bot.js"></script>

    </body>

<!-- Mirrored from preview.hasthemes.com/james-preview/james/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 00:38:50 GMT -->
</html>
