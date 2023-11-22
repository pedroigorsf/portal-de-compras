-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Nov-2023 às 00:31
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores_cotacao`
--

DROP TABLE IF EXISTS `fornecedores_cotacao`;
CREATE TABLE IF NOT EXISTS `fornecedores_cotacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fk_cotacao_fornecedor` int NOT NULL,
  `fk_fornecedor` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_fornecedores_cotacao` (`fk_fornecedor`),
  KEY `fk_cotacao_idx` (`fk_cotacao_fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `fornecedores_cotacao`
--

INSERT INTO `fornecedores_cotacao` (`id`, `fk_cotacao_fornecedor`, `fk_fornecedor`) VALUES
(13, 33, 32),
(15, 33, 33),
(16, 33, 30),
(24, 31, 34),
(25, 31, 36),
(29, 33, 34),
(33, 34, 32),
(35, 34, 33),
(37, 35, 38),
(43, 35, 30),
(46, 44, 36),
(49, 44, 38),
(50, 47, 36),
(51, 47, 35),
(52, 47, 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_cotacao`
--

DROP TABLE IF EXISTS `produtos_cotacao`;
CREATE TABLE IF NOT EXISTS `produtos_cotacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fk_cotacao` int NOT NULL,
  `fk_produtos` int NOT NULL,
  `preco` float NOT NULL,
  `quantidade` float NOT NULL,
  `marca` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idx` (`fk_produtos`),
  KEY `fk_cotacao_idx` (`fk_cotacao`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `produtos_cotacao`
--

INSERT INTO `produtos_cotacao` (`id`, `fk_cotacao`, `fk_produtos`, `preco`, `quantidade`, `marca`) VALUES
(48, 33, 25, 0, 1, NULL),
(49, 33, 52, 0, 3, NULL),
(50, 33, 51, 0, 3, NULL),
(51, 34, 50, 0, 1, NULL),
(52, 34, 51, 0, 3, NULL),
(53, 34, 25, 0, 12, NULL),
(55, 35, 25, 0, 5, NULL),
(56, 35, 24, 0, 5, NULL),
(57, 35, 50, 0, 99, NULL),
(58, 31, 86, 0, 5, NULL),
(59, 31, 61, 0, 9, NULL),
(66, 44, 92, 0, 99, NULL),
(67, 44, 95, 0, 10, NULL),
(68, 47, 92, 0, 5, NULL),
(69, 47, 86, 0, 1, NULL),
(70, 47, 61, 0, 5, NULL),
(71, 47, 24, 0, 5, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas_cotacao`
--

DROP TABLE IF EXISTS `respostas_cotacao`;
CREATE TABLE IF NOT EXISTS `respostas_cotacao` (
  `id_respostas` int NOT NULL AUTO_INCREMENT,
  `fk_fornecedor` int NOT NULL,
  `fk_produto` int NOT NULL,
  `quantidade` float DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_respostas`),
  KEY `fk_respostas_fornecedor` (`fk_fornecedor`),
  KEY `fk_respostas_produto` (`fk_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cotacoes`
--

DROP TABLE IF EXISTS `tb_cotacoes`;
CREATE TABLE IF NOT EXISTS `tb_cotacoes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fk_usuario` int DEFAULT NULL,
  `solicitacao` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cc` int NOT NULL,
  `data_inicial` date NOT NULL,
  `data_final` date NOT NULL,
  `status` set('Informado','Aprovado','Reprovado') NOT NULL DEFAULT 'Informado',
  PRIMARY KEY (`id`),
  KEY `fk_usuario_cotacao` (`fk_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `tb_cotacoes`
--

INSERT INTO `tb_cotacoes` (`id`, `fk_usuario`, `solicitacao`, `cc`, `data_inicial`, `data_final`, `status`) VALUES
(31, 5, 'REQUISIÇÃO DE COMPRA DE LUVAS ISOLANTES PARA A EQUIPE DE CAMPO.', 0, '2023-11-01', '2023-11-03', 'Aprovado'),
(32, 5, 'SOLICITAÇÃO DE PRODUTOS VEICULARES', 0, '2023-11-09', '2023-11-23', 'Aprovado'),
(33, 5, 'SOLICITAÇÃO REFERENTE A REPOSIÇÃO DE ESTOQUE.', 0, '2023-11-13', '2023-11-18', 'Informado'),
(34, 5, 'REPOSIÇÃO DE ESTOQUE', 0, '2023-11-12', '2023-11-18', 'Aprovado'),
(35, 5, 'SOLICITAÇÃO APRESENTAÇÃO', 0, '2023-11-14', '2023-11-17', 'Reprovado'),
(44, 5, 'REPOSIÇÃO DE ESTOQUE', 0, '2023-11-17', '2023-11-30', 'Informado'),
(47, 5, 'GED', 0, '2023-11-20', '2023-11-30', 'Informado'),
(48, 5, 'DFSD', 0, '2023-11-21', '2023-11-28', 'Informado'),
(49, 9, 'TESTE', 0, '2023-11-15', '2023-11-21', 'Informado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fornecedores`
--

DROP TABLE IF EXISTS `tb_fornecedores`;
CREATE TABLE IF NOT EXISTS `tb_fornecedores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `endereco` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `stats` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `tb_fornecedores`
--

INSERT INTO `tb_fornecedores` (`id`, `nome`, `cnpj`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefone`, `email`, `senha`, `stats`) VALUES
(30, 'CARLITTOS OFFICIN', '00.349.304/8539-04', 'Rua D', '123 A', 'Parque Soledade', 'Caucaia', 'CE', '61.603/190', '', 'PEDRO@IGOR.COM', '123', 1),
(32, 'MATEUS S/A', '23.847.298/3491-27', 'Rua João Andrade Filho', '124B', 'Piratininga', 'Maracanaú', 'CE', '61.905/350', '', 'PEDRO@IGOR.COM', '123', 0),
(33, 'CAINÃ LTDA', '18.407.238/4792-38', 'Rua Antônio de Alencar', '123 A', 'Coqueiral', 'Maracanaú', 'CE', '61.902/065', '', 'PEDRO@IGOR.COM', '123', 0),
(34, 'FABER CASTELL', '12.937.168/9273-61', 'Rua João Andrade Filho', '567', 'Piratininga', 'Maracanaú', 'CE', '61.905/350', '', 'PEDRO@IGOR.COM', '123', 0),
(35, 'ACER ELETRÔNICOS', '12.764.823/6481-72', 'Rua João Andrade Filho', '2456', 'Piratininga', 'Maracanaú', 'CE', '61.905/350', '', 'PEDRO@IGOR.COM', '123', 1),
(36, 'KABUM', '91.237.468/2347-63', 'Rua João Andrade Filho', '345', 'Piratininga', 'Maracanaú', 'CE', '61.905/350', '', 'PEDRO@IGOR.COM', '123', 1),
(37, 'MUNDO TECNOLÓGICO LTDA', '81.273.648/1276-38', 'RUA JOÃO ANDRADE FILHO 2', '51 B', 'Piratininga', 'Maracanaú', 'CE', '61.905/350', '', 'PEDRO@IGOR.COM', '123', 0),
(38, 'AMAZON S/A', '12.386.518/2318-23', 'Rua João Andrade Filho', '12', 'Piratininga', 'Maracanaú', 'CE', '61.905/350', '', 'PEDRO@IGOR.COM', '123', 1),
(41, 'EMPRESA FICTÍCIA LTDA', '12.873.618/2763-81', 'Rua 18', '34', 'NOVO ORIENT', 'Maracanaú', 'CE', '61.921/190', '', 'PEDRO@IGOR.COM', '123', 0),
(51, 'MINHA APRESENTAÇÃO S/A', '42.736.476/2736-49', 'Rua João Andrade Filho', '10', 'Piratininga', 'Maracanaú', 'CE', '61.905/350', '', 'PEDRO@IGOR.COM', '202cb962ac59075b964b07152d234b70', 0),
(52, 'ROBERTO LTDA', '12.838.712/6387-17', 'Rua Luís Gonzaga dos Santos', '13', 'Pajuçara', 'Maracanaú', 'CE', '61.932/600', '', 'ROBERTO@GMAIL.COM', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `udm` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `stats` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `nome`, `udm`, `categoria`, `stats`) VALUES
(24, 'RETROVISOR ESQUERDO', 'UND', '', 1),
(25, 'ESCAPAMENTO ESQ', 'UND', '', 1),
(50, 'LUVA ISOLANT', 'PAR', '', 1),
(51, 'LUVA LATEX', 'PAR', '', 0),
(52, 'NOTEBOOK', 'UND', '', 0),
(53, 'SMARTPHONE', 'UND', '', 0),
(54, 'CADEIRA DE ESCRITÓRIO', 'UND', '', 0),
(55, 'CANETA AZUL', 'UND', '', 0),
(59, 'RETROVISOR DIREITO', 'UND', '', 0),
(61, 'AR CONDICIONADO', 'UND', '', 1),
(86, 'GUARDA ROUPA', 'UND', '', 1),
(92, 'COCA COLA', 'LT', '', 1),
(93, 'OI', 'OI', '', 1),
(94, 'LUVA MUCAMBO LATEX', 'PAR', '', 1),
(95, 'LUVA', 'PAR', '', 1),
(96, 'DFGDFG', 'DFG', '', 1),
(97, 'SDFSCV', 'XCV', '', 1),
(98, 'HGJVBNF', 'GHFGH', '', 1),
(106, 'FGHJFGHJ', 'FGH', '', 1),
(107, 'VXCVXC', 'XCV', '', 1),
(108, 'ERTERTE', 'ERT', '', 1),
(109, 'FGHFGHF', 'FG', '', 1),
(110, 'CVBCVB', 'CVBC', '', 1),
(111, 'HFGHFG', 'F', '', 1),
(112, 'GDHJDG', 'DFGH', '', 1),
(113, 'VBNVBN', 'V', '', 1),
(114, 'BCVBCVB', 'CVB', '', 1),
(115, 'ERTYER', 'E', '', 1),
(116, 'NM,NM,', 'NM,N', '', 1),
(117, 'KLÇK', 'KLÇ', '', 1),
(118, 'GSHDUUSHHSD', 'D', '', 1),
(119, 'JANELA', 'UND', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `usuario`, `nome`, `senha`, `tipo`) VALUES
(5, 'pedroigor', 'Pedro Ferreira', '123', 'solicitante'),
(8, 'marcelo', 'Marcelo Almeida', '123', 'aprovador'),
(9, 'roberto', 'Roberto', '123', 'solicitante');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `fornecedores_cotacao`
--
ALTER TABLE `fornecedores_cotacao`
  ADD CONSTRAINT `fk_cotacao_fornecedor` FOREIGN KEY (`fk_cotacao_fornecedor`) REFERENCES `tb_cotacoes` (`id`),
  ADD CONSTRAINT `fk_fornecedores_cotacao` FOREIGN KEY (`fk_fornecedor`) REFERENCES `tb_fornecedores` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `produtos_cotacao`
--
ALTER TABLE `produtos_cotacao`
  ADD CONSTRAINT `fk_cotacao` FOREIGN KEY (`fk_cotacao`) REFERENCES `tb_cotacoes` (`id`),
  ADD CONSTRAINT `fk_produtos` FOREIGN KEY (`fk_produtos`) REFERENCES `tb_produtos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `respostas_cotacao`
--
ALTER TABLE `respostas_cotacao`
  ADD CONSTRAINT `fk_respostas_fornecedor` FOREIGN KEY (`fk_fornecedor`) REFERENCES `fornecedores_cotacao` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_respostas_produto` FOREIGN KEY (`fk_produto`) REFERENCES `produtos_cotacao` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `tb_cotacoes`
--
ALTER TABLE `tb_cotacoes`
  ADD CONSTRAINT `fk_usuario_cotacao` FOREIGN KEY (`fk_usuario`) REFERENCES `tb_usuarios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
