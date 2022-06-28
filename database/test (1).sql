-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 28, 2022 lúc 12:10 PM
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
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `ca_idUs` int(5) NOT NULL,
  `ca_idPd` int(5) NOT NULL,
  `ca_quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `pd_id` int(5) NOT NULL,
  `pd_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pd_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pd_ages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pd_prices` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`pd_id`, `pd_name`, `pd_image`, `pd_ages`, `pd_prices`) VALUES
(1, 'Bộ đồ chơi nấu ăn Retro', 'assets/image/anhsanpham/Bộ đồ chơi nấu ăn Retro.jpg', '4-6', 399000),
(2, 'Máy bay thể thao OMEGA', 'assets/image/anhsanpham/Máy bay thể thao OMEGA.jpg', '2-3', 299000),
(3, 'Xe tải Hali', 'assets/image/anhsanpham/Xe tải Hali.jpg', '0-1', 59000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `receipts`
--

CREATE TABLE `receipts` (
  `re_id` int(5) NOT NULL,
  `re_idUs` int(5) NOT NULL,
  `re_dateBill` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `receipt_products`
--

CREATE TABLE `receipt_products` (
  `repd_idPr` int(5) NOT NULL,
  `repd_idPd` int(5) NOT NULL,
  `repd_quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `us_id` int(5) NOT NULL,
  `us_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`us_id`, `us_name`, `us_address`, `us_email`, `us_pass`, `us_level`) VALUES
(3, 'Trần Đức Anh', 'Nam Định', 'tranducanh@gmail.com', '$2y$10$CAeiCL/hRy3Qu22ZI4T8vebvqrMyBnV1un7sEIYIJjG8jLOYjDN92', 'client'),
(4, 'Nguyễn Hải Đình', 'Nam Định', 'nguyenhaidinh@gmail.com', '$2y$10$e8jGRppcm5i4.D0L4X0cDOVFqJaqqNSAAfxyRRECV.V/A0Y0i8dnu', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`ca_idUs`,`ca_idPd`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pd_id`);

--
-- Chỉ mục cho bảng `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`re_id`),
  ADD KEY `FK_re_idUs_us_id` (`re_idUs`);

--
-- Chỉ mục cho bảng `receipt_products`
--
ALTER TABLE `receipt_products`
  ADD PRIMARY KEY (`repd_idPr`,`repd_idPd`),
  ADD KEY `FK_repd_idPd_pd_id` (`repd_idPd`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`us_id`),
  ADD UNIQUE KEY `us_email` (`us_email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `pd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `receipts`
--
ALTER TABLE `receipts`
  MODIFY `re_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `us_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`ca_idUs`) REFERENCES `users` (`us_id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`ca_idPd`) REFERENCES `products` (`pd_id`);

--
-- Các ràng buộc cho bảng `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `FK_re_idUs_us_id` FOREIGN KEY (`re_idUs`) REFERENCES `users` (`us_id`);

--
-- Các ràng buộc cho bảng `receipt_products`
--
ALTER TABLE `receipt_products`
  ADD CONSTRAINT `FK_repd_idPd_pd_id` FOREIGN KEY (`repd_idPd`) REFERENCES `products` (`pd_id`),
  ADD CONSTRAINT `FK_repd_idPr_re_id` FOREIGN KEY (`repd_idPr`) REFERENCES `receipts` (`re_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
