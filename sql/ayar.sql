-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 26 Ağu 2019, 09:38:16
-- Sunucu sürümü: 5.7.26
-- PHP Sürümü: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ayar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

DROP TABLE IF EXISTS `ayar`;
CREATE TABLE IF NOT EXISTS `ayar` (
  `ayar_id` int(1) NOT NULL DEFAULT '0',
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteurl` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_recapctha` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_googlemap` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ayar_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_siteurl`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_adres`, `ayar_ilce`, `ayar_il`, `ayar_mesai`, `ayar_recapctha`, `ayar_googlemap`, `ayar_analystic`, `ayar_facebook`, `ayar_twitter`, `ayar_youtube`, `ayar_google`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`) VALUES
(0, 'dimg/27427Untitled-2.png', 'http://localhost/pdo/porto/', 'BeÅŸiktaÅŸ', 'Akkemik A.Åž. olarak 40 yÄ±lÄ± aÅŸkÄ±n sÃ¼redir elde ettiÄŸimiz sektÃ¶r ve endÃ¼stri deneyimini mÃ¼ÅŸterilerimize daha iyi aktarabilmek ve onlarÄ±n Ã¶zel isteklerine daha iyi cevap verebilmek adÄ±na Mapa Tedarik bÃ¶lÃ¼mÃ¼nÃ¼ oluÅŸturduk.  FarklÄ± endÃ¼strilerde ve farklÄ± koÅŸullarda Ã§alÄ±ÅŸan her firmanÄ±n farklÄ± ihtiyaÃ§larÄ± vardÄ±r. Bu ihtiyaÃ§lar, saha ziyaretleri ile en son kullanÄ±cÄ± deneyimi gÃ¶z Ã¶nÃ¼nde bulundurularak belirlenmelidir.  Mapa Tedarik ekibi, saha ziyaretleri sonucu elde ettiÄŸi bilgiler Ä±ÅŸÄ±ÄŸÄ±nda maliyet ve performans raporlarÄ± hazÄ±rlar. Fabrika, tesis ya da ÅŸantiye yetkililerine sunulan bu raporlarda farklÄ± alternatifler sunulur. AmacÄ±mÄ±z, Ã¼retim sÃ¼recinin en uygun maliyet, en kÄ±sa zaman ve en az risk ile tamamlanmasÄ±nÄ± saÄŸlamaktÄ±r.  Mapa Tedarik, ilerleyen aÅŸamalarda gerek saha iÃ§i uygulamalar gerekse de Ã¼retim hattÄ±nda teslim hizmeti ile, uygulama ve stoklanma aÅŸamasÄ±nda hizmet vermeye devam edecektir.', 'pdo, umut, akkemiksasd', 'Umut Akkemik', '0850 840 80 76', '0850 840 80 76', '0850 840 80 76', 'umutakkemik@gmail.com', 'cumhuriyet caddesi erzurum merkez', 'asdasdasd', 'ErzurumÃ¶Ã¶asd', '07:00 - 24:00', 'asd', 'AIzaSyCkQlXjJv7bw6tu2wa_l7uSE6044t9vob8', 'asd', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.youtube.com', 'http://www.google.coma', 'umutakkemik@gmail.comasd', 'umutakkemik@gmail.com', '1903', '25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `hak_id` int(1) NOT NULL,
  `hak_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hak_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hak_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hak_vizyon` text COLLATE utf8_turkish_ci NOT NULL,
  `hak_misyon` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`hak_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hak_id`, `hak_baslik`, `hak_icerik`, `hak_video`, `hak_vizyon`, `hak_misyon`) VALUES
(0, 'UA YazÄ±lÄ±m', '<p>2019 YÄ±lÄ±nda YazÄ±lÄ±m sekt&ouml;r&uuml;ne adÄ±mÄ±nÄ± atan kuruluÅŸun php dilini &ouml;ÄŸrenip ilk &uuml;r&uuml;n&uuml;n&uuml; sunmasÄ±</p>\r\n', 'JQEtix0gfiA', 'Vizyon, bahsedilen kurumun/firmanÄ±n/topluluÄŸun gelecekteki hedefleri hakkÄ±nda bilgi verir. â€œAmacÄ±mÄ±z nedir, nerelere gelmek istiyoruz?â€ gibi sorularÄ± yanÄ±tlar. Misyon ise, bahsedilen kurumun/firmanÄ±n/topluluÄŸun kurulma amacÄ± hakkÄ±nda bilgi verir.', 'misyon');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

