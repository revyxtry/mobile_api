<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

include 'koneksi.php';

$data = array();

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}

echo json_encode($data, JSON_PRETTY_PRINT);
?>