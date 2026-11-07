<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Industri</title>
</head>
<body>

<h2>Form Edit Data Perusahaan</h2>

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

// Mengambil data berdasarkan ID
$sql = "SELECT * FROM `tabel industri` WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

<form action="edit.php" method="POST">

    <input type="hidden" name="id"
    value="<?php echo htmlspecialchars($row['id']); ?>">

    Nama Perusahaan:<br>
    <input type="text" name="nama_perusahaan"
    value="<?php echo htmlspecialchars($row['nama perusahaan']); ?>" required>
    <br><br>

    Jumlah Tenaga Kerja:<br>
    <input type="number" name="jumlah_tenaga_kerja"
    value="<?php echo htmlspecialchars($row['jumlah tenaga kerja']); ?>" required>
    <br><br>

    Komoditas:<br>
    <input type="text" name="komoditas"
    value="<?php echo htmlspecialchars($row['komoditas']); ?>" required>
    <br><br>

    Latitude:<br>
    <input type="number" step="any" name="latitude"
    value="<?php echo htmlspecialchars($row['latitude']); ?>" required>
    <br><br>

    Longitude:<br>
    <input type="number" step="any" name="longitude"
    value="<?php echo htmlspecialchars($row['longitude']); ?>" required>
    <br><br>

    <input type="submit" value="Submit">

</form>

<?php
} else {
    echo "Data tidak ditemukan.";
}

$stmt->close();
$conn->close();

?>

<br>
<a href="../index.php">Kembali ke Tabel Industri</a>

</body>
</html>