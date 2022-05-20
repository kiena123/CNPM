-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2022 lúc 07:03 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `ca_id` int(5) NOT NULL,
  `ca_idUs` int(5) NOT NULL,
  `ca_idPd` int(5) NOT NULL,
  `ca_quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`ca_id`, `ca_idUs`, `ca_idPd`, `ca_quantity`) VALUES
(1, 3, 1, 3),
(2, 3, 2, 5),
(8, 3, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `pd_id` int(5) NOT NULL,
  `pd_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pd_ages` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Độ tuổi',
  `pd_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Link ảnh',
  `pd_prices` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`pd_id`, `pd_name`, `pd_ages`, `pd_image`, `pd_prices`) VALUES
(1, 'Mô hình Florentino cực chất', '0-1', 'assets/image/anhsanpham/Mo-hinh-florentino-ultraman.jpg', '100.000'),
(2, 'Rồng thần huyền thoại', '12+', 'assets/image/anhsanpham/rong-than-huyen-thoai.jpg', '200.000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `us_id` int(5) NOT NULL,
  `us_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_pass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `us_level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`us_id`, `us_name`, `us_email`, `us_pass`, `us_level`) VALUES
(1, 'Nguyễn Hải Đình', 'nguyenhaidinh@gmail.com', '$2y$10$MmBKbYTU4a0r3AZsLmMM2.uy1BJqr7zgV8scv/ZTzAG9ATLIrSVku', 'admin'),
(3, 'Trần Đức Anh', 'tranducanh@gmail.com', '$2y$10$7WNLzf2/4eFiTN0yat.mTuKi2J4p8nBzIX7brf7DyYoh0OCNB5Qny', 'client');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`ca_id`),
  ADD KEY `fk_ca_idUs_us_id` (`ca_idUs`),
  ADD KEY `fk_ca_idUs_pd_id` (`ca_idPd`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pd_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`us_id`),
  ADD UNIQUE KEY `UserUniqueEmail` (`us_email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `ca_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `pd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `us_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk_ca_idUs_pd_id` FOREIGN KEY (`ca_idPd`) REFERENCES `products` (`pd_id`),
  ADD CONSTRAINT `fk_ca_idUs_us_id` FOREIGN KEY (`ca_idUs`) REFERENCES `users` (`us_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
