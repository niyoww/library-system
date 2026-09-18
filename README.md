# Library System

## Deskripsi

Library System adalah sistem informasi perpustakaan sederhana yang dibuat menggunakan Laravel. Project ini dibuat untuk memenuhi tugas individu Pertemuan 4 mengenai Laravel Environment Setup.

## Persyaratan

- PHP
- Composer
- MySQL
- Laravel

## Instalasi

### 1. Clone Repository

Clone repository dari GitHub menggunakan perintah berikut:

```bash
git clone https://github.com/niyoww/library-system.git
```

### 2. Masuk ke Folder Project

```bash
cd library-system
```

### 3. Install Dependencies

Install dependencies Laravel menggunakan Composer:

```bash
composer install
```

### 4. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`:

```bash
copy .env.example .env
```

### 5. Generate Application Key

Jalankan perintah berikut:

```bash
php artisan key:generate
```

### 6. Konfigurasi Database

Buat database MySQL dengan nama:

```text
library_system
```

Kemudian buka file `.env` dan sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library_system
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Menjalankan Migration

Jalankan migration untuk membuat tabel-tabel database:

```bash
php artisan migrate
```

### 8. Menjalankan Project

Jalankan server Laravel:

```bash
php artisan serve
```

Kemudian buka browser dan akses:

```text
http://127.0.0.1:8000
```

## Database

Project ini menggunakan MySQL dengan nama database `library_system`. Database terhubung dengan Laravel melalui konfigurasi pada file `.env`, sedangkan tabel-tabel database dibuat menggunakan Laravel Migration.

## Penulis

<<<<<<< HEAD
**Intania Amanda Syifa**
=======
**Intania Amanda Syifa**
>>>>>>> cf671124aa4eeeecd44b8f6ad6907d900140d7d3
