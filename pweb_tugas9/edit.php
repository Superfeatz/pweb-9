
<?php
if (isset($_GET['index']) && isset($_POST['update'])) {
    $index = $_POST['index'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    $data = file('data_siswa.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $data[$index] = "$nama|$alamat|$jenis_kelamin|$agama";
    file_put_contents('data_siswa.txt', implode("\n", $data));
    header("Location: list_siswa.php");
    exit();
}

$index = $_GET['index'];
$data = file('data_siswa.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
list($nama, $alamat, $jenis_kelamin, $agama) = explode('|', $data[$index]);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: 0 auto; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Data Siswa</h2>
        <form action="edit.php" method="POST">
            <input type="hidden" name="index" value="<?php echo $index; ?>">
            <label>Nama:</label><br>
            <input type="text" name="nama" value="<?php echo $nama; ?>" required><br><br>
            <label>Alamat:</label><br>
            <input type="text" name="alamat" value="<?php echo $alamat; ?>" required><br><br>
            <label>Jenis Kelamin:</label><br>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo $jenis_kelamin == 'Laki-laki' ? 'checked' : ''; ?>> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo $jenis_kelamin == 'Perempuan' ? 'checked' : ''; ?>> Perempuan<br><br>
            <label>Agama:</label><br>
            <select name="agama" required>
                <option value="Islam" <?php echo $agama == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                <option value="Kristen" <?php echo $agama == 'Kristen' ? 'selected' : ''; ?>>Kristen</option>
                <option value="Hindu" <?php echo $agama == 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                <option value="Buddha" <?php echo $agama == 'Buddha' ? 'selected' : ''; ?>>Buddha</option>
                <option value="Konghucu" <?php echo $agama == 'Konghucu' ? 'selected' : ''; ?>>Konghucu</option>
            </select><br><br>
            <button type="submit" name="update">Update</button>
        </form>
        <a href="list_siswa.php">Kembali</a>
    </div>
</body>
</html>