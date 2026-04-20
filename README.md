#  Tanaman Hias - Toko Online

Aplikasi toko online berbasis web untuk penjualan tanaman hias, dibangun menggunakan Laravel 12.

##  Teknologi yang Digunakan
- **Framework:** Laravel 12
- **Bahasa:** PHP 8.x
- **Database:** MySQL


## ✨ Fitur
- Manajemen data produk tanaman hias (CRUD)
- Tampilan katalog produk

##  Prosedur Instalasi

### Requirements
- PHP >= 8.2
- Composer
- MySQL


### Langkah Instalasi

1. Clone repository ini
```bash
   git clone https://github.com/cahyo14/tanaman_hias.git
```

2. Masuk ke folder project
```bash
   cd tanaman_hias
```

3. Install dependencies PHP
```bash
   composer install
```

4. Install dependencies frontend
```bash
   npm install && npm run build
```

5. Copy file environment
```bash
   cp .env.example .env
```

6. Generate application key
```bash
   php artisan key:generate
```

7. Setting database di file `.env`
```env
   DB_DATABASE=tanaman_hias
   DB_USERNAME=root
   DB_PASSWORD=
```

8. Jalankan migrasi database
```bash
   php artisan migrate
```

9. Jalankan project
```bash
   php artisan serve
```

10. Buka di browser: `http://127.0.0.1:8000`

