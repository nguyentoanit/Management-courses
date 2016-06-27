-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2016 at 07:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ttcn1`
--

-- --------------------------------------------------------

--
-- Table structure for table `canbo`
--

CREATE TABLE IF NOT EXISTS `canbo` (
  `cb_macanbo` int(11) NOT NULL AUTO_INCREMENT,
  `cb_hoten` text NOT NULL,
  `cb_gioitinh` tinyint(1) NOT NULL,
  `cb_ngaysinh` date NOT NULL,
  `cb_ngaylam` date NOT NULL,
  `cb_chucvu` text NOT NULL,
  `cb_bomon` text NOT NULL,
  `cb_diachi` text NOT NULL,
  `cb_sdt` text NOT NULL,
  `cb_email` text NOT NULL,
  `cb_tinhtrang` tinyint(1) NOT NULL,
  PRIMARY KEY (`cb_macanbo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `canbo`
--

INSERT INTO `canbo` (`cb_macanbo`, `cb_hoten`, `cb_gioitinh`, `cb_ngaysinh`, `cb_ngaylam`, `cb_chucvu`, `cb_bomon`, `cb_diachi`, `cb_sdt`, `cb_email`, `cb_tinhtrang`) VALUES
(1, 'Trần Minh Thái', 1, '1972-02-15', '0000-00-00', 'Hiệu Trưởng', 'Toán', 'Đặng xá - Gia Lâm - Hà nội', '0986142787', 'sdf', 1),
(2, 'Đỗ Thị kim Huệ', 0, '1976-08-09', '0000-00-00', 'Hiêu Phó', 'Lịch Sử', 'Số nhà 65-Ngô Xuân Quảng', '0983274869', 'dtkhue@hanoiedu.vn', 1),
(3, 'Cao Thị Liên', 0, '0000-00-00', '0000-00-00', 'Giáo viên', 'Văn', 'Đặng Xá Gia Lâm - Hà Nội', '01696664624', 'ctlien@hanoiedu.vn', 1),
(4, 'Nguyễn Cảnh Đông', 1, '1988-02-04', '0000-00-00', 'Giáo viên', 'Sinh', 'Sài Đồng - Long Biên - Hà nội', '01662172973', 'ncdong@hanoiedu.vn', 1),
(5, 'Phạm Thu Huyền', 0, '1991-06-12', '0000-00-00', 'Giáo viên', 'Hóa Học', 'Sài Đồng - Long Biên - Hà Nội', '0973637003', 'pthuyen@hanoiedu.vn', 1),
(6, 'Hà Việt Hồng', 0, '1991-03-02', '0000-00-00', 'Nhân Viên Y tế', '0', 'Trâu quỳ - Gia Lâm - Hà Nội', '0917979469', 'hvhong@hanoiedu.vn', 1),
(7, 'Phạm Xuân An', 1, '1990-06-09', '0000-00-00', 'Giáo viên', 'Thể Dục', 'Trâu Quỳ -Gia Lâm - Hà Nội', '0973046587', 'pxan@hanoiedu.vn', 1),
(8, 'Trịnh Văn Tài', 1, '1982-07-15', '0000-00-00', 'Giáo viên', 'Công Nghệ', 'Trâu Quỳ - Gia Lâm - Hà Nội', '0912558889', 'tvtai@hanoiedu.vn', 1),
(9, 'Lê Quang Hùng', 1, '1968-03-05', '0000-00-00', 'bảo vệ', '', 'Trâu Quỳ - Gia Lâm - Hà Nội', '01666355879', '', 1),
(10, 'Nguyễn Văn Trung', 1, '1987-05-11', '0000-00-00', 'Giáo viên', 'Địa lý', 'Sài Đồng - Long Biên  - Hà Nội', '0913555689', 'nvtrung@hanoiedu.vn', 1),
(11, 'Phùng Thị Phương', 0, '1965-06-04', '0000-00-00', 'Giáo viên', 'Anh Văn', 'Số 45- Ngô Xuân Quảng - Trâu Quỳ GIa Lâm - Hà Nội', '0913969878', 'ptphuong@hanoiedu.vn', 1),
(12, 'Nguyễn Cao Thùy Linh', 0, '1990-03-13', '0000-00-00', 'Giáo viên', 'Mỹ Thuật', '123 Cửu Việt 2- Trâu Quỳ - Gia Lâm - Hà Nội', '0986254664', 'nctlinh@hanoi.du.vn', 1),
(13, 'Lưu Hương Giang', 0, '1987-02-02', '0000-00-00', 'Giáo viên', 'Vật Lý', '69 An Đào B- Trâu Quỳ- Gia Lâm - Hà Nội', '0912665234', 'lhgiang@hanoiedu.vn', 1),
(14, 'Khúc Đình Đăng', 1, '1990-09-10', '0000-00-00', 'Giáo viên', 'Tin', 'Trâu Quỳ - Gia Lâm- Hà Nội', '0912789656', 'kddang@hanoiedu.vn', 1),
(15, 'Nguyễn Ngọc Anh', 0, '1990-03-09', '0000-00-00', 'Giáo viên', 'Giáo dục công dân', 'Trâu Quỳ - Gia Lâm- Hà Nội', '0984662724', 'nnanh2hanoiedu.vn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE IF NOT EXISTS `diem` (
  `d_madiem` int(11) NOT NULL AUTO_INCREMENT,
  `d_mahocsinh` int(11) NOT NULL,
  `d_mamonhoc` int(11) NOT NULL,
  `d_ki` int(2) NOT NULL,
  `d_namhoc` text NOT NULL,
  `d_heso1` float NOT NULL,
  `d_heso2` float NOT NULL,
  `d_heso3` float NOT NULL,
  `d_trungbinh` float NOT NULL,
  PRIMARY KEY (`d_madiem`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`d_madiem`, `d_mahocsinh`, `d_mamonhoc`, `d_ki`, `d_namhoc`, `d_heso1`, `d_heso2`, `d_heso3`, `d_trungbinh`) VALUES
(1, 2, 4, 1, '2015-2016', 8, 9, 6, 7.33),
(2, 1, 5, 1, '2015-2016', 8, 8, 8, 8),
(3, 1, 6, 1, '2015-2016', 8, 9, 7, 7.83),
(4, 1, 7, 1, '2015-2016', 8, 8, 8, 8),
(5, 1, 8, 1, '2015-2016', 8, 7, 9, 8.17),
(6, 1, 9, 1, '2015-2016', 8, 8, 6, 7),
(7, 1, 11, 1, '2015-2016', 8, 9, 7, 7.83),
(8, 1, 12, 1, '2015-2016', 8, 7, 6, 6.67),
(9, 1, 13, 1, '2015-2016', 8, 7, 8, 7.67),
(10, 1, 3, 2, '2015-2016', 8, 8, 5, 6.5),
(11, 1, 4, 2, '2015-2016', 8, 9, 7, 7.83),
(12, 1, 5, 2, '2015-2016', 9, 9, 9, 9),
(13, 1, 6, 2, '2015-2016', 9, 8, 8, 8.17),
(14, 3, 7, 2, '2015-2016', 9, 7, 6, 6.83),
(15, 4, 11, 2, '2015-2016', 8, 9, 8, 8.33),
(17, 1, 3, 2, '2014-2015', 6, 7, 8, 7.33);

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh`
--

CREATE TABLE IF NOT EXISTS `hocsinh` (
  `hs_mahs` int(11) NOT NULL AUTO_INCREMENT,
  `hs_malop` int(11) NOT NULL,
  `hs_hoten` text NOT NULL,
  `hs_ngaysinh` date NOT NULL,
  `hs_diachi` text NOT NULL,
  `hs_gioitinh` tinyint(1) NOT NULL,
  `hs_sdt` int(12) NOT NULL,
  PRIMARY KEY (`hs_mahs`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=204 ;

--
-- Dumping data for table `hocsinh`
--

INSERT INTO `hocsinh` (`hs_mahs`, `hs_malop`, `hs_hoten`, `hs_ngaysinh`, `hs_diachi`, `hs_gioitinh`, `hs_sdt`) VALUES
(22, 1, 'Vũ Quỳnh Nga', '2003-03-12', 'Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(21, 1, 'Nguyễn Huy Nam', '2003-03-12', 'Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(20, 1, 'Lê Thị Mơ', '2003-03-12', 'Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(19, 1, 'Nguyễn Thị Mai', '2003-03-12', 'Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(18, 1, 'Hoàng Văn Làm', '2003-03-12', 'Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(17, 1, 'Lê Thúy Kiều', '2003-03-12', 'Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(16, 1, 'Nguyễn văn Kiên', '2003-03-12', 'Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(15, 1, 'Mai Thị Hương', '2003-03-12', 'Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(14, 1, 'Trần Thanh Huyền', '2003-03-12', 'Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(13, 1, 'Lại Văn Hoàn', '2003-03-12', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(12, 1, 'Mai Thị Hòa', '2003-07-14', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(10, 1, 'Đoàn Trung Hiếu', '2003-10-01', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(9, 1, 'Nguyễn Thị Hiền', '2003-08-04', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(8, 1, 'Đoàn Thị Hà', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(7, 1, 'Nguyễn Trương Đức', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(6, 1, 'Phạm Quang Dự', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(5, 1, 'Trần Văn Duy', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(4, 1, 'Bùi Thị Dịu', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(3, 1, 'Nguyễn chí Công', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(2, 1, 'Vũ Lan Anh ', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(1, 1, 'Trần Quỳnh Anh', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(54, 2, 'Phạm văn Tuấn', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(53, 2, 'NGuyễn Sỹ Trung', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(52, 2, 'Phạm Huyền Trang', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(51, 2, 'Là Thị Trang', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(50, 2, 'Đinh Văn Tiến', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(49, 2, 'Hà Văn Sáng', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(48, 2, 'Bùi Ngọc Ninh', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(47, 2, 'Đỗ Mạnh ', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(46, 2, 'Vũ Lan Anh', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(45, 2, 'Lê Thị Hương', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(44, 2, 'Triệu Duy Hưng', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(43, 2, 'Nguyễn Đức Hùng', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(42, 2, 'Phạm Thị Huệ', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(41, 2, 'Đào Văn Huân', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(40, 2, 'Đặng Minh Hiệp', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(39, 2, 'Nguyễn thị Thúy Hằng', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(38, 2, 'Tống Văn Hà', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(37, 2, 'Bùi Trọng Đức', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(36, 2, 'Nguyễn Văn Đông', '0000-00-00', 'Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(35, 2, 'Đỗ Tiến Đại', '0000-00-00', 'Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(34, 2, 'Đào Đức Duy', '0000-00-00', 'Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(33, 2, 'Đào Huy Cường', '0000-00-00', 'Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(32, 2, 'Nguyễn Văn Bình', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(31, 2, 'Trần Tuấn Anh', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(30, 1, 'Lê Văn Vũ', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(29, 1, 'Nông ngọc Tuấn', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(28, 1, 'Hoàng văn Tuấn', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(27, 1, 'Phạm văn Thiện', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(26, 1, 'Nguyễn Minh thắng', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(25, 1, 'Phạm minh Thái', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(24, 1, 'nguyễn Thị Nhung', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(23, 1, 'Định Xuân Nha', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(200, 9, 'Nguyễn Thị Yến', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(199, 9, 'Trình văn Vũ', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(198, 9, 'Nguyễn Thị Thảo', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(197, 9, 'Nông Thị Mai', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(196, 9, 'Hồ Thị Lý', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(195, 9, 'Nguyễn Thị Ly', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(194, 9, 'nguyễn thị Diệu Linh', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(193, 9, 'Nguyễn Thị Liên', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(192, 9, 'Trịnh Thị Lan', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(191, 9, 'Trần Thị Huệ', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(190, 9, 'Vũ Bích Hạnh', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(189, 9, 'Vũ Lan Anh', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(188, 8, 'Nguyễn Thị Vinh', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(187, 8, 'Phạm Văn Tú', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(186, 8, 'Hoàng Thị Tú', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(185, 8, 'Phạm Thành Trung', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(184, 8, 'Chu Quang Trông', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(183, 8, 'Trần Văn Tiến', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(182, 8, 'Lê Minh Tiến ', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(181, 8, 'Hoàng Thị Thảo', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(180, 8, 'Vũ Hồng Sơn', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(179, 8, 'Ngọc Phương ', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(178, 8, 'Phạm Thị Oanh', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(177, 8, 'Đỗ Thị Như', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(176, 8, 'Phạm Thu Huyền', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(175, 8, 'Hoàng Văn Hiêu', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(174, 8, 'Nguyễn Thị Hằng', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(173, 8, 'Trần Thị Giang', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(172, 8, 'Nguyễn Văn Đại', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(171, 8, 'Trần Thi Duyên', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(170, 8, 'Mai Thị Bích', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(169, 8, 'Nguyễn Lan Anh', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(168, 8, 'Nguyễn Đức Việt', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(167, 8, 'ĐInh Thị Uyên', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(166, 8, 'Phạm Minh Tuấn', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(165, 8, 'Nguyễn thị Trang', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(164, 8, 'Phạm Hữu Tân', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(163, 8, 'NGuyễn Xuân Sơn', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(162, 8, 'Lê Bá Quỳnh', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(161, 8, 'Mai Đình Phúc', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(160, 8, 'Phạm Thị Mai', '0000-00-00', 'Đào Nguyên A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(159, 8, 'Nguyễn mạnh Hùng', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(158, 8, 'Nguyễn Thị Hòa', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(157, 8, 'Lại Tuấn Hiệp', '0000-00-00', 'An Đào  B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(156, 8, 'Dương Văn Định', '0000-00-00', 'An Đào  B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(155, 8, 'Trần Văn Dũng', '0000-00-00', 'An Đào  B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(154, 8, 'Nguyễn Văn cường', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(153, 8, 'Nguyễn Đình Chung', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(152, 8, 'Nguyễn Thái Bảo', '0000-00-00', 'An Đào  B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(151, 8, 'Trần Kim Anh', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(150, 8, 'Trần Hải Anh', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(149, 8, 'Đinh Tuấn Anh', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(148, 7, 'Nguyễn Thị Yến', '0000-00-00', 'An Đào  B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(147, 7, 'Phạm Tố Uyên', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(146, 7, 'Lương Thị Trang', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(145, 7, 'Trần thị Thu', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(144, 7, 'Lã Ngọc Quỳnh', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(143, 7, 'Bùi Thu Phương', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(142, 7, 'Chu Đức Ninh', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(141, 7, 'Bùi Thị Như Yến', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(140, 7, 'Phạm Thị Nga', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(139, 7, 'Trần Đức Long ', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(138, 7, 'Nguyễn Khắc Kiên', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(137, 7, 'Lê Thị Hương', '0000-00-00', 'Đào Nguyên B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(136, 7, 'Vũ Minh Hoàng', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(135, 7, 'Trần Đức Hiền', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(134, 7, 'Hoàng Thế Giang', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(133, 7, 'Bùi Thị Giang', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(132, 7, 'Trần Thế Đạt ', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(131, 7, 'Phạm Đức Diện', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(130, 7, 'Quách Trí Công', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(129, 7, 'Lê Tuấn Anh', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(128, 7, 'Nguyễn THúy An', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(127, 6, 'Phạm Xuân Vũ', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(126, 6, 'Đào Trung Tín', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(125, 6, 'Nguyễn Văn Thoan', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(124, 6, 'Vũ Văn Thanh', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(123, 6, 'Bùi Thúy Quỳnh', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(122, 6, 'Nguyễn Văn Phước', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(121, 6, 'Trần Thị Nga', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(120, 6, 'Trần Thị Mai', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(119, 6, 'Chu Thị Hợi', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(118, 6, 'Nguyễn Thị Hằng', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(117, 6, 'Nguyễn Thành Đô', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(116, 6, 'Đoàn Dã Đạt', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(115, 6, 'Chung Thị Lan Dung', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(114, 6, 'Hồ Thị Bình', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(113, 6, 'Trần Vân Anh', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(112, 6, 'Phạm Tú Anh', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(111, 5, 'Trần Đình Văn', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(110, 5, 'Lê Thế Tùng', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(109, 5, 'Nguyễn Thị Thủy', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(108, 5, 'Phạm Trung Phong', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(107, 5, 'Mai Thị Nguyệt', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(106, 5, 'Lê Hương Mến', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(105, 5, 'Trần Thị Loan', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(104, 5, 'Lã Thùy Linh', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(103, 5, 'Tạ Thị Hướng', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(102, 5, 'Hoàng Thúy Huyền', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(101, 5, 'Lại Đức Hợp', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(100, 5, 'NGuyễn Việt Hà', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(99, 5, 'Hoàng Thị Hương Giang', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(98, 5, 'nguyễn THị Hồng ĐIệp', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(97, 5, 'Hạ Thành Công', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(96, 5, 'Trần Thanh Bình', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(95, 5, 'Nguyễn Trung Anh', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(94, 4, 'Hoàng Quốc Việt', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(93, 4, 'Nguyễn Thị Thúy', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(92, 4, 'Nguyễn Thị Thơ', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(91, 4, 'Nguyễn Tố Quyên', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(90, 4, 'Lê Thị Phương', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(89, 4, 'Khuất Thị Diệu Ngọc', '0000-00-00', 'An Đào D - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(88, 4, 'Phạm Thị Ngát', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(86, 4, 'nguyễn Phương Nga', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(87, 4, 'Hoàng Thị Nga', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(85, 4, 'Nguyễn Thị Mỹ', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(84, 4, 'Phạm Thị Lan', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(83, 4, 'Nguyễn Thị Hường', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(82, 4, 'Hoàng Thị Hải', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(81, 4, 'Phan Thu Hà', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(80, 4, 'Trịnh Hương Giang', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(79, 4, 'Bùi Thị Giang', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(78, 4, 'Phạm Xuân Đức', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(77, 4, 'Phương Xuân Cảnh', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(76, 4, 'Lê Kiều Anh', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(75, 4, 'Đỗ Vân ANh', '0000-00-00', 'Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(74, 3, 'Đỗ Đức Việt', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(73, 3, 'Nguyễn Quốc Trung', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(72, 3, 'Nguyễn Quang Thái', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(71, 3, 'Nguyễn Trang Thái', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(70, 3, 'Hoàng Xuân Quý', '0000-00-00', 'Cửu Việt 1 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(69, 3, 'Phạm Lệ Minh', '0000-00-00', 'An Đào  B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(68, 3, 'Chu Đức Long', '0000-00-00', 'An Đào  B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(67, 3, 'Nguyễn thị Lam', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(66, 3, 'Phạm Văn Hường', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(65, 3, 'Lưu thị Huyễn', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(64, 3, 'Lương Văn Hiệp', '0000-00-00', 'An Đào  B - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(63, 3, 'Nguyễn thị Hân', '0000-00-00', 'An Đào  B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(62, 3, 'Ngô Thị Hằng', '0000-00-00', 'An Đào  B - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(61, 3, 'Lê Văn Hải', '0000-00-00', 'An Đào A - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(60, 3, 'Nguyễn Hương Giang', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(59, 3, 'phạm Văn Đoàn', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(58, 3, 'Quách Hoàng Du', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(57, 3, 'Phạm Thị Diệp', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(56, 3, 'Phùng cấm Anh', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(55, 3, 'Mông Tuấn Anh', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 1, 0),
(11, 1, 'Lương thị Huệ', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0),
(202, 0, '', '0000-00-00', 'Cửu Việt 2 - Trâu Qùy - Gia Lâm - Hà Nội', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE IF NOT EXISTS `lop` (
  `l_malop` int(11) NOT NULL AUTO_INCREMENT,
  `l_magiaovien` int(11) NOT NULL,
  `l_tenlop` text NOT NULL,
  `l_phong` text NOT NULL,
  PRIMARY KEY (`l_malop`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`l_malop`, `l_magiaovien`, `l_tenlop`, `l_phong`) VALUES
(1, 1, '6A', 'Lop6A'),
(2, 2, '6B', 'Lớp 6B'),
(3, 5, '6C', 'Lớp 6c'),
(4, 3, '7A', 'Lớp 7A'),
(5, 6, '7B', 'Lớp 7B'),
(6, 4, '7C', 'Lớp 7C'),
(7, 7, '8A', 'Lớp 8A'),
(8, 8, '8B', 'Lớp 8B'),
(9, 11, '8C', 'Lớp 8C'),
(10, 16, '9A', 'Lớp 9A'),
(11, 13, '9B', 'Lớp 9B'),
(12, 13, '9C', 'Lớp 9C');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE IF NOT EXISTS `monhoc` (
  `mh_mamonhoc` int(11) NOT NULL AUTO_INCREMENT,
  `mh_tenmonhoc` text NOT NULL,
  `mh_magiaovien` int(11) NOT NULL,
  PRIMARY KEY (`mh_mamonhoc`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mh_mamonhoc`, `mh_tenmonhoc`, `mh_magiaovien`) VALUES
