<?php
class Petshop {
    public $id;
    public $nama;
    public $kategori;
    public $harga;
    public $foto;

    public function __construct($id, $nama, $kategori, $harga, $foto) {
        $this->id = $id;
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->harga = $harga;
        $this->foto = $foto;
    }
}

session_start();
if (!isset($_SESSION['database'])) {
    $_SESSION['database'] = [];
}
?>
