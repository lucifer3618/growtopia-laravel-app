-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 12:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `growtopia`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(22, 3, 3, 1, '2024-10-27 19:31:13', '2024-10-27 19:31:13'),
(23, 3, 1, 1, '2024-10-27 19:31:13', '2024-10-27 19:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(50) NOT NULL,
  `doc_path` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `phone`, `email`, `message`, `doc_path`, `created_at`, `updated_at`) VALUES
(6, 'Chathura', 'Udayanga', '0110233235', 'cha@test.com', 'Test message added by chathura', 'contact/ZAcZ3XHO84bOXic86bWj1RJ8vJb82VaU9zLFvi8W.png', '2024-10-19 16:09:51', '2024-10-19 16:09:51'),
(7, 'Yasitha', 'Madushan', '0122523525', 'yasi@test.com', 'Test message added by yasitha', 'contact/qx4ceWKlRJ7mt5MmA3ePOFI3N6vBc69V4iB0x7CK.png', '2024-10-19 16:17:35', '2024-10-19 16:17:35'),
(8, 'Kavinda', 'Sandun', '0112223334', 'kavinda@test.com', 'Test message added by kavinda', 'contact/El0n39SEHYlrIWlEKlN8P7laDabBXv2YigbHbGrH.png', '2024-10-28 12:28:12', '2024-10-28 12:28:12');

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
(1, '2024_10_19_092055_create_contacts_table', 1),
(2, '2024_10_22_194549_add_new_columns_to_users_table', 2),
(4, '2024_10_25_112813_create_products_table', 3),
(9, '2024_10_26_114147_creat_cart_table', 4),
(10, '2024_10_27_214256_create_reviews_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `class` varchar(25) NOT NULL,
  `author` varchar(100) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `category`, `class`, `author`, `img_path`, `created_at`, `updated_at`) VALUES
