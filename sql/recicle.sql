-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 06:16 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recicle`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `show_cidadao` (`n` VARCHAR(30), `em` VARCHAR(45), `en` VARCHAR(80))  BEGIN
SELECT  nome , sexo , cpf FROM recicle.cidadao;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cidadao`
--

CREATE TABLE `cidadao` (
  `cpf` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cidadao`
--

INSERT INTO `cidadao` (`cpf`, `nome`, `email`, `endereco`, `senha`) VALUES
('01739775457', 'Wesliana Silva', 'weslianacardoso@gmail.com', 'Lagoa Azul, Natal', 'Senha1234567'),
('11877157430', 'João Paulo', 'joaopaulopmedeiros@gmail.com', 'Rua Jardelândia, Planalto', 'Senha123'),
('123957494', 'Pedro Lucas', 'imamcalledpedro@gmail.com', 'São Gonçalo, Natal', 'SenhaPedro12'),
('13411247460', 'Fabiana Pereira', 'fabianarevival@gmail.com', 'Potengi, Natal', 'Senha123456'),
('23476837484', 'José André', 'joseandre@gmail.com', 'Potengi, Natal', 'SenhaAndre'),
('3857329844843', 'Gabriel Felipe', 'gabrielfelipe@gmail.com', 'Potengi, Natal', 'SenhaBiel123'),
('49586021748', 'Keliane Martins', 'kelianemartins@gmail.com', 'Potengi, Natal', 'SenhaKeliane'),
('70598588493', 'Higor Nascimento', 'higornascimento101@gmail.com', 'Rua Mangueiral, Extremoz', 'Senha1234'),
('71408311496', 'Débora Samara', 'deborasamara@gmail.com', 'Igapó, Natal', 'Senha12345'),
('7884368701', 'Alexsandro Silva', 'alexeuevoceo@gmail.com', 'Potengi, Natal', 'SenhaPaizao1');

-- --------------------------------------------------------

--
-- Table structure for table `cooperativa`
--

CREATE TABLE `cooperativa` (
  `cnpj` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cooperativa`
--

INSERT INTO `cooperativa` (`cnpj`, `nome`, `email`, `endereco`, `senha`) VALUES
('1', 'A', 'a@gmail.com', 'AAA, Natal', 'SenhaA'),
('10', 'j', 'j@gmail.com', 'JJJ, Natal', 'SenhaJ'),
('2', 'B', 'b@gmail.com', 'BBB, Natal', 'SenhaB'),
('3', 'C', 'c@gmail.com', 'CCC, Natal', 'SenhaC'),
('4', 'D', 'd@gmail.com', 'DDD, Natal', 'SenhaD'),
('5', 'E', 'e@gmail.com', 'EEE, Natal', 'SenhaE'),
('6', 'F', 'f@gmail.com', 'FFF, Natal', 'SenhaF'),
('7', 'G', 'g@gmail.com', 'GGG, Natal', 'SenhaG'),
('8', 'H', 'h@gmail.com', 'HHH, Natal', 'SenhaH'),
('9', 'I', 'i@gmail.com', 'III, Natal', 'SenhaI');

-- --------------------------------------------------------

--
-- Table structure for table `desafio`
--

CREATE TABLE `desafio` (
  `id` int(11) NOT NULL,
  `cooperativa_cnpj` varchar(45) NOT NULL,
  `cidadao_cpf` varchar(45) NOT NULL,
  `lixo_id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `tipo_bonificacao` varchar(45) NOT NULL,
  `img` blob NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `desafio`
--

INSERT INTO `desafio` (`id`, `cooperativa_cnpj`, `cidadao_cpf`, `lixo_id`, `titulo`, `tipo_bonificacao`, `img`, `descricao`, `status`) VALUES
(1, '7', '11877157430', 5, 'E-Lixo', 'Netflix', '', 'XXX', 0),
(2, '4', '11877157430', 5, 'E-Lixo', 'Netflix', '', 'XXX', 0),
(3, '10', '11877157430', 3, 'Plástico É Oportunidade', 'Crédito de Celular', '', 'XXX', 0),
(4, '10', '11877157430', 3, 'Plástico É Oportunidade', 'Crédito de Celular', '', 'XXX', 0),
(5, '2', '11877157430', 7, 'Hospitais bonificam', 'Dinheiro', '', 'XXX', 0),
(6, '1', '11877157430', 2, 'Metalúrgico bonifica', 'Dinheiro', '', 'XXX', 0),
(7, '3', '11877157430', 3, 'Plástico', 'Ingresso de Cinema', '', 'XXX', 0),
(8, '6', '11877157430', 3, 'Pilhas e Baterias', 'Netflix', '', 'XXX', 0),
(9, '5', '11877157430', 3, 'Pilhas e Baterias dão dinheiro!', 'Dinheiro', '', 'XXX', 0),
(10, '8', '11877157430', 9, 'Garrafa retornável e oportunidade', 'Ingresso de Cinema', '', 'XXX', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lixo`
--

CREATE TABLE `lixo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lixo`
--

INSERT INTO `lixo` (`id`, `tipo`) VALUES
(1, 'Papel'),
(2, 'Metal'),
(3, 'Plástico'),
(4, 'Papelão'),
(5, 'Eletrônico'),
(6, 'Pilha e Bateria'),
(7, 'Hospitalar'),
(8, 'Cápsulas de Café'),
(9, 'Garrafa Vidro'),
(10, 'Industrial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cidadao`
--
ALTER TABLE `cidadao`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `cooperativa`
--
ALTER TABLE `cooperativa`
  ADD PRIMARY KEY (`cnpj`);

--
-- Indexes for table `desafio`
--
ALTER TABLE `desafio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cooperativa_cnpj` (`cooperativa_cnpj`),
  ADD KEY `fk_cidadao_cpf` (`cidadao_cpf`),
  ADD KEY `fk_lixo_id` (`lixo_id`);

--
-- Indexes for table `lixo`
--
ALTER TABLE `lixo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desafio`
--
ALTER TABLE `desafio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lixo`
--
ALTER TABLE `lixo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `desafio`
--
ALTER TABLE `desafio`
  ADD CONSTRAINT `fk_cidadao_cpf` FOREIGN KEY (`cidadao_cpf`) REFERENCES `cidadao` (`cpf`),
  ADD CONSTRAINT `fk_cooperativa_cnpj` FOREIGN KEY (`cooperativa_cnpj`) REFERENCES `cooperativa` (`cnpj`),
  ADD CONSTRAINT `fk_lixo_id` FOREIGN KEY (`lixo_id`) REFERENCES `lixo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
