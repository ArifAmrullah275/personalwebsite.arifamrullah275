<?php
require_once("../koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Administrator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-green-100">

<div class="bg-white p-8 rounded shadow-md w-full max-w-md border border-green-600">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-6">Register Administrator</h2>

    <form action="proses_register.php" method="post" class="space-y-5">
        <div>
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" name="username" id="username" required
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm px-3 py-2">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" required
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm px-3 py-2">
        </div>

        <div class="flex justify-between">
            <button type="submit" name="register" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Register</button>
            <a href="login.php" class="text-sm text-blue-600 hover:underline">Sudah punya akun? Login</a>
        </div>
    </form>
</div>

</body>
</html>
