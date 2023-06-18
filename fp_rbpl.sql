-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 05:16 PM
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
-- Database: `fp_rbpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `IdCust` bigint(20) UNSIGNED NOT NULL,
  `IdPIC` bigint(20) UNSIGNED NOT NULL,
  `NomorCust` varchar(255) DEFAULT NULL,
  `NamaSuami` varchar(255) DEFAULT NULL,
  `NamaIstri` varchar(255) DEFAULT NULL,
  `Lokasi` varchar(255) DEFAULT NULL,
  `Status` varchar(255) NOT NULL,
  `Tanggal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`IdCust`, `IdPIC`, `NomorCust`, `NamaSuami`, `NamaIstri`, `Lokasi`, `Status`, `Tanggal`) VALUES
(1, 2, '+461526880333', 'Gamani Prayoga', 'Unjani Nadia Rahimah M.Ak', 'Psr. Gajah No. 199, Bau-Bau 41153, Jatim', 'AWAL', '2007-03-02'),
(2, 10, '+6796249649', 'Jaya Ardianto', 'Jane Widiastuti S.Gz', 'Kpg. Acordion No. 632, Tanjung Pinang 51297, Bengkulu', 'AWAL', '2010-10-05'),
(3, 9, '+80033037627', 'Balapati Jatmiko Wahyudin', 'Nadine Kayla Pratiwi', 'Psr. Cut Nyak Dien No. 219, Sukabumi 96418, Malut', 'AWAL', '2019-10-12'),
(4, 10, '+23698580219', 'Prasetya Tamba', 'Nilam Diah Usamah S.IP', 'Ki. Surapati No. 821, Tasikmalaya 69478, Sulsel', 'AWAL', '1972-05-24'),
(5, 9, '+963093910450', 'Cengkal Iswahyudi M.Farm', 'Siska Kiandra Purnawati', 'Dk. Sudirman No. 962, Pontianak 24410, Kaltara', 'AWAL', '2006-03-14'),
(6, 2, '+22944143959', 'Laswi Marpaung M.TI.', 'Zulfa Suryatmi', 'Psr. Wahid Hasyim No. 546, Banjarmasin 82473, Sulut', 'AWAL', '2011-11-30'),
(7, 6, '+3580533535972', 'Najib Sirait M.Kom.', 'Shakila Rahmawati', 'Jln. Flora No. 408, Mojokerto 11667, NTB', 'AWAL', '2019-01-27'),
(8, 7, '+4570672512', 'Pranata Among Budiman S.Farm', 'Victoria Purnawati', 'Jr. Ekonomi No. 163, Bau-Bau 69511, Aceh', 'AWAL', '1975-04-18'),
(9, 4, '+8565361986429', 'Harsanto Warsa Pranowo', 'Puji Purwanti S.IP', 'Ds. Supomo No. 180, Sorong 97608, DIY', 'AWAL', '1983-06-19'),
(10, 4, '+572102861872', 'Bahuwarna Utama', 'Julia Hasanah', 'Jr. Abdul No. 399, Tasikmalaya 88527, Pabar', 'AWAL', '1971-06-09'),
(11, 10, '123456789', 'Anang', 'Ihsan', '1', 'AWAL', '1'),
(12, 10, '987654321', 'Anang', 'Ihsan', '1', 'LUNAS', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_paket`
--

CREATE TABLE `customer_paket` (
  `IdCustPaket` bigint(20) UNSIGNED NOT NULL,
  `IdCust` bigint(20) UNSIGNED NOT NULL,
  `IdPaket` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_paket`
--

INSERT INTO `customer_paket` (`IdCustPaket`, `IdCust`, `IdPaket`) VALUES
(1, 11, 21),
(2, 12, 21),
(3, 12, 2),
(4, 12, 18),
(5, 12, 46),
(6, 12, 34);

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_06_18_034150_data_awal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `IdPaket` bigint(20) UNSIGNED NOT NULL,
  `Layanan` varchar(255) DEFAULT NULL,
  `NamaPaket` varchar(255) DEFAULT NULL,
  `Deskripsi` varchar(255) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`IdPaket`, `Layanan`, `NamaPaket`, `Deskripsi`, `Harga`) VALUES
