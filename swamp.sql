-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 17, 2020 at 10:40 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `swamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Super Swamp', 'super@swamp.com', '$2y$10$z/fcOOmMES8OHT/P.4AWme1nzgby8xaG9YK5hBZcrgA/Z5hLlK4Bu', 1, NULL, '2020-08-12 12:49:41', '2020-08-13 01:43:55'),
(3, 'admin', 'admin@swamp.com', '$2y$10$hS4r61Et/8.FJuCAfLmJBO0W0F/.5YTwGMJHrqTg120WwycyvxZSK', 1, NULL, '2020-08-13 03:50:43', '2020-08-13 03:52:59'),
(4, 'kalisa olivier', 'kalisa@rema.gov.rw', '$2y$10$XTdZej0VQ1x3gNPsIWuyZ.5UP9KHVKqCvKF0stUxrYNYntLsXumuS', 1, NULL, '2020-08-13 04:00:51', '2020-08-13 04:02:25'),
(5, 'Gasabo', 'gasabo@gmail.com', '$2y$10$gfzX1oX32zk7.NNlAschueLGMWk0uS8X.4xw15Z.7LLwh/eeKnMIi', 1, NULL, '2020-08-13 05:18:59', '2020-08-13 05:19:09'),
(6, 'kicukiro', 'kicuiro@gmail.com', '$2y$10$R2Ra/yW0IYpvcQF5zhV7zeV5pGL3uE2pBqhmV1uoyj2esfI0rPUMi', 1, NULL, '2020-08-14 09:46:44', '2020-08-14 09:46:52'),
(7, 'Nyarugenge', 'nyarugenge@gov.rw', '$2y$10$DxzXmmanQa/XgyZOzCP8jOEqCiRRCctj.lDYu7TAgQLvANdJbD0FO', 1, NULL, '2020-08-17 07:47:52', '2020-08-17 07:48:05'),
(8, 'kamanyi', 'kaminyi@gov.rw', '$2y$10$RnZHgmCGsUg19EY57volueN7fXjiZJybWDzxBVxUTPfKrVgv0zPjS', 1, NULL, '2020-08-17 07:48:36', '2020-08-17 07:48:43'),
(9, 'rema', 'rema@gov.rw', '$2y$10$8l/E6NGSwk4fBWxUFFbDFOtNXXu0ORTzHYXfhj6k.7NUSWetf0M1m', 1, NULL, '2020-08-17 07:49:09', '2020-08-17 07:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_permission`
--

CREATE TABLE `admin_permission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `role_id`, `admin_id`) VALUES
(2, 1, 2),
(3, 1, 3),
(4, 2, 4),
(5, 3, 5),
(6, 3, 6),
(7, 3, 7),
(8, 3, 8),
(9, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `payment_id`, `start_date`, `end_date`, `status`, `comment`, `district_id`, `created_at`, `updated_at`) VALUES
(2, 1, '2020-08-01', '2020-08-15', 'end', 'your allowed to use swamp', 5, '2020-08-14 13:10:31', '2020-08-17 08:35:16'),
(3, 2, '2020-08-01', '2020-08-28', 'end', 'your allowed to use swamp', 6, '2020-08-15 09:20:25', '2020-08-17 08:33:55'),
(4, 3, '2020-09-01', '2020-08-17', 'end', 'your allowed to use swamp', 8, '2020-08-17 08:11:37', '2020-08-17 08:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `cooperatives`
--

CREATE TABLE `cooperatives` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cooperatives`
--

