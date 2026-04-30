<?php
include "koneksi.php";
session_start();

echo "<h2>Riwayat Hasil Quiz</h2>";

echo "<table>
<tr>
<th>No</th>
<th>Kode Quiz</th>
<th>Nilai</th>
<th>Tanggal</th>
</tr>";

$no = 1;
while ($row = mysqli_fetch_assoc($query)) {

    echo "<tr>
    <td>".$no++."</td>
    <td>".$row['kode_quiz']."</td>
    <td>".$row['nilai']."</td>
    <td>".$row['tanggal']."</td>
    </tr>";
}

echo "</table>";
?>

<a href="dashboard.php">⬅️ Kembali</a>