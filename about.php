<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web | About</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        darkMode: 'class'
    }
    </script>

    <style>
        html { scroll-behavior: smooth; }
        .scroll-offset { scroll-margin-top: 120px; }

        .spin-on.animate {
            animation: spin 2s linear infinite;
        }
        @keyframes spin {
            100% { transform: rotate(360deg); }
        }
    </style>

</head>
<body class="bg-gray-300 dark:bg-gray-900 text-gray-800 dark:text-gray-100 font-sans">

<!-- Header & Navigation -->
<header class="bg-green-700 dark:bg-green-900 text-white fixed top-0 w-full shadow-md z-50">
  <div class="flex items-center justify-between max-w-6xl mx-auto px-6 py-4">
    <!-- Logo di kiri -->
    <div class="flex items-center space-x-4">
      <img src="assets_img/Logo.png" alt="Logo" class="w-10 h-10 rounded-full shadow-md">
      <span class="text-2xl font-bold">About | <i>Arif Amrullah 275</i></span>
    </div>

    <!-- Kanan: Teks tambahan -->
    <div class="flex items-center space-x-2">
    <div class="hidden md:block text-lg font-medium">Muda Sahabat Tani</div>
    <button id="darkModeToggle" class="text-lg bg-white hover:bg-gray-700 text-green-700 px-3 py-1 rounded shadow hidden md:block">
      🌙
    </button>
    </div>

    <!-- Hamburger -->
    <div class="md:hidden">
      <button id="darkModeToggleMobile" class="bg-white text-black px-3 py-1 rounded hover:bg-gray-200 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 transition">🌙</button>
      <button id="menuToggle" class="focus:outline-none">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>

<!-- Navigation Menu -->
<nav id="mobileMenu" class="hidden md:flex flex-col md:flex-row md:justify-center md:space-x-6 md:py-2 bg-green-500 hover:bg-green-400 text-white font-medium text-sm px-6 py-4 space-y-2 md:space-y-0">

<!-- Ikon Musik di Kiri -->
<div class="md:absolute md:left-4 flex items-center mb-2 md:mb-0">
    <button id="toggleAudio" class="w-8 h-8 rounded-full bg-white text-green-700 flex items-center justify-center transition spin-on">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-5 h-5" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0 5a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
      </svg>
    </button>
    <audio id="bgAudio" src="assets_img/Audio.mp3" loop></audio>
  </div>
  
  <!-- Nav Menu -->
    <a href="index.php" class="block py-1 px-2 hover:underline hover:text-green-900">Artikel</a>
  <a href="gallery.php" class="block py-1 px-2 hover:underline hover:text-green-900">Gallery</a>
  <a href="about.php" class="block py-1 px-2 hover:underline hover:text-green-900">About</a>
  <a href="kontak.php" class="block py-1 px-2 hover:underline hover:text-green-900">Kontak</a>
  <a href="admin/login.php" class="block py-1 px-2 hover:underline hover:text-green-900">Login</a>
</nav>
</header>



<!-- About Content -->
<main class="w-full max-w-md sm:max-w-2xl lg:max-w-3xl mx-auto px-4 sm:px-6 py-6 bg-white rounded shadow mt-[170px]">
    <h2 class="text-xl font-bold mb-4 text-green-700">Tentang Saya</h2>

    <!-- Biodata dan Foto -->
    <div class="flex flex-col md:flex-row items-center gap-6 mb-8">
        <img src="assets_img/foto_profil.jpg" alt="Foto Profil"
         class="w-40 h-40 rounded-full border-2 border-green-600 object-cover shadow-md">
        <div>
            <h3 class="text-2xl font-semibold text-green-800">Arif Amrullah</h3>
            <p class="text-gray-700 dark:text-gray-700">Web Developer | Pemuda Desa | Petani Muda | Mahasiswa Sistem Informasi</p>
        </div>
    </div>

    <div class="space-y-6">
        <?php
        $sql = "SELECT * FROM tbl_about ORDER BY id_about DESC";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
            echo "<div>";
            echo "<p class='text-gray-700 break-words'>" . htmlspecialchars($data['about']) . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</main>


<!-- Footer -->
<footer class="bg-green-700 text-white w-full bottom-0 text-center py-2 mt-10">
    &copy; <?php echo date('Y'); ?> | Created by Mas Arif Amrullah 275

