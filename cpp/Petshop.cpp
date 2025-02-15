#include <iostream>
#include <string>

using namespace std;

class Petshop {
private:
    int id;
    string nama;
    string kategori;
    int harga;

public:
    Petshop() : id(0), nama(""), kategori(""), harga(0) {}

    Petshop(int id, string nama, string kategori, int harga) {
        this->id = id;
        this->nama = nama;
        this->kategori = kategori;
        this->harga = harga;
    }

    void tampil() {
        cout << "ID: " << id << endl;
        cout << "Nama: " << nama << endl;
        cout << "Kategori: " << kategori << endl;
        cout << "Harga: " << harga << endl;
    }

    ~Petshop() {}
};