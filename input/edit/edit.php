<?php

$id = $_POST['id'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$jumlah_tenaga_kerja = $_POST['jumlah_tenaga_kerja'];
$komoditas = $_POST['komoditas'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "industri_tangerang";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update data
$sql = "UPDATE `tabel industri` SET
        `nama perusahaan` = ?,
        `jumlah tenaga kerja` = ?,
        `komoditas` = ?,
        `latitude` = ?,
        `longitude` = ?
        WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sisddi",
    $nama_perusahaan,
    $jumlah_tenaga_kerja,
    $komoditas,
    $latitude,
    $longitude,
    $id
);

if ($stmt->execute()) {
    header("Location: ../index.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>