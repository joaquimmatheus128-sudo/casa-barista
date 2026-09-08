-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Tempo de geração: 08/09/2026 às 17:38
-- Versão do servidor: 8.4.10
-- Versão do PHP: 8.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `casa_barista`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9pknhNGGOL8UDEgipBph6D5FeQWyf1cX7VSYM2L2', NULL, '172.18.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0', 'eyJfdG9rZW4iOiJFUmFkbmV3WXg3T2VRREM4UnBSV2tSQVNXS0RxQ01HWHlVenJSQllSIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9kYXNoYm9hcmRcL2xpbmhhZG90ZW1wbyIsInJvdXRlIjoiYWRtaW4ubGluaGFkb3RlbXBvLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1788545095),
('HyeZw9vTq7e4pracBSVJL9zMaXcXA3FOTASU0bPo', NULL, '172.18.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0', 'eyJfdG9rZW4iOiJDTmVFR2JGQ01BUzdiSFladXlJTXp2eEZiYVhhUkI5Umk3T2hUZkRSIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9kYXNoYm9hcmRcL3Byb2R1dG8iLCJyb3V0ZSI6ImFkbWluLnByb2R1dG8uaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1788544427);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int NOT NULL,
  `titulo_banner` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_banner` varchar(65) COLLATE utf8mb4_general_ci NOT NULL,
  `status_banner` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_banner` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_banner` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `titulo_banner`, `imagem_banner`, `status_banner`, `data_criacao_banner`, `data_atualizacao_banner`) VALUES
(1, 'Promoção especial de inverno', 'banner/promocao_especial_de_inverno.png', 'ATIVO', '2026-05-18 13:47:26', '2026-05-20 14:09:39'),
(2, 'Café mais vendido da casa', 'banner/cafe_mais_vendido_da_casa.png', 'ATIVO', '2026-05-18 13:50:49', '2026-05-18 13:50:49'),
(3, 'Bolo acompanhado de café', 'banner/bolo_acompanhado_de_cafe.png', 'INATIVO', '2026-05-18 13:50:51', '2026-06-02 14:09:36'),
(4, 'Cappuccino com um pão de queijo', 'banner/cappuccino_com_um_pao_de_queijo.png', 'ATIVO', '2026-05-18 13:50:52', '2026-05-18 13:50:52'),
(5, 'Leite com café', 'banner/leite_com_cafe.png', 'ATIVO', '2026-05-18 13:50:53', '2026-05-20 15:20:23'),
(6, 'Sabor irresistível', 'banner/sabor_irresistivel.png', 'ATIVO', '2026-05-18 13:50:55', '2026-05-27 16:09:18');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id_categoria` int NOT NULL,
  `nome_categoria` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `status_categoria` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_categoria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_categoria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`id_categoria`, `nome_categoria`, `status_categoria`, `data_criacao_categoria`, `data_atualizacao_categoria`) VALUES
(1, 'CAFÉS', 'ATIVO', '2026-05-18 13:47:43', '2026-05-18 13:47:43'),
(2, 'Bebidas Geladas', 'ATIVO', '2026-05-18 13:51:37', '2026-05-18 13:51:37'),
(3, 'Doces', 'ATIVO', '2026-05-18 13:51:38', '2026-05-18 13:51:38'),
(4, 'Salgados', 'ATIVO', '2026-05-18 13:51:39', '2026-05-18 13:51:39'),
(5, 'Combos', 'INATIVO', '2026-05-18 13:51:40', '2026-05-27 16:29:02'),
(6, 'Chá', 'INATIVO', '2026-05-18 13:51:43', '2026-05-20 16:13:16');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `id_cliente` int NOT NULL,
  `nome_cliente` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_cliente` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `senha_cliente` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_cliente` varchar(65) COLLATE utf8mb4_general_ci NOT NULL,
  `status_cliente` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`id_cliente`, `nome_cliente`, `email_cliente`, `senha_cliente`, `foto_cliente`, `status_cliente`, `data_criacao_cliente`, `data_atualizacao_cliente`) VALUES
