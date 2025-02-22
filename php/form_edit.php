<?php
include 'Petshop.php'; // Memasukkan file class Petshop

// Mengambil indeks data yang akan diedit dari URL
$index = $_GET['index'];

// Mengambil data hewan peliharaan dari session berdasarkan indeks
$pet = $_SESSION['database'][$index];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title> <!-- Judul halaman -->
</head>
<body>

    <h2>Edit Hewan Peliharaan</h2>

    <!-- Form untuk mengedit data hewan peliharaan -->
    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="index" value="<?= $index ?>"> <!-- Menyimpan indeks data -->
        <label>ID: </label><input type="number" name="id" value="<?= $pet->id ?>" required><br> <!-- Input ID -->
        <label>Nama: </label><input type="text" name="nama" value="<?= $pet->nama ?>" required><br> <!-- Input Nama -->
        <label>Kategori: </label><input type="text" name="kategori" value="<?= $pet->kategori ?>" required><br> <!-- Input Kategori -->
        <label>Harga: </label><input type="number" name="harga" value="<?= $pet->harga ?>" required><br> <!-- Input Harga -->
        <label>Foto: </label><input type="file" name="foto"><br> <!-- Input Foto (opsional) -->
        <button type="submit">Simpan Perubahan</button> <!-- Tombol untuk menyimpan perubahan -->
    </form>

</body>
</html>
