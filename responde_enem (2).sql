-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: responde_enem.mysql.dbaas.com.br
-- Generation Time: 22-Out-2019 às 14:54
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
-- Estrutura da tabela `tb_cooperados`
--

CREATE TABLE `tb_cooperados` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `matricula` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usado para Login',
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `feedback` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT 'Onde conheceu?',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT '1',
  `senha` varchar(50) CHARACTER SET utf8 NOT NULL,
  `senha_confirma` varchar(50) CHARACTER SET utf8 NOT NULL,
  `newsletter` tinyint(1) DEFAULT '2' COMMENT '1 = Sim | 2 = Nao'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_cooperados`
--

INSERT INTO `tb_cooperados` (`id`, `nome`, `matricula`, `email`, `telefone`, `feedback`, `created`, `modified`, `ativo`, `senha`, `senha_confirma`, `newsletter`) VALUES
(2, 'felipe', 'felipe', 'felipeborges@unipam.edu.br', 'Youtube', '', '2018-08-17 11:11:18', '2018-08-17 18:46:57', 1, '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 2),
(6, 'Henrique', 'teste', 'teste@teste.com', 'link do youtube', '', '2018-11-07 09:15:09', '2018-11-07 09:15:09', 1, '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curriculos`
--

CREATE TABLE `tb_curriculos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `curriculo` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `telefone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `setor_pretendido` varchar(30) DEFAULT NULL,
  `mensagem` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_curriculos`
--

INSERT INTO `tb_curriculos` (`id`, `nome`, `email`, `curriculo`, `created`, `modified`, `telefone`, `setor_pretendido`, `mensagem`) VALUES
(1, 'Teste Curriculo', 'teste@teste.com.br', 'testformulario.pdf', '2018-08-16 02:49:53', '2018-08-16 02:49:53', '(34) 99999-9999', 'Financeiro', 'Testando formulário.'),
(2, 'ROGERIO', 'rogerio.sotap@gmail.com', 'capa-processo.pdf', '2018-08-29 13:36:27', '2018-08-29 13:36:27', '(34) 3821-7484', 'CONTABIL', 'TESTE'),
(3, 'Alaercio', 'alaercio@aquainterativa.com.br', 'teste.docx', '2018-08-31 08:05:05', '2018-08-31 08:05:05', '(34) 3821-5657', 'contábil', 'teste, form currículos.'),
(4, 'Larissa de Fátima Silva', 'larissafatimasb@gmail.com', 'larissa-de-fatima-silva.pdf', '2018-09-25 21:06:04', '2018-09-25 21:06:04', '(34) 99800-8943', '', 'Possuo Facilidade em lidar com o público, simpatia, foco e predisposição em aprendizagem. Tenho certeza que entendendo os objetivos da empresa , juntos podemos alcançá-los! \r\n'),
(5, 'Natália Pereira Ribeiro', 'nataliapereiraribeiro1@gmail.com', 'natalia-pereira-ribeiro-curriculo.docx', '2018-10-06 08:23:38', '2018-10-06 08:23:38', '(34) 99241-7919', 'Fiscal/Contábil', 'Por apresentar soluções diferenciadas dentro do mercado de serviços contábeis e assessoria empresarial. Atualizando seus serviços para o mundo digital.'),
(6, 'Pedro Henrique Moreira Braga', 'pedrombraga861@gmail.com', 'curriculo-pedrohenrique.pdf', '2018-10-17 21:02:42', '2018-10-17 21:02:42', '(34) 99240-9376', 'Ti', 'Porque quero crescer em um ambiente de constante desenvolvimento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_depoimentos`
--

CREATE TABLE `tb_depoimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `texto` text,
  `ativo` int(11) DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_depoimentos`
--

