#include "Petshop.cpp"

int main() {
    int cek = 0, database = 0;
    Petshop* objekPetshop = new Petshop[50];

    cout << "Menu" << endl;
    cout << "0. Keluar" << endl;
    cout << "1. Tambah Data" << endl;
    cout << "2. Tampilkan Data" << endl;
    cout << "3. Hapus Data" << endl;
    cout << "4. Ubah Data" << endl;

    do {
        cin >> cek;

        if (cek == 1) {  
            // Tambah Data
            cout << "Tambah Data" << endl;
            cout << "ID: ";
            int id;
            cin >> id;
            cout << "Nama: ";
            string nama;
            cin >> nama;
            cout << "Kategori: ";
            string kategori;
            cin >> kategori;
            cout << "Harga: ";
            int harga;
            cin >> harga;
            objekPetshop[database] = Petshop(id, nama, kategori, harga);
            database++;
            cout << "Data berhasil ditambahkan!" << endl;

        } else if (cek == 2) {  
            // Tampilkan Data
            if (database == 0) {
                cout << "Tidak ada data yang tersedia." << endl;
            } else {
                cout << "Tampilkan Data" << endl;
                for (int i = 0; i < database; i++) {
                    cout << "Data ke-" << i << ":" << endl;
                    objekPetshop[i].tampil();
                    cout << "-----------------" << endl;
                }
            }

        } else if (cek == 3) {  
            // Hapus Data
            cout << "Masukkan indeks data yang ingin dihapus: ";
            int hapus;
            cin >> hapus;

            if (hapus < 0 || hapus >= database) {
                cout << "Indeks tidak valid!" << endl;
            } else {
                for (int i = hapus; i < database - 1; i++) {
                    objekPetshop[i] = objekPetshop[i + 1]; // Geser elemen ke depan
                }
                database--;  // Kurangi jumlah data
                cout << "Data berhasil dihapus dan posisi diperbarui!" << endl;
            }

        } else if (cek == 4) {  
            // Ubah Data
            cout << "Masukkan indeks data yang ingin diubah: ";
            int ubah;
            cin >> ubah;

            if (ubah < 0 || ubah >= database) {
                cout << "Indeks tidak valid!" << endl;
            } else {
                cout << "ID: ";
                int id;
                cin >> id;
                cout << "Nama: ";
                string nama;
                cin >> nama;
                cout << "Kategori: ";
                string kategori;
                cin >> kategori;
                cout << "Harga: ";
                int harga;
                cin >> harga;
                objekPetshop[ubah] = Petshop(id, nama, kategori, harga);
                cout << "Data berhasil diperbarui!" << endl;
            }

        } else if (cek == 0) {  
            cout << "Bubayyy." << endl;
        } else {
            cout << "Pilihan tidak valid, silakan coba lagi!" << endl;
        }

    } while (cek != 0);

    delete[] objekPetshop;  // Bebaskan memori
    return 0;
}
