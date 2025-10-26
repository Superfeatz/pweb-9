<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SMK Coding</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: 0 auto; }
        .form-container { border: 1px solid #ccc; padding: 20px; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h2>SMK Coding</h2>
        <div class="form-container">
            <h3>Formulir Pendaftaran</h3>
            <form action="proses.php" method="POST">
                <label>Nama:</label><br>
                <input type="text" name="nama" required><br><br>
                <label>Alamat:</label><br>
                <input type="text" name="alamat" required><br><br>
                <label>Jenis Kelamin:</label><br>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>
                <label>Agama:</label><br>
                <select name="agama" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select><br><br>
                <button type="submit" name="daftar">Daftar</button>
            </form>
        </div>
        <a href="list_siswa.php">Lihat Daftar Siswa</a>
    </div>
</body>
</html>