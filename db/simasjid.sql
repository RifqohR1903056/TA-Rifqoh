-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 05. Februari 2021 jam 16:56
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simasjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `jdl_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text,
  `gambar_berita` varchar(30) DEFAULT NULL,
  `tgl_berita` date NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `jdl_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(1, 'Sebelum Tidur, Yuk Bacakan 5 Dongeng Anak Islami untuk Si Kecil', 'sebelum-tidur-yuk-bacakan-5-dongeng-anak-islami-untuk-si-kecil', '<p>Waktu di rumah saja selama pandemi bisa Mama dan Papa manfaatkan untuk membangun kedekatan dengan si Kecil, lho. Mama bisa mengajak si Kecil melakukan kegiatan menyenangkan bersama untuk mengisi waktu luang selama di rumah.</p>\r\n\r\n<p>Ketika seharian sudah bermain atau melakukan kegiatan menyenangkan bersama, saat mau tidur Mama atau Papa juga bisa membacakan anak dongeng yang akan membangun kemampuan visualisasi, meningkatkan berpikir kritis, serta membantu anak memahami budaya lain yang dapat anak pahami sejak dini.</p>\r\n\r\n<p>Ada banyak jenis dongeng yang bisa Mama dan Papa bacakan untuk si Kecil sebagai penghantar tidur, salah satunya dongeng bernuansa Islami yang&nbsp;memiliki pesan moral agar dapat memberikan inspirasi baginya.</p>\r\n\r\n<p>Sebagai inspirasi bacaan untuk si Kecil, berikut ini&nbsp;<a href="http://popmama.com/" target="_blank"><strong>Popmama.com</strong></a>&nbsp;telah merangkum 5 dongeng anak Islami yang bisa dibacakan sebelum anak tidur. Disimak yuk, Ma!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>1. Kisah Nabi Daud A.S dan seekor ulat</h2>\r\n\r\n<p>Nabi Daud A.S merupakan Nabi yang sangat taat kepada Allah SWT. Ketaatan Nabi Daud membuatnya mendapat keistimewaan berupa kepercayaan untuk menyebarkan kitab Zabur.</p>\r\n\r\n<p>Suatu hari, beliau yang sedang membaca kitab Zabur sembari duduk tenang dalam suraunya melihat seekor ulat metah yang berada disekitarnya. Beliau kemudian&nbsp;mengawasi ulat tersebut dambil berpikir dalam hati,&nbsp;<em>&quot;Apa ya, yang Allah harapkan dari ulat kecil ini?&quot;</em></p>\r\n\r\n<p>Mengetahui pikiran Nabi Daud, Allah SWT kemudian mengizinkan ulat tersebut untuk berkata layaknya manusia. Ulat merah itu pun berkata kepada Nabi Daud:</p>\r\n\r\n<p><em>&quot;Wahai nabi Allah! Allah SWT telah mengilhamkan kepadaku untuk selalu membaca tasbih, Subhanallahu walhamdulillah wala ilaha illallahu wallahu akbar setiap hari sebanyak 1000 kali pada siang hari. Pada malam harinya, Allah SWT mengilhamkanku untuk membaca Allahumma solli ala Muhammadin annabiyyil ummiyyi wa ala alihi wa sohbihi wa sallim, sebanyak 1000 kali juga.&quot;</em></p>\r\n\r\n<p>Kemudian ulat tersebut juga berkata kepadanya:</p>\r\n\r\n<p><em>&quot;Lalu apa yang dapat kau dapat katakan kepadaku agar aku mendapat faedah darimu ya Nabi Allah?&quot;</em></p>\r\n\r\n<p>Mendengar perkataan ulat tersebut membuat Nabi Daud tersadar bahwa dirinya khilaf, ia telah memandang remeh makhluk Allah yang terlihat kecil dan tak bisa apa-apa. Padahal mereka bisa lebih dahsyat ibadahnya terhadap Allah dengan caranya sendiri.</p>\r\n\r\n<p>Kemudian Nabi Daud memohon ampun dan berserah diri pada Allah SWT. Begitulah sifat pemikir seorang Rasul yang bijak. Setelahnya beliau tak lagi&nbsp;menganggap rendah segala makhluk ciptaan Allah.</p>\r\n\r\n<p>Pelajaran yang bisa diajarkan pada anak dari kisah ini adalah, kita tak boleh&nbsp;memandang rendah dan meremehkan orang lain. Seperti ulat dalam kisah ini, meski terlihat kecil, namun ternyata ia selalu mengingat Allah SWT.</p>\r\n', '11.png', '2021-01-28', 1),