<div class="flex space-x-4 justify-center mt-2">
    <a href="https://instagram.com/arif_amrullah275" target="_blank" class="hover:text-green-300">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm10 2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h10zM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm4.5-.75a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5z"/></svg>
        </a>
        <a href="https://www.tiktok.com/@arifamrlh27?_t=ZS-8x3asZXCW7I&_r=1" target="_blank" class="hover:text-green-300">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2h3.1a5.9 5.9 0 0 0 5.9 5.9v3a8.9 8.9 0 0 1-5.9-2.1v7.6a5.9 5.9 0 1 1-5.9-5.9c.3 0 .7 0 1 .1v3a3 3 0 1 0 3 3v-15z"/></svg>
        </a>
        <a href="https://github.com/ArifAmrullah275" target="_blank" class="hover:text-green-300">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.4 0 0 5.4 0 12a12 12 0 0 0 8.2 11.4c.6.1.8-.3.8-.6v-2.1c-3.3.7-4-1.6-4-1.6a3.2 3.2 0 0 0-1.4-1.8c-1.1-.7.1-.7.1-.7a2.5 2.5 0 0 1 1.9 1.3 2.5 2.5 0 0 0 3.4 1 2.5 2.5 0 0 1 .7-1.6c-2.6-.3-5.3-1.3-5.3-5.9a4.6 4.6 0 0 1 1.2-3.2 4.3 4.3 0 0 1 .1-3.2s1-.3 3.3 1.2a11.2 11.2 0 0 1 6 0c2.3-1.5 3.3-1.2 3.3-1.2a4.3 4.3 0 0 1 .1 3.2 4.6 4.6 0 0 1 1.2 3.2c0 4.6-2.7 5.6-5.3 5.9a2.8 2.8 0 0 1 .8 2.2v3.2c0 .3.2.7.8.6A12 12 0 0 0 24 12c0-6.6-5.4-12-12-12z"/></svg>
        </a>
        <a href="https://www.linkedin.com/in/muhammad-arif-amrullah-88563933b/?locale=in_ID" target="_blank" class="hover:text-green-300">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.5 8h4v12h-4V8zM9.5 8h3.8v1.56h.05c.53-.98 1.84-2.02 3.8-2.02 4.06 0 4.8 2.67 4.8 6.13V20h-4v-5.8c0-1.38-.03-3.15-1.92-3.15-1.92 0-2.22 1.5-2.22 3.04V20h-4V8z"/>
          </svg>
        </a>
        </div>
</footer>


<!-- Tombol Back to Top -->
<button id="backToTopBtn" 
    class="hidden fixed bottom-8 right-8 bg-green-600 hover:bg-green-700 text-white p-3 rounded-full shadow-lg z-50 transition-opacity duration-300">
    ↑
</button>

<script>
// Tampilkan tombol ketika scroll ke bawah
window.onscroll = function() {
    const btn = document.getElementById("backToTopBtn");
    if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
        btn.classList.remove("hidden");
    } else {
        btn.classList.add("hidden");
    }
};

// Scroll ke atas saat tombol diklik
document.getElementById("backToTopBtn").addEventListener("click", function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

function toggleDarkMode() {
    document.documentElement.classList.toggle('dark');
    if(document.documentElement.classList.contains('dark')){
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
}
document.getElementById('darkModeToggle').addEventListener('click', toggleDarkMode);
document.getElementById('darkModeToggleMobile').addEventListener('click', toggleDarkMode);

window.addEventListener('DOMContentLoaded', () => {
    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark');
    }
});

 // Dark Mode toggle
function updateDarkModeIcon() {
    const isDark = document.documentElement.classList.contains('dark');
    const icon = isDark ? '☀️' : '🌙';

    // Update kedua tombol jika ada
    const toggleBtn = document.getElementById('darkModeToggle');
    const toggleBtnMobile = document.getElementById('darkModeToggleMobile');

    if (toggleBtn) toggleBtn.textContent = icon;
    if (toggleBtnMobile) toggleBtnMobile.textContent = icon;
}

function toggleDarkMode() {
    document.documentElement.classList.toggle('dark');
    const isDark = document.documentElement.classList.contains('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
    updateDarkModeIcon();
}

document.getElementById('darkModeToggle').addEventListener('click', toggleDarkMode);
document.getElementById('darkModeToggleMobile').addEventListener('click', toggleDarkMode);

// Saat halaman pertama kali dimuat
window.addEventListener('DOMContentLoaded', () => {
    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark');
    }
    updateDarkModeIcon(); // Pastikan icon sesuai dengan status mode
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

<!-- Audio -->
<script>
document.getElementById("toggleAudio").addEventListener("click", function () {
    const audio = document.getElementById("bgAudio");
    if (audio.paused) {
        audio.play();
        this.classList.add("animate");
    } else {
        audio.pause();
        this.classList.remove("animate");
    }
});
</script>

<!-- Hamburger Menu -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("menuToggle"); // sesuaikan id
        const menu = document.getElementById("mobileMenu"); // sesuaikan id

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    });
</script>


</body>
</html>