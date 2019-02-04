-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jan-2019 às 11:01
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sandubao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aboutpage`
--

CREATE TABLE `aboutpage` (
  `id` int(11) NOT NULL,
  `bodyabout` text NOT NULL,
  `url` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aboutpage`
--

INSERT INTO `aboutpage` (`id`, `bodyabout`, `url`) VALUES
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque accumsan varius. Nulla a ipsum tellus. Nulla id odio ex. Phasellus quis sodales ligula, nec placerat ligula. In vestibulum gravida sollicitudin. Cras dignissim sodales elit sed volutpat. Nunc sit amet nisi condimentum, dictum lacus quis, efficitur mi. Sed id mi in lectus dignissim tristique et in purus. Pellentesque nisl nunc, venenatis nec suscipit a, suscipit vitae mi.\r\n\r\n		In vestibulum ante at nulla faucibus, at rutrum magna placerat. Sed eu fringilla sapien. Sed quis accumsan purus, a semper quam. Phasellus venenatis enim vitae sem aliquet, eu lacinia tortor ultrices. Donec consequat, enim nec efficitur cursus, orci purus sollicitudin ligula, et faucibus ex lacus sagittis eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed nec accumsan turpis. Quisque porta ante ante, id laoreet nibh egestas nec. Donec mattis neque quis metus dapibus rhoncus. Vestibulum vehicula laoreet eros eget condimentum.\r\n\r\n		Sed mollis ligula ac velit dignissim maximus. Praesent vitae cursus metus, a tempor augue. Integer pretium, sapien eu dictum eleifend, lorem orci sodales leo, ac vehicula ipsum tellus eu neque. Phasellus in magna eu sapien mollis tincidunt id eu turpis. Donec tortor nulla, convallis sit amet neque in, fringilla iaculis ipsum. Maecenas condimentum eu enim non vulputate. Suspendisse hendrerit elit a molestie venenatis. Donec volutpat, magna vitae porttitor efficitur, elit nulla tincidunt ipsum, dapibus laoreet massa massa ullamcorper nisi. Duis ullamcorper iaculis accumsan. Sed sit amet pharetra nulla, at cursus justo. Donec id quam lorem.\r\n\r\n		Fusce vulputate tortor sodales sodales congue. Proin imperdiet lacinia tortor nec accumsan. Donec in sollicitudin arcu. Nullam sodales quam nec mi fringilla, ac vestibulum lorem ultrices. Aliquam aliquam semper condimentum. Quisque dictum augue in rhoncus suscipit. Curabitur dignissim ex in odio scelerisque, nec vestibulum orci tristique.\r\n\r\n		Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque ultrices tortor et velit pulvinar tristique. Vivamus tortor felis, molestie in libero eget, porta tempor tellus. Fusce suscipit aliquam turpis ac tincidunt. Maecenas sit amet rutrum lectus. Ut nec libero et tortor posuere faucibus. Donec luctus massa vitae dolor pretium feugiat', 'a85e81c82b078024384b184f89bf4055.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `acounts`
--

