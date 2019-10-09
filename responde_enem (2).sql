-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 186.202.152.70
-- Generation Time: 09-Out-2019 às 09:38
-- Versão do servidor: 5.6.40-84.0-log
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responde_enem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_albuns_imagens`
--

CREATE TABLE `tb_albuns_imagens` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `imagem` varchar(120) NOT NULL,
  `ordem` int(11) DEFAULT NULL,
  `legenda` varchar(255) DEFAULT NULL,
  `descricao` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_albuns_imagens`
--

INSERT INTO `tb_albuns_imagens` (`id`, `album_id`, `imagem`, `ordem`, `legenda`, `descricao`, `created`, `modified`) VALUES
(32, 10, '111slide-01.jpg', 4, '', NULL, '2017-08-24 13:27:39', '2017-09-01 14:01:09'),
(33, 10, 'imagem-quem-somos.jpg', 2, '', NULL, '2017-08-24 14:11:51', '2017-08-31 17:12:02'),
(34, 10, 'bg-recursos-humanos.jpg', 2, '', NULL, '2017-09-01 14:00:13', '2017-09-01 14:01:09'),
(35, 10, 'bg-quem-somos.jpg', 1, '', NULL, '2017-09-01 14:00:24', '2017-09-01 14:01:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_albuns_tipos`
--

CREATE TABLE `tb_albuns_tipos` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_albuns_tipos`
--

INSERT INTO `tb_albuns_tipos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Conteúdo', '2015-11-09 11:35:25', '2015-11-09 11:35:28'),
(2, 'Galeria', '2015-11-09 11:37:40', '2015-11-09 11:37:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_albuns_videos`
--

CREATE TABLE `tb_albuns_videos` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `codigo_video` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cidades`
--

CREATE TABLE `tb_cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cidades`
--

INSERT INTO `tb_cidades` (`id`, `nome`, `estado_id`, `created`, `modified`) VALUES
(1, 'Patos de Minas', 11, '2014-10-09 15:10:04', '2014-10-09 15:10:04'),
(2, 'Presidente Olegário', 11, '2014-12-04 11:17:16', '2014-12-04 11:17:16'),
(3, 'Lagoa Formosa', 11, '2014-12-08 08:27:33', '2014-12-08 08:27:33'),
(4, 'Buritizeiro', 11, '2017-12-01 16:52:20', '2017-12-01 16:52:20'),
(5, 'João Pinheiro', 11, '2017-12-01 16:53:20', '2017-12-01 16:53:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_destaques`
--

CREATE TABLE `tb_destaques` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `slug` varchar(120) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `externo` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_destaques`
--

INSERT INTO `tb_destaques` (`id`, `nome`, `descricao`, `slug`, `ativo`, `imagem`, `link`, `externo`, `created`, `modified`) VALUES
(1, 'Player 1', '', 'player-1', 1, 'player-2.png', NULL, NULL, '2019-08-31 04:12:22', '2019-08-31 05:07:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estados`
--

CREATE TABLE `tb_estados` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `sigla` varchar(2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_estados`
--

INSERT INTO `tb_estados` (`id`, `nome`, `sigla`, `created`, `modified`) VALUES
(1, 'Acre', 'AC', '0000-00-00 00:00:00', '2014-08-13 08:53:26'),
(2, 'Alagoas', 'AL', '0000-00-00 00:00:00', '2014-08-13 08:53:29'),
(3, 'Amapá', 'AP', '0000-00-00 00:00:00', '2014-08-13 08:53:31'),
(4, 'Amazonas', 'AM', '0000-00-00 00:00:00', '2014-08-13 08:53:32'),
(5, 'Bahia', 'BA', '0000-00-00 00:00:00', '2014-08-13 08:53:36'),
(6, 'Ceará', 'CE', '0000-00-00 00:00:00', '2014-08-13 08:53:40'),
(7, 'Distrito Federal', 'DF', '0000-00-00 00:00:00', '2014-08-13 08:53:52'),
(8, 'Espírito Santo', 'ES', '0000-00-00 00:00:00', '2014-08-13 08:53:59'),
(9, 'Goiás', 'GO', '0000-00-00 00:00:00', '2014-08-13 08:54:03'),
(10, 'Maranhão', 'MA', '0000-00-00 00:00:00', '2014-08-13 08:54:08'),
(11, 'Minas Gerais', 'MG', '0000-00-00 00:00:00', '2014-08-13 08:54:47'),
(12, 'Mato Grosso do Sul', 'MS', '0000-00-00 00:00:00', '2014-08-13 08:54:20'),
(13, 'Mato Grosso', 'MT', '0000-00-00 00:00:00', '2014-08-13 08:54:53'),
(14, 'Pará', 'PA', '0000-00-00 00:00:00', '2014-08-13 08:54:58'),
(15, 'Paraíba', 'PB', '0000-00-00 00:00:00', '2014-08-13 08:56:44'),
(16, 'Pernambuco', 'PE', '0000-00-00 00:00:00', '2014-08-13 08:57:01'),
(17, 'Piauí', 'PI', '0000-00-00 00:00:00', '2014-08-13 08:57:08'),
(18, 'Paraná', 'PR', '0000-00-00 00:00:00', '2014-08-13 08:57:10'),
(19, 'Rio de Janeiro', 'RJ', '0000-00-00 00:00:00', '2014-08-13 08:57:14'),
(20, 'Rio Grande do Norte', 'RN', '0000-00-00 00:00:00', '2014-08-13 08:57:27'),
(21, 'Rondônia', 'RO', '0000-00-00 00:00:00', '2014-08-13 08:57:31'),
(22, 'Roraima', 'RR', '0000-00-00 00:00:00', '2014-08-13 08:57:40'),
(23, 'Rio Grande do Sul', 'RS', '0000-00-00 00:00:00', '2014-08-13 08:57:46'),
(24, 'Santa Catarina', 'SC', '0000-00-00 00:00:00', '2014-08-13 08:57:51'),
(25, 'Sergipe', 'SE', '0000-00-00 00:00:00', '2014-08-13 08:57:56'),
(26, 'São Paulo', 'SP', '0000-00-00 00:00:00', '2014-08-13 08:58:03'),
(27, 'Tocantins', 'TO', '0000-00-00 00:00:00', '2014-08-13 08:58:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_galerias`
--

CREATE TABLE `tb_galerias` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `texto` text,
  `descricao` varchar(255) DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_galerias`
--

INSERT INTO `tb_galerias` (`id`, `nome`, `slug`, `texto`, `descricao`, `imagem`, `data`, `created`, `modified`) VALUES
(8, 'Barra', 'barra', '<p><span style=\"background-color:rgb(255, 255, 255); color:rgb(102, 102, 102); font-family:open sans,sans-serif; font-size:16px\">As barras possuem aplica&ccedil;&otilde;es diversas tanto na &aacute;rea industrial, em diferentes segmentos, como tamb&eacute;m na constru&ccedil;&atilde;o civil, sendo utilizadas principalmente em projetos estruturais met&aacute;licos e coberturas. Podem ainda ser usadas em revestimentos de alvenaria.</span></p>\r\n', 'As barras possuem aplicações diversas tanto na área industrial, em diferentes segmentos, como também na construção civil', 'barras.jpg', '2017-08-24', '2017-08-24 13:23:19', '2017-08-24 13:23:19'),
(9, 'Telas para concreto', 'telas-para-concreto', '<p><span style=\"background-color:rgb(255, 255, 255); color:rgb(102, 102, 102); font-family:open sans,sans-serif; font-size:16px\">S&atilde;o pr&oacute;prias para a constru&ccedil;&atilde;o de lajes, pisos industriais, estruturas pr&eacute;-fabricadas, piscinas, pontes, revestimentos de t&uacute;neis, funda&ccedil;&otilde;es em geral entre outros.</span></p>\r\n', 'São próprias para a construção e fundações em geral', 'telas-para-concreto.jpg', '2017-08-24', '2017-08-24 13:26:37', '2017-08-24 13:26:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imoveis`
--

CREATE TABLE `tb_imoveis` (
  `id` int(11) NOT NULL,
  `introducao` varchar(500) DEFAULT NULL,
  `texto` varchar(500) DEFAULT NULL,
  `pergunta` varchar(150) DEFAULT NULL,
  `prova_aplicada` varchar(30) DEFAULT NULL,
  `imagem` varchar(150) DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `alternativa_1` varchar(210) NOT NULL,
  `alternativa_2` varchar(210) NOT NULL,
  `alternativa_3` varchar(210) NOT NULL,
  `alternativa_4` varchar(210) NOT NULL,
  `alternativa_5` varchar(210) DEFAULT NULL,
  `imoveis_tipo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_imoveis`
--

INSERT INTO `tb_imoveis` (`id`, `introducao`, `texto`, `pergunta`, `prova_aplicada`, `imagem`, `slug`, `created`, `modified`, `alternativa_1`, `alternativa_2`, `alternativa_3`, `alternativa_4`, `alternativa_5`, `imoveis_tipo_id`) VALUES
(1, NULL, NULL, 'A quantidade de ralos do novo reservatório deverá ser igual a', 'Enem 2013', NULL, '', '2019-10-08 16:36:43', '2019-10-08 16:36:43', '4', '2', '5', '8', '9', 0),
(2, 'fwefewf', 'ewfwf', 'fwwef', 'fewfew', '', '', '2019-10-08 18:26:12', '2019-10-08 18:28:48', 'fewfwe22222', 'few', 'few', 'fewfew', 'few', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imoveis_tipos`
--

CREATE TABLE `tb_imoveis_tipos` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `nome` varchar(30) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `tb_imoveis_tipos`
--

INSERT INTO `tb_imoveis_tipos` (`id`, `created`, `modified`, `nome`, `slug`) VALUES
(1, '2019-10-08 17:34:54', '2019-10-08 17:34:54', 'História', 'historia'),
(2, '2019-10-08 17:35:02', '2019-10-08 17:35:02', 'Geografia', 'geografia'),
(3, '2019-10-08 17:35:06', '2019-10-08 17:35:06', 'Filosofia ', 'filosofia'),
(4, '2019-10-08 17:35:13', '2019-10-08 17:35:13', 'Sociologia', 'sociologia'),
(5, '2019-10-08 17:35:17', '2019-10-08 17:35:17', 'Biologia', 'biologia'),
(6, '2019-10-08 17:35:22', '2019-10-08 17:35:22', 'Química', 'quimica'),
(7, '2019-10-08 17:35:27', '2019-10-08 17:35:27', 'Física', 'fisica'),
(8, '2019-10-08 17:35:41', '2019-10-08 17:35:41', 'Língua Portuguesa e Literatura', 'lingua-portuguesa-e-literatura'),
(9, '2019-10-08 17:36:05', '2019-10-08 17:36:05', 'Matemática', 'matematica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `texto` text,
  `id_categoria` int(11) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET ucs2 DEFAULT NULL,
  `descricao` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `data_produto` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `nome`, `texto`, `id_categoria`, `imagem`, `slug`, `descricao`, `data_produto`) VALUES
(2, 'Telas para concreto', '<p>S&atilde;o pr&oacute;prias para a constru&ccedil;&atilde;o de lajes, pisos industriais, estruturas pr&eacute;-fabricadas, piscinas, pontes, revestimentos de t&uacute;neis, funda&ccedil;&otilde;es em geral entre outros.</p>\r\n', 3, 'telas-para-concreto.jpg', 'telas-para-concreto', 'São próprias para a construção de lajes, pisos industriais, estruturas pré-fabricadas, piscinas, pontes, revestimentos de túneis, fundações em geral entre outros.', '2017-08-01 16:55:00'),
(3, 'Telhas', '<p>S&atilde;o estruturas indispens&aacute;veis em uma obra e que fornecem o apoio para a constru&ccedil;&atilde;o dos tetos. A viga transfere o peso das lajes e dos demais elementos (paredes, portas, etc.) para as colunas.</p>\r\n', 3, 'telhas.jpg', 'telhas', 'São estruturas indispensáveis em uma obra e que fornecem o apoio para a construção dos tetos. A viga transfere o peso das lajes e dos demais elementos (paredes, portas, etc.) para as colunas.', '2017-08-01 17:00:00'),
(4, 'Rolos', '<p><span style=\"background-color:rgb(255, 255, 255); color:rgb(102, 102, 102); font-family:open sans,sans-serif; font-size:16px\">Usado para telas de alambrado, tanques rede para piscicultura e outras finalidades industriais, possui caracter&iacute;sticas t&eacute;cnicas inovadoras que lhe d&atilde;o maior resist&ecirc;ncia e um excelente acabamento. Tamb&eacute;m &eacute; indicado para amarrar o cercafix em todos os fios de cerca e arrematar a cabe&ccedil;a do mour&atilde;o de a&ccedil;o para evitar o deslocamento lateral.</span></p>\r\n', 3, 'rolos.jpg', 'rolos', 'Usado para telas de alambrado, tanques rede para piscicultura e outras finalidades industriais, possui características técnicas inovadoras que lhe dão maior resistência e um excelente acabamento. Também é indicado para amarrar o cercafix em todos os fios', '2017-08-01 17:01:00'),
(5, 'Cantoneiras', '<p><span style=\"background-color:rgb(255, 255, 255); color:rgb(102, 102, 102); font-family:open sans,sans-serif; font-size:16px\">As cantoneiras geralmente s&atilde;o utilizadas para segurar, arrematar e servirem de apoio a estruturas met&aacute;licas, torres de transmiss&atilde;o de energia el&eacute;trica e de telecomunica&ccedil;&otilde;es, esquadrias, m&aacute;quinas e implementos agr&iacute;colas, em serralherias e na ind&uacute;stria mec&acirc;nica em geral.</span></p>\r\n', 3, 'cantoneiras.jpg', 'cantoneiras', 'As cantoneiras geralmente são utilizadas para segurar, arrematar e servirem de apoio a estruturas metálicas, torres de transmissão de energia elétrica e de telecomunicações, esquadrias, máquinas e implementos agrícolas, em serralherias e na indústria', '2017-08-01 17:04:00'),
(6, 'Vigas', '<p><span style=\"background-color:rgb(255, 255, 255); color:rgb(102, 102, 102); font-family:open sans,sans-serif; font-size:16px\">S&atilde;o estruturas indispens&aacute;veis em uma obra e que fornecem o apoio para a constru&ccedil;&atilde;o dos tetos. A viga transfere o peso das lajes e dos demais elementos (paredes, portas, etc.) para as colunas.</span></p>\r\n', 3, 'vigas.jpg', 'vigas', 'São estruturas indispensáveis em uma obra e que fornecem o apoio para a construção dos tetos. A viga transfere o peso das lajes e dos demais elementos (paredes, portas, etc.) para as colunas.', '2017-08-01 17:05:00'),
(7, 'Tubos', '<p><span style=\"background-color:rgb(255, 255, 255); color:rgb(102, 102, 102); font-family:open sans,sans-serif; font-size:16px\">Tubo de a&ccedil;o galvanizado &eacute; um tubo de a&ccedil;o que foi revestido com zinco. Este revestimento protege o a&ccedil;o contra a corros&atilde;o. &Eacute; mais comumente usado para a constru&ccedil;&atilde;o ao ar livre como cercas e corrim&atilde;os, ou por algum encanamento interior. &Eacute; tamb&eacute;m muitas vezes chamado tubo de ferro galvanizado.</span></p>\r\n', 5, 'tubos.jpg', 'tubos', 'Tubo de aço galvanizado é um tubo de aço que foi revestido com zinco. Este revestimento protege o aço contra a corrosão. É mais comumente usado para a construção ao ar livre como cercas e corrimãos, ou por algum encanamento interior. É também muitas vezes', '2017-08-01 17:05:00'),
(8, 'Barras', '<p><span style=\"background-color:rgb(255, 255, 255); color:rgb(102, 102, 102); font-family:open sans,sans-serif; font-size:16px\">As barras possuem aplica&ccedil;&otilde;es diversas tanto na &aacute;rea industrial, em diferentes segmentos, como tamb&eacute;m na constru&ccedil;&atilde;o civil, sendo utilizadas principalmente em projetos estruturais met&aacute;licos e coberturas. Podem ainda ser usadas em revestimentos de alvenaria.</span></p>\r\n', NULL, 'barras.jpg', 'barras', 'As barras possuem aplicações diversas tanto na área industrial, em diferentes segmentos, como também na construção civil, sendo utilizadas principalmente em projetos estruturais metálicos e coberturas. Podem ainda ser usadas em revestimentos de alvenaria.', '2017-08-01 16:46:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_recursoses`
--

CREATE TABLE `tb_recursoses` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `curriculo` varchar(255) DEFAULT NULL,
  `mensagem` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servicos`
--

CREATE TABLE `tb_servicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `descricao` mediumtext,
  `imagem` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `texto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_servicos`
--

INSERT INTO `tb_servicos` (`id`, `nome`, `slug`, `descricao`, `imagem`, `created`, `modified`, `texto`) VALUES
(46, 'Maquiagem definitiva de olhos', 'maquiagem-definitiva-de-olhos', 'Nada como ter um olhar marcante em qualquer hora do dia. Essa é uma das principais características.', 'dsc-4693.png', '2016-10-14 18:24:22', '2017-07-05 19:36:44', '<p style=\"text-align: justify;\">Nada como ter um olhar marcante em qualquer hora do dia. Essa &eacute; uma das principais caracter&iacute;sticas da maquiagem definitiva para os olhos. Al&eacute;m de sobressair seus olhos, ela tamb&eacute;m corrige imperfei&ccedil;&otilde;es.</p>\r\n\r\n<p style=\"text-align: justify;\">Tamb&eacute;m chamado de micropigmenta&ccedil;&atilde;o, esse procedimento tem tudo a ver com praticidade j&aacute; que, no dia a dia, nem sempre &eacute; poss&iacute;vel se maquiar antes de sair, al&eacute;m de, na &eacute;poca de maior calor, sempre corrermos o risco dos olhos ficarem borrados pelo excesso das temperaturas.</p>\r\n'),
(47, 'Micropigmentação em sobrancelhas', 'micropigmentacao-em-sobrancelhas', '', 'bethania-12.png', '2016-10-14 18:29:23', '2017-07-06 17:56:38', '<p>Fora as fun&ccedil;&otilde;es de prote&ccedil;&atilde;o, essa pequena parte do nosso corpo tem uma parcela grande na beleza do rosto.&nbsp;A sobrancelha deve ser aparada respeitando o forma da face. No entanto, algumas mulheres apresentam falha nessa regi&atilde;o, o que pode comprometer a harmonia do rosto.&nbsp;Mas j&aacute; existe solu&ccedil;&atilde;o para esse problema, ou defeitinho. &Eacute; a micropigmenta&ccedil;&atilde;o. Ela tem o intuito de corrigir falhas ou &ldquo;encher&rdquo; as sobrancelhas mais ralas.</p>\r\n'),
(48, 'Alongamento de cílios', 'alongamento-de-cilios', '', 'dsc-4700.png', '2016-10-14 18:29:50', '2017-07-06 18:19:29', ''),
(49, 'Estética Corporal', 'estetica-corporal', '', 'radio-frequencia-corporal.png', '2016-10-14 18:30:18', '2017-07-06 18:10:57', '<ul>\r\n	<li style=\"text-align: justify;\">Radiofrequ&ecirc;ncia</li>\r\n	<li style=\"text-align: justify;\">Ultra Cavita&ccedil;&atilde;o</li>\r\n	<li style=\"text-align: justify;\">Criolip&oacute;lise</li>\r\n	<li style=\"text-align: justify;\">Carboxiterapia&nbsp;</li>\r\n	<li style=\"text-align: justify;\">Corrente Russa</li>\r\n	<li style=\"text-align: justify;\">Drebagem Linf&aacute;tica</li>\r\n	<li style=\"text-align: justify;\">Massagem dreno modeladora</li>\r\n	<li style=\"text-align: justify;\">Recupera&ccedil;&atilde;o de p&oacute;s- operat&oacute;rio de cirurgias pl&aacute;sticas corporais</li>\r\n</ul>\r\n'),
(50, 'Estérica Facial ', 'esterica-facial', '', 'radio-frequencia-facial.png', '2016-10-14 18:30:36', '2017-07-06 18:15:37', '<ul>\r\n	<li style=\"text-align: justify;\">Limpeza de pele</li>\r\n	<li style=\"text-align: justify;\">Peeling de Diamante</li>\r\n	<li style=\"text-align: justify;\">Peeling para Acne Cosmobeauty</li>\r\n	<li style=\"text-align: justify;\">Peeling para Rejuvenesciemento Cosmobeauty</li>\r\n	<li style=\"text-align: justify;\">M&aacute;scaras Faciais diversas</li>\r\n	<li style=\"text-align: justify;\">Recupera&ccedil;&atilde;o de p&oacute;s-operat&oacute;rio facial&nbsp;</li>\r\n</ul>\r\n'),
(51, 'Depilação a laser', 'depilacao-a-laser', '', 'drenagem.png', '2016-10-14 18:30:52', '2017-07-06 18:23:48', '<p style=\"text-align:justify\">Light Sheer Duet</p>\r\n\r\n<p style=\"text-align:justify\">Soprano XL</p>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `funcao` varchar(50) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `email`, `created`, `modified`, `imagem`, `funcao`, `status`, `password`) VALUES
(1, 'Felipe Borges', 'felipeborges@unipam.edu.br', '2019-08-31 23:26:16', '2019-08-31 04:11:43', 'logo1.png', NULL, 1, '1caaa56bc5d35666b5dc4b792afa9492ba8da2bf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_albuns_imagens`
--
ALTER TABLE `tb_albuns_imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tb_albuns_imagens_tb_albuns` (`album_id`);

--
-- Indexes for table `tb_albuns_tipos`
--
ALTER TABLE `tb_albuns_tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_albuns_videos`
--
ALTER TABLE `tb_albuns_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tb_albuns_videos_tb_albuns` (`album_id`);

--
-- Indexes for table `tb_destaques`
--
ALTER TABLE `tb_destaques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galerias`
--
ALTER TABLE `tb_galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_imoveis`
--
ALTER TABLE `tb_imoveis`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `imoveis_tipo_id` (`imoveis_tipo_id`);

--
-- Indexes for table `tb_imoveis_tipos`
--
ALTER TABLE `tb_imoveis_tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_recursoses`
--
ALTER TABLE `tb_recursoses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_servicos`
--
ALTER TABLE `tb_servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_albuns_imagens`
--
ALTER TABLE `tb_albuns_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_albuns_tipos`
--
ALTER TABLE `tb_albuns_tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_albuns_videos`
--
ALTER TABLE `tb_albuns_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_destaques`
--
ALTER TABLE `tb_destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_galerias`
--
ALTER TABLE `tb_galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_imoveis`
--
ALTER TABLE `tb_imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_imoveis_tipos`
--
ALTER TABLE `tb_imoveis_tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_recursoses`
--
ALTER TABLE `tb_recursoses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_servicos`
--
ALTER TABLE `tb_servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
