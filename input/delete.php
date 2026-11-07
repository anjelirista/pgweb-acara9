<?php

$id = $_GET['id'];

// Koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "industri_tangerang";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Hapus data
$sql = "DELETE FROM `tabel industri` WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: ../index.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>