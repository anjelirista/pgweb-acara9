<!DOCTYPE html>
<html>
<head>
    <title>Input Data Industri</title>
</head>
<body>

<h2>Form Input Data Perusahaan</h2>

<form action="input.php" method="POST">

    Nama Perusahaan:<br>
    <input type="text" name="nama_perusahaan" required>
    <br><br>

    Jumlah Tenaga Kerja:<br>
    <input type="number" name="jumlah_tenaga_kerja" required>
    <br><br>

    Komoditas:<br>
    <input type="text" name="komoditas" required>
    <br><br>

    Latitude:<br>
    <input type="number" step="any" name="latitude" required>
    <br><br>

    Longitude:<br>
    <input type="number" step="any" name="longitude" required>
    <br><br>

    <input type="submit" value="Submit">

</form>

<br>
<a href="../index.php">Kembali ke Tabel Industri</a>

</body>
</html>