(1, 'CATERING', 'Indonesian Taste', 'Et porro rerum repellat molestiae.', 6000000),
(2, 'CATERING', 'Vegan Choice', 'Sint possimus voluptatibus corrupti.', 8000000),
(3, 'CATERING', 'Classic Western', 'Soluta laboriosam quia consectetur eius perferendis.', 6000000),
(4, 'CATERING', 'Indian Fare', 'Perferendis iste voluptatem est distinctio autem.', 4000000),
(5, 'CATERING', 'Delightful Arabian', 'Similique quidem fugit nihil deleniti.', 4000000),
(6, 'CATERING', 'Magnifico Italiano', 'Maxime blanditiis nihil dolores porro adipisci suscipit.', 4000000),
(7, 'CATERING', 'Korean Cuisine', 'Rerum assumenda rerum asperiores.', 6000000),
(8, 'CATERING', 'Authentic Chinese', 'Iste expedita aut vero facere sequi.', 4000000),
(9, 'CATERING', 'Art of Japanese', 'Quam at laboriosam laboriosam id.', 5000000),
(10, 'CATERING', 'French Gourmet', 'Dolor repellendus quia et repellat.', 5000000),
(11, 'DECORATION', 'Custom Decoration', 'Culpa quis et culpa voluptatem et.', 8000000),
(12, 'DECORATION', 'Lantern Theme Decoration', 'Aut ut accusantium rem sint autem.', 6000000),
(13, 'DECORATION', 'Color Based Decoration', 'Commodi aut sunt omnis voluptatem eaque excepturi.', 4000000),
(14, 'DECORATION', 'Arbor Decoration', 'Qui ea laborum sed incidunt omnis.', 4000000),
(15, 'DECORATION', 'Stage Backdrop Only', 'Occaecati magni consequatur dicta tenetur vel.', 2000000),
(16, 'DECORATION', 'Royal Decoration', 'Omnis autem alias maiores omnis quia.', 10000000),
(17, 'DECORATION', 'Rustic Decoration', 'Numquam et iste et aut deleniti dolorum.', 4000000),
(18, 'DECORATION', 'Maximalism Decoration', 'Sit quasi consequatur pariatur.', 5000000),
(19, 'DECORATION', 'Wedding Altar Only', 'Iusto pariatur commodi aut culpa aliquam fugiat.', 2000000),
(20, 'DECORATION', 'Minimalist Decoration', 'Maiores esse voluptatem sed aliquid eum quia.', 2000000),
(21, 'VENUE', 'Private Venue', 'Quas tempore cumque ut.', 10000000),
(22, 'VENUE', 'Bars & Lounge', 'Error sed rerum quia molestiae hic.', 7000000),
(23, 'VENUE', 'Beach Venue', 'Sed aut deleniti beatae et corporis.', 4000000),
(24, 'VENUE', 'Park Wedding', 'Corrupti rerum vero aspernatur mollitia blanditiis non.', 4000000),
(25, 'VENUE', 'Home Backyard', 'Ad dolorem inventore eius sint sit omnis.', 2000000),
(26, 'VENUE', 'Sport Club', 'Enim in velit modi quibusdam voluptate quia.', 4000000),
(27, 'VENUE', 'Gallery & Museum', 'Ab est omnis sequi quod consequuntur dolores.', 5000000),
(28, 'VENUE', 'Hotel Wedding', 'Aut qui non quo.', 4000000),
(29, 'VENUE', 'Warehouse Wedding', 'Porro expedita vero velit libero accusantium beatae.', 2000000),
(30, 'VENUE', 'Restaurant Wedding', 'Distinctio reiciendis magni reprehenderit provident.', 4000000),
(31, 'ENTERTAINMENT', 'Franciscan Gardens Orange County Wedding', 'Enim laudantium quia est praesentium.', 15000000),
(32, 'ENTERTAINMENT', 'The Wright House Provencal Wedding', 'Praesentium voluptas excepturi maiores est mollitia impedit.', 15000000),
(33, 'ENTERTAINMENT', 'The Knot', 'Doloremque vitae atque quo saepe.', 15000000),
(34, 'ENTERTAINMENT', 'Bruna e Lucas', 'Deserunt nam dolores sit nostrum qui.', 17500000),
(35, 'ENTERTAINMENT', 'Evelyn and The Vipers', 'Tenetur provident et omnis.', 17500000),
(36, 'ENTERTAINMENT', 'Bella And The Bourbon Boys', 'Sit sit dicta in hic quasi eveniet.', 17500000),
(37, 'ENTERTAINMENT', 'Sugar Rush', 'Architecto veniam id quia ea maxime.', 17500000),
(38, 'ENTERTAINMENT', 'The Blakes', 'Et maxime aut et aut quia dicta.', 20000000),
(39, 'ENTERTAINMENT', 'Jenny and the Mexicats', 'Dolor perspiciatis ut nobis consequatur.', 20000000),
(40, 'ENTERTAINMENT', 'Untitled', 'Mollitia qui illo molestias.', 20000000),
(41, 'PHOTOGRAPHY', 'French-Bohemian Backyard Wedding', 'Ipsum ullam eaque maiores dolorem rerum.', 3000000),
(42, 'PHOTOGRAPHY', 'Malibu Wedding with Ocean Views', 'Excepturi eos est at similique ducimus tempore.', 2000000),
(43, 'PHOTOGRAPHY', 'South Seas Island Resort Wedding', 'At quas quia adipisci iure.', 5000000),
(44, 'PHOTOGRAPHY', 'Louisiana Rustic Chic Wedding Inspiration', 'Ab esse facilis magni.', 4000000),
(45, 'PHOTOGRAPHY', 'Neutral and Rust Virginia Wedding', 'Rerum ut nobis earum inventore.', 4000000),
(46, 'PHOTOGRAPHY', 'The Ultimate Wedding Sparklers', 'Eum reiciendis amet eos maiores quam numquam.', 2000000),
(47, 'PHOTOGRAPHY', 'This Art Deco', 'Provident iste laborum molestiae.', 5000000),
(48, 'PHOTOGRAPHY', 'Tilden Park Wedding', 'Minima quidem ut quas.', 4000000),
(49, 'PHOTOGRAPHY', 'Romantic Blue & White Bridgerton Wedding', 'Voluptatem et et in natus vel.', 3000000),
(50, 'PHOTOGRAPHY', 'Enchanting Mountain Bridal', 'Temporibus animi id quia in est.', 5000000);

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
-- Table structure for table `pic`
--

