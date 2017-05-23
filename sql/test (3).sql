-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Maio-2017 às 15:26
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `imagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_anuncios`
--

CREATE TABLE `tb_anuncios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `descricao` mediumtext,
  `imagem` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `texto` text,
  `preco` float DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `categoria` varchar(255) NOT NULL,
  `anunciante` varchar(255) DEFAULT NULL,
  `liberado` tinyint(1) NOT NULL,
  `destaque` tinyint(1) NOT NULL,
  `destaquecategoria` tinyint(1) NOT NULL,
  `destaquegaleria` tinyint(1) NOT NULL,
  `subdestaque` tinyint(1) NOT NULL,
  `publicidadeprincipal` tinyint(1) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `tiponegocio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `tb_anuncios`
--

INSERT INTO `tb_anuncios` (`id`, `titulo`, `slug`, `descricao`, `imagem`, `created`, `modified`, `video`, `texto`, `preco`, `telefone`, `categoria`, `anunciante`, `liberado`, `destaque`, `destaquecategoria`, `destaquegaleria`, `subdestaque`, `publicidadeprincipal`, `facebook`, `tiponegocio`) VALUES
(1, 'Pálio 2001', 'palio-2001', 'Pálio 2001 motor fire 1.0 , 8 válvulas; Vidro e trava; Alarme; Antifurto; Terceiro dono; 17 pago; Carro muito conservado! \r\n', 'c1-3.jpg', '2017-05-16 10:03:57', '2017-05-16 10:47:49', NULL, NULL, 11800, 2147483647, 'automoveis', 'Josiane Nogueira', 1, 1, 1, 0, 0, 0, 'https://www.facebook.com/josiane.nogueira.92', 'Vender'),
(2, 'LG K10', 'lg-k10', 'LG k10 baratinho por apenas 400 reais só com detalhe na tela que quase não dá para ver ótimo preço. ', 'c1-1.jpg', '2017-05-16 10:06:41', '2017-05-16 10:48:07', NULL, NULL, 400, 2147483647, 'celulares', 'Luiz Henrique', 1, 1, 1, 0, 0, 0, 'https://www.facebook.com/profile.php?id=100006712936674', 'Vender'),
(3, 'Moto X2 Madeira', 'moto-x2-madeira', 'Vendo Moto X2 32GB, edição especial madeira, todos os acessórios e caixinha, bem conservado como novo ', 'c2-1.jpg', '2017-05-16 10:08:11', '2017-05-16 10:48:22', NULL, NULL, 800, 2147483647, 'celulares', 'João Teixeira', 1, 1, 1, 0, 0, 0, 'https://www.facebook.com/TEEIXEEIRAA', 'Vender'),
(4, 'Lumia 625', 'lumia-625', 'Vendo urgente celular NOKIA Lumia 625, tela sem trincados ou riscos, aceito troca e oferta', 'c3-1.jpg', '2017-05-16 10:09:12', '2017-05-16 10:48:36', NULL, NULL, 270, 999750772, 'celulares', 'Marcone Tolentino', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/marcone.tolentino', 'Vender'),
(5, 'Estante de aço', 'estante-de-aco', 'Vendo estante de aço 6 prateleiras (nova), Negocio no Valor já que vou entregar o apartamento hoje. Obs. Não entrego\r\n', 'd1-1.jpg', '2017-05-16 10:11:09', '2017-05-16 10:49:10', NULL, NULL, 120, 2147483647, 'diversos', 'Kyosanim Amilton Jr', 1, 1, 1, 1, 0, 0, 'https://www.facebook.com/profile.php?id=100007033295059', 'Vender'),
(6, 'Mesa em Madeira', 'mesa-em-madeira', 'Mesa em madeira, entrego na cidade parcelo cartão de crédito em até 12x * juros', 'd2-1.jpg', '2017-05-16 10:12:36', '2017-05-16 10:49:28', NULL, NULL, 180, 992014713, 'diversos', 'Hiram Silveira', 1, 1, 1, 0, 0, 0, 'https://www.facebook.com/hiram.silveira', 'Vender'),
(7, 'Guarda Roupa', 'guarda-roupa', 'Vendo guarda roupa com 4 portas e 2 gavetas com espelho. Conservada. Entrego. ', 'd3-1.jpg', '2017-05-16 10:14:06', '2017-05-16 10:49:38', NULL, NULL, 230, 997793201, 'diversos', 'Gustavo Karina', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/profile.php?id=100012034187861', 'Vender'),
(8, 'Colete de pêlos', 'colete-de-pelos', 'Novo nunca usado. Não reservo e não entrego', 'd4-1.jpg', '2017-05-16 10:19:41', '2017-05-16 10:49:53', NULL, NULL, NULL, 99672349, 'diversos', 'Sandra Fátima', 1, 1, 1, 1, 0, 0, 'https://www.facebook.com/sandra.fatima.92', 'Vender'),
(9, 'Imovel de Aluguel', 'imovel-de-aluguel', 'Chácara Maravilhosa com PISCINA, Espaço Gourmet, Freezer, Churrasqueira, Banheiros, Casa com 3 quartos e camas para 14 pessoas. Privacidade, Higiene e Segurança para você curtir com seus amigos e familiares a Fenamilho 2017\r\n', 'ia1-2.jpg', '2017-05-16 10:22:20', '2017-05-16 10:50:27', NULL, NULL, 2500, 999172631, 'imoveisalugar', 'Virgilio Gontijo', 1, 0, 0, 0, 1, 0, 'https://www.facebook.com/profile.php?id=100000007520571', ''),
(10, 'Alugo casa', 'alugo-casa', 'Murada, 2 quartos, sala , cozinha , área de serviço coberta , garagem (não coberta).', '', '2017-05-16 10:23:40', '2017-05-17 09:36:57', NULL, NULL, 380, 996376469, 'imoveisalugar', 'Jefferson Michael', 1, 0, 0, 0, 0, 0, 'https://www.facebook.com/jeffersonmichael.oliveira', ''),
(11, 'Alugo Chacara em Patos de Minas', 'alugo-chacara-em-patos-de-minas', 'Alugo chácara em Patos de Minas para finais de semana, feriados, aniversários, descanso e etc..', 'ia3-2.jpg', '2017-05-16 10:25:31', '2017-05-16 10:51:03', NULL, NULL, NULL, 999269090, 'imoveisalugar', 'Fernando Porto', 1, 1, 1, 1, 1, 0, 'https://www.facebook.com/chacaravitoriapatos', ''),
(12, 'Imovel de Aluguel', 'imovel-de-aluguel-2-3', 'Apartamento no condomínio dos ipês no bairro alto limoeiro R: Dona Zezé, 583, AP 303 com móveis planejados na cozinha e banheiro com box armario de pia espelho impecável e tela de proteção para crianças em todas as janelas e insulfime nas mesma. ', 'ia4-1.jpg', '2017-05-16 10:26:35', '2017-05-16 10:51:40', NULL, NULL, 750, 2147483647, 'imoveisalugar', 'Khallil Rodrigues', 1, 1, 0, 0, 1, 0, '', ''),
(13, 'Apartamento', 'apartamento', 'N S° de Fátima. Área de 67m2, são 3 quartos (sendo 1 suite) , Sala, cozinha, WC social, area de serviço, + 2 VAGAS de garagem. Bancada em Granito, janelas de vidro, 02 vagas de Garagens, ENTRADA FACILITADA, FINANCIAMENTO pelo MINHA CASA MINHA VIDA.\r\n', 'iv1-2.jpg', '2017-05-16 10:29:04', '2017-05-16 11:01:25', NULL, NULL, 160000, 996437145, 'imoveisvenda', 'Rafael Sousa', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/rafapatos', 'Vender'),
(14, 'Casa', 'casa', 'Vende-se casa no bairro Copacabana, 200m² de área construída, faltando acabamento, com 4 quartos sendo 2 suítes, sala, cozinha, WC social, área de serviço com mais um quarto e WC, garagem para 2 carros. ', 'iv2-1.jpg', '2017-05-16 10:30:26', '2017-05-16 10:52:18', NULL, NULL, 250000, 999751046, 'imoveisvenda', 'Geovana Severo', 1, 0, 0, 0, 1, 0, 'https://www.facebook.com/giovanasevero', 'Vender'),
(15, 'Casa', 'casa-2-3-4', 'Vende-se casa nova no bairro Copacabana, com 126m² de área construída, 165m² área total, com 3 quartos sendo 1 suíte, sala, copa/cozinha com armários, WC social, área de serviço, garagem para 2 carros', 'iv3-1.jpg', '2017-05-16 10:31:23', '2017-05-16 10:54:01', NULL, NULL, 250000, 999751046, 'imoveisvenda', 'Geovana Severo', 1, 0, 0, 0, 1, 0, 'https://www.facebook.com/giovanasevero', 'Vender'),
(16, 'Casa', 'casa-2-3', 'CASA PRONTA DE ESQUINA COM ENTRADA PARCELADA; JARDIM EUROPA. CASA DE 2 QUARTOS, COM 3 CORREDORES PRA AMPLIAÇÕES. 2 QUARTOS, SALA, COZINHA E WC SOCIAL, 2 CARROS NA GARAGEM.\r\n', 'iv4-1.jpg', '2017-05-16 10:33:04', '2017-05-16 11:00:18', NULL, NULL, 120000, 999756674, 'imoveisvenda', 'Clifferson Thiago', 1, 0, 0, 0, 1, 0, 'https://www.facebook.com/profile.php?id=100004821709033', 'Vender'),
(17, 'Lander 250 ', 'lander-250', 'Lander 2017 2.800km, Guidon oxxy, Lampada led, Moto nova nunca foi na terra ou caiu sem detalhes.\r\n', 'm1-2.jpg', '2017-05-16 10:35:40', '2017-05-16 10:54:43', NULL, NULL, NULL, 997653633, 'motos', 'Douglas Teixeira', 1, 1, 1, 0, 0, 0, 'https://www.facebook.com/douglas.teixeira.16', 'Vender'),
(18, 'Fan', 'fan', 'Vende se fan 2011 moto para pessoas exigentes aceito troca por carro ou moto', 'm2-2.jpg', '2017-05-16 10:37:00', '2017-05-16 10:54:55', NULL, NULL, 4700, 996855623, 'motos', 'Igor Vinicius', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/igor.vinicius.37853', 'Vender'),
(19, 'Titam 150ex', 'titam-150ex', 'Vendo uma titam 150EX 14/14 a mais completa da categoria', 'm3-1.jpg', '2017-05-16 10:38:10', '2017-05-16 10:55:04', NULL, NULL, 7000, 996883479, 'motos', 'Danilo castro', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/danilodkkd', 'Vender'),
(20, 'Sites Personalizados', 'sites-personalizados', 'Nuvem desenvolvimento web. Soluções em desenvolvimento de web site ideal para a sua empresa. ', 'logo-nuvem.jpg', '2017-05-16 10:40:49', '2017-05-16 10:55:40', NULL, NULL, NULL, 999664204, 'servicos', 'Nuvem Desenvolvimento Web', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/nuvemdesenvolvimentoweb/', ''),
(21, 'Maquiagem Profissional', 'maquiagem-profissional', 'Maquiagem Profissional AGENDE SEU HORÁRIO ', '', '2017-05-16 10:41:59', '2017-05-16 10:55:58', NULL, NULL, 50, 998713755, 'servicos', 'Anizeth Gomes', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/anizeth.gomes', ''),
(22, 'Internet', 'internet', 'Esta precisando de internet??\r\nEsta com o nome no spc, faz o seguinte vem pra UAI Telecom Internet + Wi-Fi\r\n', '', '2017-05-16 10:43:07', '2017-05-16 10:56:39', NULL, NULL, 60, 99176749, 'servicos', 'MC Callison', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/mc.cayllison', ''),
(23, 'Vaga de Emprego', 'vaga-de-emprego', 'Contrata-se pedreiro de acabamento, com experiência em carteira, referências serão checadas', '', '2017-05-16 10:44:31', '2017-05-16 10:57:06', NULL, NULL, NULL, 991975668, 'empregos', 'Thiago Souza', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/Thiiago.f.Souza', ''),
(24, 'Vaga Promotor de Vendas', 'vaga-promotor-de-vendas', 'A ORTODONTIC CENTER OFERECE VAGAS PARA PROMOTOR DE VENDAS\r\nRequisitos: Ambos os sexo, acima de 30 anos, proativo(a), comunicativo(a), responsável, experiência na área de vendas e abordagem direta. Horário: Disponibilidade de segunda a sábado. Benefícios: Salário Comercial + Comissão\r\nInteressados enviar currículo para: oc205@ortodonticcenter.com.br\r\n', '', '2017-05-16 10:45:56', '2017-05-16 10:57:21', NULL, NULL, NULL, NULL, 'empregos', 'Elaine Fernandes', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/elaine.fernandes.7161953', ''),
(25, 'Vaga Auxiliar Produção', 'vaga-auxiliar-producao', 'Ambos os sexos, disponibilidade de horário. Não é necessário ter experiência. INTERESSADOS ENTREGAR CURRÍCULO PESSOALMENTE Á RUA TEÓFILO OTONI, 370 - CENTRO ( em frente a rodoviária velha) FAVOR, VIR COM O E-MAIL EM MÃOS PARA O CADASTRAMENTO DO CURRÍCULO!', '', '2017-05-16 10:46:42', '2017-05-16 10:57:29', NULL, NULL, NULL, NULL, 'empregos', 'Camila Ribeiro', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/camilasilvar2', ''),
(26, 'CPU personalizada', 'cpu-personalizada', 'CPU personalizada exatamente para você!\r\nProcessador i3-6100... parcelado em até 6x\r\nAproveite', '18300831-677658042421857-678950907483862294-n.jpg', '2017-05-16 13:47:05', '2017-05-16 14:33:49', NULL, NULL, 1880, 38141165, 'computadores', 'Prime Informática', 1, 1, 1, 0, 0, 0, 'https://www.facebook.com/primeinforpatos/', 'Vender'),
(27, 'Master Prime', 'master-prime', 'GTX 1050 Ti 4GB GDDR5\r\n8GB DDR4 2133Mhz\r\nFonte CX 430w\r\nPlaca Mãe Asus', '17759676-663708493816812-2286894157225869977-n.jpg', '2017-05-16 13:48:13', '2017-05-16 13:52:49', NULL, NULL, NULL, 38141165, 'computadores', 'Prime Informática', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/primeinforpatos/', 'Vender'),
(28, 'CPU warrior', 'cpu-warrior', 'Computador + Brinde Mouse e Teclado!', '17098333-646835942170734-8358084866093902081-n.jpg', '2017-05-16 13:49:34', '2017-05-16 13:52:56', NULL, NULL, 1599.9, 38141165, 'computadores', 'Prime Informática', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/primeinforpatos/', 'Vender'),
(29, 'CPU C3 Tech', 'cpu-c3-tech', 'HD 80 GB;\r\n4 GB Ram DDR3;\r\nGeForce 7300 GS', '16603046-636524036535258-6658928068361812673-n.jpg', '2017-05-16 13:51:18', '2017-05-16 13:53:05', NULL, NULL, 699.9, 38141165, 'computadores', 'Prime Informática', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/primeinforpatos/', 'Vender'),
(30, 'PC Prime', 'pc-prime', 'PC PRIME V-KING 9800GT EVGA em até 4x no cartão', '15094347-597783607075968-6858511369447037768-n.jpg', '2017-05-16 13:52:28', '2017-05-16 13:53:12', NULL, NULL, 2790, 38141165, 'computadores', 'Prime Informática', 1, 0, 1, 0, 0, 0, 'https://www.facebook.com/primeinforpatos/', 'Vender'),
(31, 'Aluga-se quarto em república', 'aluga-se-quarto-em-republica', 'Aluga-se um quarto para pessoa que trabalhe ou estude, de preferência homem, 10 minutos da unipam, 10 minutos do centro, casa grande dividir com mais 4 pessoas, quarto individual, compra de mês + agua + energia + internet + gás + aluguel giram em torno de 400 reais', '', '2017-05-17 09:11:46', '2017-05-17 09:13:10', NULL, NULL, 400, 998935012, 'imoveisalugar', 'André Cristian', 1, 0, 0, 0, 1, 0, 'https://www.facebook.com/andre.cristian.7', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_publicidades`
--

CREATE TABLE `tb_publicidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `local` varchar(200) DEFAULT NULL,
  `slug` varchar(120) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `externo` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `tb_publicidades`
--

INSERT INTO `tb_publicidades` (`id`, `nome`, `local`, `slug`, `ativo`, `imagem`, `link`, `externo`, `created`, `modified`) VALUES
(20, 'Prime Informática', 'homelateral', NULL, NULL, '3-home-lateral-350x250.jpg', 'https://www.facebook.com/primeinforpatos/', NULL, '2017-05-10 15:26:34', '2017-05-17 16:12:09'),
(21, 'Reveste Mais', 'homecentro1', NULL, NULL, '1-home-centro-660x100-2.jpg', '', NULL, '2017-05-10 15:36:51', '2017-05-17 16:03:39'),
(22, 'Torneira e Cia', 'homecentro2', NULL, NULL, '2-home-centro-660x100.jpg', '', NULL, '2017-05-10 15:37:04', '2017-05-17 16:05:28'),
(23, 'Nuvem Desenvolvimento Web', 'galeria', NULL, NULL, 'testeprime3.jpg', 'http://nuvemdesenvolvimentoweb.com.br/site/', NULL, '2017-05-11 15:38:03', '2017-05-17 16:06:05'),
(24, 'Reveste Mais', 'contatolateral', NULL, NULL, '7-pag-contato-350x250.png', '', NULL, '2017-05-11 16:01:52', '2017-05-17 16:09:10'),
(26, 'Pet Zoo', 'contatofim', NULL, NULL, '1-fim-da-pagina-730x100.jpg', '', NULL, '2017-05-11 16:32:02', '2017-05-17 16:19:23'),
(27, 'Nuvem Desenvolvimento Web', 'parceiros', NULL, NULL, 'testeprime5-3.jpg', 'http://nuvemdesenvolvimentoweb.com.br/site/', NULL, '2017-05-11 17:05:03', '2017-05-17 16:11:15'),
(28, 'Stout Alfa', 'parceiros', NULL, NULL, 'testeeeeeeee.png', 'http://www.stoutalfa.com.br', NULL, '2017-05-11 17:05:29', '2017-05-17 16:16:46'),
(29, 'Reveste Mais', 'parceiros', NULL, NULL, 'testeeeeee.png', '', NULL, '2017-05-11 17:05:52', '2017-05-17 16:15:54'),
(30, 'Symetria', 'parceiros', NULL, NULL, 'testeee.png', '', NULL, '2017-05-11 17:06:13', '2017-05-17 16:14:57'),
(31, 'Levino Alves', 'parceiros', NULL, NULL, 'testeeeeeeeeee.png', '', NULL, '2017-05-11 17:06:33', '2017-05-17 16:17:41'),
(32, 'Pet Zoo', 'parceiros', NULL, NULL, 'tetete-2.png', '', NULL, '2017-05-11 17:06:48', '2017-05-17 16:22:54'),
(33, 'Nuvem Desenvolvimento Web', 'hometopo', NULL, NULL, 'nuvemprimetopoo.png', 'http://nuvemdesenvolvimentoweb.com.br/site/', NULL, '2017-05-13 16:09:27', '2017-05-16 16:28:58');

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
  `password` varchar(45) DEFAULT NULL,
  `categoria` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `email`, `created`, `modified`, `imagem`, `funcao`, `status`, `password`, `categoria`) VALUES
(12, 'Administrador', 'administrador@nuvemdesenvolvimentoweb.com.br', '2017-04-26 19:19:14', '2017-05-13 03:11:52', 'pp.jpg', NULL, 1, 'aba0c484aeb721b3a34e01d2235289c6dca5bd16', 1),
(47, 'usuario', 'usuario@usuario.com.br', '2017-05-17 15:12:09', '2017-05-17 15:12:09', '', NULL, 1, '1caaa56bc5d35666b5dc4b792afa9492ba8da2bf', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(30) NOT NULL,
  `genero` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anuncios`
--
ALTER TABLE `tb_anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_publicidades`
--
ALTER TABLE `tb_publicidades`
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
-- AUTO_INCREMENT for table `tb_anuncios`
--
ALTER TABLE `tb_anuncios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_publicidades`
--
ALTER TABLE `tb_publicidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
