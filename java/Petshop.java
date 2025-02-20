// Kelas Petshop merepresentasikan data produk hewan peliharaan di toko
public class Petshop {
    // Atribut private untuk menyimpan data produk
    private int id;         // ID unik untuk setiap produk
    private String nama;    // Nama produk (misalnya makanan hewan, aksesoris, dll.)
    private String kategori; // Kategori produk (misalnya makanan, mainan, kandang)
    private int harga;      // Harga produk dalam satuan mata uang

    // Konstruktor tanpa parameter (default)
    public Petshop() {
        this.id = 0;
        this.nama = "";
        this.kategori = "";
        this.harga = 0;
    }

    // Konstruktor dengan parameter untuk menginisialisasi objek dengan nilai tertentu
    public Petshop(int id, String nama, String kategori, int harga) {
        this.id = id;
        this.nama = nama;
        this.kategori = kategori;
        this.harga = harga;
    }

    // Method untuk menampilkan informasi produk ke layar
    public void tampil() {
        System.out.println("ID: " + id);
        System.out.println("Nama: " + nama);
        System.out.println("Kategori: " + kategori);
        System.out.println("Harga: " + harga);
    }

    // Method untuk mengubah data produk yang sudah ada
    public void setData(int id, String nama, String kategori, int harga) {
        this.id = id;
        this.nama = nama;
        this.kategori = kategori;
        this.harga = harga;
    }

    // Getter untuk mendapatkan nilai ID produk
    public int getId() {
        return id;
    }

    // Getter untuk mendapatkan nama produk
    public String getNama() {
        return nama;
    }

    // Getter untuk mendapatkan kategori produk
    public String getKategori() {
        return kategori;
    }

    // Getter untuk mendapatkan harga produk
    public int getHarga() {
        return harga;
    }

    // Setter untuk mengubah ID produk
    public void setId(int id) {
        this.id = id;
    }

    // Setter untuk mengubah nama produk
    public void setNama(String nama) {
        this.nama = nama;
    }

    // Setter untuk mengubah kategori produk
    public void setKategori(String kategori) {
        this.kategori = kategori;
    }

    // Setter untuk mengubah harga produk
    public void setHarga(int harga) {
        this.harga = harga;
    }
}
