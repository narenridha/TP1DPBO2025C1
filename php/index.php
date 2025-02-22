<?php
// Mengimpor file 'Petshop.php' yang berisi kelas Petshop
include 'Petshop.php';

// Mengambil input pencarian dari URL (jika ada) dan mengonversinya ke huruf kecil
$search = isset($_GET['search']) ? strtolower($_GET['search']) : '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop Management</title>
    <link rel="stylesheet" href="style.css"> <!-- Menghubungkan file CSS -->
</head>
<body>

    <h2>Daftar Hewan Peliharaan</h2>

    <!-- Form pencarian data berdasarkan nama hewan -->
    <form method="GET">
        <input type="text" name="search" placeholder="Cari Nama Hewan..." value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Cari</button>
    </form>

    <!-- Tombol untuk menambah data baru -->
    <a href="form_tambah.php">Tambah Data</a>

    <!-- Tabel untuk menampilkan daftar hewan peliharaan -->
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
        // Menyaring data berdasarkan input pencarian
        $filteredData = array_filter($_SESSION['database'], function ($pet) use ($search) {
            return empty($search) || strpos(strtolower($pet->nama), $search) !== false;
        });

        // Jika tidak ada data yang sesuai, tampilkan pesan
        if (empty($filteredData)) {
            echo "<tr><td colspan='6'>Tidak ada data ditemukan.</td></tr>";
        } else {
            // Menampilkan setiap data yang sudah difilter
            foreach ($filteredData as $index => $pet) :
        ?>
            <tr>
                <td><?= $pet->id ?></td>
                <td><?= $pet->nama ?></td>
                <td><?= $pet->kategori ?></td>
                <td><?= $pet->harga ?></td>
                <td><img src="uploads/<?= $pet->foto ?>" width="80"></td>
                <td>
                    <!-- Tombol Edit dan Hapus Data -->
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
