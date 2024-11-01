-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2024 lúc 08:38 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hello', 'Chào bạn, Cảm ơn bạn đã ghé thăm Shop. Bạn có thể cho chúng tôi biết bạn cần mua giày để đi chơi, chạy bộ hay đá bóng không ạ?'),
(2, 'hi', 'Chào bạn, Cảm ơn bạn đã ghé thăm Shop. Bạn có thể cho chúng tôi biết bạn cần mua giày để đi chơi, chạy bộ hay đá bóng không ạ?'),
(3, ' chạy bộ', 'Cảm ơn bạn. Về sản phẩm giày chạy bộ, shop mình có Giày Nike Air Zoom Structure 25, Giày Nike Air Max SC, Giày Puma Anzarun 2.0 Open Road. Đây là những đôi giày tốt nhất cho việc chạy bộ. Bạn muốn shop tư vấn chi tiết về sản phẩm nào ạ?'),
(4, 'Mua hàng tại Shop có được đổi trả không?', 'Mua hàng tại shop The James luôn yên tâm vì phương châm của chúng tôi là bán hàng cho khách hàng sử dụng được và ưng ý chứ không phải bán cho bằng được, do vậy khi bạn mua sản phẩm của shop trong vòng 3 ngày được shop hỗ trợ đổi size, đổi mẫu nếu như không hài lòng hoặc đi chưa đúng size.'),
(5, 'Shop giao hàng ở những đâu?', 'Chúng tôi giao hàng khắp các tỉnh thành trên Việt Nam qua hệ thống giao hàng được liên kết với shop. Quý khách hàng vui lòng để lại thông tin giao hàng chính xác đến từng quận huyện xã để thuận lợi cho shop giao hàng đúng địa chỉ nhé.'),
(6, 'Chi phí vận chuyển và thời gian giao hàng trong bao lâu?\r\n', 'Shop The James luôn chọn đơn vị giao hàng cẩn thận và nhanh nhất. Thời gian giao hàng thường từ 2-4 ngày tùy thuộc bạn ở khu vực nào? chi phí cũng phụ thuộc vào bảng giá vận chuyển. Tuy nhiên chúng tôi sẽ tính phí vận chuyển chung cho các đơn hàng đến các tỉnh thành thường là 30.000 đ. Tùy'),
(7, 'Mua hàng tại shop có được bảo hành không?', 'Shop The James cam kết về chất lượng giày và sẵn sàng bảo hành cho quý khách từ 3 đến 6 tháng. Trong trường hợp hỏng hóc, bong tróc chúng tôi sẽ bảo hành tùy theo tình hình hỏng của đôi giày. Hoặc đổi mới 100% nếu tình hình nghiêm trọng'),
(8, 'Mua nhiều giày có được miễn phí ship không?', 'Shop The James luôn có chính sách tốt khi bạn mua nhiều tùy từng thời điểm, chúng tôi sẽ giảm giá chi phí vận chuyển hoặc miễn phí vận chuyển theo trường hợp cụ thể nhé. Vui lòng liên hệ trực tiếp để được tư vấn kỹ hơn.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `DH_ID` bigint(20) NOT NULL,
  `SP_ID` int(11) NOT NULL,
  `KC_ID` int(11) NOT NULL,
  `MS_ID` int(11) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `GIA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`DH_ID`, `SP_ID`, `KC_ID`, `MS_ID`, `SOLUONG`, `GIA`) VALUES
(17157373563, 5, 5, 8, 2, '2500000'),
(17157373733, 1, 11, 5, 1, '3000000'),
(17157373923, 2, 8, 9, 1, '2500000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachinhanhang`
--

CREATE TABLE `diachinhanhang` (
  `DCNH_MA` bigint(20) NOT NULL,
  `DCNH_TEN` varchar(50) NOT NULL,
  `DCNH_SDT` varchar(12) NOT NULL,
  `DCNH_TINH` varchar(50) NOT NULL,
  `DCNH_HUYEN` varchar(50) NOT NULL,
  `DCNH_XA` varchar(50) NOT NULL,
  `DCNH_DIACHI` varchar(100) NOT NULL,
  `ND_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `diachinhanhang`
--

INSERT INTO `diachinhanhang` (`DCNH_MA`, `DCNH_TEN`, `DCNH_SDT`, `DCNH_TINH`, `DCNH_HUYEN`, `DCNH_XA`, `DCNH_DIACHI`, `ND_ID`) VALUES
(26, 'Nguyên', '0123456789', 'Tỉnh Thái Nguyên', 'Thị xã Phổ Yên', 'Phường Bắc Sơn', '123c, đường Nguyễn Thị Huệ ', 3),
(27, 'Nguyên', '0123456789', 'Tỉnh Đồng Tháp', 'Huyện Lấp Vò', 'Thị trấn Lấp Vò', '123c, đường Nguyễn Thị Huệ ', 3),
(28, 'Nguyên', '0123456789', 'Tỉnh Vĩnh Phúc', 'Huyện Yên Lạc', 'Xã Liên Châu', '123c, đường Nguyễn Thị Huệ ', 3),
(29, 'Nguyên', '09394456789', 'Thành phố Cần Thơ', 'Quận Ninh Kiều', 'Phường An Khánh', '123c, đường Nguyễn Thị Huệ ', 3),
(30, 'Nguyên', '09394456789', 'Thành phố Hà Nội', 'Quận Long Biên', 'Phường Việt Hưng', '123c, đường Nguyễn Thị Huệ ', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `DH_ID` bigint(20) NOT NULL,
  `ND_ID` int(11) NOT NULL,
  `PTTT_ID` int(11) NOT NULL,
  `DCNH_MA` varchar(100) NOT NULL,
  `TT_ID` int(11) NOT NULL,
  `DH_TONGTIENHANG` int(50) NOT NULL,
  `DH_TONGTHANHTOAN` int(50) NOT NULL,
  `DH_GHICHU` varchar(500) NOT NULL,
  `DH_NGAYDAT` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`DH_ID`, `ND_ID`, `PTTT_ID`, `DCNH_MA`, `TT_ID`, `DH_TONGTIENHANG`, `DH_TONGTHANHTOAN`, `DH_GHICHU`, `DH_NGAYDAT`) VALUES
(17157373563, 3, 1, '26', 2, 5000000, 5030000, '', '2024-05-15'),
(17157373733, 3, 3, '26', 2, 3000000, 3030000, '', '2024-05-15'),
(17157373923, 3, 2, '26', 1, 2500000, 2530000, '', '2024-05-15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `GH_ID` int(11) NOT NULL,
  `ND_ID` int(11) NOT NULL,
  `SP_ID` int(11) NOT NULL,
  `KC_ID` int(11) NOT NULL,
  `MS_ID` int(11) NOT NULL,
  `SOLUONG` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `HD_ID` int(11) NOT NULL,
  `HD_NGAYLAP` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `HD_TONGTIEN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kcsp`
--

CREATE TABLE `kcsp` (
  `KC_ID` int(11) NOT NULL,
  `SP_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `kcsp`
--

INSERT INTO `kcsp` (`KC_ID`, `SP_ID`) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 1),
(2, 2),
(2, 5),
(2, 6),
(2, 7),
(3, 2),
(3, 5),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(6, 1),
(6, 2),
(6, 6),
(6, 7),
(6, 8),
(7, 1),
(7, 2),
(7, 7),
(8, 1),
(8, 2),
(8, 6),
(8, 8),
(9, 7),
(10, 1),
(10, 8),
(11, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichco`
--

CREATE TABLE `kichco` (
  `KC_ID` int(11) NOT NULL,
  `KC_TEN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `kichco`
--

INSERT INTO `kichco` (`KC_ID`, `KC_TEN`) VALUES
(1, '35'),
(2, '36'),
(3, '37'),
(4, '38'),
(5, '39'),
(6, '40'),
(7, '41'),
(8, '42'),
(9, '43'),
(10, '44'),
(11, '45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `LH_ID` int(11) NOT NULL,
  `LH_TEN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`LH_ID`, `LH_TEN`) VALUES
(1, 'Giày thể thao'),
(2, 'Túi '),
(3, 'Áo thun');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `MS_ID` int(11) NOT NULL,
  `MS_TEN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`MS_ID`, `MS_TEN`) VALUES
(1, 'Hồng'),
(2, 'Kem'),
(3, 'Xanh dương'),
(4, 'Đen'),
(5, 'Trắng'),
(6, 'Vàng'),
(7, 'Đỏ'),
(8, 'Xám'),
(9, 'Cam'),
(10, 'Nâu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mssp`
--

CREATE TABLE `mssp` (
  `MS_ID` int(11) NOT NULL,
  `SP_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mssp`
--

INSERT INTO `mssp` (`MS_ID`, `SP_ID`) VALUES
(1, 5),
(3, 2),
(3, 5),
(3, 6),
(4, 1),
(5, 1),
(5, 7),
(5, 8),
(7, 8),
(8, 5),
(8, 7),
(9, 2),
(9, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ND_ID` int(11) NOT NULL,
  `VT_ID` int(11) NOT NULL,
  `ND_TEN` varchar(50) DEFAULT NULL,
  `ND_TAIKHOAN` varchar(50) DEFAULT NULL,
  `ND_MATKHAU` varchar(50) DEFAULT NULL,
  `ND_GIOITINH` varchar(5) DEFAULT NULL,
  `ND_NGAYSINH` date DEFAULT NULL,
  `ND_EMAIL` varchar(50) DEFAULT NULL,
  `ND_SDT` varchar(10) DEFAULT NULL,
  `ND_HINH` varchar(100) DEFAULT NULL,
  `ND_DIACHI` varchar(100) DEFAULT NULL,
  `ND_NGAYTAO` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ND_ID`, `VT_ID`, `ND_TEN`, `ND_TAIKHOAN`, `ND_MATKHAU`, `ND_GIOITINH`, `ND_NGAYSINH`, `ND_EMAIL`, `ND_SDT`, `ND_HINH`, `ND_DIACHI`, `ND_NGAYTAO`) VALUES
(3, 1, 'Thảo Nguyên', 'Nguyen123', '123', 'Nữ', '2001-02-02', 'nguyen@gmail.com', '0123456789', NULL, NULL, '9560-12-25'),
(4, 1, 'Nhân', 'Nhan123', '123', 'Nam', '2012-07-12', 'nhan@gmail.com', '0123456789', NULL, NULL, '2024-05-03'),
(5, 1, 'Anh', 'Anh123', '123', 'Nữ', '2005-06-08', 'anh@gmail.com', '0939566589', NULL, NULL, '2024-05-03'),
(6, 2, 'Thảo Nguyên', 'admin', '123', 'Nữ', '2004-02-03', 'admin@gmail.com', '0123456789', NULL, NULL, '2024-05-03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `NCC_ID` int(11) NOT NULL,
  `NCC_TEN` varchar(100) DEFAULT NULL,
  `NCC_SDT` varchar(20) DEFAULT NULL,
  `NCC_EMAIL` varchar(50) DEFAULT NULL,
  `NCC_DIACHI` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`NCC_ID`, `NCC_TEN`, `NCC_SDT`, `NCC_EMAIL`, `NCC_DIACHI`) VALUES
(1, 'Công Ty TNHH Giày Nam Việt', '(028)62684', 'giaynamviet.vn@gmail.com ', 'Số D17/4A Đinh Đức Thiện, Ấp 4, Xã Bình Chánh, Huyện Bình Chánh, Tp. Hồ Chí Minh.'),
(2, 'Công ty TNHH sản xuất hàng tiêu dùng Bình Tiên – Biti’s', '(028) 38 7', 'chamsockhachhang@bitis.com.vn', '22 Lý Chiêu Hoàng, Phường 10, Quận 6, TP HCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `PTTT_ID` int(11) NOT NULL,
  `PTTT_TEN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`PTTT_ID`, `PTTT_TEN`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Thanh Toán VNPAY'),
(3, 'Thanh Toán MOMO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `SP_ID` int(11) NOT NULL,
  `TH_ID` int(11) NOT NULL,
  `NCC_ID` int(11) NOT NULL,
  `LH_ID` int(11) NOT NULL,
  `SP_TEN` varchar(50) DEFAULT NULL,
  `SP_GIA` int(50) DEFAULT NULL,
  `SP_GIAMGIA` int(11) DEFAULT NULL,
  `SP_HINH` varchar(100) DEFAULT NULL,
  `SP_SOLUONGTON` bigint(100) DEFAULT NULL,
  `SP_SOLUONGDABAN` bigint(100) NOT NULL,
  `SP_MOTA` varchar(1500) DEFAULT NULL,
  `SP_HINH1` varchar(100) DEFAULT NULL,
  `SP_HINH2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`SP_ID`, `TH_ID`, `NCC_ID`, `LH_ID`, `SP_TEN`, `SP_GIA`, `SP_GIAMGIA`, `SP_HINH`, `SP_SOLUONGTON`, `SP_SOLUONGDABAN`, `SP_MOTA`, `SP_HINH1`, `SP_HINH2`) VALUES
(1, 1, 1, 1, 'GIÀY NIKE Flyknit Chukka', 3000000, NULL, '1.png', 91, 9, 'Khi mà flyknit trở thành dạng chất liệu được yêu thích và rất thành công trên thị trường thì Nike cũng chẳng ngần ngại gì mà không tiếp tục sử dụng chất liệu này để tăng thêm doanh số. Tạm ngưng với những mẫu Flyknit Racer đang tung hoành thời gian vừa qua, Nike quyết định đưa dòng Flyknit Chukka trở lại với một bộ sưu tập gồm 3 phối màu monochrome mới toanh đủ sức làm hài lòng bất kì người mang nào.\r\nKhi mà flyknit trở thành dạng chất liệu được yêu thích và rất thành công trên thị trường thì Nike cũng chẳng ngần ngại gì mà không tiếp tục sử dụng chất liệu này để tăng thêm doanh số. Tạm ngưng với những mẫu Flyknit Racer đang tung hoành thời gian vừa qua, Nike quyết định đưa dòng Flyknit Chukka trở lại với một bộ sưu tập gồm 3 phối màu monochrome mới toanh đủ sức làm hài lòng bất kì người mang nào.', '15.png', '7.png'),
(2, 1, 1, 1, 'GIÀY NIKE AIR MAX SC NAM - XANH NAVY', 2500000, NULL, '2.png', 94, 6, 'Giày Nike Air Max SC mang nét huyền thoại của Nike, với bộ đệm Air Max trứ danh đây là mẫu giày có thể kết hợp với bất cứ trang phục nào mà bạn vẫn hoàn toàn tự tin trong mọi hoàn cảnh.', '16.png', '2.png'),
(5, 1, 1, 1, 'GIÀY NIKE AIR MAX SC NAM - XÁM XANH', 2500000, NULL, '9.png', 94, 6, 'Adidas là tập đoàn đa quốc gia sản xuất đồ thể thao và thiết bị thể thao. Thương hiệu của tập đoàn Adidas gồm Adidas, Reebok và các sản phẩm dành cho môn thể thao golf là TaylorMade-adidas. Tập đoàn được thành lập năm 1920 bởi ông Adolf Dassler, trụ sở chính hiện nay của Tập đoàn tại Herzogenaurach, Đức. Adidas hiện nay là 1 trong những thương hiệu đồ thể thao người dân Vietnam ưu chuộng nhất, từ các dòng giày thi đấu chuyên nghiệp đến các sản phẩm thời trang đường phố dành cho giới trẻ. Với chất lượng vượt trội, kiểu dáng thời trang, Adidas là một trong những thương hiệu có giá trị nhất thế giới. Ngày nay, Adidas không những được tin dùng bởi người chơi thể thao như giày chạy bộ, tennis, bóng đá mà Adidas còn được 1 lượng fan khổng lồ ở các dòng giày dạo phố casual như Adidas NEO, Adidas Originals. Chúng tôi hân hạnh được phục vụ các bạn yêu quý thương hiệu Adidas với sản phẩm chính hãng, dịch vụ giao hàng thu tiền miễn phí trên phạm vi toàn quốc.', '25.png', '9.png'),
(6, 3, 1, 1, 'GIÀY PUMA ANZARUN 2.0 OPEN ROAD NAM - TRẮNG CAM', 2850000, NULL, '4.png', 98, 2, 'Giày Puma Anzarun 2.0 Open Road mẫu giày sneaker có thiết kế rất đẹp cùng với những công nghệ cao cấp của Puma. Đây chính là mẫu giày đa năng tuyệt vời cho mọi hoạt động hàng ngày.', '4.png', '4.png'),
(7, 1, 1, 1, 'GIÀY NIKE JORDAN STADIUM 90 NAM - TRẮNG XÁM', 4230000, NULL, '5.png', 100, 0, 'Giày Nike Jordan Stadium 90 là một trong những mẫu giày sneaker nổi tiếng với thiết kế tuyệt đẹp lấy cảm hứng từ AJ1 và AJ5, vừa mang phong cách thời trang vừa đảm bảo sự thoải mái đáng kinh ngạc khi sử dụng.\r\nPhần Upper với sự kết hợp hoàn hảo chất liệu da và da lộn cao cấp, Nike Jordan Stadium 90 là một siêu phẩm đỉnh cao của các tín đồ sneaker.', '5.png', '5.png'),
(8, 1, 1, 1, 'GIÀY NIKE JORDAN STADIUM 90 NAM - TRẮNG ĐỎ', 4230000, NULL, '16.png', 100, 0, 'Giày Nike Jordan Stadium 90 là một trong những mẫu giày sneaker nổi tiếng với thiết kế tuyệt đẹp lấy cảm hứng từ AJ1 và AJ5, vừa mang phong cách thời trang vừa đảm bảo sự thoải mái đáng kinh ngạc khi sử dụng.Phần Upper với sự kết hợp hoàn hảo chất liệu da và da lộn cao cấp, Nike Jordan Stadium 90 là một siêu phẩm đỉnh cao của các tín đồ sneaker.', '16.png', '16.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongke`
--

CREATE TABLE `thongke` (
  `ID` int(11) NOT NULL,
  `NGAYDAT` varchar(30) NOT NULL,
  `DONHANG` int(11) NOT NULL,
  `DOANHTHU` int(11) NOT NULL,
  `SOLUONGBAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `TH_ID` int(11) NOT NULL,
  `TH_TEN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`TH_ID`, `TH_TEN`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Puma'),
(4, 'New Balance'),
(5, 'Converse');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `TT_ID` int(11) NOT NULL,
  `TT_TEN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang`
--

INSERT INTO `tinhtrang` (`TT_ID`, `TT_TEN`) VALUES
(1, 'Đang chuẩn bị hàng'),
(2, 'Chờ lấy hàng'),
(3, 'Đang giao'),
(4, 'Đã giao'),
(5, 'Thành công'),
(6, 'Đã hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `VT_ID` int(11) NOT NULL,
  `VT_TEN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`VT_ID`, `VT_TEN`) VALUES
(1, 'Khách hàng'),
(2, 'Nhân viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`DH_ID`,`SP_ID`),
  ADD KEY `FK_CTDH_SP` (`SP_ID`),
  ADD KEY `FK_KC_CTDH` (`KC_ID`),
  ADD KEY `FK_MC_CTDH` (`MS_ID`);

--
-- Chỉ mục cho bảng `diachinhanhang`
--
ALTER TABLE `diachinhanhang`
  ADD PRIMARY KEY (`DCNH_MA`),
  ADD KEY `KH_MA` (`ND_ID`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`DH_ID`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`GH_ID`),
  ADD KEY `FK_ND_GH` (`ND_ID`),
  ADD KEY `FK_SP_GH` (`SP_ID`),
  ADD KEY `KF_KC_GH` (`KC_ID`),
  ADD KEY `KF_MS_GH` (`MS_ID`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`HD_ID`);

--
-- Chỉ mục cho bảng `kcsp`
--
ALTER TABLE `kcsp`
  ADD PRIMARY KEY (`KC_ID`,`SP_ID`),
  ADD KEY `FK_KCSP2` (`SP_ID`);

--
-- Chỉ mục cho bảng `kichco`
--
ALTER TABLE `kichco`
  ADD PRIMARY KEY (`KC_ID`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`LH_ID`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`MS_ID`);

--
-- Chỉ mục cho bảng `mssp`
--
ALTER TABLE `mssp`
  ADD PRIMARY KEY (`MS_ID`,`SP_ID`),
  ADD KEY `FK_MSSP2` (`SP_ID`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ND_ID`),
  ADD KEY `FK_VT_ND` (`VT_ID`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`NCC_ID`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`PTTT_ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`SP_ID`),
  ADD KEY `FK_LH_SP` (`LH_ID`),
  ADD KEY `FK_NCC_SP` (`NCC_ID`),
  ADD KEY `FK_TH_SP` (`TH_ID`);

--
-- Chỉ mục cho bảng `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`TH_ID`);

--
-- Chỉ mục cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`TT_ID`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`VT_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `diachinhanhang`
--
ALTER TABLE `diachinhanhang`
  MODIFY `DCNH_MA` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `DH_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17157373924;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `GH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `HD_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `kichco`
--
ALTER TABLE `kichco`
  MODIFY `KC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `LH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `MS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ND_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `NCC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `PTTT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `SP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `thongke`
--
ALTER TABLE `thongke`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `TH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `TT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `VT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `FK_ND_GH` FOREIGN KEY (`ND_ID`) REFERENCES `nguoidung` (`ND_ID`),
  ADD CONSTRAINT `FK_SP_GH` FOREIGN KEY (`SP_ID`) REFERENCES `sanpham` (`SP_ID`),
  ADD CONSTRAINT `KF_KC_GH` FOREIGN KEY (`KC_ID`) REFERENCES `kichco` (`KC_ID`),
  ADD CONSTRAINT `KF_MS_GH` FOREIGN KEY (`MS_ID`) REFERENCES `mausac` (`MS_ID`);

--
-- Các ràng buộc cho bảng `kcsp`
--
ALTER TABLE `kcsp`
  ADD CONSTRAINT `FK_KCSP` FOREIGN KEY (`KC_ID`) REFERENCES `kichco` (`KC_ID`),
  ADD CONSTRAINT `FK_KCSP2` FOREIGN KEY (`SP_ID`) REFERENCES `sanpham` (`SP_ID`);

--
-- Các ràng buộc cho bảng `mssp`
--
ALTER TABLE `mssp`
  ADD CONSTRAINT `FK_MSSP` FOREIGN KEY (`MS_ID`) REFERENCES `mausac` (`MS_ID`),
  ADD CONSTRAINT `FK_MSSP2` FOREIGN KEY (`SP_ID`) REFERENCES `sanpham` (`SP_ID`);

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `FK_VT_ND` FOREIGN KEY (`VT_ID`) REFERENCES `vaitro` (`VT_ID`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_LH_SP` FOREIGN KEY (`LH_ID`) REFERENCES `loaihang` (`LH_ID`),
  ADD CONSTRAINT `FK_NCC_SP` FOREIGN KEY (`NCC_ID`) REFERENCES `nhacungcap` (`NCC_ID`),
  ADD CONSTRAINT `FK_TH_SP` FOREIGN KEY (`TH_ID`) REFERENCES `thuonghieu` (`TH_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
