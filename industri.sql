-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2018 at 03:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `industri`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `log_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `activity` text,
  `module` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AVG_ROW_LENGTH=5461 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`log_id`, `fk_user_id`, `activity`, `module`, `created_at`) VALUES
(1, 1, 'add new user user@gmail.com', 'User Management', '2017-01-11 21:14:54'),
(2, 1, 'update user user@gmail.com`s details (user@gmail.com to user@gmail.com, User 1 to User One,user to user)', 'User Management', '2017-01-11 21:21:55'),
(3, 1, 'delete user irvanfathul@gmail.com', 'User Management', '2017-08-24 10:45:23'),
(4, 1, 'delete user irvanfathul@gmail.com', 'User Management', '2017-08-24 10:54:15'),
(5, 1, 'add new user irvanfathul@gmail.com', 'User Management', '2017-08-24 10:54:32'),
(6, 1, 'reset user irvanfathul@gmail.com`s password', 'User Management', '2017-08-24 10:56:47'),
(7, 1, 'reset user irvanfathul@gmail.com`s password', 'User Management', '2017-08-24 11:01:56'),
(8, 1, 'reset user irvanfathul@gmail.com`s password', 'User Management', '2017-08-24 11:05:30'),
(9, 1, 'delete user irvanfathul@gmail.com', 'User Management', '2017-08-24 20:27:12'),
(10, 1, 'add new user irvanfathul@gmail.com', 'User Management', '2017-08-24 20:27:30'),
(11, 1, 'reset user irvanfathul@gmail.com`s password', 'User Management', '2017-08-24 23:48:26'),
(12, 1, 'reset user irvanfathul@gmail.com`s password', 'User Management', '2017-08-24 23:50:05'),
(13, 1, 'reset user irvanfathul@gmail.com`s password', 'User Management', '2017-08-24 23:51:40'),
(14, 6, 'update user irvanfathul@gmail.com`s details (irvanfathul@gmail.com to irvanfathul@gmail.com, irvan to irvan,admin to user)', 'User Management', '2017-08-24 23:53:31'),
(15, 1, 'reset user irvanfathul@gmail.com`s password', 'User Management', '2017-08-25 05:02:49'),
(16, 1, 'delete user irvanfathul@gmail.com', 'User Management', '2017-08-25 06:00:20'),
(17, 1, 'add new user irvanfathul@gmail.com', 'User Management', '2017-08-25 06:00:36'),
(18, 7, 'change its own password', 'Change Password', '2017-08-25 06:50:51'),
(19, 7, 'change its own password', 'Change Password', '2017-08-28 22:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_kampus`
--

CREATE TABLE `gallery_kampus` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `file_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_kegiatan`
--

CREATE TABLE `gallery_kegiatan` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `file_url` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `home_setting`
--

CREATE TABLE `home_setting` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `sejarah` longtext NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_setting`
--

INSERT INTO `home_setting` (`id`, `judul`, `sejarah`, `visi`, `misi`) VALUES
(1, 'Di Website Teknik Industri Politeknik Swadharma', 'Politeknik Swadharma di dirikan oleh para pensiunan Bank Negara Indonesia 1946 (Bank BNI) sejak tahun 1993 bekerja sama dengan Politeknik Negeri Jakarta (D/h Politeknik UI), dengan dosen dari PNJ, Praktisi Bank BNI dan Dosen Politeknik Swadharma. Mulai tahun 2012 Bank BNI memberikan Bantuan Beasiswa Sarana (gedung) bagi mahasiswa Baru sebesar Rp.3.000.000 per mahasiswa untuk 300 pendaftar pertama. Program studi yang ada di Politeknik Swadharma adalah : Keuangan Perbankan. Akuntansi, Admisntrasi Bisnis, Teknik Elektro dan Teknik Industri. Bagi anda yang mendapat Beasiswa dari Bank BNI maka mahasiswa Baru angkatan tahun 2017 hanya membayar uang kuliah sebesar Rp.2.750.000/semester (sudah termasuk uang uts, uas dan praktek-uang kuliah dapat dibayar dengan cara di angsur) Informasi lebih lanjut Hub. Telepon 021-7404880 (dgn Bapak SUKADI/Ibu Tuti).\r\n\r\n', 'Menjadi penyelenggara pendidikan tinggi vokasi dibidang Teknik Industri yang menghasilkan sumber daya manusia yang mendapat pengakuan baik dari masyarakat maupun dunia Industri .', '- Menyelenggarakan program pendidikan pengembangan dan menghasilkan lulusan ahli madya yang memiliki kemampuan dan keterampilan Bidang Teknik Industri . \r\n              <br>\r\n              - Menghasilkan lulusan yang memiliki saya saing dan bisa dikembangkan untuk mengantisipasi perubahan lingkungan bisnis yang sangat cepat dibidang Teknik Industri.\r\n              <br>\r\n            - Mampu secara terus menerus memberikan kontribusi terbaik untuk memenuhi standar kualitas tenaga kerja yang diperlukan oleh Industri .\r\n              <br>\r\n              - Menyiapkan mahasiswa sebagai ahli Teknik Industri yang memiliki kemampuan dan keterampilan yang tinggi dalam hal yang berkaitan dengan optimalisasi sistem produksi, mulai dari tahap perancangan ,penginstalan, perbaikan, sampai dengan tahap pengoprasiannya. \r\n             </p>');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `file_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `nama`, `jabatan`, `file_url`) VALUES
(1, 'Rahma Pratiwi', 'Kepala Jurusan', 'cf8ab-team-4.jpg'),
(2, 'Azmi Zamzami', 'Ketua Himpunan', '8381d-team-1.jpg'),
(3, 'Rizki Maulana', 'Wakil Himpunan', 'db341-team-3.jpg'),
(4, 'Ivan Heldiansyah', 'Sekertaris Himpunan', 'ed172-team-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teknik_industri`
--

CREATE TABLE `teknik_industri` (
  `id` int(11) NOT NULL,
  `sejarah_ti` longtext NOT NULL,
  `keunggulan_ti` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teknik_industri`
--

INSERT INTO `teknik_industri` (`id`, `sejarah_ti`, `keunggulan_ti`) VALUES
(1, '<p style="box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; line-height: 26px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;">\r\n	Teknik industri lahir sejak zaman Pra Yunani kuno Pada masa itu, manusia menggunakan batu dan tulang sebagai peralatan kerjanya. Alat - alat yang digunakan mengalami perbaikan secara berkala, sehingga meningkatkan produktivitas pada persoalan produksi. Hal ini terjadi sampai pada saat ini.Teknik industri sebenarnya berakar kuat pada masa revolusi industri. Revolusi industri telah mengubah secara dramatis proses manufaktur dan membantu lahirnya konsep &ndash; konsep ilmu pengetahuan di kemudian hari. Inovasi teknologi yang terjadi pada waktu itu ditujukan untuk membantu dalam mekanisasi beberapa operasional manual tradisional pada industri tekstil. Beberapa penemuan teknologi pada masa revolusi industri,yaitu penemuan mesin pintal yang ditemukan oleh James Hargreaves (1765), pengembangan water frame oleh Richard Arkweight (1769), dan mesin uap oleh James Watt.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; line-height: 26px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;">\r\n	Awal mula Teknik Industri dapat ditelusuri dari beberapa sumber berbeda. Frederick Winslow Taylor sering ditetapkan sebagai Bapak Teknik Industri meskipun seluruh gagasannya tidak asli. Beberapa risalah terdahulu mungkin telah memengaruhi perkembangan Teknik Industri seperti risalah The Wealth of Nations karya Adam Smith, dipublikasikan tahun 1776; Essay on Population karya Thomas Malthus dipublikasikan tahun 1798; Principles of Political Economy and Taxation karya David Ricardo, dipublikasikan tahun 1817; dan Principles of Political Economy karya John Stuart Mill, dipublikasikan tahun 1848. Seluruh hasil karya ini mengilhami penjelasan paham Liberal Klasik mengenai kesuksesan dan keterbatas dari Revolusi Industri. Adam Smith adalah ekonom yang terkenal pada zamannya. &quot;Economic Science&quot; adalah frasa untuk menggambarkan bidang ini di Inggris sebelum industrialisasi America muncul.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; line-height: 26px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;">\r\n	Kontribusi penting lainnya dan mengilhami Taylor adalah Charles W. Babbage. Babbage adalah profesor ahli matematika di Cambridge University. Salah satu kontribusi pentingnya adalah buku yang berjudul On the Economy of Machinery and Manufacturers tahun 1832 yang mendiskusikan banyak topik menyangkut manufaktur. Babbage mendiskusikan gagasan tentang Kurva Belajar (Learning Curve), pembagian tugas dan bagaimana proses pembelajaran dipengaruhi, dan efek belajar terhadap peningkatan pemborosan. Dia juga sangat tertarik pada metode pengaturan pemborosan. Charles Babbage adalah orang pertama yang menganjurkan membangun komputer mekanis. Dia menyebutnya &quot;analytical calculating machine&quot; , untuk tujuan memecahkan masalah matematika yang kompleks</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; line-height: 26px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;">\r\n	Di Amerika Serikat selama akhir abad 19 telah terjadi perkembangan yang memengaruhi pembentukan Teknik Industri. Henry R. Towne menekankan aspek ekonomi terhadap pekerjaan insinyur yakni bagaimana seorang insinyur akan meningkatkan laba perusahaan? Towne kemudian menjadi anggota American Society of Mechanical Engineers (ASME) sebagaimana yang dilakukan beberapa pendahulunya di bidang Teknik Industri. Towne menekankan perlunya mengembangkan suatu bidang yang terfokus pada sistem manufactur. Dalam Industrial Engineering Handbook dikatakan bahwa &quot;ASME adalah tempat berkembang biaknya Teknik Industri&quot;. Towne bersama Fredrick A. Halsey bekerja mengembangkan dan memaparkan suatu Rencana Kerja untuk mengurangi pemborosan kepada ASME. Tujuan Recana ini adalah meningkatkan produktivitas pekerja tanpa berpengaruh negatif terhadap ongkos produksi. Rencana ini juga menganjurkan bahwa sebagian keuntungan dapat dibagikan kepada pekerja dalam bentuk insentif.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; line-height: 26px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;">\r\n	Henry L. Gantt (juga anggota ASME) menekankan pentingnya seleksi karyawan dan pelatihannya. Dia, seperti juga Towne dan Halsey, memaparkan paper dengan topik-topik seperti biaya, seleksi karyawan, pelatihan, skema insentif, dan penjadwalan kerja. Dia adalah pencipta Diagram Gantt (Gantt chart), yang saat ini merupakan diagram yang sangat populer digunakan dalam penjadwalan kerja. Sampai sekarang Gantt chart digunakan dalam bidang statistik untuk membuat prediksi yang akurat. Jenis diagram lainnya telah dikembangkan untuk tujuan penjadwalan seperti Program Evaluation and Review Technique (PERT) dan Critical Path Mapping (CPM).</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; line-height: 26px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;">\r\n	Sejarah Teknik Industri tidak lengkap tanpa menyebut Frederick Winslow Taylor. Taylor mungkin adalah pelopor Teknik Industri yang paling terkenal. Dia mempresentasikan gagasan mengenai pengorganisasian pekerjaan dengan menggunakan manajemen kepada seluruh anggota ASME. Dia menciptakan istilah &quot;Scientific Management&quot; untuk menggambarkan metode yang dia bangun melalui studi empiris. Kegiatannya, seperti yang lainnya, meliputi topik-topik seperti pengorganisasian pekerjaan dengan manajemen, seleksi pekerja, pelatihan, dan kompensasi tambahan bagi seluruh individu yang memenuhi standar yang dibuat perusahaan. Scientific Management memiliki efek yang besar terhadap Revolusi Industri, baik di Amerika maupun di luar negara Amerika.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; line-height: 26px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;">\r\n	Keluarga Gilbreth diakui akan pengembangan terhadap Studi Waktu dan Gerak (Time and Motion Studies). Frank Bunker Gilbreth dan istrinya Dr. Lillian M. Gilbreth melakukan penelitian mengenai Pemahaman Kelelahan (Fatigue), Skill Development, Studi Gerak (Motion Studies), dan Studi Waktu (Time Studies). Lillian Gilbreth memeliki gelasr Ph.D. dalam bidang Psikologi yang membantunya dalam memahami masalah-masalah manusia. Keluarga Gilbreth meyakini bahwa terdapat satu cara terbaik (&quot;one best way&quot;) untuk melakukan pekerjaan. Salah satu pemikiran mereka yang siginifikan adalah pengklasifikasian gerakan dasar manusia ke dalam 17 macam, di mana ada gerakan yang efektif dan ada yang tidak efektif. Mereka menamakannya Tabel Klasifikasi Therbligs (ejaan terbalik dari kata Gilbreth). Gilbreth menyimpulkan bahwa waktu untuk menyelesaikan gerakan yang efektif (effective therblig) lebih singkat tetapi sulit untuk dikurangi, demikian sebaliknya dengan non-effective therbligs. Gilbreth mengklaim bahwa setiap bentuk pekerjaan dapat dipisah-pisah ke dalam bentuk pekerjaan yang lebih sederhana.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; line-height: 26px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;">\r\n	Saat Amerika Serikat menghadapi Perang Dunia II, secara diam-diam pemerintah mendaftarkan para ilmuwan untuk meneliti perencanaan, metode produksi, dan logistik dalam perang. Para ilmuwan ini mengembangkan sejumlah teknik untuk pemodelan dan memprediksi solusi optimal. Lebih lanjut saat informasi ini terbongkar. lahirlah Operation Research. Banyak hasil penelitian yang masih sangat teoretis dan pemahaman bagaimana menggunakannya dalam dunia nyata tidak ada. Hal inilah yang menyebabkan jurang antara kelompok Operation Research (OR) dan profesi insinyur terlalu lebar. hanya sedikit perusahaan yang dengan sigap membentuk departemen Operation Research dan mengkapitalisasikannya.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; line-height: 26px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;">\r\n	Pada 1948 sebuah komunitas baru, American Institute for Industrial Engineers (AIIE), dibuka untuk pertama kalinya. Pada masa ini Teknik Industri benar-benar tidak mendapat tempat yang khusus dalam struktur perusahaan. Selama tahun 1960 dan sesudahnya, beberapa perguruan tinggi mulai mengadopsi teknik-teknik operation research dan menambahkannya pada kurikulum Teknik Industri. Sekarang untuk pertama kalinya metode-metode Teknik Industri disandarkan pada fondasi analisis, termasuk metode empiris terdahulu lainnya. Pengembangan baru terhadap optimisasi dalam matematika sebagaimana metode baru dalam analisis statistik membantu dalam mengisi lubang kosong bidang Teknik Industri dengan pendekatan teoretis.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; line-height: 26px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;">\r\n	Kemudian, permasalahan Teknik Industri menjadi begitu besar dan kompleks pada dan saat komputer digital berkembang. Dengan komputer digital dan kemampuannya menyimpan data dalam jumlah besar, insinyur Teknik Industri memiliki alat baru untuk mengkalkulasi permasalahan besar secara cepat. Sebelumnya komputasi pada suatu sistem memakan mingguan bahkan bulanan, tetapi dengan komputer dan perkembangan sub-program &quot;sub-routines&quot;, perhitungan dapat dilakukan dalam hitungan menit dan dengan mudah dapat diulangi terhadap kriteria problem yang baru. Dengan kemampuannya menyimpan data, hasil perhitungan pada sistem sebelumnya dapat disimpan dan dibandingkan dengan informasi baru. Data-data ini membuat Teknik Industri menjadi cara yang kuat dalam mempelajari sistem produksi dan reaskinya bila terjadi perubahan. Di Indonesia</p>\r\n', '<div class="row sejarah-container" style="box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;">\r\n	<p style="box-sizing: border-box; margin: 0px; padding: 0px; line-height: 26px;">\r\n		Memasuki Dunia Kerja Sarjana atau lulusan Teknik Industri Profesi lulusan TI, atau lulusan teknik pada umumnya, memang tidak spesifik. Tidak seperti dokter, akuntan, atau apoteker yang memang pendidikannya mengarahkan mahasiswa untuk berkarir dengan profesi demikian. Yang bisa dijelaskan mengenai keprofesian TI ialah ciri-ciri bidang kerja yang sering dilakukan sarjana TI di dunia kerja. Misalnya, lulusan TI banyak yang bekerja di bidang Production Planning and Control (PPC), Quality Control, Job Analysys (SDM), atau di ranah Supply Chain dan logistik. Sebagai contoh, gambaran pekerjaan TI di bidang quality control di sebuah pabrik yang memproduksi obat. Kontrol Kualitas yang dilakukan sarjana TI di sini bukanlah dengan melakukan inspeksi dan cek langsung obat yang diproduksi seperti yang dilakukan sarjana farmasi. Akan tetapi, tugas sarjana TI di sini adalah merancang bagaimana sistem inspeksinya, berapa sample yang diambil, di bagian mana saja harus dilakukan inspeksi sehingga kualitas obat tetap terjaga selama proses produksi. Sarjana TI bekerja di bidang sistem Quality Control-nya. Satu hal yang menarik mengenai lulusan TI adalah bahwa pada masa-masa awal bekerja banyak lulusan TI yang sering mengeluh karena bidang pekerjaannya tidak sesuai dengan keilmuannya. Tahun pertama, sarjana TI memang tidak mungkin ditempatkan langsung sebagai manajer atau supervisor yang mana di bagian itulah keilmuan TI akan sangat terpakai. Mereka biasanya akan bekerja di lantai produksi terlebih dahulu bersama orang mesin dan elektro. Pada masa-masa awal bekerja ini, sarjana TI mungkin akan kalah bersaing apabila ia tidak memiliki reflek belajar yang cepat. Namun ketika sarjana TI berhasil melewati 4-5 tahun dan masuk ke dalam level supervisor, saat itulah karir sarjana TI akan menanjak. Terkait dengan memasuki dunia kerja, bapak Ari Samadhi, salah satu dosen di TI ITB, ikut memberikan saran untuk semua mahasiswanya, &ldquo;Yang perlu diperhatikan adalah bahwa, faktanya, kebanyakan perusahaan akan lebih dulu melihat aktivitas keorganisasian yang kita tulis di CV, setelah itu baru melihat IP, karena perusahaan yang datang ke ITB ternyata lebih mencari orang yang mudah bersosialisasi dan beradaptasi dibanding orang yang pintar. Sehingga saran saya banyak-banyaklah beraktivitas di luar akademik. Saran lain ialah mengambil KP di perusahaan besar, sehingga sejak awal mahasiswa sudah diperkenalkan dengan sistem kerja profesional. Terakhir, aktif mengikuti lomba juga dapat mengasah intuisi pemecahan masalah di perusahaan,&rdquo;&nbsp;<br style="box-sizing: border-box;" />\r\n		Teknik Industri memiliki ruang lingkup yang sangat luas tidak hanya dalam penelitian dan desain suatu produk yang berhubungan dengan teknologi tetapi juga mencakup aktivitas bisnis contohnya seperti system pemasaran yang dijalankan perusahaan, keuangan, pengembangan sumber daya manusia dan lain-lain. Kedua faktor tersebut saling menunjang satu sama lain. Dalam kondisinya dilapangan, seorang sarjana teknik industri tidak hanya dituntut untuk bisa menjalankan/melaksanakan diatas tetapi juga diharapkan dapat berperan penting dalam suatu pengambilan keputusan sebagai suatu penggagas ide yang mempunyai pengaruh kuat dalam perusahaan.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role` varchar(25) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AVG_ROW_LENGTH=8192 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `name`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Admin', 'admin', 1, '2017-01-12 12:07:57', '2017-08-22 13:13:19'),
(2, 'user@gmail.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'User One', 'user', 1, '2017-01-12 04:14:51', '2017-01-11 21:23:26'),
(3, 'irvanfathul@gmail.com', '9a7e5385760dcea582c7b502602aff83', 'Irvan', 'superuser', 0, '2017-08-24 16:59:46', '2017-08-24 17:45:23'),
(4, 'irvanfathul@gmail.com', 'f7d75a9a6de484548d6fbace05c68217', 'Irvan', 'admin', 0, '2017-08-24 17:45:46', '2017-08-24 17:54:15'),
(5, 'irvanfathul@gmail.com', '02e2a91cdc6e6b7ca12f29e76568e1ea', 'irvam', 'admin', 0, '2017-08-24 17:54:29', '2017-08-25 03:27:12'),
(6, 'irvanfathul@gmail.com', 'e633d331157eb9653fa245bac7dfded1', 'irvan', 'user', 0, '2017-08-25 03:27:28', '2017-08-25 13:00:20'),
(7, 'irvanfathul@gmail.com', '8baf71f8323554bf790be4c17bd9d3a3', 'Irvan', 'admin', 1, '2017-08-25 13:00:32', '2017-08-29 05:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` int(11) NOT NULL,
  `id_was_deleted` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `action` varchar(50) NOT NULL,
  `updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `id_was_deleted`, `role`, `email`, `action`, `updated`) VALUES
(1, 247, '', '', 'delete', '2018-01-13'),
(2, 254, 'admin', '', 'delete', '2018-01-13'),
(3, 255, 'admin', '', 'delete', '2018-01-13'),
(4, 256, 'admin', 'admin@admin.com', 'delete', '2018-01-13'),
(5, 257, 'admin', 'admin@admin.com', 'delete', '2018-01-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `log_id` (`log_id`),
  ADD KEY `FK_activity_log_user_user_id` (`fk_user_id`);

--
-- Indexes for table `gallery_kampus`
--
ALTER TABLE `gallery_kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_kegiatan`
--
ALTER TABLE `gallery_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_setting`
--
ALTER TABLE `home_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknik_industri`
--
ALTER TABLE `teknik_industri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `gallery_kampus`
--
ALTER TABLE `gallery_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery_kegiatan`
--
ALTER TABLE `gallery_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;
--
-- AUTO_INCREMENT for table `home_setting`
--
ALTER TABLE `home_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `teknik_industri`
--
ALTER TABLE `teknik_industri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD CONSTRAINT `FK_activity_log_user_user_id` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
