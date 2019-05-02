-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 02/05/2019 às 14:34
-- Versão do servidor: 10.1.38-MariaDB
-- Versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sandubao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aboutpage`
--

CREATE TABLE `aboutpage` (
  `id` int(11) NOT NULL,
  `bodyabout` text NOT NULL,
  `url` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `aboutpage`
--

INSERT INTO `aboutpage` (`id`, `bodyabout`, `url`) VALUES
(8, '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque accumsan varius. Nulla a ipsum tellus. Nulla id odio ex. Phasellus quis sodales ligula, nec placerat ligula. In vestibulum gravida sollicitudin. Cras dignissim sodales elit sed volutpat. Nunc sit amet nisi condimentum, dictum lacus quis, efficitur mi. Sed id mi in lectus dignissim tristique et in purus. Pellentesque nisl nunc, venenatis nec suscipit a, suscipit vitae mi. In vestibulum ante at nulla faucibus, at rutrum magna placerat. Sed eu fringilla sapien. Sed quis accumsan purus, a semper quam. Phasellus venenatis enim vitae sem aliquet, eu lacinia tortor ultrices. Donec consequat, enim nec efficitur cursus, orci purus sollicitudin ligula, et faucibus ex lacus sagittis eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed nec accumsan turpis. Quisque porta ante ante, id laoreet nibh egestas nec. Donec mattis neque quis metus dapibus rhoncus. Vestibulum vehicula laoreet eros eget condimentum. Sed mollis ligula ac velit dignissim maximus. Praesent vitae cursus metus, a tempor augue. Integer pretium, sapien eu dictum eleifend, lorem orci sodales leo, ac vehicula ipsum tellus eu neque. Phasellus in magna eu sapien mollis tincidunt id eu turpis. Donec tortor nulla, convallis sit amet neque in, fringilla iaculis ipsum. Maecenas condimentum eu enim non vulputate. Suspendisse hendrerit elit a molestie venenatis. Donec volutpat, magna vitae porttitor efficitur, elit nulla tincidunt ipsum, dapibus laoreet massa massa ullamcorper nisi. Duis ullamcorper iaculis accumsan. Sed sit amet pharetra nulla, at cursus justo. Donec id quam lorem. Fusce vulputate tortor sodales sodales congue. Proin imperdiet lacinia tortor nec accumsan. Donec in sollicitudin arcu. Nullam sodales quam nec mi fringilla, ac vestibulum lorem ultrices. Aliquam aliquam semper condimentum. Quisque dictum augue in rhoncus suscipit. Curabitur dignissim ex in odio scelerisque, nec vestibulum orci tristique. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque ultrices tortor et velit pulvinar tristique. Vivamus tortor felis, molestie in libero eget, porta tempor tellus. Fusce suscipit aliquam turpis ac tincidunt. Maecenas sit amet rutrum lectus. Ut nec libero et tortor posuere faucibus. Donec luctus massa vitae dolor pretium feugiat.', '99db71880c48466359d7e6a78bb9d59e.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `acounts`
--

CREATE TABLE `acounts` (
  `id` int(11) NOT NULL,
  `agency` int(11) NOT NULL DEFAULT '0',
  `acount` int(11) NOT NULL DEFAULT '0',
  `balance` float NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `acounts`
--

INSERT INTO `acounts` (`id`, `agency`, `acount`, `balance`) VALUES
(1, 1234, 5678, 3500);

-- --------------------------------------------------------

--
-- Estrutura para tabela `annotations`
--

CREATE TABLE `annotations` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `annotations`
--

INSERT INTO `annotations` (`id`, `title`, `body`) VALUES
(1, 'AnotaÃ§Ã£o de teste', 'Testando anotaÃ§Ãµes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `featurettes`
--

CREATE TABLE `featurettes` (
  `id` int(11) NOT NULL,
  `featurettetitle` varchar(100) NOT NULL,
  `featurettedescription` varchar(250) NOT NULL,
  `url` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `featurettes`
--

INSERT INTO `featurettes` (`id`, `featurettetitle`, `featurettedescription`, `url`) VALUES
(1, 'Titulo em detaque', 'Alguma descriÃ§Ã£o de destaque', '8d44b56481ee4b7ac0a6c0be67bc211a.jpg'),
(2, 'Segundo destaque', 'Esse e o nosso segundo produto em destaque essa semana', '7f15a435329709805716ed667d4b3915.jpg'),
(3, 'Titulo de teste', 'Teste de quebra de div', '69d1a6f1d6bb3aea7ae343ff0111802d.jpg'),
(4, 'uma imagem de destaque', 'Destaque de imagem', '2ddafc4fabdd38b133a293ab3cf4ffae.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `finances`
--

CREATE TABLE `finances` (
  `id` int(11) NOT NULL,
  `cemig` float NOT NULL,
  `water` float NOT NULL,
  `gas` float NOT NULL,
  `for_rent` float NOT NULL,
  `officials` float NOT NULL,
  `providers` float NOT NULL,
  `data_operation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `finances`
