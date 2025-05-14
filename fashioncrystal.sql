-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/05/2025 às 03:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fashioncrystal`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `closet_divas`
--

CREATE TABLE `closet_divas` (
  `id` int(11) NOT NULL,
  `nome_personagem` varchar(100) NOT NULL,
  `serie_anime` varchar(100) NOT NULL,
  `tipo_estilo` varchar(100) NOT NULL,
  `acessorio_magico` varchar(150) NOT NULL,
  `cor_principal` varchar(50) NOT NULL,
  `look_descricao` text NOT NULL,
  `status` enum('favorito','arquivado','em_uso') NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `closet_divas`
--

INSERT INTO `closet_divas` (`id`, `nome_personagem`, `serie_anime`, `tipo_estilo`, `acessorio_magico`, `cor_principal`, `look_descricao`, `status`, `data_registro`) VALUES
(2, 'Mágica Sininho', 'Peter Pan', 'Vestido de folha verde', 'Poção de pó de fada', 'Verde', 'Sininho usa um vestido verde curto, feito de folhas. Seu visual é completado por sapatilhas douradas e cabelo loiro preso com um toque mágico.', 'favorito', '2025-05-06 23:46:11'),
(3, 'Raven', 'Teen Titans', 'Manto com capuz', 'Joia na testa', 'Roxo e preto', 'Raven usa um manto roxo com capuz. Roupa simples com toque gótico. A joia na testa simboliza o controle de seus poderes demoníacos.', 'favorito', '2025-05-06 23:46:11'),
(4, 'Sakura Kinomoto', 'Cardcaptor Sakura', 'Vestido infantil com detalhes mágicos', 'Bastão mágico e cartas Clow', 'Rosa e branco', 'Sakura usa vestidos fofos com detalhes em rosa e branco, com laços e saias volumosas. Usa um bastão mágico e cartas Clow.', 'em_uso', '2025-05-06 23:46:11'),
(5, 'Yuno Gasai', 'Future Diary', 'Vestido rosa com estilo romântico e agressivo', 'Diário de futuro', 'Rosa', 'Yuno usa vestido rosa com detalhes em vermelho e laço grande. Apesar do estilo menininha, sua personalidade é traiçoeira. Leva um diário que prevê o futuro.', 'favorito', '2025-05-06 23:46:11'),
(6, 'Sailor Mars', 'Sailor Moon', 'Uniforme de marinheiro com saia', 'Agulha sagrada e poder do fogo', 'Vermelho e roxo', 'Sailor Mars usa um uniforme com saia vermelha e laço roxo. Seu estilo é forte e energético, refletindo seus poderes de fogo.', 'favorito', '2025-05-06 23:46:11'),
(7, 'Nami', 'One Piece', 'Roupas tropicais e piratas', 'Clima-Tact', 'Laranja e azul', 'Nami usa um top laranja e saia azul com detalhes florais. Seu bastão mágico permite controlar o clima.', 'favorito', '2025-05-06 23:46:11'),
(8, 'Kagome Higurashi', 'Inuyasha', 'Uniforme escolar moderno', 'Arco e flecha sagrada', 'Branco e verde', 'Kagome usa uniforme escolar tradicional com saia verde e blusa branca. Usa um arco sagrado em batalhas.', 'favorito', '2025-05-06 23:46:11'),
(9, 'Moka Akashiya', 'Rosario + Vampire', 'Uniforme escolar com toque de fantasia', 'Colar de rosário', 'Branco e roxo', 'Moka usa uniforme escolar com laço grande. Ao retirar o colar de rosário, se transforma em poderosa vampira.', 'favorito', '2025-05-06 23:46:11'),
(10, 'Wonder Woman', 'Liga da Justiça', 'Armadura de guerreira', 'Laço da verdade, braceletes e tiara', 'Azul, vermelho e dourado', 'Usa traje de batalha com top vermelho, saia azul e botas douradas. Seus acessórios mágicos são parte de sua força amazona.', 'favorito', '2025-05-06 23:46:11'),
(11, 'Satsuki Kiryuin', 'Kill la Kill', 'Uniforme escolar militarizado', 'Kamui Junketsu', 'Branco e azul', 'Satsuki usa um uniforme militarizado com Kamui Junketsu, que concede poderes extraordinários.', 'favorito', '2025-05-06 23:46:11'),
(12, 'Rukia Kuchiki', 'Bleach', 'Uniforme de Soul Reaper', 'Zampakuto e poderes de gelo', 'Preto e branco', 'Rukia veste uniforme Soul Reaper com kimono preto e faixa branca. Sua espada mágica libera poderes de gelo.', 'favorito', '2025-05-06 23:46:11'),
(13, 'Lucy Heartfilia', 'Fairy Tail', 'Roupa de maga', 'Chaves dos espíritos celestiais', 'Azul e branco', 'Lucy veste blusa azul e saia curta. Suas chaves douradas permitem invocar espíritos mágicos.', 'favorito', '2025-05-06 23:46:11'),
(16, 'Sailor Moon', 'Sailor Moon', 'Mágico escolar', 'Cetro Lunar', 'Rosa', 'Uniforme de guerreira com detalhes brilhantes', 'favorito', '2025-05-07 23:08:15');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `closet_divas`
--
ALTER TABLE `closet_divas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `closet_divas`
--
ALTER TABLE `closet_divas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
