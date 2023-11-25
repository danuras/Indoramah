-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2023 pada 13.22
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwebbuilder`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `advantages`
--

CREATE TABLE `advantages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `advantages`
--

INSERT INTO `advantages` (`id`, `title`, `description`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Sed nobis.', 'Consequatur atque qui earum sed. Eligendi earum modi libero. Quia accusantium ut saepe asperiores nam harum nobis est. Fugiat debitis illum earum temporibus. Non quo minus neque rerum sapiente ullam explicabo. Illum velit possimus quisquam dolorum. Aut necessitatibus modi quo voluptas earum quos qui aut. Nisi soluta iste similique quasi. Enim similique ipsam saepe quibusdam non unde. Asperiores vel quos excepturi aut aut qui velit. Non molestiae quaerat id qui quam labore id voluptatem.', 'images/demo/gallery/01.png', '2023-11-25 05:21:53', '2023-11-25 05:21:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `advantage_contents`
--

CREATE TABLE `advantage_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `advantage_contents`
--

INSERT INTO `advantage_contents` (`id`, `icon`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'images/demo/60x60.png', 'Sit.', 'Consequatur quod at aperiam labore occaecati repudiandae quasi. Qui consectetur qui recusandae earum autem nihil laudantium. Placeat pariatur accusamus numquam quia odio non non quo.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(2, 'images/demo/60x60.png', 'Et.', 'Iusto delectus et tempore et voluptates. Recusandae blanditiis impedit sunt accusantium. At laborum cum nisi quo culpa nulla.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(3, 'images/demo/60x60.png', 'Sint.', 'Est magni illum tempora beatae assumenda. In quos eveniet dolores voluptates aut numquam. Fugit omnis et optio quod qui. At beatae aut provident ex qui dolor omnis rem.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(4, 'images/demo/60x60.png', 'Sed.', 'Quos ipsa sed qui nulla blanditiis. Architecto ut illum deserunt. Voluptatem consectetur iste asperiores placeat.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(5, 'images/demo/60x60.png', 'Quo.', 'Mollitia vero adipisci alias aut. Et porro et eius sequi deleniti. Non alias ut recusandae qui. Illo voluptatem alias et aut.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(6, 'images/demo/60x60.png', 'Quo.', 'Et consequatur doloremque nesciunt recusandae dolorum sed assumenda commodi. Rerum iste ipsam molestiae nisi quisquam harum enim. Sit facere veritatis nulla.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(7, 'images/demo/60x60.png', 'Et.', 'Est expedita amet fugit temporibus. Quo non consectetur dolores voluptatem incidunt. Non dolore sint nihil provident. Illo optio voluptatem modi quam aut.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(8, 'images/demo/60x60.png', 'Vero.', 'Consequatur qui repellat aperiam quo provident. Et porro et dolores eos mollitia. Nemo ut ratione non hic illum. Id ex tempora sit deserunt sit sit.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(9, 'images/demo/60x60.png', 'Eum.', 'Doloribus provident rem nam nemo minima dolor non. Molestiae quia distinctio iste minima dolorem dolores. Error optio excepturi non qui.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(10, 'images/demo/60x60.png', 'Eum.', 'Suscipit nemo magni itaque voluptas aut ducimus deserunt. Enim voluptates eaque qui sunt id unde dolor. Accusantium est ipsum libero autem harum vitae voluptatem.', '2023-11-25 05:21:53', '2023-11-25 05:21:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `date_published` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image_url`, `date_published`, `author`, `text`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Ex.', 'images/demo/540x333.png', '1994-03-23 16:36:41', 'Mrs. Charlotte Balistreri', 'Laudantium commodi omnis nemo aperiam. Beatae cumque distinctio id asperiores maxime aperiam et. Labore consequatur fugit aliquid quibusdam animi. Quia voluptatem et nesciunt deserunt est et atque. Aut voluptas sint voluptatem suscipit. Accusantium exercitationem accusantium aliquam qui sunt modi incidunt. Sequi voluptate beatae suscipit aperiam.', 'https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(2, 'Quam.', 'images/demo/540x333.png', '1976-06-19 15:44:50', 'Emil Osinski', 'Molestias quos harum et incidunt repudiandae corporis voluptas. Ullam repudiandae pariatur culpa facere. Doloremque culpa tempore et et animi sequi doloribus. Et et est vitae soluta. Omnis sequi consequatur deleniti eveniet. Quia ut sit voluptas neque sunt consequatur at. Voluptatibus voluptas exercitationem consequatur quia. Quibusdam dolorem sapiente ex asperiores.', 'https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(3, 'Sit.', 'images/demo/540x333.png', '2018-03-14 04:29:16', 'Karianne Wisoky', 'Aut laboriosam accusamus porro tenetur at. Similique corrupti adipisci distinctio. Fugit doloremque velit reprehenderit. Eos minima omnis blanditiis ut dicta tenetur tenetur. Rerum illum est est dicta molestiae qui architecto asperiores. Et voluptatem doloribus beatae quaerat. Quae eius aut voluptas et et. Repellat voluptas enim necessitatibus rerum.', 'https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(4, 'Dolores.', 'images/demo/540x333.png', '2017-12-14 20:55:02', 'Blanca Nienow', 'Ea et quaerat nihil soluta voluptatem velit. Maxime animi molestiae in blanditiis sed dicta iure. Dolorem quia dicta totam animi vitae. Ut quaerat et blanditiis laudantium fuga delectus non. Pariatur fugit tenetur amet fugiat accusamus. Qui molestiae commodi dolor itaque quos illo. Deserunt provident non corporis qui. Accusamus quisquam mollitia eveniet voluptas.', 'https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(5, 'Facilis.', 'images/demo/540x333.png', '1978-07-17 05:18:51', 'Jamil Hahn', 'Eveniet aperiam suscipit ab quis autem. Odit aut architecto nesciunt deserunt et laboriosam autem consequatur. Quia nulla dignissimos nisi rerum. Voluptate nihil inventore repudiandae iusto ipsum. Commodi ratione aperiam autem fuga incidunt. Officiis non id minus non eos placeat qui illum. Aut minus voluptatem exercitationem nemo vero. At sit maxime sit repudiandae est ut. Dolor maiores quia sed. Tenetur repellendus reiciendis qui voluptate impedit qui. Impedit expedita quos modi at.', 'https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(6, 'Earum.', 'images/demo/540x333.png', '2011-12-03 16:21:23', 'Prof. Solon Bergnaum', 'Vel inventore tempore ullam ipsum dolor. Officiis dicta est aut nihil. Ratione illum qui non architecto. Adipisci voluptas magni non officiis et facilis. Molestias similique aut dignissimos ipsum quia magni. Ea eveniet ut adipisci nobis voluptas vel velit. Eos consequatur rerum sed in consectetur quae. Quo nulla officia magni ratione et explicabo. Nostrum quae accusamus et. Molestiae quia qui velit sequi aut harum dicta.', 'https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(7, 'Sunt.', 'images/demo/540x333.png', '2017-04-05 16:24:27', 'Horace Wintheiser', 'Omnis reprehenderit ipsam optio odit dolorem et aspernatur tempora. Nobis quaerat recusandae reprehenderit ut et placeat. Cupiditate ut numquam minus debitis consequatur blanditiis. Nesciunt veritatis omnis aut a. Rerum temporibus reiciendis amet autem modi. Unde consequuntur vel excepturi molestiae. Sit ipsum harum dolores nihil soluta tenetur. Velit id perferendis et et delectus.', 'https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(8, 'Eum.', 'images/demo/540x333.png', '1993-07-10 19:56:31', 'Salma Muller', 'Consequatur iure quo vero aperiam distinctio voluptas. Non deserunt debitis ipsam quia nobis numquam eius. Unde consequatur laboriosam modi qui maxime enim voluptatum est. Dolore consequatur itaque non itaque labore aut et. Nihil voluptatum laudantium quos qui officiis iure. Delectus perspiciatis ut tempore tenetur inventore hic amet.', 'https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(9, 'Maiores.', 'images/demo/540x333.png', '1992-09-15 02:38:47', 'Ms. Monique Stehr', 'Dicta similique fugit maxime omnis assumenda alias eos. Quia voluptatem culpa totam. Et tempora eos fugiat dolorem enim sed. Possimus voluptate ut nostrum aut perspiciatis excepturi doloribus. Voluptatem sint magnam id odit ullam sit. Corporis doloribus ullam doloremque dolores reiciendis natus. Et magnam dolorem enim est possimus non consequuntur. Et minus quidem optio rerum. Laboriosam corporis numquam porro eum.', 'https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(10, 'Et.', 'images/demo/540x333.png', '1985-12-31 12:41:08', 'Melody Bednar', 'Ut commodi ullam earum accusamus quia. Consequuntur at dolor vel voluptatem in. Et fugiat et perferendis temporibus consequatur pariatur. Facere praesentium ut consequatur voluptas. Autem a eum repudiandae nam dignissimos recusandae et. Possimus labore molestias est veritatis non rem expedita. Amet sapiente numquam nam iure. Quae officia quasi qui quas. Pariatur sunt et error adipisci. Ea voluptatum repellendus ratione et. Fugit eligendi aspernatur mollitia nesciunt earum.', 'https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/', '2023-11-25 05:21:54', '2023-11-25 05:21:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content_type` varchar(255) DEFAULT NULL,
  `is_clickable` tinyint(1) NOT NULL DEFAULT 0,
  `text` longtext DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `card_box_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cards`
--

INSERT INTO `cards` (`id`, `image_url`, `title`, `content_type`, `is_clickable`, `text`, `link`, `card_box_id`, `created_at`, `updated_at`) VALUES
(1, 'images/demo/gallery/01.png', NULL, NULL, 0, '<b>Proyek:</b>\n            <p>Nama Proyek</p>\n            <br>\n            <b>Lokasi:</b>\n            <p>Nama Lokasi</p>\n            <br>\n            <b>Produk terinstall:</b>\n            <p>produk-1</p>\n            <p>produk-2</p>\n            <p>produk-3</p>', 'https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(2, 'images/demo/gallery/01.png', NULL, NULL, 0, '<b>Proyek:</b>\n            <p>Nama Proyek</p>\n            <br>\n            <b>Lokasi:</b>\n            <p>Nama Lokasi</p>\n            <br>\n            <b>Produk terinstall:</b>\n            <p>produk-1</p>\n            <p>produk-2</p>\n            <p>produk-3</p>', 'https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(3, 'images/demo/gallery/01.png', NULL, NULL, 0, '<b>Proyek:</b>\n            <p>Nama Proyek</p>\n            <br>\n            <b>Lokasi:</b>\n            <p>Nama Lokasi</p>\n            <br>\n            <b>Produk terinstall:</b>\n            <p>produk-1</p>\n            <p>produk-2</p>\n            <p>produk-3</p>', 'https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(4, 'images/demo/gallery/01.png', NULL, NULL, 0, '<b>Proyek:</b>\n            <p>Nama Proyek</p>\n            <br>\n            <b>Lokasi:</b>\n            <p>Nama Lokasi</p>\n            <br>\n            <b>Produk terinstall:</b>\n            <p>produk-1</p>\n            <p>produk-2</p>\n            <p>produk-3</p>', 'https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(5, 'images/demo/gallery/01.png', NULL, NULL, 0, '<b>Proyek:</b>\n            <p>Nama Proyek</p>\n            <br>\n            <b>Lokasi:</b>\n            <p>Nama Lokasi</p>\n            <br>\n            <b>Produk terinstall:</b>\n            <p>produk-1</p>\n            <p>produk-2</p>\n            <p>produk-3</p>', 'https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(6, 'images/demo/gallery/01.png', NULL, NULL, 0, '<b>Proyek:</b>\n            <p>Nama Proyek</p>\n            <br>\n            <b>Lokasi:</b>\n            <p>Nama Lokasi</p>\n            <br>\n            <b>Produk terinstall:</b>\n            <p>produk-1</p>\n            <p>produk-2</p>\n            <p>produk-3</p>', 'https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(7, 'images/demo/gallery/01.png', NULL, NULL, 0, '<b>Proyek:</b>\n            <p>Nama Proyek</p>\n            <br>\n            <b>Lokasi:</b>\n            <p>Nama Lokasi</p>\n            <br>\n            <b>Produk terinstall:</b>\n            <p>produk-1</p>\n            <p>produk-2</p>\n            <p>produk-3</p>', 'https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(8, 'images/demo/gallery/01.png', NULL, NULL, 0, '<b>Proyek:</b>\n            <p>Nama Proyek</p>\n            <br>\n            <b>Lokasi:</b>\n            <p>Nama Lokasi</p>\n            <br>\n            <b>Produk terinstall:</b>\n            <p>produk-1</p>\n            <p>produk-2</p>\n            <p>produk-3</p>', 'https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(9, 'images/demo/gallery/01.png', NULL, NULL, 0, '<b>Proyek:</b>\n            <p>Nama Proyek</p>\n            <br>\n            <b>Lokasi:</b>\n            <p>Nama Lokasi</p>\n            <br>\n            <b>Produk terinstall:</b>\n            <p>produk-1</p>\n            <p>produk-2</p>\n            <p>produk-3</p>', 'https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(10, 'images/demo/gallery/01.png', NULL, NULL, 0, '<b>Proyek:</b>\n            <p>Nama Proyek</p>\n            <br>\n            <b>Lokasi:</b>\n            <p>Nama Lokasi</p>\n            <br>\n            <b>Produk terinstall:</b>\n            <p>produk-1</p>\n            <p>produk-2</p>\n            <p>produk-3</p>', 'https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(11, 'images/demo/gallery/02.png', 'Labore.', 'content-1', 1, NULL, NULL, 2, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(12, 'images/demo/gallery/02.png', 'Qui.', 'content-2', 1, NULL, NULL, 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(13, 'images/demo/gallery/02.png', 'Est.', 'content-1', 1, NULL, NULL, 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(14, 'images/demo/gallery/02.png', 'Id veniam.', 'content-1', 1, NULL, NULL, 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(15, 'images/demo/gallery/02.png', 'Sequi.', 'content-2', 1, NULL, NULL, 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(16, 'images/demo/gallery/02.png', 'Eos.', 'content-2', 1, NULL, NULL, 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(17, 'images/demo/gallery/02.png', 'Dolores.', 'content-1', 1, NULL, NULL, 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(18, 'images/demo/gallery/01.png', 'Et ad.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(19, 'images/demo/gallery/01.png', 'Possimus.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(20, 'images/demo/gallery/01.png', 'Delectus.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(21, 'images/demo/gallery/01.png', 'Occaecati.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(22, 'images/demo/gallery/01.png', 'Molestias.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(23, 'images/demo/gallery/01.png', 'Aliquam.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(24, 'images/demo/gallery/01.png', 'Est nihil.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(25, 'images/demo/gallery/01.png', 'Dicta.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(26, 'images/demo/gallery/01.png', 'Odit.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(27, 'images/demo/gallery/01.png', 'Aut velit.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(28, 'images/demo/gallery/01.png', 'Rerum.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(29, 'images/demo/gallery/01.png', 'Facilis.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(30, 'images/demo/gallery/01.png', 'Sed.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(31, 'images/demo/gallery/01.png', 'Nemo qui.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(32, 'images/demo/gallery/01.png', 'Cum.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(33, 'images/demo/gallery/01.png', 'Qui.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(34, 'images/demo/gallery/01.png', 'Aliquam.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(35, 'images/demo/gallery/01.png', 'Aut ipsa.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(36, 'images/demo/gallery/01.png', 'Neque nam.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(37, 'images/demo/gallery/01.png', 'Vel ut.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(38, 'images/demo/gallery/01.png', 'Iste et.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(39, 'images/demo/gallery/01.png', 'Quis.', NULL, 0, NULL, NULL, 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `card_boxes`
--

CREATE TABLE `card_boxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `card_boxes`
--

INSERT INTO `card_boxes` (`id`, `card_type`, `title`, `info`, `created_at`, `updated_at`) VALUES
(1, 'card-1', 'Itaque.', 'Qui eveniet aut omnis aut.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(2, 'card-2', 'Dolore.', 'Dicta officiis et minus quas.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(3, 'card-3', 'Nemo.', 'Error sunt cum ratione aut.', '2023-11-25 05:21:54', '2023-11-25 05:21:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `card_types`
--

CREATE TABLE `card_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `text` longtext DEFAULT NULL,
  `whatsapp_message` varchar(255) DEFAULT NULL,
  `sub_content_title` varchar(255) DEFAULT NULL,
  `card_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `card_types`
--

INSERT INTO `card_types` (`id`, `title`, `description`, `image_url`, `text`, `whatsapp_message`, `sub_content_title`, `card_id`, `created_at`, `updated_at`) VALUES
(1, 'Facere sunt quaerat.', 'Dolores aut tempore ipsam quia. Quia doloremque dolore minima exercitationem aut qui illo.', 'images/demo/gallery/02.png', '<p  class=\"text_left\">(penjelasan) Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptas doloremque sapiente modi ducimus doloribus dignissimos iusto illo ut quaerat, aliquam, vero accusamus ratione nobis. Eligendi, quod ducimus? Distinctio sed, quos, quod provident illo nobis dolore commodi voluptates fugiat corrupti, eaque unde voluptatum dolorum! Nesciunt officiis excepturi quos beatae, dolorem dicta voluptatibus quis laboriosam voluptatem earum consequatur neque quo ut maiores, incidunt totam atque nobis sequi. Molestiae, ratione iste molestias voluptatum saepe itaque tempore, atque nihil dicta ipsum aliquid odit!</p>\r\n            <ul>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n            </ul>', 'Ea saepe ea.', 'Labore.', 11, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(2, 'Quod omnis ut magni.', 'Eum culpa fugit suscipit. Fuga consequuntur nesciunt dolores libero occaecati.', NULL, NULL, 'Molestias doloribus.', 'In.', 12, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(3, 'Est non aperiam sed.', 'Aut est dolore atque. Et a dolorum temporibus quam facilis. Non ipsum reiciendis fugiat mollitia.', 'images/demo/gallery/02.png', '<p  class=\"text_left\">(penjelasan) Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptas doloremque sapiente modi ducimus doloribus dignissimos iusto illo ut quaerat, aliquam, vero accusamus ratione nobis. Eligendi, quod ducimus? Distinctio sed, quos, quod provident illo nobis dolore commodi voluptates fugiat corrupti, eaque unde voluptatum dolorum! Nesciunt officiis excepturi quos beatae, dolorem dicta voluptatibus quis laboriosam voluptatem earum consequatur neque quo ut maiores, incidunt totam atque nobis sequi. Molestiae, ratione iste molestias voluptatum saepe itaque tempore, atque nihil dicta ipsum aliquid odit!</p>\r\n            <ul>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n            </ul>', 'Dicta quisquam.', 'Quis.', 13, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(4, 'Aut nesciunt.', 'Id sunt eius dolor. Ut ad eligendi vel aut accusamus. Eos quisquam totam rerum.', 'images/demo/gallery/02.png', '<p  class=\"text_left\">(penjelasan) Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptas doloremque sapiente modi ducimus doloribus dignissimos iusto illo ut quaerat, aliquam, vero accusamus ratione nobis. Eligendi, quod ducimus? Distinctio sed, quos, quod provident illo nobis dolore commodi voluptates fugiat corrupti, eaque unde voluptatum dolorum! Nesciunt officiis excepturi quos beatae, dolorem dicta voluptatibus quis laboriosam voluptatem earum consequatur neque quo ut maiores, incidunt totam atque nobis sequi. Molestiae, ratione iste molestias voluptatum saepe itaque tempore, atque nihil dicta ipsum aliquid odit!</p>\r\n            <ul>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n            </ul>', 'Autem quo vitae.', 'Dolor.', 14, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(5, 'Eveniet doloribus.', 'Et dolorum vero id vero aut. Aut quos enim ut voluptas et ad. Consectetur quasi sint sequi.', NULL, NULL, 'Dolorem excepturi.', 'Facere et.', 15, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(6, 'Ipsam tempore sed.', 'Necessitatibus quaerat culpa earum corrupti natus rerum. Tempora est quam tenetur sed.', NULL, NULL, 'Eaque laudantium.', 'Facere.', 16, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(7, 'Asperiores et eius.', 'Ut tenetur vero nesciunt qui ut quisquam facere numquam. Deleniti saepe quas illo ad.', 'images/demo/gallery/02.png', '<p  class=\"text_left\">(penjelasan) Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptas doloremque sapiente modi ducimus doloribus dignissimos iusto illo ut quaerat, aliquam, vero accusamus ratione nobis. Eligendi, quod ducimus? Distinctio sed, quos, quod provident illo nobis dolore commodi voluptates fugiat corrupti, eaque unde voluptatum dolorum! Nesciunt officiis excepturi quos beatae, dolorem dicta voluptatibus quis laboriosam voluptatem earum consequatur neque quo ut maiores, incidunt totam atque nobis sequi. Molestiae, ratione iste molestias voluptatum saepe itaque tempore, atque nihil dicta ipsum aliquid odit!</p>\r\n            <ul>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n                <li><p class=\"text_left\"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>\r\n            </ul>', 'Mollitia quo.', 'Magnam.', 17, '2023-11-25 05:21:54', '2023-11-25 05:21:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_text_color` varchar(255) NOT NULL DEFAULT '#FFFFFF',
  `common_text_color` varchar(255) NOT NULL DEFAULT '#A6A6A6',
  `background_color_1` varchar(255) NOT NULL DEFAULT '#FFFFFF',
  `background_color_2` varchar(255) NOT NULL DEFAULT '#151517',
  `card_color` varchar(255) NOT NULL DEFAULT '#151517',
  `highlight_color` varchar(255) NOT NULL DEFAULT '#D3B48D',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `colors`
--

INSERT INTO `colors` (`id`, `header_text_color`, `common_text_color`, `background_color_1`, `background_color_2`, `card_color`, `highlight_color`, `created_at`, `updated_at`) VALUES
(1, '#FFFFFF', '#A6A6A6', '#FFFFFF', '#151517', '#151517', '#D3B48D', '2023-11-25 05:21:53', '2023-11-25 05:21:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company_profiles`
--

CREATE TABLE `company_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `whatsapp_message` varchar(255) NOT NULL,
  `mission` longtext NOT NULL,
  `vision` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `description`, `image_url`, `whatsapp_message`, `mission`, `vision`, `created_at`, `updated_at`) VALUES
(1, 'Sit ut vitae ut quaerat rerum nam distinctio quae. Animi id molestiae sit minima voluptatem est voluptatem natus. Neque temporibus ullam aut sit voluptates numquam. Iure est velit qui exercitationem impedit iste. Dignissimos dolorem repellendus sed nisi et et et. Et tenetur et optio incidunt. Fugit ab ea iusto aut consequatur.', 'images/demo/gallery/01.png', 'Unde modi et ut.', 'Et tempore consequatur vel optio similique. Porro a cum sit totam in nulla culpa. Beatae mollitia nihil beatae enim.', 'Quis ratione omnis quo itaque consequuntur deleniti omnis. Nesciunt cumque dicta eos placeat veritatis molestiae repellat. Sapiente sed incidunt quia iure odit.', '2023-11-25 05:21:53', '2023-11-25 05:21:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `whatsapp_message` varchar(255) NOT NULL,
  `call_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `info_contact` longtext NOT NULL,
  `embeded_map_url` longtext DEFAULT NULL,
  `info_location` longtext DEFAULT NULL,
  `background_contact` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `whatsapp`, `whatsapp_message`, `call_number`, `address`, `email`, `info_contact`, `embeded_map_url`, `info_location`, `background_contact`, `created_at`, `updated_at`) VALUES
(1, '+1.651.744.4784', 'Molestias.', '218.951.5393', '821 Funk Mount Suite 298\nWest Samir, NV 12114-0219', 'ahaag@hotmail.com', '<h3>Kami Siap Melayani Anda Pesan Sekarang!</h3>\r\n            <p>Waktu Operasional:</p>\r\n            <p>Senin s/d Sabtu (Kecuali Hari Libur Nasional)</p>\r\n            <p>8:00 s/d 17:00 WIB</p>\r\n            <p>Anda dapat menghubungi kami melalui:</p>\r\n            <p>Telepon: +62 888-8888-888</p>\r\n            <p>Whatsapp: +62 888-8888-888</p>\r\n            <p>Email: admin@gmail.com</p>\r\n            <p class=\"text_left\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia esse facere\r\n                voluptatem quam reiciendis quod corrupti alias, cumque aliquid provident magnam voluptates\r\n                similique ducimus qui. Dolore autem minima reiciendis architecto?</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63273.86296260176!2d110.26389765952453!3d-7.6166475801990705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8b1c5e2d7805%3A0xb323b526d2f7ce2e!2sSMK%20Negeri%201%20Salam!5e0!3m2!1sen!2sid!4v1699502834176!5m2!1sen!2sid', 'Est dolorem sunt et ex minima fugiat dignissimos.', 'images/demo/backgrounds/01.png', '2023-11-25 05:21:54', '2023-11-25 05:21:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_types`
--

CREATE TABLE `content_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` longtext DEFAULT NULL,
  `card_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `content_types`
--

INSERT INTO `content_types` (`id`, `image_url`, `title`, `text`, `card_type_id`, `created_at`, `updated_at`) VALUES
(1, 'images/demo/gallery/01.png', 'Quam.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(2, 'images/demo/gallery/01.png', 'Atque.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(3, 'images/demo/gallery/01.png', 'Ut.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(4, 'images/demo/gallery/01.png', 'Dolorem.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(5, 'images/demo/gallery/01.png', 'Fuga.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(6, 'images/demo/gallery/01.png', 'Aut.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(7, 'images/demo/gallery/01.png', 'Ullam.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(8, 'images/demo/gallery/01.png', 'Nihil.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(9, 'images/demo/gallery/01.png', 'Aut eum.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(10, 'images/demo/gallery/01.png', 'Vel id.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(11, 'images/demo/gallery/01.png', 'Non iusto.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(12, 'images/demo/gallery/01.png', 'Corporis.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(13, 'images/demo/gallery/01.png', 'Error.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(14, 'images/demo/gallery/01.png', 'Natus non.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(15, 'images/demo/gallery/01.png', 'Officiis.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(16, 'images/demo/gallery/01.png', 'Aperiam.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(17, 'images/demo/gallery/01.png', 'Ullam et.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(18, 'images/demo/gallery/01.png', 'Eum vero.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(19, 'images/demo/gallery/01.png', 'Delectus.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(20, 'images/demo/gallery/01.png', 'Possimus.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 1, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(21, NULL, 'Ab.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(22, NULL, 'Rerum.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(23, NULL, 'Eius.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(24, NULL, 'Eum non.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(25, NULL, 'Itaque.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(26, NULL, 'Omnis aut.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(27, NULL, 'Numquam.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(28, NULL, 'Et.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(29, NULL, 'Nam at.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(30, NULL, 'Ducimus.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(31, NULL, 'Quisquam.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(32, NULL, 'Facilis.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(33, NULL, 'Sint amet.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(34, NULL, 'Itaque.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(35, NULL, 'Ipsam.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(36, NULL, 'Autem et.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(37, NULL, 'Ea et.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(38, NULL, 'Dolore.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(39, NULL, 'Est quae.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(40, NULL, 'A porro.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 2, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(41, 'images/demo/gallery/01.png', 'Nesciunt.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(42, 'images/demo/gallery/01.png', 'Fuga.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(43, 'images/demo/gallery/01.png', 'Provident.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(44, 'images/demo/gallery/01.png', 'Minima.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(45, 'images/demo/gallery/01.png', 'Minima.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(46, 'images/demo/gallery/01.png', 'Quos.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(47, 'images/demo/gallery/01.png', 'Voluptas.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(48, 'images/demo/gallery/01.png', 'Incidunt.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(49, 'images/demo/gallery/01.png', 'Eius eum.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(50, 'images/demo/gallery/01.png', 'Tempora.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(51, 'images/demo/gallery/01.png', 'Omnis.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(52, 'images/demo/gallery/01.png', 'At.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(53, 'images/demo/gallery/01.png', 'Aliquam.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(54, 'images/demo/gallery/01.png', 'Cumque.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(55, 'images/demo/gallery/01.png', 'Nemo.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(56, 'images/demo/gallery/01.png', 'Ullam.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(57, 'images/demo/gallery/01.png', 'Nihil.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(58, 'images/demo/gallery/01.png', 'Dicta.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(59, 'images/demo/gallery/01.png', 'Ut vero.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(60, 'images/demo/gallery/01.png', 'Qui est.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 3, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(61, 'images/demo/gallery/01.png', 'Libero.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(62, 'images/demo/gallery/01.png', 'Quo natus.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(63, 'images/demo/gallery/01.png', 'Quae.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(64, 'images/demo/gallery/01.png', 'Qui eius.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(65, 'images/demo/gallery/01.png', 'Quia.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(66, 'images/demo/gallery/01.png', 'Tempore.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(67, 'images/demo/gallery/01.png', 'Nisi quo.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(68, 'images/demo/gallery/01.png', 'Sit quo.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(69, 'images/demo/gallery/01.png', 'Similique.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(70, 'images/demo/gallery/01.png', 'Dolor est.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(71, 'images/demo/gallery/01.png', 'Quo eaque.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(72, 'images/demo/gallery/01.png', 'Mollitia.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(73, 'images/demo/gallery/01.png', 'Sed ut.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(74, 'images/demo/gallery/01.png', 'Eius.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(75, 'images/demo/gallery/01.png', 'Ducimus.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(76, 'images/demo/gallery/01.png', 'Eligendi.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(77, 'images/demo/gallery/01.png', 'Cum.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(78, 'images/demo/gallery/01.png', 'Et dicta.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(79, 'images/demo/gallery/01.png', 'Soluta.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(80, 'images/demo/gallery/01.png', 'Vel.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(81, NULL, 'Et sed.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(82, NULL, 'Ut nisi.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(83, NULL, 'Quod.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(84, NULL, 'Et.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(85, NULL, 'Natus.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(86, NULL, 'Dolores.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(87, NULL, 'Optio.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(88, NULL, 'Omnis.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(89, NULL, 'Qui eos.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(90, NULL, 'Sit ut.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(91, NULL, 'Quia.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(92, NULL, 'Magni.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(93, NULL, 'Ipsam quo.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(94, NULL, 'Numquam.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(95, NULL, 'Ab culpa.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(96, NULL, 'Aut.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(97, NULL, 'Sunt.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(98, NULL, 'Ut saepe.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(99, NULL, 'Et amet.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(100, NULL, 'Quidem.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(101, NULL, 'Possimus.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(102, NULL, 'Sed sed.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(103, NULL, 'Omnis.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(104, NULL, 'Et.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(105, NULL, 'Maiores.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(106, NULL, 'Magnam.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(107, NULL, 'Odio.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(108, NULL, 'Eum.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(109, NULL, 'Aut iusto.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(110, NULL, 'Vitae.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(111, NULL, 'Numquam.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(112, NULL, 'Explicabo.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(113, NULL, 'Harum.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(114, NULL, 'Qui iste.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(115, NULL, 'Sequi.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(116, NULL, 'Sed esse.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(117, NULL, 'Nobis vel.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(118, NULL, 'Suscipit.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(119, NULL, 'Earum.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(120, NULL, 'Incidunt.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>\n                    <hr>\n                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates\n                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>', 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(121, 'images/demo/gallery/01.png', 'Et et.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(122, 'images/demo/gallery/01.png', 'Nulla.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(123, 'images/demo/gallery/01.png', 'Animi.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(124, 'images/demo/gallery/01.png', 'Eveniet.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(125, 'images/demo/gallery/01.png', 'Accusamus.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(126, 'images/demo/gallery/01.png', 'Voluptas.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(127, 'images/demo/gallery/01.png', 'Impedit.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(128, 'images/demo/gallery/01.png', 'Odit enim.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(129, 'images/demo/gallery/01.png', 'Non et.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(130, 'images/demo/gallery/01.png', 'Velit ex.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(131, 'images/demo/gallery/01.png', 'Iusto ad.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(132, 'images/demo/gallery/01.png', 'Iure a.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(133, 'images/demo/gallery/01.png', 'Labore.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(134, 'images/demo/gallery/01.png', 'Quisquam.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(135, 'images/demo/gallery/01.png', 'Est.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(136, 'images/demo/gallery/01.png', 'Rerum.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(137, 'images/demo/gallery/01.png', 'Sit.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(138, 'images/demo/gallery/01.png', 'Molestias.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(139, 'images/demo/gallery/01.png', 'Et.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(140, 'images/demo/gallery/01.png', 'Eligendi.', '<div class = \"w-100 text-left\">\n                    <b>Judul</b>\n                    <p>informasi-1</p>\n                    <p>informasi-2</p>\n                    <p>informasi-3</p>\n                </div>', 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `email_services`
--

CREATE TABLE `email_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_sender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_receiver` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1021, '2014_10_12_000000_create_users_table', 1),
(1022, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(1023, '2023_11_11_041154_create_email_services_table', 1),
(1024, '2023_11_12_073918_create_web_attributes_table', 1),
(1025, '2023_11_12_101840_create_contacts_table', 1),
(1026, '2023_11_12_102155_create_company_profiles_table', 1),
(1027, '2023_11_12_102300_create_order_flows_table', 1),
(1028, '2023_11_12_102347_create_web_contents_table', 1),
(1029, '2023_11_12_102645_create_advantage_contents_table', 1),
(1030, '2023_11_12_103327_create_blogs_table', 1),
(1031, '2023_11_12_103432_create_testimonies_table', 1),
(1032, '2023_11_12_103530_create_advantages_table', 1),
(1033, '2023_11_12_112327_create_card_boxes_table', 1),
(1034, '2023_11_12_112523_create_cards_table', 1),
(1035, '2023_11_12_112924_create_card_types_table', 1),
(1036, '2023_11_12_113922_create_content_types_table', 1),
(1037, '2023_11_14_072927_create_social_media_table', 1),
(1038, '2023_11_14_114942_create_colors_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_flows`
--

CREATE TABLE `order_flows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order_flows`
--

INSERT INTO `order_flows` (`id`, `icon`, `value`, `created_at`, `updated_at`) VALUES
(1, 'images/demo/60x60.png', 'Et quas.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(2, 'images/demo/60x60.png', 'Et.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(3, 'images/demo/60x60.png', 'Aut.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(4, 'images/demo/60x60.png', 'Id harum.', '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(5, 'images/demo/60x60.png', 'Et ab.', '2023-11-25 05:21:53', '2023-11-25 05:21:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `social_media`
--

INSERT INTO `social_media` (`id`, `facebook`, `twitter`, `linkedin`, `instagram`, `google_plus`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'https://danuras.000webhostapp.com/', NULL, 'https://danuras.000webhostapp.com/', 'https://danuras.000webhostapp.com/', 'https://danuras.000webhostapp.com/', 'https://danuras.000webhostapp.com/', '2023-11-25 05:21:54', '2023-11-25 05:21:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `photo_profile` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonies`
--

INSERT INTO `testimonies` (`id`, `value`, `photo_profile`, `name`, `job`, `created_at`, `updated_at`) VALUES
(1, 'Quisquam nemo nihil.', 'images/demo/60x60.png', 'Lenore Mills', 'ccc', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(2, 'Maiores nulla.', 'images/demo/60x60.png', 'Cayla Will', 'Carpet Installer', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(3, 'Quidem quidem ut et.', 'images/demo/60x60.png', 'Raymundo Kshlerin', 'Cultural Studies Teacher', '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(4, 'Dolorem dolores aut.', 'images/demo/60x60.png', 'Layla Schulist', 'Dispatcher', '2023-11-25 05:21:54', '2023-11-25 05:21:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `token_expired_at` datetime DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `token`, `token_expired_at`, `email`, `is_primary`, `password`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'a@a', 1, '$2y$12$Zk1ULYodJxgz6YGfM4mLWuUDfOn8/o6cGysi9uJ0xl1kWhn3jldGW', '2023-11-25 05:21:53', '2023-11-25 05:21:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_attributes`
--

CREATE TABLE `web_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) NOT NULL,
  `long_title` varchar(255) NOT NULL,
  `main_heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `background_testimonies` varchar(255) DEFAULT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `web_attributes`
--

INSERT INTO `web_attributes` (`id`, `title`, `icon`, `short_description`, `long_title`, `main_heading`, `sub_heading`, `background_image`, `background_testimonies`, `language`, `created_at`, `updated_at`) VALUES
(1, 'Eum.', 'images/demo/60x60.png', 'Autem fugit velit.', 'Qui placeat.', 'A dolor cumque sed.', 'Et eos ut eos fugiat.', 'images/demo/backgrounds/01.png', 'images/demo/backgrounds/02.png', 'id', '2023-11-25 05:21:53', '2023-11-25 05:21:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_contents`
--

CREATE TABLE `web_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) NOT NULL,
  `card_box_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rank` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `web_contents`
--

INSERT INTO `web_contents` (`id`, `content_type`, `card_box_id`, `rank`, `created_at`, `updated_at`) VALUES
(1, 'card', 1, 1, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(2, 'advantage', NULL, 2, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(3, 'card', 2, 3, '2023-11-25 05:21:53', '2023-11-25 05:21:53'),
(4, 'card', 3, 4, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(5, 'testimony', NULL, 5, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(6, 'blog', NULL, 6, '2023-11-25 05:21:54', '2023-11-25 05:21:54'),
(7, 'maps', NULL, 7, '2023-11-25 05:21:54', '2023-11-25 05:21:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `advantage_contents`
--
ALTER TABLE `advantage_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cards_card_box_id_index` (`card_box_id`);

--
-- Indeks untuk tabel `card_boxes`
--
ALTER TABLE `card_boxes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `card_types`
--
ALTER TABLE `card_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `card_types_card_id_index` (`card_id`);

--
-- Indeks untuk tabel `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `content_types`
--
ALTER TABLE `content_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_types_card_type_id_index` (`card_type_id`);

--
-- Indeks untuk tabel `email_services`
--
ALTER TABLE `email_services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_flows`
--
ALTER TABLE `order_flows`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `web_attributes`
--
ALTER TABLE `web_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_contents`
--
ALTER TABLE `web_contents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `advantage_contents`
--
ALTER TABLE `advantage_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `card_boxes`
--
ALTER TABLE `card_boxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `card_types`
--
ALTER TABLE `card_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `company_profiles`
--
ALTER TABLE `company_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `content_types`
--
ALTER TABLE `content_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT untuk tabel `email_services`
--
ALTER TABLE `email_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1039;

--
-- AUTO_INCREMENT untuk tabel `order_flows`
--
ALTER TABLE `order_flows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `web_attributes`
--
ALTER TABLE `web_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `web_contents`
--
ALTER TABLE `web_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_card_box_id_foreign` FOREIGN KEY (`card_box_id`) REFERENCES `card_boxes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `card_types`
--
ALTER TABLE `card_types`
  ADD CONSTRAINT `card_types_card_id_foreign` FOREIGN KEY (`card_id`) REFERENCES `cards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `content_types`
--
ALTER TABLE `content_types`
  ADD CONSTRAINT `content_types_card_type_id_foreign` FOREIGN KEY (`card_type_id`) REFERENCES `card_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
