-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2023 lúc 09:16 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `glasses`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `image`, `name`, `sort`, `created_at`, `updated_at`) VALUES
(3, 'http://127.0.0.1:8000/upload/images/1.jpg', 'ádfas', 123, '2023-01-10 19:39:16', '2023-01-12 02:17:45'),
(4, 'http://127.0.0.1:8000/upload/images/banner%202%20(1).jpg', '123wsd', 21312, '2023-01-10 19:40:13', '2023-01-12 02:26:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `thumbnail`, `name`, `parent_id`, `slug`, `seo_title`, `seo_keyword`, `seo_description`, `created_at`, `updated_at`) VALUES
(35, 'http://127.0.0.1:8000/upload/images/banner.png', 'gọng kính', 0, 'gong-kinh', 'Gọng kính', 'Gọng kính', NULL, '2023-01-11 04:18:26', '2023-01-12 11:26:16'),
(36, 'http://127.0.0.1:8000/upload/images/nhung-con-meo-de-thuong-nhat-the-gioi-6.jpg', 'Tròng kính', 0, 'Trong-kinh', 'Tròng kính', 'Tròng kính', NULL, '2023-01-11 04:19:29', '2023-01-12 10:12:59'),
(37, 'http://127.0.0.1:8000/upload/images/nhung-con-meo-de-thuong-nhat-the-gioi-6.jpg', 'Kính Tiếp xúc', 0, 'Kinh-Tiep-xuc', 'Kính tiếp xúc', 'Kính tiếp xúc', NULL, '2023-01-11 04:19:43', '2023-01-12 10:13:22'),
(38, 'http://127.0.0.1:8000/upload/images/nhung-con-meo-de-thuong-nhat-the-gioi-6.jpg', 'Phụ kiện', 0, 'Phu-kien', 'Phụ kiện', 'Phụ kiện', NULL, '2023-01-11 04:20:01', '2023-01-12 10:13:50'),
(42, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Essilor', 36, 'Essilor', 'Essilor', 'Essilor', NULL, '2023-01-12 07:54:19', '2023-01-14 07:01:59'),
(43, 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', 'Kính tiếp xúc mềm (lens thẩm mỹ)', 37, 'Kinh-tiep-xuc-mem-(lens-tham-my)', 'Kính tiếp xúc mềm (lens thẩm mỹ)', 'Kính tiếp xúc mềm (lens thẩm mỹ)', NULL, '2023-01-12 08:00:40', '2023-01-14 02:23:11'),
(44, 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', 'Kính cận', 35, 'Kinh-can', 'Kính cận', 'Kính cận', NULL, '2023-01-12 10:00:07', '2023-01-14 02:22:57'),
(45, 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', 'Kính râm', 35, 'Kinh-ram', 'kính râm', 'kính râm', NULL, '2023-01-12 10:02:13', '2023-01-14 02:22:50'),
(46, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Hoya', 36, 'Hoya', 'Hoya', 'Hoya', NULL, '2023-01-14 06:37:17', '2023-01-14 06:37:17'),
(47, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Chemi', 36, '-Chemi', 'Chemi', 'Chemi', NULL, '2023-01-14 06:37:40', '2023-01-14 06:37:40'),
(48, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Panther', 36, 'Panther', 'Panther', 'Panther', NULL, '2023-01-14 06:37:59', '2023-01-14 06:37:59'),
(49, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Tròng đổi màu', 36, 'Trong-doi-mau', 'Tròng đổi màu', 'Trong-doi-mau', NULL, '2023-01-14 06:38:22', '2023-01-14 06:38:22'),
(50, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Tròng cận râm', 36, 'Trong-can-ram', 'Tròng cận râm', 'Tròng cận râm', NULL, '2023-01-14 06:38:50', '2023-01-14 06:38:50'),
(51, 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', 'Tròng chống ánh sáng xanh', 36, 'Trong-chong-anh-sang-xanh', 'Tròng chống ánh sáng xanh', 'Tròng chống ánh sáng xanh', NULL, '2023-01-14 06:39:04', '2023-01-14 06:39:04'),
(52, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Tròng đặt Bespoke', 36, 'Trong-dat-Bespoke', 'Tròng đặt Bespoke', 'Tròng đặt Bespoke', NULL, '2023-01-14 06:39:22', '2023-01-14 06:39:22'),
(53, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Kính tiếp xúc cứng đeo ban ngày', 37, 'Kinh-tiep-xuc-cung-deo-ban-ngay', 'Kính tiếp xúc cứng đeo ban ngày', 'Kinh-tiep-xuc-cung-deo-ban-ngay', NULL, '2023-01-14 06:39:51', '2023-01-14 06:39:51'),
(54, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Kính tiếp xúc cứng đeo ban đêm Ortho-K', 37, 'Kinh-tiep-xuc-cung-deo-ban-dem-Ortho-K', 'Kính tiếp xúc cứng đeo ban đêm Ortho-K', 'Kinh-tiep-xuc-cung-deo-ban-dem-Ortho-K', NULL, '2023-01-14 06:40:14', '2023-01-14 06:40:14'),
(55, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Kính tiếp xúc điều trị giác mạc chóp', 37, 'Kinh-tiep-xuc-dieu-tri-giac-mac-chop', 'Kính tiếp xúc điều trị giác mạc chóp', 'Kinh-tiep-xuc-dieu-tri-giac-mac-chop', NULL, '2023-01-14 06:40:30', '2023-01-14 06:40:30'),
(56, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Dung dịch ngâm rửa kính tiếp xúc', 37, 'Dung-dich-ngam-rua-kinh-tiep-xuc', 'Dung dịch ngâm rửa kính tiếp xúc', 'Dung-dich-ngam-rua-kinh-tiep-xuc', NULL, '2023-01-14 06:40:56', '2023-01-14 06:40:56'),
(57, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Cài tai', 38, 'Cai-tai', 'Cài tai', 'Cai-tai', NULL, '2023-01-14 06:41:13', '2023-01-14 06:41:13'),
(58, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Dây đeo', 38, 'Day-deo', 'Dây đeo', 'Day-deo', NULL, '2023-01-14 06:41:31', '2023-01-14 06:41:31'),
(59, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Khăn nano lau kính', 38, 'Khan-nano-lau-kinh', 'Khăn nano lau kính', 'Khan-nano-lau-kinh', NULL, '2023-01-14 06:41:46', '2023-01-14 06:41:46'),
(60, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Hộp đựng kính', 38, 'Hop-dung-kinh', 'Hộp đựng kính', 'Hop-dung-kinh', NULL, '2023-01-14 06:42:03', '2023-01-14 06:42:03'),
(61, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Miếng bịt mắt', 38, 'Mieng-bit-mat', 'Miếng bịt mắt', 'Mieng-bit-mat', NULL, '2023-01-14 06:42:25', '2023-01-14 06:42:25'),
(62, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Hộp đựng và cây lấy kính tiếp xúc', 38, 'Hop-dung-va-cay-lay-kinh-tiep-xuc', 'Hộp đựng và cây lấy kính tiếp xúc', 'Hop-dung-va-cay-lay-kinh-tiep-xuc', NULL, '2023-01-14 06:42:45', '2023-01-14 06:42:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `introduces`
--

CREATE TABLE `introduces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `introduces`
--

INSERT INTO `introduces` (`id`, `name`, `thumbnail`, `seo_title`, `seo_description`, `created_at`, `updated_at`) VALUES
(1, 'ahsfuaof', 'http://127.0.0.1:8000/upload/images/286695669_1178829422977071_5320714701613542175_n%20(1).jpg', 'asdfaufi0wqnfq', '<p>asdfqnuobrof</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2023_01_04_094408_create_categories_table', 1),
(18, '2023_01_06_065739_create__product_table', 1),
(19, '2023_01_05_081158_create_banner_table', 2),
(20, '2023_01_11_095303_create__service_category_table', 3),
(21, '2023_01_16_030612_create_introduces_table', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageColor` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `old_price` bigint(20) NOT NULL,
  `percent_discount` bigint(20) DEFAULT NULL,
  `current_price` bigint(20) DEFAULT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `material` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `thumbnail`, `color`, `imageColor`, `product_code`, `category_id`, `old_price`, `percent_discount`, `current_price`, `seo_keyword`, `status`, `seo_description`, `created_at`, `updated_at`, `material`) VALUES
(57, 'kính thiên văn', 'http://127.0.0.1:8000/upload/images/do_cao.png', '[\"#fe2f2f\"]', NULL, 'G-HJBJSD', 44, 200000, 10, 180000, 'kinh thieen van', '1', '<p>TH&Ocirc;NG TIN GỌNG K&Iacute;NH</p>\r\n\r\n<p>* Thương Hiệu:LILY</p>\r\n\r\n<p>* M&atilde; sản phẩm: 30039</p>\r\n\r\n<p>*Th&ocirc;ng tin kỹ thuật số :51-20-145</p>\r\n\r\n<p>*Chất liệu: Nhựa Dẻo</p>\r\n\r\n<p>*Gi&aacute; sản phẩm: 220000 VNĐ</p>\r\n\r\n<p>*Xuất sứ: Trung Quốc</p>\r\n\r\n<p>*CHỊU TR&Aacute;CH NHIỆM SP: C&Ocirc;NG TY TNHH THƯƠNG MẠI V&Agrave; DỊCH VỤ LILY GROUP VIỆT NAM</p>\r\n\r\n<p>*CẢNH B&Aacute;O: BẢO QUẢN TRONG HỘP K&Iacute;NH</p>\r\n\r\n<p>*HDSD: D&Ugrave;NG ĐỂ ĐEO MẮT, TR&Aacute;NH NHIỆT ĐỘ CAO &amp; VA CHẠM MẠNH</p>\r\n\r\n<p>*MH:431295</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 55px; left: 44.5793px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', '2023-01-14 08:46:47', '2023-01-14 08:46:47', 'plastic'),
(58, 'adfasdf', 'http://127.0.0.1:8000/upload/images/165208932_1091592481335556_6958082108154345300_n.jpg', '[\"#b13e3e\"]', NULL, 'asdfasd', 45, 10000000, 12, 8800000, 'asfdasdca', '1', '<p>asdcasdca</p>', '2023-01-14 09:02:33', '2023-01-14 09:02:33', NULL),
(59, 'qweascas', 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', '[\"#ec2727\",\"#c4a431\",\"#308191\"]', NULL, 'dwqceasd', 44, 10000000, 12, 8800000, 'adcdasc', '1', '<p>ascadsc</p>', '2023-01-14 09:20:04', '2023-01-14 09:20:04', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_colors`
--

CREATE TABLE `product_colors` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color`, `image`, `created_at`, `updated_at`) VALUES
(22, 34, '#000000', 'C:\\xampp\\tmp\\php3822.tmp', '2023-01-11 06:18:25', '2023-01-11 06:18:25'),
(23, 35, '#000000', 'C:\\xampp\\tmp\\phpAA1D.tmp', '2023-01-11 06:21:06', '2023-01-11 06:21:06'),
(24, 36, '#000000', 'C:\\xampp\\tmp\\phpB17C.tmp', '2023-01-11 06:22:13', '2023-01-11 06:22:13'),
(25, 37, '#000000', 'C:\\xampp\\tmp\\phpBC22.tmp', '2023-01-11 06:24:27', '2023-01-11 06:24:27'),
(26, 38, '#000000', 'C:\\xampp\\tmp\\phpB6C.tmp', '2023-01-11 06:24:47', '2023-01-11 06:24:47'),
(27, 39, '#000000', 'C:\\xampp\\tmp\\php30C3.tmp', '2023-01-11 06:26:02', '2023-01-11 06:26:02'),
(28, 40, '#000000', 'C:\\xampp\\tmp\\php5C34.tmp', '2023-01-11 06:27:19', '2023-01-11 06:27:19'),
(29, 41, '#000000', 'C:\\xampp\\tmp\\php5AD9.tmp', '2023-01-11 06:28:24', '2023-01-11 06:28:24'),
(30, 42, '#000000', 'C:\\xampp\\tmp\\php14E3.tmp', '2023-01-11 06:29:12', '2023-01-11 06:29:12'),
(31, 43, '#b81919', 'C:\\xampp\\tmp\\php931C.tmp', '2023-01-12 07:49:03', '2023-01-12 07:49:03'),
(32, 44, '#971212', 'C:\\xampp\\tmp\\php76F2.tmp', '2023-01-14 00:43:15', '2023-01-14 00:43:15'),
(33, 45, '#b55e5e', 'C:\\xampp\\tmp\\phpDFFC.tmp', '2023-01-14 02:17:38', '2023-01-14 02:17:38'),
(34, 46, '#ce4040', 'C:\\xampp\\tmp\\php8C07.tmp', '2023-01-14 02:19:28', '2023-01-14 02:19:28'),
(35, 47, '#000000', 'C:\\xampp\\tmp\\php55B0.tmp', '2023-01-14 02:42:10', '2023-01-14 02:42:10'),
(36, 48, '#000000', 'C:\\xampp\\tmp\\php3086.tmp', '2023-01-14 03:10:25', '2023-01-14 03:10:25'),
(37, 49, '#b42d2d', 'C:\\xampp\\tmp\\php7B6B.tmp', '2023-01-14 03:10:44', '2023-01-14 03:10:44'),
(38, 50, '#b82828', 'C:\\xampp\\tmp\\php6EBC.tmp', '2023-01-14 03:13:57', '2023-01-14 03:13:57'),
(39, 51, '#ff2424', 'C:\\xampp\\tmp\\phpC7D9.tmp', '2023-01-14 03:14:20', '2023-01-14 03:14:20'),
(40, 52, '#e01010', 'C:\\xampp\\tmp\\phpE6FC.tmp', '2023-01-14 06:10:19', '2023-01-14 06:10:19'),
(41, 53, '#e01010', 'C:\\xampp\\tmp\\phpAFE.tmp', '2023-01-14 06:11:34', '2023-01-14 06:11:34'),
(42, 53, '#0b8970', 'C:\\xampp\\tmp\\phpAFF.tmp', '2023-01-14 06:11:34', '2023-01-14 06:11:34'),
(43, 54, '#000000', 'C:\\xampp\\tmp\\php92CF.tmp', '2023-01-14 06:15:25', '2023-01-14 06:15:25'),
(44, 55, '#e04242', 'C:\\xampp\\tmp\\phpA314.tmp', '2023-01-14 06:20:57', '2023-01-14 06:20:57'),
(45, 55, '#0757ab', 'C:\\xampp\\tmp\\phpA315.tmp', '2023-01-14 06:20:57', '2023-01-14 06:20:57'),
(46, 55, '#49d123', 'C:\\xampp\\tmp\\phpA316.tmp', '2023-01-14 06:20:57', '2023-01-14 06:20:57'),
(47, 56, '#950909', 'C:\\xampp\\tmp\\php878.tmp', '2023-01-14 06:35:35', '2023-01-14 06:35:35'),
(48, 57, '#fe2f2f', 'http://127.0.0.1:8000/upload/images/do_cao.png', '2023-01-14 08:46:47', '2023-01-14 08:46:47'),
(49, 58, '#b13e3e', 'C:\\xampp\\tmp\\php9B1F.tmp', '2023-01-14 09:02:33', '2023-01-14 09:02:33'),
(50, 59, '#ec2727', 'C:\\xampp\\tmp\\phpA3A2.tmp', '2023-01-14 09:20:04', '2023-01-14 09:20:04'),
(51, 59, '#c4a431', 'C:\\xampp\\tmp\\phpA3B2.tmp', '2023-01-14 09:20:04', '2023-01-14 09:20:04'),
(52, 59, '#308191', 'C:\\xampp\\tmp\\phpA3B3.tmp', '2023-01-14 09:20:04', '2023-01-14 09:20:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service_categories`
--

INSERT INTO `service_categories` (`id`, `thumbnail`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(9, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Khám khúc xạ miễn phí', 0, '2023-01-11 04:03:42', '2023-01-12 01:02:31'),
(10, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Khám mắt tổng quát', 0, '2023-01-11 04:03:54', '2023-01-12 01:03:12'),
(11, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Tư vấn với bác sĩ nhãn khoa', 0, '2023-01-11 04:04:10', '2023-01-12 01:03:22'),
(12, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Kiểm soát tiến triển cận thị', 0, '2023-01-11 04:04:21', '2023-01-12 01:03:26'),
(13, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Điều trị với kính tiếp xúc Ortho-K', 0, '2023-01-11 04:04:35', '2023-01-12 01:03:31'),
(14, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Điều trị nhược thị', 0, '2023-01-11 04:04:46', '2023-01-12 01:03:35'),
(15, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Khám chuyên sâu về thị giác hai mắt', 0, '2023-01-11 04:04:56', '2023-01-12 01:03:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'linh', 'linh12@gmail.com', NULL, '$2y$10$3Pe320GswoWty20ADKkgfupiD7kTGuJHbkCpmIHDudZlrf6zMUyHC', NULL, '2023-01-06 03:54:02', '2023-01-06 03:54:02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `introduces`
--
ALTER TABLE `introduces`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `introduces`
--
ALTER TABLE `introduces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
