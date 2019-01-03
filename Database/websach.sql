-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2019 lúc 10:29 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idComment` int(11) NOT NULL,
  `idSach` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idComment`, `idSach`, `username`, `noidung`) VALUES
(6, 9, 'tieungaogiangho', 'hay v?'),
(7, 10, 'tieungaogiangho', 'hay v?'),
(8, 11, 'tieungaogiangho', 'haha'),
(11, 9, 'tieungaogiangho', 'haha'),
(12, 9, 'tieungaogiangho', 'hay ghe'),
(13, 14, 'tieungaogiangho', 'ffdsfd'),
(14, 9, 'tieungaogiangho', 'hay cuc'),
(15, 17, 'tieungaogiangho', 'qua tuyet');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noidungsach`
--

CREATE TABLE `noidungsach` (
  `tenchuong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idSach` int(11) NOT NULL,
  `noidung` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `noidungsach`
--

INSERT INTO `noidungsach` (`tenchuong`, `idSach`, `noidung`) VALUES
('Chương 1: Vùng đất khủng long', 17, 'book/4-PTTKHTTT-Analysis - 1.pdf'),
('Chương 2: Vùng đất người tối cổ', 17, 'book/6-PTTKHTTT-Analysis - 3.pdf'),
('haha', 9, 'book/4-PTTKHTTT-Analysis - 1.pdf'),
('hoho', 9, 'book/5-PTTKHTTT-Analysis - 2.pdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `idSach` int(11) NOT NULL,
  `tenSach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idTheLoai` int(11) NOT NULL,
  `dangsach` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `anhbia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `luotxem` int(11) DEFAULT '0',
  `mota` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`idSach`, `tenSach`, `tacgia`, `idTheLoai`, `dangsach`, `anhbia`, `luotxem`, `mota`) VALUES
(9, 'Mùa Xuân', 'Xuân Mùa', 1, 'Sách điện tử', 'img/test.jpg', 9, ''),
(10, 'b', 'b', 1, 'Truyện tranh', 'img/5769.jpg', 1, ''),
(11, 'c', 'c', 1, 'Sách điện tử', 'img/5858.jpg', 1, ''),
(12, 'd', 'd', 1, 'Sách điện tử', 'img/5928.jpg', 0, ''),
(13, 'haha', 'd', 2, 'Sách điện tử', 'img/13376.jpg', 0, ''),
(14, 'Mua ha', 'ha mua', 2, 'Sách điện tử', 'img/790001.jpg', 0, ''),
(15, 'q', 'q', 4, 'Sách điện tử', 'img/11596.jpg', 0, ''),
(16, 'w', 'w', 3, 'Sách điện tử', 'img/718.jpg', 0, ''),
(17, 'Doremon', 'Fujiko Fujio', 4, 'Truyện tranh', 'img/539.jpg', 2, ''),
(19, 'Gấu con của cha', 'Phạm Ngọc', 4, 'Truyện tranh', 'img/671.jpg', 1, ''),
(20, 'The Prim', 'Young', 1, 'Sách điện tử', 'img/14642.jpg', 1, 'McKinsey - tập đoàn hàng đầu thế giới về lĩnh vực tư vấn chiến lược kinh doanh. Đó là tập đoàn đầu tiên đánh một canh bạc vào tuổi trẻ qua trải nghiệm, và là tập đoàn đầu tiên chống chọi với thách thức để trở nên thực sự toàn cầu. Sức ảnh hưởng của tập đoàn này ở hiện tại lan tỏa mọi nơi đến nỗi thật khó để tưởng tượng có địa điểm kinh doanh nào trên thế giới mà không có McKinsey. Dù tốt hơn hay xấu hơn, McKinsey có thể vẫn là tuyển tập tài năng có ảnh hưởng nhất trên thế giới.  Làm thế nào tập đoàn này thành công trong việc đạt được và nắm giữ sức ảnh hưởng đối với nước Mỹ và những gì nó đã làm với sức ảnh hưởng đó từ khi thành lập vào những năm 1920 là điều mà cuốn sách này nói về.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idTheLoai` int(11) NOT NULL,
  `tenTheLoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`idTheLoai`, `tenTheLoai`) VALUES
(1, 'Truyện ngắn'),
(2, 'Kiếm hiệp'),
(3, 'Khoa học'),
(4, 'Thiếu nhi'),
(5, 'Vũ trụ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('a', '0cc175b9c0f1b6a831c399e269772661', 'a@gmail.com'),
('b', '92eb5ffee6ae2fec3ad71c777531578f', 'b@gmail.com'),
('c', '4a8a08f09d37b73795649038408b5f33', 'c'),
('d', '8277e0910d750195b448797616e091ad', 'd'),
('e', 'e1671797c52e15f763380b45e841ec32', 'e'),
('f', '8fa14cdd754f91cc6554c9e71929cce7', 'f'),
('fddfdf', '8fa14cdd754f91cc6554c9e71929cce7', 'sdffdsf'),
('fgfsd', 'f970e2767d0cfe75876ea857f92e319b', 'gfgfg'),
('fsfd', '0cc175b9c0f1b6a831c399e269772661', 'wfsf'),
('g', 'b2f5ff47436671b6e533d8dc3614845d', 'g'),
('h', '2510c39011c5be704182423e3a695e91', 'h'),
('i', '865c0c0b4ab0e063e5caa3387c1a8741', 'i'),
('k', '8ce4b16b22b58894aa86c421e8759df3', 'k'),
('khanhle', 'e10adc3949ba59abbe56e057f20f883e', 'levankhanh0398@gmail.com'),
('kj', '03c7c0ace395d80182db07ae2c30f034', 'gfgfgkjhkgs'),
('l', '2db95e8e1a9267b7a1188556b2013b33', 'l'),
('le van khanh', 'c20ad4d76fe97759aa27a0c99bff67', 'khanh1tb98@gmail.com'),
('m', '6f8f57715090da2632453988d9a1501b', 'm'),
('n', '7b8b965ad4bca0e41ab51de7b31363a1', 'n'),
('o', 'd95679752134a2d9eb61dbd7b91c4bcc', 'o'),
('q', '7694f4a66316e53c8cdd9d9954bd611d', 'q'),
('tieungaogiangho', 'e10adc3949ba59abbe56e057f20f883e', 'tieungaogiangho@gmail.com'),
('ư', '7be523c7cab2d16d0d710e2216cea4e9', 'ư'),
('ukuy', '8fa14cdd754f91cc6554c9e71929cce7', 'gfgfgkjhk'),
('ukuyg', 'b2f5ff47436671b6e533d8dc3614845d', 'gfgfgkjhkg'),
('w', 'f1290186a5d0b1ceab27f4e77c0c5d68', 'w');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `idSach` (`idSach`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `noidungsach`
--
ALTER TABLE `noidungsach`
  ADD PRIMARY KEY (`tenchuong`,`idSach`),
  ADD KEY `idSach` (`idSach`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`idSach`),
  ADD KEY `idTheLoai` (`idTheLoai`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idTheLoai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `idSach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idTheLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idSach`) REFERENCES `sach` (`idSach`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Các ràng buộc cho bảng `noidungsach`
--
ALTER TABLE `noidungsach`
  ADD CONSTRAINT `noidungsach_ibfk_1` FOREIGN KEY (`idSach`) REFERENCES `sach` (`idSach`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`idTheLoai`) REFERENCES `theloai` (`idTheLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
