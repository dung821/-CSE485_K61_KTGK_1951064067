-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 10:57 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951064067_kttv_bdkh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duan`
--

CREATE TABLE `duan` (
  `maduan` int(200) NOT NULL,
  `tenduan` char(200) NOT NULL,
  `namthuchien` int(200) NOT NULL,
  `linhvuc` varchar(200) NOT NULL,
  `nhiemvu` char(200) NOT NULL,
  `coquanthuchien` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `duan`
--

INSERT INTO `duan` (`maduan`, `tenduan`, `namthuchien`, `linhvuc`, `nhiemvu`, `coquanthuchien`) VALUES
(1, 'đánh giá mức độ biến đổi khí hậutỉnh Bắc Ninh', 2019, 'biến đổi khí hậu', 'nghiên cứu biến đổi khí hậu', 'trung tâm úng phó biến đổi khí hậu'),
(2, 'xây dưngk triển khai kế hoạch hành độngkk ứng pphó biến đổi khí hâu', 2012, 'biến đổi khí hậu', 'nghiên cứu biến đổi khí hậu', 'trung tâm úng phó biến đổi khí hậu'),
(3, 'cập nhật kế hoạch hành động ứng phó bieién đổi khí hậu tầm nhìn  tới năm 2050', 2018, 'biến đổi khí hậu', 'nghiên cứu biến đổi khí hậu', 'trung tâm úng phó biến đổi khí hậu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
