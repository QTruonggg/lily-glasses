-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2023 lúc 10:59 AM
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
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `thumbnail`, `name`, `parent_id`, `seo_title`, `seo_keyword`, `seo_description`, `created_at`, `updated_at`) VALUES
(35, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Gọng kính', 0, 'Gọng kính', 'Gọng kính', NULL, '2023-01-11 04:18:26', '2023-01-11 04:18:26'),
(36, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Tròng kính', 0, 'Tròng kính', 'Tròng kính', NULL, '2023-01-11 04:19:29', '2023-01-11 04:19:29'),
(37, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Kính tiếp xúc', 0, 'Kính tiếp xúc', 'Kính tiếp xúc', NULL, '2023-01-11 04:19:43', '2023-01-11 04:19:43'),
(38, 'http://127.0.0.1:8000/upload/images/293443243_2516132935189081_7725477066131676952_n.jpg', 'Phụ kiện', 0, 'Phụ kiện', 'Phụ kiện', NULL, '2023-01-11 04:20:01', '2023-01-11 04:20:01'),
(39, 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', 'KÍNH NHỰA', 37, 'KÍNH NHỰA', 'KÍNH NHỰA', NULL, '2023-01-11 04:33:51', '2023-01-11 04:33:51');

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
(20, '2023_01_11_095303_create__service_category_table', 3);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `thumbnail`, `color`, `imageColor`, `product_code`, `category_id`, `old_price`, `percent_discount`, `current_price`, `seo_keyword`, `status`, `seo_description`, `created_at`, `updated_at`) VALUES
(26, 'KÍNH NHỰA LILY M2769', 'http://127.0.0.1:8000/upload/images/m2769-trang-vang-1667562309000-1668583615000-1671611095000-1672917663000-1673317848000.jpeg', '[\"#d41616\"]', NULL, 'C-ND-VT-M2769', 39, 370000, 5, 351000, '124231', '1', '<p>TH&Ocirc;NG TIN GỌNG K&Iacute;NH</p>\r\n\r\n<p>* Thương Hiệu:LILY</p>\r\n\r\n<p>* M&atilde; sản phẩm: M2769</p>\r\n\r\n<p>*Th&ocirc;ng tin kỹ thuật số :40-20-145</p>\r\n\r\n<p>*Chất liệu: Nhựa Dẻo</p>\r\n\r\n<p>*Gi&aacute; sản phẩm: 370000 VNĐ</p>\r\n\r\n<p>*Xuất sứ: Trung Quốc</p>\r\n\r\n<p>*CHỊU TR&Aacute;CH NHIỆM SP: C&Ocirc;NG TY TNHH THƯƠNG MẠI V&Agrave; DỊCH VỤ LILY GROUP VIỆT NAM</p>\r\n\r\n<p>*CẢNH B&Aacute;O: BẢO QUẢN TRONG HỘP K&Iacute;NH</p>\r\n\r\n<p>*HDSD: D&Ugrave;NG ĐỂ ĐEO MẮT, TR&Aacute;NH NHIỆT ĐỘ CAO &amp; VA CHẠM MẠNH</p>\r\n\r\n<p>*MH:568050</p>', '2023-01-11 05:55:45', '2023-01-11 05:55:45'),
(27, 'adfasdf', 'http://127.0.0.1:8000/upload/images/m2769-trang-vang-1667562309000-1668583615000-1671611095000-1672917663000-1673317848000.jpeg', '[\"#ba0d0d\"]', NULL, 'adsfasdf', 39, 233333, 12, 205333, 'adwfawf', '1', '<p>asdfawefwa</p>', '2023-01-11 06:10:29', '2023-01-11 06:10:29'),
(28, 'aweawr', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#e61919\"]', NULL, 'wafew', 39, 12312, 12, 10835, 'asawe', '1', '<p>adfefsd</p>', '2023-01-11 06:12:13', '2023-01-11 06:12:13'),
(29, 'aweawr', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#e61919\"]', NULL, 'wafew', 39, 12312, 12, 10835, 'asawe', '1', '<p>adfefsd</p>', '2023-01-11 06:13:03', '2023-01-11 06:13:03'),
(30, 'aweawr', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#e61919\"]', NULL, 'wafew', 39, 12312, 12, 10835, 'asawe', '1', '<p>adfefsd</p>', '2023-01-11 06:13:44', '2023-01-11 06:13:44'),
(31, 'aweawr', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#e61919\"]', NULL, 'wafew', 39, 12312, 12, 10835, 'asawe', '1', '<p>adfefsd</p>', '2023-01-11 06:15:02', '2023-01-11 06:15:02'),
(32, 'aweawr', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#e61919\"]', NULL, 'wafew', 39, 12312, 12, 10835, 'asawe', '1', '<p>adfefsd</p>', '2023-01-11 06:15:28', '2023-01-11 06:15:28'),
(33, 'aweawr', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#e61919\"]', NULL, 'wafew', 39, 12312, 12, 10835, 'asawe', '1', '<p>adfefsd</p>', '2023-01-11 06:16:13', '2023-01-11 06:16:13'),
(34, '13123', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#000000\"]', NULL, 'q2341', 39, 123, 1, 122, 'qwe', '1', '<p>weaer</p>', '2023-01-11 06:18:25', '2023-01-11 06:18:25'),
(35, '13123', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#000000\"]', NULL, 'q2341', 39, 123, 1, 122, 'qwe', '1', '<p>weaer</p>', '2023-01-11 06:21:06', '2023-01-11 06:21:06'),
(36, '13123', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#000000\"]', NULL, 'q2341', 39, 123, 1, 122, 'qwe', '1', '<p>weaer</p>', '2023-01-11 06:22:13', '2023-01-11 06:22:13'),
(37, '13123', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#000000\"]', NULL, 'q2341', 39, 123, 1, 122, 'qwe', '1', '<p>weaer</p>', '2023-01-11 06:24:27', '2023-01-11 06:24:27'),
(38, '13123', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#000000\"]', NULL, 'q2341', 39, 123, 1, 122, 'qwe', '1', '<p>weaer</p>', '2023-01-11 06:24:47', '2023-01-11 06:24:47'),
(39, '13123', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#000000\"]', NULL, 'q2341', 39, 123, 1, 122, 'qwe', '1', '<p>weaer</p>', '2023-01-11 06:26:02', '2023-01-11 06:26:02'),
(40, 'sadf', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#000000\"]', NULL, '12', 39, 12312, 1, 12189, '123', '1', '<p>123</p>', '2023-01-11 06:27:19', '2023-01-11 06:27:19'),
(41, 'sadf', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#000000\"]', NULL, '12', 39, 12312, 1, 12189, '123', '1', '<p>123</p>', '2023-01-11 06:28:24', '2023-01-11 06:28:24'),
(42, 'sadf', 'http://127.0.0.1:8000/upload_thumbnail/empty_img.png', '[\"#000000\"]', NULL, '12', 39, 12312, 1, 12189, '123', '1', '<p>123</p>', '2023-01-11 06:29:12', '2023-01-11 06:29:12');

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
(1, 19, '#000000', '1', '2023-01-09 03:09:56', '2023-01-09 03:09:56'),
(2, 19, '#cf5454', '2', '2023-01-09 03:09:56', '2023-01-09 03:09:56'),
(3, 20, '#ff0000', 'red', '2023-01-09 03:11:35', '2023-01-09 03:11:35'),
(4, 20, '#2b4882', 'blue', '2023-01-09 03:11:35', '2023-01-09 03:11:35'),
(5, 20, '#2e9970', 'yellow', '2023-01-09 03:11:35', '2023-01-09 03:11:35'),
(6, 20, '#000000', 'green', '2023-01-09 03:11:35', '2023-01-09 03:11:35'),
(7, 22, '#9a1919', 'C:\\xampp\\tmp\\php4690.tmp', '2023-01-09 19:28:59', '2023-01-09 19:28:59'),
(8, 22, '#881616', 'C:\\xampp\\tmp\\php4691.tmp', '2023-01-09 19:28:59', '2023-01-09 19:28:59'),
(9, 22, '#1acb1d', 'C:\\xampp\\tmp\\php4692.tmp', '2023-01-09 19:28:59', '2023-01-09 19:28:59'),
(10, 23, '#8f3838', 'C:\\xampp\\tmp\\php9625.tmp', '2023-01-09 19:30:25', '2023-01-09 19:30:25'),
(11, 23, '#c21e1e', 'C:\\xampp\\tmp\\php9635.tmp', '2023-01-09 19:30:25', '2023-01-09 19:30:25'),
(12, 24, '#000000', 'C:\\xampp\\tmp\\php20AF.tmp', '2023-01-09 19:32:05', '2023-01-09 19:32:05'),
(13, 25, '#9a4747', 'C:\\xampp\\tmp\\php25B.tmp', '2023-01-09 19:40:42', '2023-01-09 19:40:42'),
(14, 26, '#d41616', 'C:\\xampp\\tmp\\php75A6.tmp', '2023-01-11 05:55:45', '2023-01-11 05:55:45'),
(15, 27, '#ba0d0d', 'C:\\xampp\\tmp\\phpF46D.tmp', '2023-01-11 06:10:29', '2023-01-11 06:10:29'),
(16, 28, '#e61919', 'C:\\xampp\\tmp\\php8BE7.tmp', '2023-01-11 06:12:13', '2023-01-11 06:12:13'),
(17, 29, '#e61919', 'C:\\xampp\\tmp\\php4C59.tmp', '2023-01-11 06:13:03', '2023-01-11 06:13:03'),
(18, 30, '#e61919', 'C:\\xampp\\tmp\\phpEC54.tmp', '2023-01-11 06:13:44', '2023-01-11 06:13:44'),
(19, 31, '#e61919', 'C:\\xampp\\tmp\\php1E8B.tmp', '2023-01-11 06:15:02', '2023-01-11 06:15:02'),
(20, 32, '#e61919', 'C:\\xampp\\tmp\\php8380.tmp', '2023-01-11 06:15:28', '2023-01-11 06:15:28'),
(21, 33, '#e61919', 'C:\\xampp\\tmp\\php353D.tmp', '2023-01-11 06:16:13', '2023-01-11 06:16:13'),
(22, 34, '#000000', 'C:\\xampp\\tmp\\php3822.tmp', '2023-01-11 06:18:25', '2023-01-11 06:18:25'),
(23, 35, '#000000', 'C:\\xampp\\tmp\\phpAA1D.tmp', '2023-01-11 06:21:06', '2023-01-11 06:21:06'),
(24, 36, '#000000', 'C:\\xampp\\tmp\\phpB17C.tmp', '2023-01-11 06:22:13', '2023-01-11 06:22:13'),
(25, 37, '#000000', 'C:\\xampp\\tmp\\phpBC22.tmp', '2023-01-11 06:24:27', '2023-01-11 06:24:27'),
(26, 38, '#000000', 'C:\\xampp\\tmp\\phpB6C.tmp', '2023-01-11 06:24:47', '2023-01-11 06:24:47'),
(27, 39, '#000000', 'C:\\xampp\\tmp\\php30C3.tmp', '2023-01-11 06:26:02', '2023-01-11 06:26:02'),
(28, 40, '#000000', 'C:\\xampp\\tmp\\php5C34.tmp', '2023-01-11 06:27:19', '2023-01-11 06:27:19'),
(29, 41, '#000000', 'C:\\xampp\\tmp\\php5AD9.tmp', '2023-01-11 06:28:24', '2023-01-11 06:28:24'),
(30, 42, '#000000', 'C:\\xampp\\tmp\\php14E3.tmp', '2023-01-11 06:29:12', '2023-01-11 06:29:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_groups`
--

CREATE TABLE `product_groups` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `percent_discount` int(255) DEFAULT NULL,
  `seo_keyword` int(255) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `current_price` int(255) DEFAULT NULL,
  `seo_description` varchar(2555) DEFAULT NULL,
  `category_id` int(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `color-image` int(255) DEFAULT NULL,
  `product_code` int(255) DEFAULT NULL,
  `old_price` int(255) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product_groups`
--
ALTER TABLE `product_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