CREATE TABLE `acounts` (
  `id` int(11) NOT NULL,
  `agency` int(11) NOT NULL DEFAULT '0',
  `acount` int(11) NOT NULL DEFAULT '0',
  `balance` float NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acounts`
--

INSERT INTO `acounts` (`id`, `agency`, `acount`, `balance`) VALUES
(1, 1234, 5678, 1550);

-- --------------------------------------------------------

--
-- Estrutura da tabela `annotations`
--

CREATE TABLE `annotations` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `annotations`
--

INSERT INTO `annotations` (`id`, `title`, `body`) VALUES
(1, 'AnotaÃ§Ã£o de teste', 'Testando anotaÃ§Ãµes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `featurettes`
--

CREATE TABLE `featurettes` (
  `id` int(11) NOT NULL,
  `featurettetitle` varchar(100) NOT NULL,
  `featurettedescription` varchar(250) NOT NULL,
  `url` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `featurettes`
--

INSERT INTO `featurettes` (`id`, `featurettetitle`, `featurettedescription`, `url`) VALUES
(1, 'Titulo em detaque', 'Alguma descriÃ§Ã£o de destaque', '8d44b56481ee4b7ac0a6c0be67bc211a.jpg'),
(2, 'Segundo destaque', 'Esse e o nosso segundo produto em destaque essa semana', '7f15a435329709805716ed667d4b3915.jpg'),
(3, 'Titulo de teste', 'Teste de quebra de div', '69d1a6f1d6bb3aea7ae343ff0111802d.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `finances`
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
-- Extraindo dados da tabela `finances`
--

INSERT INTO `finances` (`id`, `cemig`, `water`, `gas`, `for_rent`, `officials`, `providers`, `data_operation`) VALUES
(5, 25, 20, 15, 35, 45, 130, '2019-01-17 09:45:19'),
(6, 10, 20, 25, 30, 14, 100, '2019-01-17 09:50:48'),
(9, 35, 19, 45, 33, 60, 130, '2019-01-18 09:17:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historic`
--

CREATE TABLE `historic` (
  `id` int(11) NOT NULL,
  `id_acount` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `value` float NOT NULL DEFAULT '0',
  `data_operation` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historic`
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
(210, 1, 0, 50, '2019-01-18 11:46:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `humanrecurces`
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
-- Extraindo dados da tabela `humanrecurces`
--

INSERT INTO `humanrecurces` (`id`, `fistname`, `lastname`, `work`, `data_enter`, `data_exit`, `email`, `phone`, `salary`) VALUES
(1, 'Marcelo', 'Alexandre', 'Chapeiro', '03/01/2019', '00/00/0000', 'marcelo@gmail.com', '(99)9 9999-9999', 1500),
(2, 'Fulano', 'De Tal', 'GarÃ§om', '04/01/2019', '00/00/0000', 'fulano@gmail.com', '(11)9 2222-2222', 850),
(3, 'Cicrano', 'Da Silva', 'Entregador', '04/01/2019', '00/00/0000', 'cicrano@gmail.com', '(88)9 8888-8888', 1200),
(4, 'Pedro', 'GuimarÃ£es', 'GarÃ§om', '04/01/2019', '00/00/0000', 'pedro@gmail.com', '(99)9 9999-9999', 850),
(5, 'CecÃ­lia', 'Rodrigues', 'GarÃ§onete', '04/01/2019', '00/00/0000', 'cecilia@gmail.com', '(11)9 9999-9999', 950),
(6, 'Testador', 'teste de sistema', 'teste', '04/01/2019', '00/00/0000', 'teste4@gmail.com', '(00)9 1234-5678', 150);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`) VALUES
(1, 'X-BURGUER SALADA', '1Âº ANDAR: Alface, tomate e hamburguer de carna. 2Âº ANDAR: Maionese, batata palha, presunto e queijo'),
(2, 'X-EGG BACON', '1Â°ANDAR: Alface, tomate,bacon,queijo,presunto e ovo  2ÂºANDAR: Maionese,batata palha e hamburguer de carne'),
(3, 'X-BACON ', '1ÂºANDAR: Alface, tomate, bacon, queijo, presunto e ovo 2Â°ANDAR: Maionese, batata palha e hamburguer de carne'),
(4, 'X-BURGUER ESPECIAL', '1ÂºANDAR: Alface, tomate, ovo e presunto 2Â°ANDAR: Maionese, batata palha, hamburguer de carne e queijo'),
(5, 'HAVANEIRO', '1Âº ANDAR: Alface, tomate, queijo, presunto e abacaxi 2Âº ANDAR: Maionese, batata palha e hamburguer de carne'),
(6, 'LANÃ‡ADOR', '1Â° ANDAR: Alface, tomate, bacon, queijo e presunto 2Â° ANDAR: Maionese, batata palha, milho e hamburguer de carne'),
(7, 'KANGURU', '1Â° ANDAR: Alface, tomate, homburguer de carne, queijo e presunto 2Â° ANDAR: Maionese, batata palha e hamburguer de carne'),
(8, 'COLIFÃ“NIA', '1Â° ANDAR: Alface, tomate, bacon, queijo e abacaxi 2Â° ANDAR: Maionese, batata palha, ovo e presunto'),
(9, 'X-TUDO', '1Â° ANDAR: Alface, tomate, bacon, queijo, ovo e presunto 2Â° ANDAR: Maionese, batata palha, hamburguer de carne e abacaxi'),
(10, 'X-PICANHA', '1Â° ANDAR: Alface, tomate, queijo, ovo e presunto 2Â° ANDAR: Maionese, batata palha, milho, picanha e queijo'),
(11, 'X-FRANGO', '1Â° ANDAR: Alface, tomate, queijo, ovo e presunto 2Â° ANDAR: Maionese, batata, milho, filÃ© de frango e queijo'),
(12, 'X-LOMBO', '1Â° ANDAR: Alface, tomate, queijo, ovo e presunto 2Â° ANDAR: Maionese, batata palha, milho, lombo e queijo'),
(13, 'VEGETARIANO', '1Â° ANDAR: Alface, tomate, ovo e mussarela 2Â° ANDAR: Maionese, milho, batata, mussarela e abacaxi'),
(14, 'MISTO QUENTE', 'Presunto e mussarela');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_giant`
--

CREATE TABLE `menu_giant` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `menu_giant`
--

INSERT INTO `menu_giant` (`id`, `name`, `description`) VALUES
(1, 'SUPER FILET', '1Â° ANDAR: Alface, tomate, lombo, picanha, frango, 2 ovos, presunto e mussarela 2Â° ANDAR: Maionese, batata palha, hamburguer artesanal, cheddar e abacaxi'),
(2, 'X-TUDO DUPLO', '1Â° ANDAR: Alface, tomate, 2 ovos, 2 bacons, presunto e mussarela 2Â° ANDAR: Maionese, batata palha, milho, 2 hamburguer, 2 abacaxis, presunto e mussarela'),
(3, 'X-TUDO MONSTRO', '1Â° ANDAR: Alface, tomate, lombo, picanha, frango, 2 ovos, presunto e mussarela 2Â° ANDAR: Maionese, batata palha, milho, 2 bifes, 2 bacons, 2 abacaxis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_gourmet`
--

CREATE TABLE `menu_gourmet` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `menu_gourmet`
--

INSERT INTO `menu_gourmet` (`id`, `name`, `description`) VALUES
(1, 'X-GOURMET TRADICIONAL', '1Âº ANDAR: Alface, tomate, hamburguer artesanal e cheddar 2Â° ANDAR: Maionese, batata palha, presunto e mussarela'),
(2, 'X-GOURMET ESPECIAL', '1Â° ANDAR: Alface, tomate, hamburguer artesanal e cheddar 2Â° ANDAR: Maionese, batata palha, ovo, queijo e presunto'),
(3, 'LANÃ‡ADOR GOURMET', '1Â° ANDAR: Alface, tomate, hamburguer artesanal e cheddar 2Â° ANADR: Maionese, milho, batata, bacon, presunto, mussarela e abacaxi'),
(4, 'SUPER GOURMET', '1Â° ANDAR: Alface, tomate, ovo, bacon, mussarela e presunto 2Â° ANDAR: Maionese, milho, batata, abacaxi, hamburguer artesanal e cheddar'),
(5, 'FIT GOURMET', '1Â° ANDAR: Alface, tomate, ovo, queijo, peito de frango e abacaxi, maionese, milho, batata palha ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `url` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `url`) VALUES
(2, 'Exemplo de novidades', 'Esta Ã© nossa novidade para esse mÃªs cada uma mais legal que a outra', '596904b0d43e8709bfc72799248a9800.jpg'),
(3, 'Outra novidade', 'mais uma grande novidade da nossa lanchonete', '0fb935d40c0dfd9cea1c887f76c5c16d.jpg'),
(4, 'Novidades semanais', 'toda semana uma novidade mais gostosa que a outra', '8230805df5bd2789b56e26fa8a6d877e.jpg'),
(5, 'Teste final', 'teste final de novidades', '2498417047524f45d7659b8e72223563.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `value` float NOT NULL,
  `date_sale` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sales`
--

INSERT INTO `sales` (`id`, `name`, `quantity`, `value`, `date_sale`) VALUES
(8, 'x-lombo', 10, 180, '2019-01-11 11:56:56'),
(10, 'lanÃ§ador', 12, 380, '2019-01-15 10:51:44'),
(13, 'califÃ³rnia', 10, 180, '2019-01-18 09:11:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `url` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `url`) VALUES
(3, 'Teste de slider', 'alguma descriÃ§Ã£o para o slider', '77bd4974d2f1af5919a4a19059fae22b.jpg'),
(4, 'Segundo slide', 'descriÃ§Ã£o para o segundo slide', '99bcc6c088b2b1d6638cda175fa65b71.jpg'),
(5, 'Slide de nÃºmero trÃªs', 'descriÃ§Ã£o para slide trÃªs', '87671620f8c84e2d7ba445773b7138c6.jpg'),
(6, 'Agora nÃ£o mais slider', 'melhoro muito muito mais', 'e2b1c62d4d8a0726d633cff33cf016f9.jpg'),
(7, 'Atualizando alteraÃ§Ã£o', 'o cabeÃ§alho foi atualizado recentemente', '8b8e97eee895a37e49d500f18bdbb055.jpg'),
(8, 'Teste de cabeÃ§alho', 'alguma descriÃ§Ã£o', 'de5bc3411bbad2f7113262eb237019f1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
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
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `token`) VALUES
(1, 'Marcelo', 'marcelo@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '8d40139022c418cd9bd19ca1f15d93aa'),
(2, 'Fulano', 'fulano@gmail.com', '202cb962ac59075b964b07152d234b70', 0, ''),
(3, 'Cicrano', 'cicrano@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutpage`
--
ALTER TABLE `aboutpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acounts`
--
ALTER TABLE `acounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annotations`
--
ALTER TABLE `annotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featurettes`
--
ALTER TABLE `featurettes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historic`
--
ALTER TABLE `historic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humanrecurces`
--
ALTER TABLE `humanrecurces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_giant`
--
ALTER TABLE `menu_giant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_gourmet`
--
ALTER TABLE `menu_gourmet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutpage`
--
ALTER TABLE `aboutpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `acounts`
--
ALTER TABLE `acounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `annotations`
--
ALTER TABLE `annotations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `featurettes`
--
ALTER TABLE `featurettes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `finances`
--
ALTER TABLE `finances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `historic`
--
ALTER TABLE `historic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `humanrecurces`
--
ALTER TABLE `humanrecurces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu_giant`
--
ALTER TABLE `menu_giant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_gourmet`
--
ALTER TABLE `menu_gourmet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
