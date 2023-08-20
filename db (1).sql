-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Ağu 2023, 10:56:35
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `aboutID` int(11) NOT NULL,
  `aboutText` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`aboutID`, `aboutText`) VALUES
(0, '2023 yılında açılan yeni bir yazılım eğitim sitesi, teknolojinin hızla geliştiği ve dijital dünyanın önem kazandığı bu çağda oldukça önemli bir girişim olarak karşınıza çıkıyoruz. Bu sebeple size eğitim yanı sıra gelecek kurma fırsatı veriyoruz. Dünyanın yenilikçi yapısına ayak uydurmanızı sağlıyoruz. Bütün üyelerimize en son teknoloji ve gelişmeler ile güncel tuttuğumuz gibi geçmişdeki önemli teknolojiler ile de sizleri yazılım dünyasının aranan yüzleri haline getirmeyi planlıyoruz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `password`) VALUES
(1, 'Fırat Işıldak', 'selam123'),
(2, 'Ferhat Işıldak', '123selam');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cardlesson`
--

CREATE TABLE `cardlesson` (
  `cardLessonID` int(11) NOT NULL,
  `cardLessonImg` varchar(500) NOT NULL,
  `cardLessonTitle` varchar(250) NOT NULL,
  `cardLessonWrite` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `cardlesson`
--

INSERT INTO `cardlesson` (`cardLessonID`, `cardLessonImg`, `cardLessonTitle`, `cardLessonWrite`) VALUES
(1, 'r1.jpg', 'HTML5 ve CSS3 Eğitimleri', 'sıfırdan ileri düzey eğitim serisi. Bu seri daha özgün bir insan olmanızı sağlarken yazılıma adım atmanızı sağlar.'),
(2, 'r2.jpg', 'java', 'Adım Adım java öğrenmeye başlayacağınız örnekler ve projeler ile sizi iyi bir yazılımcı yaparken özelliklerinizi de arttırır.'),
(3, 'r3.jpg', 'C# ve .Net', 'Güncel teknolojiler ve gelişim dünyasına adım atmanızı sağlayan güncel bir eğitim video serisi içerir.'),
(4, 'r4.jpg', 'javaScript ve React', 'ileri düzey web tasarım bilgileri içeren bu kursu izleyebilmek için iyi bir tabanınızın olması öncelikli bir koşuldur.'),
(5, 'r5.jpg', 'Mysql', 'Veritabanı işlemleri ve optimizasyonu nasıl gerçekleştirilir gibi konular içerir. Verimli içerikler paylaşılır.'),
(6, 'r6.jpg', 'Temiz kod yazma', 'Bir yazılımcının yapması gereken her türlü  yapının düzenlenmesi ve okunaklı kod yazmanın püf noktaları.'),
(7, 'r7.jpg', 'Adım Adım Frontend', 'Bir tasarımcını nerden ve nasıl başlayacağını antaırken aynı zamanda nasıl özgün tasarımlar çıkarabiliriz bunun yollarını öğretiyor.  ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `educator_table`
--

CREATE TABLE `educator_table` (
  `educatorId` int(11) NOT NULL,
  `nameSurname` varchar(500) NOT NULL,
  `imgLink` varchar(500) NOT NULL,
  `aboutWrite` varchar(1000) NOT NULL,
  `faceLink` varchar(500) NOT NULL,
  `linkedinLink` varchar(500) NOT NULL,
  `githubLink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `educator_table`
--

INSERT INTO `educator_table` (`educatorId`, `nameSurname`, `imgLink`, `aboutWrite`, `faceLink`, `linkedinLink`, `githubLink`) VALUES
(1, 'Sibel Çetin', 'ekip2.jpg', 'Ege Üniversitesi Yazılım mühendisi ve yan dal donanım uzmanı.', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/'),
(2, 'Talha Karaca', 'ekip1.jpg', 'Ege Üniversitesi Yazılım mühendisi ve yan dal donanım uzmanı.', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/'),
(3, 'İpek Camcı', 'ekip3.jpg', 'Ege Üniversitesi Yazılım mühendisi ve yan dal donanım uzmanı.', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer`
--

CREATE TABLE `footer` (
  `footerID` int(11) NOT NULL,
  `footerText` varchar(200) NOT NULL,
  `footerIcon` varchar(200) NOT NULL,
  `footerAbout` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footertext`
--

CREATE TABLE `footertext` (
  `footerTextID` int(11) NOT NULL,
  `footerIcon` varchar(250) NOT NULL,
  `footerText` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `footertext`
--

INSERT INTO `footertext` (`footerTextID`, `footerIcon`, `footerText`) VALUES
(1, 'fa-solid fa-house-chimney fa-xl', 'Eşref Paşa Mah. Celal Caddesi Çiçek Apatman.'),
(2, 'fa-sharp fa-solid fa-phone-volume fa-xl', '05516483813'),
(3, 'fa-solid fa-envelope fa-xl', 'firatisildak1@gmail.com'),
(4, 'fa-sharp fa-solid fa-clock fa-xl', 'Çalışma Saatleri: Pazartesi-Cuma(10:00-18:00)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`id`, `name`, `mail`, `password`) VALUES
(19, 'Recep', 'firat@gmail.com', '147'),
(20, 'cemil', 'cemil@gmail.com', '789'),
(21, 'ahmet', 'ahmet@gmail.com', '369'),
(22, 'ipek', 'ipek@gmail.com', '453453'),
(23, 'yiğit', 'yiğit@gmail.com', '123'),
(24, 'Fırat', 'firat@gmail.com', '453453'),
(26, 'levent', 'firat@gmail.com', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menutable`
--

CREATE TABLE `menutable` (
  `id` int(11) NOT NULL,
  `menuName` varchar(50) NOT NULL,
  `menuUrl` varchar(255) NOT NULL,
  `menuIcon` varchar(255) DEFAULT NULL,
  `siralama` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `menutable`
--

INSERT INTO `menutable` (`id`, `menuName`, `menuUrl`, `menuIcon`, `siralama`) VALUES
(1, 'Anasayfa', 'index.php', 'class=\"fa-solid fa-house icon\"', 1),
(2, 'Hakkımızda', 'index.php#aboutUs', 'class=\"fa-solid fa-info icon\"', 3),
(3, 'Eğitimler', 'education.php', 'class=\"fa-solid fa-graduation-cap icon\"', 2),
(5, 'İletişim', 'index.php#opaqueRow', 'class=\"fa-solid fa-map-pin icon\"', 5),
(6, 'Eğitmenler', 'index.php#educator', 'class=\"fa-solid fa-people-group icon\"', 4),
(18, 'Giriş&Kayıt', 'login_index.php', 'class=\"fa-solid fa-right-to-bracket icon\"', 6),
(98, 'Sepet', '', 'class=\"fa-solid fa-cart-shopping icon\"', 7);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cardlesson`
--
ALTER TABLE `cardlesson`
  ADD PRIMARY KEY (`cardLessonID`);

--
-- Tablo için indeksler `educator_table`
--
ALTER TABLE `educator_table`
  ADD PRIMARY KEY (`educatorId`);

--
-- Tablo için indeksler `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footerID`);

--
-- Tablo için indeksler `footertext`
--
ALTER TABLE `footertext`
  ADD PRIMARY KEY (`footerTextID`);

--
-- Tablo için indeksler `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menutable`
--
ALTER TABLE `menutable`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `cardlesson`
--
ALTER TABLE `cardlesson`
  MODIFY `cardLessonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `educator_table`
--
ALTER TABLE `educator_table`
  MODIFY `educatorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Tablo için AUTO_INCREMENT değeri `footer`
--
ALTER TABLE `footer`
  MODIFY `footerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `footertext`
--
ALTER TABLE `footertext`
  MODIFY `footerTextID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `menutable`
--
ALTER TABLE `menutable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
