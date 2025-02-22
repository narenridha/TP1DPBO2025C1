<?php
// Mengimpor file 'Petshop.php' yang berisi kelas Petshop
include 'Petshop.php';

// Mengambil data melalui metode post
$index = $_POST['index'];
$id = $_POST['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$foto = $_FILES['foto'];

// Jika ada foto baru, upload
if ($foto['size'] > 0) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($foto["name"]);
    move_uploaded_file($foto["tmp_name"], $target_file);
    $_SESSION['database'][$index]->foto = basename($foto["name"]);
}

// Update data
$_SESSION['database'][$index]->id = $id;
$_SESSION['database'][$index]->nama = $nama;
$_SESSION['database'][$index]->kategori = $kategori;
$_SESSION['database'][$index]->harga = $harga;

header("Location: index.php");
?>