(2, 'New Pest Threatens Wheat Crops in Western Australia', 'A new farming technique has led to unprecedented rice production in Thailand', 'Agriculture', 'culti', 'John Doe', 'images/news/crop-1.jpg', '2024-10-14 14:14:07', '2024-10-14 14:14:07'),
(3, 'Record-Breaking Rice Yields Reported in Thailand', 'Experts warn of a new insect species that could devastate wheat crops in the region.', 'Agriculture', 'culti', 'Hasan Malik', 'images/news/crop-2.jpg', '2024-10-14 14:27:55', '2024-10-14 14:27:55'),
(4, 'Soybean Prices Surge Amidst Global Drought', 'A severe drought in major soybean-producing regions has caused a sharp increase in\n          prices.', 'Agriculture', 'culti', 'Daminda Disanayake', 'images/news/crop-3.jpg', '2024-10-14 14:27:55', '2024-10-14 14:27:55'),
(5, 'New Drone Technology Improves Crop Monitoring', 'Advanced drones are being used to detect crop health issues and optimize fertilizer\n          applications.', 'Agrotechnology', 'tech', 'Sanath Nishantha', 'images/news/tech-1.webp', '2024-10-14 14:27:55', '2024-10-14 14:27:55'),
(6, 'AI-Powered System Predicts Harvest Yields', 'A new AI algorithm can accurately predict crop yields based on various environmental\n          factors.', 'Agrotechnology', 'tech', 'Enrique Iglesias', 'images/news/tech-2.png', '2024-10-14 14:27:55', '2024-10-14 14:27:55'),
(7, 'Autonomous Tractors Gain Traction in Agriculture', 'Self-driving tractors are becoming more common, reducing labor costs and improving\n          efficiency.', 'Agrotechnology', 'tech', 'Justin Bieber', 'images/news/tech-3.webp', '2024-10-14 14:27:55', '2024-10-14 14:27:55'),
(8, 'New Farming Techniques Reduce Water Usage', 'Innovative farming practices are helping to conserve water resources in drought-prone\n          regions.', 'Permaculture', 'sus', 'Ariana Grande', 'images/news/sus-1.jpg', '2024-10-14 14:27:55', '2024-10-14 14:27:55'),
(9, 'Solar Power Adoption Grows in Agriculture', 'Farmers are increasingly turning to solar energy to reduce their reliance on fossil\n          fuels.', 'Permaculture', 'sus', 'Jay Sean', 'images/news/sus-2.jpg', '2024-10-14 14:27:55', '2024-10-14 14:27:55'),
(10, 'Permaculture Gains Popularity Among Small Farmers', 'Permaculture practices are gaining traction as a sustainable and resilient approach to\n          farming.', 'Permaculture', 'sus', 'Mark Antony', 'images/news/sus-3.jpg', '2024-10-14 14:27:55', '2024-10-14 14:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `sub_text` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `weight` double DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `rating` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sub_text`, `description`, `weight`, `category`, `price`, `image_path`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Miracle-Gro', 'Nourish all plants for vibrant growth.', 'A versatile fertilizer that’s ideal for all plants and flowers. Provides essential nutrients for fast-growing, healthy plants and can be used every 7-14 days.', 0.5, 'Fertilizers', 350, 'products\\fertilizers\\Ferti-Miracle.webp', NULL, NULL, NULL),
(3, 'Dr. Earth Organic', 'Organic nutrients for thriving gardens..', 'Organic fertilizer that promotes a healthy, sustainable soil ecosystem. Ideal for vegetables, fruits, and herbs, providing beneficial nutrients with a slow-release formula.', 2, 'Fertilizers', 1000, 'products\\fertilizers\\Ferti-Dr.Earth.webp', NULL, NULL, NULL),
(5, 'Osmocote Smart', 'Gradual release for lasting plant health.', 'Specially formulated for flowers and vegetables, releasing nutrients gradually over time. Promotes strong root systems and robust plant growth for up to 4 months.', 1, 'Fertilizers', 500, 'products\\fertilizers\\Ferti-Osmocote.png', NULL, NULL, NULL),
(6, 'Espoma Organic', 'Boost indoor plants with natural goodness.', 'A liquid organic fertilizer perfect for indoor plants. Provides natural plant nutrients and improves soil health, encouraging lush foliage and vibrant flowers.', 500, 'Fertilizers', 750, 'products\\fertilizers\\Ferti-Espoma.png', NULL, NULL, NULL),
(7, 'Golden Harvest Corn Seeds', 'High-yield hybrid for abundant crops and harvest', 'This resilient corn variety is specially bred for high yields and excellent quality. With its strong stalks and robust root system, Golden Harvest Corn thrives in diverse climates, delivering sweet, juicy kernels that are perfect for fresh consumption.', 1, 'Seeds', 500, 'products\\seeds\\seed-GoldenHarvest.png', NULL, NULL, NULL),
(8, 'Emerald Bliss Spinach Seeds', 'Fast-growing, nutrient-rich leafy greens', 'Emerald Bliss Spinach produces vibrant green leaves packed with iron, vitamins, and antioxidants. This fast-growing variety is ideal for multiple harvests and performs well in both cool and warm seasons, making it a top choice for health-conscious garden.', 500, 'Seeds', 300, 'products\\seeds\\seed-EmeraldBlisss.png', NULL, NULL, NULL),
(9, 'Scarlet Flame Tomato Seeds', 'Juicy, disease-resistant, and easy to grow', 'Scarlet Flame Tomatoes are known for their intense red color and sweet, tangy flavor. This variety resists common diseases, making it perfect for home growers and commercial farmers alike. Enjoy fresh, in sauces, or preserved for year-round enjoyment.', 0.05, 'Seeds', 250, 'products\\seeds\\seed-ScarletFlameTomato.webp', NULL, NULL, NULL),
(10, 'Blue Valley Kale Seeds', 'Hardy, nutrient-dense superfood for every garden', 'Blue Valley Kale stands out for its cold tolerance and nutrient density. The slightly curly leaves add texture and flavor to salads, smoothies, and cooked dishes. Perfect for cooler climates, this variety ensures a long-lasting harvest.', 0.05, 'Seeds', 300, 'products\\seeds\\seed-BlueValley.png', NULL, NULL, NULL),
(11, 'MiniPro Pruning Shears', 'Precision Pruning for Healthier Plants', 'These lightweight, sharp pruning shears are perfect for delicate trimming and shaping of small plants and flowers. Designed with ergonomic grips and stainless steel blades, they provide precision cuts that promote healthy growth.', NULL, 'Equipments', 1500, 'products\\equipment\\eq-MiniPro.png', NULL, NULL, NULL),
(12, 'FlexiFlow Watering Wand', 'Effortless Reach for Thirsty Roots', 'With its adjustable length and gentle spray setting, the FlexiFlow Wand ensures every plant gets the hydration it needs without soil disruption. This tool is perfect for reaching hanging plants, garden beds.', NULL, 'Equipments', 2500, 'products\\equipment\\eq-FlexiFlow.png', NULL, NULL, NULL),
(13, 'Eco-Grip Hand Rake', 'Lightweight and Durable for Easy Soil Prep', 'This compact hand rake is ideal for loosening soil, removing debris, and preparing garden beds for planting. Built from rust-resistant materials and equipped with an ergonomic handle, the Eco-Grip Rake helps create optimal soil conditions for new plants.', NULL, 'Equipments', 1300, 'products\\equipment\\eq-Eco-Grip .webp', NULL, NULL, NULL),
(14, 'SoilSense pH Tester', 'Know Your Soil for Optimal Growth', 'The SoilSense pH Tester provides quick and accurate soil readings, essential for optimizing plant health. Suitable for gardens and potted plants alike, this compact, easy-to-use device ensures you plant in the ideal conditions.', NULL, 'Equipments', 3500, 'products\\equipment\\eq-SoilSense.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `star_rating` int(11) NOT NULL,
  `review_text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `star_rating`, `review_text`, `created_at`, `updated_at`) VALUES
(14, 3, 6, 5, 'This is a wanderfull Product. ', '2024-10-27 19:30:05', '2024-10-27 19:30:05'),
(15, 7, 1, 4, 'Product Was good. ', '2024-10-27 19:39:02', '2024-10-27 19:39:02'),
(16, 7, 5, 1, 'I don\'t recommend this product.', '2024-10-27 19:39:25', '2024-10-27 19:39:25'),
(17, 3, 1, 4, 'Actually, buying this product was worth my time. ', '2024-10-28 05:17:43', '2024-10-28 05:17:43'),
(18, 3, 1, 5, 'This product was vary good. And product arrived fast.', '2024-10-28 05:17:55', '2024-10-28 05:31:23'),
(19, 3, 3, 3, 'Product was somewhat good.', '2024-10-28 05:30:01', '2024-10-28 05:30:01'),
(24, 4, 3, 4, 'This product was very good.', '2024-10-28 12:39:25', '2024-10-28 12:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('q0ErKjAQcvmrE3O8ypE6QeJjZAdQzQCKUT1tRM9g', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUndydGdCNEF4NndxVnlFbHdudDVrVkdQcFZEWDBjYnlwZTA4eDliTyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9fQ==', 1730158309),
('YjETYJo360A3ayKPTDIx28n3wU02YOepqDJzUQlv', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZEZRWEVKMDhjQW5wamlqZUVPRnRET0s4VGRSelU4cU9sMDhoMXhRZiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3Byb2R1Y3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjQ6ImNhcnQiO2E6Mjp7aToxO2E6NTp7czoyOiJpZCI7aToxO3M6NDoibmFtZSI7czoxMToiTWlyYWNsZS1Hcm8iO3M6NToicHJpY2UiO2Q6MzUwO3M6MzoicXR5IjtpOjE7czo1OiJpbWFnZSI7czo2OToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3N0b3JhZ2UvcHJvZHVjdHNcZmVydGlsaXplcnNcRmVydGktTWlyYWNsZS53ZWJwIjt9aTozO2E6NTp7czoyOiJpZCI7aTozO3M6NDoibmFtZSI7czoxNzoiRHIuIEVhcnRoIE9yZ2FuaWMiO3M6NToicHJpY2UiO2Q6MTAwMDtzOjM6InF0eSI7aToxO3M6NToiaW1hZ2UiO3M6NzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdG9yYWdlL3Byb2R1Y3RzXGZlcnRpbGl6ZXJzXEZlcnRpLURyLkVhcnRoLndlYnAiO319fQ==', 1730158615);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nic`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `firstname`, `lastname`, `image_path`, `province`, `city`, `zip`) VALUES
(3, 'chathura', '221101920000', 'cha@test.com', NULL, '$2y$12$V5WTWr5kXrc9ovAjnIfhpuOYHcOQP.jLmgWEHIRAHuct4E8stlA4i', NULL, '2024-10-16 07:37:47', '2024-10-24 13:50:29', 'Chathura', 'Udayanga', 'profile/tQJ2Kl04yafVTkF0s62rjxELQ5CyWZPDNLHuRf7l.webp', 'north_western', 'Athurugiriya', '10150'),
(4, 'kasun123', '123456789123', 'kasun@test.com', NULL, '$2y$12$xgmWYDPKi.wNyJWaXOFLc.JEog5JJj6yNMmDv6b.GBnWH3e6r768m', NULL, '2024-10-16 11:20:13', '2024-10-16 11:20:13', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'kavinda123', '123456789123', 'kavi@test.com', NULL, '$2y$12$14aBU5DL4gS5pccj5wCKteJxCCEDAALYH//id0hM/jpTUwjY0H3iW', NULL, '2024-10-16 11:22:47', '2024-10-16 11:22:47', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'yasitha', '123456789123', 'yasi@test.com', NULL, '$2y$12$8Sm8/lz8EwLfPvyLWhkeMew8xd9TNBB3T/f9.6W4i7u90/YKmxnCu', NULL, '2024-10-16 11:29:08', '2024-10-22 23:18:26', 'Yasitha', 'Madushan', 'profile/pUkPI5CwVmAXk7VcjJGsdJeWIW5iWJam2mdT3fYE.jpg', 'western', 'Athurugiriya', '11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
