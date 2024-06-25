-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2024 lúc 05:48 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banhgateaux`
--

CREATE TABLE `banhgateaux` (
  `tenloaibanhsn` varchar(30) NOT NULL,
  `mabanhsn` varchar(10) NOT NULL,
  `malbanhsn` varchar(20) NOT NULL,
  `gia` int(20) NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `anhbanhsn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banhgateaux`
--

INSERT INTO `banhgateaux` (`tenloaibanhsn`, `mabanhsn`, `malbanhsn`, `gia`, `mota`, `anhbanhsn`) VALUES
('FRUIT CAKE', 'KT017', 'GATEAUX01', 275, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux1.png'),
('GREEN TEA CAKE 03', 'KT006', 'GATEAUX01', 275, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux2.png'),
('COCONUT CAKE', 'KT014', 'GATEAUX01', 275, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux3.png'),
('CAPUCCINO', 'KT009', 'GATEAUX01', 275, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux4.png'),
('TIRAMISU VUÔNG', 'KT007', 'GATEAUX01', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux5.png'),
('RED VELVET CAKE VUÔNG', 'KT025A', 'GATEAUX01', 400, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux6.png'),
('TIRAMISU', 'KT001', 'GATEAUX01', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux7.png'),
('FRESH FRUIT CAKE', 'KT015', 'GATEAUX01', 300, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux8.png'),
('BLUE BERRY CHOCOLATE CAKE', 'KT003', 'GATEAUX01', 275, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux9.png'),
('RED VELVET CAKE 2', 'KT024', 'GATEAUX01', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux10.png'),
('DARK CHOCOLATE DREAM CAKE', 'KT022', 'GATEAUX01', 300, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux11.png'),
('TIRAMISU CAKE', 'KT072', 'GATEAUX01', 275, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux12.png'),
('RED VELVET CAKE 01', 'KT023', 'GATEAUX01', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux13.png'),
('FRUIT CAKE 02', 'KT016', 'GATEAUX01', 275, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux14.png'),
('FRESH DREAM CAKE 02', 'KT012', 'GATEAUX01', 275, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux15.jpg'),
('BLUBERRY FRESH CREAM CAKE', 'KT027', 'GATEAUX01', 330, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux16.jpg'),
('CARAMEL MOIST CHOCOLATE CAKE', 'KT026', 'GATEAUX01', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux17.png'),
('GREENTEACAKE LOVE', 'KT032', 'GATEAUX01', 330, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux18.png'),
('CHOCOLATE HEART CAKE', 'BV004', 'GATEAUX01', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux19.jpg'),
('FRESH FRUIT CAKE', 'KT018', 'GATEAUX01', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux20.jpg'),
('GREEN TEA FOUR LOVE', 'KT032', 'GATEAUX01', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux21.jpg'),
('MOIST CHOCOLATE CAKE HÌNH VUÔN', 'KT065', 'GATEAUX01', 400, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux22.png'),
('DELI HEART CAKE', 'BV010', 'GATEAUX01', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux23.jpg'),
('CHOCOLATE FRESH DREAM CAKE', 'KT004', 'GATEAUX01', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux24.png'),
('GREEN TEA CAKE CHỮ NHẬT', 'KT060', 'GATEAUX02', 660, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux25.jpg'),
('TIRAMISU CHỮ NHẬT', 'KT008', 'GATEAUX02', 660, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux26.jpg'),
('TIRAMISU FOUR LOVE', 'KT030', 'GATEAUX02', 300, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux27.jpg'),
('CHOCOLATE TIRAMISU CHỮ NHẬT', 'KT057', 'GATEAUX02', 730, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux28.jpg'),
('FRUIT CAKE CHỮ NHẬT', 'KT058', 'GATEAUX02', 660, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux29.jpg'),
('STRAWBERRY HEART CAKE', 'BV009', 'GATEAUX02', 420, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux30.jpg'),
('TIRAMISU XÙ', 'KT002', 'GATEAUX02', 275, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux31.png'),
('MOIST CHOCOLATE CAKE 02', 'KT074', 'GATEAUX02', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux32.png'),
('STRAWBERRY CAKE', 'KT019', 'GATEAUX02', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux33.jpg'),
('RED VELVER HEART CAKE 03', 'BV013', 'GATEAUX02', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux34.jpg'),
('RED VELVET FOUR  LOVE', 'KT03', 'GATEAUX02', 400, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux35.jpg'),
('DELI CAKE 2', 'KT021', 'GATEAUX02', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux36.jpg'),
('DELI CAKE 1', 'KT020', 'GATEAUX02', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux37.jpg'),
('RED VELVET CAKE 03', 'KT073', 'GATEAUX02', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux38.png'),
('MOIST CHOCOLATE FOUR LOVE', 'KT031', 'GATEAUX02', 400, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux39.jpg'),
('WHITE CHOCOLATE SPRING CAKE', 'KT059', 'GATEAUX02', 730, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux40.jpg'),
('CAPUCCINO CHỮ NHẬT', 'KT010', 'GATEAUX02', 660, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux41.jpg'),
('BLUE BERRY CAKE', 'KT075', 'GATEAUX02', 360, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'gateaux42.png'),
('TIRAMISU CAKE MOUSE', 'BSN08', 'B1', 360000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn1.png'),
('TIRAMISU CAKE CHỮ NHẬT', 'BSN04', 'B1', 660000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn2.png'),
('TIRAMISU CAKE', 'BSN06', 'B1', 330000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn3.png'),
('RED VELVET CREAM CHEESE MOUSE ', 'Red83-04', 'B1', 360000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn4.png'),
('RED VELVET CREAM CHEESE MOUSE ', 'Red83-03	', 'B1', 600000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn5.png'),
('RED VELVET CREAM CHEESE MOUSE ', 'Red83-02', 'B1', 360000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn6.png'),
('RED VELVET CREAM CHEESE MOUSE ', 'Red83-001', 'B1', 400000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn7.png'),
('RED VELVET CAKE VUÔNG', 'KT025A', 'B1', 400000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn8.png'),
('RED VELVET CAKE CHỮ NHẬT', 'BSN01', 'B1', 730000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn9.png'),
('RED VELVET CAKE', 'BSN05', 'B1', 360000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn10.png'),
('PASSION FRUIT MOUSSE', 'BSN010', 'B1', 360000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn11.png'),
('HAWAII MOUSSE', 'BSN09', 'B1', 360000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn12.png'),
('GREEN TEA CAKE CHỮ NHẬT', 'BSN02', 'B1', 660000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn13.png'),
('CHOCOLATE FRESH CREAM CAKE', 'KT004', 'B1', 360000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn14.png'),
('CARAMEL MOIST CHOCOLATE CAKE', 'BSN011', 'B1', 360000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn15.png'),
('CARAMEL CHOCOLATE CAKE MOUSSE', 'BSN012', 'B1', 360000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn16.png'),
('CARAMEL AND CHOCOLATE CAKE CHỮ', 'BSN07', 'B1', 600000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn17.png'),
('BÁNH KEM 20-11', 'BSN081', 'B1', 730000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn18.png'),
('BÁNH KEM 20-11', 'BSN082', 'B1', 660000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn19.png'),
('BÁNH KEM 20-11', 'BSN083', 'B1', 330000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn20.png'),
('BÁNH KEM 20-11', 'BSN084', 'B1', 330000, '- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'bsn21.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banhmyvabanhman`
--

