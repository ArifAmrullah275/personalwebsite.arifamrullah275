<?php include "koneksi.php";

// Tangkap ID artikel dari URL
$id_artikel = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Proses penyimpanan komentar jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $komentar = mysqli_real_escape_string($db, $_POST['komentar']);

    if (!empty($nama) && !empty($komentar)) {
        $sql = "INSERT INTO tbl_komentar (id_artikel, nama_pengunjung, isi_komentar) 
                VALUES ($id_artikel, '$nama', '$komentar')";
        mysqli_query($db, $sql);
        echo "<script>alert('Komentar berhasil dikirim!');</script>";
    } else {
        echo "<script>alert('Mohon isi semua kolom.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($data) ? htmlspecialchars($data['nama_artikel']) : 'Detail Artikel'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        darkMode: 'class'
    }
    </script>

</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 font-sans min-h-screen flex flex-col">

<!-- Header -->
<header class="relative bg-green-700 text-white text-center p-5 text-2xl font-bold">
    <h1 class="text-2xl font-bold text-center">Detail Artikel</h1>
    <button id="toggleDark" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white text-green-700 px-3 py-1 rounded text-sm hover:bg-gray-200 transition">
        🌙
    </button>
</header>


<!-- Maini Content -->
<main class="flex-grow flex items-center justify-center p-6">
    <div class="w-full max-w-3xl bg-white border border-gray-300 rounded-lg shadow-lg p-8">
        <?php
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']); // sanitasi id
            $sql = "SELECT * FROM tbl_artikel WHERE id_artikel = $id";
            $query = mysqli_query($db, $sql);
            if ($data = mysqli_fetch_array($query)) {
                echo "<h1 class='text-3xl text-justify font-bold text-green-700 mb-6'>" . htmlspecialchars($data['nama_artikel']) . "</h1>";
                echo "<p class='text-justify text-lg leading-relaxed text-black dark:text-black'>" . nl2br(htmlspecialchars($data['isi_artikel'])) . "</p>";
            } else {
                echo "<p class='text-red-600 text-center'>Artikel tidak ditemukan.</p>";
            }
        } else {
            echo "<p class='text-red-600 text-center'>ID artikel tidak tersedia.</p>";
        }
        ?>
        <div class="mt-8 text-center">
            <a href="index.php" class="inline-block bg-green-600 text-white px-5 py-2 rounded hover:bg-green-700 transition">← Kembali ke Beranda</a>
        </div>
    </div>
</main>

<!-- Form Komentar -->
<section class="bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 p-5 rounded shadow mt-8">
    <h3 class="text-lg font-bold mb-4">Tinggalkan Komentar</h3>
    <form method="POST">
        <input type="text" name="nama" placeholder="Nama Anda" class="w-full mb-3 p-2 border border-gray-300 rounded dark:bg-gray-700" required>
        <textarea name="komentar" placeholder="Tulis komentar..." class="w-full mb-3 p-2 border border-gray-300 rounded dark:bg-gray-700" required></textarea>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Kirim Komentar</button>
    </form>
</section>


<!-- Tampilkan Komentar -->
<section class="bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 p-5 rounded shadow mt-8">
    <h3 class="text-lg font-bold mb-4">Komentar</h3>
    <?php
    $result = mysqli_query($db, "SELECT * FROM tbl_komentar WHERE id_artikel=$id_artikel ORDER BY tanggal DESC");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='mb-4 border-b pb-2'>";
        echo "<p class='font-semibold dark:text-white'>" . htmlspecialchars($row['nama_pengunjung']) . "</p>";
        echo "<p class='text-gray-700 dark:text-gray-200'>" . nl2br(htmlspecialchars($row['isi_komentar'])) . "</p>";
        echo "<p class='text-xs text-gray-500 dark:text-gray-400'>" . $row['tanggal'] . "</p>";
        echo "</div>";
    }
    ?>
