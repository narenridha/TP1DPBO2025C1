# TP1DPBO2025C1

Saya Narendra Ridha Baihaqi dengan NIM 2308882 mengerjakan Tugas Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## 🔥 **Pemrograman Berorientasi Objek (OOP) dalam C++, Java, Python, dan PHP**  
Pemrograman Berorientasi Objek (Object-Oriented Programming/OOP) adalah paradigma pemrograman yang berfokus pada konsep **objek** yang memiliki **atribut (data) dan metode (fungsi)**. Empat pilar utama OOP adalah:  

1. **Encapsulation** – Menyembunyikan data agar hanya dapat diakses melalui metode tertentu.  
2. **Inheritance** – Pewarisan atribut dan metode dari satu kelas ke kelas lain.  
3. **Polymorphism** – Kemampuan menggunakan satu metode dengan cara berbeda.  
4. **Abstraction** – Menyederhanakan kompleksitas dengan hanya menampilkan fitur yang penting.  

Berikut implementasi OOP pada masing-masing bahasa:  

---

### ©️ **1. OOP dalam C++**   

```cpp
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
    // Constructor default
    Petshop() : id(0), nama(""), kategori(""), harga(0) {}

    // Constructor dengan parameter
    Petshop(int id, string nama, string kategori, int harga) {
        this->id = id;
        this->nama = nama;
        this->kategori = kategori;
        this->harga = harga;
    }

    // Setter methods
    void setId(int id) {
        this->id = id;
    }

    void setNama(string nama) {
        this->nama = nama;
    }

    void setKategori(string kategori) {
        this->kategori = kategori;
    }

    void setHarga(int harga) {
        this->harga = harga;
    }

    // Getter methods
    int getId() {
        return id;
    }

    string getNama() {
        return nama;
    }

    string getKategori() {
        return kategori;
    }

    int getHarga() {
        return harga;
    }

    // Method untuk menampilkan data
    void tampil() {
        cout << "ID: " << id << endl;
        cout << "Nama: " << nama << endl;
        cout << "Kategori: " << kategori << endl;
        cout << "Harga: " << harga << endl;
    }

    // Destructor
    ~Petshop() {}
};
```
🫵 **Penjelasan:**  
- **Encapsulation:** Atribut `id`, `nama`, `kategori`, dan `harga` dibuat `private` agar tidak bisa diakses langsung dari luar kelas.  
- **Constructor:**  
  - **Default Constructor (`Petshop()`):** Menginisialisasi nilai atribut dengan nilai default (id = 0, nama = "", kategori = "", harga = 0).  
  - **Parameterized Constructor (`Petshop(int, string, string, int)`)**: Menginisialisasi objek dengan nilai yang diberikan sebagai parameter.  
- **Setter & Getter:**  
  - **Setter (`setId()`, `setNama()`, dll.)**: Mengubah nilai atribut.  
  - **Getter (`getId()`, `getNama()`, dll.)**: Mengambil nilai atribut.  
- **Method:**  
  - **`tampil()`** digunakan untuk mencetak informasi hewan peliharaan ke console.  
- **Destructor:** `~Petshop()` dipanggil ketika objek dihapus untuk membersihkan sumber daya (meskipun di sini tidak diperlukan secara eksplisit).
---

### ☕ **2. OOP dalam Java**    

```java
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
```
🫵 **Penjelasan:**  
- **Encapsulation:** Atribut `id`, `nama`, `kategori`, dan `harga` dibuat `private` agar hanya bisa diakses melalui method setter dan getter, menjaga keamanan data.  
- **Constructor:**  
  - **Default Constructor (`Petshop()`)**: Menginisialisasi atribut dengan nilai default.  
  - **Parameterized Constructor (`Petshop(int, String, String, int)`)**: Menginisialisasi objek dengan nilai yang diberikan saat pembuatan objek.  
- **Method:**  
  - **`tampil()`**: Menampilkan informasi produk ke layar.  
  - **`setData(int, String, String, int)`**: Mengubah semua data produk dalam satu pemanggilan.  
- **Setter & Getter:**  
  - **Setter (`setId()`, `setNama()`, dll.)**: Mengubah nilai atribut tertentu.  
  - **Getter (`getId()`, `getNama()`, dll.)**: Mengambil nilai atribut tertentu. 🚀  

---

### 🐍 **3. OOP dalam Python**    

