-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: responde_enem.mysql.dbaas.com.br
-- Generation Time: 27-Out-2019 às 02:40
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
CREATE DATABASE IF NOT EXISTS `responde_enem` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `responde_enem`;

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
  `senha` varchar(50) CHARACTER SET utf8 NOT NULL,
  `senha_confirma` varchar(50) CHARACTER SET utf8 NOT NULL,
  `newsletter` tinyint(1) DEFAULT '2' COMMENT '1 = Sim | 2 = Nao',
  `imagem` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `sexo` varchar(1) CHARACTER SET utf8 NOT NULL COMMENT 'M = Male | F = Female',
  `ativo` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_cooperados`
--

INSERT INTO `tb_cooperados` (`id`, `nome`, `matricula`, `email`, `telefone`, `feedback`, `created`, `modified`, `senha`, `senha_confirma`, `newsletter`, `imagem`, `sexo`, `ativo`) VALUES
(1, 'Felipe Borges', 'felipe', 'felipeborges@unipam.edu.br', '(34) 99163-5948', '4', '2018-08-17 11:11:18', '2019-10-27 05:26:42', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 1, NULL, 'M', '1'),
(6, 'Henrique', 'teste', 'teste@teste.com', '3438251234', '3', '2018-11-07 09:15:09', '2018-11-07 09:15:09', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 2, NULL, 'F', '1');

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
  `nome` varchar(60) CHARACTER SET utf8 NOT NULL,
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
  `alternativa_1` text NOT NULL,
  `alternativa_2` text NOT NULL,
  `alternativa_3` text NOT NULL,
  `alternativa_4` text NOT NULL,
  `alternativa_5` text NOT NULL,
  `alternativa_resposta_id` int(11) UNSIGNED NOT NULL,
  `link_estudo` varchar(500) DEFAULT NULL,
  `materias_tipo_id` tinyint(4) NOT NULL,
  `topicos_tipo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_questoes`
--

INSERT INTO `tb_questoes` (`id`, `introducao`, `texto`, `pergunta`, `prova_aplicada`, `imagem`, `slug`, `created`, `modified`, `alternativa_1`, `alternativa_2`, `alternativa_3`, `alternativa_4`, `alternativa_5`, `alternativa_resposta_id`, `link_estudo`, `materias_tipo_id`, `topicos_tipo_id`) VALUES
(1, '<p><span style=\"background-color:rgb(255, 255, 255); color:rgb(64, 64, 64); font-family:opensans,sans-serif; font-size:16px\">Corredores ecol&oacute;gicos visam mitigar os efeitos da fragmenta&ccedil;&atilde;o dos ecossistemas promovendo a liga&ccedil;&atilde;o entre diferentes &aacute;reas, com o objetivo de proporcionar o deslocamento de animais, a dispers&atilde;o de sementes e o aumento da cobertura vegetal. S&atilde;o institu&iacute;dos com base em informa&ccedil;&otilde;es como estudos sobre o deslocamento de esp&eacute;cies, sua &aacute;rea de vida (&aacute;rea necess&aacute;ria para o suprimento de suas necessidades vitais e reprodutivas) e a distribui&ccedil;&atilde;o de suas popula&ccedil;&otilde;es.</span></p>\r\n\r\n<p style=\"text-align:right\"><span style=\"background-color:rgb(255, 255, 255); color:rgb(64, 64, 64); font-family:opensans,sans-serif; font-size:12px\">Dispon&iacute;vel em: www.mma.gov.br. Acesso em: 30 nov. 2017 (adaptado)</span></p>\r\n', '', 'Nessa estratégia, a recuperação da biodiversidade é efetiva porque: ', '2013', 'img-exemplo.jpg', '', '2019-10-08 16:36:43', '2019-10-27 04:36:52', '<p>propicia o fluxo g&ecirc;nico.</p>\r\n', '<p>intensifica o manejo de esp&eacute;cies.</p>\r\n', '<p>amplia o processo de ocupa&ccedil;&atilde;o humana.</p>\r\n', '<p>aumenta o n&uacute;mero de indiv&iacute;duos nas popula&ccedil;&otilde;es.</p>\r\n', '<p>favorece a forma&ccedil;&atilde;o de ilhas de prote&ccedil;&atilde;o integral.</p>\r\n', 1, '', 5, NULL),
(2, '<p>As plantas C4 desenvolveram mecanismos de concentra&ccedil;&atilde;o de CO2 os quais contribuem para reduzir a fotorrespira&ccedil;&atilde;o, o que pode representar vantagens ou desvantagens para esse tipo de planta. Sobre as vantagens do mecanismo de concentra&ccedil;&atilde;o de CO2 das plantas C4.</p>\r\n', '', 'é INCORRETO afirmar que:', '2017', '', '', '2019-10-08 18:26:12', '2019-10-27 04:32:41', '<p>A enzima fosfoenolpiruvato carboxilase utiliza como substrato o HCO3- que n&atilde;o compete com O2, ou seja, a fotorrespira&ccedil;&atilde;o &eacute; suprimida no mesofilo.</p>\r\n', '<p>Mecanismo de regenera&ccedil;&atilde;o do PEP consome dois ATP. Assim, as C4 gastam 5 ATP para cada CO2 fixado; As plantas C3 gastam apenas 3 ATP por CO2 fixado.</p>\r\n', '<p>A enzima PEP carboxilase tem elevada afinidade pelo substrato (HCO3-, 5&mu;M), o que a permite atuar mesmo em muito baixas concentra&ccedil;&otilde;es do substrato.</p>\r\n', '<p>A grande afinidade da enzima pelo substrato permite que as plantas C4 fotossintetizem com pequena abertura estom&aacute;tica e, consequentemente, com baixa perda de &aacute;gua.</p>\r\n', '<p>A grande afinidade do substrato permite que as plantas C9 fotossintetizem com pequena abertura estom&aacute;tica e, consequentemente, com alta perda de &aacute;gua.</p>\r\n', 2, 'https://google.com/', 4, NULL),
(3, '<p>As bact&eacute;rias s&atilde;o seres aclorofilados, microsc&oacute;picos, que se produzem por divis&atilde;o bin&aacute;ria. S&atilde;o essenciais para a manuten&ccedil;&atilde;o da vida em nosso planeta, a come&ccedil;ar pelo pr&oacute;prio fato de terem sido os primeiros organismos a aparecer na superf&iacute;cie terrestre, h&aacute; cerca de 4,6 bilh&otilde;es de anos. Acredita-se que se transformaram em mitoc&ocirc;ndrias e cloroplastos por endossimbiose nos organismos eucarionte, ou seja: sem as bact&eacute;rias, n&atilde;o existiriam c&eacute;lulas eucariontes e, tampouco, c&eacute;lulas vegetais.</p>\r\n', '', 'Assinale o Reino a que pertencem e forma de organização nuclear das bactérias:', '2017', '', '', '2019-10-09 16:05:40', '2019-10-27 04:32:25', '<p>Protista e procarionte.</p>\r\n', '<p>Monera e eucarionte.</p>\r\n', '<p>Protista e eucarionte.</p>\r\n', '<p>Monera e procarionte.</p>\r\n', '<p>Fungi e eucarionte.</p>\r\n', 1, 'https://youtube.com/', 5, NULL),
(4, '<p>O Sal&atilde;o do Autom&oacute;vel de S&atilde;o Paulo &eacute; um evento no qual v&aacute;rios fabricantes exp&otilde;em seus modelos mais recentes de ve&iacute;culos, mostrando, principalmente, suas inova&ccedil;&otilde;es em design e tecnologia.</p>\r\n\r\n<p style=\"text-align: right;\">Dispon&iacute;vel em: http://gl.globo.com. Acesso em: 4 fev. 2015 (adaptado).</p>\r\n\r\n<p>Uma montadora pretende participar desse evento com dois estandes, um na entrada e outro na regi&atilde;o central do sal&atilde;o, expondo, em cada um deles, um carro compacto e uma caminhonete.</p>\r\n\r\n<p>Para compor os estandes, foram disponibilizados pela montadora quatro carros compactos, de modelos distintos, e seis caminhonetes de diferentes cores para serem escolhidos aqueles que ser&atilde;o expostos. A posi&ccedil;&atilde;o dos carros dentro de cada estande &eacute; irrelevante. Uma express&atilde;o que fornece a quantidade de maneiras diferentes que os estandes podem ser compostos &eacute;</p>\r\n', '', '', '2013', '', NULL, '2019-10-26 19:12:35', '2019-10-27 04:16:04', '<p>A<sup>4</sup><sub>10</sub></p>\r\n', '<p>C<sup>4</sup><sub>10</sub></p>\r\n', '<p>C<sup>2</sup><sub>10&nbsp;</sub>x C<sup>2</sup><sub>6</sub>&nbsp;x 2 x 2</p>\r\n', '<p>A<sup>2</sup><sub>10&nbsp;</sub>x C<sup>2</sup><sub>6</sub>&nbsp;x 2 x 2</p>\r\n', '<p>C<sup>2</sup><sub>10&nbsp;</sub>x A<sup>2</sup><sub>6</sub>&nbsp;</p>\r\n', 3, '', 9, 1),
(5, '<p>Desde 1999 houve uma significativa mudan&ccedil;a nas placas dos carros particulares em todo o Brasil. As placas, que antes eram formadas apenas por seis caracteres alfanum&eacute;ricos, foram acrescidas de uma letra, passando a ser formadas por sete caracteres, sendo que os tr&ecirc;s primeiros caracteres devem ser letras (dentre as 26 letras do alfabeto) e os quatro &uacute;ltimos devem ser algarismos (de O a 9). Essa mudan&ccedil;a possibilitou a cria&ccedil;&atilde;o de um cadastro nacional unificado de todos os ve&iacute;culos licenciados e ainda aumentou significativamente a quantidade de combina&ccedil;&otilde;es poss&iacute;veis de placas. N&atilde;o s&atilde;o utilizadas placas em que todos os algarismos sejam iguais a zero.</p>\r\n', '', 'Nessas condições, a quantidade de placas que podem ser utilizadas é igual a', '2017', '', NULL, '2019-10-26 22:47:01', '2019-10-26 22:52:45', '<p>26<sup>3&nbsp;</sup>+ 9<sup>4</sup></p>\r\n', '<p>26<sup>3 </sup>x&nbsp;9<sup>4</sup></p>\r\n', '<p>26<sup>3&nbsp;</sup>(10<sup>4</sup>&nbsp;- 1)</p>\r\n', '<p>(26<sup>3</sup>​ + 10<sup>4</sup>) - 1</p>\r\n', '<p>(26<sup>3</sup>​ x 10<sup>4</sup>) - 1</p>\r\n', 3, '', 9, 1),
(6, '<p>Como n&atilde;o s&atilde;o adeptos da pr&aacute;tica de esportes, um grupo de amigos resolveu fazer um torneio de futebol utilizando videogame. Decidiram que cada jogador joga uma &uacute;nica vez com cada um dos outros jogadores. O campe&atilde;o ser&aacute; aquele que conseguir o maior n&uacute;mero de pontos. Observaram que o n&uacute;mero de partidas jogadas depende do n&uacute;mero de jogadores, como mostra o quadro:</p>\r\n', '', '', '2017', '2.PNG', NULL, '2019-10-26 22:48:24', '2019-10-26 22:53:11', '<p>64</p>\r\n', '<p>56</p>\r\n', '<p>49</p>\r\n', '<p>36</p>\r\n', '<p>28</p>\r\n', 5, '', 9, 1),
(7, '<p>Uma empresa construir&aacute; sua p&aacute;gina na internet e espera atrair um p&uacute;blico de aproximadamente um milh&atilde;o de clientes. Para acessar essa p&aacute;gina, ser&aacute; necess&aacute;ria uma senha com formato a ser definido pela empresa. Existem cinco op&ccedil;&otilde;es de formato oferecidas pelo programador, descritas no quadro, em que &ldquo;L&rdquo; e &ldquo;D&rdquo; representam, respectivamente, letra mai&uacute;scula e d&iacute;gito.</p>\r\n', '', '', '2017', '3.PNG', NULL, '2019-10-26 22:50:06', '2019-10-26 22:53:03', '<p>I.</p>\r\n', '<p>II.</p>\r\n', '<p>III.</p>\r\n', '<p>IV.</p>\r\n', '<p>V.</p>\r\n', 5, '', 9, 1),
(8, '<p>Um brinquedo infantil caminh&atilde;o-cegonha &eacute; formado por uma carreta e dez carrinhos nela transportados, conforme a figura.</p>\r\n', '', 'No setor de produção da empresa que fabrica esse brinquedo, é feita a pintura de todos os carrinhos para que o aspecto do brinquedo fique mais atraente. São utilizadas as cores amarelo, branco, laranja e verde, e cada carrinho é pintado apenas com uma cor. O caminhão-cegonha tem uma cor fixa. A empresa determinou que em todo caminhão-cegonha deve haver pelo menos um carrinho de cada uma das quatro cores disponíveis. Mudança de posição dos carrinhos no caminhão-cegonha não gera um novo modelo do brinquedo. Com base nessas informações, quantos são os modelos distintos do brinquedo caminhão-cegonha que essa empresa poderá produzir?', '2017', '4.PNG', NULL, '2019-10-26 22:52:31', '2019-10-26 22:52:53', '<p>C<sub>&nbsp;6,4</sub></p>\r\n', '<p>C<sub>&nbsp;9,3</sub></p>\r\n', '<p>C<sub>&nbsp;10,4</sub></p>\r\n', '<p>6<sup>4</sup></p>\r\n', '<p>4<sup>6</sup></p>\r\n', 2, '', 9, 1),
(9, '<p>Um programa de televis&atilde;o criou um perfil em uma rede social, e a ideia era que esse perfil fosse sorteado para um dos seguidores, quando esses fossem em n&uacute;mero de um milh&atilde;o. Agora que essa quantidade de seguidores foi atingida, os organizadores perceberam que apenas 80% deles s&atilde;o realmente f&atilde;s do programa. Por conta disso, resolveram que todos os seguidores far&atilde;o um teste, com perguntas objetivas referentes ao programa, e s&oacute; poder&atilde;o participar do sorteio aqueles que forem aprovados. Estat&iacute;sticas revelam que, num teste dessa natureza, a taxa de aprova&ccedil;&atilde;o &eacute; de 90% dos f&atilde;s e de 15% dos que n&atilde;o s&atilde;o f&atilde;s.</p>\r\n', '', 'De acordo com essas informações, a razão entre a probabilidade de que um fã seja sorteado e a probabilidade de que o sorteado seja alguém que não é fã do programa é igual a', '2017', '', NULL, '2019-10-26 22:57:38', '2019-10-26 22:57:38', '<p>1.</p>\r\n', '<p>4.</p>\r\n', '<p>6.</p>\r\n', '<p>24.</p>\r\n', '<p>96.</p>\r\n', 4, '', 9, 2),
(10, '<p>O gerente do setor de recursos humanos de uma empresa est&aacute; organizando uma avalia&ccedil;&atilde;o em que uma das etapas &eacute; um jogo de perguntas e respostas. Para essa etapa, ele classificou as perguntas, pelo n&iacute;vel de dificuldade, em f&aacute;cil, m&eacute;dio e dif&iacute;cil, e escreveu cada pergunta em cart&otilde;es para coloca&ccedil;&atilde;o em uma urna.</p>\r\n\r\n<p>Contudo, ap&oacute;s depositar vinte perguntas de diferentes n&iacute;veis na urna, ele observou que 25% deles eram de n&iacute;vel f&aacute;cil. Querendo que as perguntas de n&iacute;vel f&aacute;cil sejam a maioria, o gerente decidiu acrescentar mais perguntas de n&iacute;vel f&aacute;cil &agrave; urna, de modo que a probabilidade de o primeiro participante retirar, aleatoriamente, uma pergunta de n&iacute;vel f&aacute;cil seja de 75%.</p>\r\n', '', 'Com essas informações, a quantidade de perguntas de nível fácil que o gerente deve acrescentar à urna é igual a ', '2018', '', NULL, '2019-10-26 22:58:41', '2019-10-26 22:58:41', '<p>10.</p>\r\n', '<p>15.</p>\r\n', '<p>35.</p>\r\n', '<p>40.</p>\r\n', '<p>45.</p>\r\n', 4, '', 9, 2),
(11, '<p>Para ganhar um pr&ecirc;mio, uma pessoa dever&aacute; retirar, sucessivamente e sem reposi&ccedil;&atilde;o, duas bolas pretas de uma mesma urna. Inicialmente, as quantidades e cores das bolas s&atilde;o como descritas a seguir:</p>\r\n', '<ul>\r\n	<li>Urna A &mdash; Possui tr&ecirc;s bolas brancas, duas bolas pretas e uma bola verde;</li>\r\n	<li>Urna B&mdash; Possui seis bolas brancas, tr&ecirc;s bolas pretas e uma bola verde;</li>\r\n	<li>Urna C&mdash; Possui duas bolas pretas e duas bolas verdes;</li>\r\n	<li>Urna D &mdash;Possui tr&ecirc;s bolas brancas e tr&ecirc;s bolas pretas. A pessoa deve escolher uma entre as cinco op&ccedil;&otilde;es apresentadas:</li>\r\n	<li>Op&ccedil;&atilde;o 1 &mdash; Retirar, aleatoriamente, duas bolas da uma A;</li>\r\n	<li>Op&ccedil;&atilde;o 2 &mdash; Retirar, aleatoriamente, duas bolas da urna B;</li>\r\n	<li>Op&ccedil;&atilde;o 3 &mdash; Passar, aleatoriamente, uma bola da urna C para a urna A; ap&oacute;s isso, retirar, aleatoriamente, duas bolas da urna A;</li>\r\n	<li>Op&ccedil;&atilde;o 4 &mdash; Passar, aleatoriamente, urna bola da urna D para a urna C; ap&oacute;s isso, retirar, aleatoriamente, duas bolas da urna C;</li>\r\n	<li>Op&ccedil;&atilde;o 5 &mdash; Passar, aleatoriamente, uma bola da urna C para a urna D; ap&oacute;s isso, retirar, aleatoriamente, duas bolas da urna D.</li>\r\n</ul>\r\n', 'Com o objetivo de obter a maior probabilidade possível de ganhar o prêmio, a pessoa deve escolher a opção', '2018', '', NULL, '2019-10-26 22:59:54', '2019-10-26 22:59:54', '<p>1.</p>\r\n', '<p>2.</p>\r\n', '<p>3.</p>\r\n', '<p>4.</p>\r\n', '<p>5.</p>\r\n', 5, '', 9, 2),
(12, '<p>Um casal, ambos com 30 anos de idade, pretende fazer um plano de previd&ecirc;ncia privada. A seguradora pesquisada, para definir o valor do recolhimento mensal, estima a probabilidade de que pelo menos um deles esteja vivo daqui a 50 anos, tornando por base dados da popula&ccedil;&atilde;o, que indicam que 20% dos homens e 30% das mulheres de hoje alcan&ccedil;ar&atilde;o a idade de 80 anos.</p>\r\n', '', 'Qual é essa probabilidade?', '2016', '', NULL, '2019-10-26 23:00:51', '2019-10-26 23:01:00', '<p>50%</p>\r\n', '<p>44%</p>\r\n', '<p>38%</p>\r\n', '<p>25%</p>\r\n', '<p>6%</p>\r\n', 2, '', 9, 2),
(13, '<p>Um sistema de deprecia&ccedil;&atilde;o linear, estabelecendo que ap&oacute;s 10 anos o valor monet&aacute;rio de um bem ser&aacute; zero, &eacute; usado nas declara&ccedil;&otilde;es de imposto de renda de alguns pa&iacute;ses. O gr&aacute;fico ilustra essa situa&ccedil;&atilde;o.</p>\r\n', '', 'Uma pessoa adquiriu dois bens, A e B, pagando 1 200 e 900 dólares, respectivamente.\r\nConsiderando as informações dadas, após 8 anos, qual será a diferença entre os valores monetários, em dólar, desses bens?', '2017', '1.PNG', NULL, '2019-10-26 23:02:43', '2019-10-26 23:03:03', '<p>30.</p>\r\n', '<p>60.</p>\r\n', '<p>75.</p>\r\n', '<p>240.</p>\r\n', '<p>300.</p>\r\n', 2, '', 9, 3),
(14, '<p>Uma cisterna de 6 000 L foi esvaziada em um per&iacute;odo de 3 h. Na primeira hora foi utilizada apenas uma bomba, mas nas duas horas seguintes, a fim de reduzir o tempo de esvaziamento, outra bomba foi ligada junto com a primeira. O gr&aacute;fico, formado por dois segmentos de reta, mostra o volume de &aacute;gua presente na cisterna, em fun&ccedil;&atilde;o do tempo.</p>\r\n', '', '', '2016', 'capturar.PNG', NULL, '2019-10-26 23:04:52', '2019-10-26 23:04:52', '<p>1 000</p>\r\n', '<p>1 250</p>\r\n', '<p>1 500</p>\r\n', '<p>2 000</p>\r\n', '<p>2 500</p>\r\n', 3, '', 9, 3),
(15, '<p>Um dos grandes desafios do Brasil &eacute; o gerenciamento dos seus recursos naturais, sobretudo os recursos h&iacute;dricos. Existe uma demanda crescente por &aacute;gua e o risco de racionamento n&atilde;o pode ser descartado. O n&iacute;vel de &aacute;gua de um reservat&oacute;rio foi monitorado por um per&iacute;odo, sendo o resultado mostrado no gr&aacute;fico. Suponha que essa tend&ecirc;ncia linear observada no monitoramento se prolongue pelos pr&oacute;ximos meses.</p>\r\n', '', 'Nas condições dadas, qual o tempo mínimo, após o sexto mês, para que o reservatório atinja o nível zero de sua capacidade?', '2016', '', NULL, '2019-10-26 23:06:18', '2019-10-26 23:06:18', '<p>2 meses e meio.</p>\r\n', '<p>3 meses e meio.</p>\r\n', '<p>1 m&ecirc;s e meio.</p>\r\n', '<p>4 meses.</p>\r\n', '<p>1 m&ecirc;s.</p>\r\n', 1, '', 9, 3),
(16, '<p>As proje&ccedil;&otilde;es para a produ&ccedil;&atilde;o de arroz no per&iacute;odo de 2012 &ndash; 2021, em uma determinada regi&atilde;o produtora, apontam para uma perspectiva de crescimento constante da produ&ccedil;&atilde;o anual. O quadro apresenta a quantidade de arroz, em toneladas, que ser&aacute; produzida nos primeiros anos desse per&iacute;odo, de acordo com essa proje&ccedil;&atilde;o.</p>\r\n', '', 'A quantidade total de arroz, em toneladas, que deverá ser produzida no período de 2012 a 2021 será de', '2013', 'capturar.PNG', NULL, '2019-10-26 23:09:38', '2019-10-26 23:09:56', '<p>497,25.</p>\r\n', '<p>497,25.</p>\r\n', '<p>502,87.</p>\r\n', '<p>558,75.</p>\r\n', '<p>563,25.</p>\r\n', 4, 'https://youtu.be/5Dwd9RLrrF4', 9, 4),
(17, '<p>Com o objetivo de trabalhar a concentra&ccedil;&atilde;o e a sincronia de movimentos dos alunos de uma de suas turmas, um professor de educa&ccedil;&atilde;o f&iacute;sica dividiu essa turma em tr&ecirc;s grupos (A, B e C) e estipulou a seguinte atividade: os alunos do grupo A deveriam bater palmas a cada 2 s, os alunos do grupo B deveriam bater palmas a cada 3 s e os alunos do grupo C deveriam bater palmas a cada 4 s.</p>\r\n\r\n<p>O professor zerou o cron&ocirc;metro e os tr&ecirc;s grupos come&ccedil;aram a bater palmas quando ele registrou 1 s. Os movimentos prosseguiram at&eacute; o cron&ocirc;metro registrar 60 s.</p>\r\n\r\n<p>Um estagi&aacute;rio anotou no papel a sequ&ecirc;ncia formada pelos instantes em que os tr&ecirc;s grupos bateram palmas simultaneamente.</p>\r\n', '', 'Qual é o termo geral da sequência anotada?', '2016', '', NULL, '2019-10-26 23:10:55', '2019-10-26 23:11:07', '<p>12<em>n</em>, com n um n&uacute;mero natural, tal que 1 &le; n &le; 5.</p>\r\n', '<p>24<em>n</em>, com n um n&uacute;mero natural, tal que 1 &le; n &le; 2.</p>\r\n', '<p>12(<em>n</em> &ndash; 1), com n um n&uacute;mero natural, tal que 1 &le; n &le; 6.</p>\r\n', '<p>12(<em>n</em> &ndash; 1), com n um n&uacute;mero natural, tal que 1 &le; n &le; 6.</p>\r\n', '<p>24(n &ndash; 1) + 1, com n um n&uacute;mero natural, tal que 1 &le; n &le; 3.</p>\r\n', 4, '', 9, 4),
(18, '<p>Sob a orienta&ccedil;&atilde;o de um mestre de obras, Jo&atilde;o e Pedro trabalharam na reforma de um edif&iacute;cio. Jo&atilde;o efetuou reparos na parte hidr&aacute;ulica nos andares 1, 3, 5, 7, e assim sucessivamente, de dois em dois andares. Pedro trabalhou na parte el&eacute;trica nos andares 1, 4, 7, 10, e assim sucessivamente, de tr&ecirc;s em tr&ecirc;s andares. Coincidentemente, terminaram seus trabalhos no &uacute;ltimo andar. Na conclus&atilde;o da reforma, o mestre de obras informou, em seu relat&oacute;rio, o n&uacute;mero de andares do edif&iacute;cio. Sabe-se que, ao longo da execu&ccedil;&atilde;o da obra, em exatamente 20 andares, foram realizados reparos nas partes hidr&aacute;ulica e el&eacute;trica por Jo&atilde;o e Pedro.</p>\r\n', '', 'Qual é o número de andares desse edifício?', '2016', '', NULL, '2019-10-26 23:11:50', '2019-10-26 23:11:50', '<p>40.</p>\r\n', '<p>60.</p>\r\n', '<p>100.</p>\r\n', '<p>115.</p>\r\n', '<p>120.</p>\r\n', 4, 'https://youtu.be/iDgXSCMkoFQ', 9, 4),
(19, '<p>Admita que um tipo de eucalipto tenha expectativa de crescimento exponencial, nos primeiros anos ap&oacute;s seu plantio, modelado pela fun&ccedil;&atilde;o y(t) = a<sup>t &ndash; 1</sup>, na qual y representa a altura da planta em metro, t &eacute; considerado em ano, e a &eacute; uma constante maior que 1. O gr&aacute;fico representa a fun&ccedil;&atilde;o y.</p>\r\n\r\n<p>Admita ainda que y(0) fornece a altura da muda quando plantada, e deseja-se cortar os eucaliptos quando as mudas crescerem 7,5 m ap&oacute;s o plantio.</p>\r\n', '', 'O tempo entre a plantação e o corte, em ano, é igual a', '2016', 'capturar.PNG', NULL, '2019-10-26 23:14:22', '2019-10-26 23:14:22', '<p>3.</p>\r\n', '<p>4.</p>\r\n', '<p>6.</p>\r\n', '<p>log<sub>2&nbsp;</sub>7.</p>\r\n', '<p>log<sub>2 </sub>15.</p>\r\n', 2, '', 9, 5),
(20, '<p>O acr&eacute;scimo de tecnologias no sistema produtivo industrial tem por objetivo reduzir custos e aumentar a produtividade. No primeiro ano de funcionamento, uma ind&uacute;stria fabricou 8 000 unidades de um determinado produto. No ano seguinte, investiu em tecnologia adquirindo novas m&aacute;quinas e aumentou a produ&ccedil;&atilde;o em 50%. Estima-se que esse aumento percentual se repita nos pr&oacute;ximos anos, garantindo um crescimento anual de 50%. Considere P a quantidade anual de produtos fabricados no ano t de funcionamento da ind&uacute;stria.</p>\r\n', '', 'Se a estimativa for alcançada, qual é a expressão que determina o número de unidades produzidas P em função de t, para t ≥ 1?', '2015', '', NULL, '2019-10-26 23:15:22', '2019-10-26 23:15:36', '<p>P(t) = 0,5 &middot; t <sup>-1</sup> + 8 000</p>\r\n', '<p>P(t) = 50 &middot; t <sup>-1</sup> + 8 000</p>\r\n', '<p>P(t) = 4 000 &middot; t<sup>-1</sup> + 8 000</p>\r\n', '<p>P(t) = 8 000 &middot; (0,5) <sup>t - 1</sup></p>\r\n', '<p>P(t) = 8 000 &middot; (1,5) <sup>t - 1</sup></p>\r\n', 5, 'https://youtu.be/6_pl3t-vKPc', 9, 5),
(21, '<p>O sindicato de trabalhadores de uma empresa sugere que o piso salarial da classe seja de R$ 1 800,00, propondo um aumento percentual fixo por cada ano dedicado ao trabalho. A express&atilde;o que corresponde &agrave; proposta salarial (s), em fun&ccedil;&atilde;o do tempo de servi&ccedil;o (t), em anos, &eacute; s(t) = 1800 X (1,03)<sup>t</sup>.</p>\r\n', '', 'De acordo com a proposta do sindicato, o salário de um profissional dessa empresa com 2 anos de tempo de serviço será, em reais', '2015', '', NULL, '2019-10-27 01:10:22', '2019-10-27 01:10:22', '<p>7.416,00.</p>\r\n', '<p>3.819,24.</p>\r\n', '<p>3.709,62.</p>\r\n', '<p>3.708,00.</p>\r\n', '<p>1.909,62.</p>\r\n', 5, 'https://youtu.be/nCyC2l_5gR0', 9, 5),
(22, '<p>Um contrato de empr&eacute;stimo prev&ecirc; que quando uma parcela &eacute; paga de forma antecipada, conceder-se-&aacute; uma&nbsp; redu&ccedil;&atilde;o de juros de acordo com o per&iacute;odo de antecipa&ccedil;&atilde;o. Nesse caso, paga-se o valor presente, que &eacute; o valor, naquele momento, de uma quantia que deveria ser paga em uma data futura. Um valor presente P submetido a juros compostos com taxa i, por um per&iacute;odo de tempo n, produz um valor futuro V determinado pela f&oacute;rmula</p>\r\n\r\n<p><em>V = P.</em>(1 + <em>i</em>)<sup>n</sup></p>\r\n\r\n<p>Em um contrato de empr&eacute;stimo com sessenta parcelas fixas mensais, de R$ 820,00, a uma taxa de juros de 1,32% ao m&ecirc;s, junto com a trig&eacute;sima parcela ser&aacute; paga antecipadamente uma outra parcela, desde que o desconto seja superior a 25% do valor da parcela.</p>\r\n\r\n<p>Utilize 0,2877 como aproxima&ccedil;&atilde;o para ln(4/3) e 0,0131 como aproximao para ln(1,0132).</p>\r\n', '', 'A primeira das parcelas que poderá ser antecipada junto com a 30a é a', '2018', '', NULL, '2019-10-27 01:13:17', '2019-10-27 01:13:17', '<p>56<sup>a</sup></p>\r\n', '<p>55<sup>a</sup></p>\r\n', '<p>52<sup>a</sup></p>\r\n', '<p>51<sup>a</sup></p>\r\n', '<p>45<sup>a</sup></p>\r\n', 3, '', 9, 6),
(23, '<p>Em setembro de 1987, Goi&acirc;nia foi palco do maior acidente radioativo ocorrido no Brasil, quando uma amostra de c&eacute;sio-137, removida de um aparelho de radioterapia abandonado, foi manipulada inadvertidamente por parte da popula&ccedil;&atilde;o. A meia-vida de um material radioativo &eacute; o tempo necess&aacute;rio para que a massa desse material se reduza &agrave; metade. A meia-vida do c&eacute;sio-137 &eacute; 30 anos e a quantidade restante de massa de um material radioativo, ap&oacute;s t anos, &eacute; calculada pela express&atilde;o M(t) = A.(2,7)<sup>kt</sup>, onde A &eacute; a massa inicial e k &eacute; uma constante negativa.</p>\r\n', '<p>Considere 0,3 como aproxima&ccedil;&atilde;o para log<sub>10</sub>&nbsp;2.</p>\r\n', 'Qual o tempo necessário, em anos, para que uma quantidade de massa do césio-137 se reduza a 10% da quantidade inicial?', '2013', '', NULL, '2019-10-27 01:34:51', '2019-10-27 01:37:24', '<p>27</p>\r\n', '<p>36</p>\r\n', '<p>50</p>\r\n', '<p>54</p>\r\n', '<p>100</p>\r\n', 5, 'https://youtu.be/FPJA143WqOA', 9, 7),
(24, '<p>Com o avan&ccedil;o em ci&ecirc;ncia da computa&ccedil;&atilde;o, estamos pr&oacute;ximos do momento em que o n&uacute;mero de transistores no processador de um computado pessoal ser&aacute; da mesma ordem de grandeza que o n&uacute;mero de neur&ocirc;nios em um c&eacute;rebro humano, que &eacute; da ordem de 100 bilh&otilde;es. Uma das grandezas determinantes para o desempenho de um processador &eacute; a densidade de transistores, que &eacute; o n&uacute;mero de transistores por cent&iacute;metro quadrado. Em 1986, uma empresa fabricava um processador contendo 100.000 transistores distribu&iacute;dos em 0,25cm&sup2; de &aacute;rea.</p>\r\n\r\n<p>Desde ent&atilde;o, o n&uacute;mero de transistores por cent&iacute;metro quadrado que se pode colocar em um processador dobra a cada dois anos (Lei de Moore).</p>\r\n', '<p>Considere 0,30 como aproxima&ccedil;&atilde;o para log<sub>10&nbsp;</sub>2.</p>\r\n', 'Em que ano a empresa atingiu ou atingirá a densidade de 100 bilhões de transistores.', '2018', '', NULL, '2019-10-27 01:36:44', '2019-10-27 01:37:02', '<p>1999</p>\r\n', '<p>2002</p>\r\n', '<p>2022</p>\r\n', '<p>2026</p>\r\n', '<p>2146</p>\r\n', 3, '', 9, 7),
(25, '<p>Para realizar a viagem dos sonhos, uma pessoa precisava fazer um empr&eacute;stimo no valor de R$ 5000,00. Para pagar as presta&ccedil;&otilde;es, disp&otilde;e de, no m&aacute;ximo, R$ 400,00 mensais. Para esse valor de empr&eacute;stimo, o valor da presta&ccedil;&atilde;o (P) &eacute; calculado em fun&ccedil;&atilde;o do n&uacute;mero de presta&ccedil;&otilde;es (n) segundo a f&oacute;rmula:</p>\r\n', '<p>Se necess&aacute;rio, utilize 0,005 como aproxima&ccedil;&atilde;o para log 1,013; 2,602 como aproxima&ccedil;&atilde;o para log 400; 2,525 como aproxima&ccedil;&atilde;o para log 335.</p>\r\n', 'De acordo com a fórmula dada, o menor número de parcelas cujos valores não comprometem o limite definido pela pessoa é', '2017', 'capturar.PNG', NULL, '2019-10-27 01:41:32', '2019-10-27 01:41:32', '<p>12.</p>\r\n', '<p>14.</p>\r\n', '<p>15.</p>\r\n', '<p>16.</p>\r\n', '<p>17.</p>\r\n', 4, '', 9, 7),
(26, '<p>Uma liga met&aacute;lica sai do forno a uma temperatura de 3 000<sup>o&nbsp;</sup>C e diminui 1% de sua temperatura a cada 30 min.</p>\r\n\r\n<p>Use 0,477 como aproxima&ccedil;&atilde;o para log10(3) e 1,041 como aproxima&ccedil;&atilde;o para log10(11). O tempo decorrido, em hora, at&eacute; que a liga atinja 30 oC &eacute; mais pr&oacute;ximo de</p>\r\n', '', '', '2016', '', NULL, '2019-10-27 01:43:01', '2019-10-27 01:49:05', '<p>22.</p>\r\n', '<p>50.</p>\r\n', '<p>100.</p>\r\n', '<p>200.</p>\r\n', '<p>400.</p>\r\n', 4, 'https://youtu.be/RVnpqItsxjI', 9, 7),
(27, '<p>Um cientista, em seus estudos para modelar a press&atilde;o arterial de uma pessoa, utiliza uma fun&ccedil;&atilde;o do tipo P(t) = A + Bcos(kt) em que A, B e K s&atilde;o constantes reais positivas e t representa a vari&aacute;vel tempo, medida em segundo. Considere que um batimento card&iacute;aco representa o intervalo de tempo entre duas sucessivas press&otilde;es m&aacute;ximas.</p>\r\n\r\n<p>Ao analisar um caso espec&iacute;fico, o cientista obteve os dados:</p>\r\n', '', 'A função P(t) obtida, por este cientista, ao analisar o caso específico foi', '2017', 'capturar.PNG', NULL, '2019-10-27 01:52:46', '2019-10-27 03:38:08', '<p>P(t) = 99 + 21cos(3&pi;t)</p>\r\n', '<p>P(t) = 78 + 42cos(3&pi;t)</p>\r\n', '<p>P(t) = 99 + 21cos(2&pi;t)</p>\r\n', '<p>P(t) = 99 + 21cos(t)</p>\r\n', '<p>P(t) = 78 + 42cos(t)</p>\r\n', 1, '', 9, 8),
(28, '<p>Segundo o Instituto Brasileiro de Geografia e Estat&iacute;stica (IBGE), produtos sazonais s&atilde;o aqueles que apresentam ciclos bem definidos de produ&ccedil;&atilde;o, consumo e pre&ccedil;o. Resumidamente, existem &eacute;pocas do ano em que a sua disponibilidade nos mercados varejistas ora &eacute; escassa, com pre&ccedil;os elevados, ora &eacute; abundante, com pre&ccedil;os mais baixos, o que ocorre no m&ecirc;s de produ&ccedil;&atilde;o m&aacute;xima da safra. A partir de uma s&eacute;rie hist&oacute;rica, observou-se que o pre&ccedil;o P, em reais, do quilograma de um certo produto sazonal pode ser descrito pela fun&ccedil;&atilde;o P(x) = 8 + 5cos , onde x representa o m&ecirc;s do ano, sendo x = 1 associado ao m&ecirc;s de janeiro, x = 2 ao m&ecirc;s de fevereiro, e assim sucessivamente, at&eacute; x = 12 associado ao m&ecirc;s de dezembro.</p>\r\n\r\n<p style=\"text-align: right;\">Dispon&iacute;vel em: www.ibge.gov.br. Acesso em: 2 ago. 2012 (adaptado).</p>\r\n', '', 'Na safra, o mês de produção máxima desse produto é:', '2015', '', NULL, '2019-10-27 01:54:20', '2019-10-27 03:37:30', '<p>janeiro.</p>\r\n', '<p>abril.</p>\r\n', '<p>junho.</p>\r\n', '<p>julho.</p>\r\n', '<p>outubro.</p>\r\n', 4, 'https://youtu.be/MthRcH1PBls', 9, 8),
(29, '<p>Um t&eacute;cnico precisa consertar o termostato do aparelho de ar-condicionado de um escrit&oacute;rio, que est&aacute; desregulado. A temperatura T, em graus Celsius, no escrit&oacute;rio, varia de acordo com a fun&ccedil;&atilde;o T(h) = A + B sen , sendo h o tempo, medido em horas, a partir da meia-noite (0 &le; h &lt; 24) e A e B os par&acirc;metros que o t&eacute;cnico precisa regular. Os funcion&aacute;rios do escrit&oacute;rio pediram que a temperatura m&aacute;xima fosse 26&deg;C, a m&iacute;nima 18&deg;C, e que durante a tarde a temperatura fosse menor do que durante a manh&atilde;.</p>\r\n', '', 'Quais devem ser os valores de A e de B para que o pedido dos funcionários seja atendido?', '2015', '', NULL, '2019-10-27 01:55:22', '2019-10-27 01:55:22', '<p>A = 18 e B = 8</p>\r\n', '<p>A = 22 e B = -4</p>\r\n', '<p>A = 22 e B = -4</p>\r\n', '<p>A = 22 e B = -4</p>\r\n', '<p>A = 26 e B = 8</p>\r\n', 2, 'https://youtu.be/0xOVeze7qXY', 9, 8),
(30, '<p>O cruzamento da quantidade de horas estudadas com o desempenho no Programa Internacional de Avalia&ccedil;&atilde;o de Estudantes (Pisa) mostra que mais tempo na escola n&atilde;o &eacute; garantia de nota acima da m&eacute;dia.</p>\r\n', '', 'Dos países com notas abaixo da média nesse exame, aquele que apresenta maior quantidade de horas de estudo é:', '2013', 'capturar.PNG', NULL, '2019-10-27 02:05:23', '2019-10-27 02:05:23', '<p>Finl&acirc;ndia.</p>\r\n', '<p>Holanda.</p>\r\n', '<p>Israel.</p>\r\n', '<p>M&eacute;xico.</p>\r\n', '<p>R&uacute;ssia.</p>\r\n', 3, 'https://youtu.be/YtqbiIyOd1A', 9, 9),
(31, '<p>Deseja-se postar cartas n&atilde;o comerciais, sendo duas de 100 g, tr&ecirc;s de 200 g e uma de 350 g. O gr&aacute;fico mostra o custo para enviar uma carta n&atilde;o comercial pelos Correios:</p>\r\n', '', 'O valor total gasto, em reais, para postar essas cartas é de:', '2013', 'capturar.PNG', NULL, '2019-10-27 02:07:42', '2019-10-27 02:07:42', '<p>8,35</p>\r\n', '<p>12,50</p>\r\n', '<p>14,40</p>\r\n', '<p>15,35</p>\r\n', '<p>18,05</p>\r\n', 4, 'https://youtu.be/mxWZRROUFcI', 9, 9),
(32, '<p>De acordo com um relat&oacute;rio recente de Ag&ecirc;ncia Internacional de Energia (AIE), o mercado ve&iacute;culos el&eacute;tricos um novo marco em 2016, quando foram vendidos mais de 750 mil autom&oacute;veis de categoria. Com isso, o total de carros el&eacute;tricos vendidos no mundo alcan&ccedil;ou a marca de 2 milh&otilde;es de unidades desde que os primeiros modelos come&ccedil;aram a ser comercializados em 2011.</p>\r\n\r\n<p>No Brasil, a expans&atilde;o das vendas tamb&eacute;m se verifica. A marca A, por exemplo, expandiu suas vendas no ano de 2016, superando em 360 unidades as vendas de 2015, conforma representado no gr&aacute;fico.&nbsp;</p>\r\n', '', 'A média anual do número de carros vendidos pela marca A, nos anos representados no gráfico, foi de:', '2018', 'capturar.PNG', NULL, '2019-10-27 02:09:28', '2019-10-27 02:09:28', '<p>192.</p>\r\n', '<p>240.</p>\r\n', '<p>252.</p>\r\n', '<p>320.</p>\r\n', '<p>420.</p>\r\n', 4, '', 9, 9),
(33, '<p>Uma empresa registrou seu desempenho em determinado ano por meio do gr&aacute;fico, com dados mensais do total de vendas e despesas.</p>\r\n\r\n<p>O lucro mensal &eacute; obtido pela subtra&ccedil;&atilde;o entre o total de vendas e despesas, nesta ordem.</p>\r\n', '', 'Quais os três meses do ano em que foram registrados os maiores lucros?', '2016', 'capturar.PNG', NULL, '2019-10-27 02:11:55', '2019-10-27 02:11:55', '<p>Julho, setembro e dezembro.</p>\r\n', '<p>Julho, setembro e novembro.</p>\r\n', '<p>Abril, setembro e novembro.</p>\r\n', '<p>Janeiro, setembro e dezembro.</p>\r\n', '<p>Janeiro, abril e junho.</p>\r\n', 1, '', 9, 9),
(34, '<p>Foi realizado um levantamento nos 200 hot&eacute;is de uma cidade, no qual foram anotados os valores, em reais, das di&aacute;rias para um quarto padr&atilde;o de casal e a quantidade de hot&eacute;is para cada valor da di&aacute;ria. Os valores das di&aacute;rias foram: A = R$ 200,00; B = R$ 300,00; C = R$ 400,00 e D = R$ 600,00. No gr&aacute;fico, as &aacute;reas representam as quantidades de hot&eacute;is pesquisados, em porcentagem, para cada valor da di&aacute;ria.</p>\r\n', '', 'O valor mediano da diária, em reais, para o quarto padrão de casal nessa cidade, é:', '2013', 'capturar.PNG', NULL, '2019-10-27 04:05:37', '2019-10-27 04:05:37', '<p>300,00.</p>\r\n', '<p>345,00.</p>\r\n', '<p>350,00.</p>\r\n', '<p>375,00.</p>\r\n', '<p>400,00.</p>\r\n', 3, 'https://youtu.be/LfsPR8lkiNI', 9, 10),
(35, '<p>Cinco amigos marcaram uma viagem &agrave; praia em dezembro. Para economizar, combinaram de ir num &uacute;nico carro. Cada amigo anotou quantos quil&ocirc;metros seu carro fez, em m&eacute;dia, por litro de gasolina, nos meses de setembro, outubro e novembro. Ao final desse trimestre, calcularam a m&eacute;dia dos tr&ecirc;s valores obtidos para escolherem o carro mais econ&ocirc;mico, ou seja, o que teve a maior m&eacute;dia. Os dados est&atilde;o representados na tabela:</p>\r\n', '', 'Qual carro os amigos deverão escolher para a viagem?', '2015', 'capturar.PNG', NULL, '2019-10-27 04:08:01', '2019-10-27 04:08:01', '<p>I</p>\r\n', '<p>II</p>\r\n', '<p>III</p>\r\n', '<p>IV</p>\r\n', '<p>V</p>\r\n', 3, 'https://youtu.be/M1IjrEZqIV4', 9, 10),
(36, '<p>Ao final de uma competi&ccedil;&atilde;o de ci&ecirc;ncias de uma escola, restaram apenas tr&ecirc;s candidatos. De acordo com as regras, o vencedor ser&aacute; o candidato que obtiver a maior m&eacute;dia ponderada entre as notas das provas finais nas disciplinas qu&iacute;mica e f&iacute;sica, considerando, respectivamente, os pesos 4 e 6 para elas. As notas s&atilde;o sempre n&uacute;meros inteiros. Por quest&otilde;es m&eacute;dicas, o candidato II ainda n&atilde;o fez a prova final de qu&iacute;mica. No dia em que sua avalia&ccedil;&atilde;o for aplicada, as notas dos outros dois candidatos, em ambas as disciplinas, j&aacute; ter&atilde;o sido divulgadas.</p>\r\n\r\n<p>O quadro apresenta as notas obtidas pelos finalistas nas provas finais.</p>\r\n', '', 'A menor nota que o candidato II deverá obter na prova final de química para vencer a competição é:', '2014', '', NULL, '2019-10-27 04:09:14', '2019-10-27 04:09:23', '<p>18.</p>\r\n', '<p>19.</p>\r\n', '<p>22.</p>\r\n', '<p>25.</p>\r\n', '<p>26.</p>\r\n', 1, 'https://youtu.be/LPFYsIZJt-8', 9, 10),
(37, '<p>Uma loja que vende sapatos recebeu diversas reclama&ccedil;&otilde;es de seus clientes relacionadas &agrave; venda de sapatos de cor branca ou preta. Os donos da loja anotaram as numera&ccedil;&otilde;es dos sapatos com defeito e fizeram um estudo estat&iacute;stico dos sapatos com o intuito de reclamar com o fabricante. A tabela cont&eacute;m a m&eacute;dia, a mediana e a moda desses dados anotados pelos donos.</p>\r\n', '', 'Para quantificar os sapatos pela cor, os donos representaram a cor branca pelo número 0 e a cor preta pelo número 1. Sabe-se que a média da distribuição desses zeros e uns é igual a 0,45. Os donos da loja decidiram que a numeração dos sapatos com maior número de reclamações e a cor com maior número de reclamações não serão mais vendidas. A loja encaminhou um ofício ao fornecedor dos sapatos, explicando que não serão mais encomendados os sapatos de cor', '2014', 'capturar.PNG', NULL, '2019-10-27 04:11:06', '2019-10-27 04:11:06', '<p>branca e os de n&uacute;mero 38.</p>\r\n', '<p>branca e os de n&uacute;mero 37.</p>\r\n', '<p>branca e os de n&uacute;mero 36.</p>\r\n', '<p>preta e os de n&uacute;mero 38.</p>\r\n', '<p>preta e os de n&uacute;mero 37.</p>\r\n', 1, 'https://youtu.be/YJjBDwFakh8', 9, 10);

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
-- Estrutura da tabela `tb_topicos_tipos`
--

CREATE TABLE `tb_topicos_tipos` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `nome` varchar(60) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `link_de_estudo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_topicos_tipos`
--

INSERT INTO `tb_topicos_tipos` (`id`, `created`, `modified`, `nome`, `slug`, `link_de_estudo`) VALUES
(1, '2019-10-26 21:14:45', '2019-10-26 21:30:45', 'Análise Combinatória', 'analise-combinatoria', NULL),
(2, '2019-10-26 21:31:03', '2019-10-26 21:31:03', 'Probabilidade', 'probabilidade', NULL),
(3, '2019-10-26 21:31:08', '2019-10-26 21:31:08', 'Função Afim', 'funcao-afim', NULL),
(4, '2019-10-26 21:31:14', '2019-10-26 21:31:14', 'Progressão Aritmética', 'progressao-aritmetica', NULL),
(5, '2019-10-26 21:31:23', '2019-10-26 21:31:23', 'Função Exponencial', 'funcao-exponencial', NULL),
(6, '2019-10-26 21:31:53', '2019-10-26 21:31:53', 'Matemática Financeira', 'matematica-financeira', NULL),
(7, '2019-10-26 21:31:59', '2019-10-26 21:31:59', 'Função Logarítmica', 'funcao-logaritmica', NULL),
(8, '2019-10-26 21:32:04', '2019-10-26 21:32:04', 'Função Trigonométrica', 'funcao-trigonometrica', NULL),
(9, '2019-10-26 21:32:08', '2019-10-27 02:22:02', 'Estatística: Leitura de gráficos e tabelas', 'estatistica-leitura-de-grafico', ''),
(10, '2019-10-26 21:32:14', '2019-10-27 02:21:54', 'Estatística: Média, mediana, moda, desvio padrão', 'estatistica-media-mediana-moda', '');

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
  ADD KEY `fk_fk_tb_respostas_tb_questoes` (`alternativa_resposta_id`) USING BTREE,
  ADD KEY `fk_fk_tb_topicos_tipo_tb_questoes` (`topicos_tipo_id`);

--
-- Indexes for table `tb_respostas`
--
ALTER TABLE `tb_respostas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_topicos_tipos`
--
ALTER TABLE `tb_topicos_tipos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_respostas`
--
ALTER TABLE `tb_respostas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_topicos_tipos`
--
ALTER TABLE `tb_topicos_tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_questoes`
--
ALTER TABLE `tb_questoes`
  ADD CONSTRAINT `fk_fk_tb_topicos_tipo_tb_questoes` FOREIGN KEY (`topicos_tipo_id`) REFERENCES `tb_topicos_tipos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
