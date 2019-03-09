-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 20 Oca 2018, 15:50:57
-- Sunucu sürümü: 10.1.30-MariaDB
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `urunmark_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `smtp_server` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `smtp_email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `smtp_pass` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda` text COLLATE utf8_turkish_ci NOT NULL,
  `iletisim` text COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_adi`, `keywords`, `description`, `name`, `smtp_server`, `smtp_port`, `smtp_email`, `smtp_pass`, `adres`, `sehir`, `tel`, `fax`, `email`, `hakkimizda`, `iletisim`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'www.urunmarkt.com', 'ürünburada, urun-burada.com, elektronik, giyim, kozmetik, ', 'Online Alışveriş Sitesi', 'Online Alışveriş Sitesi', 'lkjasd', 0, 'lkjasllskdf', '', 'Mehmet Ali Paşa Mh. Zincirlikuyu Cd. Emin Sipahi Sk. No:44/1', 'KOCAELİ', '05359491395', '', 'oguzz.dereci@gmail.com', '<strong>Karab&uuml;k &Uuml;niversitesi Bilgisayar M&uuml;hendisliği B&ouml;l&uuml;m&uuml;</strong>&#39;nde eğitimi verilen <strong>PHP Web Programlama</strong> dersi kapsamında geliştirilen bir E-Ticaret web sitesidir.&nbsp;', '<br />\r\n<br />\r\n<strong>Telefon :&nbsp;</strong>0 (850) 441 41 41<br />\r\n<br />\r\n<strong>E-mail&nbsp; &nbsp;:&nbsp;</strong>info@urunmarkt.com<br />\r\n<br />\r\n<strong>Adres&nbsp; &nbsp;:</strong>&nbsp;Mehmet Ali Paşa Mh. Zincirlikuyu Cd. Emin Sipahi Sk. No:44/1<br />\r\n<br />\r\n<strong>Facebook :&nbsp;</strong>www.facebook.com/urunmarkt<br />\r\n<br />\r\n<strong>Twitter :&nbsp;</strong>www.twitter.com/urunmarkt', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.instagram.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_ad`) VALUES
(1, 'Elektronik'),
(2, 'Giyim'),
(3, 'Kozmetik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(50) NOT NULL,
  `adsoy` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `kAdi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adres` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `adsoy`, `cinsiyet`, `kAdi`, `sifre`, `yetki`, `durum`, `resim`, `tarih`, `adres`, `tel`) VALUES
(5, 'Oğuzhan Dereci', 'Erkek', 'oguzz.dereci@gmail.com', '123456', 'Editör', 'Aktif', 'oguz.jpg', '2017-12-11 23:00:55', 'aslldkjasdasjdşasda', '05359491395');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimslider`
--

