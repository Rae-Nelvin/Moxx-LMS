-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 12:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moxx_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverID` bigint(20) UNSIGNED DEFAULT NULL,
  `courseTypeID` bigint(20) UNSIGNED DEFAULT NULL,
  `creatorID` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double NOT NULL,
  `discountID` bigint(20) UNSIGNED DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 0,
  `isShown` tinyint(1) NOT NULL DEFAULT 0,
  `reviews` double DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `coverID`, `courseTypeID`, `creatorID`, `price`, `discountID`, `isActive`, `isShown`, `reviews`, `created_at`, `updated_at`) VALUES
(2, 'Course 2', 'Subtitle Course 2', 2, 2, 1, 300000, NULL, 1, 0, 0, '2022-10-18 02:05:11', '2022-10-18 02:13:25'),
(3, 'Course 3', 'Course 3 Subtitle', 3, 1, 1, 250000, NULL, 1, 0, 0, '2022-10-25 19:36:02', '2022-10-25 19:54:52'),
(4, 'Course 4', 'Subtitle Course 4', 5, 1, 1, 150000, NULL, 1, 0, 0, '2022-10-25 19:44:55', '2022-10-25 19:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `course_reviews`
--

CREATE TABLE `course_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `courseID` bigint(20) UNSIGNED DEFAULT NULL,
  `reviews` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_types`
--

CREATE TABLE `course_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_types`
--

INSERT INTO `course_types` (`id`, `name`) VALUES
(1, 'Type 1'),
(2, 'Type 2'),
(3, 'Type 2');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discounts` double NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `feedbacks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lessonGroupID` bigint(20) UNSIGNED NOT NULL,
  `file` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `lessonGroupID`, `file`) VALUES
(1, 'Content 1', 1, '<iframe width=\"1856\" height=\"778\" src=\"https://www.youtube.com/embed/bbJin10Tiik\" title=\"This Game was Made for Me - Broken Through\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'Content 2', 1, '<iframe width=\"1856\" height=\"778\" src=\"https://www.youtube.com/embed/cii6ruuycQA?list=RDyIvnvI0Mlpk\" title=\"Olivia Rodrigo - deja vu (Official Video)\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'Content 1', 2, '<iframe width=\"1856\" height=\"778\" src=\"https://www.youtube.com/embed/dPFF49cbKls\" title=\"APEX RANK #4 ( Dropped ) ROAD TO RANK #1 With The R-301 & The VOLT - APEX LEGENDS SEASON 14\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'Content 3', 2, '<iframe width=\"1062\" height=\"597\" src=\"https://www.youtube.com/embed/goxmvGJkoi0\" title=\"Kami カミ ☯ Japanese Lofi HipHop Mix\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_groups`
--

CREATE TABLE `lesson_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courseID` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lesson_groups`
--

INSERT INTO `lesson_groups` (`id`, `courseID`, `title`) VALUES
(2, 2, 'Section 2');

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
(5, '2022_08_22_140818_create_roles_table', 1),
(6, '2022_08_22_140915_create_discounts_table', 1),
(7, '2022_08_22_141108_create_courses_table', 1),
(8, '2022_08_22_141616_create_course_types_table', 1),
(9, '2022_08_22_141708_create_lesson_groups_table', 1),
(10, '2022_08_22_141757_create_lessons_table', 1),
(11, '2022_08_22_142004_create_course_reviews_table', 1),
(12, '2022_08_22_142218_create_user_courses_table', 1),
(13, '2022_08_22_142851_create_photos_table', 1),
(14, '2022_08_22_143514_create_feedback_table', 1),
(15, '2022_08_22_143617_create_transactions_table', 1),
(16, '2022_08_22_145153_add_relations_to_courses_table', 1),
(17, '2022_08_22_145805_add_relations_to_users_table', 1),
(18, '2022_10_05_124320_create_plans_table', 1),
(19, '2022_10_05_124825_create_plan_features_table', 1),
(20, '2022_10_05_125151_create_plan_details_table', 1),
(21, '2022_10_07_104443_create_tutor_reviews_table', 1);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `types` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageURL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `types`, `imageURL`, `created_at`, `updated_at`) VALUES
(2, 'Course Cover', 'course/Course-2/cover/XP9w9oc86WBC1xPrDkeLNYbixsifBXRaHhypMycJ.jpg', '2022-10-18 02:05:11', '2022-10-18 02:05:11'),
(3, 'Course Cover', 'course/Course-3/cover/2Ybf4EKFtHPXHd66xKq4NbDaHrJ4k6v28eseKSYj.jpg', '2022-10-25 19:36:02', '2022-10-25 19:36:02'),
(4, 'Course Cover', 'course/Course-4/cover/K3Oy3sKZVVS1mtZUYdOzChnRUAhTz4xU2IbAuiwG.png', '2022-10-25 19:44:43', '2022-10-25 19:44:43'),
(5, 'Course Cover', 'course/Course-4/cover/WhXtGYZAob38CyyZRFAaJeh6E4BgV4kA7PTjeyE6.png', '2022-10-25 19:44:55', '2022-10-25 19:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Plan 1', 25000, 1, '2022-10-18 02:11:31', '2022-10-18 02:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `plan_details`
--

CREATE TABLE `plan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planID` bigint(20) UNSIGNED NOT NULL,
  `featureID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_details`
--

INSERT INTO `plan_details` (`id`, `planID`, `featureID`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `plan_features`
--

CREATE TABLE `plan_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_features`
--

INSERT INTO `plan_features` (`id`, `name`) VALUES
(1, 'Fast Learning');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'tutor'),
(3, 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED DEFAULT NULL,
  `courseID` bigint(20) UNSIGNED DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discountID` bigint(20) UNSIGNED DEFAULT NULL,
  `totalPrice` double NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `midtrans_url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `midtrans_booking_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `userID`, `courseID`, `token`, `discountID`, `totalPrice`, `status`, `midtrans_url`, `midtrans_booking_code`, `created_at`, `updated_at`) VALUES
