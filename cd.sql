SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `cd` (
  `id` int(11) NOT NULL,
  `artista` varchar(100) NOT NULL,
  `ano` int(4) NOT NULL,
  `duracao` int(5) NOT NULL,
  `preco` double(5,2) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `cd` (`id`, `artista`, `ano`, `duracao`, `preco`, `nome`) VALUES
(1, 'Gorillaz', 2018, 97, 29.99, 'The Now Now'),
(2, 'Daft Punk', 2016, 115, 25.90, 'Random Memories Access'),
(3, 'Silk City', 2018, 3, 10.00, 'Electricity (Ft. Dua Lipa)'),
(4, 'Slipknot', 2015, 84, 22.90, '5 : The Gray Capther'),
(5, 'Muse', 2009, 115, 15.95, 'The Resistance'),
(6, 'Teste', 2000, 120, 1.00, 'Teste');


ALTER TABLE `cd`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
