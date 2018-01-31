-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Dez-2017 às 22:45
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atores`
--

CREATE TABLE `atores` (
  `id_ator` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `nacionalidade` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atores`
--

INSERT INTO `atores` (`id_ator`, `nome`, `nacionalidade`) VALUES
(1, 'Michael Fassbender', 'EUA'),
(2, 'Marion Cotillard', 'EUA'),
(3, 'Jeremy Irons', 'EUA'),
(4, 'Michael K. Williams', 'EUA'),
(5, 'Ariane Labed', 'EUA'),
(6, 'Brendan Gleeson', 'EUA'),
(7, 'Vin Diesel', 'EUA'),
(8, 'Donnie Yen', 'EUA'),
(9, 'Tony Jaa', 'EUA'),
(10, 'Samuel L. Jackson', 'EUA'),
(11, 'Nina Dobrev', 'EUA'),
(12, 'Ruby Rose', 'EUA'),
(13, 'Toni Collette', 'EUA'),
(14, 'Kris Wu', 'EUA'),
(15, 'Deepika Padukone', 'EUA'),
(16, 'Rory McCann', 'EUA'),
(17, 'Neymar Jr.', 'BR'),
(18, 'Milla Jovovich', 'EUA'),
(19, 'Ali Larter', 'EUA'),
(20, 'Shawn Roberts', 'EUA'),
(21, 'Eoin Macken', 'EUA'),
(22, 'William Levy', 'EUA'),
(23, 'Iain Glen', 'EUA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atua`
--

CREATE TABLE `atua` (
  `personagen` varchar(45) DEFAULT NULL,
  `id_ator` int(11) DEFAULT NULL,
  `id_filme` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atua`
--

INSERT INTO `atua` (`personagen`, `id_ator`, `id_filme`) VALUES
('Xander Cage', 7, 2),
('Cal Lynch', 1, 1),
('Alice', 18, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atua_em`
--

CREATE TABLE `atua_em` (
  `id_diretor` int(11) DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atua_em`
--

INSERT INTO `atua_em` (`id_diretor`, `id_genero`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 3),
(3, 1),
(3, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `email`, `senha`, `nome`, `cpf`, `endereco`) VALUES
(1, 'a@a', '123', 'asdasd', '58545454665', 'asdasdasdad'),
(2, 'abc@gmail.com', '12345', 'teste', '456546789562', 'dasdasdasdasdasd'),
(3, 'abc@gmail.com', '12345', 'teste', '456546789562', 'dasdasdasdasdasd'),
(5, 'teste@gmail.com', 'abc123', 'teste2', '12345678990', 'Rua 7, Loteamento JosÃ© Ferreira'),
(11, 'b@b', '123456', 'dasdasdasdad', '23154689720', 'asdasd544454545asda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `diretor`
--

CREATE TABLE `diretor` (
  `nome` varchar(45) DEFAULT NULL,
  `id_diretor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `diretor`
--

INSERT INTO `diretor` (`nome`, `id_diretor`) VALUES
('Justin Kurzel', 1),
('D.J. Caruso', 2),
('Paul W.S. Anderson', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dirige`
--

CREATE TABLE `dirige` (
  `id_diretor` int(11) DEFAULT NULL,
  `id_filme` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dirige`
--

INSERT INTO `dirige` (`id_diretor`, `id_filme`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `valor` float DEFAULT NULL,
  `duracao` time DEFAULT NULL,
  `resumo` varchar(250) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `id_filme` int(11) NOT NULL,
  `data_lancamento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`valor`, `duracao`, `resumo`, `nome`, `id_filme`, `data_lancamento`) VALUES
(65, '01:56:00', 'Callum Lynch (Michael Fassbender) descobre que é descendente de um membro da Ordem dos Assassinos e, via memória genética, revive as aventuras do guerreiro Aguilar, seu ancestral espanhol do século XV. Dotado de novos conhecimentos e incríveis habili', 'Assassin\'s creed', 1, '2017-01-12'),
(55, '01:47:00', 'Xander Cage (Vin Diesel) desiste de sua aposentadoria quando Xiang, um guerreiro alfa mortal, coloca suas mãos em uma arma indestrutível chamada de \"Caixa de Pandora\". Xander recruta os melhores soldados do mundo para destruir o vilão e paralelamente', 'XXX: REATIVADO', 2, '2017-01-19'),
(50, '01:46:00', 'Sobrevivente do massacre zumbi, Alice (Milla Jovovich) retorna para onde o pesadelo começou, Raccoon City, onde a Umbrella Corporation reúne suas forças para um ataque final contra os remanescentes do apocalipse. Para vencer a dura batalha final e sa', 'RESIDENT EVIL 6: O CAPITULO FINAL', 3, '2017-01-26');
(50, '01:46:00', '', 'Logan', '');
(50, '01:46:00', '', 'A Vigilante do Amanha:Ghost in the Shell', '');
(50, '01:46:00', '', 'Velozes e Furiosos 8', '');
(50, '01:46:00', '', 'Guardioes da Galaxia 2', '');
(50, '01:46:00', '', 'ALIEN: COVENANT', '');
(50, '01:46:00', '', 'Piratas do Caribe: A Vingança de Salazar', '');
(50, '01:46:00', '', 'Mulher-Maravilha', '');
(50, '01:46:00', '', 'A Mumia', '');
(50, '01:46:00', '', 'Meu Malvado Favorito 3', '');
(50, '01:46:00', '', 'Spider-Man: De Volta ao Lar', '');
(50, '01:46:00', '', 'Planeta dos Macacos: A Guerra', '');
(50, '01:46:00', '', 'Carros 3', '');
(50, '01:46:00', '', 'TRANSFORMERS: O ULTIMO CAVALEIRO', '');
(50, '01:46:00', '', 'Thor 3: Ragnarok', '');
(50, '01:46:00', '', 'Liga da Justiça', '');
(50, '01:46:00', '', 'STAR WARS - OS ULTIMOS JEDI', '');
(50, '01:46:00', '', 'Cinquenta Tons Mais Escuros', '');
(50, '01:46:00', '', 'DRAGON BALL Z: A BATALHA DOS DEUSES', '');
(50, '01:46:00', '', 'DRAGON BALL Z - O RENASCIMENTO DE FREEZA', '');
(50, '01:46:00', '', 'THE LAST - NARUTO O FILME', '');
(50, '01:46:00', '', 'ONE PIECE - STRONG WORLD', '');
(50, '01:46:00', '', 'Yu-Gi-Oh! The Movie: Pyramid of Light', '');
(50, '01:46:00', '', 'Yu-Gi-Oh!: The Dark Side of Dimensions', '');
(50, '01:46:00', '', 'ANJOS DA NOITE - GUERRAS DE SANGUE', '');
(50, '01:46:00', '', 'BATMAN VS SUPERMAN - A ORIGEM DA JUSTIÇA', '');
(50, '01:46:00', '', 'WARCRAFT - O PRIMEIRO ENCONTRO DE DOIS MUNDOS', '');
(50, '01:46:00', '', 'CAPITAO AMERICA: GUERRA CIVIL', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nomegenero` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `nomegenero`) VALUES
(1, 'Ação'),
(2, 'Ficção científica'),
(3, 'Suspense'),
(4, 'Terror');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locar`
--

CREATE TABLE `locar` (
  `data_devolucao` date DEFAULT NULL,
  `data_locacao` date DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_filme` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `petence`
--

CREATE TABLE `petence` (
  `id_genero` int(11) DEFAULT NULL,
  `id_filme` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `petence`
--

INSERT INTO `petence` (`id_genero`, `id_filme`) VALUES
(1, 1),
(2, 1),
(1, 2),
(3, 2),
(1, 3),
(4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atores`
--
ALTER TABLE `atores`
  ADD PRIMARY KEY (`id_ator`);

--
-- Indexes for table `atua`
--
ALTER TABLE `atua`
  ADD KEY `id_ator` (`id_ator`),
  ADD KEY `id_filme` (`id_filme`);

--
-- Indexes for table `atua_em`
--
ALTER TABLE `atua_em`
  ADD KEY `id_diretor` (`id_diretor`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `diretor`
--
ALTER TABLE `diretor`
  ADD PRIMARY KEY (`id_diretor`);

--
-- Indexes for table `dirige`
--
ALTER TABLE `dirige`
  ADD KEY `id_diretor` (`id_diretor`),
  ADD KEY `id_filme` (`id_filme`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id_filme`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indexes for table `locar`
--
ALTER TABLE `locar`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_filme` (`id_filme`);

--
-- Indexes for table `petence`
--
ALTER TABLE `petence`
  ADD KEY `id_genero` (`id_genero`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atores`
--
ALTER TABLE `atores`
  MODIFY `id_ator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `diretor`
--
ALTER TABLE `diretor`
  MODIFY `id_diretor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atua`
--
ALTER TABLE `atua`
  ADD CONSTRAINT `atua_ibfk_1` FOREIGN KEY (`id_ator`) REFERENCES `atores` (`id_ator`),
  ADD CONSTRAINT `atua_ibfk_2` FOREIGN KEY (`id_filme`) REFERENCES `filme` (`id_filme`);

--
-- Limitadores para a tabela `atua_em`
--
ALTER TABLE `atua_em`
  ADD CONSTRAINT `atua_em_ibfk_1` FOREIGN KEY (`id_diretor`) REFERENCES `diretor` (`id_diretor`),
  ADD CONSTRAINT `atua_em_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`);

--
-- Limitadores para a tabela `dirige`
--
ALTER TABLE `dirige`
  ADD CONSTRAINT `dirige_ibfk_1` FOREIGN KEY (`id_diretor`) REFERENCES `diretor` (`id_diretor`),
  ADD CONSTRAINT `dirige_ibfk_2` FOREIGN KEY (`id_filme`) REFERENCES `filme` (`id_filme`);

--
-- Limitadores para a tabela `locar`
--
ALTER TABLE `locar`
  ADD CONSTRAINT `locar_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `locar_ibfk_2` FOREIGN KEY (`id_filme`) REFERENCES `filme` (`id_filme`);

--
-- Limitadores para a tabela `petence`
--
ALTER TABLE `petence`
  ADD CONSTRAINT `petence_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
