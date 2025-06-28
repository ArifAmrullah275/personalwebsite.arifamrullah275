<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:beranda_admin.php');
}
require_once("../koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Administrator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body id="loginBody" class="min-h-screen flex items-center justify-center bg-cover bg-center">

<!-- Container -->
<div class="bg-white bg-opacity-50 backdrop-blur-md shadow-lg rounded-lg p-8 w-full max-w-md border border-green-600 relative">

    <!-- Logo transparan di atas -->
    <div class="absolute -top-13 left-1/2 transform -translate-x-1/2">
        <img src="Logo.png" alt="Logo" class="w-20 h-20 rounded-full shadow-lg bg-white bg-opacity-70 p-2">
    </div>

    <h2 class="text-2xl font-bold text-center text-green-700 mt-20 mb-6">Login Administrator</h2>

    <form action="cek_login.php" method="post" class="space-y-5">

        <!-- Username -->
        <div>
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" name="username" id="username" required
                class="mt-1 block w-full border-green-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 h-10 px-3">
        </div>

        <!-- Password -->
        <div class="relative mt-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="relative">
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 h-10 pr-12 px-3">
                <div class="absolute inset-y-0 right-3 flex items-center">
                    <i class="fa-solid fa-eye cursor-pointer text-gray-500" id="togglePassword"></i>
                </div>
            </div>
        </div>
        

        <!-- Submit & Cancel -->
        <div class="flex justify-between items-center">
            <input type="submit" name="login" value="Login"
                class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800 cursor-pointer">
            <input type="reset" name="cancel" value="Cancel"
                class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 cursor-pointer">
        </div>

        <!-- Register -->
        <div class="text-center text-sm mt-4">
            Belum punya akun? <a href="register.php" class="text-blue-600 hover:underline">Daftar di sini</a>
        </div>


        <!-- Copyright -->
        <div class="mt-6 text-center text-sm text-gray-600">
            &copy; <?php echo date('Y'); ?> | Created by Mas Arif Amrullah 275
        </div>

    </form>
</div>

<!-- Script toggle password -->
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>

<!-- Script untuk mengganti background acak -->
<script>
    const backgrounds = [
        'img/Background1.jpg', // Gambar utama
        'img/Background2.jpg', // Cadangan 1
        'img/Background3.jpg'  // Cadangan 2
    ];

    const selectedBg = backgrounds[Math.floor(Math.random() * backgrounds.length)];
    document.getElementById('loginBody').style.backgroundImage = `url('${selectedBg}')`;
</script>

</body>
</html>