(8, 4, 2, NULL, NULL, 300000, 'waiting', 'https://app.sandbox.midtrans.com/snap/v3/redirection/96570c5e-0270-4dc7-bf05-3cc8b083c7f5', '8-li6B8', '2022-10-25 20:31:30', '2022-10-25 20:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_reviews`
--

CREATE TABLE `tutor_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `mentorID` bigint(20) UNSIGNED NOT NULL,
  `reviews` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roleID` bigint(20) UNSIGNED DEFAULT NULL,
  `reviews` double DEFAULT 0,
  `isShown` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `alamat`, `phone`, `avatar`, `roleID`, `reviews`, `isShown`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'leonardowijaya11', 'Leonardo Wijaya', 'leonardo.wijaya003@binus.ac.id', '$2y$10$BmJvM9lwuWMIB/IACMafcuSH2u1i.wCQPytVsrjGtUBOJbyCkH.nm', 'Jl. Cendrawasih Raya No. 17', '081330229959', NULL, 1, 0, 0, NULL, NULL, '2022-10-13 05:36:41', '2022-10-13 05:36:41', NULL),
(2, 'Tutor1', 'Tutor 1', 'tutor1@binus.ac.id', '$2y$10$naqxmJFS0CgJrzK8K64/Luhd.OiZ7lWA2ZjCkiRKc7w39jvepqFAS', 'Jl. Cendrawasih Raya No. 17', '081330229959', NULL, 2, 0, 1, NULL, NULL, '2022-10-13 05:36:41', '2022-10-18 02:13:46', NULL),
(3, 'Guest1', 'Guest 1', 'guest1@binus.ac.id', '$2y$10$sokUa96p0L21iY2FCJSiKePz4Eoth.BdaH1QVTNbeubpZi/bQC0HW', 'Jl. Cendrawasih Raya No. 17', '081330229959', NULL, 3, 0, 0, NULL, NULL, '2022-10-13 05:36:41', '2022-10-13 05:36:41', NULL),
(4, 'LeonardoWijaya259', 'Leonardo Wijaya', 'leondut40@gmail.com', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/ALm5wu1DVaTtBbcjS2gtzsLuzVIZG2LybJ0RujmmKp897Q=s96-c', 3, 0, 0, NULL, 'kYAQj08WxTynkNQnAxVY5y84rZRkeid2VLgyhgiPrQN3AyJtKYtUaZxkHkO6', '2022-10-13 05:36:52', '2022-10-13 05:36:52', NULL),
(5, 'LeonardoWijaya275', 'Leonardo Wijaya', 'raenelvin29@gmail.com', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/ALm5wu28PfIvtKQuSDPgXrjzt0xBQNobc9qjEdzCmAs-=s96-c', 3, 0, 0, NULL, 'uDp9QuWdowRUtRgas7M8ZzrieQcQqOK54F0DjMdZQiHLvDoY9LSs3mjt14Wb', '2022-10-18 02:19:34', '2022-10-18 02:19:34', NULL),
(6, 'User 335', 'User 3', 'raenelvin30@gmail.com', '$2y$10$OrMcJWzrquvt6TzLx910Geb65rPD9aJjJ6bhGMBbCkBD8SCS46OUG', NULL, '081330229959', NULL, 3, 0, 0, NULL, NULL, '2022-10-18 02:20:47', '2022-10-18 02:20:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_courses`
--

CREATE TABLE `user_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `courseID` bigint(20) UNSIGNED DEFAULT NULL,
  `startLessonID` bigint(20) UNSIGNED DEFAULT NULL,
  `endLessonID` bigint(20) UNSIGNED DEFAULT NULL,
  `progressLessonID` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_coverid_foreign` (`coverID`),
  ADD KEY `courses_coursetypeid_foreign` (`courseTypeID`),
  ADD KEY `courses_creatorid_foreign` (`creatorID`),
  ADD KEY `courses_discountid_foreign` (`discountID`);

--
-- Indexes for table `course_reviews`
--
ALTER TABLE `course_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_reviews_userid_foreign` (`userID`),
  ADD KEY `course_reviews_courseid_foreign` (`courseID`);

--
-- Indexes for table `course_types`
--
ALTER TABLE `course_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_userid_foreign` (`userID`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_lessongroupid_foreign` (`lessonGroupID`);

--
-- Indexes for table `lesson_groups`
--
ALTER TABLE `lesson_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_groups_courseid_foreign` (`courseID`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_details`
--
ALTER TABLE `plan_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_details_planid_foreign` (`planID`),
  ADD KEY `plan_details_featureid_foreign` (`featureID`);

--
-- Indexes for table `plan_features`
--
ALTER TABLE `plan_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_userid_foreign` (`userID`),
  ADD KEY `transactions_courseid_foreign` (`courseID`),
  ADD KEY `transactions_discountid_foreign` (`discountID`);

--
-- Indexes for table `tutor_reviews`
--
ALTER TABLE `tutor_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutor_reviews_userid_foreign` (`userID`),
  ADD KEY `tutor_reviews_mentorid_foreign` (`mentorID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_roleid_foreign` (`roleID`);

--
-- Indexes for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_courses_userid_foreign` (`userID`),
  ADD KEY `user_courses_courseid_foreign` (`courseID`),
  ADD KEY `user_courses_startlessonid_foreign` (`startLessonID`),
  ADD KEY `user_courses_endlessonid_foreign` (`endLessonID`),
  ADD KEY `user_courses_progresslessonid_foreign` (`progressLessonID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_reviews`
--
ALTER TABLE `course_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_types`
--
ALTER TABLE `course_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lesson_groups`
--
ALTER TABLE `lesson_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan_details`
--
ALTER TABLE `plan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan_features`
--
ALTER TABLE `plan_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tutor_reviews`
--
ALTER TABLE `tutor_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_courses`
--
ALTER TABLE `user_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_coursetypeid_foreign` FOREIGN KEY (`courseTypeID`) REFERENCES `course_types` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_coverid_foreign` FOREIGN KEY (`coverID`) REFERENCES `photos` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_creatorid_foreign` FOREIGN KEY (`creatorID`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_discountid_foreign` FOREIGN KEY (`discountID`) REFERENCES `discounts` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `course_reviews`
--
ALTER TABLE `course_reviews`
  ADD CONSTRAINT `course_reviews_courseid_foreign` FOREIGN KEY (`courseID`) REFERENCES `courses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `course_reviews_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_lessongroupid_foreign` FOREIGN KEY (`lessonGroupID`) REFERENCES `lessons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lesson_groups`
--
ALTER TABLE `lesson_groups`
  ADD CONSTRAINT `lesson_groups_courseid_foreign` FOREIGN KEY (`courseID`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `plan_details`
--
ALTER TABLE `plan_details`
  ADD CONSTRAINT `plan_details_featureid_foreign` FOREIGN KEY (`featureID`) REFERENCES `plan_features` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plan_details_planid_foreign` FOREIGN KEY (`planID`) REFERENCES `plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_courseid_foreign` FOREIGN KEY (`courseID`) REFERENCES `courses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `transactions_discountid_foreign` FOREIGN KEY (`discountID`) REFERENCES `discounts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `transactions_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `tutor_reviews`
--
ALTER TABLE `tutor_reviews`
  ADD CONSTRAINT `tutor_reviews_mentorid_foreign` FOREIGN KEY (`mentorID`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tutor_reviews_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roleid_foreign` FOREIGN KEY (`roleID`) REFERENCES `roles` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD CONSTRAINT `user_courses_courseid_foreign` FOREIGN KEY (`courseID`) REFERENCES `courses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `user_courses_endlessonid_foreign` FOREIGN KEY (`endLessonID`) REFERENCES `lessons` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `user_courses_progresslessonid_foreign` FOREIGN KEY (`progressLessonID`) REFERENCES `lessons` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `user_courses_startlessonid_foreign` FOREIGN KEY (`startLessonID`) REFERENCES `lessons` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `user_courses_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
