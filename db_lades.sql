-- --------------------------------------------------------
-- Host:                         185.224.137.11
-- Server version:               10.2.31-MariaDB - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table u614985963_lades.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_admin`),
  KEY `fkIdx_103` (`id_desa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `id_desa`) VALUES
	(1, 'Wahyu', 'admin', '1sampai8', 1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(5) NOT NULL,
  `stok` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `slug` text NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_suplayer` int(5) NOT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `FK_barang_kategori` (`id_kategori`),
  KEY `FK_barang_suplayer` (`id_suplayer`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.barang: ~14 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
REPLACE INTO `barang` (`id_barang`, `nama_barang`, `keterangan`, `harga`, `stok`, `status`, `gambar`, `slug`, `id_kategori`, `id_suplayer`) VALUES
	(1, 'Beras 1KG', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 12000, 39, 'tersedia', 'Ilustrasi-beras2.png', 'beras-1kg.html', 1, 1),
	(2, 'Telur 1 tere', 'bagus', 45000, 45, 'Tersedia', 'telur.jpg', 'Telur-1-tere', 1, 2),
	(5, 'Minyak Goreng', 'bagus', 15000, 12, 'Tersedia', 'minyak.jpg', 'Minyak-Goreng', 1, 3),
	(8, 'Gula Pasir', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum                                                                                                ', 12000, 6, 'tersedia', '5gulapasir.jpg', 'gula-pasir.html', 2, 1),
	(9, 'cumi cumi 1kg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 18500, 7, 'tersedia', '3921456_ffaa99a1-356a-4bf9-9683-12e85f5d326e_430_430.jpg', 'cumi-cumi-1kg.html', 1, 1),
	(10, 'Daging Sapi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum                                                                                                ', 13500, 3, 'tersedia', 'ilustrasi-daging-sapi-kurban.jpg', 'daging-sapi.html', 1, 1),
	(11, 'Daging Ayam ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 40000, 12, 'tersedia', '5340282_e89d7053-90e7-4381-96db-001e6ced3f33_664_442.png', 'daging-ayam.html', 1, 1),
	(12, 'Telur Ayam', 'Bagus', 20000, 5, 'Tersedia', 'telur.jpg', 'Telur-Ayam', 1, 1),
	(13, 'Susu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 1500, 9, 'tersedia', 'S000040071-41.jpg', 'susu.html', 2, 1),
	(14, 'sayuran', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 5000, 11, 'tersedia', '3b3d387f-0163-4b11-8bb5-12e0e4930cdb_169.jpg', 'sayuran.html', 1, 1),
	(15, 'Air Galon', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum                                                                                                                                ', 7000, 32, 'tersedia', 'VIT_19_Liter_Galon_Kosong___Gallon_Tanpa_Isi_Air_Mineral.jpg', 'air-galon.html', 2, 1),
	(16, 'sayur ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 30000, 23, 'tersedia', '3b3d387f-0163-4b11-8bb5-12e0e4930cdb_1691.jpg', 'sayur.html', 1, 1),
	(39, 'Panadol', 'bagus', 2000, 15, 'Tersedia', 'dagingayam.jpg', 'panadol.html', 3, 1),
	(43, 'Daginsapi', 'Fresh', 100000, 44, 'Tersedia', 'dagingsapi.jpg', 'daginsapi.html', 1, 5);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.daftar_sebaran_paket
CREATE TABLE IF NOT EXISTS `daftar_sebaran_paket` (
  `id_daftar` int(5) NOT NULL AUTO_INCREMENT,
  `dusun` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `jml_penerima` int(5) NOT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.daftar_sebaran_paket: ~0 rows (approximately)
/*!40000 ALTER TABLE `daftar_sebaran_paket` DISABLE KEYS */;
/*!40000 ALTER TABLE `daftar_sebaran_paket` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.data_kawasan
CREATE TABLE IF NOT EXISTS `data_kawasan` (
  `id_kawasan` int(5) NOT NULL AUTO_INCREMENT,
  `desa` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kawasan`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.data_kawasan: ~24 rows (approximately)
/*!40000 ALTER TABLE `data_kawasan` DISABLE KEYS */;
REPLACE INTO `data_kawasan` (`id_kawasan`, `desa`, `kabupaten`, `kecamatan`) VALUES
	(1, 'Suryawangi', 'Lombok Timur', 'Labuhan Haji'),
	(2, 'Ijobalit', 'Lombok Timur', 'Labuhan Haji'),
	(3, 'Geres', 'Lombok Timur', 'Labuhan Haji'),
	(4, 'Banjarsari', 'Lombok Timur', 'Labuhan Haji'),
	(5, 'Kertasari', 'Lombok Timur', 'Labuhan Haji'),
	(6, 'Korleko', 'Lombok Timur', 'Labuhan Haji'),
	(7, 'Korleko Selatan', 'Lombok Timur', 'Labuhan Haji'),
	(8, 'Labuhan haji', 'Lombok Timur', 'Labuhan Haji'),
	(9, 'Peneda gandor', 'Lombok Timur', 'Labuhan Haji'),
	(10, 'Tanjung', 'Lombok Timur', 'Labuhan Haji'),
	(11, 'Teros', 'Lombok Timur', 'Labuhan Haji'),
	(12, 'Tirtanadi', 'Lombok Timur', 'Labuhan Haji'),
	(13, 'Dengen Timur', 'Lombok Timur', 'Selong'),
	(14, 'Dengen ', 'Lombok Timur', 'Selong'),
	(15, 'Kelayu Jorong', 'Lombok Timur', 'Selong'),
	(16, 'Kelayu Selatan', 'Lombok Timur', 'Selong'),
	(17, 'Kelayu utara', 'Lombok Timur', 'Selong'),
	(18, 'Kembang Sari', 'Lombok Timur', 'Selong'),
	(19, 'Majidi', 'Lombok Timur', 'Selong'),
	(20, 'Pancor', 'Lombok Timur', 'Selong'),
	(21, 'Rakam', 'Lombok Timur', 'Selong'),
	(22, 'Sandu Baya', 'Lombok Timur', 'Selong'),
	(23, 'Sekarteja', 'Lombok Timur', 'Selong'),
	(24, 'Selong', 'Lombok Timur', 'Selong');
/*!40000 ALTER TABLE `data_kawasan` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.desa
CREATE TABLE IF NOT EXISTS `desa` (
  `id_desa` int(5) NOT NULL,
  `id_kec` int(5) NOT NULL,
  `nama_desa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.desa: ~44 rows (approximately)
/*!40000 ALTER TABLE `desa` DISABLE KEYS */;
REPLACE INTO `desa` (`id_desa`, `id_kec`, `nama_desa`) VALUES
	(1, 1, 'Suryawangi'),
	(2, 1, 'Ijobalit'),
	(3, 1, 'Geres'),
	(4, 1, 'Banjarsari'),
	(5, 1, 'Kerta Sari'),
	(6, 1, 'Korleko'),
	(7, 1, 'Korleko Selatan'),
	(8, 1, 'Labuhan Haji'),
	(9, 1, 'Peneda Gandor'),
	(10, 1, 'Tanjung'),
	(11, 1, 'Teros'),
	(12, 1, 'Tirnadi'),
	(13, 2, 'Denggen Timur'),
	(14, 2, 'Denggen'),
	(15, 2, 'Kelayu Jorong '),
	(16, 2, 'Kelayu Selatan'),
	(17, 2, 'Kelayu Utara'),
	(18, 2, 'Kembang Sari'),
	(19, 2, 'Majidi'),
	(20, 2, 'Pancor'),
	(21, 2, 'Rakam'),
	(22, 2, 'Sandu Baya'),
	(23, 2, 'Sekarteja'),
	(24, 2, 'Selong'),
	(122, 3, 'Aik Prapa'),
	(123, 3, 'Aikmel'),
	(124, 3, 'Aikmel Barat'),
	(125, 3, 'Aikmel Timur'),
	(126, 3, 'Aikmel Utara'),
	(127, 3, 'Bagik Nyaka Santri'),
	(128, 3, 'Kalijaga'),
	(129, 3, 'Kalijaga Baru'),
	(130, 3, 'Kalijaga Selatan'),
	(131, 3, 'Kalijaga Tengah'),
	(132, 3, 'Kalijaga Timur'),
	(133, 3, 'Kembang Kerang'),
	(134, 3, 'Kembang Kerang Daye '),
	(135, 3, 'Keroya'),
	(136, 3, 'Lenek'),
	(137, 3, 'Lenek Baru'),
	(138, 3, 'Lenek Daye'),
	(139, 3, 'Lenek Duren'),
	(140, 3, 'Lenek Kali Bambang'),
	(141, 3, 'Lenek Lauk');
/*!40000 ALTER TABLE `desa` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.detail_jadwal_pengiriman_bantuan
CREATE TABLE IF NOT EXISTS `detail_jadwal_pengiriman_bantuan` (
  `id_detail_jadwal` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `id_penerima` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.detail_jadwal_pengiriman_bantuan: ~0 rows (approximately)
/*!40000 ALTER TABLE `detail_jadwal_pengiriman_bantuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_jadwal_pengiriman_bantuan` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.detail_pesanan
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.detail_pesanan: ~0 rows (approximately)
/*!40000 ALTER TABLE `detail_pesanan` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_pesanan` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.device
CREATE TABLE IF NOT EXISTS `device` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `desa` varchar(50) DEFAULT NULL,
  `token` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.device: ~0 rows (approximately)
/*!40000 ALTER TABLE `device` DISABLE KEYS */;
/*!40000 ALTER TABLE `device` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.device_user
CREATE TABLE IF NOT EXISTS `device_user` (
  `id_token` int(5) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table u614985963_lades.device_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `device_user` DISABLE KEYS */;
REPLACE INTO `device_user` (`id_token`, `id_user`, `token`) VALUES
	(1, 2, 'fhtclPfyXUc:APA91bHF5P01NxPe2hh5UdR03pU0Iyqg0v7aeswuNEB89UsMnPCIoy0yfFlaOG8QqeWAc85ikcwlcEs91M8WsyrwshtZE7yPJGJT8IMBJuYp8jCGmxH7dg25aLOwmGSRe5DF_vwMyute'),
	(2, 8, 'cvWdUEW1bZA:APA91bFh0GsKHAaGrdw2o92sy-HVsA4vVbCgEl4q2WrlWjzk4gAx23yHbEszbdV4PEM1u5ZjxscZyPl3c0QwOWAkVU5-JwOTbHcZi4U8kcauug56LSrk0BnfLZjUZD_GEFX-L3HGoF6T');
/*!40000 ALTER TABLE `device_user` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.ekspedisi_bantuan
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

-- Dumping data for table u614985963_lades.ekspedisi_bantuan: ~0 rows (approximately)
/*!40000 ALTER TABLE `ekspedisi_bantuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `ekspedisi_bantuan` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.info_desa
CREATE TABLE IF NOT EXISTS `info_desa` (
  `id_info` int(5) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `judul` varchar(50) NOT NULL,
  `berita` text NOT NULL,
  `gambar` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `id_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_info`),
  KEY `FK_info_desa_pihak_desa` (`id_desa`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.info_desa: ~8 rows (approximately)
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

-- Dumping structure for table u614985963_lades.jadwal_pengiriman_bantuan
CREATE TABLE IF NOT EXISTS `jadwal_pengiriman_bantuan` (
  `id_jadwal_pengiriman` int(5) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `id_detail_jadwal` int(5) NOT NULL,
  PRIMARY KEY (`id_jadwal_pengiriman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.jadwal_pengiriman_bantuan: ~0 rows (approximately)
/*!40000 ALTER TABLE `jadwal_pengiriman_bantuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwal_pengiriman_bantuan` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.jadwal_pesanan
CREATE TABLE IF NOT EXISTS `jadwal_pesanan` (
  `id_pesanan` int(5) NOT NULL AUTO_INCREMENT,
  `jam_pesan` time DEFAULT NULL,
  `jam_pengepulan` time DEFAULT NULL,
  `jam_pengiriman` time DEFAULT NULL,
  `id_suplayer` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.jadwal_pesanan: ~1 rows (approximately)
/*!40000 ALTER TABLE `jadwal_pesanan` DISABLE KEYS */;
REPLACE INTO `jadwal_pesanan` (`id_pesanan`, `jam_pesan`, `jam_pengepulan`, `jam_pengiriman`, `id_suplayer`) VALUES
	(1, '04:05:00', '15:03:00', '14:01:00', 1);
/*!40000 ALTER TABLE `jadwal_pesanan` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.kabupaten
CREATE TABLE IF NOT EXISTS `kabupaten` (
  `id_kab` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_kab`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.kabupaten: ~1 rows (approximately)
/*!40000 ALTER TABLE `kabupaten` DISABLE KEYS */;
REPLACE INTO `kabupaten` (`id_kab`, `nama`) VALUES
	(1, 'Lombok Timur');
/*!40000 ALTER TABLE `kabupaten` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.kategori: ~3 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
REPLACE INTO `kategori` (`id_kategori`, `kategori`) VALUES
	(1, 'Sembako'),
	(2, 'Bumbu Masakan'),
	(3, 'Kesehatan');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.kecamatan
CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kec` int(5) NOT NULL,
  `id_kab` int(5) NOT NULL,
  `nama_kec` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.kecamatan: ~3 rows (approximately)
/*!40000 ALTER TABLE `kecamatan` DISABLE KEYS */;
REPLACE INTO `kecamatan` (`id_kec`, `id_kab`, `nama_kec`) VALUES
	(1, 1, 'Labuhan Haji'),
	(2, 1, 'Selong'),
	(3, 1, 'Aikmel');
/*!40000 ALTER TABLE `kecamatan` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.kurir
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.kurir: ~0 rows (approximately)
/*!40000 ALTER TABLE `kurir` DISABLE KEYS */;
/*!40000 ALTER TABLE `kurir` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.log_barang
CREATE TABLE IF NOT EXISTS `log_barang` (
  `id_barang` int(5) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(5) NOT NULL,
  `stok` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_suplayer` int(5) NOT NULL,
  PRIMARY KEY (`id_barang`) USING BTREE,
  KEY `FK_barang_kategori` (`id_kategori`) USING BTREE,
  KEY `FK_barang_suplayer` (`id_suplayer`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table u614985963_lades.log_barang: ~27 rows (approximately)
/*!40000 ALTER TABLE `log_barang` DISABLE KEYS */;
REPLACE INTO `log_barang` (`id_barang`, `nama_barang`, `keterangan`, `harga`, `stok`, `status`, `gambar`, `id_kategori`, `id_suplayer`) VALUES
	(1, 'Beras 1KG', 'Bagus', 12000, 0, 'Tersedia', 'beras.jpg', 1, 1),
	(2, 'Telur 1 tere', 'bagus', 45000, 0, 'Tersedia', 'telur.jpg', 1, 2),
	(3, 'asel', 'bagus', 458, 58, 'tersedia', 'asel.jpg', 2, 2),
	(4, 'Panadol', 'bagus', 2500, 48, 'tersedia', 'panadol.jpg', 3, 2),
	(5, 'minyak goreng', 'bagus', 15000, 19, 'Tersedia', 'minyak.jpg', 1, 3),
	(6, 'Minyak Goreng', '-', 1000, 1, 'Ya', '-', 1, 1),
	(7, 'tes', '-', 1000, 1, 'Tersedia', '-', 1, 1),
	(8, 'Gula Pasir', '', 12000, 6, 'Tersedia', '-', 1, 1),
	(9, 'Minyak Goreng', '', 18500, 8, 'Tersedia', '-', 1, 1),
	(10, 'Daging Sapi', '', 13500, 3, 'Tersedia', '-', 1, 1),
	(11, 'Daging Ayam	', '', 40000, 12, 'Tersedia', '-', 1, 1),
	(12, 'Telur Ayam', '', 20000, 5, 'Tersedia', '-', 1, 1),
	(13, 'Susu', '', 1500, 9, 'Tersedia', '-', 1, 1),
	(14, 'Gas', '', 19000, 12, 'Tersedia', '-', 1, 1),
	(15, 'Air Galon', '', 7000, 34, 'Tersedia', '-', 2, 1),
	(16, 'sayur nara', 'gsakk', 30000, 23, 'Tersedia', 'daniel-korpai-iopITwyUcTA-unsplash.jpg', 3, 1),
	(17, 'baju koko', 'asdalsdl', 300000, 23, 'Tersedia', 'IMG-20190824-WA0034.jpg', 1, 1),
	(39, 'Panadol', 'bagus', 2000, 20, 'Tersedia', 'dagingayam.jpg', 3, 1),
	(40, 'Minyak goreng', 'Bagus', 5000, 20000, 'Tersedia', '<p>The filetype you are attempting to upload is not allowed.</p>', 2, 2),
	(41, 'Kangkung', 'fresh', 1500, 100, 'Tersedia', '32kangkung.jpg', 1, 4),
	(42, 'Cabai', 'cabai kualitas tinggi', 45000, 20, 'Tersedia', 'cabai.jpg', 2, 4),
	(43, 'Daginsapi', 'Fresh', 100000, 50, 'Tersedia', 'dagingsapi.jpg', 1, 5),
	(44, 'tes', 'tes', 1, 1, 'Tersedia', '<p>You did not select a file to upload.</p>', 1, 6),
	(45, 'tes', 'tes', 30000, 1, 'Tersedia', '<p>The filetype you are attempting to upload is not allowed.</p>', 1, 0),
	(46, 'tes', 'tes', 3, 1, 'Tersedia', '<p>The filetype you are attempting to upload is not allowed.</p>', 1, 6),
	(47, 'tes', 'tes', 30000, 1, 'Tersedia', '<p>The filetype you are attempting to upload is not allowed.</p>', 1, 6),
	(48, 'tes &lt;img ', 'tes', 1, 1, 'Tersedia', '<p>The filetype you are attempting to upload is not allowed.</p>', 1, 6);
/*!40000 ALTER TABLE `log_barang` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.log_detail_pesanan
CREATE TABLE IF NOT EXISTS `log_detail_pesanan` (
  `id_transaksi` int(5) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) DEFAULT NULL,
  `id_barang` int(5) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `total_harga` int(5) DEFAULT NULL,
  `kode_order` varchar(20) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table u614985963_lades.log_detail_pesanan: ~2 rows (approximately)
/*!40000 ALTER TABLE `log_detail_pesanan` DISABLE KEYS */;
REPLACE INTO `log_detail_pesanan` (`id_transaksi`, `id_user`, `id_barang`, `qty`, `total_harga`, `kode_order`, `status`) VALUES
	(9, 1, 5, 7, NULL, 'KC-20200415-1', 0),
	(10, 1, 4, 7, NULL, 'KC-20200415-1', 0);
/*!40000 ALTER TABLE `log_detail_pesanan` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.log_ongkir
CREATE TABLE IF NOT EXISTS `log_ongkir` (
  `id_ongkir` int(5) NOT NULL AUTO_INCREMENT,
  `ongkir` int(5) NOT NULL,
  `id_kawasan` int(5) NOT NULL,
  PRIMARY KEY (`id_ongkir`) USING BTREE,
  KEY `fkIdx_169` (`id_kawasan`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table u614985963_lades.log_ongkir: ~20 rows (approximately)
/*!40000 ALTER TABLE `log_ongkir` DISABLE KEYS */;
REPLACE INTO `log_ongkir` (`id_ongkir`, `ongkir`, `id_kawasan`) VALUES
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
	(20, 3000, 20);
/*!40000 ALTER TABLE `log_ongkir` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.log_pesan
CREATE TABLE IF NOT EXISTS `log_pesan` (
  `id_order` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_pesan` date DEFAULT NULL,
  `jam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qty` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `kode_order` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_order`) USING BTREE,
  KEY `FK_pesan_barang` (`id_barang`) USING BTREE,
  KEY `FK_pesan_user` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table u614985963_lades.log_pesan: ~7 rows (approximately)
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

-- Dumping structure for table u614985963_lades.log_suplayer
CREATE TABLE IF NOT EXISTS `log_suplayer` (
  `id_suplayer` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `bumdes` int(1) NOT NULL DEFAULT 0,
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

-- Dumping data for table u614985963_lades.log_suplayer: ~3 rows (approximately)
/*!40000 ALTER TABLE `log_suplayer` DISABLE KEYS */;
REPLACE INTO `log_suplayer` (`id_suplayer`, `nama`, `bumdes`, `alamat`, `kontak`, `email`, `username`, `password`, `longitude`, `lattitude`, `id_desa`) VALUES
	(1, 'Fathuriadi', 0, 'Dasan Bantek', '087861234123', 'riadiberhasil@gmail.com', 'adi', 'kim', '123', '123', 1),
	(2, 'Aziz', 0, 'Teros', '08765444', 'aziz@gmail.com', 'aziz', '12', '346', '55', 2),
	(3, 'majidindah', 0, 'majidi', '0877', 'awy@gmil.com', 'adf', 'kkk', '7789', '7888', 3);
/*!40000 ALTER TABLE `log_suplayer` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.ongkir
CREATE TABLE IF NOT EXISTS `ongkir` (
  `id_ongkir` int(5) NOT NULL AUTO_INCREMENT,
  `ongkir` int(5) NOT NULL,
  `id_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_ongkir`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.ongkir: ~20 rows (approximately)
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
	(20, 3000, 20);
/*!40000 ALTER TABLE `ongkir` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.paket
CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(5) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `qty` int(5) NOT NULL,
  `berat` int(5) NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.paket: ~0 rows (approximately)
/*!40000 ALTER TABLE `paket` DISABLE KEYS */;
/*!40000 ALTER TABLE `paket` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.pemberitahuan
CREATE TABLE IF NOT EXISTS `pemberitahuan` (
  `id_pemberitahuan` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `jam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `level_urgensi` int(5) NOT NULL,
  `id_desa` int(5) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_pemberitahuan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.pemberitahuan: ~1 rows (approximately)
/*!40000 ALTER TABLE `pemberitahuan` DISABLE KEYS */;
REPLACE INTO `pemberitahuan` (`id_pemberitahuan`, `tgl`, `jam`, `judul`, `isi`, `level_urgensi`, `id_desa`) VALUES
	(1, '2020-04-06', '2020-04-07 06:10:15', 'Jumlah Positif Terus Menurun', 'Alhamdulillah, laporan terakhir dari Kementerian Kesehatan menyampaikan tingkat pasien yang positif Corona menurun', 1, 0);
/*!40000 ALTER TABLE `pemberitahuan` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.penerima
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

-- Dumping data for table u614985963_lades.penerima: ~2 rows (approximately)
/*!40000 ALTER TABLE `penerima` DISABLE KEYS */;
REPLACE INTO `penerima` (`id_penerima`, `no_kk`, `nik`, `nama`, `jk`, `umur`, `alamat`, `desa`, `telpon`, `kecamatan`, `kabupaten`, `status_nikah`, `longitude`, `lattitude`, `telah_menerima`) VALUES
	(4, 987987987, 2147483647, 'wahyu', 'l', 20, 'paok', 'bum', 876557, 'hjh', 'sjdhd', '', '', '', 0),
	(5, 987987987, 2147483647, 'wahyu', 'l', 20, 'paok', 'bum', 876557, 'hjh', 'sjdhd', '', '', '', 0);
/*!40000 ALTER TABLE `penerima` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.pesan
CREATE TABLE IF NOT EXISTS `pesan` (
  `id_order` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `tgl_pesan` date DEFAULT NULL,
  `jam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.pesan: ~17 rows (approximately)
/*!40000 ALTER TABLE `pesan` DISABLE KEYS */;
REPLACE INTO `pesan` (`id_order`, `tgl_pesan`, `jam`, `qty`, `total`, `id`, `id_barang`, `id_suplayer`, `kode_order`, `status`) VALUES
	(1, '2020-05-08', '2020-05-08 02:42:28', 1, 48000, 2, 2, 2, 'KB-20200508-2', 2),
	(2, '2020-05-08', '2020-05-08 02:42:28', 1, 48000, 2, 2, 2, 'KB-20200508-2', 2),
	(3, '2020-05-08', '2020-05-08 04:48:50', 1, 1500, 3, 41, 4, 'KB-20200508-3', 2),
	(4, '2020-05-08', '2020-05-08 05:02:14', 1, 45000, 3, 42, 4, 'KB-20200508-3', 2),
	(5, '2020-05-09', '2020-05-09 05:08:56', 1, 48000, 8, 2, 2, 'KB-20200509-8', 0),
	(6, '2020-05-09', '2020-05-09 05:15:13', 1, 7000, 8, 15, 1, 'KB-20200509-8', 0),
	(7, '2020-05-09', '2020-05-09 06:41:02', 1, 48000, 8, 2, 2, 'KB-20200509-8', 0),
	(8, '2020-05-09', '2020-05-09 06:41:52', 1, 48000, 8, 2, 2, 'KB-20200509-8', 0),
	(9, '2020-05-09', '2020-05-09 07:43:21', 1, 10000, 8, 15, 1, 'KB-20200509-8', 0),
	(10, '2020-05-09', '2020-05-09 07:45:50', 1, 8000, 8, 14, 1, 'KB-20200509-8', 0),
	(11, '2020-05-09', '2020-05-09 07:54:11', 1, 21500, 8, 9, 1, 'KB-20200509-8', 0),
	(12, '2020-05-09', '2020-05-09 08:00:55', 1, 48000, 8, 2, 2, 'KB-20200509-8', 0),
	(13, '2020-05-09', '2020-05-09 08:01:56', 1, 48000, 8, 2, 2, 'KB-20200509-8', 0),
	(14, '2020-05-09', '2020-05-09 08:02:14', 1, 48000, 8, 2, 2, 'KB-20200509-8', 0),
	(15, '2020-05-09', '2020-05-09 09:47:43', 5, 500000, 2, 43, 5, 'KB-20200509-2', 0),
	(16, '2020-05-09', '2020-05-09 09:48:34', 1, 5000, 8, 39, 1, 'KB-20200509-8', 0),
	(17, '2020-05-09', '2020-05-09 10:02:21', 1, 100000, 2, 43, 5, 'KB-20200509-2', 0);
/*!40000 ALTER TABLE `pesan` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.pihak_desa
CREATE TABLE IF NOT EXISTS `pihak_desa` (
  `id_desa` int(5) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kontak_kesehatan` varchar(20) NOT NULL,
  `kontak_keamanan` varchar(20) NOT NULL,
  `kontak_khusus` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `tentang_desa` text NOT NULL,
  `kepala_desa` varchar(50) NOT NULL,
  `sekdes` varchar(50) NOT NULL,
  `kamtibmas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.pihak_desa: ~6 rows (approximately)
/*!40000 ALTER TABLE `pihak_desa` DISABLE KEYS */;
REPLACE INTO `pihak_desa` (`id_desa`, `nama_desa`, `alamat`, `telpon`, `email`, `kontak_kesehatan`, `kontak_keamanan`, `kontak_khusus`, `kabupaten`, `kecamatan`, `tentang_desa`, `kepala_desa`, `sekdes`, `kamtibmas`) VALUES
	(1, 'Suryawangi', 'Jl Ogah Dasan Bantek', '087851922063', 'dasban@gmail.com', '082xxx', '081xxx', '087xxx', 'Lombok Timur', 'Labuhan haji', '', '', '', ''),
	(2, 'Pancor', 'Jl pemuda', '0988977777', 'teros@gmail.com', '09988', '88889', '8888', 'Lombok Timur', 'Selong', '', '', '', ''),
	(3, 'Selong', 'Jl majidi', '8765555', 'majidi@gmail.com', '08888', '98888', '88888', 'Lombok Timur', 'Selong', '', '', '', ''),
	(4, 'Sekarteja', 'Jln sekarteja', '0875432167', 'sekarteja@gmail.com', '098777', '3334', '8888', 'Lombok Timur', 'Selong', '', '', '', ''),
	(5, 'Kelayu selatan', 'Selong', '087763305916', 'Kelayu@gmail.com', '08777', '08777', '08777', '', '', '', '', '', ''),
	(6, 'Kembang Kerang', 'kembang kerang', '08765544', 'riadisuksesamin100persen@gmail.com', '0876655', '09876665', '0987666', '', '', '', '', '', '');
/*!40000 ALTER TABLE `pihak_desa` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.supadmin
CREATE TABLE IF NOT EXISTS `supadmin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_pihak_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table u614985963_lades.supadmin: ~1 rows (approximately)
/*!40000 ALTER TABLE `supadmin` DISABLE KEYS */;
REPLACE INTO `supadmin` (`id_admin`, `nama_admin`, `username`, `password`, `id_pihak_desa`) VALUES
	(1, 'Harry', 'admin', 'admin', 1);
/*!40000 ALTER TABLE `supadmin` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.super_admin
CREATE TABLE IF NOT EXISTS `super_admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table u614985963_lades.super_admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `super_admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `super_admin` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.suplayer
CREATE TABLE IF NOT EXISTS `suplayer` (
  `id_suplayer` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `bumdes` int(1) NOT NULL DEFAULT 0,
  `alamat` text NOT NULL,
  `kontak` varchar(30) NOT NULL,
  `email` varchar(59) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `longitude` text NOT NULL,
  `lattitude` text NOT NULL,
  `id_desa` int(5) NOT NULL,
  PRIMARY KEY (`id_suplayer`),
  KEY `id_desa` (`id_desa`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.suplayer: ~5 rows (approximately)
/*!40000 ALTER TABLE `suplayer` DISABLE KEYS */;
REPLACE INTO `suplayer` (`id_suplayer`, `nama`, `bumdes`, `alamat`, `kontak`, `email`, `username`, `password`, `longitude`, `lattitude`, `id_desa`) VALUES
	(1, 'gghhh', 0, 'jln bla bla', '6669999', 'ttyyhh@.com', 'fgjjk', '12345', '', '', 1),
	(2, 'Mandiri toko', 0, 'jln bla bla', '087766644253', 'riadi@gmail.com', 'mandiritoko', '12345', '', '', 1),
	(3, 'Bumdes kelayu', 1, 'kelayu selatan', '08766644253', 'adi@gmail.com', 'bumdeksl', '12345', '', '', 5),
	(4, 'Bumdes Kembang Kerang', 1, 'kembang kerang', '0877665555', 'kembang@gamil.com', 'bumdes', '12345', '', '', 6),
	(5, 'Mandiri Toko', 0, 'kembang kerang', '08776664425', 'adi@gmail.com', 'mandiritoko2', '12345', '', '', 6);
/*!40000 ALTER TABLE `suplayer` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.tampil_data_ongkir
CREATE TABLE IF NOT EXISTS `tampil_data_ongkir` (
  `nama_desa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ongkir` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table u614985963_lades.tampil_data_ongkir: ~0 rows (approximately)
/*!40000 ALTER TABLE `tampil_data_ongkir` DISABLE KEYS */;
/*!40000 ALTER TABLE `tampil_data_ongkir` ENABLE KEYS */;

-- Dumping structure for table u614985963_lades.user
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table u614985963_lades.user: ~8 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `nik`, `tgl_lahir`, `nama`, `gambar`, `jk`, `alamat`, `desa`, `telpon`, `email`, `password`, `kecamatan`, `kabupaten`, `status_nikah`, `longitude`, `lattitude`, `verified`) VALUES
	(1, 'ojik', '8-5-2020', 'FAHRURROZI', '', 'L', 'pan', 'Pancor', '087863301421', '', 'ojik', 'Selong', 'Lombok Timur', '', '', '', 1),
	(2, 'harrylicious', '8-5-1999', 'harrylicious', '', 'L', 'Peresak Timur', 'Kembang Kerang', '087851922063', '', '12345', 'Selong', 'Lombok Timur', '', '', '', 1),
	(3, 'ali', '31-12-1978', 'muhamad', '', 'L', 'kembang kerang', 'Kembang Kerang', '082179959409', '', '123456', 'Aikmel', 'Lombok Timur', '', '', '', 1),
	(4, 'zainularipin72', '25 12 1994', 'zainul aripin', '', 'L', 'jln.tgkh.zainuddin abdul majid', 'Pancor', '08523712523', '', 'Lamasia2234@', 'Selong', 'Lombok Timur', '', '', '', 1),
	(5, 'izaaa', '27', 'izzaMrdn', '', 'P', 'kampung baru,ledang', 'Kelayu Utara', '085239098705', '', 'akucintakamu', 'Selong', 'Lombok Timur', '', '', '', 1),
	(6, 'Sunan', '13-10-2000', 'Sunan', '', 'L', 'kembang kerang', 'Selong', '087863363008', '', '12345', 'Selong', 'Lombok Timur', '', '', '', 1),
	(7, 'aldi', '20-04-1998', 'aldi', '', 'L', 'masbagik', 'Kelayu Jorong ', '087763305916', '', 'wahyu', 'Selong', 'Lombok Timur', '', '', '', 1),
	(8, '23adi', '8-5-1996', 'Riadi', '', 'L', 'Lengkok rt/004 rw009', 'Suryawangi', '087766644253', '', '12345', 'Labuhan Haji', 'Lombok Timur', 'Belum nikah', '', '', 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for trigger u614985963_lades.insert_log_barang
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `insert_log_barang` AFTER INSERT ON `barang` FOR EACH ROW BEGIN
	
	INSERT INTO log_barang VALUES (NEW.id_barang, NEW.nama_barang, NEW.keterangan, NEW.harga, NEW.stok, NEW.status, NEW.gambar, NEW.id_kategori, NEW.id_suplayer);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger u614985963_lades.insert_log_detail_pesanan
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `insert_log_detail_pesanan` AFTER INSERT ON `log_detail_pesanan` FOR EACH ROW BEGIN
	
	INSERT INTO log_detail_pesanan VALUES (NEW.id_transaksi, NEW.id_barang, NEW.qty, NEW.total_harga, NEW.kode_order, NEW.status);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger u614985963_lades.insert_log_ongkir
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `insert_log_ongkir` AFTER INSERT ON `ongkir` FOR EACH ROW BEGIN
	
	INSERT INTO log_ongkir VALUES (NEW.id_ongkir, NEW.ongkir, NEW.id_kawasan);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger u614985963_lades.insert_log_pesan_update_barang
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `insert_log_pesan_update_barang` AFTER INSERT ON `pesan` FOR EACH ROW BEGIN
	update barang
	set barang.stok = barang.stok-new.qty 
	where barang.id_barang = new.id_barang;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
