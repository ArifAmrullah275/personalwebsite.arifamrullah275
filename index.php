<?php include "koneksi.php"; 

// Hitung jumlah pengunjung hanya untuk pengunjung umum
$counterFile = "counter.txt";
if (file_exists($counterFile)) {
    $counter = (int)file_get_contents($counterFile);
    $counter++;
    file_put_contents($counterFile, $counter);
} else {
    $counter = 1;
    file_put_contents($counterFile, $counter);
}


// Cek apakah ada pencarian
$keyword = '';
if (isset($_GET['search'])) {
    $keyword = mysqli_real_escape_string($db, $_GET['search']);
}
?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Web | Home</title>
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

<!-- Body -->
<body class="bg-gray-300 dark:bg-gray-900 text-gray-800 dark:text-gray-100 font-sans">


<!-- Header & Navigation -->
<header class="bg-green-700 dark:bg-green-900 text-white fixed top-0 w-full shadow-md z-50">
  <div class="flex items-center justify-between max-w-6xl mx-auto px-6 py-4">
    <!-- Logo di kiri -->
    <div class="flex items-center space-x-4">
      <img src="assets_img/Logo.png" alt="Logo" class="w-10 h-10 rounded-full shadow-md">
      <span class="text-2xl font-bold">Artikel | <i>Arif Amrullah 275</i></span>
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


<!-- Main Content -->
<main class="max-w-6xl mx-auto pt-36 p-6 grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">

  <!-- Bagian Artikel -->
  <section class="md:col-span-2">
    <h2 class="text-xl font-bold mb-4">Artikel Terbaru</h2>

    <!-- Form Pencarian -->
    <form method="GET" class="mb-6 relative">
        <input id="searchInput" type="text" name="search" placeholder="Cari Judul Artikel..." value="<?php echo htmlspecialchars($keyword); ?>"
        class="w-full px-4 py-2 border border-green-400 rounded focus:outline-none focus:ring-2 focus:ring-green-400 pr-12 bg-white text-gray-800 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
        
      <!-- icon close -->
      <button type="button" id="clearSearch"
        class="absolute right-20 top-1/2 -translate-y-1/2 text-gray-500 hover:text-red-500 z-10 p-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      <!-- Submit cari -->
        <button type="submit" class="absolute right-0 top-0 h-full bg-green-600 text-gray-100 px-6 rounded-r hover:bg-green-700">Cari</button>
    </form>

    <!-- Section -->
    <div class="space-y-6">
        <?php
            $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
            $query = mysqli_query($db, $sql);
            $found = 0;
            while ($data = mysqli_fetch_array($query)) {
                $id = $data['id_artikel'];
                $judul = $data['nama_artikel'];
                $isi = $data['isi_artikel'];
                $match = stripos($judul, $keyword) !== false;
                if ($keyword == '' || $match) { $found++; }
                $hiddenClass = ($keyword && !$match) ? 'hidden' : '';
                
                echo "<div class='bg-gradient-to-r from-green-200 via-green-100 to-green-200 p-1 rounded-2xl hover:from-green-300 hover:to-green-300 transition-all duration-300 $hiddenClass'>";
                echo "<div id='artikel$id' class='scroll-offset bg-white rounded-xl p-6 shadow-lg transform hover:scale-[1.01] transition duration-300'>";
                echo "<h3 class='text-lg font-semibold text-green-700 break-words hover:underline mb-2'>" . htmlspecialchars($judul) . "</h3>";
                $isi_pendek = substr(strip_tags($isi), 0, 250);
                echo "<p class='text-gray-700 whitespace-normal break-words text-justify mb-2'>" . nl2br(htmlspecialchars($isi_pendek)) . "...</p>";
                echo "<a href='detail_artikel.php?id=$id' class='inline-block bg-green-600 text-white px-4 py-1 rounded hover:bg-green-700 transition'>Baca Selengkapnya</a>";
                echo "</div></div>";
            }
            if ($keyword && $found == 0) {
                echo "<p class='text-red-500 font-semibold'>Tidak ditemukan artikel dengan kata kunci '<i>$keyword</i>'</p>";
            }
        ?>
    </div>
  </section>


  <!-- Sidebar -->
  <aside class="bg-white dark:bg-gray-800 p-6 rounded shadow">
      <h2 class="text-lg font-bold mb-4 dark:text-gray-100">Daftar Artikel</h2>
      <ul class="space-y-2 list-disc list-inside text-gray-700 dark:text-gray-300">
          <?php
              $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
              $query = mysqli_query($db, $sql);
              while ($data = mysqli_fetch_array($query)) {
                  $id = $data['id_artikel'];
                  echo '<li><a href="#artikel' . $id . '" class="hover:underline hover:text-green-600 dark:hover:text-green-300 transition-colors duration-200">'
                       . htmlspecialchars($data['nama_artikel']) . '</a></li>';
              }
          ?>
      </ul>

      <!-- Garis pembatas -->
      <div class="my-6 border-t border-gray-300 dark:border-gray-600"></div>

      <!-- Kalender -->
      <section class="md:col-span-3 mt-10">
        <h2 class="text-xl font-bold mb-4">📅 Kalender</h2>
        <div class="flex justify-between items-center mb-4">
          <button onclick="gantiBulan(-1)" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">←</button>
          <h3 id="judulBulan" class="text-lg font-semibold"></h3>
          <button onclick="gantiBulan(1)" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">→</button>
        </div>
        <div id="calendar" class="grid grid-cols-7 gap-2 text-center text-sm bg-white dark:bg-gray-900 p-4 rounded shadow">
          <!-- Kalender akan diisi oleh JavaScript -->
        </div>
      </section>
  </aside>
