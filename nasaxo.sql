-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2017 lúc 02:58 PM
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `Username`, `Password`, `Picture`, `Email`, `Description`, `IsDelete`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'admin@gmail.com', '', 0, NULL, NULL, NULL);

--
-- Cơ sở dữ liệu: `nasaxo`
--



INSERT INTO `color` (`id`, `Description`, `Color`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, '', 'fffffff', 0, NULL, NULL);

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `Name`, `Description`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 0, NULL, NULL);

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `Sizes`, `Description`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 'M', '', 0, NULL, NULL);



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
(17, 'promotions/3.jpg', 0, NULL, NULL),
(18, 'accounts/account.png', 0, NULL, NULL);

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

--
-- Đang đổ dữ liệu cho bảng `city`
--

INSERT INTO `city` (`id`, `Name`, `Description`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 'Hồ Chí Minh', '', 0, NULL, NULL);

--
-- Đang đổ dữ liệu cho bảng `color`
--
--
-- Đang đổ dữ liệu cho bảng `district`
--

INSERT INTO `district` (`id`, `Name`, `Description`, `ID_City`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 'Thủ Đức', '', 1, 0, NULL, NULL);

--
-- Đang đổ dữ liệu cho bảng `ward`
--

INSERT INTO `ward` (`id`, `Name`, `Description`, `ID_District`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 'Làng Đại Học', '', 1, 0, NULL, NULL);

--
-- Đang đổ dữ liệu cho bảng `deliveryplace`
--

INSERT INTO `deliveryplace` (`id`, `ID_User`, `ID_Ward`, `ReceiveName`, `NumberPhone`, `DeliveryPlaces`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Nam', '123123123', 'UIT', 0, NULL, NULL);


--
-- Đang đổ dữ liệu cho bảng `productcolor`
--

INSERT INTO `productcolor` (`id`, `ID_Product`, `ID_Color`, `IsDelete`, `created_at`, `updated_at`) VALUES
(46, 1, 1, 0, NULL, NULL),
(47, 2, 1, 0, NULL, NULL),
(48, 3, 1, 0, NULL, NULL),
(49, 4, 1, 0, NULL, NULL),
(50, 5, 1, 0, NULL, NULL),
(51, 6, 1, 0, NULL, NULL),
(52, 7, 1, 0, NULL, NULL),
(53, 8, 1, 0, NULL, NULL),
(54, 9, 1, 0, NULL, NULL),
(55, 11, 1, 0, NULL, NULL),
(56, 10, 1, 0, NULL, NULL),
(57, 12, 1, 0, NULL, NULL),
(58, 13, 1, 0, NULL, NULL),
(59, 14, 1, 0, NULL, NULL);

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

--
-- Đang đổ dữ liệu cho bảng `productsize`
--

INSERT INTO `productsize` (`id`, `ID_Size`, `ID_Product`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, NULL, NULL),
(2, 1, 2, 0, NULL, NULL),
(3, 1, 3, 0, NULL, NULL),
(4, 1, 4, 0, NULL, NULL),
(5, 1, 5, 0, NULL, NULL),
(6, 1, 6, 0, NULL, NULL),
(7, 1, 7, 0, NULL, NULL),
(8, 1, 8, 0, NULL, NULL),
(9, 1, 9, 0, NULL, NULL),
(10, 1, 10, 0, NULL, NULL),
(11, 1, 11, 0, NULL, NULL),
(12, 1, 12, 0, NULL, NULL),
(13, 1, 13, 0, NULL, NULL),
(14, 1, 14, 0, NULL, NULL);

--
-- Đang đổ dữ liệu cho bảng `promotion`
--

INSERT INTO `promotion` (`id`, `Description`, `Name`, `Discount`, `BasePurchase`, `StartDate`, `EndDate`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, '', '1', 10, 200000.00, '2017-01-01', NULL, 0, NULL, NULL),
(2, '', '2', 10, 100000.00, '2017-02-01', NULL, 0, NULL, NULL),
(3, '', '3', 10, 200000.00, '2017-03-01', NULL, 0, NULL, NULL);

--
-- Đang đổ dữ liệu cho bảng `promotionpicture`
--

INSERT INTO `promotionpicture` (`id`, `ID_Picture`, `ID_Promotion`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 15, 1, 0, NULL, NULL),
(2, 16, 2, 0, NULL, NULL),
(3, 17, 3, 0, NULL, NULL);


--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `Description`, `ID_Promotion`, `ID_DeliveryPlace`, `ID_User`, `CreateDate`, `ConfirmDate`, `IsPaied`, `IsDelivered`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, '', 1, 1, 1, '2017-11-01', '2017-11-01', 1, 1, 0, NULL, NULL);

--
-- Đang đổ dữ liệu cho bảng `orderproduct`
--

INSERT INTO `orderproduct` (`id`, `ID_Order`, `ID_Product`, `ID_Size`, `ID_Color`, `ID_User`, `IsInCart`, `Count`, `Description`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, 1, 1, 0, 20, '', 0, NULL, NULL),
(2, 1, 14, 1, 1, 1, 0, 19, '', 0, NULL, NULL),
(3, NULL, 1, 1, 1, 1, 1, 4, '', 0, '2017-11-27 06:53:57', '2017-11-27 06:55:53'),
(4, NULL, 14, 1, 1, 1, 1, 1, '', 0, '2017-11-27 06:56:48', '2017-11-27 06:56:48'),
(5, NULL, 2, 1, 1, 1, 1, 5, '', 0, '2017-11-27 06:57:03', '2017-11-27 06:57:06');

--
-- Đang đổ dữ liệu cho bảng `userspicture`
--

INSERT INTO `userspicture` (`id`, `ID_Users`, `ID_Picture`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 18, 0, NULL, NULL);

--
-- Đang đổ dữ liệu cho bảng `user_role`
--

INSERT INTO `user_role` (`id`, `ID_Users`, `ID_Role`, `IsDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, NULL, NULL);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
