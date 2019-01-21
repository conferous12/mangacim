-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb24.awardspace.net
-- Generation Time: Jan 15, 2019 at 10:32 AM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2930909_mang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bolumler`
--

CREATE TABLE `bolumler` (
  `id` int(11) NOT NULL,
  `mangaid` int(11) NOT NULL,
  `bolum` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `bolumler`
--

INSERT INTO `bolumler` (`id`, `mangaid`, `bolum`) VALUES
(10, 14, 1),
(11, 14, 2),
(12, 14, 3),
(13, 15, 1),
(15, 15, 2),
(16, 16, 1),
(17, 14, 2),
(18, 14, 3),
(19, 14, 4),
(20, 14, 5),
(21, 17, 1),
(22, 17, 2),
(23, 17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `adsoyad` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `telefon` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `telefon`, `mesaj`) VALUES
(3, 'Engin Bayram', '12', 'test'),
(4, 'Engin Bayram', '12', 'qwewqewq');

-- --------------------------------------------------------

--
-- Table structure for table `karakterler`
--

CREATE TABLE `karakterler` (
  `id` int(11) NOT NULL,
  `karakteradi` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `detay` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `gorsel` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `karakterler`
--

INSERT INTO `karakterler` (`id`, `karakteradi`, `detay`, `gorsel`) VALUES
(5, 'Gintoki', 'Edo dÃ¶neminin sonlarÄ±nda â€œAmandoâ€ adlÄ± zalim uzaylÄ±larÄ±n DÃ¼nyaâ€™yÄ± istilasÄ± baÅŸlar ve dÃ¼nyalÄ±lar ile uzaylÄ±lar arasÄ±nda bir savaÅŸ kopar. SavaÅŸ sÄ±rasÄ±nda birÃ§ok samuray hayatÄ±nÄ± kaybeder. Sonunda dÃ¼nyalÄ±lar uzaylÄ±larÄ±n silahlarÄ±na yenik dÃ¼ÅŸer ve teslim olurlar. Bu andan itibaren istediklerini yapmaya baÅŸlayan ve Edo ÅŸehrinde diledikleri gibi davranmaya baÅŸlayan Amandoâ€™lar yetmezmiÅŸ gibi hÃ¼kÃ¼met geride kalan samuraylarÄ±n kÄ±lÄ±Ã§ taÅŸÄ±masÄ±nÄ± yasaklar.  Aradan uzun zaman geÃ§er. Ä°ÅŸte Sakata Gintoki, artÄ±k samuraylara ihtiyaÃ§ duyulmayan bÃ¶yle bir dÃ¶nemde yaÅŸayan bir samuraydÄ±r. GÃ¼Ã§lÃ¼ bir uzaylÄ± olan Kagura ve bir nevi Ã¶ÄŸrencisi olan Shinpachi ile yaÅŸayan Gintoki, DÃ¼nyaâ€™yÄ± daha katlanÄ±lÄ±r bir yer kÄ±labilmek ve kiralarÄ±nÄ± Ã¶deyebilmek iÃ§in kendilerine gelen birbirinden garip gÃ¶revleri Ã¼stlenirler.', 'upload/0-285858.jpg'),
(6, 'Kaneki', 'Tokyo da insanlarÄ± yiyen gizemli hortlaklarÄ±n neden olduÄŸu gerilim dolu bir korku hikayesi baÅŸlar. Bu gizemli hortlaklarÄ±n verdiÄŸi korku tÃ¼m insanlarÄ± etkisi altÄ±na almÄ±ÅŸtÄ±r. ', 'upload/0-indir.jpg'),
(7, 'Boruto', 'Naruto kÃ¼Ã§Ã¼kken asla uslanmayan yaramaz bir ninjaydÄ±. Ama kÃ¶yÃ¼ndeki en gÃ¼Ã§lÃ¼ ninja olup kÃ¶ydeki insanlara kendini kabul ettirmek istiyordu. Sonunda bu rÃ¼yasÄ±na ulaÅŸmÄ±ÅŸtÄ± ve yÃ¼zÃ¼ Hokage daÄŸÄ±ndaki yerini almÄ±ÅŸtÄ±. Ama bu hikaye onunla alakalÄ± deÄŸil. ArtÄ±k sahne baÅŸÄ±nÄ± Narutonun oÄŸlu Borutonun Ã§ektiÄŸi yeni nesil ninjalarÄ±ndÄ±.', 'upload/0-boru.jpg'),
(8, 'Naruto', 'Naruto kÃ¼Ã§Ã¼kken asla uslanmayan yaramaz bir ninjaydÄ±. Ama kÃ¶yÃ¼ndeki en gÃ¼Ã§lÃ¼ ninja olup kÃ¶ydeki insanlara kendini kabul ettirmek istiyordu. Sonunda bu rÃ¼yasÄ±na ulaÅŸmÄ±ÅŸtÄ± ve yÃ¼zÃ¼ Hokage daÄŸÄ±ndaki yerini almÄ±ÅŸtÄ±. Ama bu hikaye onunla alakalÄ± deÄŸil. ArtÄ±k sahne baÅŸÄ±nÄ± Narutonun oÄŸlu Borutonun Ã§ektiÄŸi yeni nesil ninjalarÄ±ndÄ±.', 'upload/0-naruto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mangalar`
--

