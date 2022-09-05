-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 08:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantitate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `cantitate`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(22, '1', 5, 1, '2022-06-11 18:14:22', '2022-06-11 18:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_26_104122_create_products_table', 1),
(6, '2021_12_26_171339_create_carts_table', 1),
(7, '2021_12_26_180211_default_value_column', 1),
(8, '2022_05_11_135135_create_orders_table', 2),
(9, '2022_05_11_151548_create_order_items__table', 3),
(10, '2022_05_23_100630_order_items', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_postal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oras` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `mesaj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numar_comanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nume`, `prenume`, `email`, `adresa`, `telefon`, `cod_postal`, `oras`, `status`, `mesaj`, `numar_comanda`, `created_at`, `updated_at`) VALUES
(92, 'danila', 'carmina', 'carmina@yahoo.com', 'cranguui', '0741220992', '450092', 'zalau', 0, NULL, 'ADELE7805', '2022-06-09 05:04:11', '2022-06-09 05:04:11'),
(93, 'pop', 'marlena', 'marlena@yahoo.com', 'george cosbuc 1', '0726377401', '450093', 'cluj', 0, NULL, 'ADELE4797', '2022-06-11 14:06:48', '2022-06-11 14:06:48'),
(94, 'c', 'c', 'c', 'c', 'c', 'c', 'c', 0, NULL, 'ADELE5608', '2022-06-18 17:29:06', '2022-06-18 17:29:06'),
(95, 'a', 'a', 'a', 'a', 'a', 'a', 'aa', 0, NULL, 'ADELE9771', '2022-06-19 11:11:00', '2022-06-19 11:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantitate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pret` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `cantitate`, `pret`, `created_at`, `updated_at`) VALUES
(47, '86', '2', '1', '377', '2022-06-07 15:07:21', '2022-06-07 15:07:21'),
(48, '87', '4', '1', '620', '2022-06-07 15:12:06', '2022-06-07 15:12:06'),
(49, '87', '5', '1', '390', '2022-06-07 15:12:06', '2022-06-07 15:12:06'),
(50, '88', '11', '1', '2890', '2022-06-07 16:58:05', '2022-06-07 16:58:05'),
(51, '89', '9', '1', '295', '2022-06-07 17:14:41', '2022-06-07 17:14:41'),
(52, '89', '11', '1', '2890', '2022-06-07 17:14:41', '2022-06-07 17:14:41'),
(53, '90', '11', '1', '2890', '2022-06-08 11:29:25', '2022-06-08 11:29:25'),
(54, '91', '4', '1', '620', '2022-06-08 11:45:40', '2022-06-08 11:45:40'),
(55, '92', '3', '1', '170', '2022-06-09 05:04:11', '2022-06-09 05:04:11'),
(56, '93', '11', '1', '2890', '2022-06-11 14:06:48', '2022-06-11 14:06:48'),
(57, '94', '11', '1', '2890', '2022-06-18 17:29:06', '2022-06-18 17:29:06'),
(58, '94', '4', '1', '620', '2022-06-18 17:29:06', '2022-06-18 17:29:06'),
(59, '95', '11', '1', '2890', '2022-06-19 11:11:00', '2022-06-19 11:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@email.com', '$2y$10$614UN3AykQIMy0Rf..4Mwe/MB66uPA5lFW62WEIasyXKDioC/GLGK', '2022-06-12 19:08:51'),
('carmina@yahoo.com', '$2y$10$d11dF2P8MsReltBbodINI.rg7zVxzXcokoYjoJ/yZeFOuAitpfQHW', '2022-06-12 19:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pret` double NOT NULL,
  `descriere` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalii` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nume`, `pret`, `descriere`, `detalii`, `imagine`, `created_at`, `updated_at`) VALUES