(2, 'Kisah serigala yang beriman kepada Rasulullah', 'kisah-serigala-yang-beriman-kepada-rasulullah', '<p>Dikisahkan pada masa kenabian Muhammad SAW, pada suatu daerah hiduplah seorang pengembala kambing. Pengembala tersebut harus mengurus ratusan kambing dan domba. Setiap pagi, lelaki itu membawa seluruh hewan ternak yang diamanati kepadanya ke padang rumput dekat dengan oasis.</p>\r\n\r\n<p>Namun naas, suatu hari lelaki tersebut kecolongan karena seekor serigala berhasil menerkam seekor domba yang lepas dari kerumunan. Pengembala tersebut pun mengejar sang serigala dan menakut-nakutinya dengan ayunan tongkat.</p>\r\n\r\n<p>Domba yang menjadi buruan serigala bertubuh cukup&nbsp;gemuk, sehingga serigala alami&nbsp;kesulitan saat membawanya kabur. Sang gembala pun menarik paksa domba tersebut dari cengkeraman serigala.</p>\r\n\r\n<p><em>&quot;Wahai fulan, mengapa engkau begitu zalim? Allah telah menetapkan domba itu sebagai rezekiku untuk hari ini, mengapa engkau merebutnya dariku?&quot;</em>&nbsp;ujar serigala itu kemudian.</p>\r\n\r\n<p>Betapa terkejutnya pria ini ketika mendengar serigala itu bertutur kata layaknya manusia.&nbsp;<em>&quot;Kamu... Bisa berbicara?&quot;</em>&nbsp;kata sang pengembala&nbsp;takjub.</p>\r\n\r\n<p><em>&quot;Mengapa engkau melihatku terheran-heran? Harusnya engkau tahu, ada yang lebih mengherankan daripada seekor serigala bisa berbicara,&quot;&nbsp;</em>kata hewan itu.</p>\r\n\r\n<p><em>&quot;Apa itu?&quot;</em></p>\r\n\r\n<p><em>&quot;Di Madinah, ada seorang nabi dan rasul yang Allah utus untuk sekalian alam. Namun, banyak orang yang justru membangkang dan enggan beriman kepadanya. Nama nabi itu, Rasulullah Muhammad&nbsp;shalallahu &#39;alaihi wasallam,&quot;</em>&nbsp;papar serigala.</p>\r\n\r\n<p>Keesokan harinya, lelaki pengembala itu pergi ke Madinah untuk menjumpai langsung sosok yang diceritakan serigala kemarin. Perjalanan yang tidak mudah dia tempuh dengan penuh kesabaran dan sampailah ia di Madinah.</p>\r\n\r\n<p>Setelah bertanya kepada warga setempat, lelaki itu kemudian tiba di depan Masjid Nabawi. Singkat cerita, ia berkesempatan bertemu Nabi Muhammad SAW. Kepada beliau, ia pun menuturkan kisahnya hingga sampai di Madinah.</p>\r\n\r\n<p>Kemudian Rasulullah membenarkan kisah sang gembala bahwa ada&nbsp;seekor binatang yang terang-terangan menunjukkan rasa imannya kepada Allah dan Rasul-Nya. Lebih lanjut, hal itu ternyata termasuk tanda kian dekatnya hari akhir.</p>\r\n\r\n<p><em>&quot;Yang demikian itu adalah salah satu tanda kiamat,&quot;</em>&nbsp;sabda Muhammad SAW.</p>\r\n\r\n<p>Kisah ini termaktub dalam hadis riwayat dari Abu Hurairah dan Abu Sa&rsquo;id al-Khudri, serta Imam Ahmad. Pakar tafsir Ibnu Katsir menilai sanadnya sahih.&nbsp;</p>\r\n\r\n<p>Dari kisah ini, diharapkan anak dapat selalu beriman kepada Allah SWT untuk mempersiapkan hari akhir kelak.&nbsp;<em>Wallahualam.</em></p>\r\n', '2.jpg', '2021-01-28', 1),
(3, 'Kisah Nabi Ibrahim dan api', 'kisah-nabi-ibrahim-dan-api', '<p>Dilahirkan di tengah masyarakat jahiliah yang musyrik, Nabi Ibrahim sempat alami pengasingan ke hutan oleh orangtuanya. Hal ini lantaran di zaman itu,&nbsp;Raja Namrud (negeri tempat Ibrahim tinggal) mengeluarkan peraturan untuk membunuh setiap bayi laki-laki yang baru lahir.&nbsp;</p>\r\n\r\n<p>Seiring berjalannya waktu dan tumbuh dewasa, Nabi Ibrahim yang cerdas kemudian memahami bahwa berhala yang disembah warga setempat bukanlah Tuhan yang harus disembah. Singkat cerita,&nbsp;Nabi Ibrahim pun memutuskan untuk menghancurkan semua berhala yang ada di wilayah Namrud.</p>\r\n\r\n<p>Mengetahu berhala yang ada di negerinya dirusak, Raja Namrud geram dan memerintahkan para tentaranya untuk menghukum Nabi Ibrahim dengan cara dibakar hidup-hidup.</p>\r\n\r\n<p>Ketika Nabi Ibrahim dilempar ke dalam kobaran api, ia berkata,&nbsp;<em>&ldquo;Allah (Sendiri) sudah cukup bagi kami, dan, Dia adalah yang terbaik dalam segala urusan.&rdquo;</em>&nbsp;Setelah perkataannya, api yang berkobar itu padam&nbsp;dan Nabi Ibrahim pun berjalan keluar dari puing-puing pembakaran tanpa luka sedikit pun.</p>\r\n\r\n<p>Dari kisah singkat Nabi Ibrahim di atas, ini bisa menginspirasi anak untuk melawan rasa takut atas keyakinan yang ia miliki. Saat si Kecil merasa takut, Mama bisa mengajarkan padanya&nbsp;untuk mengatakan&nbsp;<em>HasbunAllah</em>&nbsp;seperti Ibrahim. Coba yuk, Ma!</p>\r\n', '3.jpg', '2021-01-28', 1),
(4, ' Kisah Nabi Musa A.S dan Qorun', 'kisah-nabi-musa-as-dan-qorun', '<p>Pada zaman dahulu dimasa kenabian Musa A.S saat memimpin Bani Israil, ada seorang pengikutnya yang sangat taat beribadah bernama Qorun. Setiap harinya ia beribadah dan tidak mementingkan kehidupan duniawi.</p>\r\n\r\n<p>Meski disegani sebagai ulama karena ketaatannya akan ibadah, Qorun yang tak mementingkan dunai membuat kehidupan keluarganya pun jauh dari kata layak. Sang istri yang bernama Ilza pun sering mengeluhkan ingin kehidupan yang lebih layak.</p>\r\n\r\n<p>Singkat cerita, suatu hari datang dua orang lelaki utusan Raja Gholan memberinya hadiah berupa uang emas yang sangat banyak. Qorun menolaknya dan berdalih bahwa ia tak mengenal Raja Gholan dan tak membutuhkan bantuan.</p>\r\n\r\n<p>Utusan Raja Gholan kemudian berhasil membujuk istri Qorun untuk menerima hadiah tersebut. Betapa marahnya Qorun, namun ia tak tega melihat sang istri begitu bahagia. Akhirnya ia juga menerima hadiah yang diutus kedua lelaki tadi.</p>\r\n\r\n<p>Saat hidupnya mulai berlimpah harta, Qorun kemudian melupakan ibadah. Terlebih sang istri yang melarang ia untuk mengunjungi Nabi Musa dengan alasan mereka hidup susah ketika menjadi pengikutnya.</p>\r\n\r\n<p>Kemudian ini membuat Qorun tak pernah lagi beribadah dan semakin tenggeam dalam urusan duniawi.Sampai suatu ketika, seorang teman Qorun berkunjung dan mengingatkannya untuk bersedekat atas harta yang ia miliki sekarang.</p>\r\n\r\n<p>Dengan terpaksa, Qorun&nbsp;mendatangi Nabi Musa&nbsp;untuk bertanya seberapa banyak zakat yang harus ia keluarkan. Ternyata jumlah yang harus dibayarnya begitu besar, lalu timbullah prasangka buruknya terhadap Nabi Musa.</p>\r\n\r\n<p>Saat itu kemudian Qorun mulai menghasut saudagar lain untuk tidak membayar zakat, bahkan sampai tega memfitnah Nabi Musa. Melihat pengikutnya dahulu mulai berubah, Nabi Musa&nbsp;berdoa kepada Tuhan dan tak lama Tuhan mendatangkan azab untuk Qorun.</p>\r\n\r\n<p>Qorun meminta ampun, tapi semuanya sudah terlambat. Ia beserta hartanya pun habis ditelan bumi.</p>\r\n\r\n<p>Melalui cerita Nabi Musa dan Qorun di atas, Mama bisa mengajarkan pada anak untuk tidak lalai akan kenikmatan yang sudah diberikan Allah SWT. Jadilah umat Allah yang selalu bersyukur dan tak lupa bersedekah atas rezeki yang dimiliki.</p>\r\n\r\n<p>Tak masalah berapa besar jumlah yang anak keluarkan, yang terpenting didasarkan niat dan ketulusan. Sebab dalam setiap rezeki kita ada bagian untuk orang lain yang membutuhkan.</p>\r\n', '4.png', '2021-01-28', 1),
(5, 'Kisah bayi yang ditolong oleh malaikat', 'kisah-bayi-yang-ditolong-oleh-malaikat', '<p>Pada suatu zaman di Bani Israil, terjadi bencana kelaparan yang berlangsung hingga bertahun lamanya. Hal ini kemudian membuat banyak orang menderita termasuk para bayi yang membutuhkan asupan gizi untuk tumbuh kembang mereka.</p>\r\n\r\n<p>Kemudian dikisahkan seorang perempuan yang memiliki sepotong roti yang hanya cukup untuk ia makan hari itu. Saat hendak memakan roti itu, datanglah seorang pengemis tua yang membuatnya tak tega dan tanpa pikir panjang memberikan roti tadi kepada pengemis tersebut.</p>\r\n\r\n<p>Kemudian perempuan tadi pergi ke hutan untuk mencari kayu bakar. Perempuan yang memiliki seorang bayi ini dengan terpaksa mengikutsertakan bayinya karena tak ada orang yang bisa ia mintai tolong untuk menjaga bayinya.</p>\r\n\r\n<p>Singkat cerita, sang anak&nbsp;dibaringkan di atas sebuah batu besar. Saat dirinya tengah mencari kayu bakar, ia tak menyadari ada seekor anjing hutan mendekat ke arah sang anak. Dengan gerakan cepat, anjing itu menyambar sang bayi dan membawanya lari.</p>\r\n\r\n<p>Ketika mengetahui bayinya dibawa lari, sang Mama berteriak meminta tolong sambil terus mengejar anjing hutan tersebut. Namun sayang, ia harus kehilangan jejak karena anjing itu berlari begitu cepat.&nbsp;</p>\r\n\r\n<p>Atas kebaikan hati sang Mama pada sesama, Allah SWT yang melihat langsung memerintahkan malaikat Jibril untuk menyelamatkan sang bayi.</p>\r\n\r\n<p>Kemudian malaikat Jibril dengan mudah mengambil bayi itu dari mulut anjing hutan dan diserahkan kembali kepada sang Mama.</p>\r\n\r\n<p>Dari dongeng singkat di atas, pelajaran yang bisa anak dapat adalah dengan saling membantu sesama, insya Allah kebaikan tersebut akan dibalas kebaikan oleh Allah SWT. Sebab kita sendiri juga tak tau kapan akan mengalami musibah dan membutuhkan pertolongan orang lain.</p>\r\n\r\n<p>Nah, itu dia kumpulan dongeng singkat bernuansa Islami yang bisa Mama dan Papa bacakan sebelum anak tidur. Selain dapat menenangkan hati si Kecil, cerita-cerita di atas juga bisa dijadikan pelajaran hidup baginya kelak.</p>\r\n\r\n<p>Semoga bermanfaat dan selamat membcakan dongeng untuk si Kecil ya, Ma, Pa!</p>\r\n', 'bc.png', '2021-01-28', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `nama_gallery` text NOT NULL,
  `sampul` text NOT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `nama_gallery`, `sampul`) VALUES
