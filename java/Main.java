import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        ArrayList<Petshop> database = new ArrayList<>();
        int cek;

        System.out.println("Menu");
        System.out.println("0. Keluar");
        System.out.println("1. Tambah Data");
        System.out.println("2. Tampilkan Data");
        System.out.println("3. Hapus Data");
        System.out.println("4. Ubah Data");

        do {
            cek = sc.nextInt();

            if (cek == 1) {
                System.out.println("Tambah Data");
                System.out.print("ID: ");
                int id = sc.nextInt();
                System.out.print("Nama: ");
                String nama = sc.next();
                System.out.print("Kategori: ");
                String kategori = sc.next();
                System.out.print("Harga: ");
                int harga = sc.nextInt();
                database.add(new Petshop(id, nama, kategori, harga));
                System.out.println("Data berhasil ditambahkan!");

            } else if (cek == 2) {
                if (database.isEmpty()) {
                    System.out.println("Tidak ada data yang tersedia.");
                } else {
                    System.out.println("Tampilkan Data");
                    for (int i = 0; i < database.size(); i++) {
                        System.out.println("Data ke-" + i + ":");
                        database.get(i).tampil();
                        System.out.println("-----------------");
                    }
                }

            } else if (cek == 3) {
                System.out.print("Masukkan indeks data yang ingin dihapus: ");
                int hapus = sc.nextInt();

                if (hapus < 0 || hapus >= database.size()) {
                    System.out.println("Indeks tidak valid!");
                } else {
                    database.remove(hapus);
                    System.out.println("Data berhasil dihapus dan posisi diperbarui!");
                }

            } else if (cek == 4) {
                System.out.print("Masukkan indeks data yang ingin diubah: ");
                int ubah = sc.nextInt();

                if (ubah < 0 || ubah >= database.size()) {
                    System.out.println("Indeks tidak valid!");
                } else {
                    System.out.print("ID: ");
                    int id = sc.nextInt();
                    System.out.print("Nama: ");
                    String nama = sc.next();
                    System.out.print("Kategori: ");
                    String kategori = sc.next();
                    System.out.print("Harga: ");
                    int harga = sc.nextInt();
                    database.get(ubah).setData(id, nama, kategori, harga);
                    System.out.println("Data berhasil diperbarui!");
                }

            } else if (cek == 0) {
                System.out.println("Bubayyy.");
            } else {
                System.out.println("Pilihan tidak valid, silakan coba lagi!");
            }

        } while (cek != 0);

        sc.close();
    }
}
