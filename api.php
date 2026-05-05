<?php
header("Content-Type: application/json");
include 'koneksi.php';

$data = array();

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}

echo json_encode($data, JSON_PRETTY_PRINT);
?>