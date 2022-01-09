-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2022 pada 11.42
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeroastry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `username`, `email`, `noHP`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Admin Cofee', 'admin', 'wads@gmail.com', '0878214', '$2y$10$Mluc8odaLiRKgcwYCorx5.PflyHsBq.7bmZ4A8pdYDEgYartZEhEK', '2022-01-07 09:43:40', '2022-01-07 09:43:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id` bigint(50) UNSIGNED NOT NULL,
  `id_pembeli` bigint(50) UNSIGNED DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kode_pos` bigint(20) DEFAULT NULL,
  `nama_jalan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`id`, `id_pembeli`, `provinsi`, `kota`, `kecamatan`, `kode_pos`, `nama_jalan`, `created_at`, `updated_at`) VALUES
(1, 3, 'Waka-waka', 'Pontianak', 'Rancaekek', 213421, 'Gedung merah putih', '2022-01-01 20:47:27', '2022-01-08 20:19:48'),
(4, 7, 'sadksaj', 'Pontianak', 'Wakanda', 1234, 'sakdjak', '2022-01-07 06:56:24', '2022-01-07 07:02:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chart`
--

CREATE TABLE `chart` (
  `id` bigint(255) UNSIGNED NOT NULL,
  `id_pembeli` bigint(255) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `berat` bigint(20) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chart`
--

INSERT INTO `chart` (`id`, `id_pembeli`, `nama_produk`, `berat`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(13, 7, 'Cofee Tubruk', 500, 200000, '30fb412c-8e35-4825-bd9d-fe58c79130eb.jpg', '2022-01-07 03:34:02', '2022-01-07 03:34:02'),
(24, 3, 'Ijen CM Natural', 1400, 40000, '1641697738.jpg', '2022-01-08 20:19:00', '2022-01-08 20:19:00'),
(25, 3, 'Kopi Robusta 200', 200, 40000, '1641617912.jpg', '2022-01-08 20:19:07', '2022-01-08 20:19:07'),
(26, 3, 'Cofee Temanggung', 350, 75000, '006705ae05d0425320bda4b5caedc5c7.jpg', '2022-01-08 20:19:14', '2022-01-08 20:19:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama_lengkap`, `username`, `email`, `noHP`, `alamat`, `password`, `created_at`, `updated_at`) VALUES
(3, 'M Haritsah', 'haritsah', 'wad@gmail.com', '08000000987', NULL, '$2y$10$uxblQfVnkzgjE39XOzjksejjB/ES16fAdh0W8EX12CYaWUid7poBK', '2021-12-30 05:37:21', '2021-12-30 05:37:21'),
(7, 'testing4', 'testing4', 'wadas@sadw.com', '432424', NULL, '$2y$10$jxKLPI9hwtv3v.KrLEY88OcmspquwIHraGF4eSs.ixjz.859wqjP6', '2022-01-03 00:45:33', '2022-01-03 00:45:33'),
(8, 'alamat', 'testing', 'wads@gmail.com', '2132141', NULL, '$2y$10$n3bK0WX7vZnc4ri8GL6gne0UwYb.PWNDR93vnNU6AcZbjwZeEoytK', '2022-01-07 06:03:25', '2022-01-07 06:03:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `no_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `id_pembeli` bigint(20) UNSIGNED NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_30_001024_create_customer_table', 1),
(6, '2021_12_30_011759_create_product_table', 1),
(7, '2021_12_30_012542_create_transaksi_table', 1),
(8, '2021_12_30_013117_create_detail_transaksi_table', 1),
(9, '2021_12_30_014712_create_pembayaran_table', 1),
(10, '2021_12_30_021434_create_admin_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` bigint(255) UNSIGNED NOT NULL,
  `id_produk` bigint(255) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `id_pembeli` bigint(20) UNSIGNED NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `harga` bigint(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_pembeli` bigint(20) UNSIGNED NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `total_bayar` bigint(20) NOT NULL,
  `bukti_transfer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_transaksi`, `id_pembeli`, `tanggal_bayar`, `total_bayar`, `bukti_transfer`, `status`, `created_at`, `updated_at`) VALUES
(14, 50809874, 3, '2022-01-08', 240000, '1641630906.jpg', 'batal', '2022-01-08 01:35:06', '2022-01-09 03:11:24'),
(15, 77722734, 3, '2022-01-09', 475000, '1641698407.jpg', 'batal', '2022-01-08 20:20:07', '2022-01-09 03:11:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` bigint(20) NOT NULL,
  `stok` int(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama_barang`, `berat`, `stok`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Cofee Tubruk', 500, 139, 200000, '30fb412c-8e35-4825-bd9d-fe58c79130eb.jpg', NULL, NULL),
(3, 'Cofee Temanggung', 350, 17, 75000, '006705ae05d0425320bda4b5caedc5c7.jpg', NULL, '2022-01-09 03:17:05'),
(5, 'Cofee Mix', 110, 10, 50000, '006705ae05d0425320bda4b5caedc5c7.jpg', NULL, '2022-01-09 03:17:05'),
(6, 'Cofee Ship', 435, 112, 65000, '66236640_08a0a2e6-f16d-485b-8669-f88eccb7e280.jpg', NULL, NULL),
(7, 'Cofee Nabrak', 674, 129, 45000, '30fb412c-8e35-4825-bd9d-fe58c79130eb.jpg', NULL, '2022-01-08 01:31:31'),
(9, 'Kopi Robusta 1000', 1000, 47, 75000, '1641618298.jpg', '2022-01-07 21:05:13', '2022-01-09 03:17:05'),
(10, 'Kopi Robusta 200', 200, 48, 40000, '1641617912.jpg', '2022-01-07 21:06:40', '2022-01-08 20:19:32'),
(12, 'Ijen CM Natural', 1400, 68, 40000, '1641697738.jpg', '2022-01-08 20:08:58', '2022-01-08 20:19:32'),
(13, 'Aceh Gayo Natural', 1300, 45, 40000, '1641724373.jpg', '2022-01-09 03:32:53', '2022-01-09 03:32:53'),
(14, 'Kopi Susu Blend 1000', 1000, 45, 120000, '1641724481.jpg', '2022-01-09 03:34:41', '2022-01-09 03:34:41'),
(15, 'Kopi Susu Blend 200', 200, 143, 65000, '1641724510.jpg', '2022-01-09 03:35:10', '2022-01-09 03:35:10'),
(16, 'House Blend Mantra 1000', 1000, 78, 200000, '1641724574.jpg', '2022-01-09 03:36:14', '2022-01-09 03:36:14'),
(17, 'House Blend Mantra 200', 200, 23, 80000, '1641724599.jpg', '2022-01-09 03:36:39', '2022-01-09 03:36:39'),
(18, 'House Blend Restu', 1000, 46, 350000, '1641724660.jpg', '2022-01-09 03:37:40', '2022-01-09 03:37:40'),
(19, 'House Blend Restu', 200, 25, 65000, '1641724690.jpg', '2022-01-09 03:38:10', '2022-01-09 03:38:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `id_pembeli` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indeks untuk tabel `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD KEY `users_email_index` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` bigint(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `chart`
--
ALTER TABLE `chart`
  MODIFY `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `chart`
--
ALTER TABLE `chart`
  ADD CONSTRAINT `chart_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
