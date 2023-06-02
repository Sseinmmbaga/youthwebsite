-- Adminer 4.8.1 MySQL 5.5.5-10.4.22-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `youthTech` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `youthTech`;

DROP TABLE IF EXISTS `Posts`;
CREATE TABLE `Posts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Image_Path` varchar(200) NOT NULL,
  `Paragraph1` text NOT NULL,
  `Paragraph2` text NOT NULL,
  `Paragraph3` text NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Posts` (`Id`, `Category`, `Author`, `Title`, `Image_Path`, `Paragraph1`, `Paragraph2`, `Paragraph3`, `CreatedAt`) VALUES
(1,	'',	'Hussein',	'Wachezaji wa mchezo wa video wanaovujisha siri mtandaoni',	'Images/image1.jpg',	'Habari kwamba askari wa Marekani anadaiwa kuvujisha taarifa za siri kwenye jukwaa la mchezo wa video zilishangaza wengi - lakini wataalamu wanasema zinaangazia changamoto mpya inayozidi kuwa ya kawaida kwa huduma za usalama.',	'Jack Texeira aliorodheshwa katika Walinzi wa Kitaifa wa anga ambapo alipata nyenzo za siri za juu. Ameshutumiwa kwa kuvujisha nyaraka nyeti kuhusu vita vya Ukraine na masuala mengine, akidaiwa kuwafurahisha marafiki zake kwenye kundi la Discord ambako alitumia muda wake mwingi.',	'Kwa hakika, kuchapisha nyenzo zilizoainishwa katika vikundi vya gumzo la mchezo wa video kunazidi kuwa jambo la kawaida, na watu wanaoivujisha mara nyingi huwa na motisha tofauti sana kwa watoa taarifa.',	'2023-06-02 18:59:46'),
(2,	'',	'Hussein',	'Kipimo cha saratani tofauti chaonyesha matumaini halisi katika utafiti Uingereza',	'Images/image2.jpg',	'Habari kwamba askari wa Marekani anadaiwa kuvujisha taarifa za siri kwenye jukwaa la mchezo wa video zilishangaza wengi - lakini wataalamu wanasema zinaangazia changamoto mpya inayozidi kuwa ya kawaida kwa huduma za usalama.',	'Jack Texeira aliorodheshwa katika Walinzi wa Kitaifa wa anga ambapo alipata nyenzo za siri za juu. Ameshutumiwa kwa kuvujisha nyaraka nyeti kuhusu vita vya Ukraine na masuala mengine, akidaiwa kuwafurahisha marafiki zake kwenye kundi la Discord ambako alitumia muda wake mwingi.',	'Kwa hakika, kuchapisha nyenzo zilizoainishwa katika vikundi vya gumzo la mchezo wa video kunazidi kuwa jambo la kawaida, na watu wanaoivujisha mara nyingi huwa na motisha tofauti sana kwa watoa taarifa.',	'2023-06-02 18:59:46'),
(3,	'',	'Hussein',	'Lionel Messi: Mustakabali wake kujulikana punde, lakini si Barcelona',	'Images/image3.jpg',	'Habari kwamba askari wa Marekani anadaiwa kuvujisha taarifa za siri kwenye jukwaa la mchezo wa video zilishangaza wengi - lakini wataalamu wanasema zinaangazia changamoto mpya inayozidi kuwa ya kawaida kwa huduma za usalama.',	'Jack Texeira aliorodheshwa katika Walinzi wa Kitaifa wa anga ambapo alipata nyenzo za siri za juu. Ameshutumiwa kwa kuvujisha nyaraka nyeti kuhusu vita vya Ukraine na masuala mengine, akidaiwa kuwafurahisha marafiki zake kwenye kundi la Discord ambako alitumia muda wake mwingi.',	'Kwa hakika, kuchapisha nyenzo zilizoainishwa katika vikundi vya gumzo la mchezo wa video kunazidi kuwa jambo la kawaida, na watu wanaoivujisha mara nyingi huwa na motisha tofauti sana kwa watoa taarifa.',	'2023-06-02 18:59:46');

-- 2023-06-02 21:35:44
