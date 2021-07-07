-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 02:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `contentid` int(10) NOT NULL,
  `userid` int(6) NOT NULL,
  `NameofFlags` varchar(250) NOT NULL,
  `Design` varchar(250) NOT NULL,
  `DateofCreation` date NOT NULL,
  `Description` mediumtext DEFAULT NULL,
  `FlagVideos` varchar(250) DEFAULT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`contentid`, `userid`, `NameofFlags`, `Design`, `DateofCreation`, `Description`, `FlagVideos`, `Type`) VALUES
(5, 10, 'Flag of Perlis', 'The yellow color symbolizes DYMM Raja. The color blue symbolizes the people. The flag itself carries the meaning of close cooperation between the King and His Majesty\'s People.', '1870-01-01', 'The flag of Perlis consists of a horizontal bicolored flag with equally proportionate bands of yellow on the upper half and dark blue on the lower half, sharing a similar design only to the flag of Pahang. The yellow band represents the Raja of Perlis, while the blue represents the people; with the yellow band over the blue band, the flag attempts to signify the close relationship forged between the Raja and the people of Perlis. The flag is similar to the flag of Ukraine, but has a reversed arrangement of colors with darker shades of blue and yellow as well as a different flag ratio.', '_D2uo5WImjM', 'Youtube'),
(6, 8, 'Flag of Penang', 'A triband of light blue, white and yellow; an areca nut palm tree within the middle white band.', '1949-01-01', 'The state flag of Penang, a Malaysian state, consists of three vertical bands and an areca-nut palm on a grassy mount in the centre. All three bands are of equal width. From left to right, the color of each band is light blue, white and yellow. The colors of the flag are derived from the tinctures of the coat of arms of Penang that was granted by King George VI in the 1940s. Light blue denotes the sea that surrounds Penang Island, white represents peace and yellow for the prosperity of the state. The areca-nut palm, known as pokok pinang in Malay, symbolizes the tree from which Penang got its name. The tree and its grassy mount is centered within the middle white band. The flag was first adopted in 1949 after Penang became a component state of the Federation of Malaya. The flag was slightly modified to its present form in the 1960s by removing a torse of blue and white at the bottom of the grassy mount.', 'VOq7X0JNUZY', 'Youtube'),
(9, 8, 'Flag of Terengganu', 'The white background means DYMM Sultan. It encircles the black earth which means the people. The crescent and star sign of Islam, the state religion.', '1953-01-01', 'First revealed in 1953, the present flag of Terengganu encompasses a black flag with a thick, white border and a white star and crescent in the centre that points towards the fly. The width of the crescent is five-sixths the width of the black panel, while the width of the star, which is tilting clockwise, is two-thirds that of the crescent.', 'RKRLCzgbHsQ', 'Youtube'),
(10, 11, 'Flag of Pahang', 'It consists of a simple horizontal bicolour flag with equally proportionate bands of white on the upper half and black on the lower half.', '1903-01-01', 'The Pahang state flag contains two colors, namely white above and black below. Both are the same width. Black is the color of the greatness of the Treasurer symbolizes that once upon a time the government in the state of Pahang was a person of the rank of Treasurer. White symbolizes the King. The addition of white over black means that Pahang is a state with its own sovereignty and Beraja rule. This also means that this state has the privileges, laws, customs, customs, ethics and certain powers that exist in the King as a monarchy and sovereign state.', 'wvu6FwzeJ2k', 'Youtube'),
(15, 10, 'Flag of Sarawak', 'The flag consists of yellow, black, and red with 9 stars in the middle.', '1988-01-01', 'The color red symbolizes the courage, determination and sacrifice of the people in their continuous efforts to pursue and defend the progress and height of dignity in the process of building Sarawak as a model state. The color yellow symbolizes the greatness of Law and Regulation (Order), unity and stability in a multiracial society. The color black symbolizes the wealth of Sarawak\'s natural resources such as crude oil, logs and so on which is a platform to develop its people. The nine-pointed yellow star symbolizes the nine parts where its people live in harmony. The star symbol is also the high ambition of our people and the desire of our struggle to improve the quality of life after independence.', 'lEpBdhwpVow', 'Youtube'),
(16, 8, 'Flag of Sabah', 'The flag consists of light blue, red and white with Mount Kinabalu on the flag.', '1998-01-01', '1: 2. In the upper corner of the bright blue flag, which is the background of the graphic painting of the shadow of Mount Kinabalu, dark blue, covers a quarter of this part of the flag. The flying end of the flag is adorned with three equally large stripes. The upper stripe is light blue, the middle stripe is white and the bottom stripe is chili red. Light blue symbolizes peace and prosperity, white symbolizes purity and justice, while chili red symbolizes courage and confidence. The light blue color indicates unity and prosperity while the dark blue symbolizes the strength and spirit of cooperation. The five colors that adorn this flag represent the five parts contained in the State of Sabah.Graphic painting in the form of Mount Kinabalu symbolizes the Sabah State Government.', 'xrkvk25JrtQ', 'Youtube'),
(17, 9, 'Flag of Federal Territory of Kuala Lumpur', 'The flag consists of blue, white and red colour with crescent and stars.', '1990-01-01', 'wide blue stripes across the middle, flanked by 6 red and white stripes, below and above each. The crescent moon and the 14-pointed star are yellow in blue field.', '3JIjBnu1Fjk', 'Youtube'),
(18, 11, 'Flag of Federal Territory of Putrajaya', 'The flag consists of blue and yellow colour with coat of arms in the middle.', '2001-01-01', 'Three color boxes, 2 of which are blue flanked by a yellow box in the middle. The coat of arms is in the middle of the yellow box.', '3JIjBnu1Fjk', 'Youtube'),
(29, 9, 'Flag of Perak', 'The flag of the state of Perak, in Malaysia, is a tricolour, made of three equal horizontal bands coloured white (top), yellow, and black (bottom).', '1879-01-31', 'The Perak Darul Ridzuan state flag contains three colors in white, yellow and black stripes.\r\nThese three lines are the same width. The color white symbolizes the greatness of His Majesty the Sultan of Perak Darul Ridzuan. The yellow color symbolizes the greatness of His Majesty Raja Muda Perak Darul Ridzuan. The color black symbolizes the greatness of His Majesty the King in Lower Perak Darul Ridzuan.\r\n', '7XAktrHuHQc', 'Youtube'),
(30, 7, 'Flag of Kelantan', 'The red background means the honesty of the people of this state including the people and the ruling King. The symbol of white greatness is a sign of the holiness of the King of this state.', '1924-01-01', 'Adopted in 1924, the Kelantanese flag consists of only a red field with a white charge in the centre derived from its state coat of arms, consisting of the arm\'s crescent, five-pointed star, dual spears and unsheathed krises. The red represents the honesty of Kelantan\'s settlers, citizens and king (the Sultan of Kelantan), while the charge signifies the sanctity of the Sultan of Kelantan.', '9et179IKQvE', 'Youtube'),
(31, 9, 'Flag of Selangor', 'There are four yellow and red parts. The star moon symbolises Islam shown in white.', '1965-01-30', 'The flag of Selangor consists of four proportionally-sized sections. The upper left and lower right sections are red, while the upper right and lower left sections are yellow. The red sections symbolise bravery. The yellow sections refer to royalty, represented by the local monarchy of Selangor, and the Sultan, who is the head of the state. The official religion of Selangor is Islam, and that is denoted by the white crescent and star on the top left corner of the flag. This flag has an official ratio of 1:2, although the flag is also manufactured in 2:3 proportions with 4x6 and 6x9 foot flags being common.', 'VPx1IIe6ozQ', 'Youtube'),
(32, 7, 'Flag of Kedah', 'Red is the national color of Kedah for generations. Paddy means this country is prosperous in terms of life. The crescent sign of this state is Muslim. Shield means that the King (Government) protects his people.', '1912-01-10', 'The Kedahan flag is essentially a red flag with only the state arms of Kedah charged on its upper hoist, the upper left quarter of the flag. The red, Kedah\'s traditional colour, signifies prosperity, while the flag\'s arms is as interpreted with the standalone arms. The Kedahan coat of arms consists of only three heraldic elements: An escutcheon, a crescent, and a wreath. The arms may be illustrated with only the aforementioned elements or included against a red ellipse.', '10a9jkH03OY', 'Youtube'),
(33, 7, 'Flag of Negeri Sembilan', 'The yellow color on the flag means DYMM Raja. The red triangular part means the people, while the black triangular part means Datuk-datuk Undang for the Luak-luak which are the parts of this state.', '1895-01-01', 'The flag of Negeri Sembilan consists of a yellow flag with a canton on the upper hoist, which is divided diagonally from the corner of the upper hoist towards the corner of the lower fly. The upper portion of the canton is coloured red, while the lower portion is coloured black.\r\nThe symbolisation of the flag is primarily concentrated towards the association of its colours with the people of the state. The yellow represents the Yang di-Pertuan Besar of Negeri Sembilan, the red denotes the citizens of the state, and the black symbolises the four undangs (traditional chiefs).\r\nAs well as being the state flag of Negeri Sembilan, the flag is also in use by the Yang di-Pertuan Besar as the royal standard to date.\r\n', 'sFS5mgOOpq0', 'Youtube'),
(34, 0, 'Flag of Melaka', 'There are red, white, yellow, blue colors in the Flag of Melaka. This flag also consists of moon and crescent.', '1961-01-10', 'The colors red, white, yellow and blue are the colors of the Federal Flag and indicate that Melaka is a state within the Federation, while the crescent moon and the five-pointed star are signs of Islam, state religion and Malaysia.', '4Zh0O3ORJiQ', 'Youtube'),
(35, 0, 'Flag of Johor', 'There are dark blue and red colours with crescent and stars on the flag.', '1871-01-01', 'The white crescent and star signify a sovereign King.\r\nThe red part means the warlord defending the state. The dark blue part means the State Government.\r\n', 'kLc0vqNxBEI', 'Youtube'),
(36, 0, 'Flag of Federal Territory of Labuan', 'The flag consists of red, white, blue colour with 14 stars and crescent in the middle.', '1984-01-01', 'three red, white and blue transverse stripes as well as a yellow crescent and 14 broken stars in white stripes.', '3JIjBnu1Fjk', 'Youtube');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(6) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fullname`, `email`, `username`, `password`) VALUES
(8, 'Muhammad Nazreen Bin Abdul Rahim', 'nazreen@gmail.com', 'Nazreen.Rahim', 'Nazreen00'),
(9, 'Zakwan Amir Bin Rushdi', 'AmirZ@gmail.com', 'Z_Amir', 'zakwan99'),
(10, 'Nur Meisyara Binti Mohd Terki', 'meimei@gmail.com', 'n.sara', 'meisyara02'),
(11, 'Amelia Binti Syafiq', 'Amelia@gmail.com', 'amelia_', 'Amelia40'),
(13, 'Nurul Atikah', 'atyka@gmail.com', 'Atyka99', '$2y$10$430qiF8/XlDrvXvAq47Bou7L/inI2nLFdz39aD5kWinq4Qe2nLZxm'),
(14, 'Melissa Metut', 'melissametut99@gmail.com', 'MelissaMel', '$2y$10$MD/wLQxv93D2MmQ9nH/rfeidFO.Dpm5DgIzHw1DH8Dk/.va2uxycO'),
(15, 'Dayang Nuratikah', 'dayang99@gmail.com', 'DayangNR', '$2y$10$/1rZ2fph3YcwciBYpTO1QOOIbX4V3Z8fK/p2A/OcMENv5nYNwpBNa'),
(16, 'Mohd Aiman Daniel', 'aiman@gmail.com', 'Aiman_Daniel', 'daniel1234'),
(17, 'Azfar Heri', 'azfarH@gmail.com', 'Heri_', '$2y$10$krMndKg5HmTEndrzfSNQPuQ1j4.A48nFm9Y0.VO9te0wV1mRgd/uu'),
(18, 'Jennie Kim', 'KimJ@gmail.com', 'JennieK', '$2y$10$HCmeUI6cAKlcoFyDoZ0CkeMpbPS1.d8qH1.mep39CYvExiTysBxrC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`contentid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `contentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
