# NAIK - Marketplace

## Deskripsi Sistem

NAIK (Marketplace Sepatu) merupakan website marketplace yang menyediakan fitur autentikasi pengguna, manajemen produk, pencarian produk, simulasi proses transaksi, serta dashboard administrator untuk mengelola data produk.

---

## Fitur Utama

### 1. Login System

Sistem autentikasi pengguna telah dilengkapi dengan fitur keamanan sebagai berikut:

* **Login dan Logout** untuk pengguna.
* **Remember Me** menggunakan cookie agar pengguna tetap login pada kunjungan berikutnya.
* Data cookie disimpan dalam bentuk **hash** sehingga lebih aman dan tidak menyimpan informasi sensitif secara langsung.
* Password pengguna disimpan menggunakan metode **enkripsi/hash password** sehingga tidak tersimpan dalam bentuk plaintext pada database.

---

### 2. Hak Akses (Role Access)

Website menerapkan sistem hak akses berdasarkan peran pengguna.

#### Admin

Admin memiliki akses penuh terhadap:

* Dashboard Admin
* Menambah produk
* Mengubah data produk
* Menghapus produk
* Melihat seluruh data produk

#### User

User dapat:

* Melihat daftar produk
* Mencari produk
* Menambahkan produk ke keranjang
* Melakukan simulasi transaksi

---

### 3. Search Bar

Fitur pencarian produk menggunakan query SQL dengan operator **LIKE**.

Contoh:

```sql
SELECT * FROM produk
WHERE nama LIKE '%keyword%';
```

Fitur ini memungkinkan pengguna mencari produk berdasarkan kata kunci yang terdapat pada nama produk.

---

### 4. Simulasi Alur Pembayaran

Website menyediakan simulasi proses transaksi marketplace yang terdiri dari beberapa tahapan:

1. Pengguna memilih produk.
2. Produk dimasukkan ke dalam keranjang (cart).
3. Pengguna memilih metode pembayaran.
4. Sistem menampilkan simulasi pembayaran.
5. Setelah pembayaran berhasil, sistem menampilkan simulasi proses pengiriman.
6. Pengguna dapat melihat status tracking pengiriman hingga pesanan diterima.

Alur transaksi:

```
Pilih Produk
      ↓
Tambah ke Keranjang
      ↓
Pilih Metode Pembayaran
      ↓
Simulasi Pembayaran
      ↓
Simulasi Pengiriman
      ↓
Tracking Pesanan
```

---

### 5. CRUD Produk

Fitur CRUD (Create, Read, Update, Delete) tersedia pada Dashboard Admin.

#### Create

Admin dapat menambahkan produk baru ke dalam sistem.

#### Read

Admin dapat melihat seluruh data produk yang tersimpan.

#### Update

Admin dapat mengubah informasi produk seperti:

* Nama produk
* Harga
* Deskripsi
* Gambar produk

#### Delete

Admin dapat menghapus produk yang tidak lagi tersedia atau tidak digunakan.

---

## Teknologi yang Digunakan

* PHP Native
* MySQL
* HTML
* CSS
* JavaScript
* Cookie Authentication
* MVC Architecture

---

### 6. Arsitektur MVC (Model-View-Controller)

Website NAIK dikembangkan menggunakan pola arsitektur **Model-View-Controller (MVC)** untuk memisahkan logika aplikasi, tampilan, dan pengelolaan data sehingga kode menjadi lebih terstruktur, mudah dipelihara, dan mudah dikembangkan.

#### Model

Berfungsi untuk mengelola data dan berinteraksi dengan database, seperti proses mengambil, menambah, mengubah, dan menghapus data produk.

#### View

Berfungsi untuk menampilkan antarmuka pengguna (user interface), seperti halaman beranda, detail produk, keranjang, dan dashboard admin.

#### Controller

Berfungsi sebagai penghubung antara Model dan View. Controller menerima request dari pengguna, memproses logika aplikasi, kemudian menentukan tampilan yang akan ditampilkan.

#### Implementasi URL Friendly

Dengan penerapan arsitektur MVC, website menggunakan sistem routing sehingga menghasilkan **URL yang lebih rapi dan mudah dibaca (clean URL)**.

Contoh:

URL tanpa MVC:

```text
index.php?page=detail&id=5
```

URL dengan MVC:

```text
produk/detail/5
```

Keuntungan penggunaan URL friendly:

* Lebih mudah dibaca dan dipahami pengguna.
* Meningkatkan estetika serta profesionalitas website.
* Mempermudah pengelolaan routing halaman.
* Lebih mendukung optimasi mesin pencari (SEO).

Penerapan MVC pada website NAIK juga memudahkan pengembangan fitur baru karena setiap komponen memiliki tanggung jawab yang jelas dan terpisah.




## Tujuan Pengembangan

Website NAIK dibuat sebagai simulasi marketplace sepatu yang menerapkan konsep autentikasi pengguna, pengelolaan produk, pencarian data menggunakan SQL LIKE, serta simulasi transaksi dan pengiriman barang dalam lingkungan web berbasis PHP.
