-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: taswan
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `golongan`
--

DROP TABLE IF EXISTS `golongan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `golongan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kd_gol` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `golongan_kd_gol_unique` (`kd_gol`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `golongan`
--

LOCK TABLES `golongan` WRITE;
/*!40000 ALTER TABLE `golongan` DISABLE KEYS */;
INSERT INTO `golongan` VALUES (1,'IIe','IIIB','2020-01-01 07:38:19','2020-12-16 16:54:13'),(2,'IIIC','V1','2020-01-14 10:35:02','2020-12-12 12:55:33'),(3,'IVD','IIVA','2020-01-14 10:41:35','2020-01-14 10:41:35'),(4,'IIIB','IV/D','2020-01-14 10:42:27','2020-01-14 10:42:27'),(5,'IC','V/B','2020-01-14 10:43:49','2020-01-14 10:43:49'),(6,'IIV','V/A','2020-01-14 10:52:17','2020-01-14 10:52:17'),(7,'IIC','3','2020-12-10 07:49:09','2020-12-10 07:50:18'),(8,'iiid','ia','2020-12-10 13:28:02','2020-12-10 13:28:41'),(9,'II','VII','2020-12-10 14:57:19','2020-12-10 14:57:43'),(10,'g','t','2020-12-10 15:07:47','2020-12-10 15:07:47'),(11,'04','III','2020-12-10 20:27:06','2020-12-10 20:27:18'),(12,'02','IIA','2020-12-10 20:35:19','2020-12-10 20:35:34'),(13,'07','IIM','2020-12-12 12:44:42','2020-12-12 12:45:04'),(14,'11','ADMIN','2020-12-12 12:52:34','2020-12-12 12:52:34'),(16,'05','iiia','2020-12-16 16:53:31','2020-12-16 16:53:31'),(18,'IIA','IIIB','2021-04-20 02:21:01','2021-04-20 02:21:01'),(20,'IID','V','2021-04-20 19:48:29','2021-04-20 19:48:52');
/*!40000 ALTER TABLE `golongan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guru`
--

DROP TABLE IF EXISTS `guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guru` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `NIP` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_guru` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kd_gol` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_jabatan` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_mk_gol` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pend_terakhir` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_dinas` date NOT NULL,
  `agama` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `guru_nip_unique` (`NIP`),
  KEY `guru_kd_gol_foreign` (`kd_gol`),
  KEY `guru_kd_jabatan_foreign` (`kd_jabatan`),
  KEY `guru_kd_mk_gol_foreign` (`kd_mk_gol`),
  CONSTRAINT `guru_kd_gol_foreign` FOREIGN KEY (`kd_gol`) REFERENCES `golongan` (`kd_gol`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `guru_kd_jabatan_foreign` FOREIGN KEY (`kd_jabatan`) REFERENCES `jabatan` (`kd_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `guru_kd_mk_gol_foreign` FOREIGN KEY (`kd_mk_gol`) REFERENCES `mk_gol` (`kd_mk_gol`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guru`
--

LOCK TABLES `guru` WRITE;
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
INSERT INTO `guru` VALUES (2,'12345678','Admin','Laki-laki','dfdfd','2020-01-02','11','JB01','MK001','S.Kom','2020-01-01','Kristen Protestan','2020-01-01 08:02:51','2020-01-01 08:02:51'),(4,'19765091990031007','Andrias Salombe','Laki-laki','Tana Toraya','1967-05-09','IIe','JB03','MK002','SMA','2020-01-06','Islam','2020-01-14 11:25:40','2020-01-14 11:25:40'),(5,'195202221983092005','Dina Olua, S,Pd','Perempuan','Yoka','1962-02-02','IIIC','JB03','MK003','Sarjana (S1)','2020-01-14','Kristen Protestan','2020-01-14 11:28:47','2020-01-14 11:28:47'),(6,'195805281979102001','Sence menanti','Perempuan','serui','1962-02-05','IIV','JB08','MK005','SMA','2020-01-14','Kristen Protestan','2020-01-14 12:36:59','2020-01-14 12:36:59'),(7,'197601281999102001','Maria kaaf, S.Pd','Perempuan','susumuk','1976-12-01','IVD','JB04','MK004','Sarjana (S1)','2020-01-15','Kristen Protestan','2020-01-14 12:45:53','2020-01-14 12:45:53'),(8,'197010192907012018','Kristina Tendengan','Perempuan','Tana Toraya','1976-12-10','IC','JB03','MK002','SMA','2020-01-14','Kristen Protestan','2020-01-14 12:49:50','2020-01-14 12:49:50'),(9,'196504132000031002','Fatahudoin Rumpot','Laki-laki','Tana Toraya','1968-01-21','IIIB','JB08','MK002','SMA','2020-01-16','Kristen Katolik','2020-01-14 12:53:04','2020-01-14 12:53:04'),(10,'12423424235','Smart','Laki-laki','Jayapura','2009-05-04','IIIB','JB03','MK001','S1','2020-06-19','Kristen Katolik','2020-06-15 16:25:05','2020-06-15 16:25:05'),(13,'4567877789','Yonni wanena','Laki-laki','expo','2020-07-27','II','JB05','MK001','smtk','2020-10-07','Kristen Katolik','2020-12-10 15:17:49','2021-04-20 22:46:45'),(14,'1123990799','Werince Wenda','Perempuan','Waena','2020-11-08','IIe','JB09','MK002','sltk','2020-11-10','Hindu','2020-12-10 20:23:52','2020-12-10 20:24:43'),(15,'124453667899','Irene kumor,SE','Perempuan','sentani','2020-12-09','IIe','JB04','MK001','s-1','2020-11-04','Kristen Protestan','2020-12-12 12:29:55','2020-12-12 12:30:40'),(16,'1167889456','Telin wenda','Perempuan','Habepura','2020-11-12','IIIC','JB05','MK001','S-2','2020-06-12','Kristen Protestan','2020-12-12 14:06:27','2020-12-12 14:06:44'),(21,'234567899655','takius wanena','Laki-laki','waena','2021-04-17','04','JB05','MK002','sma','2021-04-21','Kristen Protestan','2021-04-20 22:46:15','2021-04-20 22:46:15');
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jabatan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kd_jabatan` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_jabatan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `jabatan_kd_jabatan_unique` (`kd_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan`
--

LOCK TABLES `jabatan` WRITE;
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `jabatan` VALUES (1,'JB01','Sekretaris 1','2020-01-01 07:38:43','2020-12-10 07:55:34'),(2,'JB02','Kepala Sekolah','2020-01-14 10:53:28','2020-01-14 10:53:28'),(3,'JB03','Guru Kelas','2020-01-14 10:54:09','2020-01-14 10:54:09'),(4,'JB04','Guru Kelas','2020-01-14 10:54:44','2020-01-14 10:54:44'),(5,'JB05','Bendahara','2020-01-14 10:55:02','2020-01-14 10:55:02'),(6,'JB06','Guru Kelas','2020-01-14 10:55:42','2020-01-14 10:55:42'),(7,'JB07','Guru Kelas','2020-01-14 10:56:01','2020-01-14 10:56:01'),(8,'JB08','Guru Kelas','2020-01-14 10:56:19','2020-01-14 10:56:19'),(9,'JB09','Guru Mata Pelajaran','2020-01-14 10:56:57','2020-01-14 10:56:57'),(11,'JB10','III','2020-12-10 20:29:39','2020-12-10 20:29:50'),(16,'JB11','KEPALA SEKSI','2021-04-20 19:52:15','2021-04-20 19:52:37');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jadwal`
--

DROP TABLE IF EXISTS `jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jadwal` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kd_jadwal` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_pelajaran` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_seles` time NOT NULL,
  `thn` year NOT NULL,
  `semester` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jadwal_nip_foreign` (`NIP`),
  KEY `jadwal_kd_pelajaran_foreign` (`kd_pelajaran`),
  CONSTRAINT `jadwal_kd_pelajaran_foreign` FOREIGN KEY (`kd_pelajaran`) REFERENCES `pelajaran` (`kd_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `jadwal_nip_foreign` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal`
--

LOCK TABLES `jadwal` WRITE;
/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;
INSERT INTO `jadwal` VALUES (3,'Ganjil2019','195202221983092005','BLG/09','Tema 3','Rabu','10:59:00','23:59:00',2019,'Ganjil','2020-01-14 12:56:52','2020-01-14 12:56:52'),(4,'Ganjil2019','196504132000031002','FSK/08','Tema 4','Kamis','20:59:00','22:59:00',2019,'Ganjil','2020-01-14 12:57:54','2020-01-14 12:57:54'),(5,'Ganjil2019','197010192907012018','IPA/03','Tema 1','Jumat','12:59:00','12:59:00',2019,'Ganjil','2020-01-14 12:59:12','2020-01-14 12:59:12'),(6,'Ganjil2019','197601281999102001','IPS/04','Tema 2','Sabtu','22:59:00','12:59:00',2019,'Ganjil','2020-01-14 13:00:11','2020-01-14 13:00:11'),(7,'Ganjil2019','195805281979102001','MK/02','Tema 3','Senin','21:59:00','21:59:00',2019,'Ganjil','2020-01-14 13:01:57','2020-01-14 13:01:57'),(9,'Ganjil2020','19765091990031007','AG/05','Tema 1','Selasa','08:00:00','10:00:00',2020,'Ganjil','2020-06-15 16:28:59','2020-06-15 16:29:15'),(11,'Ganjil2020','195202221983092005','AG/05','Tema 2','Senin','10:19:00','11:29:00',2020,'Ganjil','2020-12-10 15:19:44','2020-12-10 15:20:21'),(14,'Ganjil2020','19765091990031007','BI/01','Tema 1','Senin','19:48:00','21:48:00',2020,'Ganjil','2020-12-16 16:48:19','2021-04-20 05:28:27'),(16,'Genap2020','195202221983092005','08','Tema 2','Senin','08:59:00','10:30:00',2020,'Genap','2021-04-20 19:36:28','2021-04-20 19:36:28'),(17,'Ganjil2020','197601281999102001','BI02','Tema 4','Rabu','21:30:00','23:30:00',2020,'Ganjil','2021-04-20 19:38:23','2021-04-20 19:38:23');
/*!40000 ALTER TABLE `jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kelas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kd_kelas` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jmlh_kursi` int NOT NULL,
  `jmlh_meja` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kelas_kd_kelas_unique` (`kd_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES (2,'I',17,19,'2020-01-14 13:35:24','2020-01-14 13:35:24'),(5,'IV',12,15,'2020-01-14 13:36:26','2020-01-14 13:36:26'),(6,'V',14,18,'2020-01-14 13:36:55','2020-01-14 13:36:55'),(7,'VI',16,21,'2020-01-14 13:37:26','2020-01-14 13:37:26'),(8,'IB',13,17,'2020-01-14 13:38:06','2020-01-14 13:38:21'),(13,'vii',9,9,'2020-12-10 15:08:58','2020-12-12 13:05:39'),(18,'IA',16,17,'2020-12-12 12:38:33','2020-12-12 12:38:33'),(25,'VIII',4,5,'2020-12-12 12:41:16','2020-12-12 12:41:16'),(26,'III',10,11,'2020-12-12 12:41:46','2020-12-12 12:41:46'),(27,'iiia',4,4,'2020-12-12 12:56:31','2020-12-12 12:56:46'),(28,'va',12,14,'2020-12-16 16:51:22','2020-12-16 16:51:47'),(37,'vb',12,11,'2021-04-20 19:42:49','2021-04-20 19:43:34');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas_det`
--

DROP TABLE IF EXISTS `kelas_det`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kelas_det` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `NIS` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_kelas` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn` year NOT NULL,
  `semester` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kelas_det_kd_kelas_foreign` (`kd_kelas`),
  KEY `kelas_det_nis_foreign` (`NIS`),
  CONSTRAINT `kelas_det_kd_kelas_foreign` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `kelas_det_nis_foreign` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas_det`
--

LOCK TABLES `kelas_det` WRITE;
/*!40000 ALTER TABLE `kelas_det` DISABLE KEYS */;
INSERT INTO `kelas_det` VALUES (1,'0077129899','IB',2020,'Ganjil','2020-01-14 13:40:13','2020-12-12 13:19:14'),(2,'0012786599','va',2019,'Ganjil','2020-01-14 13:40:38','2021-04-20 05:38:05'),(4,'0022656799','IV',2019,'Ganjil','2020-01-14 13:41:32','2020-01-14 13:41:32'),(5,'0067124499','V',2019,'Ganjil','2020-01-14 13:41:55','2020-01-14 13:41:55'),(7,'0077129899','III',2019,'Ganjil','2020-01-20 12:02:27','2020-12-12 13:19:37'),(8,'0012786599','I',2020,'Ganjil','2020-12-12 13:01:31','2020-12-12 13:01:31'),(9,'0022656799','IA',2020,'Ganjil','2020-12-12 13:02:57','2020-12-12 13:02:57'),(10,'0033141699','V',2020,'Genap','2020-12-12 13:04:22','2020-12-12 13:04:22'),(11,'129054677880','vb',2019,'Ganjil','2020-12-12 14:02:55','2021-04-20 19:45:15'),(12,'3122344355','I',2020,'Ganjil','2020-12-16 16:52:38','2020-12-16 16:52:52'),(14,'0012786599','IA',2019,'Ganjil','2021-04-20 05:37:28','2021-04-20 05:37:28'),(15,'0011678299','IA',2020,'Genap','2021-04-20 19:44:43','2021-04-20 19:44:43');
/*!40000 ALTER TABLE `kelas_det` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (66,'2014_10_12_000000_create_users_table',1),(67,'2014_10_12_100000_create_password_resets_table',1),(68,'2019_08_19_000000_create_failed_jobs_table',1),(69,'2019_12_29_050246_create_golongan_table',1),(70,'2019_12_29_050316_create_mk_gol_table',1),(71,'2019_12_29_050346_create_jabatan_table',1),(72,'2019_12_29_050405_create_guru_table',1),(73,'2019_12_29_050510_create_pelajaran_table',1),(74,'2019_12_29_050526_create_jadwal_table',1),(75,'2019_12_29_050551_create_kelas_table',1),(76,'2019_12_29_050606_create_siswa_table',1),(77,'2019_12_29_050625_create_kelas_det_table',1),(78,'2019_12_29_050640_create_nilai_table',1),(79,'2019_12_31_071902_create_permission_tables',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mk_gol`
--

DROP TABLE IF EXISTS `mk_gol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mk_gol` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kd_mk_gol` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn` int NOT NULL,
  `bln` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mk_gol_kd_mk_gol_unique` (`kd_mk_gol`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mk_gol`
--

LOCK TABLES `mk_gol` WRITE;
/*!40000 ALTER TABLE `mk_gol` DISABLE KEYS */;
INSERT INTO `mk_gol` VALUES (1,'MK001',2020,5,'2020-01-01 07:38:28','2020-12-10 20:28:32'),(2,'MK002',2020,1,'2020-01-14 10:48:37','2020-01-14 10:48:37'),(3,'MK003',2019,11,'2020-01-14 10:49:09','2020-01-14 10:49:09'),(4,'MK004',2019,10,'2020-01-14 10:49:42','2020-01-14 10:49:42'),(5,'MK005',2019,12,'2020-01-14 10:50:13','2020-01-14 10:50:13'),(6,'MK006',2019,11,'2020-01-14 10:50:49','2020-01-14 10:50:49'),(8,'MK007',2020,12,'2020-12-10 15:08:10','2020-12-10 15:08:10'),(9,'MK008',2020,11,'2020-12-10 20:28:14','2020-12-10 20:28:14'),(10,'MK009',2019,7,'2020-12-10 20:34:19','2020-12-10 20:34:42'),(12,'MK010',2019,9,'2020-12-16 16:54:47','2020-12-16 16:55:00'),(15,'MK011',2019,10,'2021-04-20 19:50:45','2021-04-20 19:51:16');
/*!40000 ALTER TABLE `mk_gol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_ibfk_1` FOREIGN KEY (`model_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\User',11),(2,'App\\User',19),(2,'App\\User',24);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai`
--

DROP TABLE IF EXISTS `nilai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nilai` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `NIS` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_pelajaran` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int NOT NULL,
  `thn` year NOT NULL,
  `semester` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nilai_nis_foreign` (`NIS`),
  KEY `nilai_kd_pelajaran_foreign` (`kd_pelajaran`),
  CONSTRAINT `nilai_kd_pelajaran_foreign` FOREIGN KEY (`kd_pelajaran`) REFERENCES `pelajaran` (`kd_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `nilai_nis_foreign` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai`
--

LOCK TABLES `nilai` WRITE;
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` VALUES (2,'0012786599','BI/01',75,2019,'Ganjil','2020-01-14 13:43:19','2020-01-14 13:43:19'),(3,'0021879099','BLG/09',80,2019,'Ganjil','2020-01-14 13:43:49','2020-01-14 13:43:49'),(4,'0034355599','BSI/07',70,2019,'Ganjil','2020-01-14 13:44:17','2020-01-14 13:44:17'),(5,'0033141699','FSK/08',65,2019,'Ganjil','2020-01-14 13:44:48','2020-01-14 13:44:48'),(6,'0055198799','IPA/03',85,2019,'Ganjil','2020-01-14 13:45:14','2020-01-14 13:45:14'),(7,'0077129899','IPS/04',90,2019,'Ganjil','2020-01-14 13:45:51','2020-12-12 13:17:36'),(8,'0034355599','MK/02',85,2019,'Ganjil','2020-01-14 13:46:47','2020-01-14 13:46:47'),(12,'3122344355','IPS/04',95,2020,'Ganjil','2020-12-10 15:25:14','2020-12-10 15:25:32'),(13,'0011678299','IPS/04',100,2019,'Ganjil','2020-12-10 23:11:16','2020-12-10 23:11:16'),(14,'0011678299','IPS/04',77,2020,'Ganjil','2020-12-12 12:24:39','2020-12-12 12:25:25'),(15,'0033141699','IPS/04',76,2020,'Ganjil','2020-12-12 13:11:48','2020-12-12 13:12:09'),(16,'0021879099','IPS/04',76,2020,'Ganjil','2020-12-12 13:17:26','2020-12-12 13:17:26'),(17,'3122344355','BI/01',76,2020,'Ganjil','2020-12-12 16:46:28','2020-12-12 16:46:28'),(18,'0055198799','BI/01',80,2020,'Ganjil','2020-12-12 16:47:09','2020-12-12 16:47:09'),(19,'0011678299','AG/05',95,2020,'Ganjil','2020-12-12 16:47:42','2020-12-12 16:47:42'),(20,'0088770899','IPS/04',80,2020,'Ganjil','2020-12-12 16:59:17','2020-12-12 16:59:17'),(21,'4533337777','IPS/04',97,2020,'Ganjil','2020-12-16 16:58:06','2020-12-16 16:58:32'),(22,'4533337777','BI/01',97,2020,'Ganjil','2020-12-16 17:00:20','2020-12-16 17:00:44'),(23,'3122344355','IPS/04',65,2019,'Ganjil','2020-12-16 17:09:54','2020-12-16 17:09:54'),(24,'3122344355','IPS/04',86,2019,'Ganjil','2020-12-16 17:13:25','2020-12-16 17:13:25'),(25,'3122344355','BI/01',76,2019,'Ganjil','2020-12-16 17:16:02','2020-12-16 17:16:02'),(28,'0011678299','BI02',95,2020,'Genap','2021-04-20 19:58:36','2021-04-20 19:59:01'),(31,'3122344355','BI02',80,2020,'Genap','2021-06-23 20:05:39','2021-06-23 20:05:39'),(32,'0011678299','IPS/04',95,2020,'Genap','2021-06-23 20:06:30','2021-06-23 20:06:30'),(33,'0021879099','BI02',95,2021,'Ganjil','2021-06-23 20:24:49','2021-06-23 20:24:49');
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelajaran`
--

DROP TABLE IF EXISTS `pelajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pelajaran` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kd_pelajaran` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_pelajaran` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pelajaran_kd_pelajaran_unique` (`kd_pelajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelajaran`
--

LOCK TABLES `pelajaran` WRITE;
/*!40000 ALTER TABLE `pelajaran` DISABLE KEYS */;
INSERT INTO `pelajaran` VALUES (1,'BI/01','Bahasa Indonesia','2020-01-14 10:58:12','2020-01-14 10:58:12'),(2,'MK/02','Matematika','2020-01-14 10:59:01','2020-01-14 10:59:01'),(3,'IPA/03','IPA','2020-01-14 10:59:39','2020-01-14 10:59:39'),(4,'IPS/04','IPS','2020-01-14 11:00:31','2020-01-14 11:00:31'),(5,'AG/05','Agama','2020-01-14 11:00:59','2020-01-14 11:00:59'),(6,'SNB/06','Seni Budaya','2020-01-14 11:01:32','2020-12-10 20:31:57'),(7,'BSI/07','Bahasa Inggris','2020-01-14 11:02:40','2020-01-14 11:02:40'),(8,'FSK/08','Fisika','2020-01-14 11:03:43','2020-01-14 11:03:43'),(9,'BLG/09','Biologi','2020-01-14 11:04:16','2020-01-14 11:04:16'),(11,'08','BAHASA INDONESIA','2020-12-10 20:31:47','2020-12-10 20:31:47'),(12,'BI02','Bahasa Inggris','2020-12-12 12:48:55','2020-12-12 12:49:40'),(13,'009','Bahasa Inggris','2020-12-16 16:56:15','2020-12-16 16:56:35'),(14,'003','MATEMATIKA','2020-12-16 17:11:25','2020-12-16 17:11:25'),(17,'BI03','BAHASA INGRIS','2021-04-20 19:53:37','2021-04-20 19:54:34');
/*!40000 ALTER TABLE `pelajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web','2019-12-31 01:39:52','2019-12-31 01:39:52'),(2,'guru','web','2019-12-31 01:39:52','2019-12-31 01:39:52'),(3,'kepsek','web','2019-12-31 01:39:53','2019-12-31 01:39:53');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `siswa` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `NIS` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_siswa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `siswa_nis_unique` (`NIS`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES (1,'0033141699','Deni suebu','Laki-laki','2019-12-05','Buper Gunung','2020-01-14 13:10:15','2020-01-14 13:32:34'),(3,'0012786599','Anike kanmat','Perempuan','2017-04-05','Buper dalam','2020-01-14 13:14:07','2020-01-14 13:14:07'),(4,'0011678299','Antoni mabin','Laki-laki','2017-05-05','Expo','2020-01-14 13:15:52','2020-01-14 13:15:52'),(5,'0021879099','Brian mandouw','Laki-laki','2019-05-05','Expo','2020-01-14 13:17:47','2020-01-14 13:17:47'),(6,'0022656799','Darice wakur','Perempuan','2017-08-05','Buper Atas','2020-01-14 13:19:46','2020-01-14 13:19:46'),(7,'0034355599','Darles wanimbo','Laki-laki','2020-09-05','Buper Gunung','2020-01-14 13:21:20','2020-01-14 13:21:20'),(8,'0022228999','Demitera wakur','Perempuan','2017-07-05','Expo','2020-01-14 13:22:41','2020-01-14 13:22:41'),(9,'0067124499','Desi wonda','Perempuan','2018-12-05','Buper atas','2020-01-14 13:24:26','2020-01-14 13:24:26'),(10,'0088770899','Detiron Narek','Laki-laki','2019-01-04','EXPO','2020-01-14 13:25:57','2020-01-14 13:25:57'),(11,'0055198799','Devis misel Icelo','Laki-laki','2020-09-05','Yoka','2020-01-14 13:28:29','2020-01-14 13:28:29'),(12,'0077129899','Dwi Yuan Dika','Perempuan','2020-07-05','Buper dalam','2020-01-14 13:30:20','2020-01-14 13:30:20'),(14,'3122344355','Meis tabo','Laki-laki','2020-11-01','Habe lingkaran','2020-12-10 15:21:52','2020-12-10 15:22:36'),(15,'129054677880','Sondim Tabuni','Laki-laki','2020-10-10','Perumnas IV','2020-12-10 20:17:55','2020-12-10 20:21:02'),(17,'4533337777','lin wanena','Perempuan','2020-12-17','aspuri baptis','2020-12-16 16:50:06','2020-12-16 16:50:25'),(19,'12769955590','wendi dou','Laki-laki','2021-04-20','sarmi','2021-04-20 05:33:59','2021-04-20 05:34:40'),(20,'817760945667','Ancelina wenda tabuni','Perempuan','2016-02-06','Buper Gunung','2021-04-20 19:40:41','2021-04-20 19:41:09'),(21,'1234','leni','Perempuan','2021-04-15','kotaraja','2021-04-20 22:49:41','2021-04-20 22:49:41');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `NIP` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sandi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NIP` (`NIP`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'12345678',NULL,'$2y$10$KCB0whRAV4.MO3wmvwtUEel8BiHjbDoALQwtw4SiWHulsozVeILdS','12345678','3EU1URyevFj1ntWQPPC3rXEeSh7rMrkNkAujrCLDY7i55lIMw1IRzHp4xYi2','2019-12-31 03:10:46','2019-12-31 03:10:46'),(19,'197601281999102001',NULL,'$2y$10$c3HH1BxGou36BptBSyDnr.YWTzWjUj1qEiW.wYvjRYnPbJEZVZDhq','12345678',NULL,'2020-01-15 04:12:53','2020-01-15 04:12:53'),(24,'19765091990031007',NULL,'$2y$10$/P1V1mR0gCBj/89wBzzm1eeJdcxFmJqSGhbCwx4QWUzeGL2L4ol1i','12345678',NULL,'2020-02-02 02:22:53','2020-02-02 02:22:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-13 22:53:20
