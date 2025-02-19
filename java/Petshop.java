public class Petshop {
    private int id;
    private String nama;
    private String kategori;
    private int harga;

    public Petshop() {
        this.id = 0;
        this.nama = "";
        this.kategori = "";
        this.harga = 0;
    }

    public Petshop(int id, String nama, String kategori, int harga) {
        this.id = id;
        this.nama = nama;
        this.kategori = kategori;
        this.harga = harga;
    }

    public void tampil() {
        System.out.println("ID: " + id);
        System.out.println("Nama: " + nama);
        System.out.println("Kategori: " + kategori);
        System.out.println("Harga: " + harga);
    }

    public void setData(int id, String nama, String kategori, int harga) {
        this.id = id;
        this.nama = nama;
        this.kategori = kategori;
        this.harga = harga;
    }
}
