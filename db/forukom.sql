-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jan 2020 pada 19.02
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forukom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adming`
--

CREATE TABLE `adming` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `adming`
--

INSERT INTO `adming` (`id`, `username`, `password`) VALUES
(9, 'jakiminwawaw', '$2y$10$jNN4Tbz/XRllkO42Ssyl3OEMspwXaeOutzrE3AJ5T8vZsMd4BD5z.'),
(10, 'adamzulianto', '$2y$10$wOxQoQ.rk14yy9doDRPhYu7Zl.eQqwxomiiCeVtQUg6cgalSw7yMK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `sumber` varchar(20) NOT NULL,
  `flag` int(2) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `id_user`, `judul`, `tag`, `penulis`, `pengirim`, `isi`, `gambar`, `foto`, `sumber`, `flag`, `tgl`) VALUES
(16, 4, 'awas ukom sebentar lagi.. jangan kecolongan', 'pendidikan', '', '', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut&lt;strong&gt; sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor offi&lt;/strong&gt;cia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit&lt;/p&gt;\r\n\r\n&lt;p&gt;wahahahha&lt;/p&gt;\r\n', 'ss_164687fef6c2c1ec9dc54f49a0c1232bca1319d7.1920x1080.jpg', '', '', 0, '2019-08-06 06:04:02'),
(18, 5, 'santri tapa internet', 'santri', '', '', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum optio molestias distinctio, quibusdam ullam eligendi ducimus at, sed pariatur. Dolor officia quas nulla veritatis, quod maxime qui ea aut sit!kskkd&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;sdsd&lt;/p&gt;\r\n', '4-momen-mayor-agus-yudhoyono-bicara-di-depan-publik.jpg', '', '', 1, '2020-01-02 11:43:07'),
(25, 7, 'Pengertian dan Sumber Ajaran Agama Islam', 'Agama', ' Zaenal Abidin ', 'nani', '<p>BAB I PEMBAHASAN</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sebagai agama terakhir, Islam diketahui memiliki karakteristik yang khas dibandingkan dengan agama-agama yang datang sebelumnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>A. PENGERTIAN AGAMA ISLAM</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ada dua sisi yang dapat kita gunakan untuk memahami pengertian agama Islam, yaitu sisi kebahasaan dan sisi peristilahan. Kedua sisi pengertian tentang Islam ini dapat dijelaskan sebagai berikut :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dari segi kebahasaan Islam berasal dari bahasa Arab, yaitu dari kata salima yang mengandung arti selamat, sentosa dan damai. Dan kata salima selanjutnya diubah menjadi bentuk aslama yang berarti berserah diri masuk dalam kedamaian.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Senada dengan pendapat di atas, sumber lain mengatakan Islam berasal dari bahasa Arab, terambil dari kata salimayang berarti selamat sentosa. Dari asal kata itu dibentuk kata aslama yang artinya memelihara dalam keadaan selamat sentosa dan berarti pula menyerahkan diri, tunduk, patuh dan taat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dari pengertian itu, kata Islam dekat arti kata agama yang berarti menguasai, menundukkan, patuh, hutang, balasan dan kebiasaan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>B. SUMBER AJARAN ISLAM</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Di kalangan ulama terdapat kesepakatan bahwa sumber ajaran Islam yang utama adalah Al-Qur&#39;an dan As-Sunnah; sedangkan penalaran atau akal pikiran sebagai alat untuk memahami Al-Qur&#39;an dan As-Sunnah .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. Al Qur&#39;an</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Di kalangan para ulama dijumpai adanya perbedaan pendapat di sekitar pengertian Al-Qur&#39;an baik dari segi bahasa maupun istilah. Asy-Syafi&rsquo;i misalnya mengatakan bahwa Al-Qur&#39;an bukan berasal dari akar kata apa pun, dan bukan pula ditulis dengan memakai kata hamzah. Lafal tersebut sudah lazim digunakan dalam pengertian kalamullah (firman Allah) yang diturunkan kepada Nabi Muhammad SAW. Sementara itu Al-Farra berpendapat bahwa lafal Al-Qur&#39;an berasal dari kata qarain jamak dari kata qarinah yang berarti kaitan; karena dilihat dari segi makna dan kandungannya ayat-ayat Al-Qur&#39;an itu satu sama lain saling berkaitan. Selanjutnya, Al-Asy&rsquo;ari dan para pengikutnya mengatakan bahwa lafal Al-Qur&#39;an diambil dari akar kata qarn yang berarti menggabungkan suatu atas yang lain; karena surat-surat dan ayat-ayat Al-Qur&#39;an satu dan lainnya saling bergabung dan berkaitan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Manna&rsquo; al-Qathhthan, secara ringkas mengutip pendapat para ulama pada umumnya yang menyatakan bahwa Al-Qur&#39;an adalah firman Allah yang diturunkan kepada Nabi Muhammad SAW, dan dinilai ibadah bagi yang membacanya. Pengertian yang demikian senada dengan yang diberikan Al-Zarqani.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2. As-Sunnah</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kedudukan As-Sunnah sebagai sumber ajaran Islam selain didasarkan pada keterangan ayat-ayat Al-Qur&#39;an dan hadis juga didasarkan kepada pendapat kesepakatan para sahabat. Yakni seluruh sahabat sepakat untuk menetapkan tentang wajib mengikuti hadis, baik pada masa Rasulullah masih hidup maupun setelah beliau wafat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Menurut bahasa As-Sunnah artinya jalan hidup yang dibiasakan terkadang jalan tersebut ada yang baik dan ada pula yang buruk. Pengertian As-Sunnah seperti ini sejalan dengan makna hadis Nabi yang artinya : &rdquo;Barang siapa yang membuat sunnah (kebiasaan) yang terpuji, maka pahala bagi yang membuat sunnah itu dan pahala bagi orang yang mengerjakanny; dan barang siapa yang membuat sunnah yang buruk, maka dosa bagi yang membuat sunnah yang buruk itu dan dosa bagi orang yang mengerjakannya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sementara itu Jumhurul Ulamaatau kebanyakan para ulama ahli hadis mengartikan As-Sunnah, Al-Hadis, Al-Khabar dan Al-Atsar sama saja, yaitu segala sesuatu yang disandarkan kepada Nabi Muhammad SAW, baik dalam bentuk ucapan, perbuatan maupun ketetapan. Sementara itu ulama Ushul mengartikan bahwa As-Sunnah adalah sesuatu yang berasal dari Nabi Muhammad dalam bentuk ucapan, perbuatan dan persetujuan beliau yang berkaitan dengan hukum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sebagai sumber ajaran Islam kedua, setelah Alquran, As-Sunnah memiliki fungsi yang pada intinya sejalan dengan alquran. Keberadaan As-Sunnah tidak dapat dilepaskan dari adanya sebagian ayat Al-Qur&#39;an :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Yang bersifat global (garis besar) yang memerlukan perincian;</p>\r\n\r\n<p>Yang bersifat umum (menyeluruh) yang menghendaki pengecualian;</p>\r\n\r\n<p>Yang bersifat mutlak (tanpa batas) yang menghendaki pembatasan; dan ada pula</p>\r\n\r\n<p>Isyarat Al-Qur&#39;an yang mengandung makna lebih dari satu (musytarak) yang menghendaki penetapan makna yang akan dipakai dari dua makna tersebut; bahkan terdapat sesuatu yang secara khusus tidak dijumpai keterangannya di dalam Al-Qur&#39;an yang selanjutnya diserahkan kepada hadis nabi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>BAB II KESIMPULAN</p>\r\n\r\n<p>Ada 2 sisi yang dapat kita gunakan untuk memahami pengetian agama islam yaitu sisi kebiasaan dan sisi peristilahan. Kata islam dekat arti kata agama yang berarti menguasai, menundukan, patuh, hutang, balasan dan kebiasaan. Sumber ajaran Islam yang utama adalah Al-Qur&#39;an dan Al-Sunah. Pertama, Al-Qur&#39;an adalah firman Allah yang diturunkan kepada Nabi Muhammad SAW dan dinilai ibadah bagi yang membacanya dan kafir bagi yang mengingkarinya. Kedua, Al-Sunah adalah sesuatu yang berasal dari Nabi Muhammad SAW dalam bentuk ucapan, pebuatan, dan persetujuan beliau yang berkaitan dengan hukum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>BAB&nbsp; III DAFTAR PUSTAKA</p>\r\n\r\n<p>Htp\\www.hikmatun.wordpreess.comPengertian al-quran.</p>\r\n\r\n<p>Al-Qur&#39;an dan terjemahannya,1971,Saudi Arabia.</p>\r\n\r\n<p>M.Quraish Shihab,Membumikan Alquran</p>\r\n\r\n<p>Syuhudi Ismail,Ilmu Hadist</p>\r\n', 'FB_IMG_1545371795746.jpg', 'abe.jpg', 'Ijtihad,www.wikipedi', 1, '2019-08-06 06:04:02'),
(28, 8, 'www.garapcode.ga  Hai sinta', 'Agama', 'kjqiqiqiuqiu', 'sinta', '<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n\r\n<h3>www.garapcode.ga&nbsp;</h3>\r\n\r\n<p>Hai sinta</p>\r\n', '0x0-hic-bilinmeyen-teknolojik-bilgiler-1520712467595.jpg', '440x220_0700Logo_HUT_RI_Merah.png', 'qququuquququ', 1, '2019-09-19 11:03:03'),
(29, 10, 'pengertian islam', 'Agama', 'amo', 'admin', '<p>Islam adalah rahmat bagi semesta alam. Menjadi rahmat bagi orang yangtidak mempercayai Islam sekalipun, bahkan orang-orang yang memusuhi Islam.Islam yang hadir pada saat manusia dalam kegelapan dan kebekuan moral, telahmerubah dunia dengan wajah baru, terutama dalam hal &ldquo;revolusi akhlak&rdquo;.&nbsp;Nabi Muhammad SAW di utus, tidak lain adalah untuk menyempurnakan akhlak&nbsp;manusia dari kebiadaban menuju umat yang berkedaban.Akhlak adalah hal yang terpenting dalam kehidupan manusia karena akhlak&nbsp;mencakup segala pengertian tingkah laku, tabiat, perangai, karakter manusia yang&nbsp;baik maupun buruk dalam hubungannya dengan&nbsp;Allah SWT dan sesama makhluk.</p>\r\n\r\n<p>Tak bisa dipungkiri betapa pentingnya kita sebagai seorang muslim mengenal akhlak&nbsp;dalam aplikasi kehidupan kita dalam hubungan dengan lingkungan, sesama manusia,&nbsp;bangsa dan negara, hingga hubungan kita dengan Allah SWT.Perintah untuk bertakwa kepada Allah Azza wa Jalla senantiasa relevan dengan waktu dan tempat, kapanpun dan dimanapun. Mengingat, ragam fitnah yangmengancam hati seorang hamba, lingkungan yang tidak kondusif ataupun lantaranhati manusia yang rentan mengalami perubahan dan sebab-sebab lainnya yang&nbsp;berpotensi menimbulkan pengaruh negatif pada keimanan dan ketakwaan.Taqwa sangat penting dan dibutuhkan dalam setiap kehidupan seorang muslim.&nbsp;</p>\r\n\r\n<p>Namun masih banyak yang belum mengetahui hakekatnya. Setiap jumat para khatib menyerukan taqwa dan para makmum pun mendengarnya berulang-ulang kali. Namunyang mereka dengar terkadang tidak difahami dengan benar dan pas.</p>\r\n\r\n<p>Persoalan yang kemudian muncul adalah&nbsp;bagaimana cara kita&nbsp;berakhlak&nbsp;dan&nbsp;bertakwa dengan benar sehingga kita dapat mengimplementasikannya dalamkehidupan kita secara benar pula.</p>\r\n\r\n<p>Sebagaimana kenyataan saat ini, bangsa kita yang tercinta ini tengah dilanda persoalan pelik yang sesungguhnya berakarkan&nbsp;&nbsp;&nbsp; terpuruknya akhlak dan ketakwaan&nbsp;manusia-manusia kita, serta hilangnya dasar-dasar penanaman moral dan etika</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>1.2</strong>&nbsp;&nbsp;<strong>Rumusan Masalah</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apa itu Akhlaq?</p>\r\n\r\n<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apa itu Taqwa?</p>\r\n\r\n<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagaimana kedudukan dan&nbsp;<a href=\"http://taqwadanberiman.blogspot.com/2013/04/makalah-taqwa-dan-ruang-lingkupnya.html\">ruang lingkup taqwa</a>?</p>\r\n\r\n<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagaimana&nbsp;<a href=\"http://taqwadanberiman.blogspot.com/2013/04/makalah-taqwa-dan-ruang-lingkupnya.html\">ciri- ciri orang bertaqwa</a>?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>1.3</strong>&nbsp;&nbsp;<strong>Tujuan</strong></p>\r\n\r\n<p>Mengetahui Ruang lingkup pembahasan akhlak, sehingga bisa menentukan mana yang baik dan buruk,mana yang haq dan bathil,dan menerapkan akhlak yang dianjurkan dalam qur&rsquo;an dan hadits dalam kehidupan.&nbsp;Ingin mengetahui apa itu taqwa?&nbsp;&nbsp;Ingin mengetahui bagaimana ruang lingkup taqwa?&nbsp;Ingin mengetahui bagaimana ciri- ciri orang bertaqwa</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>BAB II</strong></p>\r\n\r\n<p><strong>PEMBAHASAN</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>A.Pengertian Akhlaq</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Secara linguistic, akhlak berasal dari bahasa Arab yaitu akhlaqa, yukhliqu, dan ikhlaqan serta sesuai pula dengan timbangan (wazan) tsulasi majid af&rsquo;ala, yuf&rsquo;ilu if&rsquo;alan yang mempunyai makna al-sajiyah (Perangai), ath-thabi&rsquo;ah (kelakuan, tabi&rsquo;at, watak dasar), al-&rsquo;adat (kebiasaan,kelaziman), al-maru&rsquo;ah (peradaban yang baik), dan al-din (agama).</p>\r\n\r\n<p>Secara Istilah, akhlak adalah sifat yang tertanam dalam jiwa yang menimbulkan macam-macam perbuatan dengan gampang dan mudah, tanpa memerlukan perencanaan pemikiran dan pertimbangan.</p>\r\n\r\n<p>Berbicara masalah akhlak yang Islami, bahwa fokus akhlak Islami yang sejati adalah kemuliaan dan keagungan diri. Artinya, kemuliaan diri banyak sekali memenuhi halaman akhlak Islami dan kemuliaan diri banyak menekankan pada manusia untuk menghidupkan akhlak insani dan mendorongnya agar berlaku etis.</p>\r\n\r\n<p>Perbuatan-perbuatan manusia ini dapat di bagi dalam tiga macam perbuatan, dari tiga perbuatan ini ada yang termasuk perbuatan akhlak dan ada pula yang tidak termasuk perbuatan akhlak.</p>\r\n\r\n<ol>\r\n	<li>Perbuatan yang dikehendaki atau disadari, pada waktu berbuat dia berbuat dan disengaja.</li>\r\n</ol>\r\n\r\n<p>Berarti perbuatan tersebut adalah perbuatan akhlak, bisa perbuatan baik atau perbuatan buruk tergantung kepada sifat perbuatannya.</p>\r\n\r\n<ol>\r\n	<li>Perbuatan yang dilakukan tidak dikehendaki, sadar atau tidak sadar di waktu dia berbuat, tapi perbuatan itu di luar kemampuannya dan dia tidak bisa mencegahnya. Perbuatan demikian bukan perbuatan akhlak. Perbuatan ini ada dua macam:</li>\r\n</ol>\r\n\r\n<p>a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reflex action, al-a&rsquo;maalul- mun&rsquo;akiyah</p>\r\n\r\n<p>Umpamanya, seseorang ke luar dari tempat gelap ke tempat terang, matanya berkedip-kedip. Perbuatan berkedip-kedip ini tidak ada hukumnya, walaupun dia berhadap-hadapan dengan seseorang yang seakan-akan di kedipi. Atau seseorang karena digigit nyamuk, dia menamparkan pada yang digigit nyamuk tersebut.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automatic action, al-a&rsquo;maalul-&rsquo;aliyah</p>\r\n\r\n<p>Model ini seperti halnya dengup jantung, denyut urat nadi dan sebagainya.</p>\r\n\r\n<p>Dapat kita ambil kesimpulan sementara bahwa, perbuatan reflex action dan automatic action adalah suatu perbuatan di luar kemampuan seorang manusia sehingga tidak termasuk perbuatan akhlak. &nbsp;</p>\r\n\r\n<ol>\r\n	<li>Perbuatan yang samar-samar, tengah-tengah, mutasyabihat.</li>\r\n</ol>\r\n\r\n<p>Yang dimaksud samar-samar/tengah-tengah, yaitu mungkin suatu perbuatan dapat di masukkan perbuatan akhlak tapi bisa juga tidak. Pada lahirnya bukanlah perbuatan akhlak, tapi mungkin perbuatan tersebut termasuk perbuatan akhlak, sehingga berlaku hukum akhlak baginya, yaitu bahwa perbuatan itu baik atau perbutan buruk. Perbuatan yang termasuk samar-samar umpamanya; lupa, khilaf, dipaksa, perbuatan diwaktu tidur dan sebagainya. Maka perbuatan di atas tidak termasuk perbuatan akhlak.</p>\r\n\r\n<p>Pada prinsipnya yang menjadi lapangan pembahasan ahklak adalah tingkah laku atau perbuatan manusia di tinjau dari segi baik dan buruknya. Oleh para pemikir Islam, lapangan pembahasannya meliputi yang berkaitan dengan:</p>\r\n\r\n<ol>\r\n	<li>Menyelidiki sejarah etika dan berbagai teori (aliran) lama dan baru tentang tingkah laku manusia.</li>\r\n	<li>Membahas tentang cara-cara menghukumkan sampai menilai baik dan buruknya suatu pekerjaan.</li>\r\n	<li>Menyelidiki factor-faktor penting yang mencetak, mempengaruhi dan mendorong lahirnya tingkah laku manusia yang meliputi faktor manusia itu sendiri, fitrahnya (naluri), adat kebiasaannya, lingkungannya, kehendak dan cita-citanya, suara hatinya, motif yang mendorongnya berbuat, dan masalah pendidikan akhlak.</li>\r\n	<li>Menerangkan mana akhlak yang baik (akhlak al-mahmudah) dan mana pula akhlak yang buruk (akhlak al-mazmumah) menurut ajaran Islam yang bersumber pada al-qur&rsquo;an dan hadis Nabi Muhammad SAW.</li>\r\n	<li>Mengajarkan cara-cara yang ditempuh, juga meningkatkan budi pekerti kejenjang kemulian. Misalnya, dengan cara melatih diri untuk mencapai perbaikan bagi kesempurnaan pribadi.</li>\r\n	<li>Menegaskan arti dan tujuan yang sebenarnya, sehingga dapatlah manusia teransang secara aktif mengerjakan kebaikan dan menjauhi segala kelakuan yang buruk dan tercela.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dari beberapa literatur di atas, dapat kita ambil suatu intisarinya bahwa lapangan pembahasan akhlak itu adalah menyelidiki segala hal-hal yang berhubungan dengan perbuatan manusia, yang dengan perbuatan tersebut dapat ditetapkan hukumnya apakah perbuatan itu bersifat baik atau bersifat buruk.</p>\r\n\r\n<p>Namun demikian, bukanlah semua perbuatan manusia itu dapat dikatakan akhlak, karena perbuatan manusia tersebut ada yang timbul tiada dengan akhlak, seperti bernafas, detik jantung, dan memicingkan mata dengan tiba-tiba waktu berpindah dari gelap kecahaya atau sebaliknya, maka ini bukanlah persoalan akhlak dan tidak dapat pula dikatakan perbuatan baik atau buruk, dan bagi orang yang menjalankannya tidak dapat kita sebut orang yang bersifat baik atau orang yang bersifat buruk dan tidak dapat kita tuntut.</p>\r\n\r\n<p>Dalam buku Dr. M. Solihin, M.Ag di katakan bahwa, objek akhlak atau ruang lingkup pembahasan akhlak adalah tentang perbuatan-perbuatan manusia serta kategorisasinya apakah suatu perbuatan tersebut tergolong baik atau buruk.</p>\r\n\r\n<p>Dalam bukunya Sidi Gazalba di katakana bahwa, Semua tindakan dalam kehidupan adalah objek dari akhlak, baik itu dalam hubungan dengan Allah SWT, dengan diri sendiri, dengan manusia lain, ataupun dalam hubungan dengan Alam. Tindakan dalam agama mengandung nilai akhlak dan perbuatan dalam kehidupan sehari-hari mengandung nilai akhlak, apakah tindakan itu mengenai bidang sosial, ekonomi, politik, teknik, ataupun seni. Tapi tindakan yang mengandung nilai akhlak itu adalah semua tindakan yang dasar atau yang disengaja.</p>\r\n\r\n<p>Setiap manusia mempunyai tingkah laku yang berbeda-beda dan tidak sama tingkat keimanan serta kualitas pola berfikirnya, maka setiap tingkah laku manusia itu menjadi objek kajian pembahasan akhlak baik itu yang bersifat perbuatan baik dan yang bersifat perbuatan buruk, tapi perbuatan manusia yang mengandung akhlak itu adalah perbuatan yang di</p>\r\n', 'a-m-mbn_WCulsoM-unsplash.jpg', 'apple_logo_PNG19689.png', 'kkkkakakkak', 1, '2019-11-05 06:12:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `id_artikel`, `nama`, `isi`, `email`, `tgl`) VALUES
(13, 18, 'falah', 'typo min', 'falah@gmail.com', '2020-01-02 11:48:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motivasi`
--