(2, 'Văn', 3),
(3, 'Lịch Sử', 2),
(4, 'Địa lý', 10),
(5, 'Vật lý', 13),
(6, 'Sinh Học', 4),
(7, 'Hóa Học', 5),
(8, 'Anh Văn', 11),
(9, 'Công Nghệ', 8),
(10, 'Mỹ Thuật', 12),
(11, 'Tin ', 14),
(12, 'Giáo Dục Công Dân', 15),
(13, 'Thể Dục', 7),
(15, 'Toán', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE IF NOT EXISTS `quyen` (
  `maquyen` int(11) NOT NULL DEFAULT '0',
  `tenquyen` text NOT NULL,
  PRIMARY KEY (`maquyen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`maquyen`, `tenquyen`) VALUES
(0, 'giaovien'),
(1, 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_mauser` int(11) NOT NULL AUTO_INCREMENT,
  `u_username` text NOT NULL,
  `u_password` text NOT NULL,
  `u_quyen` int(11) NOT NULL,
  PRIMARY KEY (`u_mauser`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_mauser`, `u_username`, `u_password`, `u_quyen`) VALUES
(1, 'admin1', '123', 1),
(2, 'admin2', '123', 1),
(3, 'admin7', '123', 1),
(4, 'admin3', '123', 1),
(5, 'admin4', '12345', 1),
(7, 'giaovien', '123', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
