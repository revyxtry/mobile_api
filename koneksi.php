<?php
// Mengambil detail dari environment variable Railway
$host = $_ENV['MYSQLHOST'] ?? getenv('MYSQLHOST');
$user = $_ENV['MYSQLUSER'] ?? getenv('MYSQLUSER');
$pass = $_ENV['MYSQLPASSWORD'] ?? getenv('MYSQLPASSWORD');
$db   = $_ENV['MYSQLDATABASE'] ?? getenv('MYSQLDATABASE');
$port = $_ENV['MYSQLPORT'] ?? getenv('MYSQLPORT');

// Jika environment kosong (misal saat testing), gunakan default ini
if (!$host) {
    $host = "mysql-gwdn.railway.internal";
    $user = "root";
    $pass = "xTelNxEetHsGNngapadiYHPlhxZkmjyH";
    $db   = "railway";
    $port = 3306;
}

$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

// Jangan gunakan die() agar tidak merusak format JSON jika terjadi error
if (!$koneksi) {
    header('Content-Type: application/json');
    echo json_encode(["status" => "error", "message" => mysqli_connect_error()]);
    exit;
}
?>