</main>


<!-- Footer -->
<footer class="bg-green-700 text-white w-full bottom-0 text-center py-2 mt-10">
    &copy; <?php echo date('Y'); ?> | Created by Mas Arif Amrullah 275
    <div class="flex justify-center space-x-4 mt-2">
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
<button id="backToTopBtn" class="hidden fixed bottom-8 right-8 bg-green-600 hover:bg-green-700 text-white p-3 rounded-full shadow-lg z-50 transition-opacity duration-300">↑</button>


<!-- Java Script -->
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

// Hamburger menu
document.getElementById('menuToggle').addEventListener('click', function() {
  const menu = document.getElementById('mobileMenu');
  menu.classList.toggle('hidden');
});
</script>


<script>
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


<!-- icon close -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("searchInput");
    const clearBtn = document.getElementById("clearSearch");

    clearBtn.addEventListener("click", function () {
        input.value = "";
        // Hilangkan parameter pencarian dari URL dan reload halaman
        window.location.href = window.location.pathname;
    });
});
</script>


<!-- AI Integer -->
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


<!-- Kalender -->
<script>
const hari = ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"];
const bulanNama = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
                   "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

let bulanAktif = new Date().getMonth();
let tahunAktif = new Date().getFullYear();

function renderKalender(tahun, bulan) {
  const calendar = document.getElementById("calendar");
  const judul = document.getElementById("judulBulan");
  calendar.innerHTML = "";
  judul.textContent = `${bulanNama[bulan]} ${tahun}`;

  // Tanggal hari ini (untuk penanda)
  const today = new Date();
  const tanggalHariIni = today.getDate();
  const bulanIni = today.getMonth();
  const tahunIni = today.getFullYear();

  // Judul hari
  hari.forEach(h => {
    const el = document.createElement("div");
    el.className = "font-bold text-green-700 dark:text-green-300";
    el.textContent = h;
    calendar.appendChild(el);
  });

  const tglAwal = new Date(tahun, bulan, 1);
  const tglAkhir = new Date(tahun, bulan + 1, 0).getDate();
  const hariAwal = tglAwal.getDay();

  // Kosong sebelum tgl 1
  for (let i = 0; i < hariAwal; i++) {
    const kosong = document.createElement("div");
    calendar.appendChild(kosong);
  }

  // Tanggal-tanggal
  for (let t = 1; t <= tglAkhir; t++) {
    const box = document.createElement("div");

    // Cek apakah ini hari ini
    const isToday = t === tanggalHariIni && bulan === bulanIni && tahun === tahunIni;

    box.textContent = t;
    box.className = "p-2 rounded text-sm transition font-medium border dark:border-gray-600";

    if (isToday) {
      box.classList.add("bg-green-600", "text-white", "font-bold", "shadow");
    } else {
      box.classList.add("hover:bg-green-100", "dark:hover:bg-gray-700");
    }

    calendar.appendChild(box);
  }
}

function gantiBulan(offset) {
  bulanAktif += offset;
  if (bulanAktif < 0) {
    bulanAktif = 11;
    tahunAktif--;
  } else if (bulanAktif > 11) {
    bulanAktif = 0;
    tahunAktif++;
  }
  renderKalender(tahunAktif, bulanAktif);
}

renderKalender(tahunAktif, bulanAktif);
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


</body>
</html>