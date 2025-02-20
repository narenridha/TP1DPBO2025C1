<?php
include 'Petshop.php';

$search = isset($_GET['search']) ? strtolower($_GET['search']) : '';
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

    <form method="GET">
        <input type="text" name="search" placeholder="Cari Nama Hewan..." value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Cari</button>
    </form>

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

        <?php
        $filteredData = array_filter($_SESSION['database'], function ($pet) use ($search) {
            return empty($search) || strpos(strtolower($pet->nama), $search) !== false;
        });

        if (empty($filteredData)) {
            echo "<tr><td colspan='6'>Tidak ada data ditemukan.</td></tr>";
        } else {
            foreach ($filteredData as $index => $pet) :
        ?>
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
        <?php
            endforeach;
        }
        ?>
    </table>

</body>
</html>
