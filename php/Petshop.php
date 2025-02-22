<?php
class Petshop {
    private $id;
    private $nama;
    private $kategori;
    private $harga;
    private $foto;

    // Constructor
    public function __construct($id, $nama, $kategori, $harga, $foto) {
        $this->id = $id;
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->harga = $harga;
        $this->foto = $foto;
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getKategori() {
        return $this->kategori;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getFoto() {
        return $this->foto;
    }

    // Setter methods
    public function setId($id) {
        $this->id = $id;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setKategori($kategori) {
        $this->kategori = $kategori;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }
}

session_start();
if (!isset($_SESSION['database'])) {
    $_SESSION['database'] = [];
}
?>
