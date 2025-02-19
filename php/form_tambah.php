<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>

    <h2>Tambah Hewan Peliharaan</h2>
    <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
        <label>ID: </label><input type="number" name="id" required><br>
        <label>Nama: </label><input type="text" name="nama" required><br>
        <label>Kategori: </label><input type="text" name="kategori" required><br>
        <label>Harga: </label><input type="number" name="harga" required><br>
        <label>Foto: </label><input type="file" name="foto" required><br>
        <button type="submit">Simpan</button>
    </form>

</body>
</html>