</section>

<!-- Tombol Back to Top -->
<button id="backToTopBtn" class="hidden fixed bottom-8 right-8 bg-green-600 hover:bg-green-700 text-white p-3 rounded-full shadow-lg z-50 transition-opacity duration-300">↑</button>

<script>
// Tombol back to top
window.onscroll = function() {
    const btn = document.getElementById("backToTopBtn");
    if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
        btn.classList.remove("hidden");
    } else {
        btn.classList.add("hidden");
    }
};
document.getElementById("backToTopBtn").addEventListener("click", function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>


<!-- Floating Chatbot Button -->
<div class="group fixed bottom-20 right-8 z-50">
    <button id="chatbotBtn" class="bg-green-600 hover:bg-green-700 text-white p-3 rounded-full shadow-lg">
        💬
    </button>
    <div class="absolute right-16 top-1/2 transform -translate-y-1/2 scale-0 group-hover:scale-100 transition-all duration-300 origin-right bg-black text-white text-sm rounded px-2 py-1 shadow">
        Tanya AI
    </div>
</div>

<!-- Chatbot Modal -->
<div id="chatbotModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
    <div class="bg-white dark:bg-gray-800 w-80 rounded-lg shadow-lg p-4">
        <h3 class="text-lg font-bold mb-2 dark:text-white">Arif Chatbot AI</h3>
        <div id="chatWindow" class="h-48 overflow-y-auto border p-2 mb-2 bg-gray-100 dark:bg-gray-700 rounded text-sm"></div>
        <div class="flex">
            <input type="text" id="userInput" placeholder="Tanyakan sesuatu..." class="w-full px-2 py-1 rounded-l border focus:outline-none dark:bg-gray-600 dark:text-white">
            <button id="sendBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 rounded-r">Kirim</button>
        </div>
        <button id="closeChat" class="mt-2 text-sm text-red-500 hover:underline">Tutup</button>
    </div>
</div>


<script>
// Tampilkan modal
document.getElementById("chatbotBtn").addEventListener("click", () => {
    document.getElementById("chatbotModal").classList.remove("hidden");
    document.getElementById("chatWindow").innerHTML = "<div><b>ArifBot:</b> Selamat datang! Silakan tanyakan apa saja.</div>";
});

// Tutup modal
document.getElementById("closeChat").addEventListener("click", () => {
    document.getElementById("chatbotModal").classList.add("hidden");
    document.getElementById("chatWindow").innerHTML = ""; // <-- reset chat
});


// Chat logic (simulasi lebih fleksibel)
const faq = [
    { keyword: ["halo", "hallo", "Hallo", "Hii", "hi", "hai"], response: "Halo! Ada yang bisa saya bantu?" },
    { keyword: ["siapa", "kamu", "nama"], response: "Saya adalah chatbot sederhana buatan Mas Arif Amrullah 275." },
    { keyword: ["kontak", "admin"], response: "Silakan kunjungi halaman kontak atau email ke admin@domainanda.com." },
    { keyword: ["artikel", "berita", "posting"], response: "Semua artikel terbaru bisa Anda baca di halaman utama." },
    { keyword: ["login", "masuk"], response: "Silakan gunakan menu Login di atas untuk masuk." },
    { keyword: ["terima kasih", "makasih", "thank you", "thanks"], response: "Sama-sama! Senang bisa membantu 😊" },
    { keyword: ["bantu", "tolong", "butuh bantuan"], response: "Tentu! Silakan beri tahu apa yang ingin Anda tanyakan." },
    { keyword: ["daftar", "register", "registrasi", "buat akun"], response: "Anda bisa mendaftar melalui halaman Daftar di menu utama." },
    { keyword: ["lupa", "password", "kata sandi"], response: "Jika lupa password, silakan klik 'Lupa Password' di halaman login." },
    { keyword: ["alamat", "lokasi", "dimana"], response: "Lokasi kami bisa dilihat di halaman Kontak." },
    { keyword: ["waktu", "jam kerja", "operasional"], response: "Jam operasional kami adalah Senin–Jumat, pukul 08.00–16.00 WIB." },
    { keyword: ["produk", "layanan", "fitur"], response: "Kami menyediakan berbagai layanan menarik. Silakan cek halaman Produk." },
    { keyword: ["harga", "biaya", "tarif"], response: "Informasi harga tersedia di halaman layanan masing-masing." },
    { keyword: ["event", "acara", "jadwal"], response: "Kami akan umumkan event terbaru di halaman utama dan sosial media kami." },
    { keyword: ["keluar", "logout"], response: "Untuk keluar, klik tombol Logout di pojok kanan atas." },
    { keyword: ["profil", "akun saya", "data diri"], response: "Anda bisa mengakses profil Anda melalui menu 'Akun'." },
    { keyword: ["faq", "pertanyaan", "help", "bantuan"], response: "Anda bisa membaca FAQ kami untuk jawaban dari pertanyaan umum." },
    { keyword: ["apa kabar", "gimana kabarnya", "kabarmu"], response: "Saya baik, terima kasih! Semoga Anda juga sehat selalu 😊" },
    { keyword: ["selamat pagi"], response: "Selamat pagi! Semoga harimu menyenangkan!" },
    { keyword: ["selamat siang"], response: "Selamat siang! Ada yang bisa saya bantu?" },
    { keyword: ["selamat sore"], response: "Selamat sore! Jangan ragu untuk bertanya ya." },
    { keyword: ["selamat malam"], response: "Selamat malam! Semoga harimu menyenangkan." },
    { keyword: ["developer", "pembuat", "yang buat"], response: "Chatbot ini dibuat oleh Mas Arif Amrullah 275." },
    { keyword: ["error", "tidak bisa", "gagal"], response: "Mohon maaf atas kendalanya. Silakan coba lagi atau hubungi admin." },
    { keyword: ["update", "baru", "versi"], response: "Kami rutin melakukan update untuk meningkatkan layanan kami." },
    { keyword: ["sosmed", "instagram", "facebook", "twitter"], response: "Ikuti kami di sosial media untuk info terbaru." }, 
];

document.getElementById("sendBtn").addEventListener("click", () => {
    const userText = document.getElementById("userInput").value.toLowerCase();
    const chatWindow = document.getElementById("chatWindow");
    
    chatWindow.innerHTML += `<div><b>Anda:</b> ${userText}</div>`;
    
    let reply = "Maaf, saya belum paham pertanyaan Anda.";
    
    for (const item of faq) {
        for (const key of item.keyword) {
            if (userText.includes(key)) {
                reply = item.response;
                break;
            }
        }
        if (reply !== "Maaf, saya belum paham pertanyaan Anda.") break;
    }

    chatWindow.innerHTML += `<div><b>Bot:</b> ${reply}</div>`;
    document.getElementById("userInput").value = "";
    chatWindow.scrollTop = chatWindow.scrollHeight;
});
</script>

<!-- Dark Mode -->
<script>
document.getElementById('toggleDark').addEventListener('click', function () {
    document.documentElement.classList.toggle('dark');
    
    // Simpan preferensi ke localStorage
    if (document.documentElement.classList.contains('dark')) {
        localStorage.setItem('theme', 'dark');
        this.innerText = '☀️';
    } else {
        localStorage.setItem('theme', 'light');
        this.innerText = '🌙';
    }
});

// Terapkan tema dari localStorage saat halaman dimuat
window.addEventListener('DOMContentLoaded', () => {
    const theme = localStorage.getItem('theme');
    const toggleBtn = document.getElementById('toggleDark');

    if (theme === 'dark') {
        document.documentElement.classList.add('dark');
        toggleBtn.innerText = '☀️';
    }
});
</script>

</body>
</html>
