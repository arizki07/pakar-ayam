-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2023 pada 16.23
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayam-pakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cf_user`
--

CREATE TABLE `cf_user` (
  `id` int(11) NOT NULL,
  `nama_nilai` varchar(100) NOT NULL,
  `cf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cf_user`
--

INSERT INTO `cf_user` (`id`, `nama_nilai`, `cf`) VALUES
(1, 'Tidak Yakin', 0.1),
(2, 'Hampir Tidak Yakin', 0.2),
(3, 'Kemungkinan Tidak Yakin', 0.3),
(4, 'Mungkin Tidak Yakin', 0.4),
(5, 'Tidak Tahu', 0.5),
(6, 'Mungkin', 0.6),
(7, 'Kemungkinan Besar', 0.7),
(8, 'Hampir Yakin', 0.8),
(9, 'Yakin', 0.9),
(10, 'Sangat Yakin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_penyakit` int(20) NOT NULL,
  `nama_user` varchar(250) NOT NULL,
  `cf` float(4,2) NOT NULL,
  `presentase` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `tanggal`, `id_penyakit`, `nama_user`, `cf`, `presentase`) VALUES
(101, '2023-06-20 06:03:15', 18, 'dasdas', 0.09, 9),
(102, '2023-06-20 06:04:04', 19, 'sfsad', 0.03, 3),
(103, '2023-06-21 04:57:25', 18, 'imam', 0.67, 66.71),
(104, '2023-06-21 19:00:41', 19, 'jhsjd', 0.37, 37),
(105, '2023-06-22 09:06:39', 21, 'djfdf', 0.04, 4),
(106, '2023-06-22 09:07:01', 21, 'djfdf', 0.04, 4),
(107, '2023-06-22 09:08:36', 21, 'djfdf', 0.04, 4),
(108, '2023-06-23 07:58:53', 20, 'jjhj', 0.08, 8),
(109, '2023-06-23 07:59:16', 19, 'gdfd', 0.05, 5),
(110, '2023-06-23 07:59:56', 21, 'hsdjhdjs', 0.71, 70.7),
(111, '2023-06-23 08:00:14', 19, 'shdjs', 0.37, 37),
(112, '2023-06-23 08:51:57', 20, 'JHFJF', 0.16, 16),
(113, '2023-06-23 09:10:36', 19, 'jsahdj', 0.37, 37),
(114, '2023-06-23 09:12:15', 19, 'jsahdj', 0.37, 37),
(115, '2023-06-23 09:13:26', 19, 'as', 0.15, 15),
(116, '2023-06-23 11:42:11', 19, 'as', 0.15, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa_gejala`
--

CREATE TABLE `diagnosa_gejala` (
  `id` int(20) NOT NULL,
  `id_diagnosa` int(20) NOT NULL,
  `id_gejala` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `diagnosa_gejala`
--

INSERT INTO `diagnosa_gejala` (`id`, `id_diagnosa`, `id_gejala`) VALUES
(6, 4, 55),
(7, 4, 56),
(8, 4, 60),
(9, 4, 63),
(10, 4, 74),
(11, 5, 47),
(12, 6, 55),
(13, 6, 56),
(14, 6, 60),
(15, 6, 63),
(16, 7, 55),
(17, 7, 56),
(18, 7, 60),
(19, 7, 63),
(20, 8, 47),
(21, 8, 50),
(22, 9, 47),
(23, 9, 50),
(24, 10, 47),
(25, 10, 48),
(26, 11, 55),
(27, 11, 55),
(28, 11, 55),
(29, 11, 56),
(30, 11, 56),
(31, 11, 56),
(32, 11, 60),
(33, 11, 60),
(34, 11, 63),
(35, 11, 63),
(36, 12, 55),
(37, 12, 56),
(38, 12, 60),
(39, 12, 63),
(40, 13, 55),
(41, 13, 56),
(42, 13, 60),
(43, 13, 63),
(44, 14, 55),
(45, 14, 56),
(46, 14, 60),
(47, 14, 63),
(48, 15, 55),
(49, 15, 56),
(50, 15, 60),
(51, 15, 63),
(52, 16, 55),
(53, 16, 56),
(54, 16, 60),
(55, 16, 63),
(56, 17, 55),
(57, 17, 56),
(58, 17, 60),
(59, 17, 63),
(60, 18, 55),
(61, 18, 56),
(62, 18, 60),
(63, 18, 63),
(64, 19, 55),
(65, 19, 56),
(66, 19, 60),
(67, 19, 63),
(68, 20, 55),
(69, 20, 56),
(70, 20, 60),
(71, 20, 63),
(72, 21, 47),
(73, 21, 48),
(74, 22, 47),
(75, 22, 48),
(76, 23, 47),
(77, 23, 48),
(78, 24, 47),
(79, 24, 48),
(80, 25, 47),
(81, 25, 48),
(82, 26, 47),
(83, 26, 48),
(84, 27, 47),
(85, 27, 48),
(86, 28, 47),
(87, 29, 47),
(88, 29, 48),
(89, 30, 55),
(90, 30, 56),
(91, 30, 60),
(92, 30, 63),
(93, 31, 55),
(94, 31, 56),
(95, 31, 60),
(96, 31, 63),
(97, 32, 55),
(98, 32, 56),
(99, 32, 60),
(100, 32, 63),
(101, 33, 55),
(102, 33, 56),
(103, 33, 60),
(104, 33, 63),
(105, 34, 55),
(106, 34, 56),
(107, 34, 60),
(108, 34, 63),
(109, 35, 55),
(110, 35, 56),
(111, 35, 60),
(112, 35, 63),
(113, 36, 55),
(114, 36, 56),
(115, 36, 60),
(116, 36, 63),
(117, 37, 55),
(118, 37, 56),
(119, 37, 60),
(120, 37, 63),
(121, 38, 55),
(122, 38, 56),
(123, 38, 60),
(124, 38, 63),
(125, 39, 47),
(126, 40, 47),
(127, 41, 47),
(128, 42, 47),
(129, 43, 47),
(130, 44, 55),
(131, 44, 55),
(132, 44, 55),
(133, 44, 56),
(134, 44, 56),
(135, 44, 56),
(136, 44, 60),
(137, 44, 60),
(138, 44, 63),
(139, 44, 63),
(140, 45, 55),
(141, 45, 55),
(142, 45, 55),
(143, 45, 56),
(144, 45, 56),
(145, 45, 56),
(146, 45, 60),
(147, 45, 60),
(148, 45, 63),
(149, 45, 63),
(150, 46, 55),
(151, 46, 55),
(152, 46, 55),
(153, 46, 56),
(154, 46, 56),
(155, 46, 56),
(156, 46, 60),
(157, 46, 60),
(158, 46, 63),
(159, 46, 63),
(160, 47, 55),
(161, 47, 56),
(162, 47, 60),
(163, 47, 63),
(164, 48, 55),
(165, 48, 56),
(166, 48, 60),
(167, 48, 63),
(168, 49, 55),
(169, 49, 56),
(170, 49, 60),
(171, 49, 63),
(172, 50, 55),
(173, 50, 56),
(174, 50, 60),
(175, 50, 63),
(176, 51, 55),
(177, 51, 56),
(178, 51, 60),
(179, 51, 63),
(180, 52, 55),
(181, 52, 56),
(182, 52, 60),
(183, 52, 63),
(184, 53, 55),
(185, 53, 56),
(186, 53, 60),
(187, 53, 63),
(188, 54, 55),
(189, 54, 56),
(190, 54, 60),
(191, 54, 63),
(192, 55, 47),
(193, 55, 50),
(194, 56, 47),
(195, 56, 50),
(196, 57, 47),
(197, 58, 47),
(198, 59, 47),
(199, 60, 47),
(200, 61, 47),
(201, 61, 48),
(202, 62, 55),
(203, 62, 56),
(204, 63, 55),
(205, 63, 56),
(206, 64, 55),
(207, 64, 55),
(208, 64, 55),
(209, 64, 56),
(210, 64, 56),
(211, 64, 56),
(212, 65, 55),
(213, 65, 55),
(214, 65, 55),
(215, 65, 56),
(216, 65, 56),
(217, 65, 56),
(218, 66, 55),
(219, 66, 55),
(220, 66, 55),
(221, 66, 56),
(222, 66, 56),
(223, 66, 56),
(224, 67, 55),
(225, 67, 55),
(226, 67, 55),
(227, 67, 56),
(228, 67, 56),
(229, 67, 56),
(230, 68, 55),
(231, 68, 55),
(232, 68, 55),
(233, 68, 56),
(234, 68, 56),
(235, 68, 56),
(236, 69, 55),
(237, 69, 55),
(238, 69, 55),
(239, 69, 56),
(240, 69, 56),
(241, 69, 56),
(242, 70, 55),
(243, 70, 55),
(244, 70, 55),
(245, 70, 56),
(246, 70, 56),
(247, 70, 56),
(248, 71, 55),
(249, 71, 55),
(250, 71, 55),
(251, 71, 56),
(252, 71, 56),
(253, 71, 56),
(254, 72, 55),
(255, 72, 55),
(256, 72, 55),
(257, 72, 56),
(258, 72, 56),
(259, 72, 56),
(260, 73, 55),
(261, 73, 55),
(262, 73, 55),
(263, 73, 56),
(264, 73, 56),
(265, 73, 56),
(266, 74, 55),
(267, 74, 55),
(268, 74, 55),
(269, 74, 56),
(270, 74, 56),
(271, 74, 56),
(272, 75, 55),
(273, 75, 55),
(274, 75, 55),
(275, 75, 56),
(276, 75, 56),
(277, 75, 56),
(278, 76, 55),
(279, 76, 55),
(280, 76, 55),
(281, 76, 56),
(282, 76, 56),
(283, 76, 56),
(284, 77, 55),
(285, 77, 55),
(286, 77, 55),
(287, 77, 56),
(288, 77, 56),
(289, 77, 56),
(290, 78, 55),
(291, 78, 55),
(292, 78, 55),
(293, 78, 56),
(294, 78, 56),
(295, 78, 56),
(296, 79, 55),
(297, 79, 55),
(298, 79, 55),
(299, 79, 56),
(300, 79, 56),
(301, 79, 56),
(302, 80, 55),
(303, 80, 55),
(304, 80, 55),
(305, 80, 56),
(306, 80, 56),
(307, 80, 56),
(308, 81, 55),
(309, 81, 55),
(310, 81, 55),
(311, 81, 56),
(312, 81, 56),
(313, 81, 56),
(314, 82, 55),
(315, 82, 55),
(316, 82, 55),
(317, 82, 56),
(318, 82, 56),
(319, 82, 56),
(320, 83, 55),
(321, 83, 55),
(322, 83, 55),
(323, 83, 56),
(324, 83, 56),
(325, 83, 56),
(326, 84, 55),
(327, 84, 55),
(328, 84, 55),
(329, 84, 56),
(330, 84, 56),
(331, 84, 56),
(332, 85, 55),
(333, 85, 55),
(334, 85, 55),
(335, 85, 56),
(336, 85, 56),
(337, 85, 56),
(338, 86, 55),
(339, 86, 55),
(340, 86, 55),
(341, 86, 56),
(342, 86, 56),
(343, 86, 56),
(344, 87, 55),
(345, 87, 55),
(346, 87, 55),
(347, 87, 56),
(348, 87, 56),
(349, 87, 56),
(350, 87, 60),
(351, 87, 60),
(352, 87, 63),
(353, 87, 63),
(354, 88, 55),
(355, 88, 55),
(356, 88, 55),
(357, 88, 56),
(358, 88, 56),
(359, 88, 56),
(360, 89, 55),
(361, 89, 55),
(362, 89, 55),
(363, 89, 56),
(364, 89, 56),
(365, 89, 56),
(366, 90, 55),
(367, 90, 55),
(368, 90, 55),
(369, 90, 56),
(370, 90, 56),
(371, 90, 56),
(372, 91, 48),
(373, 92, 55),
(374, 92, 55),
(375, 92, 55),
(376, 92, 56),
(377, 92, 56),
(378, 92, 56),
(379, 93, 50),
(380, 94, 50),
(381, 95, 55),
(382, 95, 55),
(383, 95, 55),
(384, 95, 56),
(385, 95, 56),
(386, 95, 56),
(387, 95, 60),
(388, 95, 60),
(389, 95, 63),
(390, 95, 63),
(391, 95, 74),
(392, 95, 74),
(393, 96, 47),
(394, 97, 55),
(395, 97, 55),
(396, 97, 55),
(397, 97, 56),
(398, 97, 56),
(399, 97, 56),
(400, 98, 55),
(401, 98, 55),
(402, 98, 55),
(403, 98, 56),
(404, 98, 56),
(405, 98, 56),
(406, 98, 60),
(407, 98, 60),
(408, 98, 63),
(409, 98, 63),
(410, 98, 74),
(411, 98, 74),
(412, 99, 55),
(413, 99, 55),
(414, 99, 55),
(415, 99, 56),
(416, 99, 56),
(417, 99, 56),
(418, 100, 55),
(419, 100, 55),
(420, 100, 55),
(421, 100, 56),
(422, 100, 56),
(423, 100, 56),
(424, 101, 47),
(425, 102, 57),
(426, 103, 47),
(427, 103, 48),
(428, 103, 49),
(429, 103, 66),
(430, 103, 67),
(431, 104, 55),
(432, 104, 55),
(433, 104, 55),
(434, 104, 56),
(435, 104, 56),
(436, 104, 56),
(437, 105, 71),
(438, 106, 71),
(439, 107, 71),
(440, 108, 55),
(441, 108, 55),
(442, 108, 55),
(443, 109, 56),
(444, 109, 56),
(445, 109, 56),
(446, 110, 55),
(447, 110, 55),
(448, 110, 55),
(449, 110, 56),
(450, 110, 56),
(451, 110, 56),
(452, 110, 60),
(453, 110, 60),
(454, 110, 63),
(455, 110, 63),
(456, 110, 74),
(457, 110, 74),
(458, 111, 55),
(459, 111, 55),
(460, 111, 55),
(461, 111, 56),
(462, 111, 56),
(463, 111, 56),
(464, 112, 55),
(465, 112, 55),
(466, 112, 55),
(467, 113, 55),
(468, 113, 55),
(469, 113, 55),
(470, 113, 56),
(471, 113, 56),
(472, 113, 56),
(473, 114, 55),
(474, 114, 55),
(475, 114, 55),
(476, 114, 56),
(477, 114, 56),
(478, 114, 56),
(479, 115, 56),
(480, 115, 56),
(481, 115, 56),
(482, 116, 56),
(483, 116, 56),
(484, 116, 56);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(10) UNSIGNED NOT NULL,
  `kode_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`) VALUES
(47, 'G001', 'Ngorok basa'),
(48, 'G002', 'Leleran hidung lengket'),
(49, 'G003', 'Terdapat eskudat berbuih pada mata'),
(50, 'G004', 'Menggeleng-gelengkan kepala'),
(51, 'G005', 'Mengeluarkan nanah dari hidung'),
(52, 'G006', 'Mengengap-engap'),
(53, 'G007', 'Batuk'),
(54, 'G008', 'Bersin'),
(55, 'G009', 'Ayam tampak lesu dan ngantuk'),
(56, 'G010', 'Nafsu makan menurun'),
(57, 'G011', 'Mencret'),
(58, 'G012', 'Jengger dan kepala kebiruan'),
(59, 'G013', 'Kornea menjadi keruh'),
(60, 'G014', 'Sayap menurun'),
(61, 'G015', 'Otot tubuh gemetar'),
(62, 'G016', 'Kejang-kejang'),
(63, 'G017', 'Bulu tampak kusam'),
(64, 'G018', 'Diare berlendir mengotori bulu pantat'),
(65, 'G019', 'Peradangan disekitar dubur dan kloaka'),
(66, 'G020', 'Memator dubur sendiri'),
(67, 'G021', 'Paruh menempel di lantai ketika tidur'),
(68, 'G022', 'Kotoran berwarna putih'),
(69, 'G023', 'Kotoran menempel disekitar dubur'),
(70, 'G024', 'Kloaka tampak putih'),
(71, 'G025', 'Jengger berwarna keabuan'),
(72, 'G026', 'Mata menutup'),
(73, 'G027', 'Luka bergerombol'),
(74, 'G028', 'Lumpuh'),
(75, 'G029', 'Pendarahan gusi'),
(76, 'G030', 'Pendarahan hidung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-05-26-155607', 'App\\Database\\Migrations\\CreateTabelGejala', 'default', 'App', 1685257501, 1),
(2, '2023-05-28-074856', 'App\\Database\\Migrations\\CreateTabelPenyakit', 'default', 'App', 1685261373, 2),
(3, '2023-05-28-130649', 'App\\Database\\Migrations\\Admin', 'default', 'App', 1685279263, 3),
(4, '2023-05-28-133153', 'App\\Database\\Migrations\\CreatTabelAdmin', 'default', 'App', 1685280813, 4),
(9, '2023-05-31-133933', 'App\\Database\\Migrations\\CreateTabelRelasi', 'default', 'App', 1685541722, 5),
(10, '2023-06-09-135455', 'App\\Database\\Migrations\\CreateTabelDiagnosa', 'default', 'App', 1686318942, 6),
(11, '2023-06-09-142720', 'App\\Database\\Migrations\\CreatTabelDiagnosa', 'default', 'App', 1686320878, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(10) UNSIGNED NOT NULL,
  `kode_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `solusi_penyakit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `deskripsi`, `solusi_penyakit`) VALUES
(18, 'P001', 'Ngorok (Cronic respiratory disease CRD)', 'penyakit ini diakibatkan oleh bakteri Mycoplasma galliseptiucum yang menyerang sistem pernapasan ayam.', 'Pengobatan menggunakan antibiotik dapat dilakukan sebanyak 305  hari berturut-turut.'),
(19, 'P002', 'Tetelo (Newcasle disease ND)', 'Newcastle Disease (ND) merupakan penyakit menular akut yang menyerang ayam dan jenis unggas lainnya dengan gejala klinis berupa gangguan pernafasan, pencernaan dan syaraf disertai mortalitas yang sangat tinggi.', 'Proses penurunan sekam dengan bertahap dan lebih terkontrol akan sangat membantu penurunan stress eksternal.'),
(20, 'P003', 'Gumboro (Infections bursal disease IBD)', 'penyakit menular akut pada ayam berumur muda.', 'dengan memberikan air gula merah atau Sorbitol selama 3 hari berturut-turut.'),
(21, 'P004', 'Berak kapur (Pullorum Disease)', 'Menularkan dari induknya melalui anaknya, misalnya telur.  ', 'Pengobatan dapat dilakukan dengan menyuntikan antibiotik, misalnya coccilin, neo terramycin, tetra atau mycomas sesuai dengan dosis yang ditentukan. '),
(22, 'P005', 'Flu burung (Avian Influenza)', 'Penyakit flu burung atau Avian influensa (AI) merupakan penyakit yang disebabkan oleh virus influensa Tipe A subtipe H5N1 dari family Orthomyxoviridae yang menyerang burung/unggas/ayam. ', 'Mencegah kontak antara hewan peka dengan virus AI, Meningkatkan resistensi (pengebalan) dengan vaksinasi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi`
--

CREATE TABLE `relasi` (
  `id_relasi` int(10) UNSIGNED NOT NULL,
  `id_gejala` int(10) NOT NULL,
  `id_penyakit` int(10) NOT NULL,
  `mb` float(4,2) NOT NULL,
  `md` float(4,2) NOT NULL,
  `cf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `relasi`
--

INSERT INTO `relasi` (`id_relasi`, `id_gejala`, `id_penyakit`, `mb`, `md`, `cf`) VALUES
(14, 47, 18, 0.00, 0.00, 0.9),
(15, 48, 18, 0.00, 0.00, 0.7),
(16, 49, 18, 0.00, 0.00, 0.5),
(17, 50, 18, 0.00, 0.00, 0.3),
(18, 51, 18, 0.00, 0.00, 0.4),
(19, 52, 19, 0.00, 0.00, 0.8),
(20, 53, 19, 0.00, 0.00, 0.7),
(21, 54, 19, 0.00, 0.00, 0.7),
(22, 55, 19, 0.00, 0.00, 0.4),
(23, 56, 19, 0.00, 0.00, 0.5),
(24, 57, 19, 0.00, 0.00, 0.3),
(25, 58, 19, 0.00, 0.00, 0.3),
(26, 59, 19, 0.00, 0.00, 0.2),
(27, 60, 19, 0.00, 0.00, 0.7),
(28, 61, 19, 0.00, 0.00, 0.6),
(29, 62, 19, 0.00, 0.00, 0.6),
(30, 55, 20, 0.00, 0.00, 0.4),
(31, 56, 20, 0.00, 0.00, 0.2),
(32, 63, 20, 0.00, 0.00, 0.4),
(33, 64, 20, 0.00, 0.00, 0.6),
(34, 65, 20, 0.00, 0.00, 0.6),
(35, 66, 20, 0.00, 0.00, 0.5),
(36, 67, 20, 0.00, 0.00, 0.9),
(37, 74, 20, 0.00, 0.00, 0.2),
(38, 55, 21, 0.00, 0.00, 0.6),
(39, 56, 21, 0.00, 0.00, 0.2),
(40, 60, 21, 0.00, 0.00, 0.7),
(41, 63, 21, 0.00, 0.00, 0.8),
(42, 68, 21, 0.00, 0.00, 0.9),
(43, 69, 21, 0.00, 0.00, 0.8),
(44, 70, 21, 0.00, 0.00, 0.8),
(45, 71, 21, 0.00, 0.00, 0.4),
(46, 72, 21, 0.00, 0.00, 0.3),
(47, 73, 21, 0.00, 0.00, 0.3),
(48, 64, 22, 0.00, 0.00, 0.2),
(49, 74, 22, 0.00, 0.00, 0.5),
(50, 75, 22, 0.00, 0.00, 0.7),
(51, 76, 22, 0.00, 0.00, 0.7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `cf_user`
--
ALTER TABLE `cf_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diagnosa_gejala`
--
ALTER TABLE `diagnosa_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`id_relasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cf_user`
--
ALTER TABLE `cf_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT untuk tabel `diagnosa_gejala`
--
ALTER TABLE `diagnosa_gejala`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=485;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `relasi`
--
ALTER TABLE `relasi`
  MODIFY `id_relasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
