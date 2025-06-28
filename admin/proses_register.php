<?php
require_once("../koneksi.php");

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Amankan password

    // Cek apakah username sudah digunakan
    $check = mysqli_query($db, "SELECT * FROM tbl_user WHERE username = '$username'") or die(mysqli_error($db));

    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Username sudah terdaftar!'); window.location='register.php';</script>";
    } else {
        $insert = mysqli_query($db, "INSERT INTO tbl_user (username, password) VALUES ('$username', '$password')") or die(mysqli_error($db));
        if ($insert) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal!'); window.location='register.php';</script>";
        }
    }
}
?>