(1, 'Lucas Martins', 'lucas@gmail.com', 'senha123', 'cliente/lucas_martins.png', 'ATIVO', '2026-05-18 13:47:50', '2026-05-20 16:31:02'),
(2, 'Alessandro Corinthians', 'ale@gmail.com', '28971', 'cliente/alessandro_corinthians.png', 'ATIVO', '2026-05-18 13:56:22', '2026-05-27 17:02:20'),
(3, 'Jessica Reis', 'jess@gmail.com', 'rh2180', 'cliente/jessica_reis.png', 'ATIVO', '2026-05-18 13:56:25', '2026-05-18 13:56:25'),
(4, 'Hugo Rubens', 'hugo@gmail.com', 'uhg2665', 'cliente/hugo_rubens.png', 'ATIVO', '2026-05-18 13:56:26', '2026-05-18 13:56:26'),
(5, 'Patricia Silva', 'patri@gmail.com', 'pa3vgg2', 'cliente/patricia_silva.png', 'ATIVO', '2026-05-18 13:56:27', '2026-05-18 13:56:27'),
(6, 'Luara Dutra', 'lua@gmail.com', 'tralu89', 'cliente/luara_dutra.png', 'INATIVO', '2026-05-18 13:56:28', '2026-05-20 15:00:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_contato`
--

CREATE TABLE `tbl_contato` (
  `id_contato` int NOT NULL,
  `nome_contato` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_contato` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone_contato` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `assunto_contato` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `mensagem_contato` text COLLATE utf8mb4_general_ci NOT NULL,
  `status_contato` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_contato` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_contato` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_contato`
--

INSERT INTO `tbl_contato` (`id_contato`, `nome_contato`, `email_contato`, `telefone_contato`, `assunto_contato`, `mensagem_contato`, `status_contato`, `data_criacao_contato`, `data_atualizacao_contato`) VALUES
(1, 'Mariana Souza', 'mariana@gmail.com', '(11)98888-7777', 'DÚVIDA', 'Gostaria de saber se vocês aceitam reservas para grupos.', 'NOVO', '2026-05-18 13:47:30', '2026-05-18 13:47:30'),
(2, 'Vagner Moura', 'vagner@gmail.com', '(11)69034-4923', 'DÚVIDA', 'Vocês cantam parabéns para aniversariante?', 'LIDO', '2026-05-18 13:51:28', '2026-05-27 16:54:17'),
(3, 'Wesley Dingu', 'wesley@gmail.com', '(11)92582-1490', 'DÚVIDA', 'Tem pizza no dardápio?', 'NOVO', '2026-05-18 13:51:31', '2026-05-18 13:51:31'),
(4, 'Wellington Dias', 'wellington@gmail.com', '(11)97543-8301', 'DÚVIDA', 'Preciso saber se tem estacionamento grátis para os clientes', 'LIDO', '2026-05-18 13:51:33', '2026-05-20 14:19:28'),
(5, 'Edjane Vieira', 'edjane@gmail.com', '(11)95612-0241', 'DÚVIDA', 'Vocês tem wifi para clientes no estabelcimento?', 'RESPONDIDA', '2026-05-18 13:51:34', '2026-05-27 16:56:42'),
(6, 'Walter White', 'walter@gmail.com', '(11)90221-8620', 'DÚVIDA', 'O local aceita a presença de cachorros de estimação?', 'NOVO', '2026-05-18 13:51:35', '2026-05-18 13:51:35');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_depoimento`
--

CREATE TABLE `tbl_depoimento` (
  `id_depoimento` int NOT NULL,
  `id_cliente` int NOT NULL,
  `titulo_depoimento` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao_depoimento` text COLLATE utf8mb4_general_ci NOT NULL,
  `nota_depoimento` double(4,2) DEFAULT NULL,
  `status_depoimento` varchar(10) COLLATE utf8mb4_general_ci DEFAULT 'PENDENTE',
  `data_criacao_depoimento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_depoimento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_depoimento`
--

INSERT INTO `tbl_depoimento` (`id_depoimento`, `id_cliente`, `titulo_depoimento`, `descricao_depoimento`, `nota_depoimento`, `status_depoimento`, `data_criacao_depoimento`, `data_atualizacao_depoimento`) VALUES
(1, 1, 'Excelente café', 'O café estava perfeito e o atendimento foi muito acolhedor', 5.00, '', '2026-05-18 13:47:51', '2026-05-18 13:47:51'),
(2, 2, 'Excelente chá', 'O chá estava perfeito e o atendimento foi muito acolhedor', 5.00, 'PENDENTE', '2026-05-18 13:56:29', '2026-05-27 17:09:25'),
(3, 3, 'Gostei do pão de queijo', 'O pão de queijo estava bom', 4.00, 'APROVADO', '2026-05-18 13:56:31', '2026-05-27 17:06:48'),
(4, 4, 'Amei o pudim', 'Pudim no ponto perfeito simplesmente viciante', 5.00, 'PENDENTE', '2026-05-18 13:56:33', '2026-05-18 13:56:33'),
(5, 5, 'Gostei do café longo', 'O café realmente impressiona com esse sabor', 4.00, 'PENDENTE', '2026-05-18 13:56:34', '2026-05-18 13:56:34'),
(6, 6, 'O combo inverno é justo', 'Lugar ok, o combo inverno tem um preço bom comparado a outros itens', 4.00, 'APROVADO', '2026-05-18 13:56:35', '2026-05-20 16:40:51');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_galeria`
--

CREATE TABLE `tbl_galeria` (
  `id_galeria` int NOT NULL,
  `nome_galeria` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_galeria` varchar(65) COLLATE utf8mb4_general_ci NOT NULL,
  `status_galeria` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_galeria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_galeria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_galeria`
--

INSERT INTO `tbl_galeria` (`id_galeria`, `nome_galeria`, `imagem_galeria`, `status_galeria`, `data_criacao_galeria`, `data_atualizacao_galeria`) VALUES
(1, 'Ambiente interno', 'galeria/ambiente_interno.png', 'ATIVO', '2026-05-18 13:47:33', '2026-05-18 13:47:33'),
(2, 'Salao principal', 'galeria/salao_principal.png', 'ATIVO', '2026-05-18 13:51:06', '2026-07-28 20:29:18'),
(3, 'Dia movimentado no estabelecimento', 'galeria/dia_movimentado_no_estabelecimento.png', 'ATIVO', '2026-05-18 13:51:08', '2026-05-18 13:51:08'),
(4, 'Faixada', 'galeria/faixada.png', 'ATIVO', '2026-05-18 13:51:09', '2026-05-18 13:51:09'),
(5, 'Cozinha', 'galeria/cozinha.png', 'ATIVO', '2026-05-18 13:51:10', '2026-05-18 13:51:10'),
(6, 'assento', 'galeria/assento.png', 'ATIVO', '2026-05-18 13:51:11', '2026-07-28 20:29:22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_horarios`
--

CREATE TABLE `tbl_horarios` (
  `id_horarios` int NOT NULL,
  `dia_semana_horarios` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `hora_abertura_horarios` time NOT NULL,
  `hora_fechamento_horarios` time NOT NULL,
  `observacao_horarios` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status_horarios` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_horarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_horarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_horarios`
--

INSERT INTO `tbl_horarios` (`id_horarios`, `dia_semana_horarios`, `hora_abertura_horarios`, `hora_fechamento_horarios`, `observacao_horarios`, `status_horarios`, `data_criacao_horarios`, `data_atualizacao_horarios`) VALUES
(1, 'SEGUNDA-FEIRA', '08:00:00', '19:00:00', 'Atendimento normal', 'ATIVO', '2026-05-18 13:47:41', '2026-05-27 16:49:01'),
(2, 'TERÇA-FEIRA', '09:00:00', '21:00:00', 'Atendimento por ordem de chegada', 'ATIVO', '2026-05-18 13:51:21', '2026-05-18 13:51:21'),
(3, 'QUARTA-FEIRA', '09:00:00', '22:00:00', 'Atendimento por ordem de chegada', 'ATIVO', '2026-05-18 13:51:23', '2026-05-27 16:50:31'),
(4, 'QUINTA-FEIRA', '09:00:00', '21:00:00', 'Atendimento por ordem de chegada', 'ATIVO', '2026-05-18 13:51:24', '2026-05-18 13:51:24'),
(5, 'SEXTA-FEIRA', '09:00:00', '23:00:00', 'Atendimento vai até mais tarde pois tem mais movimento', 'ATIVO', '2026-05-18 13:51:26', '2026-05-20 16:19:06'),
(6, 'SÁBADO', '09:00:00', '21:00:00', 'Atendimento por ordem de chegada', 'ATIVO', '2026-05-18 13:51:27', '2026-05-18 13:51:27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_itens_venda`
--

CREATE TABLE `tbl_itens_venda` (
  `id_itens_venda` int NOT NULL,
  `id_venda` int NOT NULL,
  `id_produto` int NOT NULL,
  `qtde_itens_venda` double(6,2) NOT NULL,
  `valor_unit_itens_venda` double(6,2) NOT NULL,
  `subtotal_itens_venda` double(6,2) NOT NULL,
  `status_itens_venda` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_itens_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_ataualizacao_itens_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_itens_venda`
--

INSERT INTO `tbl_itens_venda` (`id_itens_venda`, `id_venda`, `id_produto`, `qtde_itens_venda`, `valor_unit_itens_venda`, `subtotal_itens_venda`, `status_itens_venda`, `data_criacao_itens_venda`, `data_ataualizacao_itens_venda`) VALUES
(1, 1, 1, 2.00, 1.00, 2.00, '', '2026-05-18 14:11:30', '2026-05-18 17:24:38'),
(2, 2, 2, 2.00, 2.00, 4.00, '', '2026-05-18 14:14:24', '2026-05-18 17:24:38'),
(3, 3, 3, 2.00, 3.00, 6.00, '', '2026-05-18 14:14:29', '2026-05-18 17:24:38'),
(4, 4, 4, 2.00, 4.00, 8.00, '', '2026-05-18 14:14:43', '2026-05-18 17:24:38'),
(5, 5, 5, 2.00, 5.00, 10.00, '', '2026-05-18 14:14:54', '2026-05-18 17:24:38'),
(6, 6, 6, 3.00, 6.00, 18.00, '', '2026-05-18 14:15:05', '2026-05-20 14:42:18'),
(21, 5, 4, 2.00, 4.00, 4.00, '', '2026-05-20 14:48:19', '2026-05-20 14:48:19'),
(22, 4, 3, 2.00, 3.00, 3.00, '', '2026-05-20 14:49:04', '2026-05-20 14:49:04'),
(23, 2, 6, 2.00, 6.00, 12.00, '', '2026-05-20 14:51:51', '2026-05-20 14:51:51'),
(24, 6, 3, 2.00, 3.00, 3.00, '', '2026-05-20 14:56:21', '2026-05-20 14:56:21'),
(25, 3, 2, 2.00, 2.00, 4.00, '', '2026-05-20 14:58:07', '2026-05-20 14:58:07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_linha_tempo`
--

CREATE TABLE `tbl_linha_tempo` (
  `id_linha_tempo` int NOT NULL,
  `titulo_linha_tempo` varchar(39) COLLATE utf8mb4_general_ci NOT NULL,
  `ano_linha_tempo` date NOT NULL,
  `descricao_linha_tempo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_linha_tempo` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_linha_tempo` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_linha_tempo` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_linha_tempo`
--

INSERT INTO `tbl_linha_tempo` (`id_linha_tempo`, `titulo_linha_tempo`, `ano_linha_tempo`, `descricao_linha_tempo`, `status_linha_tempo`, `data_criacao_linha_tempo`, `data_atualizacao_linha_tempo`) VALUES
(1, 'FUNDACAO', '2001-01-01', 'A Casa do Barista iniciou suas atividades oferecendo cafés especiais e atendimento acolhedor.', 'ATIVO', '2026-05-18 13:47:40', '2026-05-18 13:47:40'),
(2, 'Crescimento', '2002-03-06', 'Foi o inicio de nossa ascenção, mostrando que o serviço bem feito seria recompensado', 'ATIVO', '2026-05-18 13:51:13', '2026-05-18 13:51:13'),
(3, 'Mudança na equipe', '2003-05-08', 'Um momento turbulento na nossa história em que foi necessário, tomar decisões difíceis a respeito funcionários importantes que haviam se desviado de seu caminho', 'ATIVO', '2026-05-18 13:51:14', '2026-05-18 13:51:14'),
(4, 'Reconhecimento', '2004-01-07', 'Nesse momento a cada do barista com~çou a ser reconhecida por sua qualidade', 'ATIVO', '2026-05-18 13:51:16', '2026-05-18 13:51:16'),
(5, 'Reconhecimento digital', '2005-09-04', 'O seviço oferico fez com que clientes agradecidos que começaram a divulgar o estabelecimento em suas redes sociais', 'ATIVO', '2026-05-18 13:51:19', '2026-05-18 13:51:19'),
(6, 'Estabilidade', '2007-04-05', 'A partir deste momento a establidade foi uma grande mudança, mostrando que estamos alcançando novos níveis', 'ATIVO', '2026-05-18 13:51:20', '2026-05-18 13:51:20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id_news` int NOT NULL,
  `email_news` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `aceite_news` int NOT NULL DEFAULT '1',
  `data_criacao_news` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_news` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_news`
--

INSERT INTO `tbl_news` (`id_news`, `email_news`, `aceite_news`, `data_criacao_news`, `data_atualizacao_news`) VALUES
(1, 'pedro@gmail.com', 1, '2026-05-18 13:47:31', '2026-05-18 13:47:31'),
(2, 'rogerio_amantedecafe@gamil.com', 1, '2026-05-18 13:50:57', '2026-05-18 13:50:57'),
(3, 'mariocafe@gamil.com', 1, '2026-05-18 13:50:58', '2026-05-18 13:50:58'),
(4, 'laura@gmail.com', 1, '2026-05-18 13:50:59', '2026-05-18 13:50:59'),
(5, 'maria_menezes@gmail.com', 1, '2026-05-18 13:51:00', '2026-05-18 13:51:00'),
(6, 'gabrielcoffe@gmail.com', 1, '2026-05-18 13:51:01', '2026-05-18 13:51:01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_produto`
--

CREATE TABLE `tbl_produto` (
  `id_produto` int NOT NULL,
  `nome_produto` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `id_categoria` int NOT NULL,
  `descricao_curta_produto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao_longa_produto` text COLLATE utf8mb4_general_ci,
  `valor_produto` double(6,2) NOT NULL,
  `imagem_produto` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `destaque_produto` int NOT NULL DEFAULT '0',
  `status_produto` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_produto`
--

INSERT INTO `tbl_produto` (`id_produto`, `nome_produto`, `id_categoria`, `descricao_curta_produto`, `descricao_longa_produto`, `valor_produto`, `imagem_produto`, `destaque_produto`, `status_produto`, `data_criacao_produto`, `data_atualizacao_produto`) VALUES
(1, 'Café Longo', 1, 'Café longo feito no coador.', 'Café Goumert das montanhas frias do monte Centro Oeste.', 13.90, 'produto/cafe_longo.png', 1, 'ATIVO', '2026-05-18 13:47:46', '2026-05-18 13:47:46'),
(2, 'Café gelado', 2, 'Café gelado que ajuda a se concentrar no calor', 'Café feito com ingredientes exclusivos que ajudam no sabor e frescor do produto', 13.00, 'produto/cafe_gelado.png', 1, 'ATIVO', '2026-05-18 13:51:44', '2026-07-30 19:27:24'),
(3, 'Pudim', 3, 'Para adoçar o dia com cremosidade', 'Pudim cremoso e irresistível, preparado com ingredientes selecionados e uma receita especial que garante uma textura suave e um sabor marcante.', 15.00, 'produto/pudim.png', 1, 'ATIVO', '2026-05-18 13:53:33', '2026-09-01 18:00:57'),
(4, 'Pão de queijo', 4, 'Pão de queijo perfeito para sua manhã', 'Pão de queijo preparado com ingredientes selecionados, assado até ficar douradinho por fora e macio por dentro, perfeito para acompanhar seu café.', 16.00, 'produto/pao_de_queijo.png', 0, 'ATIVO', '2026-05-18 13:53:42', '2026-09-01 18:01:09'),
(5, 'Combo inverno', 5, 'Para se aquecer no frio esse combo traz um café longo junto de um pão de queijo', 'Uma combinação perfeita para os dias frios, com café longo e acompanhamentos deliciosos que trazem conforto e sabor para aquecer o seu dia.', 19.50, 'produto/combo_inverno.png', 1, 'ATIVO', '2026-05-18 13:53:49', '2026-09-01 18:01:23'),
(6, 'Chá Matte', 6, 'Traz a calmaria com um calor acolhedor', 'Feito com especiarias exclusivas que trazem um sabor unico', 13.00, 'produto/cha_matte.png', 0, 'INATIVO', '2026-05-18 13:53:53', '2026-06-02 15:45:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuarios` int NOT NULL,
  `nome_usuarios` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_usuarios` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `senha_usuarios` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_usuarios` varchar(65) COLLATE utf8mb4_general_ci NOT NULL,
  `nivel_usuarios` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `status_usuarios` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_usuarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_usuarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuarios`, `nome_usuarios`, `email_usuarios`, `senha_usuarios`, `foto_usuarios`, `nivel_usuarios`, `status_usuarios`, `data_criacao_usuarios`, `data_atualizacao_usuarios`) VALUES
(1, 'Ambrósio Fernandes', 'ambro@gmail,com', 's10910-', 'usuarios/ambrosio_fernandes.jpg', 'ADMINISTRADOR', 'ATIVO', '2026-05-18 13:56:15', '2026-05-18 13:56:15'),
(2, 'Carlos Silva', 'carlos@gmail,com', 'a3319', 'usuarios/carlos_silva.jpg', 'ADMINISTRADOR', 'ATIVO', '2026-05-18 13:56:17', '2026-05-18 13:56:17'),
(3, 'Pietro Correa', 'pietro@gmail,com', 's10929', 'usuarios/pietro_correa.jpg', 'ADMINISTRADOR', 'ATIVO', '2026-05-18 13:56:18', '2026-05-18 13:56:18'),
(4, 'Maria Silva', 'maria@gmail,com', '17992s', 'usuarios/maria_silva.jpg', 'ADMINISTRADOR', 'ATIVO', '2026-05-18 13:56:19', '2026-05-18 13:56:19'),
(5, 'Wesley Rasta', 'wesley@gmail,com', 'cdh390', 'usuarios/wesley_rasta.jpg', 'ADMINISTRADOR', 'ATIVO', '2026-05-18 13:56:20', '2026-05-18 13:56:20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_usuarios_venda`
--

CREATE TABLE `tbl_usuarios_venda` (
  `id_usuarios_venda` int NOT NULL,
  `id_usuarios` int NOT NULL,
  `id_venda` int NOT NULL,
  `data_criacao_usuarios_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_usuarios_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_usuarios_venda`
--

INSERT INTO `tbl_usuarios_venda` (`id_usuarios_venda`, `id_usuarios`, `id_venda`, `data_criacao_usuarios_venda`, `data_atualizacao_usuarios_venda`) VALUES
(1, 1, 1, '2026-05-18 13:50:30', '2026-05-18 13:50:30'),
(2, 2, 2, '2026-05-18 13:57:43', '2026-05-18 13:57:43'),
(3, 3, 3, '2026-05-18 13:59:12', '2026-05-18 13:59:12'),
(4, 3, 3, '2026-05-18 14:03:09', '2026-05-18 14:03:09'),
(5, 4, 4, '2026-05-18 14:04:06', '2026-05-18 14:04:06'),
(6, 5, 5, '2026-05-18 14:05:03', '2026-05-18 14:05:03'),
(7, 6, 6, '2026-05-18 14:06:11', '2026-05-18 14:06:11'),
(8, 1, 1, '2026-05-18 14:09:20', '2026-05-18 14:09:20'),
(9, 2, 2, '2026-05-18 14:10:07', '2026-05-18 14:10:07'),
(10, 3, 3, '2026-05-18 14:10:14', '2026-05-18 14:10:14'),
(11, 4, 4, '2026-05-18 14:10:18', '2026-05-18 14:10:18'),
(12, 1, 1, '2026-05-18 14:11:27', '2026-05-18 14:11:27'),
(13, 2, 2, '2026-05-18 14:11:41', '2026-05-18 14:11:41'),
(14, 3, 3, '2026-05-18 14:12:07', '2026-05-18 14:12:07'),
(15, 4, 4, '2026-05-18 14:13:09', '2026-05-18 14:13:09'),
(16, 2, 2, '2026-05-18 14:14:19', '2026-05-18 14:14:19'),
(17, 3, 3, '2026-05-18 14:14:26', '2026-05-18 14:14:26'),
(18, 4, 4, '2026-05-18 14:14:30', '2026-05-18 14:14:30'),
(19, 5, 5, '2026-05-18 14:14:57', '2026-05-18 14:14:57'),
(20, 6, 6, '2026-05-18 14:15:03', '2026-05-18 14:15:03');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_venda`
--

CREATE TABLE `tbl_venda` (
  `id_venda` int NOT NULL,
  `data_hora_venda` datetime NOT NULL,
  `valor_total_venda` double(10,2) NOT NULL,
  `forma_pagamento_venda` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `id_cliente` int NOT NULL,
  `status_venda` varchar(12) COLLATE utf8mb4_general_ci DEFAULT 'EM ANDAMENTO',
  `observacao_venda` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_venda`
--

INSERT INTO `tbl_venda` (`id_venda`, `data_hora_venda`, `valor_total_venda`, `forma_pagamento_venda`, `id_cliente`, `status_venda`, `observacao_venda`, `data_criacao_venda`, `data_atualizacao_venda`) VALUES
(1, '2026-05-18 13:50:04', 2.00, 'DÉBITO', 1, 'FINALIZADA', 'Está na mesa 27.', '2026-05-18 13:50:04', '2026-05-18 14:11:33'),
(2, '2026-05-18 13:56:37', 16.00, 'CRÉDITO', 2, 'FINALIZADA', 'Está na mesa 22.', '2026-05-18 13:56:37', '2026-05-27 17:12:59'),
(3, '2026-05-18 13:56:38', 6.00, 'CRÉDITO', 3, 'FINALIZADA', 'Está na mesa 20.', '2026-05-18 13:56:38', '2026-05-20 14:56:52'),
(4, '2026-05-18 13:56:39', 11.00, 'PIX', 4, 'FINALIZADA', 'Está na mesa 7.', '2026-05-18 13:56:39', '2026-05-20 16:54:11'),
(5, '2026-05-18 13:56:40', 16.00, 'PIX', 5, 'FINALIZADA', 'Está na mesa 2.', '2026-05-18 13:56:40', '2026-05-27 17:18:32'),
(6, '2026-05-18 13:56:41', 0.00, 'AGUARDANDO', 6, 'EM ANDAMENTO', 'Está na mesa 8.', '2026-05-18 13:56:41', '2026-05-18 13:56:41');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Índices de tabela `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

--
-- Índices de tabela `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Índices de tabela `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices de tabela `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Índices de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `tbl_contato`
--
ALTER TABLE `tbl_contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Índices de tabela `tbl_depoimento`
--
ALTER TABLE `tbl_depoimento`
  ADD PRIMARY KEY (`id_depoimento`),
  ADD KEY `fk_depoimento_cliente` (`id_cliente`);

--
-- Índices de tabela `tbl_galeria`
--
ALTER TABLE `tbl_galeria`
  ADD PRIMARY KEY (`id_galeria`);

--
-- Índices de tabela `tbl_horarios`
--
ALTER TABLE `tbl_horarios`
  ADD PRIMARY KEY (`id_horarios`);

--
-- Índices de tabela `tbl_itens_venda`
--
ALTER TABLE `tbl_itens_venda`
  ADD PRIMARY KEY (`id_itens_venda`),
  ADD KEY `fk_itens_venda_venda` (`id_venda`),
  ADD KEY `fk_itens_venda_produto` (`id_produto`);

--
-- Índices de tabela `tbl_linha_tempo`
--
ALTER TABLE `tbl_linha_tempo`
  ADD PRIMARY KEY (`id_linha_tempo`);

--
-- Índices de tabela `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id_news`),
  ADD UNIQUE KEY `email_news` (`email_news`);

--
-- Índices de tabela `tbl_produto`
--
ALTER TABLE `tbl_produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_produto_categoria` (`id_categoria`);

--
-- Índices de tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- Índices de tabela `tbl_usuarios_venda`
--
ALTER TABLE `tbl_usuarios_venda`
  ADD PRIMARY KEY (`id_usuarios_venda`),
  ADD KEY `fk_usuarios_venda_venda` (`id_venda`);

--
-- Índices de tabela `tbl_venda`
--
ALTER TABLE `tbl_venda`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `fk_venda_cliente` (`id_cliente`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  MODIFY `id_cliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_contato`
--
ALTER TABLE `tbl_contato`
  MODIFY `id_contato` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_depoimento`
--
ALTER TABLE `tbl_depoimento`
  MODIFY `id_depoimento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_galeria`
--
ALTER TABLE `tbl_galeria`
  MODIFY `id_galeria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_horarios`
--
ALTER TABLE `tbl_horarios`
  MODIFY `id_horarios` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_itens_venda`
--
ALTER TABLE `tbl_itens_venda`
  MODIFY `id_itens_venda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `tbl_linha_tempo`
--
ALTER TABLE `tbl_linha_tempo`
  MODIFY `id_linha_tempo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id_news` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_produto`
--
ALTER TABLE `tbl_produto`
  MODIFY `id_produto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuarios` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbl_usuarios_venda`
--
ALTER TABLE `tbl_usuarios_venda`
  MODIFY `id_usuarios_venda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tbl_venda`
--
ALTER TABLE `tbl_venda`
  MODIFY `id_venda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbl_depoimento`
--
ALTER TABLE `tbl_depoimento`
  ADD CONSTRAINT `fk_depoimento_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`);

--
-- Restrições para tabelas `tbl_itens_venda`
--
ALTER TABLE `tbl_itens_venda`
  ADD CONSTRAINT `fk_itens_venda_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`),
  ADD CONSTRAINT `fk_itens_venda_venda` FOREIGN KEY (`id_venda`) REFERENCES `tbl_venda` (`id_venda`);

--
-- Restrições para tabelas `tbl_produto`
--
ALTER TABLE `tbl_produto`
  ADD CONSTRAINT `fk_produto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `tbl_categoria` (`id_categoria`);

--
-- Restrições para tabelas `tbl_usuarios_venda`
--
ALTER TABLE `tbl_usuarios_venda`
  ADD CONSTRAINT `fk_usuarios_venda_venda` FOREIGN KEY (`id_venda`) REFERENCES `tbl_venda` (`id_venda`);

--
-- Restrições para tabelas `tbl_venda`
--
ALTER TABLE `tbl_venda`
  ADD CONSTRAINT `fk_venda_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
