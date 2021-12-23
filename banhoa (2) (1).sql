-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2021 lúc 02:26 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(11, 'sản phẩm bán chạy ', '2021-09-20 16:07:43', '2021-10-19 11:48:59'),
(12, 'Bó hoa', '2021-09-29 08:15:22', '2021-09-29 08:15:22'),
(14, 'Hoa chia buồn', '2021-09-29 08:43:22', '2021-09-29 08:43:22'),
(15, 'Lan hồ điệp', '2021-09-29 08:55:22', '2021-10-19 12:40:00'),
(51, 'Hoa chúc mừng', '2021-10-19 12:52:00', '2021-10-19 12:52:00'),
(54, 'Bó hoa hồng', '2021-10-19 12:57:01', '2021-10-20 12:42:02'),
(55, 'Bó hoa cúc', '2021-10-19 12:03:02', '2021-10-20 12:08:03'),
(56, 'Hoa giả', '2021-10-19 12:09:02', '2021-10-19 12:09:02'),
(57, 'Giỏ hoa', '2021-10-20 10:14:01', '2021-10-20 10:14:01'),
(58, 'Hộp hoa', '2021-10-20 10:26:01', '2021-10-20 10:26:01'),
(59, 'Hoa cầm tay', '2021-10-20 11:25:53', '2021-10-20 11:25:53'),
(60, 'Trang trí xe hơi', '2021-10-20 11:42:53', '2021-10-20 11:42:53'),
(61, 'Sinh nhật ba mẹ', '2021-10-20 11:16:54', '2021-10-20 11:16:54'),
(62, 'Sinh nhật người yêu', '2021-10-20 11:26:54', '2021-10-20 11:26:54'),
(63, 'Sinh nhật đồng nghiệp', '2021-10-20 11:43:54', '2021-10-20 11:43:54'),
(64, 'Sinh nhật vợ chồng', '2021-10-20 11:23:55', '2021-10-20 11:23:55'),
(65, 'Bó hoa ly', '2021-10-20 12:28:03', '2021-10-20 12:28:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` float NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `user_id`, `product_id`, `qty`, `total`, `status`, `created`) VALUES
(29, 4, 24, 1, 150000, 2, '2021-11-25 17:51:25'),
(30, 4, 26, 1, 150000, 1, '2021-11-25 17:51:25'),
(31, 4, 28, 1, 150000, 2, '2021-11-25 17:51:25'),
(32, 4, 29, 1, 150000, 2, '2021-11-25 17:51:25'),
(33, 4, 34, 1, 150000, 2, '2021-11-25 17:51:25'),
(34, 4, 39, 1, 150000, 1, '2021-11-25 17:51:25'),
(36, 4, 25, 1, 150000, 0, '2021-11-25 17:33:44'),
(37, 4, 26, 1, 150000, 0, '2021-11-25 17:33:44'),
(38, 4, 25, 1, 150000, 0, '2021-11-25 18:51:46'),
(39, 4, 25, 1, 150000, 0, '2021-11-25 18:10:47'),
(40, 4, 25, 1, 150000, 0, '2021-11-25 18:03:54'),
(41, 4, 25, 1, 150000, 0, '2021-11-25 18:15:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conten` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `all_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `conten`, `id_category`, `created_at`, `updated_at`, `all_quantity`) VALUES
(20, 'hoa', 150000, 'https://wall.vn/wp-content/uploads/2019/11/hinh-nen-hoa-hong-dep-1.png', '', 11, '2021-10-18 10:46:56', '2021-10-20 12:53:03', 100),
(24, 'Hoa 1', 150000, 'https://cdn.shopeesales.com/2020/01/ket-hop-giua-cac-loai-hoa-hong-min.jpeg', '123', 11, '2021-10-19 12:15:06', '2021-10-20 12:45:20', 100),
(25, 'hoa 2', 150000, 'https://elead.com.vn/wp-content/uploads/2020/04/bo-hoa-hong-do-75b7e6253aa816_07da601775e64b7cd731823aeb63dc04-599x800-2.jpg', '', 11, '2021-10-19 12:46:06', '2021-10-20 12:42:20', 100),
(26, 'hoa 3', 150000, 'https://lh4.googleusercontent.com/-J_I9FvTR-p4/XnRk_ezDDVI/AAAAAAAACfY/fKY3GNrkvi4J4znsJwZwwPWnPqmIIC3QwCLcBGAsYHQ/s640/hoa-hong-trai-tim-dep-2.jpg', '', 12, '2021-10-19 12:13:07', '2021-10-20 12:46:13', 100),
(27, 'hoa 4', 150000, 'https://1.bp.blogspot.com/-CHCat__pRqQ/W1WYFz9dG2I/AAAAAAAAARw/bbML1vGdJbc-uOegtTE93-5lCdbdAXBzgCLcBGAs/s640/hinh-anh-hoa-sinh-nhat-dep-4.jpg', '', 12, '2021-10-19 12:52:07', '2021-10-19 15:28:04', 100),
(28, 'hoa 10', 150000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTigTZOV0sHCJP5Sf_d5KyUwZsCjVyx4-u67w&usqp=CAU', '', 12, '2021-10-19 15:37:03', '2021-10-19 15:08:04', 100),
(29, 'hoa ', 150000, 'https://hoalanphuong.com/bo-hoa-tang-chuc-mung-26.jpg', '1', 51, '2021-10-19 16:31:27', '2021-10-19 16:31:27', 100),
(30, 'hoa tiếp', 150000, 'https://wall.vn/wp-content/uploads/2019/11/hinh-nen-hoa-hong-dep-1.png', '', 11, '2021-10-20 10:58:17', '2021-10-20 12:06:04', 100),
(31, 'hoa ', 150000, 'https://wall.vn/wp-content/uploads/2019/11/hinh-nen-hoa-hong-dep-1.png', '', 11, '2021-10-20 10:40:24', '2021-10-20 12:15:04', 100),
(34, 'Giỏ hoa đẹp', 150000, 'https://taimienphi.vn/tmp/cf/aut/mau-lang-hoa-dep-1.jpg', 'Giỏ hoa đẹp tuyệt voeif', 57, '2021-10-20 12:25:09', '2021-10-20 12:25:09', 100),
(35, 'Hộp hoa đẹp', 150000, 'https://lh3.googleusercontent.com/proxy/noe-H0KxgInJlOSOdADbMnoVKP7exijCgvgWi45lvjy45xEnueRG0_owl2wOt1gKVFwsKZsuU-pJtQpLC7UpQDYDppmFIFpdUVeETRc978EjzJ9RSlPPDWqCfwNnrhQnbj1j8ht2RwQoHRHyYuPWiNd7CQ', 'Hộp hoa đẹp  ', 58, '2021-10-20 12:19:10', '2021-10-20 12:23:20', 100),
(36, 'Hoa cầm tay', 150000, 'https://hoavily.com/uploads/file/hoa-cam-tay-co-dau-mau-do.jpg', 'ok', 59, '2021-10-20 12:42:21', '2021-10-20 12:42:21', 100),
(37, '', 150000, 'https://dienhoahaiha.com/wp-content/uploads/2017/03/mau-trang-tri-hoa-xe-cuoi-dep-hoa-baby-trang.jpg', 'ok', 60, '2021-10-20 12:54:22', '2021-10-20 12:54:22', 100),
(38, 'Hoa sinh nhật ba mẹ', 150000, 'https://dienhoa24gio.net/assets/upload/product/18-03-2021/gui-tinh-yeu-cua-toi-1616039398/274_default.jpg', 'Hoa sinh nhật ba mẹ', 61, '2021-10-20 12:13:24', '2021-10-20 12:13:24', 100),
(39, 'Hoa sinh nhật người yêu', 150000, 'https://img.lovepik.com/photo/50059/3229.jpg_wh860.jpg', 'Hoa sinh nhật người yêu', 0, '2021-10-20 12:59:24', '2021-10-20 12:59:24', 100),
(40, 'Hoa sinh nhật vợ chồng', 150000, 'https://chiase24.com/wp-content/uploads/2019/05/B%C3%B3-hoa-sinh-nh%E1%BA%ADt-m%C3%A0u-tr%E1%BA%AFng-%C4%91%E1%BA%B9p-1.jpg', 'Hoa sinh nhật vợ chồng', 64, '2021-10-20 12:49:25', '2021-10-20 12:49:25', 100),
(41, 'Hoa sinh nhật đồng nghiệp', 150000, 'https://giupban.com.vn/wp-content/uploads/hoa-20-11-1.png', 'Hoa sinh nhật đồng nghiệp', 63, '2021-10-20 12:35:27', '2021-10-20 12:35:27', 100),
(42, 'Hoa chúc mừng', 150000, 'https://dienhoa24gio.net/assets/upload/product/05-02-2015/happy-1423150937/274_default.jpg', 'ok', 51, '2021-10-20 12:38:28', '2021-10-20 12:38:28', 100),
(43, 'Hoa chia buồn', 150000, 'https://hoatuoi360.vn/uploads/file/san%20pham%20hoa/hoa-chia-buon-1200.jpg', 'Hoa chia buồn', 14, '2021-10-20 12:47:29', '2021-10-20 12:15:30', 100),
(44, 'Lan hồ điệp', 150000, 'https://hoalan360.com/upload/UploadFiles/images/hinh-anh-hoa-lan-ho-diep-sang-trong.jpg', 'Lan hồ điệp', 15, '2021-10-20 12:02:31', '2021-10-20 12:02:31', 100),
(45, 'Hoa cúc', 150000, 'https://dienhoa24gio.net/assets/upload/2(2).jpg', 'Hoa cúc', 55, '2021-10-20 12:22:32', '2021-10-20 12:22:32', 100),
(46, 'Hoa hồng', 150000, 'https://www.mrhoa.com/wp-content/uploads/2017/07/bo-hoa-hong-mau-do-dep-nhat.jpg', 'Hoa hồng', 54, '2021-10-20 12:02:33', '2021-10-20 12:02:33', 100),
(47, 'Hoa ly', 150000, 'https://topanhdep.net/wp-content/uploads/2016/05/hoa-ly-dep-8.jpg', 'Hoa ly', 65, '2021-10-20 12:54:33', '2021-10-20 12:54:33', 100),
(48, 'Độc cô cầu bại', 150000, 'https://upanh123.com/wp-content/uploads/2020/12/anh-hoa-tien-chuc-mung-sinh-nhat.jpg', 'Fuck and go', 56, '2021-10-20 12:10:35', '2021-10-20 12:10:35', 100),
(49, 'Độc cô cầu bại', 150000, 'https://upanh123.com/wp-content/uploads/2020/12/anh-hoa-tien-chuc-mung-sinh-nhat.jpg', 'Fuck and go', 56, '2021-10-20 12:10:35', '2021-10-20 12:10:35', 100),
(50, 'Độc cô cầu bại', 150000, 'https://upanh123.com/wp-content/uploads/2020/12/anh-hoa-tien-chuc-mung-sinh-nhat.jpg', 'Fuck and go', 56, '2021-10-20 12:10:35', '2021-10-20 12:10:35', 100),
(51, 'Độc cô cầu bại', 150000, 'https://upanh123.com/wp-content/uploads/2020/12/anh-hoa-tien-chuc-mung-sinh-nhat.jpg', 'Fuck and go', 56, '2021-10-20 12:10:35', '2021-10-20 12:10:35', 100),
(52, 'Hoa ly', 150000, 'https://topanhdep.net/wp-content/uploads/2016/05/hoa-ly-dep-8.jpg', 'Hoa ly', 65, '2021-10-20 12:54:33', '2021-10-20 12:54:33', 100),
(53, 'Hoa ly', 150000, 'https://topanhdep.net/wp-content/uploads/2016/05/hoa-ly-dep-8.jpg', 'Hoa ly', 65, '2021-10-20 12:54:33', '2021-10-20 12:54:33', 100),
(54, 'Hoa ly', 150000, 'https://topanhdep.net/wp-content/uploads/2016/05/hoa-ly-dep-8.jpg', 'Hoa ly', 65, '2021-10-20 12:54:33', '2021-10-20 12:54:33', 100),
(55, 'Hoa sinh nhật ba mẹ', 150000, 'https://dienhoa24gio.net/assets/upload/product/18-03-2021/gui-tinh-yeu-cua-toi-1616039398/274_default.jpg', 'Hoa sinh nhật ba mẹ', 61, '2021-10-20 12:13:24', '2021-10-20 12:13:24', 100),
(56, 'Hoa sinh nhật người yêu', 150000, 'https://img.lovepik.com/photo/50059/3229.jpg_wh860.jpg', 'Hoa sinh nhật người yêu', 62, '2021-10-20 12:59:24', '2021-10-20 15:22:56', 100),
(57, 'Hoa sinh nhật vợ chồng', 150000, 'https://chiase24.com/wp-content/uploads/2019/05/B%C3%B3-hoa-sinh-nh%E1%BA%ADt-m%C3%A0u-tr%E1%BA%AFng-%C4%91%E1%BA%B9p-1.jpg', 'Hoa sinh nhật vợ chồng', 64, '2021-10-20 12:49:25', '2021-10-20 12:49:25', 100),
(58, 'Hoa sinh nhật đồng nghiệp', 150000, 'https://giupban.com.vn/wp-content/uploads/hoa-20-11-1.png', 'Hoa sinh nhật đồng nghiệp', 63, '2021-10-20 12:35:27', '2021-10-20 12:35:27', 100),
(59, 'Hoa chúc mừng', 150000, 'https://dienhoa24gio.net/assets/upload/product/05-02-2015/happy-1423150937/274_default.jpg', 'ok', 51, '2021-10-20 12:38:28', '2021-10-20 12:38:28', 100),
(60, 'Hoa chia buồn', 150000, 'https://hoatuoi360.vn/uploads/file/san%20pham%20hoa/hoa-chia-buon-1200.jpg', 'Hoa chia buồn', 14, '2021-10-20 12:47:29', '2021-10-20 12:15:30', 100),
(61, 'Lan hồ điệp', 150000, 'https://hoalan360.com/upload/UploadFiles/images/hinh-anh-hoa-lan-ho-diep-sang-trong.jpg', 'Lan hồ điệp', 15, '2021-10-20 12:02:31', '2021-10-20 12:02:31', 100),
(62, 'Hoa cúc', 150000, 'https://dienhoa24gio.net/assets/upload/2(2).jpg', 'Hoa cúc', 55, '2021-10-20 12:22:32', '2021-10-20 12:22:32', 100),
(63, 'Hoa hồng', 150000, 'https://www.mrhoa.com/wp-content/uploads/2017/07/bo-hoa-hong-mau-do-dep-nhat.jpg', 'Hoa hồng', 54, '2021-10-20 12:02:33', '2021-10-20 12:02:33', 100),
(64, 'Sinh nhật người yêu', 150000, 'https://st.quantrimang.com/photos/image/2020/10/20/bo-hoa-bang-tien-6.jpg', 'ok', 62, '2021-10-20 15:32:55', '2021-10-20 15:32:55', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `permission` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `phone`, `email`, `adress`, `created`, `permission`) VALUES
(4, 'tuan anh', '12345', '098877871', 'tuananh@gmail.com', 'Tuyên Quang', '2021-10-28 06:39:09', 1),
(16, 'minh', '123', '123', 'anhdangtl112@gmail.com', '3edd', '2021-11-24 05:22:00', 0),
(17, 'tuananh1', '123', '09880', 'anhdangtl112@gmail.com', 'tuyên', '2021-11-24 05:12:01', 0),
(20, 'tuananh', '1234', '0988077871', '2k1anhdang19ta@gmail.com', 'Tuyên quang', '2021-11-25 20:12:17', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
