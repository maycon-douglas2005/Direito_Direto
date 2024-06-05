-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/06/2024 às 06:33
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `direito-direto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `sexo` enum('Masculino, Feminino') NOT NULL,
  `data_nascimento` date NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `modelo_consultoria` enum('Presencial, Online, Híbrido') DEFAULT NULL,
  `numero_oab` varchar(15) DEFAULT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero_casa` int(11) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_completo`, `sexo`, `data_nascimento`, `celular`, `email`, `senha`, `modelo_consultoria`, `numero_oab`, `cep`, `rua`, `numero_casa`, `cidade`, `bairro`, `complemento`) VALUES
(1, 'Maycon Douglas Alves Pereira Chaves', '', '2005-04-05', '(11) 98232-8950', 'mayconchaves2005@gmail.com', 'Crn7836ma-', '', '', '09273-085', 'Flor de Cactus', 0, 'Santo André', 'Jardim Alzira Franco', ''),
(2, 'Edson Advogado Segundo', '', '1950-11-05', '4546456', 'edsonadvogado@gmail.com', 'edsoncalvo', '', '34564654', '76876-562', 'Rua dos Calvos', 12, 'Cidade dos Sem Cabelos', 'Jardim Calvo da Silva', 'Perto do bar chamado Calvo-Bar');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
