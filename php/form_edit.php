<?php
include 'Petshop.php';
$index = $_GET['index'];
$pet = $_SESSION['database'][$index];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>

    <h2>Edit Hewan Peliharaan</h2>
    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="index" value="<?= $index ?>">
        <label>ID: </label><input type="number" name="id" value="<?= $pet->id ?>" required><br>
        <label>Nama: </label><input type="text" name="nama" value="<?= $pet->nama ?>" required><br>
        <label>Kategori: </label><input type="text" name="kategori" value="<?= $pet->kategori ?>" required><br>
        <label>Harga: </label><input type="number" name="harga" value="<?= $pet->harga ?>" required><br>
        <label>Foto: </label><input type="file" name="foto"><br>
        <button type="submit">Simpan Perubahan</button>
    </form>

</body>
</html>