(1, 'gallery 4', 'WhatsApp_Image_2021-01-27_at_11_37_36.jpeg'),
(2, 'gallery 3', 'WhatsApp_Image_2021-01-27_at_11_37_33.jpeg'),
(3, 'gallery 2', 'WhatsApp_Image_2021-01-27_at_11_37_31.jpeg'),
(5, 'gallery 1', 'WhatsApp_Image_2021-01-27_at_11_37_28.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text,
  `tgl` date NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tgl`) VALUES
(5, 'RUKUN SHALAT (13/11/2017)', 'A. Syarat sah: bagian sahnya shalat diluar pelaksanaan shalat ( Pembahasan bulan lalu )\r\nB. Rukun Shalat adalah bagian dari pelaksanaan shalat :\r\n1. Takbir\r\nTakbiratul Ihram ( Takbir dimulainya shalat dan sifatnya wajib dan Takbiran intikal ( Takbir perpindahan setiap gerakan yang sifatnya sunnah dan tidak dianjurkan lebih dari 3 harakat )\r\nTakbir Qauliah : Takbir yang dilakukan dan hanya kita yang mendengar\r\nTakbir\r\n2. Berdiri\r\nHukumnya wajib bagi shalat fardhu dan sunnah bagi sholat sunnah\r\n3. Al Qiroah : Wajib membaca surah Al Fatihah dan sunnah membaca surah lain\r\nAnjuran :\r\n- Al Fatihah di baca ayat per ayat.\r\n- di baca sesuai kaidah Tajwid', '2021-02-05'),
(6, 'KAJIAN FIQIH ; PENTINGNYA MEMASUKKAN HATI DALAM SHALAT ', 'Pengurus Masjid Raudharul Jannah Kompleks Griya Mulya Asri kembali menggelar pengajian rutin, kajian Fiqih yang dibawakan oleh narasumber kita,  Bapak Dr. H.Abdul Rahim Amin, M.THI yang kali ini lebih memperdalam tentang pelaksanaan shalat dimana sangat ditekankan untuk "memasukkan hati" dalam setiap melaksanakan ibadah shalat kita sehingga bisa lebih fokus serta khusuk dalam menjalankannya dalam meningkatkan kualitas ibadah shalat sehingga pada akhirnya shalat itu tidak menjadikan beban tetapi menjadikannya sebagai kebutuhan setiap muslim dan muslimat dalam menjalankannya.', '2021-02-05'),
(7, 'KAJIAN SPESIAL MENYAMBUT BULAN RAMADHAN BERSAMA UST DR.MUTTAQIEN SAID,LC,MA ', 'Kajian kali ini dilakukan khusus untuk menyambut bulan suci Ramadhan 114H yang diantarkan oleh Bapak Dr. Muttaqien Said, Lc.MA dimana beliau adalah Pimpinan Pondok Pesantren Darul Abrar Bone yang berkesempatan bersilaturahim di Masjid Raudhatul Jannah kompeks Griya Mulya Asri..', '2021-02-05'),
(8, 'KAJIAN AGAMA DI MALAM AKHIR TAHUN 2019 (31/12/2020)', 'Untuk mengisi kegiatan akhir tahun 2019 Pengurus Masjid Raudhatul Jannah Kompleks Griya Mulya Asri (GMA) menggelar Kajian, serta Zikir untuk lebih mendekatkan diri kepala Allah SWT yang digelar tanggal 31 Desember 2019 bada Shalat Isya. Kajian kali ini dibawakan oleh Ustad Andi Hadi Ibrahim Baso, S.Sos, MA yang pada intinya mengajak jamaah untuk lebih banyak mengingat Allah SWT dengan segala rahmat yang diberikan kepada kita semua dengan banyak berzikir dan bersyukur, dan juga menyampaikan bahwa kita pada akhirnya akan kembali ke asalnya menjadi tanah sebelum dibangkitkan nanti di padang masyar. Pada kesempatan lain beliau menyambut baik kegiatan ini dengan membandingkan segala hiruk pikuk warga dengan segala kegiatan di malam tahun baru seperti biasanya.', '2021-02-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prestasi`
--

CREATE TABLE IF NOT EXISTS `tbl_prestasi` (
  `id_prestasi` int(11) NOT NULL AUTO_INCREMENT,
  `nm_kajian` varchar(50) DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `nm_ustad` varchar(255) DEFAULT NULL,
  `pembahasan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_prestasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbl_prestasi`
--

INSERT INTO `tbl_prestasi` (`id_prestasi`, `nm_kajian`, `hari`, `nm_ustad`, `pembahasan`) VALUES
(2, 'kajian rabu malam', 'rabu', 'sutanto', 'hadist'),
(3, 'kajian jumat malam', 'jumat', 'sudarso', 'tasawuf'),
(4, 'kajian ba''da shubuh', 'Ahad', 'Hasan Basri', 'Tajwid'),
(5, 'kajian ba''da isya', 'selasa', 'ustad1', 'fiqih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sapra`
--

CREATE TABLE IF NOT EXISTS `tbl_sapra` (
  `id_sapra` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sapra` text NOT NULL,
  `sampul` text NOT NULL,
  PRIMARY KEY (`id_sapra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_sapra`
--

INSERT INTO `tbl_sapra` (`id_sapra`, `nama_sapra`, `sampul`) VALUES
(1, 'Area Parkir', 'Yayasan_Al-Hidayah_Small.png'),
(2, 'lapangan', '2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'user', 'user', 'user', 2);
