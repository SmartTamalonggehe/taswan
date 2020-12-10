-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 01:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yaswan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_gol` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `kd_gol`, `pangkat`, `created_at`, `updated_at`) VALUES
(1, 'IIA', '3B', '2020-01-01 07:38:19', '2020-01-14 10:39:20'),
(2, 'IIIC', 'VX', '2020-01-14 10:35:02', '2020-01-14 10:40:30'),
(3, 'IVD', 'IIVA', '2020-01-14 10:41:35', '2020-01-14 10:41:35'),
(4, 'IIIB', 'IV/D', '2020-01-14 10:42:27', '2020-01-14 10:42:27'),
(5, 'IC', 'V/B', '2020-01-14 10:43:49', '2020-01-14 10:43:49'),
(6, 'IIV', 'V/A', '2020-01-14 10:52:17', '2020-01-14 10:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIP` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_guru` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kd_gol` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_jabatan` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_mk_gol` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pend_terakhir` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_dinas` date NOT NULL,
  `agama` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `NIP`, `nm_guru`, `jenkel`, `tempat`, `tgl_lahir`, `kd_gol`, `kd_jabatan`, `kd_mk_gol`, `pend_terakhir`, `tgl_dinas`, `agama`, `created_at`, `updated_at`) VALUES
(1, '19570509199502001', 'Since Mondouw, S. Pd', 'Perempuan', 'Jayapura', '1969-06-09', 'IIIB', 'JB02', 'MK001', 'SMA', '2020-01-06', 'Kristen Katolik', '2020-01-01 07:39:37', '2020-01-15 04:52:38'),
(2, '12345678', 'admin', 'Laki-laki', 'dfdfd', '2020-01-02', 'IIA', 'JB01', 'MK001', 'S.Kom', '2020-01-01', 'Kristen Protestan', '2020-01-01 08:02:51', '2020-01-01 08:02:51'),
(3, '1276800723218001', 'Frans rumare', 'Laki-laki', 'Joka', '1967-01-05', 'IIA', 'JB05', 'MK001', 'Sarjana (S1)', '2020-11-01', 'Kristen Protestan', '2020-01-14 11:16:03', '2020-01-14 12:38:11'),
(4, '19765091990031007', 'Andrias Salombe', 'Laki-laki', 'Tana Toraya', '1967-05-09', 'IIA', 'JB03', 'MK002', 'SMA', '2020-01-06', 'Islam', '2020-01-14 11:25:40', '2020-01-14 11:25:40'),
(5, '195202221983092005', 'Dina Olua, S,Pd', 'Perempuan', 'Yoka', '1962-02-02', 'IIIC', 'JB03', 'MK003', 'Sarjana (S1)', '2020-01-14', 'Kristen Protestan', '2020-01-14 11:28:47', '2020-01-14 11:28:47'),
(6, '195805281979102001', 'Sence menanti', 'Perempuan', 'serui', '1962-02-05', 'IIV', 'JB08', 'MK005', 'SMA', '2020-01-14', 'Kristen Protestan', '2020-01-14 12:36:59', '2020-01-14 12:36:59'),
(7, '197601281999102001', 'Maria kaaf, S.Pd', 'Perempuan', 'susumuk', '1976-12-01', 'IVD', 'JB04', 'MK004', 'Sarjana (S1)', '2020-01-15', 'Kristen Protestan', '2020-01-14 12:45:53', '2020-01-14 12:45:53'),
(8, '197010192907012018', 'Kristina Tendengan', 'Perempuan', 'Tana Toraya', '1976-12-10', 'IC', 'JB03', 'MK002', 'SMA', '2020-01-14', 'Kristen Protestan', '2020-01-14 12:49:50', '2020-01-14 12:49:50'),
(9, '196504132000031002', 'Fatahudoin Rumpot', 'Laki-laki', 'Tana Toraya', '1968-01-21', 'IIIB', 'JB08', 'MK002', 'SMA', '2020-01-16', 'Kristen Katolik', '2020-01-14 12:53:04', '2020-01-14 12:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_jabatan` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_jabatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `kd_jabatan`, `nm_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'JB01', 'Sekretaris 1', '2020-01-01 07:38:43', '2020-01-01 07:38:43'),
(2, 'JB02', 'Kepala Sekolah', '2020-01-14 10:53:28', '2020-01-14 10:53:28'),
(3, 'JB03', 'Guru Kelas', '2020-01-14 10:54:09', '2020-01-14 10:54:09'),
(4, 'JB04', 'Guru Kelas', '2020-01-14 10:54:44', '2020-01-14 10:54:44'),
(5, 'JB05', 'Bendahara', '2020-01-14 10:55:02', '2020-01-14 10:55:02'),
(6, 'JB06', 'Guru Kelas', '2020-01-14 10:55:42', '2020-01-14 10:55:42'),
(7, 'JB07', 'Guru Kelas', '2020-01-14 10:56:01', '2020-01-14 10:56:01'),
(8, 'JB08', 'Guru Kelas', '2020-01-14 10:56:19', '2020-01-14 10:56:19'),
(9, 'JB09', 'Guru Mata Pelajaran', '2020-01-14 10:56:57', '2020-01-14 10:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_jadwal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_pelajaran` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_seles` time NOT NULL,
  `thn` year(4) NOT NULL,
  `semester` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `kd_jadwal`, `NIP`, `kd_pelajaran`, `tema`, `hari`, `jam_masuk`, `jam_seles`, `thn`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'Ganjil2020', '19765091990031007', 'BI/01', 'Tema 1', 'Senin', '19:59:00', '20:59:00', 2020, 'Ganjil', '2020-01-14 12:23:44', '2020-01-14 12:23:44'),
(2, 'Ganjil2019', '1276800723218001', 'BSI/07', 'Tema 2', 'Selasa', '21:59:00', '22:59:00', 2019, 'Ganjil', '2020-01-14 12:55:32', '2020-01-14 12:55:32'),
(3, 'Ganjil2019', '195202221983092005', 'BLG/09', 'Tema 3', 'Rabu', '10:59:00', '23:59:00', 2019, 'Ganjil', '2020-01-14 12:56:52', '2020-01-14 12:56:52'),
(4, 'Ganjil2019', '196504132000031002', 'FSK/08', 'Tema 4', 'Kamis', '20:59:00', '22:59:00', 2019, 'Ganjil', '2020-01-14 12:57:54', '2020-01-14 12:57:54'),
(5, 'Ganjil2019', '197010192907012018', 'IPA/03', 'Tema 1', 'Jumat', '12:59:00', '12:59:00', 2019, 'Ganjil', '2020-01-14 12:59:12', '2020-01-14 12:59:12'),
(6, 'Ganjil2019', '197601281999102001', 'IPS/04', 'Tema 2', 'Sabtu', '22:59:00', '12:59:00', 2019, 'Ganjil', '2020-01-14 13:00:11', '2020-01-14 13:00:11'),
(7, 'Ganjil2019', '195805281979102001', 'MK/02', 'Tema 3', 'Senin', '21:59:00', '21:59:00', 2019, 'Ganjil', '2020-01-14 13:01:57', '2020-01-14 13:01:57'),
(8, 'Ganjil2019', '19570509199502001', 'SNB/06', 'Tema 1', 'Selasa', '20:59:00', '22:59:00', 2019, 'Ganjil', '2020-01-14 13:03:50', '2020-01-14 13:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_kelas` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jmlh_kursi` int(11) NOT NULL,
  `jmlh_meja` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kd_kelas`, `jmlh_kursi`, `jmlh_meja`, `created_at`, `updated_at`) VALUES
(1, 'II', 15, 15, '2020-01-14 13:34:50', '2020-01-14 13:34:50'),
(2, 'I', 17, 19, '2020-01-14 13:35:24', '2020-01-14 13:35:24'),
(5, 'IV', 12, 15, '2020-01-14 13:36:26', '2020-01-14 13:36:26'),
(6, 'V', 14, 18, '2020-01-14 13:36:55', '2020-01-14 13:36:55'),
(7, 'VI', 16, 21, '2020-01-14 13:37:26', '2020-01-14 13:37:26'),
(8, 'IB', 13, 17, '2020-01-14 13:38:06', '2020-01-14 13:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_det`
--

CREATE TABLE `kelas_det` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIS` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_kelas` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn` year(4) NOT NULL,
  `semester` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_det`
--

INSERT INTO `kelas_det` (`id`, `NIS`, `kd_kelas`, `thn`, `semester`, `created_at`, `updated_at`) VALUES
(1, '0023703699', 'I', 2019, 'Ganjil', '2020-01-14 13:40:13', '2020-01-14 13:40:13'),
(2, '0012786599', 'IB', 2019, 'Ganjil', '2020-01-14 13:40:38', '2020-01-14 13:40:38'),
(3, '0011678299', 'II', 2019, 'Ganjil', '2020-01-14 13:41:03', '2020-01-14 13:41:03'),
(4, '0022656799', 'IV', 2019, 'Ganjil', '2020-01-14 13:41:32', '2020-01-14 13:41:32'),
(5, '0067124499', 'V', 2019, 'Ganjil', '2020-01-14 13:41:55', '2020-01-14 13:41:55'),
(6, '0088770899', 'VI', 2019, 'Ganjil', '2020-01-14 13:42:17', '2020-01-14 13:42:17');

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
(66, '2014_10_12_000000_create_users_table', 1),
(67, '2014_10_12_100000_create_password_resets_table', 1),
(68, '2019_08_19_000000_create_failed_jobs_table', 1),
(69, '2019_12_29_050246_create_golongan_table', 1),
(70, '2019_12_29_050316_create_mk_gol_table', 1),
(71, '2019_12_29_050346_create_jabatan_table', 1),
(72, '2019_12_29_050405_create_guru_table', 1),
(73, '2019_12_29_050510_create_pelajaran_table', 1),
(74, '2019_12_29_050526_create_jadwal_table', 1),
(75, '2019_12_29_050551_create_kelas_table', 1),
(76, '2019_12_29_050606_create_siswa_table', 1),
(77, '2019_12_29_050625_create_kelas_det_table', 1),
(78, '2019_12_29_050640_create_nilai_table', 1),
(79, '2019_12_31_071902_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mk_gol`
--

CREATE TABLE `mk_gol` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_mk_gol` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn` int(11) NOT NULL,
  `bln` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mk_gol`
--

INSERT INTO `mk_gol` (`id`, `kd_mk_gol`, `thn`, `bln`, `created_at`, `updated_at`) VALUES
(1, 'MK001', 2020, 5, '2020-01-01 07:38:28', '2020-01-14 10:47:52'),
(2, 'MK002', 2020, 1, '2020-01-14 10:48:37', '2020-01-14 10:48:37'),
(3, 'MK003', 2019, 11, '2020-01-14 10:49:09', '2020-01-14 10:49:09'),
(4, 'MK004', 2019, 10, '2020-01-14 10:49:42', '2020-01-14 10:49:42'),
(5, 'MK005', 2019, 12, '2020-01-14 10:50:13', '2020-01-14 10:50:13'),
(6, 'MK006', 2019, 11, '2020-01-14 10:50:49', '2020-01-14 10:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 11),
(2, 'App\\User', 18),
(2, 'App\\User', 19),
(2, 'App\\User', 20),
(2, 'App\\User', 21),
(2, 'App\\User', 22),
(2, 'App\\User', 23);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIS` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_pelajaran` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `thn` year(4) NOT NULL,
  `semester` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `NIS`, `kd_pelajaran`, `nilai`, `thn`, `semester`, `created_at`, `updated_at`) VALUES
(1, '0023703699', 'AG/05', 60, 2019, 'Ganjil', '2020-01-14 13:42:55', '2020-01-14 13:42:55'),
(2, '0012786599', 'BI/01', 75, 2019, 'Ganjil', '2020-01-14 13:43:19', '2020-01-14 13:43:19'),
(3, '0021879099', 'BLG/09', 80, 2019, 'Ganjil', '2020-01-14 13:43:49', '2020-01-14 13:43:49'),
(4, '0034355599', 'BSI/07', 70, 2019, 'Ganjil', '2020-01-14 13:44:17', '2020-01-14 13:44:17'),
(5, '0033141699', 'FSK/08', 65, 2019, 'Ganjil', '2020-01-14 13:44:48', '2020-01-14 13:44:48'),
(6, '0055198799', 'IPA/03', 85, 2019, 'Ganjil', '2020-01-14 13:45:14', '2020-01-14 13:45:14'),
(7, '0077129899', 'IPS/04', 90, 2019, 'Ganjil', '2020-01-14 13:45:51', '2020-01-14 13:45:51'),
(8, '0034355599', 'MK/02', 85, 2019, 'Ganjil', '2020-01-14 13:46:47', '2020-01-14 13:46:47');

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
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_pelajaran` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_pelajaran` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `kd_pelajaran`, `nm_pelajaran`, `created_at`, `updated_at`) VALUES
(1, 'BI/01', 'Bahasa Indonesia', '2020-01-14 10:58:12', '2020-01-14 10:58:12'),
(2, 'MK/02', 'Matematika', '2020-01-14 10:59:01', '2020-01-14 10:59:01'),
(3, 'IPA/03', 'IPA', '2020-01-14 10:59:39', '2020-01-14 10:59:39'),
(4, 'IPS/04', 'IPS', '2020-01-14 11:00:31', '2020-01-14 11:00:31'),
(5, 'AG/05', 'Agama', '2020-01-14 11:00:59', '2020-01-14 11:00:59'),
(6, 'SNB/06', 'Seni Budaya', '2020-01-14 11:01:32', '2020-01-14 11:01:32'),
(7, 'BSI/07', 'Bahasa Inggris', '2020-01-14 11:02:40', '2020-01-14 11:02:40'),
(8, 'FSK/08', 'Fisika', '2020-01-14 11:03:43', '2020-01-14 11:03:43'),
(9, 'BLG/09', 'Biologi', '2020-01-14 11:04:16', '2020-01-14 11:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2019-12-31 01:39:52', '2019-12-31 01:39:52'),
(2, 'guru', 'web', '2019-12-31 01:39:52', '2019-12-31 01:39:52'),
(3, 'kepsek', 'web', '2019-12-31 01:39:53', '2019-12-31 01:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIS` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_siswa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `NIS`, `nm_siswa`, `jenkel`, `tgl_masuk`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '0033141699', 'Deni suebu', 'Laki-laki', '2019-12-05', 'Buper Gunung', '2020-01-14 13:10:15', '2020-01-14 13:32:34'),
(2, '0023703699', 'Alpin degei', 'Laki-laki', '2018-05-05', 'Perumnas III', '2020-01-14 13:12:29', '2020-01-14 13:12:29'),
(3, '0012786599', 'Anike kanmat', 'Perempuan', '2017-04-05', 'Buper dalam', '2020-01-14 13:14:07', '2020-01-14 13:14:07'),
(4, '0011678299', 'Antoni mabin', 'Laki-laki', '2017-05-05', 'Expo', '2020-01-14 13:15:52', '2020-01-14 13:15:52'),
(5, '0021879099', 'Brian mandouw', 'Laki-laki', '2019-05-05', 'Expo', '2020-01-14 13:17:47', '2020-01-14 13:17:47'),
(6, '0022656799', 'Darice wakur', 'Perempuan', '2017-08-05', 'Buper Atas', '2020-01-14 13:19:46', '2020-01-14 13:19:46'),
(7, '0034355599', 'Darles wanimbo', 'Laki-laki', '2020-09-05', 'Buper Gunung', '2020-01-14 13:21:20', '2020-01-14 13:21:20'),
(8, '0022228999', 'Demitera wakur', 'Perempuan', '2017-07-05', 'Expo', '2020-01-14 13:22:41', '2020-01-14 13:22:41'),
(9, '0067124499', 'Desi wonda', 'Perempuan', '2018-12-05', 'Buper atas', '2020-01-14 13:24:26', '2020-01-14 13:24:26'),
(10, '0088770899', 'Detiron Narek', 'Laki-laki', '2019-01-04', 'EXPO', '2020-01-14 13:25:57', '2020-01-14 13:25:57'),
(11, '0055198799', 'Devis misel Icelo', 'Laki-laki', '2020-09-05', 'Yoka', '2020-01-14 13:28:29', '2020-01-14 13:28:29'),
(12, '0077129899', 'Dwi Yuan Dika', 'Perempuan', '2020-07-05', 'Buper dalam', '2020-01-14 13:30:20', '2020-01-14 13:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIP` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sandi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `NIP`, `email_verified_at`, `password`, `sandi`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, '12345678', NULL, '$2y$10$KCB0whRAV4.MO3wmvwtUEel8BiHjbDoALQwtw4SiWHulsozVeILdS', '12345678', NULL, '2019-12-31 03:10:46', '2019-12-31 03:10:46'),
(18, '19570509199502001', NULL, '$2y$10$cGSeBfch.a5b.uwM/Z8E9.amCZZk9UYTTvedcXZnDfO4Uio7Uf2ka', '12345678', NULL, '2020-01-01 08:51:51', '2020-01-01 08:51:51'),
(19, '197601281999102001', NULL, '$2y$10$c3HH1BxGou36BptBSyDnr.YWTzWjUj1qEiW.wYvjRYnPbJEZVZDhq', '12345678', NULL, '2020-01-15 04:12:53', '2020-01-15 04:12:53'),
(20, '19765091990031007', NULL, '$2y$10$l5V8aRxlvys2BCgdFUJvZu.o5ZPIn1O8h3cT8oAzPjiNAKJYunbFC', '12345678', NULL, '2020-01-15 04:13:14', '2020-01-15 04:13:14'),
(21, '195202221983092005', NULL, '$2y$10$A6dLMz5q2DSaQtmTZZqWJeoiY9/CnOK6gY.PHYgfZGBJvLlQQICoG', '12345678', NULL, '2020-01-15 04:13:40', '2020-01-15 04:13:40'),
(22, '197010192907012018', NULL, '$2y$10$k2nDbCO7/xpPFRJGFUvgRuydGejoGRwLaGI5tcTQhCol9zYLXg.7O', '12345678', NULL, '2020-01-15 04:14:03', '2020-01-15 04:14:03'),
(23, '196504132000031002', NULL, '$2y$10$2DG1iwotsEZZkjxoj0q4beR1TLssHZ1aq6jUO5ykqv.PXogbXGAtW', '12345678', NULL, '2020-01-15 04:14:27', '2020-01-15 04:14:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `golongan_kd_gol_unique` (`kd_gol`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guru_nip_unique` (`NIP`),
  ADD KEY `guru_kd_gol_foreign` (`kd_gol`),
  ADD KEY `guru_kd_jabatan_foreign` (`kd_jabatan`),
  ADD KEY `guru_kd_mk_gol_foreign` (`kd_mk_gol`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jabatan_kd_jabatan_unique` (`kd_jabatan`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_nip_foreign` (`NIP`),
  ADD KEY `jadwal_kd_pelajaran_foreign` (`kd_pelajaran`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelas_kd_kelas_unique` (`kd_kelas`);

--
-- Indexes for table `kelas_det`
--
ALTER TABLE `kelas_det`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_det_kd_kelas_foreign` (`kd_kelas`),
  ADD KEY `kelas_det_nis_foreign` (`NIS`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mk_gol`
--
ALTER TABLE `mk_gol`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mk_gol_kd_mk_gol_unique` (`kd_mk_gol`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_nis_foreign` (`NIS`),
  ADD KEY `nilai_kd_pelajaran_foreign` (`kd_pelajaran`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelajaran_kd_pelajaran_unique` (`kd_pelajaran`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_nis_unique` (`NIS`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIP` (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelas_det`
--
ALTER TABLE `kelas_det`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `mk_gol`
--
ALTER TABLE `mk_gol`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_kd_gol_foreign` FOREIGN KEY (`kd_gol`) REFERENCES `golongan` (`kd_gol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guru_kd_jabatan_foreign` FOREIGN KEY (`kd_jabatan`) REFERENCES `jabatan` (`kd_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guru_kd_mk_gol_foreign` FOREIGN KEY (`kd_mk_gol`) REFERENCES `mk_gol` (`kd_mk_gol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_kd_pelajaran_foreign` FOREIGN KEY (`kd_pelajaran`) REFERENCES `pelajaran` (`kd_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_nip_foreign` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas_det`
--
ALTER TABLE `kelas_det`
  ADD CONSTRAINT `kelas_det_kd_kelas_foreign` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_det_nis_foreign` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_ibfk_1` FOREIGN KEY (`model_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_kd_pelajaran_foreign` FOREIGN KEY (`kd_pelajaran`) REFERENCES `pelajaran` (`kd_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_nis_foreign` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
