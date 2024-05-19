<?php
session_start(); // Mulai session

// Cek apakah pengguna telah login atau tidak
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login_session.php"); // Jika tidak, redirect ke halaman login
    exit();
}

// Tampilkan pesan selamat datang
echo "<h1>Selamat datang, {$_SESSION['username']}!</h1>";

// Tambahkan tombol untuk logout
echo "<br><br><a href='logout.php'>Logout</a>";
?>