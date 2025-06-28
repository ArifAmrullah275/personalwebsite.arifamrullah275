<?php
include "../koneksi.php"; 
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin | Buku Tamu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="max-w-5xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Pesan Buku Tamu</h1>

    <!-- Tombol Kembali ke Beranda -->
    <div class="mb-4">
        <a href="beranda_admin.php" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            ← Kembali ke Beranda
        </a>
    </div>

    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-green-600 text-white">
            <tr>
                <th class="p-2 border">No</th>
                <th class="p-2 border">Nama</th>
                <th class="p-2 border">Email</th>
                <th class="p-2 border">Pesan</th>
                <th class="p-2 border">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($db, "SELECT * FROM tbl_buku_tamu ORDER BY id_pesan DESC");
            $no = 1;
            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr class='border'>";
                echo "<td class='p-2 border text-center'>$no</td>";
                echo "<td class='p-2 border'>" . htmlspecialchars($data['nama']) . "</td>";
                echo "<td class='p-2 border'>" . htmlspecialchars($data['email']) . "</td>";
                echo "<td class='p-2 border'>" . nl2br(htmlspecialchars($data['pesan'])) . "</td>";
                echo "<td class='p-2 border text-center'>" . $data['tanggal'] . "</td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