CREATE TABLE `pic` (
  `IdPIC` bigint(20) UNSIGNED NOT NULL,
  `NamaPIC` varchar(255) DEFAULT NULL,
  `NomorPIC` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`IdPIC`, `NamaPIC`, `NomorPIC`) VALUES
(1, 'Maryanto Darsirah Simanjuntak', '+998543021157'),
(2, 'Panca Narpati', '+689229734811'),
(3, 'Martaka Mansur', '+85343789796'),
(4, 'Cengkal Najmudin', '+255309845333'),
(5, 'Jaga Putra', '+224012467372'),
(6, 'Gadang Putra', '+6903467677'),
(7, 'Gaduh Bakiman Tampubolon S.Psi', '+25308836500'),
(8, 'Galiono Adriansyah', '+8824450669131'),
(9, 'Raden Irawan', '+35756965098'),
(10, 'Budi Wibowo', '+68258095');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `IdTrsk` bigint(20) UNSIGNED NOT NULL,
  `IdCust` bigint(20) UNSIGNED NOT NULL,
  `Jenis` varchar(255) NOT NULL,
  `Tanggal` datetime NOT NULL,
  `Nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`IdCust`),
  ADD KEY `customer_idpic_foreign` (`IdPIC`);

--
-- Indexes for table `customer_paket`
--
ALTER TABLE `customer_paket`
  ADD PRIMARY KEY (`IdCustPaket`),
  ADD KEY `customer_paket_idcust_foreign` (`IdCust`),
  ADD KEY `customer_paket_idpaket_foreign` (`IdPaket`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`IdPaket`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`IdPIC`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`IdTrsk`),
  ADD KEY `transaksi_idcust_foreign` (`IdCust`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `IdCust` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer_paket`
--
ALTER TABLE `customer_paket`
  MODIFY `IdCustPaket` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `IdPaket` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pic`
--
ALTER TABLE `pic`
  MODIFY `IdPIC` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `IdTrsk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_idpic_foreign` FOREIGN KEY (`IdPIC`) REFERENCES `pic` (`IdPIC`);

--
-- Constraints for table `customer_paket`
--
ALTER TABLE `customer_paket`
  ADD CONSTRAINT `customer_paket_idcust_foreign` FOREIGN KEY (`IdCust`) REFERENCES `customer` (`IdCust`),
  ADD CONSTRAINT `customer_paket_idpaket_foreign` FOREIGN KEY (`IdPaket`) REFERENCES `paket` (`IdPaket`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_idcust_foreign` FOREIGN KEY (`IdCust`) REFERENCES `customer` (`IdCust`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
