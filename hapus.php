<?php
if (isset($_GET['index'])) {
    $index = $_GET['index'];
    $data = file('data_siswa.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    unset($data[$index]);
    file_put_contents('data_siswa.txt', implode("\n", $data));
}
header("Location: list_siswa.php");
exit();
?>