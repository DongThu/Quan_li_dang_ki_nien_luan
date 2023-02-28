-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 10:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct271-nlcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `detais`
--

CREATE TABLE `detais` (
  `STT` int(10) NOT NULL,
  `MSSV` varchar(10) NOT NULL,
  `TenDeTai` varchar(255) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `GhiChu` varchar(255) NOT NULL,
  `MSCB` varchar(10) NOT NULL,
  `HocKy` varchar(10) NOT NULL,
  `NienKhoa` varchar(20) NOT NULL,
  `HoTenCB` varchar(255) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `Loai` varchar(50) NOT NULL,
  `NXDT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detais`
--

INSERT INTO `detais` (`STT`, `MSSV`, `TenDeTai`, `NoiDung`, `GhiChu`, `MSCB`, `HocKy`, `NienKhoa`, `HoTenCB`, `HoTen`, `Loai`, `NXDT`) VALUES
(9, 'B1910458', 'Quản lí đề tài niên luận', 'đăng kí, nộp bài, chấm điểm', '', '001234', '1', '2022-2023', '', '', 'Niên luận cơ sở', 'Đề tài này đã làm nhiều ở học kỳ trước, chưa có tính mới mẻ cần một đề tài khác');

-- --------------------------------------------------------

--
-- Table structure for table `dsdetais`
--

CREATE TABLE `dsdetais` (
  `id` int(11) NOT NULL,
  `MSSV` varchar(10) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `TenDeTai` varchar(255) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `GhiChu` varchar(255) NOT NULL,
  `DiemSo` int(10) NOT NULL,
  `NhanXet` varchar(255) NOT NULL,
  `HocKy` int(10) NOT NULL,
  `NienKhoa` varchar(20) NOT NULL,
  `MSCB` varchar(10) NOT NULL,
  `NXDT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dsdetais`
--

INSERT INTO `dsdetais` (`id`, `MSSV`, `HoTen`, `TenDeTai`, `NoiDung`, `GhiChu`, `DiemSo`, `NhanXet`, `HocKy`, `NienKhoa`, `MSCB`, `NXDT`) VALUES
(15, 'B1910461', 'Trương Thị Cẩm Tiên', 'Web học tiếng anh', 'từ vựng cơ bản cho người mới bắt đầu', '', 0, '', 1, '2022-2023', '', 'cv'),
(16, 'B1910472', 'Trần Thị Kim Yến', 'Quản lý đề tài luận văn', 'đăng ký đề tài, nộp bài và chấm điểm', '', 0, '', 1, '2022-2023', '', ''),
(19, 'B1910472', 'Nguyễn Cát Tường', 'web bán quần áo', 'đăng tải bán quàn áo', '', 0, '', 0, '', '', ''),
(20, 'B1910442', 'Phạm Thị Thanh Quyền', 'Quản lý khen thưởng', 'thêm các thành tích cho sinh viên học tốt', '', 0, '', 0, '', '', ''),
(21, 'B1910473', 'Nguyễn Hoài An', 'web bán dụng cụ làm vườn', 'có thể thêm, sửa, xóa sản phẩm, xuất hóa đơn,...', '', 0, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dsketquas`
--

CREATE TABLE `dsketquas` (
  `STT` int(11) NOT NULL,
  `MSSV` varchar(10) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `DiemSo` varchar(5) NOT NULL,
  `NhanXet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dsketquas`
--

INSERT INTO `dsketquas` (`STT`, `MSSV`, `HoTen`, `DiemSo`, `NhanXet`) VALUES
(1, 'B1910461	', 'Trương Thị Cẩm Tiên', '', ''),
(2, 'B1910472', 'Trần Kim Yến', '', ''),
(3, 'B1910439', 'Phạm Thị Thanh Quyền', '', ''),
(4, 'B1910471', 'Nguyễn Phan Trần Diễm Trinh	', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fileup`
--

CREATE TABLE `fileup` (
  `id` int(10) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fileup`
--

INSERT INTO `fileup` (`id`, `filename`) VALUES
(14, 'B1910440_CongNgheWeb_Lab1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `ketquas`
--

CREATE TABLE `ketquas` (
  `STT` int(10) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `MSSV` varchar(10) NOT NULL,
  `DiemSo` float NOT NULL,
  `NhanXet` varchar(255) NOT NULL,
  `HoTen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketquas`
--

INSERT INTO `ketquas` (`STT`, `filename`, `MSSV`, `DiemSo`, `NhanXet`, `HoTen`) VALUES
(3, '', 'B1910458', 10, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lopphutrach`
--

CREATE TABLE `lopphutrach` (
  `id` int(11) NOT NULL,
  `MaHP` varchar(10) NOT NULL,
  `TenHP` varchar(100) NOT NULL,
  `KyHieu` int(4) NOT NULL,
  `HocKy` varchar(10) NOT NULL,
  `NienKhoa` varchar(10) NOT NULL,
  `danhsach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lopphutrach`
--

INSERT INTO `lopphutrach` (`id`, `MaHP`, `TenHP`, `KyHieu`, `HocKy`, `NienKhoa`, `danhsach`) VALUES
(1, 'CT271', 'Niên luận cơ sở', 1, '1', '2019-2020', 'danhsach'),
(2, 'CT272', 'Niên luận ngành', 2, '1', '2020-2021', 'danhsach'),
(3, 'CT271', 'Niên luận cơ sở', 3, '2', '2021-2022', 'danhsach'),
(4, 'CT272', 'Niên luận ngành', 4, '2', '2022-2023', 'danhsach');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sv`
--

CREATE TABLE `tbl_sv` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sv`
--

INSERT INTO `tbl_sv` (`id`, `username`, `password`) VALUES
(1, 'B1910458', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(4) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `usertype` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `usertype`) VALUES
(1, '001234', '12345678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tt_gv`
--

CREATE TABLE `tt_gv` (
  `MSCB` varchar(10) NOT NULL,
  `HoTenCB` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `NgaySinhCB` date NOT NULL,
  `GioiTinhCB` varchar(10) NOT NULL,
  `BoMon` varchar(255) NOT NULL,
  `ChuyenNganh` varchar(255) NOT NULL,
  `NamGiangDay` date NOT NULL,
  `Khoa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tt_gv`
--

INSERT INTO `tt_gv` (`MSCB`, `HoTenCB`, `Email`, `sdt`, `NgaySinhCB`, `GioiTinhCB`, `BoMon`, `ChuyenNganh`, `NamGiangDay`, `Khoa`) VALUES
('001234', 'Nguyễn Văn A', 'nva@cit.ctu.edu.vn', '094578123', '1980-12-11', 'Nam', 'Thạc sĩ', 'Công Nghệ Thông tin', '2012-05-04', 'Khoa Công Nghệ Thông Tin và Truyền Thông');

-- --------------------------------------------------------

--
-- Table structure for table `tt_sv`
--

CREATE TABLE `tt_sv` (
  `MSSV` varchar(10) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `Lop` varchar(10) NOT NULL,
  `NganhHoc` varchar(255) NOT NULL,
  `KhoaHoc` varchar(10) NOT NULL,
  `Khoa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tt_sv`
--

INSERT INTO `tt_sv` (`MSSV`, `HoTen`, `Email`, `sdt`, `NgaySinh`, `GioiTinh`, `Lop`, `NganhHoc`, `KhoaHoc`, `Khoa`) VALUES
('B1910458', 'Đồng Thị Anh Thư', 'thub1910458@student.ctu.edu.vn', '0946830300', '2001-12-15', 'Nữ', 'DI19V7A8', 'Công nghệ thông tin', 'K45', 'Công Nghệ Thông Tin và Truyền Thông');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detais`
--
ALTER TABLE `detais`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `MSSV` (`MSSV`),
  ADD KEY `MSCB` (`MSCB`);

--
-- Indexes for table `dsdetais`
--
ALTER TABLE `dsdetais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dsketquas`
--
ALTER TABLE `dsketquas`
  ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `fileup`
--
ALTER TABLE `fileup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketquas`
--
ALTER TABLE `ketquas`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `MSSV` (`MSSV`);

--
-- Indexes for table `lopphutrach`
--
ALTER TABLE `lopphutrach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sv`
--
ALTER TABLE `tbl_sv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_gv`
--
ALTER TABLE `tt_gv`
  ADD PRIMARY KEY (`MSCB`);

--
-- Indexes for table `tt_sv`
--
ALTER TABLE `tt_sv`
  ADD PRIMARY KEY (`MSSV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detais`
--
ALTER TABLE `detais`
  MODIFY `STT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dsdetais`
--
ALTER TABLE `dsdetais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `dsketquas`
--
ALTER TABLE `dsketquas`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fileup`
--
ALTER TABLE `fileup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ketquas`
--
ALTER TABLE `ketquas`
  MODIFY `STT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lopphutrach`
--
ALTER TABLE `lopphutrach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sv`
--
ALTER TABLE `tbl_sv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detais`
--
ALTER TABLE `detais`
  ADD CONSTRAINT `detais_ibfk_1` FOREIGN KEY (`MSSV`) REFERENCES `tt_sv` (`MSSV`),
  ADD CONSTRAINT `detais_ibfk_2` FOREIGN KEY (`MSCB`) REFERENCES `tt_gv` (`MSCB`);

--
-- Constraints for table `ketquas`
--
ALTER TABLE `ketquas`
  ADD CONSTRAINT `ketquas_ibfk_1` FOREIGN KEY (`MSSV`) REFERENCES `tt_sv` (`MSSV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
