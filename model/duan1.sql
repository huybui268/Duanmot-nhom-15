-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 04:16 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `bill_name` varchar(50) NOT NULL,
  `bill_address` varchar(50) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(50) NOT NULL,
  `bill_pttt` int(11) NOT NULL DEFAULT 1 COMMENT '1.thanh toán trực tiếp\r\n2.chuyển khoản\r\n3.thanh toán online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `bill_status` int(11) DEFAULT 0 COMMENT '0.đơn hàng mới\r\n1.đang xử lí\r\n2.đang giao hàng\r\n3.đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`) VALUES
(181, 34, 'admin', '17b7 Thái Bình', '0333109261', 'huybqph36479@fpt.edu.vn', 1, '2023-11-28', 378027000, 0),
(182, 34, 'admin', '17b7 Thái Bình', '0333109261', 'huybqph36479@fpt.edu.vn', 1, '2023-11-28', 20030000, 2),
(183, 34, 'admin', '17b7 Thái Bình', '0333109261', 'huybqph36479@fpt.edu.vn', 1, '2023-11-28', 144076000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(100, 'Siêu dễ thương', 1, 32, '2023-11-19'),
(101, 'CUte quá', 1, 32, '2023-11-19'),
(102, 'Rất Chi Là Ok', 30, 33, '2023-11-19'),
(103, 'Okok', 30, 33, '2023-11-19'),
(104, 'Okok', 30, 31, '2023-11-22'),
(105, 'Okok', 30, 31, '2023-11-22'),
(106, 'Okok', 30, 31, '2023-11-22'),
(107, 'Okok', 30, 31, '2023-11-22'),
(108, 'Okok', 30, 31, '2023-11-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mau` varchar(20) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `mau`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(158, 34, 35, '../upload/OPPO Reno10 5G.jpg', 'Galaxy s23 fe', 'pink', 20000000, 1, 20000000, 182),
(159, 34, 35, '../upload/jpl3.jfif', 'Galaxy s23 fe', 'pink', 20000000, 2, 40000000, 183),
(160, 34, 34, '../upload/OPPO Reno10 5G.jpg', 'Galaxy Z Flip5', 'black', 25989000, 2, 51978000, 183),
(161, 34, 34, '../upload/OPPO Reno10 5G.jpg', 'Galaxy Z Flip5', 'pink', 25989000, 1, 25989000, 183),
(162, 34, 34, '../upload/OPPO Reno10 5G.jpg', 'Galaxy Z Flip5', 'green', 25989000, 1, 25989000, 183);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Iphone'),
(2, 'Sam Sung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gia` int(20) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `mota_dai` varchar(2000) NOT NULL,
  `soluongkho` int(200) NOT NULL,
  `tonkho` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `gia`, `price`, `img`, `mota`, `luotxem`, `iddm`, `mota_dai`, `soluongkho`, `tonkho`) VALUES
(31, 'Sam Sung S23 Ultra', 25000000, 20000000.00, 's23ultra.jpg', '\r\nSamsung Galaxy S23 Ultra \r\n', 158, 2, 'Thông tin sản phẩm\r\nSamsung Galaxy S23 Ultra 5G 256GB là chiếc smartphone cao cấp nhất của nhà Samsung, sở hữu cấu hình không tưởng với con chip khủng được Qualcomm tối ưu riêng cho dòng Galaxy và camera lên đến 200 MP, xứng danh là chiếc flagship Android được mong đợi nhất trong năm 2023.\r\nTạo hình sang trọng đầy tinh tế\r\nVề thiết kế thì Samsung Galaxy S23 Ultra sẽ tiếp tục thừa hưởng kiểu dáng sang trọng đến từ thế hệ trước, vẫn là bộ khung kim loại, mặt lưng kính cùng kiểu tạo hình bo cong nhẹ ở cạnh bên và màn hình.', 99, 0),
(32, 'Iphone 15', 32000000, 30000000.00, 'ip15.jpg', 'Thiết kế thời thượng và bền bỉ ', 58, 1, '6.1 inch, OLED, Super Retina XDR, 2556 x 1179 Pixels\r\n\r\n48.0 MP + 12.0 MP\r\n\r\n12.0 MP\r\n\r\nApple A16 Bionic\r\n\r\n128 GB', 99, 0),
(33, 'S23', 23000000, 21000000.00, 'OPPO Reno10 5G.jpg', 'S23 Ultraa', 157, 2, 'sdcasdszcxc', 99, 0),
(34, 'Galaxy Z Flip5', 26000000, 25989000.00, 'jpl3.jfif', 'Z Flip5', 34, 2, 'SP chính hãng đã active, thu lại từ khách không sử dụng trong thời gian test(30 ngày)\r\nĐầy đủ phụ kiện từ NSX (Giảm thêm 200K nếu không kèm phụ kiện). Máy có thể đã qua BH hãng hoặc sửa chữa thay thế linh kiện. Có nguồn gốc rõ ràng, xuất hoá đơn eVAT.', 0, 0),
(35, 'Galaxy s23 fe', 21000000, 20000000.00, 'OPPO Reno10 5G.jpg', 'Sam Sung', 50, 2, 'Sau khi Galaxy S22 Series được trình làng vào ngày 16/02/2022 thì điều tiếc nuối nhất của các SamFans chính là phiên bản Galaxy S22 FE đã không xuất hiện. Vì vậy, nhiều người đang tỏ ra vô cùng hào hứng trước thông tin giá bán Samsung S23 FE và thời gian ra mắt chiếc điện thoại này xuất hiện trên các nền tảng mạng xã hội. Để tìm hiểu chi tiết thông tin này, cùng theo dõi bài viết dưới đây của Siêu Thị Điện Máy - Nội Thất Chợ Lớn nhé!', 0, 0),
(36, 'Iphone 15 Pro', 41000000, 40000000.00, '15pr.jfif', 'Iphone', 123, 1, 'Apple,telefon,128GB,aparat,naturalny,iPhone 15,Tytan,Iphone 15 Pro,15 Pro,48MP,MTV43PX/A,256gb', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(34, 'admin', '123', 'huybqph36479@fpt.edu.vn', '17b7 Thái Bình', '0333109261', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_tk` (`iduser`),
  ADD KEY `fk_cart_sp` (`idpro`),
  ADD KEY `fk_cart_bill` (`idbill`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
