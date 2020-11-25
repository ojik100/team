-- --------------------------------------------------------
-- Host:                         36.89.91.220
-- Server version:               5.6.47 - MySQL Community Server (GPL)
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table eladeslo_db_lades.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_admin`),
  KEY `fkIdx_103` (`id_desa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `id_desa`) VALUES
	(1, 'Wahyu', 'admin', '1sampai8', 1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(5) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(5) NOT NULL,
  `stok` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `slug` text NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_suplayer` int(5) NOT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `FK_barang_kategori` (`id_kategori`),
  KEY `FK_barang_suplayer` (`id_suplayer`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.barang: ~56 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
REPLACE INTO `barang` (`id_barang`, `nama_barang`, `keterangan`, `harga`, `stok`, `status`, `gambar`, `satuan`, `slug`, `id_kategori`, `id_suplayer`) VALUES
	(16, 'Cabai merah', 'masih dalam keadaan segar', 40000, 17, 'Tersedia', 'Cabai-merah.jpg', 'Kg', '5', 0, 2),
	(31, 'Bawang merah', 'masih dalam kondisi bagus', 45000, 0, 'Tersedia', 'Bawang-merah.jpg', 'Kg', 'Bawang-merah.html', 2, 2),
	(38, 'Serabi', 'maik', 20000, 900, 'Tersedia', 'Serabi.jpg', 'biji', 'Serabi.html', 4, 2),
	(40, 'terong mol', 'terong sangat manis', 1000, 69, 'Tersedia', 'terong-mol.jpg', 'Kg', 'terong-mol.html', 5, 2),
	(42, 'beras', 'beras bersih', 7000, 991, 'Tersedia', 'beras.jpg', 'Kg', 'beras.html', 1, 23),
	(44, 'Kerupuk cangkang kepiting', 'kerupuk cangkang kepiting merupakan krupuk hasil olahan  limbah cangkang kepiting', 10000, 34, 'Tersedia', 'Kerupuk-cangkang-kepiting.jpg', 'bungkus', 'Kerupuk-cangkang-kepiting.html', 4, 62),
	(45, 'Beras', 'Beras Merk PilihanKu yang di Produksi', 2000, 5, 'Tersedia', '-', 'kg', 'beras.html', 1, 1),
	(46, 'Minyak Goreng', 'Minyak Goreng Merk Bimoli', 2000, 5, 'Tersedia', '-', 'Liter', 'minyak-goreng.html', 1, 1),
	(47, 'Gula Pasir', 'gula pasir ku ', 15000, 5, '', '-', 'kg', 'gula-pasir.html', 1, 1),
	(48, 'Daging Sapi', 'daging sapi ', 30000, 5, '', '-', 'kg', 'daging sapi.html', 1, 1),
	(49, 'Telur Ayam', 'telur ayam', 20000, 3, '', '-', 'kg', 'telur-ayam.html', 1, 1),
	(50, 'Susu', 'susu indomilk', 20000, 10, '', '-', 'liter', 'susu.html', 1, 2),
	(51, 'Jagung', 'jagung rebus dan jagung bakar', 10000, 10, '', '-', 'kg', 'jagung.html', 1, 2),
	(52, 'Daun Salam', 'daun salam', 15000, 10, '', '-', 'kg', 'daun salam.html', 2, 2),
	(53, 'Ketumbar', 'ketumbar', 10000, 10, '', '-', 'kg', 'ketumbar.html', 2, 2),
	(54, 'Serai', 'serai', 15000, 10, '', '-', 'kg', 'serai.html', 2, 2),
	(55, 'Lengkuas', 'lengkuas', 20000, 10, '', '-', 'kg', 'lengkuas.html', 2, 3),
	(56, 'Kemiri', 'kemiri', 15000, 10, '', '-', 'kg', 'kemiri.html', 2, 3),
	(57, 'Kunyit', 'kunyit', 15000, 10, '', '-', 'kg', 'kunyit.html', 2, 3),
	(58, 'Cengkeh', 'cengkeh', 20000, 10, '', '-', 'kg', 'cngkeh.html', 2, 3),
	(59, 'Jahe', 'jahe', 10000, 10, '', '-', 'kg', 'jahe.html', 2, 3),
	(60, 'Pala', 'pala', 10000, 10, '', '-', 'kg', 'pala.html', 2, 4),
	(61, 'Komik', 'komik sirupku', 15000, 15, '', '-', 'bungkus', 'komik.html', 3, 4),
	(62, 'Bodrexcehin', 'membantu anakku', 6000, 15, '', '-', 'bungkus', 'bodrexchin.html', 3, 4),
	(63, 'Pracetamol', 'mengobati nyeri sakit kepala ', 5000, 15, '', '-', 'bungkus', 'pracetamol.html', 3, 4),
	(64, 'Inzana', 'menrurunkan demam anak', 5000, 15, '', '-', 'bungkus', 'inzana.html', 3, 4),
	(65, 'Promag', 'meredakan gejala maag dan sakit perut', 5000, 13, '', '-', 'bungkus', 'promag.html', 3, 5),
	(66, 'Sate ', 'sate ayam dan sapi', 10000, 10, '', '-', 'porsi', 'sate.html', 4, 5),
	(67, 'Bakso', 'bakso mercon dan beranak', 12000, 10, '', '-', 'porsi', 'bakso.html', 4, 5),
	(68, 'Soto', 'soto ayam', 12000, 10, '', '-', 'porsi', 'soto.html', 4, 5),
	(69, 'Nasi Goreng', 'nasi goreng ayam bakar', 12000, 10, '', '-', 'porsi', 'nasi goreng.html', 4, 5),
	(70, 'Beras', 'Beras Merk PilihanKu yang di Produksi', 2000, 5, 'Tersedia', '-', 'kg', 'beras.html', 1, 7),
	(71, 'Minyak Goreng', 'Minyak Goreng Merk Bimoli', 2000, 5, 'Tersedia', '-', 'Liter', 'minyak-goreng.html', 1, 7),
	(72, 'Gula Pasir', 'gula pasir ku ', 15000, 5, '', '-', 'kg', 'gula-pasir.html', 1, 7),
	(73, 'Daging Sapi', 'daging sapi ', 30000, 5, '', '-', 'kg', 'daging sapi.html', 1, 7),
	(74, 'Telur Ayam', 'telur ayam', 20000, 3, '', '-', 'kg', 'telur-ayam.html', 1, 7),
	(75, 'Susu', 'susu indomilk', 20000, 10, '', '-', 'liter', 'susu.html', 1, 8),
	(76, 'Jagung', 'jagung rebus dan jagung bakar', 10000, 10, '', '-', 'kg', 'jagung.html', 1, 8),
	(77, 'Daun Salam', 'daun salam', 15000, 10, '', '-', 'kg', 'daun salam.html', 2, 8),
	(78, 'Ketumbar', 'ketumbar', 10000, 10, '', '-', 'kg', 'ketumbar.html', 2, 8),
	(79, 'Serai', 'serai', 15000, 10, '', '-', 'kg', 'serai.html', 2, 8),
	(80, 'Lengkuas', 'lengkuas', 20000, 10, '', '-', 'kg', 'lengkuas.html', 2, 9),
	(81, 'Kemiri', 'kemiri', 15000, 10, '', '-', 'kg', 'kemiri.html', 2, 9),
	(82, 'Kunyit', 'kunyit', 15000, 10, '', '-', 'kg', 'kunyit.html', 2, 9),
	(83, 'Cengkeh', 'cengkeh', 20000, 10, '', '-', 'kg', 'cngkeh.html', 2, 9),
	(84, 'Jahe', 'jahe', 10000, 10, '', '-', 'kg', 'jahe.html', 2, 9),
	(85, 'Pala', 'pala', 10000, 10, '', '-', 'kg', 'pala.html', 2, 10),
	(86, 'Komik', 'komik sirupku', 15000, 15, '', '-', 'bungkus', 'komik.html', 3, 10),
	(87, 'Bodrexcehin', 'membantu anakku', 6000, 15, '', '-', 'bungkus', 'bodrexchin.html', 3, 10),
	(88, 'Pracetamol', 'mengobati nyeri sakit kepala ', 5000, 15, '', '-', 'bungkus', 'pracetamol.html', 3, 10),
	(89, 'Inzana', 'menrurunkan demam anak', 5000, 15, '', '-', 'bungkus', 'inzana.html', 3, 10),
	(90, 'Promag', 'meredakan gejala maag dan sakit perut', 5000, 13, '', '-', 'bungkus', 'promag.html', 3, 11),
	(91, 'Sate ', 'sate ayam dan sapi', 10000, 10, '', '-', 'porsi', 'sate.html', 4, 11),
	(92, 'Bakso', 'bakso mercon dan beranak', 12000, 10, '', '-', 'porsi', 'bakso.html', 4, 11),
	(93, 'Soto', 'soto ayam', 12000, 10, '', '-', 'porsi', 'soto.html', 4, 11),
	(94, 'Nasi Goreng', 'nasi goreng ayam bakar', 12000, 10, '', '-', 'porsi', 'nasi goreng.html', 4, 11),
	(95, 'Poteng ambon', 'Rasanya manis', 5000, 10000, 'Tersedia', 'Poteng-ambon.jpg', 'ikat', 'Poteng-ambon.html', 4, 68);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.daftar_sebaran_paket
CREATE TABLE IF NOT EXISTS `daftar_sebaran_paket` (
  `id_daftar` int(5) NOT NULL AUTO_INCREMENT,
  `dusun` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `jml_penerima` int(5) NOT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.daftar_sebaran_paket: ~0 rows (approximately)
/*!40000 ALTER TABLE `daftar_sebaran_paket` DISABLE KEYS */;
/*!40000 ALTER TABLE `daftar_sebaran_paket` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.data_kawasan
CREATE TABLE IF NOT EXISTS `data_kawasan` (
  `id_kawasan` int(5) NOT NULL AUTO_INCREMENT,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kawasan`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.data_kawasan: ~255 rows (approximately)
/*!40000 ALTER TABLE `data_kawasan` DISABLE KEYS */;
REPLACE INTO `data_kawasan` (`id_kawasan`, `desa`, `kecamatan`, `kabupaten`) VALUES
	(1, 'Sepit', 'Keruak', 'Lombok Timur'),
	(2, 'Setungkep Lingsar', 'Keruak', 'Lombok Timur'),
	(3, 'Senyiur', 'Keruak', 'Lombok Timur'),
	(4, 'Batu Putik', 'Keruak', 'Lombok Timur'),
	(5, 'Selebung Ketangga', 'Keruak', 'Lombok Timur'),
	(6, 'Keruak', 'Keruak', 'Lombok Timur'),
	(7, 'Ketangga Jeraeng', 'Keruak', 'Lombok Timur'),
	(8, 'Mendana Raya', 'Keruak', 'Lombok Timur'),
	(9, 'Dane Rase', 'Keruak', 'Lombok Timur'),
	(10, 'Pijot', 'Keruak', 'Lombok Timur'),
	(11, 'Pijot Utara', 'Keruak', 'Lombok Timur'),
	(12, 'Tanjung Luar', 'Keruak', 'Lombok Timur'),
	(13, 'Ketapang Raya', 'Keruak', 'Lombok Timur'),
	(14, 'Montong Belae', 'Keruak', 'Lombok Timur'),
	(15, 'Pulau Maringkik', 'Keruak', 'Lombok Timur'),
	(16, 'Jerowaru', 'Jerowaru', 'Lombok Timur'),
	(17, 'Pandan Wangi', 'Jerowaru', 'Lombok Timur'),
	(18, 'Pemongkong', 'Jerowaru', 'Lombok Timur'),
	(19, 'Sekaroh', 'Jerowaru', 'Lombok Timur'),
	(20, 'Ekas Buana', 'Jerowaru', 'Lombok Timur'),
	(21, 'Kuang Rundun', 'Jerowaru', 'Lombok Timur'),
	(22, 'Sukaraja', 'Jerowaru', 'Lombok Timur'),
	(23, 'Wakan', 'Jerowaru', 'Lombok Timur'),
	(24, 'Batu Nampar', 'Jerowaru', 'Lombok Timur'),
	(25, 'Sepapan', 'Jerowaru', 'Lombok Timur'),
	(26, 'Seriwe', 'Jerowaru', 'Lombok Timur'),
	(27, 'Pene', 'Jerowaru', 'Lombok Timur'),
	(28, 'Batu nampar Selatan', 'Jerowaru', 'Lombok Timur'),
	(29, 'Sukadamai', 'Jerowaru', 'Lombok Timur'),
	(30, 'Pare Mas', 'Jerowaru', 'Lombok Timur'),
	(31, 'Suwangi', 'Sakra', 'Lombok Timur'),
	(32, 'Suwangi Timur', 'Sakra', 'Lombok Timur'),
	(33, 'Kabar', 'Sakra', 'Lombok Timur'),
	(34, 'Rumbuk', 'Sakra', 'Lombok Timur'),
	(35, 'Rumbuk Timur', 'Sakra', 'Lombok Timur'),
	(36, 'Moyot', 'Sakra', 'Lombok Timur'),
	(37, 'Keselet', 'Sakra', 'Lombok Timur'),
	(38, 'Songak', 'Sakra', 'Lombok Timur'),
	(39, 'Sakra', 'Sakra', 'Lombok Timur'),
	(40, 'Sakra Selatan', 'Sakra', 'Lombok Timur'),
	(41, 'Peresak', 'Sakra', 'Lombok Timur'),
	(42, 'Kuang Baru', 'Sakra', 'Lombok Timur'),
	(43, 'Rensing', 'Sakra Barat', 'Lombok Timur'),
	(44, 'Pematung', 'Sakra Barat', 'Lombok Timur'),
	(45, 'Jero Gunung', 'Sakra Barat', 'Lombok Timur'),
	(46, 'Rensing Raya', 'Sakra Barat', 'Lombok Timur'),
	(47, 'Gunung Rajak', 'Sakra Barat', 'Lombok Timur'),
	(48, 'Gunung Rajak Selatan', 'Sakra Barat', 'Lombok Timur'),
	(49, 'Mengkuru', 'Sakra Barat', 'Lombok Timur'),
	(50, 'Sukarara', 'Sakra Barat', 'Lombok Timur'),
	(51, 'Pejaring', 'Sakra Barat', 'Lombok Timur'),
	(52, 'Bungtiang', 'Sakra Barat', 'Lombok Timur'),
	(53, 'Boyemare', 'Sakra Barat', 'Lombok Timur'),
	(54, 'Borok Toyang', 'Sakra Barat', 'Lombok Timur'),
	(55, 'Pengkelak Mas', 'Sakra Barat', 'Lombok Timur'),
	(56, 'Gadung Mas', 'Sakra Barat', 'Lombok Timur'),
	(57, 'Montong Beter', 'Sakra Barat', 'Lombok Timur'),
	(58, 'Kembang Are Sampai', 'Sakra Barat', 'Lombok Timur'),
	(59, 'Rensing Bat', 'Sakra Barat', 'Lombok Timur'),
	(60, 'Tanak Kaken', 'Sakra Barat', 'Lombok Timur'),
	(61, 'Gerisak Semanggeleng', 'Sakra Barat', 'Lombok Timur'),
	(62, 'Lepak', 'Sakra Timur', 'Lombok Timur'),
	(63, 'Lepak Timur', 'Sakra Timur', 'Lombok Timur'),
	(64, 'Surabaya Utara', 'Sakra Timur', 'Lombok Timur'),
	(65, 'Surabaya', 'Sakra Timur', 'Lombok Timur'),
	(66, 'Gereneng', 'Sakra Timur', 'Lombok Timur'),
	(67, 'Gereneng Timur', 'Sakra Timur', 'Lombok Timur'),
	(68, 'Montong Tangi', 'Sakra Timur', 'Lombok Timur'),
	(69, 'Lenting', 'Sakra Timur', 'Lombok Timur'),
	(70, 'Gelanggang', 'Sakra Timur', 'Lombok Timur'),
	(71, 'Menceh', 'Sakra Timur', 'Lombok Timur'),
	(72, 'Jenggik', 'Terara', 'Lombok Timur'),
	(73, 'Lando', 'Terara', 'Lombok Timur'),
	(74, 'Rarang', 'Terara', 'Lombok Timur'),
	(75, 'Rarang Tengah', 'Terara', 'Lombok Timur'),
	(76, 'Rarang Selatan', 'Terara', 'Lombok Timur'),
	(77, 'Suradadi', 'Terara', 'Lombok Timur'),
	(78, 'Leming', 'Terara', 'Lombok Timur'),
	(79, 'Santong', 'Terara', 'Lombok Timur'),
	(80, 'Terara', 'Terara', 'Lombok Timur'),
	(81, 'Sukadana', 'Terara', 'Lombok Timur'),
	(82, 'Selagik', 'Terara', 'Lombok Timur'),
	(83, 'Embung Raja', 'Terara', 'Lombok Timur'),
	(84, 'Embung Kandong', 'Terara', 'Lombok Timur'),
	(85, 'Kalianyar', 'Terara', 'Lombok Timur'),
	(86, 'Rarang Batas', 'Terara', 'Lombok Timur'),
	(87, 'Pandan Dure', 'Terara', 'Lombok Timur'),
	(88, 'Peringga Jurang', 'Montong Gading', 'Lombok Timur'),
	(89, 'Peringga Jurang Utar', 'Montong Gading', 'Lombok Timur'),
	(90, 'Montong Betok', 'Montong Gading', 'Lombok Timur'),
	(91, 'Pesanggrahan', 'Montong Gading', 'Lombok Timur'),
	(92, 'Kilang', 'Montong Gading', 'Lombok Timur'),
	(93, 'Perian', 'Montong Gading', 'Lombok Timur'),
	(94, 'Jenggik Utara', 'Montong Gading', 'Lombok Timur'),
	(95, 'Lendang Belo', 'Montong Gading', 'Lombok Timur'),
	(96, 'Sikur', 'Sikur', 'Lombok Timur'),
	(97, 'Semaya', 'Sikur', 'Lombok Timur'),
	(98, 'Darmasari', 'Sikur', 'Lombok Timur'),
	(99, 'Montongbaan', 'Sikur', 'Lombok Timur'),
	(100, 'Motongbaan Selatan', 'Sikur', 'Lombok Timur'),
	(101, 'Loyok', 'Sikur', 'Lombok Timur'),
	(102, 'Gelora', 'Sikur', 'Lombok Timur'),
	(103, 'Kotaraja', 'Sikur', 'Lombok Timur'),
	(104, 'Tetebatu', 'Sikur', 'Lombok Timur'),
	(105, 'Tetebatu Selatan', 'Sikur', 'Lombok Timur'),
	(106, 'Kembang Kuning', 'Sikur', 'Lombok Timur'),
	(107, 'Jeruk Manis', 'Sikur', 'Lombok Timur'),
	(108, 'Sikur Selatan', 'Sikur', 'Lombok Timur'),
	(109, 'Sikur Barat', 'Sikur', 'Lombok Timur'),
	(110, 'Masbagik Utara', 'Masbagik', 'Lombok Timur'),
	(111, 'Masbagik Utara Baru', 'Masbagik', 'Lombok Timur'),
	(112, 'Masbagik Selatan', 'Masbagik', 'Lombok Timur'),
	(113, 'Masbagik Timur', 'Masbagik', 'Lombok Timur'),
	(114, 'Lendang Nangka', 'Masbagik', 'Lombok Timur'),
	(115, 'Lendang Nangka Utara', 'Masbagik', 'Lombok Timur'),
	(116, 'Danger', 'Masbagik', 'Lombok Timur'),
	(117, 'Kumbung', 'Masbagik', 'Lombok Timur'),
	(118, 'Poakmotong', 'Masbagik', 'Lombok Timur'),
	(119, 'Kesik', 'Masbagik', 'Lombok Timur'),
	(120, 'Peringgasela', 'Pringgasela', 'Lombok Timur'),
	(121, 'Peringgasela Selatan', 'Pringgasela', 'Lombok Timur'),
	(122, 'Aikdewa', 'Pringgasela', 'Lombok Timur'),
	(123, 'Rempung', 'Pringgasela', 'Lombok Timur'),
	(124, 'Penggadangan', 'Pringgasela', 'Lombok Timur'),
	(125, 'Jurit', 'Pringgasela', 'Lombok Timur'),
	(126, 'Jurit Baru', 'Pringgasela', 'Lombok Timur'),
	(127, 'Penggadangan Barat', 'Pringgasela', 'Lombok Timur'),
	(128, 'Timba Nuh', 'Pringgasela', 'Lombok Timur'),
	(129, 'Peringgasela Timur', 'Pringgasela', 'Lombok Timur'),
	(130, 'Sukamulia', 'Sukamulia', 'Lombok Timur'),
	(131, 'Sukamulia Timur', 'Sukamulia', 'Lombok Timur'),
	(132, 'Dasan Lekong', 'Sukamulia', 'Lombok Timur'),
	(133, 'Poakpampang', 'Sukamulia', 'Lombok Timur'),
	(134, 'Padamara', 'Sukamulia', 'Lombok Timur'),
	(135, 'Jantuk', 'Sukamulia', 'Lombok Timur'),
	(136, 'Setangor', 'Sukamulia', 'Lombok Timur'),
	(137, 'Setangor Selatan', 'Sukamulia', 'Lombok Timur'),
	(138, 'Nyiur Tebel', 'Sukamulia', 'Lombok Timur'),
	(139, 'Anjani', 'Suralaga', 'Lombok Timur'),
	(140, 'Bintang Rinjani', 'Suralaga', 'Lombok Timur'),
	(141, 'Gapuk', 'Suralaga', 'Lombok Timur'),
	(142, 'Tebaban', 'Suralaga', 'Lombok Timur'),
	(143, 'Paoklombok', 'Suralaga', 'Lombok Timur'),
	(144, 'Kerongkong', 'Suralaga', 'Lombok Timur'),
	(145, 'Dames', 'Suralaga', 'Lombok Timur'),
	(146, 'Bagek Payung Selatan', 'Suralaga', 'Lombok Timur'),
	(147, 'Bagek Payung', 'Suralaga', 'Lombok Timur'),
	(148, 'Bagek payung Timur', 'Suralaga', 'Lombok Timur'),
	(149, 'Waringin', 'Suralaga', 'Lombok Timur'),
	(150, 'Suralaga', 'Suralaga', 'Lombok Timur'),
	(151, 'Tumbuh Mulia', 'Suralaga', 'Lombok Timur'),
	(152, 'Dasan Borok', 'Suralaga', 'Lombok Timur'),
	(153, 'Gerung Permai', 'Suralaga', 'Lombok Timur'),
	(154, 'Pancor', 'Selong', 'Lombok Timur'),
	(155, 'Sekarteja', 'Selong', 'Lombok Timur'),
	(156, 'Sandubaya', 'Selong', 'Lombok Timur'),
	(157, 'Selong', 'Selong', 'Lombok Timur'),
	(158, 'Kelayu Utara', 'Selong', 'Lombok Timur'),
	(159, 'Kelayu Selatan', 'Selong', 'Lombok Timur'),
	(160, 'Jorong', 'Selong', 'Lombok Timur'),
	(161, 'Kembang Sari', 'Selong', 'Lombok Timur'),
	(162, 'Majidi', 'Selong', 'Lombok Timur'),
	(163, 'Rakam', 'Selong', 'Lombok Timur'),
	(164, 'Dengen', 'Selong', 'Lombok Timur'),
	(165, 'Dengen Timur', 'Selong', 'Lombok Timur'),
	(166, 'Korleko', 'Labuhan Haji', 'Lombok Timur'),
	(167, 'Korleko Selatan', 'Labuhan Haji', 'Lombok Timur'),
	(168, 'Tirnadi', 'Labuhan Haji', 'Lombok Timur'),
	(169, 'Tajung', 'Labuhan Haji', 'Lombok Timur'),
	(170, 'Ijobalit', 'Labuhan Haji', 'Lombok Timur'),
	(171, 'Geres', 'Labuhan Haji', 'Lombok Timur'),
	(172, 'Penedagandor', 'Labuhan Haji', 'Lombok Timur'),
	(173, 'Kertasari', 'Labuhan Haji', 'Lombok Timur'),
	(174, 'Labuhan Haji', 'Labuhan Haji', 'Lombok Timur'),
	(175, 'Teros', 'Labuhan Haji', 'Lombok Timur'),
	(176, 'Banjar Sari', 'Labuhan Haji', 'Lombok Timur'),
	(177, 'Suryawangi', 'Labuhan Haji', 'Lombok Timur'),
	(178, 'Bagek Papan', 'Pringgabaya', 'Lombok Timur'),
	(179, 'Tanak Gadang', 'Pringgabaya', 'Lombok Timur'),
	(180, 'Apitaik', 'Pringgabaya', 'Lombok Timur'),
	(181, 'Teko', 'Pringgabaya', 'Lombok Timur'),
	(182, 'Kerumut', 'Pringgabaya', 'Lombok Timur'),
	(183, 'Anggaraksa', 'Pringgabaya', 'Lombok Timur'),
	(184, 'Pohgading', 'Pringgabaya', 'Lombok Timur'),
	(185, 'Pohgading Timur', 'Pringgabaya', 'Lombok Timur'),
	(186, 'Batunyang', 'Pringgabaya', 'Lombok Timur'),
	(187, 'Pringgabaya', 'Pringgabaya', 'Lombok Timur'),
	(188, 'Pringgabaya Utara', 'Pringgabaya', 'Lombok Timur'),
	(189, 'Labuhan Lombok', 'Pringgabaya', 'Lombok Timur'),
	(190, 'Seruni Mumbul', 'Pringgabaya', 'Lombok Timur'),
	(191, 'Gunung Malang', 'Pringgabaya', 'Lombok Timur'),
	(192, 'Telaga Waru', 'Pringgabaya', 'Lombok Timur'),
	(193, 'Selaparang', 'Suela', 'Lombok Timur'),
	(194, 'Ketangga', 'Suela', 'Lombok Timur'),
	(195, 'Suntalangu', 'Suela', 'Lombok Timur'),
	(196, 'Suela', 'Suela', 'Lombok Timur'),
	(197, 'Sapit', 'Suela', 'Lombok Timur'),
	(198, 'Perigi', 'Suela', 'Lombok Timur'),
	(199, 'Mekar Sari', 'Suela', 'Lombok Timur'),
	(200, 'Puncak Jeringo', 'Suela', 'Lombok Timur'),
	(201, 'Aikmel', 'Aikmel', 'Lombok Timur'),
	(202, 'Aikmel Barat', 'Aikmel', 'Lombok Timur'),
	(203, 'Aikmel Timur', 'Aikmel', 'Lombok Timur'),
	(204, 'Aikmel Utara', 'Aikmel', 'Lombok Timur'),
	(205, 'Perapa', 'Aikmel', 'Lombok Timur'),
	(206, 'Toya', 'Aikmel', 'Lombok Timur'),
	(207, 'Lenek', 'Aikmel', 'Lombok Timur'),
	(208, 'Lenek Pesiraman', 'Aikmel', 'Lombok Timur'),
	(209, 'Lenek Daya', 'Aikmel', 'Lombok Timur'),
	(210, 'Lenek Rambang Biak', 'Aikmel', 'Lombok Timur'),
	(211, 'Lenek Kalibambang', 'Aikmel', 'Lombok Timur'),
	(212, 'Kembang Kerang', 'Aikmel', 'Lombok Timur'),
	(213, 'Bagek Nyaka Santri', 'Aikmel', 'Lombok Timur'),
	(214, 'Kembang Kerang Daya', 'Aikmel', 'Lombok Timur'),
	(215, 'Kalijaga', 'Aikmel', 'Lombok Timur'),
	(216, 'Kalijaga Tengah', 'Aikmel', 'Lombok Timur'),
	(217, 'Kalijaga Timur', 'Aikmel', 'Lombok Timur'),
	(218, 'Kalijaga Selatan', 'Aikmel', 'Lombok Timur'),
	(219, 'Kalijaga Baru', 'Aikmel', 'Lombok Timur'),
	(220, 'Sukarema', 'Aikmel', 'Lombok Timur'),
	(221, 'Lenek Lauk', 'Aikmel', 'Lombok Timur'),
	(222, 'Lenek Baru', 'Aikmel', 'Lombok Timur'),
	(223, 'Lenek Duren', 'Aikmel', 'Lombok Timur'),
	(224, 'Keroya', 'Aikmel', 'Lombok Timur'),
	(225, 'Wanasaba', 'Wanasaba', 'Lombok Timur'),
	(226, 'Wanasaba Lauk', 'Wanasaba', 'Lombok Timur'),
	(227, 'Mamben Daya', 'Wanasaba', 'Lombok Timur'),
	(228, 'Mamben Baru', 'Wanasaba', 'Lombok Timur'),
	(229, 'Mamben Lauk', 'Wanasaba', 'Lombok Timur'),
	(230, 'Karang Baru', 'Wanasaba', 'Lombok Timur'),
	(231, 'Jineng', 'Wanasaba', 'Lombok Timur'),
	(232, 'Bebidas', 'Wanasaba', 'Lombok Timur'),
	(233, 'Tembeng Putik', 'Wanasaba', 'Lombok Timur'),
	(234, 'Bandok', 'Wanasaba', 'Lombok Timur'),
	(235, 'Beriri Jarak', 'Wanasaba', 'Lombok Timur'),
	(236, 'Otak Rarangan', 'Wanasaba', 'Lombok Timur'),
	(237, 'Wananasaba Daya', 'Wanasaba', 'Lombok Timur'),
	(238, 'Karang Baru Timur', 'Wanasaba', 'Lombok Timur'),
	(239, 'Sembalun Lawang', 'Sembalun', 'Lombok Timur'),
	(240, 'Sembalun Timba Gadin', 'Sembalun', 'Lombok Timur'),
	(241, 'Sembalun Bumbung', 'Sembalun', 'Lombok Timur'),
	(242, 'Sajang', 'Sembalun', 'Lombok Timur'),
	(243, 'Bilok Pitung', 'Sembalun', 'Lombok Timur'),
	(244, 'Sembalun', 'Sembalun', 'Lombok Timur'),
	(245, 'Sambelia', 'Sambalia', 'Lombok Timur'),
	(246, 'Labuhan Pandan', 'Sambalia', 'Lombok Timur'),
	(247, 'Sugian', 'Sambalia', 'Lombok Timur'),
	(248, 'Belanting', 'Sambalia', 'Lombok Timur'),
	(249, 'Obel-Obel', 'Sambalia', 'Lombok Timur'),
	(250, 'Dara Kunci', 'Sambalia', 'Lombok Timur'),
	(251, 'Bagik Manis', 'Sambalia', 'Lombok Timur'),
	(252, 'Dadap', 'Sambalia', 'Lombok Timur'),
	(253, 'Senanggalih', 'Sambalia', 'Lombok Timur'),
	(254, 'Padak Goar', 'Sambalia', 'Lombok Timur'),
	(255, 'Mandarin', 'Sambalia', 'Lombok Timur');
/*!40000 ALTER TABLE `data_kawasan` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.desa
CREATE TABLE IF NOT EXISTS `desa` (
  `id_desa` int(5) NOT NULL AUTO_INCREMENT,
  `id_kec` int(5) NOT NULL,
  `nama_desa` varchar(20) NOT NULL,
  PRIMARY KEY (`id_desa`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.desa: ~244 rows (approximately)
/*!40000 ALTER TABLE `desa` DISABLE KEYS */;
REPLACE INTO `desa` (`id_desa`, `id_kec`, `nama_desa`) VALUES
	(1, 1, 'Sepit'),
	(2, 1, 'Setungkep Lingsar'),
	(3, 1, 'Senyiur'),
	(4, 1, 'Batu Putik'),
	(5, 1, 'Selebung Ketangga'),
	(6, 1, 'Keurak'),
	(7, 1, 'Ketangga Jeraeng'),
	(8, 1, 'Mendana Raya'),
	(9, 1, 'Dane Rase'),
	(10, 1, 'Pijot'),
	(11, 1, 'Pijot Utara'),
	(12, 1, 'Tanjung Luar'),
	(13, 1, 'Ketapang Raya'),
	(14, 1, 'Montong Belae'),
	(15, 1, 'Pulau Maringkik'),
	(16, 2, 'Jerowaru'),
	(17, 2, 'Pandan Wangi'),
	(18, 2, 'Pemongkong'),
	(19, 2, 'Sekaroh'),
	(20, 2, 'Ekas Buana'),
	(21, 2, 'Kuang Rundun'),
	(22, 2, 'Sukaraja'),
	(23, 2, 'Wakan'),
	(24, 2, 'Batu Nampar'),
	(25, 2, 'Sepapan'),
	(26, 2, 'Seriwe'),
	(27, 2, 'Pene'),
	(28, 2, 'Batu nampar Selatan'),
	(29, 2, 'Sukadamai'),
	(30, 2, 'Pare Mas'),
	(31, 3, 'Suwangi'),
	(32, 3, 'Suwangi Timur'),
	(33, 3, 'Kabar'),
	(34, 3, 'Rumbuk'),
	(35, 3, 'Rumbuk Timur'),
	(36, 3, 'Moyot'),
	(37, 3, 'Keselet'),
	(38, 3, 'Songak'),
	(39, 3, 'Sakra'),
	(40, 3, 'Sakra Selatan'),
	(41, 3, 'Peresak'),
	(42, 3, 'Kuang Baru'),
	(43, 4, 'Rensing'),
	(44, 4, 'Pematung'),
	(45, 4, 'Jero Gunung'),
	(46, 4, 'Rensing Raya'),
	(47, 4, 'Gunung Rajak'),
	(48, 4, 'Gunung Rajak Selatan'),
	(49, 4, 'Mengkuru'),
	(50, 4, 'Sukarara'),
	(51, 4, 'Pejaring'),
	(52, 4, 'Bungtiang'),
	(53, 4, 'Boyemare'),
	(54, 4, 'Borok Toyang'),
	(55, 4, 'Pengkelak Mas'),
	(56, 4, 'Gadung Mas'),
	(57, 4, 'Montong Beter'),
	(58, 4, 'Kembang Are Sampai'),
	(59, 4, 'Rensing Bat'),
	(60, 4, 'Tanak Kaken'),
	(61, 4, 'Gerisak Semanggeleng'),
	(62, 5, 'Lepak'),
	(63, 5, 'Lepak Timur'),
	(64, 5, 'Surabaya Utara'),
	(65, 5, 'Surabaya'),
	(66, 5, 'Gereneng'),
	(67, 5, 'Gereneng Timur'),
	(68, 5, 'Montong Tangi'),
	(69, 5, 'Lenting'),
	(70, 5, 'Gelanggang'),
	(71, 5, 'Menceh'),
	(72, 6, 'Jenggik'),
	(73, 6, 'Lando'),
	(74, 6, 'Rarang'),
	(75, 6, 'Rarang Tengah'),
	(76, 6, 'Rarang Selatan'),
	(77, 6, 'Suradadi'),
	(78, 6, 'Leming'),
	(79, 6, 'Santong'),
	(80, 6, 'Terara'),
	(81, 6, 'Sukadana'),
	(82, 6, 'Selagik'),
	(83, 6, 'Embung Raja'),
	(84, 6, 'Embung Kandong'),
	(85, 6, 'Kalianyar'),
	(86, 6, 'Rarang Batas'),
	(87, 6, 'Pandan Dure'),
	(88, 7, 'Peringga Jurang'),
	(89, 7, 'Peringga Jurang Utar'),
	(90, 7, 'Montong Betok'),
	(91, 7, 'Pesanggrahan'),
	(92, 7, 'Kilang'),
	(93, 7, 'Perian'),
	(94, 7, 'Jenggik Utara'),
	(95, 7, 'Lendang Belo'),
	(96, 8, 'Sikur'),
	(97, 8, 'Semaya'),
	(98, 8, 'Darmasari'),
	(99, 8, 'Montongbaan'),
	(100, 8, 'Motongbaan Selatan'),
	(101, 8, 'Loyok'),
	(102, 8, 'Gelora'),
	(103, 8, 'Kotaraja'),
	(104, 8, 'Tetebatu'),
	(105, 8, 'Tetebatu Selatan'),
	(106, 8, 'Kembang Kuning'),
	(107, 8, 'Jeruk Manis'),
	(108, 8, 'Sikur Selatan'),
	(109, 8, 'Sikur Barat'),
	(110, 9, 'Masbagik Utara'),
	(111, 9, 'Masbagik Utara Baru'),
	(112, 9, 'Masbagik Selatan'),
	(113, 9, 'Masbagik Timur'),
	(114, 9, 'Lendang Nangka'),
	(115, 9, 'Lendang Nangka Utara'),
	(116, 9, 'Danger'),
	(117, 9, 'Kumbung'),
	(118, 9, 'Poakmotong'),
	(119, 9, 'Kesik'),
	(120, 10, 'Peringgasela'),
	(121, 10, 'Peringgasela Selatan'),
	(122, 10, 'Aikdewa'),
	(123, 10, 'Rempung'),
	(124, 10, 'Penggadangan'),
	(125, 10, 'Jurit'),
	(126, 10, 'Jurit Baru'),
	(127, 10, 'Penggadangan Barat'),
	(128, 10, 'Timba Nuh'),
	(129, 10, 'Peringgasela Timur'),
	(130, 11, 'Sukamulia'),
	(131, 11, 'Sukamulia Timur'),
	(132, 11, 'Dasan Lekong'),
	(133, 11, 'Poakpampang'),
	(134, 11, 'Padamara'),
	(135, 11, 'Jantuk'),
	(136, 11, 'Setangor'),
	(137, 11, 'Setangor Selatan'),
	(138, 11, 'Nyiur Tebel'),
	(139, 12, 'Anjani'),
	(140, 12, 'Bintang Rinjani'),
	(141, 12, 'Gapuk'),
	(142, 12, 'Tebaban'),
	(143, 12, 'Paoklombok'),
	(144, 12, 'Kerongkong'),
	(145, 12, 'Dames'),
	(146, 12, 'Bagek Payung Selatan'),
	(147, 12, 'Bagek Payung'),
	(148, 12, 'Bagek payung Timur'),
	(149, 12, 'Waringin'),
	(150, 12, 'Suralaga'),
	(151, 12, 'Tumbuh Mulia'),
	(152, 12, 'Dasan Borok'),
	(153, 12, 'Gerung Permai'),
	(154, 13, 'Pancor'),
	(155, 13, 'Sekarteja'),
	(156, 13, 'Sandubaya'),
	(157, 13, 'Selong'),
	(158, 13, 'Kelayu Utara'),
	(159, 13, 'Kelayu Selatan'),
	(160, 13, 'Jorong'),
	(161, 13, 'Kembang Sari'),
	(162, 13, 'Majidi'),
	(163, 13, 'Rakam'),
	(164, 13, 'Dengen'),
	(165, 13, 'Dengen Timur'),
	(166, 14, 'Korleko'),
	(167, 14, 'Korleko Selatan'),
	(168, 14, 'Tirnadi'),
	(169, 14, 'Tajung'),
	(170, 14, 'Ijobalit'),
	(171, 14, 'Geres'),
	(172, 14, 'Penedagandor'),
	(173, 14, 'Kertasari'),
	(174, 14, 'Labuhan Haji'),
	(175, 14, 'Teros'),
	(176, 14, 'Banjar Sari'),
	(177, 14, 'Suryawangi'),
	(178, 15, 'Bagek Papan'),
	(179, 15, 'Tanak Gadang'),
	(180, 15, 'Apitaik'),
	(181, 15, 'Teko'),
	(182, 15, 'Kerumut'),
	(183, 15, 'Anggaraksa'),
	(184, 15, 'Pohgading'),
	(185, 15, 'Pohgading Timur'),
	(186, 15, 'Batunyang'),
	(187, 15, 'Pringgabaya'),
	(188, 15, 'Pringgabaya Utara'),
	(189, 15, 'Labuhan Lombok'),
	(190, 15, 'Seruni Mumbul'),
	(191, 15, 'Gunung Malang'),
	(192, 15, 'Telaga Waru'),
	(193, 16, 'Selaparang'),
	(194, 16, 'Ketangga'),
	(195, 16, 'Suntalangu'),
	(196, 16, 'Suela'),
	(197, 16, 'Sapit'),
	(198, 16, 'Perigi'),
	(199, 16, 'Mekar Sari'),
	(200, 16, 'Puncak Jeringo'),
	(201, 17, 'Aikmel'),
	(202, 17, 'Aikmel Barat'),
	(203, 17, 'Aikmel Timur'),
	(204, 17, 'Aikmel Utara'),
	(205, 17, 'Perapa'),
	(206, 17, 'Toya'),
	(207, 17, 'Lenek'),
	(208, 17, 'Lenek Pesiraman'),
	(209, 17, 'Lenek Daya'),
	(210, 17, 'Lenek Rambang Biak'),
	(211, 17, 'Lenek Kalibambang'),
	(212, 17, 'Kembang Kerang'),
	(213, 17, 'Bagek Nyaka Santri'),
	(214, 17, 'Kembang Kerang Daya'),
	(215, 17, 'Kalijaga'),
	(216, 17, 'Kalijaga Tengah'),
	(217, 17, 'Kalijaga Timur'),
	(218, 17, 'Kalijaga Selatan'),
	(219, 17, 'Kalijaga Baru'),
	(220, 17, 'Sukarema'),
	(221, 17, 'Lenek Lauk'),
	(222, 17, 'Lenek Baru'),
	(223, 17, 'Lenek Duren'),
	(224, 17, 'Keroya'),
	(225, 18, 'Wanasaba'),
	(226, 18, 'Wanasaba Lauk'),
	(227, 18, 'Mamben Daya'),
	(228, 18, 'Mamben Baru'),
	(229, 18, 'Mamben Lauk'),
	(230, 18, 'Karang Baru'),
	(231, 18, 'Jineng'),
	(232, 18, 'Bebidas'),
	(233, 18, 'Tembeng Putik'),
	(234, 18, 'Bandok'),
	(235, 18, 'Beriri Jarak'),
	(236, 18, 'Otak Rarangan'),
	(237, 18, 'Wananasaba Daya'),
	(238, 18, 'Karang Baru Timur'),
	(239, 19, 'Sembalun Lawang'),
	(240, 19, 'Sembalun Timba Gadin'),
	(241, 19, 'Sembalun Bumbung'),
	(242, 19, 'Sajang'),
	(243, 19, 'Bilok Pitung'),
	(244, 19, 'Sembalun'),
	(245, 20, 'Sambelia'),
	(246, 20, 'Labuhan Pandan'),
	(247, 20, 'Sugian'),
	(248, 20, 'Belanting'),
	(249, 20, 'Obel-Obel'),
	(250, 20, 'Dara Kunci'),
	(251, 20, 'Bagik Manis'),
	(252, 20, 'Dadap'),
	(253, 20, 'Senanggalih'),
	(254, 20, 'Padak Goar'),
	(255, 20, 'Mandarin');
/*!40000 ALTER TABLE `desa` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.detail_jadwal_pengiriman_bantuan
CREATE TABLE IF NOT EXISTS `detail_jadwal_pengiriman_bantuan` (
  `id_detail_jadwal` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `id_penerima` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.detail_jadwal_pengiriman_bantuan: ~0 rows (approximately)
/*!40000 ALTER TABLE `detail_jadwal_pengiriman_bantuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_jadwal_pengiriman_bantuan` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.detail_pesanan
CREATE TABLE IF NOT EXISTS `detail_pesanan` (
  `id_transaksi` int(5) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) DEFAULT NULL,
  `id_barang` int(5) DEFAULT NULL,
  `id_suplayer` int(5) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `total_harga` int(5) DEFAULT NULL,
  `kode_order` varchar(20) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_user` (`id_user`),
  KEY `id_barang` (`id_barang`),
  KEY `id_suplayer` (`id_suplayer`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.detail_pesanan: ~17 rows (approximately)
/*!40000 ALTER TABLE `detail_pesanan` DISABLE KEYS */;
REPLACE INTO `detail_pesanan` (`id_transaksi`, `id_user`, `id_barang`, `id_suplayer`, `qty`, `total_harga`, `kode_order`, `status`) VALUES
	(1, 63, 33, 26, 5, 40000, 'KC-20200519-63', 1),
	(6, 13, 30, 4, 1, 2000, 'KC-20200521-13', 1),
	(7, 13, 38, 4, 1, 140000, 'KC-20200522-48', 1),
	(8, 13, 38, 4, 1, 140000, 'KC-20200522-92', 1),
	(9, 13, 38, 4, 1, 140000, 'KC-20200522-80', 1),
	(27, 104, 42, 23, 5, 28000, 'KC-20200530-84', 1),
	(28, 104, 32, 2, 1, 10000, 'KC-20200531-19', 1),
	(29, 104, 40, 2, 1, 1000, 'KC-20200531-54', 1),
	(32, 104, 16, 2, 1, 200000, 'KC-20200531-85', 1),
	(33, 104, 16, 2, 1, 200000, 'KC-20200531-99', 1),
	(34, 104, 38, 2, 1, 140000, 'KC-20200531-69', 1),
	(48, 104, 40, 2, 26, 1000, 'KC-20200531-59', 1),
	(50, 104, 32, 2, 5, 10000, 'KC-20200531-52', 1),
	(51, 104, 38, 2, 7, 140000, 'KC-20200531-13', 1),
	(52, 105, 40, 2, 1, 1000, 'KC-20200531-27', 1),
	(53, 105, 16, 2, 5, 200000, 'KC-20200531-31', 1),
	(54, 104, 40, 2, 1, 1000, 'KC-20200531-68', 1),
	(55, 104, 42, 23, 4, 28000, 'KC-20200531-73', 1),
	(56, 113, 44, 62, 3, 30000, 'KC-20200601-73', 1);
/*!40000 ALTER TABLE `detail_pesanan` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.device
CREATE TABLE IF NOT EXISTS `device` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `desa` varchar(50) DEFAULT NULL,
  `token` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.device: ~0 rows (approximately)
/*!40000 ALTER TABLE `device` DISABLE KEYS */;
/*!40000 ALTER TABLE `device` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.device_supplier
CREATE TABLE IF NOT EXISTS `device_supplier` (
  `id_token` int(5) NOT NULL AUTO_INCREMENT,
  `token` text NOT NULL,
  `id_supplier` int(5) NOT NULL,
  `desa` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_token`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.device_supplier: 22 rows
/*!40000 ALTER TABLE `device_supplier` DISABLE KEYS */;
REPLACE INTO `device_supplier` (`id_token`, `token`, `id_supplier`, `desa`) VALUES
	(1, 'eaA26upQvEg:APA91bGBlvBLiuKahOcxUCmM17Je-m-DvN8jwjQqtK7AQkKhl8TWGyZaCqW78s79B2xtx9KqQn3gvv2VMTopbfrZ-tZjHkW7xsJnRokmTGdFdRJvGAaBFE2p-miWRMQJPvGDMCdvpKdZ', 14, NULL),
	(2, 'eaA26upQvEg:APA91bGBlvBLiuKahOcxUCmM17Je-m-DvN8jwjQqtK7AQkKhl8TWGyZaCqW78s79B2xtx9KqQn3gvv2VMTopbfrZ-tZjHkW7xsJnRokmTGdFdRJvGAaBFE2p-miWRMQJPvGDMCdvpKdZ', 4, NULL),
	(3, 'eaA26upQvEg:APA91bGBlvBLiuKahOcxUCmM17Je-m-DvN8jwjQqtK7AQkKhl8TWGyZaCqW78s79B2xtx9KqQn3gvv2VMTopbfrZ-tZjHkW7xsJnRokmTGdFdRJvGAaBFE2p-miWRMQJPvGDMCdvpKdZ', 16, NULL),
	(4, 'ePupCHdi_ts:APA91bGOV8StPkfQCuBHXdMaXJzYSh5KNAP0CVSHU4r5wYdXj2IwpDSfIW6vlZ4w5lt3Iat3pena7lt3xvMYJ2T9qsNNKl_lIhRpv4jcTDVwZ2HpneKQT34GhXbrUSaMrfZNaaZ75LFj', 17, NULL),
	(5, 'dmEG9W_ZSO8:APA91bGWUvv-CB59w2wFrdvCQ-YfmnMGztlFIHleP1SFITleYHtGssSK_8UBOT48cV1KhC02l3-pWHJ9O2mO8NlYlwySfplICdrV9NnZHf8AL3Lknzhe_vslMDXnNW4t7Im2xYTHjgXo', 19, NULL),
	(6, 'eX3LhEz8BsY:APA91bFewlt8XhvfKXdHBYo-syt1-Oqi9M3fn0Jiy8XmzZ3_hbDCXe5NRantzkNA9f6OjgBPAcy7DQSKkpxGh2Rp6TAUyQD0v1T1YFDRK7x2M4QU-itqa2J4oO3Dk9FK19UPse0S2rqi', 21, NULL),
	(7, 'dwE0aFhrOFI:APA91bF6bWod8FE0z0Idqpv0zd5WMweQ1JVSHV6OWkYLAysQxmcqfKiWOsZBpfrKowzQCOwzZ_LrgSHqyJhERk8NY9gaPHkIJC971yhveLcGkJtIYMjgLaL39gHEz0Rl1k1LI75zSJfq', 22, NULL),
	(8, 'eVb3Xe99Cg8:APA91bHdAVEnKQMJiaubvk_FTNtTXBb3cptaHOVm-K2miSx1xL0luazYvq03A6X4OtUj9Kmi9e9nk12WHONPSzptL13SWUBbrgzOgYoeKQamL7Y8ZPYEqaNxOP-EdxVaWtYSusf3sta8', 23, NULL),
	(9, 'eAylHNaNUws:APA91bEysxoQgTxM35pyx9EyDPQ-ftfRggyEJsWB0ZJMpAi4AlB97RjhNK-nSuW94nbKVQaJxVwYvOT0bqpVHDv_f-zW9hRiMzmQrNsONrB7iBcL_Bj1CkBaXRz5usyiU0FYjGLk5E33', 25, NULL),
	(10, 'fGHQOOLeqRc:APA91bELV0s4aKsK81CyetKa-3I_7D_Wojhc8bchv658yGrx_4JyvlEbt3ZrMF3IQtpQbtFTwuXyaUAah8_noLlUlRvqtu8UObpMRDJz4HV-aOc5eqlBH0VngfXF6GjCCBLchvqcWvNd', 26, NULL),
	(11, 'eaA26upQvEg:APA91bGBlvBLiuKahOcxUCmM17Je-m-DvN8jwjQqtK7AQkKhl8TWGyZaCqW78s79B2xtx9KqQn3gvv2VMTopbfrZ-tZjHkW7xsJnRokmTGdFdRJvGAaBFE2p-miWRMQJPvGDMCdvpKdZ', 27, NULL),
	(12, 'd8TBlMMEspY:APA91bFN6-6mnJtATAlkKCj76mk_AKJ0oCBbQxZARmmThnKSHsDJuK1Y3cVAJ1HGF-T1K0-uOohjoUudN58qSMrfQnYL7QA7QcZKj72fjVFwmIBvqYLgEHZwfpQ9-vJbiEpZnIpSRVwd', 29, NULL),
	(13, 'cjVKQnfwSzY:APA91bGuhyjaaE0yNVMfcgYxiLsNYueZAd480cNNTRjYRP26XzsKAAIfsOmM0pTs_k2AqK3atM3qLKSzemIwpXBZK0TOd5UOCdSNx-w_m8xlxUGTmoMPcG2n4qHaN8oDoBBYOoFWRW3c', 30, NULL),
	(14, 'fKaMmBiQMks:APA91bGhsnxXf8HxwQtRFRJde8xr0Hsh-h3oBcX5dGE41NhYqsGW1caAmYx4z9nNhYZelHhsUc2bzEW1Lk0AYaAMeQXHX_7uE5vmrTw3ulgfjNFM3OhvSdDjiPKAFNyTX3tFv_ZiVEMp', 34, NULL),
	(15, 'ckOGKWCNbK0:APA91bE-b6_i-OpJCVOzWAIZ7blI54As3Opm_TJ6Toa9RQckADpuZlTWbAMqjurr6osN6kmPPcs3eZpLVw5HMWQrTYGqHfapAZb09dCPUO0ECIOLcJAl5JtEL2whQRniFc7ehrRrrh5W', 37, NULL),
	(16, 'fEybcZrhBgk:APA91bHJIe43ax9AwL-RCijc0jobE36u8B6L8NVT0P9MlVOa5ZOxrITg60YIWxAL2EQnKUtqGU_ImUaHltwZXzRecUFQLs2x0q2AKF4ZaezmUKjrT0Pd1TZgQKWW3kj0wS0abuCpZ1AW', 38, NULL),
	(17, 'dNHKggVw6n0:APA91bEDsn5DQav_g-gAMeB3lB37MiAzNglOEYmE-znUEoO68cGhPkXAd4VcIXZskdREG_9HvPTX4-UaqAV2knGwkNH4hrNVzZHrLWzEubsJ8VgCTn76g6jU2A_bN0r-3Sedinhrfldn', 41, ''),
	(18, 'dNHKggVw6n0:APA91bEDsn5DQav_g-gAMeB3lB37MiAzNglOEYmE-znUEoO68cGhPkXAd4VcIXZskdREG_9HvPTX4-UaqAV2knGwkNH4hrNVzZHrLWzEubsJ8VgCTn76g6jU2A_bN0r-3Sedinhrfldn', 53, ''),
	(19, 'fvJxkGL7sFQ:APA91bGVh1hE0R7MravGVJPKAuzpUnWC7saCeGHYjyOggi0sat5hvaLWx6096rRmsdzZZJcB24w-Rwrb6BrmWsMA9zDYZaJR5jPGJr0A04MWCJk47MN7N5aEWaQ1ODK8RWV6WLPWnZEl', 59, ''),
	(20, 'cvt8Z60LXG0:APA91bHZJetzAjFYBpR3JdwmI-IsvEJHIP8Tr0cQFMq9O0GPDpPq5HUJKG0sZwpZHwrrhKFQO9ah4Dgmcelggautq6S6W2TNPXJMHBc2q7L0Z7F0Ke_8ze5e5SXzW3EC7CI7owkqSLW-', 58, ''),
	(21, 'dNHKggVw6n0:APA91bEDsn5DQav_g-gAMeB3lB37MiAzNglOEYmE-znUEoO68cGhPkXAd4VcIXZskdREG_9HvPTX4-UaqAV2knGwkNH4hrNVzZHrLWzEubsJ8VgCTn76g6jU2A_bN0r-3Sedinhrfldn', 62, ''),
	(23, 'eeb4pLUG6q4:APA91bHa3xtfQoYdvadNoi24SSYUggxNe9_Yalvy2y1Eo3-qzfCcLLqvOfWLBYMXY8JkMBuzI6ttPFQVPgqN35twvIM4jskFEd3V7_K1uK7QbhnekZANVPmnLcb5N87rtu_XCCTQAULR', 68, '0');
/*!40000 ALTER TABLE `device_supplier` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.device_user
CREATE TABLE IF NOT EXISTS `device_user` (
  `id_token` int(5) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_token`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table eladeslo_db_lades.device_user: ~19 rows (approximately)
/*!40000 ALTER TABLE `device_user` DISABLE KEYS */;
REPLACE INTO `device_user` (`id_token`, `id_user`, `token`, `desa`) VALUES
	(1, 2, 'dyRyY-UTe9s:APA91bH3JRPSI1xAQtQTmpJJw_vOYwCS6_-XFRjbvF_L71OtQcj7wKQbGtKpgMSAIjW1AN2TXrDGOpdlZVYU5jKo6Z89HHEHASmlG-_dwOS0xB-75eHYMcbEtyFt13NjpYJYkxHhmEyP', NULL),
	(2, 38, 'dII9eFTjlCM:APA91bG6eHhrDP7y8bLJWEqZyyd1m5fXFcvUDC6e18T-kVHdCq5NIDoAGFvuzFEYah_SQSllUxsOvVXhVzw7INByW2nZ7m59STXIOw8wHUqAQI8LL8b4H2_rPQ3lHd3fCgDF5G3x-msZ', NULL),
	(3, 35, 'chUJKRoyQvE:APA91bF9WdsEyHLYdsLRNwAScSOojgfiZR5Syeiab0tpXuel4iz-i6-loe47BSPA9ejlkrXdMjBNH5bpmpSSTllP_iTnyuLLbmyMSvY0gfHZiuR2Rz8qtN46OIwe3j84fGJRMatU27RU', NULL),
	(4, 44, 'cz2lcDq8-FM:APA91bH7kNWVCfBwa3A5DZCYCYxnJzQ60fO3jqThmhSOlDUxGmI9uzO2rHvgzY6niTg43KN0ni2dKWXBMYpBKsPha1wzguVymOdq9vOl8GyKk_jZL5misLTotkTGeO_kSs_TkXgeNCXX', NULL),
	(5, 45, 'chUJKRoyQvE:APA91bF9WdsEyHLYdsLRNwAScSOojgfiZR5Syeiab0tpXuel4iz-i6-loe47BSPA9ejlkrXdMjBNH5bpmpSSTllP_iTnyuLLbmyMSvY0gfHZiuR2Rz8qtN46OIwe3j84fGJRMatU27RU', NULL),
	(6, 47, 'cwAINuyw8VM:APA91bHX4UckSFd9nxxzeBHidyFwP2zsSBdH6Gqd4jtOcdZYpHP_LujRmniARS6EjyseS12tI_JdjxlyU58V8ZxWGkGPzHuBRit5E1sx-RRJmZf0V0nLRIO34yv8oYUb79s9eUqRq5wO', NULL),
	(7, 48, 'fyPEXXNc03o:APA91bH5UL59ExuNV_wUnusvvAyeQwrEX6MPL25-Q04vL_675yQmEqpLwktGmzFEnrzET5fjMfYkZFfLb_lSdn8b4g204s8o71mU37EEdB37fwrL1QzhxSHkoMhUl-WmOXmWS5iQD6sg', NULL),
	(8, 33, 'chUJKRoyQvE:APA91bF9WdsEyHLYdsLRNwAScSOojgfiZR5Syeiab0tpXuel4iz-i6-loe47BSPA9ejlkrXdMjBNH5bpmpSSTllP_iTnyuLLbmyMSvY0gfHZiuR2Rz8qtN46OIwe3j84fGJRMatU27RU', NULL),
	(9, 60, 'fLfCR1ZZf94:APA91bEJeG_EJ3qpxFCVYkT7vrpy-6xEjEuHLZNu8kFq-6jOzo3YAuOPY4U95Ww-0Fyh8FnZwc49s26L8o9dFX9jpwDXSxb5dgIrLnjd_6iZubBkm8lVF8K_1pAxr2LJjvpWuttZTfCf', NULL),
	(10, 63, 'chUJKRoyQvE:APA91bF9WdsEyHLYdsLRNwAScSOojgfiZR5Syeiab0tpXuel4iz-i6-loe47BSPA9ejlkrXdMjBNH5bpmpSSTllP_iTnyuLLbmyMSvY0gfHZiuR2Rz8qtN46OIwe3j84fGJRMatU27RU', NULL),
	(11, 13, 'chUJKRoyQvE:APA91bF9WdsEyHLYdsLRNwAScSOojgfiZR5Syeiab0tpXuel4iz-i6-loe47BSPA9ejlkrXdMjBNH5bpmpSSTllP_iTnyuLLbmyMSvY0gfHZiuR2Rz8qtN46OIwe3j84fGJRMatU27RU', NULL),
	(12, 68, 'czhMnIQV-fA:APA91bFZxtuyiTyvDlE8XYloAc6YqOyrq6gOIw-hDo2IvkBS8jhDruraiR3A5xtXp8oZH1x1lyaaLvw-3HXtUXOjpFL2ds0UuIcjRFgWxGSnlzrSJ5F4nSpgxBYUHji11l6eg-cwycMV', NULL),
	(13, 70, 'eiJY1jmh5Zg:APA91bG0hLtmOZQdu4wI4K9EpW4s9aRfAIHM9N1sQuh2ISuNT8219ILp7jtsDAE5K3JdGSxv7jdVLK_2FEfYPxj0kdoKi7iu4U4Dx5_GACD2eJbVyWW_3myXkZ4tzT3dBCprrQ1EZPTq', NULL),
	(14, 82, 'cgBipPJPs8Q:APA91bF0jbFt5ajuPScly3V-qluP76Q9N5Fx_EJU-1ijCMgEJa8QR6ZCh5YSwKdXbnvAY-iYkuIv0V0-AvOgfQmyBWyL-KDKBbmSUFe5XnsmmwhETNZZGZcXDDnkBnPSFQiwVrLzPZ21', NULL),
	(15, 83, 'evkg8izdGs4:APA91bGGUJ7sYG5JV16UGcRj1_LEZ23XL9aP9gjfSq9A1H5h6o1esnFWEu_BqFocXUgjk5jHMa2AZ7L01PYRi1HndE7IEUWIYUSkaToRlyePiJlry2-cw7S3KSKl24f5ig8dHYj2mw-j', NULL),
	(16, 84, 'dZchkOUeUaw:APA91bFmxw9wDQwjLD2KbJmjRmZLUMxGOGXxGBRe2ZWI5EuRMTq-G8WDeBedAiOk9cYGY95F_d0LMAiHZnLmUq1UzR_ijwiuCNEk7lero_4CRK2yYHlI1V8ZccctWCW6_XQPBRIRuxkV', NULL),
	(17, 88, 'chUJKRoyQvE:APA91bF9WdsEyHLYdsLRNwAScSOojgfiZR5Syeiab0tpXuel4iz-i6-loe47BSPA9ejlkrXdMjBNH5bpmpSSTllP_iTnyuLLbmyMSvY0gfHZiuR2Rz8qtN46OIwe3j84fGJRMatU27RU', NULL),
	(18, 91, 'chUJKRoyQvE:APA91bF9WdsEyHLYdsLRNwAScSOojgfiZR5Syeiab0tpXuel4iz-i6-loe47BSPA9ejlkrXdMjBNH5bpmpSSTllP_iTnyuLLbmyMSvY0gfHZiuR2Rz8qtN46OIwe3j84fGJRMatU27RU', NULL),
	(19, 96, 'f1HhxekymEk:APA91bFyG_qo5touk8-qcVVcjZDv_xaNFDb8cXTLBPfaYYdo9sgT7BGzaajXm4GeLeLNUVo7c1DVHrJQYjYJzAMhFp_UZl0SIluU7UWNNCmyQwNTX5WwNTLEqo1SJQfyxY7ZZpyQh79D', NULL),
	(20, 99, 'chUJKRoyQvE:APA91bF9WdsEyHLYdsLRNwAScSOojgfiZR5Syeiab0tpXuel4iz-i6-loe47BSPA9ejlkrXdMjBNH5bpmpSSTllP_iTnyuLLbmyMSvY0gfHZiuR2Rz8qtN46OIwe3j84fGJRMatU27RU', 'Suryawangi'),
	(21, 81, 'dbA1sXmRSNM:APA91bGfAnTdJ7tgu2fbrTpLsRJhrjrRU7jvf5LoByzB5_skP5cOZJf2FK-EbisJQFAo3mCce93iIxH82sAb0vu2S7JcKNOQZ3mCq0fYv2-W3ZezILKyc0E7kI6IeviURsCKD12a3rYk', NULL),
	(22, 100, 'diB_FiK4d74:APA91bGgGYqluAJFQ8-bl40UeA4OMDTjvSTYWaqr-uAkQrKkjR2bIWCIMmESVqU2IgBFyasVP-UDPzvuRW2gWdIsU8FHWWYOqjTsPPtbnA7XZSc1ofWnvDhZbvFHlLZ2c1gzW9dXsGtP', NULL),
	(23, 98, 'chUJKRoyQvE:APA91bF9WdsEyHLYdsLRNwAScSOojgfiZR5Syeiab0tpXuel4iz-i6-loe47BSPA9ejlkrXdMjBNH5bpmpSSTllP_iTnyuLLbmyMSvY0gfHZiuR2Rz8qtN46OIwe3j84fGJRMatU27RU', 'Suryawangi'),
	(24, 102, 'chUJKRoyQvE:APA91bF9WdsEyHLYdsLRNwAScSOojgfiZR5Syeiab0tpXuel4iz-i6-loe47BSPA9ejlkrXdMjBNH5bpmpSSTllP_iTnyuLLbmyMSvY0gfHZiuR2Rz8qtN46OIwe3j84fGJRMatU27RU', 'Wakan'),
	(25, 103, 'c5y2EMY8Mqc:APA91bEirLv2ahN9ynfT7EtYQQ8d7m03340NSusuY5aGL4UEvPDAXZ2fGGEr_dIaGQEWQag0Q3moUVFIpW60mmeGHnkqQMHUbbpdUF3pXV4CoKl17iOOa_avWv7Ds1WjjToS6i4awKBq', 'Suryawangi'),
	(26, 104, 'feOZhP0PiuQ:APA91bGCkA5ZbXC4AESZRExqwtmc1DoOtst09WmeCSnE4BOrFhHSefE3brwImlLMNG6KAkv_POpP0ZIzwYBb2Mlj-b_KqPSEwB9R-SbX0YtX13yB7jMvZ9buIsaoOY2he5gY_DDbtLV9', 'Suryawangi'),
	(27, 105, 'fggdv0KpA2k:APA91bGGocgCddcJicO7YfjEEGYwGVZ-HNt7RCiqeSWAC4KNyWrX7inHVGAbS7J6jrqj9-jNizEY8YJn-udpEP9xzwSFUY4KKXgOAo5NbQLWL0GxgtQK6hDqvlfYnMhWuA4F8b2ZpPD6', 'Kesik'),
	(28, 106, 'cY1VLbZyWo0:APA91bE9bIyVtfHrc5Cnt0ElE-BHYU-yKMgN1QkrO0vLEH4E7e0EqDuXqovzZv5i7SwoppbOCjz4wZ9CAdOiSKYGnZ3Q0P0iWRVPIpArsR3bYI2Nc4iKQdxPac4okfh2d5_aHYqg3TOX', 'Menceh'),
	(29, 108, 'fCgYjJpn200:APA91bGnfavHU7zRLOazc-n3TGRs_5MAADWgH1NP0A-oT20jRuaq31C96D4Bp9l-tl6UiJGOZK2bdhHG_IJs3-KuMoZsYTRa02tdMcgB_ebvVNL7A_tPeIniaaMhAW-5Q55KJUppu_fA', 'Pancor'),
	(30, 110, 'cTI-uLZnfEk:APA91bFY-Iz7YpnxdnamjkP1GSg2uVXTI2B4bxyzNK7Nf-ooguYmnPBG0ZnZoiboJka-LCrz0hsO7iC_G6PSy3xICw_mTZiwo4NAgZQ9THOe5NIQNEmcXNLCcU39UfXP56qLKMq90aqs', 'Sepit'),
	(31, 111, 'c0RxFD-WiqY:APA91bFIosrnACzR4jMN-JEUbz9NC6g54kYP0NsvqG5TfERPQeYTdMTHAn0hSZUWnB5TZtEdYwu82i1yjaj9zqDFnCgNOcVV5OcLluXwiBljJ-3Nkyw8reQyFjDPtP42_3eZdBBGS5hJ', 'Majidi'),
	(32, 112, 'erd_ZMEFsH0:APA91bG29fdwX8D3x1sLKuqhaPd0TrIRqMPOP4rILTyIdPbLoQWF9PgSHlwjvBYVdRu1xyyppByVT-D35avuR_WSV0eZgA0hGILwf9xLTt7SsRtcbvIvofl9zyBEQF2uzQuehsbdomvp', 'Pulau Maringkik'),
	(33, 113, 'cof5MGEPzKE:APA91bGk2MXRhy3b5K3A0uETjQzKXurNtoMOYJomWdsTBNzww7cxfYamj_OPfhzEx4tmrehTDKKrPjZdkL9oKaBtflRanpmFyaUG4uxyaQ6sHdk6EvS1Rj9qSlwV01wPAgBSGSQ8m1jE', 'Jerowaru');
/*!40000 ALTER TABLE `device_user` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.ekspedisi_bantuan
CREATE TABLE IF NOT EXISTS `ekspedisi_bantuan` (
  `id_ekspedisi` int(5) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `id_kurir` int(5) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `bukti_terima` text NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_ekspedisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.ekspedisi_bantuan: ~0 rows (approximately)
/*!40000 ALTER TABLE `ekspedisi_bantuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `ekspedisi_bantuan` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.harga_sembako
CREATE TABLE IF NOT EXISTS `harga_sembako` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.harga_sembako: 0 rows
/*!40000 ALTER TABLE `harga_sembako` DISABLE KEYS */;
/*!40000 ALTER TABLE `harga_sembako` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.info_desa
CREATE TABLE IF NOT EXISTS `info_desa` (
  `id_info` int(5) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(50) NOT NULL,
  `berita` text NOT NULL,
  `gambar` text,
  `slug` text,
  `id_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_info`),
  KEY `FK_info_desa_pihak_desa` (`id_desa`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.info_desa: ~8 rows (approximately)
/*!40000 ALTER TABLE `info_desa` DISABLE KEYS */;
REPLACE INTO `info_desa` (`id_info`, `tgl`, `time`, `judul`, `berita`, `gambar`, `slug`, `id_desa`) VALUES
	(1, '2020-05-03', '2020-05-03 17:09:57', 'Penyemprotan Massal', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', '200319180348-penye.jpg', 'penyemprotan-massal.html', 1),
	(2, '2020-05-03', '2020-05-03 17:11:58', 'Jumlah pasien positif NTB naik', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', '200319180348-penye1.jpg', 'jumlah-pasien-positif-ntb-naik.html', 1),
	(3, '2020-05-03', '2020-05-03 17:20:43', 'pasien covid19', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'cerita-pasien-corona-sembuh-asal-ponorogo-sempat-berpikir-akan-meninggal-ud7H7n4mrL.jpg', 'pasien-covid19.html', 1),
	(4, '2020-05-03', '2020-05-03 17:21:05', 'gerakan desa melan corona', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'images.png', 'gerakan-desa-melan-corona.html', 1),
	(5, '2020-05-03', '2020-05-03 17:24:36', '#dirumah aja', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', '16339227987-di_rumah.jpg', 'dirumah-aja.html', 1),
	(6, '2020-05-03', '2020-05-03 17:26:27', 'penyerahan bantuan', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', '52536950074-jo.jpg', 'penyerahan-bantuan.html', 1),
	(7, '2020-05-03', '2020-05-03 17:28:08', 'penetapan psbb', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'hasil-survei-psbb-langkah-tepat-memutus-penularan-covid-19-GQ8Zdgao6I.jpg', 'penetapan-psbb.html', 1),
	(8, '2020-05-03', '2020-05-03 17:29:17', 'mudik lebaran saat ini tidak di bolehkan', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'download_(1).jpg', 'mudik-lebaran-saat-ini-tidak-di-bolehkan.html', 1);
/*!40000 ALTER TABLE `info_desa` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.jadwal_pengiriman_bantuan
CREATE TABLE IF NOT EXISTS `jadwal_pengiriman_bantuan` (
  `id_jadwal_pengiriman` int(5) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `id_detail_jadwal` int(5) NOT NULL,
  PRIMARY KEY (`id_jadwal_pengiriman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.jadwal_pengiriman_bantuan: ~0 rows (approximately)
/*!40000 ALTER TABLE `jadwal_pengiriman_bantuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwal_pengiriman_bantuan` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.jadwal_pesanan
CREATE TABLE IF NOT EXISTS `jadwal_pesanan` (
  `id_pesanan` int(5) NOT NULL AUTO_INCREMENT,
  `jam_pesan` time DEFAULT NULL,
  `jam_pengepulan` time DEFAULT NULL,
  `jam_pengiriman` time DEFAULT NULL,
  `id_suplayer` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.jadwal_pesanan: ~3 rows (approximately)
/*!40000 ALTER TABLE `jadwal_pesanan` DISABLE KEYS */;
REPLACE INTO `jadwal_pesanan` (`id_pesanan`, `jam_pesan`, `jam_pengepulan`, `jam_pengiriman`, `id_suplayer`) VALUES
	(1, '04:05:00', '15:03:00', '14:01:00', 1),
	(2, '05:25:00', '05:13:00', '05:36:00', 4),
	(3, '00:00:00', '00:00:00', '00:00:00', 0),
	(4, '06:10:00', '06:20:00', '07:43:00', 14);
/*!40000 ALTER TABLE `jadwal_pesanan` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.kabupaten
CREATE TABLE IF NOT EXISTS `kabupaten` (
  `id_kab` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_kab`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.kabupaten: ~0 rows (approximately)
/*!40000 ALTER TABLE `kabupaten` DISABLE KEYS */;
REPLACE INTO `kabupaten` (`id_kab`, `nama`) VALUES
	(1, 'Lombok Timur');
/*!40000 ALTER TABLE `kabupaten` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.kategori: ~7 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
REPLACE INTO `kategori` (`id_kategori`, `kategori`) VALUES
	(1, 'Sembako'),
	(2, 'Bumbu Masakan'),
	(3, 'Kesehatan'),
	(4, 'Makanan'),
	(5, 'Sayur Mayur'),
	(6, 'Minuman'),
	(7, 'Buah Buahan'),
	(8, 'Daging & Ikan');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.kecamatan
CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kec` int(5) NOT NULL AUTO_INCREMENT,
  `id_kab` int(5) NOT NULL,
  `nama_kec` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kec`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.kecamatan: ~20 rows (approximately)
/*!40000 ALTER TABLE `kecamatan` DISABLE KEYS */;
REPLACE INTO `kecamatan` (`id_kec`, `id_kab`, `nama_kec`) VALUES
	(1, 1, 'Keruak'),
	(2, 1, 'Jerowaru'),
	(3, 1, 'Sakra'),
	(4, 1, 'Sakra Barat'),
	(5, 1, 'Sakra Timur'),
	(6, 1, 'Terara'),
	(7, 1, 'Montong Gading'),
	(8, 1, 'Sikur'),
	(9, 1, 'Masbagik'),
	(10, 1, 'Pringgasela'),
	(11, 1, 'Sukamulia'),
	(12, 1, 'Suralaga'),
	(13, 1, 'Selong'),
	(14, 1, 'Labuhan Haji'),
	(15, 1, 'Pringgabaya'),
	(16, 1, 'Suela'),
	(17, 1, 'Aikmel'),
	(18, 1, 'Wanasaba'),
	(19, 1, 'Sembalun'),
	(20, 1, 'Sambalia');
/*!40000 ALTER TABLE `kecamatan` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.kurir
CREATE TABLE IF NOT EXISTS `kurir` (
  `id_kurir` int(5) NOT NULL AUTO_INCREMENT,
  `nik` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` char(1) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `desa` varchar(50) NOT NULL,
  `telpon` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `status_nikah` varchar(30) NOT NULL,
  `photo` text NOT NULL,
  `verified` int(11) NOT NULL,
  PRIMARY KEY (`id_kurir`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.kurir: ~0 rows (approximately)
/*!40000 ALTER TABLE `kurir` DISABLE KEYS */;
REPLACE INTO `kurir` (`id_kurir`, `nik`, `nama`, `jk`, `umur`, `alamat`, `desa`, `telpon`, `email`, `password`, `kecamatan`, `kabupaten`, `status_nikah`, `photo`, `verified`) VALUES
	(1, 2147483647, 'Hari sunayo', 'L', 10, 'Suryawangi', 'Suryawangi', 2147483647, 'adi@gmail.com', '123456', 'Labuhan haji', 'Lombok timur', 'belum menikah', '', 0);
/*!40000 ALTER TABLE `kurir` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.log_barang
CREATE TABLE IF NOT EXISTS `log_barang` (
  `id_barang` int(5) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(5) NOT NULL,
  `stok` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `satuan` varchar(5) DEFAULT NULL,
  `slug` text NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_suplayer` int(5) NOT NULL,
  PRIMARY KEY (`id_barang`) USING BTREE,
  KEY `FK_barang_kategori` (`id_kategori`) USING BTREE,
  KEY `FK_barang_suplayer` (`id_suplayer`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table eladeslo_db_lades.log_barang: ~0 rows (approximately)
/*!40000 ALTER TABLE `log_barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_barang` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.log_detail_pesanan
CREATE TABLE IF NOT EXISTS `log_detail_pesanan` (
  `id_transaksi` int(5) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) DEFAULT NULL,
  `id_barang` int(5) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `total_harga` int(5) DEFAULT NULL,
  `kode_order` varchar(20) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table eladeslo_db_lades.log_detail_pesanan: ~0 rows (approximately)
/*!40000 ALTER TABLE `log_detail_pesanan` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_detail_pesanan` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.log_ongkir
CREATE TABLE IF NOT EXISTS `log_ongkir` (
  `id_ongkir` int(5) NOT NULL AUTO_INCREMENT,
  `ongkir` int(5) NOT NULL,
  `id_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_ongkir`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table eladeslo_db_lades.log_ongkir: ~2 rows (approximately)
/*!40000 ALTER TABLE `log_ongkir` DISABLE KEYS */;
REPLACE INTO `log_ongkir` (`id_ongkir`, `ongkir`, `id_desa`) VALUES
	(1, 3000, 1),
	(2, 3000, 2);
/*!40000 ALTER TABLE `log_ongkir` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.log_pesan
CREATE TABLE IF NOT EXISTS `log_pesan` (
  `id_order` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_pesan` date DEFAULT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `qty` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `kode_order` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_order`) USING BTREE,
  KEY `FK_pesan_barang` (`id_barang`) USING BTREE,
  KEY `FK_pesan_user` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table eladeslo_db_lades.log_pesan: ~7 rows (approximately)
/*!40000 ALTER TABLE `log_pesan` DISABLE KEYS */;
REPLACE INTO `log_pesan` (`id_order`, `tgl_pesan`, `jam`, `qty`, `total`, `id`, `id_barang`, `kode_order`) VALUES
	(1, '2020-04-14', '2020-04-14 12:18:59', 4, 185000, 2, 2, 'KB-20200414-2'),
	(2, '2020-04-15', '2020-04-15 09:20:02', 2, 95000, 2, 2, 'KB-20200415-2'),
	(3, '2020-04-15', '2020-04-15 09:22:22', 19, 860000, 2, 2, 'KB-20200415-2'),
	(6, '2020-04-24', '2020-04-24 09:19:42', 7, 0, 1, 5, 'KC-20200415-1'),
	(7, '2020-04-24', '2020-04-24 09:19:42', 7, 0, 1, 4, 'KC-20200415-1'),
	(8, '2020-04-24', '2020-04-24 09:19:43', 7, 0, 1, 5, 'KC-20200415-1'),
	(9, '2020-04-24', '2020-04-24 09:19:45', 7, 0, 1, 4, 'KC-20200415-1');
/*!40000 ALTER TABLE `log_pesan` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.log_suplayer
CREATE TABLE IF NOT EXISTS `log_suplayer` (
  `id_suplayer` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `bumdes` int(1) NOT NULL DEFAULT '0',
  `alamat` text NOT NULL,
  `kontak` varchar(30) NOT NULL,
  `email` varchar(59) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `longitude` text NOT NULL,
  `lattitude` text NOT NULL,
  `id_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_suplayer`) USING BTREE,
  KEY `FK_suplayer_pihak_desa` (`id_desa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table eladeslo_db_lades.log_suplayer: ~3 rows (approximately)
/*!40000 ALTER TABLE `log_suplayer` DISABLE KEYS */;
REPLACE INTO `log_suplayer` (`id_suplayer`, `nama`, `bumdes`, `alamat`, `kontak`, `email`, `username`, `password`, `longitude`, `lattitude`, `id_desa`) VALUES
	(1, 'Fathuriadi', 0, 'Dasan Bantek', '087861234123', 'riadiberhasil@gmail.com', 'adi', 'kim', '123', '123', 1),
	(2, 'Aziz', 0, 'Teros', '08765444', 'aziz@gmail.com', 'aziz', '12', '346', '55', 2),
	(3, 'majidindah', 0, 'majidi', '0877', 'awy@gmil.com', 'adf', 'kkk', '7789', '7888', 3);
/*!40000 ALTER TABLE `log_suplayer` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.ongkir
CREATE TABLE IF NOT EXISTS `ongkir` (
  `id_ongkir` int(5) NOT NULL AUTO_INCREMENT,
  `ongkir` int(5) NOT NULL,
  `id_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_ongkir`),
  KEY `FK_ongkir_desa` (`id_desa`)
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.ongkir: ~251 rows (approximately)
/*!40000 ALTER TABLE `ongkir` DISABLE KEYS */;
REPLACE INTO `ongkir` (`id_ongkir`, `ongkir`, `id_desa`) VALUES
	(1, 3000, 1),
	(2, 3000, 2),
	(3, 3000, 3),
	(4, 3000, 4),
	(5, 3000, 5),
	(6, 3000, 6),
	(7, 3000, 7),
	(8, 3000, 8),
	(9, 3000, 9),
	(10, 3000, 10),
	(11, 3000, 11),
	(12, 3000, 12),
	(13, 3000, 13),
	(14, 3000, 14),
	(15, 3000, 15),
	(16, 3000, 16),
	(17, 3000, 17),
	(18, 3000, 18),
	(19, 3000, 19),
	(20, 3000, 20),
	(21, 3000, 21),
	(22, 3000, 22),
	(23, 3000, 23),
	(24, 3000, 24),
	(25, 3000, 25),
	(26, 3000, 26),
	(27, 3000, 27),
	(28, 3000, 28),
	(29, 3000, 29),
	(30, 3000, 30),
	(31, 3000, 31),
	(32, 3000, 32),
	(33, 3000, 33),
	(34, 3000, 34),
	(35, 3000, 35),
	(36, 3000, 36),
	(37, 3000, 37),
	(38, 3000, 38),
	(39, 3000, 39),
	(40, 3000, 40),
	(41, 3000, 41),
	(42, 3000, 42),
	(43, 3000, 43),
	(44, 3000, 44),
	(45, 3000, 45),
	(46, 3000, 46),
	(47, 3000, 47),
	(48, 3000, 48),
	(49, 3000, 49),
	(50, 3000, 50),
	(51, 3000, 51),
	(52, 3000, 52),
	(53, 3000, 53),
	(54, 3000, 54),
	(55, 3000, 55),
	(56, 3000, 56),
	(57, 3000, 57),
	(58, 3000, 58),
	(59, 3000, 59),
	(60, 3000, 60),
	(61, 3000, 61),
	(62, 3000, 62),
	(63, 3000, 63),
	(64, 3000, 64),
	(65, 3000, 65),
	(66, 3000, 66),
	(67, 3000, 67),
	(68, 3000, 68),
	(69, 3000, 69),
	(70, 3000, 70),
	(71, 3000, 71),
	(72, 3000, 72),
	(73, 3000, 73),
	(74, 3000, 74),
	(75, 3000, 75),
	(76, 3000, 76),
	(77, 3000, 77),
	(78, 3000, 78),
	(79, 3000, 79),
	(80, 3000, 80),
	(81, 3000, 81),
	(82, 3000, 82),
	(83, 3000, 83),
	(84, 3000, 84),
	(85, 3000, 85),
	(86, 3000, 86),
	(87, 3000, 87),
	(88, 3000, 88),
	(89, 3000, 89),
	(90, 3000, 90),
	(91, 3000, 91),
	(92, 3000, 92),
	(93, 3000, 93),
	(94, 3000, 94),
	(95, 3000, 95),
	(96, 3000, 96),
	(97, 3000, 97),
	(98, 3000, 98),
	(99, 3000, 99),
	(100, 3000, 100),
	(101, 3000, 101),
	(102, 3000, 102),
	(103, 3000, 103),
	(104, 3000, 104),
	(105, 3000, 105),
	(106, 3000, 106),
	(107, 3000, 107),
	(108, 3000, 108),
	(109, 3000, 109),
	(110, 3000, 109),
	(111, 3000, 110),
	(112, 3000, 111),
	(113, 3000, 112),
	(114, 3000, 113),
	(115, 3000, 114),
	(116, 3000, 115),
	(117, 3000, 116),
	(118, 3000, 117),
	(119, 3000, 118),
	(120, 3000, 119),
	(121, 3000, 120),
	(122, 3000, 121),
	(123, 3000, 122),
	(124, 3000, 123),
	(125, 3000, 124),
	(126, 3000, 125),
	(127, 3000, 126),
	(128, 3000, 127),
	(129, 3000, 128),
	(130, 3000, 129),
	(131, 3000, 130),
	(132, 3000, 131),
	(133, 3000, 132),
	(134, 3000, 133),
	(135, 3000, 134),
	(136, 3000, 135),
	(137, 3000, 136),
	(138, 3000, 137),
	(139, 3000, 138),
	(140, 3000, 139),
	(141, 3000, 140),
	(142, 3000, 141),
	(143, 3000, 142),
	(144, 3000, 143),
	(145, 3000, 144),
	(146, 3000, 145),
	(147, 3000, 146),
	(148, 3000, 147),
	(149, 3000, 148),
	(150, 3000, 149),
	(151, 3000, 150),
	(152, 3000, 151),
	(153, 3000, 152),
	(154, 3000, 153),
	(155, 3000, 154),
	(156, 3000, 155),
	(157, 3000, 156),
	(158, 3000, 157),
	(159, 3000, 158),
	(160, 3000, 159),
	(161, 3000, 160),
	(162, 3000, 161),
	(163, 3000, 162),
	(164, 3000, 163),
	(165, 3000, 164),
	(166, 3000, 165),
	(167, 3000, 166),
	(168, 3000, 167),
	(169, 3000, 168),
	(170, 3000, 169),
	(171, 3000, 170),
	(172, 3000, 171),
	(173, 3000, 172),
	(174, 3000, 173),
	(175, 3000, 174),
	(176, 3000, 175),
	(177, 3000, 176),
	(178, 3000, 177),
	(179, 3000, 178),
	(180, 3000, 179),
	(181, 3000, 180),
	(182, 3000, 181),
	(183, 3000, 182),
	(184, 3000, 183),
	(185, 3000, 184),
	(186, 3000, 185),
	(187, 3000, 186),
	(188, 3000, 187),
	(189, 3000, 188),
	(190, 3000, 189),
	(191, 3000, 190),
	(192, 3000, 191),
	(193, 3000, 192),
	(194, 3000, 193),
	(195, 3000, 194),
	(196, 3000, 195),
	(197, 3000, 196),
	(198, 3000, 197),
	(199, 3000, 198),
	(200, 3000, 199),
	(201, 3000, 200),
	(202, 3000, 201),
	(203, 3000, 202),
	(204, 3000, 203),
	(205, 3000, 204),
	(206, 3000, 205),
	(207, 3000, 206),
	(208, 3000, 207),
	(209, 3000, 208),
	(210, 3000, 209),
	(211, 3000, 210),
	(212, 3000, 211),
	(213, 3000, 212),
	(214, 3000, 213),
	(215, 3000, 214),
	(216, 3000, 215),
	(217, 3000, 216),
	(218, 3000, 217),
	(219, 3000, 218),
	(220, 3000, 219),
	(221, 3000, 220),
	(222, 3000, 221),
	(223, 3000, 222),
	(224, 3000, 223),
	(225, 3000, 224),
	(226, 3000, 225),
	(227, 3000, 226),
	(228, 3000, 227),
	(229, 3000, 228),
	(230, 3000, 229),
	(231, 3000, 230),
	(232, 3000, 231),
	(233, 3000, 232),
	(234, 3000, 233),
	(235, 3000, 234),
	(236, 3000, 235),
	(237, 3000, 236),
	(238, 3000, 237),
	(239, 3000, 238),
	(240, 3000, 239),
	(241, 3000, 240),
	(242, 3000, 241),
	(243, 3000, 242),
	(244, 3000, 243),
	(245, 3000, 244),
	(246, 3000, 245),
	(247, 3000, 246),
	(248, 3000, 247),
	(249, 3000, 248),
	(250, 3000, 249),
	(251, 3000, 250);
/*!40000 ALTER TABLE `ongkir` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.paket
CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(5) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `qty` int(5) NOT NULL,
  `berat` int(5) NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.paket: ~0 rows (approximately)
/*!40000 ALTER TABLE `paket` DISABLE KEYS */;
/*!40000 ALTER TABLE `paket` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.pemberitahuan
CREATE TABLE IF NOT EXISTS `pemberitahuan` (
  `id_pemberitahuan` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `level_urgensi` int(5) NOT NULL,
  `from` varchar(10) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_pemberitahuan`),
  KEY `id_order` (`id_user`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.pemberitahuan: ~5 rows (approximately)
/*!40000 ALTER TABLE `pemberitahuan` DISABLE KEYS */;
REPLACE INTO `pemberitahuan` (`id_pemberitahuan`, `tgl`, `jam`, `judul`, `isi`, `level_urgensi`, `from`, `id_user`, `status`) VALUES
	(10, '0000-00-00', '2020-05-22 10:19:42', 'Info Belanja', 'Pesanan anda terselesaikan', 0, NULL, 13, NULL),
	(11, '0000-00-00', '2020-05-31 11:11:16', 'Info Belanja', 'Pesanan anda sedang di proses', 0, NULL, 104, NULL),
	(12, '0000-00-00', '2020-05-31 11:11:23', 'Info Belanja', 'Pesanan anda terselesaikan', 0, NULL, 104, NULL),
	(13, '0000-00-00', '2020-06-01 09:53:14', 'Info Belanja', 'Pesanan anda sedang di proses', 0, NULL, 113, NULL),
	(14, '0000-00-00', '2020-06-01 09:56:00', 'Info Belanja', 'Pesanan anda sedang di proses', 0, NULL, 111, NULL),
	(15, '0000-00-00', '2020-06-01 10:23:30', 'Info Belanja', 'Pesanan anda terselesaikan', 0, NULL, 111, NULL),
	(16, '0000-00-00', '2020-06-02 04:34:11', 'Info Belanja', 'Pesanan anda terselesaikan', 0, NULL, 113, NULL);
/*!40000 ALTER TABLE `pemberitahuan` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.penerima
CREATE TABLE IF NOT EXISTS `penerima` (
  `id_penerima` int(11) NOT NULL AUTO_INCREMENT,
  `no_kk` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` char(1) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `desa` varchar(50) NOT NULL,
  `telpon` int(11) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `status_nikah` varchar(30) NOT NULL,
  `longitude` text NOT NULL,
  `lattitude` text NOT NULL,
  `telah_menerima` int(11) NOT NULL,
  PRIMARY KEY (`id_penerima`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.penerima: ~2 rows (approximately)
/*!40000 ALTER TABLE `penerima` DISABLE KEYS */;
REPLACE INTO `penerima` (`id_penerima`, `no_kk`, `nik`, `nama`, `jk`, `umur`, `alamat`, `desa`, `telpon`, `kecamatan`, `kabupaten`, `status_nikah`, `longitude`, `lattitude`, `telah_menerima`) VALUES
	(4, 987987987, 2147483647, 'wahyu', 'l', 20, 'paok', 'bum', 876557, 'hjh', 'sjdhd', '', '', '', 0),
	(5, 987987987, 2147483647, 'wahyu', 'l', 20, 'paok', 'bum', 876557, 'hjh', 'sjdhd', '', '', '', 0);
/*!40000 ALTER TABLE `penerima` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.pesan
CREATE TABLE IF NOT EXISTS `pesan` (
  `id_order` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `tgl_pesan` date DEFAULT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `qty` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `id_suplayer` int(5) DEFAULT NULL,
  `kode_order` varchar(20) NOT NULL DEFAULT '',
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_order`),
  KEY `id` (`id`),
  KEY `id_barang` (`id_barang`),
  KEY `id_suplayer` (`id_suplayer`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.pesan: ~44 rows (approximately)
/*!40000 ALTER TABLE `pesan` DISABLE KEYS */;
REPLACE INTO `pesan` (`id_order`, `tgl_pesan`, `jam`, `qty`, `total`, `id`, `id_barang`, `id_suplayer`, `kode_order`, `status`) VALUES
	(1, '2020-05-17', '2020-05-17 05:52:33', 1, 43000, 35, 16, 4, 'KB-20200517-35', 2),
	(2, '2020-05-17', '2020-05-18 12:35:51', 1, 38000, 45, 20, 19, 'KB-20200518-45', 2),
	(3, '2020-05-19', '2020-05-19 10:05:38', 1, 13000, 63, 33, 26, 'KB-20200519-63', 0),
	(4, '2020-05-19', '2020-05-19 10:08:14', 5, 40000, 63, 33, 26, 'KC-20200519-63', 0),
	(5, '2020-05-19', '2020-05-19 10:11:18', 1, 13000, 63, 33, 26, 'KB-20200519-63', 0),
	(6, '2020-05-19', '2020-05-19 10:15:12', 1, 5000, 63, 32, 8, 'KB-20200519-63', 0),
	(7, '2020-05-19', '2020-05-20 04:06:09', 1, 48000, 63, 34, 27, 'KB-20200519-63', 1),
	(8, '2020-05-20', '2020-05-20 10:15:41', 1, 4000, 63, 36, 26, 'KB-20200520-63', 2),
	(9, '2020-05-20', '2020-05-20 11:01:43', 1, 4000, 63, 37, 30, 'KB-20200520-63', 2),
	(10, '2020-05-20', '2020-05-21 11:57:41', 1, 48000, 13, 31, 4, 'KB-20200520-13', 2),
	(11, '2020-05-20', '2020-05-20 11:29:45', 2, 5000, 68, 37, 30, 'KB-20200520-68', 0),
	(12, '2020-05-21', '2020-05-21 09:41:52', 1, 5000, 13, 30, 4, 'KB-20200521-13', 2),
	(13, '2020-05-21', '2020-05-21 09:41:03', 1, 2000, 13, 30, 4, 'KC-20200521-13', 2),
	(14, '2020-05-21', '2020-05-21 11:57:18', 1, 0, 13, 38, 4, 'KB-20200521-13', 2),
	(15, '2020-05-21', '2020-05-21 11:56:38', 1, 23000, 13, 38, 4, 'KB-20200521-13', 2),
	(16, '2020-05-21', '2020-05-21 11:53:16', 1, 23000, 13, 38, 4, 'KB-20200521-13', 2),
	(17, '2020-05-21', '2020-05-21 11:58:39', 1, 23000, 13, 38, 4, 'KB-20200521-13', 2),
	(18, '2020-05-21', '2020-05-22 12:28:39', 1, 23000, 13, 38, 4, 'KB-20200522-13', 2),
	(19, '2020-05-21', '2020-05-22 06:58:12', 1, 23000, 13, 38, 4, 'KB-20200522-13', 1),
	(20, '2020-05-21', '2020-05-22 07:50:06', 1, 23000, 13, 38, 4, 'KB-20200522-13', 2),
	(21, '2020-05-21', '2020-05-22 07:07:35', 1, 23000, 13, 38, 4, 'KB-20200522-13', 2),
	(22, '2020-05-22', '2020-05-22 08:11:51', 1, 23000, 13, 38, 4, 'KB-20200522-47', 1),
	(23, '2020-05-22', '2020-05-22 09:31:02', 1, 20000, 13, 38, 4, 'KC-20200522-48', 1),
	(24, '2020-05-22', '2020-05-22 09:31:00', 1, 20000, 13, 38, 4, 'KC-20200522-92', 1),
	(25, '2020-05-22', '2020-05-22 09:30:57', 1, 20000, 13, 38, 4, 'KC-20200522-80', 1),
	(26, '2020-05-22', '2020-05-22 10:19:42', 1, 23000, 13, 38, 4, 'KB-20200522-13', 2),
	(27, '2020-05-30', '2020-05-31 06:20:17', 5, 35000, 104, 42, 23, 'KC-20200530-84', 0),
	(28, '2020-05-30', '2020-05-31 06:20:17', 1, 2000, 104, 32, 2, 'KC-20200531-19', 0),
	(29, '2020-05-31', '2020-05-31 11:37:43', 1, 1000, 104, 40, 2, 'KC-20200531-54', 0),
	(30, '2020-05-31', '2020-05-31 11:37:43', 1, 40000, 104, 16, 2, 'KC-20200531-85', 0),
	(31, '2020-05-31', '2020-05-31 11:43:11', 1, 40000, 104, 16, 2, 'KC-20200531-99', 0),
	(32, '2020-05-31', '2020-05-31 11:43:11', 1, 20000, 104, 38, 2, 'KC-20200531-69', 0),
	(33, '2020-05-31', '2020-05-31 03:32:14', 1, 0, 104, 38, 2, 'KB-20200531-16', 0),
	(34, '2020-05-31', '2020-05-31 04:30:48', 26, 1000, 104, 40, 2, 'KC-20200531-59', 0),
	(35, '2020-05-31', '2020-05-31 04:30:48', 5, 10000, 104, 32, 2, 'KC-20200531-52', 0),
	(36, '2020-05-31', '2020-05-31 04:30:48', 7, 140000, 104, 38, 2, 'KC-20200531-13', 0),
	(37, '2020-05-31', '2020-05-31 04:30:48', 1, 1000, 105, 40, 2, 'KC-20200531-27', 0),
	(38, '2020-05-31', '2020-05-31 04:33:02', 5, 0, 105, 16, 2, 'KB-20200531-87', 0),
	(39, '2020-05-31', '2020-05-31 04:33:15', 5, 200000, 105, 16, 2, 'KC-20200531-31', 0),
	(40, '2020-05-31', '2020-05-31 04:37:38', 3, 0, 105, 18, 2, 'KB-20200531-82', 0),
	(41, '2020-05-31', '2020-05-31 07:05:16', 1, 0, 104, 40, 2, 'KB-20200531-28', 0),
	(42, '2020-05-31', '2020-05-31 07:05:35', 1, 0, 104, 40, 2, 'KB-20200531-54', 0),
	(43, '2020-05-31', '2020-05-31 07:06:12', 1, 1000, 104, 40, 2, 'KC-20200531-68', 0),
	(44, '2020-05-31', '2020-05-31 07:06:12', 4, 28000, 104, 42, 23, 'KC-20200531-73', 0),
	(45, '2020-05-31', '2020-05-31 11:11:23', 1, 0, 104, 44, 62, 'KB-20200531-57', 2),
	(46, '2020-06-01', '2020-06-02 04:34:10', 3, 30000, 113, 44, 62, 'KC-20200601-73', 2),
	(47, '2020-06-01', '2020-06-01 10:23:30', 2, 0, 111, 44, 62, 'KB-20200601-92', 2);
/*!40000 ALTER TABLE `pesan` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.pihak_desa
CREATE TABLE IF NOT EXISTS `pihak_desa` (
  `id_pihak_desa` int(5) NOT NULL AUTO_INCREMENT,
  `id_desa` int(5) NOT NULL DEFAULT '0',
  `alamat_kantor` text NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `kontak_kesehatan` varchar(20) NOT NULL,
  `kontak_keamanan` varchar(20) NOT NULL,
  `kontak_khusus` varchar(20) NOT NULL,
  `tentang_desa` text NOT NULL,
  `kepala_desa` varchar(50) NOT NULL,
  `sekdes` varchar(50) NOT NULL,
  `kamtibmas` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pihak_desa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.pihak_desa: ~10 rows (approximately)
/*!40000 ALTER TABLE `pihak_desa` DISABLE KEYS */;
REPLACE INTO `pihak_desa` (`id_pihak_desa`, `id_desa`, `alamat_kantor`, `telpon`, `email`, `password`, `kontak_kesehatan`, `kontak_keamanan`, `kontak_khusus`, `tentang_desa`, `kepala_desa`, `sekdes`, `kamtibmas`) VALUES
	(1, 0, 'Jl Ogah Dasan Bantek', '087851922063', 'dasban@gmail.com', '12345', '082xxx', '081xxx', '087xxx', '', '', '', ''),
	(2, 0, 'Jl pemuda', '0988977777', 'teros@gmail.com', '', '09988', '88889', '8888', '', '', '', ''),
	(3, 0, 'Jl majidi', '8765555', 'majidi@gmail.com', '', '08888', '98888', '88888', '', '', '', ''),
	(4, 0, 'Jln sekarteja', '0875432167', 'sekarteja@gmail.com', '', '098777', '3334', '8888', '', '', '', ''),
	(5, 0, 'Selong', '087763305916', 'Kelayu@gmail.com', '', '08777', '08777', '08777', '', '', '', ''),
	(6, 0, 'kembang kerang', '08765544', 'riadisuksesamin100pe', '', '0876655', '09876665', '0987666', '', '', '', ''),
	(7, 0, '', '', '', '', '008889', '099209', '8889', '', '', '', ''),
	(8, 0, '', '', '', '', 'xxxx', 'xxxx', 'xxxx', '', '', '', ''),
	(9, 0, '', '', '', '', '00xxx', '00xxx', '00xx', '', '', '', ''),
	(10, 0, '', '', '', '', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `pihak_desa` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.supadmin
CREATE TABLE IF NOT EXISTS `supadmin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_pihak_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table eladeslo_db_lades.supadmin: ~0 rows (approximately)
/*!40000 ALTER TABLE `supadmin` DISABLE KEYS */;
REPLACE INTO `supadmin` (`id_admin`, `nama_admin`, `username`, `password`, `id_pihak_desa`) VALUES
	(1, 'Harry', 'admin', 'admin', 1);
/*!40000 ALTER TABLE `supadmin` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.super_admin
CREATE TABLE IF NOT EXISTS `super_admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table eladeslo_db_lades.super_admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `super_admin` DISABLE KEYS */;
REPLACE INTO `super_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
	(0, 'MOH.FAHRURROZI', 'admin', '1sampai8');
/*!40000 ALTER TABLE `super_admin` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.suplayer
CREATE TABLE IF NOT EXISTS `suplayer` (
  `id_suplayer` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `bumdes` int(1) NOT NULL DEFAULT '0',
  `alamat` text NOT NULL,
  `kontak` varchar(30) NOT NULL,
  `email` varchar(59) NOT NULL,
  `username` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `longitude` text NOT NULL,
  `lattitude` text NOT NULL,
  `id_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_suplayer`),
  KEY `id_desa` (`id_desa`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.suplayer: ~55 rows (approximately)
/*!40000 ALTER TABLE `suplayer` DISABLE KEYS */;
REPLACE INTO `suplayer` (`id_suplayer`, `nama`, `bumdes`, `alamat`, `kontak`, `email`, `username`, `photo`, `password`, `longitude`, `lattitude`, `id_desa`) VALUES
	(2, 'Mandiri toko', 1, 'jln bla bla', '087766644253', 'riadi@gmail.com', 'mandiritoko', '', '12345', '', '', 1),
	(3, 'Bumdes kelayu', 1, 'kelayu selatan', '08766644253', 'adi@gmail.com', 'bumdeksl', '', '12345', '', '', 1),
	(4, 'Bumdes Kembang Kerang', 1, 'kembang kerang', '087870832344', 'kembang@gamil.com', 'bumdes12', '1589781532070.jpg', '12345', '', '', 1),
	(5, 'Mandiri Toko', 0, 'kembang kerang', '08776664425', 'adi@gmail.com', 'mandiritoko2', '', '12345', '', '', 1),
	(8, 'TOKO Sejahtera', 0, 'jlan kelayu selatan', '087666', 'sejahtera', 'tokosejahtra', '', '12345', '', '', 1),
	(9, 'Toko kembang kerang', 0, 'kembang kerang', '08712345678', 'kembangkerang@gmail.com', 'kembangkerangtoko', '', '12345', '', '', 1),
	(10, 'Toko Sebelahan', 0, 'kembang kerang', '087644555', 'adi@gmail.com', 'tokokembangkerang2', '', '123445', '', '', 1),
	(11, 'BUMDes Mart', 1, 'jalan segara anak jurusan suela', '087761583621', 'bumdesbisa4@gmail.com', 'BUMDes Bina Sejahtera', '', '12345', '', '', 1),
	(12, 'bumkel kelayu selatan ', 1, 'jalan TGH umar no. 59  kelayu selatan ', '087763344310', 'r_taufieq@yahoo.com', 'Rohman taufiq', '', 'cinta321', '', '', 1),
	(13, 'MOH.FAHRURROZI', 0, 'paok motong', '+6287863301421', 'berugakitlombok@gmail.com', 'ojik', '', 'ojik', '116.47917401796991', '-8.72933702942926', 1),
	(14, 'Bumdes 1234', 1, 'lengkok', '087766644253', 'riadi@gmai.com', 'adibumdes', '', '12345', '', '', 1),
	(15, 'Bumdes', 1, 'selala', '087851922063', 'haha@gmail.com', 'Harry', '', '123', '', '', 1),
	(16, 'Toko sehati', 0, 'lengkok', '087766644253', 'suryawangi@gmail.com', 'tokosuryawangi', '', '12345', '', '', 1),
	(17, 'traditional cake house', 0, 'Jln.Tgkh.zainuddin Abdul Majid', '087758745728', 'zainularipin1225@gmail.com', 'Enongfood', '1589731639084.jpg', '123456789', '', '', 2),
	(18, 'R4A', 0, 'Rumah sehat', '082179959409', 'alijoangs@gmail.com', 'abiyyu', '', '123456', '', '', 2),
	(19, 'sejahtera', 0, 'KRS', '087742263114', 'aliebp78@gmail.com', 'UD ALIYA', '1589731695849.jpg', '123456', '', '', 2),
	(20, 'Kelayu Harapan', 0, 'Peresak Timur', '087851922063', 'tanjung@hmail.com', 'Kelayu', '', '123', '', '', 2),
	(21, 'haqqi_yur', 1, 'pengaluran rt/rw:005/002 kel. suryawangi kec.labuhan haji kab. lombok timur,, ', '081805226896', 'haqqiabdul56@gmail.com', 'haqqiazmi', '1589834568460.jpg', 'Azmi1997', '', '', 1),
	(22, 'Oke Lombok', 0, 'Lendang Bedurik', '0819-7785-4019', 'juanzeen27@gmail.com', 'Zainuri', '', 'Okelombok27', '', '', 2),
	(23, 'BuLe Baper', 0, 'Kebun baru rt. 11 Sandubaya Selong', '087763137290', 'ayhay7078@gmail.com', 'yahya', '', 'yahya', '', '', 233),
	(24, 'SELVIA MANDIRI', 0, 'suralaga lauk kul-kul', '085338514402', 'pakrijal45@gmail.com', 'Selvia', '', 'alhamdulillah', '', '', 3),
	(25, 'Teh tubruk dj lombok ', 0, 'Jl TGH Muhammad Faisal (depan gapura porda) ', '082339474189', 'zaenulamri880@gmail.com', 'Amri ', '1589862253216.jpg', '300795', '', '', 3),
	(26, 'BERKAH JAYA', 0, 'Gang Mimbar, Peresak Timur', '087852034387', 'yunitasukses042@gmail.com', 'yunitaaziza', '', '111111', '', '', 3),
	(27, 'berkah', 0, 'klayiii', '087766644253', 'berkah@gmail.com', 'adi', '1589955068245.jpg', '12345', '', '', 3),
	(29, 'alfamart', 0, 'jln. cut nyak dien no 100', '082339776528', 'dhani.lankmania@gmail.com', 'maspuk12', '1589981788086.jpg', 'dani love', '', '', 3),
	(30, 'barokah', 1, 'gang mimbar', '087854271711', 'yunitasukses042@gmail.com', 'yusufrahman', '', '11111', '', '', 2),
	(31, 'Muh. Saipul Zohri', 0, 'Jln. Nurul Iman No.5\r\nDesa Terara, Kec. Terara - Lombok Timur', '087832333165', 'saipulzohri91@gmail.com', 'hidrochepon.farm', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', '', 2),
	(32, 'Dipe', 0, 'Fhgkkfkk', '087585444566', 'lombokcover@gmail.com', 'Dipe', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', '', 1),
	(34, 'bumdes Surya', 1, 'dasqn bantek', '087766644253', 'adi@gmail.com', 'bumdessurya', '', '12345', '', '', 1),
	(35, 'Wirda Tani', 0, 'Letok Desa Rumbuk Timur', '087763586064', 'denganpacu@gmail.com', 'Muhammad Riadi', '', '1sampai9', '', '', 3),
	(36, 'UD Sari Mulia', 0, 'dusun Bagek gaet RT 05 DESA POHGADING TIMUR KECAMATAN pringgabaya', '08175714513', 'azmirial@ymail.com', 'Sari Mulia', '', 'Sarimulia', '', '', 3),
	(37, 'BUMDes Ijobalit', 1, 'Ijobalit, Labuhan H., Kabupaten Lombok Timur, Nusa Tenggara Barat', '081999706606', 'rilengi763@gmail.com', 'Halimatussakdiah', '', 'Halimah', '', '', 9),
	(38, 'Toko Ojik', 0, 'pancor sanggeng', '087863301421', 'berugakitlombok@gmail.com', 'sup12', '1590137067872.jpg', 'sup12', '', '', 3),
	(39, 'Toko ku', 0, 'Lengkok', '087870832344', 'toko@gmail.com', 'tokoku', '', '25d55ad283aa400af464c76d713c07ad', '', '', 1),
	(40, 'Tokomu', 0, 'Lengkok', '087766644253', 'riadi@gmail.com', 'Tokomu', '', '25d55ad283aa400af464c76d713c07ad', '', '', 1),
	(41, 'UD.Mandiri', 0, 'Lengkok', '087870832344', 'adi@gmail.com', 'udmandiri', '', '25d55ad283aa400af464c76d713c07ad', '', '', 2),
	(42, 'BuLe BaPer', 0, 'Rt. 11 Kebun Baru Sandubaya Selong', '08123730192', 'arnilasandi@gmail.com', 'Arnila Sandi', '', '4fb6455e0132c79627e7ef6606d20016', '', '', 3),
	(44, 'Toko Mandiri', 0, 'lengkok', '087766644253', 'ad@gmail.com', 'Fatdi', '', '25d55ad283aa400af464c76d713c07ad', '', '', 1),
	(45, 'Toko bumdes', 0, 'sinyiur2', '087766644253', 'adi@gmail.com', 'pardi', '', '25d55ad283aa400af464c76d713c07ad', '', '', 3),
	(46, 'Kios Khasafa', 0, 'Teko Lauk Desa Teko', '081917954037', 'rherhonggo@gmail.com', 'heriku', '', 'f8701e5e12e11940da9fa9d57d44d8bf', '', '', 1),
	(47, 'SEKOLAH TIGA MENIT', 1, 'Dsn. Letok, Desa, Rumbuk Tim., Sakra, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83671', '087750008855', 'sekolahtigamenit@gmail.com', 'Marjan', '', '25d55ad283aa400af464c76d713c07ad', '', '', 1),
	(48, 'Tani Sejahtera', 0, 'KRS Kampung Baru RT 007', '087742263114', 'aline290907@gmail.com', 'Muhamad ali', '', 'e10adc3949ba59abbe56e057f20f883e', '', '', 1),
	(49, 'bumdes paokmotong', 1, 'desapaokmotong', '087763305916', 'wahyudipe6@gmail.com', 'wahyu', '', '34318bc46a273c50de79961df852c496', '', '', 2),
	(50, 'Dedy Shop', 1, 'punik agung desa kesik kec.masbagik', '087863363008', 'punik4gung@gmail.com', 'Dedy', '', '827ccb0eea8a706c4c34a16891f84e7b', '', '', 2),
	(51, 'paokmotongbumdes', 1, 'desapaokmotong', '087763305916', 'wahyudipe6@gmail.com', 'paokmotong', '', '34318bc46a273c50de79961df852c496', '', '', 2),
	(52, 'adi toko', 1, 'jalan mulu jadian kagak', '087763305916', 'wahyudipe6@gmail.com', 'adu', '', '68a89f784400685af50c21f5fbeb02f1', '', '', 2),
	(53, 'unit dagang', 0, 'dusun sinyiur', '087766644253', 'adi@gmail.com', 'ftadi', '', '25d55ad283aa400af464c76d713c07ad', '', '', 2),
	(54, 'Umkm ku', 0, 'lengkok', '087870832344', 'adi@gmail.com', 'riadioke', '', '25d55ad283aa400af464c76d713c07ad', '', '', 3),
	(55, 'umkmku', 0, 'Lengkok', '087766644253', 'riadi@gmail.com', 'Riadi123', '', '25d55ad283aa400af464c76d713c07ad', '', '', 3),
	(56, 'umkm warung', 0, 'Lengkok', '087766644253', 'warung@gmail.com', 'adi67', '', '25d55ad283aa400af464c76d713c07ad', '', '', 3),
	(57, 'Toko tanjung', 0, 'tanjung', '087851922063', 'tanjung@gamil.com', 'harry12', '', '25d55ad283aa400af464c76d713c07ad', '', '', 3),
	(58, 'Amak Dolah', 0, 'dusun wakan', '087863301421', 'ojik@gmail.com', 'dolah', '', '8f4f8d29b921d20c621ad868ede36830', '', '', 3),
	(59, 'paokmotongbumdes', 1, 'jalan mulu jadian kagak', '087763305916', 'wahyudipe6@gmail.com', 'wahyu123', '', '32c9e71e866ecdbc93e497482aa6779f', '', '', 1),
	(60, 'Erma Agus Sriana', 0, 'Jalan.Tgh.umar no 106 kelayu utara selong lombok timur', '085333240966', 'elsiana_mibu@yahoo.com', 'Nana', '', '6301eb9be5c8d10c4540915528064437', '', '', 1),
	(61, 'amak ojik', 0, 'oik', '087863301421', 'fahrur@gmail.com', 'ojik1234', '', '1f9f375df0ea10a6dbfd1afa69a5f498', '', '', 1),
	(62, 'oke mandiri', 1, 'Jor paremas', '087870832344', 'adi@gmail.com', 'okejk', '', '25d55ad283aa400af464c76d713c07ad', '', '', 30),
	(63, 'Mandiri', 0, 'Lengkok rt/rw 004/005', '087766644253', 'adi23@gmail.com', 'fathurriadi23', '', '202cb962ac59075b964b07152d234b70', '', '', 177),
	(64, 'djjfjf', 1, 'adi', '087766644253', 'adi23', 'adi', '', '37693cfc748049e45d87b8c7d8b9aacd', '', '', 0),
	(65, 'Mandiri2', 0, 'Lengkok 12', '087766644253', 'adi23@gmai.com', 'riadi45', '', '25d55ad283aa400af464c76d713c07ad', '', '', 177),
	(66, 'poteng21', 0, 'Lengkok', '0819177802477', 'poteng@gmail.com', 'Khairul fikri', '', '25d55ad283aa400af464c76d713c07ad', '', '', 177),
	(67, 'poteng12', 0, 'lengkok', '087766644253', 'adi@gmail.com', 'khairulfikri', '', '25d55ad283aa400af464c76d713c07ad', '', '', 177),
	(68, 'Central Poteng ambon', 0, 'Lengkok', '085932557015', 'potenglengkok@gmail.com', 'Fathurriadi12', '', '25d55ad283aa400af464c76d713c07ad', '', '', 177);
/*!40000 ALTER TABLE `suplayer` ENABLE KEYS */;

-- Dumping structure for table eladeslo_db_lades.tampil_data_ongkir
CREATE TABLE IF NOT EXISTS `tampil_data_ongkir` (
  `nama_desa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ongkir` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table eladeslo_db_lades.tampil_data_ongkir: ~0 rows (approximately)
/*!40000 ALTER TABLE `tampil_data_ongkir` DISABLE KEYS */;
/*!40000 ALTER TABLE `tampil_data_ongkir` ENABLE KEYS */;

-- Dumping structure for view eladeslo_db_lades.tampil_semua_daftar_barang
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `tampil_semua_daftar_barang` (
	`nama_barang` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`desa` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`kecamatan` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`kabupaten` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for table eladeslo_db_lades.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL DEFAULT '',
  `tgl_lahir` varchar(50) NOT NULL DEFAULT '',
  `nama` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `jk` varchar(50) NOT NULL DEFAULT '',
  `alamat` text NOT NULL,
  `desa` varchar(50) NOT NULL,
  `telpon` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `status_nikah` varchar(30) NOT NULL,
  `longitude` text NOT NULL,
  `lattitude` text NOT NULL,
  `verified` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

-- Dumping data for table eladeslo_db_lades.user: ~71 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `nik`, `tgl_lahir`, `nama`, `gambar`, `jk`, `alamat`, `desa`, `telpon`, `email`, `password`, `kecamatan`, `kabupaten`, `status_nikah`, `longitude`, `lattitude`, `verified`) VALUES
	(1, 'ojik', '8-5-2020', 'FAHRURROZI', 'dagingayam.jpg', 'L', 'pan', 'Pancor', '087863301421', '', 'ojik', 'Selong', 'Lombok Timur', '', '', '', 1),
	(2, 'harrylicious', '8-5-1999', 'harrylicious', '1589290611643.jpg', 'L', 'Peresak Timur', 'Kembang Kerang', '087851922063', '', '12345', 'Selong', 'Lombok Timur', '', '', '', 1),
	(3, 'ali', '31-12-1978', 'muhamad', '', 'L', 'kembang kerang', 'Kembang Kerang', '082179959409', '', '123456', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(4, 'zainularipin72', '25 12 1994', 'zainul aripin', '', 'L', 'jln.tgkh.zainuddin abdul majid', 'Pancor', '08523712523', '', 'Lamasia2234@', 'Selong', 'Lombok Timur', '', '', '', 1),
	(5, 'izaaa', '27', 'izzaMrdn', '', 'P', 'kampung baru,ledang', 'Kelayu Utara', '085239098705', '', 'akucintakamu', 'Selong', 'Lombok Timur', '', '', '', 1),
	(6, 'Sunan', '13-10-2000', 'Sunan', '', 'L', 'Selong', 'Selong', '087863363008', '', '12345', 'Selong', 'Lombok Timur', '', '', '', 1),
	(7, 'aldi', '20-04-1998', 'aldi', '', 'L', 'masbagik', 'Kelayu Jorong ', '087763305916', '', 'wahyu', 'Selong', 'Lombok Timur', '', '', '', 1),
	(8, '23adi', '8-5-1996', 'Riadi', '', 'L', 'Lengkok rt/004 rw009', 'Suryawangi', '087766644253', '', '12345', 'Labuhan Haji', 'Lombok Timur', 'Belum nikah', '', '', 1),
	(9, 'huhu', '10-5-2006', 'Hehe', '', 'L', 'Dasan Bantek', 'Suryawangi', '087851922063', '', '1sampai8', 'Labuhan Haji', 'Lombok Timur', '', '', '', 0),
	(10, 'hu', '10-5-2006', 'Hehe', '', 'L', 'Dasan Bantek', 'Suryawangi', '087851922063', '', '1sampai8', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(11, 'Dedi', '10-5-2020', 'Dedi', '', 'L', 'suryawangi', 'Suryawangi', '087863363008', '', '12345', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(12, 'adi123', '10-5-2020', 'Fathurriadi', '', 'L', 'Kembang kerang', 'Kembang Kerang', '0877870832344', '', '12345', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(13, 'adi', '22-5-2020', 'Riadi berhasil', '1589594138717.jpg', 'L', 'Kembang kerang', 'Kembang Kerang', '087870832344', '', '12345', 'Aikmel', 'Lombok Timur', 'belum nikah', '', '', 1),
	(14, '5203073112780192', '31-12-1978', 'muhamad ali', '', 'L', 'kembang kerang street', 'Kembang Kerang', '082179959409', '', '123456', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(15, '5203170308990003', '10-5-1995', 'Harry Sunaryo', '', 'L', 'Aikmel dusun pangkon', 'Kembang Kerang', '087851922063', '', '123', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(16, 'riadi23', '10-5-2020', 'riadu', '', 'L', 'kembang kerang', 'Kembang Kerang', '087766644253', '', '12345', 'Aikmel', 'Lombok Timur', '', '', '', 0),
	(17, 'zainularipin72@', '25 12 1994', 'zainu aripin', '1589264329523.png', 'L', 'jln.tgkh.zainuddin abdul majid', 'Pancor', '087758745728', '', 'Zainularipin123@', 'Selong', 'Lombok Timur', '', '', '', 1),
	(18, 'admin', '10-5-2020', 'osks', '', 'L', 'jaba', 'Lenek Baru', '087863301421', '', 'admin', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(19, '5203072707820002', '27', 'heri setiawan', '', 'L', 'rt 01, sekarteja kecamtan selong, lotim', 'Sekarteja', '081916098765', '', 'sekarteja1234', 'Selong', 'Lombok Timur', '', '', '', 1),
	(20, 'Dedi2', '11-5-2000', 'Dedi', '', 'L', 'kembang kerang', 'Kembang Kerang', '087863363008', '', '12345', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(21, 't', '100690', 't', '', 'L', 'tt', 'Pancor', '08', '', 'tt', 'Selong', 'Lombok Timur', '', '', '', 0),
	(22, 'tt', '100690', 'tt', '', 'L', 'tt', 'Pancor', '08', '', 'tt', 'Selong', 'Lombok Timur', '', '', '', 1),
	(23, 'BUMDES', '28-9-2000', 'BUMDES BINA SEJAHTERA', '', 'L', 'jalan jurusan segara anak jurusan suela km 2', 'Kembang Kerang', '087761583621', '', '12345', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(24, 'user', '11-5-2020', 'ojik', '', 'L', 'tes', 'Labuhan Haji', '087863301421', '', 'user', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(25, '123', '11-5-2020', 'ojik', '', 'L', 'pancor', 'Kembang Kerang', '087863301421', '', '123', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(26, 'adi12356', '11-5-1996', 'Fathurriadiw', '', 'L', 'kembang kerang', 'Kembang Kerang', '087863301421', '', '12345', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(27, 'ofiq', '3-1-1994', 'rohman taufiq', '', 'L', 'rohman taufiq', 'Kelayu Selatan', '087763344310', '', 'cinta321', 'Selong', 'Lombok Timur', '', '', '', 1),
	(28, 'M. Kamarudin', '14-9-1990', 'M. Kamarudin', '', 'L', 'Kembang Kerang Lauk', 'Kembang Kerang', '087756667499', '', '12345', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(29, 'sahwan', '13-5-2020', 'sahwan mayadi', '', 'L', 'kembang kerang', 'Kembang Kerang', '087863389214', '', '131276', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(30, 'masbagik', '4 september 1999', 'rini', '', 'P', 'kembang kerang', 'Kembang Kerang', '08175705879', '', '12345', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(31, '5203', '11-5-1997', 'Hariadi', '', 'L', 'kelayu', 'Kelayu Selatan', '087852922063', '', '123', 'Selong', 'Lombok Timur', '', '', '', 1),
	(32, '12345678', '11-5-2014', 'Harry', '', 'L', 'ke', 'Kelayu Selatan', '087851922063', '', '123', 'Selong', 'Lombok Timur', '', '', '', 1),
	(33, 'adi43', '11-5-1996', 'riadi', '', 'L', 'kembang kerang', 'Kembang Kerang', '087766644253', '', '12345', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(34, 'adi35', '13-5-2020', 'fathurriadi', '1589552805212.jpg', 'L', 'kembang kerang ', 'Kembang Kerang', '087870832344', '', '12345', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(35, 'adi57', '14-5-2020', 'fathurriadi', '1589719380567.jpg', 'L', 'jln kembang kerang', 'Kembang Kerang', '087870832344', '', '12345', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(36, 'alie', '31-12-1978', 'Muhamad Ali', '1589590880883.jpg', 'L', 'Kampung Baru KRS', 'Majidi', '082179959409', '', '123456', 'Selong', 'Lombok Timur', '', '', '', 1),
	(37, 'geges86', '12-8-1986', 'Agus Khairi', '', 'L', 'Kelayu Selatan', 'Selong', '081917071886', '', '12081986', 'Selong', 'Lombok Timur', '', '', '', 1),
	(38, 'enong12', '25 12 1994', 'enong', '1589559891958.jpg', 'L', 'jln.tgkh.zainuddin abdul majid', 'Pancor', '087758745728', '', '12345678', 'Selong', 'Lombok Timur', '', '', '', 1),
	(39, 'Sunandar', '16-5-2001', 'Sunan2', '', 'L', 'kembang kerang', 'Kembang Kerang', '087863363008', '', '123456', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(40, 'Danu', '20-5-1999', 'Danu', '', 'P', 'Gawah Kedatuk', 'Kembang Kerang Daye ', '087703250966', '', 'danu123', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(41, 'asror.mz', '16-5-1990', 'Asror mz', '', 'L', 'Jalan dr. Cipto Mangunkusumo no.16', 'Majidi', '085934854396', '', 'zulrohmi2018', 'Selong', 'Lombok Timur', '', '', '', 1),
	(42, 'irma', '30 september 1996', 'irma', '', 'P', 'Kelayu Selatan', 'Kelayu Utara', '087759204552', '', 'maulidi15', 'Selong', 'Lombok Timur', '', '', '', 1),
	(43, 'aliya', '4-12-1978', 'aliya', '', 'P', 'kelayu selatan', 'Kelayu Selatan', '087742263114', '', '123456', 'Selong', 'Lombok Timur', '', '', '', 0),
	(44, 'haqqi', '29-3-1997', 'abdul haqqi azmi', '', 'L', 'pengaluran rt/rw:005/002', 'Suryawangi', '081805226896', '', 'Azmi1997', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(45, 'adi23', '318-5-1996', 'riadi', '1589732592134.jpg', 'P', 'selong', 'Selong', '087766644253', '', '12345', 'Selong', 'Lombok Timur', '', '', '', 1),
	(46, 'faisalhdt', '10-10-1995', 'faisal', '', 'L', 'mamben lauk', 'Aikmel Timur', '081918232658', '', '1sampai8()', 'Aikmel', 'Lombok Timur', '', '', '', 0),
	(47, 'ecanghdt', '10-10-1995', 'ecang', '', 'L', 'mamben lauk', 'Majidi', '081918232658', '', '1sampai8', 'Selong', 'Lombok Timur', '', '', '', 1),
	(48, 'AzizJr', '30', 'Muhammad aziz', '', 'L', 'suela', 'Aikmel', '085339015252', '', 'neymarjr11', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(49, 'muhamad juandi', '18-5-2020', 'muhamad juandi', '', 'L', 'suryawangi', 'Suryawangi', '081938474935', '', 'juanda123', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(50, 'faisaja', '18-5-2020', 'fais', '', 'L', 'kembang kerang', 'Kembang Kerang', '081918232658', '', '1sampai8', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(51, 'juandi123', '18-11-1996', 'muhamad juandi', '', 'L', 'pengaluran ', 'Suryawangi', '081938474935', '', 'juanda123', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(52, 'Kang Zuhrowardi', '1967-02-04', 'Zuhrowardi', '', 'L', 'Kelayu Selatan', 'Kelayu Selatan', '085937083845', 'zuhrojackys@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Selong', '', '', '', '', 0),
	(53, 'ojik12', '19-5-2020', 'ojik', '', 'L', 'pancor', 'Kumbung', '087863301421', '', 'ojik12', 'Masbagik', 'Lombok Timur', '', '', '', 1),
	(54, 'oke12', '2020-05-19', 'ojik', '', 'L', 'desa wakan', 'Jerowaru', '087863301421', 'admin@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Jerowaru', '', '', '', '', 0),
	(55, 'Selvia Mandiri', '18 Pebruari 2007', 'selvia', '', 'P', 'lauk KUL-KUL', 'Suralaga', '085338514402', '', 'alhamdulillah', 'Suralaga', 'Lombok Timur', '', '', '', 0),
	(56, 'maini', '4-5-2000', 'maini', '', 'P', 'tanjah-anjah', 'Pengkelak Mas', '087861712423', '', 'maininew', 'Sakra Barat', 'Lombok Timur', '', '', '', 1),
	(57, 'amri', '30-7-1995', 'amri', '', 'L', 'Jln TGH MUHAMMAD FAISAL ', 'Selong', '082339474189', '', '300795', 'Selong', 'Lombok Timur', '', '', '', 1),
	(58, 'gibran', '19-5-1990', 'Gibran', '', 'L', 'Jln TGH MUHAMMAD FAISAL ', 'Selong', '082339474189', '', '12345', 'Selong', 'Lombok Timur', '', '', '', 1),
	(59, 'Yunita Aziza', '17-6-1997', 'Yunita Alfiana Aziza', '', 'P', 'Gang Mimbar, Peresak Timur', 'Kelayu Selatan', '087852034387', '', '17Yunita', 'Selong', 'Lombok Timur', '', '', '', 1),
	(60, 'yunitaaziza', '17-6-1997', 'Yunita Alfiana Aziza', '', 'P', 'Gang Mimbar, Peresak Timur', 'Kelayu Selatan', '087852034387', '', '17Yunita', 'Selong', 'Lombok Timur', '', '', '', 1),
	(61, 'wahyu', '20-5-2020', 'wahyu paokmotong', '', 'L', 'paokmotng', 'Sekarteja', '087763305916', '', 'wahyu', 'Selong', 'Lombok Timur', '', '', '', 1),
	(62, 'wahyu@gmail.com', '20-5-2020', 'wahyu paokmotong', '', 'L', 'paokmotng', 'Sekarteja', '087763305916', '', 'wahyu', 'Selong', 'Lombok Timur', '', '', '', 0),
	(63, 'adi45', '19-5-1996', 'adi', '1589898766991.jpg', 'L', 'jlan nyelundup', 'Kelayu Selatan', '087766644253', '', '12345', 'Selong', 'Lombok Timur', '', '', '', 1),
	(65, 'Hair_Eco', '31-12-1978', 'Hairudin', '', 'P', 'Lingkok Dudu Lingk. Pancoran Manis Kel. Suryawangi', 'Suryawangi', '081915931932', '', 'kariza150412', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(66, 'EcoRacing_Hair', '31-12-1978', 'Hairudin', '', 'L', 'Lingkok Dudu Lingkungan Pancoran Manis', 'Suryawangi', '081915931932', '', 'kariza150412', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(67, 'EcoRacingLKDD', '08-07-1990', 'hairudin', '', 'L', 'Lingkok Dudu Lingkungan Pancoran Manis', 'Suryawangi', '081997955676', '', 'kariza150412', 'Labuhan Haji', 'Lombok Timur', '', '', '', 0),
	(68, 'alfiana aziza', '17-6-1997', 'Yunita Alfiana Aziza', '', 'P', 'Gang Mimbar', 'Kelayu Selatan', '081917074355', '', '11111', 'Selong', 'Lombok Timur', '', '', '', 1),
	(69, 'Marzuki', '17-3-1989', 'Marzuki', '', 'L', 'Simpang Gang Mentari Pancor Lauk Masjid', 'Pancor', '085238982248', '', '7777777', 'Selong', 'Lombok Timur', '', '', '', 1),
	(70, 'fikri', '18-5-2020', 'Haerul Al Fikri', '', 'L', 'dasqn bantek', 'Suryawangi', '085932557015', '', '12345678', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(71, 'Halqi', '22-5-2020', 'Muhammad Halqi', '', 'L', 'BTN Permata Bhayangkari Gemilang Blok IV No. 39', 'Rakam', '081997795777', '', 'Yasambada123', 'Selong', 'Lombok Timur', '', '', '', 1),
	(75, 'wewadi', '22-5-2020', 'Fathurriadi', '', 'L', 'lengkok', 'Suryawangi', '087766644253', '', '12345678', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(76, 'adiwah', '22-5-2020', 'riadi', '', 'L', 'lengkok', 'Labuhan Haji', '0877766644253', '', '$2y$10$Al.4OcqUO9kQCDGoolUa5eWf1FjbhethTdeeHA0N8cU', 'Labuhan Haji', 'Lombok Timur', '', '', '', 0),
	(77, '123adi', '22-5-2020', 'adi', '', 'L', 'lengkok', 'Sekaroh', '087766644253', '', '12345', 'Jerowaru', 'Lombok Timur', '', '', '', 1),
	(78, 'izaa', '27-4-2001', 'mardiana izzati', '', 'P', 'kampung baru,ledang', 'Kelayu Utara', '085239098705', '', 'akucintakamu', 'Selong', 'Lombok Timur', '', '', '', 1),
	(79, 'user12', '22-5-2020', 'ojik12', '', 'L', 'dusun kelotok', 'Wakan', '087863301421', '', 'user12', 'Jerowaru', 'Lombok Timur', '', '', '', 1),
	(80, 'ojik12345', '22-5-2020', 'MOH.FAHRURROZI', '', 'L', 'dusun kelotok desa wakan', 'Wakan', '087863097837', '', 'ojik12345', 'Jerowaru', 'Lombok Timur', '', '', '', 1),
	(81, 'izzati', '27-04-2001', 'Mardian izzati', '', 'P', 'kampung baru,ledang', 'Kelayu Utara', '087849289199', '', 'akucintakamu', 'Selong', 'Lombok Timur', '', '', '', 1),
	(82, 'agis', '25-8-2000', 'supri', '', 'L', 'wanasaba', 'Pohgading', '087865784015', '', 'jingkeng', 'Pringgabaya', 'Lombok Timur', '', '', '', 1),
	(83, 'dilfa', '11121991', 'dilfa wandrie', '', 'L', 'Nenggung Timur', 'Poakmotong', '081907918418', '', '133118', 'Masbagik', 'Lombok Timur', '', '', '', 1),
	(84, 'syafrudin', '18', 'muhammad syafrudin', '', 'L', 'tunjang utara, desa paokmotong', 'Poakmotong', '087750007449', '', '23062019', 'Masbagik', 'Lombok Timur', '', '', '', 1),
	(85, 'anwar', '22-5-2020', 'zaki', '', 'L', 'gapuk lauk', 'Gapuk', '087763217489', '', '12345', 'Suralaga', 'Lombok Timur', '', '', '', 0),
	(86, 'hendra', '3-3-2000', 'Hendrawan', '', 'L', 'Rungkang desa jenggik', 'Jenggik', '087863962495', '', 'hendra123', 'Terara', 'Lombok Timur', '', '', '', 0),
	(87, 'wahyusaja', '23-5-2020', 'wahyu', '', 'P', 'wahajshskahsksns', 'Masbagik Utara', '087763305916', '', 'wahyu', 'Masbagik', 'Lombok Timur', '', '', '', 1),
	(91, 'zainul12', '23-5-2020', 'Zainul fikri', '', 'L', 'Lingkok Dudu', 'Suryawangi', '087766644253', '', '7c222fb2927d828af22f592134e8932480637c0d', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(92, 'Khairul12', '24-5-2020', 'Khairul al fikri', '', 'L', 'Lengkok', 'Suryawangi', '087766644253', '', '', 'Labuhan Haji', 'Lombok Timur', '', '', '', 0),
	(93, 'vovia12', '24-5-2020', 'Vovia Sandi', '', 'L', 'Lengkok', 'Suryawangi', '087766644253', '', '$2y$10$KZubFvD/0AMNZFIxPC/8TeVDcvQDu2mPtEp3c7rvjd3', 'Labuhan Haji', 'Lombok Timur', '', '', '', 0),
	(94, 'azizgink', '24-5-2020', 'Azizzurahman', '', 'L', 'Teros', 'Teros', '087766644253', '', '$2y$10$Mnb2e1XK3Ep00qBBoQyB.eztJVGrALm8qSXPJz9d9ET', 'Labuhan Haji', 'Lombok Timur', '', '', '', 0),
	(95, 'T1234', '24-5-2020', 'Tajudin', '', 'L', 'Dasan bantek', 'Suryawangi', '087766644253', '', '25d55ad283aa400af464c76d713c07ad', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(96, 'dhany12', '20-1-2020', 'al hamdhany', '1590332434307.jpg', 'L', 'jalan. jalananananana', 'Suryawangi', '082339776528', '', 'dani love', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(98, 'murdin13', '17-5-1987', 'Murdin', '', 'L', 'Lengkok', 'Suryawangi', '087870832344', '', '25d55ad283aa400af464c76d713c07ad', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(99, 'hadi12', '16-5-1999', 'khairul Hadi', '1590393771837.jpg', 'L', 'Lengkok', 'Suryawangi', '087870832344', '', '25d55ad283aa400af464c76d713c07ad', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(100, 'jihad22', '22-6-1994', 'jihad', '', 'L', 'gubuk timuk', 'Korleko', '082339744596', '', 'jihad22', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(101, 'aliebp', '29-9-1978', 'alie', '', 'P', 'KRS Kampung Baru RT 007', 'Majidi', '0821779959409', '', '123456', 'Selong', 'Lombok Timur', '', '', '', 1),
	(102, 'adi1234', '26-5-2020', 'riadi', '', 'L', 'wakan', 'Wakan', '087766644253', '', '25d55ad283aa400af464c76d713c07ad', 'Jerowaru', 'Lombok Timur', '', '', '', 1),
	(103, 'adi89', '28-5-2020', 'Fathurriadi', '', 'L', 'Lengkok', 'Suryawangi', '087766644253', '', '25d55ad283aa400af464c76d713c07ad', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(104, 'adi70', '30-5-2020', 'fathurriadi', '1590919676895.jpg', 'L', 'lengkok2', 'Suryawangi', '087870832344', '', '25d55ad283aa400af464c76d713c07ad', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(105, 'Deddy', '13-10-1983', 'Deddy', '1590913311743.jpg', 'L', 'Keruak', 'Kesik', '087863363008', '', '25d55ad283aa400af464c76d713c07ad', 'Masbagik', 'Lombok Timur', 'Menikah', '', '', 1),
	(106, 'ratna_vm14', '14-4-2002', 'Ratnasari Vidia Maharani', '1590914645957.jpg', 'P', 'Jln. Menceh Surubaya', 'Menceh', '081938651668', '', '53a1743d077dc7296f17eaede3dc0460', 'Sakra Timur', 'Lombok Timur', '', '', '', 1),
	(107, 'enong123', '25 12 1994', 'zainul', '', 'L', 'jln.tgkh.zainuddin abdul majid', 'Pancor', '087758745728', '', '432f45b44c432414d2f97df0e5743818', 'Selong', 'Lombok Timur', '', '', '', 0),
	(108, 'zainul45', '25121994', 'zainularipin', '1590918537919.jpg', 'L', 'jln.tgkh.zainuddin abdul majid', 'Pancor', '087758745728', '', 'bdb2c4ffaaaed6b062ea037a49d91124', 'Selong', 'Lombok Timur', '', '', '', 1),
	(109, 'dhany13', '18-5-2020', 'al hamdhany', '', 'L', 'jln sepit. kec kejepit', 'Sepit', '082339776529', '', 'aa04b56a00b3406b1d24c389e928338f', 'Keruak', 'Lombok Timur', '', '', '', 1),
	(110, 'dhany14', '10-08-1997', 'al hamdhany', '1590923120380.jpg', 'L', 'jln. sepit kec. kejepit', 'Sepit', '082339776528', '', 'aa04b56a00b3406b1d24c389e928338f', 'Keruak', 'Lombok Timur', 'jomblo', '', '', 1),
	(111, 'sadina', '28-10-1978', 'sadina abiyyu', '', 'L', 'jalan Mawar KRS', 'Majidi', '087742263114', '', '25d55ad283aa400af464c76d713c07ad', 'Selong', 'Lombok Timur', '', '', '', 1),
	(112, 'adi47', '31-5-2020', 'riagi', '', 'L', 'pulau maringkik', 'Pulau Maringkik', '087766644253', '', '25d55ad283aa400af464c76d713c07ad', 'Keruak', 'Lombok Timur', '', '', '', 1),
	(113, 'harrylicious03', '1-6-1944', 'Harry Sunaryo', '', 'L', 'Jero', 'Jerowaru', '087851922063', '', '25d55ad283aa400af464c76d713c07ad', 'Jerowaru', 'Lombok Timur', '', '', '', 1),
	(114, 'shaemanderly', '03 Juni 1994', 'Shae Manderly', '', 'P', 'srywng', 'Suryawangi', '085740504053', '', 'ee2da41de9eb269679017db7613bc778', 'Labuhan Haji', 'Lombok Timur', '', '', '', 1),
	(115, 'Sambada', '13-1-2013', 'Sambada', '', 'L', 'BTN Permata Bhayangkari Gemilang Blok IV No. 39', 'Rakam', '081997795777', '', 'a3cb152cac580961cc6f12cf1219cc7c', 'Selong', 'Lombok Timur', '', '', '', 1),
	(116, 'kien', '1-6-2020', 'Aswasulasikin', '', 'L', 'universitas Hamzanwadi', 'Selong', '082138643474', '', '955d9cf58a108c69b2583931aface850', 'Selong', 'Lombok Timur', '', '', '', 1),
	(117, 'fahrurrozi', '1-6-1984', 'Muh Fahrurrozi', '', 'L', 'Dames Damai', 'Dames', '081904000021', '', '361987b91857517006d17cfd5e1e8a80', 'Suralaga', 'Lombok Timur', '', '', '', 1),
	(118, '@lalumpaozan', '10-6-1996', 'Lalu Muhammad Paozan', '', 'L', 'Dusun Paok Lombok Timuk RT 1', 'Paoklombok', '081999762024', '', '2e59ea7b16af853a49e3427bcc5dad59', 'Suralaga', 'Lombok Timur', '', '', '', 1),
	(119, 'samsullutfi', '17', 'Samsul Lutfi', '', 'L', 'Selong', 'Selong', '082340001769', '', '25d55ad283aa400af464c76d713c07ad', 'Selong', 'Lombok Timur', '', '', '', 1),
	(120, 'jenz.fikry@gmail.com', '30-4-1996', 'M. Zainuddin Fikri', '', 'L', 'RT 15 DUSUN DASAN BARU SELATAN', 'Bagek Payung Selatan', '085338489342', '', '073042e0fa23d09de00cecdd219d6bab', 'Suralaga', 'Lombok Timur', '', '', '', 1),
	(121, 'shulhan', '17-9-1988', 'shulhan', '', 'L', 'rensing bat', 'Rensing Bat', '087740503040', '', '37b3869d06ef99c5a67e45f1e100384c', 'Sakra Barat', 'Lombok Timur', '', '', '', 1),
	(122, 'shulhan hadi', '1-6-1988', 'shulhan hadi', '', 'L', 'remsing bat', 'Rensing Bat', '085940869618', '', '37b3869d06ef99c5a67e45f1e100384c', 'Sakra Barat', 'Lombok Timur', '', '', '', 1),
	(123, 'yahya', '20', 'Yahya', '', 'L', 'rt. 11 Kebun Baru Sandubaya selong', 'Sandubaya', '087763137290', '', '8037245412c9b445ec153a8b2690e5b6', 'Selong', 'Lombok Timur', '', '', '', 1),
	(124, 'Subarman', '01 Januari 1987', 'Subarman', '', 'L', 'Desa Kerumut', 'Kerumut', '081915882578', '', 'bc76a4f5dd8ce57068fdc0e8a9867261', 'Pringgabaya', 'Lombok Timur', '', '', '', 1),
	(125, 'Yani', '17 april 1986', 'Ahmad Yani', '', 'L', 'nenggung Timur desa paokmotong kecamatan masbagik', 'Poakmotong', '087750000758', '', 'dd4b21e9ef71e1291183a46b913ae6f2', 'Masbagik', 'Lombok Timur', '', '', '', 0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for trigger eladeslo_db_lades.insert_log_detail_pesanan
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `insert_log_detail_pesanan` AFTER INSERT ON `log_detail_pesanan` FOR EACH ROW BEGIN
	
	INSERT INTO log_detail_pesanan VALUES (NEW.id_transaksi, NEW.id_barang, NEW.qty, NEW.total_harga, NEW.kode_order, NEW.status);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger eladeslo_db_lades.insert_log_pesan_update_barang
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `insert_log_pesan_update_barang` AFTER INSERT ON `pesan` FOR EACH ROW BEGIN
	update barang
	set barang.stok = barang.stok-new.qty 
	where barang.id_barang = new.id_barang;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger eladeslo_db_lades.log_barang_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `log_barang_after_insert` AFTER INSERT ON `log_barang` FOR EACH ROW BEGIN

	INSERT INTO log_barang VALUES(NEW.nama_barang,NEW.keterangan,NEW.harga,NEW.stok,NEW.status,NEW.gambar,NEW.satuan,NEW.slug,NEW.id_kategori,NEW.id_suplayer);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger eladeslo_db_lades.log_ongkir_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `log_ongkir_after_insert` AFTER INSERT ON `log_ongkir` FOR EACH ROW BEGIN
INSERT INTO log_ongkir VALUES (NEW.id_ongkir,NEW.ongkir,NEW.id_desa);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for view eladeslo_db_lades.tampil_semua_daftar_barang
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `tampil_semua_daftar_barang`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `tampil_semua_daftar_barang` AS select `b`.`nama_barang` AS `nama_barang`,`d`.`desa` AS `desa`,`d`.`kecamatan` AS `kecamatan`,`d`.`kabupaten` AS `kabupaten` from ((`barang` `b` join `data_kawasan` `d`) join `suplayer` `s`) where ((`b`.`id_suplayer` = `s`.`id_suplayer`) and (`s`.`id_desa` = `d`.`id_kawasan`));

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
