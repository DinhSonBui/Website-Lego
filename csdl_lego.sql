-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2022 lúc 06:09 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `csdl_lego`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `title_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_banner` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `title_banner`, `name_banner`, `description_banner`, `img_banner`) VALUES
(1, 'lego city', 'biệt đội công an', ' Với các tính năng ấn tượng, bao gồm một trạm điều khiển chi tiết                và máy bay không người lái giám sát', 'home-img-1.png'),
(2, 'lego friend', 'vườn thú', 'chi tiết và cực kỳ linh hoạt sẽ mang lại niềm vui bất tận cho người chơi Minecraft và bất kỳ trẻ em nào thích xây dựng sáng tạo', 'home-img-2.png'),
(3, 'lego creator', 'hải tặc', 'Tàu Cướp Biển là một bộ được những người hâm mộ dòng sản phẩm phưu lưu và cướp biển chờ đợi. ', 'home-img-3.png'),
(4, 'sự kiện', 'vui trung thu', 'Ngày Tết trung thu đoàn viên sắp đến rồi. Chắc hẳn các bé đang rất háo hức được đi chơi, rước đèn lồng, phá cỗ trông trăng và nhận được những món quà ý nghĩa từ ba mẹ, người thân đúng không?', 'home-img-4.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `code_cart` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_user`, `code_cart`, `cart_status`, `cart_date`) VALUES
(1, 2, 9083, 0, ''),
(2, 3, 134, 0, ''),
(3, 4, 1198, 0, ''),
(11, 4, 4538, 1, ''),
(12, 4, 6725, 1, ''),
(13, 4, 7004, 1, ''),
(14, 4, 3796, 1, ''),
(15, 4, 8788, 1, ''),
(16, 4, 4250, 1, ''),
(17, 4, 7034, 1, ''),
(18, 4, 8328, 1, ''),
(19, 4, 2661, 1, ''),
(20, 4, 8469, 0, '2022-01-25 18:22:05'),
(21, 4, 2195, 0, '2022-01-25 23:41:57'),
(22, 4, 3745, 0, '2022-01-25 23:46:11'),
(23, 4, 9573, 0, '2022-01-25 23:53:57'),
(24, 4, 8684, 0, '2022-01-25 23:54:49'),
(25, 4, 8015, 0, '2022-01-25 23:58:13'),
(26, 4, 1902, 0, '2022-01-26 00:03:24'),
(27, 4, 9933, 0, '2022-01-26 00:06:42'),
(28, 4, 5638, 0, '2022-01-26 00:06:45'),
(29, 4, 4365, 1, '2022-01-26 00:49:29'),
(30, 2, 2786, 1, '2022-02-09 21:01:47'),
(31, 4, 1878, 1, '2022-02-14 22:59:44'),
(32, 5, 1986, 1, '2022-05-12 08:29:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_detail`
--

CREATE TABLE `tbl_cart_detail` (
  `id_cart_detail` int(11) NOT NULL,
  `code_cart` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantify` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_detail`
--

INSERT INTO `tbl_cart_detail` (`id_cart_detail`, `code_cart`, `id_product`, `quantify`) VALUES
(1, 9083, 1, 1),
(2, 9083, 3, 1),
(3, 9083, 11, 1),
(4, 134, 1, 1),
(5, 1198, 1, 1),
(6, 1198, 9, 1),
(7, 9362, 9, 1),
(8, 2405, 9, 2),
(10, 4538, 8, 1),
(11, 6725, 1, 1),
(12, 7004, 14, 1),
(13, 8788, 1, 1),
(14, 8788, 9, 1),
(15, 8788, 5, 1),
(16, 4250, 3, 1),
(17, 7034, 8, 1),
(18, 8328, 3, 1),
(19, 8469, 8, 1),
(20, 2195, 8, 1),
(21, 3745, 1, 1),
(22, 3745, 9, 1),
(23, 9573, 8, 1),
(24, 8684, 8, 1),
(25, 8015, 10, 1),
(26, 1902, 9, 2),
(27, 1902, 1, 1),
(28, 9933, 8, 1),
(29, 9933, 5, 1),
(30, 4365, 8, 1),
(31, 2786, 21, 1),
(32, 1878, 8, 1),
(33, 1878, 28, 1),
(34, 1986, 2, 1),
(35, 1986, 30, 1),
(36, 1986, 11, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) NOT NULL,
  `title_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `title_category`, `content_category`, `img_category`) VALUES
(1, 'lego city', 'giảm 25%', 'category-1.png'),
(2, 'lego friends', 'giảm 10%', 'category-2.png'),
(3, 'lego ninjago', 'giảm 7%', 'category-3.png'),
(4, 'lego duplo', 'giảm 15%', 'category-4.png'),
(5, 'lego creator', 'giảm 10%', 'category-5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_feature`
--

CREATE TABLE `tbl_feature` (
  `id_feature` int(11) NOT NULL,
  `name_feature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_feature` int(11) NOT NULL,
  `img_feature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_feature`
--

INSERT INTO `tbl_feature` (`id_feature`, `name_feature`, `price_feature`, `img_feature`) VALUES
(1, 'Tàu Tuần Tra', 1559000, 'dish-1.png'),
(2, 'Tòa Tháp Chọc Trời', 1259000, 'dish-2.png'),
(3, 'Phi Cơ Giải Cứu', 999000, 'dish-3.png'),
(4, 'Siêu Xe Mclaren Elva', 699000, 'dish-4.png'),
(5, 'Xe Thang Chữa Cháy', 419000, 'dish-5.png'),
(6, 'Lâu Đài Taj Mahal', 3559000, 'dish-6.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_product` float NOT NULL,
  `img_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_products`
--

INSERT INTO `tbl_products` (`id_product`, `name_product`, `price_product`, `img_product`, `category_product`) VALUES
(1, 'Tàu Tuần Tra', 1659000, 'product-1.jpg', 1),
(2, 'Xe Thang Chữa Cháy', 419000, 'product-2.jpg', 1),
(3, 'Trực Thăng Cứu Hỏa', 699000, 'product-3.jpg', 1),
(4, 'Xe Đầu Kéo Chữa Cháy', 1091000, 'product-4.jpg', 1),
(5, 'Xe cứu hộ động vật ', 319000, 'product-5.jpg', 1),
(6, 'Xe địa hình cứu hộ', 979000, 'product-6.jpg', 1),
(7, 'Ô Tô Điện Sành Điệu', 349000, 'product-7.jpg', 2),
(8, 'Tiệm Cà Phê', 643000, 'product-8.jpg', 2),
(9, 'Biệt Thự Gia Đình', 2299000, 'product-9.jpg', 2),
(10, 'Trung Tâm Mua Sắm', 2999000, 'product-10.jpg', 2),
(11, 'Ngôi nhà trên cây', 629000, 'product-11.jpg', 2),
(12, 'Chuyến dã ngoại mùa hè\r\n', 1119000, 'product-12.jpg', 2),
(13, 'Trường học Heartlake', 2249000, 'product-13.jpg', 2),
(14, 'Khách sạn Heartlake', 2999000, 'product-14.jpg', 2),
(15, 'Biệt đội cứu hộ động vật hoang dã', 2999000, 'product-15.jpg', 1),
(16, 'Trại cứu hộ động vật hoang dã', 3199000, 'product-16.jpg', 1),
(17, 'Xe Cảnh Sát Vận Chuyển Tội Phạm', 454000, 'product-17.jpg', 1),
(18, 'Trạm cảnh sát tuần tra & cứu hỏa biển', 979000, 'product-18.jpg', 1),
(19, 'Nhà Phố', 1559000, 'product-19.jpg', 1),
(20, 'Thị Trấn Sôi Động', 2999000, 'product-20.jpg', 1),
(21, 'Xe Tải Chữa Cháy', 233000, 'product-21.jpg', 1),
(22, 'Xe Xúc Lật Sửa Chữa Đường', 223000, 'product-22.jpg', 1),
(23, 'Xe Ô Tô Thể Thao', 319000, 'product-23.jpg', 1),
(24, 'Tàu lượn biết bay', 2999000, 'product-24.jpg', 2),
(25, 'Buổi biểu diễn ảo thuật nhào lộn', 454000, 'product-25.jpg', 2),
(26, 'Chiến xe địa hình của Kai', 223000, 'product-26.jpg', 3),
(27, 'Siêu Xe Chiến Đấu Của Kai', 1499000, 'product-27.jpg', 3),
(28, 'Chiến Giáp Titan Của Zane', 1999000, 'product-28.jpg', 3),
(29, 'Xe đua địa hình sóng âm', 2949000, 'product-29.jpg', 3),
(30, 'Chiến Giáp Sấm Sét Của Jay', 619000, 'product-30.jpg', 3),
(31, 'Rồng Đen Của Chúa Tể Overlord', 869000, 'product-31.jpg', 3),
(32, 'Xe Địa Hình Rừng Xanh Của Lloyd', 619000, 'product-32.jpg', 3),
(33, 'Rồng Thần Jungle Của Lloyd', 1299000, 'product-33.jpg', 3),
(34, 'Tàu chiến hạm bay Bounty', 909000, 'product-34.jpg', 3),
(35, 'Chiến giáp Hydro của Lloyd', 649000, 'product-35.jpg', 3),
(36, 'Đoàn Tàu Sinh Nhật Của Mickey & Minnie', 601000, 'product-36.jpg', 4),
(37, 'Thùng Gạch Duplo Sáng Tạo', 791000, 'product-37.jpg', 4),
(38, 'Thùng Gạch Duplo Sáng Tạo To', 1779000, 'product-38.jpg', 4),
(39, 'Đoàn Tàu Học Chữ', 761000, 'product-39.jpg', 4),
(40, 'Kỳ Lân Đáng Yêu Của Bé', 209000, 'product-40.jpg', 4),
(41, 'Tàu lửa học đếm số', 559000, 'product-41.jpg', 4),
(42, 'Chuyến Tàu Động Vật Đáng Yêu', 619000, 'product-42.jpg', 4),
(43, 'Xe tải đổ rác', 531000, 'product-43.jpg', 4),
(44, 'Chuyến phiêu lưu cắm trại gia đình', 1129000, 'product-44.jpg', 4),
(45, 'Cuộc đua xe kì thú', 1599000, 'product-45.jpg', 4),
(46, 'Nhà Cây Safari', 699000, 'product-46.jpg', 5),
(47, 'Nhà Lướt Sóng Bãi Biển', 1559000, 'product-47.jpg', 5),
(48, 'Vòng đu quay mặt trời', 2799000, 'product-48.jpg', 5),
(49, 'Lâu đài thời trung cổ', 3199000, 'product-49.jpg', 5),
(50, 'Sư Tử Hoang Dã', 349000, 'product-50.jpg', 5),
(51, 'Mô hình cá sấu', 999000, 'product-51.jpg', 5),
(52, 'Bể cá thần kì', 999000, 'product-52.jpg', 5),
(53, 'Phi Thuyền Thám Hiểm Không Gian', 299000, 'product-53.jpg', 5),
(54, 'Xe Tải Vận Chuyển Xe Đua', 799000, 'product-54.jpg', 5),
(55, 'Tàu phiêu lưu vũ trụ', 1599000, 'product-55.jpg', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `id_review` int(11) NOT NULL,
  `content_review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_reviews`
--

INSERT INTO `tbl_reviews` (`id_review`, `content_review`, `name_review`, `img_review`) VALUES
(1, ' Dù trẻ lớn hay nhỏ, không nên chọn những loại đồ chơi có đầu nhọn,              sắc cạnh, gây nguy hiểm cho bé khi chơi. Kiểm tra kĩ xuất xứ sản              phẩm.', 'VietAnh', 'pic-1.png'),
(2, 'Dù trẻ lớn hay nhỏ, không nên chọn những loại đồ chơi có đầu nhọn,\r\n              sắc cạnh, gây nguy hiểm cho bé khi chơi. Kiểm tra kĩ xuất xứ sản\r\n              phẩm.', 'AnhNhan', 'pic-2.png'),
(3, ' Dù trẻ lớn hay nhỏ, không nên chọn những loại đồ chơi có đầu nhọn,\r\n              sắc cạnh, gây nguy hiểm cho bé khi chơi. Kiểm tra kĩ xuất xứ sản\r\n              phẩm.', 'QuangHuy', 'pic-3.png'),
(4, 'Dù trẻ lớn hay nhỏ, không nên chọn những loại đồ chơi có đầu nhọn,\r\n              sắc cạnh, gây nguy hiểm cho bé khi chơi. Kiểm tra kĩ xuất xứ sản\r\n              phẩm.', 'Admin', 'pic-4.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2022-01-01', 50, '2800000', 12),
(2, '2022-01-19', 54, '6200000', 10),
(3, '2022-01-20', 13, '9100000', 16),
(4, '2022-01-21', 19, '8300000', 13),
(5, '2022-01-22', 37, '7300000', 11),
(6, '2022-01-23', 72, '4500000', 7),
(7, '2022-01-24', 24, '12000000', 15),
(8, '2022-01-25', 87, '16000000', 19),
(9, '2022-01-18', 72, '7100000', 10),
(10, '2022-01-17', 23, '1200000', 34),
(15, '2022-01-26', 3, '7219000', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_type_product`
--

CREATE TABLE `tbl_type_product` (
  `id_type_product` int(11) NOT NULL,
  `name_type_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fullname`, `username`, `password`, `email`, `phone`, `address`) VALUES
(1, 'Nguyen Van Admin', 'admin', '123', 'nguyenvanadmin@gmail.com', '0977314876', 'Ha Noi'),
(2, 'Nguyen Van User1', 'user1', '123', 'nguyenvanuser1@gmail.com', '0977314876', 'Hai Phong'),
(3, 'Nguyen Van User2', 'user2', '123', 'nguyenvanuser2@gmail.com', '0396356904', 'Ha Noi'),
(4, 'Nguyen Viet Anh', 'vietanh', '123', 'nguyenvietanh123@gmail.com', '0982348343', 'Ha Noi'),
(5, 'Dinh Son', 'son123', '123', 'buidinhson1209@gmail.com', '0376242876', 'Hai Phong');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `tbl_feature`
--
ALTER TABLE `tbl_feature`
  ADD PRIMARY KEY (`id_feature`);

--
-- Chỉ mục cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD PRIMARY KEY (`id_review`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  ADD PRIMARY KEY (`id_type_product`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_feature`
--
ALTER TABLE `tbl_feature`
  MODIFY `id_feature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  MODIFY `id_type_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