INSERT INTO `cooperatives` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gasabo', 'gasabo@gmail.com', NULL, '$2y$10$wbi/VbAesxB5YGO62E9GBO7s9toIBPXl4TKS825fnCuuwzCMckQBe', 0, NULL, '2020-08-12 12:46:12', '2020-08-14 06:41:17'),
(2, 'murindi rice cooperative', 'murindirice@gmail.com', NULL, '$2y$10$KOrNF4IJwvbMq920YBwNK..sDebNVjPw3HIqucrcpJPRrqW3bUPvW', 1, NULL, '2020-08-14 01:21:43', '2020-08-14 07:21:18'),
(3, 'petr rwanda', 'petrrwanda@gmail.com', NULL, '$2y$10$12wybYIEFUTgcw94owqNEOMWa4Co7M7DhOf9.QAtHSFdT7SkFNKBu', 1, NULL, '2020-08-15 08:30:47', '2020-08-15 08:42:00'),
(4, 'cooperative', 'cooperative@gmail.com', NULL, '$2y$10$aRErEdR7dDFrZPsA7cR9RuEabpdigN3pvL0T3qkdkmJLJHM2wnAA.', 1, NULL, '2020-08-17 07:50:33', '2020-08-17 07:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `cooperative_infos`
--

CREATE TABLE `cooperative_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `certificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cooperative_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cooperative_infos`
--

INSERT INTO `cooperative_infos` (`id`, `certificate`, `services`, `names`, `email`, `phone`, `leader`, `location`, `status`, `comment`, `cooperative_id`, `created_at`, `updated_at`) VALUES
(1, '1236801331.jpg', 'test one', 'test', 'test@gmail.com', '+250788574596', 'test update', 'https://www.google.com/maps/place/Phoenix+Apartment+by+LINK/@-1.9589616,30.1464469,17z/data=!3m1!4b1!4m11!1m2!2m1!1snyandungu!3m7!1s0x19dca7bf729b1f3f:0x174915598a9266e2!5m2!4m1!1i2!8m2!3d-1.958967!4d30.1486356?hl=en', 'Approved', 'your allowed', '2', '2020-08-14 02:11:33', '2020-08-14 07:11:50'),
(2, '170777890.jpg', 'agriculture and ict', 'petr rwanda', 'petrrwanda@gmail.com', '08781194127', 'Murwanashyaka jean paul', 'https://www.google.com/maps/dir/\'\'/Volve+Lab,+Kigali/@-1.9586945,30.0888144,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x19dca7d70be93607:0x6573f13396504547!2m2!1d30.1238341!2d-1.9587806!1m5!1m1!1s0x19dca7d70be93607:0x6573f13396504547!2m2!1d30.1238341!2d-1.9587806?hl=en', 'Approved', 'your allowed', '3', '2020-08-15 08:37:16', '2020-08-15 08:46:38'),
(3, '745845950.jpeg', 'agriculture', 'nyabarongo cooperative ltd', 'nyabarongo@gmail.com', '0781173242', 'Murwanashyaka jean paul', 'https://www.google.com/maps/place/Nyabarongo/@-2.0966975,29.7865969,11z/data=!4m5!3m4!1s0x19dcb863ed0479c1:0x8c8b7c5b33cdd0f9!8m2!3d-2.0439782!4d29.9833685?hl=en', 'Approved', 'your allowed', '4', '2020-08-17 07:55:06', '2020-08-17 07:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `demands`
--

CREATE TABLE `demands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `swamp_id` int(11) NOT NULL,
  `cooperative_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demands`
--

INSERT INTO `demands` (`id`, `swamp_id`, `cooperative_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 2, 'your allowed to pay', 'Approved', '2020-08-14 08:41:48', '2020-08-14 11:03:07'),
(5, 3, 3, 'your allowed to pay', 'Approved', '2020-08-15 09:15:37', '2020-08-15 09:16:41'),
(6, 4, 4, 'your allowed to pay', 'Approved', '2020-08-17 08:02:05', '2020-08-17 08:06:23');

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
(3, '2017_03_06_023521_create_admins_table', 1),
(4, '2017_03_06_053834_create_admin_role_table', 1),
(5, '2018_03_06_023523_create_roles_table', 1),
(6, '2019_12_01_120121_create_permissions_table', 1),
(7, '2019_12_01_163205_create_permission_role_table', 1),
(8, '2019_12_01_163233_create_admin_permission_table', 1),
(9, '2020_08_12_112939_create_cooperatives_table', 1),
(10, '2020_08_12_113141_create_cooperative_infos_table', 1),
(11, '2020_08_12_113304_create_demands_table', 1),
(12, '2020_08_12_113320_create_payments_table', 1),
(13, '2020_08_12_113339_create_contracts_table', 1),
(14, '2020_08_12_113359_create_swamps_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `demand_id` int(11) NOT NULL,
  `bank_receipt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `demand_id`, `bank_receipt`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, '1228704020.jpg', 'your allowed to view a contract ', 'Approved', '2020-08-14 11:28:15', '2020-08-14 13:10:31'),
(2, 5, '1469401581.jpg', 'your allowed to view a contract ', 'Approved', '2020-08-15 09:19:36', '2020-08-15 09:26:04'),
(3, 6, '1673348985.jpg', 'your allowed to view a contract ', 'Approved', '2020-08-17 08:09:45', '2020-08-17 08:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'CreateAdmin', 'Admin', '2020-08-12 12:42:00', '2020-08-12 12:42:00'),
(2, 'CreateRole', 'Role', '2020-08-12 12:42:00', '2020-08-12 12:42:00'),
(3, 'ReadAdmin', 'Admin', '2020-08-12 12:42:00', '2020-08-12 12:42:00'),
(4, 'ReadRole', 'Role', '2020-08-12 12:42:00', '2020-08-12 12:42:00'),
(5, 'UpdateAdmin', 'Admin', '2020-08-12 12:42:00', '2020-08-12 12:42:00'),
(6, 'UpdateRole', 'Role', '2020-08-12 12:42:00', '2020-08-12 12:42:00'),
(7, 'DeleteAdmin', 'Admin', '2020-08-12 12:42:00', '2020-08-12 12:42:00'),
(8, 'DeleteRole', 'Role', '2020-08-12 12:42:00', '2020-08-12 12:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'super', '2020-08-12 12:42:00', '2020-08-12 12:42:00'),
(2, 'rema', '2020-08-13 03:56:28', '2020-08-13 03:58:21'),
(3, 'district', '2020-08-13 05:18:06', '2020-08-13 05:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `swamps`
--

CREATE TABLE `swamps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `bank_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `swamps`
--

INSERT INTO `swamps` (`id`, `district_id`, `name`, `amount`, `bank_account`, `status`, `comment`, `location`, `created_at`, `updated_at`) VALUES
(2, 5, 'test one', 100000, '2341-12341-12341-12', 'available', NULL, 'https://www.google.com/maps/place/Phoenix+Apartment+by+LINK/@-1.9589616,30.1464469,17z/data=!3m1!4b1!4m11!1m2!2m1!1snyandungu!3m7!1s0x19dca7bf729b1f3f:0x174915598a9266e2!5m2!4m1!1i2!8m2!3d-1.958967!4d30.1486356?hl=en', '2020-08-14 01:04:39', '2020-08-17 08:35:16'),
(3, 6, 'gatenga swamp', 1000000, '2341-12341-12341-100', 'available', 'swamp not available', 'https://www.google.com/maps/place/Gatenga,+Kigali/@-2.0007137,30.0488727,12.9z/data=!3m1!4b1!4m5!3m4!1s0x19dca8a4421b2e29:0x1b2bae7af1f7dbd0!8m2!3d-1.9990169!4d30.0809664?hl=en', '2020-08-15 09:13:29', '2020-08-17 08:33:55'),
(4, 8, 'nyabarongo a', 50000, '2341-12341-12341-10', 'available', 'swamp not available', 'https://www.google.com/maps/place/Nyabarongo/@-2.0966975,29.7865969,11z/data=!4m5!3m4!1s0x19dcb863ed0479c1:0x8c8b7c5b33cdd0f9!8m2!3d-2.0439782!4d29.9833685?hl=en', '2020-08-17 07:59:48', '2020-08-17 08:36:44');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_permission`
--
ALTER TABLE `admin_permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_permission_admin_id_permission_id_unique` (`admin_id`,`permission_id`),
  ADD KEY `admin_permission_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_role_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cooperatives`
--
ALTER TABLE `cooperatives`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cooperatives_email_unique` (`email`);

--
-- Indexes for table `cooperative_infos`
--
ALTER TABLE `cooperative_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demands`
--
ALTER TABLE `demands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_name_index` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_role_role_id_permission_id_unique` (`role_id`,`permission_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `swamps`
--
ALTER TABLE `swamps`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_permission`
--
ALTER TABLE `admin_permission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cooperatives`
--
ALTER TABLE `cooperatives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cooperative_infos`
--
ALTER TABLE `cooperative_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `demands`
--
ALTER TABLE `demands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `swamps`
--
ALTER TABLE `swamps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_permission`
--
ALTER TABLE `admin_permission`
  ADD CONSTRAINT `admin_permission_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admin_permission_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD CONSTRAINT `admin_role_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
