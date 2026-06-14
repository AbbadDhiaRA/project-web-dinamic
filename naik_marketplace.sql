-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2026 at 03:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naik_marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_produk`
--

CREATE TABLE `tabel_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabel_produk`
--

INSERT INTO `tabel_produk` (`id`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'AeroPace v1 \"Teal Dynamic\"', 849000, 'Sneakers modern dengan perpaduan warna abu-abu elegan dan aksen teal yang segar. Didesain minimalis namun tetap sporty, memberikan kenyamanan maksimal untuk aktivitas harian dan olahraga ringan generasi muda.', 'aeropace-v1-teal-dynamic.jpg'),
(2, 'Book 2 x McDonald\'s EP', 2399000, 'Terinspirasi oleh satu-satunya McDonald\'s di dunia dengan lengkungan berwarna pirus (turquoise), berfungsi sebagai simbol untuk menempuh jalan yang tak biasa, sama seperti ikon Sedona tersebut. Memadukan teknologi bola basket terbaik dengan kecintaan Book pada Arizona, sepatu ini dilengkapi sol luar karet ekstra tahan lama yang memberikan cengkeraman mantap untuk lapangan luar ruangan. Warna yang ditampilkan: Sand Drift/Light British Tan/Red Stardust/Dusty Cactus (Gaya: IR6445-100, Negara Asal: Vietnam).', 'book-2-mcdonalds-ep.jpg'),
(3, 'Aerostreet Hoops Low 2.0', 199900, 'Sneakers casual model low-cut yang awet dan tahan jebol walau dicuci atau kehujanan berkat teknologi Shoes Injection Mould tanpa lem. Dibuat menggunakan bahan kulit sintetis premium dengan sol yang menyatu sempurna, memberikan kenyamanan ekstra sekaligus tampilan sporty dan stylish untuk aktivitas sehari-hari.', 'aerostreet-hoops-low-2.jpg'),
(4, 'Samba OG Shoes', 800000, 'Versi mewah dari sepatu Samba klasik yang hadir dengan material velvet premium dikombinasikan dengan kulit halus. Lahir di lapangan sepak bola dan kini menjadi ikon street-style, sepatu ini mempertahankan elemen khasnya seperti T-toe klasik, 3-Stripes bergerigi, dan sol luar karet (gum rubber outsole). Desainnya menggunakan perpaduan warna Shadow Red / Maroon / Gum dengan regular fit, tali sepatu, lapisan sintetis, dan kode produk JS1394. Cocok dipadukan dengan pakaian apa pun di lemari kamu.', 'samba-og-shoes.jpg'),
(15, 'Nike Air Force 1 \'07 All White', 750000, 'Ikon streetwear legendaris yang tidak pernah salah. Sepatu ini hadir dengan material kulit premium berwarna putih bersih di seluruh bagian (triple white). Menggunakan sol berteknologi Air-Sole untuk kenyamanan maksimal dan siluet potongan rendah (low-cut) yang bersih. Kondisi kulit masih sangat bagus, hanya ada kerutan halus pemakaian normal (creasing) di area T-toe. Cocok untuk gaya kasual sehari-hari.', 'Nike Air Force 1 07 All White.png'),
(16, 'Nike Air Jordan 1 Low Bred Toe', 1400000, 'Membawa warisan lapangan basket ke jalanan dengan perpaduan warna ikonis Gym Red, Black, dan White. Terbuat dari material kulit asli pada bagian atas, lidah sepatu berbahan nilon yang nyaman, dan sol karet kokoh dengan pola traksi klasik. Kondisi up body mulus 90%, warna merahnya masih sangat pekat, dan sol bawah minim terkikis. Pas banget untuk melengkapi gaya hypebeast kamu.', 'Nike Air Jordan 1 Low Bred Toe.png'),
(17, 'Nike Dunk Low Pandas', 1100000, 'Sepatu paling populer yang sangat mudah dipadukan dengan outfit apa pun. Menggunakan kombinasi warna kontras hitam dan putih (color blocking) yang minimalis dengan material kulit halus. Konstruksi kerah berpotongan rendah yang empuk memberikan kenyamanan ekstra sepanjang hari. Kondisi barang terawat, midsole masih putih bersih, dan tapak sepatu masih tebal.', 'Nike Dunk Low Pandas.png'),
(18, 'Nike Air Max 90 Infrared', 950000, 'Merayakan estetika retro tahun 90-an dengan bantalan udara Air Max yang terlihat ikonik di bagian tumit. Memadukan material mesh, suede, dan kulit dengan aksen warna Infrared (merah neon) yang mencolok di atas dasar abu-abu dan hitam. Sepatu ini menawarkan gaya running klasik yang tangguh. Kondisi gelembung udara (air pump) masih padat dan jernih, tidak kempes.', 'Nike Air Max 90 Infrared.png'),
(19, 'Nike Blazer Mid \'77 Vintage', 850000, 'Sepatu basket bergaya old-school dengan potongan tinggi (mid-top). Desainnya menggunakan material kulit berwarna putih dengan logo Swoosh hitam besar yang dominan, serta detail suede abu-abu di bagian samping dan depan. Lidah sepatu menggunakan busa terbuka (exposed foam) untuk memperkuat kesan retro. Kondisi mulus, konstruksi kokoh, dan siap dipakai nongkrong.', 'Nike Blazer Mid 77 Vintage.png'),
(20, 'Nike Cortez Basic Leather Forest Gump', 900000, 'Sepatu lari pertama Nike yang bertransformasi menjadi legenda pop culture. Hadir dengan material kulit putih premium, logo Swoosh berwarna merah terang, dan aksen garis biru di bagian midsole busa yang empuk. Desain sol luar bermotif herringbone memberikan traksi klasik yang kuat. Kondisi kulit sangat terawat dan bentuk (shape) sepatu masih terjaga dengan baik.', 'Nike Cortez Basic Leather Forest Gump.png'),
(21, 'Nike Air Max Excee Black White', 700000, 'Terinspirasi langsung dari Air Max 90, sepatu ini menawarkan desain modern dengan sentuhan asimetris pada bagian atas. Menggunakan kombinasi material mesh berpori untuk sirkulasi udara dan lapisan kulit sintetis hitam dengan Swoosh putih. Dilengkapi dengan sol busa yang ringan dan bantalan udara yang nyaman. Kondisi sangat segar, cocok untuk dipakai jalan-jalan santai atau olahraga ringan.', 'Nike Air Max Excee Black White.png'),
(22, 'Nike Pegasus 40 Black Anthracite', 1200000, 'Sepatu lari performa tinggi yang andal untuk aktivitas harian maupun lari jarak jauh. Menggunakan teknologi busa Nike React yang dipadukan dengan dua unit Zoom Air untuk transisi kaki yang responsif dan berenergi. Bagian atas menggunakan mesh rajutan satu lapis (engineered mesh) bernuansa hitam pekat yang elastis dan sejuk. Kondisi sol bawah masih sangat tebal, karet grippy-nya utuh.', 'Nike Pegasus 40 Black Anthracite.png'),
(23, 'Nike SB Dunk Low Pro Court Purple', 1650000, 'Lini Nike Skateboarding (SB) yang dirancang khusus dengan lidah sepatu tebal ber-bantalan ekstra demi kenyamanan bermain papan seluncur. Memiliki skema warna color blocking Court Purple (ungu), hitam, dan putih dengan material kulit yang tebal dan tahan lama. Kondisi tali ori, insole empuk, dan warna ungunya sangat pekat tanpa pudar.', 'Nike SB Dunk Low Pro Court Purple.png'),
(24, 'Nike Zoom Vomero 5 Oatmeal', 1800000, 'Sepatu bergaya dad shoes / tech-runner yang sedang sangat tren. Memadukan panel plastik jaring di bagian samping dengan material mesh berpori besar dan lapisan kulit sintetis berwarna Oatmeal / Pale Ivory yang estetik. Dilengkapi dengan teknologi bantalan Zoom Air yang sangat empuk di bawah kaki. Kondisi super mulus, bersih, dan jarang dipakai.', 'Nike Zoom Vomero 5 Oatmeal.png'),
(25, 'Nike Waffle Debut Black White', 650000, 'Tampilan retro berpadu modern dengan siluet sol Waffle khas Nike yang menonjol di bagian tumit. Materialnya menggunakan kombinasi suede lembut dan nilon ringan berwarna hitam dengan Swoosh putih besar yang melingkar membentuk tab penarik di bagian belakang. Kondisi fisik 85%, sol karet waffle masih mencengkeram dengan baik.', 'Nike Waffle Debut Black White.png'),
(26, 'Nike Air Max Plus TN Triple Black', 1350000, 'Sepatu dengan estetika agresif yang populer di kancah kultur jalanan Eropa dan Australia. Menampilkan garis-garis bergelombang dari material TPU yang terinspirasi dari pohon palem, serta teknologi Tuned Air untuk stabilitas premium. Seluruh badan sepatu berwarna hitam pekat (monochrome). Kondisi unit aman, bodi luar tidak ada robek, dan logo TN di tumit masih utuh.', 'Nike Air Max Plus TN Triple Black.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'abeedhia', '$2y$10$Rgbz7kMbLmzOdD7wntNSle5j7IA.7byzDKrEpfJUDT6n.Nce6SuXG'),
(11, 'superadmin', '$2y$10$5kbtrtdWler3MrZ7Or0rk.o6BrG6haNyc/hp21NhNRxDRv3AQiTz.'),
(15, 'iqbal', '$2y$10$D4RzwzurBlbWBNEaISUk3.Whk.Vt3U.YHd32SHLxt/6Gxnrc0RwTC'),
(16, 'danu', '$2y$10$STx6VTHDl.v0eag04p.shOipDBQWoro3UbewZ9xYGTle5R0TupBE.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
