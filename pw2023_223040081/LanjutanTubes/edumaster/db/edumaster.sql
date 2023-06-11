-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 12:05 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edumaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `deskripsi`, `gambar`, `id_kategori`) VALUES
(3, 'Tips Cara Tepat Jawab Structure TOEFL di Soal Bahasa Inggris', 'Soal structure TOEFL itu juaranya bikin mumet. Ya ga, Sobat Pintar? Siapa nih, yang tiap liat judul besar bertuliskan Structure and Written Expression rasanya mata seketika berkunang-kunang?\r\n\r\nTenang, Sobat. Kamu bukan satu-satunya orang yang mengalaminya. Kalau sekarang kamu lagi belajar TOEFL, terutama latihanan TOEFL structure, pas banget, nih. Kita belajar yuk, gimana cara menjawab soal TOEFL structure dengan tepat.\r\n\r\nSebelum membahas tentang Structure and Written Expression dalam TOEFL, kamu perlu tau terlebih dahulu tentang TOEFL iBT dan TOEFL PBT. Nah, apaan tuh?\r\n\r\nTOEFL iBT (Internet-Based Test) adalah format TOEFL yang terdiri dari empat bagian yakni Listening, Reading, Speaking, dan Writing. Skor TOEFL iBT berkisar antara 0 sampai 120, dengan skor maksimum setiap bagian adalah 30. Sementara itu, TOEFL PBT (Paper-Based Test) biasanya digunakan dalam tes tanpa akses internet. TOEFL PBT juga terdiri dari empat bagian, yaitu Listening, Structure and Written Expression, Reading, dan Writing. Skor TOEFL PBT berkisar antara 310 sampai 677, dengan skor maksimum setiap bagian adalah 68-69.\r\n\r\nUmpamanya kamu mau mengikuti TOEFL PBT nih, untuk mencapai skor TOEFL 400 harus betul berapa? Sebenarnya tidak ada jumlah pasti atau persentase tertentu dari jawaban benar, Sobat Pintar. Asal kamu tau, skor TOEFL dihitung dengan menggunakan metode statistik yang kompleks, dan perhitungan skor melibatkan berbagai faktor seperti tingkat kesulitan setiap butir soal maupun kinerja relatif peserta lain yang telah mengambil tes. Itulah sebabnya, sulit menyebut jumlah pasti jawaban yang benar agar kamu dapat mencapai skor tertentu. Kamu juga harus tau bahwa TOEFL PBT sudah tak lagi digunakan di beberapa negara sejak April 2021.\r\n\r\nMungkin kamu jadi bertanyea-tanyea, nih. Emangnya materi structure TOEFL apa saja? Udah gitu, ada berapa bagian structure TOEFL?\r\n\r\nJika latihan TOEFL Structure and Written Expression, kamu akan mendapati soal-soal tentang pemilihan kata yang tepat, struktur kalimat, hubungan kata, dan tata bahasa umum. Salah satu bagian dalam TOEFL PBT ini memang menguji pemahaman kita dalam tata bahasa dan struktur kalimat. Dalam TOEFL structure test ini, biasanya kamu akan mendapati subbagian berikut.\r\n\r\n1. Error Recognition\r\nDi subbagian ini, kita mendapati soal-soal berupa kalimat atau potongan kalimat yang mengandung satu atau lebih kesalahan tata bahasa. Cara jawab soal structure TOEFL ini adalah dengan mengidentifikasi di mana kesalahan tersebut terjadi, seperti subject-verb agreement, penggunaan pronoun yang tepat, pemilihan kata yang tepat, kesalahan irregular verbs, dan lain sebagainya.\r\n\r\n2. Sentence Completion\r\nPada subbagian ini, kita menjumpai soal-soal berupa kalimat yang tidak lengkap, dan ada satu atau lebih slot kosong yang perlu diisi dengan kata atau frasa yang tepat secara tata bahasa. Cara menjawab soal TOEFL structure ini adalah dengan memilih jawaban yang paling sesuai untuk melengkapi kalimat dengan struktur yang benar.\r\n\r\n3. Sentence Improvement\r\nSubbagian ini menghadapkan kita pada soal-soal berupa kalimat yang mengandung kesalahan tata bahasa. Cara jawab soal structure TOEFL ini adalah dengan memilih jawaban yang paling baik untuk memperbaiki kesalahan tersebut dan membuat kalimat menjadi lebih benar secara tata bahasa.\r\n\r\nDari penjabaran subbagian-subbagian di atas, kamu bisa melihat kan, Sobat, bahwa pemahaman kita tentang tata bahasa Inggris yang baik dan kemampuan untuk mengenali kesalahan tata bahasa serta memperbaikinya itu sangat dibutuhkan. Makanya, jangan capek latihan TOEFL structure, ya!\r\n\r\nLatihan soal memang perlu dirutinkan, tetapi jangan sampai kelupaan belajar structure TOEFL, Sobat. Titik Nol English Course merekomendasikan empat materi penting di bawah ini yang wajib kamu kuasai biar lancar, fafifu wasweswos, ngerjain TOEFL structure test.\r\n\r\n1. Part of Speech\r\nMateri part of speech meliputi noun, pronoun, verb, adjective, adverb, preposition, conjunction, dan interjection. Menguasai materi ini penting, khususnya agar kamu dapat menyelesaikan soal structure TOEFL tentang error recognition maupun sentence completion.\r\n\r\n2. Phrase\r\nDalam Bahasa Inggris, ada beberapa frasa yang harus kamu kenali yaitu noun phrase, adverbial phrase, verb phrase, gerund phrase, dan infinitive phrase. Mengenal frasa ini penting banget, terutama saat kamu dihadapkan pada soal structure TOEFL tentang sentence completion dan improvement.\r\n\r\n3. Sentence and Clause\r\nPada dasarnya Bahasa Inggris mengenal empat jenis struktur kalimat, yakni simple sentence, compound sentence, complex sentence, dan compound complex sentence. Dalam tiga jenis kalimat terakhir, terdapat klausa atau anak kalimat yang dihubungkan dengan conjunction. Iya, belajarnya nyambung sama part of speech tuh, Sobat. Dengan kata lain, semakin baik Bahasa Inggris kita, semakin baik pula kemampuan kita untuk memperbaiki kesalahan tata bahasa dalam setiap soal structure TOEFL.\r\n\r\n4. Tense\r\nKamu sudah kenal luar dalam sama 16 tenses dalam Bahasa Inggris, Sobat Pintar? Kalau udah ikrib sama semua tenses itu, hampir bisa dipastikan kamu takkan mengalami kesulitan yang berarti saat mengikuti TOEFL structure test.', '6482f28c2c6d2.jpg', 1),
(5, 'Apa itu Kalimat Majemuk? Pahami Contoh dan Jenisnya', 'Kalimat majemuk itu apa, sih? Kamu sudah mengenal kalimat majemuk atau belum, Sobat Pintar? Pernah ngga, kamu menjumpai kalimat yang panjang saat sedang membaca majalah, buku, atau yang lainnya? Nah, kalimat panjang identik dengan sebutan kalimat majemuk.\r\n\r\nTerkadang beberapa penulis ingin menyampaikan informasi kepada pembaca dengan cara yang tidak membosankan, sehingga mereka kerap kali menggunakan kalimat yang lebih kompleks. Kalau begitu, apakah ciri-ciri dari kalimat majemuk adalah panjang dan kompleks? Ehm... Enggak gitu juga, sih. Biar ga makin bertanyea-tanyea, kita pelajari bersama, yuk!\r\n\r\nKembali ke pertanyaan di awal, Sobat. Apa yang dimaksud dengan kalimat majemuk?\r\n\r\nKalimat majemuk adalah kalimat yang terdiri atas dua atau lebih klausa yang saling berhubungan dan memiliki arti yang utuh. Klausa sendiri adalah satuan bahasa yang memiliki subjek dan predikat serta bisa berdiri sendiri sebagai kalimat utuh apabila dipisahkan satu dengan yang lainnya. Agar lebih mudah dipahami, perhatikan dua kalimat berikut.\r\n\r\n(1) Kita pergi.\r\n\r\n(2) Kita pergi saat ibu sampai.\r\n\r\nKalimat (1) merupakan kalimat tunggal atau kalimat sederhana sebab hanya memiliki satu klausa, yaitu kita sebagai subjek (S) dan pergi sebagai predikat (P). Sementara itu, kalimat (2) merupakan contoh kalimat majemuk sebab memiliki dua klausa. Klausa satu adalah kita pergi (S-P) dan klausa dua adalah ibu sampai (S-P). Klausa dihubungkan oleh konjungsi kalimat majemuk, atau biasa disebut kata hubung. Pada kalimat (2), kedua klausanya dihubungkan oleh kata saat.\r\n\r\nBerdasarkan hubungan antarklausanya, kalimat majemuk dapat dibedakan menjadi tiga jenis. Berikut jenis-jenis kalimat majemuk yang perlu kamu ketahui.\r\n\r\n(1) Kalimat Majemuk Setara\r\nKalimat majemuk setara adalah kalimat majemuk yang terdiri atas dua atau lebih klausa utama, yang memiliki arti yang setara atau sejajar. Artinya, klausa yang satu dengan klausa lainnya memiliki fungsi dan peran yang sama, contohnya:\r\n\r\nDia suka bermain sepak bola dan dia juga suka berenang.\r\n\r\nPada contoh di atas, terdapat dua klausa utama yang memiliki arti yang setara, yaitu &#039;Dia suka bermain sepak bola&#039; dan &#039;dia juga suka berenang.&#039; Kalimat majemuk setara dihubungkan oleh konjungsi koordinatif, yaitu konjungsi yang menghubungkan unsur-unsur setara. Contoh konjungsi koordinatif ialah kata dan, serta, atau, sedangkan, dan tetapi.\r\n\r\n(2) Kalimat Majemuk Bertingkat\r\nKalimat majemuk bertingkat adalah kalimat majemuk yang terdiri atas dua atau lebih klausa utama yang saling berkaitan. Pada kalimat majemuk bertingkat, satu klausa menjadi inti dan klausa lainnya menjadi keterangan. Biar lebih paham, yuk Sobat, perhatikan contoh berikut ini.\r\n\r\nKarena hujan lebat, aku tidak pergi ke sekolah.\r\n\r\nPada contoh kalimat majemuk bertingkat di atas, terdapat dua klausa, yaitu &#039;hujan lebat (S-P)&#039; dan &#039;aku tidak pergi ke sekolah&#039; (S-P-Ket.T). Dua klausa tersebut dihubungkan oleh kata karena. Klausa ke-1 &#039;hujan lebat&#039; merupakan klausa yang menempati unsur keterangan, yaitu keterangan penyebab. Sementara itu, klausa ke-2 &#039;aku tidak pergi ke sekolah&#039; merupakan klausa inti.\r\n\r\nKalimat majemuk bertingkat dihubungkan oleh konjungsi subordinatif, yaitu kata hubung yang menghubungkan dua klausa atau lebih, yang tidak memiliki status yang sama. Contoh konjungsi subordinatif adalah karena, jika, sehingga, dan sejak.\r\n\r\n(3) Kalimat Majemuk Campuran\r\nJenis kalimat majemuk yang terakhir adalah kalimat majemuk campuran. Kalimat majemuk ini terdiri atas dua atau lebih klausa yang saling terkait dan memiliki hubungan yang berbeda-beda, contohnya:\r\n\r\nBapak masih bekerja ketika saya pulang sekolah, padahal sudah pukul 3 sore.\r\n\r\nPada contoh di atas, terdapat dua klausa yang saling terkait dan memiliki hubungan yang berbeda-beda: &#039;Bapak masih bekerja&#039; dan &#039;saya pulang sekolah&#039; serta &#039;sudah pukul 3 sore.&#039; Biasanya kita akan menjumpai lebih dari satu konjungsi (kata hubung) di dalam kalimat majemuk campuran.\r\n\r\nGimana, Sobat Pintar, belajar tentang kalimat majemuk itu mudah, bukan? Selain kalimat majemuk, kamu juga bisa belajar tentang materi Bahasa Indonesia lainnya, seperti kalimat majemuk rapatan, melalui aplikasi Aku Pintar.\r\n\r\nKamu bisa belajar kalimat majemuk dengan lebih komplet melalui aplikasi. Mau tau contoh soal kalimat majemuk juga? Yuk, gunakan fitur Belajar Pintar di aplikasi untuk menjawab rasa penasaranmu, Sobat!', '6482447693894.jpg', 1),
(6, 'Contoh Report Text (Generic Structure) dalam Bahasa Inggris', 'Report text adalah salah satu jenis teks yang berfungsi untuk menyampaikan informasi atau laporan tentang suatu kejadian atau fenomena. Nah, siapa nih, Sobat Pintar yang suka baca artikel tentang penelitian? Bacaan yang mengulas tentang suatu penelitian adalah salah satu contoh text report.\r\n\r\nTelah disebutkan, report text atau teks laporan adalah satu jenis teks. Secara umum, fungsi report text adalah untuk menyampaikan informasi atau laporan tentang suatu kejadian atau fenomena.  (Report text is a type of text that serves to convey information or reports about an event or phenomenon.) Berikut urian mengenai fungsi report text.\r\n\r\n1. Report text menyajikan informasi atau laporan yang faktual (factual report text) dan objektif tentang suatu kejadian atau fenomena.\r\n\r\n2. Report text memberikan pemahaman yang jelas dan mudah dipahami kepada pembaca.\r\n\r\n3. Report text membantu pembaca untuk mengambil keputusan atau tindakan yang tepat berdasarkan informasi yang diberikan. \r\n\r\nNamun perlu diperhatikan Sobat, terkadang kita masih bingung membedakan antara report text dan descriptive text. Keduanya sangat berbeda, loh. Nah, apa perbedaan descriptive text dan report text? Descriptive text memberikan gambaran tentang sesuatu secara khusus. Misalnya, sebuah teks berjudul ‘Belang, My Fluffy Cat&#039; yang menggambarkan tentang seekor kucing bernama Belang, yang menjadi peliharaan si penulis. Teks ini tidak menggambarkan hewan kucing secara umum. \r\n\r\nSedangkan dalam report text, yang dijelaskan adalah kucing secara umum, baik mengenai jenis kucing, habitat hidup, kebiasaan, ataupun makanan kucing. Contoh report text singkat seperti ini lebih tepat berjudul &#039;The Cats.&#039;\r\n\r\nSaat kita bertemu seseorang pertama kali, kita mengingat ciri-ciri orang tersebut Begitu juga dengan report text, Sobat. Agar dapat mengenali report text, kita perlu mengetahui ciri-cirinya. Beberapa ciri kebahasaan dari report text adalah sebagai berikut.\r\n\r\n1. General nouns – report text menggunakan kata yang merujuk pada suatu hal secara umum, contohnya dog, cat, atau penyebutan hewan lain secara umum (my cat adalah penyebutan hewan yang spesifik).\r\n\r\n2. Relating verbs atau linking verbs - contohnya is, am, are, look, seem, taste, dan lain sebagainya.\r\n\r\n3. Timeless present tense – report text menggunakan penanda waktu Simple Present Tense, contohnya usually, often, always, dan lain sebagainya.\r\n\r\n4. Technical terms – report text menggunakan istilah yang berkaitan dengan topik atau pembahasannya. Misalnya, apabila kita membuat report text mengenai hewan, maka dalam report text tersebut haruslah ada istilah atau penyebutan mengenai hewan yang dimaksud, contohnya kucing (Felis catus). \r\n\r\n5. Introducing group or general aspect – report text menggunakan bahasa yang memperkenalkan bahasan atau objek penelitian secara umum.\r\n\r\nSetelah mengetahui garis besar penulisan report text, yuk Sobat, kita lanjut belajar bersama tentang bagaimana menulis sebuah report text. Untuk membuat report text, kita harus mengetahui apa saja generic structure-nya (generic structure of report text). Struktur report text terdiri dari general classification dan description.   \r\n\r\nGeneral Classification\r\nBagian pertama dalam penulisan report text adalah general classification, yang berarti pernyataan umum. Dalam struktur report text ini dibahas mengenai klasifikasi umum topik atau subjek yang sedang dibahas. Bagian ini memberikan gambaran umum tentang topik utama dan memperkenalkan topik yang akan diuraikan secara lebih rinci dalam bagian-bagian selanjutnya.\r\n\r\nDescription\r\nDi bagian yang kedua, kita diharuskan menulis description yang menjelaskan fenomena serta situasi dalam report text. Penjelasan dalam struktur report text ini juga mencakup sifat, ciri dan berbagai hal lainnya mengenai objek yang dibahas. Penjabaran klasifikasi dibuat lebih rinci dan dijelaskan secara ilmiah.\r\n\r\nSama seperti jenis teks atau tulisan lain, report text Bahasa Inggris juga memiliki jenis yang berbeda-beda. Beberapa contoh text report antara lain reference articles (referensi artikel), lectures (pembelajaran), scientific articles (artikel dalam bentuk penelitian), maupun textbooks (tulisan dalam buku). Di bawah ini jenis report text serta contoh report text singkat dengan bagian-bagiannya.', '648245389b57a.jpg', 1),
(8, 'Cara Membuat CV (Curriculum Vitae) yang Baik dan Menarik', 'Cara membuat CV yang menarik itu bagaimana, sih? Apakah pertanyaan seperti ini pernah mengusikmu, Sobat Pintar? Cepat atau lambat, CV (Curriculum Vitae) akan menyita perhatian kita. Itulah kenapa kita perlu tahu dan belajar tentang bukan hanya bagaimana cara bikin CV, tetapi juga bagaimana cara membuat CV yang baik dan benar. Yuk, kita mulai, Sobat!\r\n\r\nDaftar riwayat hidup atau CV adalah dokumen yang memberi informasi tentang kualifikasi seorang pencari kerja. Informasi yang disebutkan dalam sebuah daftar riwayat hidup mencakup data pribadi, latar belakang pendidikan, prestasi, keterampilan, pengalaman profesional, dan lain-lain.\r\n\r\nDiterjemahkan dari Bahasa Latin, pengertian CV adalah &quot;perjalanan hidup saya.&quot; Karena ditujukan untuk melamar pekerjaan, isi CV harus memuat informasi yang mampu menggambarkan pengalaman profesional dan akademis kita.\r\n\r\nSekali lagi, isi CV harus menggambarkan prestasi akademis dan pengalaman profesional kita. Maka dari itu, yang wajib dicantumkan dalam CV adalah:\r\n\r\n1. data diri seperti nama lengkap, tempat dan tanggal lahir, alamat, nomor telepon yang bisa dihubungi, alamat email\r\n\r\n2. riwayat pendidikan yang mencakup almamater dan gelar\r\n\r\n3. pengalaman kerja mencakup posisi yang pernah ditempati, durasi bekerja, job description, perusahaan tempat bekerja, sertakan pula pengalaman kegiatan organisasi, sukarelawan, maupun magang\r\n\r\n4. keterampilan pendukung yang memuat keahlian dalam melaksanakan tugas dan pekerjaan.\r\n\r\nPoin-poin penting isi CV di atas dicantumkan secara kronologis. Sertakan deskripsi atau penjelasan yang diperlukan pada setiap poin, sehingga perjalanan hidupmu tergambar lengkap dan jelas. Jika ada, tuliskan pula pencapaian seperti kejuaraan kompetisi atau tambahan informasi lain yang dirasa perlu dicantumkan sebagai bagian dari isi CV.\r\n\r\nDi samping mencantumkan bagian-bagian penting CV yang telah disebutkan di atas, boleh banget menambahkan keterangan yang sekiranya dapat mendukung citra profesional diri kita. Pelamar kerja itu enggak pernah berkurang,  Sobat, jadi isi CV kita juga harus istimewa.\r\n\r\nItulah sebabnya, selain belajar tentang bagaimana cara membuat CV yang baik dan benar, kita juga harus tahu bagaimana membuat CV yang menarik. Keduanya sama-sama penting. Terus, seperti apa sih, CV keren dan menarik itu?', '64828b7c49146.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Edukasi'),
(2, 'Teknologi'),
(3, 'Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `gambar`) VALUES
(1, 'Muhammad Oding Kacadek', 'oding@gmail.com', 'oding', 'admin', 'profile.png'),
(2, 'Naufal Zul Faza', 'naufal@gmail.com', 'naufal', 'admin', 'profile.png'),
(3, 'Abdul Aziz', 'abdulku@gmail.com', 'abdul', 'admin123', 'profile.png'),
(4, 'Muhammad Visi Islami', 'vissi@gmail.com', 'vissi', 'admin', 'profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `fk_artikel_id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `fk_artikel_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
