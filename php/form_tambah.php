<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title> <!-- Judul halaman -->
</head>
<body>

    <h2>Tambah Hewan Peliharaan</h2>

    <!-- Form untuk menambah data hewan peliharaan -->
    <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
        <label>ID: </label><input type="number" name="id" required><br> <!-- Input ID -->
        <label>Nama: </label><input type="text" name="nama" required><br> <!-- Input Nama -->
        <label>Kategori: </label><input type="text" name="kategori" required><br> <!-- Input Kategori -->
        <label>Harga: </label><input type="number" name="harga" required><br> <!-- Input Harga -->
        <label>Foto: </label><input type="file" name="foto" required><br> <!-- Input Foto -->
        <button type="submit">Simpan</button> <!-- Tombol untuk menyimpan data -->
    </form>

</body>
</html>

