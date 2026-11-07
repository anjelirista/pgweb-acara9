<!DOCTYPE html>
<html>
<head>
    <title>Tabel Industri</title>
</head>
<body>

<h2>Data Perusahaan Industri Tangerang</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "industri_tangerang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Menampilkan data
$sql = "SELECT * FROM `tabel industri`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border='1' cellpadding='8' cellspacing='0'>";

    echo "<tr>
            <th>ID</th>
            <th>Nama Perusahaan</th>
            <th>Jumlah Tenaga Kerja</th>
            <th>Komoditas</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Aksi</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>";

        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nama perusahaan"] . "</td>";
        echo "<td>" . $row["jumlah tenaga kerja"] . "</td>";
        echo "<td>" . $row["komoditas"] . "</td>";
        echo "<td>" . $row["latitude"] . "</td>";
        echo "<td>" . $row["longitude"] . "</td>";

        echo "<td>
                <a href='input/delete.php?id=" . $row["id"] . "'
                onclick=\"return confirm('Yakin ingin menghapus data ini?')\">
                Hapus</a>

                |

                <a href='input/edit/index.php?id=" . $row["id"] . "'>
                Edit</a>
              </td>";

        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "Tidak ada data";
}

$conn->close();
?>

</body>
</html>