CREATE TABLE `mangalar` (
  `id` int(11) NOT NULL,
  `ad` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `detay` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `kucukgorsel` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `buyukgorsel` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `begenme` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `mangalar`
--

INSERT INTO `mangalar` (`id`, `ad`, `detay`, `kucukgorsel`, `buyukgorsel`, `begenme`) VALUES
(14, 'Gintama', 'Edo dÃ¶neminin sonlarÄ±nda â€œAmandoâ€ adlÄ± zalim uzaylÄ±larÄ±n DÃ¼nyaâ€™yÄ± istilasÄ± baÅŸlar ve dÃ¼nyalÄ±lar ile uzaylÄ±lar arasÄ±nda bir savaÅŸ kopar. SavaÅŸ sÄ±rasÄ±nda birÃ§ok samuray hayatÄ±nÄ± kaybeder. Sonunda dÃ¼nyalÄ±lar uzaylÄ±larÄ±n silahlarÄ±na yenik dÃ¼ÅŸer ve teslim olurlar. Bu andan itibaren istediklerini yapmaya baÅŸlayan ve Edo ÅŸehrinde diledikleri gibi davranmaya baÅŸlayan Amandoâ€™lar yetmezmiÅŸ gibi hÃ¼kÃ¼met geride kalan samuraylarÄ±n kÄ±lÄ±Ã§ taÅŸÄ±masÄ±nÄ± yasaklar.  Aradan uzun zaman geÃ§er. Ä°ÅŸte Sakata Gintoki, artÄ±k samuraylara ihtiyaÃ§ duyulmayan bÃ¶yle bir dÃ¶nemde yaÅŸayan bir samuraydÄ±r. GÃ¼Ã§lÃ¼ bir uzaylÄ± olan Kagura ve bir nevi Ã¶ÄŸrencisi olan Shinpachi ile yaÅŸayan Gintoki, DÃ¼nyaâ€™yÄ± daha katlanÄ±lÄ±r bir yer kÄ±labilmek ve kiralarÄ±nÄ± Ã¶deyebilmek iÃ§in kendilerine gelen birbirinden garip gÃ¶revleri Ã¼stlenirler.', 'upload/0-Gintama-gintamawp.jpg', 'upload/0-Gintama-gintamawp.jpg', 2),
(15, 'Tokyo Ghoul', 'Tokyo da insanlarÄ± yiyen gizemli hortlaklarÄ±n neden olduÄŸu gerilim dolu bir korku hikayesi baÅŸlar. Bu gizemli hortlaklarÄ±n verdiÄŸi korku tÃ¼m insanlarÄ± etkisi altÄ±na almÄ±ÅŸtÄ±r. SÄ±radan bir Ã¼niversite Ã¶ÄŸrencisi olan Kaneki, tÄ±pkÄ± kendisi gibi bir kitap kurdu olan Rize yle CafÃ© Anteiku da karÅŸÄ±laÅŸÄ±r. Kaneki, kaderinin bir gecede deÄŸiÅŸeceÄŸinin farkÄ±nda deÄŸildir.', 'upload/0-Tokyo Ghoul-554.jpg', 'upload/0-Tokyo Ghoul-554.jpg', 0),
(16, 'Boruto', 'Naruto kÃ¼Ã§Ã¼kken asla uslanmayan yaramaz bir ninjaydÄ±. Ama kÃ¶yÃ¼ndeki en gÃ¼Ã§lÃ¼ ninja olup kÃ¶ydeki insanlara kendini kabul ettirmek istiyordu. Sonunda bu rÃ¼yasÄ±na ulaÅŸmÄ±ÅŸtÄ± ve yÃ¼zÃ¼ Hokage daÄŸÄ±ndaki yerini almÄ±ÅŸtÄ±. Ama bu hikaye onunla alakalÄ± deÄŸil. ArtÄ±k sahne baÅŸÄ±nÄ± Narutonun oÄŸlu Borutonun Ã§ektiÄŸi yeni nesil ninjalarÄ±ndÄ±.', 'upload/0-Boruto-boruto.jpg', 'upload/0-Boruto-boruto.jpg', 0),
(17, 'Naruto', 'Naruto, iÃ§ine hapsedilmiÅŸ kyubii (9 kuyruklu efsanevi tilki) yÃ¼zÃ¼nden Konoha halkÄ± tarafÄ±ndan yaratÄ±k olarak gÃ¶rÃ¼lÃ¼p kenara itilmiÅŸ bir Ã§ocuktur. ', 'upload/0-Naruto-naruto.jpg', 'upload/0-Naruto-naruto.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(11) NOT NULL,
  `mangaid` int(11) NOT NULL,
  `bolumid` int(11) NOT NULL,
  `sayfagorsel` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `sira` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `mangaid`, `bolumid`, `sayfagorsel`, `sira`) VALUES
(11, 14, 10, 'upload/14-10-1.jpg', 1),
(13, 14, 10, 'upload/14-10-2.jpg', 2),
(14, 14, 10, 'upload/14-10-3.jpg', 3),
(15, 14, 10, 'upload/14-10-4.jpg', 4),
(16, 14, 10, 'upload/14-10-5.jpg', 5),
(17, 14, 10, 'upload/14-10-6.jpg', 6),
(18, 14, 10, 'upload/14-10-gintamawp.jpg', 0),
(19, 15, 13, 'upload/15-13-554.jpg', 0),
(20, 15, 13, 'upload/15-13-00.jpg', 1),
(21, 15, 13, 'upload/15-13-01.jpg', 2),
(22, 15, 13, 'upload/15-13-02.jpg', 3),
(23, 15, 13, 'upload/15-13-04.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `mangaid` int(11) NOT NULL,
  `yorum` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bolumler`
--
ALTER TABLE `bolumler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karakterler`
--
ALTER TABLE `karakterler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mangalar`
--
ALTER TABLE `mangalar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bolumler`
--
ALTER TABLE `bolumler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `karakterler`
--
ALTER TABLE `karakterler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mangalar`
--
ALTER TABLE `mangalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
