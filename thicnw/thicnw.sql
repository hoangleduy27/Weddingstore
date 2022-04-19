-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2021 lúc 09:43 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thicnw`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chart`
--

CREATE TABLE `chart` (
  `id` int(11) NOT NULL,
  `Userid` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Message` text NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Time` time DEFAULT NULL,
  `Group_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chart`
--

INSERT INTO `chart` (`id`, `Userid`, `Name`, `Message`, `Date`, `Time`, `Group_Name`) VALUES
(98, '123456', '', 'hello', '10/01/21', '07:35:00', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `Userid` varchar(30) NOT NULL,
  `GName` varchar(30) NOT NULL,
  `Members` text NOT NULL,
  `Date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `Userid`, `GName`, `Members`, `Date`) VALUES
(1, '111111', 'Nhóm nhiếp ảnh', '1', '12/12/32'),
(2, '111111', 'Hội nhiếp ảnh', '1', '12/12/32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profilepictures`
--

CREATE TABLE `profilepictures` (
  `id` int(11) NOT NULL,
  `ids` int(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `Size` decimal(10,0) NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `profilepictures`
--

INSERT INTO `profilepictures` (`id`, `ids`, `Category`, `name`, `type`, `Size`, `content`) VALUES
(24, 2, 'Group', 'login_bg1.jpg', 'image/jpeg', '604912', 0x6c6f67696e5f6267312e6a7067),
(25, 1, 'Group', 'login_bg.jpg', ' image/jpeg', '641729', 0x6c6f67696e5f62672e6a7067);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password1` varchar(111) NOT NULL,
  `Userid` varchar(111) NOT NULL,
  `Online` varchar(111) NOT NULL,
  `Time` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password1`, `Userid`, `Online`, `Time`) VALUES
(1, 'huong', 'huong@gmail.com', '123456', '111111', 'Online', 3214124),
(2, 'duy', 'duy@gmail.com', '123123', '222222', 'Online', 3214124),
(3, 'quang', 'quang@gmail.com', '121212', '333333', 'Offline', 3214124),
(4, 'phong', 'phong@gmail.com', '123412', '444444', 'Online', 3214124),
(5, 'hieu', 'hieu@gmail.com', '123451', '555555', 'Offline', 3214124),
(6, 'vuong', 'vuong@gmail.com', '1212345', '666666', 'Offline', 3214124);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `profilepictures`
--
ALTER TABLE `profilepictures`
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
-- AUTO_INCREMENT cho bảng `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `profilepictures`
--
ALTER TABLE `profilepictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