(1, 'BALENCIAGA', 890, 'XS BISTRO BASKET', 'Item Code:76I-IUT028\r\nHeight: 20cm Width: 36cm Depth: 14cm\r\nStrap drop: 50cm\r\nHandle drop: 10cm\r\nDetachable adjustable strap\r\nDouble leather top handles\r\nDetachable leather logo tag\r\nOne internal zip pocket\r\nMade in Italy\r\nComposition: 74% Polyurethane, 21% Polyester, 5% Cotton', 'https://images.lvrcdn.com/Big76I/IUT/028_c6c21679-c57d-4285-b008-50ae186a46be.JPG', '2022-05-12 04:56:32', '2022-05-12 04:56:32'),
(2, 'BEC & BRIDGE', 377, 'ALANIS PRINTED SILK LONG DRESS', 'tem Code:75I-DPE024\r\nSelf-tie spaghetti straps crisscross at back\r\nConcealed back zip closure\r\nAll over print placement may vary\r\nUnlined\r\nModel is wearing a size 8\r\nModel height: 1.78m\r\nComposition: 100% Silk', 'https://images.lvrcdn.com/Big75I/DPE/024_cfe45968-85b8-4fab-9a72-b988283f858e.JPG', '2022-05-12 06:35:57', '2022-05-12 06:35:57'),
(3, 'REINA OLGA', 170, 'LOVE TRIANGLE BIKINI SET', 'Item Code:75I-XT6008\r\nIncludes bikini top and bottoms\r\nTOP:\r\nAdjustable spaghetti straps with fabric loops\r\nCan be worn over the shoulders or tied behind the neck\r\nBOTTOMS:\r\nSide self-tie closures\r\nModel is wearing a size 1\r\nModel height: 1.78m\r\nMade in Italy\r\nComposition: 78% Polyamide, 22% Elastane', 'https://images.lvrcdn.com/Big75I/XT6/008_2cec5674-1b07-4049-9cc8-a23356d6a644.JPG', '2022-05-12 06:37:35', '2022-05-12 06:37:35'),
(4, 'VALENTINO GARAVANI', 620, '10MM ONE STUD LEATHER THONG SANDALS', 'Item Code:75I-G70001\r\n10mm Heel\r\nLeather upper\r\nGold-colored stud detail\r\nLeather lining and insole\r\nLeather sole\r\nFits true to size\r\nMade in Italy\r\nComposition: 100% Calf', 'https://images.lvrcdn.com/Big75I/G70/001_861f4474-9534-4b4f-984c-6cd97785d999.JPG', '2022-05-12 06:39:20', '2022-05-12 06:39:20'),
(5, 'SS22 BURBERRY', 390, 'CHECK COTTON BUCKET HAT', 'Item Code:75I-RTJ100\r\nAll over pattern placement may vary\r\nMade in Italy\r\nComposition: 100% Cotton', 'https://images.lvrcdn.com/Big75I/RTJ/100_6ec851aa-dba3-4f08-a398-87f43c7b31b5.JPG', '2022-05-12 06:40:50', '2022-05-12 06:40:50'),
(6, 'ADAM LIPPES', 1032, 'SILK & WOOL SATIN HIGH RISE SHORTS', 'Item Code:75I-YPD007\r\nConcealed back zip closure\r\nLined\r\nMade in Italy\r\nComposition: 77% Wool, 23% Silk', 'https://images.lvrcdn.com/Big75I/YPD/007_4d5d7b78-3f45-4da8-93eb-bd9b08f97932.JPG', '2022-05-12 07:09:20', '2022-05-12 07:09:20'),
(7, 'DION LEE', 345, 'LVR EXCLUSIVE VISCOSE BLEND BODYSUIT', 'Item Code:75I-YL9006\r\nCreated exclusively for LuisaViaRoma\r\nCreated using recycled materials\r\nDeep v neckline\r\nSleeveless\r\nOpen knit detail at waist\r\nHem snap button closure\r\nModel is wearing a size S\r\nModel height: 1.78m\r\nComposition: 65% Viscose, 35% Nylon', 'https://images.lvrcdn.com/Big75I/YL9/006_b5f551da-bb69-4e19-b60d-1b09f4aa2bdd.JPG', '2022-05-12 07:11:11', '2022-05-12 07:11:11'),
(9, 'TOM FORD', 295, 'JACQUETTA SQUARED SUNGLASSES', 'Item Code:75I-XHQ012\r\nLens: 54mm Bridge: 18mm Temple: 140mm\r\nLens category: 2\r\nInjected-molded plastic frame\r\nGradient lenses\r\nLogo detail\r\nCompatible with prescription lenses\r\nMade in Italy\r\nComposition: Plastic', 'https://images.lvrcdn.com/Big75I/XHQ/012_44d98cbb-2e7c-4ad9-b034-a6c7030ba7e3.JPG', '2022-05-31 11:39:27', '2022-06-07 15:35:56'),
(10, 'VERSACE', 850, 'MEDUSA GRAINED LEATHER TOP HANDLE BAG', 'Item Code:76I-A87032\r\nHeight: 11cm Width: 19cm Depth: 2cm\r\nStrap length: 103cm\r\nHandle drop: 18cm\r\nLeather strap\r\nMetal chain top handle\r\nFront flap with snap button closures\r\nFront metal logo detail\r\nGold-colored metal hardware\r\nInternal card slots\r\nMade in Italy\r\nComposition:\r\nMain: 100% Calf\r\nDetails: 100% Cotton', 'https://images.lvrcdn.com/Big76I/A87/032_c1498d5e-de56-4698-af8f-2f58d04c0eca.JPG', '2022-05-31 11:40:29', '2022-05-31 11:40:29'),
(11, 'VERSACE', 2890, 'SABLÉ DEEP NECK MINI CORSET DRESS', 'Item Code:76I-M7D030\r\nConcealed back zip closure\r\nCorset structure\r\nLined\r\nModel is wearing a size 38\r\nModel height: 1.78m\r\nMade in Italy\r\nComposition: 96% Viscose, 4% Elastane', 'https://images.lvrcdn.com/Big76I/M7D/030_ac6a43d6-2e56-413e-b596-ce3659bc1763.JPG', '2022-06-07 15:37:41', '2022-06-07 15:37:41'),
(12, 'VERSACE', 1289, '155MM PLATFORM LEATHER ANKLE BOOTS', 'Item Code:76I-WTY003\r\n155mm Leather covered heel\r\n60mm External platform\r\nLeather upper\r\nSide zip closure\r\nSquare toe\r\nLeather lining and insole\r\nLeather sole\r\nFits true to size\r\nMade in Italy\r\nComposition: 100% Calf', 'https://images.lvrcdn.com/Big74I/M7E/002_da68324b-a9cd-420c-b034-56fb1d288d31.JPG', '2022-06-07 15:38:49', '2022-06-07 15:38:49'),
(13, 'VERSACE', 390, 'GREEK MOTIF & MEDUSA PENDANT EARRINGS', 'Item Code:76I-Z62019\r\nLength: 7.3cm\r\nGold-colored metal\r\nPost back closure\r\nNickel free\r\nMade in Italy\r\nComposition: Metal', 'https://images.lvrcdn.com/Big74I/P41/011_665c9f86-4e4f-4a7c-a4de-01ae8ebe5b98.JPG', '2022-06-07 15:39:57', '2022-06-07 15:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@email.com', NULL, '$2y$10$VNirpZJjvEzVtZcKPwM.xOIFH62E3BeRveoS.0Joih7chSUzAlyLC', NULL, '2022-05-12 04:33:40', '2022-05-12 04:33:40', 1),
(3, 'diana', 'diana@yahoo.com', NULL, '$2y$10$WQUZc8cMdvO04cchVc8VN.thJpkBBfEFCyJAepXMuAFAor9X2bJfe', NULL, '2022-05-16 07:20:54', '2022-05-16 07:20:54', 0),
(4, 'Carmina', 'carmina@yahoo.com', NULL, '$2y$10$d5VCZdGS7jG1l.VFmy3b9OjBoMoQi4Z3pDuROF.TaJg.WP5bxRQzC', NULL, '2022-06-07 15:03:22', '2022-06-07 15:03:22', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
