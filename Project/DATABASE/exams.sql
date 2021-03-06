-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 05:43 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `htqlthitracnghiem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `exam_title` varchar(255) NOT NULL,
  `exam_datetime` date NOT NULL,
  `duration` time NOT NULL,
  `total_question` int(10) NOT NULL,
  `marks_per_right_answer` float NOT NULL,
  `created_on` date NOT NULL,
  `status` enum('Pending','Created','Started','Completed') NOT NULL,
  `exam_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `exams`
--

INSERT INTO `exams` (`id`, `exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status`, `exam_code`) VALUES
(1, 'Công nghệ web', '0000-00-00', '00:01:20', 10, 1, '0000-00-00', 'Pending', 0),
(2, 'Cơ sở dữ liệu', '0000-00-00', '00:00:00', 10, 1, '0000-00-00', 'Created', 0),
(3, 'Laravel Pro', '0000-00-00', '00:01:20', 20, 0.5, '0000-00-00', 'Completed', 0),
(4, 'Khai phá dữ liệu', '0000-00-00', '00:00:50', 15, 0.3, '0000-00-00', 'Started', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
