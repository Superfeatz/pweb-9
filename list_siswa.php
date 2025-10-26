<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: 0 auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Siswa yang sudah mendaftar</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Aksi</th>
            </tr>
            <?php
            $data = file('data_siswa.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $no = 1;
            foreach ($data as $index => $row) {
                list($nama, $alamat, $jenis_kelamin, $agama) = explode('|', $row);
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$nama</td>";
                echo "<td>$alamat</td>";
                echo "<td>$jenis_kelamin</td>";
                echo "<td>$agama</td>";
                echo "<td><a href='edit.php?index=$index'>Edit</a> | <a href='hapus.php?index=$index' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a></td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </table>
        <a href="index.php">Kembali</a>
    </div>
</body>
</html>