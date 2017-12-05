-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 10:28 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servdesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `id_co` varchar(10) NOT NULL,
  `control` varchar(100) NOT NULL,
  `area` varchar(25) NOT NULL,
  `ket_control` text NOT NULL,
  `id_service` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`id_co`, `control`, `area`, `ket_control`, `id_service`) VALUES
('c01', 'Prinsip-prinsip Service Design', 'Process Area 1', 'Proses yang menjelaskan tentang aspek dasar dari Service Design', 's1'),
('c02', 'Service Catalogue Management', 'Process Area 2', 'proses untuk memastikan sebuah dokumen katalog layanan (Service Catalog) diproduksi dan diperbaharui selalu, berisi informasi-informasi terkini dan akurat tentang semua layanan TI yang sedang dipersiapkan untuk segera beroperasi.', 's1'),
('c03', 'Service Level Management', 'Process Area 2', 'proses untuk menegosiasikan dan menghasilkan dokumen Service Level Agreements (SLA) dengan pelanggan, memastikan semua Operational Level Agreements (OLA) dan Underpinning Contracts (UC) mampu mendukung pencapaian SLA, serta memonitor dan melaporkan capaian-capaian kualitas layanan yag berjalan. ', 's1'),
('c04', 'Capacity Management', 'Process Area 2', 'proses memastikan kapasistas layanan-layanan TI dan infrastruktur pendukungnya mampu memenuhi target-target tingkat layanan yang telah disepakati, efektif secara biaya dan waktu', 's1'),
('c05', 'Avaibility Management', 'Process Area 2', 'proses mendefinisikan, menganalisis, merencanankan, mengukur, dan meningkatkan semua aspek availabilitas layanan-layanan TI. Proses ini juga bertanggung jawab memastikan semua infrastruktur, proses, tools, dan peran mendukung pencapaian target-target ketersediaan (avaibilitas) yang telah disetujui.', 's1'),
('c06', 'IT Service Continuity Management', 'Process Area 2', 'proses menilai dan mengelola risiko-risiko yang berdampak serius bagi layanan-layanan TI dan memastikan penyedia layanan dapat selalu menyediakan layanan pada tingkat minimum yang telah disepakati dengan menekan risiko ', 's1'),
('c07', 'Information Security Management', 'Process Area 2', 'proses memastikan kerahasiaan, kebenaran, dan ketersediaan informasi organisasi dan sistem informasi sesuai dengan kebutuhan bisnis organisasi yang telah disetujui.', 's1'),
('c08', 'Supplier Management', 'Process Area 2', 'proses memastikan semua kontrak dengan supplier (UC) memenuhi kebutuhan bisnis organisasi, memastikan semua supplier memenuhi komitmen-komitmen kontrak mereka, mereview kontrak, dan menjaga hubungan dengan supplier', 's1'),
('c09', 'Design Coordination', 'Process Area 2', 'proses mengkoordinasikan semua aktivitas-aktivitas, proses, dan sumber-sumber daya Service Design. Proses ini memastikan setiap rancangan layanan TI baru atau layanan TI yang lama akan diubah konsisten dan efektif dalama pengelolaannya, arsitektur, teknologi, proses, informasi hingga ukurannya (metrik).', 's1'),
('c10', 'Pengorganisasian Service Design', 'Human Area', 'Proses perencanan dan pengorganisasian sumber daya dalam service design', 's1'),
('c11', 'Teknologi untuk Service Design', 'Technology Area 1', 'Teknologi yang terkait dalam segala hal yang menyangkut kegiatan atau aktivitas dari proses service design dan harus dimiliki oleh suatu organisasi', 's1'),
('c12', 'Pertimbangan Teknologi Service Design', 'Technology Area 2', 'Pertimbangan terknologi yang harus dimiliki oleh sebuah organisasi dalam memberikan dan mengelola kebutuhan dalam manajemen layanan teknologi informasi', 's1');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_rekomendasi`
--

CREATE TABLE `hasil_rekomendasi` (
  `id_rekomendasi` int(11) NOT NULL,
  `temuan` text NOT NULL,
  `rekomendasi` text NOT NULL,
  `id_periode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_rekomendasi`
--

INSERT INTO `hasil_rekomendasi` (`id_rekomendasi`, `temuan`, `rekomendasi`, `id_periode`) VALUES
(1, 'Belum adanya inisialisasi awal terhadap dampak bisnis sebelum pelaksanaan rancangan layanan TI', 'Inisialiasi awal dalam pelaksanaan layanan TI merupakan hal dasar yang digunakan sebagai atribut-atribut dari Service Design Packages (SDP). Inisialisasi seharusnya dirancang sebelum memproduksi SDP secara berkelanjutan.', 1),
(2, 'Belum dilakukan identifikasi risiko yang mungkin timbul pada layanan TI aplikasi SISTER pada lingkungan organisasi', 'Identifikasi risiko ini sangat diperlukan untuk mengetahui daftar resiko dan ancaman apa saja yang mungkin timbul dan bisa menyebabkan aplikasi SISTER yang beroperasi mengalami kerusakan maupun kehilangan. Daftar resiko yang mungkin timbul, seperti kerusakan pada aplikasi dan tidak berfungsinya peralatan akibat gejala alam dan kecelakaan, kesalahan dan tidak berfungsinya peralatan pada sistem aplikasi, Kerusakan akibat jaringan pada sistem, kerusakan dan kehilangan akibat kesalahan manusia, kehilangan informasi atau data pada sistem, dan tidak berjalannya sistem karena database kurang baik. Sehingga diperlukan backup data, untuk menghindari resiko yang mungkin terjadi di kemudian hari.', 1),
(3, 'Belum adanya pendokumentasian yang baik terkait perancangan layanan TI', 'Memproduksi Service Design Packages (SDP) secara lengkap. Karena SDP menghubungkan semua unit bisnis dan fungsi-fungsi layanan TI.', 1),
(4, 'Belum adanya pengarahan untuk meningkatkan kesadaran mengenai pentingnya informasi layanan TI yang ada pada Service Catalogue', 'Divisi TI pada perusahaan bisa menyediakan fasilitas kepada karyawannya untuk mengikuti sertifikasi ITIL versi 3 dengan mengambil proses Service Catalogue Management , yang bertujuan agar : \r\n1.	Staff mampu memahami konsep dari pengelolaan layanan TI berdasarkan framework IT Infrastructure Library (ITIL) versi 3 \r\n2.	Staff mampu melakukan analisis studi kasus ITIL dalam \r\norganisasi/ perusahaannya\r\n3.	Staff dapat mengerti tahapan dan metodologi dalam mengimplementasikan konsep ITIL versi 3 pada perusahaan\r\n', 1),
(5, 'Perusahaan belum memiliki personel khusus pada divisi TI yang bertanggung jawab dalam meningkatkan keakuratan data pada katalog layanan', 'Perusahaan membuat kebijakan pedoman organisasi baru khususnya pada divisi TI agar pendefinisian job desk masing-masing karyawan dapat merata, sehingga semua tugas-tugas dapat diselesaikan dengan cepat. Dalam hal ini keakuratan katalog layanan juga penting agar setiap informasi yang ada mengenai aplikasi SISTER bisa terus diperbarui.', 1),
(6, 'Belum terdapat pelaporan mengenai penyediaan layanan TI yang dikeluhkan dari pengguna kepada divisi TI perusahaan', 'Pelaporan mengenai keluhan terhadap SISTER ini sangat diperlukan untuk mengetahui apa saja kekurangan dari SISTER itu sendiri, sehingga memudahkan divisi TI untuk segera melakukan evaluasi dan perbaikan terhadap keluhan dari pengguna', 1),
(7, 'Belum adanya pembuatan laporan terhadap kapasistas layanan TI', 'Pelaporan mengenai kapasitas layanan TI terhadap SISTER ini sangat diperlukan untuk mengetahui apa saja batas-batas dari SISTER itu sendiri, sehingga memudahkan divisi TI untuk menghindari adanya gangguan yang sama karena telah memiliki pelaporan secara rutin.', 1),
(8, 'Belum mendefinisikan tentang Bussiness Capacity Management ', 'Bussiness Capacity Management memungkinkan untuk mengelola kebutuhan bisnis sesuai dengan kapasitas dari infrastruktur atau perangkat TI yang dimiliki yang membantu dalam pencegahan penggunaan SISTER yang melebihi kapasitas SISTER itu sendiri', 1),
(9, 'Belum mendefinisikan tentang Component Capacity Management', 'Component Capacity Management memungkinkan untuk menghitung kapasitas dari infrastruktur atau perangkat TI yang membantu dalam menunjang penggunaan SISTER. Perlu dibuat daftar infrastruktur TI apa saja yang ada diperusahaan dan dihitung kapasitasnya agar bisa diketahui apakah kapasitas tersebut sudah memenuhi yang diharapkan perusahaan atau belum', 1),
(10, 'Belum melakukan pendefinisian organisasi dalam melakukan perbaikan layanan TI secara terus menerus serta menetapkan prosedur dan instruksi kerja organisasi tersebut', 'Perusahaan perlu mendefinisikan organisasi secara khusus yang ada pada divisi TI untuk melakukan perbaikan terhadap SISTER secara terus-menerus. Berikut merupakan instruksi kerja yang harus dilakukan : \r\n1.	Melakukan pengukuran berkala untuk mengetahui apakah ada kerusakan atau kesalahan pada sistem \r\n2.	Melakukan perbaikan jika terjadi kesalahan bug atau program pada aplikasi\r\n3.	Menangani berbagai keluhan dari pengguna, seperti jika sistem down dan aplikasi tidak bisa diakses \r\n', 1),
(11, 'Belum melakukan penjadwalan untuk pelaksanaan audit dari tim internal perusahaan terhadap keamanan pada layanan TI', 'Membuat jadwal untuk dilakukannya audit keamanan dari tim internal perusahaan, misalkan divisi TI yang menangani secara khusus keamanan informasi melakukan audit secara berkala terhadap aplikasi SISTER agar segera mungkin dapat dilakukan kontrol pengendalian', 1),
(12, 'Belum mendefinisikan bagaimana cara melakukan evaluasi terhadap kontrak kerja supplier', 'Evaluasi memungkinkan adanya pemberhentian kontrak terhadap supplier. Jika evaluasi terhadap kontrak kerja tidak terdokumentasi dengan baik, maka perjanjian kontrak akan diberhentikan atau pihak supplier merasa dirugikan. ', 1),
(13, 'Belum memiliki Supplier and Contract Database', 'Supplier and Contract Database diperlukan karena mencakup data record seluruh supplier, rincian kontrak yang telah disepakati oleh supplier dan perusahaan, jenis layanan yang diberikan supplier kepada pengguna seperti apa, serta produk-produk yang disediakan oleh supplier. Sehingga kontrak antara supplier dan perusahaan terdokumentasi dengan baik', 1),
(14, 'Belum adanya pendefinisian ruang lingkup terhadap supplier', 'Ruang lingkup supplier harus berdasarkan dengan kebutuhan bisnis dari seluruh ruang lingkup yang dimiliki perusahaan. Karena kebutuhan bisnis perusahaan juga merupakan kontrak yang telah disetujui oleh perusahaan dan supplier, agar permintaan perusahaan terpenuhi.', 1),
(15, 'Belum mendefinisikan tentang Service Design Packages', 'Service Design Packages (SDP) mendefinisikan seluruh aspek  dalam layanan TI dan keseluruhan persyaratan dari setiap tahap lifecycle service. Aspek layanan desai diproduksi untuk setiap layanan TI baru, perubahan-perubahan besar, atau layanan yang dikeluarkan. ', 1),
(16, 'Belum menggunakan Model RACI (Responsible, Accountable, Consulted and Informed) yang digunakan untuk mendefinisikan peran dan tanggung jawab untuk Service Design', 'Matriks RACI perlu dibuat oleh divisi TI untuk menggambarkan peran berbagai pihak dalam penyelesaian suatu pekerjaan dalam suatu proyek diperusahaan. Matriks ini bermanfaat dalam menjelaskan peran dan tanggung jawab antar divisi di dalam suatu proyek atau proses. RACI memiliki empat singkatan, yaitu Responsible, Accountable, Consulted and Informed. Pentingnya RACI', 1),
(17, 'Belum melakukan deskripsi dari aktivitas aktivitas dari matriks RACI', 'Deskripsi aktivitas-aktivitas matriks RACI harus segara dilakukan. Berikut merupakan fungsi RACI:\r\n1.	Mengidentifikasi beban kerja yang telah ditugaskan kepada karyawan tertentu atau departemen\r\n2.	Memastikan bahwa proses tertentu tidak terlalu dominan\r\n3.	Memastikan bahwa anggota baru dijelaskan tentang peran dan tanggung jawab\r\n4.	Menemukan keseimbangan yang tepat antara garis dan tanggung jawab proyek\r\n5.	Mendistribusikan kerja antara kelompok untuk mendapatkan efisiensi kerja yang lebih baik\r\n6.	Terbuka untuk menyelesaikan konflik dan diskusi\r\n7.	Mendokumentasikan peran dan tanggung jawab orang-orang dalam organisasi\r\n', 1),
(18, 'Belum adanya alat atau tools yang memungkinkan untuk melakukan pengelolaan biaya layanan', 'Perusahaan harus memiliki alat atau tools untuk melakukan pengelolaan biaya terkait proyek bisnis. Ini diperlukan untuk memperhitungkan risiko proyek bisnis. Sehingga perlu ada rincian pengelolaan biaya proyek bisnis, agar setiap proyek bias berjalan dengan baik dan benar serta sesuai dengan strategi bisnis dari setiap perusahaan atau organisasi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_kuesioner` varchar(10) NOT NULL,
  `id_maturity` varchar(10) DEFAULT NULL,
  `id_periode` int(5) UNSIGNED ZEROFILL NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_kuesioner`, `id_maturity`, `id_periode`, `id_user`) VALUES
(2874, 'k01', '3', 00001, 7),
(2875, 'k02', '3', 00001, 7),
(2876, 'k03', '3', 00001, 7),
(2877, 'k04', '3', 00001, 7),
(2878, 'k05', '3', 00001, 7),
(2879, 'k06', '3', 00001, 7),
(2880, 'k07', '3', 00001, 7),
(2881, 'k08', '2', 00001, 7),
(2882, 'k09', '3', 00001, 7),
(2883, 'k10', '3', 00001, 7),
(2884, 'k11', '3', 00001, 7),
(2885, 'k12', '2', 00001, 7),
(2886, 'k13', '2', 00001, 7),
(2887, 'k14', '2', 00001, 7),
(2888, 'k15', '2', 00001, 7),
(2889, 'k16', '3', 00001, 7),
(2890, 'k17', '2', 00001, 7),
(2891, 'k18', '3', 00001, 7),
(2892, 'k19', '2', 00001, 7),
(2893, 'k20', '3', 00001, 7),
(2894, 'k21', '3', 00001, 7),
(2895, 'k22', '3', 00001, 7),
(2896, 'k23', '3', 00001, 7),
(2897, 'k24', '3', 00001, 7),
(2898, 'k25', '3', 00001, 7),
(2899, 'k26', '3', 00001, 7),
(2900, 'k27', '3', 00001, 7),
(2901, 'k28', '2', 00001, 7),
(2902, 'k29', '3', 00001, 7),
(2903, 'k30', '2', 00001, 7),
(2904, 'k31', '2', 00001, 7),
(2905, 'k32', '3', 00001, 7),
(2906, 'k33', '3', 00001, 7),
(2907, 'k34', '3', 00001, 7),
(2908, 'k35', '3', 00001, 7),
(2909, 'k36', '3', 00001, 7),
(2910, 'k37', '3', 00001, 7),
(2911, 'k38', '2', 00001, 7),
(2912, 'k39', '3', 00001, 7),
(2913, 'k40', '3', 00001, 7),
(2914, 'k41', '3', 00001, 7),
(2915, 'k42', '3', 00001, 7),
(2916, 'k43', '3', 00001, 7),
(2917, 'k44', '3', 00001, 7),
(2918, 'k45', '3', 00001, 7),
(2919, 'k46', '3', 00001, 7),
(2920, 'k47', '2', 00001, 7),
(2921, 'k48', '3', 00001, 7),
(2922, 'k49', '2', 00001, 7),
(2923, 'k50', '3', 00001, 7),
(2924, 'k51', '3', 00001, 7),
(2925, 'k52', '3', 00001, 7),
(2926, 'k53', '3', 00001, 7),
(2927, 'k54', '3', 00001, 7),
(2928, 'k55', '3', 00001, 7),
(2929, 'k56', '3', 00001, 7),
(2930, 'k57', '3', 00001, 7),
(2931, 'k58', '3', 00001, 7),
(2932, 'k59', '3', 00001, 7),
(2933, 'k60', '2', 00001, 7),
(2934, 'k61', '2', 00001, 7),
(2935, 'k62', '3', 00001, 7),
(2936, 'k63', '3', 00001, 7),
(2937, 'k64', '2', 00001, 7),
(2938, 'k65', '2', 00001, 7),
(2939, 'k66', '2', 00001, 7),
(2940, 'k67', '3', 00001, 7),
(2941, 'k68', '2', 00001, 7),
(2942, 'k69', '3', 00001, 7),
(2943, 'k70', '3', 00001, 7),
(2944, 'k71', '3', 00001, 7),
(2945, 'k72', '3', 00001, 7),
(2946, 'k73', '3', 00001, 7),
(2947, 'k74', '3', 00001, 7),
(2948, 'k75', '3', 00001, 7),
(2949, 'k76', '3', 00001, 7),
(2950, 'k77', '3', 00001, 7),
(2951, 'k78', '3', 00001, 7),
(2952, 'k79', '3', 00001, 7),
(2953, 'k80', '3', 00001, 7),
(2954, 'k81', '3', 00001, 7),
(2955, 'k82', '3', 00001, 7),
(2956, 'k83', '3', 00001, 7),
(2957, 'k84', '3', 00001, 7),
(2958, 'k85', '3', 00001, 7),
(2959, 'k86', '3', 00001, 7),
(2960, 'k87', '3', 00001, 7),
(2961, 'k88', '3', 00001, 7),
(2962, 'k89', '3', 00001, 7),
(2963, 'k90', '3', 00001, 7),
(3001, 'k01', '3', 00001, 8),
(3002, 'k02', '3', 00001, 8),
(3003, 'k03', '4', 00001, 8),
(3004, 'k04', '1', 00001, 8),
(3005, 'k05', '3', 00001, 8),
(3006, 'k06', '3', 00001, 8),
(3007, 'k07', '3', 00001, 8),
(3008, 'k08', '2', 00001, 8),
(3009, 'k09', '1', 00001, 8),
(3010, 'k10', '2', 00001, 8),
(3011, 'k11', '1', 00001, 8),
(3012, 'k12', '1', 00001, 8),
(3013, 'k13', '1', 00001, 8),
(3014, 'k14', '1', 00001, 8),
(3015, 'k15', '1', 00001, 8),
(3016, 'k16', '4', 00001, 8),
(3017, 'k17', '1', 00001, 8),
(3018, 'k18', '1', 00001, 8),
(3019, 'k19', '1', 00001, 8),
(3020, 'k20', '1', 00001, 8),
(3021, 'k21', '3', 00001, 8),
(3022, 'k22', '3', 00001, 8),
(3023, 'k23', '3', 00001, 8),
(3024, 'k24', '3', 00001, 8),
(3025, 'k25', '3', 00001, 8),
(3026, 'k26', '3', 00001, 8),
(3027, 'k27', '3', 00001, 8),
(3028, 'k28', '3', 00001, 8),
(3029, 'k29', '3', 00001, 8),
(3030, 'k30', '3', 00001, 8),
(3031, 'k31', '1', 00001, 8),
(3032, 'k32', '1', 00001, 8),
(3033, 'k33', '3', 00001, 8),
(3034, 'k34', '2', 00001, 8),
(3035, 'k35', '3', 00001, 8),
(3036, 'k36', '3', 00001, 8),
(3037, 'k37', '3', 00001, 8),
(3038, 'k38', '3', 00001, 8),
(3039, 'k39', '3', 00001, 8),
(3040, 'k40', '3', 00001, 8),
(3041, 'k41', '3', 00001, 8),
(3042, 'k42', '3', 00001, 8),
(3043, 'k43', '3', 00001, 8),
(3044, 'k44', '3', 00001, 8),
(3045, 'k45', '3', 00001, 8),
(3046, 'k46', '3', 00001, 8),
(3047, 'k47', '4', 00001, 8),
(3048, 'k48', '3', 00001, 8),
(3049, 'k49', '3', 00001, 8),
(3050, 'k50', '2', 00001, 8),
(3051, 'k51', '1', 00001, 8),
(3052, 'k52', '1', 00001, 8),
(3053, 'k53', '1', 00001, 8),
(3054, 'k54', '3', 00001, 8),
(3055, 'k55', '3', 00001, 8),
(3056, 'k56', '1', 00001, 8),
(3057, 'k57', '1', 00001, 8),
(3058, 'k58', '3', 00001, 8),
(3059, 'k59', '3', 00001, 8),
(3060, 'k60', '2', 00001, 8),
(3061, 'k61', '3', 00001, 8),
(3062, 'k62', '3', 00001, 8),
(3063, 'k63', '2', 00001, 8),
(3064, 'k64', '1', 00001, 8),
(3065, 'k65', '1', 00001, 8),
(3066, 'k66', '1', 00001, 8),
(3067, 'k67', '1', 00001, 8),
(3068, 'k68', '1', 00001, 8),
(3069, 'k69', '1', 00001, 8),
(3070, 'k70', '1', 00001, 8),
(3071, 'k71', '1', 00001, 8),
(3072, 'k72', '2', 00001, 8),
(3073, 'k73', '2', 00001, 8),
(3074, 'k74', '2', 00001, 8),
(3075, 'k75', '2', 00001, 8),
(3076, 'k76', '2', 00001, 8),
(3077, 'k77', '2', 00001, 8),
(3078, 'k78', '4', 00001, 8),
(3079, 'k79', '4', 00001, 8),
(3080, 'k80', '3', 00001, 8),
(3081, 'k81', '4', 00001, 8),
(3082, 'k82', '4', 00001, 8),
(3083, 'k83', '4', 00001, 8),
(3084, 'k84', '4', 00001, 8),
(3085, 'k85', '4', 00001, 8),
(3086, 'k86', '4', 00001, 8),
(3087, 'k87', '1', 00001, 8),
(3088, 'k88', '1', 00001, 8),
(3089, 'k89', '2', 00001, 8),
(3090, 'k90', '2', 00001, 8),
(3128, 'k01', '2', 00001, 9),
(3129, 'k02', '3', 00001, 9),
(3130, 'k03', '4', 00001, 9),
(3131, 'k04', '3', 00001, 9),
(3132, 'k05', '5', 00001, 9),
(3133, 'k06', '5', 00001, 9),
(3134, 'k07', '5', 00001, 9),
(3135, 'k08', '5', 00001, 9),
(3136, 'k09', '5', 00001, 9),
(3137, 'k10', '4', 00001, 9),
(3138, 'k11', '3', 00001, 9),
(3139, 'k12', '3', 00001, 9),
(3140, 'k13', '1', 00001, 9),
(3141, 'k14', '1', 00001, 9),
(3142, 'k15', '2', 00001, 9),
(3143, 'k16', '2', 00001, 9),
(3144, 'k17', '2', 00001, 9),
(3145, 'k18', '2', 00001, 9),
(3146, 'k19', '2', 00001, 9),
(3147, 'k20', '4', 00001, 9),
(3148, 'k21', '5', 00001, 9),
(3149, 'k22', '5', 00001, 9),
(3150, 'k23', '5', 00001, 9),
(3151, 'k24', '3', 00001, 9),
(3152, 'k25', '3', 00001, 9),
(3153, 'k26', '3', 00001, 9),
(3154, 'k27', '4', 00001, 9),
(3155, 'k28', '2', 00001, 9),
(3156, 'k29', '2', 00001, 9),
(3157, 'k30', '2', 00001, 9),
(3158, 'k31', '2', 00001, 9),
(3159, 'k32', '4', 00001, 9),
(3160, 'k33', '4', 00001, 9),
(3161, 'k34', '5', 00001, 9),
(3162, 'k35', '2', 00001, 9),
(3163, 'k36', '2', 00001, 9),
(3164, 'k37', '4', 00001, 9),
(3165, 'k38', '4', 00001, 9),
(3166, 'k39', '4', 00001, 9),
(3167, 'k40', '4', 00001, 9),
(3168, 'k41', '5', 00001, 9),
(3169, 'k42', '5', 00001, 9),
(3170, 'k43', '5', 00001, 9),
(3171, 'k44', '5', 00001, 9),
(3172, 'k45', '3', 00001, 9),
(3173, 'k46', '4', 00001, 9),
(3174, 'k47', '2', 00001, 9),
(3175, 'k48', '4', 00001, 9),
(3176, 'k49', '4', 00001, 9),
(3177, 'k50', '4', 00001, 9),
(3178, 'k51', '4', 00001, 9),
(3179, 'k52', '2', 00001, 9),
(3180, 'k53', '2', 00001, 9),
(3181, 'k54', '2', 00001, 9),
(3182, 'k55', '2', 00001, 9),
(3183, 'k56', '2', 00001, 9),
(3184, 'k57', '2', 00001, 9),
(3185, 'k58', '2', 00001, 9),
(3186, 'k59', '2', 00001, 9),
(3187, 'k60', '2', 00001, 9),
(3188, 'k61', '2', 00001, 9),
(3189, 'k62', '2', 00001, 9),
(3190, 'k63', '2', 00001, 9),
(3191, 'k64', '2', 00001, 9),
(3192, 'k65', '2', 00001, 9),
(3193, 'k66', '2', 00001, 9),
(3194, 'k67', '1', 00001, 9),
(3195, 'k68', '1', 00001, 9),
(3196, 'k69', '2', 00001, 9),
(3197, 'k70', '4', 00001, 9),
(3198, 'k71', '2', 00001, 9),
(3199, 'k72', '4', 00001, 9),
(3200, 'k73', '4', 00001, 9),
(3201, 'k74', '3', 00001, 9),
(3202, 'k75', '3', 00001, 9),
(3203, 'k76', '3', 00001, 9),
(3204, 'k77', '4', 00001, 9),
(3205, 'k78', '3', 00001, 9),
(3206, 'k79', '1', 00001, 9),
(3207, 'k80', '4', 00001, 9),
(3208, 'k81', '5', 00001, 9),
(3209, 'k82', '5', 00001, 9),
(3210, 'k83', '4', 00001, 9),
(3211, 'k84', '2', 00001, 9),
(3212, 'k85', '4', 00001, 9),
(3213, 'k86', '4', 00001, 9),
(3214, 'k87', '2', 00001, 9),
(3215, 'k88', '1', 00001, 9),
(3216, 'k89', '4', 00001, 9),
(3217, 'k90', '4', 00001, 9),
(3255, 'k01', '4', 00001, 10),
(3256, 'k02', '2', 00001, 10),
(3257, 'k03', '1', 00001, 10),
(3258, 'k04', '2', 00001, 10),
(3259, 'k05', '4', 00001, 10),
(3260, 'k06', '2', 00001, 10),
(3261, 'k07', '4', 00001, 10),
(3262, 'k08', '2', 00001, 10),
(3263, 'k09', '3', 00001, 10),
(3264, 'k10', '3', 00001, 10),
(3265, 'k11', '3', 00001, 10),
(3266, 'k12', '2', 00001, 10),
(3267, 'k13', '2', 00001, 10),
(3268, 'k14', '2', 00001, 10),
(3269, 'k15', '2', 00001, 10),
(3270, 'k16', '3', 00001, 10),
(3271, 'k17', '2', 00001, 10),
(3272, 'k18', '3', 00001, 10),
(3273, 'k19', '2', 00001, 10),
(3274, 'k20', '3', 00001, 10),
(3275, 'k21', '2', 00001, 10),
(3276, 'k22', '4', 00001, 10),
(3277, 'k23', '3', 00001, 10),
(3278, 'k24', '2', 00001, 10),
(3279, 'k25', '2', 00001, 10),
(3280, 'k26', '2', 00001, 10),
(3281, 'k27', '3', 00001, 10),
(3282, 'k28', '2', 00001, 10),
(3283, 'k29', '2', 00001, 10),
(3284, 'k30', '2', 00001, 10),
(3285, 'k31', '2', 00001, 10),
(3286, 'k32', '3', 00001, 10),
(3287, 'k33', '3', 00001, 10),
(3288, 'k34', '3', 00001, 10),
(3289, 'k35', '2', 00001, 10),
(3290, 'k36', '2', 00001, 10),
(3291, 'k37', '2', 00001, 10),
(3292, 'k38', '2', 00001, 10),
(3293, 'k39', '2', 00001, 10),
(3294, 'k40', '3', 00001, 10),
(3295, 'k41', '2', 00001, 10),
(3296, 'k42', '3', 00001, 10),
(3297, 'k43', '2', 00001, 10),
(3298, 'k44', '2', 00001, 10),
(3299, 'k45', '3', 00001, 10),
(3300, 'k46', '3', 00001, 10),
(3301, 'k47', '3', 00001, 10),
(3302, 'k48', '2', 00001, 10),
(3303, 'k49', '2', 00001, 10),
(3304, 'k50', '2', 00001, 10),
(3305, 'k51', '3', 00001, 10),
(3306, 'k52', '2', 00001, 10),
(3307, 'k53', '2', 00001, 10),
(3308, 'k54', '3', 00001, 10),
(3309, 'k55', '2', 00001, 10),
(3310, 'k56', '2', 00001, 10),
(3311, 'k57', '2', 00001, 10),
(3312, 'k58', '2', 00001, 10),
(3313, 'k59', '2', 00001, 10),
(3314, 'k60', '2', 00001, 10),
(3315, 'k61', '2', 00001, 10),
(3316, 'k62', '3', 00001, 10),
(3317, 'k63', '3', 00001, 10),
(3318, 'k64', '3', 00001, 10),
(3319, 'k65', '3', 00001, 10),
(3320, 'k66', '3', 00001, 10),
(3321, 'k67', '3', 00001, 10),
(3322, 'k68', '3', 00001, 10),
(3323, 'k69', '3', 00001, 10),
(3324, 'k70', '3', 00001, 10),
(3325, 'k71', '3', 00001, 10),
(3326, 'k72', '4', 00001, 10),
(3327, 'k73', '3', 00001, 10),
(3328, 'k74', '3', 00001, 10),
(3329, 'k75', '3', 00001, 10),
(3330, 'k76', '3', 00001, 10),
(3331, 'k77', '4', 00001, 10),
(3332, 'k78', '2', 00001, 10),
(3333, 'k79', '2', 00001, 10),
(3334, 'k80', '2', 00001, 10),
(3335, 'k81', '2', 00001, 10),
(3336, 'k82', '3', 00001, 10),
(3337, 'k83', '3', 00001, 10),
(3338, 'k84', '3', 00001, 10),
(3339, 'k85', '3', 00001, 10),
(3340, 'k86', '3', 00001, 10),
(3341, 'k87', '2', 00001, 10),
(3342, 'k88', '2', 00001, 10),
(3343, 'k89', '3', 00001, 10),
(3344, 'k90', '3', 00001, 10),
(3382, 'k01', '2', 00001, 11),
(3383, 'k02', '2', 00001, 11),
(3384, 'k03', '3', 00001, 11),
(3385, 'k04', '1', 00001, 11),
(3386, 'k05', '4', 00001, 11),
(3387, 'k06', '2', 00001, 11),
(3388, 'k07', '1', 00001, 11),
(3389, 'k08', '2', 00001, 11),
(3390, 'k09', '2', 00001, 11),
(3391, 'k10', '2', 00001, 11),
(3392, 'k11', '2', 00001, 11),
(3393, 'k12', '2', 00001, 11),
(3394, 'k13', '1', 00001, 11),
(3395, 'k14', '3', 00001, 11),
(3396, 'k15', '2', 00001, 11),
(3397, 'k16', '1', 00001, 11),
(3398, 'k17', '1', 00001, 11),
(3399, 'k18', '1', 00001, 11),
(3400, 'k19', '2', 00001, 11),
(3401, 'k20', '2', 00001, 11),
(3402, 'k21', '2', 00001, 11),
(3403, 'k22', '1', 00001, 11),
(3404, 'k23', '3', 00001, 11),
(3405, 'k24', '2', 00001, 11),
(3406, 'k25', '1', 00001, 11),
(3407, 'k26', '2', 00001, 11),
(3408, 'k27', '3', 00001, 11),
(3409, 'k28', '2', 00001, 11),
(3410, 'k29', '2', 00001, 11),
(3411, 'k30', '2', 00001, 11),
(3412, 'k31', '2', 00001, 11),
(3413, 'k32', '2', 00001, 11),
(3414, 'k33', '3', 00001, 11),
(3415, 'k34', '2', 00001, 11),
(3416, 'k35', '2', 00001, 11),
(3417, 'k36', '2', 00001, 11),
(3418, 'k37', '3', 00001, 11),
(3419, 'k38', '3', 00001, 11),
(3420, 'k39', '3', 00001, 11),
(3421, 'k40', '2', 00001, 11),
(3422, 'k41', '3', 00001, 11),
(3423, 'k42', '2', 00001, 11),
(3424, 'k43', '4', 00001, 11),
(3425, 'k44', '3', 00001, 11),
(3426, 'k45', '4', 00001, 11),
(3427, 'k46', '3', 00001, 11),
(3428, 'k47', '2', 00001, 11),
(3429, 'k48', '3', 00001, 11),
(3430, 'k49', '3', 00001, 11),
(3431, 'k50', '2', 00001, 11),
(3432, 'k51', '2', 00001, 11),
(3433, 'k52', '2', 00001, 11),
(3434, 'k53', '2', 00001, 11),
(3435, 'k54', '2', 00001, 11),
(3436, 'k55', '2', 00001, 11),
(3437, 'k56', '3', 00001, 11),
(3438, 'k57', '2', 00001, 11),
(3439, 'k58', '2', 00001, 11),
(3440, 'k59', '3', 00001, 11),
(3441, 'k60', '2', 00001, 11),
(3442, 'k61', '2', 00001, 11),
(3443, 'k62', '2', 00001, 11),
(3444, 'k63', '2', 00001, 11),
(3445, 'k64', '2', 00001, 11),
(3446, 'k65', '1', 00001, 11),
(3447, 'k66', '2', 00001, 11),
(3448, 'k67', '2', 00001, 11),
(3449, 'k68', '2', 00001, 11),
(3450, 'k69', '2', 00001, 11),
(3451, 'k70', '1', 00001, 11),
(3452, 'k71', '1', 00001, 11),
(3453, 'k72', '2', 00001, 11),
(3454, 'k73', '1', 00001, 11),
(3455, 'k74', '1', 00001, 11),
(3456, 'k75', '1', 00001, 11),
(3457, 'k76', '2', 00001, 11),
(3458, 'k77', '2', 00001, 11),
(3459, 'k78', '5', 00001, 11),
(3460, 'k79', '2', 00001, 11),
(3461, 'k80', '3', 00001, 11),
(3462, 'k81', '3', 00001, 11),
(3463, 'k82', '3', 00001, 11),
(3464, 'k83', '3', 00001, 11),
(3465, 'k84', '4', 00001, 11),
(3466, 'k85', '4', 00001, 11),
(3467, 'k86', '4', 00001, 11),
(3468, 'k87', '2', 00001, 11),
(3469, 'k88', '1', 00001, 11),
(3470, 'k89', '2', 00001, 11),
(3471, 'k90', '2', 00001, 11),
(3509, 'k01', '2', 00001, 12),
(3510, 'k02', '3', 00001, 12),
(3511, 'k03', '3', 00001, 12),
(3512, 'k04', '2', 00001, 12),
(3513, 'k05', '4', 00001, 12),
(3514, 'k06', '2', 00001, 12),
(3515, 'k07', '2', 00001, 12),
(3516, 'k08', '3', 00001, 12),
(3517, 'k09', '2', 00001, 12),
(3518, 'k10', '3', 00001, 12),
(3519, 'k11', '2', 00001, 12),
(3520, 'k12', '2', 00001, 12),
(3521, 'k13', '2', 00001, 12),
(3522, 'k14', '2', 00001, 12),
(3523, 'k15', '3', 00001, 12),
(3524, 'k16', '4', 00001, 12),
(3525, 'k17', '2', 00001, 12),
(3526, 'k18', '2', 00001, 12),
(3527, 'k19', '3', 00001, 12),
(3528, 'k20', '4', 00001, 12),
(3529, 'k21', '5', 00001, 12),
(3530, 'k22', '5', 00001, 12),
(3531, 'k23', '5', 00001, 12),
(3532, 'k24', '2', 00001, 12),
(3533, 'k25', '2', 00001, 12),
(3534, 'k26', '2', 00001, 12),
(3535, 'k27', '4', 00001, 12),
(3536, 'k28', '2', 00001, 12),
(3537, 'k29', '2', 00001, 12),
(3538, 'k30', '2', 00001, 12),
(3539, 'k31', '2', 00001, 12),
(3540, 'k32', '3', 00001, 12),
(3541, 'k33', '4', 00001, 12),
(3542, 'k34', '3', 00001, 12),
(3543, 'k35', '3', 00001, 12),
(3544, 'k36', '3', 00001, 12),
(3545, 'k37', '3', 00001, 12),
(3546, 'k38', '3', 00001, 12),
(3547, 'k39', '3', 00001, 12),
(3548, 'k40', '3', 00001, 12),
(3549, 'k41', '2', 00001, 12),
(3550, 'k42', '2', 00001, 12),
(3551, 'k43', '2', 00001, 12),
(3552, 'k44', '2', 00001, 12),
(3553, 'k45', '3', 00001, 12),
(3554, 'k46', '4', 00001, 12),
(3555, 'k47', '2', 00001, 12),
(3556, 'k48', '2', 00001, 12),
(3557, 'k49', '2', 00001, 12),
(3558, 'k50', '2', 00001, 12),
(3559, 'k51', '3', 00001, 12),
(3560, 'k52', '2', 00001, 12),
(3561, 'k53', '2', 00001, 12),
(3562, 'k54', '2', 00001, 12),
(3563, 'k55', '2', 00001, 12),
(3564, 'k56', '2', 00001, 12),
(3565, 'k57', '3', 00001, 12),
(3566, 'k58', '2', 00001, 12),
(3567, 'k59', '3', 00001, 12),
(3568, 'k60', '3', 00001, 12),
(3569, 'k61', '3', 00001, 12),
(3570, 'k62', '2', 00001, 12),
(3571, 'k63', '3', 00001, 12),
(3572, 'k64', '3', 00001, 12),
(3573, 'k65', '3', 00001, 12),
(3574, 'k66', '2', 00001, 12),
(3575, 'k67', '2', 00001, 12),
(3576, 'k68', '2', 00001, 12),
(3577, 'k69', '2', 00001, 12),
(3578, 'k70', '3', 00001, 12),
(3579, 'k71', '4', 00001, 12),
(3580, 'k72', '2', 00001, 12),
(3581, 'k73', '4', 00001, 12),
(3582, 'k74', '4', 00001, 12),
(3583, 'k75', '3', 00001, 12),
(3584, 'k76', '2', 00001, 12),
(3585, 'k77', '2', 00001, 12),
(3586, 'k78', '2', 00001, 12),
(3587, 'k79', '2', 00001, 12),
(3588, 'k80', '2', 00001, 12),
(3589, 'k81', '5', 00001, 12),
(3590, 'k82', '4', 00001, 12),
(3591, 'k83', '2', 00001, 12),
(3592, 'k84', '3', 00001, 12),
(3593, 'k85', '3', 00001, 12),
(3594, 'k86', '3', 00001, 12),
(3595, 'k87', '2', 00001, 12),
(3596, 'k88', '3', 00001, 12),
(3597, 'k89', '3', 00001, 12),
(3598, 'k90', '3', 00001, 12),
(3636, 'k01', '3', 00001, 13),
(3637, 'k02', '3', 00001, 13),
(3638, 'k03', '2', 00001, 13),
(3639, 'k04', '3', 00001, 13),
(3640, 'k05', '4', 00001, 13),
(3641, 'k06', '3', 00001, 13),
(3642, 'k07', '3', 00001, 13),
(3643, 'k08', '2', 00001, 13),
(3644, 'k09', '3', 00001, 13),
(3645, 'k10', '3', 00001, 13),
(3646, 'k11', '2', 00001, 13),
(3647, 'k12', '2', 00001, 13),
(3648, 'k13', '2', 00001, 13),
(3649, 'k14', '2', 00001, 13),
(3650, 'k15', '3', 00001, 13),
(3651, 'k16', '3', 00001, 13),
(3652, 'k17', '3', 00001, 13),
(3653, 'k18', '3', 00001, 13),
(3654, 'k19', '2', 00001, 13),
(3655, 'k20', '3', 00001, 13),
(3656, 'k21', '3', 00001, 13),
(3657, 'k22', '4', 00001, 13),
(3658, 'k23', '4', 00001, 13),
(3659, 'k24', '3', 00001, 13),
(3660, 'k25', '3', 00001, 13),
(3661, 'k26', '3', 00001, 13),
(3662, 'k27', '3', 00001, 13),
(3663, 'k28', '3', 00001, 13),
(3664, 'k29', '3', 00001, 13),
(3665, 'k30', '4', 00001, 13),
(3666, 'k31', '4', 00001, 13),
(3667, 'k32', '3', 00001, 13),
(3668, 'k33', '3', 00001, 13),
(3669, 'k34', '3', 00001, 13),
(3670, 'k35', '2', 00001, 13),
(3671, 'k36', '3', 00001, 13),
(3672, 'k37', '4', 00001, 13),
(3673, 'k38', '4', 00001, 13),
(3674, 'k39', '4', 00001, 13),
(3675, 'k40', '3', 00001, 13),
(3676, 'k41', '3', 00001, 13),
(3677, 'k42', '3', 00001, 13),
(3678, 'k43', '3', 00001, 13),
(3679, 'k44', '2', 00001, 13),
(3680, 'k45', '3', 00001, 13),
(3681, 'k46', '3', 00001, 13),
(3682, 'k47', '3', 00001, 13),
(3683, 'k48', '3', 00001, 13),
(3684, 'k49', '4', 00001, 13),
(3685, 'k50', '2', 00001, 13),
(3686, 'k51', '3', 00001, 13),
(3687, 'k52', '3', 00001, 13),
(3688, 'k53', '2', 00001, 13),
(3689, 'k54', '3', 00001, 13),
(3690, 'k55', '3', 00001, 13),
(3691, 'k56', '2', 00001, 13),
(3692, 'k57', '2', 00001, 13),
(3693, 'k58', '2', 00001, 13),
(3694, 'k59', '2', 00001, 13),
(3695, 'k60', '3', 00001, 13),
(3696, 'k61', '3', 00001, 13),
(3697, 'k62', '3', 00001, 13),
(3698, 'k63', '3', 00001, 13),
(3699, 'k64', '3', 00001, 13),
(3700, 'k65', '2', 00001, 13),
(3701, 'k66', '2', 00001, 13),
(3702, 'k67', '2', 00001, 13),
(3703, 'k68', '2', 00001, 13),
(3704, 'k69', '3', 00001, 13),
(3705, 'k70', '3', 00001, 13),
(3706, 'k71', '3', 00001, 13),
(3707, 'k72', '3', 00001, 13),
(3708, 'k73', '3', 00001, 13),
(3709, 'k74', '2', 00001, 13),
(3710, 'k75', '3', 00001, 13),
(3711, 'k76', '3', 00001, 13),
(3712, 'k77', '3', 00001, 13),
(3713, 'k78', '3', 00001, 13),
(3714, 'k79', '2', 00001, 13),
(3715, 'k80', '3', 00001, 13),
(3716, 'k81', '4', 00001, 13),
(3717, 'k82', '3', 00001, 13),
(3718, 'k83', '3', 00001, 13),
(3719, 'k84', '3', 00001, 13),
(3720, 'k85', '2', 00001, 13),
(3721, 'k86', '2', 00001, 13),
(3722, 'k87', '2', 00001, 13),
(3723, 'k88', '2', 00001, 13),
(3724, 'k89', '2', 00001, 13),
(3725, 'k90', '2', 00001, 13),
(3763, 'k01', '3', 00001, 14),
(3764, 'k02', '5', 00001, 14),
(3765, 'k03', '5', 00001, 14),
(3766, 'k04', '3', 00001, 14),
(3767, 'k05', '2', 00001, 14),
(3768, 'k06', '2', 00001, 14),
(3769, 'k07', '3', 00001, 14),
(3770, 'k08', '3', 00001, 14),
(3771, 'k09', '3', 00001, 14),
(3772, 'k10', '4', 00001, 14),
(3773, 'k11', '4', 00001, 14),
(3774, 'k12', '4', 00001, 14),
(3775, 'k13', '4', 00001, 14),
(3776, 'k14', '4', 00001, 14),
(3777, 'k15', '5', 00001, 14),
(3778, 'k16', '3', 00001, 14),
(3779, 'k17', '4', 00001, 14),
(3780, 'k18', '4', 00001, 14),
(3781, 'k19', '3', 00001, 14),
(3782, 'k20', '5', 00001, 14),
(3783, 'k21', '4', 00001, 14),
(3784, 'k22', '4', 00001, 14),
(3785, 'k23', '3', 00001, 14),
(3786, 'k24', '4', 00001, 14),
(3787, 'k25', '5', 00001, 14),
(3788, 'k26', '5', 00001, 14),
(3789, 'k27', '5', 00001, 14),
(3790, 'k28', '3', 00001, 14),
(3791, 'k29', '4', 00001, 14),
(3792, 'k30', '3', 00001, 14),
(3793, 'k31', '3', 00001, 14),
(3794, 'k32', '3', 00001, 14),
(3795, 'k33', '3', 00001, 14),
(3796, 'k34', '4', 00001, 14),
(3797, 'k35', '3', 00001, 14),
(3798, 'k36', '3', 00001, 14),
(3799, 'k37', '4', 00001, 14),
(3800, 'k38', '3', 00001, 14),
(3801, 'k39', '4', 00001, 14),
(3802, 'k40', '4', 00001, 14),
(3803, 'k41', '4', 00001, 14),
(3804, 'k42', '4', 00001, 14),
(3805, 'k43', '3', 00001, 14),
(3806, 'k44', '3', 00001, 14),
(3807, 'k45', '3', 00001, 14),
(3808, 'k46', '3', 00001, 14),
(3809, 'k47', '3', 00001, 14),
(3810, 'k48', '3', 00001, 14),
(3811, 'k49', '3', 00001, 14),
(3812, 'k50', '4', 00001, 14),
(3813, 'k51', '3', 00001, 14),
(3814, 'k52', '4', 00001, 14),
(3815, 'k53', '4', 00001, 14),
(3816, 'k54', '4', 00001, 14),
(3817, 'k55', '5', 00001, 14),
(3818, 'k56', '3', 00001, 14),
(3819, 'k57', '4', 00001, 14),
(3820, 'k58', '3', 00001, 14),
(3821, 'k59', '4', 00001, 14),
(3822, 'k60', '3', 00001, 14),
(3823, 'k61', '3', 00001, 14),
(3824, 'k62', '3', 00001, 14),
(3825, 'k63', '5', 00001, 14),
(3826, 'k64', '4', 00001, 14),
(3827, 'k65', '3', 00001, 14),
(3828, 'k66', '4', 00001, 14),
(3829, 'k67', '3', 00001, 14),
(3830, 'k68', '3', 00001, 14),
(3831, 'k69', '3', 00001, 14),
(3832, 'k70', '3', 00001, 14),
(3833, 'k71', '4', 00001, 14),
(3834, 'k72', '3', 00001, 14),
(3835, 'k73', '4', 00001, 14),
(3836, 'k74', '4', 00001, 14),
(3837, 'k75', '4', 00001, 14),
(3838, 'k76', '4', 00001, 14),
(3839, 'k77', '4', 00001, 14),
(3840, 'k78', '3', 00001, 14),
(3841, 'k79', '4', 00001, 14),
(3842, 'k80', '4', 00001, 14),
(3843, 'k81', '3', 00001, 14),
(3844, 'k82', '3', 00001, 14),
(3845, 'k83', '3', 00001, 14),
(3846, 'k84', '4', 00001, 14),
(3847, 'k85', '4', 00001, 14),
(3848, 'k86', '4', 00001, 14),
(3849, 'k87', '4', 00001, 14),
(3850, 'k88', '4', 00001, 14),
(3851, 'k89', '3', 00001, 14),
(3852, 'k90', '3', 00001, 14),
(3890, 'k01', '3', 00001, 15),
(3891, 'k02', '3', 00001, 15),
(3892, 'k03', '3', 00001, 15),
(3893, 'k04', '3', 00001, 15),
(3894, 'k05', '3', 00001, 15),
(3895, 'k06', '3', 00001, 15),
(3896, 'k07', '3', 00001, 15),
(3897, 'k08', '2', 00001, 15),
(3898, 'k09', '3', 00001, 15),
(3899, 'k10', '3', 00001, 15),
(3900, 'k11', '3', 00001, 15),
(3901, 'k12', '2', 00001, 15),
(3902, 'k13', '2', 00001, 15),
(3903, 'k14', '2', 00001, 15),
(3904, 'k15', '2', 00001, 15),
(3905, 'k16', '3', 00001, 15),
(3906, 'k17', '2', 00001, 15),
(3907, 'k18', '3', 00001, 15),
(3908, 'k19', '2', 00001, 15),
(3909, 'k20', '3', 00001, 15),
(3910, 'k21', '3', 00001, 15),
(3911, 'k22', '3', 00001, 15),
(3912, 'k23', '3', 00001, 15),
(3913, 'k24', '3', 00001, 15),
(3914, 'k25', '2', 00001, 15),
(3915, 'k26', '3', 00001, 15),
(3916, 'k27', '3', 00001, 15),
(3917, 'k28', '2', 00001, 15),
(3918, 'k29', '3', 00001, 15),
(3919, 'k30', '2', 00001, 15),
(3920, 'k31', '2', 00001, 15),
(3921, 'k32', '3', 00001, 15),
(3922, 'k33', '3', 00001, 15),
(3923, 'k34', '3', 00001, 15),
(3924, 'k35', '3', 00001, 15),
(3925, 'k36', '3', 00001, 15),
(3926, 'k37', '3', 00001, 15),
(3927, 'k38', '2', 00001, 15),
(3928, 'k39', '3', 00001, 15),
(3929, 'k40', '3', 00001, 15),
(3930, 'k41', '3', 00001, 15),
(3931, 'k42', '3', 00001, 15),
(3932, 'k43', '3', 00001, 15),
(3933, 'k44', '3', 00001, 15),
(3934, 'k45', '3', 00001, 15),
(3935, 'k46', '3', 00001, 15),
(3936, 'k47', '2', 00001, 15),
(3937, 'k48', '3', 00001, 15),
(3938, 'k49', '2', 00001, 15),
(3939, 'k50', '3', 00001, 15),
(3940, 'k51', '3', 00001, 15),
(3941, 'k52', '3', 00001, 15),
(3942, 'k53', '3', 00001, 15),
(3943, 'k54', '3', 00001, 15),
(3944, 'k55', '3', 00001, 15),
(3945, 'k56', '3', 00001, 15),
(3946, 'k57', '3', 00001, 15),
(3947, 'k58', '3', 00001, 15),
(3948, 'k59', '3', 00001, 15),
(3949, 'k60', '2', 00001, 15),
(3950, 'k61', '2', 00001, 15),
(3951, 'k62', '3', 00001, 15),
(3952, 'k63', '3', 00001, 15),
(3953, 'k64', '2', 00001, 15),
(3954, 'k65', '2', 00001, 15),
(3955, 'k66', '2', 00001, 15),
(3956, 'k67', '3', 00001, 15),
(3957, 'k68', '2', 00001, 15),
(3958, 'k69', '3', 00001, 15),
(3959, 'k70', '3', 00001, 15),
(3960, 'k71', '3', 00001, 15),
(3961, 'k72', '3', 00001, 15),
(3962, 'k73', '3', 00001, 15),
(3963, 'k74', '3', 00001, 15),
(3964, 'k75', '3', 00001, 15),
(3965, 'k76', '3', 00001, 15),
(3966, 'k77', '3', 00001, 15),
(3967, 'k78', '3', 00001, 15),
(3968, 'k79', '3', 00001, 15),
(3969, 'k80', '3', 00001, 15),
(3970, 'k81', '3', 00001, 15),
(3971, 'k82', '3', 00001, 15),
(3972, 'k83', '3', 00001, 15),
(3973, 'k84', '3', 00001, 15),
(3974, 'k85', '3', 00001, 15),
(3975, 'k86', '3', 00001, 15),
(3976, 'k87', '3', 00001, 15),
(3977, 'k88', '3', 00001, 15),
(3978, 'k89', '3', 00001, 15),
(3979, 'k90', '3', 00001, 15),
(4017, 'k01', '3', 00001, 16),
(4018, 'k02', '3', 00001, 16),
(4019, 'k03', '3', 00001, 16),
(4020, 'k04', '3', 00001, 16),
(4021, 'k05', '3', 00001, 16),
(4022, 'k06', '3', 00001, 16),
(4023, 'k07', '3', 00001, 16),
(4024, 'k08', '2', 00001, 16),
(4025, 'k09', '3', 00001, 16),
(4026, 'k10', '3', 00001, 16),
(4027, 'k11', '3', 00001, 16),
(4028, 'k12', '2', 00001, 16),
(4029, 'k13', '2', 00001, 16),
(4030, 'k14', '2', 00001, 16),
(4031, 'k15', '2', 00001, 16),
(4032, 'k16', '3', 00001, 16),
(4033, 'k17', '2', 00001, 16),
(4034, 'k18', '3', 00001, 16),
(4035, 'k19', '2', 00001, 16),
(4036, 'k20', '3', 00001, 16),
(4037, 'k21', '3', 00001, 16),
(4038, 'k22', '3', 00001, 16),
(4039, 'k23', '3', 00001, 16),
(4040, 'k24', '3', 00001, 16),
(4041, 'k25', '2', 00001, 16),
(4042, 'k26', '3', 00001, 16),
(4043, 'k27', '3', 00001, 16),
(4044, 'k28', '2', 00001, 16),
(4045, 'k29', '3', 00001, 16),
(4046, 'k30', '2', 00001, 16),
(4047, 'k31', '2', 00001, 16),
(4048, 'k32', '3', 00001, 16),
(4049, 'k33', '3', 00001, 16),
(4050, 'k34', '3', 00001, 16),
(4051, 'k35', '3', 00001, 16),
(4052, 'k36', '3', 00001, 16),
(4053, 'k37', '3', 00001, 16),
(4054, 'k38', '2', 00001, 16),
(4055, 'k39', '3', 00001, 16),
(4056, 'k40', '3', 00001, 16),
(4057, 'k41', '3', 00001, 16),
(4058, 'k42', '3', 00001, 16),
(4059, 'k43', '3', 00001, 16),
(4060, 'k44', '3', 00001, 16),
(4061, 'k45', '3', 00001, 16),
(4062, 'k46', '3', 00001, 16),
(4063, 'k47', '2', 00001, 16),
(4064, 'k48', '3', 00001, 16),
(4065, 'k49', '2', 00001, 16),
(4066, 'k50', '3', 00001, 16),
(4067, 'k51', '3', 00001, 16),
(4068, 'k52', '3', 00001, 16),
(4069, 'k53', '3', 00001, 16),
(4070, 'k54', '3', 00001, 16),
(4071, 'k55', '3', 00001, 16),
(4072, 'k56', '3', 00001, 16),
(4073, 'k57', '3', 00001, 16),
(4074, 'k58', '3', 00001, 16),
(4075, 'k59', '3', 00001, 16),
(4076, 'k60', '2', 00001, 16),
(4077, 'k61', '2', 00001, 16),
(4078, 'k62', '3', 00001, 16),
(4079, 'k63', '3', 00001, 16),
(4080, 'k64', '1', 00001, 16),
(4081, 'k65', '1', 00001, 16),
(4082, 'k66', '1', 00001, 16),
(4083, 'k67', '3', 00001, 16),
(4084, 'k68', '2', 00001, 16),
(4085, 'k69', '3', 00001, 16),
(4086, 'k70', '3', 00001, 16),
(4087, 'k71', '3', 00001, 16),
(4088, 'k72', '3', 00001, 16),
(4089, 'k73', '3', 00001, 16),
(4090, 'k74', '3', 00001, 16),
(4091, 'k75', '3', 00001, 16),
(4092, 'k76', '3', 00001, 16),
(4093, 'k77', '3', 00001, 16),
(4094, 'k78', '3', 00001, 16),
(4095, 'k79', '3', 00001, 16),
(4096, 'k80', '3', 00001, 16),
(4097, 'k81', '3', 00001, 16),
(4098, 'k82', '3', 00001, 16),
(4099, 'k83', '3', 00001, 16),
(4100, 'k84', '3', 00001, 16),
(4101, 'k85', '3', 00001, 16),
(4102, 'k86', '3', 00001, 16),
(4103, 'k87', '3', 00001, 16),
(4104, 'k88', '3', 00001, 16),
(4105, 'k89', '3', 00001, 16),
(4106, 'k90', '3', 00001, 16),
(4144, 'k01', '4', 00001, 17),
(4145, 'k02', '4', 00001, 17),
(4146, 'k03', '4', 00001, 17),
(4147, 'k04', '4', 00001, 17),
(4148, 'k05', '5', 00001, 17),
(4149, 'k06', '5', 00001, 17),
(4150, 'k07', '5', 00001, 17),
(4151, 'k08', '3', 00001, 17),
(4152, 'k09', '5', 00001, 17),
(4153, 'k10', '4', 00001, 17),
(4154, 'k11', '3', 00001, 17),
(4155, 'k12', '3', 00001, 17),
(4156, 'k13', '3', 00001, 17),
(4157, 'k14', '4', 00001, 17),
(4158, 'k15', '4', 00001, 17),
(4159, 'k16', '5', 00001, 17),
(4160, 'k17', '4', 00001, 17),
(4161, 'k18', '4', 00001, 17),
(4162, 'k19', '2', 00001, 17),
(4163, 'k20', '3', 00001, 17),
(4164, 'k21', '4', 00001, 17),
(4165, 'k22', '4', 00001, 17),
(4166, 'k23', '4', 00001, 17),
(4167, 'k24', '5', 00001, 17),
(4168, 'k25', '4', 00001, 17),
(4169, 'k26', '4', 00001, 17),
(4170, 'k27', '4', 00001, 17),
(4171, 'k28', '3', 00001, 17),
(4172, 'k29', '4', 00001, 17),
(4173, 'k30', '3', 00001, 17),
(4174, 'k31', '3', 00001, 17),
(4175, 'k32', '5', 00001, 17),
(4176, 'k33', '5', 00001, 17),
(4177, 'k34', '4', 00001, 17),
(4178, 'k35', '4', 00001, 17),
(4179, 'k36', '5', 00001, 17),
(4180, 'k37', '5', 00001, 17),
(4181, 'k38', '4', 00001, 17),
(4182, 'k39', '4', 00001, 17),
(4183, 'k40', '4', 00001, 17),
(4184, 'k41', '5', 00001, 17),
(4185, 'k42', '4', 00001, 17),
(4186, 'k43', '4', 00001, 17),
(4187, 'k44', '5', 00001, 17),
(4188, 'k45', '5', 00001, 17),
(4189, 'k46', '4', 00001, 17),
(4190, 'k47', '5', 00001, 17),
(4191, 'k48', '5', 00001, 17),
(4192, 'k49', '5', 00001, 17),
(4193, 'k50', '4', 00001, 17),
(4194, 'k51', '5', 00001, 17),
(4195, 'k52', '4', 00001, 17),
(4196, 'k53', '4', 00001, 17),
(4197, 'k54', '5', 00001, 17),
(4198, 'k55', '5', 00001, 17),
(4199, 'k56', '4', 00001, 17),
(4200, 'k57', '4', 00001, 17),
(4201, 'k58', '4', 00001, 17),
(4202, 'k59', '4', 00001, 17),
(4203, 'k60', '3', 00001, 17),
(4204, 'k61', '4', 00001, 17),
(4205, 'k62', '5', 00001, 17),
(4206, 'k63', '4', 00001, 17),
(4207, 'k64', '4', 00001, 17),
(4208, 'k65', '3', 00001, 17),
(4209, 'k66', '5', 00001, 17),
(4210, 'k67', '3', 00001, 17),
(4211, 'k68', '3', 00001, 17),
(4212, 'k69', '4', 00001, 17),
(4213, 'k70', '4', 00001, 17),
(4214, 'k71', '3', 00001, 17),
(4215, 'k72', '5', 00001, 17),
(4216, 'k73', '4', 00001, 17),
(4217, 'k74', '5', 00001, 17),
(4218, 'k75', '4', 00001, 17),
(4219, 'k76', '4', 00001, 17),
(4220, 'k77', '4', 00001, 17),
(4221, 'k78', '4', 00001, 17),
(4222, 'k79', '4', 00001, 17),
(4223, 'k80', '5', 00001, 17),
(4224, 'k81', '5', 00001, 17),
(4225, 'k82', '4', 00001, 17),
(4226, 'k83', '5', 00001, 17),
(4227, 'k84', '5', 00001, 17),
(4228, 'k85', '4', 00001, 17),
(4229, 'k86', '4', 00001, 17),
(4230, 'k87', '3', 00001, 17),
(4231, 'k88', '3', 00001, 17),
(4232, 'k89', '4', 00001, 17),
(4233, 'k90', '5', 00001, 17),
(4271, 'k01', '4', 00001, 18),
(4272, 'k02', '4', 00001, 18),
(4273, 'k03', '4', 00001, 18),
(4274, 'k04', '4', 00001, 18),
(4275, 'k05', '5', 00001, 18),
(4276, 'k06', '5', 00001, 18),
(4277, 'k07', '5', 00001, 18),
(4278, 'k08', '3', 00001, 18),
(4279, 'k09', '5', 00001, 18),
(4280, 'k10', '4', 00001, 18),
(4281, 'k11', '3', 00001, 18),
(4282, 'k12', '3', 00001, 18),
(4283, 'k13', '3', 00001, 18),
(4284, 'k14', '4', 00001, 18),
(4285, 'k15', '4', 00001, 18),
(4286, 'k16', '5', 00001, 18),
(4287, 'k17', '4', 00001, 18),
(4288, 'k18', '4', 00001, 18),
(4289, 'k19', '2', 00001, 18),
(4290, 'k20', '3', 00001, 18),
(4291, 'k21', '4', 00001, 18),
(4292, 'k22', '4', 00001, 18),
(4293, 'k23', '4', 00001, 18),
(4294, 'k24', '5', 00001, 18),
(4295, 'k25', '4', 00001, 18),
(4296, 'k26', '4', 00001, 18),
(4297, 'k27', '4', 00001, 18),
(4298, 'k28', '3', 00001, 18),
(4299, 'k29', '4', 00001, 18),
(4300, 'k30', '3', 00001, 18),
(4301, 'k31', '3', 00001, 18),
(4302, 'k32', '5', 00001, 18),
(4303, 'k33', '5', 00001, 18),
(4304, 'k34', '4', 00001, 18),
(4305, 'k35', '4', 00001, 18),
(4306, 'k36', '5', 00001, 18),
(4307, 'k37', '5', 00001, 18),
(4308, 'k38', '4', 00001, 18),
(4309, 'k39', '4', 00001, 18),
(4310, 'k40', '5', 00001, 18),
(4311, 'k41', '5', 00001, 18),
(4312, 'k42', '5', 00001, 18),
(4313, 'k43', '4', 00001, 18),
(4314, 'k44', '5', 00001, 18),
(4315, 'k45', '5', 00001, 18),
(4316, 'k46', '5', 00001, 18),
(4317, 'k47', '5', 00001, 18),
(4318, 'k48', '5', 00001, 18),
(4319, 'k49', '5', 00001, 18),
(4320, 'k50', '4', 00001, 18),
(4321, 'k51', '5', 00001, 18),
(4322, 'k52', '4', 00001, 18),
(4323, 'k53', '4', 00001, 18),
(4324, 'k54', '5', 00001, 18),
(4325, 'k55', '4', 00001, 18),
(4326, 'k56', '4', 00001, 18),
(4327, 'k57', '4', 00001, 18),
(4328, 'k58', '4', 00001, 18),
(4329, 'k59', '4', 00001, 18),
(4330, 'k60', '3', 00001, 18),
(4331, 'k61', '3', 00001, 18),
(4332, 'k62', '4', 00001, 18),
(4333, 'k63', '4', 00001, 18),
(4334, 'k64', '4', 00001, 18),
(4335, 'k65', '3', 00001, 18),
(4336, 'k66', '5', 00001, 18),
(4337, 'k67', '3', 00001, 18),
(4338, 'k68', '3', 00001, 18),
(4339, 'k69', '4', 00001, 18),
(4340, 'k70', '4', 00001, 18),
(4341, 'k71', '3', 00001, 18),
(4342, 'k72', '5', 00001, 18),
(4343, 'k73', '4', 00001, 18),
(4344, 'k74', '4', 00001, 18),
(4345, 'k75', '4', 00001, 18),
(4346, 'k76', '4', 00001, 18),
(4347, 'k77', '4', 00001, 18),
(4348, 'k78', '4', 00001, 18),
(4349, 'k79', '4', 00001, 18),
(4350, 'k80', '5', 00001, 18),
(4351, 'k81', '5', 00001, 18),
(4352, 'k82', '5', 00001, 18),
(4353, 'k83', '5', 00001, 18),
(4354, 'k84', '5', 00001, 18),
(4355, 'k85', '4', 00001, 18),
(4356, 'k86', '4', 00001, 18),
(4357, 'k87', '3', 00001, 18),
(4358, 'k88', '3', 00001, 18),
(4359, 'k89', '4', 00001, 18),
(4360, 'k90', '5', 00001, 18),
(4398, 'k01', '4', 00001, 19),
(4399, 'k02', '5', 00001, 19),
(4400, 'k03', '4', 00001, 19),
(4401, 'k04', '5', 00001, 19),
(4402, 'k05', '5', 00001, 19),
(4403, 'k06', '5', 00001, 19),
(4404, 'k07', '5', 00001, 19),
(4405, 'k08', '5', 00001, 19),
(4406, 'k09', '4', 00001, 19),
(4407, 'k10', '4', 00001, 19),
(4408, 'k11', '5', 00001, 19),
(4409, 'k12', '4', 00001, 19),
(4410, 'k13', '4', 00001, 19),
(4411, 'k14', '4', 00001, 19),
(4412, 'k15', '4', 00001, 19),
(4413, 'k16', '5', 00001, 19),
(4414, 'k17', '3', 00001, 19),
(4415, 'k18', '4', 00001, 19),
(4416, 'k19', '5', 00001, 19),
(4417, 'k20', '4', 00001, 19),
(4418, 'k21', '3', 00001, 19),
(4419, 'k22', '5', 00001, 19),
(4420, 'k23', '4', 00001, 19),
(4421, 'k24', '4', 00001, 19),
(4422, 'k25', '4', 00001, 19),
(4423, 'k26', '3', 00001, 19),
(4424, 'k27', '3', 00001, 19),
(4425, 'k28', '3', 00001, 19),
(4426, 'k29', '4', 00001, 19),
(4427, 'k30', '4', 00001, 19),
(4428, 'k31', '3', 00001, 19),
(4429, 'k32', '4', 00001, 19),
(4430, 'k33', '3', 00001, 19),
(4431, 'k34', '4', 00001, 19),
(4432, 'k35', '5', 00001, 19),
(4433, 'k36', '3', 00001, 19),
(4434, 'k37', '5', 00001, 19),
(4435, 'k38', '4', 00001, 19),
(4436, 'k39', '4', 00001, 19),
(4437, 'k40', '5', 00001, 19),
(4438, 'k41', '3', 00001, 19),
(4439, 'k42', '5', 00001, 19),
(4440, 'k43', '5', 00001, 19),
(4441, 'k44', '5', 00001, 19),
(4442, 'k45', '4', 00001, 19),
(4443, 'k46', '3', 00001, 19),
(4444, 'k47', '5', 00001, 19),
(4445, 'k48', '4', 00001, 19),
(4446, 'k49', '3', 00001, 19),
(4447, 'k50', '4', 00001, 19),
(4448, 'k51', '5', 00001, 19),
(4449, 'k52', '5', 00001, 19),
(4450, 'k53', '2', 00001, 19),
(4451, 'k54', '5', 00001, 19),
(4452, 'k55', '3', 00001, 19),
(4453, 'k56', '3', 00001, 19),
(4454, 'k57', '4', 00001, 19),
(4455, 'k58', '5', 00001, 19),
(4456, 'k59', '4', 00001, 19),
(4457, 'k60', '2', 00001, 19),
(4458, 'k61', '3', 00001, 19),
(4459, 'k62', '4', 00001, 19),
(4460, 'k63', '4', 00001, 19),
(4461, 'k64', '4', 00001, 19),
(4462, 'k65', '5', 00001, 19),
(4463, 'k66', '3', 00001, 19),
(4464, 'k67', '3', 00001, 19),
(4465, 'k68', '3', 00001, 19),
(4466, 'k69', '4', 00001, 19),
(4467, 'k70', '4', 00001, 19),
(4468, 'k71', '3', 00001, 19),
(4469, 'k72', '3', 00001, 19),
(4470, 'k73', '4', 00001, 19),
(4471, 'k74', '3', 00001, 19),
(4472, 'k75', '3', 00001, 19),
(4473, 'k76', '4', 00001, 19),
(4474, 'k77', '3', 00001, 19),
(4475, 'k78', '5', 00001, 19),
(4476, 'k79', '4', 00001, 19),
(4477, 'k80', '3', 00001, 19),
(4478, 'k81', '4', 00001, 19),
(4479, 'k82', '4', 00001, 19),
(4480, 'k83', '5', 00001, 19),
(4481, 'k84', '3', 00001, 19),
(4482, 'k85', '3', 00001, 19),
(4483, 'k86', '3', 00001, 19),
(4484, 'k87', '3', 00001, 19),
(4485, 'k88', '2', 00001, 19),
(4486, 'k89', '3', 00001, 19),
(4487, 'k90', '3', 00001, 19),
(4525, 'k01', '4', 00001, 20),
(4526, 'k02', '4', 00001, 20),
(4527, 'k03', '4', 00001, 20),
(4528, 'k04', '4', 00001, 20),
(4529, 'k05', '5', 00001, 20),
(4530, 'k06', '5', 00001, 20),
(4531, 'k07', '5', 00001, 20),
(4532, 'k08', '3', 00001, 20),
(4533, 'k09', '5', 00001, 20),
(4534, 'k10', '4', 00001, 20),
(4535, 'k11', '3', 00001, 20),
(4536, 'k12', '3', 00001, 20),
(4537, 'k13', '4', 00001, 20),
(4538, 'k14', '4', 00001, 20),
(4539, 'k15', '4', 00001, 20),
(4540, 'k16', '4', 00001, 20),
(4541, 'k17', '4', 00001, 20),
(4542, 'k18', '5', 00001, 20),
(4543, 'k19', '5', 00001, 20),
(4544, 'k20', '5', 00001, 20),
(4545, 'k21', '3', 00001, 20),
(4546, 'k22', '4', 00001, 20),
(4547, 'k23', '4', 00001, 20),
(4548, 'k24', '5', 00001, 20),
(4549, 'k25', '4', 00001, 20),
(4550, 'k26', '4', 00001, 20),
(4551, 'k27', '4', 00001, 20),
(4552, 'k28', '3', 00001, 20),
(4553, 'k29', '4', 00001, 20),
(4554, 'k30', '3', 00001, 20),
(4555, 'k31', '3', 00001, 20),
(4556, 'k32', '5', 00001, 20),
(4557, 'k33', '5', 00001, 20),
(4558, 'k34', '4', 00001, 20),
(4559, 'k35', '4', 00001, 20),
(4560, 'k36', '5', 00001, 20),
(4561, 'k37', '5', 00001, 20),
(4562, 'k38', '4', 00001, 20),
(4563, 'k39', '4', 00001, 20),
(4564, 'k40', '5', 00001, 20),
(4565, 'k41', '5', 00001, 20),
(4566, 'k42', '5', 00001, 20),
(4567, 'k43', '4', 00001, 20),
(4568, 'k44', '5', 00001, 20),
(4569, 'k45', '5', 00001, 20),
(4570, 'k46', '5', 00001, 20),
(4571, 'k47', '5', 00001, 20),
(4572, 'k48', '5', 00001, 20),
(4573, 'k49', '5', 00001, 20),
(4574, 'k50', '4', 00001, 20),
(4575, 'k51', '5', 00001, 20),
(4576, 'k52', '4', 00001, 20),
(4577, 'k53', '4', 00001, 20),
(4578, 'k54', '5', 00001, 20),
(4579, 'k55', '4', 00001, 20),
(4580, 'k56', '4', 00001, 20),
(4581, 'k57', '4', 00001, 20),
(4582, 'k58', '4', 00001, 20),
(4583, 'k59', '4', 00001, 20),
(4584, 'k60', '3', 00001, 20),
(4585, 'k61', '3', 00001, 20),
(4586, 'k62', '4', 00001, 20),
(4587, 'k63', '4', 00001, 20),
(4588, 'k64', '4', 00001, 20),
(4589, 'k65', '3', 00001, 20),
(4590, 'k66', '5', 00001, 20),
(4591, 'k67', '3', 00001, 20),
(4592, 'k68', '3', 00001, 20),
(4593, 'k69', '4', 00001, 20),
(4594, 'k70', '4', 00001, 20),
(4595, 'k71', '3', 00001, 20),
(4596, 'k72', '5', 00001, 20),
(4597, 'k73', '4', 00001, 20),
(4598, 'k74', '4', 00001, 20),
(4599, 'k75', '4', 00001, 20),
(4600, 'k76', '4', 00001, 20),
(4601, 'k77', '4', 00001, 20),
(4602, 'k78', '4', 00001, 20),
(4603, 'k79', '4', 00001, 20),
(4604, 'k80', '5', 00001, 20),
(4605, 'k81', '5', 00001, 20),
(4606, 'k82', '5', 00001, 20),
(4607, 'k83', '5', 00001, 20),
(4608, 'k84', '5', 00001, 20),
(4609, 'k85', '4', 00001, 20),
(4610, 'k86', '4', 00001, 20),
(4611, 'k87', '3', 00001, 20),
(4612, 'k88', '3', 00001, 20),
(4613, 'k89', '4', 00001, 20),
(4614, 'k90', '5', 00001, 20);

--
-- Triggers `jawaban`
--
DELIMITER $$
CREATE TRIGGER `jawaban_ai` BEFORE INSERT ON `jawaban` FOR EACH ROW set new.id_periode = (SELECT id_periode from periode ORDER BY id_periode desc LIMIT 1)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id_kuesioner` varchar(10) NOT NULL,
  `kuesioner` text NOT NULL,
  `id_co` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id_kuesioner`, `kuesioner`, `id_co`) VALUES
('k01', 'Kami menambahkan solusi untuk perancangan layanan IT ke dalam service portofolio (gambaran yang jelas dari semua layanan bisnis TI yang didokumentasikan dalam dokumentasi kebutuhan fungsional) pada fase perancangan konsep service design', 'c01'),
('k02', 'Kami telah mendefinisikan Service Level Requirements (proses yang berisi kebutuhan apa saja pada layanan IT yang diinginkan oleh user)', 'c01'),
('k03', 'Kami melibatkan bagian keuangan untuk mengatur anggaran yang dikeluarkan dalam pengembangan IT (seperti biaya untuk programmer, analis, design, perbaikan, infrastruktur IT, dll)', 'c01'),
('k04', 'Kami melibatkan Supplier/Pemasok apabila proses pengadaan (procurement) untuk infrastuktur IT, seperti komputer, printer, telepon, dll yang dibutuhkan pada layanan IT yang dibangun', 'c01'),
('k05', 'Kami merancang layanan IT sesuai dengan tujuan bisnis perusahaan', 'c01'),
('k06', 'Kami merancang layanan IT yang mudah dan efektif untuk dikembangkan', 'c01'),
('k07', 'Kami merancang layanan IT yang mudah dan efektif untuk digunakan oleh pengguna', 'c01'),
('k08', 'Kami melakukan identifikasi risiko yang mungkin timbul pada layanan IT sehingga dapat dijalankan dengan baik', 'c01'),
('k09', 'Kami melakukan perancangan sesuai dengan prosedur keamanan dan menjamin kehandalan layanan IT', 'c01'),
('k10', 'Kami merancang layanan, teknologi, dan proses pada layanan IT dengan tepat yang dapat memenuhi kebutuhan bisnis', 'c01'),
('k11', 'Kami merancang semua dokumen yang terlibat dalam perancangan layanan IT', 'c01'),
('k12', 'Kami merevisi semua dokumen yang terlibat da  lam perancangan layanan IT', 'c01'),
('k13', 'Kami telah mendokumentasikan layanan IT yang digunakan pada perusahaan dalam Service Catalogue  ', 'c02'),
('k14', 'Kami telah diberikan perngarahan untuk meningkatkan kesadaran mengenai pentingnya informasi layanan IT yang ada pada Service Catalogue', 'c02'),
('k15', 'Kami telah melakukan sinkronisasi antara Portofolio pada layanan IT dengan Service Catalogue sehingga data lebih akurat', 'c02'),
('k16', 'Kami memiliki personel pada divisi IT yang bertanggung jawab dalam meningkatkan keakuratan data pada katalog lainnya', 'c02'),
('k17', 'Kami memiliki Business Service Catalogue yang berisi informasi yang menghubungkan antara proses bisnis dan unit bisnis di perusahaan yang menggunakan layanan IT', 'c02'),
('k18', 'Kami memiliki Technical Service Catalogue yang berisi informasi yang menghubungkan antara layanan pendukung serta komponen dalam mendukung layanan IT yang ada di perusahaan', 'c02'),
('k19', 'Kami telah memiliki dokumentasi mengenai sejauh mana tingkat layanan IT yang ada di perusahaan, seperti dokumentasi melalui hasil wawancara langsung terhadap pengguna mengenai layanan IT yang digunakan', 'c03'),
('k20', 'Kami telah melakukan pengawasan untuk melihat sejauh mana tingkat layanan IT saat ini apakah sudah sesuai dengan kebutuhan pengguna', 'c03'),
('k21', 'Kami dengan rutin melakukan komunikasi secara langsung dengan pengguna agar layanan IT yang disediakan dapat meningkatkan kepuasan pengguna di perusahaan', 'c03'),
('k22', 'Kami menangani pelaporan mengenai penyediaan layanan IT yang dikeluhkan dari pengguna kepada divisi IT perusahaan', 'c03'),
('k23', 'Kami melakukan evaluasi mengenai penyediaan layanan IT kepada pengguna untuk rencana peningkatan pelayanan yang digunakan', 'c03'),
('k24', 'Kami melakukan penandatanganan persetujuan tingkat layanan (SLA) antara penyedia layanan IT/ divisi IT Perusahaan dengan pengguna di perusahaan', 'c03'),
('k25', 'Kami melakukan penandatanganan persetujuan tingkat layanan antara sesama penyedia layanan IT (OLA)', 'c03'),
('k26', 'Kami melakukan persetujuan antara manager IT dengan supplier diluar perusahaan berupa underpinning contract', 'c03'),
('k27', 'Kami memastikan bahwa pengguna memiliki pemahaman yang cukup dalam menggunakan layanan IT', 'c04'),
('k28', 'Kami telah melakukan pembuatan laporan terhadap kapasitas layanan IT untuk memenuhi kebutuhan bisnis perusahaan pada masa yang akan dating', 'c04'),
('k29', 'Kami telah melakukan perencanaan dan perkiraan terhadap kapasitas layanan IT untuk memenuhi kebutuhan bisnis perusahaan pada masa yang akan datang', 'c04'),
('k30', 'Kami telah mendefinisikan sub Proses Capacity Management yaitu Bussines Capacity Management', 'c04'),
('k31', 'Kami telah mendefinisikan sub proses Capacity Management yaitu Component Capacity Management', 'c04'),
('k32', 'Kami telah mendefinisikan kapasitas dari aplikasi yang kami miliki', 'c04'),
('k33', 'Kami telah mendefinisikan manajemen permintaan pengguna (user) sesuai dengan kapasitas organisasi.', 'c04'),
('k34', 'Kami telah memahami dan melakukan pemantauan waktu respon pengguna sesuai dengan kapasitas organisasi ', 'c04'),
('k35', 'Kami telah melakukan pembuatan laporan terhadap ketersediaan layanan IT di perusahaan', 'c05'),
('k36', 'Kami telah melakukan penjadwalan terhadap ketersediaan layanan IT di perusahaan', 'c05'),
('k37', 'Kami melakukan proses monitoring atau pengawasan ketersediaan layanan atas semua insiden, kejadian, dan permasalahan yang dapat mempengaruhi layanan IT yang ada pada perusahaan', 'c05'),
('k38', 'Kami melakukan proses measuring atau pengukuran ketersediaan layanan atas semua insiden, kejadian, dan permasalahan yang dapat mempengaruhi layanan IT yang ada pada perusahaan', 'c05'),
('k39', 'Kami melakukan proses investigasi ketersediaan layanan atas semua insiden, kejadian, dan permasalahan yang dapat mempengaruhi layanan IT yang ada pada perusahaan', 'c05'),
('k40', 'Kami telah melakukan planning atau perencanaan dari ketersediaan layanan IT yang ada saat ini', 'c05'),
('k41', 'Kami telah melakukan quality improvement atau peningkatan kualitas dari ketersediaan layanan IT', 'c05'),
('k42', 'Kami telah melakukan pengembangan layanan IT sesuai dengan kebutuhan bisnis perusahaan', 'c06'),
('k43', 'Kami telah menerima masukan kebutuhan dari divisi selain IT untuk melakukan analisa dari dampak bisnis terhadap layanan IT yang digunakan', 'c06'),
('k44', 'Kami telah mengembangkan rencana keberlanjutan dan perbaikan layanan IT', 'c06'),
('k45', 'Kami telah melakukan pendefinisian organisasi dalam melakukan perbaikan layanan IT secara terus-menerus serta menetapkan prosedur dan instruksi kerja organisasi tersebut', 'c06'),
('k46', 'Kami telah memastikan bahwa manajemen IT sesuai dengan perencanaan dan melakukan perbaikan secara terus-menerus, serta divisi IT harus sudah terlatih dalam melakukan suatu rencana yang akan dilakukan', 'c06'),
('k47', 'Kami telah mendokumentasikan dan revisi terhadap kebijakan keamanan informasi atau security policy pada layanan IT', 'c07'),
('k48', 'Kami telah melakukan evaluasi dengan cara melakukan peninjauan lebih lanjut terhadap keamanan semua asset informasi dan dokumentasi pada layanan IT', 'c07'),
('k49', 'Kami telah melakukan review, revisi, dan penilaian resiko terhadap musibah yang terjadi', 'c07'),
('k50', 'Kami telah melakukan kontrol terhadap semua pelanggaran keamanan dan insiden keamanan', 'c07'),
('k51', 'Kami melakukan aktivitas sesuai dengan prosedur keamanan apabila ingin merubah suatu proses dan layanan pada sistem atau perangkat baru', 'c07'),
('k52', 'Kami melakukan penjadwalan untuk pelaksanaan audit dari tim internal perusahaan terhadap keamanan pada layanan IT', 'c07'),
('k53', 'Kami telah melakukan penjadwalan untuk pelaksanaan audit dari organisasi eksternal perusahaan terhadap keamanan dan kehandalan pada layanan IT', 'c07'),
('k54', 'Kami memiliki supplier sebagai support dalam penyediaan layanan IT bagi kebutuhan proses bisnis perusahaan', 'c08'),
('k55', 'Kami memiliki kebijakan atas supplier untuk keberlangsungan layanan IT yang lebih baik', 'c08'),
('k56', 'Kami telah memiliki Supplier and Contract Database (SCD) yang terdiri dari data record seluruh supplier, rincian kontrak, jenis layanan yang diberikan, dan produk-produk yang disediakan oleh setiap supplier, serta semua informasi lainnya', 'c08'),
('k57', 'Kami telah mendefinisikan bagaimana mengelola perpanjangan atau penghentian kontrak kerja supplierKami telah mendefinisikan bagaimana cara melakukan evaluasi terhadap kontrak kerja supplier', 'c08'),
('k58', 'Kami memastikan bahwa pengguna memiliki pemahaman yang cukup dalam menggunakan layanan ITKami telah mendefinisikan bagaimana menentukan supplier baru dan kontrak kerjanya', 'c08'),
('k59', 'Kami telah mendefinisikan bagaimana mengelola perpanjangan atau penghentian kontrak kerja supplier', 'c08'),
('k60', 'Kami telah mendefinisikan ruang lingkup dari pengelolaan supplier', 'c08'),
('k61', 'Kami telah mendefinisikan kebijakan dan prinsip organisasi terhadap supplier', 'c08'),
('k62', 'Kami telah merencanakan dan mengkoordinasi sumber daya (resources) dan kemampuan (capabilities)', 'c09'),
('k63', 'Kami telah mengkoordinasikan semua aktivitas desain antar proyek', 'c09'),
('k64', 'Kami telah mendefinisikan Service Design Packages', 'c09'),
('k65', 'Kami memiliki dokumen service charters dan change requests', 'c09'),
('k66', 'Kami telah memonitor dan meningkatkan semua proses-proses service design', 'c09'),
('k67', 'Kami telah menggunakan Model RACI (Responsible, Accountable, Consulted, and Informed) yang digunakan untuk mendefinisikan peran dan tanggung jawab untuk Service Design', 'c10'),
('k68', 'Kami melakukan deskripsi dari aktivitas-aktivitas dari matriks RACI', 'c10'),
('k69', 'Kami melakukan pendefinisian dan menetapkan peran-peran dan tanggung jawab untuk menangani service design', 'c10'),
('k70', 'Kami telah memiliki IT Planner yang berperan untuk membuat dan mengkoordinasi setiap perencanaan IT diperusahaan', 'c10'),
('k71', 'Kami memiliki personil yang berperan untuk membuat dan mengelola katalog layanan IT', 'c10'),
('k72', 'Kami memiliki personil yang berperan untuk memastikan bahwa tingkat layanan IT terus meningkat seiring berkembangnya teknologi', 'c10'),
('k73', 'Kami memiliki personil yang berperan untuk memastikan bahwa ketersediaan layanan IT telah terpenuhi', 'c10'),
('k74', 'Kami memiliki personil yang berperan untuk memastikan bahwa kapasitas layanan IT telah terpenuhi', 'c10'),
('k75', 'Kami memiliki personil yang berperan untuk memastikan bahwa manajemen terhadap supplier telah terpenuhi', 'c10'),
('k76', 'Kami telah memiliki personil yang berperan untuk memastikan bahwa manajemen terhadap keamanan informasi telah terpenuhi', 'c10'),
('k77', 'Kami memiliki personil yang berperan untuk memastikan bahawa manajemen terhadap kelanjutan layanan IT yang terus-menerus telah terpenuhi', 'c10'),
('k78', 'Kami telah melakukan workshop sebagai salah satu teknik untuk mengetahui requirements (kebutuhan pelanggan)', 'c11'),
('k79', 'Kami menggunakan Tools CASE (Computer Aided Software Engineering) yang digunakan untuk mendukung pengembangan aplikasi dari fase analisis sampai ke tahap maintenance', 'c11'),
('k80', 'Kami melakukan pengembangan aplikasi yang meliputi pedoman pembangunan aplikasi yang independen', 'c11'),
('k81', 'Kami melakukan pengembangan aplikasi meliputi uji coba kemampuan aplikasi (testing) saat sedang beroperasi', 'c11'),
('k82', 'Kami melakukan pengembangan aplikasi meliputi pada fase pembangunan aplikasi', 'c11'),
('k83', 'Kami melakukan pengembangan aplikasi meliputi peran tim pembangun (bulider) aplikasi dalam organisasi', 'c11'),
('k84', 'Kami melakukan pengembangan sesuai dengan semua tahapan dari siklus hidup layanan (service lifecycle)', 'c11'),
('k85', 'Kami telah memiliki alat (tools) dan teknik yang memungkinkan untuk dilakukan perancangan software', 'c12'),
('k86', 'Kami telah memiliki alat (tools) dan teknik yang memungkinkan untuk dilakukan perancangan data', 'c12'),
('k87', 'Kami memiliki alat atau tools yang memungkinkan untuk melakukan pengelolaan biaya layanan', 'c12'),
('k88', 'Kami memiliki alat atau tools yang memungkinkan untuk melakukan pengelolaan service catalogue', 'c12'),
('k89', 'Kami memiliki alat yang mengelola semua aspek layanan dan kinerja', 'c12'),
('k90', 'Kami memiliki alat yang menunjukkan integrasi bisnis dan proses layanan', 'c12');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(1) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `maturity`
--

CREATE TABLE `maturity` (
  `id_maturity` varchar(5) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `maturity` varchar(25) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maturity`