INSERT INTO `tb_depoimentos` (`id`, `nome`, `slug`, `texto`, `ativo`, `imagem`, `telefone`, `created`, `modified`) VALUES
(1, 'Sorveteria Gela Goela', 'sorveteria-gela-goela', 'Continuem buscando a excelência, vocês são bons e merecem permanecer sempre como aqueles profissionais que podemos sempre confiar! Sucesso!', 1, 'img-depoimentos-2.jpg', NULL, '2018-08-12 02:54:14', '2018-08-12 02:55:58'),
(2, 'Casa de Carnes Patense', 'casa-de-carnes-patense', 'Somos muito satisfeitos com o trabalho de vocês, até hoje não tive nenhum problema e todas as minhas solicitações são resolvidas.', 1, 'img-depoimentos.jpg', NULL, '2018-08-12 02:56:20', '2018-08-12 02:56:20'),
(3, 'Nutral Transportes', 'nutral-transportes', 'Gostaria de fazer um agradecimento em especial ao funcionário Wesley, pela sua dedicação e atenção junto a Nutral, em todas as vezes em que precisamos estava pronto a servir, mesmo fora do horário. Parabéns, funcionário exemplar. Também não posso deixar de falar do grande empresário Rogério , pessoa ímpar , atenciosa , inteligente nas suas colocações e domina o que faz. Parabéns também a toda equipe', 1, 'img-depoimentos.jpg', NULL, '2018-08-12 02:58:42', '2018-08-15 06:45:48'),
(4, 'ROGERIO', 'rogerio', 'teste', NULL, NULL, '(34) 3821-7484', '2018-08-29 15:51:53', '2018-08-29 15:51:53');

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
(1, 'Player 1', '', 'player-1', 1, 'maxresdefault-1.png', NULL, NULL, '2019-08-31 04:12:22', '2019-10-14 02:29:18'),
(2, 'Player 2', '', 'player-2', 1, 'novo-projeto-1.png', NULL, NULL, '2019-10-14 01:19:48', '2019-10-14 02:29:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_materias_tipos`
--

CREATE TABLE `tb_materias_tipos` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `nome` varchar(30) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `tb_materias_tipos`
--

INSERT INTO `tb_materias_tipos` (`id`, `created`, `modified`, `nome`, `slug`) VALUES
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
-- Estrutura da tabela `tb_questoes`
--

CREATE TABLE `tb_questoes` (
  `id` int(11) NOT NULL,
  `introducao` text NOT NULL,
  `texto` text,
  `pergunta` text,
  `prova_aplicada` varchar(30) DEFAULT NULL,
  `imagem` varchar(150) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `alternativa_1` varchar(500) NOT NULL,
  `alternativa_2` varchar(500) NOT NULL,
  `alternativa_3` varchar(500) NOT NULL,
  `alternativa_4` varchar(500) NOT NULL,
  `alternativa_5` varchar(500) NOT NULL,
  `alternativa_resposta_id` int(11) UNSIGNED NOT NULL,
  `link_estudo` varchar(500) DEFAULT NULL,
  `materias_tipo_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_questoes`
--

INSERT INTO `tb_questoes` (`id`, `introducao`, `texto`, `pergunta`, `prova_aplicada`, `imagem`, `slug`, `created`, `modified`, `alternativa_1`, `alternativa_2`, `alternativa_3`, `alternativa_4`, `alternativa_5`, `alternativa_resposta_id`, `link_estudo`, `materias_tipo_id`) VALUES
(1, 'Insetos necrófagos em todos os estágios imaturos de desenvolvimento foram coletados de um cadáver e enviados ao laboratório forense. Depois da incubação, esses insetos foram identificados como pertencentes à espécie Dermestes maculatus, que possui metamorfose completa. O estágio de desenvolvimento desses insetos mais adequado para estimativa do transcurso do tempo post mortem da vítima é o(a)', '', 'Qual desenho é em preto e branco?', 'Enem 2013', 'img-exemplo.jpg', '', '2019-10-08 16:36:43', '2019-10-18 00:17:23', 'primeiro instar larval.', 'primeiro instar ninfal.', 'ovo.', 'pupa.', 'último instar larval.', 2, 'https://stackoverflow.com/', 5),
(2, 'As plantas C4 desenvolveram mecanismos de concentração de CO2 os quais contribuem para reduzir a fotorrespiração, o que pode representar vantagens ou desvantagens para esse tipo de planta. Sobre as vantagens do mecanismo de concentração de CO2 das plantas C4.', '', 'é INCORRETO afirmar que:', 'ENEM 2017', '', '', '2019-10-08 18:26:12', '2019-10-09 16:04:08', 'A enzima fosfoenolpiruvato carboxilase utiliza como substrato o HCO3- que não compete com O2, ou seja, a fotorrespiração é suprimida no mesofilo.', 'Mecanismo de regeneração do PEP consome dois ATP. Assim, as C4 gastam 5 ATP para cada CO2 fixado; As plantas C3 gastam apenas 3 ATP por CO2 fixado.', 'A enzima PEP carboxilase tem elevada afinidade pelo substrato (HCO3-, 5μM), o que a permite atuar mesmo em muito baixas concentrações do substrato.', 'A grande afinidade da enzima pelo substrato permite que as plantas C4 fotossintetizem com pequena abertura estomática e, consequentemente, com baixa perda de água.', 'Aguá mole, pedra dura, tanto bate atê que fura.', 2, NULL, 4),
(3, 'As bactérias são seres aclorofilados, microscópicos, que se produzem por divisão binária. São essenciais para a manutenção da vida em nosso planeta, a começar pelo próprio fato de terem sido os primeiros organismos a aparecer na superfície terrestre, há cerca de 4,6 bilhões de anos. Acredita-se que se transformaram em mitocôndrias e cloroplastos por endossimbiose nos organismos eucarionte, ou seja: sem as bactérias, não existiriam células eucariontes e, tampouco, células vegetais.', '', 'Assinale o Reino a que pertencem e forma de organização nuclear das bactérias:', 'ENEM 2017', '', '', '2019-10-09 16:05:40', '2019-10-09 18:00:36', 'Protista e procarionte.', 'Monera e eucarionte.', 'Protista e eucarionte.', 'Monera e procarionte.', 'Fungi e eucarionte.', 1, NULL, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_respostas`
--

CREATE TABLE `tb_respostas` (
  `id` int(11) UNSIGNED NOT NULL,
  `resposta_correta` varchar(1) CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `nome` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_respostas`
--

INSERT INTO `tb_respostas` (`id`, `resposta_correta`, `created`, `modified`, `slug`, `nome`) VALUES
(1, '1', '2019-10-09 00:00:00', '2019-10-09 00:00:00', 'alternativa_1', 'Alternativa 1'),
(2, '2', '2019-10-09 00:00:00', '2019-10-09 00:00:00', 'alternativa_2', 'Alternativa 2'),
(3, '3', '2019-10-09 00:00:00', '2019-10-09 00:00:00', 'alternativa_3', 'Alternativa 3'),
(4, '4', '2019-10-09 00:00:00', '2019-10-09 00:00:00', 'alternativa_4', 'Alternativa 4'),
(5, '5', '2019-10-09 00:00:00', '2019-10-09 00:00:00', 'alternativa_5', 'Alternativa 5');

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
(1, 'Felipe Borges', 'felipeborges@unipam.edu.br', '2019-08-31 23:26:16', '2019-10-11 17:05:09', 'logo.png', NULL, 1, '1caaa56bc5d35666b5dc4b792afa9492ba8da2bf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cooperados`
--
ALTER TABLE `tb_cooperados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_unique` (`matricula`);

--
-- Indexes for table `tb_curriculos`
--
ALTER TABLE `tb_curriculos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_depoimentos`
--
ALTER TABLE `tb_depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_destaques`
--
ALTER TABLE `tb_destaques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_materias_tipos`
--
ALTER TABLE `tb_materias_tipos`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_questoes`
--
ALTER TABLE `tb_questoes`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_fk_tb_materias_tipo_tb_questoes` (`materias_tipo_id`) USING BTREE,
  ADD KEY `fk_fk_tb_respostas_tb_questoes` (`alternativa_resposta_id`) USING BTREE;

--
-- Indexes for table `tb_respostas`
--
ALTER TABLE `tb_respostas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cooperados`
--
ALTER TABLE `tb_cooperados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_curriculos`
--
ALTER TABLE `tb_curriculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_depoimentos`
--
ALTER TABLE `tb_depoimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_destaques`
--
ALTER TABLE `tb_destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_materias_tipos`
--
ALTER TABLE `tb_materias_tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_questoes`
--
ALTER TABLE `tb_questoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_respostas`
--
ALTER TABLE `tb_respostas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
