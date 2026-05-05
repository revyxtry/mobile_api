<?php
// Gunakan variabel environment Railway (otomatis terisi di server)
$host = $_ENV['MYSQLHOST'] ?? "mysql-gwdn.railway.internal";
$user = $_ENV['MYSQLUSER'] ?? "root";
$pass = $_ENV['MYSQLPASSWORD'] ?? "xTelNxEetHsGNngapadiYHPlhxZkmjyH";
$db   = $_ENV['MYSQLDATABASE'] ?? "railway";
$port = $_ENV['MYSQLPORT'] ?? 3306; // Port internal biasanya 3306

$koneksi = @mysqli_connect($host, $user, $pass, $db, $port);

if (!$koneksi) {
    header('Content-Type: application/json');
    die(json_encode(["error" => "Koneksi internal gagal"]));
}
?>