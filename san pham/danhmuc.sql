-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2021 lúc 09:44 AM
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
-- Cơ sở dữ liệu: `danhmuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `tenhang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `iddanhmuc` int(11) NOT NULL,
  `link` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `link2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mieuta` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `daban` int(11) NOT NULL,
  `danhgia` float NOT NULL,
  `soluongdanhgia` int(11) NOT NULL,
  `hienthi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`idhanghoa`, `tenhang`, `soluong`, `dongia`, `iddanhmuc`, `link`, `link2`, `mieuta`, `daban`, `danhgia`, `soluongdanhgia`, `hienthi`) VALUES
(12, 'Album Biển Đà Nẵng', 10, 10000000, 0, 'biển đà nẵng.jpg', 'biển đà nẵng.jpg  biển đà nẵng1.jpg ', '<p>Biển Đ&agrave; Nẵng, c&aacute;c b&atilde;i đ&aacute;: Đ&acirc;y lu&ocirc;n l&agrave; lựa chọn h&agrave;ng đầu của c&aacute;c uy&ecirc;n ương khi đến với dải đất miền Trung. Biển Đ&agrave; Nẵng - nơi được đ&aacute;nh gi&aacute; l&agrave; đẹp nhất Đ&ocirc;ng Nam &Aacute; c&oacute; b&atilde;i c&aacute;t trắng mịn trải d&agrave;i, nước biển lu&ocirc;n xanh trong.</p>\r\n', 5, 3.17857, 42, ''),
(15, 'Album Hội An', 10, 10000000, 0, 'HOI-AN-1574064820.jpg', 'HOI-AN-1574064821.jpg   HOI-AN-1574064820.jpg', '<p>Phố cổ Hội An: So với Đ&agrave; Nẵng nhộn nhịp, năng động, phố cổ Hội An với những ng&ocirc;i nh&agrave; r&ecirc;u phong cũ sẽ l&agrave; một điểm nhấn cho album ảnh cưới của bạn. Ngo&agrave;i bộ lễ phục l&agrave; vest v&agrave; v&aacute;y cưới, c&ocirc; d&acirc;u ch&uacute; rể n&ecirc;n chuẩn bị th&ecirc;m trang phục mang phong c&aacute;ch vintage để hợp hơn với bối cảnh.</p>\r\n', 4, 5, 4, ''),
(23, 'Album Bà Nà Hill', 13, 15000000, 0, 'Bana-hill-1574064806.jpg', 'Bana-hill-1574064806.jpg   cầu vàng2.jpg   ', '<p>&nbsp;&#39;Ti&ecirc;n cảnh&#39; B&agrave; N&agrave; Hill: L&agrave; Đ&agrave; Lạt của miền Trung, khu du lịch B&agrave; N&agrave; Hill nằm ẩn m&igrave;nh tr&ecirc;n đỉnh ngọn n&uacute;i Ch&uacute;a. Đ&acirc;y l&agrave; địa điểm vui chơi, giải tr&iacute; v&agrave; nghỉ dưỡng nổi tiếng tại việt Nam. Kết hợp vừa đi du lịch v&agrave; chụp ảnh cưới tại B&agrave; N&agrave; chắc chắn l&agrave; một gợi &yacute; kh&ocirc;ng n&ecirc;n bỏ qua.</p>\r\n', 3, 5, 3, ''),
(24, 'Album View Cầu Đà Nẵng', 20, 9000000, 0, 'biển đà nẵng4.jpg', 'Cầu Tình Yêu.jpg   biển đà nẵng4.jpg', '<p>C&aacute;c c&acirc;y cầu thương hiệu: Cầu S&ocirc;ng H&agrave;n, cầu Trần Thị L&yacute;, cầu Rồng, cầu T&igrave;nh Y&ecirc;u hay cầu Thuận Phước đều l&agrave; những c&acirc;y cầu l&agrave;m n&ecirc;n thương hiệu ri&ecirc;ng của th&agrave;nh phố Đ&agrave; Nẵng - &quot;th&agrave;nh phố của những c&acirc;y cầu&quot;.&nbsp;</p>\r\n', 7, 4.9, 7, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`idhanghoa`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `idhanghoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