--

INSERT INTO `finances` (`id`, `cemig`, `water`, `gas`, `for_rent`, `officials`, `providers`, `data_operation`) VALUES
(5, 25, 20, 15, 35, 45, 130, '2019-01-17 09:45:19'),
(6, 10, 20, 25, 30, 14, 100, '2019-01-17 09:50:48'),
(9, 35, 19, 45, 33, 60, 130, '2019-01-18 09:17:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `historic`
--

CREATE TABLE `historic` (
  `id` int(11) NOT NULL,
  `id_acount` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `value` float NOT NULL DEFAULT '0',
  `data_operation` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `historic`
--

INSERT INTO `historic` (`id`, `id_acount`, `type`, `value`, `data_operation`) VALUES
(209, 1, 1, 350, '2019-01-17 13:23:07'),
(208, 1, 0, 250, '2019-01-12 13:00:17'),
(207, 1, 1, 50, '2019-01-11 10:51:45'),
(206, 1, 1, 50, '2019-01-06 09:56:34'),
(205, 1, 1, 49.99, '2019-01-04 14:25:21'),
(202, 1, 1, 50, '2019-01-01 08:23:15'),
(203, 1, 0, 20.99, '2019-01-01 08:30:23'),
(201, 1, 1, 50, '2019-01-01 08:14:48'),
(204, 1, 0, 29, '2019-01-02 09:55:07'),
(200, 1, 1, 50, '2018-12-31 13:31:51'),
(210, 1, 0, 50, '2019-01-18 11:46:24'),
(211, 1, 1, 550, '2019-04-27 14:03:36'),
(212, 1, 0, 2500, '2019-04-27 14:04:11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `humanrecurces`
--

CREATE TABLE `humanrecurces` (
  `id` int(11) NOT NULL,
  `fistname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `data_enter` varchar(10) NOT NULL,
  `data_exit` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `humanrecurces`
--

INSERT INTO `humanrecurces` (`id`, `fistname`, `lastname`, `work`, `data_enter`, `data_exit`, `email`, `phone`, `salary`) VALUES
(1, 'Marcelo', 'Alexandre', 'Chapeiro', '03/01/2019', '27/04/2019', 'marcelo@gmail.com', '9 9999-9999', 2800),
(2, 'Fulano', 'De Tal', 'GarÃ§om', '04/01/2019', '27/04/2019', 'fulano@gmail.com', '(11)9 2222-2222', 850),
(3, 'Cicrano', 'Da Silva', 'Entregador', '04/01/2019', '00/00/0000', 'cicrano@gmail.com', '(88)9 8888-8888', 1200),
(4, 'Pedro', 'GuimarÃ£es', 'GarÃ§om', '04/01/2019', '00/00/0000', 'pedro@gmail.com', '(99)9 9999-9999', 850),
(5, 'CecÃ­lia', 'Rodrigues', 'GarÃ§onete', '04/01/2019', '00/00/0000', 'cecilia@gmail.com', '(11)9 9999-9999', 950),
(6, 'Testador', 'teste de sistema', 'teste', '04/01/2019', '00/00/0000', 'teste4@gmail.com', '(00)9 1234-5678', 150);

-- --------------------------------------------------------

--
-- Estrutura para tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`) VALUES
(1, 'X-BURGUER SALADA', '1Âº ANDAR: Alface, tomate e hamburguer de carna. 2Âº ANDAR: Maionese, batata palha, presunto e queijo', 10.5),
(2, 'X-EGG BACON', '1Â°ANDAR: Alface, tomate,bacon,queijo,presunto e ovo  2ÂºANDAR: Maionese,batata palha e hamburguer de carne', 14.5),
(3, 'X-BACON ', '1ÂºANDAR: Alface, tomate, bacon, queijo, presunto e ovo 2Â°ANDAR: Maionese, batata palha e hamburguer de carne', 12.5),
(4, 'X-BURGUER ESPECIAL', '1ÂºANDAR: Alface, tomate, ovo e presunto 2Â°ANDAR: Maionese, batata palha, hamburguer de carne e queijo', 14.5),
(5, 'HAVANEIRO', '1Âº ANDAR: Alface, tomate, queijo, presunto e abacaxi 2Âº ANDAR: Maionese, batata palha e hamburguer de carne', 14.5),
(6, 'LANÃ‡ADOR', '1Â° ANDAR: Alface, tomate, bacon, queijo e presunto 2Â° ANDAR: Maionese, batata palha, milho e hamburguer de carne', 15.5),
(7, 'KANGURU', '1Â° ANDAR: Alface, tomate, homburguer de carne, queijo e presunto 2Â° ANDAR: Maionese, batata palha e hamburguer de carne', 12.5),
(8, 'COLIFÃ“NIA', '1Â° ANDAR: Alface, tomate, bacon, queijo e abacaxi 2Â° ANDAR: Maionese, batata palha, ovo e presunto', 14.5),
(9, 'X-TUDO', '1Â° ANDAR: Alface, tomate, bacon, queijo, ovo e presunto 2Â° ANDAR: Maionese, batata palha, hamburguer de carne e abacaxi', 17.5),
(10, 'X-PICANHA', '1Â° ANDAR: Alface, tomate, queijo, ovo e presunto 2Â° ANDAR: Maionese, batata palha, milho, picanha e queijo', 18.5),
(11, 'X-FRANGO', '1Â° ANDAR: Alface, tomate, queijo, ovo e presunto 2Â° ANDAR: Maionese, batata, milho, filÃ© de frango e queijo', 17.5),
(12, 'X-LOMBO', '1Â° ANDAR: Alface, tomate, queijo, ovo e presunto 2Â° ANDAR: Maionese, batata palha, milho, lombo e queijo', 17.5),
(13, 'VEGETARIANO', '1Â° ANDAR: Alface, tomate, ovo e mussarela 2Â° ANDAR: Maionese, milho, batata, mussarela e abacaxi', 10.5),
(14, 'MISTO QUENTE', 'Presunto e mussarela', 9),
(15, 'X-BURGUER', 'PÃ£o, maionese, presunto, mussarela, ovo, alface e tomate', 6),
(17, 'X-CALABRESA', '1Â° ANDAR: Alface, tomate, calabresa, queijo e presunto 2Â° ANDAR: Maionese, batata, milho e hamburguer de carne', 10.5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `menu_giant`
--

CREATE TABLE `menu_giant` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `menu_giant`
--

INSERT INTO `menu_giant` (`id`, `name`, `description`, `price`) VALUES
(1, 'SUPER FILET', '1Â° ANDAR: Alface, tomate, lombo, picanha, frango, 2 ovos, presunto e mussarela 2Â° ANDAR: Maionese, batata palha, hamburguer artesanal, cheddar e abacaxi', 49.99),
(2, 'X-TUDO DUPLO', '1Â° ANDAR: Alface, tomate, 2 ovos, 2 bacons, presunto e mussarela 2Â° ANDAR: Maionese, batata palha, milho, 2 hamburguer, 2 abacaxis, presunto e mussarela', 0),
(3, 'X-TUDO MONSTRO', '1Â° ANDAR: Alface, tomate, lombo, picanha, frango, 2 ovos, presunto e mussarela 2Â° ANDAR: Maionese, batata palha, milho, 2 bifes, 2 bacons, 2 abacaxis', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `menu_gourmet`
--

CREATE TABLE `menu_gourmet` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `menu_gourmet`
--

INSERT INTO `menu_gourmet` (`id`, `name`, `description`, `price`) VALUES
(1, 'X-GOURMET TRADICIONAL', '1Âº ANDAR: Alface, tomate, hamburguer artesanal e cheddar 2Â° ANDAR: Maionese, batata palha, presunto e mussarela', 99.99),
(2, 'X-GOURMET ESPECIAL', '1Â° ANDAR: Alface, tomate, hamburguer artesanal e cheddar 2Â° ANDAR: Maionese, batata palha, ovo, queijo e presunto', 0),
(3, 'LANÃ‡ADOR GOURMET', '1Â° ANDAR: Alface, tomate, hamburguer artesanal e cheddar 2Â° ANADR: Maionese, milho, batata, bacon, presunto, mussarela e abacaxi', 0),
(4, 'SUPER GOURMET', '1Â° ANDAR: Alface, tomate, ovo, bacon, mussarela e presunto 2Â° ANDAR: Maionese, milho, batata, abacaxi, hamburguer artesanal e cheddar', 0),
(5, 'FIT GOURMET', '1Â° ANDAR: Alface, tomate, ovo, queijo, peito de frango e abacaxi, maionese, milho, batata palha ', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `url` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `url`) VALUES
(2, 'Exemplo de novidades', 'Esta Ã© nossa novidade para esse mÃªs cada uma mais legal que a outra', '596904b0d43e8709bfc72799248a9800.jpg'),
(3, 'Outra novidade', 'mais uma grande novidade da nossa lanchonete', '0fb935d40c0dfd9cea1c887f76c5c16d.jpg'),
(4, 'Novidades semanais', 'toda semana uma novidade mais gostosa que a outra', '8230805df5bd2789b56e26fa8a6d877e.jpg'),
(5, 'Teste final', 'teste final de novidades', '2498417047524f45d7659b8e72223563.jpg'),
(6, 'Imagem de teste', 'Uma imagem de teste...', '858a8ccd262c141980fd06e8af4bfb12.jpg'),
(7, 'Outra imagem de teste', 'Testando 1,2,3...', 'c7c9f50667fc9fca4c625b445d8d4b49.jpg'),
(8, 'Imagem de hambÃºrguer', 'Teste de hambÃºrguer....', 'a57a6898caaae48563787eb2fc02107f.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `receipt`
--

CREATE TABLE `receipt` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `receipt`
--

INSERT INTO `receipt` (`id`, `name`, `url`) VALUES
(5, 'Comprovante de teste', 'cc57a2ba36abe991d2f7e2c4d142378c.jpg'),
(6, 'Novo comprovante', '43004b0ba3b9e75be4adee83af55c3f1.jpg'),
(7, 'Terceiro Comprovante', 'cb687c8e4be235a710d5eb2fc5a4fa32.jpg'),
(8, 'Quarto comprovante', 'cf5df973470ce1bd954f171b80538236.jpg'),
(9, 'Comprovante de teste legal', 'abc2da57914926db1d6122f61069d0e9.jpg'),
(10, 'Comprovante de teste final', '85dc5ec66cb0e593364171380259375e.jpg'),
(11, 'Teste final', '145e7e0c861d8edbc00d60cea2f87e7d.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `recib`
--

CREATE TABLE `recib` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `recib`
--

INSERT INTO `recib` (`id`, `name`, `url`) VALUES
(1, 'Recibo de teste', 'd3b040b330a21ed5bff6a43d4a6390c6.jpg'),
(2, 'Mais um Recibo', '4e1d387d79bc153702700802ddd68300.jpg'),
(3, 'Outro Recibo', '55012f73a1dff95d92f50c796c5f2a33.jpg'),
(4, 'Teste de Recibo final', 'dcc63f80df472bb344f7c5566770e417.jpg'),
(5, 'Envio de Recibo de teste', '7ccff8471673bcaa10e9826315c5c824.jpg'),
(6, 'Envio de Recibo de teste', '1002de0d8d1f63c8a1b43637e102cc00.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `result` varchar(200) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `results`
--

INSERT INTO `results` (`id`, `result`, `data`) VALUES
(1, 'O valor deu 69', '2019-04-28 10:53:53'),
(2, 'O valor deu 69', '2019-04-28 10:54:42'),
(3, 'O valor deu 69', '2019-04-28 10:55:42'),
(4, 'O valor deu 69', '2019-04-28 10:56:27'),
(5, 'O valor deu 69', '2019-04-28 10:57:31'),
(6, 'O valor deu 69', '2019-04-28 10:57:51'),
(7, 'O valor deu 69', '2019-04-28 10:58:52'),
(8, 'O valor deu 69', '2019-04-28 10:59:14'),
(9, 'O valor deu 69', '2019-04-28 10:59:29'),
(10, 'O valor deu 69', '2019-04-28 11:00:16'),
(11, 'O valor deu 69', '2019-04-28 11:00:42'),
(12, 'O valor deu 69', '2019-04-28 11:00:57'),
(13, 'O valor deu 69', '2019-04-28 11:01:14'),
(14, 'O valor deu 69', '2019-04-28 11:01:58'),
(15, 'O valor deu 69', '2019-04-28 11:02:24'),
(16, 'O valor deu 69', '2019-04-28 11:03:50'),
(17, 'O valor deu 69', '2019-04-28 11:04:18'),
(18, 'O valor deu 69', '2019-04-28 11:05:09'),
(19, 'O valor deu 69', '2019-04-28 11:07:21'),
(20, 'O valor deu 69', '2019-04-28 11:07:38'),
(21, 'O valor deu 69', '2019-04-28 11:11:05'),
(22, 'Mais um teste', '2019-04-28 11:12:03'),
(23, 'Resultado 81', '2019-04-28 11:20:03'),
(24, 'Resultado do teste foi. 110', '2019-04-28 11:22:47'),
(25, 'Resultado do teste foi. 110', '2019-04-28 11:22:59'),
(26, 'Resultado do teste foi. 110', '2019-04-28 11:23:46'),
(27, 'O resultado foi: 250', '2019-04-28 11:25:01'),
(28, 'O resultado da divisÃ£o por 9 foi: 9', '2019-04-28 11:26:31'),
(29, 'O resultado foi: 18', '2019-04-29 10:23:51'),
(30, 'O resultado foi: 18', '2019-04-29 10:25:13'),
(31, 'Opa, o resultado foi: 43', '2019-04-29 10:55:36'),
(32, 'O resultado da divisÃ£o foi: 8', '2019-04-29 10:57:42'),
(33, 'O resultado da divisÃ£o foi: 8', '2019-04-29 10:58:36');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `value` float NOT NULL,
  `date_sale` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `sales`
--

INSERT INTO `sales` (`id`, `name`, `quantity`, `value`, `date_sale`) VALUES
(8, 'x-lombo', 10, 180, '2019-01-11 11:56:56'),
(10, 'lanÃ§ador', 12, 380, '2019-01-15 10:51:44'),
(13, 'califÃ³rnia', 10, 180, '2019-01-18 09:11:43');

-- --------------------------------------------------------

--
-- Estrutura para tabela `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `url` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `url`) VALUES
(10, 'TÃ­tulo de teste', 'DescriÃ§Ã£o de teste', 'c96b0392607656fa3927ee23416381ed.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `token` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `token`) VALUES
(1, 'Marcelo', 'marcelo@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 'f38aac4c88eefdef22181e9ed2bfb7ec'),
(2, 'Fulano', 'fulano@gmail.com', '202cb962ac59075b964b07152d234b70', 0, ''),
(3, 'Cicrano', 'cicrano@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aboutpage`
--
ALTER TABLE `aboutpage`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `acounts`
--
ALTER TABLE `acounts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `annotations`
--
ALTER TABLE `annotations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `featurettes`
--
ALTER TABLE `featurettes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `historic`
--
ALTER TABLE `historic`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `humanrecurces`
--
ALTER TABLE `humanrecurces`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `menu_giant`
--
ALTER TABLE `menu_giant`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `menu_gourmet`
--
ALTER TABLE `menu_gourmet`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `recib`
--
ALTER TABLE `recib`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `aboutpage`
--
ALTER TABLE `aboutpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `acounts`
--
ALTER TABLE `acounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `annotations`
--
ALTER TABLE `annotations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `featurettes`
--
ALTER TABLE `featurettes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `finances`
--
ALTER TABLE `finances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `historic`
--
ALTER TABLE `historic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT de tabela `humanrecurces`
--
ALTER TABLE `humanrecurces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `menu_giant`
--
ALTER TABLE `menu_giant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `menu_gourmet`
--
ALTER TABLE `menu_gourmet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `recib`
--
ALTER TABLE `recib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
