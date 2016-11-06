-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2016 at 07:50 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `nama`, `counter`, `created_at`, `updated_at`) VALUES
(1, 'kuitansi', 1, '2016-09-22 01:02:43', '2016-09-22 01:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `konflik`
--

CREATE TABLE `konflik` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanah_id` int(10) UNSIGNED NOT NULL,
  `konflik_id` int(10) UNSIGNED NOT NULL,
  `pengaju` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penerima` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `koordinat`
--

CREATE TABLE `koordinat` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanah_id` int(10) UNSIGNED NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_04_23_174350_create_pemilik_table', 1),
('2015_04_28_120649_create_tanah_table', 1),
('2015_04_29_123936_create_surat_sppf_table', 1),
('2015_05_08_173349_create_riwayat_pemilik_tanah_table', 1),
('2015_05_09_101600_create_surat_riwayat_pemilik_tanah_table', 1),
('2015_05_15_151155_create_konflik_table', 1),
('2015_06_06_022119_create_counter_table', 1),
('2015_06_18_042307_create_koordinat_table', 1),
('2015_12_01_042307_update_tanah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_ktp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id`, `nama`, `no_ktp`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `pekerjaan`, `created_at`, `updated_at`) VALUES
(1, 'Javier', '266568538', 'quisquam', '2014-12-23', 'molestiae', '530 Roob Road Apt. 962\nDestineyside, FL 57430-8001', 'suscipit', '2016-09-22 01:02:26', '2016-09-22 01:02:26'),
(2, 'Bertrand', '1368310627', 'occaecati', '1981-02-07', 'quisquam', '7309 Roberts Greens\nWest Selmerfort, NJ 05477-3980', 'soluta', '2016-09-22 01:02:26', '2016-09-22 01:02:26'),
(3, 'Abigayle', '632682615', 'quis', '1979-11-17', 'voluptatum', '26621 Stracke Isle\nWest Daphneton, MI 12254', 'sit', '2016-09-22 01:02:26', '2016-09-22 01:02:26'),
(4, 'Jessy', '1104848803', 'autem', '1996-11-08', 'recusandae', '53729 Cordie Unions\nLake Janburgh, IN 89366', 'tempore', '2016-09-22 01:02:26', '2016-09-22 01:02:26'),
(5, 'Cordelia', '1115269331', 'quibusdam', '2006-05-21', 'et', '653 Flo Forge Suite 248\nPort Ivamouth, IN 89488', 'in', '2016-09-22 01:02:26', '2016-09-22 01:02:26'),
(6, 'Arnaldo', '1082034461', 'at', '1981-11-26', 'voluptas', '13817 Jon Motorway\nNorth Lewisview, WA 61545-9118', 'voluptates', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(7, 'Andres', '806299985', 'labore', '1974-09-13', 'est', '56819 Brown Port Apt. 227\nWest Todchester, MP 76337', 'at', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(8, 'Sonny', '576873099', 'autem', '1975-07-14', 'maiores', '5128 Weissnat Trace Suite 352\nSouth Julio, AK 59099-9721', 'harum', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(9, 'Owen', '417765865', 'accusamus', '2009-05-30', 'eum', '7112 Roel Walk\nLake Reyna, ND 32438-8888', 'error', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(10, 'Jerome', '149613972', 'quasi', '2009-09-01', 'voluptas', '59421 Hammes Harbors\nChandlerview, VI 68416-2338', 'temporibus', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(11, 'Casimer', '347206697', 'odio', '1971-02-22', 'voluptate', '924 Stephanie Lodge Apt. 023\nNew Garnet, NY 42692-8804', 'quas', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(12, 'Mathias', '539281250', 'atque', '2000-04-24', 'soluta', '3142 Schroeder Fort Suite 634\nMeredithview, VA 07078', 'nostrum', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(13, 'Adela', '472342956', 'id', '2006-12-19', 'quae', '989 Smitham Cliffs Suite 141\nNorth Nelda, CO 37129', 'exercitationem', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(14, 'Wilburn', '558622037', 'commodi', '2014-05-25', 'consectetur', '285 Bartell Lights\nEast Ilene, NM 80631', 'nam', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(15, 'Rafaela', '227384372', 'vel', '1976-10-15', 'nesciunt', '12459 Kerluke Meadow Suite 686\nHughmouth, RI 22771', 'ut', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(16, 'Margarita', '1108341312', 'doloribus', '1971-10-26', 'illum', '29775 Cormier Extensions Apt. 907\nShermanshire, NC 07892-9382', 'cumque', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(17, 'Brenden', '13958731', 'qui', '2011-10-30', 'omnis', '172 D''Amore Squares\nNorth Westley, ND 77325-7287', 'vel', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(18, 'Theron', '727139824', 'nobis', '1970-04-25', 'qui', '5521 Yazmin Pine\nSouth Katharina, AR 70045-9622', 'unde', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(19, 'Otha', '244814485', 'voluptates', '1982-09-10', 'labore', '44675 Freddy Flats\nColeland, NY 75574', 'nesciunt', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(20, 'Nora', '734370887', 'natus', '1987-01-08', 'ducimus', '40859 Rafaela Point\nWest Zelmabury, AA 49759', 'modi', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(21, 'Moises', '873928944', 'architecto', '1992-03-06', 'sunt', '1825 Matt Path Apt. 872\nWymanborough, AE 21399-2616', 'illo', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(22, 'Willow', '1434372618', 'nobis', '1977-06-16', 'ea', '7784 Carolina Dale\nWalterberg, KS 02353-5814', 'sunt', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(23, 'Delia', '928543657', 'unde', '2001-03-11', 'aliquid', '211 Greenholt Causeway Suite 566\nLake Sydniton, VI 71967-8861', 'fugiat', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(24, 'Ernest', '1104750562', 'dolorem', '1986-05-22', 'libero', '70919 Kirlin Harbors\nZaneview, AS 85482', 'doloremque', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(25, 'Mason', '985580803', 'vitae', '1975-01-26', 'assumenda', '7941 Audrey Garden Suite 299\nLake Moises, DC 35202-7625', 'voluptatem', '2016-09-22 01:02:27', '2016-09-22 01:02:27'),
(26, 'Hayley', '1225990653', 'vitae', '2016-02-16', 'ipsam', '620 Arjun Rue\nNorth Kobe, MO 05580', 'repellat', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(27, 'Mozelle', '1075074423', 'fugit', '1998-11-24', 'officia', '54955 Kling Land Apt. 064\nStokesside, MH 55729-9122', 'tempore', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(28, 'Jadon', '1104323128', 'et', '1997-03-27', 'et', '0863 Mazie Rue Suite 154\nSouth Sincereberg, PR 46983', 'ullam', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(29, 'Kurt', '435897143', 'inventore', '1998-12-16', 'nihil', '196 Moen Rest\nSouth Krystelfurt, CO 56582-3206', 'rerum', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(30, 'Julianne', '1270266254', 'rerum', '2016-08-28', 'quod', '22580 Bahringer Ports Suite 459\nLake Rebecca, AS 83034-6185', 'sit', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(31, 'Mckenna', '1003144698', 'sequi', '1994-08-23', 'est', '00309 Yost Mall Suite 462\nLonzoburgh, MT 79403-9440', 'et', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(32, 'Ana', '904979339', 'possimus', '2003-09-15', 'delectus', '103 Greenfelder Underpass\nPort Zechariahbury, SD 94122', 'quia', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(33, 'Hoyt', '333185413', 'ut', '1991-07-02', 'est', '90635 Dolly Summit Apt. 915\nGarrettborough, AR 01379-1756', 'consectetur', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(34, 'Domenico', '1337744608', 'omnis', '2014-02-10', 'molestiae', '4197 Iliana Ferry Suite 156\nSouth Mateo, TX 29033-4171', 'libero', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(35, 'Merl', '1290294978', 'omnis', '1984-07-30', 'accusantium', '54623 Botsford Ports Apt. 044\nVerniceport, GA 29331', 'vero', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(36, 'Jacquelyn', '439215003', 'aut', '1971-07-12', 'id', '63307 Lind Park\nSouth Tryciashire, FM 36338-9833', 'nulla', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(37, 'Garrison', '1091118455', 'velit', '2009-08-05', 'non', '08208 Bosco Junctions\nTheaport, MP 99888', 'molestias', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(38, 'Sidney', '566182133', 'neque', '1976-02-19', 'ab', '57031 Stella Parks\nReynoldmouth, AL 05240', 'aut', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(39, 'Carey', '490851227', 'eveniet', '1984-08-29', 'facere', '908 Braun Stravenue Apt. 445\nAntoniettamouth, MA 81776-7870', 'aliquid', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(40, 'Bianka', '259869041', 'perferendis', '1992-06-19', 'a', '2200 Marta Garden\nNew Georgemouth, MD 42017', 'modi', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(41, 'Uriah', '360730701', 'illo', '1996-08-28', 'quibusdam', '6564 Torey Burgs Suite 084\nSouth Gretchen, IL 91617', 'sapiente', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(42, 'Heidi', '49661044', 'minus', '2001-06-10', 'necessitatibus', '53023 Schinner Field\nNew Royce, ME 25783', 'quod', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(43, 'Arlo', '1080385833', 'magni', '1988-10-19', 'temporibus', '779 Kathryne Stream Suite 866\nJamelfort, MT 76248', 'sint', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(44, 'Christopher', '636606162', 'et', '1994-08-17', 'dolorem', '211 Maybell Parks\nBurdettestad, LA 67549-7233', 'quo', '2016-09-22 01:02:28', '2016-09-22 01:02:28'),
(45, 'Clark', '1297987450', 'debitis', '1979-12-25', 'ipsum', '572 Mac Islands Suite 563\nPort Kaylinville, PW 41863', 'quia', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(46, 'Antonio', '96751823', 'expedita', '1999-02-20', 'quaerat', '27372 Kristoffer Trafficway Suite 195\nNew Davin, GA 65883', 'provident', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(47, 'Rosemarie', '1089959248', 'unde', '1975-06-26', 'animi', '1631 Alaina Passage\nJalenchester, MH 75220', 'eos', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(48, 'Madge', '1124210434', 'eius', '2002-10-03', 'saepe', '94438 Alyce Shore Apt. 026\nHaroldhaven, ME 23587', 'et', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(49, 'Maggie', '1282694321', 'molestias', '1992-07-27', 'fuga', '84340 Jacobson Isle Apt. 044\nLake Meggiemouth, MD 32588-5520', 'aut', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(50, 'Darian', '127889774', 'reiciendis', '1998-06-19', 'neque', '612 Evert Glens Suite 418\nPort Esther, MN 48383', 'et', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(51, 'Billy', '218096031', 'laudantium', '2010-02-06', 'voluptas', '975 Stracke Springs\nLindmouth, PR 64598-0917', 'veniam', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(52, 'Myriam', '38009768', 'ratione', '1985-03-10', 'illo', '757 Nikolaus Road Suite 041\nPort Jalynmouth, NY 48627-1050', 'et', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(53, 'Eleonore', '732281152', 'est', '1976-12-06', 'quia', '8018 Dahlia Underpass\nEast Jenniefurt, IL 38639-9624', 'quasi', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(54, 'Toney', '706735392', 'beatae', '2009-01-19', 'fuga', '0162 Schneider Crossroad\nNew Hendersonberg, OH 90432-1347', 'saepe', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(55, 'Justina', '1810309', 'neque', '1981-10-20', 'eaque', '9705 Miller Knoll Apt. 268\nLake Maceyberg, MT 49629-5894', 'est', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(56, 'Hollis', '1398471259', 'impedit', '1990-09-22', 'doloremque', '91284 Maye Field Suite 542\nWest Monserrate, DC 55927', 'explicabo', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(57, 'Brock', '113887881', 'sunt', '1995-02-05', 'numquam', '548 Mueller Roads\nWest Dalton, PR 40610', 'in', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(58, 'Hobart', '170797851', 'nihil', '1982-05-24', 'molestiae', '703 Ella Court\nMylesville, NM 58555', 'totam', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(59, 'Celestine', '706472815', 'velit', '1991-02-21', 'ducimus', '903 Orn Ville\nWillchester, MP 42407-1184', 'sequi', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(60, 'Adah', '1430706043', 'itaque', '2004-08-17', 'quidem', '357 Ashtyn Expressway\nMarcelinabury, WY 86921-9515', 'quis', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(61, 'Bernard', '1401163362', 'dolore', '1978-02-18', 'nemo', '55339 Mckayla View Suite 215\nNorth Brauliostad, UT 36423-0913', 'optio', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(62, 'Tierra', '307124954', 'autem', '1975-03-11', 'eum', '3837 Sporer Tunnel Suite 013\nKathleenland, AA 87295', 'quis', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(63, 'Vanessa', '1255437477', 'ab', '2005-06-07', 'ea', '098 Olson Common Apt. 105\nEast Vedaborough, WA 80768', 'odit', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(64, 'Alia', '234930701', 'alias', '2008-12-12', 'exercitationem', '499 Jettie Burgs Apt. 035\nNorth Noemouth, MS 80691-2267', 'harum', '2016-09-22 01:02:29', '2016-09-22 01:02:29'),
(65, 'Dion', '1210823069', 'nihil', '1981-06-27', 'exercitationem', '13407 Joe Hollow\nWizashire, KS 75632', 'excepturi', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(66, 'Carli', '278447882', 'reiciendis', '2011-05-09', 'repudiandae', '217 Collier Villages Apt. 652\nNorth Amir, OR 06563-2076', 'dolores', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(67, 'Jedediah', '196581285', 'voluptas', '2007-03-24', 'iure', '3331 Rath Village Suite 099\nSouth Dustin, NJ 78480-3394', 'assumenda', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(68, 'Audreanne', '834863481', 'ex', '1990-03-21', 'voluptate', '432 Smith Square\nWest Valentin, WA 76831-9902', 'eos', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(69, 'Mara', '171319182', 'debitis', '2004-01-17', 'tenetur', '56741 Hulda Ports Suite 051\nLake Karianneport, MO 09857', 'nesciunt', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(70, 'Telly', '668528784', 'quis', '1979-06-22', 'repellendus', '6518 Francesca Shores\nNorth Kielfurt, KS 06262', 'sint', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(71, 'Crystel', '563798596', 'ea', '1971-09-21', 'eveniet', '1022 Kiehn Points\nMadgehaven, PA 03889-4400', 'nam', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(72, 'Laurine', '12386005', 'cum', '2002-08-05', 'eos', '4518 Thompson Rapid Suite 011\nSouth Leonorside, WA 19628', 'repudiandae', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(73, 'Sheldon', '1467516870', 'aliquid', '2015-05-30', 'omnis', '570 Nick Turnpike\nEast Berneice, FL 26507', 'est', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(74, 'Laney', '1002919622', 'repudiandae', '1970-11-02', 'dolores', '0740 Arnaldo Rue Apt. 256\nPort Bernadette, IN 39349', 'sunt', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(75, 'Candida', '958209267', 'laboriosam', '1987-07-25', 'atque', '70252 Cade Trail Apt. 073\nNorth Janice, DC 18834', 'distinctio', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(76, 'Aliya', '1319820691', 'voluptatibus', '1988-03-16', 'sit', '12126 Mertz Trafficway Suite 444\nKatherineshire, VT 62119', 'corrupti', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(77, 'Belle', '473804733', 'harum', '1986-02-14', 'est', '00419 Purdy Highway Apt. 006\nSouth Chester, AS 63938', 'omnis', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(78, 'Jakayla', '758791359', 'provident', '1971-07-17', 'quis', '628 Julianne Stravenue Apt. 397\nPort Allie, IA 90550', 'minus', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(79, 'Nash', '55773991', 'nostrum', '2010-10-14', 'ut', '238 Otis Via\nLakinport, OH 54960', 'sequi', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(80, 'Enrico', '492602458', 'inventore', '1976-10-11', 'delectus', '41874 Thiel Route Suite 986\nWest Thomasport, KY 08908', 'voluptatem', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(81, 'Heather', '1236155872', 'unde', '2002-07-25', 'ut', '44956 Champlin Square Suite 743\nSouth Giuseppe, NJ 97583-7471', 'et', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(82, 'Werner', '192582889', 'aspernatur', '1990-07-06', 'suscipit', '5595 Kuhlman Mountains Suite 722\nNorth Jewelbury, AK 38391-5319', 'tempore', '2016-09-22 01:02:30', '2016-09-22 01:02:30'),
(83, 'Elnora', '403833706', 'sed', '1993-06-28', 'atque', '6929 Upton Trafficway\nBergechester, MN 03728', 'aperiam', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(84, 'Tamia', '36175651', 'nulla', '1997-01-17', 'molestiae', '51665 Josie Springs Suite 554\nNew Kenmouth, MP 04558-8480', 'a', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(85, 'Sadie', '256984623', 'reiciendis', '1989-10-16', 'quam', '37446 Okuneva Trafficway Apt. 934\nRoyalland, WA 05517-1557', 'est', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(86, 'Lyla', '623547808', 'odio', '1981-08-10', 'ipsa', '153 Grover Point Suite 929\nKeithmouth, AE 25042-2395', 'architecto', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(87, 'Willard', '1356475001', 'iure', '2004-11-22', 'id', '662 Anjali Island Apt. 994\nEast Jaylin, AK 65195-8889', 'ut', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(88, 'Lilliana', '445474287', 'sint', '2011-01-16', 'nihil', '977 Dibbert Terrace\nSouth Kim, NJ 84067', 'architecto', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(89, 'Breanne', '1162764544', 'autem', '1979-03-14', 'dolorem', '4983 Bartell Stravenue\nEast Hoseaberg, PA 74711', 'qui', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(90, 'Lottie', '988374842', 'sit', '2002-05-22', 'eius', '287 Sierra Fork Apt. 476\nOthoberg, AA 18260-9160', 'dicta', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(91, 'Tobin', '1293233756', 'et', '1988-01-11', 'qui', '600 Louisa Field\nMalcolmton, PA 50120-0786', 'assumenda', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(92, 'Julian', '1283408561', 'beatae', '2002-02-06', 'dolorem', '036 Ward Hills\nSouth Luciusfurt, NE 09152-9906', 'velit', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(93, 'Alexie', '627079146', 'natus', '1983-01-15', 'et', '9770 Cormier Port\nHaagview, AA 78958-8006', 'ipsam', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(94, 'Wendy', '1286797249', 'quasi', '1999-09-03', 'tempore', '11984 Streich Streets\nGeraldberg, WA 55605-7508', 'velit', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(95, 'Ambrose', '812648236', 'quidem', '1986-02-12', 'repellat', '222 Izabella Curve Apt. 465\nBartellfurt, IA 93529', 'id', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(96, 'Pierce', '325408184', 'dolor', '1999-08-05', 'dolore', '617 Krajcik Station Apt. 747\nLake Tamara, ME 94272-0625', 'et', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(97, 'Devon', '515506460', 'voluptates', '1997-01-06', 'voluptas', '898 Ritchie Courts\nNew Newellland, OH 47301', 'provident', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(98, 'Otho', '1386870097', 'aperiam', '2010-09-14', 'saepe', '41811 Angeline Plain\nRheafort, NE 50959', 'deserunt', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(99, 'Maud', '22025324', 'perspiciatis', '1987-05-09', 'aut', '31446 Daniel Trail\nVickytown, OR 53223-3241', 'earum', '2016-09-22 01:02:31', '2016-09-22 01:02:31'),
(100, 'Violet', '1297164081', 'sunt', '1997-06-10', 'libero', '53487 Russel Path Suite 036\nGoodwinton, VI 78851-8754', 'est', '2016-09-22 01:02:31', '2016-09-22 01:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pemilik_tanah`
--

CREATE TABLE `riwayat_pemilik_tanah` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanah_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_buku_c` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat_riwayat_pemilik_tanah`
--

CREATE TABLE `surat_riwayat_pemilik_tanah` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanah_id` int(10) UNSIGNED NOT NULL,
  `no_surat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_lurah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nip_lurah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `saksi_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `saksi_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `pemohon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat_sppf`
--

CREATE TABLE `surat_sppf` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanah_id` int(10) UNSIGNED NOT NULL,
  `nama_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umur_1` int(11) NOT NULL,
  `pekerjaan_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umur_2` int(11) NOT NULL,
  `pekerjaan_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `pemohon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `surat_sppf`
--

INSERT INTO `surat_sppf` (`id`, `tanah_id`, `nama_1`, `umur_1`, `pekerjaan_1`, `alamat_1`, `nama_2`, `umur_2`, `pekerjaan_2`, `alamat_2`, `status`, `pemohon`, `created_at`, `updated_at`) VALUES
(1, 1, 'Carlie Anderson', 42, 'non', '312 Ruecker Cape\nPredovicfort, VT 63716', 'Graham Stark', 46, 'ullam', '7900 Auer Parks\nSouth Deshawn, MT 14311', 0, 'Roy Kuhlman Jr.', '2016-09-22 01:02:38', '2016-09-22 01:02:38'),
(2, 2, 'Jacquelyn McDermott', 34, 'quidem', '6867 O''Reilly Spring\nClaraside, FM 72485-2693', 'Libbie Hodkiewicz', 36, 'veniam', '3342 Ullrich Forest Suite 168\nEast Delphine, ND 17631-8937', 0, 'Charlotte Ritchie', '2016-09-22 01:02:38', '2016-09-22 01:02:38'),
(3, 3, 'Ashlynn Herman', 49, 'dolorem', '64186 Ara Crossroad Suite 225\nZoiefurt, VA 57144-6846', 'Elisabeth Langworth', 21, 'ipsum', '3690 Lavina Gardens Apt. 413\nNorth Jeromefurt, TX 65124', 0, 'Frances Goodwin DDS', '2016-09-22 01:02:38', '2016-09-22 01:02:38'),
(4, 4, 'Vena Spinka III', 26, 'ducimus', '885 Mante Mall\nAryannaview, WY 51755-7343', 'Kamryn Satterfield', 42, 'est', '7514 Braun Squares Suite 012\nChamplinton, WI 84394-3974', 0, 'Kevin Kreiger', '2016-09-22 01:02:38', '2016-09-22 01:02:38'),
(5, 5, 'Elwin Reichel', 23, 'alias', '05623 Rolfson Mount\nDurganmouth, UT 84235-4519', 'Ressie Gleichner', 37, 'omnis', '6337 Enrico Park Suite 815\nVerlieberg, VT 03800-3259', 0, 'Gust Block', '2016-09-22 01:02:38', '2016-09-22 01:02:38'),
(6, 6, 'Travon Hills', 31, 'qui', '3244 Heaney Valleys\nWest Alvah, MI 38213-8546', 'Albina Treutel', 24, 'et', '11045 Clementina Burgs Suite 452\nChristianatown, MT 24898', 0, 'Saul Gleichner', '2016-09-22 01:02:38', '2016-09-22 01:02:38'),
(7, 7, 'Phyllis Barrows', 28, 'fugit', '92277 Abigale Isle Suite 158\nHackettchester, FL 11370-8790', 'Mrs. Kaleigh Pollich', 31, 'ut', '815 Buckridge Brooks\nSouth Tina, MA 84441', 0, 'Natalia Kuphal', '2016-09-22 01:02:38', '2016-09-22 01:02:38'),
(8, 8, 'Dr. Jodie O''Conner', 48, 'corrupti', '859 Denesik Shoals\nLake Rickeyport, HI 31347-5314', 'Murl Corkery', 34, 'itaque', '89838 Sid Stravenue Apt. 426\nCatalinachester, WI 49544-2931', 0, 'Verlie Wolf', '2016-09-22 01:02:38', '2016-09-22 01:02:38'),
(9, 9, 'Sydnie Spencer', 49, 'sed', '25139 Laurianne Greens\nPort Tiannaside, PA 78614', 'Sigurd McCullough', 43, 'amet', '7974 Kihn Cliffs\nNorth Destiny, MI 84935-5824', 0, 'Mr. Walton Kihn', '2016-09-22 01:02:38', '2016-09-22 01:02:38'),
(10, 10, 'Andrew Schumm', 28, 'sapiente', '25487 Cartwright Freeway\nKarafurt, SD 50350-7431', 'Lilliana Bechtelar', 41, 'laboriosam', '015 Bud Knoll Apt. 074\nNorth Kameronchester, OK 51780', 0, 'Kimberly Wolff', '2016-09-22 01:02:38', '2016-09-22 01:02:38'),
(11, 11, 'Sonia Konopelski', 40, 'necessitatibus', '6364 Blanche Trail Suite 654\nLake Kaitlin, AS 17710-9278', 'Gavin Feest', 32, 'vel', '2687 Otto Brooks Suite 034\nBeulahfurt, OK 93631-1570', 0, 'Shannon Wilderman', '2016-09-22 01:02:38', '2016-09-22 01:02:38'),
(12, 12, 'Emilie Runolfsdottir PhD', 50, 'culpa', '248 Camron Street\nOrnhaven, MA 59688-6894', 'Loy Ritchie', 47, 'excepturi', '679 Stokes Pines\nPort Royal, NH 55404-6132', 0, 'Ena Keeling', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(13, 13, 'Jerome Weimann', 50, 'et', '327 Green Islands\nIsaacfurt, ME 79573', 'Dr. Olga Becker II', 40, 'modi', '61537 Eldora Terrace Suite 964\nWest Gusshire, AP 78638', 0, 'Lelia Boyer', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(14, 14, 'Adriel Cronin III', 39, 'magni', '581 Arne Turnpike\nRuntehaven, NH 73213-3280', 'Gaetano Klocko', 27, 'voluptatem', '714 Hane Square Suite 616\nSouth Reanna, LA 45029-2439', 0, 'Bulah Murazik', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(15, 15, 'Miss Ramona Hartmann V', 21, 'omnis', '109 Emile Greens Suite 330\nDaishaland, NM 94095', 'Jerald Senger', 38, 'incidunt', '6237 Julius Brooks\nEast Rettamouth, NC 26252', 0, 'Jovany Corkery', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(16, 16, 'Maye Renner', 33, 'corporis', '54682 Audie Viaduct\nOrntown, MO 29206-7021', 'Elian Weber IV', 42, 'dicta', '3881 Wiegand Harbor\nLake Viola, NV 81394-8262', 0, 'Mr. Margarete Daniel', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(17, 17, 'Dr. Murray Dibbert DDS', 21, 'omnis', '89806 Cartwright Summit\nPort Sydni, FM 89340', 'Mr. Moriah Brown Sr.', 30, 'et', '3444 O''Keefe Meadow\nMaudeburgh, PR 21057', 0, 'Dr. Noemie Conn V', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(18, 18, 'Ms. Axel Trantow', 41, 'voluptas', '76821 Ryan Extensions\nLake Camilletown, FM 68198-1044', 'Rudy Marquardt DDS', 48, 'rerum', '6651 Kuhlman Stravenue\nLake Monaland, NV 26672-4372', 0, 'Edd Rempel', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(19, 19, 'Mr. Robbie Hoeger I', 46, 'eos', '676 Runolfsdottir Mission Apt. 113\nNorth Billville, NE 53862-8511', 'Cynthia Stanton III', 49, 'veniam', '69703 Vincenza Roads Apt. 568\nLake Vellashire, CT 24209-9047', 0, 'Gust Hartmann', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(20, 20, 'Christiana Grimes II', 41, 'quis', '71692 Effertz Run\nNew Antonina, IA 13903-3180', 'Pauline Torp I', 29, 'et', '1290 Beatty Junction\nColemanbury, VT 96868-6784', 0, 'Wellington Schmidt', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(21, 21, 'Mrs. Mekhi Cole', 39, 'culpa', '86202 Earlene Stravenue\nEast Stephania, AR 50559', 'Chandler Nikolaus', 38, 'repellat', '623 Hahn Crescent Suite 287\nJunestad, AK 10949-9581', 0, 'Larry Feil', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(22, 22, 'Mr. Jolie McDermott', 20, 'voluptas', '410 Elfrieda Mall Apt. 226\nLuettgenborough, AP 24755-4178', 'Pearl Ortiz', 36, 'similique', '508 Columbus Place\nNorth Elliottfurt, MS 86914', 0, 'Pedro Miller', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(23, 23, 'Fleta Auer', 44, 'voluptatem', '36659 Regan Fort Apt. 775\nEast Retta, PW 34449', 'Mose Reinger', 23, 'quidem', '264 O''Reilly Turnpike\nSouth Joanny, TX 91904-0440', 0, 'Dorian Crona', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(24, 24, 'Lamar Hyatt', 37, 'voluptatem', '9836 Arnold Drive Apt. 139\nPort Jaimebury, WI 61804-5303', 'Jaclyn Johnson', 33, 'aperiam', '7318 Runolfsdottir Fort Apt. 697\nPort Clementinemouth, AL 62514', 0, 'Maxie Ondricka', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(25, 25, 'Akeem Rolfson', 49, 'sint', '3948 Friesen Run\nNew Thelma, WA 25306-6304', 'Emely Okuneva', 23, 'natus', '87389 Jena Court Suite 625\nChadrickport, LA 59510', 0, 'Ophelia Harber II', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(26, 26, 'Nathanial Witting', 26, 'velit', '996 Thompson Fall Apt. 838\nHagenesbury, ID 21545', 'Bridie Botsford', 26, 'esse', '82226 Precious Drive\nWilltown, PA 62854', 0, 'Jimmie Stoltenberg', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(27, 27, 'Miss Orrin Kihn', 22, 'ut', '7935 O''Kon Brooks Apt. 254\nNorth Eleazar, NY 75467', 'Dr. Noemi Graham', 39, 'quidem', '2344 O''Conner Lane Suite 753\nZulauftown, FM 92539', 0, 'Adolfo Beer', '2016-09-22 01:02:39', '2016-09-22 01:02:39'),
(28, 28, 'Julius Lesch', 23, 'voluptatibus', '5198 Ubaldo Branch Apt. 615\nPort Neomaton, ND 66962-8565', 'Amparo Emmerich', 49, 'rerum', '8285 McKenzie Track\nSchneiderborough, CA 55951-0309', 0, 'Jessie Fisher', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(29, 29, 'Kayla Schumm', 22, 'laborum', '02555 Dayana Lake\nLake Margarettafort, ND 83190', 'Kennedi Donnelly', 36, 'necessitatibus', '7166 Catalina Grove Apt. 968\nEast Ressieton, VA 51319', 0, 'Demetrius McDermott', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(30, 30, 'Randall Schulist', 39, 'labore', '84467 Alexane Plain\nHuelsview, AA 80220-1048', 'Mrs. Estefania Kiehn', 28, 'eveniet', '14728 Verla Views Suite 229\nTremblayshire, VT 84844-2484', 0, 'Zola Dietrich DVM', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(31, 31, 'Leanne Hagenes MD', 40, 'sequi', '83327 Cheyanne Motorway Apt. 795\nEast Freeman, UT 99921', 'Emory Kohler', 45, 'exercitationem', '8875 Faye Rapid\nQuitzonfurt, TX 78821', 0, 'Alexie Murray', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(32, 32, 'Miss Reginald Cummings Sr.', 38, 'excepturi', '3022 Rubye Trail Suite 987\nSouth Creola, OH 39769-3605', 'Donnell Hilpert', 29, 'atque', '5935 Cydney Hollow Suite 690\nEast Zoeytown, PA 13216-5461', 0, 'Mr. Kiel Lebsack III', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(33, 33, 'Amelia Doyle', 39, 'sit', '6088 Hermann Isle Apt. 474\nRalphfurt, AP 96478', 'King Kunze', 30, 'eaque', '2530 Zulauf Knoll Suite 863\nNorth Gonzaloborough, MI 06647', 0, 'Sebastian Beahan', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(34, 34, 'Meggie Gutmann', 31, 'accusantium', '062 Nader Estate\nGussieton, MI 01679', 'Miss Maxine Dicki', 48, 'ut', '214 Mosciski Wall Apt. 230\nEast Mathilde, VA 07136', 0, 'Adelbert Sipes', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(35, 35, 'Cody Cremin', 35, 'quod', '329 Maya Creek Suite 663\nZakaryberg, DC 86881', 'Mr. Charley Jakubowski', 46, 'id', '42014 Volkman Turnpike\nNorth Jammie, FM 60248', 0, 'Brooke Klein', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(36, 36, 'Dexter Johnson', 26, 'itaque', '2200 Balistreri Vista Suite 190\nAlfredton, MH 86765', 'Dallin Cummings DVM', 37, 'repellat', '286 Alexis Ports Apt. 473\nWest Yasminemouth, MS 21003', 0, 'Spencer Hirthe', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(37, 37, 'Keshaun Hegmann', 26, 'autem', '50567 Lang Rest\nWatsicaborough, AZ 62852-2935', 'Mohammad Pfannerstill', 23, 'numquam', '850 Jenkins Plaza\nEast Breana, UT 18904', 0, 'Miss Cleve Schaefer II', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(38, 38, 'Verda Johnston', 33, 'animi', '064 Goyette Grove Suite 912\nEast Camryn, VT 88864', 'Dr. Josefina Jacobson', 42, 'et', '01349 Feil Heights\nNorth Laurelshire, NJ 97721', 0, 'Kim Mueller V', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(39, 39, 'Harvey Rippin II', 46, 'enim', '4467 Littel Place Apt. 975\nMarianachester, CO 59345', 'Dr. Madeline Wisozk III', 42, 'nam', '62771 Murphy Ports\nLake Dariotown, NH 24269', 0, 'Dr. Jasper O''Conner III', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(40, 40, 'Chloe Boyer', 40, 'quos', '83329 Conn Corners Suite 148\nSouth Monserratborough, SD 19208-0969', 'Kirk Denesik', 48, 'fugit', '31792 Baumbach Place Suite 937\nNew Alvis, MA 45949', 0, 'Miss Morgan Keeling DVM', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(41, 41, 'Michel Smith I', 26, 'consequatur', '594 Lillie Junction\nJerrellfurt, MT 32183-5370', 'Alvena McClure V', 44, 'possimus', '0660 McKenzie Keys\nIsabellfort, AL 33425', 0, 'Marcel Mueller', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(42, 42, 'Mckayla Roberts', 42, 'voluptatem', '778 Aniya Station Apt. 572\nRatkeview, OK 80664-9834', 'Patsy Marquardt', 28, 'veritatis', '4804 Mohr Union Suite 292\nEulaton, MA 57868', 0, 'Mrs. Rollin Lockman', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(43, 43, 'Bernice Kilback', 47, 'recusandae', '1515 Bernhard Prairie\nConnershire, NV 79901', 'Rubye Howe', 25, 'laborum', '043 Arden Ville Apt. 883\nWest Raeganfort, NV 10389-8765', 0, 'Steve Metz', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(44, 44, 'Johnathon Larson PhD', 32, 'ipsa', '83756 Moriah Squares\nPort Justynhaven, NM 05914', 'Ms. Mack Christiansen', 28, 'ipsam', '31648 Boyle Skyway Suite 855\nHectorville, OH 64525-2266', 0, 'Ms. Dorthy Donnelly II', '2016-09-22 01:02:40', '2016-09-22 01:02:40'),
(45, 45, 'Dr. Antone Armstrong II', 43, 'deleniti', '9763 Keshawn Loaf Suite 118\nKatlynntown, FL 70872', 'Davin Berge', 39, 'sequi', '1640 Daisha Field\nSchaeferton, AA 63708', 0, 'Clementina Hoeger', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(46, 46, 'Bethel Krajcik', 42, 'placeat', '7271 Dare Light\nCaraton, MH 40286-3238', 'Elenora Predovic', 40, 'sed', '6096 Green Spur\nMarvintown, VT 37299-3099', 0, 'Jody Cronin III', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(47, 47, 'Laurel West', 36, 'dolores', '85189 Pfannerstill Courts\nWalshburgh, OH 28200', 'Carissa Baumbach', 29, 'nobis', '74721 Cremin Streets\nSchoenview, WV 18106-7818', 0, 'Ms. Augustus Larkin IV', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(48, 48, 'Sarah Carter', 41, 'et', '1507 Owen Ports\nLake Shanybury, IL 00451', 'Miss Misty Murazik', 44, 'totam', '13892 Jayson Summit Suite 881\nFeeneyborough, FL 26357', 0, 'Berta Fritsch', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(49, 49, 'Marjory Mante', 32, 'adipisci', '640 Corrine Viaduct Apt. 656\nPort Trever, PR 60114', 'Leilani Auer', 37, 'dolorum', '652 Goldner Row Apt. 799\nNorth Dax, OK 08280', 0, 'Miss Raleigh Jacobi I', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(50, 50, 'Maria Goldner I', 39, 'non', '71763 Solon Passage Suite 346\nLindfort, SD 90888-6898', 'Bryce Hegmann', 38, 'ducimus', '09971 Orn Fork\nPort Dave, MH 41954-8306', 0, 'Estell Kertzmann', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(51, 51, 'Miss Keagan Marks', 24, 'veniam', '565 Elmo Road Suite 021\nSouth Evans, VA 02678', 'Flo Crona', 22, 'dignissimos', '03525 Bryana Mission Suite 108\nNathanaelberg, KY 92365', 0, 'Jadyn Gutkowski', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(52, 52, 'Rubie Price', 23, 'nobis', '74714 Medhurst Stream Apt. 762\nWest Alfred, RI 98163', 'Malika Beier', 28, 'voluptatem', '797 Sharon Inlet Suite 429\nEast Brielleland, VA 47351-3051', 0, 'Tiara Swaniawski', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(53, 53, 'Mrs. Clinton Simonis Sr.', 25, 'quia', '591 Elwin Loop Apt. 678\nLake Valentine, OK 10626-2733', 'Lauretta Stoltenberg', 21, 'dolores', '78491 Jane Village Apt. 662\nPort Angelshire, VA 43038', 0, 'Macy McDermott', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(54, 54, 'Miss Rene Cummerata II', 41, 'at', '533 Ankunding Trail\nGrahamside, MO 29005', 'Niko Strosin', 39, 'numquam', '914 Sophie Hollow\nLake Devan, ND 51640-3968', 0, 'Dr. Genevieve Macejkovic III', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(55, 55, 'Merlin Barrows', 33, 'deserunt', '4454 Hackett Drive\nBraedenfort, PW 20818-7413', 'Mr. Sylvan Reynolds', 30, 'quis', '58628 Martine Park\nNorth Johnny, MI 45259-4574', 0, 'Bernardo Schmitt', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(56, 56, 'Miss Kurtis Bogisich II', 46, 'nisi', '200 Jacobs Points Suite 489\nKayamouth, WA 91264', 'Jayson Howell', 25, 'ipsam', '202 Kunde Avenue\nPort Annamarie, VI 50386', 0, 'Dr. Katherine Bayer I', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(57, 57, 'Miss Mohammed Eichmann', 29, 'odio', '170 Norene Forest Apt. 323\nNorth Rosetta, UT 74385-5746', 'Richmond Dach', 31, 'vero', '578 Lucious Drive\nEast Kennith, ME 32898-4875', 0, 'Hyman Walker MD', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(58, 58, 'Ms. Forest Greenholt Jr.', 39, 'est', '4278 Jaskolski Motorway Apt. 385\nArdenstad, VI 32922', 'Mr. Angelina Kulas MD', 27, 'qui', '8949 Raoul Mission\nSouth Terence, OR 34555', 0, 'Adelia Kuvalis', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(59, 59, 'Gregoria Kerluke', 28, 'inventore', '6333 Catalina Falls Suite 109\nBrycenbury, KY 63315', 'Dr. Jamal Connelly DVM', 46, 'repudiandae', '95033 Daugherty Prairie Apt. 232\nHarmontown, UT 64894-0277', 0, 'Ms. Lilliana Luettgen', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(60, 60, 'Ms. Angus Crona DVM', 30, 'cumque', '728 Turcotte Course Apt. 574\nZitaside, CA 46196', 'Angelo Towne', 30, 'laudantium', '182 Arjun Park Suite 112\nBerniceburgh, KY 05123-7094', 0, 'Christa Reichel', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(61, 61, 'Sandy Marks', 31, 'quae', '858 Goodwin Creek\nKayceeberg, IA 34634', 'Palma Davis', 28, 'facilis', '98028 Parker Trail Suite 649\nLake Enolachester, ME 40777', 0, 'Mafalda Rau', '2016-09-22 01:02:41', '2016-09-22 01:02:41'),
(62, 62, 'Mrs. Lucio Cormier', 47, 'veritatis', '5517 Berge Crescent\nKautzerchester, AA 07715', 'Keaton Ernser', 28, 'ut', '6639 Catalina Brooks\nWest Mablemouth, AZ 50020-5522', 0, 'Carolyne O''Hara', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(63, 63, 'Wilmer Sawayn', 28, 'voluptatem', '32787 Eichmann Grove\nLake Rebekahport, LA 85469', 'Mariela Schulist DDS', 37, 'molestiae', '6419 Boyd Forge\nSchneiderfort, IA 76425-6507', 0, 'Graham Lang PhD', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(64, 64, 'Ms. Matteo Rutherford', 49, 'earum', '8668 Aniya Glen\nDonniehaven, SD 95217-7737', 'Shayna Leannon DDS', 45, 'nulla', '751 Crist Crossing Suite 908\nSouth Gerald, NY 12978-6489', 0, 'Fernando Jakubowski', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(65, 65, 'Maximilian McClure', 31, 'iste', '0309 Itzel Heights\nPort Dillonville, WI 45640-7417', 'Ms. Jada Williamson MD', 41, 'eos', '395 Bins Creek\nClaudeshire, FL 71847', 0, 'Fiona Breitenberg', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(66, 66, 'Bernice Shanahan', 36, 'et', '7644 Verner Springs Apt. 929\nWeberton, NC 90512', 'Nikko Frami', 25, 'dolor', '0829 Hauck Inlet Suite 602\nDeiontown, WV 12196', 0, 'Sammy Leannon', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(67, 67, 'Melissa McGlynn', 26, 'nulla', '6524 Haleigh Radial\nSchusterland, AL 94707', 'Kendrick Reynolds', 38, 'in', '625 McLaughlin Hills\nJuliaside, WV 74072', 0, 'Ernest Lynch', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(68, 68, 'Bradford Kautzer', 22, 'tempore', '7484 Morissette Land\nVladimirland, TX 99268-0995', 'Garth Lowe', 45, 'similique', '231 Chloe Island Suite 935\nWest Marjolaine, AP 47948', 0, 'Cayla Heathcote III', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(69, 69, 'Mr. Aliya Koelpin Sr.', 38, 'quod', '6050 Simonis Course Apt. 718\nRyannburgh, MH 57091-7718', 'Jarred Wiza', 44, 'deserunt', '042 Turcotte Creek\nNew Drake, FM 42850', 0, 'Alta Ziemann DVM', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(70, 70, 'Landen Walter', 27, 'voluptatem', '1716 Legros Hollow\nSouth Ena, NM 09985', 'Mr. Elisa Osinski DVM', 23, 'quis', '56721 Edgardo Estates\nAntonettashire, NH 09208', 0, 'Dr. Tyrique Boyer', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(71, 71, 'Justine Shanahan', 27, 'sit', '74309 Grady Trail\nWest Marioport, IL 04394-9682', 'Torrey Kassulke', 48, 'nesciunt', '56030 Howell Cove\nNorth Emmatown, OK 27367-2036', 0, 'Mrs. Eusebio Hirthe', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(72, 72, 'Tatum Brakus DDS', 36, 'facere', '37081 Kadin Courts\nPort Maci, MT 42333-0457', 'Annette Jaskolski', 45, 'dolorum', '984 Medhurst Mills\nSkilesfurt, MO 75148-0212', 0, 'Gregory Farrell', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(73, 73, 'Haskell Hilll', 50, 'totam', '1588 Logan Forest Suite 208\nWest Constance, AK 46669-1308', 'Terrence Medhurst', 26, 'officiis', '6068 Block Terrace Apt. 635\nNew Mattiemouth, MH 86343-2345', 0, 'Dominique Heidenreich', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(74, 74, 'Richie Gerhold', 49, 'commodi', '15777 Beahan Wells\nPort Tyriquestad, IA 57224', 'Dr. Augustine Rutherford PhD', 26, 'nobis', '314 D''angelo Ridges\nLake Tyresemouth, CA 78722-4269', 0, 'Sabryna Marquardt', '2016-09-22 01:02:42', '2016-09-22 01:02:42'),
(75, 75, 'Brando Conn DVM', 36, 'qui', '157 Cassin Heights\nSouth Kiaraport, MD 40758-8193', 'Phyllis Heidenreich', 39, 'porro', '9124 Mathias Garden\nNew Pinkie, NE 29285', 0, 'Lottie Kihn', '2016-09-22 01:02:42', '2016-09-22 01:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `tanah`
--

CREATE TABLE `tanah` (
  `id` int(10) UNSIGNED NOT NULL,
  `pemilik_id` int(10) UNSIGNED NOT NULL,
  `no_sppt_pbb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_buku_c` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jalan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kodepos` int(11) NOT NULL,
  `no_persil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blok` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kampung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_sebelum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diperoleh_tahun` int(11) NOT NULL,
  `batas_utara` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batas_selatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batas_timur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batas_barat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masalah` tinyint(1) NOT NULL,
  `keberatan` tinyint(1) NOT NULL,
  `luas` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `scan_letter_c` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tanah`
--

INSERT INTO `tanah` (`id`, `pemilik_id`, `no_sppt_pbb`, `no_buku_c`, `nama`, `jalan`, `rt`, `rw`, `kodepos`, `no_persil`, `blok`, `kampung`, `desa`, `kecamatan`, `kabupaten`, `nama_sebelum`, `diperoleh_tahun`, `batas_utara`, `batas_selatan`, `batas_timur`, `batas_barat`, `masalah`, `keberatan`, `luas`, `created_at`, `updated_at`, `scan_letter_c`) VALUES
(1, 4, '0', '125', 'Jessy', '060 Kathlyn Viaduct\nSouth Gerdastad, CT 35896-9297', '6', '9', 1926, '0', '2', 'nulla', 'sed', 'mollitia', 'id', 'Ms. Verdie Krajcik I', 1970, 'iste', 'cumque', 'molestias', 'consequatur', 0, 0, 51, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(2, 7, '1', '9943', 'Andres', '7449 Emmett Locks Apt. 506\nCandaceport, AA 64415-4198', '5', '7', 5353, '2', '3', 'quia', 'odit', 'aspernatur', 'non', 'Jeff Armstrong', 1946, 'sunt', 'quos', 'esse', 'qui', 0, 0, 57, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(3, 2, '2', '2841', 'Bertrand', '3198 Janiya Corners\nIsaacview, TN 55459-8719', '5', '3', 3411, '4', '4', 'quam', 'mollitia', 'dicta', 'sed', 'Timmy Mosciski DDS', 1953, 'at', 'quae', 'dolor', 'consequatur', 0, 0, 37, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(4, 1, '3', '2214', 'Javier', '5908 Ottis Isle\nWest Dorothy, NY 01637', '4', '5', 2070, '6', '5', 'sit', 'ut', 'quos', 'officia', 'Dr. Catalina Jakubowski', 1901, 'dolorem', 'in', 'rem', 'rem', 0, 0, 19, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(5, 7, '4', '3888', 'Andres', '0853 Leffler Mills Suite 950\nWest Milesmouth, ND 21135-9440', '6', '8', 6952, '8', '6', 'quos', 'eaque', 'consequuntur', 'unde', 'Maryse Kertzmann', 1907, 'omnis', 'suscipit', 'veritatis', 'ducimus', 0, 0, 97, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(6, 7, '5', '6812', 'Andres', '9837 Abernathy Extensions\nStammborough, NH 52030', '2', '5', 7760, '10', '7', 'ad', 'in', 'tempora', 'non', 'Manuela Kertzmann', 1904, 'accusamus', 'saepe', 'minima', 'dicta', 0, 0, 12, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(7, 2, '6', '521', 'Bertrand', '888 Domenick Common Suite 121\nLake Cieloborough, AA 20669-0457', '1', '5', 2976, '12', '8', 'perspiciatis', 'error', 'eius', 'ad', 'Miss Elbert Kiehn Jr.', 2001, 'qui', 'aliquid', 'laboriosam', 'exercitationem', 0, 0, 17, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(8, 10, '7', '4302', 'Jerome', '391 Fanny Expressway\nEast Gordon, IL 99974', '10', '4', 4271, '14', '9', 'corrupti', 'accusantium', 'quisquam', 'vitae', 'Elyse Reynolds', 1995, 'et', 'harum', 'enim', 'iure', 0, 0, 91, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(9, 6, '8', '8904', 'Arnaldo', '418 Courtney Crescent\nSouth Oda, SC 04063', '3', '5', 5343, '16', '10', 'molestias', 'eius', 'in', 'rerum', 'Mrs. Milo Sauer II', 1989, 'inventore', 'eum', 'voluptatem', 'quos', 0, 0, 21, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(10, 9, '9', '1720', 'Owen', '511 Dorothy Viaduct Apt. 518\nMaryjaneborough, CT 36947-5431', '1', '8', 6641, '18', '11', 'optio', 'fugit', 'consequuntur', 'molestiae', 'Aron Roberts', 1932, 'cumque', 'est', 'quae', 'voluptates', 0, 0, 32, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(11, 6, '10', '1653', 'Arnaldo', '29524 Gibson Causeway Suite 837\nEast Horacio, TX 05499', '8', '3', 6217, '20', '12', 'amet', 'distinctio', 'est', 'velit', 'Ebba Ritchie I', 1970, 'delectus', 'commodi', 'voluptas', 'exercitationem', 0, 0, 12, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(12, 1, '11', '2220', 'Javier', '27533 Runte Fall\nLake Eugenia, VI 88721-9494', '5', '4', 2323, '22', '13', 'cum', 'sit', 'consequatur', 'rem', 'Mrs. Deion Dickinson', 1913, 'excepturi', 'magni', 'saepe', 'molestiae', 0, 0, 52, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(13, 1, '12', '127', 'Javier', '5924 Buford Wells\nJordichester, SC 01747-6536', '10', '10', 6513, '24', '14', 'vitae', 'quo', 'ut', 'aut', 'Georgette Heller', 1926, 'non', 'aut', 'perspiciatis', 'corrupti', 0, 0, 84, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(14, 4, '13', '9381', 'Jessy', '96075 Reece Cape Suite 081\nNew Santinabury, AZ 22768', '8', '8', 6619, '26', '15', 'blanditiis', 'sed', 'dolorum', 'ipsam', 'Dr. Stephany Mosciski Sr.', 1987, 'in', 'sint', 'voluptatem', 'et', 0, 0, 39, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(15, 9, '14', '3699', 'Owen', '0092 Schmitt Mall\nEast Pearlieberg, WY 28877-6590', '7', '6', 6471, '28', '16', 'assumenda', 'deserunt', 'saepe', 'exercitationem', 'Alan Schroeder', 1950, 'illum', 'consequuntur', 'commodi', 'sed', 0, 0, 6, '2016-09-22 01:02:32', '2016-09-22 01:02:32', ''),
(16, 1, '15', '7871', 'Javier', '484 Hiram Drives Apt. 001\nEast Stanleyland, AS 11895-4905', '10', '3', 4435, '30', '17', 'voluptatem', 'nemo', 'vel', 'dolorum', 'Ferne Dach', 1932, 'ullam', 'corrupti', 'omnis', 'sit', 0, 0, 61, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(17, 9, '16', '6105', 'Owen', '53310 Aiyana Roads\nCassinfurt, NJ 48867-4548', '9', '3', 3826, '32', '18', 'sit', 'iste', 'similique', 'adipisci', 'Dr. Dan Hyatt', 1988, 'nihil', 'enim', 'est', 'ea', 0, 0, 27, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(18, 4, '17', '4215', 'Jessy', '93944 Gorczany Crescent Apt. 069\nNorth Julia, VI 17776-5888', '8', '7', 7973, '34', '19', 'error', 'voluptatum', 'et', 'veritatis', 'Abby Kuvalis', 1922, 'enim', 'quam', 'voluptatem', 'placeat', 0, 0, 89, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(19, 10, '18', '5225', 'Jerome', '196 Hester Lake\nWest Calista, AZ 26577-9154', '5', '9', 5775, '36', '20', 'distinctio', 'quae', 'perspiciatis', 'aperiam', 'Amy Hamill IV', 2007, 'reiciendis', 'sunt', 'optio', 'enim', 0, 0, 35, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(20, 5, '19', '2419', 'Cordelia', '83817 Ralph Prairie Suite 353\nWindlerstad, FL 42857-5126', '4', '9', 1743, '38', '21', 'possimus', 'rem', 'quia', 'non', 'Kattie Wiza', 1931, 'rerum', 'deleniti', 'voluptatum', 'quia', 0, 0, 6, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(21, 8, '20', '8383', 'Sonny', '8532 Cremin Pines Apt. 874\nLibbieport, MT 19168', '3', '7', 7070, '40', '22', 'vero', 'enim', 'quasi', 'ea', 'Lisa Hermann', 2009, 'autem', 'odit', 'magnam', 'harum', 0, 0, 11, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(22, 7, '21', '4831', 'Andres', '9637 Carroll Row Apt. 543\nLake Amos, AE 21607-6137', '9', '7', 5552, '42', '23', 'doloremque', 'libero', 'eligendi', 'et', 'Jeffery Wuckert PhD', 1982, 'ipsam', 'odio', 'voluptatem', 'et', 0, 0, 93, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(23, 4, '22', '7106', 'Jessy', '2962 Isai Trail Suite 926\nNew Larrybury, MS 45164-4298', '10', '3', 2654, '44', '24', 'aliquid', 'quas', 'rem', 'aut', 'Josefina Ernser III', 1949, 'est', 'velit', 'possimus', 'nesciunt', 0, 0, 36, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(24, 4, '23', '7359', 'Jessy', '0266 Kozey Ways\nSouth Vito, NJ 00243-6314', '8', '8', 1751, '46', '25', 'dolorum', 'quo', 'porro', 'aut', 'Colten Kris', 1983, 'suscipit', 'dolorem', 'harum', 'eum', 0, 0, 79, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(25, 10, '24', '2987', 'Jerome', '288 Armstrong Well\nNew Aiyana, IN 83553', '8', '7', 4325, '48', '26', 'eligendi', 'dolores', 'fugiat', 'consequatur', 'Ezekiel Gorczany', 1965, 'aliquid', 'maiores', 'labore', 'hic', 0, 0, 51, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(26, 9, '25', '827', 'Owen', '176 Tillman Spurs\nNorth Winonaville, NH 59884-4525', '6', '7', 4249, '50', '27', 'et', 'maiores', 'facere', 'ipsa', 'Monique Jakubowski', 1935, 'ad', 'unde', 'ducimus', 'temporibus', 0, 0, 22, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(27, 9, '26', '3267', 'Owen', '627 Turcotte Way Apt. 224\nNorth Stevie, WA 31635-2654', '4', '10', 1931, '52', '28', 'totam', 'adipisci', 'est', 'ut', 'Grayson Little', 1948, 'cum', 'aperiam', 'illo', 'delectus', 0, 0, 61, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(28, 9, '27', '2086', 'Owen', '97885 Domenic Skyway\nWest Tyshawnton, GU 05992-0687', '4', '4', 4205, '54', '29', 'excepturi', 'unde', 'molestias', 'sed', 'Shanny Boyle', 1963, 'illo', 'molestias', 'dolores', 'consequuntur', 0, 0, 30, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(29, 9, '28', '1257', 'Owen', '45233 Kennith Circle Apt. 032\nNolanchester, ME 77970-2531', '3', '4', 5579, '56', '30', 'commodi', 'sequi', 'sed', 'saepe', 'Mrs. Flo Connelly', 1945, 'rerum', 'cupiditate', 'rem', 'ut', 0, 0, 79, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(30, 10, '29', '9356', 'Jerome', '776 Emory Underpass\nAyanaport, VI 89890-4573', '3', '7', 3040, '58', '31', 'laudantium', 'culpa', 'illo', 'sit', 'Clint O''Connell', 2015, 'nemo', 'facilis', 'voluptates', 'explicabo', 0, 0, 74, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(31, 1, '30', '1343', 'Javier', '68541 Pattie Ports Apt. 712\nConroyville, AE 53921-6944', '3', '6', 7459, '60', '32', 'iste', 'in', 'cumque', 'iste', 'Percy Davis', 1985, 'quibusdam', 'cupiditate', 'explicabo', 'saepe', 0, 0, 71, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(32, 1, '31', '1281', 'Javier', '020 Walker Flat Apt. 686\nSchillerport, ID 96242', '10', '4', 7699, '62', '33', 'error', 'nisi', 'qui', 'vero', 'Hunter Reichel', 1991, 'praesentium', 'omnis', 'est', 'et', 0, 0, 78, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(33, 3, '32', '1884', 'Abigayle', '5185 Littel Harbor Apt. 216\nCronaview, AL 47832', '6', '7', 7412, '64', '34', 'non', 'quam', 'iure', 'molestiae', 'Devyn Schimmel', 1954, 'est', 'neque', 'sint', 'iusto', 0, 0, 68, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(34, 9, '33', '1624', 'Owen', '923 Abagail Well\nWest Jermeymouth, CO 93416', '10', '7', 1090, '66', '35', 'quia', 'molestiae', 'odio', 'aspernatur', 'Jesus Treutel', 1979, 'maiores', 'debitis', 'modi', 'qui', 0, 0, 29, '2016-09-22 01:02:33', '2016-09-22 01:02:33', ''),
(35, 10, '34', '7108', 'Jerome', '34472 Pfannerstill Knoll\nNorth Eda, DE 63382-8141', '6', '5', 6467, '68', '36', 'nostrum', 'dolores', 'eos', 'esse', 'Mrs. Alexandra Schoen III', 1940, 'distinctio', 'exercitationem', 'aliquid', 'aut', 0, 0, 67, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(36, 2, '35', '3993', 'Bertrand', '552 Rutherford Village\nNew Samantha, MN 15834', '1', '3', 6095, '70', '37', 'minus', 'sunt', 'illum', 'iusto', 'Zella Rippin DDS', 1935, 'delectus', 'magni', 'voluptas', 'dolorem', 0, 0, 43, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(37, 1, '36', '8106', 'Javier', '33061 Baumbach Track\nTavaresfort, UT 88133-8826', '6', '7', 6541, '72', '38', 'nihil', 'odit', 'omnis', 'fuga', 'Dean Davis', 2015, 'hic', 'quibusdam', 'quos', 'nulla', 0, 0, 42, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(38, 3, '37', '2467', 'Abigayle', '2038 Braun Street Suite 332\nPort Meda, DC 44635-0511', '6', '1', 1609, '74', '39', 'voluptatum', 'molestias', 'excepturi', 'quis', 'Ernestine Luettgen', 1970, 'nihil', 'enim', 'dicta', 'ipsam', 0, 0, 54, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(39, 1, '38', '8471', 'Javier', '0176 Connie Fields Suite 565\nWest Carol, IA 40438-7143', '1', '5', 2997, '76', '40', 'et', 'harum', 'quam', 'velit', 'Dr. Rhiannon Johns Sr.', 1955, 'laboriosam', 'nam', 'animi', 'ut', 0, 0, 97, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(40, 8, '39', '5053', 'Sonny', '003 Thomas Mountain\nWest Mollybury, AP 52502', '2', '8', 6605, '78', '41', 'molestias', 'repellendus', 'dignissimos', 'ad', 'Kane Bode', 1951, 'sunt', 'qui', 'aut', 'tenetur', 0, 0, 32, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(41, 3, '40', '8217', 'Abigayle', '307 Lynch Island Suite 161\nBethanyfurt, MD 51755', '4', '8', 6797, '80', '42', 'possimus', 'et', 'quia', 'mollitia', 'Nickolas Monahan', 1983, 'eaque', 'aut', 'nihil', 'et', 0, 0, 41, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(42, 8, '41', '8567', 'Sonny', '86668 Hackett Orchard Apt. 366\nPort Erich, PR 74489-8357', '8', '6', 4727, '82', '43', 'consequatur', 'hic', 'perspiciatis', 'quis', 'Mrs. Barbara Runolfsdottir', 2014, 'ipsam', 'quis', 'voluptatem', 'aut', 0, 0, 48, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(43, 4, '42', '8755', 'Jessy', '843 Neal Isle\nTaylormouth, MS 56991-5207', '5', '2', 2225, '84', '44', 'ipsam', 'est', 'consequatur', 'voluptatem', 'Guadalupe Schulist', 1943, 'velit', 'assumenda', 'est', 'architecto', 0, 0, 92, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(44, 2, '43', '4052', 'Bertrand', '81042 Norval Mews\nHarbermouth, AP 32083-7733', '1', '3', 2683, '86', '45', 'sed', 'autem', 'dolor', 'voluptatem', 'Marge Aufderhar', 1903, 'autem', 'molestias', 'minus', 'atque', 0, 0, 47, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(45, 8, '44', '9483', 'Sonny', '654 Cremin Street Suite 741\nNorth Linnie, NH 93796', '8', '7', 2473, '88', '46', 'molestias', 'laudantium', 'totam', 'accusamus', 'Elias Gleichner', 1969, 'fuga', 'ullam', 'soluta', 'impedit', 0, 0, 43, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(46, 10, '45', '2495', 'Jerome', '99806 Emery Creek\nShemarland, UT 14874-7531', '5', '10', 3589, '90', '47', 'quidem', 'consequuntur', 'totam', 'et', 'Katelynn Macejkovic', 1966, 'omnis', 'impedit', 'sed', 'dolorem', 0, 0, 74, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(47, 7, '46', '9425', 'Andres', '53045 Swaniawski Forks Apt. 027\nEast Kimberly, SC 03327', '7', '7', 4931, '92', '48', 'velit', 'voluptates', 'praesentium', 'iure', 'Mozell Daniel', 1962, 'molestiae', 'neque', 'expedita', 'quos', 0, 0, 79, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(48, 1, '47', '9405', 'Javier', '96970 Roxanne Burg Apt. 755\nGoldnerfurt, MO 44012-6443', '8', '5', 6819, '94', '49', 'ipsam', 'sint', 'sed', 'pariatur', 'Yoshiko Weber', 1962, 'unde', 'quos', 'est', 'voluptas', 0, 0, 43, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(49, 4, '48', '7021', 'Jessy', '682 Ankunding Well\nPaucekchester, FL 09029-6868', '9', '4', 2405, '96', '50', 'repellendus', 'distinctio', 'ducimus', 'blanditiis', 'Ms. Camilla Hilll V', 1994, 'nemo', 'quas', 'est', 'natus', 0, 0, 77, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(50, 1, '49', '7422', 'Javier', '2369 Armstrong Knolls\nFletcherland, MI 30275', '4', '6', 4164, '98', '51', 'autem', 'excepturi', 'dicta', 'voluptatem', 'Domenic Schamberger', 1948, 'porro', 'odio', 'dolore', 'rerum', 0, 0, 61, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(51, 2, '50', '2407', 'Bertrand', '720 Renner Landing Apt. 952\nPort Mikel, MP 45342', '5', '8', 1227, '100', '52', 'aut', 'rerum', 'dignissimos', 'illo', 'Mr. Maritza Green Sr.', 1952, 'in', 'sequi', 'ad', 'in', 0, 0, 35, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(52, 5, '51', '422', 'Cordelia', '408 Mireille Cliffs Apt. 761\nCoralieland, GU 68512', '5', '8', 2410, '102', '53', 'qui', 'vitae', 'quia', 'aut', 'Ms. Lennie Kassulke', 1993, 'velit', 'et', 'voluptate', 'sunt', 0, 0, 13, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(53, 9, '52', '9762', 'Owen', '151 Hintz Vista Apt. 260\nDevonbury, RI 53502-8552', '7', '7', 4463, '104', '54', 'minus', 'voluptatum', 'nihil', 'impedit', 'Alison Kutch', 1970, 'rerum', 'quibusdam', 'itaque', 'quam', 0, 0, 19, '2016-09-22 01:02:34', '2016-09-22 01:02:34', ''),
(54, 9, '53', '582', 'Owen', '656 Genesis Cape Suite 347\nEast Alan, AZ 47141-8521', '1', '9', 5360, '106', '55', 'ducimus', 'qui', 'commodi', 'autem', 'Garett Hagenes', 1928, 'est', 'consectetur', 'reiciendis', 'non', 0, 0, 97, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(55, 6, '54', '6799', 'Arnaldo', '699 Marietta Key Suite 777\nWest Ryann, GA 37328-9544', '4', '4', 1944, '108', '56', 'et', 'aut', 'placeat', 'iure', 'Ms. Daisy Skiles Sr.', 1965, 'illo', 'ut', 'cumque', 'et', 0, 0, 34, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(56, 3, '55', '4294', 'Abigayle', '407 Jacobson Square\nHauckburgh, DC 48619-7328', '6', '4', 1515, '110', '57', 'eos', 'suscipit', 'in', 'libero', 'Tiara Schmitt', 1940, 'mollitia', 'ullam', 'rerum', 'blanditiis', 0, 0, 92, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(57, 2, '56', '3112', 'Bertrand', '1797 Mosciski Villages\nNolanport, GA 80457-9931', '10', '5', 3192, '112', '58', 'eligendi', 'ducimus', 'nostrum', 'voluptas', 'Blair Hermiston', 2002, 'quidem', 'magni', 'alias', 'voluptas', 0, 0, 60, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(58, 10, '57', '3258', 'Jerome', '32452 Brenda Springs\nKuphalberg, MS 22662-1897', '4', '2', 5664, '114', '59', 'vel', 'saepe', 'est', 'ut', 'Adeline Bruen', 1932, 'ex', 'aut', 'eos', 'voluptatem', 0, 0, 100, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(59, 6, '58', '1200', 'Arnaldo', '868 Felicita Inlet\nPort Emilianobury, LA 49112', '4', '2', 4824, '116', '60', 'et', 'quam', 'eos', 'repudiandae', 'Miss Isaiah Feil', 1997, 'magni', 'fuga', 'sint', 'molestias', 0, 0, 44, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(60, 2, '59', '732', 'Bertrand', '9077 Kassandra Vista\nWest Jaydashire, MT 02628-3171', '8', '7', 2956, '118', '61', 'culpa', 'incidunt', 'rerum', 'voluptatem', 'Rosalinda Labadie', 1975, 'non', 'odio', 'omnis', 'eos', 0, 0, 58, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(61, 8, '60', '489', 'Sonny', '240 Wuckert Terrace Suite 999\nEast Abbieview, LA 88675', '9', '3', 2043, '120', '62', 'labore', 'architecto', 'minima', 'qui', 'Dane Torp', 1922, 'laboriosam', 'veniam', 'ut', 'voluptatem', 0, 0, 28, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(62, 2, '61', '9651', 'Bertrand', '750 Joana Vista\nLake Vanceshire, CT 19387', '3', '6', 3274, '122', '63', 'sint', 'et', 'et', 'porro', 'Yessenia Mueller', 1992, 'ullam', 'laborum', 'nemo', 'quod', 0, 0, 88, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(63, 4, '62', '146', 'Jessy', '53450 Abshire Loaf Suite 253\nWiegandfurt, WY 15996', '9', '8', 3667, '124', '64', 'iure', 'ipsa', 'voluptatem', 'et', 'Tiana Hilll', 1911, 'error', 'et', 'voluptas', 'quia', 0, 0, 4, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(64, 1, '63', '748', 'Javier', '04053 Kacie Dam\nYasminborough, KY 86269', '2', '8', 4702, '126', '65', 'et', 'omnis', 'et', 'ad', 'Hunter Gerhold', 1930, 'labore', 'deserunt', 'placeat', 'enim', 0, 0, 65, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(65, 2, '64', '9322', 'Bertrand', '3336 Johnston Unions\nAngiefort, WI 10075', '4', '8', 6379, '128', '66', 'pariatur', 'nesciunt', 'quaerat', 'qui', 'Erin Dare', 2000, 'corrupti', 'incidunt', 'omnis', 'quam', 0, 0, 76, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(66, 2, '65', '5674', 'Bertrand', '3937 Judy Flats\nEast Herminia, NH 52119', '5', '6', 1209, '130', '67', 'quibusdam', 'neque', 'aut', 'consequatur', 'Ursula Tromp', 2012, 'enim', 'ad', 'veniam', 'doloremque', 0, 0, 60, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(67, 5, '66', '2131', 'Cordelia', '16638 Leonie Glens\nBraunfort, IN 97988', '6', '4', 2642, '132', '68', 'quae', 'dolor', 'incidunt', 'exercitationem', 'Jeanie Hirthe', 1910, 'minima', 'ea', 'mollitia', 'in', 0, 0, 61, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(68, 10, '67', '7296', 'Jerome', '868 Hyatt Tunnel Suite 810\nEast Luzmouth, AE 50846', '4', '10', 2216, '134', '69', 'eos', 'autem', 'nam', 'alias', 'Abdiel Schulist', 1919, 'autem', 'iste', 'at', 'fugit', 0, 0, 23, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(69, 6, '68', '3432', 'Arnaldo', '8740 Jedediah Land Suite 484\nOsinskiberg, DE 69815', '9', '10', 7212, '136', '70', 'accusamus', 'quo', 'libero', 'enim', 'Mr. Sierra Haag IV', 1913, 'molestiae', 'molestias', 'dolor', 'laborum', 0, 0, 73, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(70, 4, '69', '7740', 'Jessy', '7035 Dach Rapids\nKristastad, AS 16931-4628', '8', '5', 6415, '138', '71', 'temporibus', 'qui', 'itaque', 'nisi', 'Aletha O''Hara', 1998, 'perspiciatis', 'error', 'vel', 'voluptatem', 0, 0, 40, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(71, 9, '70', '4681', 'Owen', '7941 Joelle Mill Apt. 064\nNorth Reva, PW 12655', '3', '9', 7846, '140', '72', 'qui', 'tempore', 'aut', 'aut', 'Marcel Kuhlman', 1914, 'alias', 'et', 'non', 'fuga', 0, 0, 86, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(72, 9, '71', '3783', 'Owen', '9359 Lesch Pines\nLupetown, AL 85572', '9', '5', 6178, '142', '73', 'non', 'ratione', 'rem', 'nobis', 'Nelson Johns Jr.', 1901, 'accusamus', 'aut', 'optio', 'dolores', 0, 0, 30, '2016-09-22 01:02:35', '2016-09-22 01:02:35', ''),
(73, 6, '72', '5724', 'Arnaldo', '2157 Weimann Curve\nNew Metashire, AS 36505', '8', '3', 1175, '144', '74', 'provident', 'ea', 'delectus', 'dolor', 'Karli Harber MD', 2011, 'vel', 'adipisci', 'possimus', 'ea', 0, 0, 99, '2016-09-22 01:02:36', '2016-09-22 01:02:36', ''),
(74, 1, '73', '7750', 'Javier', '38144 Della Drive Apt. 359\nPort Theodore, VT 45851-2619', '4', '3', 6339, '146', '75', 'repellat', 'ut', 'dolor', 'aut', 'Junius Marks', 1998, 'assumenda', 'voluptatem', 'vitae', 'mollitia', 0, 0, 77, '2016-09-22 01:02:36', '2016-09-22 01:02:36', ''),
(75, 5, '74', '8150', 'Cordelia', '86019 Kerluke Place\nReinholdmouth, RI 43529-3956', '3', '4', 6636, '148', '76', 'adipisci', 'quo', 'accusantium', 'enim', 'Abner Gerlach', 2008, 'commodi', 'neque', 'commodi', 'quis', 0, 0, 20, '2016-09-22 01:02:36', '2016-09-22 01:02:36', ''),
(76, 2, '75', '3821', 'Bertrand', '4268 Braun Mountain Suite 540\nWilliamsonfort, AS 54725', '3', '4', 4379, '150', '77', 'quia', 'sint', 'iusto', 'placeat', 'Meaghan Collins', 1972, 'vel', 'deserunt', 'nihil', 'ex', 0, 0, 89, '2016-09-22 01:02:36', '2016-09-22 01:02:36', ''),
(77, 4, '76', '5997', 'Jessy', '105 Sofia Station\nPort Leilani, AL 20041', '3', '10', 2233, '152', '78', 'nulla', 'vel', 'et', 'aliquid', 'Lizeth Connelly', 1964, 'inventore', 'unde', 'minima', 'eaque', 0, 0, 55, '2016-09-22 01:02:36', '2016-09-22 01:02:36', ''),
(78, 1, '77', '5591', 'Javier', '495 Waters Groves\nJeramyville, TX 96469-2159', '10', '1', 4748, '154', '79', 'ex', 'et', 'assumenda', 'aliquid', 'Mr. Ericka Morissette DDS', 1929, 'est', 'quaerat', 'nulla', 'natus', 0, 0, 95, '2016-09-22 01:02:36', '2016-09-22 01:02:36', ''),
(79, 2, '78', '1603', 'Bertrand', '54950 Raynor Plains Suite 567\nWest Angelburgh, CA 47024-2107', '8', '9', 7374, '156', '80', 'ea', 'et', 'aut', 'in', 'Miss Lindsey Beatty I', 2003, 'dicta', 'aliquid', 'aperiam', 'sapiente', 0, 0, 47, '2016-09-22 01:02:36', '2016-09-22 01:02:36', ''),
(80, 1, '79', '2037', 'Javier', '901 Romaine Groves Apt. 223\nMantefort, IL 26394', '1', '3', 6939, '158', '81', 'omnis', 'facilis', 'quo', 'iusto', 'Brannon Collier', 1960, 'sit', 'voluptatem', 'quis', 'eius', 0, 0, 46, '2016-09-22 01:02:36', '2016-09-22 01:02:36', ''),
(81, 2, '80', '4266', 'Bertrand', '42211 Malcolm Spurs Apt. 552\nLednerville, PR 70000-1345', '8', '9', 2860, '160', '82', 'pariatur', 'molestias', 'voluptas', 'optio', 'Miguel Marks DVM', 2003, 'fuga', 'error', 'quis', 'id', 0, 0, 74, '2016-09-22 01:02:36', '2016-09-22 01:02:36', ''),
(82, 7, '81', '478', 'Andres', '58185 Cole Wells\nAdelialand, PW 77745-8785', '6', '6', 7005, '162', '83', 'recusandae', 'labore', 'voluptatibus', 'quasi', 'Anthony Jacobson', 1914, 'vitae', 'magni', 'dolor', 'tempora', 0, 0, 32, '2016-09-22 01:02:36', '2016-09-22 01:02:36', ''),
(83, 7, '82', '5961', 'Andres', '969 Hayes Ports\nKreigerberg, SD 12248', '8', '8', 4937, '164', '84', 'laborum', 'at', 'facere', 'quia', 'Dixie Johnston', 1979, 'tenetur', 'est', 'veniam', 'id', 0, 0, 61, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(84, 2, '83', '6249', 'Bertrand', '129 Halvorson Run\nRobelside, DE 01168-7184', '8', '5', 1709, '166', '85', 'et', 'dicta', 'qui', 'et', 'Mellie Smith', 1900, 'ipsam', 'explicabo', 'illo', 'molestiae', 0, 0, 32, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(85, 2, '84', '1639', 'Bertrand', '990 Bosco Place Apt. 580\nBaileyborough, NC 52589-7261', '2', '2', 7020, '168', '86', 'ipsum', 'labore', 'ea', 'et', 'Alysa Johns', 1956, 'quibusdam', 'quos', 'occaecati', 'odit', 0, 0, 59, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(86, 6, '85', '204', 'Arnaldo', '43629 Lenore Neck Apt. 150\nLelandmouth, RI 25399', '6', '8', 5115, '170', '87', 'id', 'sequi', 'blanditiis', 'consequatur', 'Francesca Schuppe', 1931, 'debitis', 'laboriosam', 'quisquam', 'et', 0, 0, 91, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(87, 1, '86', '1309', 'Javier', '6545 Buck Underpass Suite 003\nNew Justynport, FM 98588-4786', '8', '10', 2511, '172', '88', 'odio', 'molestiae', 'ut', 'assumenda', 'Berta Bergnaum DDS', 1918, 'error', 'autem', 'voluptatem', 'harum', 0, 0, 55, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(88, 7, '87', '4958', 'Andres', '759 Benjamin Burg Suite 743\nWest Montanafurt, KS 19566-0310', '4', '3', 2297, '174', '89', 'fugit', 'eligendi', 'et', 'ex', 'Miss Sedrick Grady III', 2011, 'odio', 'voluptate', 'ut', 'ex', 0, 0, 78, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(89, 6, '88', '4349', 'Arnaldo', '00667 McCullough Springs\nJonathonland, MN 55333', '8', '6', 3418, '176', '90', 'dolores', 'occaecati', 'voluptatem', 'commodi', 'Mrs. Adam Mann', 1927, 'consequuntur', 'rem', 'et', 'et', 0, 0, 37, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(90, 3, '89', '8347', 'Abigayle', '88349 Stroman Plain\nWolfberg, NM 40143', '8', '6', 7792, '178', '91', 'fugit', 'id', 'veniam', 'perferendis', 'Miss Micaela Rath', 2014, 'eum', 'culpa', 'cupiditate', 'consequatur', 0, 0, 20, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(91, 6, '90', '9690', 'Arnaldo', '04845 Spinka Landing\nPort Jerroldstad, OR 73139', '7', '4', 1408, '180', '92', 'expedita', 'veniam', 'accusantium', 'harum', 'Gavin Murray DVM', 2009, 'quas', 'quod', 'doloribus', 'voluptatibus', 0, 0, 13, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(92, 2, '91', '7428', 'Bertrand', '789 Tate Passage Suite 048\nSouth Ashley, TX 13472-4295', '9', '4', 1444, '182', '93', 'debitis', 'voluptas', 'exercitationem', 'molestiae', 'Dr. Pattie Anderson Jr.', 1916, 'est', 'nesciunt', 'accusamus', 'excepturi', 0, 0, 25, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(93, 2, '92', '5474', 'Bertrand', '833 Williamson Forge Apt. 006\nJaskolskichester, NH 46453', '1', '6', 2503, '184', '94', 'fugit', 'vitae', 'quidem', 'optio', 'Marilyne Weissnat', 1990, 'ipsum', 'voluptatem', 'optio', 'reprehenderit', 0, 0, 12, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(94, 7, '93', '6246', 'Andres', '4915 Borer Squares Apt. 898\nKimberlyfurt, MP 83139-2332', '2', '9', 4862, '186', '95', 'est', 'est', 'asperiores', 'non', 'Rita Beatty', 1954, 'qui', 'et', 'quae', 'placeat', 0, 0, 15, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(95, 7, '94', '7577', 'Andres', '6873 Jazlyn Brook\nWest Leann, MT 73728-0035', '7', '10', 7798, '188', '96', 'quo', 'est', 'et', 'et', 'Elta Connelly', 2008, 'quibusdam', 'et', 'eos', 'qui', 0, 0, 70, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(96, 9, '95', '5828', 'Owen', '40638 Wolff Village Apt. 186\nSpencerport, AZ 83448', '10', '2', 5751, '190', '97', 'recusandae', 'ducimus', 'repellendus', 'error', 'Mr. Kennedy Strosin', 1909, 'non', 'officiis', 'numquam', 'numquam', 0, 0, 72, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(97, 7, '96', '7252', 'Andres', '153 Nader Shore Apt. 580\nHallehaven, VA 08031', '6', '2', 1313, '192', '98', 'laudantium', 'molestiae', 'repellat', 'eum', 'Anastasia Bahringer', 1955, 'nisi', 'autem', 'omnis', 'fugiat', 0, 0, 61, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(98, 2, '97', '9987', 'Bertrand', '4755 Vallie Spur\nSwaniawskichester, WY 94520-2043', '10', '3', 4302, '194', '99', 'ut', 'sunt', 'corrupti', 'et', 'Rosalee Hegmann', 1900, 'blanditiis', 'dolores', 'porro', 'vel', 0, 0, 46, '2016-09-22 01:02:37', '2016-09-22 01:02:37', ''),
(99, 7, '98', '8876', 'Andres', '720 Maurice Roads\nVitoborough, AZ 52557-2935', '4', '6', 5394, '196', '100', 'quia', 'quidem', 'et', 'laboriosam', 'Myron Harris', 1917, 'beatae', 'consectetur', 'labore', 'ea', 0, 0, 85, '2016-09-22 01:02:38', '2016-09-22 01:02:38', ''),
(100, 3, '99', '1379', 'Abigayle', '1763 Kendrick Causeway\nLake Waldo, MP 74045-0859', '1', '5', 1047, '198', '101', 'eaque', 'molestiae', 'qui', 'sunt', 'Ted Parker', 2001, 'recusandae', 'necessitatibus', 'animi', 'quia', 0, 0, 44, '2016-09-22 01:02:38', '2016-09-22 01:02:38', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 1, '$2y$10$asJxKsCOl.pZNSw0bUesC.K8qWb6lxDU4K86UoUH3HXp04qctvyxW', 'lyea4kZky5LT3Siw2nmIAj11xPwpBZNLWnnjNRbdk9EfWrtTnJI8kZJrnSkI', '2016-09-22 01:02:26', '2016-09-30 10:01:22'),
(2, 'Kepala Desa', 'kepaladesa@gmail.com', 2, '$2y$10$HB8F6eZncSovgOULndrEN.EXtuhxssAVYHyEc4y6miXb6oLgCaK4S', NULL, '2016-09-22 01:02:26', '2016-09-22 01:02:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konflik`
--
ALTER TABLE `konflik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konflik_tanah_id_foreign` (`tanah_id`);

--
-- Indexes for table `koordinat`
--
ALTER TABLE `koordinat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `koordinat_tanah_id_foreign` (`tanah_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pemilik_no_ktp_unique` (`no_ktp`);

--
-- Indexes for table `riwayat_pemilik_tanah`
--
ALTER TABLE `riwayat_pemilik_tanah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_pemilik_tanah_tanah_id_foreign` (`tanah_id`);

--
-- Indexes for table `surat_riwayat_pemilik_tanah`
--
ALTER TABLE `surat_riwayat_pemilik_tanah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `surat_riwayat_pemilik_tanah_tanah_id_unique` (`tanah_id`);

--
-- Indexes for table `surat_sppf`
--
ALTER TABLE `surat_sppf`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `surat_sppf_tanah_id_unique` (`tanah_id`);

--
-- Indexes for table `tanah`
--
ALTER TABLE `tanah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tanah_no_sppt_pbb_unique` (`no_sppt_pbb`),
  ADD KEY `tanah_pemilik_id_foreign` (`pemilik_id`);

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
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `konflik`
--
ALTER TABLE `konflik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `koordinat`
--
ALTER TABLE `koordinat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `riwayat_pemilik_tanah`
--
ALTER TABLE `riwayat_pemilik_tanah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_riwayat_pemilik_tanah`
--
ALTER TABLE `surat_riwayat_pemilik_tanah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_sppf`
--
ALTER TABLE `surat_sppf`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `tanah`
--
ALTER TABLE `tanah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `konflik`
--
ALTER TABLE `konflik`
  ADD CONSTRAINT `konflik_tanah_id_foreign` FOREIGN KEY (`tanah_id`) REFERENCES `tanah` (`id`);

--
-- Constraints for table `koordinat`
--
ALTER TABLE `koordinat`
  ADD CONSTRAINT `koordinat_tanah_id_foreign` FOREIGN KEY (`tanah_id`) REFERENCES `tanah` (`id`);

--
-- Constraints for table `riwayat_pemilik_tanah`
--
ALTER TABLE `riwayat_pemilik_tanah`
  ADD CONSTRAINT `riwayat_pemilik_tanah_tanah_id_foreign` FOREIGN KEY (`tanah_id`) REFERENCES `tanah` (`id`);

--
-- Constraints for table `surat_riwayat_pemilik_tanah`
--
ALTER TABLE `surat_riwayat_pemilik_tanah`
  ADD CONSTRAINT `surat_riwayat_pemilik_tanah_tanah_id_foreign` FOREIGN KEY (`tanah_id`) REFERENCES `tanah` (`id`);

--
-- Constraints for table `surat_sppf`
--
ALTER TABLE `surat_sppf`
  ADD CONSTRAINT `surat_sppf_tanah_id_foreign` FOREIGN KEY (`tanah_id`) REFERENCES `tanah` (`id`);

--
-- Constraints for table `tanah`
--
ALTER TABLE `tanah`
  ADD CONSTRAINT `tanah_pemilik_id_foreign` FOREIGN KEY (`pemilik_id`) REFERENCES `pemilik` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
