<?php
// Aktifkan laporan error agar muncul di browser/logs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include 'koneksi.php';

$data = array();
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

if (!$query) {
    echo json_encode(["status" => "error", "query_error" => mysqli_error($koneksi)]);
    exit;
}

while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}

echo json_encode($data);
?>