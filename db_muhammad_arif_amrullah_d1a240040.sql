-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2025 pada 16.46
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_muhammad arif amrullah_d1a240040`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(5) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `about`) VALUES
(2, 'Halo! Saya Arif Amrullah, seorang mahasiswa aktif di Universitas Subang, jurusan Ilmu Komputer, program studi Sistem Informasi. Saya memadukan keahlian di bidang teknologi informasi dengan semangat membangun desa melalui pertanian modern.\r\n\r\nSebagai Web Developer, saya telah terbiasa mengembangkan berbagai aplikasi berbasis web dengan pendekatan desain yang responsif, fungsional, dan efisien. Dengan bekal ilmu komputer, saya percaya bahwa teknologi dapat menjadi jembatan untuk mempercepat transformasi di berbagai sektor, termasuk sektor pertanian.\r\n\r\nDi sisi lain, saya juga adalah seorang Petani Muda yang berkomitmen untuk mengembangkan sektor pertanian desa. Melalui pendekatan yang inovatif dan penggunaan teknologi tepat guna, saya berusaha menjadikan pertanian sebagai sektor yang modern, produktif, dan menarik bagi generasi muda.\r\n\r\nKeseimbangan antara dunia teknologi dan dunia pertanian inilah yang menjadi identitas saya. Saya ingin menjadi contoh nyata bahwa pemuda desa juga bisa berkontribusi besar, baik secara intelektual maupun praktis.\r\n\r\nSaya percaya bahwa perubahan besar dimulai dari langkah kecil yang konsisten. Karena itu, saya terus menginspirasi generasi muda untuk tidak hanya bermimpi, tetapi juga berani bergerak dan berkarya. Menjadi tokoh inspiratif bukanlah tujuan utama saya, tetapi konsekuensi dari komitmen saya untuk terus belajar, berbagi, dan membangun masa depan yang lebih baik dimulai dari desa.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `nama_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama_artikel`, `isi_artikel`) VALUES
(3, 'Pemuda Kampung Harapan Indung', 'Kampung Harapan Indung\r\nAdalah sebuah wilayah kecil yang terletak di pelosok daerah, namun siapa sangka dari kampung ini lahir seorang pemuda inspiratif bernama Muhammad Arif Amrullah. Sosoknya menjadi perbincangan di kalangan masyarakat karena semangat dan kontribusinya dalam membangun lingkungannya melalui ilmu dan teknologi.\r\n\r\nPemuda dengan Semangat Belajar yang Tinggi\r\nSejak kecil, Muhammad Arif dikenal sebagai anak yang rajin dan haus akan pengetahuan. Ia tumbuh dalam lingkungan yang sederhana, namun tidak membatasi semangatnya untuk terus belajar. Berbekal semangat dan tekad yang kuat, ia menempuh pendidikan tinggi di bidang teknologi informasi, sebuah bidang yang kini menjadi kunci utama dalam era digital.\r\nDi tengah keterbatasan fasilitas di kampungnya, Arif tidak menyerah. Ia belajar secara otodidak, mengikuti pelatihan daring, dan aktif di berbagai komunitas teknologi. Hal ini membuatnya mampu menguasai berbagai keterampilan, seperti pemrograman, desain web, dan pengelolaan sistem informasi.\r\n\r\nMengabdi untuk Kampung Halaman\r\nSetelah menyelesaikan pendidikannya, Arif tidak memilih tinggal di kota besar seperti kebanyakan orang. Ia justru kembali ke Kampung Harapan Indung dan mulai menggerakkan perubahan dari akar rumput. Ia menginisiasi program pelatihan komputer gratis bagi anak-anak dan remaja kampung, dengan tujuan agar generasi muda di sana tidak tertinggal oleh kemajuan zaman.\r\nIa juga membantu pemerintahan desa dalam mendigitalisasi sistem administrasi, mulai dari pendataan penduduk hingga informasi layanan publik berbasis website desa. Dengan cara ini, Arif membuktikan bahwa teknologi bisa dimanfaatkan untuk meningkatkan pelayanan masyarakat, bahkan dari tingkat paling dasar.\r\nSosok Panutan dan Sumber Inspirasi\r\nMuhammad Arif Amrullah bukan hanya dikenal karena keahliannya dalam bidang teknologi, tetapi juga karena sikap rendah hati dan kepeduliannya terhadap sesama. Ia sering menjadi narasumber dalam seminar pemuda, pelatihan guru-guru sekolah dasar, dan kegiatan sosial lainnya di kecamatan tempat ia tinggal.\r\nBanyak yang menyebutnya sebagai \"Pemuda Harapan Desa\", karena dari tangan dinginnya, lahir banyak perubahan positif yang menginspirasi generasi muda untuk tidak malu berasal dari desa. Ia menjadi contoh bahwa dengan niat dan kerja keras, pemuda desa pun bisa memberi dampak besar bagi masyarakat.\r\n\r\nKisah Muhammad Arif Amrullah adalah bukti nyata bahwa perubahan tidak selalu harus dimulai dari kota besar. Dari Kampung Harapan Indung, ia menyalakan obor harapan bagi masyarakat sekitarnya. Pemuda seperti Arif adalah aset bangsa yang perlu diapresiasi dan didukung agar semakin banyak generasi muda yang bangga menjadi agen perubahan dari kampung halamannya sendiri.'),
(6, 'Pemuda Desa Kosar', 'Di tengah arus modernisasi dan derasnya pengaruh budaya urban, masih ada sosok pemuda yang tetap teguh memegang nilai-nilai lokal dan semangat membangun kampung halaman. Dialah Muhammad Arif Amrullah, seorang pemuda yang tumbuh besar di tengah lingkungan desa dan kini menjadi simbol semangat perubahan di Desa Kosar.\r\n\r\nLatar Belakang dan Pendidikan\r\nMuhammad Arif Amrullah lahir dan besar di Desa Kosar, sebuah desa yang asri dan penuh dengan semangat gotong royong. Sejak kecil, ia telah menunjukkan kecintaan terhadap lingkungan tempat tinggalnya. Ia dikenal sebagai anak yang aktif, rajin, dan senantiasa ikut serta dalam berbagai kegiatan kemasyarakatan, mulai dari kegiatan keagamaan hingga kerja bakti bersama warga.\r\nPendidikan formalnya ditempuh dengan penuh kesungguhan. Setelah menyelesaikan pendidikan dasar dan menengah di sekolah-sekolah desa, Arif melanjutkan ke perguruan tinggi dengan jurusan yang relevan dengan pembangunan masyarakat yakni Ilmu Komputer. Baginya, ilmu bukan hanya untuk mengejar karier pribadi, tetapi juga untuk membawa perubahan nyata bagi desanya.\r\n\r\nPengabdian untuk Desa\r\nSetelah menyelesaikan pendidikannya, Arif memutuskan untuk kembali ke Desa Kosar. Bukan karena keterpaksaan, melainkan karena panggilan hati untuk mengabdi. Ia mulai terlibat dalam berbagai kegiatan pemberdayaan masyarakat, seperti pelatihan digital untuk UMKM, pengembangan pertanian organik, dan pelestarian lingkungan desa.\r\nSalah satu inisiatif besarnya adalah mendirikan komunitas pemuda desa yang bertujuan untuk membangkitkan semangat generasi muda agar tidak meninggalkan kampung halaman. Ia meyakinkan teman-teman sebayanya bahwa desa bukanlah tempat yang tertinggal, melainkan tempat yang kaya akan potensi jika dikelola dengan bijak dan inovatif.\r\n\r\nPemuda Inspiratif\r\nKiprah Arif tidak hanya diakui oleh masyarakat Desa Kosar, tetapi juga oleh berbagai pihak luar desa. Ia kerap diundang sebagai pembicara di forum-forum kepemudaan, pelatihan kewirausahaan, dan diskusi pembangunan desa. Karismanya yang sederhana namun kuat menjadikan dirinya inspirasi bagi banyak pemuda di pelosok daerah.\r\nSosoknya menggambarkan bahwa pemuda desa bukanlah pemuda yang tertinggal, tetapi pemuda yang punya visi besar untuk memajukan daerahnya. Ia memadukan nilai tradisional dengan pendekatan modern, menjaga kearifan lokal sembari membawa inovasi dari luar.\r\n\r\nMuhammad Arif Amrullah adalah contoh nyata bahwa perubahan tidak harus datang dari kota besar. Seorang pemuda dengan niat baik, semangat kuat, dan kepedulian tinggi bisa menjadi agen transformasi, bahkan dari sebuah desa kecil. Ia membuktikan bahwa menjadi \"Pemuda Desa Sejati\" bukan sekadar label, tetapi sebuah panggilan hidup untuk membangun, menjaga, dan menginspirasi.'),
(7, 'Pemuda Desa Calon Pemimpin Bangsa di Masa Depan', 'Di tengah tantangan zaman yang kian kompleks, Indonesia membutuhkan generasi muda yang tidak hanya cerdas secara intelektual, tetapi juga kuat secara moral dan sosial. Salah satu sosok pemuda yang mencerminkan harapan itu adalah Muhammad Arif Amrullah, figur muda yang menginspirasi dengan gagasan, tindakan, dan dedikasinya terhadap kemajuan masyarakat.\r\n\r\nPemuda dengan Visi dan Aksi Nyata\r\nMuhammad Arif Amrullah bukan hanya sosok yang pandai berwacana, tetapi juga pemuda yang turun langsung ke lapangan. Sejak masa sekolah, ia dikenal aktif dalam organisasi, kegiatan sosial, hingga gerakan kepemudaan yang fokus pada pendidikan, lingkungan, dan pembangunan desa.\r\nDengan visi \"Indonesia yang adil, maju, dan berdaya saing global\", Arif terus mengembangkan kapasitasnya sebagai calon pemimpin masa depan. Ia percaya bahwa perubahan dimulai dari tindakan kecil yang konsisten dan dilandasi dengan niat tulus untuk melayani masyarakat.\r\n\r\nPendidikan sebagai Pondasi Kepemimpinan\r\nMenempuh pendidikan tinggi dengan semangat tinggi, Arif tidak hanya berfokus pada capaian akademik, tetapi juga aktif mengikuti seminar, pelatihan kepemimpinan, dan forum nasional. Ia menyadari bahwa menjadi pemimpin tidak cukup hanya dengan gelar, tetapi harus dibarengi dengan kepekaan sosial, komunikasi yang kuat, serta kemampuan mengelola konflik dan perbedaan.\r\nPengalaman organisasinya yang luas membuat Arif semakin matang dalam memahami dinamika masyarakat, sekaligus terlatih dalam mengambil keputusan strategis. Ia meyakini bahwa pemimpin yang baik adalah mereka yang mampu mendengarkan, menghargai perbedaan, dan mengambil keputusan yang berpihak pada kepentingan rakyat.\r\n\r\nNilai-Nilai Moral yang Kuat\r\nSalah satu hal yang membedakan Arif dari banyak pemuda lainnya adalah nilai moral yang ia pegang teguh. Dididik dalam lingkungan keluarga yang religius dan penuh disiplin, ia tumbuh menjadi pribadi yang jujur, bertanggung jawab, dan rendah hati. Nilai-nilai inilah yang menjadi kompas hidupnya dalam setiap langkah yang diambil.\r\nDalam setiap kesempatan, Arif selalu menekankan pentingnya integritas dalam memimpin. Baginya, kepercayaan masyarakat adalah modal utama, dan kejujuran adalah harga mati yang tidak bisa ditawar.\r\n\r\nMenatap Masa Depan\r\nDengan jejak rekam yang menginspirasi dan dedikasi yang nyata, Muhammad Arif Amrullah menjadi sosok yang layak diperhitungkan sebagai calon pemimpin bangsa di masa depan. Ia bukan sekadar tokoh lokal, tetapi memiliki potensi nasional seseorang yang mampu menyatukan idealisme dan realitas, serta menjawab tantangan zaman dengan solusi yang membumi.\r\n\r\nDalam diri Muhammad Arif Amrullah, kita melihat secercah harapan akan hadirnya pemimpin yang benar-benar berpihak pada rakyat. Pemimpin yang tidak haus kekuasaan, melainkan haus akan kemajuan dan keadilan. Sosok seperti Arif adalah cerminan dari generasi emas Indonesia, mereka yang akan membawa bangsa ini menuju masa depan yang lebih baik, bermartabat, dan sejahtera.'),
(8, 'Pemuda Sahabat Petani Indonesia', 'Petani adalah pahlawan pangan yang sering kali terlupakan. Di tengah berbagai tantangan pertanian modern muai dari harga pupuk yang melonjak, lahan yang menyempit, hingga akses pasar yang terbatas—masih ada sosok pemuda yang peduli dan hadir untuk memberi harapan baru. Sosok itu adalah Muhammad Arif Amrullah, seorang pemuda visioner yang dengan konsistensi dan hati tulus mendedikasikan dirinya sebagai sahabat petani Indonesia.\r\n\r\nMembela Kaum Tani, Bukan Sekadar Wacana\r\nBagi Muhammad Arif Amrullah, pertanian bukan hanya soal produksi pangan, melainkan soal masa depan bangsa. Ia menyadari bahwa tanpa petani, tidak akan ada ketahanan pangan. Namun mirisnya, nasib petani kerap terabaikan, dan hasil kerja keras mereka sering kali tidak sebanding dengan kesejahteraan yang diperoleh. Berangkat dari keprihatinan itu, Arif mulai terjun langsung ke dunia pertanian. Ia tidak datang sebagai pengamat, tetapi sebagai pelaku yang belajar dari bawah mendengarkan keluh kesah petani, mempelajari proses budidaya, hingga memahami masalah distribusi dan harga pasar.\r\n\r\nInovasi untuk Petani Kecil\r\nSalah satu kontribusi nyatanya adalah memperkenalkan teknologi pertanian sederhana dan ramah lingkungan kepada petani kecil di pedesaan. Arif aktif mengadakan pelatihan penggunaan pupuk organik, sistem irigasi hemat air, hingga pemanfaatan aplikasi digital untuk pemasaran hasil tani. Melalui pendekatan \"teknologi untuk rakyat\", ia membantu petani agar bisa bersaing di tengah era industri 4.0 tanpa harus bergantung pada teknologi mahal. Ia juga mendorong terbentuknya koperasi tani modern yang dikelola secara transparan dan profesional.\r\n\r\nPendamping dan Penggerak\r\nTak hanya memberi pelatihan, Arif juga aktif menjadi pendamping petani dalam berbagai program kemitraan. Ia menjembatani antara kelompok tani dan instansi pemerintah, swasta, serta lembaga pendanaan mikro agar petani lebih mudah mendapatkan akses modal, pelatihan, dan pasar. Semangatnya membakar semangat orang lain. Banyak pemuda desa yang semula enggan bertani, kini mulai tertarik kembali ke lahan karena melihat contoh nyata dari perjuangan Arif.\r\n\r\nMenjadi Suara Petani\r\nMuhammad Arif Amrullah juga dikenal sebagai sosok vokal dalam memperjuangkan aspirasi petani. Ia kerap hadir dalam forum diskusi, seminar nasional, bahkan menjadi narasumber di media untuk menyuarakan keadilan bagi petani. Ia menekankan bahwa petani tidak butuh belas kasihan, tetapi butuh dukungan nyata dalam kebijakan dan perlindungan harga. Baginya, Indonesia akan kuat jika petaninya sejahtera. Karena itu, ia tak lelah menyuarakan pentingnya reformasi agraria, modernisasi alat pertanian, dan kebijakan harga yang adil.\r\n\r\nMuhammad Arif Amrullah adalah bukti bahwa pemuda tidak harus jauh dari tanah. Ia memilih kembali ke akar, ke ladang-ladang yang menghidupi negeri, dan menjadi sahabat sejati bagi para petani. Dengan semangat yang menyala dan kepedulian yang mendalam, Arif menjelma menjadi inspirasi: bahwa pertanian adalah masa depan, dan petani adalah fondasi peradaban.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nAlat\r\n\r\n\r\n\r\nChatGPT dapat membuat kesalahan. Periksa info penting. Lihat Preferensi Cookie.\r\n'),
(9, 'Teknologi Pertanian Untuk Rakyat karya Muhammad Arif Amrullah', 'Di tengah pesatnya perkembangan teknologi di berbagai sektor, pertanian rakyat masih sering tertinggal, terutama di daerah pedesaan. Namun, kondisi ini perlahan berubah berkat sosok pemuda bernama Arif Amrullah, yang menghadirkan solusi nyata melalui karya inovatif bertajuk \"Teknologi Pertanian untuk Rakyat\".\r\n\r\nDengan visi yang berpijak pada keadilan sosial dan kemandirian petani, Arif menjadikan teknologi bukan sebagai simbol kemewahan, melainkan sebagai alat perjuangan rakyat kecil.\r\n\r\nTeknologi yang Membumi\r\nArif menyadari bahwa banyak petani menghadapi kendala dalam mengakses teknologi canggih, baik karena biaya, kurangnya pelatihan, maupun minimnya pendampingan. Oleh karena itu, melalui inisiatifnya, Arif merancang pendekatan teknologi yang sederhana, murah, dan bisa langsung digunakan oleh petani kecil tanpa harus mengubah cara kerja mereka secara drastis.\r\nBeberapa inovasi sederhana yang ia bawa antara lain:\r\n- Alat penyiram otomatis berbasis sensor air buatan lokal dengan biaya rendah.\r\n- Aplikasi pencatat hasil panen dan keuangan petani berbasis Android offline.\r\n- Komposter mini ramah lingkungan untuk pengolahan limbah organik rumah tangga menjadi pupuk alami.\r\nSemua karya ini ia sebut sebagai \"Teknologi untuk Rakyat\", karena tidak menuntut kecanggihan, tetapi mengutamakan manfaat dan keberlanjutan.\r\n\r\nPendekatan Edukasi dan Kolaborasi\r\nKeberhasilan Arif tak hanya terletak pada teknologinya, tetapi juga kemampuan edukasi dan kolaborasi. Ia rutin mengadakan pelatihan bersama kelompok tani, mahasiswa, dan relawan muda. Dalam kegiatan ini, para peserta tidak hanya belajar menggunakan alat, tetapi juga memahami filosofi di balik teknologi tersebut: yaitu memerdekakan petani dari ketergantungan dan meningkatkan kesejahteraan mereka. Arif juga aktif berkolaborasi dengan perguruan tinggi dan lembaga riset untuk terus mengembangkan inovasinya secara partisipatif. Teknologi bukan dikembangkan dari laboratorium saja, tapi dari sawah dan suara petani itu sendiri.\r\n\r\nDampak Nyata di Lapangan\r\nProgram \"Teknologi Pertanian untuk Rakyat\" telah diterapkan di berbagai desa dan menghasilkan dampak yang signifikan:\r\n- Produktivitas pertanian meningkat karena penggunaan teknologi tepat guna.\r\n- Efisiensi biaya dan waktu kerja petani menjadi lebih baik.\r\n- Kesadaran petani akan pencatatan dan manajemen usaha tani mulai tumbuh.\r\n- Pemuda desa mulai tertarik kembali ke sektor pertanian, karena melihat bahwa bertani bisa maju dan modern.\r\nTak hanya itu, program ini juga mendapat perhatian dari pemerintah daerah, dan beberapa teknologi karya Arif bahkan mulai diadopsi secara lebih luas dalam program pemberdayaan pertanian.\r\n\r\n\"Teknologi Pertanian untuk Rakyat\" karya Arif Amrullah adalah bukti bahwa inovasi tidak harus mahal, dan kemajuan tidak harus mengorbankan kearifan lokal. Dengan semangat membumi, Arif menunjukkan bahwa pemuda bisa menjadi penggerak utama perubahan di sektor pertanian, menjembatani antara kemajuan teknologi dan kebutuhan nyata rakyat kecil.\r\nIa tidak sekadar membuat alat ia membangun harapan. Ia tidak sekadar membawa kemajuan—ia menghidupkan kembali mimpi petani untuk sejahtera di tanah sendiri.\r\n\r\n'),
(10, 'Dari Keluarga Sederhana untuk Indonesia Luar Biasa', 'Di tengah gempuran kehidupan modern yang sering mengukur kesuksesan dari harta dan status sosial, kisah Muhammad Arif Amrullah hadir sebagai pengingat bahwa ketulusan, semangat, dan pengabdian adalah kekuatan sejati untuk membangun negeri. Lahir dari keluarga sederhana, Arif tumbuh menjadi sosok muda yang membawa harapan besar bagi Indonesia.\r\n\r\nTumbuh dari Kesederhanaan\r\nArif lahir dan dibesarkan di lingkungan desa yang penuh keterbatasan. Ayahnya adalah seorang buruh harian, dan ibunya membantu memenuhi kebutuhan keluarga dengan usaha kecil-kecilan dari rumah. Sejak kecil, Arif sudah terbiasa hidup hemat, mandiri, dan bekerja keras. Namun dari kesederhanaan itu pula, Arif belajar nilai-nilai yang kini menjadi fondasi karakternya: kejujuran, tanggung jawab, gotong royong, dan cinta terhadap sesama. Ia tidak pernah menganggap keterbatasan ekonomi sebagai penghalang untuk bermimpi besar. Justru, itulah yang membentuknya menjadi pribadi yang tangguh dan pantang menyerah.\r\n\r\nPendidikan: Jalan untuk Mengubah Takdir\r\nKesadaran akan pentingnya pendidikan tumbuh sejak dini. Arif belajar dengan sungguh-sungguh, sering kali dengan keterbatasan fasilitas. Ia rela berjalan jauh ke sekolah, meminjam buku dari teman, dan bekerja sambilan demi bisa terus belajar. Hasilnya, ia selalu menorehkan prestasi di sekolah dan dikenal sebagai sosok inspiratif di kalangan teman-temannya. Setelah lulus SMA, Arif melanjutkan ke perguruan tinggi berbekal beasiswa. Di bangku kuliah, ia tak hanya fokus belajar, tapi juga aktif di berbagai organisasi sosial dan kegiatan pengabdian masyarakat. Ia percaya bahwa ilmu harus bermanfaat, dan setiap langkah kecil bisa membawa perubahan besar jika dilakukan dengan hati.\r\n\r\nMengabdi untuk Masyarakat\r\nMeski memiliki kesempatan untuk bekerja di kota besar dengan gaji tinggi, Arif justru memilih kembali ke akar, ke masyarakat desa yang telah membesarkannya. Ia mendirikan berbagai program pemberdayaan, seperti:\r\n- Pelatihan keterampilan untuk pemuda desa,\r\n- Edukasi pertanian berkelanjutan,\r\n- Literasi digital untuk UMKM lokal,\r\n- Pendampingan pelajar berprestasi dari keluarga tidak mampu.\r\nArif ingin membuktikan bahwa dari desa pun bisa berbuat untuk Indonesia. Bahwa pemuda dengan niat baik dan semangat tulus dapat menjadi agen perubahan di manapun ia berada.\r\n\r\nMenginspirasi Generasi Baru\r\nKisah Arif menjadi inspirasi di berbagai daerah. Ia kerap diundang sebagai pembicara di seminar kepemudaan, forum pendidikan, hingga pelatihan komunitas. Bukan karena gelar atau jabatan, tapi karena keteladanan dan konsistensinya dalam mengabdi. Bagi Arif, menjadi pemimpin bukan soal posisi, tetapi soal tanggung jawab moral untuk berbuat kebaikan. Ia terus mendorong anak-anak muda untuk percaya pada potensi diri, bangga dengan latar belakangnya, dan tidak malu untuk bermimpi besar—walau berasal dari keluarga biasa.\r\n\r\nMuhammad Arif Amrullah adalah cermin dari semangat Indonesia yang sesungguhnya—bahwa dari keluarga sederhana bisa lahir sosok luar biasa yang memberi kontribusi besar untuk bangsa. Ia membuktikan bahwa keterbatasan bukan penghalang, melainkan bahan bakar untuk terus maju dan membawa dampak nyata.\r\nDari kampung kecil ia bermula, dan untuk Indonesia hebat ia bekerja. Sebab bagi Arif, cinta tanah air bukan sekadar ucapan, tapi perjuangan sehari-hari.'),
(11, 'Sang Pecinta Lingkungan', 'Di tengah krisis iklim dan kerusakan lingkungan yang kian nyata, masih ada segelintir orang yang berdiri di garis depan untuk melawan kerusakan itu, bukan dengan demonstrasi semata, tetapi dengan aksi nyata dan keteladanan. Salah satunya adalah Muhammad Arif Amrullah, seorang pemuda yang dikenal sebagai pecinta lingkungan sejati dan penggerak gerakan hijau dari akar rumput.\r\n\r\nCinta Alam Sejak Dini\r\nSejak kecil, Arif sudah akrab dengan alam. Ia tumbuh di desa yang dikelilingi sawah, sungai, dan hutan kecil yang menjadi bagian dari keseharian hidupnya. Kecintaannya terhadap lingkungan tumbuh secara alami, ia senang menanam pohon, merawat kebun, dan menjaga kebersihan lingkungan sekitar. Namun, kesadaran lingkungannya tak berhenti pada hal-hal kecil. Saat menginjak bangku SMA dan kuliah, Arif mulai memahami bagaimana perubahan iklim, deforestasi, dan pencemaran berdampak luas bagi kehidupan masyarakat, terutama di wilayah pedesaan. Dari sanalah semangatnya untuk bergerak semakin besar.\r\n\r\nAksi Nyata untuk Bumi\r\nMuhammad Arif Amrullah bukanlah pecinta lingkungan yang hanya berbicara di media sosial. Ia dikenal sebagai pemuda yang turun langsung ke lapangan untuk menanam, membersihkan, dan mengedukasi.\r\nBeberapa inisiatif lingkungan yang ia pimpin antara lain:\r\n- Gerakan Seribu Pohon Desa, sebuah kampanye penghijauan yang melibatkan anak-anak muda dan pelajar.\r\n- Bank Sampah Mandiri, yang membantu masyarakat memilah dan mendaur ulang sampah rumah tangga.\r\n- Sekolah Alam Mini, tempat anak-anak belajar mencintai lingkungan melalui praktik langsung seperti menanam, membuat kompos, dan mengelola air hujan.\r\n- Aksi Bersih Sungai dan Hutan, dilakukan rutin bersama komunitas dan relawan.\r\nBagi Arif, mencintai lingkungan adalah bentuk cinta pada kehidupan itu sendiri. Karena ketika alam rusak, maka manusialah yang akan paling merasakan akibatnya.\r\n\r\nMenginspirasi Generasi Hijau\r\nArif juga aktif dalam kegiatan penyuluhan dan pelatihan bagi pelajar, mahasiswa, serta komunitas pemuda. Ia menyampaikan pesan lingkungan dengan cara yang mudah dipahami, aplikatif, dan menyentuh hati. Ia tak bosan mengingatkan bahwa perubahan besar dimulai dari langkah kecil, seperti membawa botol minum sendiri, tidak membakar sampah, atau menanam satu pohon setiap bulan. Semangatnya telah menular ke banyak anak muda yang awalnya cuek terhadap isu lingkungan. Kini, berkat keteladanannya, muncul relawan-relawan baru yang siap menjaga bumi bersama-sama.\r\n\r\nHarapan untuk Masa Depan\r\nBagi Muhammad Arif Amrullah, mencintai lingkungan bukan pilihan, tapi kewajiban moral generasi masa kini. Ia bermimpi suatu hari nanti Indonesia dipenuhi kota-kota hijau, desa-desa yang mandiri secara ekologi, dan masyarakat yang sadar akan pentingnya menjaga bumi. Ia yakin bahwa perubahan iklim bisa dilawan jika masyarakat bersatu, saling mengingatkan, dan bergerak bersama. Dan selama masih ada satu pohon yang bisa ditanam, satu sungai yang bisa dibersihkan, atau satu anak muda yang bisa diedukasi—maka perjuangan belum selesai.\r\n\r\nMuhammad Arif Amrullah adalah bukti bahwa cinta lingkungan bukan sekadar slogan, tapi gaya hidup. Ia mengajarkan bahwa menjadi pecinta lingkungan bukan hanya untuk aktivis, tetapi untuk siapa saja yang peduli pada kehidupan hari ini dan masa depan.\r\n\r\nDalam kesederhanaan aksinya, tersimpan kekuatan besar yang mampu menyadarkan banyak orang: bahwa bumi hanya satu, dan kita semua bertanggung jawab menjaganya.'),
(12, 'Pemuda dari Desa, ke Kota, untuk Desa', 'Di balik deru kendaraan kota dan megahnya gedung-gedung tinggi, masih ada kisah pemuda yang tidak pernah melupakan asal-usulnya. Ia bukan datang ke kota untuk melupakan desa, tetapi untuk belajar demi kembali membangun desa. Sosok itu adalah Muhammad Arif Amrullah, seorang pemuda tangguh yang membawa semangat perubahan dari tanah kelahirannya.\r\n\r\nAwal Perjalanan: Tumbuh di Tengah Kesederhanaan\r\nMuhammad Arif Amrullah lahir di sebuah desa yang tenang dan sederhana. Hidup dalam lingkungan agraris, ia tumbuh dengan nilai-nilai gotong royong, kerja keras, dan kebersamaan. Sejak kecil, ia sudah melihat betapa besar potensi desa namun juga menyaksikan bagaimana keterbatasan pendidikan, teknologi, dan infrastruktur membuat masyarakat tertinggal jauh dari perkembangan zaman. Rasa ingin tahunya yang besar dan semangat untuk memperbaiki kondisi itu mendorongnya untuk mengejar pendidikan yang lebih tinggi di kota.\r\n\r\nMenuntut Ilmu di Kota: Mencari Bekal untuk Kembali\r\nBerbekal semangat dan tekad yang kuat, Arif melangkah ke kota untuk menimba ilmu. Ia sadar bahwa perubahan tidak bisa dilakukan hanya dengan niat, tapi harus ditopang dengan pengetahuan dan pengalaman. Di kota, ia tak hanya belajar di ruang kuliah, tapi juga aktif mengikuti kegiatan organisasi, pelatihan, dan forum sosial. Ia menyaksikan bagaimana kota bergerak cepat dengan teknologi, jaringan, dan akses informasi yang luas. Namun, di saat banyak pemuda desa melupakan akar setelah menetap di kota, Arif justru memantapkan tekad: suatu saat ia akan kembali, bukan sebagai orang biasa, tapi sebagai pembawa perubahan.\r\n\r\nKembali ke Desa: Membawa Ilmu, Membangun Harapan\r\nSetelah lulus kuliah, Arif kembali ke kampung halamannya. Tidak sedikit yang bertanya, “Mengapa tidak bekerja di kota saja?” Tapi bagi Arif, desa adalah rumah, dan rumah tidak boleh ditinggalkan begitu saja. Ia mulai bergerak bersama warga membentuk kelompok pemuda, mendampingi petani, mengembangkan UMKM, memperkenalkan teknologi sederhana, hingga menciptakan program pelatihan digital dan literasi keuangan. Ia menjadikan ilmu yang ia dapat di kota sebagai alat untuk mengangkat potensi desa, bukan untuk meninggalkannya.\r\n\r\nDampak Nyata dan Gerakan Inspiratif\r\nGerakan Arif tak hanya mengubah pola pikir warga desa, tapi juga menginspirasi banyak pemuda lain yang rindu pulang namun ragu. Ia membuktikan bahwa desa bukan tempat yang tertinggal, melainkan tempat yang menunggu disentuh oleh tangan-tangan yang peduli dan terdidik.\r\nProgram-program Arif telah:\r\n- Meningkatkan produktivitas petani melalui pelatihan pertanian modern,\r\n- Membuka peluang usaha baru bagi ibu-ibu rumah tangga,\r\n- Menghidupkan kembali semangat gotong royong pemuda desa,\r\n- Membangun sinergi antara desa dan pihak luar, seperti kampus dan pemerintah.\r\n\r\nKisah Muhammad Arif Amrullah adalah pengingat bahwa pulang ke desa bukanlah langkah mundur, tapi sebuah lompatan maju. Ia adalah pemuda dari desa, yang belajar di kota, dan kembali untuk membangun desa. Dalam dirinya hidup semangat keberanian, tanggung jawab, dan cinta tanah kelahiran.\r\nIa tidak menunggu perubahan datang dari pusat, tapi memilih menjadi pusat dari perubahan itu sendiri. Karena bagi Arif, membangun Indonesia dimulai dari membangun desa—tempat di mana harapan dan masa depan bangsa tumbuh.'),
(13, 'Do\'a, Harapan, dan Semangat Pertanian lah yang Membawa Nama Besar-nya', 'Ketika banyak orang berlomba mengejar karier di kota besar dan menganggap pertanian sebagai pekerjaan kelas dua, ada satu nama yang justru bangkit dan bersinar dari ladang, lumpur, dan jerih payah petani. Ia adalah Muhammad Arif Amrullah, pemuda yang menjadikan do’a, harapan, dan semangat pertanian sebagai fondasi perjuangannya—hingga kini dikenal sebagai inspirator muda di bidang pertanian berkelanjutan.\r\n\r\nAwal yang Penuh Kesederhanaan\r\nArif bukan berasal dari keluarga kaya. Ia tumbuh di sebuah desa kecil, dalam lingkungan yang mengandalkan hasil bumi untuk bertahan hidup. Ayahnya adalah petani, dan ibunya senantiasa mendoakannya di setiap langkah kehidupan. Dari merekalah Arif belajar bahwa keberkahan hidup tidak diukur dari kemewahan, melainkan dari ketulusan bekerja dan keikhlasan memberi. Sejak remaja, Arif akrab dengan cangkul, tanah, dan keringat. Namun di balik aktivitas itu, selalu ada do’a dan harapan besar yang ia sematkan: agar suatu hari nanti, petani tidak lagi dipandang sebelah mata, dan pertanian menjadi sektor yang membanggakan.\r\n\r\nMembawa Pertanian ke Arah yang Lebih Bermartabat\r\nBerbekal pendidikan di kota, Arif tidak lupa akar. Ia membawa pulang ilmu pertanian modern, teknologi tepat guna, dan wawasan digital ke desanya. Namun, lebih dari itu, ia membawa semangat perubahan—bahwa bertani harus cerdas, berkelanjutan, dan berpihak pada kesejahteraan petani.\r\nMelalui berbagai program yang ia rintis, seperti:\r\n- Sekolah Tani Mandiri untuk generasi muda desa,\r\n- Pelatihan pertanian organik dan ramah lingkungan,\r\n- Pemasaran hasil tani berbasis digital,\r\nArif berhasil membuktikan bahwa sektor pertanian bisa menjadi sumber kehidupan yang menjanjikan, tidak hanya bagi yang berpengalaman, tetapi juga bagi generasi muda.\r\n\r\nSemangat yang Menginspirasi Ribuan Orang\r\nApa yang membuat Arif berbeda bukan hanya program-programnya, tetapi jiwanya yang menyatu dengan perjuangan petani. Ia tidak hanya datang sebagai pengajar atau pendamping, melainkan sebagai kawan seperjuangan di tengah sawah. Ia hadir ketika petani gagal panen. Ia mendampingi saat harga anjlok. Dan ia terus memberi semangat, walau dalam kondisi yang tidak mudah.\r\nNamanya kini dikenal luas, bukan karena popularitas yang ia kejar, tapi karena do’a-do’a petani yang ia bantu, dan harapan yang ia nyalakan di hati banyak orang.\r\n\r\nMuhammad Arif Amrullah adalah sosok yang membuktikan bahwa do’a yang tulus, harapan yang kuat, dan semangat yang konsisten bisa mengangkat siapa pun menuju kesuksesan yang hakiki. Ia tidak sekadar mengubah tanah menjadi panen, tapi juga mengubah paradigma bahwa pertanian bukan masa lalu, melainkan masa depan.\r\nDari ladang yang sepi, dari suara petani yang nyaris tak terdengar, ia bangkit membawa terang. Dan kini, nama besarnya adalah milik mereka juga para petani, pejuang pangan negeri.'),
(14, 'Ketekunan Membuatnya Berhasil Membangun PT. Arif Agro Farm', 'Kesuksesan bukanlah hasil dari keberuntungan semata. Ia lahir dari kerja keras, konsistensi, dan ketekunan dalam menghadapi setiap tantangan. Itulah yang tercermin dari sosok Muhammad Arif Amrullah, pemuda yang berhasil mewujudkan mimpinya membangun perusahaan agribisnis modern bernama PT. Arif Agro Farm sebuah langkah besar yang berakar dari cita-cita kecil di kampung halaman.\r\n\r\nBermula dari Tanah dan Do’a\r\nLahir di desa yang menggantungkan hidup pada sektor pertanian, Arif tumbuh bersama alam dan memahami kerasnya hidup sebagai petani. Sejak kecil, ia melihat langsung bagaimana orang tuanya harus bekerja keras dari pagi hingga senja demi sesuap nasi. Namun dari tanah itulah ia menanam mimpi, bahwa suatu hari nanti ia akan mengubah wajah pertanian menjadi lebih maju, adil, dan menyejahterakan. Do’a orang tua dan semangat pantang menyerah menjadi fondasi yang tak tergoyahkan. Ketika remaja seusianya bermimpi jadi pekerja kantoran, Arif bermimpi membangun usaha pertanian profesional milik rakyat sendiri.\r\n\r\nMenempa Diri, Membangun Visi\r\nArif melanjutkan pendidikan di bidang pertanian dan kewirausahaan. Di bangku kuliah, ia tidak hanya belajar teori, tapi juga turun langsung ke lapangan, ikut komunitas tani, magang di lahan-lahan percobaan, bahkan membentuk kelompok kecil untuk eksperimen pertanian organik. Selama bertahun-tahun, ia menanam ilmu, menabung pengalaman, dan merancang model bisnis yang sesuai dengan kondisi petani lokal. Ia juga aktif mengedukasi masyarakat desa agar mulai melihat pertanian sebagai sektor yang menjanjikan, bukan sekadar tradisi turun-temurun.\r\n\r\nLahirnya PT. Arif Agro Farm\r\nDengan modal kecil dan dukungan komunitas, pada akhirnya PT. Arif Agro Farm resmi didirikan. Perusahaan ini bergerak di bidang budidaya pertanian terpadu, pelatihan petani, distribusi hasil panen, serta pengolahan produk pertanian berbasis lokal. Bukan hanya soal bisnis, tapi juga soal pemberdayaan.\r\nCiri khas dari PT. Arif Agro Farm adalah:\r\n- Mengutamakan kerjasama dengan petani kecil dan UMKM lokal,\r\n- Mengembangkan pertanian organik dan berkelanjutan,\r\n- Memberikan pendampingan dan pelatihan intensif kepada petani mitra,\r\n- Mendorong pemanfaatan teknologi sederhana di tingkat desa.\r\nDalam waktu singkat, perusahaan ini mendapat kepercayaan dari berbagai pihak, termasuk pasar ritel modern dan program kemitraan pemerintah.\r\n\r\nDampak dan Inspirasi\r\nPT. Arif Agro Farm tidak hanya mencetak keuntungan finansial, tetapi juga memberi dampak sosial yang luas. Banyak petani yang sebelumnya hidup pas-pasan kini memiliki penghasilan lebih stabil, anak muda mulai tertarik kembali bertani, dan desa-desa sekitar menjadi lebih aktif secara ekonomi. Kisah Arif pun menyebar luas, menjadi inspirasi bagi generasi muda bahwa usaha besar bisa lahir dari ketekunan yang sederhana. Ia sering diundang menjadi pembicara, mentor, dan penggerak inovasi pertanian tingkat nasional.\r\n\r\nMuhammad Arif Amrullah telah membuktikan bahwa ketekunan adalah jalan menuju keberhasilan sejati. Ia tidak dibesarkan dalam kemewahan, tapi ia besar oleh mimpi dan kerja keras. PT. Arif Agro Farm bukan hanya pencapaian pribadi, tapi juga warisan untuk petani, desa, dan masa depan pertanian Indonesia.\r\n\r\nDengan prinsip kerja keras, niat baik, dan semangat berbagi, Arif terus melangkah maju. Dari ladang kecil ia bermimpi, dari desa ia beraksi, dan kini ia berdiri tegak sebagai tuan rumah di tanah sendiri.'),
(18, 'Semangat yang Tinggi, Wujudkan Gelar Sarjana untuk Meraih Kesuksesan dan untuk Membangun Negerinya', 'Di tengah derasnya arus modernisasi dan tantangan global, masih ada sosok pemuda yang menyalakan semangat perubahan melalui jalur pendidikan. Ia adalah Muhammad Arif Amrullah, seorang mahasiswa aktif di Universitas Subang, jurusan Ilmu Komputer, Program Studi Sistem Informasi. Di balik kesibukannya sebagai mahasiswa, Arif bukanlah pemuda biasa. Ia juga dikenal sebagai Web Developer muda yang visioner, Petani Muda yang tangguh, serta tokoh inspiratif bagi generasi muda di daerahnya.\r\n\r\nArif meyakini bahwa pendidikan adalah jembatan utama untuk meraih masa depan yang lebih cerah. Gelar sarjana yang kini sedang ia perjuangkan bukan semata-mata sebagai lambang akademis, melainkan sebagai senjata utama untuk membuka lebih banyak pintu kesempatan, baik untuk dirinya sendiri, keluarganya, maupun bagi masyarakat desa tempat ia tumbuh.\r\n\r\nMembangun dari Desa, Berpikir untuk Bangsa\r\nLahir dan besar di lingkungan desa membuat Arif memahami betul tantangan dan potensi yang dimiliki masyarakat pedesaan. Di sanalah ia menumbuhkan cita-citanya—membangun desa melalui teknologi dan pertanian modern. Dengan kombinasi antara pengetahuan teknologi informasi dan semangat bertani, Arif merintis jalan menuju mimpi besarnya: menciptakan ekosistem pertanian digital yang mampu meningkatkan kesejahteraan petani.\r\n\r\nMelalui PT. Arif Agro Farm yang sedang ia kembangkan, Arif ingin membuktikan bahwa petani muda juga bisa sukses dan melek teknologi. Ia berharap ke depan, pertanian tidak lagi dipandang sebelah mata, melainkan menjadi sektor strategis yang digerakkan oleh generasi muda kreatif dan terdidik.\r\n\r\nSemangat Arif bukan hanya untuk dirinya sendiri, tapi juga untuk menginspirasi orang lain. Di era yang serba instan ini, ia memilih jalan perjuangan yang tidak mudah: membagi waktu antara kuliah, bisnis, dan kegiatan sosial. Namun justru dari situlah semangatnya menyala—menjadi teladan bahwa kerja keras dan tekad kuat adalah kunci sukses yang sesungguhnya.\r\n\r\nLewat berbagai platform, Arif kerap membagikan pengalaman, motivasi, dan edukasi bagi teman-teman sebayanya. Ia percaya bahwa anak muda harus menjadi bagian dari solusi bangsa, bukan hanya penonton.\r\n\r\nMuhammad Arif Amrullah adalah gambaran nyata pemuda masa kini yang pantang menyerah dan penuh dedikasi. Dengan semangat tinggi, ia tidak hanya mengejar gelar sarjana untuk meraih kesuksesan pribadi, tetapi juga untuk berkontribusi nyata dalam membangun negeri, mulai dari desa. Kisahnya adalah energi baru bagi mereka yang ragu, bahwa selama masih ada tekad dan usaha, tak ada mimpi yang terlalu tinggi untuk diwujudkan.'),
(19, 'Desa Kosar: Sejuta Cerita dan Segudang Kenangan', 'Di sudut Kabupaten Subang, tersembunyi sebuah desa yang sederhana namun penuh makna—Desa Kosar. Sebuah tempat yang bukan sekadar kumpulan rumah dan sawah, melainkan ruang kehidupan yang menyimpan sejuta cerita dan segudang kenangan bagi setiap orang yang pernah menginjakkan kaki di sana.\r\n\r\nDesa Kosar bukanlah desa besar dengan gedung menjulang atau jalanan yang ramai kendaraan. Justru kesederhanaan dan ketenangannya itulah yang menjadikannya istimewa. Sawah-sawah hijau terbentang luas, suara gemericik sungai yang jernih, serta sapaan hangat para warga menjadi bagian tak terpisahkan dari kehidupan di desa ini.\r\n\r\nSetiap jengkal tanah Desa Kosar memiliki ceritanya sendiri. Anak-anak bermain bola di lapangan rumput, para petani bekerja penuh semangat di bawah terik matahari, dan ibu-ibu bercengkerama sambil menumbuk padi atau menyiapkan jajanan pasar. Semua adegan itu membentuk potongan kisah yang sulit untuk dilupakan.\r\n\r\nBagi generasi muda yang tumbuh di desa ini, Desa Kosar adalah saksi bisu dari perjalanan mereka—dari bermain layangan di tengah angin musim kemarau hingga merangkai cita-cita di bawah langit malam yang penuh bintang. Tak sedikit yang kemudian merantau ke kota atau bahkan luar negeri, namun hati mereka tetap tertambat pada desa ini. Karena di sinilah mereka belajar arti kerja keras, gotong royong, dan kehangatan keluarga.\r\n\r\nKenangan yang tercipta di Desa Kosar bukan hanya milik satu generasi. Orang tua dan kakek-nenek kita pun memiliki cerita mereka sendiri—tentang perjuangan masa lalu, tentang pesta panen, tentang tradisi dan budaya yang diwariskan dari satu zaman ke zaman berikutnya.\r\n\r\nKini, meski zaman terus berubah dan teknologi kian merambah, Desa Kosar tetap memelihara nilai-nilai tradisi dan kearifan lokal. Generasi muda mulai kembali melirik potensi desanya—dari pertanian organik, wisata alam, hingga UMKM yang mengangkat produk-produk lokal.\r\n\r\nDesa Kosar adalah lebih dari sekadar tempat lahir. Ia adalah rumah bagi jiwa yang merindukan ketenangan, pelabuhan bagi hati yang haus akan kehangatan, dan sekolah kehidupan yang mengajarkan nilai-nilai yang tak diajarkan di bangku kelas.\r\n\r\nDesa Kosar, sejuta cerita telah terukir, segudang kenangan terus abadi. Di sinilah semuanya bermula, dan kelak, di sinilah hati akan kembali.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku_tamu`
--

