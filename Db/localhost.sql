-- Adminer 4.8.1 MySQL 5.5.5-10.4.22-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `youthTech` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `youthTech`;

DROP TABLE IF EXISTS `Admin_tbl`;
CREATE TABLE `Admin_tbl` (
  `Admin_Id` int(1) NOT NULL AUTO_INCREMENT,
  `Admin_Username` varchar(50) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Admin_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Admin_tbl` (`Admin_Id`, `Admin_Username`, `Admin_Password`) VALUES
(1,	'Admin',	'12345');

DROP TABLE IF EXISTS `Contact_table`;
CREATE TABLE `Contact_table` (
  `Contact_Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(254) NOT NULL,
  PRIMARY KEY (`Contact_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Contact_table` (`Contact_Id`, `Name`, `Surname`, `Email`, `Subject`, `Message`) VALUES
(1,	'edu',	'macha',	'mushibrayson07@gmail.com',	'trial',	'sending trial message'),
(2,	'Demo',	'da',	'farajakingsley89@gmail.comf',	'dewf',	'wfw');

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
(1,	'Post',	'Hussein',	'Wachezaji wa mchezo wa video wanaovujisha siri mtandaoni',	'./Images/3450339.jpg',	'Habari kwamba askari wa Marekani anadaiwa kuvujisha taarifa za siri kwenye jukwaa la mchezo wa video zilishangaza wengi - lakini wataalamu wanasema zinaangazia changamoto mpya inayozidi kuwa ya kawaida kwa huduma za usalama.',	'Jack Texeira aliorodheshwa katika Walinzi wa Kitaifa wa anga ambapo alipata nyenzo za siri za juu. Ameshutumiwa kwa kuvujisha nyaraka nyeti kuhusu vita vya Ukraine na masuala mengine, akidaiwa kuwafurahisha marafiki zake kwenye kundi la Discord ambako alitumia muda wake mwingi.',	'Kwa hakika, kuchapisha nyenzo zilizoainishwa katika vikundi vya gumzo la mchezo wa video kunazidi kuwa jambo la kawaida, na watu wanaoivujisha mara nyingi huwa na motisha tofauti sana kwa watoa taarifa.',	'2023-06-02 18:59:46'),
(2,	'Sanaa',	'Husseini',	'Kipimo cha saratani tofauti chaonyesha matumaini halisi katika utafiti Uingereza',	'./Images/9167.jpg',	'Habari kwamba askari wa Marekani anadaiwa kuvujisha taarifa za siri kwenye jukwaa la mchezo wa video zilishangaza wengi - lakini wataalamu wanasema zinaangazia changamoto mpya inayozidi kuwa ya kawaida kwa huduma za usalama.',	'Jack Texeira aliorodheshwa katika Walinzi wa Kitaifa wa anga ambapo alipata nyenzo za siri za juu. Ameshutumiwa kwa kuvujisha nyaraka nyeti kuhusu vita vya Ukraine na masuala mengine, akidaiwa kuwafurahisha marafiki zake kwenye kundi la Discord ambako alitumia muda wake mwingi.',	'Kwa hakika, kuchapisha nyenzo zilizoainishwa katika vikundi vya gumzo la mchezo wa video kunazidi kuwa jambo la kawaida, na watu wanaoivujisha mara nyingi huwa na motisha tofauti sana kwa watoa taarifa.',	'2023-06-02 18:59:46'),
(3,	'',	'Hussein',	'Lionel Messi: Mustakabali wake kujulikana punde, lakini si Barcelona',	'Images/image3.jpg',	'Habari kwamba askari wa Marekani anadaiwa kuvujisha taarifa za siri kwenye jukwaa la mchezo wa video zilishangaza wengi - lakini wataalamu wanasema zinaangazia changamoto mpya inayozidi kuwa ya kawaida kwa huduma za usalama.',	'Jack Texeira aliorodheshwa katika Walinzi wa Kitaifa wa anga ambapo alipata nyenzo za siri za juu. Ameshutumiwa kwa kuvujisha nyaraka nyeti kuhusu vita vya Ukraine na masuala mengine, akidaiwa kuwafurahisha marafiki zake kwenye kundi la Discord ambako alitumia muda wake mwingi.',	'Kwa hakika, kuchapisha nyenzo zilizoainishwa katika vikundi vya gumzo la mchezo wa video kunazidi kuwa jambo la kawaida, na watu wanaoivujisha mara nyingi huwa na motisha tofauti sana kwa watoa taarifa.',	'2023-06-02 18:59:46'),
(4,	'Demo',	'Editor',	'Sample01',	'./Images/3450339.jpg',	'Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.',	'Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.',	'Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.',	'2023-06-14 16:36:41'),
(5,	'Demo',	'Editor',	'Sample',	'./Images/39160.jpg',	'Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.',	'Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.',	'Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.',	'2023-06-14 16:42:24'),
(6,	'Programming',	'Bray',	'Responsive behaviors',	'./Images/521069.jpg',	'Navbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl} classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.\r\nFor navbars that never collapse, add the .navbar-expand class on the navbar. For navbars that always collapse, don’t add any .navbar-expand class.\r\nNavbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl} classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.\r\nFor navbars that never collapse, add the ',	'Navbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl} classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.\r\nFor navbars that never collapse, add the .navbar-expand class on the navbar. For navbars that always collapse, don’t add any .navbar-expand class.',	'Navbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl} classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.\r\nFor navbars that never collapse, add the .navbar-expand class on the navbar. For navbars that always collapse, don’t add any .navbar-expand class.',	'2023-06-15 18:05:51');

-- 2023-06-18 12:53:00
