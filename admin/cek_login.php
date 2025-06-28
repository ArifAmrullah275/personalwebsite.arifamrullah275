<?php
session_start();
require_once("../koneksi.php");

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Ambil data dari database berdasarkan username
    $query = mysqli_query($db, "SELECT * FROM tbl_user WHERE username = '$username'") or die(mysqli_error($db));

    if (mysqli_num_rows($query) == 1) {
        $user = mysqli_fetch_assoc($query);

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header("Location: beranda_admin.php");
            exit();
        } else {
            echo "<script>alert('Password salah!'); window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!'); window.location='login.php';</script>";
    }
}
?>
