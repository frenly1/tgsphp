<?php
// Cek apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $universitas = $_POST['universitas'];
    $kuliah = $_POST['kuliah'];
    $nilai = $_POST['nilai'];

    // Tampilkan hasil
    echo "<h2>Daftar Nilai Ujian Mahasiswa</h2>";
    echo "<table>";
    echo "<tr><th>NIM</th><th>Nama</th><th>Universitas</th><th>Mata Kuliah</th><th>Nilai</th><th>Status</th><th>Grade</th><th>Predikat</th></tr>";
    echo "<tr>";
    echo "<td>$nim</td>";
    echo "<td>$nama</td>";
    echo "<td>$universitas</td>";
    echo "<td>$kuliah</td>";
    echo "<td>$nilai</td>";
    // Status
    $status = ($nilai >= 65) ? "Lulus" : "Tidak Lulus";
    echo "<td>$status</td>";
    // Grade
    if ($nilai >= 85) {
        $grade = "A / Sangat Memuaskan";
    } elseif ($nilai >= 75) {
        $grade = "B / Memuaskan";
    } elseif ($nilai >= 60) {
        $grade = "C / Cukup";
    } elseif ($nilai >= 40) {
        $grade = "D / Kurang";
    } else {
        $grade = "E / Sangat Kurang";
    }
    echo "<td>$grade</td>";
    // Predikat
    // Misalkan predikat sama dengan grade
    echo "<td>$grade</td>";
    echo "</tr>";
    echo "</table>";
}
?>
