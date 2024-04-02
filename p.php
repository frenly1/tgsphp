<th><h2>MAHASISWA</h2></th>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <style>
        /* Styling untuk formulir */
form {
    margin-bottom: 20px;
}

input[type="text"],
select,
input[type="number"] {
    margin-bottom: 10px;
    padding: 5px;
    width: 200px;
}

select {
    width: 220px;
}

input[type="submit"],
button[type="submit"] {
    padding: 8px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover,
button[type="submit"]:hover {
    background-color: #45a049;
}

/* Styling untuk tabel */
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}


    </style>
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        Universitas:
        <select name="universitas">
            <option value="Universitas">Universitas </option>
            <option value="Universitas Indonesia">Universitas Indonesia</option>
            <option value="universitas itera">universitas itera</option>
            <option value="Universitas jember">jember</option>
            <option value="universitas labuhan batu">universitas labuhan batu</option>
            <option value="Universitas unsrat">Universitas unsrat</option>
            <!-- Tambahkan universitas lainnya di sini sesuai kebutuhan -->
        </select><br>
        Mata Kuliah:
        <select name="kuliah">
            <option value="HTML">HTML</option>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="LARAVEL">LARAVEL</option>
            <option value="DATA ANALYSIS">DATA ANALYSIS</option>
        </select><br>
        Nilai: <input type="number" name="nilai"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <!-- Output tabel -->
    <?php
    if (isset($ns1)) {
        echo "<h2>Daftar Nilai Ujian Mahasiswa</h2>";
        echo "<table>";
        echo "<tr><th>NIM</th><th>Nama</th>iversitas</th><th>Mata Kuliah</th><th>Nilai</th><th>Status</th><th>Grade</th><th>Predikat</th></tr>";
        echo "<tr>";
        echo '<td>'. $ns1->nim .'</td>';
        echo '<td>'. $ns1->nama .'</td>';
        echo '<td>'. $ns1->universitas .'</td>';
        echo '<td>'. $ns1->matkul .'</td>';
        echo '<td>'. $ns1->nilai .'</td>'; // Menampilkan nilai
        echo '<td>'. $ns1->getStatus() .'</td>'; // Menampilkan status
        echo '<td>'. $ns1->getGrade() .'</td>'; // Menampilkan grade
        echo '<td>'. $ns1->getPredikat() .'</td>'; // Menampilkan predikat
        echo "</tr>";
        echo "</table>";
    }
    ?>

    <!-- Form reset -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <button type="submit" name="reset">Kembali</button>
    </form>
</body>
</html>