<?php
// Mengimpor file 'Petshop.php' yang berisi kelas Petshop
include 'Petshop.php';

// Mengambil nilai index, kemudian memasukan kedalam index
$index = $_GET['index'];
unset($_SESSION['database'][$index]);

// Reindex array setelah menghapus elemen
$_SESSION['database'] = array_values($_SESSION['database']);

// Kemabali kehalaman index.php
header("Location: index.php");
?>
