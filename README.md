## Repository Pemrograman Web Lanjut (PWL)

Repositori ini digunakan sebagai tempat belajar dan mengerjakan tugas–tugas mata kuliah **Pemrograman Web Lanjut**.  
Setiap folder di dalam repositori ini berisi latihan atau tugas terpisah yang dapat dijalankan secara mandiri.

---

## Struktur Project

- **`latihan_1`**  
  Latihan dasar pemrograman berorientasi objek (OOP) menggunakan PHP untuk mengelola data **Mahasiswa**.

  - **File utama**
    - `index.php`  
      Script utama yang:
      - Melakukan `include` ke `Mahasiswa.php`
      - Membuat beberapa objek `Mahasiswa`
      - Mengisi data mahasiswa (NIM, Nama, Program Studi)
      - Menampilkan data mahasiswa dengan `print_r` dan dengan method `showData()`
    - `Mahasiswa.php`  
      Berisi class `Mahasiswa` dengan properti:
      - `nim`
      - `nama`
      - `programStudi`  
      Serta method:
      - `setData($nim, $nama, $programStudi)` untuk mengisi data
      - `getData()` untuk mengambil data dalam bentuk array asosiatif
      - `addNewData($nim, $nama, $programStudi)` untuk membuat data baru dalam bentuk array
      - `showData()` untuk menampilkan data ke halaman web

---

## Cara Menjalankan Project

1. Pastikan web server lokal (misalnya **Laragon**, XAMPP, atau sejenisnya) sudah berjalan.
2. Letakkan folder repo ini di dalam direktori web server Anda, misalnya:
   - `C:\laragon\www\PWL`
3. Akses melalui browser dengan URL:
   - **`http://localhost/PWL/latihan_1/index.php`**

---

## URL Project di Repository

- **Latihan 1 – Class Mahasiswa (OOP PHP)**  
  Path di repository: `latihan_1/index.php`  
  URL lokal (contoh, jika menggunakan Laragon):  
  - `http://localhost/PWL/latihan_1/index.php`

Ke depannya, setiap tugas/latihan baru dapat ditambahkan sebagai folder baru (misalnya `latihan_2`, `tugas_1`, dan sebagainya) dengan struktur dan URL yang serupa.


