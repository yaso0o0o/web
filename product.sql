-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 04:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(8, 'stabilo rusak', '6000$', 'images/_stabilo rusak_.jpeg'),
(11, 'Discover Best Deals', '800$', 'images/Discover Best Deals On Amazon_com __ Coffee Gifts.jpeg'),
(13, 'ss', '986$', 'images/ss.gif'),
(14, '10 things i hate about you', '754$', 'images/10thingsihateaboutyou.jpeg'),
(15, '(500) Days of Summer', '837$', 'images/500DaysofSummer20099351350byPeytonWebber.jpeg'),
(17, 'lilrevet wallpaper', '263$', 'images/lilrevetwallpaper.jpeg'),
(18, '77R Pro', '675$', 'images/看完这100张海报，你会知道当代阿拉伯设计有多精彩.jpeg'),
(19, 'The Washington Post illustration ', '777$', 'images/TheWashingtonPostillustrationCommunicationArts.jpeg'),
(20, 'Communication Arts', '547$', 'images/pinterestdownloader.com1713995095.873361.gif'),
(21, 'f4ad4e96', '137$', 'images/f4ad4e9679ed412f899dbcb3f98fa072.jpeg'),
(22, 'Scriptual Typography', '643$', 'images/29LTBaseetMultilingualArabicLatinFontsBiScriptualTypography.jpeg'),
(23, 'POSTERS DESIGN VOL ', '723$', 'images/POSTERSDESIGNVOL2.jpeg'),
(24, 'ccc0cf6c-6c6f-4724', '999$', 'images/ccc0cf6c6c6f47248e5742b3e7c4986c.jpeg'),
(25, '30 Cleverly Illustrated Posters ', '841$', 'images/30CleverlyIllustratedPosterswithDoubleExposureEffects.jpeg'),
(26, 'Hamid El Shaeri Poster', '157$', 'images/HamidElShaeriPoster.jpeg'),
(27, 'POSTERS VOL_2', '977$', 'images/tt.gif'),
(28, 'e59c13ee-a6a9-49c2-bfb7', '642$', 'images/e59c13eea6a949c2bfb76e31dcaaa86f.jpeg'),
(29, 'El Hareef - street player', '435$', 'images/ElHareefstreetplayer.jpeg'),
(30, '041d2431-ad40-4761-8ba6', '756$', 'images/041d2431ad4047618ba6fef57556c541.jpeg'),
(31, 'Abu Tarek - Re branding', '368$', 'images/AbuTarekRebranding.jpeg'),
(32, '639e3c11-f590-4255-bd89', '463$', 'images/639e3c11f5904255bd8969fb0017f407.jpeg'),
(33, 'Arabic Vintage Minimal ', '532$', 'images/ArabicVintageMinimalPosters.jpeg'),
(34, 'Tutankhamun Low-Poly Illustration', '732$', 'images/TutankhamunLowPolyIllustration.jpeg'),
(35, 'Ancient Egypt', '751$', 'images/download16.jpeg'),
(36, 'Rarest and most expensive Egyptian stamps ', '953$', 'images/RarestandmostexpensiveEgyptianstampslist.jpeg'),
(37, 'SVEN BRASCH', '888$', 'images/SVENBRASCH.jpeg'),
(38, 'Went out with no return', '111$', 'images/Wentoutwithnoreturn.jpeg'),
(39, '6c9d235a-57b2', '333$', 'images/6c9d235a57b24b4781232ca07442de39.jpeg'),
(40, 'Aegypten vintage travel ', '789$', 'images/AegyptenvintagetravelposterPoster.jpeg'),
(41, 'The Grand Budapest ', '123$', 'images/TheGrandBudapestHotel20141273x1800.jpeg'),
(42, 'La La Land', '321$', 'images/LaLaLand.jpeg'),
(43, 'Mishary _H', '456$', 'images/MisharyH.jpeg'),
(44, 'Arabs crash Hollywood in Oscar', '654$', 'images/ArabscrashHollywoodinOscarnominatedfilmposters.jpeg'),
(45, 'An advertisement ', '369$', 'images/AnadvertisementposterfortourisminEgypt.jpeg'),
(46, 'Arabic movie posters ( Second Collection ) ', '741$', 'images/ArabicmoviepostersSecondCollection1.jpeg'),
(47, 'The Land', '258$', 'images/TheLand.jpeg'),
(48, 'Arabic movie posters', '852$', 'images/ArabicmoviepostersSecondCollection.jpeg'),
(49, 'e7f4ec94-e84e-4583-a5d7', '963$', 'images/e7f4ec94e84e4583a5d714c01c937230.jpeg'),
(50, '5056e75c-0d87-412b', '546$', 'images/5056e75c0d87412ba923216f4438942b.jpeg'),
(51, 'Whiplash ', '645$', 'images/Whiplash2014.jpeg'),
(52, ' Daniel Jara Merino.', '753$', 'images/DriveMoviePosterDanielJaraMerino.jpeg'),
(53, 'c787bf85-1c13dc047dff.', '537$', 'images/c787bf85d8b048c094411c13dc047dff.jpeg'),
(54, '0f78cfb5-427f-46d0-85a4', '357 $', 'images/0f78cfb5427f46d085a4698e3d43e63e.jpeg'),
(55, 'The Driver', '159$', 'images/TheDriver.jpeg'),
(56, 'b0fec6f9-8704-48ce', '264$', 'images/b0fec6f9870448ce9d9236b6fb889882.jpeg'),
(57, 'American Psycho', '627$', 'images/AmericanPsycho.jpeg'),
(58, 'Fleabag', '721$', 'images/Fleabag.jpeg'),
(59, '490bf519-927e-41b4-8c1e-4d9c', '257$', 'images/490bf519927e41b48c1e4d9c9a704a9d.jpeg'),
(60, 'f9a43b0b-820e-4822-b2d', '647$', 'images/f9a43b0b820e4822b2dfcaa4b1669267.jpeg'),
(61, 'The Office', '679$', 'images/TheOffice.jpeg'),
(62, 'Better call Saul Arabic ', '849$', 'images/BettercallSaulArabicposter.jpeg'),
(63, '44b21142-a526-4017', '842$', 'images/44b21142a5264017ba2d0d87d39499ca.jpeg'),
(64, '56 Of The Most Hilarious Moments In Mannequin History', '560$', 'images/56OfTheMostHilariousMomentsInMannequinHistory.jpeg'),
(65, '_Egyptian Posters_', '742$', 'images/EgyptianPosters.jpeg'),
(66, '914b80f3-4ab8-48f6-906a', '541$', 'images/914b80f34ab848f6906a1c2f67ba1bfc.jpeg'),
(67, 'Interstellar', '322$', 'images/Interstellar.jpeg'),
(68, 'ba504e9f-a7ab', '856$', 'images/ba504e9fa7ab46b8b7ca40c169a4036c.jpeg'),
(69, 'Kafka', '266$', 'images/Kafka.jpeg'),
(70, 'Metamorphosis', '863$', 'images/Metamorphosis.jpeg'),
(71, 'Inside the Fantastical Workshop ', '761$', 'images/Inside the Fantastical Workshop of Inventor Michael Dubno (1).jpeg'),
(72, '5274eaed-1d66-4d7b', '345$', 'images/5274eaed1d664d7b9b0dbe6f87483853.jpeg'),
(73, 'bc4a2c4b-5cd2-4cb7', '247$', 'images/bc4a2c4b5cd24cb7b9491809da504e2b.jpeg'),
(74, '91ab4629-e841-4347-80b9', '231$', 'images/91ab4629e841434780b963e3f147a2e3.jpeg'),
(75, '90f6cda3-7d32-4a30-955b', '911$', 'images/90f6cda37d324a30955bf4bee4e755bc.jpeg'),
(77, '3aed0d18-7243', '132$', 'images/3aed0d1872434d8f84923fb07802b686.jpeg'),
(78, 'Women in science', '311$', 'images/Womeninscience.jpeg'),
(79, 'Mentes brilhantes!!', '897$', 'images/Mentesbrilhantes.jpeg'),
(80, 'Tarot Cards ', '444$', 'images/TarotCardsAlexandriaHuntington.jpeg'),
(81, 'dir_ Charlotte Wells ', '666$', 'images/Aftersun2022dirCharlotteWellsAlternativeposterbyHarshithGowda.jpeg'),
(82, 'a1867b77', '564$', 'images/a1867b772fd7420a9c5e8356d165af9a.jpeg'),
(83, '5400b4d1-3c45-476f', '922$', 'images/5400b4d13c45476f843df3de8689484e.jpeg'),
(84, 'Maxime Manga', '455$', 'images/MaximeManga.jpeg'),
(85, 'Illustrator Adds Funny Cartoons To Strangers’', '998$', 'images/IllustratorAddsFunnyCartoonsToStrangersInstagramPhotosPart3.jpeg'),
(86, 'kayla’s take', '269$', 'images/kaylastake.jpeg'),
(87, 'Whimsical themes, everyday scenes', '189$', 'images/WhimsicalthemeseverydayscenestheartofLoeLee.jpeg'),
(88, 'Work — Browse ', '521$', 'images/WorkBrowsebytypeofclient.jpeg'),
(89, 'f31af582-2373-4dde-9f44', '698$', 'images/f31af58223734dde9f443a96bc341a8b.jpeg'),
(90, 'e308bfbc-19ec-419a-a0eb', '489$', 'images/e308bfbc19ec419aa0eb6ac2415435b2.jpeg'),
(91, 'Day Breaks the Night ', '989$', 'images/DayBreakstheNight18x18.jpeg'),
(92, '430e1b28-9e22-420a-80dc', '249$', 'images/430e1b289e22420a80dc5c997e7252e8.jpeg'),
(93, '1d3caad2-386f-48dc', '669$', 'images/1d3caad2386f48dcbd2fb8990a1082f8.jpeg'),
(94, 'Design with impact_ Exploring the magic ', '978$', 'images/DesignwithimpactExploringthemagicofposterart.jpeg'),
(95, 'cc49774d-7f2f-4858-a658', '245$', 'images/cc49774d7f2f4858a6585ce52a878d31.jpeg'),
(96, '08200339-991b-bb02e', '744$', 'images/08200339991b42298dd8bb02ea727f14.jpeg'),
(97, 'If Howl & Sophie opened a Moving Castle Bed-aNd-Breakfast (Pixel Art Animation)', '655$', 'images/IfHowlSophieopenedaMovingCastleBedaNdBreakfastPixelArtAnimation.jpeg'),
(98, 'Oriental painting & Toon', '962$', 'images/OrientalpaintingToon.jpeg'),
(99, 'typo_graphic', '352$', 'images/download14.jpeg'),
(100, 'DR_SLUMP Coin Operated Arcade ', '641$', 'images/DRSLUMPCoinOperatedArcadeARALE.jpeg'),
(101, 'Concept Art & Illustrations by Giovanni Maisto ', '827$', 'images/ConceptArtIllustrationsbyGiovanniMaistoInspirationGrid.jpeg'),
(102, ' Inspiration Grid', '551$', 'images/download4.jpeg'),
(103, 'chiefs kiss', '473$', 'images/chiefskiss.jpeg'),
(104, 'Kai Damian Matthiesen ', '765$', 'images/KaiDamianMatthiesentypographicposters.jpeg'),
(105, 'Mike Del Mundo', '667$', 'images/e2bd4be74af340089d526efb89905682.jpeg'),
(106, 'New Mutants #10 ', '793$', 'images/NewMutants10byMikeDelMundo.jpeg'),
(107, ' all the monsters come out at night', '427$', 'images/whydoallthemonsterscomeoutatnight.jpeg'),
(108, 'any environmen', '482$', 'images/ae2362952fc44b4e8743c4d8c60b147e.jpeg'),
(109, 'LinkedIn Login, Sign in _ LinkedIn', '125$', 'images/LinkedInLoginSigninLinkedIn.jpeg'),
(110, 'Bed-aNd-Breakfast', '424$', 'images/5eb819c9ce9443f39e2464bcb575e811.jpeg'),
(111, 'Geeks’ Picks for New Comics', '735$', 'images/GeeksPicksforNewComicsApril30th2014.jpeg'),
(112, ' Illustrations & Ideas ', '577$', 'images/74aa95eb65bc45089c57e66cf64054ba.jpeg'),
(113, 'touch of sophistication', '826$', 'images/27a79f5561b74318a0ccda0371ccf6d2.jpeg'),
(114, 'chloe', '755$', 'images/chloe.jpeg'),
(115, 'Surreal Digital Picasso', '822$', 'images/4f92a5485fb54443851bf37ca392cbda.jpeg'),
(116, 'ig_ ore_ore_ore', '228$', 'images/igoreoreore.jpeg'),
(117, 'Elevate your space with artful ideas that add a touch ', '377$', 'images/Elevateyourspacewithartfulideasthataddatouchofsophisticationtoanyenvironmen.jpeg'),
(118, 'Leon The Professional', '955$', 'images/LeonTheProfessional.jpeg'),
(119, 'Boogie Nights ', '661$', 'images/BoogieNights1997.jpeg'),
(120, ' OpenSea', '411$', 'images/download2.jpeg'),
(121, 'INSIDER __ home page', '223$', 'images/INSIDERhomepage.jpeg'),
(122, 'Unique & popular NFT Crypto Arts, Illustrations ', '944$', 'images/UniquepopularNFTCryptoArtsIllustrationsIdeas1.jpeg'),
(123, 'Funky Modern David ', '881$', 'images/FunkyModernDavidbyMichaelangelo.jpeg'),
(124, '#00040 Robot at the Puddle - Surreal Digital Picasso', '677$', 'images/00040RobotatthePuddleSurrealDigitalPicassoOpenSea.jpeg'),
(125, ' Gateway of Freedom - Surreal Digital Picasso ', '652$', 'images/00010GatewayofFreedomSurrealDigitalPicassoOpenSea.jpeg'),
(126, 'Lift, Zulfikri mokoagow', '991$', 'images/LiftZulfikrimokoagow.jpeg'),
(127, 'blurry fish', '993$', 'images/blurryfish.jpeg'),
(128, 'e4d37460-196b-48d3-8556', '644$', 'images/e4d37460196b48d385562ccc5291b934.jpeg'),
(129, '2d1b0256-1338-41c1-830b', '861$', 'images/2d1b0256133841c1830b5c26d869be13.jpeg'),
(130, '7e3b52f5-97d9-432a-988c', '829$', 'images/7e3b52f597d9432a988cc429d60f3ca7.jpeg'),
(131, '858edd56-421c-443b-a2a', '848$', 'images/858edd56421c443ba2ac4965fd9e4011.jpeg'),
(132, 'io', '199$', 'images/io.jpeg'),
(133, 'lilrevet', '200$', 'images/lilrevetwallpaper.jpeg'),
(134, 'SOLO LEVELING Streetwear Design', '400$', 'images/SOLOLEVELINGStreetwearDesign.jpeg'),
(135, 'Fivercrazyguy_ I will design a professional flyer ', '230$', 'images/FivercrazyguyIwilldesignaprofessionalflyerorposterfor15onfiverrcom.jpeg'),
(136, 'on fiverr', '320$', 'images/img000.jpeg'),
(137, 'alternative', '540$', 'images/img00.jpeg'),
(138, 'The Bear ', '676$', 'images/TheBear2022alternativeposterby11bus11.jpeg'),
(139, '_Frankensteined_ Licensed ', '969$', 'images/FrankensteinedOfficiallyLicensedScreenPrint.jpeg'),
(140, 'Discover Best Deals  __ Coffee Gifts', '818$', 'images/DiscoverBestDealsOnAmazoncomCoffeeGifts.jpeg'),
(141, 'cats wallpaper cat lover gift cat anime cat lovers cat beds cat house cat ', '717$', 'images/catswallpapercatlovergiftcatanimecatloverscatbedscathousecataestheticscatartcatsdo.jpeg'),
(143, 'Cikarang Express', '145$', 'images/CikarangExpress.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