--

INSERT INTO `maturity` (`id_maturity`, `level`, `maturity`, `ket`) VALUES
('0', 0, '', ''),
('1', 1, 'Initial', 'Proses-proses perusahaan bersifat ad hocatau proses terkait telah direncanakan dan dilakukan namun tidak memiliki standar kinerja. pada level ini, organisasi pada umumnya tidak menyediakan lingkungan yang stabil untuk mengembangkan suatu produk baru. Ketika suatu organisasi kelihatannya mengalami kekurangan pengalaman manajemen, keuntungan dari mengintegrasikan pengembangan produk tidak dapat ditentukan dengan perencanaan yang tidak efektif, respon sistem. Proses pengembangan tidak dapat diprediksi dan tidak stabil, karena proses secara teratur berubah atau dimodifikasi selama pengerjaan berjalan beberapa form dari satu proyek ke proyek lain. Kinerja tergantung pada kemampuan individual atau term dan varies dengan keahlian yang dimilikinya. '),
('2', 2, 'Repeatable', 'Proses-proses terkait telah direncanakan dan dilakukan secara rutin namun tidak terdokumentasi. pada level ini, kebijakan untuk mengatur pengembangan suatu proyek dan prosedur dalam mengimplementasikan kebijakan tersebut ditetapkan. Tingkat efektif suatu proses manajemen dalam mengembangankan proyek adalah institutionalized, dengan memungkinkan organisasi untuk mengulangi pengalaman yang berhasil dalam mengembangkan proyek sebelumnya, walaupun terdapat proses tertentu yang tidak sama. Tingkat efektif suatu proses mempunyai karakteristik seperti; practiced, dokumentasi, enforced, trained, measured, dan dapat ditingkatkan. Product requirement dan dokumentasi perancangan selalu dijaga agar dapat mencegah perubahan yang tidak diinginkan. '),
('3', 3, 'Defined', 'Proses-proses direncanakan dan dilakukan secara rutin dan didokumentasikan dengan standar tertentu. pada level ini, proses standar dalam pengembangan suatu produk baru didokumentasikan, proses ini didasari pada proses pengembangan produk yang telah diintegrasikan. Proses-proses ini digunakan untuk membantu manejer, ketua tim dan anggota tim pengembangan sehingga bekerja dengan lebih efektif. Suatu proses yang telah didefenisikan dengan baik mempunyai karakteristik; readiness criteria, inputs, standar dan prosedur dalam mengerjakan suatu proyek, mekanisme verifikasi, output dan kriteria selesainya suatu proyek. Aturan dan tanggung jawab yang didefinisikan jelas dan dimengerti. Karena proses perangkat lunak didefinisikan dengan jelas, maka manajemen mempunyai pengatahuan yang baik mengenai kemajuan proyek tersebut. Biaya, jadwal dan kebutuhan proyek dalam pengawasan dan kualitas produk yang diawasi. '),
('4', 4, 'Managed', 'Proses-proses terkait telah direncanakan dan dilakukan secara rutin, didokumentasikan menggunakan standar dan dilakukan pengukuran kinerja proses. Pada level ini, organisasi membuat suatu matrik untuk suatu produk, proses dan pengukuran hasil. Proyek mempunyai kontrol terhadap produk dan proses untuk mengurangi variasi kinerja proses sehingga terdapat batasan yang dapat diterima. Resiko perpindahan teknologi produk, prores manufaktur, dan pasar harus diketahui dan diatur secara hati-hati. Proses pengembangan dapat ditentukan karena proses diukur dan dijalankan dengan limit yang dapat diukur.\n'),
('5', 5, 'Optimized', 'Proses-proses terkait telah direncanakan dan dilakukan secara rutin, didokumentasikan dengan standar, dilakukan pengukuran, serta diperbaiki secara berkelanjutan (continuously improved). Pada level ini, seluruh organisasi difokuskan pada proses peningkatan secara terus-menerus. Teknologi informasi sudah digunakan terintegrasi untuk otomatisasi proses kerja dalam perusahaan, meningkatkan kualitas, efektifitas, serta kemampuan beradaptasi perusahaan. Tim pengembangan produk menganalisis kesalahan dan defects untuk menentukan penyebab kesalahannya. Proses pengembangan melakukan evaluasi untuk mencegah kesalahan yang telah diketahui dan defects agar tidak terjadi lagi. ');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_harapan`
--

CREATE TABLE `nilai_harapan` (
  `id_nilai` int(11) NOT NULL,
  `id_maturity` varchar(5) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_harapan`