CREATE TABLE `motivasi` (
  `id` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `motivasi`
--

INSERT INTO `motivasi` (`id`, `nama`, `isi`) VALUES
(4, 'Ali Bin Abi Thalib', '\"Diam sampai engkau diminta untuk berbicara,Lebih baik daripada kau terus berbicara sampai diminta untuk diam\"');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `foto`, `username`, `password`, `email`) VALUES
(5, 'umar bakri', '16243067801_91ba4d20e5_b.jpg', 'umar', '$2y$10$Ehb6EXr5sw10g3z5oG8OWeSxgwtul2.myMe3BN4SLjjbjtxW.ZmAm', ''),
(6, 'adam', 'Macbook Wallpaper.jpg', 'adam', '$2y$10$VZ9Zi7o0khp4v561TCUnIePclgVoq8rPG5ZIROPFsgssAeToRs/RG', 'adam@gmail.com'),
(7, 'nani', 'abe.jpg', 'nani', '$2y$10$tuh1vOz8v.9lTnIFomDgMuocHHtz45vxOy/N/maFFEzUVTaWbRyJ6', 'nani@gmail.com'),
(8, 'sinta', '440x220_0700Logo_HUT_RI_Merah.png', 'sinta', '$2y$10$J0qGlOAxy2eETyZFqNcJY.OlbVLaAkdZuPMcLFoJYvMjhNYaURhPW', 'sinta@gmail.com'),
(9, 'laptop', 'apple_logo_PNG19689.png', 'laptop', '$2y$10$y5BWB97GX5gbtgBqICLlOeKH2Ots6.Aj0uLhgpm9uCsiw0n0RXuoa', 'laptop@mail.com'),
(10, 'admin', 'apple_logo_PNG19689.png', 'admin', '$2y$10$IsDRTtTiPLZ1miT1Fn2hC.APYjVItMmqJ8Dk1yYPIhvEHb0TU6zXy', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adming`
--
ALTER TABLE `adming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motivasi`
--
ALTER TABLE `motivasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adming`
--
ALTER TABLE `adming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `motivasi`
--
ALTER TABLE `motivasi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