DROP TABLE IF EXISTS `icerik`;
CREATE TABLE IF NOT EXISTS `icerik` (
  `icerik_id` int(11) NOT NULL AUTO_INCREMENT,
  `icerik_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_zaman` datetime NOT NULL,
  `icerik_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_keyword` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`icerik_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`icerik_id`, `icerik_resimyol`, `icerik_ad`, `icerik_zaman`, `icerik_detay`, `icerik_keyword`, `icerik_durum`) VALUES
(12, 'dimg/slider/26437256732393723681a052c657247203.59ce16a8dcc52.jpg', 'BeÅŸiktaÅŸ', '2019-08-16 12:42:33', '<h1>BeÅŸiktaÅŸ sezona iyi baÅŸlÄ±yor</h1>\r\n\r\n<p>BeÅŸiktaÅŸ, S&uuml;per Lig tarihindeki a&ccedil;Ä±lÄ±ÅŸ karÅŸÄ±laÅŸmalarÄ±nda 37 galibiyet, 17 beraberlik ve 7 yenilgi aldÄ±.</p>\r\n\r\n<p>&nbsp;15 AÄŸustos 2019, PerÅŸembe 12:02</p>\r\n\r\n<p>PAYLAÅž</p>\r\n\r\n<p>-A+</p>\r\n\r\n<p><img alt=\"BeÅŸiktaÅŸ sezona iyi baÅŸlÄ±yor\" src=\"https://img.fanatik.com.tr/img/78/740x418/5d551f79ae298b0e6d2b93ce\" /></p>\r\n\r\n<p><strong>S&uuml;per Lig</strong>&#39;de&nbsp;<strong>2019-2020 sezonu</strong>na 17 AÄŸustos Cumartesi g&uuml;n&uuml; deplasmanda Demir Grup Sivasspor ma&ccedil;Ä±yla baÅŸlayacak&nbsp;<strong>BeÅŸiktaÅŸ</strong>, lig tarihindeki a&ccedil;Ä±lÄ±ÅŸ karÅŸÄ±laÅŸmalarÄ±nda 37 galibiyet, 17 beraberlik ve 7 yenilgi aldÄ±.</p>\r\n\r\n<p>Siyah-beyazlÄ± takÄ±m lig tarihinde deplasmanda &ccedil;Ä±ktÄ±ÄŸÄ± 30 a&ccedil;Ä±lÄ±ÅŸ ma&ccedil;Ä±nda ise 10 galibiyet, 14 beraberlik, 6 yenilgi yaÅŸadÄ±.&nbsp;</p>\r\n\r\n<h3><strong>Son 6 sezonda kazandÄ±</strong></h3>\r\n\r\n<p>Siyah-beyazlÄ± ekip, son 6 sezondaki a&ccedil;Ä±lÄ±ÅŸ ma&ccedil;larÄ±nÄ± kazanmasÄ±nÄ± bildi.</p>\r\n\r\n<p>Ge&ccedil;en sezon Akhisarspor&#39;u evinde 2-1 yenen siyah-beyazlÄ± ekip, 2017-2018&#39;de Ä°stanbul&#39;da Antalyaspor&#39;u 2-0, 2016-2017&#39;de evinde Alanyaspor&#39;u 4-1, 2015-2016 ile 2014-2015&#39;te Mersin Ä°dmanyurdu&#39;nu deplasmanda 5-2 ve 1-0 yendi. 2013-2014&#39;&uuml;n a&ccedil;Ä±lÄ±ÅŸ ma&ccedil;Ä±nda Trabzonspor&#39;u konuk eden siyah-beyazlÄ±lar, rakibini 2-0&#39;lÄ±k skorla ge&ccedil;ti.</p>\r\n\r\n<h3><strong>Sadece 8 ma&ccedil;ta gol atamadÄ±</strong></h3>\r\n\r\n<p>Sezonun ilk haftalarÄ±ndaki ma&ccedil;lardan 53&#39;&uuml;nde gol atan BeÅŸiktaÅŸ, buna karÅŸÄ±n sadece 8 karÅŸÄ±laÅŸmada lige sessiz giriÅŸ yaptÄ±.</p>\r\n\r\n<p>Siyah-beyazlÄ±lar, ilk haftalarda 25 ma&ccedil;ta gol yemezken, 36 m&uuml;sabakada ise kalesini gole kapatamadÄ±.</p>\r\n\r\n<p>A&ccedil;Ä±lÄ±ÅŸ ma&ccedil;larÄ±nda en farklÄ± galibiyetleri 4-0&#39;lÄ±k sonu&ccedil;larla alan BeÅŸiktaÅŸ, buna karÅŸÄ±n ilk haftalarda en farklÄ± yenilgiyi 2-0 ile yaÅŸadÄ±.</p>\r\n\r\n<h3><strong>35 sezondur gols&uuml;z a&ccedil;Ä±lÄ±ÅŸ yok</strong></h3>\r\n\r\n<p>1983-1984&#39;te Antalyaspor ile 0-0 berabere kalarak lige baÅŸlayan BeÅŸiktaÅŸ&#39;Ä±n, daha sonraki 35 sezonda baÅŸlangÄ±&ccedil; ma&ccedil;larÄ± gols&uuml;z bitmedi.</p>\r\n\r\n<p>Sezona baÅŸlangÄ±&ccedil; karÅŸÄ±laÅŸmalarÄ±nda toplam 110 gol kaydeden siyah-beyazlÄ±lar, kalesinde 44 gol g&ouml;rd&uuml;.</p>\r\n\r\n<h3><strong>S&uuml;per Lig&#39;de en fazla Fenerbah&ccedil;e ile karÅŸÄ±laÅŸtÄ±</strong></h3>\r\n\r\n<p>Siyah-beyazlÄ± ekip, Fenerbah&ccedil;e ile lig tarihinde 126 kez karÅŸÄ± karÅŸÄ±ya geldi.</p>\r\n\r\n<p>Lig tarihindeki en &ccedil;ok galibiyeti MKE Ankarag&uuml;c&uuml;&#39;n&uuml; 68 maÄŸlup ederek alan BeÅŸiktaÅŸ, en fazla yenilgiyi ise (46) Fenerbah&ccedil;e karÅŸÄ±sÄ±nda yaÅŸadÄ±.</p>\r\n\r\n<p>S&uuml;per Lig&#39;de en &ccedil;ok gol&uuml; (188) MKE Ankarag&uuml;c&uuml;&#39;ne atan siyah-beyazlÄ±lar, kalesini en &ccedil;ok (153) Galatasaray&#39;a kapatamadÄ±.</p>\r\n\r\n<p>Ligin yeni takÄ±mlarÄ±ndan GaziÅŸehir Gaziantep ile tarihinde ilk kez bu sezon karÅŸÄ± karÅŸÄ±ya gelecek BeÅŸiktaÅŸ, Alanyaspor ve Yeni Malatyaspor ma&ccedil;larÄ±nda yenilgi y&uuml;z&uuml; g&ouml;rmedi.</p>\r\n\r\n<p>(AA)</p>\r\n\r\n<ul>\r\n</ul>\r\n', 'beÅŸiktaÅŸ', '1'),
(13, 'dimg/icerik/24547279992163024606kop.jpg', 'BeÅŸiktaÅŸ', '2019-08-17 20:04:13', '<h1>Son dakika | Schalke 04&#39;te Konoplyanka kadroya alÄ±nmadÄ±</h1>\r\n\r\n<h2>Schalke 04, Almanya Bundesliga&#39;nÄ±n ilk haftasÄ±nda M&ouml;nchengladbach ile oynayacaÄŸÄ± ma&ccedil;Ä±n kadrosunu a&ccedil;Ä±klarken, milli oyuncu Ozan Kabak ve BeÅŸiktaÅŸ&#39;Ä±n g&ouml;r&uuml;ÅŸmelerini s&uuml;rd&uuml;rd&uuml;ÄŸ&uuml; Yevhen Konoplyanka kadroda yer almadÄ±.</h2>\r\n\r\n<p>&nbsp;17 AÄŸustos 2019, Cumartesi 19:35</p>\r\n\r\n<p>PAYLAÅž</p>\r\n\r\n<p>-A+</p>\r\n\r\n<p><img alt=\"Son dakika | Schalke 04\'te Konoplyanka kadroya alÄ±nmadÄ±\" src=\"https://img.fanatik.com.tr/img/78/740x418/5d582ce1ae298b90a906dda2\" /></p>\r\n\r\n<p><strong>Schalke 04</strong>, Almanya Bundesliga&#39;nÄ±n ilk haftasÄ±nda&nbsp;<strong>M&ouml;nchengladbach</strong>&nbsp;ile oynayacaÄŸÄ± ma&ccedil;Ä±n kadrosunu a&ccedil;Ä±klarken, milli oyuncu Ozan Kabak ve BeÅŸiktaÅŸ&#39;Ä±n g&ouml;r&uuml;ÅŸmelerini s&uuml;rd&uuml;rd&uuml;ÄŸ&uuml; Yevhen Konoplyanka kadroda yer almadÄ±.</p>\r\n\r\n<p>Schalke 04; Schubert, Ozan Kabak, Uth, Suat Serdar, Matondo, Boujellab ve Sch&ouml;pf&#39;&uuml;n kadroya alÄ±nmama sebeplerini sosyal medya hesabÄ± &uuml;zerinden taraftarlarÄ±na duyururken, Konoplyanka ile ilgili bir bilgi verilmemesi akÄ±llarda soru iÅŸareti yarattÄ±.</p>\r\n\r\n<p>Alman basÄ±nÄ±nda yer alan haberlere g&ouml;re ise Konoplyanka i&ccedil;in Schalke 04 ve BeÅŸiktaÅŸ arasÄ±ndaki g&ouml;r&uuml;ÅŸmeler devam ediyor. (DHA)</p>\r\n', 'beÅŸiktaÅŸ', '1'),
(14, 'dimg/icerik/25147259582343522406baba.jpg', 'BeÅŸiktaÅŸ', '2019-08-17 20:04:41', '<h1>BeÅŸiktaÅŸ&#39;Ä±n istediÄŸi Babacar i&ccedil;in Fenerbah&ccedil;e de teklif yaptÄ±</h1>\r\n\r\n<h2>Vedat Muri&ccedil;, Garry Rodrigues, Max Kruse gibi h&uuml;cumcularÄ± kadrosuna katan Fenerbah&ccedil;e&#39;nin Khouma Babacar i&ccedil;in de teklif yaptÄ±ÄŸÄ± belirtildi.</h2>\r\n\r\n<p>&nbsp;17 AÄŸustos 2019, Cumartesi 19:27</p>\r\n\r\n<p><img alt=\"BeÅŸiktaÅŸ\'Ä±n istediÄŸi Babacar iÃ§in FenerbahÃ§e de teklif yaptÄ±\" src=\"https://img.fanatik.com.tr/img/78/740x418/5d582ab2ae298b8ff538fb86\" /></p>\r\n\r\n<p><strong>Ä°talyan medyasÄ±ndan Calcio Mercato&#39;nun iddiasÄ±na g&ouml;re; BeÅŸiktaÅŸ</strong>&#39;Ä±n da istediÄŸi 26 yaÅŸÄ±ndaki forvet Lecce&#39;nin teklifini reddetti. Bunun &uuml;zerine<strong>&nbsp;Fenerbah&ccedil;e</strong>&nbsp;de devreye girdi ve Babacar&#39;Ä± kiralamak i&ccedil;in Sassuolo&#39;ya teklif yaptÄ±.&nbsp;</p>\r\n\r\n<p>Senegalli forvet ge&ccedil;en sezonun baÅŸÄ±nda Fiorentina&#39;dan&nbsp;<strong>Sassuolo</strong>&#39;ya 7 milyon euroluk bedelle transfer olmuÅŸtu. Babacar ge&ccedil;en sezon da BeÅŸiktaÅŸ&#39;Ä±n radarÄ±na girmiÅŸti.&nbsp;</p>\r\n\r\n<p>BaÅŸarÄ±lÄ± forvet ge&ccedil;en sezon 31 ma&ccedil;ta 7 gol 2 asistlik performans sergilemiÅŸti.&nbsp;</p>\r\n', 'beÅŸiktaÅŸ', '1'),
(15, 'dimg/icerik/27257236112667321403mac.jpg', 'BeÅŸiktaÅŸ', '2019-08-17 20:05:21', '<h1>Sivasspor - BeÅŸiktaÅŸ ma&ccedil;Ä± hangi kanalda, saat ka&ccedil;ta?</h1>\r\n\r\n<h2>BeÅŸiktaÅŸ, 2019-2020 sezonunu Demir Grup Sivasspor deplasmanÄ±nda a&ccedil;acak. Siyah-BeyazlÄ±lar Abdullah AvcÄ± y&ouml;netiminde &ccedil;Ä±kacaÄŸÄ± ilk S&uuml;per Lig ma&ccedil;Ä±nÄ± kazanmak istiyor. Sivasspor ise taraftarÄ± &ouml;n&uuml;nde galibiyet peÅŸinde olacak. Peki, Sivasspor - BeÅŸiktaÅŸ ma&ccedil;Ä± hangi kanalda, saat ka&ccedil;ta? Detaylar ve ma&ccedil;Ä±n canlÄ± skor takibi fanatik.com.tr&#39;de...</h2>\r\n\r\n<p><img alt=\"Sivasspor - BeÅŸiktaÅŸ maÃ§Ä± hangi kanalda, saat kaÃ§ta?\" src=\"https://img.fanatik.com.tr/img/78/740x418/5d58271dae298b90a827c53a\" /></p>\r\n\r\n<p><strong>Åženol G&uuml;neÅŸ</strong>&nbsp;ile tamamladÄ±ÄŸÄ± 4 sezonun ardÄ±ndan deneyimli teknik adamla yollarÄ±nÄ± ayÄ±ran&nbsp;<strong>BeÅŸiktaÅŸ</strong>, sezon baÅŸÄ±nda anlaÅŸtÄ±ÄŸÄ± yeni teknik direkt&ouml;r&uuml; Abdullah AvcÄ± ile ilk resmi ma&ccedil;Ä±na &ccedil;Ä±kacak. Siyah-BeyazlÄ±lar sezonun ilk ma&ccedil;Ä±nda deplasmanda&nbsp;<strong>Sivasspor</strong>&nbsp;ile karÅŸÄ± karÅŸÄ±ya gelecek. BeÅŸiktaÅŸ &ouml;nemli eksiklerle gittiÄŸi deplasmandan &uuml;&ccedil; puanla ayrÄ±lmanÄ±n hesaplarÄ±nÄ± yapÄ±yor. Sivasspor ise taraftarÄ± &ouml;n&uuml;nde galibiyet peÅŸinde olacak.</p>\r\n\r\n<h2>Sivasspor - BeÅŸiktaÅŸ ma&ccedil;Ä± hangi kanalda, saat ka&ccedil;ta?</h2>\r\n\r\n<p><strong>4 Eyl&uuml;l StadÄ±&#39;nda bu akÅŸam saat 21:45</strong>&#39;de baÅŸlayacak m&uuml;cadele&nbsp;<strong>beIN SPORTS HD1</strong>&#39;den canlÄ± yayÄ±nlanacak. AyrÄ±ca ma&ccedil;Ä±n canlÄ± skor takibi ve detaylar fanatik.com.tr&#39;de...</p>\r\n\r\n<h2>Sivasspor - BeÅŸiktaÅŸ muhtemel 11&#39;ler...</h2>\r\n\r\n<p><strong>Sivasspor:</strong>&nbsp;Samassa, Goiano, Appindangoye, Caner, Ziya, Cofie, Hakan, Mert, Emre, ErdoÄŸan, Yatabare</p>\r\n\r\n<p><strong>BeÅŸiktaÅŸ:&nbsp;</strong>Ersin, Douglas, Victor Ruiz, Vida, Rebecho, Dorukhan, OÄŸuzhan, Quaresma, Ljajic, Boyd, G&uuml;ven</p>\r\n\r\n<p><strong>BeÅŸiktaÅŸ&#39;ta eksikler can sÄ±kÄ±yor</strong></p>\r\n\r\n<p>HazÄ±rlÄ±k d&ouml;neminde &uuml;st &uuml;ste sakatlar veren BeÅŸiktaÅŸ, ligin ilk ma&ccedil;Ä±na eksik kadrosu ile &ccedil;Ä±kacak. Siyah-beyazlÄ± ekipte sakatlÄ±klarÄ± bulunan ve d&uuml;n yapÄ±lan antrenmana katÄ±lmayan Loris Karius, Burak YÄ±lmaz, Atiba Hutchinson, Enzo Roco ve Dorukhan Tok&ouml;z, ma&ccedil;ta forma giyemeyecek.</p>\r\n\r\n<p>Ge&ccedil;en sezonun son ma&ccedil;Ä±nda kÄ±rmÄ±zÄ± kart g&ouml;ren Jeremain Lens de Sivas deplasmanÄ±nda takÄ±mÄ±nÄ± yalnÄ±z bÄ±rakacak.</p>\r\n', 'beÅŸiktaÅŸ', '1'),
(16, 'dimg/icerik/25612254582333427294kop2.jpg', 'BeÅŸiktaÅŸ', '2019-08-17 20:05:54', '<h1>Yevhen Konoplyanka transferinde son dakika!</h1>\r\n\r\n<h2>Schalke 04&#39;ten bu yaz ayrÄ±lmasÄ± beklenen Yevhen Konoplyanka&#39;nÄ±n adÄ± aylardÄ±r BeÅŸiktaÅŸ&#39;la anÄ±lÄ±yordu. YÄ±lan hikayesine d&ouml;nen transferle ilgili Alman basÄ±nÄ±ndan yeni bir haber daha geldi.</h2>\r\n\r\n<p><img alt=\"Yevhen Konoplyanka transferinde son dakika!\" src=\"https://img.fanatik.com.tr/img/78/740x418/5d5803f066a97c3d9323b56c\" /></p>\r\n\r\n<p>Yeni sezon &ouml;ncesi kadrosunu bir kanat oyuncusuyla g&uuml;&ccedil;lendirmek isteyen&nbsp;<strong>BeÅŸiktaÅŸ</strong>, uzun bir s&uuml;redir<strong>&nbsp;Yevhen Konoplyanka</strong>&#39;nÄ±n peÅŸinden koÅŸuyordu.&nbsp;<strong>Schalke 04</strong>&#39;&uuml;n sportif direkt&ouml;r&uuml;&nbsp;<strong>Jochen Schneider</strong>&#39;in 29 yaÅŸÄ±ndaki futbolcunun transferi i&ccedil;in Siyah BeyazlÄ±lar&#39;la g&ouml;r&uuml;ÅŸt&uuml;klerini doÄŸrulamasÄ±nÄ±n ardÄ±ndan Alman basÄ±nÄ±ndan konuyla ilgili g&uuml;ndem yaratan bir haber geldi.</p>\r\n\r\n<p><strong>Sky Sport Almanya</strong>&nbsp;muhabiri&nbsp;<strong>Dirk Grosse Schlarmann</strong>, kendisine ait Twitter hesabÄ±ndan paylaÅŸtÄ±ÄŸÄ± haberde &quot;<strong><em>BeÅŸiktaÅŸ&#39;Ä±n Yevhen Konoplyanka i&ccedil;in y&uuml;r&uuml;tt&uuml;ÄŸ&uuml; g&ouml;r&uuml;ÅŸmeler sallantÄ±lÄ± bir zeminde ilerliyor. Transfer i&ccedil;in yapÄ±lacak &ouml;deme, hen&uuml;z netlik kazanmadÄ±.</em></strong>&quot; ifadelerini kullandÄ±.&nbsp;<strong>S&uuml;per Lig</strong>&nbsp;takÄ±mlarÄ± i&ccedil;in yaz transfer d&ouml;neminin kapanmasÄ±na &ccedil;ok kÄ±sa bir s&uuml;re kala Siyah BeyazlÄ±lar&#39;Ä±n UkraynalÄ± yÄ±ldÄ±zÄ± kadrosuna katÄ±p katamayacaÄŸÄ± ise b&uuml;y&uuml;k merak konusu.&nbsp;</p>\r\n', 'beÅŸiktaÅŸ', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `kullanici_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_zaman` datetime NOT NULL,
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL,
  PRIMARY KEY (`kullanici_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_ad`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_durum`) VALUES
(1, '2019-08-24 11:56:00', 'dimg/admin/28660umut.png', 'admin', 'd13cd5dbcdecd6d7d87f798e525c4184', 'Umut Akkemik', '5', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_ust` int(11) NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` int(1) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`) VALUES
(1, 0, 'Anasayfa', '', 'index.php', 1, 1),
(2, 0, 'HakkÄ±mÄ±zda', '', 'hakkÄ±mÄ±zda', 2, 1),
(28, 0, 'Haberler', '', 'Haberler', 3, 1),
(29, 0, 'Ä°letiÅŸim', '', 'iletisim', 4, 1),
(25, 24, 'Deneme', '<p>Deneme</p>\r\n', '', 0, 1),
(26, 23, 'UfukGittigidiyor', '', 'https://www.gittigidiyor.com/BanaOzel/satislarim.php', 0, 1),
(27, 26, 'asd', '', 'https://www.gittigidiyor.com/BanaOzel/satislarim.php', 0, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_link`, `slider_sira`, `slider_durum`) VALUES
(22, 'UA', 'dimg/slider/25312213602851329728logo.png', 'UA', 0, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
