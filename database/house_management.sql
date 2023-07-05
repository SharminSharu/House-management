-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 04:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(50) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `name`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Electricity Bill', '2000.00', '2023-07-04 01:43:15', '2023-07-04 01:43:15'),
(2, 'Water Bill', '700.00', '2023-07-04 01:43:42', '2023-07-04 01:43:42'),
(3, 'Gas Bill', '1200.00', '2023-07-04 01:44:06', '2023-07-04 01:44:06'),
(4, 'Garbage Bill', '150.00', '2023-07-04 01:44:23', '2023-07-04 01:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phn_num` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phn_num`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Rofiq Hasan', 'rof@gmail.com', 'Want a flat', '01978765544', 'I choose 1B flat. Plaese proceed.', '2023-07-04 01:54:45', '2023-07-04 01:54:45'),
(2, 'Reza', 'yyy@gmail.com', 'Want to rent 4A', '8934720957', 'I want a new flat', '2023-07-04 02:56:15', '2023-07-04 02:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(50) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `name`, `cost`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Monthly Meeting', '4500.00', '2023-05-04 13:50:00', '2023-07-04 01:50:29', '2023-07-04 01:50:29'),
(2, 'Guard Salary', '8000.00', '2023-06-03 13:51:00', '2023-07-04 01:51:09', '2023-07-04 01:51:09'),
(3, 'Manager Salary', '14000.00', '2023-07-02 13:51:00', '2023-07-04 01:51:35', '2023-07-04 01:51:35'),
(4, 'Social Donation', '7000.00', '2023-06-02 13:52:00', '2023-07-04 01:52:12', '2023-07-04 01:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flat_name` char(50) DEFAULT NULL,
  `floor` char(50) DEFAULT NULL,
  `flat_size` char(50) DEFAULT NULL,
  `bed_room` char(50) DEFAULT NULL,
  `balcony` char(50) DEFAULT NULL,
  `wash_room` char(50) DEFAULT NULL,
  `rent_cost` decimal(10,2) DEFAULT NULL,
  `status` enum('occupied','empty') NOT NULL DEFAULT 'empty',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`id`, `flat_name`, `floor`, `flat_size`, `bed_room`, `balcony`, `wash_room`, `rent_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, '2A', '2nd Floor', '800sft', '2', '1', '1', '9000.00', 'occupied', '2023-07-04 01:00:55', '2023-07-04 01:02:55'),
(2, '2B', '2nd Floor', '1200sft', '2', '1', '2', '10000.00', 'occupied', '2023-07-04 01:01:35', '2023-07-04 01:02:26'),
(3, '1C', '1st Floor', '1380sft', '3', '2', '2', '15000.00', 'occupied', '2023-07-04 01:12:09', '2023-07-04 01:12:47'),
(4, '1A', '1st Floor', '800sft', '2', '1', '1', '9000.00', 'occupied', '2023-07-04 01:22:29', '2023-07-04 01:26:22'),
(5, '1B', '1st Floor', '1200sft', '2', '1', '2', '10000.00', 'occupied', '2023-07-04 01:23:38', '2023-07-04 02:52:41'),
(6, '1D', '1st Floor', '1400sft', '3', '2', '2', '15000.00', 'empty', '2023-07-04 01:24:34', '2023-07-04 01:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `flat_assigns`
--

CREATE TABLE `flat_assigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `flat_id` bigint(20) UNSIGNED NOT NULL,
  `assign_date` date DEFAULT NULL,
  `rent_cost` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flat_assigns`
--

INSERT INTO `flat_assigns` (`id`, `tenant_id`, `flat_id`, `assign_date`, `rent_cost`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-05-01', '10000.00', '2023-07-04 01:02:26', '2023-07-04 01:02:26'),
(2, 2, 1, '2023-04-01', '9000.00', '2023-07-04 01:02:55', '2023-07-04 01:02:55'),
(3, 3, 3, '2023-03-01', '15000.00', '2023-07-04 01:12:47', '2023-07-04 01:12:47'),
(4, 4, 4, '2023-02-01', '9000.00', '2023-07-04 01:26:22', '2023-07-04 01:26:22'),
(5, 5, 5, '2023-06-02', '10000.00', '2023-07-04 02:52:41', '2023-07-04 02:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `maintenances`
--

CREATE TABLE `maintenances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flat_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `reported_date` date DEFAULT NULL,
  `status` enum('complete','incomplete') NOT NULL DEFAULT 'incomplete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maintenances`
--

INSERT INTO `maintenances` (`id`, `flat_id`, `description`, `cost`, `reported_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Door Lock Broken', '4000.00', '2023-04-13', 'incomplete', '2023-07-04 01:45:34', '2023-07-04 01:45:34'),
(2, 3, 'Kitchen Gas Leakage', '1000.00', '2023-03-22', 'incomplete', '2023-07-04 01:47:07', '2023-07-04 01:47:07'),
(3, 1, 'Wall Paint Faded', '5000.00', '2023-05-09', 'incomplete', '2023-07-04 01:48:31', '2023-07-04 01:48:31'),
(4, 2, 'Basin Tap Broken', '2300.00', '2023-06-14', 'incomplete', '2023-07-04 01:49:32', '2023-07-04 01:49:32');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_07_064136_create_tenants_table', 1),
(6, '2023_06_07_070719_create_flats_table', 1),
(7, '2023_06_09_055000_create_flat_assigns_table', 1),
(8, '2023_06_09_055124_create_payments_table', 1),
(9, '2023_06_09_055444_create_maintenances_table', 1),
(10, '2023_06_09_055459_create_expenses_table', 1),
(11, '2023_06_13_183752_create_bills_table', 1),
(12, '2023_06_29_164058_create_rooms_table', 1),
(13, '2023_07_02_171914_create_contacts_table', 1),
(14, '2023_07_02_175320_create_subscribers_table', 1);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flatassign_id` bigint(20) UNSIGNED NOT NULL,
  `purpose` char(50) DEFAULT NULL,
  `paid` decimal(10,2) DEFAULT NULL,
  `due` decimal(10,2) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `flatassign_id`, `purpose`, `paid`, `due`, `payment_date`, `created_at`, `updated_at`) VALUES
(1, 2, 'rent', '18000.00', '2000.00', '2023-07-01', '2023-07-04 01:04:32', '2023-07-04 01:04:32'),
(2, 1, 'rent', '18000.00', '0.00', '2023-07-01', '2023-07-04 01:09:51', '2023-07-04 01:09:51'),
(3, 3, 'rent', '29000.00', '1000.00', '2023-07-03', '2023-07-04 01:13:20', '2023-07-04 01:13:20'),
(5, 4, 'rent', '12000.00', '6000.00', '2023-07-03', '2023-07-04 01:41:35', '2023-07-04 01:41:35'),
(6, 4, 'rent', '15000.00', '3000.00', '2023-07-01', '2023-07-04 02:51:20', '2023-07-04 02:51:20'),
(7, 5, 'rent', '10000.00', '10000.00', '2023-07-01', '2023-07-04 02:53:19', '2023-07-04 02:53:19');

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
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `description`, `image`, `size`, `price`, `created_at`, `updated_at`) VALUES
(1, 'A', '2 bedroom, 1 balcony, 1 kitchen, 1 washroom, dining & drawing', 'https://media.gettyimages.com/id/163520684/photo/living-room-with-tv.jpg?s=612x612&w=gi&k=20&c=Oh1I1TfTz1ygk3FcaKsjAEyBc6nS2kfiXcBUxua-glk=', '800', '9000.00', '2023-07-04 00:57:09', '2023-07-04 00:57:09'),
(2, 'B', '2 bedroom, 1 balcony, 1 kitchen, 2 washroom, dining & drawing', 'https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg?cs=srgb&dl=pexels-medhat-ayad-439227.jpg&fm=jpg', '1200', '12000.00', '2023-07-04 00:57:09', '2023-07-04 00:57:09'),
(3, 'C', '3 bedroom, 2 balcony, 1 kitchen, 2 washroom, dining & drawing', 'https://static9.depositphotos.com/1009647/1232/i/450/depositphotos_12322746-stock-photo-studio-apartment.jpg', '1380', '15000.00', '2023-07-04 00:57:09', '2023-07-04 00:57:09'),
(4, 'D', '3 bedroom, 3 balcony, 1 kitchen, 3 washroom, dining & drawing', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfC8ZHR3-5-fTLevI-fl-Z_-0IBoLxKYew9NWcU94O-QcqbG2XQuccnHXhHEjHEDu_f9Q&usqp=CAU', '1400', '18000.00', '2023-07-04 00:57:09', '2023-07-04 00:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(50) DEFAULT NULL,
  `photo` char(50) DEFAULT NULL,
  `nid` char(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phn_no` char(50) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT 'male',
  `occupation` char(50) DEFAULT NULL,
  `family_member` char(50) DEFAULT NULL,
  `per_address` text DEFAULT NULL,
  `move_in` date DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `name`, `photo`, `nid`, `email`, `phn_no`, `gender`, `occupation`, `family_member`, `per_address`, `move_in`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Altap Ali', '1688453944_5.jpg', '1234567', 'a@gmail.com', '015111111111', 'male', 'Business-Man', '4', 'Dhaka', '2023-05-01', 'active', '2023-07-04 00:59:04', '2023-07-04 00:59:04'),
(2, 'Asif Raihan', '1688454019_9.jpg', '1234567', 'as@gmail.com', '017111111111', 'male', 'Service-Holder', '5', 'Dinajpur', '2023-04-01', 'active', '2023-07-04 01:00:19', '2023-07-04 01:00:19'),
(3, 'Selina Begum', '1688454681_2.jpg', '12341234', 'selina@gmail.com', '015111111112', 'female', 'Govt.Empolyee', '4', 'Sherpur', '2023-03-01', 'active', '2023-07-04 01:11:21', '2023-07-04 01:11:21'),
(4, 'Shahriar Chy', '1688455211_9.jpg', '6757856', 'shah@gmail.com', '01514778899', 'male', 'Service-Holder', '6', 'Magura', '2023-02-01', 'active', '2023-07-04 01:20:11', '2023-07-04 01:20:11'),
(5, 'Sabiha Alam', '1688458570_4.jpg', '1234567', 'shabia@gmail.com', '01654777777', 'female', 'Service-Holder', '4', 'Sherpur', '2023-05-01', 'active', '2023-07-04 02:16:10', '2023-07-04 02:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phn_num` varchar(15) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','manager') NOT NULL DEFAULT 'manager',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phn_num`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SHARMIN AKTER', 'sharmin@gmail.com', '01912740878', NULL, '$2y$10$VoOe5MgQd4V.6rB4m6LXo.FfNOfLBnb6ieWWjEkXVnwBMwEGyHbum', 'admin', NULL, '2023-07-04 00:58:03', '2023-07-04 00:58:03'),
(2, 'Tauhid Ahmad', 'reza@gmail.com', '01912740878', NULL, '$2y$10$S9.YPbVk/RykB/ekOY0mXeSjtQNVY2FNinnkOQpfFXk3rVofpHgZW', 'admin', NULL, '2023-07-04 01:15:32', '2023-07-04 01:15:32'),
(3, 'Babu Mia', 'manager1@gmail.com', '01912740778', NULL, '$2y$10$VD.qSAM.6hETpNAw0OqzxOb5CvYNk4yJzF1QW6iZS9HijCSE5disC', 'manager', NULL, '2023-07-04 01:16:27', '2023-07-04 01:16:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat_assigns`
--
ALTER TABLE `flat_assigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flat_assigns_tenant_id_foreign` (`tenant_id`),
  ADD KEY `flat_assigns_flat_id_foreign` (`flat_id`);

--
-- Indexes for table `maintenances`
--
ALTER TABLE `maintenances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maintenances_flat_id_foreign` (`flat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_flatassign_id_foreign` (`flatassign_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tenants_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flat_assigns`
--
ALTER TABLE `flat_assigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flat_assigns`
--
ALTER TABLE `flat_assigns`
  ADD CONSTRAINT `flat_assigns_flat_id_foreign` FOREIGN KEY (`flat_id`) REFERENCES `flats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `flat_assigns_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintenances`
--
ALTER TABLE `maintenances`
  ADD CONSTRAINT `maintenances_flat_id_foreign` FOREIGN KEY (`flat_id`) REFERENCES `flats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_flatassign_id_foreign` FOREIGN KEY (`flatassign_id`) REFERENCES `flat_assigns` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