CREATE TABLE `resimslider` (
  `slider_id` int(11) NOT NULL,
  `resim_kategori` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_resim` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_baslik1` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_baslik2` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `resimslider`
--

INSERT INTO `resimslider` (`slider_id`, `resim_kategori`, `slider_resim`, `slider_baslik1`, `slider_baslik2`) VALUES
(1, 'Giyim', 'slider_1.jpg', 'TAZE GELDİ..', '2018 Sonbahar - Kış Koleksiyonu'),
(2, 'Kozmetik', 'slider_2.jpg', '', ''),
(3, 'Elektronik', 'slider_3.jpg', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(10) NOT NULL,
  `urun_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urun_kod` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_kategori` int(11) NOT NULL,
  `urun_Afiyat` float NOT NULL,
  `urun_Sfiyat` float NOT NULL,
  `urun_stok` int(10) NOT NULL,
  `urun_aciklama` varchar(10000) COLLATE utf8_turkish_ci NOT NULL,
  `urun_Akelime` varchar(5000) COLLATE utf8_turkish_ci NOT NULL,
  `urun_durum` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `urun_Ktarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `urun_resim` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `urun_kod`, `urun_kategori`, `urun_Afiyat`, `urun_Sfiyat`, `urun_stok`, `urun_aciklama`, `urun_Akelime`, `urun_durum`, `urun_Ktarih`, `urun_resim`) VALUES
(8, 'Acer', 'acer-101', 1, 500, 1000, 5, 'Acer 5750G Dizüstü Bilgisayar', 'acer, laptop, elektronik, acer-5750g', '', '2018-01-07 19:22:38', 'acer5750g5.jpg'),
(11, 'Asus', 'lp-101', 1, 999, 1499, 50, 'ASUS Dizüstü Bilgisayar', 'laptop, pc, asus', 'a', '2018-01-09 00:00:20', 'asus1.jpg'),
(12, 'ceket', 'ck999', 2, 500, 699, 100, 'ds\'damat', 'dsada', 'a', '2018-01-09 21:24:12', 'ceket1.jpg'),
(13, 'Kahverengi Kapşonlu Hırka', 'hk-1', 2, 15, 50, 100, 'Kahverengi Kapşonlu Hırka', 'hırka,giyim,kapşonlu', 'a', '2018-01-15 16:55:18', 'product_1.png'),
(14, 'Gömlek', 'gk-120', 2, 20, 80, 100, 'Açık taba renkli gömlek', 'gömlek,taba,giyim', '', '2018-01-15 17:22:28', 'product_9.png'),
(15, 'Garnier', 'gnr-100', 3, 5, 10, 20, 'Saf Temiz Kömürlü 150 ml ', 'kozmetik,garnier,krem', 'a', '2018-01-15 18:00:39', 'garnier_1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunresim`
--

CREATE TABLE `urunresim` (
  `urun_resim_id` int(50) NOT NULL,
  `urun_id` int(50) NOT NULL,
  `urun_resim_url` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunresim`
--

INSERT INTO `urunresim` (`urun_resim_id`, `urun_id`, `urun_resim_url`) VALUES
(6, 8, 'acer_1.png'),
(7, 8, 'acer_2.JPG'),
(8, 8, 'acer_3.png'),
(9, 11, 'asus_1.jpg'),
(10, 11, 'asus_11.jpg'),
(11, 11, 'asus_2.jpg'),
(12, 12, 'ceket_1.jpg'),
(13, 12, 'ceket_2.jpg'),
(14, 12, 'ceket_3.jpg'),
(15, 14, 'gömlek_1.jpg'),
(16, 14, 'gömlek_2.jpg'),
(17, 14, 'gömlek_3.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL,
  `uye_adsoy` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `kAdi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(11) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_adsoy`, `cinsiyet`, `kAdi`, `sifre`, `yetki`, `durum`, `resim`, `tarih`, `adres`, `tel`) VALUES
(1, 'Onur Aydın', '', 'onuraydin@hotmail.com', '123456', '', '', '', '2018-01-13 13:34:08', '', ''),
(2, 'Mertcan Güven', '', 'mertcan@hotmail.com', '456456', '', '', '', '2018-01-13 13:40:52', '', ''),
(3, 'Ömer Caner', '', 'omer@hotmail.com', '654321', '', '', '', '2018-01-13 13:42:56', '', ''),
(4, 'Emrullah Yıldırım', '', 'emrullah@hotmail.com', '123465', '', '', '', '2018-01-13 13:55:33', '', ''),
(5, 'onur aydın', '', 'Onraydn93@gmail.com', '3678', '', '', '', '2018-01-15 14:50:49', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `uye_id` int(11) NOT NULL,
  `yorum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih_saat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `urun_id`, `uye_id`, `yorum`, `tarih_saat`) VALUES
(1, 8, 1, 'Uygun fiyata kaliteli ürün', '2018-01-16 10:58:10'),
(2, 11, 1, 'kaliteli ürün', '2018-01-16 11:02:17'),
(3, 11, 1, 'kaliteli ürün', '2018-01-16 11:02:43'),
(4, 12, 2, 'Aldığım ürün 2 ay sonra kol kısmından söküldü, memnun değilim', '2018-01-16 11:05:12'),
(5, 15, 2, 'Çok memnun kaldım', '2018-01-16 11:09:28'),
(6, 14, 3, 'Severek aldığım bir ürün ', '2018-01-16 11:11:26'),
(7, 14, 3, 'güzel bir ürün', '2018-01-16 11:27:03'),
(8, 8, 2, 'asd', '2018-01-16 11:52:00'),
(9, 8, 2, 'asd', '2018-01-16 11:53:33'),
(10, 8, 2, 'asdasdasd', '2018-01-16 11:59:47'),
(11, 8, 2, 'asdasdasdasdasdasdasdasd', '2018-01-16 12:03:01'),
(12, 8, 2, 'oğuz hızarbaş', '2018-01-16 12:03:13');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resimslider`
--
ALTER TABLE `resimslider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`),
  ADD KEY `urun_kategori` (`urun_kategori`);

--
-- Tablo için indeksler `urunresim`
--
ALTER TABLE `urunresim`
  ADD PRIMARY KEY (`urun_resim_id`),
  ADD KEY `urun_id` (`urun_id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uye_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `resimslider`
--
ALTER TABLE `resimslider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `urunresim`
--
ALTER TABLE `urunresim`
  MODIFY `urun_resim_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `urunler`
--
ALTER TABLE `urunler`
  ADD CONSTRAINT `urunler_ibfk_1` FOREIGN KEY (`urun_kategori`) REFERENCES `kategoriler` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `urunresim`
--
ALTER TABLE `urunresim`
  ADD CONSTRAINT `urunresim_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
