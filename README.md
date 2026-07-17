# 📖 Aplikasi Blog Teknologi Berbasis Laravel

**Project Individu Mata Kuliah Pemrograman Web Lanjut (IF-3204)**  
Program Studi Teknik Informatika  
Fakultas Teknik  
Universitas Malikussaleh

## 📌 Deskripsi Aplikasi

Aplikasi Blog Teknologi Berbasis Laravel merupakan aplikasi web yang dikembangkan menggunakan framework **Laravel 12** dengan menerapkan arsitektur **Model View Controller (MVC)**. Aplikasi ini dirancang sebagai media publikasi artikel yang membahas berbagai topik teknologi, seperti pemrograman, pengembangan web, kecerdasan buatan (*Artificial Intelligence*), keamanan siber (*Cyber Security*), *Cloud Computing*, serta perkembangan teknologi informasi lainnya.

Aplikasi memiliki dua jenis pengguna, yaitu **Administrator** dan **Pengunjung**. Administrator merupakan pengguna yang telah melakukan autentikasi melalui halaman login sehingga memiliki hak akses untuk mengelola kategori dan artikel melalui dashboard. Pengunjung tidak perlu melakukan login untuk mengakses halaman publik dan dapat membaca artikel yang telah dipublikasikan, melakukan pencarian artikel berdasarkan judul, memfilter artikel berdasarkan kategori, serta memberikan komentar pada halaman detail artikel.

Dalam proses pengembangannya, aplikasi memanfaatkan berbagai fitur yang disediakan oleh Laravel, seperti **Laravel Breeze** untuk autentikasi pengguna, **Eloquent ORM** untuk pengelolaan basis data, **Migration** untuk pembuatan struktur database, **Blade Template Engine** untuk membangun antarmuka, serta **Bootstrap 5**, **CSS**, dan **Vite** untuk menghasilkan tampilan yang responsif dan mudah digunakan.

## ✨ Fitur Aplikasi

### 👨‍💼 Administrator

- Login dan Logout
- Dashboard Administrator
- CRUD Kategori
- CRUD Artikel
- Upload Thumbnail Artikel
- Mengubah status artikel (Draft /Published)

### 🌐 Pengunjung

- Melihat daftar artikel
- Membaca detail artikel
- Melakukan pencarian artikel berdasarkan judul
- Memfilter artikel berdasarkan kategori
- Memberikan komentar pada artikel

## 🛠️ Teknologi yang Digunakan

- Laravel 12
- PHP
- MySQL
- Laravel Breeze
- Eloquent ORM
- Blade Template Engine
- Bootstrap 5
- CSS
- Vite
- Visual Studio Code
- XAMPP
- Git
- GitHub

## 💻 Persyaratan Sistem

Sebelum menjalankan aplikasi, pastikan perangkat telah terpasang:

- PHP
- Composer
- Node.js dan NPM
- MySQL / MariaDB
- XAMPP
- Git

## 🚀 Cara Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/RaudatulAulia/blog-pribadi-laravel.git
```

Masuk ke folder project.

```bash
cd blog_pribadi
```

### 2. Install Dependency Laravel

```bash
composer install
```

### 3. Install Dependency Frontend

```bash
npm install
```

### 4. Salin File Environment

Windows

```bash
copy .env.example .env
```

Linux / macOS

```bash
cp .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Konfigurasi Database

Buat database baru dengan nama:

```text
blog_pribadi
```

Kemudian sesuaikan konfigurasi database pada file **.env**.

```env
DB_DATABASE=blog_pribadi
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Menjalankan Migration

```bash
php artisan migrate
```

### 8. Menjalankan Seeder

```bash
php artisan db:seed
```

Apabila ingin membuat ulang database beserta data awal aplikasi, jalankan:

```bash
php artisan migrate:fresh --seed
```

### 9. Menjalankan Vite

```bash
npm run dev
```

> Jalankan perintah ini pada terminal yang berbeda agar aset frontend dapat dikompilasi selama proses pengembangan.

### 10. Menjalankan Aplikasi

```bash
php artisan serve
```

Buka browser melalui alamat:
```text
http://127.0.0.1:8000
```
## 👤 Akun Demo

Gunakan akun berikut untuk mengakses dashboard aplikasi.

📧 **Email**

```text
admin@gmail.com
```
🔑 **Password**
```text
123456789
```

> Akun di atas digunakan untuk login sebagai administrator.

## 🗄️ Struktur Database

Aplikasi menggunakan empat tabel utama yang saling berelasi.

📁 **users**
Menyimpan data administrator yang dapat mengakses dashboard aplikasi.

📁 **categories**
Menyimpan data kategori artikel yang dibuat oleh administrator.

📁 **articles**
Menyimpan data artikel beserta judul, isi artikel, thumbnail, status publikasi, dan kategori artikel.

📁 **comments**
Menyimpan komentar yang diberikan oleh pengunjung pada setiap artikel.

## 👩‍💻 Author

**Raudatul Aulia**

Program Studi Teknik Informatika
Fakultas Teknik
Universitas Malikussaleh