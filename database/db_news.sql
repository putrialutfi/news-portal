-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 01:47 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(1, 'putrilutfiani29@gmail.com', 'putrialutfi', '202cb962ac59075b964b07152d234b70'),
(2, 'putri@email.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(250) NOT NULL,
  `isi_berita` text NOT NULL,
  `kategori_brt` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `isi_berita`, `kategori_brt`, `gambar`, `created_at`) VALUES
(7, 'Buat Bekal dan Camilan, Buat Sendiri Aneka Nugget Enak Ini', 'Jakarta - Selain dari daging ayam, nugget bisa dibuat dari bahan-bahan segar lain. Rasanya gurih enak dan bisa jadi bekal sekolah dan camilan si kecil.\r\n\r\nBukan hanya daging ayam saja yang enak diolah jadi sajian nugget, tapi ada bahan lain mulai dari tahu, tempe hingga pisang. Berbagai nugget ini mudah dibuat dan cocok jadi teman makan maupun camilan nikmat akhir pekan.\r\n\r\nBerniat membuat nugget? Berikut detikFood beri berkomendasi beberapa nugget yang enak dan siap memanjakan lidah orang-orang tersayang.\r\n\r\n1. Resep Chicken Nugget\r\nMenu nugget yang satu ini bisa dikatakan yang paling populer. Olahan ayam ini pasti jadi camilan sekaligus lauk makan favorit si kecil.\r\n\r\nNugget ayam bisa dibuat dalam jumlah banyak sekaligus agar bisa disimpan sebagai stok makanan di kulkas. Paduan daging ayam cincang, roti tawar dan susu membuat nugget semakin enak, apalagi ditambah bawang bombay. Resep chicken nugget yang enak dan mudah dibuat bisa dilihat di sini.\r\n\r\n2. Resep Nugget Tahu \r\nNugget gurih renyah juga bisa dibuat dengan bahan baku tahu. Tambahkan cincangan wortel agar nugget lebih kaya nutrisi.\r\n\r\nSelain enak, nugget tahu juga bisa jadi alternatif camilan anak yang sehat. Mau coba membuat nugget tahu? Catat resep ini dan coba buat bersama si kecil.\r\n\r\n3. Resep Nugget Tempe \r\nTempe bisa jadi sumber protein nabati yang juga bisa dibuat nugget. Lapisan tepung roti pada permukaan nugget ini membuat teksturnya renyah krenyes.\r\n\r\nSupaya makin enak, campur keju parut pada adonan nugget. Saat sudah digoreng, nugget tempe paling enak dimakan bersama saus sambal. Mantap! Yuk bikin nugget tempe dengan resep ini.\r\n\r\n4. Resep Nugget Ikan \r\nKalau punya anak yang ogah makan ikan, coba buat nugget ikan. Nugget bisa dibuat dengan menggunakan ikan dori atau ikan ternggiri yang berdaging tebal.\r\n\r\nKalau sudah jadi nugget, pasti si kecil mau menyantapnya. Tambah cincangan wortel supaya nugget lebih kaya gizi. Cek resep ini untuk membuat nugget ikan yang lembut dan gurih.\r\n\r\n5. Resep Nugget Pisang\r\nTidak melulu asin gurih, nugget juga kini bisa dibuat varian manisnya. Ada nugget pisang yang tengah jadi camilan kekinian. Nugget pisang ternyata mudah dibuat lho.\r\n\r\nNugget pisang bisa jadi camilan kala bosan menyantap pisang goreng. Kriuk manis nugget pisang makin enak jika ditambah saus cokelat atau strawberry. Yuk coba buat nugget pisang dengan resep ini.\r\n\r\n(dvs/odi)', 8, '06012019235944cad6c1cd-8a78-414b-a9f6-5eeae79deb38.jpeg', '2019-01-07 04:12:38'),
(9, 'Kemenhub Juga Siapkan Aturan untuk Ojek Online', 'Jakarta - Pemerintah melalui Kementerian Perhubungan (Kemenhub) akhirnya akan mengeluarkan aturan untuk ojek online. Langkah ini dilakukan setelah Kemenhub mengeluarkan aturan untuk taksi online.\r\n\r\nMenteri Perhubungan (Kemenhub) Budi Karya Sumadi mengatakan kalau pihaknya akan mengeluarkan aturan untuk ojek online. Hal ini demi meningkatkan keselamatan bagi pengemudi.\r\n\r\nDirangkum detikFinance, Minggu (6/1/2019) begini ulasan berita selangkapnya', 2, '07012019004112fc4243a2-3f18-46f0-ac7d-d61724a2f2bf_169.jpeg', '2019-01-07 06:41:12'),
(10, 'Termasuk Pemaparan Visi Misi, Debat Capres Pertama Ada 6 Segmen', 'Jakarta - KPU telah membuat susunan acara debat capres pertama dalam Pilpres 2019. Pada debat pertama, total akan ada enam segmen, namun debat yang melibatkan capres-cawapres hanya dilangsungkan dalam empat segmen.\r\n\r\n\"Kita sudah menuntaskan rundown debatnya, debat nanti akan disusun dalam empat segmen,\" ujar Ketua KPU Arief Budiman di kantor KPU, Jl Imam Bonjol, Jakarta Pusat, Senin (7/1/2019).\r\n\r\nSebelum debat dimulai, pada segmen pertama, capres-cawapres dipersilakan menyampaikan visi-misi. Debat dimulai pada segmen kedua dan ketiga. Capres-cawapres akan menjawab pertanyaan yang telah disusun panelis.\r\n\r\n\"(Segmen) pertama penyampaian visi-misi, kemudian segmen kedua dan ketiga itu menjawab pertanyaan yang telah disusun oleh para pakar,\" kata Arief.\r\n\r\nSedangkan pada dua segmen berikutnya, paslon akan menjawab pertanyaan dari paslon lainnya. Arief mengatakan, untuk segmen pertanyaan panelis dan pertanyaan antarpaslon, diberikan waktu yang sama, agar debat berlangsung secara berimbang.\r\n\r\n\"Segmen keempat dan kelima itu debat antarkandidat, jadi pertanyaan yang diajukan oleh masing-masing paslon kepada paslon lain,\" kata Arief.\r\n\r\nDebat akan ditutup dengan closing statement oleh masing-masing paslon pada segmen keenam. Arief juga mengatakan paslon akan menyampaikan keterangan kepada media secara bersamaan setelah debat berlangsung.\r\n\r\n\"Kemudian pada segmen terakhir atau segmen keenam akan ada closing statement oleh masing-masing paslon. Nah, setelah dilakukan debat selesai, kami sepakati akan dilakukan presscon (konferensi pers) bersama dari tim kampanye 01 dan 02. Jadi kami ingin membangun kultur baru bahwa pemilu ini bisa dilakukan kompetisinya dengan selalu bersama dan bergandengan,\" tuturnya.\r\n\r\nNantinya, segmen pertama pemaparan visi-misi akan dilakukan dengan durasi 23 menit 15 detik. Segmen kedua pendalaman visi-misi hukum dan HAM 15 menit 30 detik. Segmen ketiga pendalaman visi-misi korupsi dan terorisme 15 menit 30 detik. Segmen keempat dan kelima debat dan saling bertanya antarkandidat dengan masing-masing waktu 13 menit dan segmen keenam closing statement 11 menit 30 detik.\r\n\r\nSusunan acara ini diambil berdasarkan kesepakatan dalam pertemuan KPU bersama masing-masing perwakilan timses paslon dan media yang akan menyiarkan debat pertama. Debat pertama ini akan dilakukan pada tanggal 17 Januari 2019, dengan mengusung tema \'HAM, Hukum, Korupsi, dan Terorisme\'.\r\n(dwia/jbr)', 1, '070120192129276007cf03-7623-497e-aa6f-b58ee6d256c4_43.jpeg', '2019-01-08 03:29:27'),
(11, 'Nvidia Kenalkan Kartu Grafis Baru dengan Visual Lebih Realistis', 'Las Vegas - Nvidia memanaskan perhelatan CES 2019 dengan membawa kartu grafis barunya, yang menawarkan visual yang lebih nyata. Berapa harganya?\r\n\r\nPerangkat tersebut bernama GeForce RTX 2060, dibuat berbasis arsitektur Turing yang dirancang untuk membuat ray-tracking lebih mudah diakses.\r\n\r\nKartu grafis ini menawarkan 52T Tensor flops, 5 Gigarays per detik, dan 6 GB memori G6. GeForce RTX 2060 diklaim 60% lebih cepat daripada GPU paling populer Nvidia, GTX 1060.\r\n\"RTX 2060 bahkan mampu mengalahkan GeForce GTX 1070 Ti,\" ujar CEO Nvidia Jensen Huang di acara peluncuran di MGM Grand Hotel, Las Vegas, Minggu (6/1).\r\n\r\nMembuktikan kemampuan GPU terbarunya, Huang lantas memamerkan demo Battlefield V dengan RTX menyala di 1440p.\r\n\r\nSaat menampilkam misi pertempuran Rotterdam, Hang langsung menunjukkan bagaimana GPU Nvida mampu menampilkan pantulan matahari dan perahu di atas air. Sejumlah bangunan pun tercermin di atas air dan kaca mobil.\r\n\r\nBos Nvidia itu kemudian memastikan kartu grafis anyar itu akan tersedia pada 15 Januari mendatang. Harga GPU GeForce RTX 2060 dibanderol USD 349 atau sekitar Rp 4,9 juta.\r\n\r\nDalam kesempatan ini, Nvidia juga menawarkan GPU baru dengan bundling game Anthem atau Battlefield V. Sedangkan RTX 2080 Ti hadir dengan keduanya.\r\n\r\nHuang turut pula mengumumkan 40 model laptop baru dari sejumlah OEM ternama yang ditenagai GPU RTX. Perangkat ini baru akan tersedia pada akhir Januari.\r\n\r\nDari model-model baru, 17 perangkat di antaranya mengusung desain Nvidia Max-Q yang menawarkan pengalaman yang lebih tipis dan lebih senyap.\r\n\r\n(rns/rns)', 3, '07012019213220a8a02faf-0dec-4bb1-9222-b9c65b226245.jpeg', '2019-01-08 03:32:20'),
(12, 'Benarkah Minum Air Kelapa Bisa Menetralkan Racun?', 'Jakarta - Air kelapa sering kali dianggap masyarakat sebagai penyembuh ketika seseorang keracunan atau terkena alergi makanan. Namun benarkah air kelapa bisa menetralkan racun?\r\n\r\nMedical Manager Consumer Health Division PT Kalbe Farma, dr. Helmin Agustina Silalahi mengungkapkan belum ada penelitian ilmiah mengenai air kelapa dapat menetralkan racun.\r\n\r\n\"Namun ada kepercayaan turun temurun mengenai hal ini,\" ungkap dr. Helmin kepada detikHealth, Senin (7/1/2019).\r\n\r\nFaktanya, air kelapa mengandung jumlah elektrolit yang lebih banyak dari air putih sehingga bisa mempercepat pemulihan diare dan membuat perut terasa lebih nyaman. Jadi, menurutnya, air kelapa tidak bisa dikatakan berfungsi menetralkan racun secara langsung.\r\n\r\nWalaupun demikian, dr. Helmin menjelaskan bahwa air kelapa memiliki kandungan yang baik bagi tubuh. Mulai dari vitamin C dan beberapa jenis vitamin B seperti niacin, asam pantotenat, biotin, riboflavin, asam folat, hingga thiamine.\r\n\r\n\"Air kelapa juga mengandung karbohidrat dan elektrolit yang sama dengan cairan tubuh (kandungan karbohirat 6-8%). Kandungan tersebut berfungsi memenuhi kebutuhan karbohidrat sekaligus meningkatkan absorpsi cairan untuk kebutuhan harian,\" jelasnya.\r\n\r\nSelain itu, air kelapa mengandung mineral seperti natrium, kalium, calcium, magnesium, besi, copper, phosphor, sulfur, dan chlorine. Sehingga seseorang diperbolehkan jika ingin mengonsumsi air kelapa setiap hari.\r\n\r\n\"Boleh saja asalkan (porsi) secukupnya, satu sampai tiga kali sehari masih wajar karena apapun yang berlebihan tidak baik bagi tubuh,\" katanya.\r\n\r\nBadan Pangan dan Pertanian PBB (FAO) juga mengungkapkan bahwa air kelapa memiliki banyak manfaat. Salah satunya, air kelapa dinyatakan sebagai minuman rehidrasi alami yang direkomendasikan untuk atletik karena mengandung nutrisi karbohidrat, asam amino, vitamin, dan ion yang dapat memberikan energi.\r\n\r\nUntuk mendapatkan manfaat air kelapa secara praktis, konsumsi Hydro Coco yang dibuat dari air kelapa asli serta dibuat tanpa pemanis dan pengawet buatan. (mul/mpr)', 4, '0701201921343031fae5ba-1f8e-4000-b640-453e64702520_169.jpeg', '2019-01-08 03:34:30'),
(13, 'Tempat di Bandung yang Keren, Instagramable dan Gratis!', 'detikTravel Community - Wisata ke Bandung tidak harus mengeluarkan banyak uang. Banyak tempat wisata keren dan instagramable yang gratis dan menarik untuk dikunjungi. Salah satunya adalah Bandung Planning Gallery.\r\n\r\nJika traveler berkunjung ke Bandung, dan ingin mencari tempat wisata yang seru , kekinian dan seru tentu saja Bandung Planning Gallery bisa menjadi pilihan. Terletak dalam kawasan yang sama dengan Balaikota Bandung dan tepat bersebelahan dengan Taman Sejarah Bandung, traveler akan mendapatkan berbagai informasi menarik mengenai pembangunan Bandung.\r\n\r\nTidak hanya mendapatkan informasi mengenai berbagai pembangunan maupun berbagai spot yang menarik dan tersebar di kota Bandung, namun traveler akan bisa mendapat informasi mengenai rencana pembangunan Kota Bandung di masa yang akan datang, maupun sejarah Kota Bandung pada zaman dahulu. Walaupun segala hal di Bandung Planning Gallery merupakan segala hal yang berhubungan dengan pembangunan kota Bandung, namun seluruh informasi di sini disajikan dengan menggunakan perpaduan audio visual yang sangat menarik dan modern. Seperti halnya terdapat virtual reality yang menggambarkan situasi Bandung pada masa yang akan datang, maupun adanya augmented reality yang membuat pengunjung seakan berada di Bandung pada masa lalu.\r\n\r\nAneka informasi di Bandung Planning Gallery disajikan secara modern melalui LED interactive. Hal ini memungkinkan bagi masyarakat Kota Bandung maupun pengunjung memberikan masukan ataupun kritikannya kepada pemerintah mengenai kebijakan ataupun jika ada keluhan seputar aneka fasilitas perkotaan. Yang menjadi favorit di tempat ini dan sempat viral di berbagai media sosial tentu saja adalah Kubah Aspirasi, dimana warga kota Bandung bisa menempelkan aneka aspirasi atau harapan dengan menempelkan sticky notes berwarna-warni.\r\n\r\nNamun buat traveler yang memiliki tinggi di atas rata-rata harap berhati-hati, sebab harus menunduk untuk bisa memasuki kubah ini. Selain itu yang cukup menarik di Bandung Planning Gallery tentu saja adalah maket Kota Bandung, dimana traveler cukup menekan tombol bertuliskan bangunan-bangunan ikonik Bandung, dan akan bangunan yang dipilih tersebut akan menyala.\r\n\r\nBandung Planning Gallery dibuka untuk umum dari hari Senin sampai Jumat pada pukul 09.00-16.00. Di sekitar tempat ini pun juga terdapat aneka objek wisata menarik lainnya seperti Taman Sejarah, Taman Labirin, Taman Badak, dan Taman Dewi Sartika.', 5, '07012019213640img_20180930220848_5bb0e7000c23d.JPG', '2019-01-08 03:36:40'),
(14, 'Menantang Marc Marquez Jadi Juara Dunia dengan Tiga Pabrikan Berbeda', 'Jakarta - Marc Marquez diyakini bisa memenangi juara dunia dengan tiga pabrikan berbeda. Mekanik legendaris MotoGP Jeremy Burgess menantikan momen tersebut.\r\n\r\nMarquez saat ini mendominasi MotoGP bersama Honda. Menunggangi mesin Honda, rider asal Spanyol ini sudah lima kali merebut gelar kelas primer dalam enam musim terakhir.\r\n\r\nSatu musim di mana dia gagal merebut gelar juara dunia sejak naik kelas di 2013 adalah pada 2015, di mana saat itu titel dimenangi Jorge Lorenzo. Lorenzo sendiri kini jadi rekan setimnya di Repsol Honda usai pindah dari Ducati.\r\n\r\nMelihat kemampuan Marquez, mekanik legendaris MotoGP Jeremy Burgess percaya ada potensi untuk pebalap 25 tahun itu juara dengan pabrikan lain. Jika bisa mewujudkannya, maka Marquez akan jadi yang pertama dalam sejarah kelas primer Gran Prix.\r\n\r\n\r\nBelum ada satupun pebalap yang bisa jadi juara dunia dengan mesin dari tiga pabrikan berbeda. Giacomo Agostini, Valentino Rossi, Eddie Lawson, Casey Stoner, dan Geoff Duke hanya mampu juara dengan dua pabrikan berbeda.\r\n\r\n\"Mengingat betapa Marc masih muda, dia berpotensi jadi juara dunia dengan tiga mesin yang berbeda: Honda dan dua lainnya. Maka dia akan melakukan sesuatu yang tak dilakukan Valentino, Casey Stoner, atau Eddie Lawson,\" kata Burgess.\r\n\r\n\"Marc masih cukup muda dan akan menarik kalau dia pindah dari Honda ke pabrikan lain dalam beberapa tahun ke depan,\" ujar mekanik tiga juara dunia ini seperti dilansir Motorsport-Total.\r\n\r\nBurgess adalah sosok di balik sukses Wayne Gardner, Mick Doohan, dan Rossi memenangi GP. (raw/rin)', 6, '07012019214028683e0b0e-93e6-437e-b077-ca83c61ae961_169.jpeg', '2019-01-08 03:40:28'),
(16, 'MOTOR baru', 'yamaha mwngeluarkan motor baru', 7, '08012019101441683e0b0e-93e6-437e-b077-ca83c61ae961_169.jpeg', '2019-01-08 16:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Politics'),
(2, 'Business'),
(3, 'Technologies'),
(4, 'Health'),
(5, 'Travel'),
(6, 'Sports'),
(7, 'Otomotive'),
(8, 'Foods');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `commented_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_berita`, `id_users`, `komentar`, `commented_at`) VALUES
(1, 12, 1, 'masa?', '2019-01-08 00:00:00'),
(6, 12, 1, 'bagus', '2019-01-08 07:02:27'),
(8, 12, 2, 'Harus coba!', '2019-01-08 07:07:33'),
(10, 12, 2, 'bagus untuk orang orang toxic :v', '2019-01-08 07:09:00'),
(12, 12, 2, 'coba komen', '2019-01-08 07:10:59'),
(13, 12, 2, 'ini komentar', '2019-01-08 07:12:02'),
(14, 12, 2, 'aaaaaa', '2019-01-08 07:14:54'),
(15, 11, 1, 'keren', '2019-01-08 08:00:48'),
(18, 10, 5, 'good', '2019-01-08 16:07:30'),
(19, 10, 6, 'alert(\"Hallo\")', '2019-01-08 16:16:47'),
(23, 11, 1, 'alert(\"xss testing\")', '2019-01-09 13:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `nama`, `username`, `password`) VALUES
(1, 'putrilutfiani29@gmail.com', 'Putri Alvina Lutfiani', 'putrialutfi', 'c052d067143c635079ba0024d713c727'),
(2, 'vinalutfi29@gmail.com', 'Benedict Cumberbatch', 'benedict', 'ac32f600827910984f686ff3a7419a7c'),
(3, 'dasdas@adada.com', 'asdasd', 'sss', '9f6e6800cfae7749eb6c486619254b9c'),
(5, 'nurfazriyatunnisa05@gmail.com', 'nisa', 'nisa', '25d55ad283aa400af464c76d713c07ad'),
(6, 'gunawanr14@gmail.com', 'gunawan', 'gunawan', 'dc96b97c4ffbead46ca25ef5d4b77cbe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori` (`kategori_brt`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_berita` (`id_berita`),
  ADD KEY `fk_user` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`kategori_brt`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_berita` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
