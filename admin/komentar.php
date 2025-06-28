<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
include "../koneksi.php";

// Hapus komentar jika ada perintah
if (isset($_GET['hapus'])) {
    $id_hapus = intval($_GET['hapus']);
    mysqli_query($db, "DELETE FROM tbl_komentar WHERE id_komentar=$id_hapus");
    header("Location: komentar.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Moderasi Komentar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-100">
    <h1 class="text-2xl font-bold mb-6">Moderasi Komentar</h1>
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-green-700 text-white">
                <th class="p-2 border">Nama</th>
                <th class="p-2 border">Komentar</th>
                <th class="p-2 border">Tanggal</th>
                <th class="p-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($db, "SELECT * FROM tbl_komentar ORDER BY tanggal DESC");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr class='bg-white'>";
                echo "<td class='p-2 border'>" . htmlspecialchars($row['nama_pengunjung']) . "</td>";
                echo "<td class='p-2 border'>" . htmlspecialchars($row['isi_komentar']) . "</td>";
                echo "<td class='p-2 border'>" . $row['tanggal'] . "</td>";
                echo "<td class='p-2 border'>
                        <a href='?hapus={$row['id_komentar']}' class='text-red-600 font-semibold' onclick=\"return confirm('Yakin hapus komentar?')\">Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