CREATE TABLE `tbl_buku_tamu` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_buku_tamu`
--

INSERT INTO `tbl_buku_tamu` (`id_pesan`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(1, 'MUHAMMAD ARIF AMRULLAH', 'muhammadarifamrullahMUHARAM@gmail.com', 'Selamat Pagi', '2025-06-24 01:41:25'),
(2, 'MUHAMMAD ARIF AMRULLAH', 'muhammadarifamrullahMUHARAM@gmail.com', 'Selamat Pagi', '2025-06-24 01:42:11'),
(3, 'pengguna 1', 'sanjayagerard07@gmail.com', 'Website ini sangat bagus\r\n', '2025-06-25 01:57:02'),
(4, 'Arif Amrullah', 'muhammadarifamrullahMUHARAM@gmail.com', 'Kembangkan lagi website nya', '2025-06-26 06:00:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(7) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul`, `foto`) VALUES
(3, 'My Family', 'Keluarga cemara ku.jpg'),
(4, 'My Father', 'Ayah.jpg'),
(5, 'My Mather', 'Ibu.jpg'),
(6, 'Personal 1', 'Camp.jpg'),
(7, 'Personal 2', 'Campp.jpg'),
(8, 'Personal 3', 'Camppp.jpg'),
(9, 'Personal 4', 'Eid.jpg'),
(10, 'Personal 5', 'eidd.jpg'),
(11, 'Personal 6', 'Cilaeaat.jpg'),
(12, 'Personal 7', 'Cileat.jpg'),
(13, 'Senja yang Indah', 'Danau.jpg'),
(14, 'View Parang Gombong', 'Sunset.jpg'),
(15, 'Scoutt', 'Pramuka.jpg'),
(16, 'Mahasiswa Unsub', 'Unsub.jpg'),
(17, 'Running', 'Running.jpg'),
(18, 'Karier', 'Karier.jpg'),
(19, 'View Gunung Putri', 'WhatsApp Image 2025-05-26 at 20.45.57_49ccef65.jpg'),
(20, 'View Gunung Putri', 'WhatsApp Image 2025-04-04 at 20.05.36_07dbce7c.jpg'),
(21, 'View Gunung Putri', 'WhatsApp Image 2025-05-26 at 20.46.00_9cdfb50b.jpg'),
(22, 'Sertifikat Himpunan Desa Mandiri Indonesia', 'IMG-20250212-WA0013.jpg'),
(23, 'Sertifikat Teman Coding Indonesia', 'IMG-20250212-WA0014.jpg'),
(24, 'Sertifikat Public Speaking', 'IMG-20250212-WA0016.jpg'),
(25, 'Sertifikat HIMPS PBA UIN Jakarta', 'IMG-20250212-WA0017.jpg'),
(26, 'Sertifikat Candella Learning', 'IMG-20250212-WA0018.jpg'),
(27, 'Label Arif Agro Farm', 'WhatsApp Image 2025-04-29 at 14.34.39_1a195e49.jpg'),
(28, 'Scout', 'Scout.jpg'),
(29, 'Brohur Arif Agro Farm', 'Broshur.jpg'),
(30, 'Green House', 'th.jpeg'),
(31, 'Bismillah PT. Arif Agro Farm', 'ChatGPT Image 28 Jun 2025, 09.25.40.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama_pengunjung` varchar(100) DEFAULT NULL,
  `isi_komentar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_artikel`, `nama_pengunjung`, `isi_komentar`, `tanggal`) VALUES
