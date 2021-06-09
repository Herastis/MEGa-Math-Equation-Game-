-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 11:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mega`
--

-- --------------------------------------------------------

--
-- Table structure for table `algebra`
--

CREATE TABLE `algebra` (
  `id` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `ecuatie` varchar(250) NOT NULL,
  `raspuns` int(11) NOT NULL,
  `utilizat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `algebra`
--

INSERT INTO `algebra` (`id`, `categorie`, `ecuatie`, `raspuns`, `utilizat`) VALUES
(1, 'algebra', '12x + 4 = 16', 1, 0),
(2, 'algebra', '-10x - 19 = 19 - 8x', -19, 0),
(3, 'algebra', '15 + 5x = 0', -3, 0),
(4, 'algebra', '17x - 12 = 114 + 3x', 9, 0),
(5, 'algebra', '14x-23=1', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `analiza`
--

CREATE TABLE `analiza` (
  `id` int(11) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `ecuatie` varchar(250) NOT NULL,
  `raspuns` varchar(50) NOT NULL,
  `utilizat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analiza`
--

INSERT INTO `analiza` (`id`, `categorie`, `ecuatie`, `raspuns`, `utilizat`) VALUES
(1, 'analysis', 'Urmatoarea functie este covexa pe intervalul(0, ∞). f:R->R, f(x) = xlnx+3', 'da', 0),
(2, 'analysis', 'Sa se determine radacinile ecuatiei f\'(x)=0, pentru functia f:(0,𝝅/2)->[-1,1], f(x) = sinx + cosx.', 'pi/4', 0),
(3, 'analysis', 'Calculati derivata lui (3x+1)\' in functie de x', '3', 0),
(4, 'analysis', 'Cat este lim(sinx)=0, cand x tinde spre 0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `geometrie`
--

CREATE TABLE `geometrie` (
  `id` int(11) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `enunt` varchar(255) NOT NULL,
  `raspuns` varchar(50) NOT NULL,
  `utilizat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geometrie`
--

INSERT INTO `geometrie` (`id`, `categorie`, `enunt`, `raspuns`, `utilizat`) VALUES
(1, 'geometry', 'Fie un triunghi dreptunghic ABC. Unghiul A este unghi drept, iar B este de 30 de grade. Care este valoare unghiului C?', '60', 0),
(2, 'geometrie', 'Fie un cerc cu raza de 5cm. Care este perimetrul cercului?(pi = 3.14)', '31,4', 0),
(3, 'geometry', 'Care este lungimea ipotenuzei intr-un triunghi dreptunghic, cu masura catetelor 3, respectiv 4?', '5', 0),
(4, 'geometrie', 'Care este suma măsurilor unghiurilor interioare ale unui hexagon?', '720', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `ID` int(11) NOT NULL,
  `Answers` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`ID`, `Answers`) VALUES
(1, 'A'),
(2, 'D'),
(3, 'B'),
(4, 'A'),
(5, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `riddle`
--

CREATE TABLE `riddle` (
  `id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `raspuns` varchar(250) NOT NULL,
  `imagine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riddle`
--

INSERT INTO `riddle` (`id`, `text`, `raspuns`, `imagine`) VALUES
(1, 'Ana are 6 ani, fratele ei Dan are jumatate din varsta ei. Cati ani va avea Dan cand Ana are 30?', 'Cand Ana are 6ani, Dan are 6/2=3 ani. Dan este cu 3 ani mai mic ca Ana. Cand Ana va avea 30 ani, Dan va avea 30-3=27 ani.', '../Pages/Images/siblings.jpg'),
(2, 'Dacă 3 ouă fierb în 10 minute, 56 de ouă în câte minute fierb?\r\n', 'Tot in 10min :)', '../Pages/Images/eggs.jpg'),
(3, 'Un melc urcă în timpul zilei pe un copac 3 metri și alunecă noaptea 2 metri. După câte zile va ajunge în vârful copacului care are înălțimea de 10 metri?\r\n', '8 zile, deoarece în a 8-a zi ajunge si abia noaptea coboară iar 2 metri\r\n', '../Pages/Images/snail.jpg'),
(4, 'O rachetă de tenis și o minge de tenis costă împreună 110 euro. Cât costă fiecare, știind că racheta este cu exact 100 de euro mai scumpă decât mingea?\r\n', 'Mingea costa 5 euro și racheta costa 105 euro', '../Pages/Images/tennis.jpg'),
(5, '40 de instrumentişti interpretează o partitură muzicală într-o jumătate de oră. În câte minute vor interpreta aceeaşi partitură muzicală un număr de 80 de instrumentişti?', 'O vor interpreta în 30 minute, partitura este aceeași :)', '../Pages/Images/music.jpg'),
(6, 'Patru gâște pe cărare,\r\nCâte aripi sunt sub soare,\r\nDar picioare?', '2+2+2+2 = 8', '../Pages/Images/goose.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trigonometrie`
--

CREATE TABLE `trigonometrie` (
  `id` int(11) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `ecuatie` varchar(250) NOT NULL,
  `raspuns` varchar(50) NOT NULL,
  `utilizat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trigonometrie`
--

INSERT INTO `trigonometrie` (`id`, `categorie`, `ecuatie`, `raspuns`, `utilizat`) VALUES
(1, 'trigonometry', 'Valoarea lui sin𝝅', '0', 0),
(2, 'trigonometry', 'Valoarea lui cos𝝅/3', '1/2', 0),
(3, 'trigonometry', 'Valoarea tg 𝝅/4:', '1', 0),
(4, 'trigonometry', 'Valoarea ctg 5𝝅/4', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `role`) VALUES
(1, 'aa', 'aa', 'aa', 'aa'),
(2, 'hs.razvan@yahoo.com', 'razvan', 'c9e0b830ff18645849b8dbab57e477b5', 'admin'),
(10, 'hs.razvan4@gmail.com', 'razvan2', 'c9e0b830ff18645849b8dbab57e477b5', 'user'),
(17, '1@yahoo.com', '1', '202cb962ac59075b964b07152d234b70', 'user'),
(18, '2@yahoo.com', '2', '202cb962ac59075b964b07152d234b70', 'user'),
(19, '3@yahoo.com', '3', '202cb962ac59075b964b07152d234b70', 'user'),
(20, '4@yahoo.com', '4', '202cb962ac59075b964b07152d234b70', 'user'),
(21, '5asdasd@yahoo.com', '12312412', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `algebra`
--
ALTER TABLE `algebra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analiza`
--
ALTER TABLE `analiza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geometrie`
--
ALTER TABLE `geometrie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `trigonometrie`
--
ALTER TABLE `trigonometrie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
