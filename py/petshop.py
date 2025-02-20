# Mendefinisikan kelas Petshop untuk merepresentasikan data barang atau layanan dalam petshop
class Petshop:
    # Konstruktor untuk menginisialisasi atribut dengan nilai default
    def __init__(self, id=0, nama="", kategori="", harga=0):
        self.id = id  # ID unik untuk setiap item di petshop
        self.nama = nama  # Nama item (misalnya makanan hewan, mainan, atau layanan)
        self.kategori = kategori  # Kategori item (misalnya makanan, aksesoris, layanan)
        self.harga = harga  # Harga item dalam satuan mata uang

    # Metode untuk menampilkan informasi item di petshop
    def tampil(self):
        print(f"ID: {self.id}")
        print(f"Nama: {self.nama}")
        print(f"Kategori: {self.kategori}")
        print(f"Harga: {self.harga}")

    # Getter dan Setter untuk ID
    def get_id(self):
        return self.id  # Mengembalikan nilai ID

    def set_id(self, id):
        self.id = id  # Mengatur nilai ID

    # Getter dan Setter untuk Nama
    def get_nama(self):
        return self.nama  # Mengembalikan nilai nama item

    def set_nama(self, nama):
        self.nama = nama  # Mengatur nama item

    # Getter dan Setter untuk Kategori
    def get_kategori(self):
        return self.kategori  # Mengembalikan nilai kategori item

    def set_kategori(self, kategori):
        self.kategori = kategori  # Mengatur kategori item

    # Getter dan Setter untuk Harga
    def get_harga(self):
        return self.harga  # Mengembalikan nilai harga item

    def set_harga(self, harga):
        self.harga = harga  # Mengatur harga item
