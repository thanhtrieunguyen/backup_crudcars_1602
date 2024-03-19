-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 04:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_vietcar_v4`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `iddanhgia` int(10) UNSIGNED NOT NULL,
  `iduser` int(10) UNSIGNED DEFAULT NULL,
  `idxe` int(10) UNSIGNED DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55',
  `updated_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dongxe`
--

CREATE TABLE `dongxe` (
  `iddongxe` int(10) UNSIGNED NOT NULL,
  `tendongxe` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55',
  `updated_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dongxe`
--

INSERT INTO `dongxe` (`iddongxe`, `tendongxe`, `created_at`, `updated_at`) VALUES
(1, '4 chỗ (Sedan)', '2024-02-07 02:53:46', '2024-02-07 09:58:41'),
(2, '7 chỗ (SUV Gầm cao)', '2024-02-07 02:53:46', '2024-02-07 09:58:58'),
(5, '5 chỗ (CUV Gầm cao)', '2024-02-07 02:53:46', '2024-02-07 09:59:12'),
(6, '7 chỗ (MPV Gầm thấp)', '2024-02-07 02:53:46', '2024-02-07 09:59:34'),
(7, 'Bán tải', '2024-02-07 02:53:46', '2024-02-07 09:59:49'),
(8, 'Minivan', '2024-02-07 02:53:46', '2024-02-07 02:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `giaodich`
--

CREATE TABLE `giaodich` (
  `idgiaodich` int(10) UNSIGNED NOT NULL,
  `iduser` int(10) UNSIGNED NOT NULL,
  `idxe` int(10) UNSIGNED NOT NULL,
  `phidv` varchar(255) DEFAULT NULL,
  `tongtien` varchar(255) NOT NULL,
  `tinhtranggiaodich` tinyint(1) DEFAULT 0,
  `ngaynhanxe` date NOT NULL,
  `ngaytraxe` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hangxe`
--

