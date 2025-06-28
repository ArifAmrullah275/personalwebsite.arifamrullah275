<?php
include("../koneksi.php");
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelola Artikel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300 min-h-screen">

<!-- Header -->
<header class="bg-green-700 text-white fixed top-0 w-full shadow-md z-50">
  <div class="flex items-center justify-between max-w-6xl mx-auto px-6 py-4">
    
    <!-- Logo di kiri -->
    <div class="flex items-center space-x-4">
      <img src="img/Logo.png" alt="Logo" class="w-10 h-10 rounded-full shadow-md">
      <span class="text-2xl font-bold">Kelola Artikel | <i>Arif Amrullah 275</i></span>
    </div>

    <!-- Kanan: Teks tambahan -->
    <div class="text-lg font-medium">
      Muda Sahabat Tani
    </div>

  </div>
</header>

<!-- Container -->
<div class="flex max-w-7xl mx-auto mt-8 px-4 pt-24 pb-20">

<!-- Sidebar -->
<aside class="w-64 bg-white rounded shadow p-4 flex-shrink-0">
    <h2 class="text-xl font-semibold text-green-700 mb-4 text-center">MENU</h2>
    <ul class="space-y-2 text-gray-700">
        <li><a href="beranda_admin.php" class="block hover:text-green-500">Beranda</a></li>
        <li><a href="data_artikel.php" class="block hover:text-green-500">Kelola Artikel</a></li>
        <li><a href="data_gallery.php" class="block hover:text-green-500">Kelola Gallery</a></li>
        <li><a href="about.php" class="block hover:text-green-500">About</a></li>
        <li><a href="buku_tamu.php" class="block hover:text-green-500">Pesan</a></li>
        <li><a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
            class="block text-yellow-800 hover:underline font-medium">Logout</a></li>
    </ul>
</aside>

<!-- Main Content -->
<main class="flex-1 bg-white rounded shadow p-6 ml-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold text-gray-800">Daftar Artikel</h2>
        <a href="add_artikel.php"
        class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">+ Tambah Artikel</a>
    </div>

    <div class="overflow-x-auto">
    <table class="min-w-full table-fixed border border-gray-300 text-sm">
        <thead class="bg-green-600 text-white">
        <tr>
            <th class="p-3 border w-[5%]">No</th>
            <th class="p-3 border w-[25%]">Nama Artikel</th>
            <th class="p-3 border w-[55%]">Isi Artikel</th>
            <th class="p-3 border w-[15%]">Aksi</th>
        </tr>
        </thead>

        <tbody>
            <?php
                $sql = "SELECT * FROM tbl_artikel";
                $query = mysqli_query($db, $sql);
                $no = 1;
                while ($data = mysqli_fetch_array($query)) {
                    echo "<tr class='even:bg-gray-50 align-top'>";
                    echo "<td class='border p-2 text-center'>" . $no++ . "</td>";
                    echo "<td class='border p-2 whitespace-pre-wrap'>" . (htmlspecialchars($data['nama_artikel'])) . "</td>";
                    echo "<td class='border p-2 whitespace-pre-wrap text-justiify'>" . (htmlspecialchars($data['isi_artikel'])) . "</td>";
                    echo "<td class='border p-2 text-center space-x-2'>
                        <a href='edit_artikel.php?id_artikel={$data['id_artikel']}' class='text-green-600 hover:underline'>Edit</a>
                        <a href='delete_artikel.php?id_artikel={$data['id_artikel']}' onclick='return confirm(\"Yakin ingin menghapus?\")' class='text-yellow-800 hover:underline'>Hapus</a>
                        </td>";
                    echo "</tr>";
                    }
            ?>
        </tbody>
    </table>
    </div>
</main>
</div>

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

</body>
</html>