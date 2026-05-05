<?php
$host = "trolley.proxy.rlwy.net"; // Hanya domain, tanpa mysql://
$user = "root";
$pass = "xTelNxEetHsGNngapadiYHPlhxZkmjyH";
$db   = "railway";
$port = 39372; 

// Menggunakan @ untuk menyembunyikan warning bawaan dan menggantinya dengan pesan custom
$koneksi = @mysqli_connect($host, $user, $pass, $db, $port);

?>