CREATE TABLE `hangxe` (
  `idhangxe` int(10) UNSIGNED NOT NULL,
  `tenhangxe` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55',
  `updated_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hangxe`
--

INSERT INTO `hangxe` (`idhangxe`, `tenhangxe`, `created_at`, `updated_at`) VALUES
(1, 'Audi', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(2, 'BMW', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(3, 'Chevrolet', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(4, 'Ford', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(5, 'Kia', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(6, 'Mazda', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(7, 'Mercedes', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(8, 'Mitsubishi', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(9, 'Toyota', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(10, 'Honda', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(11, 'Hyundai', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(12, 'Bentley', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(13, 'Lexus', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(14, 'Nissan', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(15, 'Porsche', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(16, 'Renault', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(17, 'Daewoo', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(18, 'Volkswagen', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(19, 'Suzuki', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(20, 'Luxgen', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(22, 'UAZ', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(23, 'Zotye', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(24, 'Isuzu', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(25, 'Peugeot', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(26, 'SsangYong', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(27, 'Baic', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(29, 'Vinfast', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(30, 'Fiat', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(31, 'Haima', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(32, 'Subaru', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(33, 'Riich', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(34, 'Jaguar', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(35, 'Buick', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(37, 'Geely', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(39, 'Morris Garages', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(40, 'Dongfeng', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(41, 'Daihatsu', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(42, 'Tobe', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(43, 'Land Rover', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(44, 'Brilliance', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(45, 'Volvo', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(46, 'Kenbo', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(47, 'Samsung', '2024-02-07 02:53:46', '2024-02-07 02:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `hinhxe`
--

CREATE TABLE `hinhxe` (
  `idhinhxe` int(10) UNSIGNED NOT NULL,
  `hinhxe` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55',
  `updated_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinhxe`
--

INSERT INTO `hinhxe` (`idhinhxe`, `hinhxe`, `created_at`, `updated_at`) VALUES
(1, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2024/00/02/14/kusG3y-zdGaldnyXvosXqw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2024/00/02/14/azeBACq22kU0jlV1U5n4Gg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2024/00/02/14/NFR6SsgL5RTkjJU8GGVLSQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2024/00/02/14/Pwrp6KxRvGZ08k5rLA6wHw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(2, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_veloz_cross_2022/p/g/2022/05/01/08/sHHCN5pVn0VFzTqfld6xKw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_veloz_cross_2022/p/g/2022/05/01/08/mv5AEM_MMCSSwhk_QfdBAw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_veloz_cross_2022/p/g/2022/05/01/08/xYdfm78JKxLjhMoyJE0mfw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_veloz_cross_2022/p/g/2022/05/01/08/7zPe_hHomjRYLaeCiEy60Q.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(3, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2022/01/10/08/GnSe5I7fxDjknlQwLa1q5A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2022/01/22/11/VtYgkEKdL6fLj-cWdf7P7Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2022/01/22/12/Qmmo4B_hpEAAhHiUUbSctw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2022/01/10/08/kWj-GgCY2tnKK1j8OyhZ1w.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(4, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/02/07/22/BdqrR-YDOvH0ktmysw9SxQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/02/07/22/az8osvQQhKMVihKID2sJUw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/04/20/07/u_OHOuUfhHHFzubLt-VfBQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/02/07/22/rKEPHvm7so2jZChjwRA4wA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(5, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/bmw_320i__2013/p/g/2023/02/24/16/FNoU4l7040O_BAPVzBAPEw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/bmw_320i__2013/p/g/2023/02/24/16/O-m7yef1dmvsYgorG3dpmA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/bmw_320i__2013/p/g/2023/02/24/16/IZK1xCtN5AvagRSuaq64kg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/bmw_320i__2013/p/g/2023/02/24/16/4bBclsR0qNgp3ZoQRbmUBg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(6, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_innova_2018/p/g/2021/07/15/20/L0lu_Vrtl_Os_Xq1IHdzsQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_innova_2018/p/g/2021/03/22/15/sA7kHit4EBr6-7M2VlAoqg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_innova_2018/p/g/2021/03/22/15/kzJN8lewcFLkj0UiIEbwNQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_innova_2018/p/g/2021/03/22/15/A22oCm6cGOdqb6K8EoC4ew.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(9, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_k3_premium_2022/p/g/2022/11/28/09/GNdSjrWKqin5dR0FfTnARQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_k3_premium_2022/p/g/2022/11/22/09/GatIWBFNF9E4cqkyUajJdg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_k3_premium_2022/p/g/2022/11/22/09/gAvoiZ_ICLB0h_0h5kMWmg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_k3_premium_2022/p/g/2022/11/28/09/kdIK2xohPahZj1Zxz02G0A.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(10, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mercedes_c250_2013/p/g/2021/03/05/12/2W7y65F6yH7Es_7g1xH0iQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mercedes_c250_2013/p/g/2021/03/05/12/GMZV0yUlKOLzrAYQQZx1xw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mercedes_c250_2013/p/g/2021/03/05/12/hR0udFBS8EZlM_HkK-Hu2Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mercedes_c250_2013/p/g/2021/03/05/12/gILrNOI9Xl-2WzfMGZZwzQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(11, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2023/03/14/13/iMTUoVD7PlFz6B3u1hdOSA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2023/03/14/13/2sYPjcL1XjuoqrSnWPTDwA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2023/03/14/13/VjTuBnMPrGSayrC2RXgr6w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2023/03/14/13/Lgh3FQ1J0H8t9YvwhtgZAg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(12, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carnival_premium_2021/p/g/2022/09/28/17/tOBkEC4s1wdT4TdiBGi2uw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carnival_premium_2021/p/g/2022/09/28/17/OgMDDgMgFYI_H6JY78LPQA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carnival_premium_2021/p/g/2022/09/28/17/bqTQK1oRWR3F77joCW9gnA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carnival_premium_2021/p/g/2022/09/28/17/Ffhs2oTUk65aEUUhD65_6A.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(14, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2024/00/22/20/YYf1K_289A0pOfbUe-TJyw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2024/00/22/20/y5L_JLg9644RsqP_Y9cqUA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2024/00/22/20/kggzq0gZTPzk7ObCMlYpPw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2021/p/g/2024/00/22/20/j5EV6xola3NSKRfSTJ9tSg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(16, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_creta_2023/p/g/2023/01/17/10/i37vRVsDmq-Yb9lI9exX-w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_creta_2023/p/g/2023/01/16/18/J3yJOu_eK5DNnKCIA6s38Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_creta_2023/p/g/2023/01/16/18/HPXNiYNqB9QH42Mt9bZTcw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_creta_2023/p/g/2023/01/17/10/IXI0sR4TY0mmfeYMKBFyZA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(17, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carens_2023/p/g/2023/04/21/09/c53b-I_wleEpm_VmnW6Acw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carens_2023/p/g/2023/04/21/09/5RUHtlUrBWcuOBzMiCcUFw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carens_2023/p/g/2023/04/21/09/2z68LvL92ko6VfN0UVlG4w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carens_2023/p/g/2023/04/21/09/Od4DLSkPq7k1UbpoZ7j2jA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(18, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/land_rover_range_rover_evoque_2.0_s_r-dynamic_s_2012/p/g/2023/06/25/11/gopMQobykpA8ddOhouTczQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/land_rover_range_rover_evoque_2.0_s_r-dynamic_s_2012/p/g/2023/06/25/11/AqFIOKh1bxxEG6P6zoW98g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/land_rover_range_rover_evoque_2.0_s_r-dynamic_s_2012/p/g/2023/06/25/11/hss9PO3ITG4kpPi6Vr51hA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/land_rover_range_rover_evoque_2.0_s_r-dynamic_s_2012/p/g/2023/06/25/11/mQlRHoU18VozwzObJpLEcQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(19, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_outlander_2021/p/g/2023/05/02/08/bOnKxCshei5-HCp6HRFGGQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_outlander_2021/p/g/2023/05/02/08/tyM46esaEP1OdkFzhQD_uQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_outlander_2021/p/g/2023/05/02/08/tusmEWLvpWNRM86buINnOg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_outlander_2021/p/g/2023/05/02/08/FBFubzYLK-ooK5h9QqcL9g.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(20, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf_e34_2023/p/g/2023/04/26/22/8Cp1LY_OUMRBJDGwSpgbEg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf_e34_2023/p/g/2023/04/26/22/7dh_IMuTWj4CF4CuNYaU2Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf_e34_2023/p/g/2023/04/26/22/7ngmMoTtw69AyGxh18hYhQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf_e34_2023/p/g/2023/04/26/22/U8IFAZvtsdX1WxNgLRmlLg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(21, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_seltos_premium_2021/p/g/2023/05/28/12/943cjQWBiIqwmbrmCGTqbg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_seltos_premium_2021/p/g/2023/05/28/12/PeDAJkCsTMjI8U3pAxsZhw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_seltos_premium_2021/p/g/2023/05/28/12/NYQHMQ8wmE72H32WoMyb6g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_seltos_premium_2021/p/g/2023/05/28/12/_xEHrdOBm_Xr7823SRHovg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(22, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2021/p/g/2021/04/04/09/Jug09nP6UvnVLWgg6T5QOQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2021/p/g/2021/04/04/09/J2BGS2YWdTC3A0fMsdnCvA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2021/p/g/2021/04/04/09/1XTJqvIJoO7IxnphSZOqDA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2021/p/g/2021/04/04/09/u50vHg--90n39DgA7H_Ztg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(23, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_a_2021/p/g/2022/05/14/10/3lj92ED2_VD_ImozwlrOSw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_a_2021/p/g/2022/05/14/10/ys1X49Ddpl2V0vvUI1k1LA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_a_2021/p/g/2022/05/14/10/4NUqDtDiLvKQVkQ5gWSPLA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_a_2021/p/g/2022/05/14/10/rU68JDxKhSmXQNG_gND1Eg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(25, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2023/p/g/2023/05/19/11/JAobTGUcLcEYsAnEEiVaHg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2023/p/g/2023/05/28/14/IQXVO9EnZ94jArCRvoDsVw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2023/p/g/2023/05/28/14/HwgjfZk3ydRgi9pSxBmmow.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2023/p/g/2023/05/19/13/ZVXnpEX3XBCAX8M5UIeosg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(26, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sedona_deluxe_2021/p/g/2021/04/03/14/iQSfe3kudl8Hm3OtNeF9GA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sedona_deluxe_2021/p/g/2021/04/03/14/iYSURmgNiwBI1OvRpDN6ig.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sedona_deluxe_2021/p/g/2021/04/03/14/t7-Q_bzIPiY12H1bbqcbfw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sedona_deluxe_2021/p/g/2021/04/03/14/ojElCEaKEsgKUoMW8fk0QQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(27, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_sa__2021/p/g/2022/07/30/18/VvAmSHA0Un1pD-P8M4It1A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_sa__2021/p/g/2022/07/30/18/2qm_7xofJRFxokrIpjuA-A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_sa__2021/p/g/2022/07/30/18/asKwzVcNNEn8dsYrNLk--Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_sa__2021/p/g/2022/07/30/18/fie9zC3kdpTzU9GCh4v6tQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(28, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/11/07/15/sytuvekdFL2QNKiCczbgNA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/11/07/15/JmRhs7qX4aq7qPBs8bIs2g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/11/07/15/XlgAYEdrWAxUBq0jcSBQ0g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/11/07/15/Ly1JiTGvF8NvkOJYdlAYCQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(29, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2020/p/g/2022/04/18/09/wDXYGC-q-ARUxp430W4Kvg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2020/p/g/2022/04/18/09/ArnpEwcrj2RuU6qqj6qz0A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2020/p/g/2022/04/18/09/MbGl53Eg80bLwyNDONrgRw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2020/p/g/2022/04/18/09/zIggcic6S_fkUkAaihbr7A.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(30, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_pajero_sport_2017/p/g/2023/04/30/11/Q3hKd--rx1lPvHeyWoaeTQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_pajero_sport_2017/p/g/2020/10/22/14/yzdgO-CV9QRS7CR4gvvoUw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_pajero_sport_2017/p/g/2023/10/19/19/yk-iVQdcEEQuldUh2TfhKQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_pajero_sport_2017/p/g/2023/04/30/11/t7PhGKYvGOgjxZE6nJH2nA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(31, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_vivant_2011/p/g/2023/03/20/12/-HldaFSy1z3CasWSFD7nuA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_vivant_2011/p/g/2023/03/20/12/VRSt60wcrM_J7aSLJB4N1Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_vivant_2011/p/g/2023/03/20/12/DDDqhwdzqIXjlkQvrJfwgg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_vivant_2011/p/g/2023/03/20/12/oP4-O9be5xNfZUsn5_RTpg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(33, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sonet_premium_2022/p/g/2024/00/19/10/F2YWZwp-j4rdnBx46idsKw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sonet_premium_2022/p/g/2024/00/19/10/c-poCseQ0224QpcDAt36NA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sonet_premium_2022/p/g/2024/00/19/10/DY3qU6Ln_e2PsEd68m39jg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sonet_premium_2022/p/g/2024/00/19/10/e5nR33noA24N7oUf7vgmsw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(34, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_xls_4x2_2018/p/g/2023/01/13/14/d4q9Gk3pc_qIyzZm38mO1Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_xls_4x2_2018/p/g/2023/01/13/14/ygrwQxJjA5B5h2C-N8k35g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_xls_4x2_2018/p/g/2023/01/13/14/zuuLbDGS1WBnnVTOrUfJXw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_xls_4x2_2018/p/g/2023/01/13/14/mQBmqT2tZI0eCBMS0AmFdw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(37, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_santafe_2013/p/g/2021/01/18/14/mPJmnBMEenTMwmirbEdiFw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_santafe_2013/p/g/2021/01/18/14/RHBEJ-XRDiGVDUd351INCg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_santafe_2013/p/g/2021/01/18/11/ABbhMucPC8nR8Ws58eYvDA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_santafe_2013/p/g/2021/01/18/14/m17mjwDPZoJz_lD6Ko2heA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(38, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2019/p/g/2024/00/14/11/mM_4y5hzpIr0F08-BRBcyA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2019/p/g/2024/00/14/11/nmEcInt2es-8MqSbK8-JCQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2019/p/g/2024/00/14/11/v7gueiS1sEPYYMZDGyJvcQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2019/p/g/2024/00/14/11/ZzcOSGsmCm7WI_JYvFM-4g.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(39, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_cx30_luxury_2022/p/g/2023/06/17/21/pSnlO0oGbEldGh5QrhOD7g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_cx30_luxury_2022/p/g/2023/06/17/21/UuX-BCvXMdGc5Y_o3EDcoA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_cx30_luxury_2022/p/g/2023/06/17/21/aMm6_hHnRQZ2RqImUKZMag.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_cx30_luxury_2022/p/g/2023/06/17/21/ZPZJcObC9oVdXyOhbgkWBQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(40, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2021/p/g/2022/10/06/22/BARWcHFQ0pG4r-Lq_OouTA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2021/p/g/2022/10/06/22/0fxWxRm4wJXCL6CnySV6aA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2021/p/g/2022/10/06/22/RbWIrNnjb14vk4MCp2ru-w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2021/p/g/2022/10/06/22/bzsADaK6ykbunyY5xdIVCA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(41, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/subaru_forester_2.0i-s_eyesight_2021/p/g/2023/11/25/13/rDvjS95AoS3biFfCjnySuw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/subaru_forester_2.0i-s_eyesight_2021/p/g/2023/11/25/13/xFblreOqIhnxkYsrXnWNWQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/subaru_forester_2.0i-s_eyesight_2021/p/g/2023/11/25/13/epPqeLy3I0q8SaJhIKvubw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/subaru_forester_2.0i-s_eyesight_2021/p/g/2023/11/25/13/4qyiU44MFb-mpB-xVJF1SQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(42, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2023/p/g/2023/05/23/03/CpVWg5-rHPIoL_WWX4Gfpw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2023/p/g/2023/05/23/03/ret5yfZzFsAXM9w7NIbglg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2023/p/g/2023/05/23/03/ZZa_Mm4ChHWAiKsThQB8HA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2023/p/g/2023/05/23/03/ZTudgOzQCB7dU6_vKKD1kw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(43, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_crv_g_2021/p/g/2023/07/23/20/UicL9R81maS477XRfQy6nA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_crv_g_2021/p/g/2023/07/23/20/WzLQvCIhgNQzmpnYII6NIA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_crv_g_2021/p/g/2023/07/23/20/HoMIYtGYSJzRevPNcNQHuQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_crv_g_2021/p/g/2023/07/23/20/TJu_1GD-h6l6q9zVzGJlTA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(44, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2020/p/g/2023/02/09/09/dogCXIe2AYkZiuVzq1jWNQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2020/p/g/2023/02/09/09/igk-Zrd_zer-jM46ESIedw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2020/p/g/2023/02/09/09/oUC-2Q-adVAdIIYdkX5g1A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2020/p/g/2023/02/09/09/9OFvx1gBbP0qmE-KKQAS2g.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(45, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2019/p/g/2021/09/18/10/uaT4L4-iHg50uap-yZv1zQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2019/p/g/2021/09/18/10/LIzLdgCJb7sDLhYS43aIZw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2019/p/g/2021/09/18/10/xOVSHbPnf1q3D_cn8hE3fQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2019/p/g/2021/09/18/10/2VxPNP0qP5bSRQkSR5ehOA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(47, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2015/p/g/2024/00/26/16/nG3eGWmiN_UzEbT3-wBcyQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2015/p/g/2024/00/26/16/nJDYaE34VP_f7mGuuaVX2A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2015/p/g/2024/00/26/16/H5zgCUOv1OCcbJZSP-PtmQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2015/p/g/2024/00/26/16/AXUCO69fp-EgbQNp6KDcrQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(49, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2019/10/11/00/JboPCEEobnoUZ3ubIP86tA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2019/10/11/14/Ti6tcEINbD2OjDzSwoQBDg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2020/06/15/23/PTRl-nHYfk0gf3ulODEryA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2020/06/15/23/bVHJZe12p8PVAmnw-uWCyg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(50, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_x_trail_2018/p/g/2022/09/27/21/0BQu-lg5OoLrnqkq8d9AiA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_x_trail_2018/p/g/2022/09/27/21/NFFpUq-MfFH0nNcMPp9qsA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_x_trail_2018/p/g/2022/09/27/21/PFKDRkZz0nBEfFhyJp78TQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_x_trail_2018/p/g/2022/09/27/21/zoKpXkvQsQouQyH3Ga2ekQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(51, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sonet_premium_2022/p/g/2023/01/17/12/5_C2bmuJqCyu3JQVHcC3iA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sonet_premium_2022/p/g/2023/05/16/09/Gy08U-Q5heHHGUy80Wt4_g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sonet_premium_2022/p/g/2023/05/16/09/yle9NHKEETpXKOHPxt7uiQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_sonet_premium_2022/p/g/2023/05/16/09/qfUBgHportVAf0MtKegJIA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(52, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2023/p/g/2023/04/03/13/7v-OMy4Cb7Tw_H6dK55grA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2023/p/g/2023/04/03/13/7v-OMy4Cb7Tw_H6dK55grA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(53, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_almera_vl_2022/p/g/2023/07/31/10/rPwzUyKlBakbx-Vqa6D0GA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_almera_vl_2022/p/g/2023/07/31/10/oW3qiSXbAM0vwvdqoY7W-g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_almera_vl_2022/p/g/2023/07/31/10/yHof_-ZuRCJaEon8c5RVRg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_almera_vl_2022/p/g/2023/07/31/10/jEO-CRiyR_5PCqi8uH8kVQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(54, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2024/00/25/21/prT7x4iy8-vlrQzyumo4jQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2024/00/25/21/xsRCoINsx9WV2Mk5wti_pA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2024/00/25/21/ql3i69xmecQzSzZsGHKmjQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2024/00/25/21/lcU9Jw7_NMqQZd1lIb47mw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(55, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2018/p/g/2023/05/06/16/_c8eHiBFsJskQErYZm3JXg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2018/p/g/2023/05/06/17/UkUTlLDyfdrjg6lB5Hn92g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2018/p/g/2023/05/06/17/FYhia48WEYDaiODzemjo8g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2018/p/g/2023/05/06/17/oTwZRwu23Ywvg0rz0rGoww.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(56, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_luxury_2023/p/g/2023/11/22/19/C2PugZYEvfeVFgloLntBfQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_luxury_2023/p/g/2023/11/22/19/8WuDgyC7BF652qPZKLl9Yg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_luxury_2023/p/g/2023/11/22/19/DYUCOKr8spQJbx2U0JTl4Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_luxury_2023/p/g/2023/11/22/19/9SDKtXB9RA3IskMkvMEyOw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(57, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_pajero_sport_2021/p/g/2024/00/27/21/6Fn6ayP8psINipGpi5h_mQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_pajero_sport_2021/p/g/2024/00/27/21/JKYCuPE1YRT5bD7tWVFyhw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_pajero_sport_2021/p/g/2024/00/27/21/TRKDf-ZbZSPGF0nDwrn0uA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_pajero_sport_2021/p/g/2024/00/27/21/TRKDf-ZbZSPGF0nDwrn0uA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(58, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2020/p/g/2024/00/24/11/VBduqZti7cFrFFTiYiFwOw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2020/p/g/2024/00/24/11/ZMpl8JNaMUyKUwpVTdAsbA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2020/p/g/2024/00/24/11/AfR0gpYNEiR_2lMqYaQdjw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2020/p/g/2024/00/24/11/8t0Q1x9T3PLXpwqxlrIfbw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(59, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_wildtrak_4x4_2019/p/g/2024/00/27/22/0xs8cOQcrqwDjGkIZDdrtA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_wildtrak_4x4_2019/p/g/2024/00/27/22/eBBmOUqXhhrfpJBqr4OT8A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_wildtrak_4x4_2019/p/g/2024/00/27/22/MjH_o9QsosV8suRzvBf4_w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_wildtrak_4x4_2019/p/g/2024/00/27/22/ZUN2E52BZKgORYf-4kRfEA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(60, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_focus_2018/p/g/2021/01/27/06/1R__bh_KT7inu_e_cwavbw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_focus_2018/p/g/2021/01/26/15/8pVIpYF3L0D8eC7UXLYeCA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_focus_2018/p/g/2021/02/17/11/ikXO0i6v82GrwUNY0vyfRA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_focus_2018/p/g/2021/02/17/11/vyQqgYyil5agl-vpHdZbvQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(61, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_celerio_2019/p/g/2021/00/11/16/s4SumzrKWg7NID9Jg1d7uQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_celerio_2019/p/g/2021/00/11/16/EThvBHwieoZei-6N6B1cXQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_celerio_2019/p/g/2021/00/11/16/hPtZG0wgH9ky1XsECa1ZVA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_celerio_2019/p/g/2021/00/11/16/3Iubt7ggSC2DjjE2zR0xug.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(62, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_cruze_2015/p/g/2024/00/15/18/m6FfBnfbGCs7v1R_K4DTRg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_cruze_2015/p/g/2024/00/15/18/nR_Sckm65FhPJRkYoNT5NA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_cruze_2015/p/g/2024/00/15/18/HYrq35GWj2Ce04_jHlE4pA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_cruze_2015/p/g/2024/00/15/18/vP4mh-2pYjAf0wKvhyHbUA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(63, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2023/p/g/2023/08/08/14/PdTjozjgrcJYsEdWH8JzHw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2023/p/g/2023/08/08/14/96KeBKWIDTowbGnKLKpVXQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2023/p/g/2023/08/08/14/VxhUE9ktuV_BzDn2d_71gg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2023/p/g/2023/08/08/14/YMuFtfi7kOka9HXYMBI8qg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(65, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/bmw_320i__2016/p/g/2022/08/26/17/ayGcbJDKXFc74RyOKLkslQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/bmw_320i__2016/p/g/2022/08/26/17/lCj4IHIVkU2gCIOosmmDfw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/bmw_320i__2016/p/g/2022/08/26/17/_Ncj1j1zOaJPlookgn1fXA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/bmw_320i__2016/p/g/2022/08/26/17/0V0-yaxK9WPQGTpsWiygUg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(66, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_premium_2022/p/g/2022/10/28/19/yyXo06KhiwQGMR3nRF6sjA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_premium_2022/p/g/2022/10/28/19/Yw4HCd08Rs_D1hhFnLvmEw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_premium_2022/p/g/2022/10/28/19/tdpB3QaAG9jsD5XI4oPA3g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_premium_2022/p/g/2022/10/28/19/7EQ6JES4RiXzFrG-xxcLfQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(67, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/hyundai_elantra_2020/p/g/2023/11/25/16/I-A0Jl4r-3_abADwgBBBAg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/hyundai_elantra_2020/p/g/2023/11/25/16/tUcvy7GjQHdMTqeh6LN3qw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/hyundai_elantra_2020/p/g/2023/11/25/16/Gzqj40DzktRCruaKRv3eug.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/hyundai_elantra_2020/p/g/2023/11/25/16/ANcjHs7Jg4Lf5hby4HAAZQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(68, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_cruze_2018/p/g/2023/07/29/13/JwljbftRbS-xAXDe9RZZ9Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_cruze_2018/p/g/2023/07/29/13/v6RHlDHOb0FVkxRZNP6fVA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_cruze_2018/p/g/2023/07/29/13/pNOZ6Ax6hDwBJaADWEgj2A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_cruze_2018/p/g/2023/07/29/13/pNOZ6Ax6hDwBJaADWEgj2A.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(69, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2022/p/g/2023/06/17/17/T8w8cGgBFNBH1XyV6Mn16A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2022/p/g/2023/06/17/17/EFfcsx7SpKCbw5jKOKgUMw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2022/p/g/2023/06/17/17/PInKzFj1ZpsMujUewrGJDw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2022/p/g/2023/06/18/09/NWMmcH2NzvaAd8ErRGbYkQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(70, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_elantra_2019/p/g/2022/09/15/12/TA7iagNTTEQ2pfujsMHkMg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_elantra_2019/p/g/2022/09/15/12/VUEXJ7yIA2qVf07hPt9nFQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_elantra_2019/p/g/2022/09/15/12/U7WokLTCLhpFrRVTyeJEqg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_elantra_2019/p/g/2022/09/15/15/nVS7aDUdjM6q5mIih0XSBQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(72, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_spark_2016/p/g/2023/07/14/16/d7H6UQ0C9xqe41KkJPj65w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_spark_2016/p/g/2023/08/10/10/PdlVV96Cv1A0YX_gG9B1Mw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_spark_2016/p/g/2023/08/10/10/kV7NhrfqvDxlMVIES6FwqQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_spark_2016/p/g/2023/08/10/10/B8A215_7jzHufikI1WWo9A.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(73, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_colorado_2017/p/g/2023/10/29/10/sU1UKtqQqznA-z9Nd5x0aA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_colorado_2017/p/g/2023/10/29/10/TmGM9etYj9C5ajulCAX0Rg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_colorado_2017/p/g/2023/10/29/10/KIftErhB5hb0iTbsBTS5GA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/chevrolet_colorado_2017/p/g/2023/10/29/10/mLM4-OeSrDHurhgxhGNwmA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(74, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_seltos_luxury_2020/p/g/2022/10/26/13/58pVnxT-5WhC1Ay1PNeOMA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_seltos_luxury_2020/p/g/2022/10/26/13/CJoAugF1nmDYPqvqlnpKkg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_seltos_luxury_2020/p/g/2022/10/26/13/OAEj547fpiF93vZMTrMNug.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_seltos_luxury_2020/p/g/2022/10/26/13/Mk38D0VfxjvA8QVqborXfA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(77, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_sa__2020/p/g/2023/11/28/17/Wda8w8umn8SnyacCicHeRA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_sa__2020/p/g/2023/11/28/17/Hb5twYAgpkR-jl5KCZKDpA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_sa__2020/p/g/2023/11/28/17/FaYM8wymHW3nuBWBRdTYDA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_sa__2020/p/g/2023/11/28/17/ndIANBXwg6r2Ag-ASHwj8w.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(78, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/isuzu_mux_b7_2023/p/g/2024/00/19/13/Fxj8KmmTFTeNkyC-7xqK0A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/isuzu_mux_b7_2023/p/g/2024/00/18/19/Tsj3b6kRq0z7kePiYcXMJQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/isuzu_mux_b7_2023/p/g/2024/00/19/13/uX0103ew2w-pPI4IoCKZPw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/isuzu_mux_b7_2023/p/g/2024/00/18/19/oya2Ah3sQjCmshlX_OZBlQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(79, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_territory_trend_2022/p/g/2023/02/07/13/xzpU0N5I6uahkcPXjETYvw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_territory_trend_2022/p/g/2023/02/07/13/K-DYd1VPFzCsiBqUUhtbCg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_territory_trend_2022/p/g/2023/02/07/13/xj_cWqJo3gRbO-85a3KUsw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_territory_trend_2022/p/g/2023/02/07/13/Q_duE-DKcspKCR-SXv4I4g.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(80, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2023/p/g/2023/11/14/17/UAukkM3d2sbzF0EVdD9nlw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2023/p/g/2023/11/14/17/B5V1NIp5qbSik79YxnAzkQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2023/p/g/2023/11/14/17/MEyGNmfi2uGgp-76R7X64g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2023/p/g/2023/11/14/17/mQtHLLKFo0HU9adc4pj-2w.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(81, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_brio_2019/p/g/2023/09/07/10/ESE-2pZJ5USICOPbU-zF2g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_brio_2019/p/g/2023/09/09/14/FF0THzXFFg-UP4j5oINxsg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_brio_2019/p/g/2023/09/09/14/FF0THzXFFg-UP4j5oINxsg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(82, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/chevrolet_captiva_2010/p/g/2022/05/30/13/wahqmlBLE0DY8cNhZ3E_Ag.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/chevrolet_captiva_2010/p/g/2022/05/30/13/FOpvx13zdmL7Zdi7_8Nvcg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/chevrolet_captiva_2010/p/g/2022/05/30/13/6-oV2MRprn_FhVA6Rr1Vhw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/chevrolet_captiva_2010/p/g/2022/07/02/11/PYgdYi9TOBAdZLG1E4tKrA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(83, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_stargazer_2022/p/g/2023/09/06/10/_Kas214iWqMZ87eArVl6Lg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_stargazer_2022/p/g/2023/09/06/10/5mOlBBgvn9Xau1ikf7Rc-w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_stargazer_2022/p/g/2023/09/06/10/nTFs_WYvpZ8qovSY1mAP3Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_stargazer_2022/p/g/2023/09/06/10/8vHMCP5S4CJ8gbxIYwmPsw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(84, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/toyota_avanza_2022/p/g/2023/04/27/09/uq0RjuOBdYI1UVcz0fJ4gQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/toyota_avanza_2022/p/g/2023/04/27/09/Zv-bYCkulpxt29mqZutZgA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/toyota_avanza_2022/p/g/2023/04/27/09/KvSjLn09wTeljOj52w8iqg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/toyota_avanza_2022/p/g/2023/04/27/07/9KkY-2HEU65RQ2T619n1eQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(85, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2019/p/g/2019/09/01/19/WkoycCLgIqtwfMDjsk__jg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2019/p/g/2019/09/01/19/BoDKc4IFgZL73JaWQaE7lQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2019/p/g/2019/09/01/19/IlNvUj5GY0ijez9LXRcb7Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2019/p/g/2019/08/24/14/E7U8PW23G3ATqmINMPVlxA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(86, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_navara_4x4_2016/p/g/2021/06/01/17/GZyCZbVd2EVgid9icPFfYw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_navara_4x4_2016/p/g/2021/06/01/17/VjSO9oxglhn6L2ikgk0a0g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_navara_4x4_2016/p/g/2021/06/01/17/mJhOOkScZRC_4ZKdClG5xg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_navara_4x4_2016/p/g/2021/07/21/20/NEkpotvPWivjd62t330efg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(87, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2022/p/g/2023/01/28/13/gbkVfM2HSpPtxBqPXNfKBw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2022/p/g/2023/01/27/08/JXqQDSvn8CaieSba-VaeTQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2022/p/g/2023/01/28/13/aFqoNiAtgP2jFqGdYyHvDw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2022/p/g/2023/01/28/13/wyYNBPLpkvTwgxnCz1nPmg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(88, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_rio_2015/p/g/2023/06/04/11/2HiDCqmBbBmS-yMCd0zGHA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_rio_2015/p/g/2023/06/03/05/Ydn0PTwuTMqlK8U4DSfZyw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_rio_2015/p/g/2023/07/11/12/NSlw91d3HP9UBNTj3CqFFg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_rio_2015/p/g/2023/06/04/11/xV-FabU2BfUWuqoxTMFM_w.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(89, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2023/02/14/12/Se8mfz2WiUyO-fRluFopiA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2023/02/14/12/wqlN5C8IY1vADnlb3leVvg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2023/02/14/12/j1rN63DFk-1B7mIA6ckOBA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2019/p/g/2023/02/14/12/8PWNHxCbTloQq2O67j3zKg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(91, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2016/p/g/2023/09/03/15/zN6Tfq-Zg9yDeFTH443h9g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2016/p/g/2023/09/03/15/ofyr3nsHm2wQtVK32g1vnw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2016/p/g/2023/09/03/15/fV8f0_bjHesof7lxwR96ew.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2016/p/g/2023/09/03/15/pN6H7T05CqgDzHIZmdz54w.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(92, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_outlander_premium_2022/p/g/2023/06/30/23/2AjFkU91v63mKXkDTrn0AA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_outlander_premium_2022/p/g/2023/06/30/23/lvADB5r5AuLnMblZI6vnjg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_outlander_premium_2022/p/g/2023/06/30/23/8KjLlo3u_CyY5ZRCv1of3g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_outlander_premium_2022/p/g/2023/06/30/23/Ra6q38ItkZo2NvGbqikFvw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(93, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_morning_2009/p/g/2022/08/19/20/fQ92hMXw14SQuoRfL158Ug.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_morning_2009/p/g/2022/08/19/20/21kd1oM2hs1fcoRc72nqBg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_morning_2009/p/g/2022/08/19/20/gv5f1_nRTH-2PgP5ZdqbVQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_morning_2009/p/g/2022/08/19/20/bfOKlxyLypukMWsuNXafbg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46');
INSERT INTO `hinhxe` (`idhinhxe`, `hinhxe`, `created_at`, `updated_at`) VALUES
(94, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf_e34_2022/p/g/2023/06/22/14/8SSto1Q40gn1u_ORwkNYTg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf_e34_2022/p/g/2023/07/17/14/UHHQ6pft6WC0D1eUrHwFyw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf_e34_2022/p/g/2023/07/17/14/Wyqd32AaGDcmE9Bn6l-O4Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf_e34_2022/p/g/2023/07/17/14/Ga4ebrgNrPt-gw0hfobo_g.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(95, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_i10_sedan_2019/p/g/2022/02/20/11/d0yHDgFDAqDoKIYQFmL4zg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_i10_sedan_2019/p/g/2022/02/20/11/hkHX7k0TqMhLwTukSfWgNA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_i10_sedan_2019/p/g/2022/02/20/11/PofFr_cYxgfP6QWmdASxNg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_i10_sedan_2019/p/g/2022/02/20/11/c0MxGrhibG5qnAcA5SbiDg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(96, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2022/p/g/2022/08/07/18/_KUu9LJnP0AkrHYrceK_Uw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2022/p/g/2022/08/07/18/ksgomLduOylTxaPnrWAByw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2022/p/g/2022/08/08/18/1RFqjYZeGZmIhud8yyYFrg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2022/p/g/2022/07/26/04/P1MNF3n3zaMc4ymjrb_xRA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(97, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/mitsubishi_xpander_2022/p/g/2022/07/22/07/owhZAnd69_9SDNVLcpfhgQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/mitsubishi_xpander_2022/p/g/2022/07/22/07/8NfyFo0Zoi7FRvl97YZnig.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/mitsubishi_xpander_2022/p/g/2022/07/22/07/jqOim0WR6nSk9nmjXnPsnQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/mitsubishi_xpander_2022/p/g/2022/07/22/07/JPtzDgEp_gIf7rvMnSd_VA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(98, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2016/p/g/2024/01/06/13/VAFfmsi8p65D64CyVEc8YQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2016/p/g/2024/01/06/13/PWzRDsVFdgJ31H53zgR7VA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2016/p/g/2024/01/06/13/c8pFI6v1zVgJVCQF6uUhDg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ertiga_2016/p/g/2024/01/06/13/qzmP7SEwJWktnGbDCKj8WA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(99, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carnival_premium_2021/p/g/2023/03/14/11/un2u0qXwJqxY6xtAheoQHw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carnival_premium_2021/p/g/2023/03/14/11/M_u7emI8nTlODQSeI4wjAQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carnival_premium_2021/p/g/2023/03/14/11/OovMBaNed5aGAq3-FsMyfQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_carnival_premium_2021/p/g/2023/03/14/11/3moIY2t_y44memXwhmpLhA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(100, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_raize_2022/p/g/2023/07/02/14/ActQvI1LYlagPzf0lItZSQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_raize_2022/p/g/2023/07/02/14/nBZR23AVXfy0H_WW26cCxQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_raize_2022/p/g/2023/07/02/14/cUbWW_73GW7cZppLugt6Lg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_raize_2022/p/g/2023/07/02/14/UKR5lwWHBYjpl5BGBDC4Rg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(101, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_innova_2008/p/g/2023/10/15/22/xfSR3aY6-INoaMY08Nxs1Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_innova_2008/p/g/2023/10/15/22/NteHAZLbxni5c-iuXwd66g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_innova_2008/p/g/2023/11/13/11/a-XcLO9J0tQlEPpbo5_CPQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_innova_2008/p/g/2024/01/01/22/8abVWTVXXup_EyOZLS03VQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(102, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_veloz_cross_2022/p/g/2022/10/07/11/bRLSyEb8dDA5X8x4cq4jEg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_veloz_cross_2022/p/g/2022/10/07/11/_jBcCs5bGrLe_BZbyu5Oqw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_veloz_cross_2022/p/g/2022/10/07/11/1WeA51_bEb0S8uq5MRzq3Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_veloz_cross_2022/p/g/2022/10/07/11/aC0tYKmuWCKz7nlXXjqUAw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(103, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_cerato_2018/p/g/2023/00/03/13/6TrActXkOsij1Yesobxytw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_cerato_2018/p/g/2023/00/03/13/qmDjVXycGUbwnFEhQNu0VA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_cerato_2018/p/g/2023/00/03/13/dLS_ffUmOPP59U16sDBDJw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_cerato_2018/p/g/2023/00/03/13/KSo0hSiwajcbOGGMFEsY5Q.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(104, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2023/p/g/2023/11/05/16/kUTn8bHC6dq5q0Z4cxuRVg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2023/p/g/2023/11/26/06/SEL3gb92rGTZxPys8301fA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2023/p/g/2023/11/26/06/vQ199U6on_ZIunSjFxRO-A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2023/p/g/2023/11/26/06/zHvy-OCKpdN-_aD-tpqN9Q.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(105, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mitsubishi_triton_2022/p/g/2022/07/28/17/GVVdH9RVINAPg6W0YCumlg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mitsubishi_triton_2022/p/g/2022/07/28/17/94RLeLrdEPyrduSrqnJzIA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mitsubishi_triton_2022/p/g/2022/07/28/17/SgzIT6FT7UqRyD5WQzZpdw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mitsubishi_triton_2022/p/g/2022/07/28/17/jH4JJxXvJYVX5bCD9P_CSg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(106, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_6_luxury_2020/p/g/2023/04/04/13/zpr54AURu1DZpq56NNzbsg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_6_luxury_2020/p/g/2023/04/04/13/EnbDmj1Gzk_rPsANU89oyA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_6_luxury_2020/p/g/2023/04/04/13/n8g-XPC2A1ayQwViRf4oXA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_6_luxury_2020/p/g/2023/04/04/13/zgGzBT2s3DOAdmOEnDFKjg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(107, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/07/30/09/Y7G1z3US5RKkB_AdxQTdVA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/07/30/09/pdRQBnk18Bx3_fM1oyTQeQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/07/30/09/gjwm3-FSOCSg0SLUk47Baw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/07/30/09/gjwm3-FSOCSg0SLUk47Baw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(108, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_fortuner_2022/p/g/2022/08/29/16/Cs-xOmwLb2gNk5SUZWmLbw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_fortuner_2022/p/g/2022/08/29/16/EOiosqOXIwg6aiK020QP8Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_fortuner_2022/p/g/2022/08/29/16/IVlfvf60Rhy-PmNsZHxRqg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_fortuner_2022/p/g/2022/08/29/16/Xk4MwnQn0312oQQGSlqXPw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(109, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_morning_2021/p/g/2023/08/06/09/eXKtnoGP68-yh2eXZy-uxQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_morning_2021/p/g/2023/08/06/09/wrjnan7Hxwi1DT22fZUJ7A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_morning_2021/p/g/2023/08/06/09/rQt5roZW9hEfpA837e1u_Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_morning_2021/p/g/2023/08/06/09/qoIN0cHOXPS_VY-2FhR2bQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(110, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/mazda_2_2016/p/g/2023/05/22/09/nbGS5goQT_wVSvp3BqRISg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/mazda_2_2016/p/g/2023/05/22/09/AF3WsyWfmyZ_-lzY6JvA2w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/mazda_2_2016/p/g/2023/05/22/09/qim5ReA8MeA4tYxtr0ERHw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/mazda_2_2016/p/g/2023/05/22/09/ds9uf-h_AzQ2YgK76grokg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(111, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_everest_2011/p/g/2022/02/14/12/WL0q1sh7qjPmabawCLN3KQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_everest_2011/p/g/2022/06/29/23/UzQADQ2GHe7LNTgyFo_0Mg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_everest_2011/p/g/2022/02/14/12/9SMvPHhCEhUPVbJ1Z4FmJw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_everest_2011/p/g/2022/06/29/23/8gAskxnFeVKS37casmUvzQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(112, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2023/p/g/2023/10/24/09/6_sBCfMEf1yZDxuewoqF7Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2023/p/g/2023/10/24/09/VHAvGCQ0IfmZj_SdRAdlJw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2023/p/g/2023/10/24/09/cujrnwvuK3ttVlDYLgc4aw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2023/p/g/2023/10/24/09/P0JvYCXXt0w7XkSpyIjveQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(113, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2022/p/g/2023/07/12/09/Kh2TvYQUSWo7Qow915GOhQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2022/p/g/2023/07/12/09/1WkqHwZyw69ZL2WrV_QqKg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2022/p/g/2023/07/12/09/bddk9LUXlNvWdvNGt9RbTg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_vf8_plus_2022/p/g/2023/07/12/09/Yn3nFpz9MHzSGcv9Y7cqbg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(114, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mazda_cx5_deluxe_2018/p/g/2023/09/06/10/4ta-Lsmnuzi4_oYSlawb7A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mazda_cx5_deluxe_2018/p/g/2023/09/06/10/hpWQLog-7cc1cLUVcOwaXQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mazda_cx5_deluxe_2018/p/g/2023/09/06/10/oCPoOqo34Fdq9K_XvXkX8w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mazda_cx5_deluxe_2018/p/g/2023/09/06/10/j1oUGNXi9q7GiCgIPBtxBA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(116, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_swift_hatchback_2020/p/g/2022/07/24/13/TaHW_TNm2uFCYMXg3pIofA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_swift_hatchback_2020/p/g/2022/07/24/13/HqF5UJsk23bVuC-9KEq9AA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_swift_hatchback_2020/p/g/2022/07/24/13/wb1a90yd01DSWEgRomUYGg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_swift_hatchback_2020/p/g/2022/07/24/13/gCB7JEKVUO9GkIveC0sCyA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(117, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2020/p/g/2023/02/30/16/s5k_vk2d4vvkoLLcTtxhgA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2020/p/g/2023/02/30/16/amrQYe_7L-yBO-woGEu9Mw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2020/p/g/2023/02/30/16/t4Lj6ogRBzG2KH98wSdzzA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2020/p/g/2023/02/30/16/4XDapN5soNP6jDmnG1eKXw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(118, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/vinfast_lux_a_2020/p/g/2023/05/14/11/4XlYWImbx2wtnp9K7zkMng.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/vinfast_lux_a_2020/p/g/2023/06/11/14/Z4e6hschNmI9KYrsFAf26w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/vinfast_lux_a_2020/p/g/2023/06/11/14/_ujtgWtWJvDcvq47uFCuBA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/vinfast_lux_a_2020/p/g/2023/06/11/14/783iXf1BfD6C9bgK_vNWvg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(119, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_cerato_2021/p/g/2023/04/21/12/MibLRt_vXEDJWMXQTcZIIA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_cerato_2021/p/g/2023/04/21/12/rnJKlH5VUWE2e1mTRccBqQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_cerato_2021/p/g/2023/04/21/12/QAk-Xri-IEFzxUk4-KdlkA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/kia_cerato_2021/p/g/2023/04/21/12/z0T8U56MD9i4IzCf2m2cjQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(120, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2009/p/g/2023/08/18/21/7BF_genkM3nGIqraaddfZA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2009/p/g/2023/08/18/21/IpqX7gM-j7UWyr5m1bcc5A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2009/p/g/2023/08/18/21/XnLDGtQq090rHK-6LKZ4LQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2009/p/g/2023/08/18/21/2NqV7RwK4PVt3es1RyIsjg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(121, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_city_2020/p/g/2020/06/20/16/fxlYsX_w393L7BNty4oZVQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_city_2020/p/g/2020/06/20/16/GZSf-acB5dxREoKhlrUFDw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_city_2020/p/g/2020/06/20/16/GVttzmV29uiPqnIbLsHfJQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_city_2020/p/g/2020/06/20/16/DVQZreFzZgVnfv-DXZ3zYg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(122, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2022/p/g/2023/00/18/13/xsHPkpkmKdRe45CsN52gyQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2022/p/g/2023/11/04/14/aKmv67CDMXHtOg3RS4ZqLg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2022/p/g/2023/00/18/13/lGBfX9tfMsJQjE5S8VNIog.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2022/p/g/2023/11/04/14/sEJaCU3Hijb9r2fs7XcJeQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(123, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/chevrolet_captiva_2008/p/g/2023/11/28/14/EONDK4JIz3jNi_yh0CMjRg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/chevrolet_captiva_2008/p/g/2023/11/28/14/1yy7QEOubrbiHxF-G3Cb-w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/chevrolet_captiva_2008/p/g/2023/11/28/14/1yy7QEOubrbiHxF-G3Cb-w.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(124, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/nissan_almera_vl_2022/p/g/2023/04/29/12/tMU5mLIRz_rMSSJ6zkl6GA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/nissan_almera_vl_2022/p/g/2023/04/29/12/bk1eATKLIITRZf4MLJSOtg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/nissan_almera_vl_2022/p/g/2023/04/29/12/EjriRXRujh86U9pKSHZP_w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/nissan_almera_vl_2022/p/g/2023/04/29/12/zTeXSUGmuuvqT1gfLvi-gQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(125, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2019/p/g/2021/01/26/01/wfZtZ3quEluza6o6tnWRiQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2019/p/g/2021/01/25/14/63hNswDMm-DIGrqs0top9Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2019/p/g/2021/01/26/01/6SHDX7FYSZ4eyhQhkCyM1Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2019/p/g/2021/01/25/18/sOFvonsIG61esLX90cEhvQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(126, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_x_trail_2016/p/g/2023/07/29/15/E0XUCR8nR_s8j-4NuWBWvA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_x_trail_2016/p/g/2023/07/29/15/1TkTQ3Uxci7bBSuLiFHOGA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_x_trail_2016/p/g/2023/07/29/15/z9GprO8_yvBYTxUI3khPsg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_x_trail_2016/p/g/2023/07/29/15/kn_oBzlv3xgvEVJLBioLSw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(127, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_i10_2018/p/g/2022/10/11/22/x--P-9riaZrji0wAXOa_9w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_i10_2018/p/g/2022/10/11/22/ieDKHtgHlceE_ybVaxPORw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_i10_2018/p/g/2022/10/11/22/UyebrWIwfG-1KY87YQunAQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_i10_2018/p/g/2022/10/12/11/fz19sx1FeLATiW558yW-vA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(128, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/hyundai_accent_2022/p/g/2024/01/01/13/ZIw3BbcqN4t3187Uw7Gz0Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/hyundai_accent_2022/p/g/2024/01/01/14/_nxwOdioBFWCgnwORcXXkg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/hyundai_accent_2022/p/g/2024/01/01/14/woS_ELWuQZ7ZZdHI6TmStg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/hyundai_accent_2022/p/g/2024/01/01/14/woS_ELWuQZ7ZZdHI6TmStg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(129, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_everest_2021/p/g/2023/01/07/10/tWMFal_4mZJEmSQVn1fHxg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_everest_2021/p/g/2023/01/07/10/DhTdqKWY_3C5IyqG7X1tSQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_everest_2021/p/g/2023/01/07/10/_qTvShmF-aoD7Z2hwg93Fg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_everest_2021/p/g/2023/01/07/10/ZVOB80d3qSbwS2MewjZvJg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(130, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2022/p/g/2023/09/12/23/A16uqepS8y-7zpb7ujmYiw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2022/p/g/2023/09/12/23/NnsXUE4TjAS_ek0ZElTZ4Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2022/p/g/2023/09/13/09/FiJIkVJ7DrWBOgoPdz-h-g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2022/p/g/2023/09/12/23/eOzPVXjNS6k_XMIMz9dEjA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(131, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_city_2023/p/g/2023/09/20/14/k40zkUv0GQQ5yV5VL4WeWw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_city_2023/p/g/2023/09/20/14/ty8HknNm0FBSfFVKV1QcIA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_city_2023/p/g/2023/09/20/14/DmovI1i1YSEE5gWH6zBxxA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_city_2023/p/g/2023/09/20/14/gLBHiiQ_gFI9xr4Qo8Goqw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(133, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2016/p/g/2022/04/07/11/n8RZyAqASVX0ycbL2mFtOQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2016/p/g/2022/04/07/11/Goe8DWxR7rZdG90h1a1mJw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2016/p/g/2022/04/07/11/1vSsET6_2d619Fd3AyJ0Pw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_deluxe_2016/p/g/2022/04/07/11/1vSsET6_2d619Fd3AyJ0Pw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(134, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2021/p/g/2023/00/04/22/pA2sBaYGE8hcVcRSa5UMQQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2021/p/g/2023/05/23/22/bs4hMUEh0rLyWsoOuviHSQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2021/p/g/2023/00/04/22/-6QNXjWOIIXKF6M3LF7TJA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_xl7_2021/p/g/2023/05/23/22/6FY6_BLRi1JulLSZgefLSg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(135, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_a_2019/p/g/2023/05/26/00/vMMmdSNhlD_eTRnAza6-bw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_a_2019/p/g/2023/05/26/00/bwu8lRWNNrzW-nYkogh19Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_a_2019/p/g/2023/05/26/00/RcMGxEXzYCNZ-2ov_x-RFA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_lux_a_2019/p/g/2023/05/26/00/9j1Hq2W0LaktjRlKefBBFw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(138, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2018/p/g/2023/01/02/23/_XmClMuTdo9xbHMKxywWew.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2018/p/g/2023/01/02/23/aXR4UIxkTTNJmIyW2rjlwA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2018/p/g/2023/01/02/23/WWIDIkwjxmTLc92i0b_tFQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_g_2018/p/g/2023/01/02/23/qKSZHHFbi3iGuhW858mWOA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(140, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/toyota_innova_2016/p/g/2023/07/18/09/eAoIy3P5IawMXJ1viW4R_w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/toyota_innova_2016/p/g/2023/07/18/09/TU9Il2JrA_siViFI9f6C0g.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/toyota_innova_2016/p/g/2023/07/18/09/WR3RrP6uNRvZT2ljk1Z24Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/toyota_innova_2016/p/g/2023/07/18/09/fZVjGTwpxLJfGqL0xMP6DA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(141, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_fadil_2020/p/g/2023/10/25/11/SKhNSpImSf4lQb5c93MJsg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_fadil_2020/p/g/2023/10/25/11/otJyjO2FKj-1FIX3A8YLRQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/vinfast_fadil_2020/p/g/2023/10/25/11/otJyjO2FKj-1FIX3A8YLRQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(143, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_almera_el_2023/p/g/2023/10/28/09/oMSiVrPQ9WhI7-I116879Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_almera_el_2023/p/g/2023/10/28/09/oMSiVrPQ9WhI7-I116879Q.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(144, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/hyundai_accent_2023/p/g/2023/11/25/07/9W6fho4u5gtaKeYQbXqLTg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/hyundai_accent_2023/p/g/2023/11/25/07/if0qaFktBHkN0vwvDiqX-Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/hyundai_accent_2023/p/g/2023/11/25/07/oY84-QwrGHkkB3U4ulc2zQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/hyundai_accent_2023/p/g/2023/11/25/07/8r0kL83FD995u1PhodwppQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(145, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_innova_2019/p/g/2023/06/01/15/w9rom6UCYxBVetpwsEm9Hg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_innova_2019/p/g/2023/06/01/15/8E8a5MgXl5RGhYTDthiteg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_innova_2019/p/g/2023/06/01/15/weycUVdIAQSAtFJ6St7RmQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_innova_2019/p/g/2023/06/01/15/BtjpbHV1659TMPT7tGMiSQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(146, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_fortuner_2018/p/g/2023/06/03/11/Ari7VYa0XtANxoUgsJpCoA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_fortuner_2018/p/g/2023/06/03/11/e9zZDA6454r60GNPSDyOjg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_fortuner_2018/p/g/2023/06/03/11/b2OCgXC92Op2ERQotPYIhg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_fortuner_2018/p/g/2023/06/03/11/2eWDGThfXpS0a9Z54n4S-A.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(148, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_veloz_cross_2022/p/g/2023/10/07/11/8O2LmsBun-DTbq7HBOV1XA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_veloz_cross_2022/p/g/2023/10/07/11/LTJbQ1FBm5pHTz11pNXYaQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_veloz_cross_2022/p/g/2023/10/07/11/bjESTn3f9sOl7DvVMU9e7w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_veloz_cross_2022/p/g/2023/10/07/11/ZxivxVPjNN4xPKb3cQ_kSA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(149, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_navara_4x4_2017/p/g/2021/07/21/14/jJnSmP0hg7l20oj5ZXiXbg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_navara_4x4_2017/p/g/2020/02/28/11/-13nXXBtk5t_rwEGlDN0GQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_navara_4x4_2017/p/g/2021/07/21/14/drYAWbXw4PTmLaZAtX7fHA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/nissan_navara_4x4_2017/p/g/2023/10/28/15/0KjSsQM82Ohh5qjcRtkfWQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(150, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2019/p/g/2022/05/28/15/d-P4ubJoIKTjTMnjVLwCug.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2019/p/g/2022/05/28/15/kSB_-z6uJr5R4n3Oj7-5Bg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2019/p/g/2022/05/28/15/5zFThLrfsv3-Y28_H1FGEg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2019/p/g/2022/05/28/15/82DRaPA87j3usQc2ACszaA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(151, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2021/p/g/2024/00/11/13/6XS_0QIznRNFtLP5B9V56w.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2021/p/g/2024/00/11/13/Ghr6N7F-GIvSMYGJOJwyhw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2021/p/g/2024/00/11/13/BVpT1PB1_3LnidAeTXx39Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2021/p/g/2024/00/11/13/Mb72gAEjP_MkaEbUepuufQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(153, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_xls_4x2_2023/p/g/2023/04/15/11/KY553gciOTfG6VmwGEP8_Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_xls_4x2_2023/p/g/2023/04/15/11/4irJWUNMhXeitMHtQ_d9ww.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_xls_4x2_2023/p/g/2023/04/15/11/9V09BaBAJQSv45tzFDiMcw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_ranger_xls_4x2_2023/p/g/2023/04/15/11/hJMuXAKbf66BglNenK-Fdw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(154, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ciaz_2019/p/g/2023/10/28/20/5_dwPw5pkzPf4lS9O40JXg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ciaz_2019/p/g/2024/00/10/16/9fiGamieKDDLochBCYJ7eg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ciaz_2019/p/g/2024/00/10/16/0jZ8YH2Q0tYBpwANMbdA5A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/suzuki_ciaz_2019/p/g/2023/10/28/20/1EckwVxQZewmoy9F7m3Vxw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(155, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_camry_2.0q_2022/p/g/2022/06/13/18/p4GPRjOPZEAZUdlJRnWcoQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_camry_2.0q_2022/p/g/2022/06/13/18/JwN3-6JnP8tuYj2bIgPu0Q.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_camry_2.0q_2022/p/g/2022/06/13/18/-cZDrGnxUitM0Pt33aR79A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_camry_2.0q_2022/p/g/2022/06/13/18/aAafMgdtpXqBi7vrAvcPMA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(156, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/vinfast_lux_a_2021/p/g/2023/05/13/14/KV0ahfznwvHWg2GxBx5Xuw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/vinfast_lux_a_2021/p/g/2023/05/13/14/m4eJRMNL_N0Fm3s_tfSzMg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/vinfast_lux_a_2021/p/g/2023/05/13/14/cC1PXOmuNEq6-9FEU_Aaow.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/vinfast_lux_a_2021/p/g/2023/05/13/14/0Ch7J8mkFVnX9PRMGLsM4g.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(157, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/mitsubishi_xpander_2019/p/g/2024/00/20/10/WnPR2OM7vTpYOz4X2P_Dzw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/mitsubishi_xpander_2019/p/g/2024/00/20/10/JGLryS32b0Q1dj5AjXkktg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/mitsubishi_xpander_2019/p/g/2024/00/20/10/m5OAHZcmo5R5is-kJ0NdFA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/mitsubishi_xpander_2019/p/g/2024/00/20/10/m5OAHZcmo5R5is-kJ0NdFA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(158, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_crv_g_2020/p/g/2023/06/06/16/aKVfJZS9_y8I3PERupYXpA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_crv_g_2020/p/g/2023/06/06/16/p9SWdAIiZsw06UjAUv7pdA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_crv_g_2020/p/g/2023/06/06/16/e7jxtFHyAlbX3UsJJ5xNbw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_crv_g_2020/p/g/2023/06/06/16/XXnfb1Qq_-GS32bENRuoXg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(159, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/vinfast_vf_e34_2022/p/g/2023/05/18/17/o1gBYoWb566EUcnZWq1rKA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/vinfast_vf_e34_2022/p/g/2023/05/18/17/wdM1eD4mpGTOlks3hsqgCw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/vinfast_vf_e34_2022/p/g/2023/05/18/17/aNo6rWbjMuFimenWffobPw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/vinfast_vf_e34_2022/p/g/2023/05/18/17/jkYZNYgq-8tUD3WyLt2nRA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(160, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/toyota_vios_2020/p/g/2023/06/08/09/dXLnD1Pr8LL0jDkjuGqBVg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/toyota_vios_2020/p/g/2023/06/08/08/x_7vwVLc1-qTzGJfUGT69A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/toyota_vios_2020/p/g/2023/06/08/08/y2AjZCKyuklwtUs0F7QAXw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/toyota_vios_2020/p/g/2023/06/08/09/INNcgoiDRzlFU0phG0rDaw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(161, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/daewoo_gentra_2007/p/g/2023/03/20/09/FhhwyQUfXu-TVmC5vl5jPA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/daewoo_gentra_2007/p/g/2023/03/20/09/a_EgcMwcbY1hbT6T4tOVWw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/daewoo_gentra_2007/p/g/2023/03/20/09/3Fne4oApbpu2cm7NfgNvwA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/daewoo_gentra_2007/p/g/2023/03/20/09/2yX8oReTzUrZ-0IZOoDxTg.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(162, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2012/p/g/2023/08/29/01/VVg_etNFCVohCNlP-MYHsg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2012/p/g/2023/08/29/01/JoP-yfjnkeaS0I28Zaqqag.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2012/p/g/2023/08/29/01/_7R9mg9zps5GyARSDQksqQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/kia_morning_2012/p/g/2023/08/29/01/_hItHbtS95Vr1hzBFOlptQ.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(163, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mitsubishi_attrage_2021/p/g/2022/04/07/10/QQtQrORAmKR_uDV15sGpYQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mitsubishi_attrage_2021/p/g/2022/02/15/22/Quq8NNB2_QoRlrriPEJWIQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mitsubishi_attrage_2021/p/g/2022/02/13/07/uj-R_GVbNuKuI2SzYGXtGA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_dongnai/mitsubishi_attrage_2021/p/g/2022/08/15/11/jbXg8NLHcNCOTncCu7Dipw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(164, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/vinfast_fadil_2021/p/g/2022/01/12/11/czXlahA5NlQygjUx22_5gw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/vinfast_fadil_2021/p/g/2022/01/03/10/871IO-FxETxICJbLd-dFAQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/vinfast_fadil_2021/p/g/2022/01/03/10/nzRSDj4rOS9DS6zzSqBdQg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/vinfast_fadil_2021/p/g/2022/01/03/10/VfPaNCy1V5HlcJURXX7s-Q.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(165, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_vios_2017/p/g/2023/03/13/17/WKDpGjFiIBI2aY5XH5gzTg.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_vios_2017/p/g/2023/03/13/17/2rjHoDdpE9vlB3w6ZqWjAA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_vios_2017/p/g/2023/03/13/17/8_mCZf-2TLpR6YwFVLryMQ.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_longan/toyota_vios_2017/p/g/2023/03/13/17/2PK-z2pcCVOHJZPUtxYgEA.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(166, '[\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/vinfast_vf5_2023/p/g/2023/07/15/15/5jxlC2cRAfApusZk1GKM7A.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/vinfast_vf5_2023/p/g/2023/07/15/15/JY-bKrcYZp2_b8l9gH8akA.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/vinfast_vf5_2023/p/g/2023/07/15/15/uICi8u4_W7I4rx5Vbc04Pw.jpg\",\"https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_binhduong/vinfast_vf5_2023/p/g/2023/07/15/15/5rI1oyXt0J_Mc_H2dKbBkw.jpg\"]', '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(170, '[\"https:\\/\\/res.cloudinary.com\\/dxxnlhcje\\/image\\/upload\\/v1708182027\\/Cars\\/naxjeosk9prw0afm55p4.jpg\"]', '2024-02-17 01:00:29', '2024-02-17 01:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `idhoadon` int(10) UNSIGNED NOT NULL,
  `idgiaodich` int(10) UNSIGNED NOT NULL,
  `iduser` int(10) UNSIGNED NOT NULL,
  `idxe` int(10) UNSIGNED NOT NULL,
  `ngaythanhtoan` date DEFAULT NULL,
  `phidv` varchar(255) DEFAULT NULL,
  `tongtien` varchar(255) NOT NULL,
  `tinhtranghoadon` tinyint(1) DEFAULT 0,
  `ngaynhanxe` date NOT NULL,
  `ngaytraxe` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medially_type` varchar(255) NOT NULL,
  `medially_id` bigint(20) UNSIGNED NOT NULL,
  `file_url` text NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2020_06_14_000001_create_media_table', 1),
(14, '2024_02_07_070750_create_role_table', 1),
(15, '2024_02_07_070811_create_users_table', 1),
(16, '2024_02_07_071612_create_hangxe_table', 1),
(17, '2024_02_07_071619_create_dongxe_table', 1),
(18, '2024_02_07_071644_create_hinhxe_table', 1),
(19, '2024_02_07_071659_create_xe_table', 1),
(20, '2024_02_07_071816_create_danhgia_table', 1),
(21, '2024_02_07_071820_create_giaodich_table', 1),
(22, '2024_02_07_071829_create_hoadon_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idrole` int(10) UNSIGNED NOT NULL,
  `namerole` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:54',
  `updated_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:54' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idrole`, `namerole`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-02-07 02:53:46', '2024-02-20 10:03:44'),
(2, 'user', '2024-02-07 02:53:46', '2024-02-07 02:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diachi` longtext DEFAULT NULL,
  `cccd` varchar(12) NOT NULL,
  `ngaysinh` date NOT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `idrole` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:54',
  `updated_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:54' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `hoten`, `email`, `email_verified_at`, `password`, `sdt`, `diachi`, `cccd`, `ngaysinh`, `google_id`, `idrole`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$sp0RJoWWCDBz7QhgBcUC.eq4KzBOKN.dN78DX6iyxoMLcY43hkKx6', '0123456789', '18A/1 Cộng Hòa, Phường 4, Quận Tân Bình, TP.HCM, Việt Nam.', '086888868886', '2024-02-20', NULL, 1, '2024-02-20 02:51:55', '2024-02-20 10:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `idxe` int(10) UNSIGNED NOT NULL,
  `tenxe` varchar(255) NOT NULL,
  `mieuta` text DEFAULT NULL,
  `gia` varchar(255) NOT NULL,
  `bienso` varchar(20) DEFAULT NULL,
  `truyendong` varchar(50) DEFAULT NULL,
  `nhienlieu` varchar(50) DEFAULT NULL,
  `nhienlieutieuhao_km` decimal(5,2) DEFAULT NULL,
  `iddongxe` int(10) UNSIGNED NOT NULL,
  `idhangxe` int(10) UNSIGNED NOT NULL,
  `idhinhxe` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55',
  `updated_at` timestamp NOT NULL DEFAULT '2024-03-18 20:26:55' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`idxe`, `tenxe`, `mieuta`, `gia`, `bienso`, `truyendong`, `nhienlieu`, `nhienlieutieuhao_km`, `iddongxe`, `idhangxe`, `idhinhxe`, `created_at`, `updated_at`) VALUES
(1, 'MITSUBISHI XPANDER 2021', '* Xe mình là xe gia đình nhưng ít sử dụng nên cho thuê, mình chăm sóc xe kỹ, nội thất còn nguyên bản.\\n\\n* Mitsubishi Xpander (AT) số tự động hiện là dòng xe thông dụng ở Việt Nam, đăng ký từ tháng 1/2022. Xe có 7 chỗ ngồi rộng rãi cùng với mức tiêu hao nhiên liệu tiết kiệm, do đó rất phù hợp với nhu cầu đi lại, du lịch của nhiều gia đình.\\n* Xe được trang bị nhiều tính năng an toàn và giải trí như: Camera hành trình có cảnh báo tốc độ, camera + cảm biến lùi, cảm biến áp suất lốp, lốp dự phòng, màn hình giải trí 7 inch hỗ trợ Apple Carplay và Android Auto, thu phí tự động ETC…\\n* Thời gian, địa điểm giao - nhận xe:\\n- Từ thứ 2 đến thứ 6:258 Nguyễn Trãi, phường Nguyễn Cư Trinh, Q1, TP.HCM (đối diện Đại học Sư Phạm)\\n- Thứ 7: Cạnh chung cư Sunview Town, đường Gò Dưa, phường Hiệp Bình Phước, TP Thủ Đức, TP.HCM (gần ngã 4 Bình Phước)', '1218000', '24N88301', 'Số tự động', 'Xăng', 7.00, 2, 8, 1, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(2, 'TOYOTA VELOZ CROSS 2022', 'TOYOTA VELOZ CROSS 2022\\r\\n', '2572000', '42W44979', 'Số tự động', 'Xăng', 0.00, 2, 9, 2, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(3, 'MITSUBISHI XPANDER 2021', 'Xe mới đăng kí 2/2022. Mua kết hợp đi gia đình và cho thuê. Ưu tiên gia đình hàng đầu nên đảm bảo sạch sẽ, cho khách hàng có những chuyến du lịch thú vị  cùng người thân của mình.', '1126000', '49H27184', 'Số tự động', 'Xăng', 6.00, 2, 8, 3, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(4, 'MITSUBISHI XPANDER 2022', 'Xe Expander Premium đời mới, đăng ký 8/2022\\r\\nXe 7 chỗ xáy xăng, số tự động, nội thất nguyên bản, trang bị thêm cảnh báo tốc độ Vietmap, giải trí Youtube… đầy đủ.\\r\\nXe gia đình đi sạch sẽ, vệ sinh bảo dưỡng thường xuyên, rửa xe miễn phí\\r\\nXe rộng rãi, an toàn, tiện nghi, phù hợp cho gia đình du lịch. \\r\\nXe trang bị hệ thống cảm biến lùi, gạt mưa tự động, đèn pha tự động, camera hành trình, hệ thống giải trí cùng nhiều tiện nghi khác...', '1894000', '41P65725', 'Số tự động', 'Xăng', 7.00, 2, 8, 4, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(5, 'BMW 320i  2013', 'Bmw màu hồng porsche xinh đẹp', '1722000', '58V25108', 'Số tự động', 'Xăng', 0.00, 5, 2, 5, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(6, 'TOYOTA INNOVA 2018', 'TOYOTA INNOVA E 2018 Đẳng cấp doanh nhân nội thất siêu mới Đầy đủ tiện nghi giải trí cho chuyến đi chơi xa cùng gia đình và người thân', '2066000', '26X73690', 'Số sàn', 'Xăng', 0.00, 2, 9, 6, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(9, 'KIA K3 PREMIUM 2022', 'Kia K3 bản cao cấp Premium 2022\\r\\n- Xe gia đình mới\\r\\n- Carplay Box GB8 giải trí trên xe\\r\\n- Sedan C, không gian rộng rãi\\r\\n- Std, đèn full led\\r\\n- Sạc ko dây\\r\\n- Thu phí ko dừng VETC\\r\\n- Cảm biến trước và sau\\r\\n- Cửa sổ trời hóng gió bao mát\\r\\n- Khởi động từ xa bằng chìa\\r\\n- Nhớ ghế lái, sưởi ấm hoặc làm mát ghế\\r\\n- Cảm biến áp suất lốp\\r\\n- Camera hành trình, định vị GPS\\r\\n- Thiết bị nhắc camera phạt nguội Vietmap, nhắc tốc độ, biển báo, trong ngoài khu dân cư tránh bị XXX làm phiền', '1814000', '22U78045', 'Số tự động', 'Xăng', 8.00, 1, 5, 9, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(10, 'MERCEDES C250 2013', 'Xe bảo dưỡng thường xuyên đi cực kỳ yên tâm và tiết kiệm. Dán nhôm xước cực ngầu.\\r\\n\\r\\n- Lốp mới thay 2020. Acqui mới thay 2021. Dụng cụ cứu hộ, bảng phản quang, dây câu bình, bơm lốp, đèn dự phòng... đầy đủ.\\r\\n- Wireless carplay, âm thanh tuyệt vời. Có sẵn thẻ nhạc trẻ, bolero, paris by night...\\r\\n- Luôn vệ sinh sạch sẽ, thay lọc & khử khuẩn thường xuyên.\\r\\n- Lọc không khí, khử ion, ghế massage thông gió. \\r\\n\\r\\nBảo đảm bạn sẽ hoàn toàn hài lòng.', '2181000', '20J79636', 'Số tự động', 'Xăng', 7.00, 5, 7, 10, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(11, 'MITSUBISHI XPANDER 2019', 'MITSUBISHI XPANDER 2019', '1343000', '47U63674', 'Số tự động', 'Xăng', 0.00, 2, 8, 11, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(12, 'KIA CARNIVAL PREMIUM 2021', 'KIA CARNIVAL 2021', '5740000', '25K89129', 'Số tự động', 'Xăng', 10.00, 2, 5, 12, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(14, 'MITSUBISHI XPANDER 2021', 'MITSUBISHI XPANDER 2021', '1768000', '77X21775', 'Số tự động', 'Xăng', 8.00, 2, 8, 14, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(16, 'HYUNDAI CRETA 2023', 'Huynhdai Creta 5 chổ gầm cao, khoang xe rộng rãi thoải mái, biển số đẹp đăng ký 01/2023.\\r\\n\\r\\nXe gia đình sử dụng, số tự động, phanh tay điện tử, trang bị đầy đủ thiết bị Camera hành trình, Camera 360, bản đồ Vietmap cảnh báo tốc độ, cảm biến lùi,… Màn hình 10 inch gắn sim 4G xem phim, nghe nhạc youtube trên xe cả ngày,… Xe lót sàn 5D sạch sẽ, tinh dầu thơm mát…. Xe có dán VETC tiện lợi qua các trạm thu phí.\\r\\n\\r\\nXe được bảo dưỡng thường xuyên, đảm bảo chuyến đi dài của bạn luôn thoải mái nhất ❤️', '1722000', '34B74477', 'Số tự động', 'Xăng', 0.00, 5, 11, 16, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(17, 'KIA CARENS 2023', 'KIA CAREN 2023 số tự động đăng ký tháng 04/2023. xe gia đình mới đẹp rộng rãi an toàn tiện nghi phù hợp cho gia đình đi du lịch. Xe trang bị camera 360 và ứng dụng dẫn đường thông minh việt map giúp khách hàng dễ dàng định vị và tìm đường đi chính xác.', '1894000', '54O34836', 'Số tự động', 'Xăng', 0.00, 2, 5, 17, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(18, 'LAND 2.0 DYNAMIC 2012', 'TRANG BỊ NGOẠI THẤT\\r\r\\n\\r\r\\nĐèn pha LED\\r\r\\nGương điện gập tự động có chức năng sưởi ấm, chống chói tự động với đèn tiếp cận\\r\r\\nMÂM VÀ LỐP\\r\r\\n\\r\r\\nMâm 18\\\" Style 5075,5 chấu kép màu bạc Gloss Sparkle Silver\\r\r\\nTRANG BỊ NỘI THẤT\\r\r\\n\\r\r\\nVô lăng bọc da\\r\r\\nĐiều hòa hai vùng độc lập\\r\r\\nGHẾ VÀ CÁC CHI TIẾT ỐP NỘI THẤT\\r\r\\n\\r\r\\nGhế trước chỉnh điện 10 hướng có nhớ vị trí\\r\r\\nCác ghế bọc da sần màu đen Ebony\\r\r\\nTHÔNG TIN GIẢI TRÍ\\r\r\\n\\r\r\\nHệ thống Định vị Pro\\r\r\\nGói dịch vụ Pro Services và Điểm phát Wi-Fi\\r\r\\nTIỆN NGHI\\r\r\\n\\r\r\\nCamera lùi\\r\r\\nHệ thống Nhận diện Biển báo giao thông và Giới hạn tốc độ thích ứng\\r\r\\n2 tivi cho hàng ghế sau', '4018000', '41F97152', 'Số tự động', 'Xăng', 10.00, 5, 43, 18, '2024-02-07 02:53:46', '2024-02-23 18:45:19'),
(19, 'MITSUBISHI OUTLANDER 2021', 'Mitsubishi Outlander 2.0 số tự động đăng ký 12/2021\\r\\nXe gia đình mới đẹp, sạch sẽ, bảo dưỡng chính hãng\\r\\nXe trang bị cảm biến lùi, gạt mưa tự động, đèn pha tự động, bánh dự phòng...\\r\\nXe đã được nâng cấp màn hình Android 10inch, camera 360, cốp sau điện, đề nổ từ xa, cảm biến áp suất lốp', '1642000', '26P42948', 'Số tự động', 'Xăng', 7.00, 2, 8, 19, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(20, 'VINFAST VF E34 2023', 'Ô TÔ ĐIỆN VINFAST VF e34\\r\\n\\r\\nVinFast VF e34 là dòng xe ô tô điện thuộc phân khúc hạng C SUV/crossover. \\r\\nXe có kích thước tổng thể (dài x rộng x cao): 4300x1793x1613mm. \\r\\nChiều dài cơ sở: 2610,8mm, khoảng sáng gầm 180mm. \\r\\nXe sử dụng động cơ điện, công suất tối đa 110kW và mô-men xoắn cực đại 242 Nm. Hệ thống dẫn động cầu trước. Pin lithium-ion với dung lượng 42kWh, với chế độ sạc thường xe sạc đầy pin trong khoảng 8h. \\r\\nQuãng đường xe di chuyển được mỗi lần sạc đầy là 318.6 km (Cập nhật 2023). Bên cạnh đó, VinFast cũng cung cấp giải pháp sạc nhanh cho phép xe đi được 180km chỉ sau 18 phút sạc.\\r\\n\\r\\nVF e34 Là mẫu xe ô tô điện thông minh đầu tiên tại Việt Nam được trang bị hàng loạt tính năng thông minh như: Ứng dụng trí tuệ nhân tạo AI, tương tác bằng tiếng việt theo ngôn ngữ tự nhiên đa vùng miền, Hệ thống hỗ trợ người lái thông minh, Điều khiển và tương tác với xe trên ứng dụng thông minh, cập nhật phần mềm từ xa…..', '1378000', '50T25331', 'Số tự động', 'Điện', 285.00, 5, 29, 20, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(21, 'KIA SELTOS PREMIUM 2021', 'Xe Kia Seltos số tự động, mày trắng, đăng ký tháng 2/2021\\r\\nXe gia đình, Nữ chạy kỹ mới đẹp, nội thất nguyên bản, sạch sẽ, bảo dưỡng thường xuyên định kỳ tại hãng\\r\\nXe rộng rãi, an toàn, tiết kiệm nhiên liệu phù hợp cho gia đình du lịch cuối tuần\\r\\nXe trang bị optine: Camera 360, camera hành trình, cảm biến áp suất lốp, mà hình chính nghe nhạc, trải sàn 5D…..', '1722000', '67Y11982', 'Số tự động', 'Xăng', 5.00, 5, 5, 21, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(22, 'HONDA CIVIC G 2021', 'HONDA CIVIC 2021', '1986000', '35O18511', 'Số tự động', 'Xăng', 0.00, 1, 10, 22, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(23, 'VINFAST LUX A 2021', 'Đăng ký 2021', '2239000', '22Q76547', 'Số tự động', 'Xăng', 0.00, 1, 29, 23, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(25, 'MITSUBISHI XPANDER 2023', 'MITSUBISHI XPANDER CROSS 2023\\r\\n', '1722000', '24O68705', 'Số tự động', 'Xăng', 0.00, 2, 8, 25, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(26, 'KIA SEDONA DELUXE 2021', 'Sedona Luxury đăng ký 5/2021', '2583000', '52L67308', 'Số tự động', 'Dầu diesel', 0.00, 2, 5, 26, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(27, 'VINFAST LUX SA  2021', 'Xe Vinfast Lux SA 2.0 đời 2021, sử dụng gia đình và thường xuyên chăm sóc bảo dưỡng. Đông cơ mạnh và khung gầm tốt, vừa mang lại cảm giác lái tuyệt vời, vừa êm ái rộng rãi cho những người thân trong chuyến đi. \\r\\nXe có trang bị thêm android box bổ sung các tính năng giải trí khai thác màn hình lớn của vinfast, cũng như kèm thêm các tính năng chỉ đường, cảnh báo tốc độ v.v...\\r\\nNgoài ra, nếu khách thuê có nhu cầu, có thể cho mượn ghế trẻ em miễn phí, là ghế thực tế em bé trong nhà đang sử dụng nên đảm bảo về độ tốt cũng như an toàn cho bé.', '2330000', '68F97981', 'Số tự động', 'Xăng', 12.00, 2, 29, 27, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(28, 'MITSUBISHI XPANDER 2022', 'Xe 7 chổ Xpander Premium gia đình đời mới đẹp, sạch thơm, rửa xe miễn phí cho khách, giao nhanh', '1722000', '29H49856', 'Số tự động', 'Xăng', 7.00, 2, 8, 28, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(29, 'HONDA CIVIC G 2020', 'Honda civic 2020 xe gia đình ít đi . Đẹp sạch sẻ .', '2018000', '42F62409', 'Số tự động', 'Xăng', 0.00, 1, 10, 29, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(30, 'MITSUBISHI PAJERO SPORT 2017', 'xe máy dầu turbo 2.5l mạnh mẽ đầm chắc êm ái đặc biệt tiết kiệm nhiên liệu 7l/100km đường trường xe gầm cao đi địa hình đèo dốc ngon lành.Xe rộng rãi,cửa gió điều hoà cho từng hàng ghế không lo nóng.xe trang bị đầy đủ tiện nghi như camera de camera hành trình,gối tựa đầu,dvd có vietmap bản quyền cảnh báo tốc độ dẫn hướng.Không gian rộng rãi thoải mái cho những chuyến đi xa.xe mình chăm sóc bảo dưỡng tại hãng và dọn dẹp sạch sẽ khi giao xe cho khách yên tâm di chuyển trên mọi hành trình', '1103000', '58O11915', 'Số sàn', 'Dầu diesel', 7.00, 2, 8, 30, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(31, 'CHEVROLET VIVANT 2011', 'Chevrolet Vivant CDX AT 2011 số tự động là bản cao cấp nhất với đầy đủ tính năng màn hình android, vietmap bản quyền cảnh báo tốc độ, camera phạt nguội, cảm biến áp suất lốp, giải trí youtube, camera lùi & hành trình, rèm che nắng nam châm, lốp dự phòng, máy hút bụi, bơm hơi,...\\r\\n\\r\\nXe gia đình mới đẹp, nội thất da xịn êm, bảo dưỡng định kỳ, máy mạnh 2.0, tiết kiệm xăng 7L/100k, luôn vệ sinh sạch sẽ trước khi giao xe.\\r\\n\\r\\nXe rộng rãi, an toàn, tiện nghi, cực kỳ phù hợp cho gia đình đi du lịch.\\r\\n\\r\\nĐẶC BIỆT: nếu đi 5 người có thể gỡ 2 ghế cuối để cốp rộng rãi tha hồ chở hành lý và hàng ghế giữa dạng limousine có thể ngã thẳng để thành giường ngủ thoải mái trong chặng đường dài.\\r\\n\\r\\nChủ xe vui vẻ, thân thiện, nhiệt tình phục vụ đối tác.', '1057000', '46M21355', 'Số tự động', 'Xăng', 8.00, 2, 3, 31, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(33, 'KIA SONET PREMIUM 2022', 'Xe Kia Sonet bản Premium đăng ký lần đầu 10/2022, xe cá nhân ít chạy, nội thất đẹp sạch, chăm sóc thường xuyên. Full lịch sử bảo hành hãng.\\r\\nXe có cam hành trình, kết nối wifi hoặc 4G xem youtube hay xem phim, cảm biến trước sau,cảnh báo tốc độ, cam lùi, cửa sổ trời.\\r\\nXe chạy êm ít tiêu hao nhiên liệu, dễ sử dụng, dán full cách nhiệt 3M Crystal', '1498000', '37U53148', 'Số tự động', 'Xăng', 5.00, 5, 5, 33, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(34, 'FORD RANGER XLS 4x2 2018', 'Xe bán tải Ford Ranger màu đỏ5 chỗ ngồi rộng rãi, phần nắp cốp cao hơn để có khoang chứa đồ rộng rãi\\r\\nXe số tự động, bảo dưỡng thường xuyên, vận hành trơn tru', '1366000', '76U64925', 'Số tự động', 'Dầu diesel', 1.00, 5, 4, 34, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(37, 'HYUNDAI SANTAFE 2013', 'HYUNDAI SANTA FE\\r\\nXe màu xám bạc, số tự động, máy xăng, trang bị đủđồ chơi thuận tiện cho việc lái xe an toàn.\\r\\nMiễn phí vệ sinh xe khi thuê 03 ngày trở lên.', '1642000', '29G63136', 'Số tự động', 'Xăng', 0.00, 2, 11, 37, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(38, 'TOYOTA VIOS 2019', 'Toyota Vios  sản xuất tháng 10/2019, có camera hành trình', '1378000', '54A64544', 'Số tự động', 'Xăng', 0.00, 5, 9, 38, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(39, 'MAZDA CX30 LUXURY 2022', 'Xe gia đình, mới đẹp, trải nghiệm tuyệt vời', '1894000', '45E55242', 'Số tự động', 'Xăng', 7.00, 5, 6, 39, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(40, 'HYUNDAI ACCENT 2021', 'Xe Hundai accent  số sàn, Sản xuất 2021, đăng ký mơi 2022. Số chỗ ngồi 4 hành khách +1 tài xế.', '1320000', '42O16087', 'Số sàn', 'Xăng', 6.00, 5, 11, 40, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(41, 'SUBARU FORESTER 2.0i-S 2021', 'SUBARU FORESTER 2.0i-S Eyesight 2022\\r\r\\n\\r\r\\nXe có gắn sẵn tăng bạt phù hợp cho đi dã ngoại, chủ xe có đủđồ đi camping, báo trước có thể cho mượn.\\r\r\\n\\r\r\\nCó sẵn Vietmap, 4G, youtube premium..', '2296000', '54R28319', 'Số tự động', 'Xăng', 8.00, 5, 32, 41, '2024-02-07 02:53:46', '2024-02-23 18:48:26'),
(42, 'VINFAST VF8 PLUS 2023', 'Dịch vụ trải nghiệm xe điện #Vinfast #VF8plus\\r\\n\\r\\nĐộng cơ mạnh, xe full option, chủ xe nhiệt tình.\\r\\n\\r\\n????Du lịch hoặc công tác mà muốn tự chủ thời gian.\\r\\n????Muốn trải nghiệm trc khi quyết định mua xe điện.\\r\\n\\r\\nLiên hệ ngay #Nghiệnshopping\\r\\n\\r\\nXe ngon lành, app ngon nghẻ. 100% xe nhà, giữ xe kỹ, chăm sóc xe như ng tình ????.\\r\\n\\r\\nCó thể thuê ngắn ngày hoặc dài ngày. \\r\\n\\r\\n#dịchvụchothuêôtôtựlái #ôtôtựlái #VF8plus #xeôtôđiện #Vinfast #thuêxetựláiTPHCM #thuêxetựlái', '2583000', '41E23531', 'Số tự động', 'Điện', 510.00, 5, 29, 42, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(43, 'HONDA CRV G 2021', 'HONDA CRV-L 2021\\r\\n', '1941000', '39E26111', 'Số tự động', 'Xăng', 8.00, 2, 10, 43, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(44, 'MITSUBISHI XPANDER 2020', 'Xe Mitsubishi Xpander phiên bản 2020 AT gia đình sử dụng trang thiết bị tiện nghi tiết kiệm nhiên liệu 6.9l/100km, 7 chỗ rộng rãi thoải mái. \\r\\nĐèn xe full Led trước sau. \\r\\nXe trang bị màn hình Android Zestech ZT360 thế hệ mới.\\r\\nHệ thống camera 360 toàn cảnh. \\r\\nBản đồ Việt Map S1 bản quyền cảnh báo tốc độ biển báo giao thông, xem phim nghe nhạc Youtube chất lượng cao. \\r\\nTruy cập mạng wifi miễn phí trên xe.\\r\\nChế độ ga tự động Cruise Control. \\r\\nCảm biến lùi, cảm biến áp suất lốp. \\r\\nKhóa cửa tự động. \\r\\nPhủ gầm xe công nghệ Đức. \\r\\nDán phim cách nhiệt, rèm che nắng hít nam châm theo xe, lót sàn simily, thảm sàn 6D luxury.', '1636000', '40H16149', 'Số tự động', 'Xăng', 6.90, 2, 8, 44, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(45, 'HYUNDAI ACCENT 2019', 'HYUNDAI ACCENT 2019', '1837000', '21P29971', 'Số tự động', 'Xăng', 7.00, 5, 11, 45, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(47, 'TOYOTA VIOS 2015', 'TOYOTA VIOS 2015\\r\\n', '1148000', '43G13530', 'Số sàn', 'Xăng', 0.00, 5, 9, 47, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(49, 'MITSUBISHI XPANDER 2019', 'MITSUBISHI XPANDER 2019\\r\\nTiện ích trên xe\\r\\n-Màn hình android 10 inch\\r\\n-Camera hành trình và cam lùi\\r\\n-Cảm biến lùi, cảm biến áp suất lốp.\\r\\n-Vietmap S1, navitel', '2066000', '62F38949', 'Số tự động', 'Xăng', 7.00, 2, 8, 49, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(50, 'NISSAN X TRAIL 2018', 'Nissan X-Trail SUV 5+2 chỗ bản cao cấp nhất đời cuối 2017 ĐKLĐ 2018\\r\\nMáy xăng 2.5 số tự động SV-4WD\\r\\nCửa sổ trời toàn cảnh Panorama\\r\\nCamera 360độ\\r\\nĐiều hoà 02 dàn lạnh auto độc lập\\r\\nGhế ngồi chỉnh điện 2 ghế trước\\r\\n3 chế độ lái 2WD/4WD/Auto\\r\\nHỗ trợ tính năng đổ đèo, khởi hành ngang dốc\\r\\nMàn hình Android giải trí Zestech. Dán phim cách nhiệt 3M Crystal xịn\\r\\nXe chạy êm, đầm, chắc. Cảm giác lái tuyệt vời', '1584000', '66L25187', 'Số tự động', 'Xăng', 0.00, 2, 14, 50, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(51, 'KIA SONET PREMIUM 2022', 'KIA SONET PREMIUM 2022', '1205000', '67Q44730', 'Số tự động', 'Xăng', 0.00, 5, 5, 51, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(52, 'MITSUBISHI XPANDER 2023', 'MITSUBISHI XPANDER 2023\\r\\n', '1894000', '55V23758', 'Số tự động', 'Xăng', 6.00, 2, 8, 52, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(53, 'NISSAN ALMERA VL 2022', 'NISSAN ALMERA VL 2021', '1492000', '40M37191', 'Số tự động', 'Xăng', 4.20, 5, 14, 53, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(54, 'MITSUBISHI XPANDER 2019', 'MITSUBISHI XPANDER 2019', '1677000', '23B36755', 'Số tự động', 'Xăng', 0.00, 2, 8, 54, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(55, 'SUZUKI ERTIGA 2018', 'Xe Suzuki All New Ertiga Limited, 7 chỗ, số tự động. ĐK tháng 10/2022.\\r\\nXe được nhập khẩu nguyên chiếc, chất lượng siêu xịn sò. Máy êm, mượt, tiết kiệm xăng. Đèn pha công nghệ led siêu sáng. Kính có dán film cách nhiệt 3M của Mỹ. Đuôi lướt gió thể thao, giúp gia tăng khí động học cho xe. Khoá xe có chức năng chống trộm, yên tâm đỗ xe và rời đi. Màn hình thương hiệu nổi tiếng Alpine kết hợp với 4 loa cho ra chất lượng âm thanh tuyệt hảo. Khi kết nối Apple Carplay hoặc Android Auto với điện thoại có thể sử dụng được rất nhiều chức năng như nghe nhạc, đàm thoại rãnh tay, xem bản đồ, v. v… Móc cố định ghế trẻ em chuẩn quốc tế ISOFIX là trang bị bắt buộc trên xe Ertiga, mang đầy tính nhân văn. Camera hành trình có chức năng tự động khoá các đoạn videos, chống bị ghi đè hoặc bị xoá nếu có va chạm xảy ra. Camera lùi và cảm biến cảnh báo va chạm lắp ở đuôi xe giúp tài xế lùi xe an toàn trong mọi tình huống. Bảo hiểm thân vỏ (hai chiều) và bảo hiểm trách nhiệm dân sự bắt buộc được gia hạn thường xuyên, lái xe yên tâm vận hành. Tem thu phí không dừng (ETC) dán sẵn ở đèn trước bên phải xe, luôn có đủ tiền trong tài khoản giúp bác tài di chuyển xe qua trạm dễ dàng, nhanh chóng. Xe luôn được bảo dưỡng đúng định kỳ tại hãng. Nội và ngoại thất sạch sẽ, tinh tươm.\\r\\n Chúc bạn sẽ có những trải nghiệm tuyệt vời, một chuyến đi suôn sẻ và thú vị.\\r\\nCám ơn bạn rất nhiều!❤️\\r\\nNguyễn Nhật Hoài Phong', '1665000', '41N89464', 'Số tự động', 'Xăng', 5.00, 2, 19, 55, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(56, 'MAZDA 3 LUXURY 2023', 'Mazda 3 Luxury 2023 đăng ký tháng 11/2023,xe gia đình\\r\\nxe được trang bị camera hành trình,cảm biến lùi,camera lùi,điều hoà 2 vùng độc lập,có cửa gió điều hoà cho người ngồi phía sau,ghế bọc dạ,đèn full led,động cơ 1,5L tiết kiệm xăng\\r\\nĐỊA ĐIỂM GIAO XE: ngay Bãi đậu xe oto Thống Nhất', '1607000', '24B74600', 'Số tự động', 'Xăng', 6.00, 5, 6, 56, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(57, 'MITSUBISHI PAJERO SPORT 2021', 'MITSUBISHI PAJERO SPORT 2021', '1838000', '38E58018', 'Số tự động', 'Dầu diesel', 0.00, 2, 8, 57, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(58, 'SUZUKI ERTIGA 2020', 'SUZUKI ERTIGA 2020\\r\\n', '1045000', '37N31822', 'Số tự động', 'Xăng', 0.00, 2, 19, 58, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(59, 'FORD RANGER 2019', 'FORD RANGER 2019\\r\\n', '1923000', '49W30204', 'Số tự động', 'Dầu diesel', 8.00, 5, 4, 59, '2024-02-07 02:53:46', '2024-02-24 01:50:23'),
(60, 'FORD FOCUS 2018', 'FORD FOCUS HATCHBACK 2019.\\r\\nXe chủ xài kỹ, luôn thơm tho sạch sẽ. xe rộng nhất trong các phân khúc. đi xa thoải mái. với 180 mã lực, quý khách sẽ luôn hài lòng khi cầm lái chiếc xe này.', '1607000', '53S16518', 'Số tự động', 'Xăng', 7.80, 1, 4, 60, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(61, 'SUZUKI CELERIO 2019', 'SUZUKI CELERIO 2019\\r\\n', '987000', '65B75565', 'Số sàn', 'Xăng', 5.00, 5, 19, 61, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(62, 'CHEVROLET CRUZE 2015', 'xe dep. may em. dam. chac. an toan.', '1033000', '23J61427', 'Số sàn', 'Xăng', 0.00, 5, 3, 62, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(63, 'TOYOTA VIOS 2023', 'TOYOTA VIOS E 2023\\r\\n', '1607000', '28A82118', 'Số tự động', 'Xăng', 0.00, 1, 9, 63, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(65, 'BMW 320i  2016', 'CHO THUÊ  XE TỰ LÁI\\r\\n☘️Giao xe tận nơi miễn phí\\r\\n☘️Có gắng camera hành trình\\r\\n☘️Không phụ phí rửa xe\\r\\n☘️Cung cấp bảo hiểm 2 chiều\\r\\n☘️Xe đã đăng ký VETC - thu phí tự động qua các trạm\\r\\n', '2583000', '61H92809', 'Số tự động', 'Xăng', 0.00, 1, 2, 65, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(66, 'MAZDA 3 PREMIUM 2022', 'Mazda 3 all new năm sx 2022, màu trắng, bản 1.5 Premium full option.\\r\\n- Đèn pha tự động\\r\\n- Gạt mưa tự động\\r\\n- Ghế da. Ghế lái chỉnh điện 10 hướng, nhớ ghế\\r\\n- Gương tự động. Chống chói. Cảnh báo điểm mù\\r\\n- Gói an toàn i-activesense hỗ trợ giữ làn, cảnh báo va chạm, phanh khẩn cấp,...\\r\\n- Cửa sổ trời\\r\\n\\r\\nXe nhà sử dụng kỹ. Đẹp & sạch sẽ. Xe đi đầm chắc, an toàn\\r\\nPhù hợp đi cá nhân hoặc gia đình trẻ với con nhỏ.', '1952000', '41F55132', 'Số tự động', 'Xăng', 7.50, 1, 6, 66, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(67, 'HYUNDAI ELANTRA 2020', 'HYUNDAI ELANTRA 2020', '1152000', '45J49222', 'Số sàn', 'Xăng', 0.00, 5, 11, 67, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(68, 'CHEVROLET CRUZE 2018', 'Chevrolet Cruze 2018', '1056000', '52Y44807', 'Số sàn', 'Xăng', 10.00, 5, 3, 68, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(69, 'SUZUKI XL7 2022', 'SUZUKI XL7 2022\\r\\n', '1722000', '23P77721', 'Số tự động', 'Xăng', 7.00, 2, 19, 69, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(70, 'HYUNDAI ELANTRA 2019', 'Huyndai Elantra số tự động gia đình sử dụng, xe nguyên bản mới sạch đẹp phù hợp cho khách hàng hoặc gia đình đi công việc hoặc du lịch.\\r\\nXe trang bị nhiều tiện ích tự động và an toàn. xe có camera hành trình, thẻ vetc.....v.v.....', '1435000', '45U77815', 'Số tự động', 'Xăng', 7.00, 5, 11, 70, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(72, 'CHEVROLET SPARK 2016', 'Xe Chevrolet spark 2016 xe gia đình có màn hình xem youtobe, camera lùi và nhiều tiện nghi khác....', '918000', '67V22415', 'Số sàn', 'Xăng', 6.00, 5, 3, 72, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(73, 'CHEVROLET COLORADO 2017', 'CHEVROLET COLORADO  số sàn đăng ký tháng 04/2023. Xe gia đình mới đẹp , nội thất Nguyên Bình, sạch sẽ, bảo dưỡng thường xuyên. \\r\\nXe rộng rãi, an toàn, tiện nghi, phù hợp cho gia đình du lịch.\\r\\nXe trang trí hệ thống cảm biến lùi, gạt mưa tự động, đèn pha tự pha tự động, camera hành trình, hệ thống giải trí AV cùng nhiều tiện nghi khác.', '1188000', '74V59396', 'Số sàn', 'Dầu diesel', 8.00, 5, 3, 73, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(74, 'KIA SELTOS LUXURY 2020', 'KIA SELTOS LUXURY 2020', '2296000', '60R35512', 'Số tự động', 'Xăng', 0.00, 5, 5, 74, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(77, 'VINFAST LUX SA  2020', 'VINFAST LUX SA 2.0 2020', '1756000', '76G13662', 'Số tự động', 'Xăng', 0.00, 5, 29, 77, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(78, 'ISUZU MUX B7 2023', 'ISUZU MUX B7 2023\\r\\n', '2618000', '28C91141', 'Số tự động', 'Dầu diesel', 0.00, 2, 24, 78, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(79, 'FORD TERRITORY TREND 2022', '- Có bảo hiểm thân vỏ 2 chiều.\\n-Xe luôn được rửa vệ sinh, khử mùi và đổ đầy bình xăng trước khi giao.\\r\\n-Đã dán phim cách nhiệt 3M dòng cao cấp nhất ngăn UV, rất mát.\\r\\n-Trang bị sẵn máy lọc không khí Sharp loại to, rất tốt cho ai dễ say xe.\\r\\n-Có cam360 Safeview tiện lợi và an toàn khi đi đường hẹp.\\r\\n-Có ghế an toàn cho em bé (xin báo trước để mình chuẩn bị).\\n-Đã dán VETC thu phí tự động.\\n\\nXIN LƯU Ý:\\n-Mình chỉ chấp nhận Căn Cước Công Dân gắn chip và đã khai báo định danh điện tử.\\n- Chỉ nhận cọc xe máy với chuyến giao tại nhà mình, chuyến giao xe tận nơi mình nhận cọc tiền.', '2755000', '42Q60748', 'Số tự động', 'Xăng', 8.00, 5, 4, 79, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(80, 'VINFAST VF8 PLUS 2023', 'vinfast VF8 xe gia đình mới mua 1 tháng đăng ký 2023', '2514000', '32C59389', 'Số tự động', 'Điện', 510.00, 1, 29, 80, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(81, 'HONDA BRIO 2019', 'Honda Brio G, số tự động, đăng kí T2/2022, biển trắng.\\r\\nXe gia đình, sạch sẽ, nội ngoại thất mới, lịch sự.\\r\\nPhù hợp nhu cầu gia đình, du lịch, cá nhân.', '1143000', '55S13685', 'Số tự động', 'Xăng', 5.00, 5, 10, 81, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(82, 'CHEVROLET CAPTIVA 2010', 'Chevrolet Captiva số tự động\\r\\nxe gia đình sử dụng phù hợp du lịch gia đình\\r\\nxe sạch sẽ và đầy đủ tiện nghi\\r\\nxe đc trang bị camera lùi, 360, cảm biến lùi, màn hình LCD giải trí, usb, ....... và nhiều tiện ích khác', '965000', '60D62218', 'Số tự động', 'Xăng', 10.00, 2, 3, 82, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(83, 'HYUNDAI STARGAZER 2022', 'HYUNDAI STARGAZER 2022\\r\\n', '1378000', '52W94594', 'Số tự động', 'Xăng', 6.00, 2, 11, 83, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(84, 'TOYOTA AVANZA 2022', 'TOYOTA AVANZA 2022\\r\\n', '1722000', '37W24190', 'Số sàn', 'Xăng', 0.00, 2, 9, 84, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(85, 'KIA MORNING 2019', 'kia morning luxury 2019 ,số tự động \\r\\nxe tiết kiệm nhiên liệu đường hỗn hợp 5.5l/100km\\r\\nxe mới nên không có gì phải nói thêm', '850000', '22Y52043', 'Số tự động', 'Xăng', 5.00, 5, 5, 85, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(86, 'NISSAN NAVARA 4x4 2016', 'xe nhà sạch sẽ , bạn sẽ không buồn phiền khi lựa chọn, rất phù hợp khi về quê mang nhiều quà, và mang theo nhiều quà từ gia đình lên thànhphố. đi dã ngoại cả nhà 4-5 người rất tiện dụng mang theo thực phẩm tự chế biến. xe cao, chạy đường trường rất phù hợp, ít hao nhiên liệu lại cảm giác thoải mái an toàn...có bảo hiềm 2 chiều hỗ trợ khi xảy ra tai nạn lớn\\r\\nNắp thùng xe dạng cao', '1297000', '34Y23097', 'Số tự động', 'Dầu diesel', 7.00, 1, 14, 86, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(87, 'MAZDA 3 Deluxe 2022', 'Mazda 3 đk tháng 10/2022 bản Delux\\r\\nCam hành trình + cam lùi\\r\\nĐèn + gạt mưa tự động\\r\\nĐã trang bị androi box\\r\\nCân bằng điện tử\\r\\nAuto hodl\\r\\nPhanh điện tay điện tử\\r\\nCó chế độ sport', '1722000', '53I11561', 'Số tự động', 'Xăng', 6.00, 1, 6, 87, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(88, 'KIA RIO 2015', 'Kia Rio Nhập Thái Nguyên Con 2016\\r\\nCó giao xe tận nơi', '964000', '30K49226', 'Số tự động', 'Xăng', 0.00, 5, 5, 88, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(89, 'MITSUBISHI XPANDER 2019', 'Xe được bọc lại ghế da, bọc trần 5D, phủ gầm chống ồn, cảm biến lùi, cảm biến áp suất lốp, trang bị máy lọc không khí Sharp, lắp màn hình android zetech 9 inch, sim 4G tha hồ trải nghiệm nhạc, phim, video.....\\r\\nBản đồ chỉ đường việt map..... \\r\\nXe xpander số tự động đăng ký lần đầu tháng 9/2019.\\r\\nXe gia đình mới, camera hành trình ( an toàn trên mọi nẻo đường ).\\r\\nXe trang bị hệ thống cân bằng tự động chống trơn trượt.  Hệ thống ga tự động ( cruise control ) dễ dàng di chuyển đường xa. Hệ thống khởi hành ngang dốc..... \\r\\nXe mới được bảo dưỡng thường xuyên. \\r\\nXe rộng rãi 7 chỗ, an toàn, tiện nghi, phù hợp cho gia đình du lịch. \\r\\nMức tiêu thụ nhiên liệu ít 7L/ 100km đường hỗ hợp', '1562000', '61Q14005', 'Số tự động', 'Xăng', 6.00, 2, 8, 89, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(91, 'KIA MORNING 2016', 'Kia Morning số sàn 2016, xe gia đình bảo dưỡng đầy đủ, yên tâm chạy.', '603000', '47R95100', 'Số sàn', 'Xăng', 7.00, 1, 5, 91, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(92, 'MITSUBISHI OUTLANDER 2022', 'Mitsubishi Outlander đăng kí 9/2022\\r\\nXe gia đình mới đẹp chạy mượt', '1447000', '37Z15897', 'Số tự động', 'Xăng', 0.00, 2, 8, 92, '2024-02-07 02:53:46', '2024-02-24 01:51:02'),
(93, 'KIA MORNING 2009', 'xe kia moning slx màu đen', '976000', '70G55728', 'Số tự động', 'Xăng', 4.00, 5, 5, 93, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(94, 'VINFAST VF E34 2022', '????????????????????????????????̂????????????????́????????????\\r\\n????????̛̉đ????̂????????????́????????????#????????????????̂????????????????̛̣????????́????&#????????́????????̀????????\\r\\nXe điện VF E34 màu đen còn mới như vừa xuất xưởng.\\r\\n(Thuê nhiều có giảm giá nhiệt tình luôn ????????)\\r\\nXe điện nên chạy cực kì tiết kiệm và không lo có mùi gây khó chịu ????????????????????.????????????\\r\\n???? Trang bị đầy đủ camera 360, camera hành trình, cảm biến áp suất lốp, cảm biến full trước sau, cảnh báo đầy đủ thứ, màn hình giải trí đầy đủ,…..⭐️⭐️⭐️\\r\\n* CÓ GHẾ NỆM LÀM GIƯỜNG NGỦ CHO HÀNG GHẾ SAU, CÓ THỂ NẰM NGỦ KHI ĐI XA, TẠO KHOẢNG KHÔNG GIAN CHO GIA ĐÌNH CÓ BÉ NHỎ CÓ THỂ VUI CHƠI.\\r\\nĐặ????????????ệ???? xe có trang bị ????????????????????????????????????????????????ẫ????đườ???????? và ????ả????????????á????????ố????độ không lo bị vi phạm giao thông!????\\r\\n\\r\\n???? Xe chạy được ????????????????????/????????ầ????????ạ???? đầy.\\r\\n???? Cực kì tiết kiệm Chỉ 1k /1 KM\\r\\n????????ạ????????ạ????????ó????????ủ????ó????????????????à????????????ố???? có cập nhật và chỉ đường trên xe luôn cực kì tiện lợi và ????ễ????ì????????????ạ????????ạ????.\\r\\n????????ạ????????ầ????????????????????ú???? là ????????ạ????đượ???? tiếp khoảng 180-????????????????????❗\\r\\n\\r\\n#thuêxetựlái #thuêxecótài #thuêxe #thuexe #thuêxegiárẻbiênhoà #thuêxebiênhoà #thuêxegiárẻhochiminh #thuêxesaigon #thuêxeđồngnai #chothuêxe #cầnthuêxe', '1722000', '67W62104', 'Số tự động', 'Điện', 285.00, 5, 29, 94, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(95, 'HYUNDAI I10 SEDAN 2019', 'Huyndai grand 10 sedan, đăng kí tháng 10/2019, nội thất sạch sẽ rộng rãi, có camera lùi , máy lạnh... thích hợp cho gia đình đi du lịch', '1148000', '26O92568', 'Số sàn', 'Xăng', 5.00, 1, 11, 95, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(96, 'SUZUKI XL7 2022', 'SUZUKI XL7 2022\\r\\n', '1390000', '23D38721', 'Số tự động', 'Xăng', 0.00, 2, 19, 96, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(97, 'MITSUBISHI XPANDER 2022', 'MITSUBISHI XPANDER 2022\\r\\n', '1791000', '54G76885', 'Số sàn', 'Xăng', 0.00, 2, 8, 97, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(98, 'SUZUKI ERTIGA 2016', 'xe mình ertiga 2016,tự động ,xe 5+2 ,dán etc ...\\r\\n\\r\\n xe mình lên Vietmap ,dvd android,camera lùi,cảm biến lùi đầy đủ...', '1378000', '52Z30038', 'Số tự động', 'Xăng', 8.00, 2, 19, 98, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(99, 'KIA CARNIVAL PREMIUM 2021', 'Xe Kia Carnival đời 2022 máy dầu xe trang bị Android Box, Lót Sàn Gỗ Sang Trọng, Cảnh Báo Tốc Độ, Camera Hành trành, xe bảo dưỡng hãng định kỳ', '3272000', '35D42489', 'Số tự động', 'Dầu diesel', 7.00, 2, 5, 99, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(100, 'TOYOTA RAIZE 2022', '???? Xe gia đình chiinh chủ ăn mặc lịch sự - lái xe an toàn êm ái -nhiệt tình- vui vẻ ????\\r\\n???? Xe rất mới sạch sẽ - vệ sinh mỗi ngày không mùi hôi- máy lạnh siêu mát- xe gầm cao trần thoáng- rộng nhất phân khúc ☎️\\r\\n???? Xe biển số trắng phục vụ về quê-cưới hỏi-đi chùa du lịch-đi công tác- tham quan ...☎️', '1630000', '29K29372', 'Số tự động', 'Xăng', 10.00, 5, 9, 100, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(101, 'TOYOTA INNOVA 2008', 'TOYOTA INNOVA 2008', '873000', '27O60308', 'Số sàn', 'Xăng', 9.00, 2, 9, 101, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(102, 'TOYOTA VELOZ CROSS 2022', 'Veloz cross số tự động đăng ký 10/2022\\r\\nXe gia đình nội thất mới nguyên bản sạch sẽ bảo dưỡng thường xuyên, rửa xe miễn phí cho khách.\\r\\nXe trang bị camera cảm biến lùi, cam 360độ, đen pha tự động, camera hành trình, hệ thống giải trie AV cùng nhiều tiện nghi khác', '2066000', '29K94671', 'Số tự động', 'Xăng', 6.00, 2, 9, 102, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(103, 'KIA CERATO 2018', 'KIA CERATO 2018\\r\\n\\r\\n- Xe tự động 1.6 rất dễ lái và nhẹ, lái không bốc nhưng lại rất an toàn, hợp các chuyến đi gia đình, xe có nhớ ghế 2 chế độ, tiết kiệm xăng đường trường 5l/ 100km.\\r\\n- Xe có cửa số trời ,2 chế độ lái Eco/ Sport/ Cảm biến, camera lùi tích hợp màn hình/ Cam hành trình/ Đầy đủ tiện ích: màn hình android, nghe nhạc bluetooth / Cruise control / Ghế điện 8 hướng.\\r\\n- Xe có máy lạnh buồng lái và cả máy lạnh ghế phía sau nên ngồi khá thoải mái.\\r\\n- Xe không có mùi: thuốc lá, nấm mốc, nước hoa.. do được vệ sinh thuờng xuyên, và xông bằng mùi chanh sả.\\r\\n- Xe luôn bảo dưỡng đều đặn định kỳ và vệ sinh khoang máy, nội thất sạch sẽ.\\r\\n- Chỗ ngồi đằng sau rộng thoải mái, cốp xe to để được nhiều đồ.\\r\\n\\r\\nTiện ích\\r\\n- Xe được dán phim cách nhiệt giúp mát, tránh nóng, đỡ đau mắt khi trời nóng.\\r\\n- Xe có trang bị cổng sạc siêu nhanh giúp sạc pin điện thoại và các thiết bị điện tử khác.\\r\\n- Xe đã dán ETC và luôn đủ tiền đi qua các trạm thu phí.\\r\\n- Xe có kèm theo 1 xe đẩy hàng, 1 xe kéo để vận chuyển nhiều đồ.\\r\\n- Xe có dây kích bình điện, máy bơm hơi, và thiết bị kích bình điện di động, 2 dù lớn nhỏ\\r\\n\\r\\nCập nhật mới\\r\\n- Xe mới bảo dưỡng Tháng 09/2023, nhớt, nước lau kính đầy đủ, phục vụ các chuyến đi xa.\\r\\n- Mới thay 4 lốp Michelin từ Tháng 8/2022\\r\\n- Đánh bóng, không có vết trầy\\r\\n\\r\\nXăng sau khi về nếu dư mình xin gửi lại tiền chênh\\r\\nMong mọi người vì sức khoẻ cộng đồng không hút thuốc trên xe , xin cảm ơn tất cả khách hàng mến thương.\\r\\nChúc quý khách có chuyến hành trình vui vẻ và vạn dặm bình an!! Sau khi book xe add zalo (sđt) hỗ trợ và đặt lịch.', '1722000', '71I50800', 'Số tự động', 'Xăng', 7.50, 5, 5, 103, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(104, 'TOYOTA VIOS 2023', 'Công ty em cần cho thuê xe 5 chổ đời 2024 siêu tiết kiệm xăng chạy Grab/Be/Gojet:\\r\\n\\r\\n+ VIOS SEDAN 2024\\n\\r\\n+ Giá cả hợp lý và uy tín.\\n\\r\\n+ Xe biển vàng đầy đủ giấy tờ đang hoạt động cho thuê tháng, ký HĐ lâu dài\\r\\n\\r\\n+ Có bảo hiểm 2 chiều\\r\\n\\r\\n+ Xe mới sạch sẽ ,đủ trang bị cho người thuê\\r\\n\\r\\n+ Thủ tục thuê đơn giản. xe giao liền + Bãi xe ở Quận 11 Cảm ơn mọi người đã quan tâm.', '1205000', '54I47091', 'Số sàn', 'Xăng', 8.00, 5, 9, 104, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(105, 'MITSUBISHI TRITON 2022', 'MITSUBISHI TRITON GLX 2022- Số Tự Động -1 cầu.\\r\\nXe đăng ký tháng 07/2022- sạch sẽ, tiết kiệm nhiên liệu.\\r\\nKích thước lòng thùng xe - D1520*R1470*C875.\\r\\nXe có gắn nắp thùng cao.\\r\\nXe đã dán thẻ VETC - thu phí tự động không dừng.\\r\\nChủ xe thân thiện, vui vẻ, nhiệt tình.', '1722000', '33W79449', 'Số tự động', 'Dầu diesel', 7.00, 5, 8, 105, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(106, 'MAZDA 6 Luxury 2020', 'MAZDA 6 2020\\r\\n', '1814000', '20H49128', 'Số tự động', 'Xăng', 7.00, 5, 6, 106, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(107, 'MITSUBISHI XPANDER 2022', 'MITSUBISHI XPANDER 2022\\r\\n', '1722000', '77M42993', 'Số tự động', 'Xăng', 0.00, 2, 8, 107, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(108, 'TOYOTA FORTUNER 2022', 'Toyota fortuner máy dầu số tự động đăng ký tháng 8 năm 2022', '2962000', '35C95720', 'Số tự động', 'Dầu diesel', 6.00, 2, 9, 108, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(109, 'KIA MORNING 2021', 'Ít tiêu hao nhiên liệu', '861000', '23O99201', 'Số tự động', 'Xăng', 0.00, 1, 5, 109, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(110, 'MAZDA 2 2016', 'Mazda2, xe gia đình, số tự động, full bảo hiểm\\r\\n5l/100km, xe còn mới, tình trạng hoàn hảo. Bao đi Hà Nội 2 vòng\\r\\ncó camera hành trình, có CC và Lim để đi xa và tránh bắn tốc độ\\r\\nxe ở sau lưng Cfe Koi, hẻm 453 Lê Hồng Phong', '1297000', '46H69289', 'Số tự động', 'Xăng', 5.00, 5, 6, 110, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(111, 'FORD EVEREST 2011', 'FORD EVEREST 2010', '1722000', '24E77114', 'Số tự động', 'Dầu diesel', 9.00, 2, 4, 111, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(112, 'MITSUBISHI XPANDER 2023', '\\tMITSUBISHI XPANDER 2023', '1677000', '59M13827', 'Số tự động', 'Xăng', 0.00, 2, 8, 112, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(113, 'VINFAST VF8 PLUS 2022', 'VINFAST VF8 PLUS 2022\\r\\n', '2583000', '48T58182', 'Số tự động', 'Điện', 510.00, 5, 29, 113, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(114, 'MAZDA CX5 Deluxe 2018', 'MAZDA CX5 2018', '1550000', '64O21205', 'Số tự động', 'Xăng', 8.00, 5, 6, 114, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(116, 'SUZUKI SWIFT 2020', 'SUZUKI SWIFT 2020', '1148000', '30Y92404', 'Số tự động', 'Xăng', 6.00, 5, 19, 116, '2024-02-07 02:53:46', '2024-02-24 01:51:41'),
(117, 'SUZUKI XL7 2020', 'Suzuki XL7 2020\\r\\n- Số Tự Động\\r\\n- Màng hình android 10in full chức năng\\r\\n- Có sẵn 5g , google map , vietmap\\r\\n- Màu thời trang\\r\\n- Dễ chạy , êm ái , mượt mà .\\r\\n- Cảm biến lùi\\r\\n- Camera Lùi \\r\\nRất hân hạnh được phục vụ bà con .', '1332000', '66X50395', 'Số tự động', 'Xăng', 7.00, 2, 19, 117, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(118, 'VINFAST LUX A 2020', 'Vinfast LuxA năm 2020\\r\\nXe gia đình, sạch sẽ, máy móc nguyên bản, bảo dưỡng định kỳ\\r\\nRộng rãi êm ái', '2066000', '47Z52911', 'Số tự động', 'Xăng', 9.00, 5, 29, 118, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(119, 'KIA CERATO 2021', 'Kia cerato đki cuối 2021 xe gia đình mới đẹp nội thất nguyên bản ,sạch sẻ bảo dưởng thường xuyên , xe rộng rãi tiện nghi phù hợp cho gđ du lịch \\r\\nXe trang bị cảm biến lùi camera hành trình camera lùi . Màn hình anroid . Xe bọc da trần. Đi êm ái dàn máy lạnh vệ sinh thường xuyên', '1378000', '43F70846', 'Số sàn', 'Xăng', 0.00, 5, 5, 119, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(120, 'KIA MORNING 2009', 'Kiamorning 2010 số sàn, xe nhà đi, nội thất mới sang trọng. Hệ thống máy lạnh mới nâng cấp', '781000', '63U49364', 'Số sàn', 'Xăng', 6.00, 5, 5, 120, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(121, 'HONDA CITY 2020', 'HONDA CITY 2020', '1378000', '68G86464', 'Số tự động', 'Xăng', 0.00, 5, 10, 121, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(122, 'MAZDA 3 Deluxe 2022', 'Quy định khác:\\r\\n◦ Sử dụng xe đúng mục đích.\\r\\n◦ Không sử dụng xe thuê vào mục đích phi pháp, trái pháp luật.\\r\\n◦ Không sử dụng xe thuê để cầm cố, thế chấp.\\r\\n◦ Không hút thuốc, nhả kẹo cao su, xả rác trong xe.\\r\\n◦ Không chở hàng quốc cấm dễ cháy nổ.\\r\\n◦ Không chở hoa quả, thực phẩm nặng mùi trong xe.\\r\\n◦ Khi trả xe, nếu xe bẩn hoặc có mùi trong xe, khách hàng vui lòng vệ sinh xe sạch sẽ hoặc gửi phụ thu phí vệ sinh xe.\\r\\nTrân trọng cảm ơn, chúc quý khách hàng có những chuyến đi tuyệt vời !', '2296000', '40P42477', 'Số tự động', 'Xăng', 6.00, 5, 6, 122, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(123, 'CHEVROLET CAPTIVA 2008', 'Chevrolet captiva số sàn đời 2008 ,màu bạc , ghế da màu be', '758000', '55F35329', 'Số sàn', 'Xăng', 9.00, 2, 3, 123, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(124, 'NISSAN ALMERA VL 2022', 'NISSAN ALMERA VL 2022\\r\\n', '1469000', '32D33800', 'Số tự động', 'Xăng', 4.50, 5, 14, 124, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(125, 'HONDA CIVIC G 2019', 'xe honda civic 2019 std tiếc kiệm xăng', '2480000', '41H20630', 'Số tự động', 'Xăng', 0.00, 5, 10, 125, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(126, 'NISSAN X TRAIL 2016', 'Nissan X-trail SUV 5+2, chạy êm, đầm, chắc tay. Cảm giác lái tuyệt vời. Đã Nâng cấp bộ tăng tốc của UK (Anh Quốc) nên xe đi rất mượt, tiết kiệm xăng lên đến 10% (tuỳ theo tải trọng và người lái)\\r\\n- Vỏ xe Michelin mới thay cực kỳ bám đường, an toàn khi chạy trong trời mưa\\n- Hệ thống Active Chassis Control giúp thân xe luôn ổn định, không bị shock khi chạy đường gập ghềnh và chòng chành khi vào cua.\\r\\n- Điều hoà 2 dàn lạnh độc lập\\r\\n- Máy xăng 2.0, số tự động, tiết kiệm xăng với chế độ Eco\\r\\n- Ghế da xịn, ghế lái không trọng lực (Zero Gravity) nên đi đường trường không lo đau lưng\\n- Máy lọc không khí khử mùi, diệt virus\\n- Óp vô lăng Catepillar chống trượt tay\\r\\n- Có camera lùi\\r\\n- Cửa sổ trời Panorama\\r\\n-2 ghế trước chỉnh điện\\r\\n- Cruise Control phù hợp chạy cao tốc\\r\\n- Có sẵn Vietmap cảnh báo tốc độ\\r\\n- Có sẵn ổ cắm điện 220V, ổ cắm sạc pin điện thoại USB và USB-C', '1722000', '27C99662', 'Số tự động', 'Xăng', 0.00, 2, 14, 126, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(127, 'HYUNDAI I10 2018', 'Huyndai Grand I10 đăng kí 12/2018\\r\\nXe gia đình sử dụng còn mới + đẹp , bảo dưỡng định kì\\r\\nXe trang bị đầy đủ công nghệ giải trí : màn hình Androi OledC2 , bản đồ VIETMAP NAVITA bản quyền , camera hành trình , camera lùi cảnh báo, định vị GPS toàn cầu ....\\r\\nCảm ơn khách hàng đã ủng hộ em :)', '1722000', '73L23647', 'Số sàn', 'Xăng', 5.00, 5, 11, 127, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(128, 'HYUNDAI ACCENT 2022', 'HYUNDAI ACCENT 2022\\r\\n', '1205000', '70R78867', 'Số tự động', 'Xăng', 7.50, 1, 11, 128, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(129, 'FORD EVEREST 2021', 'Ford Everet 2021 mang động cơ dầu số tự động thoải mái cho việc du lịch gia đình mà trải nghiệm những cung đường khó khăn', '2985000', '21I44524', 'Số tự động', 'Dầu diesel', 8.00, 2, 4, 129, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(130, 'TOYOTA VIOS 2022', 'VIOS G đăng ký 2022.\\r\\nXe bảo dưỡng hãng đầy đủ.\\r\\nForm xe rộng rãi, cốp to chứa nhiều đồ.', '1768000', '26T34958', 'Số tự động', 'Xăng', 4.00, 5, 9, 130, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(131, 'HONDA CITY 2023', '???? Xe mới lăn bánh T08/2023\\r\\n???? Ghế Full da cao cấp (chủ tự nâng cấp)\\r\\n???? An toàn xe: 6 túi khí (ngang xe cao cấp)\\r\\n???? Âm thanh siêu hay: dàn 8 loa (bass, treble đầy đủ)\\r\\n???? Dàn đèn trước sau Full Led, có đèn nhận diện ban ngày\\r\\n???? Camera hành trình.\\r\\n???? Khoang xe ngồi + cốp sau => rộng nhất phân khúc Sedan B.\\r\\n???? Có Cruise Control, lẫy chuyển số trên Vô lăng.\\r\\n???? Nhiên liệu tiêu hao cực thấp #5-6L/100km', '1607000', '35V81276', 'Số tự động', 'Xăng', 5.00, 5, 10, 131, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(133, 'MAZDA 3 Deluxe 2016', '???? Book 3 ngày tặng 1 ngày (ko áp dụng lễ tết T7-cn)\\r\\n Chấp nhận thanh toán thẻ tín dụng.\\r\\n\\r\\nMazda3 nội thất Châu Âu mới lên cực êm. (Check ảnh)\\r\\nXe gia đình bảo dưỡng định kì, ít chạy máy bốc\\r\\nMáy 1,5L ít hao xăng  7l/100km\\r\\nBiển số đẹp, đèn trước sau Audi 2.0, lên pô Mẹc sport, Cam hành trình, cảm biến tiến lùi, gương auto, volang Cruise Controll, \\r\\nNóc có cửa trời phủ Panorama thuỷ tinh siêu bóng cách nhiệt, thảm thái lan và nóc 4D\\r\\nXe đời ko cao nhưng chất lượng là 5 sao', '1722000', '45I69190', 'Số tự động', 'Xăng', 6.00, 1, 6, 133, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(134, 'SUZUKI XL7 2021', 'Suzuki XL7 - Số tự động 7 chổ\\r\\nXe đời mới 2021, mới đẹp và dễ sử dụng\\r\\nĐộng cơ xăng tiết kiệm nhiên liệu', '1562000', '69D66511', 'Số tự động', 'Xăng', 6.00, 2, 19, 134, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(135, 'VINFAST LUX A 2019', 'VINFAST LUX A 2.0 2020\\r\\n', '2526000', '39T42682', 'Số tự động', 'Xăng', 0.00, 5, 29, 135, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(138, 'HONDA CIVIC G 2018', 'Honda civic số tự động,trang bị màn hình giải trí android 4g nghe nhạc youtube , bản đồ vietmap s2 cảnh báo tốc độ, cam hành trình, cam cặp lề, cảm biến áp suất lốp,bi led siêu sáng ban đêm, sup loa nghe nhạc bass, auto hold dừng đèn đỏ không cần phanh chân, cruise control tốc độ giới hạn ! Ghế da sạch sẽ , nội thất mới...xe gia đình nên vệ sinh thường xuyên ,có máy khuyêch tán tinh dầu thơm cho nhà mình xài trong xe...xe có bảo hiểm 2 chiều!', '976000', '50B33130', 'Số tự động', 'Xăng', 6.00, 5, 10, 138, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(140, 'TOYOTA INNOVA 2016', 'TOYOTA INNOVA E 2016', '1642000', '56G97587', 'Số sàn', 'Xăng', 0.00, 2, 9, 140, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(141, 'VINFAST FADIL 2020', 'xe vinfast fadil số tự động đăng ký ngày 18/12/2020 xe gia đình nội thất nguyên bản , sạch sẽ bảo dưỡng thường xuyên rữa xe miễn phí cho khách .\\r\\nXe rộng dãi tiện nghi phù hợp cho gia đình nhỏ đi du lịch\\r\\nXe trang bị cảm ứng ngạt mua tự động , cảm ứng lùi, camera hành trình, đọc biển báo , hệ thống giải trí và nhiều tiện ích khác', '1545000', '56S13346', 'Số tự động', 'Xăng', 5.00, 1, 29, 141, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(143, 'NISSAN ALMERA EL 2023', 'biển vàng', '1492000', '32A53285', 'Số tự động', 'Xăng', 4.60, 5, 14, 143, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(144, 'HYUNDAI ACCENT 2023', 'Xe hyundai accent std,trang bị đầy đủ tiện nghi,xe sạch sẽ\\r\\nRữa xe miễn phí cho khách sau khi thuê\\r\\nGiao xe miễn phí trong phạm vi 10km\\r\\nCam hành trình đầy đủ\\r\\nĐèn tự động', '1238000', '23A74689', 'Số tự động', 'Xăng', 0.00, 1, 11, 144, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(145, 'TOYOTA INNOVA 2019', 'Xe Toyota Innova số sàn máy xăng chạy tiết kiệm nhiên liệu. Máy móc vận hành êm ái. Ngoại hình đẹp. Xe gia đình nên giữ gìn vệ sinh sạch sẽ!', '1722000', '25W22759', 'Số sàn', 'Xăng', 8.00, 2, 9, 145, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(146, 'TOYOTA FORTUNER 2018', 'Xe Toyota Fortuner 2018 số sàn máy dầu chạy tiết kiệm nhiên liệu. Máy móc vận hành êm ái. Ngoại hình đẹp. Xe gia đình nên giữ gìn vệ sinh sạch sẽ!', '2066000', '42C47549', 'Số sàn', 'Dầu diesel', 0.00, 2, 9, 146, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(148, 'TOYOTA VELOZ CROSS 2022', 'TOYOTA VELOZ CROSS 2023', '1390000', '25N91761', 'Số tự động', 'Xăng', 6.00, 2, 9, 148, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(149, 'NISSAN NAVARA 4x4 2017', 'Xe Nissan Navara EL -2017 màu xanh, số tự động, máy dầu.\\r\\nXe ít sử dụng nên còn rất mới, động cơ 2.5, vận hành êm ái mạnh mẽ nhưng đầm chắc như SUV, có thùng chở hàng phía sau, chở được khối lượng hàng lên đến 650kg, có nắp đậy kín mà không bị cấm tải. (DẠNG NẮP THÙNG THẤP)\\r\\nĐây là chiếc bán tải gầm cao êm ái nhất, thực dụng, kinh tế nhất cho người sử dụng.\\r\\nXe tự tin vận hành trên nhiều địa hình phức tạp.', '1722000', '34T34974', 'Số tự động', 'Dầu diesel', 7.00, 5, 14, 149, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(150, 'TOYOTA VIOS 2019', 'Xe Toyota Vios số tự động đời 2019. Xe gia đình được bảo dưỡng đầy đủ, nội thất sạch sẽ', '1378000', '32I14313', 'Số tự động', 'Xăng', 6.00, 5, 9, 150, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(151, 'HYUNDAI ACCENT 2021', 'xe gia đình sạch sẽ, mới đẹp, máy mạnh như mới mua', '1607000', '43A68611', 'Số tự động', 'Xăng', 6.50, 5, 11, 151, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(153, 'FORD RANGER XLS 4x2 2023', 'FORD RANGER XL 2023', '2434000', '51I67480', 'Số tự động', 'Dầu diesel', 0.00, 5, 4, 153, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(154, 'SUZUKI CIAZ 2019', 'Ciaz 2019 số tự động, 5 chỗ rộng rãi', '1492000', '67N47016', 'Số tự động', 'Xăng', 7.00, 5, 19, 154, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(155, 'TOYOTA CAMRY 2.0Q 2022', 'Xe camry 2.5Q đăng ký tháng 3 nam 2022\\r\\nXe mới, đầy đủ tiện nghi', '2755000', '35O88098', 'Số tự động', 'Xăng', 8.00, 5, 9, 155, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(156, 'VINFAST LUX A 2021', 'Xe vinfast lux a động cơ tubor 2.0 mạnh mẽ êm ái trên mọi nẻo đường phụ kiện theo xe đủ dùng,camera hành trình có cảnh báo giao thông,áp suất lốp,cốp điện,rèm chỉnh điện,kính tự động,sấy kính tựng động,ga tự động,apple carlpay tiện lợi kết nối điện thoại xem bản đồ trực tiếp trên màn hình xe,và những tính năng an toàn qúy khách có tự hỏi google để biết thêm tính năng…', '1894000', '55Z86813', 'Số tự động', 'Xăng', 8.00, 5, 29, 156, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(157, 'MITSUBISHI XPANDER 2019', 'mishu xpander 7 chỗ, xe gia đình sử dụng.', '1665000', '54X13533', 'Số tự động', 'Xăng', 0.00, 2, 8, 157, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(158, 'HONDA CRV G 2020', 'Xe nhà nên mới, xe chạy ít hao xăng. Nội thất & ngoại thất mới đẹp', '2274000', '78G35581', 'Số tự động', 'Xăng', 8.90, 2, 10, 158, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(159, 'VINFAST VF E34 2022', 'Xe điện VF E34 màu đen còn mới như vừa xuất xưởng.\\r\\nXe điện nên chạy cực kì tiết kiệm và không lo có mùi gây khó chịu ????????????????????.????????????\\r\\n???? Trang bị đầy đủ camera 360, camera hành trình, cảm biến áp suất lốp, cảm biến full trước sau, cảnh báo đầy đủ thứ, màn hình giải trí đầy đủ,…..⭐️⭐️⭐️\\r\\nĐặ????????????ệ???? xe có trang bị ????????????????????????????????????????????????ẫ????đườ???????? và ????ả????????????á????????ố????độ không lo bị vi phạm giao thông!????\\r\\n???? Xe chạy được ????????????????????/????????ầ????????ạ???? đầy.\\r\\n???? Cực kì tiết kiệm Chỉ 1k /1 KM - 100km chỉ 100k\\r\\n????????ạ????????ạ????????ó????????ủ????ó????????????????à????????????ố???? có cập nhật và chỉ đường trên xe luôn cực kì tiện lợi và ????ễ????ì????????????ạ????????ạ????.\\r\\n????????ạ????????ầ????????????????????ú???? là ????????ạ????đượ???? tiếp khoảng 180-????????????????????', '1550000', '76P97069', 'Số tự động', 'Điện', 285.00, 5, 29, 159, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(160, 'TOYOTA VIOS 2020', 'Mình cho thuê xe 5c xe gia đình biển trắng tự lái ,có tài hoặc nhận đưa rước đi các tỉnh thành giá rẻ khách hàng có nhu cầu liên hệ e \\r\\nXe vios 2020 bản G\\r\\nXe trang bị đầy đủ thiết bị', '1469000', '28Z49680', 'Số tự động', 'Xăng', 0.00, 5, 9, 160, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(161, 'DAEWOO GENTRA 2007', 'Daewoo Gentra Sports 2007 nội thất 5D máy lạnh OK, Xe gia đình đi Máy 1,5 tiết kiệm Xăng,Màn hình cảm ứng Camera lùi rõ ràng...', '755000', '20E82922', 'Số sàn', 'Xăng', 7.00, 5, 17, 161, '2024-02-07 02:53:46', '2024-02-07 02:53:46');
INSERT INTO `xe` (`idxe`, `tenxe`, `mieuta`, `gia`, `bienso`, `truyendong`, `nhienlieu`, `nhienlieutieuhao_km`, `iddongxe`, `idhangxe`, `idhinhxe`, `created_at`, `updated_at`) VALUES
(162, 'KIA MORNING 2012', 'Xe sạch đẹp có tinh dầu\\r\\n- Nghe nhạc bluetooth, youtube, zingmp3\\r\\n- Giải trí Android kết nối wifi đầy đủ\\r\\n- Dẫn đường, ra lệnh bằng giọng nói\\r\\n- Ghế tài xế có thảm bi thoáng khí và ghế tựa chống mỏi\\r\\n- Trần và thảm bọc 6D, thảm 2 lớp\\r\\n- Chủ xe thân thiện, nhiệt tình\\r\\n- Có hướng dẫn nếu muốn tập lái\\r\\n- Xe phù hợp tập lái và đi gia đình giá rẻ', '1143000', '57W13627', 'Số sàn', 'Xăng', 5.00, 5, 5, 162, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(163, 'MITSUBISHI ATTRAGE 2021', 'xe mới đăng ký 2021 ,xe nguyên bản. xe chạy rất tiết kiệm xăng. Bảo dưỡng định kì.', '1297000', '57J67017', 'Số sàn', 'Xăng', 5.00, 1, 8, 163, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(164, 'VINFAST FADIL 2021', 'Vinfast Fadil số tự động đăng ký tháng 01/2022\\r\\nXe gia đình mới đẹp, nội thấp nguyên bản, sạch sẽ, bảo dưỡng thường xuyên.\\r\\nXe chạy mượt, đem lại cảm giác lái, an toàn, tiện nghi, phù hợp cho gia đình 4 người đi du lịch\\r\\nSđt [sdt] Mr.Đông\\r\\nKhu vực : Tân An-Thủ Thừa\\r\\nGhế trẻ em cho trẻ dưới 6 tuổi', '971000', '32L24831', 'Số tự động', 'Xăng', 6.00, 1, 29, 164, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(165, 'TOYOTA VIOS 2017', 'Toyota vios 2017 số sàn, xe gia đình sạch sẽ tiện nghi, trang bị màn hình androi, camera hành trình, cam lùi an toàn cho lái mới.', '1091000', '77N16289', 'Số sàn', 'Xăng', 5.00, 5, 9, 165, '2024-02-07 02:53:46', '2024-02-07 02:53:46'),
(166, 'VINFAST VF5 2023', 'VINFAST VF5 2023\\r\\n◦ KHÔNG HÚT THUỐC trong xe. Quý khách vui lòng thanh toán phí khử mùi 700.000đ\\r\\n (phí thay mới lọc gió điều hoà) nếu trong xe có mùi thuốc lá khi trả xe. Mùi thuốc lá tốn rất nhiều chi phí để loại bỏ và gây say xe cho người sử dụng sau. Là một khách hàng văn minh, xin vui lòng hút thuốc bên ngoài xe.\\r\\nPhí sạc pin: tính theo giá trạm sạc công cộng\\r\\nPhí cầu đường: tính theo từng lượt qua trạm\\r\\nPhí giao xe tận nơi: 15.000đ/km\\r\\nĐi được 300~340km khi pin đầy (tuỳ loại đường và mức điều hoà). Có trang bị sẵn bộ sạc 7.4kw theo xe, để sạc điện 220v tại nhà khi cần.', '1192000', '27S71087', 'Số tự động', 'Điện', 300.00, 5, 29, 166, '2024-02-07 02:53:46', '2024-02-07 02:53:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`iddanhgia`),
  ADD KEY `danhgia_iduser_foreign` (`iduser`),
  ADD KEY `danhgia_idxe_foreign` (`idxe`);

--
-- Indexes for table `dongxe`
--
ALTER TABLE `dongxe`
  ADD PRIMARY KEY (`iddongxe`);

--
-- Indexes for table `giaodich`
--
ALTER TABLE `giaodich`
  ADD PRIMARY KEY (`idgiaodich`),
  ADD KEY `giaodich_iduser_foreign` (`iduser`),
  ADD KEY `giaodich_idxe_foreign` (`idxe`);

--
-- Indexes for table `hangxe`
--
ALTER TABLE `hangxe`
  ADD PRIMARY KEY (`idhangxe`);

--
-- Indexes for table `hinhxe`
--
ALTER TABLE `hinhxe`
  ADD PRIMARY KEY (`idhinhxe`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhoadon`),
  ADD KEY `hoadon_idgiaodich_foreign` (`idgiaodich`),
  ADD KEY `hoadon_iduser_foreign` (`iduser`),
  ADD KEY `hoadon_idxe_foreign` (`idxe`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_medially_type_medially_id_index` (`medially_type`,`medially_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_idrole_foreign` (`idrole`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`idxe`),
  ADD KEY `xe_iddongxe_foreign` (`iddongxe`),
  ADD KEY `xe_idhangxe_foreign` (`idhangxe`),
  ADD KEY `xe_idhinhxe_foreign` (`idhinhxe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `iddanhgia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dongxe`
--
ALTER TABLE `dongxe`
  MODIFY `iddongxe` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `giaodich`
--
ALTER TABLE `giaodich`
  MODIFY `idgiaodich` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hangxe`
--
ALTER TABLE `hangxe`
  MODIFY `idhangxe` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `hinhxe`
--
ALTER TABLE `hinhxe`
  MODIFY `idhinhxe` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhoadon` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idrole` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xe`
--
ALTER TABLE `xe`
  MODIFY `idxe` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`),
  ADD CONSTRAINT `danhgia_idxe_foreign` FOREIGN KEY (`idxe`) REFERENCES `xe` (`idxe`);

--
-- Constraints for table `giaodich`
--
ALTER TABLE `giaodich`
  ADD CONSTRAINT `giaodich_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`),
  ADD CONSTRAINT `giaodich_idxe_foreign` FOREIGN KEY (`idxe`) REFERENCES `xe` (`idxe`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_idgiaodich_foreign` FOREIGN KEY (`idgiaodich`) REFERENCES `users` (`iduser`),
  ADD CONSTRAINT `hoadon_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`),
  ADD CONSTRAINT `hoadon_idxe_foreign` FOREIGN KEY (`idxe`) REFERENCES `xe` (`idxe`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_idrole_foreign` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`);

--
-- Constraints for table `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_iddongxe_foreign` FOREIGN KEY (`iddongxe`) REFERENCES `dongxe` (`iddongxe`),
  ADD CONSTRAINT `xe_idhangxe_foreign` FOREIGN KEY (`idhangxe`) REFERENCES `hangxe` (`idhangxe`),
  ADD CONSTRAINT `xe_idhinhxe_foreign` FOREIGN KEY (`idhinhxe`) REFERENCES `hinhxe` (`idhinhxe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
