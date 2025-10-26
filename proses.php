<?php
if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    // Simpan data ke file (contoh sederhana, bisa diganti dengan database)
    $data = "$nama|$alamat|$jenis_kelamin|$agama\n";
    file_put_contents('data_siswa.txt', $data, FILE_APPEND);

    header("Location: index.php");
    exit();
}
?>