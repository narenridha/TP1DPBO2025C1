<?php
include 'Petshop.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Daftar Hewan Peliharaan</h2>
    <a href="form_tambah.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($_SESSION['database'] as $index => $pet) : ?>
            <tr>
                <td><?= $pet->id ?></td>
                <td><?= $pet->nama ?></td>
                <td><?= $pet->kategori ?></td>
                <td><?= $pet->harga ?></td>
                <td><img src="uploads/<?= $pet->foto ?>" width="80"></td>
                <td>
                    <a href="form_edit.php?index=<?= $index ?>">Edit</a> |
                    <a href="hapus.php?index=<?= $index ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
