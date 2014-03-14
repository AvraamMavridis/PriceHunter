-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 05 Μάη 2013 στις 07:25:29
-- Έκδοση διακομιστή: 5.5.27
-- Έκδοση PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση: `price_observer`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `productinsupermarket`
--

CREATE TABLE IF NOT EXISTS `productinsupermarket` (
  `ItemID` int(11) NOT NULL,
  `SupermarketID` varchar(40) NOT NULL,
  `Price` float DEFAULT NULL,
  KEY `ItemID` (`ItemID`),
  KEY `SupermarketID` (`SupermarketID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `productinsupermarket`
--

INSERT INTO `productinsupermarket` (`ItemID`, `SupermarketID`, `Price`) VALUES
(101, '14', 26),
(111, '21', 36),
(121, '14', 14),
(121, '21', 39),
(131, '14', 49),
(131, '21', 45);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ItemID` int(11) NOT NULL AUTO_INCREMENT,
  `ItemName` varchar(40) NOT NULL,
  `ItemDesc` varchar(100) NOT NULL,
  `ItemCategory` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=234 ;

--
-- Άδειασμα δεδομένων του πίνακα `products`
--

INSERT INTO `products` (`ItemID`, `ItemName`, `ItemDesc`, `ItemCategory`) VALUES
(101, 'Tomatoes', '1kg', 'Vegetables'),
(102, 'Cucumbers', '1piece', 'Vegetables'),
(103, 'Carrots', '1kg', 'Vegetables'),
(104, 'Potatoes', '1kg', 'Vegetables'),
(105, 'Celery', '1kg', 'Vegetables'),
(106, 'Broccoli', '1kg', 'Vegetables'),
(107, 'Beans', '1kg', 'Vegetables'),
(108, 'Peas', '1kg', 'Vegetables'),
(109, 'Spinach', '1kg', 'Vegetables'),
(110, 'Lettuce', '1kg', 'Vegetables'),
(111, 'Garlic', '1kg', 'Vegetables'),
(112, 'Brusseles Sprouts', '1kg', 'Vegetables'),
(113, 'Onions', '1kg', 'Vegetables'),
(114, 'Asparagus', '1kg', 'Vegetables'),
(115, 'Pumpkins', '1kg', 'Vegetables'),
(116, 'Peppers', '1kg', 'Vegetables'),
(117, 'Green Beans', '1kg', 'Vegetables'),
(118, 'Snow Peas', '1kg', 'Vegetables'),
(119, 'Eggplants', '1kg', 'Vegetables'),
(120, 'Avocado', '1kg', 'Vegetables'),
(121, 'Apples', '1kg', 'Fruits'),
(122, 'Oranges', '1kg', 'Fruits'),
(123, 'Bananas', '1kg', 'Fruits'),
(124, 'Lemons', '1kg', 'Fruits'),
(125, 'Limes', '1kg', 'Fruits'),
(126, 'Grapefruits', '1kg', 'Fruits'),
(127, 'Grapes', '1kg', 'Fruits'),
(128, 'Pineapple', '1piece', 'Fruits'),
(129, 'Figs', '1kg', 'Fruits'),
(130, 'Blackberries', '1kg', 'Fruits'),
(131, 'Rasberries', '1kg', 'Fruits'),
(132, 'Strawberries', '1kg', 'Fruits'),
(133, 'Blueberries', '1kg', 'Fruits'),
(134, 'Cranberries', '1kg', 'Fruits'),
(135, 'Cherries', '1kg', 'Fruits'),
(136, 'Appricots', '1kg', 'Fruits'),
(137, 'Coconut', '1piece', 'Fruits'),
(138, 'Mangoes', '1kg', 'Fruits'),
(139, 'Melons', '1kg', 'Fruits'),
(140, 'Peaches', '1kg', 'Fruits'),
(141, 'Milk full fat 3%', '1lt', 'Dairy'),
(142, 'Milk light 2% fat', '1lt', 'Dairy'),
(143, 'Milk light 1% fat', '1lt', 'Dairy'),
(144, 'Milk fat-free 0%', '1lt', 'Dairy'),
(145, 'Milk evaporated', '1lt', 'Dairy'),
(146, 'Milk powdered', '1lt', 'Dairy'),
(147, 'Milk chocolate flavor', '1lt', 'Dairy'),
(148, 'Cheese cheddar', '1lt', 'Dairy'),
(149, 'Cheese mozzare', '1lt', 'Dairy'),
(150, 'Cheese swiss', '1lt', 'Dairy'),
(151, 'Cheese parmesan', '1lt', 'Dairy'),
(152, 'Cheese cottage', '1lt', 'Dairy'),
(153, 'Cheese goat', '1lt', 'Dairy'),
(154, 'Yogurt full fat', '1lt', 'Dairy'),
(155, 'Yogurt low fat', '1lt', 'Dairy'),
(156, 'Yogurt fat free', '1lt', 'Dairy'),
(157, 'Yogurt fruit full fat', '1lt', 'Dairy'),
(158, 'Yogurt fruit low fat', '1lt', 'Dairy'),
(159, 'Yogurt fruit fat free', '1lt', 'Dairy'),
(160, 'Yogurt drinkable', '1lt', 'Dairy'),
(161, 'Beef neck', '1kg', 'Meat'),
(162, 'Beef rib steak', '1kg', 'Meat'),
(163, 'Beef fillet steak', '1kg', 'Meat'),
(164, 'Beef rump', '1kg', 'Meat'),
(165, 'Beef shoulder', '1kg', 'Meat'),
(166, 'Beef thigh', '1kg', 'Meat'),
(167, 'Beef brisket', '1kg', 'Meat'),
(168, 'Pork shoulder blade steak', '1kg', 'Meat'),
(169, 'Pork shoulder arm steak', '1kg', 'Meat'),
(170, 'Pork loin back ribs', '1kg', 'Meat'),
(171, 'Pork loin rib chops', '1kg', 'Meat'),
(172, 'Pork brisket', '1kg', 'Meat'),
(173, 'Pork leg whole', '1kg', 'Meat'),
(174, 'Chicken whole', '1kg', 'Poultry'),
(175, 'Chicken breast', '1kg', 'Poultry'),
(176, 'Chicken wings', '1kg', 'Poultry'),
(177, 'Chicken leg whole', '1kg', 'Poultry'),
(178, 'Chicken drumsticks', '1kg', 'Poultry'),
(179, 'Chicken giblets', '1kg', 'Poultry'),
(180, 'Chicken thigh', '1kg', 'Poultry'),
(181, 'Salmon', '1kg', 'Fish'),
(182, 'Herring', '1kg', 'Fish'),
(183, 'Catfish', '1kg', 'Fish'),
(184, 'Trout', '1kg', 'Fish'),
(185, 'Swordfish', '1kg', 'Fish'),
(186, 'Dorado', '1kg', 'Fish'),
(187, 'Perch', '1kg', 'Fish'),
(188, 'Sardines', '1kg', 'Fish'),
(189, 'Tuna', '1kg', 'Fish'),
(190, 'Mackerel', '1kg', 'Fish'),
(191, 'Spaggeti long No6', '1kg', 'Pasta'),
(192, 'Spaggeti long No8', '1kg', 'Pasta'),
(193, 'Spaggeti long No10', '1kg', 'Pasta'),
(194, 'Lasagne', '1kg', 'Pasta'),
(195, 'Papardelle', '1kg', 'Pasta'),
(196, 'Tagliatelle', '1kg', 'Pasta'),
(197, 'Penne', '1kg', 'Pasta'),
(198, 'Tortelini', '1kg', 'Pasta'),
(199, 'Tortelini beef stuffing', '1kg', 'Pasta'),
(200, 'Tortelini cheese stuffing', '1kg', 'Pasta'),
(214, '890890', '89089', '089089'),
(215, '24547e54345', '345', '544353453'),
(216, 'ertrefgd', 'gerdfgdf', 'dfgdfg'),
(218, 'dasdasdsa', 'assadas', 'sadasdsadas'),
(219, 'gre', 'dfggdf', 'gfdgd'),
(220, 'greyyy', 'dfggdfyyy', 'gfdgdyyy'),
(221, '33242323423', '23423333', '324232333'),
(222, 'ertresdfsdfs', 'fffff', 'dffff'),
(223, 'ref', 'sdfsd', 'sdfsd'),
(224, 'dsfdsddd', 'sdfsdfdsfsdfds', 'sdfdsfsdfsd'),
(225, 'et4645', '4564564', '54645645'),
(226, '1', '1', '1'),
(228, 'asdasdas', 'asdasdas', 'asdasdas'),
(229, 'sadasdas', 'asdasdas', 'sadasdas'),
(230, 'rrrrrrrr', 'srrrrrrrrr', 'rrrrrrrrrr'),
(231, 'asdasdas', 'asdasdas', 'asdsadas'),
(232, 'Tomatopoltos', '200gr', 'Veges'),
(233, 'lolis', '300gr', 'veges');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `supermarkets`
--

CREATE TABLE IF NOT EXISTS `supermarkets` (
  `SupermarketID` varchar(40) NOT NULL,
  `SupermarketName` varchar(40) NOT NULL,
  `Chain` varchar(40) DEFAULT NULL,
  `City` varchar(40) DEFAULT NULL,
  `Region` varchar(40) DEFAULT NULL,
  `Lat` varchar(40) NOT NULL,
  `Long` varchar(40) NOT NULL,
  PRIMARY KEY (`SupermarketID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `supermarkets`
--

INSERT INTO `supermarkets` (`SupermarketID`, `SupermarketName`, `Chain`, `City`, `Region`, `Lat`, `Long`) VALUES
('10', 'MASOUTIS', 'Skopou 12', 'Thessaloniki', '40 Ekklisies', '', ''),
('1131205352', 'Avraa Makis', 'Hemkop', 'Linkoping', 'Ostergotland', '38.8620722', '32.352047'),
('13', 'CARREFOUR', 'Perifereiaki odos neas Eykarpias', 'Thessaloniki', 'Eykarpia', '', ''),
('14', 'CARREFOUR', 'Emporiki stoa - Tompazi 15', 'Thessaloniki', 'Pylaia', '', ''),
('15', 'CARREFOUR', 'Ag. Dimitrioy 186', 'Thessaloniki', 'Agios Dimitrios', '', ''),
('16', 'ARVANITIDIS', 'Agathoypoleos 38', 'Thessaloniki', 'Neapoli', '', ''),
('17', 'ARVANTIIDIS', 'Aisopoy 9 & Enetikoy', 'Thessaloniki', 'Center', '', ''),
('19', 'ARVANITIDIS', 'V. Olgas 141', 'Thessaloniki', 'Thessaloniki', '', ''),
('20', 'AB VASILOPOYLOS', 'N. Manoy 4 & Mpotsari', 'Thessaloniki', 'Mpotsari', '', ''),
('21', 'AB VASILOPOYLOS', 'Ethn. Antistaseos 18', 'Thessaloniki', 'Vyzantio', '38.8620722', '32.352047');

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `productinsupermarket`
--
ALTER TABLE `productinsupermarket`
  ADD CONSTRAINT `productinsupermarket_ibfk_1` FOREIGN KEY (`ItemID`) REFERENCES `products` (`ItemID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productinsupermarket_ibfk_2` FOREIGN KEY (`SupermarketID`) REFERENCES `supermarkets` (`SupermarketID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
