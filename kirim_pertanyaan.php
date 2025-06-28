<?php
include "koneksi.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pesan = mysqli_real_escape_string($db, $_POST['pesan']);
    
    $sql = "INSERT INTO tbl_pertanyaan (nama, email, pesan, tanggal) VALUES ('$nama', '$email', '$pesan', NOW())";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>
