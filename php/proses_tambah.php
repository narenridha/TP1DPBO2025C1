<?php
// Mengimpor file 'Petshop.php' yang berisi kelas Petshop
include 'Petshop.php';

// Mengambil data melalui metode post
$id = $_POST['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$foto = $_FILES['foto'];

// Upload foto
$target_dir = "uploads/";
$target_file = $target_dir . basename($foto["name"]);
move_uploaded_file($foto["tmp_name"], $target_file);

// Tambah ke database
$pet = new Petshop($id, $nama, $kategori, $harga, basename($foto["name"]));
$_SESSION['database'][] = $pet;

header("Location: index.php");
?>