CREATE TABLE `banhmyvabanhman` (
  `tenbmbm` varchar(255) NOT NULL,
  `mabmbm` varchar(255) NOT NULL,
  `malbmbm` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `mota` mediumtext NOT NULL,
  `anhbmbm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banhmyvabanhman`
--

INSERT INTO `banhmyvabanhman` (`tenbmbm`, `mabmbm`, `malbmbm`, `gia`, `mota`, `anhbmbm`) VALUES
('BÁNH MÌ BAGUETTE', 'mbmy01', 'malbmbm01', 'liên hệ', 'Thành phần chính:\r\n\r\n- Bột mỳ\r\n\r\n- Muối\r\n\r\n- Phụ gia', 'abmy01.png'),
('BÁNH MÌ CHUỘT', 'mbmy02', 'malbmbm01', 'liên hệ', 'Thành phần chính: \r\n\r\n- Bột mỳ\r\n\r\n- Muối\r\n\r\n- Phụ gia', 'abmy02.png'),
('BÁNH MÌ ĐEN - FRENCH RYE BREAD', 'mbmy03', 'malbmbm01', 'liên hệ', 'Thành phần chính: \r\n\r\n- Bột mỳ\r\n\r\n- Muối\r\n\r\n- Phụ gia', 'abmy03.png'),
('BÁNH MÌ GỐI', 'mbmy04', 'malbmbm01', 'liên hệ', 'Thành phần: \r\n\r\n- Bột mỳ\r\n\r\n- Muối\r\n\r\n- Phụ gia', 'abmy04.png'),
('BÁNH MÌ GỐI LÚA MẠCH NẢY MẦM', 'mbmy05', 'malbmbm01', 'liên hệ', 'Bột mỳ, hạt lúa mạch nảy mầm, bơ, men, muối, phụ gia, đường, bột sữa.', 'abmy05.png'),
('BÁNH MÌ HOA CÚC', 'mbmy06', 'malbmbm01', 'liên hệ', 'Bột mỳ, hạt lúa mạch nảy mầm, bơ, men, muối, phụ gia, đường, bột sữa.', 'abmy06.png'),
('BÁNH RUỐC ( CUỘN 10 )', 'mbman01', 'malbmbm02', 'liên hệ', 'Bột mỳ, trứng, đường, sữa tươi, dầu ăn, bột sữa, chất ổn định, chà bông, sốt trứng.', 'abman01.png'),
('BÁNH HOTDOG', 'mbman02', 'malbmbm02', 'liên hệ', 'Bột mỳ, bơ, muối, phụ gia, xúc xích.', 'abman02.png'),
('PHOMAI TIÊU', 'mbman03', 'malbmbm02', 'liên hệ', 'Bột mỳ, men, muối, phụ gia, đường, bơ, phomai cheddar, jambon, hương sữa, đầu ăn.', 'abman03.png'),
('JAMBONG', 'mbman04', 'malbmbm02', 'liên hệ', 'Thành phần chính:\r\n\r\n- Bột mỳ\r\n\r\n- Ruốc\r\n\r\n- Sốt thịt Jambon', 'abman04.png'),
('BÁNH XÚC XÍCH HOA', 'mbman05', 'malbmbm02', 'liên hệ', 'Thàn phần: \r\n\r\n- Bột mỳ\r\n\r\n- Ruốc\r\n\r\n- Sốt\r\n\r\n- Xúc xích\r\n\r\n- Muối\r\n\r\n- Phụ gia', 'abman05.png'),
('PATESO MINI', 'mbman06', 'malbmbm02', 'liên hệ', 'Thành phần chính:\r\n\r\n- Bột mỳ\r\n\r\n- Bơ\r\n\r\n- Thịt lợn xay\r\n\r\n- Hành\r\n\r\n- Gia vị', 'abman06.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banhsinhnhat`
--

CREATE TABLE `banhsinhnhat` (
  `tenloaibanhsn` varchar(500) NOT NULL,
  `mabanhsn` varchar(255) NOT NULL,
  `malbanhsn` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `mota` mediumtext NOT NULL,
  `anhbanhsn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banhsinhnhat`
--

INSERT INTO `banhsinhnhat` (`tenloaibanhsn`, `mabanhsn`, `malbanhsn`, `gia`, `mota`, `anhbanhsn`) VALUES
('FRUIT CAKE', 'mgkt01', 'malbsn01', '360000', 'Thành phần chính:\r\n\r\n- Gato\r\n\r\n- Kem tươi vị rượu rum\r\n\r\n- Hoa quả\r\n\r\n- Dừa khô.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi vị rượu rum (nho). Trên mặt bánh được trang trí bằng hoa quả với dừa khô kết xung quanh.', 'agkt01.png'),
('GREENTEA CAKE 3', 'mgkt02', 'malbsn01', '360000', 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'agkt02.png'),
('COCONUT CAKE', 'mgkt03', 'malbsn01', '360000', 'Thành phần chính:\r\n\r\nGato\r\nKem tươi  vị Coffee \r\nDừa tươi sấy khô \r\nBánh làm từ 3 lớp kem gato trắng  kết hợp với 3 lớp kem TƯƠI  vị coffe.bánh được phủ bên ngoài bởi 1 lớp dừa sấy khô rất thơm , TRANG TRÍ HOA QUẢ', 'agkt03.png'),
('CAPUCCINO', 'mgkt04', 'malbsn01', '360000', 'Thành phần chính:\r\n\r\n- Gato\r\n\r\n- Kem phomai vị coffee\r\n\r\n- Cacao.\r\n\r\nBánh làm từ 3 lớp gato TRẮNG xen giữa 3 lớp kem TƯƠI PHOMAI, VỊ COFFEE. Bên ngoài phủ 1 lớp bột cacao VÀ DECOR HOA QUẢ. ', 'agkt04.png'),
('TIRAMISU VUÔNG', 'mgkt05', 'malbsn01', '360000', 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi mặn vị coffee,\r\n\r\n- Bột cacao.\r\n\r\nBánh làm từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị coffee. Bánh phủ bên trên bởi 1 lớp kem tươi rắc bột cacao.', 'agkt05.png'),
('RED VELVET CAKE VUÔNG', 'mgkt06', 'malbsn01', '360000', 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Bột mỳ đỏ,\r\n\r\n- Kem tiramisu.\r\n\r\nBánh làm từ 3 lớp gato đỏ xen lẫn 3 lớp kem tươi. Bên trên bánh phủ 1 lớp kem tiramisu rắc bột mỳ đỏ.', 'agkt06.png'),
('DARK CHOCOLATE CAKE', 'mgkb01', 'malbsn02', '360000', 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem bơ vị rượu rum,\r\n\r\n- Socola.\r\n\r\nBánh được làm từ 3 lớp gato xen giữa 3 lớp kem. Kế tiếp là lớp kem bơ socola vị rượu rum và 1 lớp socola chảy phủ bên ngoài.', 'agkb01.png'),
('DARK CHOCOLATE COCONUT', 'mgkb02', 'malbsn02', '360000', 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem bơ trộn socola vị rượu rum,\r\n\r\n- Dừa khô.\r\n\r\nBánh làm từ 3 lớp gato xen giữa 3 lớp kem. Phủ bằng 1 lớp gato trộn socola vị rượu rum với dừa khô và socola rắc ngoài.', 'agkb02.png'),
('MOKA CAKE', 'mgkb03', 'malbsn02', '360000', 'Thành phần chính:\r\n\r\n- Gato\r\n\r\n- Kem BƠ COFFEE\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem BƠ COFFEE, VỊ COFFEE. Trên mặt bánh được trang trí bằng hoa quả và socola đổ .', 'agkb03.png'),
('OPERA VUÔNG', 'mgkb04', 'malbsn02', '360000', 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem bơ vị coffee,\r\n\r\n- Socola.\r\n\r\nBánh được làm từ 3 lớp gato trắng xen giữa 3 lớp kem bơ vị coffee. Bánh phủ 1 lớp socola ở trên mặt.', 'agkb04.png'),
('PRALINE 2', 'mgkb05', 'malbsn02', '360000', 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem bơ vị coffee.\r\n\r\nBánh làm từ 3 lớp gato xen giữa 3 lớp kem. Phủ bên ngoài là 1 lớp kem bơ vị coffee với 1 lớp hạt dẻ xanh phía dưới. ', 'agkb05.png'),
('WHITE CHOCOLATE CAKE', 'mgkb06', 'malbsn02', '360000', 'THÀNH PHẦN CHÍNH: \r\n- GATO \r\n- KEM BƠ VỊ RƯỢU RUM \r\n- SOCOLA BÀO TRẮNG   \r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO TRẮNG XEN KẼ 3 LỚP KEM BƠ, VỊ RƯỢU RUM , PHỦ BÊN NGOÀI LÀ MỘT LỚP CHOCOLATE BÀO TRẮNG NGUYÊN CHẤT  VÀ TRANG TRÍ HOA QUẢ.', 'agkb06.png'),
('TIRAMISU CAKE', 'mbsn2301', 'malbsn03', '360000', '- Gato,\r\n- Kem tươi mặn vị coffee.\r\nBánh làm từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị coffee. Bánh phủ bên ngoài bởi 1 lớp kem tươi trắng rắc bột cacao.', 'absn2301.png'),
('TIRAMISU CAKE CHỮ NHẬT', 'mbsn2302', 'malbsn03', '360000', '- Gato,\r\n- Kem tươi mặn vị coffee.\r\nBánh làm từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị coffee. Bánh phủ bên ngoài bởi 1 lớp kem tươi trắng rắc bột cacao.', 'absn2302.png'),
('RED VELVET CREAM CHEESE MOUSSE CAKE', 'mbsn2303', 'malbsn03', '360000', 'Thành phần: Trứng, đường, bột mỳ, cream cheese, wipping cream, jalamtine. Bánh được làm từ 3 lớp bánh red velvet xe lẫn 3 lớp kem tươi pho mai. Bên ngoài phủ 1 lớp Jame đỏ vị Anh Đào và trang trí Socola', 'absn2303.png'),
('RED VELVET CAKE CHỮ NHẬT', 'mbsn2304', 'malbsn03', '360000', '- Gato,\r\n- Bột mỳ đỏ,\r\n- Kem tươi vi Tiramisu\r\nBánh làm từ 3 lớp gato đỏ xen lẫn 3 lớp kem tươi. Bên ngoài bánh phủ 1 lớp BỘT GATO ĐỎ VÀ TRANG TRÍ HOA QUẢ.', 'absn2304.png'),
('HAWAII MOUSSE', 'mbsn2305', 'malbsn03', '360000', '- Kem tươi\r\n- Dừa\r\n- Caramel\r\n- Trứng.\r\nBánh làm từ kem tươi nhiều trứng với phần trên là caramel dừa. Xung quanh được trang trí bằng 1 lớp gato mềm vị caramel.', 'absn2305.png'),
('GREEN TEA CAKE CHỮ NHẬT', 'mbsn2306', 'malbsn03', '360000', '- Gato\r\n- Kem tươi\r\n- Trà xanh\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi. Bên ngoài bánh phủ 1 lớp kem tươi vị trà xanh và bột trà xanh rắc phía trên.', 'absn2306.png'),
('BLUE BERRY MOUSSE', 'mbms01', 'malbsn04', '360000', '(*) KÍCH THƯỚC BÁNH: 21CM\r\n\r\nThành phần chính:\r\n\r\n- Blueberry\r\n\r\n- Kem cheese\r\n\r\n- Kem tươi.\r\n\r\nBánh làm từ kem tươi nhiều trứng và kem cheese với phần trên kem blueberry. Xung quanh được trang trí bằng 1 lớp gato mềm vị việt quất.', 'abms01.png'),
('CARAMEL CHOCOLATE MOUSSE', 'mbms02', 'malbsn04', '360000', '(*) KÍCH THƯỚC BÁNH: 21CM\r\n\r\nThành phần chính:\r\n\r\n- Caramel\r\n\r\n- Socola\r\n\r\nBánh làm từ trứng với phần trên là caramel, chocolate. Xung quanh được trang trí bằng 1 lớp gato.', 'abms02.png'),
('CHERRY CHEESE MOUSSE', 'mbms03', 'malbsn04', '360000', '(*) KÍCH THƯỚC BÁNH: 21CM\r\n\r\nThành phần chính:\r\n\r\n- Cherry,\r\n\r\n- Kem cheese,\r\n\r\n- Kem tươi.\r\n\r\nBánh làm từ kem tươi nhiều trứng và kem cheese với phần trên là kem cherry. Bao viền tạo nên từ 1 lớp gato nhiều sắc màu rất ấn tượng.', 'abms03.png'),
('HAWAI MOUSSE', 'mbms04', 'malbsn04', '360000', 'Thành phần chính:\r\n\r\n- Kem tươi\r\n\r\n- Dừa\r\n\r\n- Caramel\r\n\r\n- Trứng.\r\n\r\nBánh làm từ kem tươi nhiều trứng với phần trên là caramel dừa. Xung quanh được trang trí bằng 1 lớp gato mềm vị caramel.', 'abms04.png'),
('PASSION MOUSSE CHANH LEO', 'mbms05', 'malbsn04', '360000', 'Thành phần chính:\r\n\r\n- Kem tươi và chocolate trắng,\r\n\r\n- Chanh leo tươi,\r\n\r\nBánh làm từ trứng với 1 lớp socola và 1 lớp sốt chanh leo tươi. Vị bánh rất thanh và mát lạnh', 'abms05.png'),
('RASPBERRY CREAM CHEESE MOUSSE', 'mbms06', 'malbsn04', '360000', '(*) KÍCH THƯỚC BÁNH: 21CM\r\n\r\nThành phần chính:\r\n\r\n- Mâm xôi\r\n\r\n- Kem cheese\r\n\r\n- Kem tươi.\r\n\r\nBánh làm từ kem tươi nhiều trứng và kem cheese với phần trên là kem mâm xôi. Xung quanh được trang trí bằng 1 lớp gato mềm vị mâm xôi.', 'abms06.png'),
('CARAMEL AND CHOCOLATE CAKE MOUSSE VUÔNG', 'mbgms01', 'malbsn05', '360000', '(*) KÍCH THƯỚC BÁNH: 20 x 20 CM\r\n\r\nTHÀNH PHẦN CHÍNH :\r\n- GATO \r\n-  CARAMEL SOCOLA \r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE, CHANH LEO và CHOCOLATE . PHỦ MẶT BÁNH 1 LỚP SỐT CARAMEL VÀ TRANG TRÍ HOA QUẢ.', 'abgms01.png'),
('CARAMEL CHOCOLATE CAKE MOUSSE 2', 'mbgms02', 'malbsn05', '360000', '(*) KÍCH THƯỚC BÁNH: 21CM\r\n\r\nTHÀNH PHẦN CHÍNH :\r\n- GATO \r\n-  CARAMEL SOCOLA \r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO, CHOCOLATE  VÀ CHANH LEO. PHỦ MẶT BÁNH 1 LỚP SỐT CARAMEN VÀ TRANG TRÍ HOA QUẢ.', 'abgms02.png'),
('CARAMEL COCONUT CAKE MOUSSE 2', 'mbgms03', 'malbsn05', '360000', '(*) KÍCH THƯỚC BÁNH: 21CM\r\n\r\nTHÀNH PHẦN CHÍNH :\r\n- GATO \r\n- CARAMEL DỪA \r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO CARAMEL VÀ DỪA. PHỦ MẶT BÁNH 1 LỚP BỘT CƠM DỪA VÀ TRANG TRÍ HOA QUẢ.', 'abgms03.png'),
('CHOCOLATE MATCHA CAKE MOUSSE 2', 'mbgms04', 'malbsn05', '360000', '(*) KÍCH THƯỚC BÁNH: 21CM\r\n\r\nTHÀNH PHẦN CHÍNH :\r\n- GATO \r\n- MATCHA, CHOCOLATE.\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM TRÀ XANH VÀ CREAM CHOCOLATE. PHỦ MẶT BÁNH 1 LỚP CHOCOLATE ĐEN VÀ TRANG TRÍ SÔ CÔ LA', 'abgms04.png'),
('PASSION CAKE MOUSSE 2', 'mbgms05', 'malbsn05', '360000', '(*) KÍCH THƯỚC BÁNH: 21CM\r\n\r\nTHÀNH PHẦN CHÍNH :\r\n- GATO \r\n- CHOCOLATE TRẮNG, CHANH LEO.\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP KEM TƯƠI , CHOCOLATE TRẮNG VÀ CHANH LEO. PHỦ MẶT BÁNH 1 LỚP SỐT CHANH LEO VÀ TRANG TRÍ HOA QUẢ.', 'abgms05.png'),
('TIRAMISU CAKE MOUSSE', 'mbgms06', 'malbsn05', '360000', '(*) KÍCH THƯỚC BÁNH: 21CM\r\n\r\nTHÀNH PHẦN CHÍNH :\r\n- GATO \r\n- CREAM CHEESE PHOMAI\r\nBÁNH ĐƯỢC LÀM TỪ 3 LỚP GATO KẾT HỢP VỚI LỚP CREAM CHEESE , PHOMAI. PHỦ MẶT BÁNH 1 LỚP BỘT CACAO VÀ TRANG TRÍ HOA QUẢ.', 'abgms06.png'),
('BÁNH MOUSSE VANILLA CHANH LEO - PASSION YOGURT & WHITE CHOCOLATE MOUSSE CAKE', 'mbmsy01', 'malbsn06', '360000', '- Gato \r\n- Kem tươi \r\n- Socola trắng \r\n- Đường \r\n- Trứng gà \r\n- Lá Jelantine \r\n- Chanh leo\r\n- Sữa chua \r\n*Bánh được làm từ 3 lớp Gato xen lẫn lớp Mousse Vanilla và Socola Trắng thơm ngậy cùng với lớp sữa chua ở giữa và trên cùng là lớp Mousse Chanh  Leo tươi thanh mát. Trang trí trên cùng là lớp mứt Chanh  Leo và Socola\"', 'abmsy01.png'),
('BÁNH MOUSSE VANILLA PHÚC BỒN TỬ - RASPBERRY YOGURT & WHITE CHOCOLATE MOUSSE CAKE', 'mbmsy02', 'malbsn06', '360000', '- Gato \r\n- Kem tươi \r\n- Socola trắng \r\n- Đường \r\n- Trứng gà \r\n- Lá Jelantine \r\n- Quả phúc bồn tử \r\n- Sữa chua \r\n*Bánh được làm từ 3 lớp Gato xen lẫn lớp Mousse Vanilla và Socola Trắng thơm ngậy cùng với lớp sữa chua ở giữa và trên cùng là lớp Mousse quả mọng tươi thanh mát. Trang trí trên cùng là lớp mứt Raspberry và Sôcola', 'abmsy02.png'),
('BÁNH MOUSSE VANILLA VIỆT QUẤT - BLUEBERRY YOGURT & WHITE CHOCOLATE MOUSSE CAKE', 'mbmsy03', 'malbsn06', '360000', '- Gato \r\n- Kem tươi \r\n- Socola trắng \r\n- Đường kính\r\n- Trứng gà \r\n- Lá Jelantine \r\n- Sữa chua \r\n*Bánh được làm từ 3 lớp Gato xen lẫn lớp Mousse Vanilla và Socola Trắng thơm ngậy cùng với lớp sữa chua ở giữa và mứt quả Việt quất.  Trang trí trên cùng là lớp mứt Việt quất và Socola', 'abmsy03.png'),
('CAPUCCINO', 'mbmsy04', 'malbsn06', '360000', 'Thành phần chính:\r\n\r\n- Gato\r\n\r\n- Kem phomai vị coffee\r\n\r\n- Cacao.\r\n\r\nBánh làm từ 3 lớp gato TRẮNG xen giữa 3 lớp kem TƯƠI PHOMAI, VỊ COFFEE. Bên ngoài phủ 1 lớp bột cacao VÀ DECOR HOA QUẢ. ', 'abmsy04.png'),
('COCONUT CAKE', 'mbmsy05', 'malbsn06', '360000', 'Thành phần chính:\r\n\r\nGato\r\nKem tươi  vị Coffee \r\nDừa tươi sấy khô \r\nBánh làm từ 3 lớp kem gato trắng  kết hợp với 3 lớp kem TƯƠI  vị coffe.bánh được phủ bên ngoài bởi 1 lớp dừa sấy khô rất thơm , TRANG TRÍ HOA QUẢ', 'abmsy05.png'),
('FRUIT CAKE 2', 'mbmsy06', 'malbsn06', '360000', 'Thành phần chính:\r\n\r\n- Gato\r\n\r\n- Kem tươi vị rượu rum\r\n\r\n- Hoa quả\r\n\r\n- Dừa khô.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi vị rượu rum (nho). Trên mặt bánh được trang trí bằng hoa quả với dừa khô kết xung quanh.', 'abmsy06.png'),
('CAR CITY WORLD CAKE', 'mbbstpk01', 'malbsn07', '360000', 'Thành phần chính : \r\n\r\n- Gato, kem tươi\r\n\r\n - Bánh được làm từ 4 lớp gato trắng kết hợp với 4 lớp kem tươi, vị coffe \r\n\r\n- Phủ bên ngoài mặt bánh hoặc xung quanh chân bánh bởi 1 lớp kem tươi pha màu sắc trang trí ( kem tươi được pha với màu thực phẩm an toàn ) \r\n\r\n- Mặt trên bánh được gắn các phụ kiện hoạt hình trang trí không ăn được\r\n\r\n * Chú ý : phần kem tươi màu sắc để trang trí Quý khách nên gạt bỏ phần đó ra ngoài trước khi ăn để đảm bảo thẩm mỹ và hương vị tự nhiên chuẩn của bánh.', 'abbstpk01.png'),
('ELSA CAKE', 'mbbstpk02', 'malbsn07', '360000', 'Thành phần chính : \r\n\r\n- Gato, kem tươi\r\n\r\n - Bánh được làm từ 4 lớp gato trắng kết hợp với 4 lớp kem tươi, vị coffe \r\n\r\n- Phủ bên ngoài mặt bánh hoặc xung quanh chân bánh bởi 1 lớp kem tươi pha màu sắc trang trí ( kem tươi được pha với màu thực phẩm an toàn ) \r\n\r\n- Mặt trên bánh được gắn các phụ kiện hoạt hình trang trí không ăn được\r\n\r\n * Chú ý : phần kem tươi màu sắc để trang trí Quý khách nên gạt bỏ phần đó ra ngoài trước khi ăn để đảm bảo thẩm mỹ và hương vị tự nhiên chuẩn của bánh.', 'abbstpk02.png'),
('EXCAVATOR CAKE', 'mbbstpk03', 'malbsn07', '360000', 'Thành phần chính : \r\n\r\n- Gato, kem tươi\r\n\r\n - Bánh được làm từ 4 lớp gato trắng kết hợp với 4 lớp kem tươi, vị coffe \r\n\r\n- Phủ bên ngoài mặt bánh hoặc xung quanh chân bánh bởi 1 lớp kem tươi pha màu sắc trang trí ( kem tươi được pha với màu thực phẩm an toàn ) \r\n\r\n- Mặt trên bánh được gắn các phụ kiện hoạt hình trang trí không ăn được\r\n\r\n * Chú ý : phần kem tươi màu sắc để trang trí Quý khách nên gạt bỏ phần đó ra ngoài trước khi ăn để đảm bảo thẩm mỹ và hương vị tự nhiên chuẩn của bánh.', 'abbstpk03.png'),
('FOOTBALL CAKE 1', 'mbbstpk04', 'malbsn07', '360000', 'Thành phần chính : \r\n\r\n- Gato, kem tươi\r\n\r\n - Bánh được làm từ 4 lớp gato trắng kết hợp với 4 lớp kem tươi, vị coffe \r\n\r\n- Phủ bên ngoài mặt bánh hoặc xung quanh chân bánh bởi 1 lớp kem tươi pha màu sắc trang trí ( kem tươi được pha với màu thực phẩm an toàn ) \r\n\r\n- Mặt trên bánh được gắn các phụ kiện hoạt hình trang trí không ăn được\r\n\r\n * Chú ý : phần kem tươi màu sắc để trang trí Quý khách nên gạt bỏ phần đó ra ngoài trước khi ăn để đảm bảo thẩm mỹ và hương vị tự nhiên chuẩn của bánh.', 'abbstpk04.png'),
('HELLO KITTY CHOCOLATE TINY CAKE', 'mbbstpk05', 'malbsn07', '360000', 'Thành phần chính : \r\n\r\n- Gato, kem tươi \r\n\r\n- Bánh được làm từ 4 lớp gato trắng kết hợp với 4 lớp kem tươi, vị coffe\r\n\r\n - Phủ bên ngoài mặt bánh hoặc xung quanh chân bánh bởi 1 lớp kem tươi pha màu sắc trang trí ( kem tươi được pha với màu thực phẩm an toàn ) \r\n\r\n- Mặt trên bánh được gắn các phụ kiện hoạt hình trang trí làm bằng sô-cô-la trắng kết hợp màu sắc ăn được \r\n\r\n* Chú ý : phần kem tươi màu sắc để trang trí Quý khách nên gạt bỏ phần đó ra ngoài trước khi ăn để đảm bảo thẩm mỹ và hương vị tự nhiên chuẩn của bánh.', 'abbstpk05.png'),
('THE AVENGERS CAKE', 'mbbstpk06', 'malbsn07', '360000', 'Thành phần chính : \r\n\r\n- Gato, kem tươi \r\n\r\n- Bánh được làm từ 4 lớp gato trắng kết hợp với 4 lớp kem tươi, vị coffe \r\n\r\n- Phủ bên ngoài mặt bánh hoặc xung quanh chân bánh bởi 1 lớp kem tươi pha màu sắc trang trí ( kem tươi được pha với màu thực phẩm an toàn ) \r\n\r\n- Mặt trên bánh được gắn các phụ kiện hoạt hình trang trí không ăn được \r\n\r\n* Chú ý : phần kem tươi màu sắc để trang trí Quý khách nên gạt bỏ phần đó ra ngoài trước khi ăn để đảm bảo thẩm mỹ và hương vị tự nhiên chuẩn của bánh.', 'abbstpk06.png'),
('RED VELVET HEART CAKE', 'mbvt01', 'malbsn08', '360000', 'Nguyên liệu chính:\r\n\r\n- Gato\r\n\r\n- Bột mỳ đỏ\r\n\r\n- Kem tiramisu\r\n\r\nBánh làm từ 3 lớp gato đỏ xen lẫn 3 lớp kem. Bên ngoài bánh phủ 1 lớp kem tiramisu rắc bột mỳ đỏ.  ', 'abvt01.png'),
('LOTUS HEART CAKE', 'mbvt02', 'malbsn08', '360000', 'Thành phần chính:\r\n\r\n- Gato\r\n\r\n- Kem trà xanh\r\n\r\n- Dâu Tây\r\n\r\n- Socola.\r\n\r\nBánh làm từ 3 lớp gato xen giữa 3 lớp kem tươi . Bánh phủ bên ngoài bởi 1 lớp kem tươi trà xanh , phía trên được trang trí bằng hoa quả dâu tây và socola bao quanh.', 'abvt02.png'),
('CHOCOLATE HEART CAKE', 'mbvt03', 'malbsn08', '360000', 'Nguyên liệu chính:\r\n\r\n- Kem bơ (hoặc kem tươi),\r\n\r\n- Socola,\r\n\r\n- Hoa quả.\r\n\r\nBánh được làm bởi 3 lớp gato xen giữa 3 lớp kem. Phủ bên ngoài là 1 lớp socola. Hình dáng ấn tượng, hương vị ngọt ngào khiến cho chiếc bánh này rất được ưa chuộng.', 'abvt03.png'),
('HAPPY HEART CAKE', 'mbvt04', 'malbsn08', '360000', 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi phomai vị cafe,\r\n\r\n- Socola,\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem . Bên trên phủ 1 lớp kem tươi phomai vị cafe và được trang trí bằng socola đen. ', 'abvt04.png'),
('DELI HEART CAKE', 'mbvt05', 'malbsn08', '360000', 'Thành phần chính:\r\n\r\n- Gato\r\n\r\n- Kem tươi\r\n\r\n- Socola\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem. Bên trên phủ 1 lớp kem tươi phomai vị cafe và được trang trí bằng hoa quả theo mùa.', 'abvt05.png'),
('GREENTEA CAKE LOVE', 'mbvt06', 'malbsn08', '360000', 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n- bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.', 'abvt06.png'),
('BÁNH 3D DOREMON', 'mbsnbt01', 'malbsn09', 'liên hệ', '[value-5]', 'absnbt01.png'),
('BÁNH IN ẢNH', 'mbsnbt02', 'malbsn09', 'liên hệ', '[value-5]', 'absnbt02.png'),
('BÁNH IN ẢNH', 'mbsnbt03', 'malbsn09', 'liên hệ', '[value-5]', 'absnbt03.png'),
('BÁNH IN ẢNH NGƯỜI MÁY', 'mbsnbt04', 'malbsn09', 'liên hệ', '[value-5]', 'absnbt04.png'),
('BÁNH VẼ', 'mbsnbt05', 'malbsn09', 'liên hệ', '[value-5]', 'absnbt05.png'),
('BÁNH VẼ', 'mbsnbt06', 'malbsn09', 'liên hệ', '[value-5]', 'absnbt06.png'),
('BÁNH IN ẢNH', 'mbsnbg01', 'malbsn010', 'liên hệ', '[value-5]', 'absnbg01.png'),
('BÁNH IN ẢNH', 'mbsnbg02', 'malbsn010', 'liên hệ', '[value-5]', 'absnbg02.png'),
('BÁNH IN ẢNH', 'mbsnbg03', 'malbsn010', 'liên hệ', '[value-5]', 'absnbg03.png'),
('BÁNH IN ẢNH ELSA', 'mbsnbg04', 'malbsn010', 'liên hệ', '[value-5]', 'absnbg04.png'),
('BÁNH VẼ', 'mbsnbg05', 'malbsn010', 'liên hệ', '[value-5]', 'absnbg05.png'),
('BÁNH IN ẢNH ELSA & ANNA', 'mbsnbg06', 'malbsn010', 'liên hệ', '[value-5]', 'absnbg06.png'),
('BÁNH IN ẢNH', 'mbinanh01', 'malbsn011', 'liên hệ', '[value-5]', 'abinanh01.png'),
('BÁNH IN ẢNH CON VẬT', 'mbinanh02', 'malbsn011', 'liên hệ', '[value-5]', 'abinanh02.png'),
('BÁNH IN ẢNH DOREMON', 'mbinanh03', 'malbsn011', 'liên hệ', '[value-5]', 'abinanh03.png'),
('BÁNH IN ẢNH ELSA & ANNA', 'mbinanh04', 'malbsn011', 'liên hệ', '[value-5]', 'abinanh04.png'),
('BÁNH SỰ KIỆN', 'mbinanh05', 'malbsn011', 'liên hệ', '[value-5]', 'abinanh05.png'),
('BÁNH SỰ KIỆN', 'mbinanh06', 'malbsn011', 'liên hệ', '[value-5]', 'abinanh06.png'),
('BÁNH VẼ', 'mbave01', 'malbsn012', 'liên hệ', '[value-5]', 'abave01.png'),
('BÁNH VẼ', 'mbave02', 'malbsn012', 'liên hệ', '[value-5]', 'abave02.png'),
('BÁNH VẼ', 'mbave03', 'malbsn012', 'liên hệ', '[value-5]', 'abave03.png'),
('BÁNH VẼ', 'mbave04', 'malbsn012', 'liên hệ', '[value-5]', 'abave04.png'),
('BÁNH VẼ', 'mbave05', 'malbsn012', 'liên hệ', '[value-5]', 'abave05.png'),
('BÁNH VẼ', 'mbave06', 'malbsn012', 'liên hệ', '[value-5]', 'abave06.png'),
('BÁNH SỰ KIỆN', 'mbskien01', 'malbsn013', 'liên hệ', '[value-5]', 'abskien01.png'),
('BÁNH SỰ KIỆN', 'mbskien02', 'malbsn013', 'liên hệ', '[value-5]', 'abskien02.png'),
('BÁNH SỰ KIỆN', 'mbskien03', 'malbsn013', 'liên hệ', '[value-5]', 'abskien03.png'),
('BÁNH SỰ KIỆN', 'mbskien04', 'malbsn013', 'liên hệ', '[value-5]', 'abskien04.png'),
('BÁNH SỰ KIỆN', 'mbskien05', 'malbsn013', 'liên hệ', '[value-5]', 'abskien05.png'),
('BÁNH SỰ KIỆN', 'mbskien06', 'malbsn013', 'liên hệ', '[value-5]', 'abskien06.png'),
('BÁNH SỰ KIỆN SIZE LỚN', 'mbskienyc01', 'malbsn014', 'liên hệ', '[value-5]', 'abskienyc01.png'),
('BÁNH SỰ KIỆN SIZE LỚN', 'mbskienyc02', 'malbsn014', 'liên hệ', '[value-5]', 'abskienyc02.png'),
('BÁNH SỰ KIỆN SIZE LỚN', 'mbskienyc03', 'malbsn014', 'liên hệ', '[value-5]', 'abskienyc03.png'),
('BÁNH SỰ KIỆN SIZE LỚN', 'mbskienyc04', 'malbsn014', 'liên hệ', '[value-5]', 'abskienyc04.png'),
('BÁNH SỰ KIỆN SIZE LỚN', 'mbskienyc05', 'malbsn014', 'liên hệ', '[value-5]', 'abskienyc05.png'),
('BÁNH SỰ KIỆN SIZE LỚN', 'mbskienyc06', 'malbsn014', 'liên hệ', '[value-5]', 'abskienyc06.png'),
('BÁNH SỐ 1', 'mbso01', 'malbsn015', 'liên hệ', '[value-5]', 'abso01.png'),
('BÁNH SỐ 2', 'mbso02', 'malbsn015', 'liên hệ', '[value-5]', 'abso02.png'),
('BÁNH SỐ 3', 'mbso03', 'malbsn015', 'liên hệ', '[value-5]', 'abso03.png'),
('BÁNH SỐ 4', 'mbso04', 'malbsn015', 'liên hệ', '[value-5]', 'abso04.png'),
('BÁNH SỐ 8v3', 'mbso05', 'malbsn015', 'liên hệ', '[value-5]', 'abso05.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cookiesvaminicakes`
--

CREATE TABLE `cookiesvaminicakes` (
  `tenckmc` varchar(255) NOT NULL,
  `mackmc` varchar(255) NOT NULL,
  `malckmc` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `mota` mediumtext NOT NULL,
  `anhckmc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cookiesvaminicakes`
--

INSERT INTO `cookiesvaminicakes` (`tenckmc`, `mackmc`, `malckmc`, `gia`, `mota`, `anhckmc`) VALUES
('SOCOLA 6', 'mbck01', 'malckmc01', 'liên hệ', 'Socola đen, socola trắng, kem whipping, bơ, mật ong, các vị ( nước chanh leo, hương bạc hà, quả vani )', 'abck01.png'),
('SOCOLA 5', 'mbck02', 'malckmc01', 'liên hệ', 'Socola đen, socola trắng, kem whipping, bơ, mật ong, hương bạc hà.', 'abck02.png'),
('SOCOLA 5', 'mbck03', 'malckmc01', 'liên hệ', 'Socola đen, socola trắng, kem whipping, bơ, mật ong, hương  vani.', 'abck03.png'),
('PARMESAN SEAWEED COOKIES 150GR', 'mbck04', 'malckmc01', 'liên hệ', 'Bột mỳ, bơ, phomai parmesan, lá rong biển, lòng trắng trứng, đường xay.', 'abck04.png'),
('BÁNH LƯỠI MÈO', 'mbck05', 'malckmc01', 'liên hệ', 'Thành phần chính: \r\n\r\n- Bột mỳ,\r\n\r\n- Kem bơ,\r\n\r\n- Đường,\r\n\r\n- Lòng trắng trứng.', 'abck05.png'),
('COCONUT - DỪA', 'mbck06', 'malckmc01', 'liên hệ', 'Thành phần: \r\n\r\n- Đường,\r\n\r\n- Lòng trắng trứng,\r\n\r\n- Dừa nạo.', 'abck06.png'),
(' DONUT BÁNH VÒNG ĐƯỜNG - WHITE DONUTS', 'mbmc01', 'malckmc02', 'liên hệ', 'Chưa có mô tả cho sản phẩm này', 'abmc01.png'),
('BÔNG LAN TRỨNG MUỐI 65GRAM', 'mbmc02', 'malckmc02', 'liên hệ', 'Bột mỳ, đường, trứng, sữa, dầu ăn, bột ngô, trứng muối, chà bông, sốt trứng.\r\n', 'abmc02.png'),
('BÁNH CUỘN CA CAO', 'mbmc03', 'malckmc02', 'liên hệ', 'Bột mỳ, trứng, đường, sữa tươi, dầu ăn, bột sữa, kem bơ, bột ca cao.', 'abmc03.png'),
('GATO CUỘN TRÀ XANH', 'mbmc04', 'malckmc02', 'liên hệ', 'Bột mỳ, trứng, đường, sữa tươi, dầu ăn, bột sữa, kem bơ bột trà xanh.', 'abmc04.png'),
('PETIT HOA QUẢ', 'mbmc05', 'malckmc02', 'liên hệ', 'Bột mỳ, trứng, đường, sữa tươi, dầu ăn, bột sữa, kem bơ bột trà xanh.', 'abmc05.png'),
('BÁNH SUKEM - CREAM PUFFS', 'mbmc06', 'malckmc02', 'liên hệ', 'Thành phần:\r\n\r\n- Bột mỳ\r\n\r\n- Bơ\r\n\r\n- Kem\r\n\r\n- Đường\r\n\r\n- Trứng', 'abmc06.png'),
('PETIT', 'mbpet01', 'malckmc04', 'liên hệ', 'Chưa có mô tả cho sản phẩm này', 'abpet01.png'),
('PETIT', 'mbpet02', 'malckmc04', 'liên hệ', 'Chưa có mô tả cho sản phẩm này', 'abpet02.png'),
('PETIT', 'mbpet03', 'malckmc04', 'liên hệ', 'Chưa có mô tả cho sản phẩm này', 'abpet03.png'),
('PETIT', 'mbpet04', 'malckmc04', 'liên hệ', 'Chưa có mô tả cho sản phẩm này', 'abpet04.png'),
('PETIT', 'mbpet05', 'malckmc04', 'liên hệ', 'Chưa có mô tả cho sản phẩm này', 'abpet05.png'),
('PETIT', 'mbpet06', 'malckmc04', 'liên hệ', 'Chưa có mô tả cho sản phẩm này', 'abpet06.png'),
('KEM TIRANO VỊ CÀ PHÊ', 'mbicem01', 'malckmc05', 'liên hệ', 'Trứng, sữa, đường, bột sữa, cà phê nguyên chất, kem tươi whipping', 'abicem01.png'),
('KEM TIRANO VỊ CHANH LEO', 'mbicem02', 'malckmc05', 'liên hệ', 'Bột, sữa, chanh leo,  sữa tươi, đường và kem tươi whipping', 'abicem02.png'),
('KEM TIRANO VỊ DÂU', 'mbicem03', 'malckmc05', 'liên hệ', 'Bột, sữa, dâu tươi, sữa tươi, đường và kem tươi whipping', 'abicem03.png'),
('KEM TIRANO VỊ DỪA', 'mbicem04', 'malckmc05', 'liên hệ', 'Bột, sữa, kem dừa, sữa tươi, đường và kem tươi whipping.', 'abicem04.png'),
('KEM TIRANO VỊ RUM NHO', 'mbicem05', 'malckmc05', 'liên hệ', 'Trứng, sữa, đường, bột sữa, bột sữa nho khô úc và bơ acho, Rượu Rum', 'abicem05.png'),
('KEM TIRANO VỊ SOCOLA', 'mbicem06', 'malckmc05', 'liên hệ', 'Trứng, sữa, đường, bột sữa, socola, kem tươi whipping', 'abicem06.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaibanhmyvabanhman`
--

CREATE TABLE `loaibanhmyvabanhman` (
  `malbmbm` varchar(255) NOT NULL,
  `tenlbmbm` varchar(255) NOT NULL,
  `anhlbmbm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaibanhmyvabanhman`
--

INSERT INTO `loaibanhmyvabanhman` (`malbmbm`, `tenlbmbm`, `anhlbmbm`) VALUES
('malbmbm01', 'bánh mỳ', 'anhlbmbm01.png'),
('malbmbm02', 'bánh mặn', 'anhlbmbm02.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaibanhsinhnhat`
--

CREATE TABLE `loaibanhsinhnhat` (
  `malbanhsn` varchar(255) NOT NULL,
  `tenbanh` varchar(255) NOT NULL,
  `anhbanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaibanhsinhnhat`
--

INSERT INTO `loaibanhsinhnhat` (`malbanhsn`, `tenbanh`, `anhbanh`) VALUES
('malbsn01', 'gateaux kem tươi', 'albsn01.png'),
('malbsn02', 'gateaux kem bơ', 'albsn02.png'),
('malbsn03', 'bánh sinh nhật 2023', 'albsn03.png'),
('malbsn04', 'bánh mousse', 'albsn04.png'),
('malbsn05', 'gateaux mousse', 'albsn05.png'),
('malbsn06', 'gateaux mousse yogurt', 'albsn06.png'),
('malbsn07', 'bộ sưu tập bánh phụ kiện', 'albsn07.png'),
('malbsn08', 'bánh valentine', 'albsn08.png'),
('malbsn09', 'bánh sinh nhật bé trai', 'albsn09.png'),
('malbsn010', 'bánh sinh nhật bé gái', 'albsn010.png'),
('malbsn011', 'bánh in ảnh', 'albsn011.png'),
('malbsn012', 'bánh vẽ', 'albsn012.png'),
('malbsn013', 'bánh sự kiện', 'albsn013.png'),
('malbsn014', 'bánh sự kiện theo yêu cầu', 'albsn014.png'),
('malbsn015', 'bánh số', 'albsn015.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaickmc`
--

CREATE TABLE `loaickmc` (
  `malckmc` varchar(255) NOT NULL,
  `tenlckmc` varchar(255) NOT NULL,
  `anhlckmc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaickmc`
--

INSERT INTO `loaickmc` (`malckmc`, `tenlckmc`, `anhlckmc`) VALUES
('malckmc01', 'cookies', 'ackmc01.png'),
('malckmc02', 'mini cakes', 'ackmc02.png'),
('malckmc03', 'tea break', 'ackmc03.png'),
('malckmc04', 'petit', 'ackmc04.png'),
('malckmc05', 'ice cream', 'ackmc05.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ten` varchar(20) NOT NULL,
  `ho` varchar(20) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ten`, `ho`, `taikhoan`, `pass`) VALUES
('cuong', 'tran', 'admin', 'admin'),
('cuong', 'tran', 'admin1', 'admin'),
('tran', 'cuong', '123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
