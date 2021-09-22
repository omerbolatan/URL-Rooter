-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 22 Eyl 2021, 18:40:33
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `frndmurl`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urlislem`
--

CREATE TABLE `urlislem` (
  `id` int(11) NOT NULL,
  `shorturl` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `longurl` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `urlislem`
--

INSERT INTO `urlislem` (`id`, `shorturl`, `longurl`) VALUES
(19, 'https://329553334.com', 'https://www.yusufsezer.com.tr/php-pdo-veri-ekleme/'),
(20, 'https://slf.com', 'http://localhost/phpmyadmin/index.php?route=/sql&db=frndmurl&table=urlislem&pos=0'),
(21, 'https://deneme.com', 'http://zinzinzibidi.com/web_tasarim/css3/css_te_div_ortalama'),
(22, 'https://ömer.com', 'https://www.w3schools.com/CSSref/pr_background-color.asp');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urlislem`
--
ALTER TABLE `urlislem`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urlislem`
--
ALTER TABLE `urlislem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
