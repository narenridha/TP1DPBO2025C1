from petshop import Petshop

def main():
    database = []
    print("Menu")
    print("0. Keluar")
    print("1. Tambah Data")
    print("2. Tampilkan Data")
    print("3. Hapus Data")
    print("4. Ubah Data")

    while True:
        try:
            cek = int(input("Pilih menu: "))

            if cek == 1:
                print("Tambah Data")
                id = int(input("ID: "))
                nama = input("Nama: ")
                kategori = input("Kategori: ")
                harga = int(input("Harga: "))
                database.append(Petshop(id, nama, kategori, harga))
                print("Data berhasil ditambahkan!")

            elif cek == 2:
                if not database:
                    print("Tidak ada data yang tersedia.")
                else:
                    print("Tampilkan Data")
                    for i, item in enumerate(database):
                        print(f"Data ke-{i}:")
                        item.tampil()
                        print("-----------------")

            elif cek == 3:
                hapus = int(input("Masukkan indeks data yang ingin dihapus: "))

                if hapus < 0 or hapus >= len(database):
                    print("Indeks tidak valid!")
                else:
                    del database[hapus]
                    print("Data berhasil dihapus dan posisi diperbarui!")

            elif cek == 4:
                ubah = int(input("Masukkan indeks data yang ingin diubah: "))

                if ubah < 0 or ubah >= len(database):
                    print("Indeks tidak valid!")
                else:
                    id = int(input("ID: "))
                    nama = input("Nama: ")
                    kategori = input("Kategori: ")
                    harga = int(input("Harga: "))
                    database[ubah] = Petshop(id, nama, kategori, harga)
                    print("Data berhasil diperbarui!")

            elif cek == 0:
                print("Bubayyy.")
                break

            else:
                print("Pilihan tidak valid, silakan coba lagi!")

        except ValueError:
            print("Input tidak valid! Harap masukkan angka.")

if __name__ == "__main__":
    main()
