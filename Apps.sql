-- -- phpMyAdmin SQL Dump
-- -- version 5.0.4
-- -- https://www.phpmyadmin.net/
-- --
-- -- Host: localhost
-- -- Generation Time: Mar 05, 2021 at 05:43 PM
-- -- Server version: 10.4.17-MariaDB
-- -- PHP Version: 8.0.2

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";


-- /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
-- /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
-- /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
-- /*!40101 SET NAMES utf8mb4 */;

-- --
-- -- Database: `Apps`
-- --

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `Content`
-- --

-- CREATE TABLE `Content` (
--   `id` int(11) NOT NULL,
--   `user_id` int(11) DEFAULT NULL,
--   `judul` varchar(255) NOT NULL,
--   `deskripsi` varchar(10000) NOT NULL,
--   `image` varchar(255) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --
-- -- Dumping data for table `Content`
-- --

-- INSERT INTO `Content` (`id`, `user_id`, `judul`, `deskripsi`, `image`) VALUES
-- (1, 2, '3 Penyakit Ini Paling Bikin Tekor BPJS Kesehatan', 'Jakarta Pasien dengan penyakit katastropik diproyeksikan sebagai prioritas dalam penanganan BPJS Kesehatan. Pasalnya, penyakit seperti jantung koroner, gagal ginjal, dan kanker disebut mengkonsumsi dana paling besar.\nHal tersebut disampaikan Direktur Utama BPJS Kesehatan, Prof Ali Ghufron Mukti. Dirut baru yang akan menjabat pada periode 2021-2026 dan baru saja dilantik Presiden Joko Widodo pada 22 Februari 2021 ini menilai, penyakit katastropik tak hanya perlu diprioritaskan dalam hal penanganan, tapi juga promosi pencegahan.Selain untuk meningkatkan kesehatan masyarakat, juga menekan pengeluaran BPJS Kesehatan yang paling banyak teralokasi untuk pengobatan 3 jenis penyakit katastropik tersebut.\"Itu (penyakit katastropik) konsumsi dana BPJS besar. Tentu menjadi perhatian kita. Tapi kami ingin, promosi prevensi atau pencegahan, kemudian menjaga diri untuk sehat tidak jatuh sakit, itu yang utama. Kami akan tentu menekankan itu,\" ujarnya saat ditemui di Jakarta, Selasa (3/3/2021).Prof Ghufron menyebut, penyakit jantung koroner, gagal ginjal, dan kanker sejauh ini menjadi prioritas BPJS Kesehatan. Akan tetapi, hal ini masih perlu dikaji kembali untuk melihat metode penanganan dan pencegahan yang tepat lantaran pengobatannya memakan biaya yang besar.\"Tentu kita akan melihat, memetakan secara keseluruhan. Nanti kita lihat mana dan seperti apa kira-kita bottleneck penyakit yang prioritas. 3 penyakit itu penyakit yang paling mengkonsumsi dana BPJS,\" imbuhnya. Ia menyebut, defisit BPJS Kesehatan hingga kini masih terjadi, tercatat mencapai Rp 7 triliun.', '4e22e64f-a598-491e-a0d6-389c7e92ab0b_169.jpeg'),
-- (2, 2, 'Kemenkes Sepakat Jalin Kerja Sama Dengan Halodoc Untuk Mempercepat Program Vaksinasi Nasional', 'akarta, 1 Maret 2021\n\nKementerian Kesehatan bersama PT Media Dokter Investama sepakat untuk menandatangani perjanjian kerja sama mengenai pelaksanaan program vaksinasi nasional COVID-19. Penandatanganan berlangsung pada Senin (1/3) di Kantor Kementerian Kesehatan.\n\n\'Untuk mendukung pelaksanaan vaksinasi program tersebut, pada hari ini kita melaksanakan penandatanganan kerja sama antara Kementerian Kesehatan dengan PT Media Dokter Investama, yang lebih kita kenal dengan Halodoc,\' Kata Sekretaris Jenderal Oscar Primadi.\n\nKolaborasi ini sejalan dengan ketentuan Peraturan Menteri Kesehatan Nomor 10 Tahun 2021 tentang Pelaksanaan Vaksinasi Dalam Rangka Penanggulangan Pandemi Corona Virus Disease 2019 (COVID-19), bahwa Pemerintah dalam hal ini Kementerian Kesehatan dapat bekerja sama dengan kementerian/lembaga, Pemerintah Daerah provinsi, Pemerintah Daerah kabupaten/kota, badan usaha milik negara atau badan usaha swasta, organisasi profesi/kemasyarakatan, dan pihak lainnya yang dipandang perlu.\n\nLebih lanjut, Oscar mengatakan bahwa kerja sama ini merupakan bentuk public privat partnership sebagai salah satu solusi untuk mempercepat program vaksinasi nasional bagi 181,5 juta penduduk Indonesia yang ditargetkan rampung dalam waktu 1 tahun.\n\nPemerintah memahami untuk mencapai target tersebut tidak akan tercapai tanpa dukungan dan komitmen dari seluruh komponen bangsa termasuk pihak swasta agar tujuan vaksinasi bisa segera tercapai.\n\n\'Kami menyadari bahwa pelaksanaan Vaksinasi COVID-19 tidak akan dapat berhasil dan mencapai tujuannya, jika dilaksanakan tanpa dukungan yang luas, dengan demikian kami mengharapkan peran serta semua pihak agar vaksinasi COVID-19 dapat dilaksanakan dengan sukses sesuai harapan kita semua,\' tuturnya.\n\nOscar menjabarkan program vaksinasi nasional COVID-19 merupakan langkah besar pemerintah untuk mempercepat pengendalian pandemi COVID-19 di Tanah Air. Melalui vaksinasi diharapkan akan tercipta kekebalan kelompok, sehingga semakin banyak yang terlindungi dari potensi penularan COVID-19.\n\n\'Pelaksanaan Vaksinasi COVID-19 bertujuan untuk mengurangi transmisi/penularan COVID-19, menurunkan angka kesakitan dan kematian akibat COVID-19, mencapai kekebalan kelompok di masyarakat (herd imunity), dan melindungi masyarakat dari COVID-19 agar tetap produktif secara sosial dan ekonomi,\' tuturnya.\n\nDia menjelaskan selain mempercepat tercapaianya target vaksinasi, kemitraan ini juga akan membantu pemerintah melakukan proses monitoring dan evaluasi, sehingga pelaksanaan vaksinasi COVID-19 bisa berlangsung secara efektif, efisien, dan tepat sasaran.\n\n\'Semoga bangsa kita mampu menanggulangi COVID-19 dengan baik\' pungkasnya.\n\nHotline Virus Corona 119 ext 9. Berita ini disiarkan oleh Biro Komunikasi dan Pelayanan Masyarakat, Kementerian Kesehatan RI. Untuk informasi lebih lanjut dapat menghubungi nomor hotline Halo Kemenkes melalui nomor hotline 1500-567, SMS 081281562620, faksimili (021) 5223002, 52921669, dan alamat email kontak[at]kemkes[dot]go[dot]id (MF)', 'petugas-tutup-tempat-usaha-di-jeddah-arab-saudi.jpg'),
-- (3, 2, 'Kemenkes Gelar Vaksinasi Massal Bagi Lansia di BPPK Jakarta', 'JAKARTA, 1 Maret 2021\n\nPemandangan berbeda terlihat di Balai Besar Pelatihan Kesehatan Jakarta Kampus Hang Jebat pada Senin (1/3).\n\nUPT Kementerian Kesehatan ini dipenuhi oleh ratusan orang lanjut usia (lansia) yang akan mengikuti vaksinsasi covid-19. Dalam rangka pelaksanaan vaksinasi tahap kedua bagi warga Jakarta. Kementerian Kesehatan bekerjasama dengan Dinas Kesehatan Provinsi DKI Jakarta menyelenggarakan penyuntikan vaksin missal tersebut.\n\nPelaksanaan vaksinasi bagi lansia yang ada di DKI Jakarta ini pun mendapat perhatian besar dari Menteri Kesehatan dan Wakil Menteri Kesehatan. Menkes Budi Gunadi Sadikin hadir memantau ke lokasi Senin siang dengan didampingi oleh Pelaksana Tugas Kepala Badan Pengembangan dan Pemberdayaan SDM Kesehatan Kirana Pritasari beserta pimpinan tinggi Kemenkes lainnya. Dalam kunjungannya tersebut beliau memastikan kelancaran proses pelaksanaan kegiatan sembari berbincang serta memberikan semangat kepada para lansia yang divaksin. Sementara sebelumnya pada pagi hari Wamenkes Dante Saksono Harbuwono juga telah datang mengamati pemberian dosis pertama vaksin bagi lansia ini.\n\nSesuai dengan instruksi Presiden Joko Widodo, pemerintah telah menetapkan pelaksanaan vaksinasi tahap kedua yang salah satunya memprioritaskan pada kelompok lansia. Jumlahnya cukup besar yaitu mencapai 21 juta orang. Kelompok lain yang juga menjadi prioritas adalah pedagang, guru, atlet, dan wartawan. Demi mempercepat upaya vaksinasi tahap dua ini maka penyelenggara vaksinasi di BBPK Jakarta Kampus Hang Jebat menargetkan 1000 orang lansia per hari untuk kurun waktu Maret hingga April 2021.\n\nUntuk hari pertama penyuntikan vaksinasi lansia di DKI Jakarta ini diikuti sebanyak 600 orang. Para lansia yang mayoritas tinggal di daerah Kebayoran Baru ini silih berganti mendatangi tempat pelatihan kesehatan yang terletak di Jalan Hang Jebat Raya Jakarta Selatan. Mereka dengan sabar mengikuti rangkaian proses vaksinasi mulai dari registrasi, screening, dan penyuntikan vaksin. Setelah divaksin para lansia diminta menunggu di ruang observasi selama 30 menit. Jika selama waktu observasi tidak ada keluhan maka mereka diizinkan pulang dan mendapatkan sertifikat bukti telah divaksin dosis pertama. Para lansia ini diminta untuk datang kembali pada tanggal 29 Maret 2021 untuk mendapatkan dosis kedua.\n\nPelayanan vaksinasi ini sendiri melibatkan sejumlah tim tenaga kesehatan yang berasal Unit Pelayanan Kesehatan Kemenkes, Suku Dinas Kesehatan Jakarta Selatan khususnya dari Puskesmas Kebayoran Baru, Poltekkes Jakarta 2, dan Poltekkes Jakarta 3. Selain itu untuk mengatur kelancaran kegiatan Kemenkes juga mengerahkan tim dari Sekretariat Badan PPSDM Kesehatan dan Pusat Pendidikan SDM Kesehatan yang siap membantu mengarahkan para lansia mulai proses registrasi hingga mereka menerima sertifikat bukti telah divaksin.\n\nUntuk warga lansia yang ingin mengikuti kegiatan vaksinasi di BBPK Jakarta Kampus Hang Jebat harus menunjukkan KTP DKI Jakarta dan datang dalam keadaan sehat. Bagi yang mempunyai penyakit disarankan membawa surat rekomendasi dari dokter.\n\nHotline Virus Corona 119 ext 9. Berita ini disiarkan oleh Biro Komunikasi dan Pelayanan Masyarakat, Kementerian Kesehatan RI. Untuk informasi lebih lanjut dapat menghubungi nomor hotline Halo Kemenkes melalui nomor hotline 1500-567,pppp SMS 081281562620, faksimili (021) 5223002, 52921669, dan alamat email kontak[at]kemkes[dot]go[dot]id (rez/her/lus)', 'Kemenkes Gelar Vaksinasi Massal Bagi Lansia di BPPK Jakarta.jpeg'),
-- (4, 2, 'Manfaat Kunyit untuk Mengatasi Radang Tenggorokan', '\n\nCara mengatasi radang tenggorokan tak melulu harus dengan obat. Penyakit yang terkadang membuat Anda sulit menelan ini ternyata bisa diatasi dengan bahan alami. Salah satu bahan alami yang bisa Anda gunakan untuk mengobati radang tenggorokan adalah kunyit.\n\nKunyit (Curcuma longa) merupakan tanaman herbal berimpang yang masuk dalam keluarga jahe-jahean (Zingiberaceae). Di Indonesia, kunyit sering dimanfaatkan sebagai pewarna kuning dalam masakan seperti nasi kuning atau gulai. Cukup mudah menemukan kunyit karena tanaman rempah ini banyak dijajakan di pasar.\n\nSelain digunakan sebagai bumbu masak, kunyit juga dikenal ampuh untuk mengatasi peradangan seperti radang tenggorokan.. \n\nSeperti dalam pengobatan ayurvedic, kunyit diyakini bisa membantu mengatasi peradangan di dalam tubuh, seperti kanker, rheumatoid arthritis, dan penyakit infeksi lainnya. \n\nSalah satu kandungan kunyit yang memiliki manfaat kesehatan dalam kurkumin. Kurkumin adalah zat aktif yang memiliki antioksidan kuat. Zat antioksidan bertugas melindungi sel-sel dari kerusakan yang disebabkan oleh radikal bebas.\n\nManfaat kunyit sebagai antibakteri, antitumor, antiperadangan, dan antiseptik juga sudah teruji secara klinis.\n\nManfaat tersebut bisa didapat dengan cara mengonsumsi kunyit dosis rendah yang sudah diolah atau dicampurkan ke dalam makanan. Anda juga bisa mendapatkan manfaat antiperadangan setelah mengonsumsi kunyit dalam jangka waktu yang lama. ', '054323300_1614943730-manfaat-kunyit-untuk-mengatasi-radang-tenggorokan.jpg'),
-- (5, 2, 'Bahaya Tato Mata untuk Kesehatan Indra Penglihatan Anda', 'Tato dianggap sebagai sebuah seni oleh beberapa orang. Tak heran, mereka yang berpendapat demikian rela membuat tubuhnya dipenuhi dengan tato dengan tujuan dan alasan tertentu.\n\nSaking terobsesinya dengan ‘seni’ tersebut, tidak sedikit pula orang yang melakukan tato mata. Apakah Anda juga tertarik melakukan tindakan tersebut? \n\nJika Anda menjawab ya, sebaiknya pikir ulang sebelum mengambil keputusan. Pasalnya, tato mata dapat mengancam kesehatan indra penglihatan Anda\n\nTato mata dilakukan dengan memberikan warna atau corak tertentu pada seluruh bagian putih di indra penglihatan (sklera). Tato ini dilakukan dengan menyuntikkan tinta dengan jarum di bawah lapisan atas mata ke dalam sklera. \n\nSklera itu sendiri punya tiga bagian, yaitu episklera (jaringan ikat longgar pada konjungtiva), sklera (bagian putih mata), dan lamina fusca (serat elastis di bagian terdalam mata). \n\nKetika disuntikkan ke dalam sklera, tinta akan selamanya melekat di organ tersebut. Dengan kata lain, orang yang telah melakukan tato mata tidak bisa mengembalikan warna sklera seperti sedia kala.\n\n', '030868200_1614940779-Tato_Mata.jpg'),
-- (6, 2, 'Kelenjar Getah Bening Membesar usai Suntik Vaksin COVID-19, Bahayakah?', '\n\nPerubahan yang terjadi pada tubuh pasca-disuntik vaksin COVID-19 memang perlu diperhatikan, termasuk pembesaran kelenjar getah bening.\n\nMenurut laporan dari Cleveland Clinic, ditemukan kasus efek samping vaksin COVID-19 berupa pembesaran kelenjar getah bening di bawah lengan.\n\nBegitu pula hasil uji coba vaksin Moderna, 11,6 persen pesertanya mengalami pembesaran kelenjar getah bening usai mendapatkan dosis pertama. Sementara 16 persennya lagi, mengalami efek samping serupa setelah dosis kedua.\n\nLantas, apa yang menyebabkan vaksin ini sampai menyebabkan pembengkakan kelenjar getah bening di pasien? Apakah hal itu membahayakan nyawanya?\n\nTenangkan diri dulu. Meski bagi orang awam kasus ini membingungkan dan mengkhawatirkan, pembesaran kelenjar getah bening setelah disuntik vaksin ternyata bukan hal baru. \n\nMenurut dr. Alvin Nursalim, Sp.PD, kondisi ini merupakan reaksi yang terbilang normal.\n\n“Kelenjar getah bening merupakan tempat sistem imunitas tubuh kita berkumpul. Setelah mendapatkan suntik vaksin COVID-19, sistem tersebut akan bereaksi atau terangsang. Jumlah imunitas pun meningkat,” kata dr. Alvin.\n\n“Pertambahan jumlah imun di dalamnya tentu akan memperbesar ukuran kelenjar,” dia menambahkan.\n\nPembesaran kelenjar getah bening biasanya tidak terjadi secara langsung. Butuh beberapa hari hingga tanda-tanda itu muncul. \n\n\n\nPerubahan yang terjadi pada tubuh pasca-disuntik vaksin COVID-19 memang perlu diperhatikan, termasuk pembesaran kelenjar getah bening.\n\nMenurut laporan dari Cleveland Clinic, ditemukan kasus efek samping vaksin COVID-19 berupa pembesaran kelenjar getah bening di bawah lengan.\n\nBegitu pula hasil uji coba vaksin Moderna, 11,6 persen pesertanya mengalami pembesaran kelenjar getah bening usai mendapatkan dosis pertama. Sementara 16 persennya lagi, mengalami efek samping serupa setelah dosis kedua.\n\nLantas, apa yang menyebabkan vaksin ini sampai menyebabkan pembengkakan kelenjar getah bening di pasien? Apakah hal itu membahayakan nyawanya?\n1 dari 3 halaman\nPenyebab Kelenjar Getah Bening Membesar usai Vaksinasi\nPenyebab Kelenjar Getah Bening Membesar usai Vaksinasi\nPenyebab Kelenjar Getah Bening Membesar usai Vaksinasi\n\nTenangkan diri dulu. Meski bagi orang awam kasus ini membingungkan dan mengkhawatirkan, pembesaran kelenjar getah bening setelah disuntik vaksin ternyata bukan hal baru. \n\nMenurut dr. Alvin Nursalim, Sp.PD, kondisi ini merupakan reaksi yang terbilang normal.\n\n“Kelenjar getah bening merupakan tempat sistem imunitas tubuh kita berkumpul. Setelah mendapatkan suntik vaksin COVID-19, sistem tersebut akan bereaksi atau terangsang. Jumlah imunitas pun meningkat,” kata dr. Alvin.\n\n“Pertambahan jumlah imun di dalamnya tentu akan memperbesar ukuran kelenjar,” dia menambahkan.\n\nPembesaran kelenjar getah bening biasanya tidak terjadi secara langsung. Butuh beberapa hari hingga tanda-tanda itu muncul. \n\nArtikel Lainnya: Cara Mencegah Kelenjar Getah Bening Bengkak\n\nTak muncul di banyak tempat, pembesaran kelenjar getah bening pasca vaksinasi terjadi di satu area saja, khususnya di dekat area suntik (ketiak).\n\nPembesaran kelenjar di bawah lengan atau ketiak sering kali tumpang tindih dengan kanker payudara. \n\nKetika sel kanker berpindah ke luar payudara, ia akan menuju ke kelenjar getah bening di bawah lengan.\n\nPerpindahan tersebut merupakan pola alami dari cairan getah bening di dalam jaringan payudara.\n\nKarena itulah, pemeriksaan yang lebih lengkap sebelum dan sesudah vaksin harus dilakukan oleh orang dengan riwayat kanker.\n\nSociety of Breast Imaging bahkan merekomendasikan penjadwalan pemeriksaan mammografi sebelum penderita kanker payudara menerima dosis vaksin COVID-19 yang pertama.\n\nSetelah mendapatkan dosis yang kedua, mammografi bisa dilakukan 4-6 minggu kemudian. \n\nTes tersebut akan melihat ada tidaknya kelainan di payudara sekaligus mengidentifikasi benjolan dan gejala lainnya di area situ.\n\nTerkadang, USG payudara juga diperlukan untuk membantu pemeriksaan mammografi.', '095029800_1614939032-kelenjar-getah-bening-membesar-usai-suntik-vaksin-covid-19.jpg'),
-- (7, 2, 'Penyebab Bintik Merah pada Kulit Bayi, Berbahayakah?', '\n\nKulit bayi yang mulus dan sehat adalah dambaan setiap Bunda. Sayangnya, tidak setiap bayi bisa memiliki kondisi kulit demikian.\n\nFaktanya, kulit bayi masih belum memiliki pertahanan seperti orang dewasa. Oleh karena itu, kulitnya sangat rentan terserang berbagai penyakit sehingga muncul bintik-bintik kemerahan.\n\nBeberapa hal yang dapat menjadi penyebab munculnya bintik merah pada bayi, antara lain:\n1. Jerawat\n\nJerawat pada bayi biasanya muncul sekitar dua hingga empat minggu setelah lahir. Benjolan kecil berwarna merah atau putih biasanya muncul di leher, hidung, dan dahi.\n\nPenyebab jerawat bayi tidak diketahui, dan biasanya akan hilang dengan sendirinya dalam waktu tiga hingga empat bulan tanpa meninggalkan bekas.\n\nGuna mengatasi kondisi ini, Bunda dapat merawat wajah Si Kecil yang berjerawat menggunakan sabun bayi.\n\nHindari menggosok dengan keras pada daerah yang berjerawat. Hindari juga penggunaan losion atau produk minyak lainnya. Hal ini dikhawatirkan malah memicu iritasi.\n\n2. Eksem\n\nEksem adalah kondisi kulit yang menyebabkan ruam kering, merah, gatal, dan terkadang nyeri. Kondisi ini sering muncul pada anak di enam bulan pertama kehidupan.\n\nBagi bayi yang berusia enam bulan, eksem dapat muncul di area pipi atau dahi. Seiring bertambahnya usia, ruam akan pindah ke siku, lutut, dan lipatan kulit.\n\nEksem biasanya muncul saat kulit terkena paparan alergen atau bahan yang mengiritasi, seperti bulu hewan peliharaan, tungau debu, deterjen, dan pembersih rumah tangga.\n3. Biang Keringat atau Miliaria\n\nBayi dapat mengalami biang keringat atau heat rash. Kondisi ini bisa terjadi akibat berpakaian terlalu tebal atau ketat saat cuaca sangat panas.\n\nRuam kemerahan biasanya ditemukan di daerah tubuh yang tertutup pakaian. Kondisi ini sering menyebabkan gatal dan membuat tidak nyaman.\n\nSalah satu cara untuk menurunkan risiko sekaligus mengatasi biang keringat pada bayi adalah dengan menggunakan pakaian yang tipis dan longgar.\n\nPastikan pula Bunda mandikan bayi dengan air sejuk, agar keluhan dapat berkurang.', '094971600_1614938056-Penyebab-Bintik-Merah-pada-Kulit-Bayi-Berbahayakah-By-Luca-Lorenzelli-shutterstock.jpg'),
-- (8, 1, 'Rutin Makan Sayur Belum Tentu Membantu Turunkan Berat Badan', '\n\nDiet sehat lazimnya diiringi dengan memperbanyak asupan sayur dalam menu harian. Tidak heran, dengan makan sayur dengan porsi tepat maka berat badan akan ikut turun.\n\nNamun, sebuah studi justru menyebut bahwa makan sayur justru belum tentu berkorelasi dengan turunnya berat badan. Wah, kenapa ya?\n\nSebuah makalah penelitian di PLOS Medicine pada 2015 mengatakan bahwa makan lebih banyak buah dan sayuran tak selalu membantu menurunkan berat badan.\n\nPada penelitian tersebut, sayuran yang mengandung tepung, seperti jagung, justru dikaitkan dengan peningkatan berat badan. \n\nNamun, peneliti mencatat, penyebab berat badan susah turun juga dipengaruhi dengan pola hidup yang tidak sehat.\n\nStudi dari Universitas Harvard, mengamati perubahan dalam asupan buah dan sayuran tertentu yang dicatat dalam kuesioner pola makan dari 133.468 pria dan wanita AS selama 24 tahun. \n\nStudi itu memperhitungkan faktor gaya hidup lain yang juga memengaruhi berat badan, seperti merokok, pola tidur, jam menonton televisi, dan olahraga.\n\nArtikel lainnya: 8 Jenis Sayuran untuk Diet yang Bisa Anda Coba\n\nHasilnya, pria dan wanita yang punya pola hidup buruk memang sulit menurunkan berat badan, meski sudah makan sayur secara rutin. \n\nStudi lain dari University of Alabama mengamati penelitian sebelumnya tentang penurunan berat badan serta peningkatan asupan buah dan sayuran pada lebih dari 1.200 orang.\n\nPeneliti menemukan, orang yang tidak mengurangi asupan kalori secara keseluruhan juga mengalami kondisi berat badan susah turun.\n\n“Secara keseluruhan, semua studi yang kami ulas menunjukkan (makan sayur dan buah tanpa mengurangi asupan kalori keseluruhan) punya efek yang hampir nol pada penurunan berat badan,\" kata penulis studi, Kathryn Kaiser.\n\nMenanggapi hal ini, dr. Devia Irine Putri pun setuju. Dia mengatakan, “Kalau sudah makan banyak sayur saat diet tapi tidak turun, ini bisa jadi karena faktor lain.”\n\n“Misalnya, masih tetap makan makanan yang manis atau berkalori tinggi (kue, es krim, dan sebagainya). Bisa jadi juga dietnya tidak diimbangi dengan olahraga yang rutin,” ujarnya.\n\n“Sebenarnya makan sayuran itu tetap perlu, baik saat sedang diet maupun tidak. Saat diet, sayuran berguna untuk mencukupi kebutuhan serat, mencukupi kebutuhan nutrisi (vitamin dan mineral), menjaga kesehatan pencernaan dan memberikan rasa kenyang lebih lama,” ujar dr. Devia. \n\nNamun, pada Anda yang sedang berdiet, makan sayur saja tanpa diimbangi dengan pola hidup sehat bisa menyulitkan turunnya berat badan. Oleh karena itu, jangan heran jika Anda sudah banyak makan sayur tapi berat badan tidak kunjung turun.\n\nCoba diingat lagi. Apakah Anda sudah menerapkan pola hidup sehat seperti olahraga, cukup waktu tidur, serta menghindari makanan manis, berminyak, dan berlemak? Perhatikan juga camilan yang Anda makan setiap harinya.\n\nSudahkah Anda memilih camilan sehat, seperti buah potong atau kacang-kacangan? Atau Anda masih sering ngemil keripik asin, cokelat, dan kue-kue manis? \n\nPemilihan buah sebagai camilan juga tak boleh asal. Anda sebaiknya memilih juga buah segar dan rendah gula. Setiap buah dan sayur memiliki karakteristik yang berbeda.\n\nMakanan rendah glikemik menyebabkan lonjakan gula darah yang lebih sedikit dan lebih kecil serta dapat mengurangi rasa lapar. Jadi jika Anda menginginkan buah berserat tinggi dan rendah glikemik, pilihlah blueberry atau alpukat.\n\nPir dan apel juga jadi pilihan buah yang baik untuk mengimbangi pola diet. Meskipun kedua buah ini memiliki indeks glikemik tinggi, seratnya yang lebih tinggi dapat mengimbanginya.', '048727400_1614934199-Rutin-Makan-Sayur-Belum-Tentu-Membantu-Turunkan-Berat-Badan-by-undefined-undefined-Canva.jpg');

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `Users`
-- --

-- CREATE TABLE `Users` (
--   `id` int(11) NOT NULL,
--   `nama` varchar(255) NOT NULL,
--   `email` varchar(255) NOT NULL,
--   `password` varchar(255) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --
-- -- Dumping data for table `Users`
-- --

-- INSERT INTO `Users` (`id`, `nama`, `email`, `password`) VALUES
-- (1, 'wahid', 'wahed@wa', '6bf8416d67b6ecb5e9ee1a3535893965'),
-- (2, 'Abd Wahid', 'wahid@id', '6bf8416d67b6ecb5e9ee1a3535893965');

-- --
-- -- Indexes for dumped tables
-- --

-- --
-- -- Indexes for table `Content`
-- --
-- ALTER TABLE `Content`
--   ADD PRIMARY KEY (`id`),
--   ADD KEY `user_id` (`user_id`);

-- --
-- -- Indexes for table `Users`
-- --
-- ALTER TABLE `Users`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- AUTO_INCREMENT for dumped tables
-- --

-- --
-- -- AUTO_INCREMENT for table `Content`
-- --
-- ALTER TABLE `Content`
--   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

-- --
-- -- AUTO_INCREMENT for table `Users`
-- --
-- ALTER TABLE `Users`
--   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- --
-- -- Constraints for dumped tables
-- --

-- --
-- -- Constraints for table `Content`
-- --
-- ALTER TABLE `Content`
--   ADD CONSTRAINT `Content_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE customer(
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR (50) NOT NULL,
    handphone VARCHAR(15) NOT NULL,
    avatar VARCHAR(255) DEFAULT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE alamat(
    id SERIAL PRIMARY KEY,
    customer_id BIGINT REFERENCES customer (id) NOT NULL,
    provinsi VARCHAR(255),
    kabupaten VARCHAR(255),
    kecamatan VARCHAR(255),
    kelurahan VARCHAR(255),
    jalan VARCHAR(255),
    nomor_rumah VARCHAR(50),
    kode_pos VARCHAR(25)
);

CREATE TABLE mitra(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description VARCHAR (255),
    image VARCHAR(255) DEFAULT NULL
);

CREATE TABLE tukang(
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR (50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    handphone VARCHAR(15) NOT NULL,
    ktp VARCHAR(255) DEFAULT NULL,
    selfie_ktp VARCHAR(255) DEFAULT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE divisi(
    id SERIAL PRIMARY KEY,
    tukang_id BIGINT REFERENCES tukang (id) NOT NULL,
    nama_divisi VARCHAR(255),
    harga INTEGER
);

-- ALTER TABLE customer 
--     ALTER COLUMN avatar TYPE BYTEA;

ALTER TABLE mitra 
    ALTER COLUMN image TYPE TEXT;

-- ALTER TABLE tukang 
--     ALTER COLUMN ktp TYPE BYTEA, 
--     ALTER COLUMN selfie_ktp TYPE BYTEA;

ALTER TABLE mitra 
    ALTER COLUMN image TYPE BYTEA;

ALTER TABLE mitra ALTER COLUMN image TYPE BYTEA USING (trim(image)::BYTEA);

ALTER TABLE tukang 
    ADD COLUMN nik VARCHAR ;

CREATE TABLE pesanan(
    id SERIAL PRIMARY KEY,
    address VARCHAR(255) NOT NULL,
    foto VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    jadwal DATE NOT NULL,
    isactive BOOLEAN NOT NULL,
    selesai BOOLEAN NOT NULL,
    customer_id BIGINT REFERENCES customer (id) NOT NULL,
    tukang_id BIGINT REFERENCES tukang (id) NOT NULL
);