--

INSERT INTO `nilai_harapan` (`id_nilai`, `id_maturity`, `id_periode`, `keterangan`) VALUES
(1, '3', 1, 'Karena masih dalam tahap pengembangan');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(5) UNSIGNED ZEROFILL NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id_periode`, `periode_awal`, `periode_akhir`) VALUES
(00001, '2017-06-20', '2017-07-14');

--
-- Triggers `periode`
--
DELIMITER $$
CREATE TRIGGER `periode_ai` AFTER INSERT ON `periode` FOR EACH ROW INSERT INTO jawaban (`id_periode`, `id_user`, `id_kuesioner`) SELECT new.id_periode, id_user, id_kuesioner FROM jawaban
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` varchar(10) NOT NULL,
  `nama_service` varchar(25) NOT NULL,
  `ket_service` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `nama_service`, `ket_service`) VALUES
('s1', 'Service Design', 'Merancang layanan baru atau layanan lama yang akan diubah. Menganalisis dan memastikan layanan baru telah dipertimbangkan  tahapan mendesain layanan-layanan TI yang telah disetujui untuk disediakan (Service Catalog), termasuk pembuatan desain arsitektur, proses-proses, kebijakan, dan dokumen.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `id_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `jabatan`, `id_level`) VALUES
(1, 'admin', 'admin', 'Admin Sistem', 1),
(2, 'pr', 'uptti', 'Pembantu Rektor 2', 3),
(7, 'sisfo', 'uptti', 'Kadiv Sistem Informasi', 2),
(8, 'database', 'uptti', 'Kadiv Database', 2),
(9, 'sisfo1', 'uptti', 'Staff Sisfo 1', 2),
(10, 'sisfo2', 'uptti', 'Staff Sisfo 2', 2),
(11, 'sisfo3', 'uptti', 'Staff Sisfo 3', 2),
(12, 'sisfo4', 'uptti', 'Staff Sisfo 4', 2),
(13, 'sisfo5', 'uptti', 'Staff Sisfo 5', 2),
(14, 'database1', 'uptti', 'Staff Database 1', 2),
(15, 'database2', 'uptti', 'Staff Database 2', 2),
(16, 'database3', 'uptti', 'Staff Database 3', 2),
(17, 'jaringan1', 'uptti', 'Staff Jaringan 1', 2),
(18, 'jaringan2', 'uptti', 'Staff Jaringan 2', 2),
(19, 'jaringan3', 'uptti', 'Staff Jaringan 3', 2),
(20, 'jaringan4', 'uptti', 'Staff Jaringan 4', 2);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `trigger_jawaban_kuesioner` AFTER INSERT ON `user` FOR EACH ROW IF(NEW.id_level = 2) 
THEN 
INSERT INTO `jawaban` (`id_kuesioner`, `id_user`, `id_maturity`) SELECT id_kuesioner, NEW.id_user, 0 FROM kuesioner;
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_detail_co`
--
CREATE TABLE `view_detail_co` (
`id_periode` int(5) unsigned zerofill
,`id_kuesioner` varchar(10)
,`id_co` varchar(10)
,`hasil` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_hasil`
--
CREATE TABLE `view_hasil` (
`id_periode` int(5) unsigned zerofill
,`id_user` int(11)
,`id_co` varchar(10)
,`hasil` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_hasil_co`
--
CREATE TABLE `view_hasil_co` (
`id_periode` int(5) unsigned zerofill
,`id_co` varchar(10)
,`hasil` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_hasil_proses`
--
CREATE TABLE `view_hasil_proses` (
`periode` int(5) unsigned zerofill
,`area` varchar(25)
,`hasil_akhir` double
);

-- --------------------------------------------------------

--
-- Structure for view `view_detail_co`
--
DROP TABLE IF EXISTS `view_detail_co`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_detail_co`  AS  select `jawaban`.`id_periode` AS `id_periode`,`kuesioner`.`id_kuesioner` AS `id_kuesioner`,`kuesioner`.`id_co` AS `id_co`,(sum(`jawaban`.`id_maturity`) / count(`kuesioner`.`id_kuesioner`)) AS `hasil` from ((`jawaban` join `kuesioner` on((`kuesioner`.`id_kuesioner` = `jawaban`.`id_kuesioner`))) join `control` on((`control`.`id_co` = `kuesioner`.`id_co`))) group by `kuesioner`.`id_kuesioner` ;

-- --------------------------------------------------------

--
-- Structure for view `view_hasil`
--
DROP TABLE IF EXISTS `view_hasil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_hasil`  AS  select `j`.`id_periode` AS `id_periode`,`j`.`id_user` AS `id_user`,`k`.`id_co` AS `id_co`,(sum(`j`.`id_maturity`) / count(`j`.`id_kuesioner`)) AS `hasil` from (`jawaban` `j` join `kuesioner` `k` on((`j`.`id_kuesioner` = `k`.`id_kuesioner`))) group by `k`.`id_co`,`j`.`id_user`,`j`.`id_periode` ;

-- --------------------------------------------------------

--
-- Structure for view `view_hasil_co`
--
DROP TABLE IF EXISTS `view_hasil_co`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_hasil_co`  AS  select `jawaban`.`id_periode` AS `id_periode`,`control`.`id_co` AS `id_co`,(sum(`jawaban`.`id_maturity`) / count(`jawaban`.`id_kuesioner`)) AS `hasil` from ((`control` join `kuesioner` on((`kuesioner`.`id_co` = `control`.`id_co`))) join `jawaban` on((`jawaban`.`id_kuesioner` = `kuesioner`.`id_kuesioner`))) group by `control`.`id_co` ;

-- --------------------------------------------------------

--
-- Structure for view `view_hasil_proses`
--
DROP TABLE IF EXISTS `view_hasil_proses`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_hasil_proses`  AS  select `view_hasil`.`id_periode` AS `periode`,`control`.`area` AS `area`,(sum(`view_hasil`.`hasil`) / count(`control`.`id_co`)) AS `hasil_akhir` from (`view_hasil` join `control` on((`control`.`id_co` = `view_hasil`.`id_co`))) group by `control`.`area` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id_co`),
  ADD KEY `id_area` (`id_service`);

--
-- Indexes for table `hasil_rekomendasi`
--
ALTER TABLE `hasil_rekomendasi`
  ADD PRIMARY KEY (`id_rekomendasi`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_periode` (`id_periode`),
  ADD KEY `id_maturity` (`id_maturity`),
  ADD KEY `id_kuesioner` (`id_kuesioner`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`),
  ADD KEY `id_co` (`id_co`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `maturity`
--
ALTER TABLE `maturity`
  ADD PRIMARY KEY (`id_maturity`);

--
-- Indexes for table `nilai_harapan`
--
ALTER TABLE `nilai_harapan`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nilai_harapan` (`id_maturity`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_rekomendasi`
--
ALTER TABLE `hasil_rekomendasi`
  MODIFY `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4615;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nilai_harapan`
--
ALTER TABLE `nilai_harapan`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `control`
--
ALTER TABLE `control`
  ADD CONSTRAINT `control_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_kuesioner`) REFERENCES `kuesioner` (`id_kuesioner`),
  ADD CONSTRAINT `jawaban_ibfk_10` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jawaban_ibfk_5` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jawaban_ibfk_9` FOREIGN KEY (`id_maturity`) REFERENCES `maturity` (`id_maturity`);

--
-- Constraints for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD CONSTRAINT `kuesioner_ibfk_1` FOREIGN KEY (`id_co`) REFERENCES `control` (`id_co`);

--
-- Constraints for table `nilai_harapan`
--
ALTER TABLE `nilai_harapan`
  ADD CONSTRAINT `nilai_harapan_ibfk_1` FOREIGN KEY (`id_maturity`) REFERENCES `maturity` (`id_maturity`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