```python
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
```
🫵 **Penjelasan:**  
- **Encapsulation:** Atribut `id`, `nama`, `kategori`, dan `harga` dibuat `private` dengan menggunakan metode getter dan setter untuk mengakses atau mengubah nilainya.  
- **Constructor:**  
  - **`__init__()`**: Konstruktor yang menginisialisasi objek dengan nilai default atau yang diberikan saat pembuatan objek.  
- **Method:**  
  - **`tampil()`**: Menampilkan informasi barang atau layanan dalam petshop ke layar.  
- **Getter & Setter:**  
  - **Getter (`get_id()`, `get_nama()`, dll.)**: Mengambil nilai atribut tertentu.  
  - **Setter (`set_id()`, `set_nama()`, dll.)**: Mengubah nilai atribut tertentu untuk menjaga enkapsulasi data. 🚀

---

### 🐘 **4. OOP dalam PHP**   

```php
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
```
🫵 **Penjelasan:**  
- **Encapsulation:** Atribut `private` (`id`, `nama`, `kategori`, `harga`, `foto`) hanya bisa diakses melalui metode getter dan setter, menjaga keamanan data.  
- **Constructor:**  
  - **`__construct()`**: Menginisialisasi objek dengan nilai yang diberikan saat pembuatan objek.  
- **Getter & Setter:**  
  - **Getter (`getId()`, `getNama()`, dll.)**: Mengambil nilai atribut tertentu.  
  - **Setter (`setId()`, `setNama()`, dll.)**: Mengubah nilai atribut tertentu untuk menjaga enkapsulasi data.  
- **Session Handling:**  
  - **`session_start()`**: Memulai sesi PHP.  
  - **`$_SESSION['database']`**: Menyimpan daftar objek `Petshop` agar bisa digunakan di seluruh sesi. 🚀
---

# **Petshop Management System**  
Program ini adalah sistem manajemen sederhana untuk petshop yang memungkinkan pengguna mengelola data barang atau layanan yang tersedia. Pada bahasa pemrograman **C++, Java, dan Python** memiliki fitur utama sebagai berikut:  

## **Fitur Utama**  
✅ **Menambahkan Data** → Pengguna dapat menambahkan informasi baru tentang barang atau layanan yang tersedia di petshop.  
✅ **Menampilkan Data** → Menampilkan semua data yang telah tersimpan dalam sistem.  
✅ **Menghapus Data** → Menghapus data berdasarkan indeks yang diinputkan oleh pengguna.  
✅ **Mengedit Data** → Memungkinkan pengguna untuk memperbarui informasi pada data yang sudah ada.  
✅ **Mencari Data** → Mencari data berdasarkan **nama** yang dimasukkan oleh pengguna.  

## **Cara Penggunaan**  
- Pilih menu dengan memasukkan angka sesuai fitur yang diinginkan:  
  - **1** → Tambah Data  
  - **2** → Tampilkan Data  
  - **3** → Hapus Data  
  - **4** → Ubah Data  
  - **5** → Cari Data berdasarkan Nama  
  - **0** → Keluar dari program  

Setiap bahasa pemrograman memiliki implementasi yang serupa, sehingga pengguna dapat memilih bahasa yang paling sesuai dengan kebutuhan mereka.  

## **Contoh Inputan**  
```
1
101
Kucing
Hewan_Peliharaan
500000
1
102
Anjing
Hewan_Peliharaan
700000
1
103
Hamster
Hewan_Peliharaan
150000
1
104
Burung
Hewan_Peliharaan
200000
1
105
Ikan
Hewan_Peliharaan
100000
2
3
1
4
2
999
Kelinci
Hewan_Peliharaan
300000
2
5
Kelinci
0
```
## Fitur Khusus (PHP)
Versi PHP memiliki tampilan berbasis **web** dan mendukung fitur CRUD (Create, Read, Update, Delete) dengan pengalaman pengguna yang lebih interaktif:

1. **Tombol "Tambah Data"** - Formulir untuk memasukkan data hewan baru (ID, Nama, Kategori, Harga, dan Foto).  
2. **Tampilan Data** - Menampilkan daftar data hewan yang telah dimasukkan dalam bentuk tabel.  
3. **Tombol "Edit"** - Mengedit informasi hewan yang telah dimasukkan.  
4. **Tombol "Delete"** - Menghapus data hewan dari database.  
5. **Tombol "Search"** - Fitur pencarian berdasarkan **nama hewan**.  

![Screenshot 2025-02-20 164919](https://github.com/user-attachments/assets/a89075cf-434f-4412-943c-2efc6f7b6a35)
