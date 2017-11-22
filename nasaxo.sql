-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2017 lúc 09:31 AM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nasaxo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cartproduct`
--

CREATE TABLE `cartproduct` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Product` int(10) UNSIGNED NOT NULL,
  `CreateDate` date NOT NULL,
  `Count` int(11) NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `city`
--

INSERT INTO `city` (`id`, `Name`, `Description`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 'Hồ Chí Minh', '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id` int(10) UNSIGNED NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id`, `Description`, `Color`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, '', 'Đen', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Users` int(10) UNSIGNED NOT NULL,
  `ID_Product` int(10) UNSIGNED NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `deliveryplace`
--

CREATE TABLE `deliveryplace` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_User` int(10) UNSIGNED NOT NULL,
  `ID_Ward` int(10) UNSIGNED NOT NULL,
  `ReceiveName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumberPhone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DeliveryPlaces` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `deliveryplace`
--

INSERT INTO `deliveryplace` (`id`, `ID_User`, `ID_Ward`, `ReceiveName`, `NumberPhone`, `DeliveryPlaces`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Nam', '123123123', 'UIT', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `district`
--

CREATE TABLE `district` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_City` int(10) UNSIGNED NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `district`
--

INSERT INTO `district` (`id`, `Name`, `Description`, `ID_City`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 'Thủ Đức', '', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Users` int(10) UNSIGNED NOT NULL,
  `CreateDate` date NOT NULL,
  `IsNotify` tinyint(1) NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_11_17_122656_create_Users_table', 1),
(2, '2017_11_17_130400_create_Picture_table', 1),
(3, '2017_11_17_130450_create_Role_table', 1),
(4, '2017_11_17_130548_create_User_Role_table', 1),
(5, '2017_11_17_130623_create_Message_table', 1),
(6, '2017_11_17_130749_create_ProductCategory_table', 1),
(7, '2017_11_17_130750_create_Product_table', 1),
(8, '2017_11_17_130755_create_Comment_table', 1),
(9, '2017_11_17_130756_create_Rating_table', 1),
(10, '2017_11_17_130800_create_ProductPicture_table', 1),
(11, '2017_11_17_130827_create_CartProduct_table', 1),
(12, '2017_11_17_130856_create_ProductPrice_table', 1),
(13, '2017_11_17_130950_create_Size_table', 1),
(14, '2017_11_17_130954_create_ProductSize_table', 1),
(15, '2017_11_17_131020_create_Color_table', 1),
(16, '2017_11_17_131031_create_ProductColor_table', 1),
(17, '2017_11_17_131040_create_Promotion_table', 1),
(18, '2017_11_17_131041_create_City_table', 1),
(19, '2017_11_17_131042_create_District_table', 1),
(20, '2017_11_17_131043_create_Ward_table', 1),
(21, '2017_11_17_131044_create_DeliveryPlace_table', 1),
(22, '2017_11_17_131110_create_Order_table', 1),
(23, '2017_11_17_131114_create_OrderProduct_table', 1),
(24, '2017_11_17_131507_create_PromotionPicture_table', 1),
(25, '2017_11_17_131646_create_Cart_table', 1),
(26, '2017_11_19_031920_create_UsersPicture_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Promotion` int(10) UNSIGNED NOT NULL,
  `ID_DeliveryPlace` int(10) UNSIGNED NOT NULL,
  `CreateDate` date NOT NULL,
  `ConfirmDate` date NOT NULL,
  `IsPaied` tinyint(1) NOT NULL,
  `IsDelivered` tinyint(1) NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `Description`, `ID_Promotion`, `ID_DeliveryPlace`, `CreateDate`, `ConfirmDate`, `IsPaied`, `IsDelivered`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, '', 1, 1, '2017-11-01', '2017-11-01', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderproduct`
--

CREATE TABLE `orderproduct` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Order` int(10) UNSIGNED NOT NULL,
  `ID_Product` int(10) UNSIGNED NOT NULL,
  `ID_Size` int(10) UNSIGNED NOT NULL,
  `ID_Color` int(10) UNSIGNED NOT NULL,
  `Count` int(11) NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderproduct`
--

INSERT INTO `orderproduct` (`id`, `ID_Order`, `ID_Product`, `ID_Size`, `ID_Color`, `Count`, `Description`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, 1, 20, '', 0, NULL, NULL),
(2, 1, 14, 1, 1, 19, '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `picture`
--

CREATE TABLE `picture` (
  `id` int(10) UNSIGNED NOT NULL,
  `Url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `picture`
--

INSERT INTO `picture` (`id`, `Url`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 'products/1.jpg', 0, NULL, NULL),
(2, 'products/2.jpg', 0, NULL, NULL),
(3, 'products/3.jpg', 0, NULL, NULL),
(4, 'products/4.jpg', 0, NULL, NULL),
(5, 'products/5.jpg', 0, NULL, NULL),
(6, 'products/6.jpg', 0, NULL, NULL),
(7, 'products/7.jpg', 0, NULL, NULL),
(8, 'products/8.jpg', 0, NULL, NULL),
(9, 'products/9.jpg', 0, NULL, NULL),
(10, 'products/10.jpg', 0, NULL, NULL),
(11, 'products/11.jpg', 0, NULL, NULL),
(12, 'products/12.jpg', 0, NULL, NULL),
(13, 'products/13.jpg', 0, NULL, NULL),
(14, 'products/14.jpg', 0, NULL, NULL),
(15, 'promotions/1.jpg', 0, NULL, NULL),
(16, 'promotions/2.jpg', 0, NULL, NULL),
(17, 'promotions/3.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_ProductCategory` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `ID_ProductCategory`, `Name`, `Description`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sơ mi Tay Dài Đen Slim Fit Japanese', 'Chất sơ mi Nhật, vải mềm, mịn tạo cảm giác thoải mái cho người mặc.', 0, NULL, NULL),
(2, 1, 'Áo sơ mi tay dài 2 lớp trắng', 'Chất liệu lụa, vải mỏng, mềm mịn.', 0, NULL, NULL),
(3, 1, 'Áo sơ mi tay ngắn cổ lông vũ', 'Chất liệu vải voan cao cấp giúp người mặc cảm thấy thoáng mát, thoải mái.', 0, NULL, NULL),
(4, 1, 'Áo sơ mi tay ngắn xếp ly xám', 'Chất liệu voan cao cấp, vải mỏng, mềm, mịn giúp người mặc cảm thấy thoải mái, thoáng mát.', 0, NULL, NULL),
(5, 1, 'Áo sơ mi Katto trắng', 'Chất liệu cotton, mềm mịn, thấm hút mồ hôi tốt.', 0, NULL, NULL),
(6, 1, 'Áo sơ mi họa tiết 1B trắng mũi tên', 'Chất liệu voan cát cao cấp giúp người mặc cảm thấy thoải mái. thoáng mát.', 0, NULL, NULL),
(7, 1, 'Áo sơ mi 1B trắng', 'Được may với 2 loại chất liệu: voan cát và lụa. Cả 2 chất liệu đều rất mỏng và mềm mịn.', 0, NULL, NULL),
(8, 1, 'Áo sơ mi tay ngắn form rộng trắng sọc viền đen', 'Chất liệu lụa Nhật cao cấp.', 0, NULL, NULL),
(9, 1, 'Áo sơ mi tay ngắn form rộng xanh navy viền trắng', 'Chất vải kate Nhật cao cấp. Vải mỏng, mềm mịn , độ thấm hút mồ hôi tốt mang ại cảm giác thoái mái thoáng mát cho người mặc.', 0, NULL, NULL),
(10, 1, 'Áo sơ mi tay dài cổ trụ xanh navy chấm bi', 'Fom châu Á, chất vải bố, dày giúp làm đứng fom áo hơn.', 0, NULL, NULL),
(11, 3, 'Men\'s Grain Leather', '', 0, NULL, NULL),
(12, 3, 'Men\'s Muted Nylon', '', 0, NULL, NULL),
(13, 3, 'PAIGE Men\'s Kenton Filled', '', 0, NULL, NULL),
(14, 3, 'OBEY Men\'s Soto Varsity', '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcategory`
--

CREATE TABLE `productcategory` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productcategory`
--

INSERT INTO `productcategory` (`id`, `Name`, `Description`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 'T-SHIRT', '', 0, NULL, NULL),
(2, 'SHIRT', '', 0, NULL, NULL),
(3, 'COAT', '', 0, NULL, NULL),
(4, 'TROUSERS', '', 0, NULL, NULL),
(5, 'SPORT CLOTHING', '', 0, NULL, NULL),
(6, 'VEST/BLAZER COAT', '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcolor`
--

CREATE TABLE `productcolor` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Product` int(10) UNSIGNED NOT NULL,
  `ID_Color` int(10) UNSIGNED NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productpicture`
--

CREATE TABLE `productpicture` (
  `id` int(10) UNSIGNED NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `ID_Picture` int(10) UNSIGNED NOT NULL,
  `ID_Product` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productpicture`
--

INSERT INTO `productpicture` (`id`, `IsDelete`, `ID_Picture`, `ID_Product`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 1, NULL, NULL),
(2, 0, 2, 2, NULL, NULL),
(3, 0, 3, 3, NULL, NULL),
(4, 0, 4, 4, NULL, NULL),
(5, 0, 5, 5, NULL, NULL),
(6, 0, 6, 6, NULL, NULL),
(7, 0, 7, 7, NULL, NULL),
(8, 0, 8, 8, NULL, NULL),
(9, 0, 9, 9, NULL, NULL),
(10, 0, 10, 10, NULL, NULL),
(11, 0, 11, 11, NULL, NULL),
(12, 0, 12, 12, NULL, NULL),
(13, 0, 13, 13, NULL, NULL),
(14, 0, 14, 14, NULL, NULL),
(15, 0, 2, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productprice`
--

CREATE TABLE `productprice` (
  `id` int(10) UNSIGNED NOT NULL,
  `Price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date DEFAULT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `ID_Product` int(10) UNSIGNED NOT NULL,
  `Discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productprice`
--

INSERT INTO `productprice` (`id`, `Price`, `StartDate`, `EndDate`, `IsDelete`, `ID_Product`, `Discount`, `created_at`, `updated_at`) VALUES
(1, '450000', '2017-11-01', NULL, 0, 1, '10', NULL, NULL),
(2, '440000', '2017-11-01', NULL, 0, 2, '10', NULL, NULL),
(3, '320000', '2017-11-01', NULL, 0, 3, '10', NULL, NULL),
(4, '320000', '2017-11-01', NULL, 0, 4, '10', NULL, NULL),
(5, '430000', '2017-11-01', NULL, 0, 5, '10', NULL, NULL),
(6, '440000', '2017-11-01', NULL, 0, 6, '10', NULL, NULL),
(7, '460000', '2017-11-01', NULL, 0, 7, '10', NULL, NULL),
(8, '440000', '2017-11-01', NULL, 0, 8, '10', NULL, NULL),
(9, '440000', '2017-11-01', NULL, 0, 9, '10', NULL, NULL),
(10, '400000', '2017-11-01', NULL, 0, 10, '10', NULL, NULL),
(11, '400000', '2017-11-01', NULL, 0, 11, '10', NULL, NULL),
(12, '400000', '2017-11-01', NULL, 0, 12, '10', NULL, NULL),
(13, '400000', '2017-11-01', NULL, 0, 13, '10', NULL, NULL),
(14, '400000', '2017-11-01', NULL, 0, 14, '10', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productsize`
--

CREATE TABLE `productsize` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Size` int(10) UNSIGNED NOT NULL,
  `ID_Product` int(10) UNSIGNED NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotion`
--

CREATE TABLE `promotion` (
  `id` int(10) UNSIGNED NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Discount` int(11) NOT NULL,
  `BasePurchase` double(8,2) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date DEFAULT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `promotion`
--

INSERT INTO `promotion` (`id`, `Description`, `Name`, `Discount`, `BasePurchase`, `StartDate`, `EndDate`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, '', '1', 10, 200000.00, '2017-01-01', NULL, 0, NULL, NULL),
(2, '', '2', 10, 100000.00, '2017-02-01', NULL, 0, NULL, NULL),
(3, '', '3', 10, 200000.00, '2017-03-01', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotionpicture`
--

CREATE TABLE `promotionpicture` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Picture` int(10) UNSIGNED NOT NULL,
  `ID_Promotion` int(10) UNSIGNED NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `promotionpicture`
--

INSERT INTO `promotionpicture` (`id`, `ID_Picture`, `ID_Promotion`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 15, 1, 0, NULL, NULL),
(2, 16, 2, 0, NULL, NULL),
(3, 17, 3, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `Point` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Product` int(10) UNSIGNED NOT NULL,
  `ID_Users` int(10) UNSIGNED NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id` int(10) UNSIGNED NOT NULL,
  `Sizes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `Sizes`, `Description`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 'M', '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `Username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `Username`, `Password`, `Picture`, `Email`, `Description`, `IsDelete`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '', 'admin@gmail.com', '', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userspicture`
--

CREATE TABLE `userspicture` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Users` int(10) UNSIGNED NOT NULL,
  `ID_Picture` int(10) UNSIGNED NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Users` int(10) UNSIGNED NOT NULL,
  `ID_Role` int(10) UNSIGNED NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ward`
--

CREATE TABLE `ward` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_District` int(10) UNSIGNED NOT NULL,
  `IsDelete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ward`
--

INSERT INTO `ward` (`id`, `Name`, `Description`, `ID_District`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 'Làng Đại Học', '', 1, 0, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cartproduct`
--
ALTER TABLE `cartproduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cartproduct_id_product_foreign` (`ID_Product`);

--
-- Chỉ mục cho bảng `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id_users_foreign` (`ID_Users`),
  ADD KEY `comment_id_product_foreign` (`ID_Product`);

--
-- Chỉ mục cho bảng `deliveryplace`
--
ALTER TABLE `deliveryplace`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deliveryplace_id_user_foreign` (`ID_User`),
  ADD KEY `deliveryplace_id_ward_foreign` (`ID_Ward`);

--
-- Chỉ mục cho bảng `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id_city_foreign` (`ID_City`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_id_users_foreign` (`ID_Users`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id_promotion_foreign` (`ID_Promotion`),
  ADD KEY `order_id_deliveryplace_foreign` (`ID_DeliveryPlace`);

--
-- Chỉ mục cho bảng `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderproduct_id_order_foreign` (`ID_Order`),
  ADD KEY `orderproduct_id_product_foreign` (`ID_Product`),
  ADD KEY `orderproduct_id_size_foreign` (`ID_Size`),
  ADD KEY `orderproduct_id_color_foreign` (`ID_Color`);

--
-- Chỉ mục cho bảng `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id_productcategory_foreign` (`ID_ProductCategory`);

--
-- Chỉ mục cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `productcolor`
--
ALTER TABLE `productcolor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productcolor_id_product_foreign` (`ID_Product`),
  ADD KEY `productcolor_id_color_foreign` (`ID_Color`);

--
-- Chỉ mục cho bảng `productpicture`
--
ALTER TABLE `productpicture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productpicture_id_picture_foreign` (`ID_Picture`),
  ADD KEY `productpicture_id_product_foreign` (`ID_Product`);

--
-- Chỉ mục cho bảng `productprice`
--
ALTER TABLE `productprice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productprice_id_product_foreign` (`ID_Product`);

--
-- Chỉ mục cho bảng `productsize`
--
ALTER TABLE `productsize`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productsize_id_size_foreign` (`ID_Size`),
  ADD KEY `productsize_id_product_foreign` (`ID_Product`);

--
-- Chỉ mục cho bảng `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `promotionpicture`
--
ALTER TABLE `promotionpicture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotionpicture_id_picture_foreign` (`ID_Picture`),
  ADD KEY `promotionpicture_id_promotion_foreign` (`ID_Promotion`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_id_product_foreign` (`ID_Product`),
  ADD KEY `rating_id_users_foreign` (`ID_Users`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `userspicture`
--
ALTER TABLE `userspicture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userspicture_id_users_foreign` (`ID_Users`),
  ADD KEY `userspicture_id_picture_foreign` (`ID_Picture`);

--
-- Chỉ mục cho bảng `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role_id_users_foreign` (`ID_Users`),
  ADD KEY `user_role_id_role_foreign` (`ID_Role`);

--
-- Chỉ mục cho bảng `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ward_id_district_foreign` (`ID_District`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `cartproduct`
--
ALTER TABLE `cartproduct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `deliveryplace`
--
ALTER TABLE `deliveryplace`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `district`
--
ALTER TABLE `district`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `productcolor`
--
ALTER TABLE `productcolor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `productpicture`
--
ALTER TABLE `productpicture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `productprice`
--
ALTER TABLE `productprice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `productsize`
--
ALTER TABLE `productsize`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `promotionpicture`
--
ALTER TABLE `promotionpicture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `userspicture`
--
ALTER TABLE `userspicture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `ward`
--
ALTER TABLE `ward`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cartproduct`
--
ALTER TABLE `cartproduct`
  ADD CONSTRAINT `cartproduct_id_product_foreign` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_id_product_foreign` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_id_users_foreign` FOREIGN KEY (`ID_Users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `deliveryplace`
--
ALTER TABLE `deliveryplace`
  ADD CONSTRAINT `deliveryplace_id_user_foreign` FOREIGN KEY (`ID_User`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `deliveryplace_id_ward_foreign` FOREIGN KEY (`ID_Ward`) REFERENCES `ward` (`id`);

--
-- Các ràng buộc cho bảng `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_id_city_foreign` FOREIGN KEY (`ID_City`) REFERENCES `city` (`id`);

--
-- Các ràng buộc cho bảng `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_id_users_foreign` FOREIGN KEY (`ID_Users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_id_deliveryplace_foreign` FOREIGN KEY (`ID_DeliveryPlace`) REFERENCES `deliveryplace` (`id`),
  ADD CONSTRAINT `order_id_promotion_foreign` FOREIGN KEY (`ID_Promotion`) REFERENCES `promotion` (`id`);

--
-- Các ràng buộc cho bảng `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD CONSTRAINT `orderproduct_id_color_foreign` FOREIGN KEY (`ID_Color`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `orderproduct_id_order_foreign` FOREIGN KEY (`ID_Order`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `orderproduct_id_product_foreign` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `orderproduct_id_size_foreign` FOREIGN KEY (`ID_Size`) REFERENCES `size` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_id_productcategory_foreign` FOREIGN KEY (`ID_ProductCategory`) REFERENCES `productcategory` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `productcolor`
--
ALTER TABLE `productcolor`
  ADD CONSTRAINT `productcolor_id_color_foreign` FOREIGN KEY (`ID_Color`) REFERENCES `color` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productcolor_id_product_foreign` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `productpicture`
--
ALTER TABLE `productpicture`
  ADD CONSTRAINT `productpicture_id_picture_foreign` FOREIGN KEY (`ID_Picture`) REFERENCES `picture` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productpicture_id_product_foreign` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `productprice`
--
ALTER TABLE `productprice`
  ADD CONSTRAINT `productprice_id_product_foreign` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `productsize`
--
ALTER TABLE `productsize`
  ADD CONSTRAINT `productsize_id_product_foreign` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productsize_id_size_foreign` FOREIGN KEY (`ID_Size`) REFERENCES `size` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `promotionpicture`
--
ALTER TABLE `promotionpicture`
  ADD CONSTRAINT `promotionpicture_id_picture_foreign` FOREIGN KEY (`ID_Picture`) REFERENCES `picture` (`id`),
  ADD CONSTRAINT `promotionpicture_id_promotion_foreign` FOREIGN KEY (`ID_Promotion`) REFERENCES `promotion` (`id`);

--
-- Các ràng buộc cho bảng `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_id_product_foreign` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rating_id_users_foreign` FOREIGN KEY (`ID_Users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `userspicture`
--
ALTER TABLE `userspicture`
  ADD CONSTRAINT `userspicture_id_picture_foreign` FOREIGN KEY (`ID_Picture`) REFERENCES `picture` (`id`),
  ADD CONSTRAINT `userspicture_id_users_foreign` FOREIGN KEY (`ID_Users`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_id_role_foreign` FOREIGN KEY (`ID_Role`) REFERENCES `role` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_role_id_users_foreign` FOREIGN KEY (`ID_Users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ward`
--
ALTER TABLE `ward`
  ADD CONSTRAINT `ward_id_district_foreign` FOREIGN KEY (`ID_District`) REFERENCES `district` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
