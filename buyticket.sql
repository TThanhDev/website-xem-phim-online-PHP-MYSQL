-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 07, 2024 lúc 04:31 AM
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
-- Cơ sở dữ liệu: `buyticket`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', 192023, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bophim`
--

CREATE TABLE `tbl_bophim` (
  `id_bophim` int(11) NOT NULL,
  `mabophim` varchar(100) NOT NULL,
  `tenbophim` varchar(250) NOT NULL,
  `giatien` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `id_theloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_bophim`
--

INSERT INTO `tbl_bophim` (`id_bophim`, `mabophim`, `tenbophim`, `giatien`, `mota`, `hinhanh`, `id_theloai`) VALUES
(1, 'gg001', 'Hai Phượng', '70000', 'Hai Phượng ', '1700390025_1.jpg', 1),
(17, 'lm001', 'Mắt biếc', '65000', 'Mắt biếc', '1700390047_2.jpg', 2),
(18, 'khvt001', 'Moon Fall', '70000', 'Moon Fall', '1700390060_3.jpg', 3),
(19, 'hh001', 'Your Name', '70000', 'Your Name', '1700390076_4.jpg', 4),
(20, 'kd001', 'Mười', '75000', 'Mười', '1700390102_5.jpg', 5),
(21, 'khvt002', 'Inception', '75000', 'Inception', '1700390130_6.jpg', 3),
(22, 'lm002', 'Năm Bước Để Yêu', '65000', 'Năm Bước Để Yêu', '1700390145_7.jpg', 2),
(23, 'gg002', 'Lật Mặt:48h', '60000', 'Lật Mặt:48h', '1700390163_8.jpg', 1),
(24, 'kd002', 'Us', '70000', 'Us', '1700390190_9.jpg', 5),
(25, 'gg003', 'Batman', '65000', 'Batman', '1700390203_10.jpg', 1),
(26, 'hh002', 'Minion', '70000', 'Minion', '1700390216_11.jpg', 4),
(29, 'kd003', 'The Nun', '75000', 'The Nun', '1700918354_12.jpg', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_datve`
--

CREATE TABLE `tbl_datve` (
  `id_datve` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_bophim` int(11) NOT NULL,
  `ngaychieu` date NOT NULL,
  `suatchieu` time NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_datve`
--

INSERT INTO `tbl_datve` (`id_datve`, `id_khachhang`, `id_bophim`, `ngaychieu`, `suatchieu`, `soluong`) VALUES
(37, 4, 29, '2023-12-17', '19:00:00', 1),
(38, 5, 29, '2023-12-17', '19:00:00', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ngaychieu`
--

CREATE TABLE `tbl_ngaychieu` (
  `id_ngaychieu` int(11) NOT NULL,
  `id_bophim` int(11) NOT NULL,
  `ngaychieu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ngaychieu`
--

INSERT INTO `tbl_ngaychieu` (`id_ngaychieu`, `id_bophim`, `ngaychieu`) VALUES
(1, 1, '2023-12-13'),
(2, 29, '2023-12-14'),
(3, 29, '2023-12-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slideshow`
--

CREATE TABLE `tbl_slideshow` (
  `id_slideshow` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_slideshow`
--

INSERT INTO `tbl_slideshow` (`id_slideshow`, `hinhanh`) VALUES
(1, '1700921989_poster1.jpg'),
(2, '1700922865_poster2.jpg'),
(3, '1700924190_poster3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_suatchieu`
--

CREATE TABLE `tbl_suatchieu` (
  `id_suatchieu` int(11) NOT NULL,
  `id_ngaychieu` int(11) NOT NULL,
  `suatchieu` time NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_suatchieu`
--

INSERT INTO `tbl_suatchieu` (`id_suatchieu`, `id_ngaychieu`, `suatchieu`, `soluong`) VALUES
(1, 1, '10:00:00', 12),
(4, 2, '19:00:00', 17),
(6, 0, '00:00:00', 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `id_dangki` int(11) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `diachi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`id_dangki`, `ten`, `email`, `matkhau`, `dienthoai`, `diachi`) VALUES
(1, 'nguyên', 'nguyen@email.com', '827ccb0eea8a706c4c34a16891f84e7b', '123456789', '12 abc'),
(2, 'nguyên', 'nguyen@email.com', '827ccb0eea8a706c4c34a16891f84e7b', '123456789', '12 abc'),
(3, 'nguyên', 'nguyen@email.com', '202cb962ac59075b964b07152d234b70', '123456', '12 abc'),
(4, 'nguyên', 'nguyen@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '123456', '12 abc'),
(5, 'nguyên', 'nguyenkh@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '123456', '12 abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_theloai`
--

CREATE TABLE `tbl_theloai` (
  `id_theloai` int(11) NOT NULL,
  `theloaiphim` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_theloai`
--

INSERT INTO `tbl_theloai` (`id_theloai`, `theloaiphim`, `thutu`) VALUES
(1, 'Giật gân', 1),
(2, 'Lãng mạng', 2),
(3, 'Khoa học-viễn tưởng', 3),
(4, 'Hoạt hình', 4),
(5, 'Kinh dị', 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_bophim`
--
ALTER TABLE `tbl_bophim`
  ADD PRIMARY KEY (`id_bophim`);

--
-- Chỉ mục cho bảng `tbl_datve`
--
ALTER TABLE `tbl_datve`
  ADD PRIMARY KEY (`id_datve`);

--
-- Chỉ mục cho bảng `tbl_ngaychieu`
--
ALTER TABLE `tbl_ngaychieu`
  ADD PRIMARY KEY (`id_ngaychieu`);

--
-- Chỉ mục cho bảng `tbl_slideshow`
--
ALTER TABLE `tbl_slideshow`
  ADD PRIMARY KEY (`id_slideshow`);

--
-- Chỉ mục cho bảng `tbl_suatchieu`
--
ALTER TABLE `tbl_suatchieu`
  ADD PRIMARY KEY (`id_suatchieu`);

--
-- Chỉ mục cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`id_dangki`);

--
-- Chỉ mục cho bảng `tbl_theloai`
--
ALTER TABLE `tbl_theloai`
  ADD PRIMARY KEY (`id_theloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_bophim`
--
ALTER TABLE `tbl_bophim`
  MODIFY `id_bophim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_datve`
--
ALTER TABLE `tbl_datve`
  MODIFY `id_datve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_ngaychieu`
--
ALTER TABLE `tbl_ngaychieu`
  MODIFY `id_ngaychieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_slideshow`
--
ALTER TABLE `tbl_slideshow`
  MODIFY `id_slideshow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_suatchieu`
--
ALTER TABLE `tbl_suatchieu`
  MODIFY `id_suatchieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  MODIFY `id_dangki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_theloai`
--
ALTER TABLE `tbl_theloai`
  MODIFY `id_theloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
