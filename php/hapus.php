<?php
include 'Petshop.php';

$index = $_GET['index'];
unset($_SESSION['database'][$index]);

// Reindex array setelah menghapus elemen
$_SESSION['database'] = array_values($_SESSION['database']);

header("Location: index.php");
?>