(1, 14, 'MUHAMMAD ARIF AMRULLAH', 'Bagus sekali website nya', '2025-06-24 08:25:12'),
(2, 19, 'MUHAMMAD ARIF AMRULLAH', 'Tambah Lagi artikelnya', '2025-06-28 05:41:37'),
(3, 19, 'MUHAMMAD ARIF AMRULLAH', 'Tambah Lagi artikelnya', '2025-06-28 05:42:52'),
(4, 19, 'MUHAMMAD ARIF AMRULLAH', 'Tambah Lagi artikelnya', '2025-06-28 05:44:45'),
(5, 19, 'MUHAMMAD ARIF AMRULLAH', 'Tambah Lagi artikelnya', '2025-06-28 05:45:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komntar`
--

CREATE TABLE `tbl_komntar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama_pengunjung` varchar(100) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(8, 'muhammad arif', '$2y$10$ibPxC6u66wnHuwvV2EvZTOXPS6kGXv5uteea8E1wTqBkgkdG87H5a'),
(9, 'admin', '$2y$10$DZGB6XPJVYnz9aRAtWBGCeuDwB1Xp.iytmD.MW8wZ8bhKsRUAZFs2'),
(10, 'amrullah arif', '$2y$10$QIqJ7IMNhEJBX0X32Wu3F.BFbjKNdX8dHhvPiHNqKMUYjtpLSUZBq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_buku_tamu`
--
ALTER TABLE `tbl_buku_tamu`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indeks untuk tabel `tbl_komntar`
--
ALTER TABLE `tbl_komntar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_buku_tamu`
--
ALTER TABLE `tbl_buku_tamu`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_komntar`
--
ALTER TABLE `tbl_komntar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD CONSTRAINT `tbl_komentar_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `tbl_artikel` (`id_artikel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
