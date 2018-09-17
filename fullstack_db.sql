-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2018 at 05:37 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descript` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_lg` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `descript`, `img`, `img_lg`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'Tobermory', 'Tobermory is a harbour village on the Bruce Peninsula in the province of Ontario', 'tobermory.png', 'tobermory_lg.png', 3, NULL, NULL),
(2, 'Allan Park Conservation Area', 'In addition to to over 10 km of trails, the day use area offers picnicking and a stocked pond.', 'allan_park.png', 'allan_park_large.png', 3, NULL, NULL),
(3, 'Tottenham Conservation Area', 'Tottenham CA consists of 16 hectares of parkland overlooking a picteresque pond.', 'tottenham.png', 'tottenham_large.png', 3, NULL, NULL),
(4, 'Elora Gorge Conservation Area', 'The main attraction is the Elora Gorge, complete with 22 metre cliffs.', 'elora_gorge.png', 'elora_gorge_large.png', 3, NULL, NULL),
(5, 'Emmett Lake', 'Some big northern pike can be found in this Bruce National Park lake.', 'emmett_lake.png', 'emmett_lake_large.png', 1, NULL, NULL),
(6, 'Lake St. Clair', 'The main sportfish is walleye and with patience, good size walleye can still be found in the lake.', 'st_clair.png', 'st_clair_large.png', 1, NULL, NULL),
(7, 'Rondeau Bay', 'Roundeau Bay is nestled between Rondeau Provincial Park and the mainland, offering brown and rainbow trout. ', 'rondeau_bay.png', 'rondeau_bay_large.png', 1, NULL, NULL),
(8, 'Colpoy\'s Creek', 'This creek is home to a population of brook trout and rainbow trout.', 'colpoys_creek.png', 'colpoys_creek_large.png', 1, NULL, NULL),
(9, 'Avon Trail', 'The Avon Trail links the Thames Valley Trail in the west with the Grand Valley trail in the east.', 'avon_trail.png', 'avon_trail_large.png', 2, NULL, NULL),
(10, 'Kissing Bridge Trailway', 'Most of the trail is located in the Waterloo County and is well maintained. A wonderful  journey through rural areas and towns.', 'kissing_bridge_trailway.png', 'kissing_bridge_trailway_large.png', 2, NULL, NULL),
(11, 'Mizzy Lake Trail', 'This trail requires an early start and a full day to do properly. It visits nine ponds and small lakes and affords some of the best chances to see wildlife in the Parkway Corridor.', 'mizzy_lake_trail.png', 'mizzy_lake_trail_large.png', 2, NULL, NULL),
(12, 'Riverview Trail', 'It leads past rock boulders, a 6 m limestone bluff and through a quiet cedar forest.\r\n\r\nMcGowan Falls Gorge is a wonderful stop along this scenic part of the Saugeen River.', 'riverview_trail.png', 'riverview_trail_large.png', 2, NULL, NULL),
(13, 'Bon Echo Provincial Park', 'Take an easy day paddle on Mazinaw Lake or follow the 21km, day trip.', 'bon_echo.png', 'bon_echo_large.png', 4, NULL, NULL),
(14, 'Old Woman Lake Route', 'The route includes Mijinemungshing and Mirimoki lakes, where winds may poise a problem.', 'old_woman.png', 'old_woman_large.png', 4, NULL, NULL),
(15, 'White River', '82km, 5-7 Days, 21 Portages, Advanced You put-in is where the river widens at White Lake, down river from the town of White River.', 'white_river.png', 'white_river_large.png', 4, NULL, NULL),
(16, 'Killarney Provincial Park', 'The park has a large number of canoe routes that will take you into the parks beautiful interior or along the coast.', 'killarney.png', 'killarney_large.png', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activitie_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `title`, `contents`, `poster`, `activitie_id`, `created_at`, `updated_at`) VALUES
(1, 'Awesome Place', 'Great Place with killer views!', '', 3, NULL, NULL),
(12, 'awesom place', 'lots of fun and great sites', 'moragh', 5, '2018-01-26 06:07:50', '2018-01-26 06:07:50'),
(13, 'What a sweet place!', 'AWESOME! long hike with great views. I will definitely go back', 'moragh', 6, '2018-01-26 20:07:53', '2018-01-26 20:07:53'),
(27, 'Beautiful Water!', 'Took my kids there and they didn\'t want to leave. Beautiful water and a decent beach. Bring adequate footwear though, lot\'s of rock!', 'LeafsBoi60', 5, '2018-01-31 19:37:46', '2018-01-31 19:37:46'),
(28, 'Cool place!', 'Loved seeing all the swans!', 'LeafsBoi60', 9, '2018-01-31 19:41:14', '2018-01-31 19:41:14'),
(29, 'Boooo, boring', 'Cat fur is the new black make muffins more napping, more napping all the napping is exhausting, for lick face hiss at owner, pee a lot, and meow repeatedly scratch at fence purrrrrr eat muffins and poutine until owner comes back and climb leg. Mice eat the fat cats food for give attitude. My left donut is missing, as is my right steal the warm chair right after you get up. All of a sudden cat goes crazy shake treat bag, so spot something, big eyes, big eyes, crouch, shake butt, prepare to pounce, lick left leg for ninety minutes, still dirty for wake up wander around the house making large amounts of noise jump on top of your human\'s bed and fall asleep again. Meowwww this human feeds me, i should be a god. Touch water with paw then recoil in horror brown cats with pink ears make muffins sleep on dog bed,', 'LeafsBoi60', 9, '2018-01-31 19:44:18', '2018-01-31 19:44:18'),
(30, 'What a spectacular view', 'Well\'ll maintained hikes for any level. There is also other trails with more difficulty. Lots of places to just sit and enjoy. These trails will also lead you to the grotto. There is also camping at this National Park.', 'LeafsBoi60', 14, '2018-01-31 20:56:20', '2018-01-31 20:56:20'),
(31, 'Cool!', 'What a neat hike. The old bridge was awesome to see.', 'LeafsBoi60', 10, '2018-02-01 00:19:36', '2018-02-01 00:19:36'),
(32, 'Looks Beautiful', 'I\'ve always wanted to go. Maybe this summer when I have some free time.', 'LeafsBoi60', 4, '2018-02-01 00:46:51', '2018-02-01 00:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2018_01_12_001659_create_burgers_table', 1),
(23, '2014_10_12_000000_create_users_table', 2),
(24, '2014_10_12_100000_create_password_resets_table', 2),
(25, '2018_01_10_141928_create_messages_table', 2),
(26, '2018_01_23_183859_create_activities_table', 2),
(27, '2018_01_25_155429_create_types_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`, `created_at`, `updated_at`, `img`) VALUES
(1, 'Fishing', NULL, NULL, 'images/resources_fishing2.png'),
(2, 'Hiking', NULL, NULL, 'images/resources_hiking2.png'),
(3, 'Camping', NULL, NULL, 'images/resources_camping2.png'),
(4, 'Paddling', NULL, NULL, 'images/resources_paddling2.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prof_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fallback.jpg',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `prof_image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'moragh', 'moragh', 'moragh@aol.com', 'anime north.jpg', '$2y$10$sacYTN/yvZd3n.BfJz6R8uGUaoEDWVWuptQxntugK2MlurlsALh6G', 'a7bcP7mvGQacq09PByTuJFIJjERy0Zi44pYNvR9XWWeQuqhRfFS6kUqUlVRj', '2018-01-25 21:13:21', '2018-01-31 07:22:57'),
(2, 'Merrick', 'LeafsBoi60', 'merryvan@aol.com', 'Zelda.jpg', '$2y$10$VUcoYWnep6Nh9/D89..n8u93Fd/yWGbvOnoknHHkGw72WVwp2Glji', 'hQDsh41j1VgW59NycAJzGONd9FDCw5kFr3aTxZ55pTy2XMpNf8yyXN2BYdZC', '2018-01-27 23:01:56', '2018-01-31 20:15:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
