class Petshop:
    def __init__(self, id=0, nama="", kategori="", harga=0):
        self.id = id
        self.nama = nama
        self.kategori = kategori
        self.harga = harga

    def tampil(self):
        print(f"ID: {self.id}")
        print(f"Nama: {self.nama}")
        print(f"Kategori: {self.kategori}")
        print(f"Harga: {self.harga}")
